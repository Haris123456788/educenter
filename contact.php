<!DOCTYPE html>


<html lang="en">
<head>

  <!-- Basic Page Needs
	================================================== -->
  <meta charset="utf-8">
  <title>Educenter - Education HTML Template</title>

  <!-- Mobile Specific Metas
	================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Educenter HTML Template v1.0">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>
  <!-- preloader start -->
  <div class="preloader">
    <img src="images/preloader.gif" alt="preloader">
  </div>
  <!-- preloader end -->

<!-- header -->
<?php include ('header.php');?>
<!-- /header -->
<!-- Modal -->

<!-- Modal -->


<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.html">Home</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Contact Us</li>
        </ul>
        <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- contact -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Contact Us</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 mb-4 mb-lg-0">
        <form action="/contact.html" method="POST">
          <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name" required>
          <input type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Your Email" required>
          <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject" required>
          <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message" required></textarea>
          <button type="submit" value="send" class="btn btn-primary">SEND MESSAGE</button>
        </form>
      </div>
      <div class="col-lg-5">
        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit recusandae voluptates doloremque veniam temporibus porro culpa ipsa, nisi soluta minima saepe laboriosam debitis nesciunt. Dolore, labore. Accusamus nulla sed cum aliquid exercitationem debitis error harum porro maxime quo iusto aliquam dicta modi earum fugiat, vel possimus commodi, deleniti et veniam, fuga ipsum praesentium. Odit unde optio nulla ipsum quae obcaecati! Quod esse natus quibusdam asperiores quam vel, tempore itaque architecto ducimus expedita</p>
        <a href="tel:+8802057843248" class="text-color h5 d-block">+880 20 5784 3248</a>
        <a href="mailto:yourmail@email.com" class="mb-5 text-color h5 d-block">yourmail@email.com</a>
        <p>71 Shelton Street<br>London WC2H 9JQ England</p>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->

<!-- gmap -->
<section class="section pt-0">
  <!-- Google Map -->
  <div id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"></div>
</section>
<!-- /gmap -->

<!-- footer -->
<?php include ('footer.php');?>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>