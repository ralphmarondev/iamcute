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
                                <button class="bg-gradient btn btn-danger btn-sm btn-icon waves-effect waves-light" style="margin: 3px">
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
})
