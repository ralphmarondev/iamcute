$(document).ready(function () {
  $.get('api/fetch_tasks.php', function (response) {
    var res = JSON.parse(response)

    if (res.success == '1') {
      var tasks = res.tasks
      var tableBody = $('#alternative-pagination tbody')
      tableBody.empty()

      tasks.forEach((task) => {
        var startTime = new Date(task.starttime).toLocaleString()
        var endTime = new Date(task.endtime).toLocaleString()
        var row = `<tr>
        <td style="text-transform: capitalize">${task.name}</td>
                    <td class="text-center">${startTime}</td>
                    <td class="text-center">${endTime}</td>
                    <td class="text-center">${
                      task.priority.charAt(0).toUpperCase() +
                      task.priority.slice(1)
                    }</td>
                    <td class="text-center">${task.status}</td>
                    <td class="text-center">
                        <button class="bg-gradient btn btn-success btn-sm btn-icon waves-effect waves-light edit-btn" style="margin: 3px" data-task-id="${
                          task.id
                        }" data-task-name="${
          task.name
        }" data-start-time="${startTime}" data-end-time="${endTime}" data-priority="${
          task.priority
        }" data-status="${task.status}">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        <button class="bg-gradient btn btn-danger btn-sm btn-icon waves-effect waves-light delete-btn" style="margin: 3px" data-task-name="${
                          task.name
                        }" 
                        data-task-priority="${task.priority}" data-task-id="${
          task.id
        }">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>`
        tableBody.append(row)
      })
    } else {
      console.log('Error fetching tasks:', res.error)
    }
  })
  // Show the delete confirmation modal
  $(document).on('click', '.delete-btn', function () {
    var taskName = $(this).data('task-name')
    var taskPriority = $(this).data('task-priority')

    // Set the task name and priority in the modal
    $('#delete-task-name').text(`Task: ${taskName}`)
    $('#delete-task-priority').text(taskPriority)

    // Open the modal
    $('#deleteConfirmationModal').modal('show')

    // Handle the delete action
    $('#confirm-delete-btn')
      .off('click')
      .on('click', function () {
        // Send delete request to the server
        $.post('api/delete_task.php', { name: taskName }, function (response) {
          var res = JSON.parse(response)

          if (res.success == '1') {
            alert('Task deleted successfully')
            $('#deleteConfirmationModal').modal('hide')
            // You can refresh the tasks or remove the row from the table
            location.reload() // Reload the page or update the table dynamically
          } else {
            alert('Error deleting task: ' + res.error)
          }
        })
      })
  })

  // Show the update task modal when the edit button is clicked
  $(document).on('click', '.edit-btn', function () {
    var id = $(this).data('task-id')
    var name = $(this).data('task-name')
    var startTime = $(this).data('start-time')
    var endTime = $(this).data('end-time')
    var priority = $(this).data('priority')
    var status = $(this).data('status')

    console.log(
      `Edit btn: id: ${id}, name: ${name}, start_time: ${startTime}, end_time: ${endTime}, priority: ${priority}, status: ${status}`
    )
    const formatForDateTimeLocal = (date) => {
      const d = new Date(date)
      return d.toISOString().slice(0, 16) // Extracts "YYYY-MM-DDTHH:MM"
    }
    console.log(
      `start_time: ${formatForDateTimeLocal(
        startTime
      )}, end_time: ${formatForDateTimeLocal(endTime)}`
    )

    $('#update-task-name').val(name)
    $('#update-start-time').val(formatForDateTimeLocal(startTime))
    $('#update-end-time').val(formatForDateTimeLocal(endTime))
    $('#update-priority').val(priority)
    $('#update-status').val(status)

    $('#updateTaskModal').modal('show')
  })

  // // Handle the task update
  // $('#update-task-btn').click(function () {
  //   var taskId = $('#update-task-id').val()
  //   var taskName = $('#update-task-name').val()
  //   var startTime = $('#update-start-time').val()
  //   var endTime = $('#update-end-time').val()
  //   var priority = $('#update-priority').val()
  //   var status = $('#update-status').val()

  //   // Send the update request to the server
  //   $.post(
  //     'api/update_task.php',
  //     {
  //       id: taskId,
  //       name: taskName,
  //       starttime: startTime,
  //       endtime: endTime,
  //       priority: priority,
  //       status: status,
  //     },
  //     function (response) {
  //       var res = JSON.parse(response)
  //       if (res.success == '1') {
  //         alert('Task updated successfully')
  //         $('#updateTaskModal').modal('hide')
  //         location.reload() // Reload the page or dynamically update the task in the table
  //       } else {
  //         alert('Error updating task: ' + res.error)
  //       }
  //     }
  //   )
  // })
})
