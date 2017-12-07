<?php

 $this->load->view('_header'); ?>

 <div class="container ">

     <div class="row">
         <div class="col-md-6 col-md-offset-3">

             <b><h7>Arama İçin</h7></b>
         </div>
     </div>

     <div class="row">
         <div class="col-md-4 col-md-offset-3">
             <form action="<?=base_url()?>arama/arabul" method="post" class="search-form">
                 <div class="form-group has-feedback">
             		<label for="search" class="sr-only">Search</label>
             		<input type="text" class="form-control" name="search" id="search" placeholder="search">
               		<span class="glyphicon glyphicon-search form-control-feedback"></span>
             	</div>
             </form>
         </div>
     </div>
 </div>

      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <?php    foreach($veriler as $rs) {
           if($rs->onay=='1') {
              ?>
          <div class="post-preview">
            <a href="<?php echo base_url('yazilar/'); echo ''.$rs->Id ; ?>">
              <h3  >
              <?php echo $rs->baslik ?>
             </h3>
              <h6 title="Bu Yazının Konusu : <?=$rs->konu ?>" class="post-subtitle">

                 <?php echo kisalt($rs->yazi,400); ?>

              </h6>
            </a>
            <p class="post-meta">
              <a href="#">Eklenme Tarihi :  </a>
            <?php echo $rs->tarih ?> <a href="#">Konu: <?=$rs->konu ?> </a>         </p> 


          </div>

        <?php } }?>

          <!-- Pager -->
          <!-- Pager -->
         <div class="pagination">
            <?php echo $linkler ?>
        </div>
         </div>

        </div>
      </div>


    <hr>

	<?php $this->load->view("_footer.php"); ?>
