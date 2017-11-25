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
            <a href="#">Kullanıcılar</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="btn btn-danger"  ></i> Kullanıcı Formu </h2></font>


            </div>
            <div class="box-content">
                <form role="form" action="<?=base_url()?>admin/Kullanicilar/UpdateAdd/<?=$veri[0]->id?>" method="post">
                  <div class="form-group">
                      <label for="exampleInputEmail1"style="background-color: #99ff99">Adı Soyadı </label>
                      <input type="text"  name='adi' value="<?= $veri[0]->adi ?>" class="form-control" id="exampleInputEmail1" required placeholder="Adınızı ve Soyadınızı Giriniz">
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" value="1" style="background-color: #99ff99">Email </label>
                        <input type="email" name='email' value="<?= $veri[0]->email ?>"  class="form-control" id="exampleInputEmail1" required placeholder="E-mail Giriniz">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" value="1" style="background-color:#99ff99">Şifre</label>
                        <input type="sifre" name='sifre' value="<?= $veri[0]->sifre ?>" class="form-control" id="sifre" required placeholder="Password">
                    </div>

                    <div class="control-group">
                    <label class="control-label" for="selectError" value="1"  style="background-color: #99ff99">Yetkisi</label>

                    <div class="controls">
                        <select id="selectError" name='yetki' data-rel="chosen">
                            <option ><?= $veri[0]->yetki ?></option>
                            <option >Admin</option>
                            <option >Üye</option>

                        </select>
                    </div>
                    <div class="control-group">
                    <label class="control-label" for="selectError" value="1"  style="background-color: #99ff99">Durum</label>

                    <div class="controls">
                        <select id="selectError" name='durum' data-rel="chosen">
                            <option ><?= $veri[0]->durum ?></option>
                            <option >Aktif</option>
                            <option >Pasif</option>

                        </select>
                    </div>

                </div>
                </div>
                <br>
                    <button type="submit" class="btn btn-danger ">Kullanıcı Güncelle</button>
                </form>

            </div>
        </div>
    </div>


</div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

<?php

	$this->load->view('admin/a_footer');


?>
