<?php $this->load->view('admin/a_header');?>
<?php $this->load->view('admin/a_sidebar');?>

<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
 <div>
    <ul class="breadcrumb">
        <li>
            <b>  <a href="<?=base_url()?>admin/Home">Home</a></b>
        </li>
        <li>
          <b>  <a href="#">Site İçi Ayarlar</a></b>
        </li>
    </ul>
</div>
<?php if($this->session->users['yetki']=='Admin') { ?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="btn btn-danger"  ></i> Site İçi Ayarları </h2></font>


            </div>
            <div class="box-content">
                <form role="form" action="<?=base_url()?>admin/Home/siteiciayarguncelle/<?=$siteici[0]->Id?>" method="post">
                  <div class="form-group">
                      <label for="exampleInputEmail1"style="background-color: #99ff99">Keywords </label>
                      <input type="text"  name='keywords' value="<?=$siteici[0]->keywords?>" class="form-control"  required placeholder="Adınızı ve Soyadınızı Giriniz">
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" value="1" style="background-color: #99ff99">Açıklama </label>
                        <input type="text" name='aciklama' value="<?=$siteici[0]->aciklama ?>"  class="form-control"  required placeholder="E-mail Giriniz">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" value="1" style="background-color:#99ff99">Name</label>
                        <input type="text" name='name' value="<?= $siteici[0]->name ?>" class="form-control"  required placeholder="Nmae">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" value="1" style="background-color:#99ff99">Smtp Port Numarası</label>
                        <input type="text" name='smtpport' value="<?= $siteici[0]->smtpport ?>" class="form-control"  required placeholder="Port Numarası">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" value="1" style="background-color:#99ff99">Smtp Host</label>
                        <input type="text" name='smtphost' value="<?= $siteici[0]->smtphost ?>" class="form-control"  required placeholder="Host">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" value="1" style="background-color:#99ff99">Mail Adresi</label>
                        <input type="text" name='mail' value="<?= $siteici[0]->mail ?>" class="form-control"  required placeholder="Mail">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" value="1" style="background-color:#99ff99">Mail Şifresi</label>
                        <input type="text" name='sifre' value="<?= $siteici[0]->sifre ?>" class="form-control"  required placeholder="Şifre">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1" value="1" style="background-color:#99ff99">Mail Konusu</label>
                        <input type="text" name='subject' value="<?= $siteici[0]->subject ?>" class="form-control"  required placeholder="Mail">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" value="1" style="background-color:#99ff99">Gönderilecek Mesaj</label>
                        <input type="text" name='message' value="<?= $siteici[0]->message ?>" class="form-control"  required placeholder="Mesaj">
                    </div>

                    <br>
                        <button type="submit" class="btn btn-danger ">Site Bilgilerini Güncelle</button>
                    </form>

                  <br>
                </div>

<?php }
else {  ?>
  <div class="alert alert-danger">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
           <strong>BU ALANI YALNIZCA ADMİN ÜYELER GÖREBİLİR</strong>
  </div>
<?php } ?>

            </div>
        </div>
    </div>



<?php $this->load->view('admin/a_footer');?>
