<noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>
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
                <h2><i class="glyphicon glyphicon-edit"></i> Yazı Ekle</h2>

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
                <form role="form" action="<?=base_url()?>admin/yazilar/UpdateAdd/<?=$veri[0]->Id?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adınız Soyadınız</label>
                        <input  type="text" class="form-control" width="60"  name="adi" value="<?=$veri[0]->adi?>"  >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Başlık</label>
                        <input  type="text" class="form-control" width="60" name="baslik" value="<?=$veri[0]->baslik?>" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Konu</label>
                        <input  type="text" class="form-control" width="60" name="konu" id="exampleInputEmail1" placeholder="Konu">
                    </div>
                    <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
                    <textarea name="yazi" id="yazi" rows="10" cols="121"><?=$veri[0]->yazi?>
                    </textarea>
                 <br>
               <script>
                  CKEDITOR.replace('yazi');
                </script>

                 <br>
              <button type="submit" class="btn btn-warning">Güncelle</button>
              </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->


<?php

	$this->load->view('admin/a_footer');
