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
                  <form role="form" method="post" action="<?=base_url()?>admin/Yazilarr/Addsave">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adınız Soyadınız</label>
                        <input  type="text" class="form-control" value="<?=$this->session->users['adi'];?>" width="60" name="adi" id="exampleInputEmail1" placeholder="Ad Soyad">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input  type="text" class="form-control" value="<?=$this->session->users['email'];?>" width="60" name="mail" id="exampleInputEmail1" placeholder="Başlık">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Başlık</label>
                        <input  type="text" class="form-control" width="60" name="baslik" id="exampleInputEmail1" placeholder="Başlık">
                    </div>
                    <div class="form-group">
                              <label for="exampleInputEmail1">Kategori</label>
                        <select width="50" name="kategori" placeholder="Kategori">
                          <?php foreach ($veri as $rs) { ?>
                                <option> <?=$rs->k_adi ?> </option>
                          <?php } ?>
                        </select>

                    </div>

                    <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
                    <textarea name="yazi" id="yazi" rows="10" cols="121">
                    </textarea>
                 <br>
               <script>
                  CKEDITOR.replace('yazi');
                </script>
                <div class="form-group">
                    <label for="exampleInputEmail1">Anahtar Kelimeler</label>
                    <input  type="text" class="form-control" width="60" name="keywords" id="exampleInputEmail1" placeholder="Keywords">
                </div>
                 <br>
                    <button type="submit" class="btn btn-success">Yazı Ekle</button>
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
