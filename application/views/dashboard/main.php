<?php
if (empty($check_up_to_date)) {
    if (!empty($user['revolut_payment_method_id'])) {
?>
        <div class="modal fade" id="up_to_date_modal" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <!-- <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->

                        <h3>Une toute petite seconde !</h3>
                        <p class="mb-6">Une fois par mois, nous vous demandons de nous confirmer le fait que vos annonces soient bien à jour afin que nos agents répondent de la meilleure manière possible à vos voyageurs.</p>


                        <button class="btn btn-light text-dark" data-bs-dismiss="modal" aria-label="Close">Non, je vais les mettre à jour</button>
                        <hr class="my-3">
                        <a href="<?= site_url('actions/setAnnoncesUpToDate'); ?>" class="btn btn-gradient gradient-7">Oui, elles sont à jour.</a>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
} else {
    $creationDate = strtotime($user['creation_date']); // Convertir la date en timestamp
    $oneMonthAgo = strtotime('-1 month', strtotime(date('Y-m-d H:i:s'))); // Obtenir la date d'il y a un mois

    /*
    if (empty($user['have_left_review']) && $creationDate <= $oneMonthAgo) {
    ?>
        <div class="modal fade" id="up_to_date_modal" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-md">
                <div class="modal-content text-center">
                    <div class="modal-body pb-3">
                        <!-- <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/edplgash.json"
                            trigger="in"
                            style="width:70px;height:70px">
                        </lord-icon>
                        <lord-icon
                            src="https://cdn.lordicon.com/edplgash.json"
                            trigger="in"
                            delay="150"
                            style="width:70px;height:70px">
                        </lord-icon>
                        <lord-icon
                            src="https://cdn.lordicon.com/edplgash.json"
                            trigger="in"
                            delay="300"
                            style="width:70px;height:70px">
                        </lord-icon>
                        <lord-icon
                            src="https://cdn.lordicon.com/edplgash.json"
                            trigger="in"
                            delay="450"
                            style="width:70px;height:70px">
                        </lord-icon>
                        <lord-icon
                            src="https://cdn.lordicon.com/edplgash.json"
                            trigger="in"
                            delay="600"
                            style="width:70px;height:70px">
                        </lord-icon>
                        <h2>🕒 Plus que 7 jours pour profiter de cette offre !</h2>
                        <h3>Ton avis vaut de l’or ! 💰</h3>
                        <p class="mb-6">🎁 Pssst… on a un cadeau pour toi, mais dépêche-toi !<br>
                            Raconte ton expérience unique chez Albert sur notre fiche Google et hop, 25€ d’avoir sur ton abonnement. Simple, rapide et gagnant… mais attention, l’offre expire dans 7 jours ! ⏳</p>

                        <a href="https://www.google.com/search?sca_esv=557dcd095ef14047&sxsrf=AHTn8zoHfeUN_lxEqSJKIfWaU845AQ3kmg:1738362533138&uds=ABqPDvztZD_Nu18FR6tNPw2cK_RRsar6yh2wOkrHmhF_p-PtR2vf-9dF_yUogUNDd8-Zm4moVm8NgwMR7Di-Vq48_oQ3wSm4TdqtKlxqk63kQEJfyGHUFDFoTqqQWOhcke9IBbYPuF9L&si=APYL9bs7Hg2KMLB-4tSoTdxuOx8BdRvHbByC_AuVpNyh0x2KzQvxgpXX7UPcBXxKt4Mmj-595SqePKygVxr4BiwRsC2eVFG3k1aTWqPB0fS_qxDFltzSY-s%3D&q=ALBERT+SAV+Avis&sa=X&ved=2ahUKEwik9pyKgaGLAxWUTKQEHYjdAP8Q3PALegQITxAF&biw=1792&bih=1008&dpr=2" target="_blank" class="btn btn-gradient gradient-7">👉 Je laisse mon avis et je gagne 25€ sur mon abonnement !</a>

                        <hr class="my-3">
                        <p><a href="<?= site_url('actions/alreadySentReview'); ?>" class="btn btn-dark text-white py-2">✅ C'est déjà fait, j'attends ma couronne 👑</a></p>
                        <div class="row">
                            <div class="col-6">
                                <p class="text-dark mb-0" data-bs-dismiss="modal" aria-label="Close"><a href="#!">⏳ Je suis trop occupé à gérer mon empire</a></p>
                            </div>
                            <div class="col-6">
                                <p><a href="<?= site_url('actions/notInterestedReview'); ?>" class="text-dark py-2">🚫 Je préfère ne pas encourager ceux qui me facilitent la vie… 🤷‍♂️</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
*/
}
?>

<?php
if (!empty($user['channel_manager_used'])) {
?>
    <section class="wrapper">
        <div class="container pt-5 pb-8 mb-5">
            <div class="row gx-0 align-items-center">
                <div class="col-md-12 text-center" data-cues="slideInDown" data-disabled="true">
                    <?php
                    if (!empty($annonce_channel_link_missing)) {
                    ?>
                        <p class="lead fs-lg" data-cue="slideInDown" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-direction: normal; animation-fill-mode: both;"><i class="fa fa-warning me-3 text-info"></i>Certaines de vos annonces Albert doivent être liées à votre Channel Manager.</p>

                        <a href="<?= site_url('dashboard#annonces_list'); ?>" class="btn btn-lg btn-dark rounded-pill me-2" data-cue="slideInDown">Complétez les informations manquantes <i class="fa fa-chevron-right ms-3"></i></a>
                    <?php
                    } else {
                    ?>
                        <p class="lead fs-lg mb-0" data-cue="slideInDown" data-delay="200" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;"><i class="fa fa-check me-3 text-success"></i>Toutes vos annonces sont synchronisées avec notre Assistant</p>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>


<section class="wrapper">
    <div class="container py-10 pt-0">

        <?php
        /*
        <div class="card gradient gradient-7 mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class="font-weight-300 text-white">🎁 Offre spéciale mai</h4>
                        <p class="text-white mb-2">Recevez <strong>25€ de bonus</strong> pour chaque nouvel affilié, <strong>en plus des 10% habituels</strong> !</p>
                        

                        <p class="text-white mb-0 fw-bold"> ⏳ Dépêchez-vous, il ne reste plus que <span class="fw-bold blink_me" id="countdown"></span> avant la fin de l'offre !'</p>
                    </div>
                </div>

            </div>
        </div>
*/
        ?>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class="font-weight-300">Albert Extra</h4>
                        <p class="mb-0">Accédez à la gestion de vos produits et boutiques de manière illimitée.</p>
                    </div>
                    <div class="col-auto">
                        <a href="<?= site_url('actions/extraDisclaimer'); ?>" title="Albert Extra" target="_blank" class="btn btn-lg btn-gradient gradient-7 btn-icon btn-icon-end">Ouvrir Albert Extra <i class="uil uil-arrow-up-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <?php
        /*
        ?>
            <div class="row d-flex align-items-start gy-10">
                <div class="col-lg-5 position-lg-sticky" style="top: 8rem;">
                    <h3 class="display-3 mb-5"><span class="blink text-info">NOUVEAU !</span> Dynamisez votre compte en banque avec Albert Extra !</h3>
                    <p class="mb-7">Albert vous équipe pour mettre en avant des prestations exclusives comme un départ tardif, une bouteille de champagne, ou encore un kit charnel aussi séduisant que ce nouvelle outil, et ce, dès la confirmation de chaque réservation.</p>
                    <a href="<?= site_url('decouvrez-albert-extra'); ?>" class="btn btn-lg btn-gradient gradient-7 btn-icon btn-icon-end">Tester pendant 60 jours gratuitement ! <i class="uil uil-arrow-up-right"></i><span class="bg-danger p-2 py-1 ms-2 rounded text-white blink" style="background: #ed281a !important;">NEW !</span> </a>
                </div>

                <div class="col-lg-6 ms-auto">
                    <div class="card bg-soft-fuchsia mb-6">
                        <div class="card-body d-flex flex-row">
                            <div>
                                <img src="./assets/img/icons/lineal/shop.svg" class="svg-inject icon-svg icon-svg-md text-yellow me-5" alt="" />
                            </div>
                            <div>
                                <h3 class="fs-21">Boutiques et produits illimitées</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-soft-leaf mb-6">
                        <div class="card-body d-flex flex-row">
                            <div>
                                <img src="./assets/img/icons/lineal/money.svg" class="svg-inject icon-svg icon-svg-md text-leaf me-5" alt="" />
                            </div>
                            <div>
                                <h3 class="fs-21">Pas de commissions sur vos ventes</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-soft-aqua mb-6">
                        <div class="card-body d-flex flex-row">
                            <div>
                                <img src="./assets/img/icons/lineal/bell.svg" class="svg-inject icon-svg icon-svg-md text-aqua me-5" alt="" />
                            </div>
                            <div>
                                <h3 class="fs-21">Notifications mail</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php
        */
        ?>
    </div>
</section>


<section>
    <?php
    if (!empty($annonces_to_review)) {
    ?>
        <div class="container">
            <div class="alert alert-danger">
                ⚠️ Des annonces sont en attente de vérification. <a href="<?= site_url('dashboard/toReview'); ?>" style="text-decoration: underline;">Consulter les annonces</a>
            </div>
        </div>
    <?php
    }

    if (!empty($post_its_list)) {
    ?>

        <div class="container">
            <div class="row">
                <h5>Post-its non traités <span class="badge bg-danger"><?= count($post_its_list); ?></span></h5>

                <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true" data-items-md="3" data-items-xs="1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($post_its_list as $postit) {
                            ?>
                                <div class="swiper-slide">
                                    <div class="item-inner">
                                        <article>
                                            <div class="card bg-soft-<?= $postit['color']; ?> card-border-bottom border-soft-<?= $postit['color']; ?>">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">

                                                            <p class="mb-0"><strong>Voyageur</strong> : <?= $postit['traveller_name']; ?></p>
                                                            <p class="mb-0"><strong>Logement</strong> : <?= $postit['annonce']; ?></p>
                                                            <p class="mb-0"><strong>Date</strong> : <?= $postit['post_it_date']; ?></p>
                                                            <p class="mb-0"><strong>Plateforme</strong> : <?= $postit['platform']; ?></p>
                                                            <p class="mb-0"><strong>Commentaire</strong> : <span id="postit-<?= $postit['id']; ?>"><?= $postit['comment']; ?></span></p>
                                                            <hr class="my-1">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <p class="mb-1"><strong>Auteur :</strong> <?= $postit['creator_name']; ?></p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <p class="small"><button class="btn btn-primary btn-sm p-2 py-1" onclick="copyToClipboard('#postit-<?= $postit['id']; ?>')"><i class="fa fa-copy"></i> Copier</button></p>
                                                                </div>
                                                            </div>

                                                            <form action="<?= site_url('Account/markPostitAsDone'); ?>" method="POST">
                                                                <input type="hidden" name="post-it-id" value="<?= $postit['id']; ?>">
                                                                <button class="btn btn-primary btn-sm w-100">Marquer comme traité</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php
    }

    if ($user['sub_state'] == 'expired' || $user['sub_state'] == 'grace') {
        if (empty($user['revolut_customer_id']) || empty($user['revolut_payment_method_id'])) {
        ?>

            <section class="wrapper bg-light">
                <div class="container py-5">
                    <div class="row gy-6">
                        <div class="col-md-12">
                            <div class="alert alert-danger blink_me py-5">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <i class="fa fa-credit-card me-2"></i>Veuillez mettre à jour vos moyens de paiements.
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= site_url('abonnement'); ?>" class="btn btn-dark">Mon abonnement</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        /*
                    <div class="col-lg-5">
                        <?php
                        if ($user['sub_state'] == 'expired' || empty($user['stripe_id'])) {
                        ?>
                            <div class="alert alert-info mt-10">Vous n'êtes pas abonné.<br>Vous utilisez la version gratuite d'Albert.</div>
                            <h2 class="display-4 mt-5 mb-3">Découvrez nos offres</h2>
                            <p class="lead fs-lg">Confiez-nous la gestion complète de vos logements, offrez-vous du temps.</p>
                            <p>7 jours gratuits, sans engagement, sans frais cachés !</p>
                            <a href="<?= site_url('nos-offres'); ?>" title="Nos offres" class="btn btn-primary rounded-pill mt-2">Nos offres</a>
                            <a href="<?= APPUP::getCalendlyLink(); ?>" target="_blank" title="Des questions sur mesure ?" class="btn btn-gradient gradient-7 rounded-pill mt-2">Des questions sur mesure ?</a>
                        <?php
                        } else {

                        ?>
                            <div class="alert alert-warning mt-10">Vous êtes en période de grâce.<br>Pensez à mettre à jour vos moyens de paiements</div>
                            <p class="lead fs-lg">Mettre à jour vos moyens de paiements pour continuer de profiter de nos services et de votre temps libre.</p>
                            <p>Nous continuons de gérer vos annonces durant quelques jours afin de vous laisser le temps de renseigner vos informations de facturation. Passé ce délai, votre compte repassera en version gratuite.</p>
                            <a href="<?= site_url('mon-abonnement'); ?>" title="Nos offres" class="btn btn-primary rounded-pill mt-2">Gérer mon abonnement<i class="fa fa-chevron-right ms-3"></i></a>
                        <?php

                        }
                        ?>

                    </div>
                    <!--/column -->
                    <div class="col-lg-7 pricing-wrapper">
                        <div class="row gy-6 position-relative mt-5">
                            <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="bottom: -0.5rem; right: -1.6rem;"></div>
                            <div class="shape rounded-circle bg-line red rellax w-18 h-18" data-rellax-speed="1" style="top: -1rem; left: -2rem;"></div>

                            <div class="col-md-6 popular offset-md-3">
                                <div class="pricing card">
                                    <div class="card-body pb-4 mx-0">
                                        <div class="prices text-dark">
                                            <div class="price price-show justify-content-start"><span class="price-value">23,95</span><span class="price-currency">€</span><span class="price-duration">mois/annonce</span></div>
                                        </div>
                                        <!--/.prices -->
                                        <h4 class="card-title mt-2">Albert Premium</h4>
                                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7">
                                            <li><i class="uil uil-check"></i><span>Annonces <strong>illimitées</strong></span></li>
                                            <li><i class="uil uil-check"></i><span>Réponse aux chats <strong>Airbnb/Booking</strong></span></li>
                                            <li><i class="uil uil-check"></i><span>Réponses <strong>WhatsApp/SMS/Mails</strong></span></li>
                                            <li><i class="uil uil-check"></i><span>Gestion des <strong>appels</strong></span></li>
                                            <li><i class="uil uil-check"></i><span>Appel de <strong>bienvenue</strong></span></li>
                                            <li><i class="uil uil-check"></i><span>...</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
*/
                        ?>
                    </div>
                </div>
            </section>
        <?php
        }
    }

    if (!empty($guide_logs)) {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="mb-0">Derniers flux dans vos logements</h5>
                    <table class="table table-striped">
                        <thead>
                            <th>
                                Voyageur
                            </th>
                            <th>
                                Annonce
                            </th>
                            <th>
                                Action
                            </th>
                            <th>
                                Date
                            </th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($guide_logs as $log) {
                                switch ($log['type']) {
                                    case 'check-in':
                                        $log_type = '<i class="fa fa-door-open"></i> Check-in';
                                        break;

                                    case 'check-out':
                                        $log_type = '<i class="fa fa-door-closed"></i> Check-out';
                                        break;

                                    case 'cleaning':
                                        $log_type = '<i class="fa fa-broom"></i> Ménage';
                                        break;
                                }
                            ?>
                                <tr>
                                    <td><?= $log['name']; ?></td>
                                    <td><a href="<?= site_url('annonce/' . $log['annonce_unique_id']); ?>" class="text-primary"><?= $log['title']; ?></a></td>
                                    <td><?= $log_type; ?></td>
                                    <td><?= APPUP::getFullDate($log['creation_date']); ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php
    }
    ?>


    <div class="container pt-7 pt-md-11 pb-8">
        <div class="row">
            <?php
            if ($user['access_level'] == 10) {
                if (!empty($user['active_subscription']) && $user['active_plan'] == 3) {
                    $link = 'mise-en-route-premium';
                } else {
                    $link = 'mise-en-route-gratuite';
                }
            ?>
                <div class="col-md-12 text-center">
                    <a href="<?= site_url('nouvelle-annonce'); ?>" class="btn btn-primary mb-4 me-5"><?= ALBERT_NOUVELLE_ANNONCE; ?></a>

                    <a href="<?= site_url($link); ?>" target="_blank" class="btn btn-gradient gradient-7 mb-4"><i class="fa fa-file me-2"></i>Mise en route<i class="fa fa-chevron-right ms-2"></i></a>

                </div>
            <?php
            } else {
            }
            ?>
            <div class="col-md-12">
                <div class="job-list mb-10">

                    <h2 class="mb-4" id="annonces_list">
                        <?= ALBERT_ANNONCES2; ?>
                    </h2>
                    <?php
                    if (empty($annonces_list)) {
                    ?>
                        <div class="alert alert-warning">
                            <?= ALBERT_VOUS_NAVEZ_AUCUNE_ANNONCE; ?>
                        </div>
                    <?php
                    } else {
                        $counter = 0;
                        foreach ($annonces_list as $annonce) {
                            if (empty($annonce['deleted'])) {
                                $counter++;
                            }
                        }
                        /*<p>Quota maximum : <?= $user['max_annonces']; ?></p>*/
                    ?>
                        <table class="table table-hover">
                            <?php
                            foreach ($annonces_list as $annonce) {
                                $type_icon = ($annonce['type'] == 'house') ? 'estate' : 'building';
                                $type_color = ($annonce['type'] == 'house') ? 'green' : 'blue';


                                $style = ($user['access_level'] >= 50 && !empty($annonce['deleted'])) ? 'opacity: 0.3; text-decoration: line-through' : '';
                            ?>

                                <tr>
                                    <td><span class="avatar bg-<?= $type_color; ?> text-white w-9 h-9 fs-20"><i class="uil uil-<?= $type_icon; ?>"></i></span></td>
                                    <td><a href="<?= site_url('annonce/' . $annonce['unique_id']); ?>" class="lift" style="<?= $style; ?>"><?= $annonce['title']; ?></a></td>
                                    <?php
                                    if ($user['access_level'] >= 50) {
                                    ?>
                                        <td class="text-center"><a href="<?= site_url('annonce/' . $annonce['unique_id']); ?>" class="lift" style="<?= $style; ?>"><?= $annonce['username']; ?></a><br>
                                            <?php
                                            switch ($annonce['active_plan']) {
                                                case '0':
                                                    $abo_type = 'Gratuit';
                                                    $border_color = 'light';
                                                    $bg_color = 'light';
                                                    $text_color = 'dark';
                                                    break;
                                                case '1':
                                                    $abo_type = 'Guide';
                                                    $border_color = 'primary';
                                                    $bg_color = 'primary';
                                                    $text_color = 'white';
                                                    break;
                                                case '2':
                                                    $abo_type = 'Chat';
                                                    $border_color = 'info';
                                                    $bg_color = 'blue';
                                                    $text_color = 'white';
                                                    break;
                                                case '3':
                                                    $abo_type = 'Premium';
                                                    $border_color = 'success';
                                                    $bg_color = 'green';
                                                    $text_color = 'white';
                                                    break;
                                            }

                                            ?>
                                            <div class="card bg-<?= $bg_color; ?> text-<?= $text_color; ?> mb-0 p-0">
                                                <div class="card-body p-0 small"><i class="fa fa-user me-2"></i> Abo <strong><?= $abo_type; ?></strong></div>
                                            </div>
                                        </td>
                                    <?php
                                    }
                                    ?>

                                    <td><i class="uil uil-map-marker-minus me-1"></i> <?= $annonce['zipcode']; ?> <?= $annonce['city']; ?></td>
                                    <?php
                                    if (!empty($annonce['channel_item_id'])) {
                                    ?>
                                        <td><i class="fa-solid fa-house-laptop text-success" title="Synchro Channel Manager effectuée"></i></td>
                                    <?php
                                    } else {
                                    ?>
                                        <td></td>
                                    <?php
                                    }

                                    if (!empty($annonce['platform_reference'])) {
                                    ?>
                                        <td><i class="fa-brands fa-airbnb text-success" title="ID Airbnb OK"></i></td>
                                    <?php
                                    } else {
                                    ?>
                                        <td></td>
                                    <?php
                                    }

                                    if ($user['access_level'] >= 50) {


                                    ?>
                                        <td><a href="<?= site_url('annonce/' . $annonce['unique_id']); ?>" class="btn btn-dark"><i class="fa fa-chevron-right"></i></a></td>
                                    <?php
                                    } else {
                                    ?>
                                        <!-- <td></td>
                                        <td></td> -->
                                        <td><a href="<?= site_url('annonce/' . $annonce['unique_id']); ?>" class="btn btn-dark"><i class="fa fa-chevron-right"></i></a></td>
                                    <?php
                                    }
                                    ?>
                                </tr>
                                <?php
                                /*

                                    <div class="card-body p-5">


                                        <span class="row justify-content-between align-items-center">
                                            <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                                <span class="avatar bg-<?= $type_color; ?> text-white w-9 h-9 fs-20 me-3"><i class="uil uil-<?= $type_icon; ?>"></i></span>
                                                <?= $annonce['title']; ?>
                                                <?php
                                                if (!empty($annonce['channel_item_id'])) {
                                                ?>
                                                    <i class="fa-brands fa-line"></i>
                                                <?php
                                                }

                                                if (!empty($annonce['chatbase_bot_id'])) {
                                                ?>
                                                    <i class="fa-solid fa-chalkboard"></i>
                                                <?php
                                                }
                                                ?>
                                            </span>
                                            <span class="col-5 col-md-3 text-body d-flex align-items-center">
                                                <i class="uil uil-user me-1"></i>
                                                <?= $annonce['username']; ?>
                                            </span>
                                            <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                                                <i class="uil uil-map-marker-minus me-1"></i>
                                                <?= $annonce['zipcode']; ?>
                                                <?= $annonce['city']; ?>
                                            </span>
                                            <span class="d-none d-lg-block col-1 text-center text-body">
                                                <i class="uil uil-angle-right-b"></i>
                                            </span>
                                        </span>
                                    </div>
*/
                                ?>
                                </a>
                            <?php
                            }
                            ?>
                        </table>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>