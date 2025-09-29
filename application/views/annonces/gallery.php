<?php
$red_star = ' <span class="text-danger">*</span>';

$verify_state = (!empty($annonce['is_reviewed_by_agent'])) ? 'fa-check-circle text-success' : 'fa-times-circle text-danger';
$verify_text = (!empty($annonce['is_reviewed_by_agent'])) ? 'Cette annonce a été vérifiée par nos agents.' : 'Cette annonce n\'a pas encore été vérifiée par nos agents.';
?>
<section>
    <div class="container pt-2 pt-md-4 pb-8">
        <div class="row">
            <div class="col">
                <h2 class="mb-0"><?= $annonce['title']; ?> <i class="fa <?= $verify_state; ?>" title="<?= $verify_text; ?>"></i></h2>
                <p><?= $annonce['unique_reference']; ?></p>
                <p><a href="<?= site_url('annonce/' . $annonce['unique_id']); ?>">&lt; Retour à l'annonce</a></p>
            </div>

            <div class="card mb-5">
                <div class="card-body">
                    <p><i class="fa-solid fa-images me-2"></i><strong><?= ALBERT_PHOTOS_DU_LOGEMENT; ?> :</strong></p>
                    <?php
                    if (!empty($pictures)) {
                    ?>
                        <div class="grid grid-view">
                            <div class="row gx-md-8 gy-2 gy-md-4 isotope" style="position: relative; height: 1147.05px;">
                                <?php
                                foreach ($pictures as $picture) {
                                    if (empty($picture['deleted']) && $picture['mime'] != 'video/mp4') {
                                ?>
                                        <div class="project item col-md-3">
                                            <figure class="rounded mb-2">
                                                <img src="<?= WS_URL . '/resize.php?key=crop/480x480/' . $picture['file_name']; ?>" alt="" />
                                                <a class="item-link" href="<?= $picture['url']; ?>" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a>
                                            </figure>
                                            <div class="project-details d-flex justify-content-center flex-column">
                                                <div class="post-header">
                                                    <h2 class="post-title h5 text-center">
                                                        <a href="<?= site_url('annonces/removePicture?picture_id=' . $picture['id'] . '&annonce_id=' . $annonce['unique_id']); ?>" class="btn btn-danger btn-sm"><i class="fa fa-times me-2"></i><?= ALBERT_SUPPRIMER; ?></a>
                                                        <?php
                                                        if (!empty($annonce['guide_cover'])) {
                                                        ?>
                                                            <i class="fa fa-star text-warning ms-3"></i>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <a href="<?= site_url('annonces/setAsCover?picture_id=' . $picture['id'] . '&annonce_id=' . $annonce['unique_id']); ?>" onclick="return confirm('Voulez-vous vraiment définir cette photo comme photo de couverture des guides du logement ?');" class="btn btn-warning btn-sm"><i class="fa fa-star me-2"></i></a>
                                                        <?php
                                                        }
                                                        ?>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="mt-2 mb-0"><a href="#!" class="btn btn-success btn-sm w-100" data-bs-toggle="modal" data-bs-target="#modal-signin"><i class="fa fa-plus me-2"></i><?= ALBERT_AJOUTER; ?></a></p>

                            <div class="modal fade" id="modal-signin" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <h2 class="mb-3 text-start">Ajouter une photo</h2>

                                            <form action="<?= site_url('annonce/addImage'); ?>" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">
                                                <label for="other_points"><strong><?= ALBERT_PHOTOS_DU_LOGEMENT; ?></strong></label>
                                                <p class="small mb-2 text-info"><?= ALBERT_UNE_PHOTO_CUISINE_SDB_COUCHAGE_PIECE_DE_VIE_BLACON; ?></p>
                                                <p><input type="file" name="file[]" required></p>
                                                <p><button class="btn btn-info rounded-pill"><i></i></button></p>
                                                <hr class="my-3">

                                                <button class="btn btn-primary rounded-pill btn-login w-100 mb-2"><?= ALBERT_AJOUTER; ?></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>