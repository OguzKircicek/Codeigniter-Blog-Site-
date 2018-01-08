
<?php if ( $this->session->flashdata("sonuc")) { ?>


<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Transaction: </strong><?=  $this->session->flashdata("sonuc")?>
</div>
<?php  } ?>






<div class="row">

  <div  class="box col-md-12">
    <div  class="box col-md-9" style="margin-left:150px">
      <br>
      <a style="margin-bottom:20px"class="btn btn-success" href="<?=base_url()?>Yazi_uye/ekle"><i class="glyphicon glyphicon-pencil"></i> Yeni Yazı Ekle </a>

        <div class="box-inner">
            <div class="box-header well" data-original-title="">

                <h4><i class="glyphicon glyphicon-pencil"></i> Yazılar</h4>


            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
                        <th width="200px">Username</th>
                        <th width="200px">Başlık</th>
                        <th width="400px">İçerik</th>
                        <th width="400px">Kategori</th>
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
                          <td><?=$rs->kategori?></td>
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
    <!--/span-->
</div>

</div><!--/row-->








</div><!--/#content.col-md-0-->
</div><!--/fluid-row-->



<hr>
