<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Taskberry | Completed Tasks</title>
  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">

  <style>
    @media (max-width: 768px) {

      /* Hide this columns on mobile :> */
      .task-details,
      .task-time,
      .task-priority,
      .task-status {
        display: none;
      }
    }
  </style>
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
        <ul class="nav nav-pills mx-auto">
          <li class="nav-item">
            <a href="home.php" class="nav-link">In Progress</a>
          </li>
          <li class="nav-item"><a href="completed.php" class="nav-link active" aria-current="page">Completed</a></li>
          <li class="nav-item"><a href="pomodoro.php" class="nav-link">Pomodoro</a></li>
          <li class="nav-item"><a href="settings.php" class="nav-link">Settings</a></li>
        </ul>

        <a href="index.php" class="btn btn-danger px-3">Logout</a>
      </div>
    </div>
  </nav>
  <div class="container mt-3">
    <div class="card py-3">
      <div class="container">
        <div class="b-card-body">
          <div class="row align-items-center pb-2">
            <!-- Search Task -->
            <div class="col-auto flex-grow-1">
              <input
                type="text"
                class="form-control form-control-sm mb-3"
                placeholder="Search Task"
                id="search-task" />
            </div>
          </div>

          <table
            id="alternative-pagination"
            class="table nowrap dt-responsive align-middle table-hover table-bordered"
            style="width: 100%">
            <thead class="table-light text-muted">
              <tr>
                <th class="task-name sort" data-sort="pairs" scope="col" width="26%">
                  Task
                </th>
                <th scope="col" width="17%" class="task-time text-center">
                  Start Time
                </th>
                <th class="task-time text-center" scope="col" width="17%">End Time</th>
                <th class="task-priority text-center" scope="col" width="12%">Priority</th>
                <th class="task-status text-center" scope="col" width="12%">Status</th>
                <th class="task-action text-center" scope="col" width="10%">Action</th>
              </tr>
            </thead>
            <tbody class="list form-check-all">

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

  <!-- Delete Confirmation Modal -->
  <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteConfirmationModalLabel">Delete Task</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p id="delete-task-name"></p>
          <p>Are you sure you want to delete this task with priority <strong id="delete-task-priority"></strong>?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" id="confirm-delete-btn">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Update Task Modal -->
  <div class="modal fade" id="updateTaskModal" tabindex="-1" aria-labelledby="updateTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateTaskModalLabel">Update Task</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="update-task-form">
            <input type="hidden" id="update-task-id">
            <div class="mb-3">
              <label for="update-task-name" class="form-label">Task Name</label>
              <input type="text" class="form-control" id="update-task-name" required placeholder="Task Name">
            </div>
            <div class="mb-3">
              <label for="update-start-time" class="form-label">Start Time</label>
              <input type="datetime-local" class="form-control" id="update-start-time" required>
            </div>
            <div class="mb-3">
              <label for="update-end-time" class="form-label">End Time</label>
              <input type="datetime-local" class="form-control" id="update-end-time" required>
            </div>
            <div class="mb-3">
              <label for="update-priority" class="form-label">Priority</label>
              <select class="form-control" id="update-priority" required>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="update-status" class="form-label">Status</label>
              <select class="form-control" id="update-status" required>
                <option value="in-progress">In Progress</option>
                <option value="completed">Completed</option>
              </select>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" id="update-task-btn">Update</button>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/fetch_completed_tasks.js"></script>
</body>

</html>