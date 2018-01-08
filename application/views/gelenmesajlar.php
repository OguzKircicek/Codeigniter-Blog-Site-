
        <div id="content" class="col-md-10">
<div class="row" >
  <div class="col-md-10">
    <?php if ( $this->session->flashdata("sonuc")) { ?>


    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>İşlem: </strong><?=  $this->session->flashdata("sonuc")?>
    </div>
    <?php  } ?>


      <br><br>
      <div class="row">
        <div  class="box col-md-12">
          <div  class="box col-md-12" style="margin-left:150px">
              <div class="panel panel-default">
                  <div class="panel-heading">
                Gelen Mesajlar
                  </div>

                  <div class="panel-body">
                      <div class="table-responsive">

                          <table class="table">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Ad-Soyad</th>
                                      <th>Kime Gönderildi</th>
                                      <th>Başlık</th>
                                      <th>Mesaj</th>
                                      <th>Tarih</th>
                                      <th>Mesaj Sil</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php
                                $sayi=0;

                                foreach($veriler as $rs) {

                                   $sayi++;
                                  ?>

                                  <tr>
                                      <td><?=$sayi?></td>
                                      <td><?=$rs->adi?></td>
                                      <td><?=$this->session->users["adi"]?></td>
                                      <td><?=$rs->baslik ?></td>
                                      <td> <textarea name="aciklama" rows="3" cols="40"><?= $rs->metin ?>
                                      </textarea></td>

                                      <td><?= $rs->tarih ?></td>
                                      <td><a href="<?=base_url()?>admin/siteicimesaj/mesajsil/<?=$rs->mesaj_id?>" style="margin-top:8px" class="btn btn-danger">
                                  <span class="glyphicon glyphicon-remove"></span></a></a></td>
                                  </tr>
                                <?php } ?>
                              </tbody>
                          </table>
                      </div>
                      <!-- /.table-responsive -->
                  </div>
                  <!-- /.panel-body -->
              </div></div>


</div>
</div>
              <!-- /.panel -->
          </div>
          <!-- /.col-lg-6 -->

    </div><!--/row-->
<?php $this->load->view('_footer'); ?>
