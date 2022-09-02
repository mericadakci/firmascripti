<!-- HEADER -->
<?php include "header.php"; ?>

<!-- SIDEBAR -->
<?php include "sidebar.php"; ?>

<!-- CONTENT -->
<section class="content">
    <div class="container-fluid">
        <!-- GERİ DÖNÜŞ UYARILARI -->
        <?php
        if ($_GET["sponsor-guncelle"] == "bos") {
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
            <?php
        } else if ($_GET["sponsor-guncelle"] == "yes") {
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
            <?php
        } else if ($_GET["sponsor-guncelle"] == "no") {
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
            <?php
        } elseif ($_GET["sponsor-ekle"] == "bos") {
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
            <?php
        } elseif ($_GET["sponsor-ekle"] == "yes") {
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
            <?php
        } elseif ($_GET["sponsor-ekle"] == "no") {
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
            <?php
        }elseif($_GET["sponsor-ekle"]=="gecersizuzanti"){
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
        <?php
        }elseif($_GET["sponsor-ekle"]=="buyuk"){
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> En fazla 5 MB'lık fotoğraf yükleyebilirsiniz.
            </div>
        <?php
        }elseif($_GET["sponsorsil"]=="yes"){
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
        <?php
        }elseif($_GET["sponsorsil"]=="no"){
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
        <?php
        }
        ?>
        <!-- END GERİ DÖNÜŞ UYARILARI -->
        <div class="block-header">
            <h2>SPONSORLAR</h2>
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
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sponsorlar = $db->prepare("SELECT * FROM sponsorlar ORDER BY sponsor_id DESC");
                            $sponsorlar->execute();
                            $sponsor_cek = $sponsorlar->fetchAll(PDO::FETCH_ASSOC);
                            $say = $sponsorlar->rowCount();

                            if ($say) {
                                foreach ($sponsor_cek as $row) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $row["sponsor_id"]; ?></th>
                                        <td><img width="100" height="50" src="../images/sponsorlar/<?php echo $row["sponsor_resim"]; ?>" alt="<?php echo $row["sponsor_isim"]; ?>"></td>
                                        <td><?php echo $row["sponsor_isim"]; ?></td>
                                        <td>
                                            <a href="sponsor-duzenle.php?sponsor_id=<?= $row["sponsor_id"]; ?>">
                                                <button class="btn btn-primary">Düzenle</button>

                                                <a href="islem.php?sponsorsil_id=<?= $row["sponsor_id"]; ?>">
                                                    <button class="btn btn-danger">Sil</button>
                                                </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td>Hiç sponsorunuz bulunmamamktadır!</td>
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