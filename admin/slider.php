<!-- HEADER -->
<?php include "header.php"; ?>

<!-- SIDEBAR -->
<?php include "sidebar.php"; ?>

<!-- CONTENT -->
<section class="content">
    <div class="container-fluid">
        <!-- GERİ DÖNÜŞ UYARILARI -->
        <?php
        if ($_GET["slide-guncelle"] == "bos") {
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
            <?php
        } else if ($_GET["slide-guncelle"] == "yes") {
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
            <?php
        } else if ($_GET["slide-guncelle"] == "no") {
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
            <?php
        } elseif ($_GET["slide-ekle"] == "bos") {
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
            <?php
        } elseif ($_GET["slide-ekle"] == "yes") {
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
            <?php
        } elseif ($_GET["slide-ekle"] == "no") {
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
            <?php
        }elseif($_GET["slide-ekle"]=="gecersizuzanti"){
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
        <?php
        }elseif($_GET["slide-ekle"]=="buyuk"){
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> En fazla 5 MB'lık fotoğraf yükleyebilirsiniz.
            </div>
        <?php
        }elseif($_GET["slidesil"]=="yes"){
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
        <?php
        }elseif($_GET["slidesil"]=="no"){
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
        <?php
        }
        ?>
        <!-- END GERİ DÖNÜŞ UYARILARI -->
        <div class="block-header">
            <h2>SLAYTLAR</h2>
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
                                <th>Renkli Başlık</th>
                                <th>N.Başlık</th>
                                <th>Link</th>
                                <th>İşlemler</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $slider = $db->prepare("SELECT * FROM slider ORDER BY slider_id DESC");
                            $slider->execute();
                            $slider_cek = $slider->fetchAll(PDO::FETCH_ASSOC);
                            $say = $slider->rowCount();

                            if ($say) {
                                foreach ($slider_cek as $row) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $row["slider_id"]; ?></th>
                                        <td><img width="100" height="50" src="../images/slider/<?php echo $row["slider_resim"]; ?>" alt="<?php echo $row["slider_baslik"]; ?>"></td>
                                        <td><?php echo $row["slider_renklibaslik"]; ?></td>
                                        <td><?php echo $row["slider_normalbaslik"]; ?></td>
                                        <td><?php echo $row["slider_link"]; ?></td>
                                        <td>
                                            <a href="slide-duzenle.php?slider_id=<?= $row["slider_id"]; ?>">
                                                <button class="btn btn-primary">Düzenle</button>

                                                <a href="islem.php?slidersil_id=<?= $row["slider_id"]; ?>">
                                                    <button class="btn btn-danger">Sil</button>
                                                </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td>Hiç slaytınız bulunmamamktadır!</td>
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