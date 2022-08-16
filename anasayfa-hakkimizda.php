<?php

$hakkimizda = $db->prepare("SELECT * FROM hakkimizda");
$hakkimizda->execute();
$hakkimizda_cek = $hakkimizda->fetch(PDO::FETCH_ASSOC);

?>
<section class="about_us_area row">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>HAKKIMIZDA</h2>

        </div>
        <div class="row about_row">
            <div class="who_we_area col-md-7 col-sm-6">
                <div class="subtittle">
                    <h2><?= $hakkimizda_cek["hakkimizda_baslik"]; ?></h2>
                </div>
                <p><?= $hakkimizda_cek["hakkimizda_aciklama"]; ?></p>
                <a href="hakkimizda.php" class="button_all">Hakkımızda</a>
            </div>
            <div class="col-md-5 col-sm-6 about_client">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/mCAsR--qQYc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<hr style="background-color: #ccc; height: 1px;"