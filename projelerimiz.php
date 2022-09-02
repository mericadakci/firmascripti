<section class="featured_works row" data-stellar-background-ratio="0.3">
    <div class="tittle wow fadeInUp">
        <h2>PROJELERİMİZ</h2>
    </div>
    <div class="featured_gallery">
        <?php
        $projeler = $db->prepare("SELECT * FROM projelerimiz ORDER BY proje_id DESC ");
        $projeler->execute();
        $proje_cek = $projeler->fetchAll(PDO::FETCH_ASSOC);

        foreach ($proje_cek as $row) {
            ?>
            <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                <img src="images/fotograflar/<?php echo $row["proje_resim"]; ?>" alt="">
                <div class="gallery_hover">
                    <h4><?php echo $row["proje_isim"]; ?></h4>
                    <a href="<?php echo $row["proje_link"]; ?>">PROJEYİ GÖSTER</a>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</section>