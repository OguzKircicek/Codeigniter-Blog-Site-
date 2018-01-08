<noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>

        </noscript>

          <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>

<?php

$this->load->view('admin/a_header');
$this->load->view('admin/a_sidebar');

?>

<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
 <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Yazılar</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Slider Ekle</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
              <div class="box-content">
                <form action="<?=base_url()?>admin/Slider/Addsave" method="post" enctype="multipart/form-data">

                 <input type="file" name="resim"<br>
                 <input type="submit" value="Resmi Yükle" name="submit">
                 <br><br>
                 <input type="text" placeholder="Slide Adını Giriniz" name="adi">
                 <br><br>
                 <input type="text" placeholder="Keywords" name="keywords">
                 <br><br>
                 <b><p>Slideri Tanımlayıcı Yazı Girin</p></b>
                 <input type="text" placeholder="description" name="description">
                 <br><br>
                 <b><p>Açıklama</p></b>
                 <textarea name="bilgi" id="bilgi" rows="10" cols="121">
                 </textarea>
              <br>
            <script>
               CKEDITOR.replace('bilgi');
             </script>
             </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

</div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

<?php

	$this->load->view('admin/a_footer');


?>
