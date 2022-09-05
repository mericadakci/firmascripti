<!-- HEADER -->
<?php include "header.php"; ?>

<!-- SIDEBAR -->
<?php include "sidebar.php"; ?>

<!-- CONTENT -->
<section class="content">
    <div class="container-fluid">
        <!-- GERİ DÖNÜŞ UYARILARI -->
        <?php
        if ($_GET["ekip-guncelle"] == "bos") {
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
            <?php
        } else if ($_GET["ekip-guncelle"] == "yes") {
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
            <?php
        } else if ($_GET["ekip-guncelle"] == "no") {
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
            <?php
        } elseif ($_GET["ekip-ekle"] == "bos") {
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
            <?php
        } elseif ($_GET["ekip-ekle"] == "yes") {
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
            <?php
        } elseif ($_GET["ekip-ekle"] == "no") {
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
            <?php
        }elseif($_GET["ekip-ekle"]=="gecersizuzanti"){
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
        <?php
        }elseif($_GET["ekip-ekle"]=="buyuk"){
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> En fazla 5 MB'lık fotoğraf yükleyebilirsiniz.
            </div>
        <?php
        }elseif($_GET["ekipsil"]=="yes"){
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
        <?php
        }elseif($_GET["ekipsil"]=="no"){
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
        <?php
        }
        ?>
        <!-- END GERİ DÖNÜŞ UYARILARI -->
        <div class="block-header">
            <h2>EKİPLER</h2>
        </div>

        <!-- CONTENT   -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Fotoğraf</th>
                                <th>İsim</th>
                                <th>Mevki</th>
                                <th>İşlemler</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $ekip = $db->prepare("SELECT * FROM ekip ORDER BY ekip_id DESC");
                            $ekip->execute();
                            $ekip_cek = $ekip->fetchAll(PDO::FETCH_ASSOC);
                            $say = $ekip->rowCount();

                            if ($say) {
                                foreach ($ekip_cek as $row) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $row["ekip_id"]; ?></th>
                                        <td><img width="75" height="75" src="../images/ekipler/<?php echo $row["ekip_resim"]; ?>" alt="<?php echo $row["ekip_resim"]; ?>"></td>
                                        <td><?php echo $row["ekip_isim"]; ?></td>
                                        <td><?php echo $row["ekip_mevki"]; ?></td>
                                        <td>
                                            <a href="ekip-duzenle.php?ekip_id=<?= $row["ekip_id"]; ?>"><button class="btn btn-primary">Düzenle</button>


                                                <a href="islem.php?ekipsil_id=<?= $row["ekip_id"]; ?>"><button class="btn btn-danger">Sil</button>

                                                </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td>Hiç ekibiniz bulunmamamktadır!</td>
                                </tr>
                                <?php
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<!-- FOOTER -->
<?php include "footer.php"; ?>