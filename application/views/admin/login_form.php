<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->

    <link id="bs-css" href="<?=base_url()?>temp/assets/admin/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href='<?=base_url()?>temp/assets/admin/css/charisma-app.css' rel="stylesheet">
    <link href='<?=base_url()?>temp/assets/admin/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?=base_url()?>temp/assets/admin/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?=base_url()?>temp/assets/admin/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?=base_url()?>temp/assets/admin/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?=base_url()?>temp/assets/admin/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?=base_url()?>temp/assets/admin/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?=base_url()?>temp/assets/admin/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?=base_url()?>temp/assets/admin/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?=base_url()?>temp/assets/admin/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?=base_url()?>temp/assets/admin/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?=base_url()?>temp/assets/admin/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?=base_url()?>temp/assets/admin/css/uploadify.css' rel='stylesheet'>
    <link href='<?=base_url()?>temp/assets/admin/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?=base_url()?>/assets/admin/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
<div class="ch-container">
    <div class="row">

    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>LOGİN</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
       <?php if( $this->session->flashdata("mesaj")) { ?>
          <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong> <?= $this->session->flashdata("mesaj") ?></strong>
            </div>
        <?php }  ?>
            <div class="alert alert-info">


                Mail ve Şifre Giriniz!
            </div>
            <form class="form-horizontal" action="<?=base_url()?>admin/login/login_ol" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="email" name="email" required class="form-control" placeholder="Email">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" required name="sifre" class="form-control" placeholder="Password">
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-prepend">
                        <label class="remember" for="remember"><input type="checkbox" id="remember"> Beni Hatırla </label>
                    </div>
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary">Giriş Yap</button>
                    </p>




                </fieldset>
            </form>
            <p class="center col-md-5">
              <a href="<?=base_url()?>admin/kayitol">  <button type="submit" class="btn btn-primary"> Kayıt Ol</button></a>
            </p>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="<?=base_url()?>temp/assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="<?=base_url()?>temp/assets/admin/js/jquery.cookie.js"></script>
<!-- library for cookie management -->
<!-- calender plugin -->
<script src="<?=base_url()?>temp/assets/admin/bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url()?>temp/assets/admin/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<!-- data table plugin -->
<script src="<?=base_url()?>temp/assets/admin/js/jquery.dataTables.min.js"></script>

<!-- select or dropdown enhancer -->
<script src="<?=base_url()?>temp/assets/admin/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?=base_url()?>temp/assets/admin/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?=base_url()?>temp/assets/admin/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?=base_url()?>temp/assets/admin/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?=base_url()?>temp/assets/admin/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?=base_url()?>temp/assets/admin/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?=base_url()?>temp/assets/admin/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?=base_url()?>temp/assets/admin/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?=base_url()?>temp/assets/admin/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?=base_url()?>temp/assets/admin/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?=base_url()?>temp/assets/admin/js/charisma.js"></script>


</body>
</html>
