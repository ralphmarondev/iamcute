$(document).ready(function () {
  function fetchTasks(query, createdby) {
    let endpoint = query
      ? 'api/search_completed_tasks.php'
      : 'api/fetch_completed_tasks.php'

    $.post(
      endpoint,
      { search: query, createdby: createdby },
      function (response) {
        var res = JSON.parse(response)
        console.log(res)

        if (res.success == '1') {
          var tasks = res.tasks
          var tableBody = $('#alternative-pagination tbody')
          tableBody.empty()

          tasks.forEach((task) => {
            const formatForDateTimeLocal = (date) => {
              const d = new Date(date)
              const options = {
                month: '2-digit',
                day: '2-digit',
                year: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                hour12: true, // Ensures AM/PM format
              }
              return d.toLocaleString('en-US', options)
            }

            var startTime = formatForDateTimeLocal(task.starttime)
            var endTime = formatForDateTimeLocal(task.endtime)
            var row = `<tr>
            <td style="task-name text-transform: capitalize">${task.name}</td>
            <td class="task-time text-center">${startTime}</td>
            <td class="task-time text-center">${endTime}</td>
            <td class="task-priority text-center text-uppercase">${
              task.priority.charAt(0).toUpperCase() + task.priority.slice(1)
            }</td>
            <td class="task-status text-center text-uppercase">${
              task.status
            }</td>
            <td class="task-action text-center">
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
              data-task-priority="${task.priority}" data-task-id="${task.id}">
                <i class="fas fa-trash-alt"></i>
              </button>
            </td>
          </tr>`
            tableBody.append(row)
          })
        } else {
          console.log('Error fetching tasks:', res.error)
          var tableBody = $('#alternative-pagination tbody')
          tableBody.empty()
          tableBody.html(`
              <tr>
                <td colspan="6" class="text-center">No data found</td>
              </tr>
            `)
        }
      }
    )
  }

  // fetch tasks initially
  const user = JSON.parse(localStorage.getItem('user'))
  fetchTasks('', user.username)
  console.log(`Current user: ${user.username}`)

  // listen for input in the search field
  $('#search-task').on('input', function () {
    let query = $(this).val().trim()
    console.log(query)
    fetchTasks(query, user.username)
  })

  // Show the delete confirmation modal
  $(document).on('click', '.delete-btn', function () {
    var taskName = $(this).data('task-name')
    var taskPriority = $(this).data('task-priority')
    var taskId = $(this).data('task-id')
    const user = JSON.parse(localStorage.getItem('user'))

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
        $.post(
          'api/delete_task.php',
          { id: taskId, createdby: user.username },
          function (response) {
            var res = JSON.parse(response)

            if (res.success == '1') {
              alert('Task deleted successfully')
              $('#deleteConfirmationModal').modal('hide')
              location.reload()
            } else {
              alert('Error deleting task: ' + res.error)
            }
          }
        )
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

    const formatForDateTimeLocal = (date) => {
      const d = new Date(date)
      return d.toISOString().slice(0, 16) // Extracts "YYYY-MM-DDTHH:MM"
    }

    $('#update-task-name').val(name)
    $('#update-start-time').val(formatForDateTimeLocal(startTime))
    $('#update-end-time').val(formatForDateTimeLocal(endTime))
    $('#update-priority').val(priority)
    $('#update-status').val(status)

    $('#updateTaskModal').modal('show')

    // handle update action
    $('#update-task-btn')
      .off('click')
      .on('click', function () {
        // Reassign formatted values to startTime and endTime
        let updatedStartTime = $('#update-start-time').val()
        let updatedEndTime = $('#update-end-time').val()
        let updatedName = $('#update-task-name').val()
        let updatedPriority = $('#update-priority').val()
        let updatedStatus = $('#update-status').val()
        const user = JSON.parse(localStorage.getItem('user'))

        $.post(
          'api/update_task.php',
          {
            id: id,
            name: updatedName,
            starttime: updatedStartTime,
            endtime: updatedEndTime,
            priority: updatedPriority,
            status: updatedStatus,
            createdby: user.username,
          },
          function (response) {
            var res = JSON.parse(response)
            if (res.success == '1') {
              alert('Task updated successfully')
              $('#updateTaskModal').modal('hide')
              location.reload()
            } else {
              alert('Error updating task: ' + res.error)
            }
          }
        )
      })
  })
})
