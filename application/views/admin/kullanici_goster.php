<noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>
<?php
$this->load->view('admin/a_header');
$this->load->view('admin/a_sidebar');

?>

<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
 <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Kullanıcılar</a>
        </li>
    </ul>
</div>

<div class="row">

  <div class="box col-md-6">
          <div class="box-inner">
              <div class="box-header well" data-original-title="">
                  <h2>  Kullanıcı Bilgisi </h2>

                  <div class="box-icon">
                      <a href="#" class="btn btn-setting btn-round btn-default"><i
                              class="glyphicon glyphicon-cog"></i></a>
                      <a href="#" class="btn btn-minimize btn-round btn-default"><i
                              class="glyphicon glyphicon-chevron-up"></i></a>
                      <a href="#" class="btn btn-close btn-round btn-default"><i
                              class="glyphicon glyphicon-remove"></i></a>
                  </div>
              </div>
              <div class="box-content">
                  <table class="table">

                      <tr>
                            <th>Adı Soyadı </th>
                            <th>E-mail</th>
                            <th>Yetki</th>
                            <th>Durum</th>
                      </tr>
                      <tr>
                          <td><?= $veri[0]->adi ?></td>

                          <td><?= $veri[0]->email ?></td>

                          <td><?= $veri[0]->yetki ?></td>

                          <td><?= $veri[0]->durum ?></td>
                    </tr>


                  </table>

              </div>
          </div>
      </div>


</div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

<?php

	$this->load->view('admin/a_footer');


?>
