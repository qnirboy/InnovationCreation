<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Hirend/Contact</title>
  <!-- Bootstrap css cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karla&family=Sofia+Sans+Semi+Condensed:wght@100;600&family=Space+Mono&display=swap" rel="stylesheet">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="styles/styles-registration.css" />
  <link rel="stylesheet" href="styles/styles-work.css" />

  <!-- Bootstrap js cdn -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!-- font-awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


  <script src="G:\bootstrap docs\working with bootstrap\hired-again\javascript-work.js"></script>
</head>

<body>

  <!-- Status shown if submit successful -->
  <?php
      if(isset($_SESSION['status']))
      {
          ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          <?php
           unset($_SESSION['status']);
      }
  ?>

  <!-- Navbar Section -->
  <nav class="navbar navbar-light ">

      <a class="navbar-brand" href="#">
        <img src="images/compsoft-logo.png" alt="" width="130" height="100" class="d-inline-block align-text-top">
      </a>
      <span class="navbar-text">
        <!-- <a class="navbar-login" href="#">Register/Login</a> -->
        <button type="button" class="btn btn-lg btn-outline-light login-btn" ><a href="registration.php" style="color:#fff;">Register/Login</a></button>

      </span>



  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="index-copy.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
<!-- Navbar Section -->

<!-- Contact Form -->
  <div class="container-contact">
      <div class="row justify-content-center">
          <div class="col-md-8">

  <div class="card mt-5">
      <div class="card-header">
          <h4 class="contact-text">Contact Us</h4>
      </div>

      <div class="card-body">

          <form action="contact-code.php" method="POST">


              <div class="form-group mb-3">
                  <label for="">Name</label>
                  <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group mb-3">
                  <label for="">Email</label>
                  <input type="email" name="email" class="form-control">
              </div>
              <div class="form-group mb-3">
                  <label for="">Phone Number</label>
                  <input type="int" name="phone" class="form-control">
              </div>
              <div class="form-group mb-3">
                  <label for="">Additional Info</label>
                  <input type="text" name="info" class="form-control">
              </div>
              <div class="form-group mb-3">
                  <button type="submit" name="save_datetime" class="btn btn-primary home-btn">Submit</button>
              </div>

          </form>
            </div>
  </div>
</div>
</div>
</div>
<!-- Contact Form -->

<!-- Footer Section -->
<footer class="bg-light text-center">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="newsletter">
      <form action="newsletter.php" method="post">
        <!--Grid row-->
        <div class="row d-flex justify-content-center" >
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2 signup">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12 signup2">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name="email" id="form5Example2" class="form-control signup" placeholder="Enter your email id"/>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto signup">
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary mb-4 subscribe" style="background-color: #07C295;">
              Subscribe
            </button>

          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->
  </div>
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

      <!-- Google -->
      <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

      <!-- Instagram -->
      <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

      <!-- Linkedin -->
      <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
      <!-- Github -->
      <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a href="#" class="text-dark">Hirend.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer Section -->

</html>
