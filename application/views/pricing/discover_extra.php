<section class="wrapper bg-light">
    <div class="container pt-11 pt-md-13 pb-11 text-center">
        <div class="row">
            <div class="col-md-9 mx-auto" data-cues="slideInDown" data-group="page-title" data-disabled="true">
                <h1 class="display-2 fs-48 mb-4" data-cue="slideInDown" data-group="page-title" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">Dynamisez Votre compte en banque avec Albert Extra !</h1>
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="col-md-6">
                <img src="<?= site_url('assets/img/extra/1.png'); ?>" class="rounded" alt="">
            </div>
            <div class="col-md-6">
                <h5 class="display-6 my-5">Notre boutique personnalisée transforme la façon
                    dont vous présentez vos services aux clients.</h5>
                <p class="text-lead">Albert vous équipe pour mettre en avant des
                    prestations exclusives comme un départ tardif,
                    une bouteille de champagne, ou encore un kit
                    charnel aussi séduisant ce nouvelle outil, et ce, dès
                    la confirmation de chaque réservation.</p>
                <?php
                //Si on est pas connecté (donc pas inscrit, on demande au mec de se connecter)
                if (empty($user)) {
                ?>
                    <div class="alert alert-info">
                        <p class="mb-2"><i class="fa fa-lock display-6"></i></p>Albert Extra est réservé aux membres premium uniquement.<br><br><a href="<?= site_url('connexion'); ?>" title="Connexion" class="fw-bold">Connectez-vous</a><br>ou<br><a href="<?= site_url('nos-offres'); ?>" title="Nos Offres" class="fw-bold">Devenez membre en sélectionnant votre offre</a>.
                    </div>
                    <?php
                } else {
                    if (!empty($user['active_subscription'])) {

                    ?>
                        <h4 class="text-lead fw-normal mt-5">Vous vous apprêtez à ouvrir l'interface Albert Extra pour gérer vos boutiques.</h4>
                        <a href="<?= site_url('actions/goToExtra'); ?>" title="Albert Extra" target="_blank" class="btn btn-lg btn-gradient gradient-7 btn-icon btn-icon-end">Ouvrir Albert Extra <i class="uil uil-arrow-up-right"></i></a>
                    <?php

                    } else {
                    ?>
                        <div class="alert alert-warning">
                            <p>Vous devez être abonné <strong>Premium</strong> pour accéder à Albert Extra</p>
                        </div>
                    <?php
                    }
                    ?>
                <?php
                }
                ?>
            </div>

            <div class="col-md-12 mt-5 mt-14">
                <div class="row justify-content-center">
                    <div class="col-6 mb-5">
                        <h5 class="display-6">Prenez le contrôle et différenciez-vous en offrant une expérience sur mesure à vos voyageurs !</h5>

                        <h2 class="display-5 mb-3 mt-5 text-center"><span class="underline-3 style-3 text-warning primary">Comment</span> ?</h2>

                        <p>Transformez votre annonce <strong>Airbnb</strong> ou <strong>Booking</strong> en une boutique e-commerce !</p>

                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-6">
                        <h3>Boutiques illimitées</h3>
                        <img src="<?= site_url('assets/img/extra/shop.png'); ?>" class="rounded shadow-lg" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3>Produits illimités</h3>
                        <img src="<?= site_url('assets/img/extra/prod.png'); ?>" class="rounded shadow-lg" alt="">
                    </div>
                    <h2 class="fs-15 text-uppercase text-muted mt-8 mb-3">Et surtout !</h2>

                    <h2 class="display-5 mb-3 text-center"><span class="underline-3 style-3 text-warning primary">Aucune commission</span> sur vos ventes !*</h2>

                </div>


                <div class="row gx-8 align-items-center mt-10">
                    <!-- <div class="col-md-4">
                        <figure><img src="./assets/img/photos/device.png" srcset="./assets/img/photos/device@2x.png 2x" alt="" /></figure>
                    </div> -->
                    <div class="col-md-12">
                        <h3 class="display-4 mb-5">Notifications mail</h3>
                        <p class="mb-8">Des notifications par email sont prévues à chaque étape des commandes de vos voyageurs.</p>
                        <div class="row gy-6 process-wrapper">
                            <div class="col-md-4"> <img src="./assets/img/icons/lineal/user.svg" class="svg-inject icon-svg icon-svg-sm text-green mb-3" alt="" />
                                <h4 class="mb-1">Pour vos voyageurs</h4>
                                <p class="mb-0">Surprenez vos voyageurs dès leur commande ! Imaginez leur sourire quand ils recevront une notification pleine d'humour : "Félicitations ! Vous venez de débloquer un niveau de confort supplémentaire avec votre réservation !</p>
                            </div>

                            <div class="col-md-4"> <img src="./assets/img/icons/lineal/smartphone-2.svg" class="svg-inject icon-svg icon-svg-sm text-red mb-3" alt="" />
                                <h4 class="mb-1">Pour vos prestataires</h4>
                                <p class="mb-0">Imaginez une alerte qui vous dit, "Alerte : il est temps de préparer le champagne !" ou "Opération ménage en cours : que la propreté soit avec vous !"</p>
                            </div>

                            <div class="col-md-4"> <img src="./assets/img/icons/lineal/rocket.svg" class="svg-inject icon-svg icon-svg-sm text-aqua mb-3" alt="" />
                                <h4 class="mb-1">Pour vous !</h4>
                                <p class="mb-0">Parce que même si l'argent n'a pas d'odeur, il a le son le plus doux : celui des notifications de paiements qui atterrissent directement sur votre compte bancaire !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mb-4 mt-10">
                <?php
                //Si on est pas connecté (donc pas inscrit, on demande au mec de se connecter)
                if (empty($user)) {
                ?>
                    <div class="alert alert-info">
                        <p class="mb-2"><i class="fa fa-lock display-6"></i></p>Albert Extra est réservé aux membres premium uniquement.<br><br><a href="<?= site_url('connexion'); ?>" title="Connexion" class="fw-bold">Connectez-vous</a><br>ou<br><a href="<?= site_url('nos-offres'); ?>" title="Nos Offres" class="fw-bold">Devenez membre en sélectionnant votre offre</a>.
                    </div>
                    <?php
                } else {
                    if (!empty($user['active_subscription'])) {

                        //Si on a une date on check sa validité
                        if (date('Y-m-d H:i:s', strtotime($user['extra_member_until'])) >= date('Y-m-d H:i:s')) {
                    ?>
                            <h4 class="text-lead fw-normal mt-5">Vous vous apprêtez à ouvrir l'interface Albert Extra pour gérer vos boutiques.</h4>
                            <a href="<?= site_url('actions/goToExtra'); ?>" title="Albert Extra" target="_blank" class="btn btn-lg btn-gradient gradient-7 btn-icon btn-icon-end">Ouvrir Albert Extra <i class="uil uil-arrow-up-right"></i></a>

                        <?php
                        } else {
                        ?>
                            <p>Vous devez être abonné Albert Extra.</p>
                            <form action="<?= site_url('checkoutExtra'); ?>" method="POST" class="text-center">
                                <button class="btn btn-gradient gradient-7 rounded-pill" type="submit" name="subscribe" value="<?= EXTRA_PRICE_ID; ?>"><i class="uil uil-shopping-bag"></i>
                                    S'abonner à Albert Extra
                                </button>
                            </form>
                        <?php
                        }
                    } else {
                        ?>
                        <div class="alert alert-warning">
                            <p>Vous devez être abonné <strong>Premium</strong> pour accéder à Albert Extra</p>
                        </div>
                    <?php
                    }
                    ?>
                <?php
                }
                ?>
            </div>
            <p class="small text-left">* : Seuls les <a href="https://stripe.com/fr/pricing" target="_blank">frais Stripe</a> s'appliquent.</p>
        </div>
    </div>
</section>