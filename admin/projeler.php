<!-- HEADER -->
<?php include "header.php"; ?>

<!-- SIDEBAR -->
<?php include "sidebar.php"; ?>

<!-- CONTENT -->
<section class="content">
    <div class="container-fluid">
        <!-- GERİ DÖNÜŞ UYARILARI -->
        <?php
        if ($_GET["proje-guncelle"] == "bos") {
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
            <?php
        } else if ($_GET["proje-guncelle"] == "yes") {
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
            <?php
        } else if ($_GET["proje-guncelle"] == "no") {
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
            <?php
        } elseif ($_GET["proje-ekle"] == "bos") {
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
            <?php
        } elseif ($_GET["proje-ekle"] == "yes") {
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
            <?php
        } elseif ($_GET["proje-ekle"] == "no") {
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
            <?php
        }elseif($_GET["proje-ekle"]=="gecersizuzanti"){
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
        <?php
        }elseif($_GET["proje-ekle"]=="buyuk"){
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> En fazla 5 MB'lık fotoğraf yükleyebilirsiniz.
            </div>
        <?php
        }elseif($_GET["projesil"]=="yes"){
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
        <?php
        }elseif($_GET["projesil"]=="no"){
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
        <?php
        }
        ?>
        <!-- END GERİ DÖNÜŞ UYARILARI -->
        <div class="block-header">
            <h2>PROJELER</h2>
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
                                <th>Link</th>
                                <th>İşlemler</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $projelerimiz = $db->prepare("SELECT * FROM projelerimiz ORDER BY proje_id DESC");
                            $projelerimiz->execute();
                            $proje_cek = $projelerimiz->fetchAll(PDO::FETCH_ASSOC);
                            $say = $projelerimiz->rowCount();

                            if ($say) {
                                foreach ($proje_cek as $row) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $row["proje_id"]; ?></th>
                                        <td><img width="100" height="50" src="../images/fotograflar/<?php echo $row["proje_resim"]; ?>" alt="<?php echo $row["proje_isim"]; ?>"></td>
                                        <td><?php echo $row["proje_isim"]; ?></td>
                                        <td><?php echo $row["proje_link"]; ?></td>
                                        <td>
                                            <a href="proje-duzenle.php?proje_id=<?= $row["proje_id"]; ?>">
                                                <button class="btn btn-primary">Düzenle</button>

                                                <a href="islem.php?projesil_id=<?= $row["proje_id"]; ?>">
                                                    <button class="btn btn-danger">Sil</button>
                                                </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td>Hiç projeniz bulunmamamktadır!</td>
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