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
        <ul class="nav nav-pills mx-auto">
          <li class="nav-item"><a href="home.php" class="nav-link">In Progress</a></li>
          <li class="nav-item"><a href="completed.php" class="nav-link">Completed</a></li>
          <li class="nav-item"><a href="pomodoro.php" class="nav-link">Pomodoro</a></li>
          <li class="nav-item"><a href="settings.php" class="nav-link active" aria-current="page">Settings</a></li>
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
          <p><strong>Password:</strong> *****</p>
          <button class="btn btn-primary" id="edit-profile">Edit Profile</button>
        </div>
      </div>

      <!-- Download Data Section -->
      <div class="col-md-8">
        <div class="card shadow-sm p-4">
          <h4 class="text-primary">Download Your Data</h4>
          <div class="d-flex justify-content-between">
            <button class="btn btn-outline-secondary">Download as PDF</button>
            <button class="btn btn-outline-secondary">Download as Excel</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script>
    $(document).ready(function() {
      const user = JSON.parse(localStorage.getItem('user'))

      if (user) {
        $('#fullname').text(user.fullname)
        $('#username').text(user.username)
      } else {
        console.log('No user data found.')
      }
    })
  </script>
</body>

</html>