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
              Onay Bekleyen Yazılar
                  </div>
                <?php if($this->session->users['yetki']=='Admin') { ?>
                  <div class="panel-body">
                      <div class="table-responsive">

                          <table class="table" action="<?=base_url()?>admin/onay">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th width="200px">Ad-Soyad</th>
                                      <th>Mesaj</th>
                                      <th width="200px">Kategori</th>
                                      <th width="100px">Tarih</th>
                                      <th>Onay İşlemi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php

                                      $sayac=1;
                                      $a=array("success","info","warning","danger");

                                foreach($onay as $rs) {

                                  ?>

                                  <tr class="<?php $random=array_rand($a,1);
                                  echo $a[$random];
                                  ?>">
                                      <td><?php echo $sayac++ ?></td>
                                      <td><?= $rs->adi ?></td>
                                      <td> <textarea name="aciklama" rows="3" cols="40"><?= $rs->yazi ?>
                                      </textarea></td>
                                        <td><?= $rs->kategori ?></td>
                                      <td><?= $rs->tarih ?></td>
                                      <td><a href="<?=base_url()?>admin/Yazilarr/onayyon/<?=$rs->Id?>" style="margin-top:2px" class="btn btn-success">
                                  <span class="glyphicon glyphicon-check"></span></a></a></td>
                                      <td><a href="<?=base_url()?>admin/Yazilarr/onayy_ret/<?=$rs->Id?>" style="margin-top:2px" class="btn btn-danger">
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
