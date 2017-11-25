<?php

 $this->load->view('_header'); ?>
 
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php foreach($veri as $rs) { ?>
          <div class="post-preview">
            <a href="<?php echo base_url('yazilar/'); echo ''.$rs->Id ; ?>">
              <h3 >
              <?php echo $rs->baslik ?>
             </h3>
              <h6 class="post-subtitle">

                 <?php echo kisalt($rs->yazi,100); ?>

              </h6>
            </a>
            <p class="post-meta">
              <a href="#">Eklenme Tarihi :  </a>
            <?php echo $rs->tarih ?></p>
          </div>
        <?php } ?>

          <!-- Pager -->
          <!-- Pager -->
         <div class="pagination"
            <?php echo $linkler ?>
            </div>
         </div>

        </div>
      </div>


    <hr>
	<?php $this->load->view("_footer.php"); ?>
