    <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <b>  <a href="<?=base_url()?>admin/Home">Anasayfa</a></b>
        </li>

    </ul>
</div>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Üyeler</div>
            <div><?=$count[0]->say?></div>

        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="<?=base_url()?>admin/Kullanicilar/adminler">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Admin Üyeler</div>
            <div><?=$yet[0]->sayac?></div>

        </a>
    </div>



    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="<?=$mesaj[0]->mes?> Yeni mesaj." class="well top-block" href="<?=base_url()?>admin/mesajlar">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Mesajlar</div>
            <div><?=$mesaj[0]->mes?></div>

        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  class="well top-block" href="<?=base_url()?>admin/yazilar/onay">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Onay Bekleyen Yazılar</div>
            <div><?=$yazionaybilgisi[0]->yazionay ?></div>

        </a>
    </div>
</div>


            <div class="box-content row">
              <h4><b><i class="glyphicon glyphicon-pencil"></i> Paylaştığım Yazılar</b></h4>


          </div>
          <div class="box-content">
              <table class="table table-striped table-bordered responsive">
                  <thead>
                  <tr>
                      <th width="200px">Username</th>
                      <th width="200px">Başlık</th>
                      <th width="400px">İçerik</th>
                      <th width="150px">Tarih</th>
                      <th width="150px">Durum</th>

                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $sayac=1;
                  $a=array("success","info","warning","danger");


                  foreach ($icerik as $rs ) { ?>
                    <tr class="<?php $random=array_rand($a,1);
                    echo $a[$random];
                    ?>">

                        <td><?=$rs->adi?></td>
                        <td><textarea rows="2" cols="30" readonly><?=$rs->baslik?>
                        </textarea></td>
                      <td>  <textarea rows="2" cols="30" readonly ><?=$rs->yazi?>
                      </textarea></td>

                        <td><?=$rs->tarih?></td>
                        <td><?php
                        if($rs->onay==1) {  ?> Onaylandı <?php }
                        else if($rs->onay==2) { ?> Reddedildi <?php }
                        else if($rs->onay==0) {  ?> Beklemede <?php } ?>
                      </td>

                <?php } ?>
                  </tbody>
              </table>
              </div>


            </div>
        </div>
    </div>
</div>




    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->



    <hr>
