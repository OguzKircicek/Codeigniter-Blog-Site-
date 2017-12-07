<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="description" content="<?= $etiket[0]->aciklama ?>">

    <meta name=”keywords” content="<?= $etiket[0]->keywords?>">



    <title><?= $etiket[0]->name ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>temp/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?=base_url()?>temp/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>temp/assets/css/clean-blog.min.css" rel="stylesheet">

      <link href="<?=base_url()?>temp/assets/css/galeri.css" rel="stylesheet">
      <link href="<?=base_url()?>temp/assets/css/yorum.css" rel="stylesheet" type="text/css">
      <link href="<?=base_url()?>temp/assets/vendor/bootstrap/css/bootstrap.css">
      <link href="<?=base_url()?>temp/assets/vendor/bootstrap/css/bootstrap.min.css">
      <link href="<?=base_url()?>temp/assets/vendor/bootstrap/js/bootstrap.js">
      <link href="<?=base_url()?>temp/assets/vendor/bootstrap/js/bootstrap.min.js">
      <link href="<?=base_url()?>temp/assets/css/ara.css" rel="stylesheet">

      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <style type="text/css">
 img{

     width: 100%;
       height: auto;
   }


</style>
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
              <a class="nav-link" href="<?php echo base_url('hakkimizda');?>">Hakkımızda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('iletisim/iletisim');?>">İletişim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('fotogaleri');?>">Foto Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('cvm');?>">CV'M</a>
            </li>
            <?php if($this->session->users) { ?>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url()?>admin/login/logout">Çıkış</a>
              </li>
            <?php }
            else { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/login');?>">Giriş Yap veya Kayıt Ol</a>
            </li>
          <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
    <?php if(isset($veri[0]->baslik)) { ?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?=base_url()?>temp/assets/img/1.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h2>
                <?=$veri[0]->baslik?>
              <h2>
              <span class="subheading"></span>
            </div>
          </div>
        </div>
      </div>
    </header>
  <?php }  else { ?>

    <div id="carousel-container">

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $a=0;
                         foreach ($slider as $rs ){
                           $a++; ?>
                        <div style="height:300px;"class="item <?php if($a==1) {?> active <?php } ?>">
                            <img src="<?=base_url()?>uploads/<?=$rs->yolu ?>" alt="">
                            <div class="carousel-caption">

                            </div>
                        </div>
                      <?php } ?>
                    </div>
                    <a class="left carousel-control hidden-xs" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control hidden-xs" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div><!--/#carousel-example-generic-->
            </div>




<?php } ?><br>
