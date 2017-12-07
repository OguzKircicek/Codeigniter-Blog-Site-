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
            <b>  <a href="<?=base_url()?>admin/Home">Home</a></b>
        </li>
        <li>
          <b>  <a href="<?=base_url()?>admin/Kullanicilar">Kullanıcılar</a></b>

        </li>

</div>
</ul>
    <?php if ( $this->session->flashdata("sonuc")) { ?>


  <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>İşlem: </strong><?=  $this->session->flashdata("sonuc")?>
  </div>
<?php  } ?>
<?php if($this->session->users['yetki']=='Admin') { ?>
<a class="btn btn-success" href="<?=base_url()?>admin/Kullanicilar/ekle"><i class="glyphicon glyphicon-user"></i> Yeni Kullanıcı Ekle </a>

<div class="row">
    <div class="col-md-10 ">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Kullanıcılar</h2>


            </div>

            <div class="box-content row">
                <div class=" col-md-10">


                   <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Adı Soyadı</th>
        <th>Email</th>
        <th>Yetki</th>
        <th>Durum</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
	<?php
  $sayac=1;
  $a=array("success","info","warning","danger");
	foreach($veri as $rs)
	{

	?>
  <tr class="<?php $random=array_rand($a,1);
  echo $a[$random];
  ?>">
        <td><?=$rs->adi  ?></td>
        <td class="center"><?=$rs->email  ?></td>
        <td class="center"><?=$rs->yetki  ?></td>
        <td class="center">
            <span class="label-success label label-default"><?=$rs->durum?></span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="<?=base_url()?>admin/Kullanicilar/preview/<?=$rs->id?>">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
            <a class="btn btn-info" href="<?=base_url()?>admin/Kullanicilar/edit/<?=$rs->id?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a><br>
            <a class="btn btn-danger" href="<?=base_url()?>admin/Kullanicilar/delete/<?=$rs->id?>"  onclick="return confirm ('Deleting... Are You Sure ?');" >
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
     <?php
	}
	 ?>
    </tr>
    </tbody>
    </table>



          <?php } else {
            ?>
            <div class="alert alert-info">
                       <button type="button" class="close" data-dismiss="alert">&times;</button>
                     <strong><b>Üye olduğunuz için Bu Alanı Görüntülüyemezsiniz!!<b></strong>
           </div>
  <?php } ?>

        </div>
    </div>
</div>




    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->



    <hr>
