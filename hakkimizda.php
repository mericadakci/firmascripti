<?php include "header.php"; ?>
	<!-- End Header_Area -->

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>HAKKIMIZDA</h2>
        <ol class="breadcrumb">
            <li><a href="index.php">ANASAYFA </a></li>
            <li><a href="javascript:void(0);" class="active">HAKKIMIZDA</a></li>
        </ol>
    </section>
    <!-- End Banner area -->
    <?php
    $hakkimizda = $db->prepare("SELECT * FROM hakkimizda");
    $hakkimizda->execute();
    $hakkimizda_cek = $hakkimizda->fetch(PDO::FETCH_ASSOC);
    ?>
    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>HAKKIMIZDA</h2>
            </div>
            <div class="row about_row">
                <div class="col-md-12 col-sm-12 about_client about_pages_client">
                    <div class="subtittle">
                        <h2>BİZ KİMİZ</h2>
                    </div>
                    <p><?php echo $hakkimizda_cek["hakkimizda_aciklama"]; ?></p>
                    </div>

                <div class="col-md-12 col-sm-12 about_client about_pages_client">
                    <div class="subtittle">
                        <h2>VİZYONUMUZ</h2>
                    </div>

                    <p><?php echo $hakkimizda_cek["hakkimizda_vizyon"]; ?></p>
                </div>
                <div class="col-md-12 col-sm-12 about_client about_pages_client">
                    <div class="subtittle">
                        <h2>MİSYONUMUZ</h2>
                    </div>
                    <p><?php echo $hakkimizda_cek["hakkimizda_misyon"]; ?></p>
                </div>
            </div>
        </div>
    </section>
<hr style="background-color: #ccc; height: 5px;"
    <!-- End About Us Area -->



    <!-- Our Team Area -->
    <?php include "ekip.php"; ?>
    <!-- End Our Team Area -->

    <!-- Footer Area -->
    <?php include "footer.php"; ?>
    <!-- End Footer Area -->


