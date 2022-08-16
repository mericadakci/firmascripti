<section class="our_achievments_area" data-stellar-background-ratio="0.3">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>BAŞARILARIMIZ</h2>
        </div>
        <div class="achievments_row row">
            <?php
            $basarilar = $db->prepare("SELECT * FROM basarilar ORDER BY basari_id DESC");
            $basarilar->execute();
            $basari_cek = $basarilar->fetchAll(PDO::FETCH_ASSOC);

            foreach ($basari_cek as $row) {
                ?>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-<?php echo $row["basari_icon"]; ?>" aria-hidden="true"></i>
                    <span class="counter"><?php echo $row["basari_sayi"]; ?></span>
                    <h6><?php echo $row["basari_isim"]; ?></h6>
                </div>
            <?php
            }
            ?>


        </div>
    </div>
</section>
