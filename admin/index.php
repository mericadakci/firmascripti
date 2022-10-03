<!-- HEADER -->
<?php include "header.php"; ?>

<!-- SIDEBAR -->
<?php include "sidebar.php";?>

<!-- CONTENT -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>SİTE AYARLARI</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <?php
                $hizmetler = $db->prepare("SELECT * FROM hizmetler");
                $hizmetler->execute();
                $hizmetler->fetchAll(PDO::FETCH_ASSOC);
                $toplam = $hizmetler->rowCount();
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">graphic_eq</i>
                        </div>
                        <div class="content">
                            <div class="text">HİZMETLER</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $toplam; ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <?php
                $projelerimiz = $db->prepare("SELECT * FROM projelerimiz");
                $projelerimiz->execute();
                $projelerimiz->fetchAll(PDO::FETCH_ASSOC);
                $toplam = $projelerimiz->rowCount();
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">work</i>
                        </div>
                        <div class="content">
                            <div class="text">PROJELERİMİZ</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $toplam; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <?php
                $slider = $db->prepare("SELECT * FROM slider");
                $slider->execute();
                $slider->fetchAll(PDO::FETCH_ASSOC);
                $toplam = $slider->rowCount();
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">view_carousel</i>
                        </div>
                        <div class="content">
                            <div class="text">SLAYTLAR</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $toplam; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <?php
                $ekip = $db->prepare("SELECT * FROM ekip");
                $ekip->execute();
                $ekip->fetchAll(PDO::FETCH_ASSOC);
                $toplam = $ekip->rowCount();
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="content">
                            <div class="text">EKİPLER</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $toplam; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <?php
                $sponsorlar = $db->prepare("SELECT * FROM sponsorlar");
                $sponsorlar->execute();
                $sponsorlar->fetchAll(PDO::FETCH_ASSOC);
                $toplam = $sponsorlar->rowCount();
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-indigo hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">grain</i>
                        </div>
                        <div class="content">
                            <div class="text">SPONSORLAR</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $toplam; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <?php
                $yorumlar = $db->prepare("SELECT * FROM yorumlar");
                $yorumlar->execute();
                $yorumlar->fetchAll(PDO::FETCH_ASSOC);
                $toplam = $yorumlar->rowCount();
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue-grey hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">comment</i>
                        </div>
                        <div class="content">
                            <div class="text">YORUMLAR</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $toplam; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <?php
                $mesajlar = $db->prepare("SELECT * FROM mesajlar");
                $mesajlar->execute();
                $mesajlar->fetchAll(PDO::FETCH_ASSOC);
                $toplam = $mesajlar->rowCount();
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">message</i>
                        </div>
                        <div class="content">
                            <div class="text">MESAJLAR</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $toplam; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->

            <!-- #END# CPU Usage -->

                <!-- Visitors -->

                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->

                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->

                <!-- #END# Answered Tickets -->
            </div>


                <!-- #END# Task Info -->
                <!-- Browser Usage -->

                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>

<!-- FOOTER -->
<?php include "footer.php"; ?>