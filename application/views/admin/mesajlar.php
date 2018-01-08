<?php $this->load->view('admin/a_header'); ?>
<?php $this->load->view('admin/a_sidebar'); ?>


  <div class="col-md-9">
    <?php if ( $this->session->flashdata("sonuc")) { ?>


    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>İşlem: </strong><?=  $this->session->flashdata("sonuc")?>
    </div>
    <?php  } ?>
              <div class="panel panel-default">
                  <div class="panel-heading">
                Gelen Mesajlar
                  </div>
                <?php if($this->session->users['yetki']=='Admin') { ?>
                  <div class="panel-body">
                      <div class="table-responsive">

                          <table class="table" action="<?=base_url()?>admin/Mesajlar">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Ad-Soyad</th>
                                      <th>Mesaj</th>
                                      <th>Mail</th>
                                      <th>Tarih</th>
                                      <th>Mesaj Sil</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php

                                      $sayac=1;
                                      $a=array("success","info","warning","danger");

                                foreach($veri as $rs) {

                                  ?>

                                  <tr class="<?php $random=array_rand($a,1);
                                  echo $a[$random];
                                  ?>">
                                      <td><?php echo $sayac++ ?></td>
                                      <td><?= $rs->gonderenadi ?></td>
                                      <td> <textarea name="aciklama" rows="3" cols="40"><?= $rs->mesajaciklama ?>
                                      </textarea></td>
                                        <td><?= $rs->mesajmail ?></td>
                                      <td><?= $rs->mesajtarihi ?></td>
                                      <td><a href="<?=base_url()?>admin/Mesajlar/mesajsil/<?=$rs->Id?>" style="margin-top:8px" class="btn btn-danger">
                                  <span class="glyphicon glyphicon-remove"></span></a></a></td>
                                  </tr>
                                     <?php } ?>
                              </tbody>
                          </table>
                      </div>
                      <!-- /.table-responsive -->
                  </div>
                  <!-- /.panel-body -->
              </div>
            <?php } else {
              ?>
              <div class="alert alert-info">
                         <button type="button" class="close" data-dismiss="alert">&times;</button>
                       <strong><b>Üye olduğunuz için Bu Alanı Görüntülüyemezsiniz!!<b></strong>
             </div>
    <?php } ?>
              <!-- /.panel -->
          </div>

<?php $this->load->view('admin/a_footer'); ?>
