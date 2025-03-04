
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Personal/assets/img/favicon.png" rel="icon">
  <link href="Personal/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Personal/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Personal/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Personal/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Personal/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="Personal/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="Personal/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Personal/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.8.1
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.html">Emily Jones</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="Personal/assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span>graphic designer</span> from New York</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="{{url('service')}}">Services</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

@yield('content'),


  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="Personal/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="Personal/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Personal/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="Personal/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="Personal/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="Personal/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="Personal/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="Personal/assets/js/main.js"></script>

</body>

</html>