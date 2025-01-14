<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Ralph Maron Eda" />
  <title>Ralph Maron Eda</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img
          src="assets/img/ralphmaron.jpg"
          alt="Ralph Maron Eda"
          width="30"
          height="30" />
        Ralph Maron Eda
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarColor04"
        aria-controls="navbarColor04"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor04">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#home">Home
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Project</a>
          </li>
        </ul>
        <div class="d-flex">
          <button class="btn btn-primary" type="button">Contact</button>
        </div>
      </div>
    </div>
  </nav>

  <!-- home -->
  <section id="home" class="container">
    <div class="row" style="align-items: center; height: 80vh">
      <div class="col">
        <h3 class="text-primary">Ralph Maron Eda</h3>
        <h5 class="text-secondary">
          He is a Computer Engineering studying at Cagayan State University -
          Carig Campus. He likes programming, particularly web development
          with Vue and mobile development with kotlin.
        </h5>
        <a role="button" href="#about" class="btn btn-outline-primary">About Me</a>
      </div>
      <div class="col text-center">
        <img
          src="assets/img/ralphmaron.jpg"
          alt="Ralph Maron Eda"
          style="
              height: 340px;
              width: 340px;
              object-fit: cover;
              border-radius: 50%;
              border: 1px solid orange;
              padding: 2px;
            " />
      </div>
    </div>
  </section>

  <!-- about -->
  <section id="about" class="container">
    <div class="row" style="align-items: center; height: 100vh">
      <div class="col text-center">
        <img
          src="assets/img/mobiledev.png"
          alt="Ralph Maron Eda"
          style="
              height: 340px;
              width: 340px;
              object-fit: cover;
              border-radius: 50%;
              border: 1px solid orange;
              padding: 2px;
            " />
      </div>
      <div class="col">
        <h3 class="text-primary">Mobile Developer for over 2 years.</h3>
        <h5 class="text-secondary">
          I primarily started coding for mobile [android] with Java and XMl,
          then moved to Kotlin and XML, but now, I am only coding with Kotlin
          using Jetpack Compose Framework.
        </h5>
        <h5 class="text-secondary">
          If I am not coding, I am watching movies related to technology like
          [Hacker 2016] and [The Social Network]. I also like playing Clash of
          Clans.
        </h5>
      </div>
    </div>
  </section>

  <!-- skills -->
  <section id="skills" class="container">
    <div class="row" style="align-items: center; height: 100vh">
      <div class="col">
        <h3 class="text-primary">Skills</h3>
        <h5 class="text-secondary">Python</h5>
        <h5 class="text-secondary">Vue3</h5>
        <h5 class="text-secondary">Bootstrap</h5>
        <h5 class="text-secondary">React</h5>
        <h5 class="text-secondary">Jetpack Compose</h5>
        <h5 class="text-secondary">Django Rest Framework</h5>
        <h5 class="text-secondary">Ktor</h5>
      </div>
      <div class="col text-center">
        <img
          src="assets/img/skills.jpg"
          alt="Ralph Maron Eda"
          style="
              height: 340px;
              width: 340px;
              object-fit: cover;
              border-radius: 50%;
              border: 1px solid orange;
              padding: 2px;
            " />
      </div>
    </div>
  </section>

  <!-- projects -->
  <section id="projects" class="container" style="height: 100vh">
    <h5 class="text-primary">Projects</h5>
  </section>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>