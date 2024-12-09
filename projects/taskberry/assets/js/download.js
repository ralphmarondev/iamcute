// Fetch tasks from the database using jQuery AJAX
function fetchTasks() {
  return $.get('api/fetch_tasks.php', function (data) {
    return JSON.parse(data)
  }).fail(function (error) {
    alert('Failed to fetch tasks: ' + error)
  })
}

// Convert tasks to CSV format
function convertToCSV(tasks) {
  const header = ['Task ID', 'Task Name', 'Due Date', 'Status', 'Created At']
  let csv = header.join(',') + '\n'

  tasks.forEach((task) => {
    const row = [
      task.task_id,
      task.task_name,
      task.due_date,
      task.status,
      task.created_at,
    ]
    csv += row.join(',') + '\n'
  })

  return csv
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

// Export tasks as Excel (CSV format, Excel can read CSV files)
function exportToExcel(tasks) {
  const csv = convertToCSV(tasks)
  const blob = new Blob([csv], { type: 'text/csv' })
  const url = URL.createObjectURL(blob)
  const a = document.createElement('a')
  a.href = url
  a.download = 'tasks.csv'
  a.click()
  URL.revokeObjectURL(url)
}

// Set up event listeners for the download buttons using jQuery
$(document).ready(function () {
  $('#download-pdf').click(function () {
    fetchTasks().then(function (data) {
      if (data.success === '1') {
        exportToPDF(data.tasks)
      } else {
        alert(data.error)
      }
    })
  })

  $('#download-csv').click(function () {
    fetchTasks().then(function (data) {
      if (data.success === '1') {
        const csv = convertToCSV(data.tasks)
        const blob = new Blob([csv], { type: 'text/csv' })
        const url = URL.createObjectURL(blob)
        const a = document.createElement('a')
        a.href = url
        a.download = 'tasks.csv'
        a.click()
        URL.revokeObjectURL(url)
      } else {
        alert(data.error)
      }
    })
  })

  $('#download-excel').click(function () {
    fetchTasks().then(function (data) {
      if (data.success === '1') {
        exportToExcel(data.tasks)
      } else {
        alert(data.error)
      }
    })
  })
})
