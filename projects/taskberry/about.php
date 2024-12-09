<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taskberry | About</title>
  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
  <!-- navigation bar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/img/logo.png" alt="Logo" width="30" height="24" />
        Taskberry
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor04">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="members.php">Members
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="about.php">About
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
        </ul>
        <div class="d-flex">
          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#signInModal">Sign In</button>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-primary">Taskberry</h1>
      <p class="fs-5 text-secondary">
        Taskberry was created by a group of 4th-year Computer Engineering students as part of our Online Technology course project. We designed it to make task management simple, efficient, and a bit more fun!
      </p>
    </div>

    <main>
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-bg-primary border-primary">
              <h4 class="my-0 fw-normal">Task Management</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mt-3 mb-4">
                <li>Add, organize, and track your tasks easily.</li>
                <li>Prioritize your to-dos and stay on top of deadlines.</li>
                <li>Simple and intuitive task management for everyone!</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-bg-primary border-primary">
              <h4 class="my-0 fw-normal">Pomodoro</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mt-3 mb-4">
                <li>Boost productivity with timed work and break intervals.</li>
                <li>Work for 25 minutes, then take a 5-minute break.</li>
                <li>Stay focused and avoid burnout with the Pomodoro technique.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-bg-primary border-primary">
              <h4 class="my-0 fw-normal">Responsive UI</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mt-3 mb-4">
                <li>Taskberry works perfectly on any device.</li>
                <li>Seamless experience across desktops, tablets, and phones.</li>
                <li>Stay organized on-the-go with our responsive design.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <img class="mb-2" src="assets/img/logo.png" alt="" width="24" height="19">
          <small class="d-block mb-3 text-body-secondary">&copy; 2024 TaskBerry. All rights reserved.</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Task Management</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Pomodoro Timer</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Responsive UI</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Help Center</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">User Guide</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Links</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy Policy</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms of Service</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cookie Policy</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
  <!-- modals-->
  <div class="modal fade" id="signInModal" tabindex="-1" aria-labelledby="signInModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="signInModalLabel">Please Login To Continue</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-header">
          <ul class="nav nav-pills w-100" id="login-signup-tabs">
            <div class="row w-100">
              <div class="col-md-6">
                <li class="nav-item w-100 text-center">
                  <a class="nav-link active" id="signInTab" data-bs-toggle="pill" href="#signInTabContent">Sign In</a>
                </li>
              </div>
              <div class="col-md-6">
                <li class="nav-item w-100 text-center">
                  <a class="nav-link" id="signUpTab" data-bs-toggle="pill" href="#signUpTabContent">Sign Up</a>
                </li>
              </div>
            </div>
          </ul>
        </div>
        <div class="modal-body">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="signInTabContent">
              <div class="container">
                <form id="login-form">
                  <div class="mb-3">
                    <label for="username" class="form-label">Username or email</label>
                    <input type="email" class="form-control" id="username" placeholder="Enter your email">
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password">
                  </div>
                  <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                  </div>
                  <button type="submit" class="btn btn-success w-100">Sign In</button>
                </form>
              </div>
              <div class="text-center mt-3">
                <a href="#" style="text-decoration: none;">Forgot password?</a>
              </div>
            </div>
            <div class="tab-pane fade" id="signUpTabContent">
              <form id="signup-form">
                <div class="mb-3">
                  <label for="signUpFullName" class="form-label">Full Name</label>
                  <input type="text" class="form-control" id="signUpFullName" placeholder="Enter your Full Name">
                </div>
                <div class="mb-3">
                  <label for="signUpUsername" class="form-label">Username or email</label>
                  <input type="email" class="form-control" id="signUpUsername" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                  <label for="signUpPassword" class="form-label">Password</label>
                  <input type="password" class="form-control" id="signUpPassword" placeholder="Create a password">
                </div>
                <div class="spacer mb-3"></div>
                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
              </form>
            </div>
          </div>
          <div class="text-center mt-3">
            <p><a href="#" style="text-decoration: none;">Why Create an Account?</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="assets/js//bootstrap.bundle.min.js"></script>
  <script src="assets/js/login_user.js"></script>
  <script src="assets/js/register_user.js"></script>
</body>

</html>