<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Playground</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <table class="table table-striped border" style="max-width: 800px;">
      <thead>
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">First Name</th>
          <th class="text-center">Last Name</th>
          <th class="text-center">Age</th>
          <th class="text-center">Sex</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'connection.php';

        // fetch data
        $sql = 'SELECT * FROM people_tbl LIMIT 10';
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // echo '<ul>';
          // // print each row
          // while($row = $result->fetch_assoc()){
          //   echo '<li>'.htmlspecialchars($row['firstname']).' '.htmlspecialchars($row['lastname']).'</li>';
          // }
          // echo '</ul>';
          while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td style="padding: 5px;" class="text-center">' . $row['id'] . '</td>';
            echo '<td style="padding: 5px;" class="text-center">' . $row['firstname'] . '</td>';
            echo '<td style="padding: 5px;" class="text-center">' . $row['lastname'] . '</td>';
            echo '<td style="padding: 5px;" class="text-center">' . $row['age'] . '</td>';
            echo '<td style="padding: 5px;" class="text-center">' . $row['sex'] . '</td>';
            echo '<td style="padding: 5px;" class="text-center"><button class="btn btn-danger btn-sm">Delete</button></td>';
            echo '</tr><br>';
          }
        } else {
          echo 'No records found.';
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>