<?php include "header.php"; ?>

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Contact Us</h2>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="#" class="active">Contact Us</a></li>
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
                    <h2>Contact Info</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    <div class="location">
                        <div class="location_laft">
                            <a class="f_location" href="#">location</a>
                            <a href="#">phone</a>
                            <a href="#">fax</a>
                            <a href="#">email</a>
                        </div>
                        <div class="address">
                            <a href="#">Sector # 10, Road # 05, Plot # 31, Uttara, <br> Dhaka 1230 </a>
                            <a href="#">+880 123 456 789</a>
                            <a href="#">(626) 935-3026</a>
                            <a href="#">info@thethemspro.com</a>
                        </div>
                    </div>
                </div>

                <script>
                     function mesajGonder() {
                            var degerler = $("#mesajForm").serialize();

                            $.ajax({
                                type : "POST",
                                    url : "mesajgonder.php",
                         data : degerler,
                                success: function (sonuc){
                                if(sonuc == "bos"){
                                    swal("Dikkat!","Lütfen boş alan bırakmayınız","warning");
                         }else if(sonuc == "no"){
                            swal("Hata!","Mesaj GÖnderilirken bir hata oluştu!","error");
                         }else if(sonuc == "yes"){
                                    swal({
                                        title : "Tebrikler!",
                                        text : "Mesajınız başarıyla gönderildi";
                                        type : "success",
                                        html : true,
                                        timer : 2000},
                                        function () {
                                        location.reload():
                                    }):
                         }
                         }
                            }):
                     }

                </script>



                <div class="col-sm-6 contact_info send_message">
                    <h2>İLETİŞİME GEÇİN</h2>
                    <form action="" method="POST" id="mesajForm" class="form-inline contact_box" onesubmit="return false">
                        <input type="text" name="isim" class="form-control input_box" placeholder="Adınız *">
                        <input type="text" name="konu" class="form-control input_box" placeholder="mail *">
                        <input type="text" name="mesaj" class="form-control input_box" placeholder="Konu">
                        <input type="text" class="form-control input_box" placeholder="Your Website">
                        <textarea name="mesaj" class="form-control input_box" placeholder="Mesajınız..."></textarea>
                        <button type="submit" onclick="mesajGonder();" class="btn btn-default">Mesaj Gonder</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->

    <!-- Footer Area -->
<?php include "footer.php"; ?>