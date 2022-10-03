<footer class="footer_area">
    <div class="container">
        <div class="footer_row row">
            <div class="col-md-3 col-sm-6 footer_about">
                <h2>SOSYAL MEDYA HESAPLARIMIZ</h2>
                <img src="images/footer-logo.png" alt="" />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <ul class="socail_icon">
                    <li><a href="<?php echo $smcek["sm_facebook"]; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $smcek["sm_twitter"]; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $smcek["sm_google"]; ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $smcek["sm_instagram"]; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 footer_about quick">
                <h2>HİZMETLER</h2>
                <ul class="quick_link">
                    <?php
                    $hizmetler = $db->prepare("SELECT * FROM hizmetler ORDER BY hizmet_id DESC");
                    $hizmetler->execute();
                    $hizmet_listele = $hizmetler->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($hizmet_listele as $row){
                        ?>
                        <li><a href="hizmet-detay.php?hizmet_id=<?php echo $row["hizmet_id"]; ?>"><i class="fa fa-chevron-right"></i><?php echo $row["hizmet_baslik"]; ?></a></li>
                    <?php
                    }
                    ?>

                </ul>
            </div>
            <div class="col-md-3 col-sm-6 footer_about">
                <h2>PROJELERİMİZ</h2>
                <ul class="quick_link">
                <?php
                $projelerimiz = $db->prepare("SELECT * FROM projelerimiz LIMIT 5");
                $projelerimiz->execute();
                $proje_listele = $projelerimiz->fetchAll(PDO::FETCH_ASSOC);

                foreach ($proje_listele as $row){
                    ?>
                    <li><a href="<?php echo $row["proje_link"]; ?><?php echo $row["hizmet_id"]; ?>"><i class="fa fa-chevron-right"></i><?php echo $row["proje_isim"]; ?></a></li>
                    <?php
                }
                ?>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 footer_about">
                <h2>İLETİŞİM</h2>
                <address>
                    <p>Bizimle iletişime geçebilirsiniz...</p>
                    <ul class="my_address">
                        <li><a href="https://accounts.google.com/v3/signin/identifier?dsh=S-200854979%3A1661334099843348&continue=https%3A%2F%2Faccounts.google.com%2Fb%2F1%2FAddMailService&followup=https%3A%2F%2Faccounts.google.com%2Fb%2F1%2FAddMailService&passive=1209600&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=AQN2RmV12csuyjqyxaSlMBnPGokaqgWqCl6VjXqEY5U1w7Vki_kGxSEmOuQ8eLxm5jiAhSkoNa32Yg"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $ayarcek["site_mail"]; ?></a></li>
                        <li><a><i class="fa fa-phone" aria-hidden="true"></i><?php echo $ayarcek["site_telefon"]; ?></a></li>
                        <li><a><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $ayarcek["site_adres"]; ?></a></li>
                    </ul>
                </address>
            </div>
        </div>
    </div>
    <div class="copyright_area">
        <?php echo $ayarcek["site_footer"]; ?>
    </div>
</footer>
<!-- End Footer Area -->

<!-- jQuery JS -->
<script src="js/jquery-1.12.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Animate JS -->
<script src="vendors/animate/wow.min.js"></script>
<!-- Camera Slider -->
<script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
<script src="vendors/camera-slider/camera.min.js"></script>
<!-- Isotope JS -->
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope.pkgd.min.js"></script>
<!-- Progress JS -->
<script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
<script src="vendors/Counter-Up/waypoints.min.js"></script>
<!-- Owlcarousel JS -->
<script src="vendors/owl_carousel/owl.carousel.min.js"></script>
<!-- Stellar JS -->
<script src="vendors/stellar/jquery.stellar.js"></script>
<!-- Theme JS -->
<script src="js/theme.js"></script>
<!-- Map JS -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="vendors/map/topbuilder_map.min.js"></script>

<script type="text/javascript" src="/js/swal.min.js"></script>
</body>
</html>
