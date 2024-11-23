<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <div class="table-responsive table table-bordered">
      <table class="table mt-3">
        <thead class="text-primary text-center">
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Sex</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="student-data">
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    fetch('./api/select_students.php')
      .then(res => res.json())
      .then(data => {
        var text = ''
        data.forEach(item => {
          text += '<tr>'
          text += `<td>${item.id}</td>`
          text += `<td>${item.firstname}</td>`
          text += `<td>${item.lastname}</td>`
          text += `<td>${item.age}</td>`
          text += `<td>${item.action}</td>`
          text += '<td><button class="btn btn-success btn-sm">Update</button></td>'
          text += '</tr>'
        })
        console.log(text);
        $('student-data').html(text);
      })
      .catch(e => console.error(e))
  </script>
</body>

</html>