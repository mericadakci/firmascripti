<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="images/user.png" width="48" height="48" alt="User"/>
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["admin_kadi"]; ?></div>
                <div class="email">Administrator is Online</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="profil.php"><i class="material-icons">person</i>Profil</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="cikis.php"><i class="material-icons">input</i>Çıkış</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">Menüler</li>
                <li class="active">
                    <a href="index.php">
                        <i class="material-icons">home</i>
                        <span>ANASAYFA</span>
                    </a>
                </li>
                <?php
                $mesajlar = $db->prepare("SELECT * FROM mesajlar WHERE mesaj_okunma=?");
                $mesajlar->execute(array(0));
                $mesajlar->fetchAll(PDO::FETCH_ASSOC);
                $say = $mesajlar->rowCount();
                ?>
                <li>
                    <a href="mesajlar.php" class="menu-toggle">
                        <i class="material-icons">message</i>
                        <span>Mesajlar</span>
                        <small class="badge bg-blue pull-right"><?php echo $say; ?> Okunmayan</small>
                    </a>
                </li>
                <li>
                    <a href="hakkimizda.php">
                        <i class="material-icons">info</i>
                        <span>Hakkımızda</span>
                    </a>
                </li>
                <li>
                    <a href="duyurular.php">
                        <i class="material-icons">layers</i>
                        <span>Duyurular</span>
                    </a>
                </li>
                <li>
                    <a href="basarilarimiz.php">
                        <i class="material-icons">trending_up</i>
                        <span>Basarilarimiz</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">graphic_eq</i>
                        <span>Hizmet Yönetim</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="hizmetler.php">
                                <span>Hizmetler</span>
                            </a>
                        </li>
                        <li>
                            <a href="hizmet-ekle.php">
                                <span>Hizmet Ekle</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_carousel</i>
                        <span>Slayt Yönetimi</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="slider.php">
                                <span>Slaytlar</span>
                            </a>
                        </li>
                        <li>
                            <a href="slide-ekle.php">
                                <span>Slayt Ekle</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">person</i>
                        <span>Ekip Yönetimi</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="ekipler.php">
                                <span>Ekipler</span>
                            </a>
                        </li>
                        <li>
                            <a href="ekip-ekle.php">
                                <span>Ekip Ekle</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">comment</i>
                        <span>Yorumlar Yönetimi</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="yorumlar.php">
                                <span>Yorumlar</span>
                            </a>
                        </li>
                        <li>
                            <a href="yorum-ekle.php">
                                <span>Yorum Ekle</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">work</i>
                        <span>Proje Yönetimi</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="projelerimiz.php">
                                <span>Projeler</span>
                            </a>
                        </li>
                        <li>
                            <a href="proje-ekle.php">
                                <span>Proje Ekle</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">grain</i>
                        <span>Sponsor Yönetim</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="sponsorlar.php">
                                <span>Sponsorlar</span>
                            </a>
                        </li>
                        <li>
                            <a href="sponsor-ekle.php">
                                <span>Sponsor Ekle</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">settings_applications</i>
                        <span>Genel Ayarlar</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="site-ayarlari.php">
                                <span>Site Ayarları</span>
                            </a>
                        </li>
                        <li>
                            <a href="logo-favicon.php?logofavicon_id=1">
                                <span>Logo-Favicon Ayarları</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>

        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <!-- #END# Right Sidebar -->
</section>