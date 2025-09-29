<?php
$red_star = ' <span class="text-danger">*</span>';
?>
<section>
    <div class="container pt-2 pt-md-4 pb-8">
        <div class="row">

            <div class="col">
                <h2 class="mb-3"><?= $page_title; ?></h2>
            </div>
        </div>

        <div class="row">
            <?php
            if (!empty($ticket['deleted'])) {
            ?>
                <div class="col-md-12">
                    <div class="alert alert-danger"><?= ALBERT_ATTENTION_CETTE_ANNONCE_EST_DESACTIVEE; ?></div>
                </div>
            <?php
            }
            ?>
            <div class="col-md-12">

                <form action="<?= site_url('annonces/updateTicket'); ?>" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="ticket_id" value="<?= $this->uri->segment(3); ?>">
                    <input type="hidden" name="annonce_unique_id" value="<?= $this->uri->segment(4); ?>">

                    <div class="mb-4">
                        <label for="traveller_name"><strong><?= ALBERT_NOM_DU_VOYAGEUR; ?><?= $red_star; ?></strong></label>
                        <input type="text" name="traveller_name" id="traveller_name" class="form-control" placeholder="<?= ALBERT_NOM_DU_VOYAGEUR; ?>" value="<?= $ticket['traveller_name']; ?>" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="traveller_number"><strong><?= ALBERT_NUMERO_DE_TELEPHONE_DU_VOYAGEUR; ?><?= $red_star; ?></strong></label>
                                <input type="text" name="traveller_number" id="traveller_number" class="form-control" placeholder="<?= ALBERT_NUMERO_DE_TELEPHONE_DU_VOYAGEUR; ?>" value="<?= $ticket['traveller_number']; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="sinister_date"><strong><?= ALBERT_DATE_DU_SINISTRE; ?><?= $red_star; ?></strong></label>
                                <input type="date" name="sinister_date" id="sinister_date" class="form-control" value="<?= date('Y-m-d', strtotime($ticket['sinister_date'])); ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="content"><strong><?= ALBERT_CONTENU; ?><?= $red_star; ?></strong></label>
                        <textarea id="content" name="content" class="form-control" placeholder="<?= ALBERT_INFORMATIONS_A_PROPOS_DU_SINISTRE; ?>" required><?= $ticket['content']; ?></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="other_points"><strong>Ajouter des photos</strong></label>
                        <div id="add_picture_zone">
                            <p><input type="file" name="file[]"></p>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button type="button" class="btn btn-outline-primary btn-sm" id="add_more_picture"><i class="fa fa-plus me-2"></i> <?= ALBERT_AJOUTER; ?></button>
                            </div>
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="row">
                        <p class="text-info">Il vous est possible de sélectionner des photos à supprimer</p>
                        <?php
                        foreach ($ticket['pictures'] as $picture) {

                            if (empty($picture['deleted'])) {
                        ?>
                                <div class="col-md-2 text-center">
                                    <div class="project item">
                                        <figure class="rounded mb-2">
                                            <img src="<?= WS_URL . '/resize.php?key=crop/480x480/' . $picture['file_name']; ?>" alt="" />
                                            <a class="item-link" href="<?= $picture['url']; ?>" data-glightbox data-gallery="projects-group-tickets-<?= $ticket['id']; ?>"><i class="uil uil-focus-add"></i></a>
                                        </figure>    
                                    </div>

                                    <input type="checkbox" class="form-check-input" name="remove_picture[]" value="<?= $picture['id']; ?>" id="pict_<?= $picture['id']; ?>"> <label for="pict_<?= $picture['id']; ?>"><?= ALBERT_SUPPRIMER; ?></label>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-gradient gradient-7 w-100 mt-4" onclick="return confirm('Confirmez-vous la modification de ce ticket ?')">Modifier le ticket</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>