<!-- HEADER -->
<?php include "header.php"; ?>

<!-- SIDEBAR -->
<?php include "sidebar.php"; ?>

<!-- CONTENT -->
<section class="content">
    <div class="container-fluid">
        <!-- GERİ DÖNÜŞ UYARILARI -->
        <?php
        if ($_GET["hizmet-guncelle"] == "bos") {
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
            <?php
        } else if ($_GET["hizmet-guncelle"] == "yes") {
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
            <?php
        } else if ($_GET["hizmet-guncelle"] == "no") {
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
            <?php
        } elseif ($_GET["hizmet-guncelle"] == "bos") {
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
            <?php
        } elseif ($_GET["hizmet-guncelle"] == "yes") {
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
            <?php
        } elseif ($_GET["hizmet-guncelle"] == "no") {
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
            <?php
        }
        ?>
        <!-- END GERİ DÖNÜŞ UYARILARI -->
        <div class="block-header">
            <h2>HİZMET GÜNCELLE</h2>
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
                                <th>İcon</th>
                                <th>Başlık</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $hizmetler = $db->prepare("SELECT * FROM hizmetler ORDER BY hizmet_id DESC");
                            $hizmetler->execute();
                            $hizmet_cek = $hizmetler->fetchAll(PDO::FETCH_ASSOC);
                            $say = $hizmetler->rowCount();

                            if ($say) {
                                foreach ($hizmet_cek as $row) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $row["hizmet_id"]; ?></th>
                                        <td><i class="fa fa-<?php echo $row["hizmet_icon"]; ?>"></i></td>
                                        <td><?php echo $row["hizmet_baslik"]; ?></td>
                                        <td>
                                            <a href="hizmet-duzenle.php?hizmet_id=<?= $row["hizmet_id"]; ?>">
                                                <button class="btn btn-primary">Düzenle</button>

                                                <a href="islem.php?hizmetsil_id=<?= $row["hizmet_id"]; ?>">
                                                    <button class="btn btn-danger">Sil</button>
                                                </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td>Hiç hizmetiniz bulunmamamktadır!</td>
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