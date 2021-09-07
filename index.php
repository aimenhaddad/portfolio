
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">

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
  <!-- ============================================================================== -->
  <?php
include_once "include/db.php";
$sql ="SELECT * FROM social WHERE idd=1";
  $res =mysqli_query($conn, $sql);
  
 if (mysqli_num_rows($res) > 0) {
  while ($inf = mysqli_fetch_assoc($res)) {
    

?>
 <style>
 #hero {
  width: 100%;
  height: 100vh;
  background: url('forms/portfolio/<?=$inf['bg']?>') top center;
  background-size: cover;
}  </style>
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
  <a href="forms/index.php" class="nav-link scrollto active"><i class="bx bx-lock"></i></a>
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="forms/portfolio/<?=$inf['img_profile']?>" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php"><?=$inf['name']?></a></h1>
        <div class="social-links mt-3 text-center">
          <a href="<?=$inf['twit']?>" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="<?=$inf['face']?>" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="<?=$inf['inst']?>" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="<?=$inf['skype']?>" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="<?=$inf['linkedin']?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
    <ul>
      <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
         
   
         
     <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>

      
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1><?=$inf['name']?></h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
    </div>
  </section><!-- End Hero -->
<?php }}?>
  <main id="main">

  
   
   
    <!-- ======= Portfolio Section ======= -->
    
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Project information.</p>
        </div>

        

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App Mobile</li>
              <li data-filter=".filter-desktop">App desktop</li>
              <li data-filter=".filter-web">Web Developer</li>
              <li data-filter=".filter-other">Other</li>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
        
        <?php 
       

       $sql12 = "SELECT id ,descr,project,img_details FROM portfolio WHERE category='other'  ORDER BY id DESC ";
       $res12 = mysqli_query($conn,  $sql12);

       if (mysqli_num_rows($res12) > 0) {
         while ($images12 = mysqli_fetch_assoc($res12)) { 
      ?>
         <div class="col-lg-4 col-md-6 portfolio-item filter-other">
           <div class="card" style="width: 18rem;">
<img class="card-top m-2" src="forms/uploads/<?=$images12['img_details']?>" alt="">
<div class="card-body">
 <h5 class="card-title"><?=$images12['project']?></h5>
 <p class="card-text">
 <?=$images12['descr']?>
 </p>
 <a href="forms/uploads/<?=$images12['img_details']?>" data-gallery="portfolioGallery" class="portfolio-lightbox fs-5 "   title="<?=$images12['project']?>"><i class='bx bx-zoom-in'></i></a>
 <a href="portfolio-details.php?id=<?php echo $images12['id'];?>" class="fs-4" title="More Details"><i class="bx bx-link"></i></a>
</div>
</div>
         </div>
       <?php } }?>
        <?php 
          $sql = "SELECT id ,descr,project,img_details FROM portfolio WHERE category='app'  ORDER BY id DESC ";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) { 
         ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="card" style="width: 18rem;">
  <img class="card-top m-2" src="forms/uploads/<?=$images['img_details']?>" alt="">
  <div class="card-body">
    <h5 class="card-title"><?=$images['project']?></h5>
    <p class="card-text">
    <?=$images['descr']?>
    </p>
    <a href="forms/uploads/<?=$images['img_details']?>" data-gallery="portfolioGallery" class="portfolio-lightbox fs-5 "   title="<?=$images['project']?>"><i class='bx bx-zoom-in'></i></a>
    <a href="portfolio-details.php?id=<?php echo $images['id'];?>" class="fs-4" title="More Details"><i class="bx bx-link"></i></a>
  </div>
</div>
            </div>
          <?php } }?>
          <?php 
        
          $sql1 = "SELECT   id ,descr,project,img_details FROM portfolio WHERE category='web' ORDER BY id DESC";
          $res1 = mysqli_query($conn,  $sql1);

          if (mysqli_num_rows($res1) > 0) {
          	while ($images1 = mysqli_fetch_assoc($res1)) { 
         ?>
       
          
          <!-- ************************************ card ************************************ -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="card  " style="width: 18rem;">
  <img class="card-top m-2" src="forms/uploads/<?=$images1['img_details']?>" alt="">
  <div class="card-body">
    <h5 class="card-title"><?=$images1['project']?></h5>
    <p class="card-text">
    <?=$images1['descr']?>
    </p>
    <a href="forms/uploads/<?=$images1['img_details']?>" data-gallery="portfolioGallery" class="portfolio-lightbox fs-5 "   title="<?=$images1['project']?>"><i class='bx bx-zoom-in'></i></a>
    <a href="portfolio-details.php?id=<?php echo $images1['id'];?>" class="fs-4" title="More Details"><i class="bx bx-link"></i></a>
  </div>
</div>
            </div>
<!-- ************************************ fin card ************************************ -->
<?php } }?>
          <?php 
        
          $sql2 = "SELECT id ,project ,descr,img_details FROM portfolio WHERE category='desktop'  ORDER BY id DESC ";
          $res2 = mysqli_query($conn, $sql2);

          if (mysqli_num_rows($res2) > 0) {
          	while ($images2 = mysqli_fetch_assoc($res2)) { 
         ?>
         <div class="col-lg-4 col-md-6 portfolio-item filter-desktop">
            <div class="card " style="width: 18rem;">
  <img class="card-top m-2" src="forms/uploads/<?=$images2['img_details']?>" alt="">
  <div class="card-body">
    <h5 class="card-title"><?=$images2['project']?></h5>
    <p class="card-text">
    <?=$images2['descr']?>
    </p>
    <a href="forms/uploads/<?=$images2['img_details']?>" data-gallery="portfolioGallery" class="portfolio-lightbox fs-5 "   title="<?=$images2['project']?>"><i class='bx bx-zoom-in'></i></a>
    <a href="portfolio-details.php?id=<?php echo $images2['id'];?>" class="fs-4" title="More Details"><i class="bx bx-link"></i></a>
  </div>
</div>
</div>
          <?php } }?>
         

        </div>

      </div>
    </section><!-- End Portfolio Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>skycode</span></strong>
      </div>
      <div class="credits">

        Designed by <a href="#">Aymen haddad</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>