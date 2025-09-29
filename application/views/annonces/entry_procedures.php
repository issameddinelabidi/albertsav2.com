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
                <p><a href="<?= site_url('guide/handleGuide/' . $annonce['unique_id']); ?>">&lt; Retour gestion du guide</a></p>
                <h3 class="display-3 text-center mb-5"><?= $page_title; ?></h3>

                <?php
                if (empty($procedure_list)) {
                ?>
                    <div class="alert alert-warning">
                        Votre procédure est vide.
                    </div>
                <?php
                } else {
                ?>
                    <ul class="glyphs glyphs-svg row gy-6">
                        <?php
                        $counter = 0;
                        foreach ($procedure_list as $proc) {
                            if (!empty($proc['deleted'])) {
                                $step_title = 'Etape supprimée.';
                            } else {
                                $counter++;
                                $step_title = 'Etape ' . $counter;
                            }
                        ?>
                            <li class="col-12">
                                <div class="card h-100">
                                    <div class="card-header position-relative">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="mb-0"><?= $step_title; ?></h3>
                                                <p class="mb-0">Position : <strong><?= $proc['position']; ?></strong></p>
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-primary btn-sm me-2 d-inline" data-bs-toggle="modal" data-bs-target="#modal_<?= $proc['id']; ?>">Modifier</a></button>

                                                <div class="modal fade" id="modal_<?= $proc['id']; ?>" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                <h2 class="mb-3 text-start">Modification <?= $step_title; ?></h2>

                                                                <form action="<?= site_url('annonce/editProcedure'); ?>" method="POST" enctype="multipart/form-data">
                                                                    <input type="hidden" name="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">
                                                                    <input type="hidden" name="type" value="<?= $procedure_type; ?>">
                                                                    <input type="hidden" name="procedure_id" value="<?= $proc['id']; ?>">

                                                                    <label for="other_points"><strong>Photo</strong></label>
                                                                    <p><input type="file" name="file[]"></p>

                                                                    <label for="text"><strong>Description de l'étape</strong></label>
                                                                    <textarea class="form-control" name="text" id="text" rows="4" placeholder="Décrivez l'étape"><?= $proc['text']; ?></textarea>

                                                                    <label for="position"><strong>Ordre</strong></label>
                                                                    <input type="number" class="form-control" name="position" id="position" min="1" max="99" placeholder="12" value="<?= $proc['position']; ?>" required>

                                                                    <hr class="my-3">

                                                                    <button class="btn btn-primary rounded-pill btn-login w-100 mb-2">Modifier</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php
                                                if (empty($proc['deleted'])) {
                                                ?>
                                                    <form action="<?= site_url('annonces/removeProcedure'); ?>" method="POST" class="d-inline">
                                                        <input type="hidden" name="annonce_uuid" value="<?= $annonce['unique_id']; ?>">
                                                        <input type="hidden" name="procedure_id" value="<?= $proc['id']; ?>">

                                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Confirmez-vous la suppression ?')">Supprimer</a>
                                                    </form>
                                                <?php
                                                } else {
                                                ?>
                                                    <form action="<?= site_url('annonces/restoreProcedure'); ?>" method="POST" class="d-inline">
                                                        <input type="hidden" name="annonce_uuid" value="<?= $annonce['unique_id']; ?>">
                                                        <input type="hidden" name="procedure_id" value="<?= $proc['id']; ?>">

                                                        <button class="btn btn-warning btn-sm d-inline" onclick="return confirm('Confirmez-vous la restauration ?')">Restaurer</a>
                                                    </form>
                                                <?php
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-5" style="<?= (!empty($proc['deleted'])) ? 'opacity: 0.4' : ''; ?>">
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="<?= $proc['file']; ?>" target="_blank">
                                                    <figure><img class="img-fluid" src="<?= $proc['file']; ?>" alt="Etape <?= $counter; ?>"></figure>
                                                </a>
                                            </div>
                                            <div class="col-9 text-left">
                                                <p><?= nl2br($proc['text']); ?></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                <?php
                }
                ?>
            </div>

            <?php
            if (!empty($can_duplicate)) {
            ?>
                <div class="col-12 text-center my-5">
                    <h6>Deux possibiltés s'offrent à vous</h6>
                </div>
            <?php
            }
            ?>

            <div class="col">
                <div class="text-center">
                    <h4>Ajout manuel</h4>
                    <button class="btn btn-info w-100" data-bs-toggle="modal" data-bs-target="#modal-signin"><i class="fa fa-plus me-3"></i> Ajouter une étape</button>
                </div>

                <div class="modal fade" id="modal-signin" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h2 class="mb-3 text-start">Nouvelle étape</h2>

                                <form action="<?= site_url('annonce/addProcedure'); ?>" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" class="form-control" name="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">
                                    <input type="hidden" name="type" value="<?= $procedure_type; ?>">
                                    <label for="other_points"><strong>Photo</strong></label>
                                    <p><input type="file" name="file[]" required></p>

                                    <label for="text"><strong>Description de l'étape</strong></label>
                                    <textarea class="form-control" name="text" id="text" rows="4" placeholder="Décrivez l'étape"></textarea>

                                    <label for="position"><strong>Ordre</strong></label>
                                    <input type="number" class="form-control" name="position" id="position" min="1" max="99" placeholder="12" required>

                                    <hr class="my-3">

                                    <button class="btn btn-primary rounded-pill btn-login w-100 mb-2"><?= ALBERT_AJOUTER; ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if (!empty($can_duplicate)) {
            ?>
                <div class="col-auto">
                    <h6 class="mt-2">ou</h6>
                </div>
                <div class="col">
                    <h4 class="text-center">Dupliquer la procédure d'une annonce existante</h4>
                    <p class="text-left">Cette fonctionnalité vous est mise à disposition afin de vous éviter de saisir la même procédure pour des logements faisant partie d'un même lot et où la procédure est identique.</p>
                    <form action="<?= site_url('annonce/duplicateProcedure'); ?>" method="POST">
                        <input type="hidden" name="annonce_unique_id" value="<?= $this->uri->segment(3); ?>">
                        <input type="hidden" name="type" value="<?= $procedure_type; ?>">
                        <select name="wished_procedure" class="form-control mb-3" required>
                            <option value="">Sélectionnez</option>
                            <?php
                            foreach ($selectable_annonces as $ann) {
                            ?>
                                <option value="<?= $ann['unique_id']; ?>"><?= $ann['title']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <button class="btn btn-dark w-100" onclick="return confirm('Confirmez-vous vouloir dupliquer la procédure sur cette annonce ?');"><i class="fa fa-copy me-3"></i> Dupliquer la procédure d'une autre annonce</button>
                    </form>

                    <p class="text-left text-danger mt-3">Attention : avant de dupliquer la procédure depuis une annonce existante, pensez à vous assurer que celle-ci soit bien complète. Vous pourrez modifier ou supprimer les procédures copiées.</p>

                </div>
            <?php
            }
            ?>


        </div>

    </div>
</section>