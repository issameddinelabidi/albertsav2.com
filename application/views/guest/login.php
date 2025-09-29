<div class="banner style--two ov-hidden">
    <div id="particles" data-bg-img="<?= site_url('assets/img/bg/banner-bg3.png'); ?>"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 py-5">
                <div class="card login-register-card mt-5" style="box-shadow: 0px 0px 200px rgba(0, 0, 0, 0.3)">
                    <div class="card-body">
                        <?php
                        if (isset($_GET['recoverPassword'])) {
                        ?>
                            <div class="text-center mb-5">
                                <p class="h3"><?= ALBERT_REDEFINIR_VOTRE_MOT_DE_PASSE; ?></p>
                            </div>
                            <form action="<?= site_url('actions/recover'); ?>" method="POST">
                                <input type="hidden" name="token" value="<?= $_GET['recoverPassword']; ?>">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password" class="mb-2"><?= ALBERT_NOUVEAU_MOT_DE_PASSE; ?></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="<?= ALBERT_NOUVEAU_MOT_DE_PASSE; ?>" required>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password_conf" class="mb-2">Confirmation</label>
                                        <input type="password" class="form-control" id="password_conf" name="password_conf" placeholder="<?= ALBERT_CONFIRMATION; ?>" required>
                                    </div>
                                </div>

                                <div class="col-12 pt-2 text-center">
                                    <button type="submit" class="btn btn-info btn-default shadow-sm"><?= ALBERT_METTRE_A_JOUR; ?></button>
                                </div>

                                <hr class="my-3">
                                <p class="text-center"><a href="<?= site_url('connexion'); ?>" title="<?= ALBERT_CONNEXION; ?>"><?= ALBERT_CONNEXION; ?></a></p>

                            </form>
                        <?php
                        } else {
                        ?>
                            <div class="text-center mb-5">
                                <h2><?= ALBERT_ACCES_ESPACE_PROFESSIONNEL ?></h2>
                            </div>
                            <form action="<?= site_url('actions/login'); ?>" method="POST" autocomplete="disabled">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label for="username" class="mb-2"><?= ALBERT_ADRESSE_E_MAIL; ?></label>
                                            <input type="text" id="username" class="form-control" name="email" placeholder="<?= ALBERT_VOTRE_NOM_DUTILISATEUR; ?>" autocomplete="disabled">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="password" class="mb-2"><?= ALBERT_MOT_DE_PASSE; ?></label>
                                            <input type="password" id="password" class="form-control" name="password" placeholder="<?= ALBERT_VOTRE_MOT_DE_PASSE; ?>" autocomplete="disabled">
                                        </div>
                                    </div>

                                    <div class="col-12 pt-2 text-center">
                                        <button type="submit" class="btn btn-gradient gradient-7 rounded-pill"><?= ALBERT_CONNEXION; ?></button>
                                    </div>
                                </div>
                            </form>

                            <hr class="my-3">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <a href="<?= site_url('mot-de-passe-oublie'); ?>" class="mt-5"><?= ALBERT_MOT_DE_PASSE_OUBLIE; ?></a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <a href="<?= site_url('inscription'); ?>" title="<?= ALBERT_INSCRIPTION; ?>" class="btn btn-gradient gradient-7 mt-5 w-100"><i class="fa fa-user-plus me-3"></i><?= ALBERT_INSCRIPTION; ?></a>
            </div>
        </div>
    </div>
</div>