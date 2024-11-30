<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Taskberry</title>
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
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbar-supported-content"
        aria-controls="navbar-supported-content"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-supported-content">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Settings</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link active"
              aria-current="page"
              href="pomodoro.html">Try Pomodoro</a>
          </li>
        </ul>
        <div class="flex">
          <a
            class="btn btn-outline-primary text-uppercase"
            type="button"
            href="index.html">
            Logout
          </a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container mt-3">
    <div class="card py-3">
      <div class="container">
        <div class="b-card-body">
          <div class="align-items-center d-flex pb-2">
            <div class="mb-0 flex-grow-1">
              <div class="col-3" sm="2">
                <input
                  class="form-control form-control-sm"
                  placeholder="Search Task" />
              </div>
            </div>
            <div class="flex-shrink-0">
              <div
                class="form-check form-switch form-switch-right form-switch-md">
                <button
                  type="button"
                  class="bg-gradient btn btn-success btn-sm btn-label waves-effect waves-light"
                  data-bs-toggle="modal"
                  data-bs-target="#newTaskModal">
                  <i class="fas fa-plus icon"></i>
                  Add New Task
                </button>
              </div>
            </div>
          </div>
          <table
            id="alternative-pagination"
            class="table nowrap dt-responsive align-middle table-hover table-bordered"
            style="width: 100%">
            <thead class="table-light text-muted">
              <tr>
                <th class="sort" data-sort="pairs" scope="col" width="26%">
                  Task
                </th>
                <th scope="col" width="17%" class="text-center">
                  Start Time
                </th>
                <th class="text-center" scope="col" width="17%">End Time</th>
                <th class="text-center" scope="col" width="12%">Priority</th>
                <th class="text-center" scope="col" width="12%">Status</th>
                <th class="text-center" scope="col" width="10%">Action</th>
              </tr>
            </thead>
            <tbody class="list form-check-all">
              <tr>
                <td style="text-transform: capitalize">Eat lunch</td>
                <td class="text-center">9:21 AM Nov 5, 2024</td>
                <td class="text-center">11:21 AM Nov 5, 2024</td>
                <td class="text-center">Medium</td>
                <td class="text-center">On Going</td>
                <td class="text-center">
                  <button
                    class="bg-gradient btn btn-success btn-sm btn-icon waves-effect waves-light"
                    style="margin: 3px">
                    <i class="fas fa-pencil-alt"></i>
                  </button>
                  <button
                    class="bg-gradient btn btn-danger btn-sm btn-icon waves-effect waves-light"
                    style="margin: 3px">
                    <i class="fas fa-trash-alt"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>

          <!--Pagination Start-->
          <div class="d-flex justify-content-end mt-3">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <!--Pagination Ends-->
        </div>
      </div>
    </div>
  </div>

  <!-- modals -->
  <div
    class="modal fade"
    id="newTaskModal"
    tabindex="-1"
    data-bs-backdrop="static"
    data-bs-keyboard="false"

    role="dialog"
    aria-labelledby="newTaskModal"
    aria-hidden="true">
    <div
      class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
      role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
            New Task
          </h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form id="new-task-modal">
              <div class="col">
                <div class="row">
                  <label for="task-name" class="form-label">Task Name</label>
                  <input type="text" name="task-name" class="form-control" placeholder="Enter new task">
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal">
            Close
          </button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional: Place to the bottom of scripts -->
  <script>
    const myModal = new bootstrap.Modal(
      document.getElementById("newTaskModal"),
      options,
    );
  </script>


  <script src="assets/js/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="assets/js//bootstrap.bundle.min.js"></script>
</body>

</html>