

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
  <div  class="box col-md-12">
    <div  class="box col-md-9" style="margin-left:150px">
        <div class="box-inner">

            <div class="box-content">
                <form role="form" method="post" action="<?=base_url()?>Yazi_uye/preview">
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
                    <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
                    <textarea name="yazi" id="yazi"  rows="10" cols="121"> <?=$veri[0]->yazi?>
                    </textarea>
                 <br>
               <script>
                  CKEDITOR.replace('yazi');
                </script>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Keywords</label>
                        <input  type="text" class="form-control" width="60" name="link" value="<?=$veri[0]->keywords ?>"  id="exampleInputEmail1" placeholder="Keywords">
                    </div>
                 <br>

                 <br>

                </form>

            </div>





        </div>
    </div>
    <!--/span-->

</div><!--/row-->
</div>


<div  class="box col-md-12">
  <div  class="box col-md-9" style="margin-left:150px">
    <h2>Yazının Galerisi</h2>
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
</div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script>
          baguetteBox.run('.tz-gallery');
      </script>
<div style="float:left">
<?php

	$this->load->view('_footer');


?>
</div>
