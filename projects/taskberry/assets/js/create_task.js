function formatDateTime(datetimeLocal) {
  const date = new Date(datetimeLocal)
  const year = date.getFullYear()
  const month = (date.getMonth() + 1).toString().padStart(2, '0')
  const day = date.getDate().toString().padStart(2, '0')
  const hours = date.getHours().toString().padStart(2, '0')
  const minutes = date.getMinutes().toString().padStart(2, '0')
  const seconds = date.getSeconds().toString().padStart(2, '0')

  return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`
}

$(document).ready(function () {
  $('#save-btn').click(function () {
    var taskName = $('#task-name').val()
    var startTime = $('#start-time').val()
    var endTime = $('#end-time').val()
    var priority = $('#priority').val()

    // Format the datetime values
    startTime = formatDateTime(startTime)
    endTime = formatDateTime(endTime)

    console.log(`Task name: ${taskName}`)
    console.log(`Start time: ${startTime}`)
    console.log(`End time: ${endTime}`)
    console.log(`Priority: ${priority}`)

    $.post(
      'api/create_task.php',
      {
        name: taskName,
        starttime: startTime,
        endtime: endTime,
        priority: priority,
      },
      function (response) {
        var res = JSON.parse(response)

        if (res.success == '1') {
          alert('Task saved successfully')

          $('#task-name').val('')
          $('#start-time').val('')
          $('#end-time').val('')
          $('#priority').val('')

          $('#newTaskModal').modal('hide')
          location.reload()
        } else {
          alert('Saving failed: ' + res.error)
        }
      }
    )
  })
})
