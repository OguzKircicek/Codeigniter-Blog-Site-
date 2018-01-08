<?php

 $this->load->view('_header'); ?>

 <div class="col-lg-2">
   <h3 align="center">Kategoriler </h3>
  <ul class="list-group">
 <?php foreach ($a as $rs) {?>
 <li  class="list-group-item" > <a href="<?=base_url()?>Kategoriler/listele/<?=$rs->Id?>">  <?= $rs->k_adi ?><br> </span> </li>
 <?php } ?>
 </ul>
 </div>


 <div class="container ">



      <div class="row">
        <div class="col-lg-9 col-lg-offset-1 col-md-12 col-md-offset-1">
        <?php    foreach($veriler as $rs) {
           if($rs->onay=='1') {
              ?>
          <div class="post-preview">
            <a href="<?php echo base_url('yazilar/'); echo ''.$rs->Id ; ?>">
              <h3 >
              <?php echo $rs->baslik ?>
             </h3></a>


                 <?php echo kisalt($rs->yazi,400); ?>

              </h6>
            </a>
            <p class="post-meta">
            Eklenme Tarihi :  <?php echo $rs->tarih ?>  </p>



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
