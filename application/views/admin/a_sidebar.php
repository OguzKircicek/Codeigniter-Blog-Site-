      <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav" >
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">AnaSayfa</li>
                        <li><a class="ajax-link" href="<?=base_url()?>Home"><i class="glyphicon glyphicon-share-alt"></i><span> Bloga Git</span></a>
                        <li><a class="ajax-link" href="<?=base_url () ?>admin/home"><i class="glyphicon glyphicon-home"></i><span> AnaSayfa</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?=base_url()?>admin/mesajlar"><i class="glyphicon glyphicon-envelope"></i><span>Mesajlar</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?=base_url()?>admin/siteicimesaj"><i class="glyphicon glyphicon-envelope"></i><span>Site İçi Mesajlaşma</span></a>
                        </li>

                        <li><a class="ajax-link" href="<?=base_url () ?>admin/Yazilarr"><i class="glyphicon glyphicon-pencil"></i><span> Yazılar </span></a>
                        </li>
                        <li><a class="ajax-link" href="<?=base_url()?>admin/Yorumlar/"><i class="	glyphicon glyphicon-comment"></i><span>Yorumlar</span></a>
                        <li><a class="ajax-link" href="<?=base_url()?>admin/Yorumlar/sahsiyorum/<?=$this->session->users['id']?>"><i class="	glyphicon glyphicon-comment"></i><span>Şahsi Yorumlarım</span></a>
                        <li><a class="ajax-link" href="<?=base_url()?>admin/Kategoriler"><i class="	glyphicon glyphicon-th"></i><span>Kategoriler</span></a>
                        <li><a class="ajax-link" href="<?=base_url()?>admin/Hakkimizda"><i class="glyphicon glyphicon-info-sign"></i><span> Hakkımızda</span></a>
                        </li>


                        <li><a class="ajax-link" href="<?=base_url()?>admin/Kullanicilar"><i class="glyphicon glyphicon-user"></i><span> Kullanıcılar</span></a>

                        </li>
                        <li><a class="ajax-link" href="<?=base_url()?>admin/Slider"><i class="glyphicon glyphicon-picture"></i><span> Slider </span></a>
                        </li>
                        <li><a class="ajax-link" href="<?=base_url()?>admin/Fotogaleri"><i class="glyphicon glyphicon-picture"></i><span> Foto Galeri </span></a>
                        </li>
                        <li><a class="ajax-link" href="<?=base_url()?>admin/Home/ayarlar"><i class="glyphicon glyphicon-wrench"></i><span> Ayarlar</span></a>
                        <li><a class="ajax-link" href="<?=base_url()?>admin/Home/siteiciayarlar"><i class="	glyphicon glyphicon-pushpin"></i><span> Site İçi Ayarları</span></a>

                    </ul>


                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->
