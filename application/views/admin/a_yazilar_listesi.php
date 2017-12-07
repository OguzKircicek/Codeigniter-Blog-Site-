<noscript>
        <div class="alert alert-block col-md-12">
            <h4 class="alert-heading">Warning!</h4>

            <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                enabled to use this site.</p>
        </div>
    </noscript>

    <div id="content" class="col-lg-10 col-sm-10">
        <!-- content starts -->
<div>
<ul class="breadcrumb">
    <li>
        <b><a href="<?=base_url()?>admin/Home">Home</a></b>
    </li>
    <li>
      <b>  <a href="<?=base_url()?>admin/Kullanicilar">Yazılar</a></b>

    </li>

</div>
</ul>
<?php if ( $this->session->flashdata("sonuc")) { ?>


<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Transaction: </strong><?=  $this->session->flashdata("sonuc")?>
</div>
<?php  } ?>
<a class="btn btn-success" href="<?=base_url()?>admin/yazilar/ekle"><i class="glyphicon glyphicon-pencil"></i> Yeni Yazı Ekle </a>



<?php if($this->session->users['yetki']=='Admin') { ?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Yazılar</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
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


                    foreach ($veri as $rs ) { ?>
                      <tr class="<?php $random=array_rand($a,1);
                      echo $a[$random];
                      ?>">

                          <td><?=$rs->adi?></td>
                          <td><textarea rows="2" cols="30" readonly><?=$rs->baslik?>
                          </textarea></td>
                        <td>  <textarea rows="2" cols="30" readonly ><?=$rs->yazi?>
                        </textarea></td>

                          <td><?=$rs->tarih?></td>
                          <td><a href="<?=base_url()?>admin/yazilar/preview/<?=$rs->Id?>" style="margin-top:8px" class="btn btn-success">
											<span class="glyphicon glyphicon-check"></span></a></a></td>
                      <td><a href="<?=base_url()?>admin/yazilar/blog_sil/<?=$rs->Id?>" style="margin-top:8px" class="btn btn-danger">
                  <span class="glyphicon glyphicon-remove"></span></a></a></td>
                  <td><a href="<?=base_url()?>admin/yazilar/edit/<?=$rs->Id?>" style="margin-top:8px" class="btn btn-info" onclick="return confirm('Güncellemek İstiyor musunuz ?')">
											<span class="glyphicon glyphicon-check"></span></a></td>
                  <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!--/span-->


</div><!--/row-->

<?php } else    {   ?>
         <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Üye olduğunuz için Sadece Yazı ekleyebilirsiniz Yazıları Görüntülüyemezsiniz!!</strong>
        </div>

<?php } ?>
<div class="pagination">
   <?= $linkler ?>
</div>



</div><!--/#content.col-md-0-->
</div><!--/fluid-row-->



<hr>
