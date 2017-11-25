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
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Admin Üyeler</div>
            <div><?=$yet[0]->sayac?></div>

        </a>
    </div>



    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="<?=$mesaj[0]->mes?> Yeni mesaj." class="well top-block" href="#">
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

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Introduction</h2>


            </div>
            <div class="box-content row">
                <div class="col-lg-7 col-md-12">
                    <h1>Charisma <br>
                        <small>free, premium quality, responsive, multiple skin admin template.</small>
                    </h1>
                    <p>It's a live demo of the template. I have created Charisma to ease the repeat work I have to do on my
                        projects. Now I re-use Charisma as a base for my admin panel work and I am sharing it with you
                        :)</p>



                    <p class="center-block download-buttons">
                        <a href="http://usman.it/free-responsive-admin-template/" class="btn btn-primary btn-lg"><i
                                class="glyphicon glyphicon-chevron-left glyphicon-white"></i> Back to article</a>
                        <a href="http://usman.it/free-responsive-admin-template/" class="btn btn-default btn-lg"><i
                                class="glyphicon glyphicon-download-alt"></i> Download Page</a>
                    </p>
                </div>


            </div>
        </div>
    </div>
</div>




    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->



    <hr>
