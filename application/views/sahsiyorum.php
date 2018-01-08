<br>
<div class="row">
  <div  class="box col-md-12">
    <div  class="box col-md-9" style="margin-left:150px">
    <?php if ( $this->session->flashdata("sonuc")) {


      ?>


    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>İşlem: </strong><?=  $this->session->flashdata("sonuc")?>
    </div>
    <?php  } ?>
              <div class="panel panel-default">
                  <div class="panel-heading">
                  Yorumlarınız
                  </div>

                  <div class="panel-body">
                      <div class="table-responsive">

                          <table class="table" action="<?=base_url()?>Yorumlarim">
                              <thead>
                                  <tr>
                                      <th>Sıra</th>
                                      <th>Ad-Soyad</th>
                                      <th>Mesaj</th>
                                      <th>Mail</th>
                                      <th>Tarih</th>
                                      <th>Yorum Sil</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php

                                      $sayac=1;
                                      $a=array("success","info","warning","danger");

                                foreach($yorum as $rs) {
                                   if($this->session->users["id"]==$rs->kul_id) {

                                  ?>

                                  <tr class="<?php $random=array_rand($a,1);
                                  echo $a[$random];
                                  ?>">
                                      <td><?php echo $sayac++ ?></td>
                                      <td><?=$this->session->users['adi']?></td>
                                      <td> <textarea name="aciklama" rows="3" cols="40"><?= $rs->metin ?>
                                      </textarea></td>

                                        <td><?= $rs->email ?></td>
                                      <td><?= $rs->tarih?></td>
                                      <td><a href="<?=base_url()?>Yorumlarim/yorumsil/<?=$rs->Id?>" style="margin-top:8px" class="btn btn-danger">
                                  <span class="glyphicon glyphicon-remove"></span></a></a></td>
                                  </tr>
                                <?php } } ?>
                              </tbody>
                          </table>
                      </div>
                      <!-- /.table-responsive -->
                  </div>
                  <!-- /.panel-body -->
              </div>
</div>
              <!-- /.panel -->
          </div>
          <!-- /.col-lg-6 -->

    </div><!--/row-->

<?php  $this->load->view('_footer'); ?>
