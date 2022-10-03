<?php include "header.php"; ?>

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>İLETİŞİM</h2>
        <ol class="breadcrumb">
            <li><a href="index.php">ANASAYFA</a></li>
            <li><a href="javascript:void(0);" class="active">İLETİŞİM</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Map -->
    <div class="contact_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d233533.81021805512!2d90.44069804466251!3d23.85534870087626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1482565625375"></iframe>
    </div>
    <!-- End Map -->

    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                    <h2>İLETİŞİM BİLGİLERİ</h2>                    <div class="location">
                        <div class="location_laft">
                            <a class="f_location" href="#">location</a>
                            <a href="#">Telefon</a>
                            <a href="#">Email</a>
                        </div>
                        <div class="address">
                            <a href="#"><?php echo $ayarcek["site_adres"]; ?></a>
                            <a href="#"><br></a>
                            <a href="#"><?php echo $ayarcek["site_telefon"]; ?></a>
                            <a href="#"></a>
                            <a href="#"><?php echo $ayarcek["site_mail"]; ?></a>
                        </div>
                    </div>
                </div>

                <script>
                    function mesajGonder(){ //butona verdiğimiz id yi kullanıyoruz
                        var degerler=$("#mesajForm").serialize(); //serialize formdaki bütün değerleri göndermemizi sağlıyor

                        $.ajax({  //post işlemi için ajax kullanıyoruz
                            type: "POST",
                            url: "mesajgonder.php",
                            data: degerler,
                            success: function (sonuc){
                                if(sonuc === "bos"){
                                    swal("Dikkat!","Lütfen boş alan bırakmayınız","warning");
                                } else if(sonuc === "no"){
                                    swal("Hata!","Mesaj gönderilirken hata oluştu","error");
                                } else if(sonuc === "yes"){
                                    swal("Tebrikler","Mesajınız Başarıyla gönderildi","success");
                                }
                            }
                        });
                    }
                </script>
                <!-- SWEET ALERT -->
                <script type="text/javascript" src="/js/swal.min.js"></script>
                <link rel="stylesheet" href="/css/swal.css">



                <div class="col-sm-6 contact_info send_message">
                    <h2>İLETİŞİME GEÇİN</h2>
                    <form action="" method="POST" id="mesajForm" class="form-inline contact_box" onsubmit="return false;">
                        <input type="text" name="isim" class="form-control input_box" placeholder="Adınız">
                        <input type="text" name="mail" class="form-control input_box" placeholder="Email">
                        <input type="text" name="konu" class="form-control input_box" placeholder="Konu">
                        <textarea class="form-control input_box" name="mesaj" placeholder="Mesajınız.."></textarea>
                        <button type="submit" onclick="mesajGonder();" class="btn btn-default">Mesaj Gönder</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->

    <!-- Footer Area -->
<?php include "footer.php"; ?>