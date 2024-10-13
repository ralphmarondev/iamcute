<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link
    rel="stylesheet"
    href="vendors/fontawesome-free-6.6.0-web/css/all.css" />
  <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/custom.css" />

  <link rel="shortcut icon" href="img/logo-1.jpg" type="image/x-icon" />
</head>

<body>
  <!-- header -->
  <header
    class="navbar navbar-expand-lg navbar-light bg-light py-3 px-5 align-items-center position-sticky top-0">
    <div class="container-fluid">
      <a href="#" class="navbar-brand text-primary fw-semibold">
        <img
          src="img/logo-1.jpg"
          alt="Logo"
          style="width: 32px; height: 32px; object-fit: cover" />
        I am CUTE</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbar-supported-content"
        aria-controls="navbar-supported-content"
        aria-expanded="false"
        aria-label="toggle-navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse ms-3"
        id="navbar-supported-content">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a
              href="#home"
              class="nav-link active text-primary"
              aria-current="page">Hello, Administrator!</a>
          </li>
        </ul>

        <div class="nav-item dropdown me-5">
          <a
            href="#"
            class="nav-link dropdown-toggle text-primary"
            id="navbar-drop-down"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            Manage
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbar-drop-dwon">
            <li>
              <a href="#" class="dropdown-item text-primary">Members</a>
            </li>
            <li>
              <a href="#" class="dropdown-item text-primary">Services</a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a href="#" class="dropdown-item text-primary">Profile</a>
            </li>
          </ul>
        </div>

        <div class="nav-item dropdown me-5">
          <a
            href="#"
            class="nav-link dropdown-toggle text-primary"
            id="navbar-drop-down"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            Select Theme
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbar-drop-dwon">
            <li>
              <a href="#" class="dropdown-item text-primary">Purple [Default]</a>
            </li>
            <li>
              <a href="#" class="dropdown-item text-primary">Orange</a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a href="#" class="dropdown-item text-primary">Custom Color</a>
            </li>
          </ul>
        </div>
        <button class="btn btn-primary dropdown" type="button">
          <a
            href="#"
            class="nav-link dropdown-toggle"
            id="navbar-drop-down"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            SETTINGS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbar-drop-dwon">
            <li>
              <img
                src="img/logo-1.jpg"
                alt="logo"
                class="dropdown-item mb-3"
                height="60"
                width="60"
                style="object-fit: cover" />
            </li>
            <li>
              <a href="#" class="dropdown-item text-primary" id="btn-logout">LOGOUT</a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a href="#" class="dropdown-item text-primary">VERY CUTESY</a>
            </li>
          </ul>
        </button>
      </div>
    </div>
  </header>

  <!-- members table -->
  <div class="container mt-3 mb-3 bg-light p-3">
    <div class="row">
      <div class="col">
        <h3 class="text-primary fw-semibold">Members</h3>
      </div>
      <div class="col"></div>
    </div>
    <table class="table table-stripped table-hover table-bordered">
      <thead>
        <tr>
          <th style="width: 25%" class="text-primary fs-5">Name</th>
          <th style="width: 20%" class="text-primary fs-5">Career</th>
          <th style="width: 30%" class="text-primary fs-5">Description</th>
          <th
            style="width: 10%"
            class="text-center text-primary text-primary fs-5">
            Role
          </th>
          <th style="width: 15%" class="text-center text-primary fs-5">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Ralph Maron Eda</td>
          <td>Computer Engineer</td>
          <td>Very cutesy, Very Demure!</td>
          <td class="text-center">SUPERUSER</td>
          <td class="text-center">
            <button class="btn btn-success btn-sm m-1" title="View">
              <i class="fas fa-eye"></i>
            </button>
            <button class="btn btn-warning btn-sm m-1" title="Update">
              <i class="fas fa-pencil-alt"></i>
            </button>
            <button class="btn btn-danger btn-sm m-1" title="Delete">
              <i class="fas fa-trash"></i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- scripts -->
  <script src="vendors/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="js/dashboard.js"></script>
</body>

</html>