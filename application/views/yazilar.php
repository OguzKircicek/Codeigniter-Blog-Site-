<?php
$query=$this->db->query("SELECT * FROM siteayarlari limit 1 ");
$kaynak['etiket']=$query->result();



$this->load->view('_header',$kaynak); ?>
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
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
            <br>

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
    </article>



  <?php $this->load->view('_footer'); ?>
