<?php


{
    include 'config\config.php';
    $connection = new mysqli($servername, $username, $password,$dbname); 
    $dbSuccess=FALSE;
    if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
    }
    else $dbSuccess=TRUE;
  
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/web-developer-icon-10.jpg" rel="icon">
  <link href="assets/img/software_developer.png" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.7.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

   <!-- ======= Header ======= -->
   <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img-nanzil.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Ahm Nanzil</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/ahmnanzil" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="https://www.linkedin.com/in/ahmnanzil-9b3a5623a" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>

        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
  <ul>
    <li><a href="index.html#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
    <li><a href="index.html#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
    <li><a href="index.html#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
    <li><a href="index.html#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
    <li><a href="index.html#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
    <li><a href="index.html#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
  </ul>
</nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 >Portfolio Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <?php
            $name = $_GET['name'];
            // PHP code to retrieve data from the database
            // Assuming you have established a database connection

            // Perform the query to fetch data
            $query = "SELECT * FROM PortfolioPic WHERE project_name = '$name'";

            $result = mysqli_query($connection, $query);
            
            // Iterate through the fetched rows and display the images
            while ($row = mysqli_fetch_assoc($result)) {
              $pictureUrl = $row['picture_url'];
              echo '<div class="swiper-slide">';

              $projectCatagory = $row['project_catagory'];
              $projectClient = $row['project_client'];
              $projectUrl = $row['project_url'];
              $projectDescription = $row['project_description'];
              $projectTime = $row['created_at'];

              echo '<img src="' . $pictureUrl . '" alt="">';
              echo '<div class="swiper-pagination"></div>'; // Move the pagination here
              echo '</div>';
            }
            
            ?>

          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Project information</h3>
          <ul>
            <?php  
         
            // Display project information
            echo '<li><strong>Category</strong>: ' . $projectCatagory . '</li>';
            echo '<li><strong>Client</strong>: ' . $projectClient . '</li>';
            echo '<li><strong>Project URL</strong>: <a href="#">' . $projectUrl . '</a></li>';
            echo '<li><strong>Client</strong>: ' . $projectTime . '</li>';
            
            ?>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>This is an example of portfolio detail</h2>
          <p>
          <?php
          
           echo ".$projectDescription.";
           ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- End Portfolio Details Section -->
   



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
      <div class="container">
        <div class="copyright">
          Thank <strong><span>You</span></strong>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
          For Visiting <a href="http://ahmnanzil.great-site.net">My Portfolio</a>
        </div>
      </div>
    </footer><!-- End  Footer -->

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>