<?php
$query=$this->db->query("SELECT * FROM siteayarlari limit 1 ");
$kaynak['etiket']=$query->result();



$this->load->view('_header',$kaynak); ?>

<div class="col-lg-2">
  <h3 align="center">Kategoriler </h3>
 <ul class="list-group">
<?php foreach ($a as $rs) {?>
<li  class="list-group-item" > <a href="<?=base_url()?>Kategoriler/listele/<?=$rs->Id?>">  <?= $rs->k_adi ?><br> </span></a> </li>
<?php } ?>
</ul>
</div>


      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <h3> <?php echo $veri[0]->baslik; ?></h3>
            <?php echo $veri[0]->yazi; ?>
            <!-- AddThis Button BEGIN -->

            <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
            <a class="addthis_button_preferred_1"></a>
            <a class="addthis_button_preferred_2"></a>
            <a class="addthis_button_preferred_3"></a>
            <a class="addthis_button_preferred_4"></a>
            <a class="addthis_button_compact"></a>
            <a class="addthis_counter addthis_bubble_style"></a>
            </div>
            <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4fe1c6bb3c70d8cf"></script>
            <?php if($this->session->users) { ?>
             <a class="btn btn-success" href="<?=base_url()?>Fotolar/ekle/<?=$veri[0]->Id?>"><i class="glyphicon glyphicon-pencil"></i> Yeni Foto Ekle </a>
           <?php } ?>


            <h2>Yazının Galerisi</h2>

    <div  class="container gallery-container">
          <div  class="tz-gallery">

              <div class="row">
                <?php foreach($foto as $rs) {
                      if($rs->yazi_id==$veri[0]->Id)
                      {
                   ?>
                  <div class="col-sm-1 col-md-2" style="margin:5px;">
                      <div class="thumbnail" >
                          <a class="lightbox" href="<?=base_url()?>uploads/fotom/<?=$rs->yolu?>">
                                <img src="<?=base_url()?>uploads/fotom/<?=$rs->yolu?>"  style="height:150px; width:180px ">
                          </a>
                      </div>
                  </div>
                <?php } }?>
              </div>
          </div>
      </div>

                  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
                  <script>
                      baguetteBox.run('.tz-gallery');
                  </script>








            <h2 ><span class="btn btn-danger">Yorumlar</span></h2>
            <?php    $i=0; foreach($yorum as $rs) { if(($rs->yazi_id)==$veri[0]->Id) { $i++;  ?>
      <fieldset>
      <div class="well well-lg">
        <div class="tab-pane active" >

      <div class="clr"></div>
      <div class="comment"> <a href="#"><img src="<?=base_url()?>assets/images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
        <p><a style="font-size:15px;" href="#"><strong><?=$rs->kullanici?></strong></a> Yazdı:<br />
          <?=$rs->tarih?></p>
        <p><fieldset><?=$rs->metin?></fieldset></p>
      </div>
      </div>
    </div>
    </fieldset>
            <?php }

          } ?>
          <?php


            if($i==0) {
          ?>
              <h2>Bu Yazı İçin Henüz Yorum Yapılmadı </h2>
          <?php     } ?>
          <br>
                      <form method="post" action="<?=base_url()?>Home/yorumlar/<?= $veri[0]->Id ?>">
                        <div class="control-group">
                          <div class="form-group floating-label-form-group controls">


                            <?php if($this->session->users) { ?>
                            <input type="text" class="form-control" name="ad" placeholder="İsim-Soyisim" value=<?=$this->session->users['yetki'] ?>>
                          <?php }
                           else { ?>
                             <input type="text" class="form-control" name="ad" placeholder="İsim-Soyisim">
                           <?php } ?>
                            <p class="help-block text-danger"></p>
                          </div>
                        </div>
                          <?php if($this->session->users) { }
                          else { ?>
                        <div class="control-group">
                          <div class="form-group floating-label-form-group controls">
                            <label>Email </label>
                            <input type="email" class="form-control" name="email" placeholder="Email"  required >
                            <p class="help-block text-danger"></p>
                          </div>
                        </div>
                      <?php } ?>

                        <div class="control-group">
                          <div class="form-group floating-label-form-group controls">
                            <label>Yorumunuz</label>
                            <textarea rows="5" class="form-control" name="mesaj" placeholder="Yorumunuz"  required ></textarea>
                            <p class="help-block text-danger"></p>
                          </div>
                        </div>

                        <div class="form-group">
                          <button type="submit" class="btn btn-primary" name="gonder" >Gönder</button>
                        </div>


          </div>
        </div>
      </div>



  <?php $this->load->view('_footer'); ?>
