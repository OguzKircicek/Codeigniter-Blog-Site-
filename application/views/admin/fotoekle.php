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
            <a href="#">FotoGaleri-Ekle</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">


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
              <form action="<?=base_url()?>admin/fotogaleri/Addsave" method="post" enctype="multipart/form-data">

               <input type="file" name="resim"<br>
               <input type="submit" value="Resmi Yükle" name="submit">
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
