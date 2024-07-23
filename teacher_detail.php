<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

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

  <?php
include ('db.php');
$sql = "SELECT * FROM teachers WHERE id=" .$_GET['id'];
$result = mysqli_query($conn, $sql);

if(!$result) {
    echo 'Could not run query: ' . mysqli_error($conn);
    exit;
}

$data = mysqli_fetch_assoc($result);
?>


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
<?php include ("header.php");?>
<!-- /header -->


<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="teacher.php">Our Teacher</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted"><?php echo $data['name']; ?></li>
        </ul>
        <p class="text-lighten mb-0"><?php echo $data['description']; ?></p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- teacher details -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mb-5">
        <img class="img-fluid w-100" src="images/teachers/<?php echo $data['teacher_banner']; ?>" alt="teacher">
      </div>
      <div class="col-md-6 mb-5">
        <h3><?php echo $data['name']; ?></h3>
        <h6 class="text-color">Computer Science</h6>
        <p class="mb-5"><?php echo $data['teacher_description']; ?></p>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h4 class="mb-4">CONTACT INFO:</h4>
            <ul class="list-unstyled">
              <li class="mb-3"><a class="text-color" href="mailto:johndoe@email.com"><i class="ti-email mr-2"></i>johndoe@email.com</a></li>
              <li class="mb-3"><a class="text-color" href="tel:+120345876"><i class="ti-mobile mr-2"></i>+120 345 876</a></li>
              <li class="mb-3"><a class="text-color" href="https://facebook.com/themefisher"><i class="ti-facebook mr-2"></i>john Doe</a></li>
              <li class="mb-3"><a class="text-color" href="https://twitter.com/themefisher"><i class="ti-twitter-alt mr-2"></i>john Doe</a></li>
              <li class="mb-3"><a class="text-color" href="teacher-single.html"><i class="ti-skype mr-2"></i>john Doe</a></li>
              <li class="mb-3"><a class="text-color" href="teacher-single.html"><i class="ti-world mr-2"></i>johnDoe.com</a></li>
              <li class="mb-3"><a class="text-color" href="http://maps.google.com/"><i class="ti-location-pin mr-2"></i>1313 Boulevard
                  Cremazie,Quebec</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <h4 class="mb-4">SUMMARY OF ACTIVITIES/INTERESTS</h4>
            <ul class="list-unstyled">
              <li class="mb-3">Computer Networking</li>
              <li class="mb-3">Computer Security</li>
              <li class="mb-3">Human Computer Interfacing</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12">
        <h4 class="mb-4">BIOGRAPHY</h4>
        <p class="mb-5"><?php echo $data['biography']; ?></p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">
        <h4 class="mb-4">COURSES</h4>
      </div>
      <?php

include('db.php');
$sql= "SELECT * FROM `courses` WHERE `trending`=1 LIMIT 3";
$result= $conn->query($sql);
?><?php while($row=$result->fetch_assoc()){ ?>
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/courses/<?php echo $row['course_banner']?>" alt="course thumb">
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-wallet mr-1 text-color"></i><?php echo $row['fee']?></li>
              <li class="list-inline-item"><a class="text-color" href="course_detail.php?id=<?php echo $row['id']?>"><?php echo $row['category']?></a></li>
            </ul>
            <a href="teacher_detail.php?id=<?php echo $row['id']?>">
              <h4 class="card-title"><?php echo $row['name']?></h4>
            </a>
            <p class="card-text mb-4"><?php echo $row['description']?></p>
            <a href="course_detail.php?id=<?php echo $row['id']?>" class="btn btn-primary btn-sm">Read more</a>
          </div>
        </div>
      </div>
      <!-- course item -->
      
      <!-- course item -->
      <?php } ?>
    </div>
  </div>
</section>
<!-- /teacher details -->

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