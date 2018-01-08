<?php
$query=$this->db->query("SELECT * FROM siteayarlari limit 1 ");
$kaynak['etiket']=$query->result();



$this->load->view('_header',$kaynak); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2>
                <div class="error-details">




                       <h2>	<span class="label label-danger">Sayfa Bulunamadı!! Lütfen Bağlantınızı Kontrol Ediniz Ve ya Bizimle İletişime Geçin</span></h2>


                </div>
                <div class="error-actions">
                    <a href="<?php echo base_url('Home');?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Anasayfaya Dön </a>
                        <a href="<?php echo base_url('iletisim/iletisim');?>" class="btn btn-primary btn-lg">
                          <span  class="glyphicon glyphicon-envelope"></span> İletişim Desteği İçin </a>
                </div>
            </div>
        </div>
    </div>
</div>
  <?php $this->load->view('_footer'); ?>
