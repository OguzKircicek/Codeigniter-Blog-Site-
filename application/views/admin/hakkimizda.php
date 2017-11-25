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
    <b>  <a href="<?=base_url()?>admin/hakkimizda">Hakkımızda</a><b>

    </li>

<?php if($this->session->users['yetki']=='Admin') { ?>
  </ul></div>
<div class="box col-md-9">

    <form role="form" action="<?=base_url()?>admin/hakkimizda/guncelle/<?=$veri[0]->Id?>" method="post">

        <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
        <textarea name="aciklama"  rows="4" cols="11"><?=$veri[0]->icerik?>
        </textarea>
     <br>
   <script>
      CKEDITOR.replace('aciklama');
    </script>
     <center><button type="submit" class="btn btn-info" style="margin-top:30px">Hakkımda Kaydet </button>
  </form>
</div>
<?php } else { ?>
<div class="alert alert-info">
           <button type="button" class="close" data-dismiss="alert">&times;</button>
         <strong>Admin Yetkisine Sahip Değilsiniz!!Üye olduğunuz için Bu alanı görüntülüyemezsiniz!!</strong>
</div>

<?php } ?>

</div>
