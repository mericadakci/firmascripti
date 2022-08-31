<!-- HEADER -->
<?php include "header.php"; ?>

<!-- SIDEBAR -->
<?php include "sidebar.php"; ?>

<?php
$hizmet_id = $_GET["hizmet_id"];
$hizmetler = $db->prepare("SELECT * FROM hizmetler WHERE hizmet_id=?");
$hizmetler->execute(array($hizmet_id));
$hizmet_cek = $hizmetler->fetch(PDO::FETCH_ASSOC);
?>

<!-- CONTENT -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>HİZMET DüZENLE</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form action="islem.php?hizmet_id=<?php echo $hizmet_cek["hizmet_id"]; ?>" method="POST"
                                  class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Icon</label>

                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="hizmet_icon" class="form-control"
                                                       value="<?php echo $hizmet_cek["hizmet_icon"]; ?>"/>
                                            </div>
                                            <small>Iconlarınızı <a href="https://fontawesome.com/">Font Awesome</a> bu
                                                linkten seçebilirsiniz. </small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Başlık</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="hizmet_başlık" class="form-control"
                                                       value="<?php echo $hizmet_cek["hizmet_baslik"]; ?>"/></div>
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
                                                <textarea name="hizmet_aciklama"
                                                          class="ckeditor"><?php echo $hizmet_cek["hizmet_aciklama"]; ?></textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" name="hizmet_duzenle"
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
<?php include "footer.php"; ?>