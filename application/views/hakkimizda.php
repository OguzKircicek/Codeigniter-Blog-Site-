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
         <td><?= $veri[0]->icerik ?> </td>
       </tr>
     </table>
        </div>
      </div>
    </div>

    <hr>
    <?php $this->load->view('_footer'); ?>
