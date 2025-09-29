<div class="banner style--two ov-hidden">
    <div id="particles" data-bg-img="<?= site_url('assets/img/bg/banner-bg3.png'); ?>"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 py-5">
                <div class="card login-register-card mt-5" style="box-shadow: 0px 0px 200px rgba(0, 0, 0, 0.3)">
                    <div class="card-body">
                            <div class="text-center mb-5">
                                <h2><?= ALBERT_DEMANDER_UN_NOUVEAU_MOT_DE_PASSE; ?></h2>
                            </div>
                            <form action="<?= site_url('actions/passwordForgot'); ?>" method="POST" autocomplete="disabled">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label for="username" class="mb-2"><?= ALBERT_ADRESSE_E_MAIL; ?></label>
                                            <input type="text" id="username" class="form-control" name="email" placeholder="<?= ALBERT_VOTRE_NOM_DUTILISATEUR; ?>" autocomplete="disabled">
                                        </div>

                                    <div class="col-12 pt-2 text-center">
                                        <button type="submit" class="btn btn-primary"><?= ALBERT_DEMANDER_UN_NOUVEAU_MOT_DE_PASSE; ?></button>
                                    </div>
                                </div>
                            </form>

                    </div>
                </div>                
            </div>
            
            <a href="<?= site_url('connexion'); ?>" class="btn btn-info  mt-5 w-100"><?= ALBERT_CONNEXION; ?></a>
        </div>
    </div>
</div>
