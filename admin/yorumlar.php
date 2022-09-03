<!-- HEADER -->
<?php include "header.php"; ?>

<!-- SIDEBAR -->
<?php include "sidebar.php"; ?>

<!-- CONTENT -->
<section class="content">
    <div class="container-fluid">
        <!-- GERİ DÖNÜŞ UYARILARI -->
        <?php
        if ($_GET["yorum-guncelle"] == "bos") {
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
            <?php
        } else if ($_GET["yorum-guncelle"] == "yes") {
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
            <?php
        } else if ($_GET["yorum-guncelle"] == "no") {
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
            <?php
        } elseif ($_GET["yorum-ekle"] == "bos") {
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
            <?php
        } elseif ($_GET["yorum-ekle"] == "yes") {
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
            <?php
        } elseif ($_GET["yorum-ekle"] == "no") {
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
            <?php
        }elseif($_GET["yorum-ekle"]=="gecersizuzanti"){
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
        <?php
        }elseif($_GET["yorum-ekle"]=="buyuk"){
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> En fazla 5 MB'lık fotoğraf yükleyebilirsiniz.
            </div>
        <?php
        }elseif($_GET["yorumsil"]=="yes"){
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
        <?php
        }elseif($_GET["yorumsil"]=="no"){
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
        <?php
        }
        ?>
        <!-- END GERİ DÖNÜŞ UYARILARI -->
        <div class="block-header">
            <h2>YORUMLAR</h2>
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
                                <th>Meslek</th>
                                <th>İşlemler</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $yorumlar = $db->prepare("SELECT * FROM yorumlar ORDER BY yorumlar_id DESC");
                            $yorumlar->execute();
                            $yorum_cek = $yorumlar->fetchAll(PDO::FETCH_ASSOC);
                            $say = $yorumlar->rowCount();

                            if ($say) {
                                foreach ($yorum_cek as $row) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $row["yorumlar_id"]; ?></th>
                                        <td><img width="75" height="75" src="../images/yorumlar/<?php echo $row["yorum_resim"]; ?>" alt="<?php echo $row["yorum_resim"]; ?>"></td>
                                        <td><?php echo $row["yorum_isim"]; ?></td>
                                        <td><?php echo $row["yorum_meslek"]; ?></td>
                                        <td>
                                            <a href="yorum-duzenle.php?yorumlar_id=<?= $row["yorumlar_id"]; ?>">
                                                <button class="btn btn-primary">Düzenle</button>

                                                <a href="islem.php?yorumsil_id=<?= $row["yorumlar_id"]; ?>">
                                                    <button class="btn btn-danger">Sil</button>
                                                </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td>Hiç yorum bulunmamamktadır!</td>
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