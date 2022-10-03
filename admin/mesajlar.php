<!-- HEADER -->
<?php include "header.php"; ?>

<!-- SIDEBAR -->
<?php include "sidebar.php"; ?>

<!-- CONTENT -->
<section class="content">
    <div class="container-fluid">
        <!-- GERİ DÖNÜŞ UYARILARI -->
        <?php
        if ($_GET["mesaj-sil"] == "bos") {
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
            <?php
        } else if ($_GET["mesaj-sil"] == "yes") {
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleşti...
            </div>
            <?php
        } else if ($_GET["mesaj-sil"] == "no") {
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
            <?php
        }
        ?>
        <!-- END GERİ DÖNÜŞ UYARILARI -->
        <div class="block-header">
            <h2>MESAJLAR</h2>
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
                                <th>Gönderen</th>
                                <th>Konu</th>
                                <th>Tarih</th>
                                <th>Durum</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $mesajlar = $db->prepare("SELECT * FROM mesajlar ORDER BY mesaj_id DESC");
                            $mesajlar->execute();
                            $mesaj_cek = $mesajlar->fetchAll(PDO::FETCH_ASSOC);
                            $say = $mesajlar->rowCount();

                            if ($say) {
                                foreach ($mesaj_cek

                                         as $row) {
                                    if ($row["mesaj_okunma"] == 1) {
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $row["mesaj_id"]; ?></th>
                                            <td><?php echo $row["mesaj_gonderenisim"]; ?></td>
                                            <td><?php echo $row["mesaj_konu"]; ?></td>
                                            <td><?php echo $row["mesaj_tarih"]; ?></td>
                                            <td><span class="fa fa-eye" style="color: #eee8d5;"></span></td>
                                            <td>
                                                <a href="hizmet-duzenle.php?mesaj_id=<?= $row["mesaj_id"]; ?>">
                                                    <button class="btn btn-primary">Oku</button>

                                                    <a href="islem.php?mesajsil_id=<?= $row["mesaj_id"]; ?>">
                                                        <button class="btn btn-danger">Sil</button>
                                                    </a>
                                            </td>
                                        </tr>
                                        <?php
                                    } else {
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $row["mesaj_id"]; ?></th>
                                            <td><?php echo $row["mesaj_gonderenisim"]; ?></td>
                                            <td><?php echo $row["mesaj_konu"]; ?></td>
                                            <td><?php echo $row["mesaj_tarih"]; ?></td>
                                            <td><span class="fa fa-eye"></span></td>
                                            <td>
                                                <a href="mesaj-oku.php?mesaj_id=<?= $row["mesaj_id"]; ?>">
                                                    <button class="btn btn-primary">Oku</button>

                                                    <a href="islem.php?mesajsil_id=<?= $row["mesaj_id"]; ?>">
                                                        <button class="btn btn-danger">Sil</button>
                                                    </a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
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