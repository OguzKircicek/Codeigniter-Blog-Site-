<div id="content" class="col-lg-10 col-sm-10">
    <!-- content starts -->
<div>
<ul class="breadcrumb">
<li>
    <b><a href="<?=base_url()?>admin/Home">Home</a></b>
</li>
<li>
  <b>  <a href="<?=base_url()?>admin/Kullanicilar">Foto Galeri</a></b>

</li>

</div>
</ul>
<?php if ( $this->session->flashdata("sonuc")) { ?>


<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>Transaction: </strong><?=  $this->session->flashdata("sonuc")?>
</div>
<?php  } ?>





<?php if($this->session->users['yetki']=='Admin') { ?>
<div class="row">
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">

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






               <th width="10px"></th>
               <th></th>
               <th>Fotoğrafın Ait Olduğu Blog Yazısı</th>
                </tr>
                </thead>

                <?php foreach ($foto as $rs ) { ?>
                  <tr>
                      <td><img width="200" height="200" src="<?=base_url()?>uploads/fotom/<?=$rs->yolu ?>"></td>
                      <td><?=$rs->tarih?></td>
                <td><?php $id=$rs->yazi_id;
                $islem=$this->db->query("SELECT * FROM yazilar WHERE Id=$id" );
                $data['baslikcek']=$islem->result();
                echo $data["baslikcek"][0]->baslik;
                 ?>




                </td>
                <td><a href="<?=base_url()?>admin/fotogaleri/foto_sil/<?=$rs->Id?>" style="margin-top:8px" class="btn btn-danger">
                <span ><b>SİL</b></span></a></a></td>
                  </tr>
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
              <strong>Üye olduğunuz için Bu alanı görüntüleyemezsiniz...</strong>
    </div>

<?php } ?>


</div><!--/#content.col-md-0-->
</div><!--/fluid-row-->



<hr>
