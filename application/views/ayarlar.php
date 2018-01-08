

<div id="content" class="col-lg-10 col-sm-10">

<div class="row">
  <div  class="box col-md-12">
    <div  class="box col-md-9" style="margin-left:150px">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h4><i class="btn btn-danger"  ></i> Bilgilerim </h4></font>


            </div>
            <div class="box-content">
                <form role="form" action="<?=base_url()?>Ayarlar/ayarguncelle/<?=$veri[0]->id?>" method="post">
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

                    <br>
                        <button type="submit" class="btn btn-danger ">Bilgilerimi Güncelle</button>
                    </form>

                  <br>
                </div>
                <h4><b><i class="glyphicon glyphicon-pencil"></i> Yazılarım</b></h4>


            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
                        <th width="200px">Username</th>
                        <th width="200px">Başlık</th>
                        <th width="400px">İçerik</th>
                        <th width="150px">Tarih</th>
                        <th witdh="10px">Göster</th>
                        <th width="10px">Silme</th>
                        <th width="10px">Düzenle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sayac=1;
                    $a=array("success","info","warning","danger");


                    foreach ($yazi as $rs ) { ?>
                      <tr class="<?php $random=array_rand($a,1);
                      echo $a[$random];
                      ?>">

                          <td><?=$rs->adi?></td>
                          <td><textarea rows="2" cols="30" readonly><?=$rs->baslik?>
                          </textarea></td>
                        <td>  <textarea rows="2" cols="30" readonly ><?=$rs->yazi?>
                        </textarea></td>

                          <td><?=$rs->tarih?></td>
                          <td><a href="<?=base_url()?>Yazi_uye/preview/<?=$rs->Id?>" style="margin-top:8px" class="btn btn-success">
                      <span class="glyphicon glyphicon-check"></span></a></a></td>
                      <td><a href="<?=base_url()?>Yazi_uye/blog_sil/<?=$rs->Id?>" style="margin-top:8px" class="btn btn-danger">
                  <span class="glyphicon glyphicon-remove"></span></a></a></td>
                  <td><a href="<?=base_url()?>Yazi_uye/edit/<?=$rs->Id?>" style="margin-top:8px" class="btn btn-info" onclick="return confirm('Güncellemek İstiyor musunuz ?')">
                      <span class="glyphicon glyphicon-check"></span></a></td>
                  <?php } ?>
                    </tbody>
                </table>
                </div>

</div>
            </div>
        </div>
    </div>
    <div style="float:left" >
<?php
  $this->load->view('_footer');
?>
</div>
