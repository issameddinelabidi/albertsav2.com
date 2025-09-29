<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-0"><?= $annonce['title']; ?></h2>
                <p><a href="<?= site_url('annonce/' . $annonce['unique_id']); ?>">Retour à l'annonce</a></p>
            </div>
            <div class="col-md-12">
                <?php
                switch ($annonce['guide_mode']) {
                    case 'full':
                        $mode = 'Guide complet (voyageurs + ménage)';
                        break;

                    case 'inout':
                        $mode = 'Guide voyageurs seulement';
                        break;

                    case 'clean':
                        $mode = 'Guide ménage seulement';
                        break;
                }
                ?>

                <div class="alert alert-info">
                    <p class="mb-0"><strong>Pour ce logement</strong>, vous utilisez actuellement le <strong><?= $mode; ?></strong></p>
                    <?php
                    if ($annonce['guide_mode'] == 'clean') {
                    ?>
                        <p class="mb-0 small">Info : vos guides se remettent à l'état "<strong>en attente de nettoyage</strong>" tous les soirs à minuit heure de Paris.</p>
                    <?php
                    }

                    if ($annonce['guide_mode'] == 'inout') {
                    ?>
                        <p class="mb-0 small">Attention : pensez à "<strong>forcer le nettoyage</strong>" pour cette annonce si vous utilisez pour la première fois la version voyageurs.</p>
                    <?php
                    }
                    ?>
                </div>
                <div class="card">
                    <div class="card-header">
                        Paramétrages de guides pour votre annonce.
                    </div>
                    <div class="card-body">
                        <form action="<?= site_url('annonce/updateGuideParams'); ?>" method="POST">
                            <input type="hidden" name="annonce_uuid" value="<?= $annonce['unique_id']; ?>">
                            <div class="form-group row">
                                <div class="col-3">
                                    <label for="guide_mode">Je souhaite utiliser uniquement le :</label>
                                </div>
                                <div class="col-9">
                                    <select name="guide_mode" id="guide_mode" class="form-control col-9">
                                        <option value="full" <?= ($annonce['guide_mode'] == 'full') ? 'selected' : ''; ?>>Guide complet (voyageurs + ménage)</option>
                                        <option value="inout" <?= ($annonce['guide_mode'] == 'inout') ? 'selected' : ''; ?>>Voyageur seulement</option>
                                        <option value="clean" <?= ($annonce['guide_mode'] == 'clean') ? 'selected' : ''; ?>>Ménage seulement</option>
                                    </select>

                                    <button type="submit" class="btn btn-primary mt-4">Enregistrer les modification</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

                <?php
                if ($annonce['guide_mode'] == 'inout' || $annonce['guide_mode'] == 'full') {
                ?>
                    <div class="alert alert-dark mt-5">
                        <div class="row">
                            <div class="col-12">
                                <p class="mb-3"><strong>Gestion du guide voyageurs</strong></p>
                            </div>
                            <div class="col-8">

                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <a href="<?= site_url('annonce/entryProcedure/' . $annonce['unique_id']); ?>" class="btn btn-success w-100"><i class="fa fa-door-open me-2"></i><?= ALBERT_GERER_LA_PROCEDURE_DENTREE; ?> <i class="fa fa-chevron-right ms-4"></i></a>
                                    </div>
                                    <div class="col-12">
                                        <a href="<?= site_url('annonce/leaveProcedure/' . $annonce['unique_id']); ?>" class="btn btn-danger w-100"><i class="fa fa-door-closed me-2"></i><?= ALBERT_GERER_LA_PROCEDURE_DE_SORTIE; ?> <i class="fa fa-chevron-right ms-4"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <a href="<?= site_url('guide/' . $annonce['unique_id']); ?>" target="_blank" class="btn btn-white w-100">Consulter la version en ligne <i class="fa fa-chevron-right ms-2"></i></a>
                                    </div>
                                    <div class="col-12">
                                        <a href="<?= site_url('guide/preview/' . $annonce['unique_id']); ?>" target="_blank" class="btn btn-gradient gradient-7 w-100">Aperçu du guide <i class="fa fa-eye ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }

                if ($annonce['guide_mode'] == 'clean' || $annonce['guide_mode'] == 'full') {
                ?>
                    <div class="alert alert-dark mt-5">
                        <div class="row">
                            <div class="col-12">
                                <p class="mb-3"><strong>Gestion du Guide Albert team</strong></p>
                            </div>

                            <div class="col-8">

                                <a href="<?= site_url('guide/handleCleaningGuide/' . $annonce['unique_id']); ?>" target="_blank" class="btn btn-primary w-100"><i class="fa fa-broom me-3"></i> Gestion guide Albert team</a>
                            </div>
                            <div class="col-4">
                                <a href="<?= site_url('cleaningGuide/' . $annonce['unique_id']); ?>" target="_blank" class="btn btn-white w-100">Consulter la version en ligne<i class="fa fa-chevron-right ms-2"></i></a>
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