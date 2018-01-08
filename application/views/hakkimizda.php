<?php



$this->load->view('_header'); ?>

<div class="col-lg-2">
  <h3 align="center">Kategoriler </h3>
 <ul class="list-group">
<?php foreach ($kategori as $rs) {?>
<li  class="list-group-item" > <a href="<?=base_url()?>Kategoriler/listele/<?=$rs->Id?>">  <?= $rs->k_adi ?><br> </span></a> </li>
<?php } ?>
</ul>
</div>
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
      <table border="1" cellpadding="50">
        <tr>
         <td><?= $veri[0]->icerik ?> </td>
       </tr>
     </table>
        </div>
      </div>
    </div>

    <hr>
    <?php $this->load->view('_footer'); ?>
