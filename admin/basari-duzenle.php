<!-- HEADER -->
<?php include "header.php"; ?>

<!-- SIDEBAR -->
<?php include "sidebar.php"; ?>

<?php
$basari_id = $_GET["basari_id"];
$basarilarimiz = $db->prepare("SELECT * FROM basarilar WHERE basari_id=?");
$basarilarimiz->execute(array($basari_id));
$basarim_cek = $basarilarimiz->fetch(PDO::FETCH_ASSOC);
?>

<!-- CONTENT -->
<section class="content">
    <div class="container-fluid">
        <!-- GERİ DÖNÜŞ UYARILARI -->
        <?php
        if ($_GET["basari-guncelle"] == "bos") {
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
            <?php
        } else if ($_GET["basari-guncelle"] == "yes") {
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleiti...
            </div>
            <?php
        } else if ($_GET["basari-guncelle"] == "no") {
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
            <?php
        }
        ?>
        <!-- END GERİ DÖNÜŞ UYARILARI -->
        <div class="block-header">
            <h2>BASARİ GÜNCELLE</h2>
        </div>

        <!-- Widgets -->

        <div class="row clearfix">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form action="islem.php?basari_id=<?= $basarim_cek["basari_id"]; ?>" method="POST"
                                  class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Icon</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="basari_icon" class="form-control"
                                                       value="<?php echo $basarim_cek["basari_icon"]; ?>"/>
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
                                                <input type="text" name="basari_isim" class="form-control"
                                                       value="<?php echo $basarim_cek["basari_isim"]; ?>"/></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Sayı</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="basari_sayi" class="form-control"
                                                       value="<?php echo $basarim_cek["basari_sayi"]; ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" name="basari_duzenle"
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
    </div>
</section>

<!-- FOOTER -->
<?php include "footer.php"; ?>