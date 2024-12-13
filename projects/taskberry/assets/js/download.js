// Fetch tasks from the database using jQuery AJAX
function fetchTasks() {
  return $.get('api/fetch_tasks.php', function (data) {
    return JSON.parse(data)
  }).fail(function (error) {
    alert('Failed to fetch tasks: ' + error)
  })
}

// Convert tasks to CSV using Papa Parse
function convertToCSVWithPapa(tasks) {
  // Format tasks to match expected headers
  const formattedTasks = tasks.map((task) => ({
    ID: task.id,
    Name: task.name,
    'Start Time': task.starttime,
    'End Time': task.endtime,
    Priority: task.priority,
    Status: task.status,
    'Created At': task.created_at,
    'Updated At': task.updated_at,
  }))

  // Use Papa Parse to generate CSV
  return Papa.unparse(formattedTasks)
}

// Convert tasks to CSV format
function convertToCSV(tasks) {
  const header = [
    'ID',
    'Name',
    'Start Time',
    'End Time',
    'Priority',
    'Status',
    'Created At',
    'Updated At',
  ]
  let csv = header.join(',') + '\n'

  tasks.forEach((task) => {
    const row = [
      task.id,
      task.name,
      task.starttime,
      task.endtime,
      task.priority,
      task.status,
      task.created_at,
      task.updated_at,
    ]
    csv += row.join(',') + '\n'
  })

  console.log(csv)
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
    // fetchTasks()
    //   .then(function (data) {
    //     console.log('Downloading as csv...')
    //     console.log(data)
    //     if (data.success === '1') {
    //       const csv = convertToCSVWithPapa(data.tasks)
    //       const blob = new Blob([csv], { type: 'text/csv' })
    //       const url = URL.createObjectURL(blob)
    //       const a = document.createElement('a')
    //       a.href = url
    //       a.download = 'tasks.csv'
    //       a.click()
    //       URL.revokeObjectURL(url)
    //     } else {
    //       alert(data.error || 'An unexpected error occured.')
    //       console.error(data.error)
    //     }
    //   })
    //   .catch(function (error) {
    //     console.error('Failed to fetch tasks:', error)
    //     alert('Failed to fetch tasks. Please try again later.')
    //   })
    window.location.href = 'api/download/download_csv.php'
  })

  $('#download-excel').click(function () {
    fetchTasks().then(function (data) {
      console.log('Downloading as excel...')
      console.log(data)
      if (data.success === '1') {
        exportToExcel(data.tasks)
      } else {
        alert(data.error)
      }
    })
  })
})
