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
                        <button class="bg-gradient btn btn-success btn-sm btn-icon waves-effect waves-light edit-btn" style="margin: 3px">
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
    var taskId = $(this).closest('tr').data('data-task-id')

    // Fetch task details from the server
    $.get('api/fetch_tasks.php', { id: taskId }, function (response) {
      var res = JSON.parse(response)
      if (res.success == '1') {
        var task = res.task

        // Populate the form fields with the task details
        $('#update-task-id').val(task.id)
        $('#update-task-name').val(task.name)
        $('#update-start-time').val(task.starttime)
        $('#update-end-time').val(task.endtime)
        $('#update-priority').val(task.priority)
        $('#update-status').val(task.status)

        // Open the modal
        $('#updateTaskModal').modal('show')
      } else {
        alert('Error fetching task details: ' + res.error)
      }
    })
  })

  // Handle the task update
  $('#update-task-btn').click(function () {
    var taskId = $('#update-task-id').val()
    var taskName = $('#update-task-name').val()
    var startTime = $('#update-start-time').val()
    var endTime = $('#update-end-time').val()
    var priority = $('#update-priority').val()
    var status = $('#update-status').val()

    // Send the update request to the server
    $.post(
      'api/update_task.php',
      {
        id: taskId,
        name: taskName,
        starttime: startTime,
        endtime: endTime,
        priority: priority,
        status: status,
      },
      function (response) {
        var res = JSON.parse(response)
        if (res.success == '1') {
          alert('Task updated successfully')
          $('#updateTaskModal').modal('hide')
          location.reload() // Reload the page or dynamically update the task in the table
        } else {
          alert('Error updating task: ' + res.error)
        }
      }
    )
  })
})
