<?php

	$this->load->view('admin\a_header');
  	$this->load->view('admin\a_sidebar');
?>
<div class="row">
    <div class="box col-md-9">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Onay Bekleyen Yazılar</h2>


            </div>
						<?php foreach ($onay as $rs) {

							if($rs->onay == 0) {
							?>

            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
                        <th width="200px">Username</th>
                        <th width="200px">Başlık</th>
                        <th width="400px">İçerik</th>
                        <th width="150px">Tarih</th>
                        <th witdh="10px">Onay</th>
                        <th width="10px">Red</th>

                    </tr>
                    </thead>
                    <tbody>
                      <tr>

                          <td><textarea rows="2" cols="30" readonly><?=$rs->adi ?>
                          </textarea></td>
                        <td>  <textarea rows="2" cols="30" readonly ><?= $rs->baslik ?>
                        </textarea></td>
                        <td>  <textarea rows="2" cols="30" readonly ><?= $rs->yazi ?>
                        </textarea></td>
                        <td> <?= $rs->tarih ?></td>



                  <td><a href="<?=base_url()?>admin/yazilar/onayyon/<?= $rs->Id?>" style="margin-top:8px" class="btn btn-info" >
                     <span class="glyphicon glyphicon-check"></span></a></td>
                  <td><a href="<?=base_url()?>admin/yazilar/onayy_ret/<?= $rs->Id?>" style="margin-top:8px" class="btn btn-info" >
                        <span class="glyphicon glyphicon-check"></span></a></td>
											</tr>
                    </tbody>
                </table>
            </div>
          <?php } } ?>
        </div>
    </div>
<?php

	$this->load->view('admin\a_footer');
?>
