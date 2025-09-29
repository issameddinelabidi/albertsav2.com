<section>
    <div class="container pt-7 pt-md-11 pb-8">
        <div class="row justify-content-center">


            <h3 class="display-5 mb-4 text-center">Votre abonnement actuel ne vous permet plus d'ajouter d'annonces</h3>

            <div class="col-md-7">
                <?php
                if (!empty($user['stripe_id'])) {
                ?>
                    <div class="card">
                        <div class="card-body text-center">
                            <p>Nous vous invitons à modifier votre abonnement en cliquant sur le bouton ci-dessous afin d'augmenter votre quota d'annonces sur notre plateforme.</p>
                            <a href="<?= site_url('mon-abonnement'); ?>" class="btn btn-info rounded-pill py-3 mb-3"><?= ALBERT_GERER_MON_ABONNEMENT; ?></a>

                            <p>Cliquez sur "<strong>Modifier le plan</strong>" puis cliquez sur le bouton "<strong>+</strong>" afin d'obtenir la quantité souhaitée.</p>
                            <p>Cliquez sur "<strong>Continuer</strong>" puis sur "<strong>Confirmer</strong>" afin de mettre à jour votre abonnement Albert.</p>
                            <hr class="my-3">
                            <p class="text-info">Votre abonnement Albert sera alors mis à jour et vous pourrez continuer de nous confier la gestion de vos annonces.</p>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <div class="card">
                        <div class="card-body text-center">
                            <p>Nous vous invitons à vous abonner à Albert afin de profiter pleinement de tous les services offerts par notre plateforme.</p>
                            <a href="<?= site_url('nos-offres'); ?>" class="btn btn-info rounded-pill py-3">Découvrir nos offres</a>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</section>