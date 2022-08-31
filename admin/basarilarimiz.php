<!-- HEADER -->
<?php include "header.php"; ?>

<!-- SIDEBAR -->
<?php include "sidebar.php"; ?>

<!-- CONTENT -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>BAŞARILARIMIZ</h2>
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
                                <th>İsim</th>
                                <th>Sayı</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $basarilar = $db->prepare("SELECT * FROM basarilar ORDER BY basari_id DESC");
                            $basarilar->execute();
                            $basari_cek = $basarilar->fetchAll(PDO::FETCH_ASSOC);
                            $say = $basarilar->rowCount();

                            if ($say) {
                                foreach ($basari_cek as $row) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $row["basari_id"]; ?></th>
                                        <td><i class="fa fa-<?php echo $row["basari_icon"]; ?>"></i></td>
                                        <td><?php echo $row["basari_isim"]; ?></td>
                                        <td><?php echo $row["basari_sayi"]; ?></td>
                                        <td>
                                            <a href="basari-duzenle.php?basari_id=<?= $row["basari_id"]; ?>">
                                                <button class="btn btn-primary">Düzenle</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                    <tr>
                                        <td>Hiç başarınız bulunmamamktadır!</td>
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