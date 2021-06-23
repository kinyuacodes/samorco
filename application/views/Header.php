<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
  <?php if($title):?>
    <?= $site_name;?> - <?= $title;?>
   <?php else:?>
      <?php echo $site_name;?>
  <?php endif;?>
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/font-awesome.min.css" rel="stylesheet">
     <!--========== SWIPER CSS ==========-->
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/services/assets/css/swiper-bundle.min.css">

<!--========== CSS ==========-->
<link rel="stylesheet" href=" <?php echo base_url();?>assets/services/assets/css/styles.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/venobox/venobox.css" type="text/css" media="screen" />
  <?php
   $name="hi";
  ?>
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

     <!-- <h1 class="logo me-auto"><a href="index.html"><span>Com</span>pany</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html" class="logo me-auto me-lg-0"><img src="<?php echo  base_url();?>assets/logo/sam.webp" alt="<?= $site_name;?>" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="<?= base_url();?>">Home</a></li>
          <li><a href="<?php echo base_url();?>Services">Services</a></li>
          <li><a href="<?php echo base_url();?>TV">TV</a></li>
          <li><a href="<?php echo base_url();?>Team">Team</a></li>
          <li><a href="<?php echo base_url();?>News">News</a></li>
          <li><a href="<?php echo base_url();?>Contact">Contact</a></li>
          <li><a href="<?php echo base_url();?>About">About</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="<?php echo $twitter;?>" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="<?php echo $facebook;?>" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="<?php echo $instagram;?>" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="<?php echo $facebook;?>" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
  <main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><?php echo $title;?></h2>
      <ol>
        <li><a href="<?= base_url();?>">Home</a></li>
        <li><?php echo $title;?></li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->