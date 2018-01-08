<?php
$query=$this->db->query("SELECT * FROM siteayarlari limit 1 ");
$kaynak['etiket']=$query->result();



$this->load->view('_header',$kaynak); ?>

    <!-- Main Content -->

    <div class="col-lg-2">
      <h3 align="center">Kategoriler </h3>
     <ul class="list-group">
    <?php foreach ($kategori as $rs) {?>
    <li  class="list-group-item" > <a href="<?=base_url()?>Kategoriler/listele/<?=$rs->Id?>">  <?= $rs->k_adi ?><br> </span></a> </li>
    <?php } ?>
    </ul>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php if ( $this->session->flashdata("bilgi")) { ?>

          <h2> İLETİŞİM </h2>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>İşlem: </strong><?=  $this->session->flashdata("bilgi")?>
        </div>
      <?php  } ?>
          <p> Her Türlü bilgi ve sorularınız için mesaj gönderebilirsiniz</p>


          <form method="post" action="<?=base_url()?>iletisim/mesajgonder">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">



                <input type="text" class="form-control" name="ad" placeholder="İsim-Soyisim" >
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email </label>
                <input type="email" class="form-control" name="email" placeholder="Email"  required >
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Mesajınız</label>
                <textarea rows="5" class="form-control" name="mesaj" placeholder="Mesaj"  required ></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>

            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="gonder" >Gönder</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <hr>
    <?php $this->load->view('_footer'); ?>
