<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Not Cute</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    * {
      font-family: 'Courier New', Courier, monospace;
    }
  </style>
</head>

<body>
  <!-- NOTE:
      [Color]
          primary: blue
          secondary: grey
          info: light blue
          success: red
          warning: yellow/orange
          light: slightly white
          dark: black
          white: white

       [Margin]
          0 - 0px
          1 - 2px
          2 - 8px
          3 - 16px
          4 - 24px
          5 - 48px
    -->
  <div class="container mt-3">
    <div class="row mb-3">
      <div class="col-md-3 mx-auto">
        <h3>Text Color</h3>
        <p class="text-primary">Primary</p>
        <p class="text-secondary">Secondary</p>
        <p class="text-info">Info</p>
        <p class="text-success">Success</p>
        <p class="text-danger">Danger</p>
        <p class="text-warning">Warning</p>
      </div>
      <div class="col-md-3 mx-auto">
        <h3>Background Color</h3>
        <p class="text-white bg-primary">Primary</p>
        <p class="text-white bg-secondary">Secondary</p>
        <p class="text-white bg-info">Info</p>
        <p class="text-white bg-success">Success</p>
        <p class="text-white bg-danger">Danger</p>
        <p class="text-white bg-warning">Warning</p>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-3 mx-auto">
        <h3>Button Color</h3>
        <button class="btn btn-primary m-1">Primary</button>
        <button class="btn btn-secondary m-1">Secondary</button>
        <button class="btn btn-info m-1">Info</button>
        <button class="btn btn-success m-1">Success</button>
        <button class="btn btn-danger m-1">Danger</button>
        <button class="btn btn-warning m-1">Warning</button>
      </div>
      <div class="col-md-3 mx-auto">
        <h3>Button Outline Color</h3>
        <button class="btn btn-outline-primary m-1">Primary</button>
        <button class="btn btn-outline-secondary m-1">Secondary</button>
        <button class="btn btn-outline-info m-1">Info</button>
        <button class="btn btn-outline-success m-1">Success</button>
        <button class="btn btn-outline-danger m-1">Danger</button>
        <button class="btn btn-outline-warning m-1">Warning</button>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>