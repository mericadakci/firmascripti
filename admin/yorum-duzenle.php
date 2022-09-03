<!-- HEADER -->
<?php include "header.php"; ?>

<!-- SIDEBAR -->
<?php include "sidebar.php"; ?>


<?php
$yorumlar_id = $_GET["yorumlar_id"];
$yorumlar = $db->prepare("SELECT * FROM yorumlar WHERE yorumlar_id=?");
$yorumlar->execute(array($yorumlar_id));
$yorum_cek = $yorumlar->fetch(PDO::FETCH_ASSOC);
?>

<!-- CONTENT -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>YORUM DÜZENLE</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form action="islem.php?yorumlar_id=<?php echo $yorum_cek["yorumlar_id"]; ?>" method="POST" class="form-horizontal"
                                  enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Fotoğraf</label>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <img width="75" height="75" src="../images/yorumlar/<?= $yorum_cek["yorum_resim"]; ?>" alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="yorum_resim" class="form-control"/>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">İsim</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="yorum_isim" class="form-control"<?= $yorum_cek["yorum_isim"]; ?>>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Meslek</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="yorum_meslek" class="form-control"<?= $yorum_cek["yorum_meslek"]; ?>/>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Açıklama</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea name="yorum_aciklama" class="ckeditor"><?= $yorum_cek["yorum_aciklama"]; ?></textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" name="yorum_duzenle"
                                                class="btn btn-primary m-t-15 waves-effect">Güncelle
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- FOOTER -->
<?php include "footer.php"; ?>x