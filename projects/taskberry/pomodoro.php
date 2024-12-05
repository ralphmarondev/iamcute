<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taskberry | Pomodoro</title>
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
          <li class="nav-item"><a href="#" class="nav-link">Completed</a></li>
          <li class="nav-item"><a href="pomodoro.php" class="nav-link active" aria-current="page">Pomodoro</a></li>
          <li class="nav-item"><a href="settings.php" class="nav-link">Settings</a></li>
        </ul>

        <a href="index.php" class="btn btn-danger px-3">Logout</a>
      </div>
    </div>
  </nav>

  <div class="container py-5 text-center">
    <h2 class="mb-4">-Pomodoro Timer-</h2>
    <div class="card mx-auto shadow" style="max-width: 400px;">
      <div class="card-body">
        <!-- Timer Display -->
        <div id="timer-display">
          <h1 id="time" class="display-3 mb-3">15:00</h1>
          <p>Minutes : Seconds</p>
        </div>

        <!-- Timer Edit Form (hidden by default) -->
        <div id="timer-edit-form" class="d-none mb-3">
          <div class="row mb-3">
            <div class="col">
              <label for="minutes" class="form-label">Minutes</label>
              <input type="number" id="minutes" class="form-control" min="0" max="60" value="14" />
            </div>
            <div class="col">
              <label for="seconds" class="form-label">Seconds</label>
              <input type="number" id="seconds" class="form-control" min="0" max="59" value="59" />
            </div>
          </div>
          <div class="d-flex justify-content-around">
            <button id="set-time-btn" class="btn btn-success btn-sm">Set Time</button>
            <button id="cancel-edit-btn" class="btn btn-secondary btn-sm">Cancel</button>
          </div>
        </div>

        <div id="default-timer-display">
          <!-- Session Buttons -->
          <div class="d-flex justify-content-center">
            <button id="start-btn" class="btn btn-outline-success btn-sm mx-3">Start</button>
            <button id="reset-btn" class="btn btn-outline-danger btn-sm mx-3">Reset</button>
            <button id="edit-btn" class="btn btn-outline-info btn-sm mx-3">Edit</button>
          </div>

          <!-- Control Buttons -->
          <div class="d-flex justify-content-between mt-5">
            <button id="start-15-mins" class="btn btn-primary btn-sm">15 minutes</button>
            <button id="start-30-mins" class="btn btn-primary btn-sm">30 minutes</button>
            <button id="start-60-mins" class="btn btn-primary btn-sm">60 minutes</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/pomodoro.js"></script>
</body>

</html>