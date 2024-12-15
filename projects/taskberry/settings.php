<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taskberry | Settings</title>
  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/img/logo.png" alt="Logo" width="30" height="24" />
        Taskberry
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-supported-content" aria-controls="navbar-supported-content" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-supported-content">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a href="home.php" class="nav-link">In Progress</a></li>
          <li class="nav-item"><a href="completed.php" class="nav-link">Completed</a></li>
          <li class="nav-item"><a href="pomodoro.php" class="nav-link">Pomodoro</a></li>
          <li class="nav-item"><a href="settings.php" class="nav-link active" aria-current="page">Settings</a></li>
          <li class="nav-link mb-1"></li>
        </ul>
        <a href="index.php" class="btn btn-danger px-3">Logout</a>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <!-- Profile Info Section -->
      <div class="col-md-8">
        <div class="card shadow-sm p-4 mb-4">
          <h4 class="text-primary">Profile Information</h4>
          <p><strong>Full Name:</strong> <span id="fullname">Ralph Maron Eda</span> </p>
          <p><strong>Username:</strong> <span id="username">ralphmaron</span></p>
          <p><strong>Password:</strong> ********</p>
          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#updateModal">Edit Profile</button>
        </div>
      </div>

      <!-- Download Data Section -->
      <div class="col-md-8">
        <div class="card shadow-sm p-4">
          <h4 class="text-primary">Download Your Data</h4>
          <div class="row">
            <div class="col m-2 text-center">
              <button class="btn btn-outline-secondary" id="download-pdf">Download as PDF</button>
            </div>
            <div class="col m-2 text-center">
              <button class="btn btn-outline-secondary" id="download-csv">Download as CSV</button>
            </div>
            <div class="col m-2 text-center">
              <button class="btn btn-outline-secondary" id="download-excel">Download as Excel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- modals -->
  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">Profile Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="update-form">
            <div class="mb-3">
              <label for="updated-fullname" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="updated-fullname" placeholder="Enter new Full Name">
            </div>
            <div class="mb-3">
              <label for="updated-username" class="form-label">Username or email</label>
              <input type="email" class="form-control" id="updated-username" placeholder="Enter new email">
            </div>
            <div class="mb-3">
              <label for="updated-password" class="form-label">New Password</label>
              <input type="password" class="form-control" id="updated-password" placeholder="Create new password">
            </div>
            <div class="spacer mb-3"></div>
            <button type="submit" class="btn btn-primary w-100" id="update-user-btn">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>

  <script src="assets/js/download.js"></script>

  <script>
    $(document).ready(function() {
      const user = JSON.parse(localStorage.getItem('user'))
      var id = -1

      if (user) {
        $('#fullname').text(user.fullname)
        $('#username').text(user.username)
        id = user.id

        $('#updated-fullname').val(user.fullname)
        $('#updated-username').val(user.username)
      } else {
        console.log('No user data found.')
      }

      $('#update-user-btn')
        .off('click')
        .on('click', function() {
          let updatedUsername = $('#updated-username').val()
          let updatedFullName = $('#updated-fullname').val()
          let updatedPassword = $('#updated-password').val()

          // If username, fullname or password is empty, we will not update it.
          if (!updatedUsername || !updatedFullName || !updatedPassword) {
            alert('Please fill in all fields!')
            return;
          }

          $.post(
            'api/update_user.php', {
              id: id,
              fullname: updatedFullName,
              username: updatedUsername,
              password: updatedPassword
            },
            function(response) {
              var res = JSON.parse(response)
              if (res.success == '1') {
                alert('User updated successfully')
                // update localstorage
                var user = {
                  id: id,
                  fullname: updatedFullName,
                  username: updatedUsername,
                  password: '********', // we are not storing password on localstorage for security reasons.
                }

                localStorage.setItem('user', JSON.stringify(user))


                $('update-modal').modal('hide')
                location.reload()
              } else {
                alert('Error updating user: ' + res.error)
              }
            }
          )
        })
    })
  </script>
</body>

</html>