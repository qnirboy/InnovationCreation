<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Hirend/Landing Page</title>
  <!-- Bootstrap css cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karla&family=Sofia+Sans+Semi+Condensed:wght@100;600&family=Space+Mono&display=swap" rel="stylesheet">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="styles/index-copy.css" />
  <!-- Bootstrap js cdn -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!-- font-awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="G:\bootstrap docs\working with bootstrap\hired-again\javascript.js"></script>
</head>

<body>

  <!-- Navbar section -->
  <nav class="navbar navbar-light navbar-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/compsoft-logo.png" alt="" width="130" height="100" class="d-inline-block align-text-top">
      </a>
      <span class="navbar-text">
        <!-- <a class="navbar-login" href="#">Register/Login</a> -->
        <button type="button" class="btn btn-lg btn-outline-light login-btn"><a href="registration.php" style="color:#fff;">Register/Login</a></button>
      </span>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-bottom">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link" href="index-copy.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#work-carousel">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#destinations">Destinations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- Navbar section -->

  <!-- Background image -->
  <div class="mask">
    <div class="bg-image d-flex justify-content-left align-items-center" style="
      background-image: url('images/main-photo.jpg');
    ">

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <h5 class="main-text">Clicking the images with perfection.</h5>
            <p class="main-subtext">
              Find the most talented photographers to bring your ideas to life.
            </p>
            <button type="button" class="btn btn-lg btn-outline-light book-btn"><a href="registration.php">Book An Appoitment</a> <i class="fa-solid fa-arrow-right"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->

  <!-- Portfolio carousel -->
  <section id="work-carousel" class="work-carousel">
    <div class="container-fluid">
      <h1 class="work-text">Photography For Every Milestone</h1>
      <h2 class="work-subtext">Get inspired to create your own beautiful moments!</h2>
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/work1.jpg" class="work-image" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/work2.jpg" class="work-image" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/work3.jpg" class="work-image" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/work4.jpg" class="work-image" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button " data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <button type="button" class="btn btn-lg btn-outline-light portfolio-btn"><a href="work.html">Learn More</a> <i class="fa-solid fa-arrow-right"></i></button>

  </section>
  </div>
  <!-- Portfolio carousel -->

  <!-- Featured Destinations Carousel -->
  <section id="destinations" class="destinations">
    <h1 class="work-text-white">Featured Destinations</h1>
    <h2 class="work-subtext-white">Favourite places to capture your memories</h2>
    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="card-wrapper container-sm d-flex  justify-content-around">
            <div class="cards  " style="width: 18rem;">
              <img src="images/bali.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Bali</h5>

              </div>
            </div>
            <div class="cards" style="width: 18rem;">
              <img src="images/paris.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Paris</h5>

              </div>
            </div>
            <div class="cards" style="width: 18rem;">
              <img src="images/greece.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Greece</h5>

              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card-wrapper container-sm d-flex   justify-content-around">
            <div class="cards  " style="width: 18rem;">
              <img src="images/kerala.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Kerala</h5>

              </div>
            </div>
            <div class="cards" style="width: 18rem;">
              <img src="images/jaipur.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Jaipur</h5>

              </div>
            </div>
            <div class="cards" style="width: 18rem;">
              <img src="images/kashmir.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Kashmir</h5>

              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card-wrapper container-sm d-flex  justify-content-around">
            <div class="cards " style="width: 18rem;">
              <img src="images/dubai.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Dubai</h5>

              </div>
            </div>
            <div class="cards" style="width: 18rem;">
              <img src="images/turkey.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Turkey</h5>

              </div>
            </div>
            <div class="cards" style="width: 18rem;">
              <img src="images/hawaii.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Hawaii</h5>

              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </section>
  <!-- Featured Destinations Carousel -->

  <!-- Book now section -->
  <div class="book-now">
    <h1 class="book-text">Ready to make your life memorable?</h1>
    <h2 class="book-subtext">Start booking your photo shoot</h2>
    <button type="button" class="btn btn-lg btn-outline-light book2-btn"><a href="registration.php">Book An Appoitment</a> <i class="fa-solid fa-arrow-right"></i></button>
  </div>

  <section id="destinations">
    <h1 class="work-text-white">Cameras Available</h1>
    <div id="carouselExampleControls1" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="card-wrapper container-sm d-flex  justify-content-around">
            <div class="cards  " style="width: 18rem;">
              <img src="images/cam1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Canon EOS R6</h5>

              </div>
            </div>
            <div class="cards" style="width: 18rem;">
              <img src="images/cam2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Sony α7 III</h5>

              </div>
            </div>
            <div class="cards" style="width:18rem;">
              <img src="images/cam3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Nikon Z 50 </h5>

              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card-wrapper container-sm d-flex   justify-content-around">
            <div class="cards  " style="width: 18rem;">
              <img src="images/cam4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Olympus OM-D E-M10</h5>

              </div>
            </div>
            <div class="cards" style="width: 18rem;">
              <img src="images/cam5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Fujifilm X100V</h5>

              </div>
            </div>
            <div class="cards" style="width: 18rem;">
              <img src="images/cam6.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"> Nikon Z fc</h5>

              </div>
            </div>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

  </section>
  <!-- Book now section -->

  <!-- Testimonial Section -->
  <div class="mgb-40 padb-30 auto-invert line-b-4 align-center">
    <h1 class="work-text-white">Not Yet Convinced?</h1>
    <h2 class="work-subtext-white">Read Customer Reviews</h2>
  </div>
  <div class="contain">
    <ul class="hash-list cols-3 cols-1-xs pad-30-all align-center text-sm">
      <li class="review-sec">
        <img src="images/test1.jpg" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
        <p class="fs-110 font-cond-l" contenteditable="false">"Photographer at Hirend was very easy to work with making sure everything is set up properly to get the best photos."</p>
        <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Martha Stewart</h5>
        <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Business Woman - New York</small>
      </li>
      <li class="review-sec">
        <img src="images/test2.jpg" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
        <p class="fs-110 font-cond-l" contenteditable="false">"Hirend captures authentic photos with excellent turnaround time and communication. Love the result."</p>
        <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Ariana Menage</h5>
        <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Recording Artist - Los Angeles</small>
      </li>
      <li class="review-sec">
        <img src="images/test3.jpg" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
        <p class="fs-110 font-cond-l" contenteditable="false">"My company hired Hirend to photograph a conference and we are so glad we did!I would give 10 stars if I could!"</p>
        <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Sean Carter</h5>
        <small class="font-cond case-u lts-sm fs-80 fg-text-l" contenteditable="false">Fund Manager - Chicago</small>
      </li>
    </ul>
  </div>
  <!-- Testimonial Section -->

  <!-- Newsletter Section -->
  <footer class="bg-light text-center">
    <div class="container p-4 pb-0 subscribing">
      <section class="newsletter">
        <form action="newsletter.php" method="post">
          <div class="row d-flex justify-content-center ">
            <div class="col-auto">
              <p class="pt-2 signup">
                <strong>Sign up for our newsletter</strong>
              </p>
            </div>
            <div class="col-md-5 col-12 signup2">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" name="email" id="form5Example2" class="form-control signup" placeholder="Enter your email id" />
              </div>
            </div>
            <div class="col-auto signup">
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary mb-4 subscribe-btn">
                Subscribe
              </button>
            </div>
          </div>
        </form>
      </section>
    </div>
  <!-- Newsletter Section -->

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

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a href="#" class="text-dark">Hirend.com</a>
    </div>
    <!-- Copyright -->
  </footer>

</html>
