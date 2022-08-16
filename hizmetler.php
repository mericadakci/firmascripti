<section class="professional_builder row">
    <div class="container">
        <div class="row builder_all">
            <?php
            $hizmetler = $db->prepare("SELECT * FROM hizmetler ORDER BY hizmet_id DESC");
            $hizmetler->execute();
            $hizmet_cek = $hizmetler->fetchAll(PDO::FETCH_ASSOC);

            foreach ($hizmet_cek as $row) {
                ?>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-<?= $row["hizmet_icon"]; ?>" aria-hidden="true"></i>
                    <h4><?php echo $row["hizmet_baslik"]; ?></h4>
                    <p><?php echo $row["hizmet_aciklama"]; ?></p>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
</section>
