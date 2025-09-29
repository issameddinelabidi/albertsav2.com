<!-- <div class="py-5 d-flex align-items-center bg-img" style="min-height: calc(100vh - 100px); background-image: url(&quot;assets/img/bg/page-bg2.png&quot;);"> -->
<div class="banner style--two ov-hidden">
    <div id="particles" data-bg-img="<?= site_url('assets/img/bg/banner-bg3.png'); ?>"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 py-5">
                <!-- Card -->
                <div class="card login-register-card mt-5" style="box-shadow: 0px 0px 200px rgba(0, 0, 0, 0.3)">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <h2><?= ALBERT_CREEZ_VOTRE_COMPTE_ALBERT; ?></h2>
                        </div>

                        <!-- Register Form -->
                        <form action="<?= site_url('actions/register'); ?>" method="POST" id="registerForm" autocomplete="disabled">
                            <div class="row">
                                <div class="col-md-12">


                                    <div class="alert alert-info text-dark w-100 text-center fw-bold">
                                        14 jours d'essai offerts
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="username" class="mb-2"><?= ALBERT_SOCIETE; ?></label>
                                        <input type="text" id="username" class="form-control" name="username" placeholder="<?= ALBERT_RAISON_SOCIALE_2; ?>" autocomplete="disabled" required>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="email" class="mb-2"><?= ALBERT_VOTRE_EMAIL; ?></label>
                                        <input type="text" id="email" class="form-control" name="email" placeholder="<?= ALBERT_VOTRE_EMAIL; ?>" autocomplete="disabled" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="mb-2"><?= ALBERT_VOTRE_MOT_DE_PASSE; ?></label>
                                        <input type="password" id="password" class="form-control" name="password" placeholder="<?= ALBERT_VOTRE_MOT_DE_PASSE; ?>" autocomplete="disabled">
                                    </div>

                                    <!-- <div class="form-group mb-4">
                                        <label for="max_annonces" class="mb-2">Nombre d'annonces autorisées</label>
                                        <input type="number" id="max_annonces" class="form-control" name="max_annonces" placeholder="" min="1" autocomplete="disabled" required>
                                    </div> -->

                                    <div class="form-group mt-4">
                                        <label for="password" class="mb-2">Nombre d'annonces</label>

                                        <div class="input-group  mb-3">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-left-minus btn btn-light btn-number py-3" data-type="minus" data-field="quantity_to_set">
                                                    <span class="fa fa-minus text-dark"></span>
                                                </button>
                                            </span>
                                            <input type="text" id="quantity_to_set" name="max_annonces" class="form-control input-number mx-1 items_quantity rounded text-center fw-bold" value="<?= $_GET['max_annonces'] ?? 10; ?>" min="3" max="250">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-right-plus btn btn-light btn-number py-3" data-type="plus" data-field="quantity_to_set">
                                                    <span class="fa fa-plus text-dark"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 pt-2 text-center">
                                    <div class="g-recaptcha mb-4" data-sitekey="6Leh200jAAAAAEayxRxi3n_ARw9v8GcKW-g0qNFp" data-callback="enableBtn"></div>

                                    <button type="submit" class="btn btn-dark" id="sendButtonCaptcha"><i class="fa fa-user-plus me-3"></i> <?= ALBERT_CREER_LE_COMPTE; ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <a href="<?= site_url('connexion'); ?>" class="btn btn-gradient gradient-7 mt-5 w-100"><?= ALBERT_CONNEXION; ?></a>
            </div>
        </div>
    </div>
</div>