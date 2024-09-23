<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unicorn 1</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  <div class="container mt-5">
    <h2 class="mb-4">Our Cute Data Table</h2>
    <div class="mb-3">
      <input type="text" id="search" class="form-control" placeholder="Search...">
      <button class="btn btn-primary mt-2" onclick="showCreateDialog()">New</button>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Contact Number</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="data-table-body">
        <!-- Dynamic cute data will be inserted here -->
      </tbody>
    </table>
  </div>

  <!-- Modals -->
  <!-- Create Modal -->
  <div class="modal" id="createModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Create New Entry</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form id="createForm">
            <input type="text" id="createName" placeholder="Cute Name" class="form-control" required>
            <input type="text" id="createContact" placeholder="Contact Number" class="form-control" required>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="createEntry()">Create</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- TODO: Modals for Update and View Modals -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>