<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taskberry | Home</title>
  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/aos.css">
  <style>
    .anim-elements {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: -1;
    }

    .anim-element img {
      height: 34px;
      width: 34px;
      object-fit: cover;
      border-radius: 50%;
    }

    .anim-elements .anim-element {
      position: absolute;
      font-size: 30px;
    }

    .anim-elements .anim-element:nth-child(1) {
      top: 12%;
      left: 15%;
      color: var(--primary-color);
      animation: aniOne 13s infinite linear alternate;
    }

    .anim-elements .anim-element:nth-child(2) {
      bottom: 15%;
      left: 45%;
      animation: aniTwo 13s infinite linear alternate;
    }

    .anim-elements .anim-element:nth-child(3) {
      bottom: 20%;
      left: 30%;
      color: var(--primary-color);
      animation: aniThree 13s infinite linear alternate;
    }

    .anim-elements .anim-element:nth-child(4) {
      bottom: 15%;
      right: 25%;
      color: var(--primary-color);
      animation: aniFour 13s infinite linear alternate;
    }

    @keyframes aniOne {
      0% {
        transform: translate(0, 0) rotate(0);
      }

      40% {
        transform: translate(141px, 72px) rotate(75deg);
      }

      80% {
        transform: translate(-40px, 72px) rotate(145deg);
      }

      100% {
        transform: translate(0, 0) rotate(0);
      }
    }

    @keyframes aniTwo {
      0% {
        transform: translate(0, 0) rotate(0) scale(1);
      }

      40% {
        transform: translate(73px, -1px) rotate(36deg) scale(0.9);
      }

      80% {
        transform: translate(83px, 122px) rotate(108deg) scale(1.2);
      }

      100% {
        transform: translate(0, 0) rotate(0) scale(1);
      }
    }

    @keyframes aniThree {
      0% {
        transform: translate(-300px, 151px) rotate(0);
      }

      100% {
        transform: translate(251px, -200px) rotate(180deg);
      }
    }

    @keyframes aniFour {
      0% {
        transform: translate(61px, -99px) rotate(0);
      }

      20% {
        transform: translate(4px, -190px) rotate(38deg);
      }

      60% {
        transform: translate(-263px, -164px) rotate(108deg);
      }

      100% {
        transform: translate(-1px, 0) rotate(180deg);
      }
    }
  </style>
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
            <a class="nav-link active" href="index.php">Home
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="members.php">Members</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
        </ul>
        <div class="d-flex">
          <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#signInModal">Sign In</button>
        </div>
      </div>
    </div>
  </nav>

  <!-- text and image content -->
  <div class="d-flex align-items-center justify-content-center py-5" style="height: 100%;">
    <div class="container">
      <div class="row w-100">
        <div class="col-md-6 d-flex justify-content-center align-items-center mb-3" data-aos="fade-down" data-aos-duration="1000">
          <div>
            <h1 class="text-primary fw-bold">Taskberry: Your Fun & Focused Todo App</h1>
            <p class="fs-5 text-secondary">Get things done with Taskberry! A cute and simple to-do app with a Pomodoro timer to help you stay focused and take refreshing breaks. Tackle tasks, pick your berries, and boost your productivity—all while having fun!</p>
            <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#signInModal">Get Started</button>
          </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center mb-3" data-aos="fade-down-right" data-aos-duration="1000">
          <img src="assets/img/cute1.jpg" class="img-fluid rounded" alt="Image">
        </div>
      </div>
    </div>

    <!-- Animated images -->
    <div class="anim-elements">
      <div class="anim-element"><img src="assets/img/ralphmaron2.png" class="animated-img ralph" alt="Ralph"></div>
      <div class="anim-element"><img src="assets/img/jezlyn2.jpg" class="animated-img jezlyn" alt="Jezlyn"></div>
      <div class="anim-element"><img src="assets/img/triesha2.jpg" class="animated-img triesha" alt="Triesha"></div>
      <div class="anim-element"><img src="assets/img/jack2.jpg" class="animated-img jack" alt="Jack"></div>
    </div>
  </div>

  <div class="container">
    <footer class="pt-4 my-md-5 pt-md-5 border-top" data-aos="fade-up" data-aos-duration="1000">
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
                <button type="submit" class="btn btn-success w-100">Sign Up</button>
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
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/login_user.js"></script>
  <script src="assets/js/register_user.js"></script>

  <script>
    AOS.init()
  </script>
</body>

</html>