<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Yönetim Paneli</title>


    <!-- The styles -->
    <link id="bs-css" href="<?=base_url () ?>temp/assets/admin/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?=base_url () ?>temp/assets/admin/css/charisma-app.css" rel="stylesheet">
    <link href='<?=base_url () ?>temp/assets/admin/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?=base_url () ?>temp/assets/admin/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?=base_url () ?>temp/assets/admin/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?=base_url () ?>temp/assets/admin/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?=base_url () ?>temp/assets/admin/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?=base_url () ?>temp/assets/admin/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?=base_url () ?>temp/assets/admin/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?=base_url () ?>temp/assets/admin/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?=base_url () ?>temp/assets/admin/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?=base_url () ?>temp/assets/admin/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?=base_url () ?>temp/assets/admin/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?=base_url () ?>temp/assets/admin/css/uploadify.css' rel='stylesheet'>
    <link href='<?=base_url () ?>temp/assets/admin/css/animate.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

    <!-- jQuery -->
    <script src="<?=base_url () ?>temp/assets/admin/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body bgcolor="blue">
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">  </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="<?=base_url () ?>admin/home">  Yönetim Paneli
                <span></span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"><?= $this->session->users["adi"] ?> </span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="<?=base_url()?>admin/Home/ayarlar">Profil</a></li>
                    <li class="divider"></li>
                    <li><a href="<?=base_url()?>admin/login/logout">Çıkış</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->





        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
