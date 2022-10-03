<!-- HEADER -->
<?php include "header.php"; ?>

<!-- SIDEBAR -->
<?php include "sidebar.php"; ?>

<?php
$logofavicon_id = $_GET["logofavicon_id"];
$kontrol = $_GET["favicon-guncelle"];
if($kontrol == "yes"){
    $logofavicon_id = 1;
}
$logofavicon = $db->prepare("SELECT * FROM logofavicon WHERE lf_id=?");
$logofavicon->execute(array($logofavicon_id));
$logofavicon_cek = $logofavicon->fetch(PDO::FETCH_ASSOC);

?>

<!-- CONTENT -->
<section class="content">
    <div class="container-fluid">
        <?php
        if ($_GET["logo-guncelle"] == "bos") {
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
            <?php
        } else if ($_GET["logo-guncelle"] == "yes") {
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleiti...
            </div>
            <?php
        } else if ($_GET["logo-guncelle"] == "no") {
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
            <?php
        }
        ?>
        <?php
        if ($_GET["favicon-guncelle"] == "bos") {
            ?>
            <div class="alert alert-warning">
                <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
            </div>
            <?php
        } else if ($_GET["favicon-guncelle"] == "yes") {
            ?>
            <div class="alert alert-success">
                <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleiti...
            </div>
            <?php
        } else if ($_GET["favicon-guncelle"] == "no") {
            ?>
            <div class="alert alert-danger">
                <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
            </div>
            <?php
        }
        ?>
        <div class="block-header">
            <h2>LOGO-FAVİCON DÜZENLE</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form action="islem.php?logo_id=<?= $logofavicon_cek["lf_id"]; ?>"
                                  method="POST" class="form-horizontal"
                                  enctype="multipart/form-data">

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label"><label
                                                for="email_address_2">Fotoğraf</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <img width="100" height="50"
                                                     src="../images/logofavicon/<?= $logofavicon_cek["lf_logo"]; ?>"
                                                     alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label"><label
                                                    for="email_address_2">Logo</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="file" name="lf_logo" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                            <button type="submit" name="logo_duzenle"
                                                    class="btn btn-primary m-t-15 waves-effect">Güncelle
                                            </button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- FAVİCON -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <form action="islem.php?favicon_id=<?php echo $logofavicon_cek["lf_id"]; ?>"
                                      method="POST" class="form-horizontal"
                                      enctype="multipart/form-data">

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label"><label
                                                    for="email_address_2">Fotoğraf</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <img width="100" height="50"
                                                         src="../images/logofavicon/<?= $logofavicon_cek["lf_favicon"]; ?>"
                                                         alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label"><label
                                                        for="email_address_2">Favicon</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="file" name="lf_favicon" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                                <button type="submit" name="favicon_duzenle"
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
    </div>


</section>
<!-- FOOTER -->
<?php include "footer.php"; ?>x