<?php $this->load->view('_header'); ?>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php if ( $this->session->flashdata("bilgi")) { ?>


        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>İşlem: </strong><?=  $this->session->flashdata("bilgi")?>
        </div>
      <?php  } ?>
          <p> Her Türlü bilgi ve sorularınız için mesaj gönderebilirsiniz</p>
          <form method="post" action="<?=base_url()?>home/mesajgonder">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Ad-Soyad</label>
                <input type="text" class="form-control" name="ad" placeholder="İsim-Soyisim" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email </label>
                <input type="email" class="form-control" name="email" placeholder="Email"  required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Mesajınız</label>
                <textarea rows="5" class="form-control" name="mesaj" placeholder="Mesaj"  required data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="gonder" >Gönder</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <hr>
    <?php $this->load->view('_footer'); ?>
