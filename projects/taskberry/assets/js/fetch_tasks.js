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
                    <td class="text-center">Pending</td> <!-- You can modify this based on your status -->
                    <td class="text-center">
                        <button class="bg-gradient btn btn-success btn-sm btn-icon waves-effect waves-light" style="margin: 3px">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        <button id="delete-btn" class="bg-gradient btn btn-danger btn-sm btn-icon waves-effect waves-light" style="margin: 3px" data-task-name="${
                          task.name
                        }" 
                        data-task-priority="${task.priority}">
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
  $(document).on('click', '#delete-btn', function () {
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
})
