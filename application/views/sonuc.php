<?php
$query=$this->db->query("SELECT * FROM siteayarlari limit 1 ");
$kaynak['etiket']=$query->result();



$this->load->view('_header',$kaynak); ?>

    <?php foreach ($veri as $rs ) { ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
      <table border="1" cellpadding="50">

          <h3><?= $rs->baslik ?></h3>
        <?= $rs->yazi ?>

     </table>
        </div>
      </div>
    </div>
 <?php } ?>
    <hr>
    <?php $this->load->view('_footer'); ?>
