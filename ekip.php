<section class="our_team_area">
    <div class="container">
        <div class="tittle wow fadeInUp" >
            <h2>EKİBİMİZ</h2>
            <div class="row team_row">
            <?php
            $ekipler = $db->prepare("SELECT * FROM ekip ORDER BY ekip_id DESC ");
            $ekipler->execute();
            $ekip_cek = $ekipler->fetchAll(PDO::FETCH_ASSOC);

            foreach ($ekip_cek as $row) {
                ?>

                <div class="col-md-3 col-sm-6 wow fadeInUp">
                    <div class="team_membar">
                        <img src="images/ekipler/<?php echo $row["ekip_resim"]; ?>" alt="">
                        <div class="team_content">
                            <ul>
                                <li><a href="<?php echo $row["ekip_facebook"]; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo $row["ekip_twitter"]; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo $row["ekip_linkedin"]; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="#" class="name"><?php echo $row["ekip_isim"]; ?></a>
                            <a href="#" class="name"><?php echo $row["ekip_mevki"]; ?></a>
                        </div>
                    </div>
                </div>
            <?php
            }

            ?>
        </div>


        </div>
    </div>
</section>