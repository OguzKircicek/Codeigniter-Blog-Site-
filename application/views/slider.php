<?php
$query=$this->db->query("SELECT * FROM siteayarlari limit 1 ");
$kaynak['etiket']=$query->result();



$this->load->view('_header',$kaynak); ?>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
      <table border="1" cellpadding="50">
        <tr>
         <h3><b><?= $veri[0]->baslik ?></b></h3>
         <?= $veri[0]->bilgi ?> 
       </tr>
     </table>
        </div>
      </div>
    </div>

    <hr>
    <?php $this->load->view('_footer'); ?>
