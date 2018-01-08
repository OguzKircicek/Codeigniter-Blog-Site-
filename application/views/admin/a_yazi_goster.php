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
<?php if( $this->session->users['yetki']=='Admin') {

?>
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
                <form role="form" method="post" action="<?=base_url()?>admin/Yazilarr/preview">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adınız Soyadınız</label>
                        <input  type="text" class="form-control" width="60"  name="adi" value="<?=$veri[0]->adi?>" id="exampleInputEmail1"  placeholder="Ad Soyad">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Başlık</label>
                        <input  type="text" class="form-control" width="60" value="<?=$veri[0]->baslik ?>" name="baslik" id="exampleInputEmail1" placeholder="Başlık">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kategori</label>
                        <input  type="text" class="form-control" width="60" name="link" value="<?=$veri[0]->kategori ?>"  id="exampleInputEmail1" placeholder="Kategori">
                    </div>
                    <textarea name="yazi" rows="10" cols="121" readonly><?=$veri[0]->yazi?>
                    </textarea>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keywords</label>
                        <input  type="text" class="form-control" width="60" name="link" value="<?=$veri[0]->keywords ?>"  id="exampleInputEmail1" placeholder="Keywords">
                    </div>
                 <br>

                 <br>

                </form>

            </div>

                      <?php } else {
                        ?>
                        <div class="alert alert-info">
                                   <button type="button" class="close" data-dismiss="alert">&times;</button>
                                 <strong><b>Üye olduğunuz için Bu Alanı Görüntülüyemezsiniz!!<b></strong>
                       </div>
              <?php } ?>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
<h2>Yazının Galerisi</h2>
<div class="col-md-9">
      <div class="container gallery-container">
<div class="tz-gallery">

  <div class="row" style="width:1000px">
    <?php foreach($foto as $rs) {
          if($rs->yazi_id==$veri[0]->Id)
          {
       ?>
      <div class="col-sm-1 col-md-2" style="width:140px;margin:10px;">
          <div class="thumbnail" >
              <a class="lightbox" href="<?=base_url()?>uploads/fotom/<?=$rs->yolu?>">
                    <img src="<?=base_url()?>uploads/fotom/<?=$rs->yolu?>"  style="height:130px; width:150px ">
              </a>
          </div>
      </div>
    <?php } }?>
  </div>
</div>
</div>
</div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script>
          baguetteBox.run('.tz-gallery');
      </script>

<?php

	$this->load->view('admin/a_footer');


?>
