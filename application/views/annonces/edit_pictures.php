<section>
    <div class="container pt-2 pt-md-4 pb-8">
        <div class="row">

            <div class="col">
                <h2 class="mb-0"><?= $annonce['title']; ?></h2>
                <p><?= $annonce['unique_reference']; ?></p>
            </div>
            <div class="col-auto text-right">
                <a href="<?= site_url('annonce/edit/' . $annonce['unique_id']); ?>" class="btn btn-info"><?= ALBERT_MODIFIER; ?></a>
            </div>
        </div>

        <div class="row">
            <?php
            if (!empty($annonce['deleted'])) {
            ?>
                <div class="col-md-12">
                    <div class="alert alert-danger"><?= ALBERT_ATTENTION_CETTE_ANNONCE_EST_DESACTIVEE; ?></div>
                </div>
            <?php
            }
            ?>
            <div class="col-md-12">
                <p><a href="<?= site_url('annonce/'.$annonce['unique_id']); ?>">&lt; <?= ALBERT_RETOUR_A_LANNONCE; ?></a></p>
                <h3 class="display-3 text-center mb-5"><?= ALBERT_GESTION_GALERIE; ?></h3>

                <div class="grid grid-view projects-masonry">
                    <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                        <?php
                        foreach ($pictures as $picture) {
                            if (empty($picture['deleted'])){
                        ?>
                            <div class="project item col-md-3">
                                <figure class="rounded mb-2">
                                    <img src="<?= WS_URL . '/resize.php?key=crop/480x480/' . $picture['file_name']; ?>" alt="" />
                                    <a class="item-link" href="<?= $picture['url']; ?>" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a>
                                </figure>
                                <div class="project-details d-flex justify-content-center flex-column">
                                    <div class="post-header">
                                        <h2 class="post-title h5 text-center"><a href="<?= site_url('annonces/removePicture?picture_id='.$picture['id'].'&annonce_id='.$annonce['unique_id']); ?>" class="btn btn-danger btn-sm"><i class="fa fa-times me-2"></i><?= ALBERT_SUPPRIMER; ?></a></h2>
                                    </div>
                                </div>
                            </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
</section>