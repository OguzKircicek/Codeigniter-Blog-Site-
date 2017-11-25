<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Blog Sitem">
    <meta name="author" content="Admin">
    <meta name=”title” content=”Blog Sitem” />

    <meta name=”description” content=”Bilgisayar konulu yazıların birleştiği nokta.” />

    <meta name=”keywords” content=”blog,php,codeigneiter,sayfa,yazı” />

    <meta name=”author” content=”Oguz kırçiçek ve diğerleri” />

    <meta name=”owner” content=”oguz kircicek” />

    <meta name=”copyright” content=”(c) 2017” />

    <title>Blog Sitem</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>temp/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?=base_url()?>temp/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>temp/assets/css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('Home');?>">Blog Sitem</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Home');?>">Anasayfa</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('iletisim');?>">İletişim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('hakkimizda');?>">Hakkımızda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/login');?>">Giriş Yap veya Kayıt Ol</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?=base_url()?>temp/assets/img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
         <h2> Blog Siteme Hoşgeldiniz<h2>
              <span class="subheading"></span>

            </div>
          </div>
        </div>
      </div>
    </header>
