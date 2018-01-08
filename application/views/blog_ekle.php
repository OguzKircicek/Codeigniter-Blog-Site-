

<div id="content" class="col-lg-10 col-sm-10">

<div class="row">
  <div  class="box col-md-12">
    <div  class="box col-md-9" style="margin-left:150px">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
              <br><br>
                <h4><i class="glyphicon glyphicon-edit"></i> Yazı Ekle</h4>


            </div>
            <div class="box-content">
                  <form role="form" method="post" action="<?=base_url()?>Yazi_uye/Addsave">
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
                          <?php foreach ($kat as $rs) { ?>
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
    <!--/sp<an-->
</div>
</div><!--/row-->

</div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
<div style="float:left">
<?php
   $this->load->view('_footer');


?>
</div>
