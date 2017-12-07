<?php
$query=$this->db->query("SELECT * FROM siteayarlari limit 1 ");
$kaynak['etiket']=$query->result();



$this->load->view('_header',$kaynak); ?>

<div class="container">
  <div class="row">
      <div class="box col-md-12">
          <div class="box-inner">

<embed style="text-align: center"  src="<?=base_url()?>uploads/foto_galeri/<?=$veri[0]->yolu?>" width="700" height="500">

</div></div></div></div>


  <?php $this->load->view('_footer'); ?>
