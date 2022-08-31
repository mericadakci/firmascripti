<!-- HEADER -->
<?php include "header.php"; ?>

<!-- SIDEBAR -->
<?php include "sidebar.php";?>

<?php
$duyurular = $db->prepare("SELECT * FROM duyurular");
$duyurular->execute();
$duyuru_cek = $duyurular->fetch(PDO::FETCH_ASSOC);
?>

<!-- CONTENT -->
    <section class="content">
        <div class="container-fluid">
            <!-- GERİ DÖNÜŞ UYARILARI -->
              <?php
              if ($_GET["duyuru-guncelle"]=="bos"){
                  ?>
                  <div class="alert alert-warning">
                      <strong>Dikkat!</strong> Lütfen boş alan bırakmayınız...
                  </div>
            <?php
              }else if ($_GET["duyuru-guncelle"]=="yes"){
                  ?>
                  <div class="alert alert-success">
                      <strong>Tebrikler!</strong> İşleminiz başarıyla gerçekleiti...
                  </div>
            <?php
              }else if ($_GET["duyuru-guncelle"]=="no"){
                  ?>
                  <div class="alert alert-danger">
                      <strong>Hata!</strong> İşleminiz gerçekleştirirken bir hata oluştu...
                  </div>
            <?php
              }
              ?>
            <!-- END GERİ DÖNÜŞ UYARILARI -->
            <div class="block-header">
                <h2>DUYURU GÜNCELLE</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <form action="islem.php?duyuru_id=<?= $duyuru_cek["duyuru_id"]; ?>" method="POST" class="form-horizontal">
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email_address_2">Kalın Yazı</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="duyuru_kalinyazi" class="form-control" value="<?php echo $duyuru_cek["duyuru_kalinyazi"]; ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email_address_2">Link</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="duyuru_link" class="form-control" value="<?php echo $duyuru_cek["duyuru_link"]; ?>" />                                                </div>
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
                                                    <textarea name="duyuru_aciklama" class="ckeditor"><?php echo $duyuru_cek["duyuru_aciklama"]; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                             <button type="submit" name="duyurular" class="btn btn-primary m-t-15 waves-effect">Güncelle</button>
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