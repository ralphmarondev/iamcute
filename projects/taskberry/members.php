<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taskberry | Members</title>
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
            <a class="nav-link active" href="members.php">Members
              <span class="visually-hidden">(current)</span>
            </a>
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
      <div class="row">
        <div class="col">
          <div class="text-center border shadow p-4">
            <img
              src="assets/img/ralphmaron.jpg"
              alt="Image"
              class="img img-rounded"
              style="width: 240px; height: 240px; object-fit: cover; border-radius: 50%;">
            <h5 class="text-primary mt-3">Ralph Maron Eda</h5>
          </div>
        </div>
        <div class="col">
          <div class="text-center border shadow p-4">
            <img
              src="assets/img/jack.jpg"
              alt="Image"
              class="img img-rounded"
              style="width: 240px; height: 240px; object-fit: cover; border-radius: 50%;">
            <h5 class="text-primary mt-3">Jack Cabiggayan</h5>
          </div>
        </div>
        <div class="col">
          <div class="text-center border shadow p-4">
            <img
              src="assets/img/triesha.jpg"
              alt="Image"
              class="img img-rounded"
              style="width: 240px; height: 240px; object-fit: cover; border-radius: 50%;">
            <h5 class="text-primary mt-3">Triesha Mae Olunan</h5>
          </div>
        </div>
        <div class="col">
          <div class="text-center border shadow p-4">
            <img
              src="assets/img/jezlyn.jpg"
              alt="Image"
              class="img img-rounded"
              style="width: 240px; height: 240px; object-fit: cover; border-radius: 50%;">
            <h5 class="text-primary mt-3">Jezlyn Cabbab</h5>
          </div>
        </div>
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