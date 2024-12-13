// Fetch tasks from the database using jQuery AJAX
function fetchTasks() {
  return $.get('api/fetch_tasks.php', function (data) {
    return JSON.parse(data)
  }).fail(function (error) {
    alert('Failed to fetch tasks: ' + error)
  })
}

// Export tasks as PDF
function exportToPDF(tasks) {
  const { jsPDF } = window.jspdf // Get jsPDF from the window
  const doc = new jsPDF()
  doc.setFontSize(16)
  doc.text('Tasks List', 14, 16)

  // Table headers
  doc.setFontSize(12)
  doc.text('Task ID', 14, 24)
  doc.text('Task Name', 40, 24)
  doc.text('Due Date', 100, 24)
  doc.text('Status', 160, 24)
  doc.text('Created At', 200, 24)

  let y = 30
  tasks.forEach((task) => {
    doc.text(task.task_id.toString(), 14, y)
    doc.text(task.task_name, 40, y)
    doc.text(task.due_date, 100, y)
    doc.text(task.status, 160, y)
    doc.text(task.created_at, 200, y)
    y += 6
  })

  doc.save('tasks.pdf')
}

// Set up event listeners for the download buttons using jQuery
$(document).ready(function () {
  $('#download-pdf').click(function () {
    fetchTasks().then(function (data) {
      console.log('Downloading as pdf...')
      console.log(data)
      if (data.success === '1') {
        exportToPDF(data.tasks)
      } else {
        alert(data.error)
      }
    })
  })

  $('#download-csv').click(function () {
    window.location.href = 'api/download/download_csv.php'
  })

  $('#download-excel').click(function () {
    window.location.href = 'api/download/download_excel.php'
  })
})
