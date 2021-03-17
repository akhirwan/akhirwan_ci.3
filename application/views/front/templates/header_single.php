<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $config->name ?> - <?php echo $config->description ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="<?php echo $meta_keyword ?>" name="keywords">
  <meta content="<?php echo $meta_description ?>" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url().'/images/website/'.$config->logo; ?>" rel="icon">
  <link href="<?php echo base_url(); ?>assets/front/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(); ?>assets/front/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(); ?>assets/front/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/front/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/front/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/front/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/front/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url(); ?>assets/front/css/style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top"><?php echo $config->url ?></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="<?php echo base_url(); ?>">Home</a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Experiences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog">Blog</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo base_url().'blog'; ?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
      <!--<div class="navbar-collapse collapse justify-content-end" >
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="<?php echo base_url(); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo base_url().'about'; ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo base_url().'expert'; ?>">Experiences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo base_url().'work'; ?>">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo base_url().'blog'; ?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo base_url().'contact'; ?>">Contact</a>
          </li>
        </ul>
      </div>-->
    </div>
  </nav>
  <!--/ Nav End /-->