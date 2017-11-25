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
          <b>  <a href="#">Ayarlar</a></b>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="btn btn-danger"  ></i> Bilgilerim </h2></font>


            </div>
            <div class="box-content">
                <form role="form" action="<?=base_url()?>admin/Home/ayarguncelle/<?=$veri[0]->id?>" method="post">
                  <div class="form-group">
                      <label for="exampleInputEmail1"style="background-color: #99ff99">Adı Soyadı </label>
                      <input type="text"  name='adi' value="<?=$veri[0]->adi?>" class="form-control"  required placeholder="Adınızı ve Soyadınızı Giriniz">
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" value="1" style="background-color: #99ff99">Email </label>
                        <input type="email" name='mail' value="<?=$veri[0]->email ?>"  class="form-control"  required placeholder="E-mail Giriniz">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" value="1" style="background-color:#99ff99">Şifre</label>
                        <input type="sifre" name='sifre' value="<?= $veri[0]->sifre ?>" class="form-control"  required placeholder="Password">
                    </div>



                </div>
                </div>
                <br>
                    <button type="submit" class="btn btn-danger ">Bilgilerimi Güncelle</button>
                </form>

            </div>
        </div>
    </div>


<?php $this->load->view('admin/a_footer');?>
