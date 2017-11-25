
<?php $this->load->view('_header'); ?>
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <h3> <?php echo $veri[0]->baslik; ?></h3>
            <?php echo $veri[0]->yazi; ?>

          </div>
        </div>
      </div>
    </article>

    <hr>

  <?php $this->load->view('_footer'); ?>
