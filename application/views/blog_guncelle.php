<?php



$this->load->view('_header'); ?>

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
            <div class="box-header well" data-original-title="">
                <h5><i class="glyphicon glyphicon-edit"></i> Yazı Ekle</h5>


            </div>
            <div class="box-content">
                <form role="form" action="<?=base_url()?>Yazi_uye/UpdateAdd/<?=$veri[0]->Id?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adınız Soyadınız</label>
                        <input  type="text" class="form-control" width="60"  name="adi" value="<?=$veri[0]->adi?>"  >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input  type="text" class="form-control" value="<?=$this->session->users['email'];?>" width="60" name="mail" id="exampleInputEmail1" placeholder="Başlık">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Başlık</label>
                        <input  type="text" class="form-control" width="60" name="baslik" value="<?=$veri[0]->baslik?>" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kategori</label>
                        <select width="50" name="kategori" placeholder="Kategori">
                          <?php foreach ($veriler as $rs) { ?>
                                <option> <?=$rs->k_adi ?> </option>
                          <?php } ?>
                        </select>

                    </div>
                    <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
                    <textarea name="yazi" id="yazi" rows="10" cols="121"><?=$veri[0]->yazi?>
                    </textarea>
                 <br>
               <script>
                  CKEDITOR.replace('yazi');
                </script>

                <div class="form-group">
                    <label for="exampleInputEmail1">Keywords</label>
                    <input  type="text" class="form-control" width="60" name="keywords" value="<?=$veri[0]->keywords?>" >
                </div>

                 <br>
              <button type="submit" class="btn btn-warning">Güncelle</button>
              </form>

            </div>
          </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
