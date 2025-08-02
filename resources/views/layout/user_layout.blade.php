<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <title>One Health - Medical Center HTML5 Template</title>
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
  
  <style>
    /* Custom Styles for Reviews and Feedback */
    h2 {
      text-align: center;
      color: black;
      margin-bottom: 30px;
    }

    .review-box {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      margin-bottom: 25px;
      transition: all 0.3s ease-in-out;
    }

    .review-box:hover {
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
      transform: translateY(-5px);
    }

    .review-box p {
      margin: 12px 0;
    }

    .review-box strong {
      color: #333;
    }

    .rating-label {
      font-weight: bold;
      margin-right: 5px;
    }

    .review-box .rating {
      font-size: 1.2em;
    }

    .review-box .rating-excellent { color: green; }
    .review-box .rating-very-good { color: blue; }
    .review-box .rating-good { color: orange; }
    .review-box .rating-fair { color: #ffc107; }
    .review-box .rating-poor { color: red; }

    .form-group label {
      font-weight: bold;
    }

    .form-control {
      border-radius: 5px;
      box-shadow: none;
      border: 1px solid #ddd;
      font-size: 1rem;
      padding: 10px;
    }

    .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    }

    .btn-primary {
      border: none;
      border-radius: 5px;
      padding: 12px 25px;
      font-size: 1rem;
      color: white;
      transition: all 0.3s;
    }

    .btn-primary:hover {
    }

    .feedback-form {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .back-to-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      background-color: #007bff;
      color: #fff;
      padding: 10px 15px;
      border-radius: 50%;
      cursor: pointer;
      display: none;
      font-size: 1.5em;
    }

    .back-to-top:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              @if(Auth::check())
                 <a href="#"><span class="mai-mail text-primary"></span> {{ Auth::user()->email }}</a>
              @else
                 <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
              @endif
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('user')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('doctor')}}">Doctors</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link">Feedback</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('contact')}}">Contact</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <!-- Feedback Success Message -->
  @if(session()->has('message'))

        <div class="alert alert-success">

          
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <!-- <span aria-hidden="true">&times;</span> -->
            x
          </button>
          
          {{ session()->get('message') }}


        </div>

  @endif

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url('user')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Feedback</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal" style="color: white;">Patient Feedback</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  @yield('user')
 
  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2025 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>

</body>
</html>
