<!-- HEADER -->
<?php include "header.php"; ?>

<!-- SIDEBAR -->
<?php include "sidebar.php"; ?>

<?php
$slider_id = $_GET["slider_id"];
$slider = $db->prepare("SELECT * FROM slider WHERE slider_id=?");
$slider->execute(array($slider_id));
$slider_cek = $slider->fetch(PDO::FETCH_ASSOC);

?>

<!-- CONTENT -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>SLAYT DÜZENLE</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form action="islem.php?slider_id=<?php echo $slider_cek["slider_id"]; ?>" method="POST" class="form-horizontal"
                                  enctype="multipart/form-data">

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label"><label
                                                for="email_address_2">Fotoğraf</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <img width="100" height="50" src="../images/slider/<?= $slider_cek["slider_resim"]; ?>" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label"><label
                                                for="email_address_2">Fotoğraf</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="slide_resim" class="form-control"/>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Renkli Baslik</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="slider_renklibaslik" class="form-control"
                                                       value="<?= $slider_cek["slider_renklibaslik"]; ?>"/></div>
                                        </div>
                                    </div>
                                </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email_address_2">Normal Başlık</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="slider_normalbaslik" class="form-control"
                                                           value="<?= $slider_cek["slider_normalbaslik"]; ?>"/></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label>Link</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="slider_link" class="form-control"
                                                           value="<?= $slider_cek["slider_link"]; ?>"/></div>
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
                                                <textarea name="slider_aciklama" class="ckeditor"><?php echo $slider_cek["slider_aciklama"]; ?></textarea>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" name="slide_duzenle"
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