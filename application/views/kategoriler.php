

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
    <div class="col-lg-8 col-md-10 mx-auto">
<?php $i=0; foreach ($veriler as $rs) { ?>
  <?php if($rs->onay=='1') { $i++; ?>
   <a href="<?php echo base_url('yazilar/'); echo ''.$rs->y ; ?>">
   <h3><?=$rs->baslik?></h3></a>
  <h5> <?php echo kisalt($rs->yazi,400); ?> </h5>
<?php } }
  if($i==0) { ?>
  <h3 align="center">Henüz Bir Paylaşım Mevcut Değil </h3>
<?php } ?>
</div></div></div>

    <?php $this->load->view('_footer'); ?>
