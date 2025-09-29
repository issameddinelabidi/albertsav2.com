<style>
    .blink_me {
        animation: blinker 1s linear infinite;
    }

    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }
</style>
<section class="wrapper bg-light">
    <div class="container pt-11 pt-md-13 pb-11 pb-md-19 pb-lg-22 text-center">
        <div class="row">
            <div class="col-md-9 mx-auto" data-cues="slideInDown" data-group="page-title" data-disabled="true">
                <h1 class="display-2 fs-48 mb-4 px-md-5 px-lg-0" data-cue="slideInDown" data-group="page-title" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;"><?= ALBERT_NOUS_TRANSFORMONS_LA_GESTION_DE_VOS_LOCATIONS_DE_C; ?></h1>
                <p class="lead fs-24 lh-sm mb-7 mx-md-13 mx-lg-10" data-cue="slideInDown" data-group="page-title" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;"><?= ALBERT_DECOUVREZ_NOTRE_OFFRE_SANS_ENGAGEMENT_ET_SANS_FRAI; ?></p>
                <div data-cue="slideInDown" data-group="page-title" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">

                    <?php
                    /*
                    <p><a href="<?= site_url('nos-offres#offres'); ?>" class="btn btn-primary rounded-pill me-1 mb-2 mb-md-0"><span>Utiliser vos 7 jours gratuits <i class="fa fa-chevron-right ms-2"></i></span></a></p>
*/
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container pb-5">
        <div class="row gx-0 mb-16 mb-mb-20">
            <div class="col-9 col-sm-10 col-lg-9 mx-auto mt-n5 mt-md-n20 " data-cues="" data-group="images" data-delay="1500" data-disabled="true">
                <a href="<?= site_url('assets/videos/offre_v2.mp4'); ?>" class="btn btn-circle btn-primary btn-play btn-lg ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox=""><i class="icn-caret-right"></i></a>
                <img class="img-fluid mx-auto rounded shadow-lg" data-cue="slideInUp" src="./assets/img/photos/sa1.jpg" alt="" data-group="images" data-delay="1500" data-show="true" style="animation-name: slideInUp; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1500ms; animation-direction: normal; animation-fill-mode: both;">
                <img class="position-absolute rounded shadow-lg" data-cue="slideInRight" src="./assets/img/photos/sa2.jpg" style="top: 20%; right: -10%; max-width: 30%; height: auto; animation-name: slideInRight; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1800ms; animation-direction: normal; animation-fill-mode: both;" alt="" data-group="images" data-delay="1500" data-show="true">
                <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft" src="./assets/img/photos/sa3.jpg" style="top: 10%; left: -10%; max-width: 30%; height: auto; animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 2100ms; animation-direction: normal; animation-fill-mode: both;" alt="" data-group="images" data-delay="1500" data-show="true">
                <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft" src="./assets/img/photos/sa4.jpg" style="bottom: 10%; left: -13%; max-width: 30%; height: auto; animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 2400ms; animation-direction: normal; animation-fill-mode: both;" alt="" data-group="images" data-delay="1500" data-show="true">
                <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft" src="./assets/img/photos/sa5.jpg" style="top: 90%; left: 20%; max-width: 30%; height: auto; animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 2100ms; animation-direction: normal; animation-fill-mode: both;" alt="" data-group="images" data-delay="1500" data-show="true">

            </div>
        </div>
    </div>
</section>
<?php
/*

<section class="wrapper bg-light">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="row g-6 text-center">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-6">
                                    <div class="card-body">
                                        <div class="icon btn btn-circle btn-lg btn-soft-yellow pe-none mb-3"> <i class="fa fa-clock"></i> </div>
                                        <h4><?= ALBERT_VOTRE_TEMPS_EST_PRECIEUX_2; ?></h4>
                                        <hr class="my-4">
                                        <p><?= ALBERT_CONSACRER_DU_TEMPS_A_AMELIORER_VOTRE_ENTREPRISE_A; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-md-6 mt-lg-6">
                                    <div class="card-body">
                                        <div class="icon btn btn-circle btn-lg btn-soft-yellow pe-none mb-3"> <i class="fa fa-plane"></i> </div>
                                        <h4><?= ALBERT_VOUS_AVEZ_LE_DROIT_DE_SOUFFLER_2; ?></h4>
                                        <hr class="my-4">

                                        <p class="mb-2"><?= ALBERT_ALBERT_VOUS_PROTEGE_DU_SURMENAGE_ET_VOUS_OFFRE_LA; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-6 text-center">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-6">
                                    <div class="card-body">
                                        <div class="icon btn btn-circle btn-lg btn-soft-yellow pe-none mb-3"> <i class="fa fa-thumbs-up"></i> </div>
                                        <h4><?= ALBERT_VOS_VOYAGEURS_MERITENT_LE_MEILLEUR; ?></h4>
                                        <hr class="my-4">
                                        <p><?= ALBERT_ASSUREZ_UNE_EXPERIENCE_EXCEPTIONNELLE_A_VOS_VOYAGE; ?></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-md-6 mt-lg-6">
                                    <div class="card-body">
                                        <div class="icon btn btn-circle btn-lg btn-soft-yellow pe-none mb-3"> <i class="fa fa-star"></i> </div>
                                        <h4><?= ALBERT_DES_AVIS_ELOGIEUX; ?></h4>
                                        <hr class="my-4">

                                        <p class="mb-2"><?= ALBERT_EN_TANT_QUE_PARTENAIRE_PRIVILEGIE_NOUS_AVONS_UNE_V; ?></p>
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


<section class="wrapper bg-danger gradient-7 mb-0">
    <div class="container py-10">
        <div class="row gx-lg-8 gy-5 gy-lg-0 mb-2 align-items-end">
            <div class="col-lg-4 wow fadeInLeft text-center text-md-left">
                <h2 class="fs-16 text-uppercase text-line text-white mb-3"><?= ALBERT_QUELQUES_CHIFFRES_CLES; ?></h2>
                <h3 class="display-4 mb-0 text-white"><?= ALBERT_REJOIGNEZ_VOUS_AUSSI_ALBERT; ?></h3>
            </div>

            <div class="col-lg-8">
                <div class="row counter-wrapper gy-2 text-center text-white">
                    <div class="col-12 col-md-auto wow fadeInRight" data-wow-delay="0.2s">
                        <h3 class="counter counter-lg text-white mb-0"><?= $config['home_nb_travels']; ?></h3>
                        <p><?= ALBERT_DE_PATRIMOINE_EN_GESTION; ?></p>
                    </div>
                    <div class="col wow fadeInRight" data-wow-delay="0.4s">
                        <h3 class="counter counter-lg text-white mb-0"><?= $config['home_nb_annonces']; ?></h3>
                        <p><?= ALBERT_ANNONCES; ?></p>
                    </div>
                    <div class="col wow fadeInRight" data-wow-delay="0.6s">
                        <h3 class="counter counter-lg text-white mb-0"><?= $config['home_nb_clients_ok']; ?>%</h3>
                        <p><?= ALBERT_CLIENTS_SATISFAITS; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

*/
?>

<section class="wrapper bg-light">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="container py-14 pt-6">
                    <div class="row gx-0 gx-md-8 gx-xl-12 gy-8 align-items-center wow bounceInUp" data-wow-delay="0.3s">
                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/booking.png'); ?>" alt="" style="max-height: 50px;"></figure>
                        </div>
                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/superhote.svg'); ?>" alt="" style="max-height: 50px; border-radius: 4px;"></figure>
                        </div>
                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/airbnb.png'); ?>" alt="" style="max-height: 50px;"></figure>
                        </div>

                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/smoobu.png'); ?>" alt="" style="max-height: 50px;"></figure>
                        </div>

                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/beds24.svg'); ?>" alt="" style="max-height: 40px;"></figure>
                        </div>
                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/igloohome.png'); ?>" alt="" style="max-height: 50px;"></figure>
                        </div>
                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/abritel.svg'); ?>" alt="" style="max-height: 50px;"></figure>
                        </div>
                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/expedia.png'); ?>" alt="" style="max-height: 50px;"></figure>
                        </div>
                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/nuki.svg'); ?>" alt="" style="max-height: 50px;"></figure>
                        </div>
                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/tripadvisor.svg'); ?>" alt="" style="max-height: 50px;"></figure>
                        </div>

                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/agoda.svg'); ?>" alt="" style="max-height: 50px;"></figure>
                        </div>

                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/lodgify.webp'); ?>" alt="" style="max-height: 50px;"></figure>
                        </div>
                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/hostaway.svg'); ?>" alt="" style="max-height: 50px;"></figure>
                        </div>

                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/avantio.svg'); ?>" alt="" style="max-height: 50px;"></figure>
                        </div>

                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/smily.png'); ?>" alt="" style="max-height: 50px;"></figure>
                        </div>

                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/leboncoin.png'); ?>" alt="" style="max-height: 50px;"></figure>
                        </div>


                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/duve.png'); ?>" alt="" style="max-height: 50px;"></figure>
                        </div>

                        <div class="col-4 col-md-2">
                            <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="<?= site_url('assets/img/brands/eviivo.svg'); ?>" alt="" style="max-height: 40px;"></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
/*
<section class="wrapper bg-light">
    <div class="container py-5" id="pricing">
        <h2 class="display-5 mb-3 text-center"><?= ALBERT_NOS_OFFRES_2; ?></h2>
        <p class="text-lead text-center"><?= ALBERT_SANS_ENGAGEMENT_SANS_FRAIS_DE_MISE_EN_PLACE; ?></p>
        <div class="pricing-wrapper">
            <div class="row gx-4 gy-6 mt-2 justify-content-center  flex-row-reverse">
                <?php
                //Mensuel
                $counter = 2;
                foreach ($products_list as $product) {
                    if (empty($user) && ($product->id == 'prod_ORFe4xUNpMWhcq' || $product->id == 'prod_ORFcQzCPPmLRDr')) {
                        continue;
                    }
                    $popular = '';
                    $pop_mt = '';
                    if ($product->id == 'prod_OBBEVVUrC1ZnEy' || $product->id == 'prod_R4QrHAJKgMOUJ7') {
                        $popular = ' bg-soft-yellow mt-0';
                        $pop_mt = ' pt-4';
                    }
                ?>
                    <div class="col-md-3 order-<?= $counter; ?>">
                        <div class="pricing card shadow-none<?= $popular; ?>">

                            <div class="card-body mx-0<?= $pop_mt; ?>">
                                <p class="text-center w-100 mb-0">
                                    <?php if (!empty($popular)) {
                                    ?>
                                        <span class="badge bg-blue rounded-pill mb-3"><?= ALBERT_TOP_VENTE; ?></span><br>
                                        <!-- <span class="badge bg-yellow rounded-pill mb-3">PROMO ETE 2024</span><br> -->

                                    <?php
                                    }
                                    ?>
                                </p>

                                <p class="text-center w-100">
                                    <img src="<?= $product->images[0]; ?>" class="rounded shadow-lg mb-4 mt-3" style="max-width: 170px;" alt="">
                                </p>
                                <h4 class="card-title text-center"><?= $product->name; ?></h4>
                                <?php
                                foreach ($prices_list as $price) {
                                    if ($price->product == $product->id) {

                                        $tiers_mode = ($price->tiers_mode == 'volume') ? ALBERT_ANNONCE_2 : '';
                                ?>

                                        <?php
                                        if (!empty($popular)) {
                                        ?>

                                            <!-- <div class="prices text-dark">
                                                <div class="price price-show justify-content-center"><span class="price-value text-danger" style="text-decoration: line-through;font-size: 1.4rem;"><?= number_format($plan_price[$price->id] / 100, 2, ',', ' '); ?></span><span class="price-currency">€</span></div>
                                            </div> -->
                                            <div class="prices text-dark text-center mb-3" style="margin-bottom: 40px !important;">
                                                <span class="price-value text-success fw-bold"><?= number_format($plan_price[$price->id] / 100, 2, ',', ' '); ?></span><span class="price-currency"><?= APPUP::getCurrency(); ?></span><span class="price-duration"><?= ALBERT_MOIS; ?><?= $tiers_mode; ?></span>
                                            </div>

                                            <!-- <div class="alert alert-info w-100 text-center fw-bold mt-5">
                                                Avec le code promo<br>
                                                <strong class="blink_me h1">ETE2024</strong>
                                            </div> -->

                                        <?php
                                        } else {
                                        ?>
                                            <div class="prices text-dark text-center mb-3" style="margin-bottom: 40px !important;">
                                                <span class="price-value text-dark fw-bold"><?= number_format($plan_price[$price->id] / 100, 2, ',', ' '); ?></span><span class="price-currency"><?= APPUP::getCurrency(); ?></span><span class="price-duration"><?= ALBERT_MOIS; ?><?= $tiers_mode; ?></span>
                                            </div>
                                        <?php
                                        }
                                        if ($product->id == 'prod_ORFe4xUNpMWhcq') {
                                        ?>
                                            <div class="alert alert-info w-100 text-center fw-bold mt-4">
                                                <?= ALBERT_JUSQUA_100_ANNONCES; ?>
                                            </div>
                                        <?php
                                        } else {
                                        ?>

                                        <?php
                                        }
                                        ?>
                                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8">
                                            <!-- <li><i class="uil uil-check"></i><span><strong>100MB</strong> Storage </span></li>
                                        <li><i class="uil uil-times bullet-soft-red"></i><span> Weekly <strong>Reports</strong> </span></li> -->
                                            <?= $plans_contents[$price->id]; ?>
                                        </ul>

                                        <?php
                                        if (empty($user['active_subscription'])) {


                                            if (empty($user['active_subscription'])) {
                                        ?>
                                                <form action="<?= site_url('checkout'); ?>" method="POST" class="text-center">
                                                    <?php
                                                    if (!empty($tiers_mode)) {
                                                    ?>
                                                        <legend class="h6 fs-16 mb-2 mt-5">
                                                            <?= ALBERT_SELECTION_DU_NOMBRE_DANNONCES; ?>
                                                        </legend>

                                                        <div class="input-group  mb-3">
                                                            <span class="input-group-btn">
                                                                <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="quantity_<?= $product->id; ?>">
                                                                    <span class="fa fa-minus text-dark"></span>
                                                                </button>
                                                            </span>
                                                            <input type="text" id="quantity_<?= $product->id; ?>" name="nb_annonces" class="form-control input-number mx-1 items_quantity" value="10" min="3" max="250">
                                                            <span class="input-group-btn">
                                                                <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="quantity_<?= $product->id; ?>">
                                                                    <span class="fa fa-plus text-dark"></span>
                                                                </button>
                                                            </span>
                                                        </div>

                                                    <?php
                                                    }
                                                    ?>
                                                    <div class="text-center">
                                                        <button class="btn btn-gradient gradient-7 rounded-pill" id="checkout-and-portal-button" type="submit" name="subscribe" value="<?= $price->id; ?>"><i class="uil uil-shopping-bag"></i>
                                                            <?= ALBERT_SABONNER; ?>
                                                        </button>
                                                    </div>
                                                </form>
                                            <?php
                                            }
                                            // }
                                            ?>
                                            </form>
                                        <?php
                                        }
                                        ?>
                                <?php
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>

                <?php
                    $counter++;
                }

                if (empty($user)) {
                ?>
                    <div class="col-md-3 order-1">
                        <div class="pricing card shadow-none">
                            <div class="card-body mx-0">
                                <p class="text-center w-100"><img src="<?= site_url('assets/img/albert_free.png?time=' . time()); ?>" class="rounded shadow-lg mb-4" style="max-width: 150px;" alt=""></p>
                                <h4 class="card-title text-center"><?= ALBERT_GRATUIT; ?></h4>

                                <div class="prices text-dark">
                                    <div class="price price-show justify-content-center"><span class="price-value">0,00</span><span class="price-currency"><?= APPUP::getCurrency(); ?></span><span class="price-duration"><?= ALBERT_MOIS; ?></span></div>
                                </div>

                                <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8">
                                    <?= ALBERT_INTERFACE_ALBERT_GUIDE_DENTREE_NUMERIQUE_IA_GUIDE; ?>
                                </ul>

                                <?php
                                if (empty($user)) {
                                ?>
                                    <div class="text-center">
                                        <a href="<?= site_url('inscription'); ?>" class="btn btn-gradient gradient-7 rounded-pill" id="checkout-and-portal-button" type="submit" name="subscribe" value="free"><i class="fa fa-user-plus me-2"></i>
                                            <?= ALBERT_SINSCRIRE; ?>
                                        </a>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>

            </div>

            <p class="text-lead text-center mt-5"><?= ALBERT_SANS_ENGAGEMENT_SANS_FRAIS_DE_MISE_EN_PLACE_2; ?></p>
        </div>
    </div>
</section>
*/
?>


<section class="wrapper bg-light">
    <div class="container py-5" id="pricing">
        <h2 class="display-5 mb-3 text-center"><?= ALBERT_NOS_OFFRES_2; ?></h2>
        <p class="text-lead text-center"><?= ALBERT_SANS_ENGAGEMENT_SANS_FRAIS_DE_MISE_EN_PLACE; ?></p>
        <div class="pricing-wrapper">
            <div class="row gx-4 gy-6 mt-2 justify-content-center">
                <?php
                $plan_price = 1999;
                if (empty($user)) {
                ?>
                    <div class="col-md-4">
                        <div class="pricing card bg-blue shadow-none">
                            <div class="card-body mx-0 text-white">
                                <p class="text-center w-100"><img src="<?= site_url('assets/img/offer.png?time=' . time()); ?>" class="rounded mb-4" style="max-width: 150px;" alt=""></p>
                                <h4 class="card-title text-center text-yellow">Albert Premium</h4>

                                <div class="prices text-dark">
                                    <div class="price price-show justify-content-center text-white"><span class="price-value"><?= number_format($plan_price / 100, 2, ',', ' '); ?></span><span class="price-currency"><?= APPUP::getCurrency(); ?></span><span class="price-duration text-white"><?= ALBERT_MOIS; ?>/annonce</span></div>
                                </div>
                                <p class="text-center mt-2">Tarifs dégressifs selon volume <a tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" title=" " data-bs-content="18,99€ dès 20 logements
                                17,95 dès 55 logements"><i class="fa fa-circle-question text-white"></i></a></p>

                                <div class="alert alert-info text-dark w-100 text-center fw-bold mt-5">
                                    14 jours d'essai offerts
                                </div>

                                <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8">
                                    <li><i class="uil uil-check bullet-blue"></i><span>Interface Albert</span></li>
                                    <li><i class="uil uil-check bullet-blue"></i><span>Guide d'entrée numérique IA</span></li>
                                    <li><i class="uil uil-check bullet-blue"></i><span>Guide Albert Team</span></li>
                                    <li><i class="uil uil-check bullet-blue"></i><span>Livre blanc</span></li>
                                    <li><i class="uil uil-check bullet-blue"></i><span>Réponse aux chats Airbnb/Booking</span></li>
                                    <li><i class="uil uil-check bullet-blue"></i><span>Réponses WhatsApp/SMS/Mails</span></li>
                                    <li><i class="uil uil-check bullet-blue"></i><span>Gestion des appels</span></li>
                                    <li><i class="uil uil-check bullet-blue"></i><span>Gestion des problèmes</span></li>
                                    <li><i class="uil uil-check bullet-blue"></i><span>Gestion des avis</span></li>
                                    <li><i class="uil uil-check bullet-blue"></i><span>Albert+ Conseil</span></li>
                                    <li><i class="uil uil-check bullet-blue"></i><span>Appel de bienvenue</span></li>
                                    <li><i class="uil uil-check bullet-blue"></i><span>VIP Support</span></li>
                                </ul>

                                <?php
                                if (empty($user)) {
                                ?>
                                    <legend class="h6 fs-16 mb-2 mt-5 text-center text-white">
                                        <?= ALBERT_SELECTION_DU_NOMBRE_DANNONCES; ?>
                                    </legend>

                                    <form action="<?= site_url('inscription'); ?>" method="GET">
                                        <div class="input-group  mb-3">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-left-minus btn btn-light btn-number py-3" data-type="minus" data-field="quantity_to_set">
                                                    <span class="fa fa-minus text-dark"></span>
                                                </button>
                                            </span>
                                            <input type="text" id="quantity_to_set" name="max_annonces" class="form-control input-number mx-1 items_quantity rounded text-center fw-bold" value="10" min="3" max="250">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-right-plus btn btn-light btn-number py-3" data-type="plus" data-field="quantity_to_set">
                                                    <span class="fa fa-plus text-dark"></span>
                                                </button>
                                            </span>
                                        </div>

                                        <div class="text-center">
                                            <button class="btn btn-gradient gradient-7 rounded-pill" id="checkout-and-portal-button" type="submit"><i class="fa fa-user-plus me-2"></i> Tester gratuitement
                                            </button>
                                        </div>
                                    </form>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pricing card shadow-none">
                            <div class="card-body mx-0">
                                <p class="text-center w-100"><img src="<?= site_url('assets/img/albert_free.png?time=' . time()); ?>" class="rounded shadow-lg mb-4" style="max-width: 150px;" alt=""></p>
                                <h4 class="card-title text-center">Gratuit</h4>

                                <div class="prices text-dark">
                                    <div class="price price-show justify-content-center"><span class="price-value">0,00</span><span class="price-currency"><?= APPUP::getCurrency(); ?></span><span class="price-duration"><?= ALBERT_MOIS; ?></span></div>
                                </div>

                                <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8">
                                    <?= ALBERT_INTERFACE_ALBERT_GUIDE_DENTREE_NUMERIQUE_IA_GUIDE; ?>
                                </ul>

                                <?php
                                if (empty($user)) {
                                ?>

                                    <div class="text-center">
                                        <a href="<?= site_url('inscription'); ?>" class="btn btn-gradient gradient-7 rounded-pill" id="checkout-and-portal-button" type="submit" name="subscribe" value="free"><i class="fa fa-user-plus me-2"></i>
                                            <?= ALBERT_SINSCRIRE; ?>
                                        </a>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <p class="text-lead text-center mt-5"><?= ALBERT_SANS_ENGAGEMENT_SANS_FRAIS_DE_MISE_EN_PLACE_2; ?></p>
        </div>
    </div>
</section>
<section class="wrapper bg-light">
    <div class="container pt-5 pb-10">

        <div class="row">

            <div class="col-12 mt-3">
                <h2 class="fs-15 text-uppercase text-muted mb-3 text-center"><?= ALBERT_QUE_CONTIENT_NOTRE_OFFRE; ?></h2>
                <h3 class="display-4 mb-10 px-lg-12 px-xl-15 text-center"><?= ALBERT_PLUS_QUUN_SIMPLE_SERVICE_CLIENT_UNE_EXPERTISE_ET_D; ?></h3>
                <div class="row" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <div class="col-lg-6 mb-0">
                        <div id="accordion-1" class="accordion-wrapper">
                            <div class="card accordion-item">
                                <div class="card-header" id="accordion-heading-1-1">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1"><?= ALBERT_GUIDE_ALBERT; ?> <span class="badge bg-pale-ash text-dark rounded-pill" style="text-decoration: line-through"><?= ALBERT_49_MOIS; ?></span> <span class="badge bg-green text-white rounded-pill"><?= ALBERT_OFFERT_2; ?></span></button>
                                </div>
                                <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1" style="">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-3">
                                                <img src="<?= site_url('assets/img/icons_offre/1.png?time=' . time()); ?>" alt="">
                                            </div>
                                            <div class="col-9">
                                                <?= ALBERT_UN_GUIDE_DACCUEIL_NUMERIQUE_PERSONNALISE_QUI_REFLE; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item">
                                <div class="card-header" id="accordion-heading-1-2">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2"><?= ALBERT_LIVRE_BLANC; ?> <span class="badge bg-pale-ash text-dark rounded-pill" style="text-decoration: line-through"><?= ALBERT_55_MOIS; ?></span> <span class="badge bg-green text-white rounded-pill"><?= ALBERT_OFFERT_2; ?></span></button>
                                </div>

                                <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-3">
                                                <img src="<?= site_url('assets/img/icons_offre/2.png'); ?>" alt="">
                                            </div>
                                            <div class="col-9">
                                                <?= ALBERT_SUIVEZ_LA_VETUSTE_OPERATIONNELLE_DE_VOTRE_BIEN_GAR; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item">
                                <div class="card-header" id="accordion-heading-1-1zz">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1zz" aria-expanded="false" aria-controls="accordion-collapse-1-1zz"><?= ALBERT_GUIDE_ALBERT_TEAM; ?> <span class="badge bg-pale-ash text-dark rounded-pill" style="text-decoration: line-through"><?= ALBERT_49_MOIS_2; ?></span> <span class="badge bg-green text-white rounded-pill"><?= ALBERT_OFFERT_2; ?></span></button>
                                </div>
                                <div id="accordion-collapse-1-1zz" class="collapse" aria-labelledby="accordion-heading-1-1zz" data-bs-target="#accordion-1zz" style="">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-3">
                                                <img src="<?= site_url('assets/img/icons_offre/3.png'); ?>" alt="">
                                            </div>
                                            <div class="col-9">
                                                <?= ALBERT_DONNEZ_A_VOTRE_PERSONNEL_DENTRETIEN_LE_POUVOIR_DE; ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div id="accordion-2" class="accordion-wrapper">
                            <div class="card accordion-item">
                                <div class="card-header" id="accordion-heading-2-1">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-1" aria-expanded="false" aria-controls="accordion-collapse-2-1"><?= ALBERT_ALBERT_CALL; ?> <span class="badge bg-pale-ash text-dark rounded-pill" style="text-decoration: line-through"><?= ALBERT_299_MOIS; ?></span> <span class="badge bg-green text-white rounded-pill"><?= ALBERT_OFFERT_2; ?></span></button>
                                </div>
                                <div id="accordion-collapse-2-1" class="collapse" aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2" style="">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-3">
                                                <img src="<?= site_url('assets/img/icons_offre/4.png'); ?>" alt="">
                                            </div>
                                            <div class="col-9">
                                                <?= ALBERT_ALBERT_CALL_R_VOTRE_APPEL_PERSONNALISE_LE_JOUR_DE; ?>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item">
                                <div class="card-header" id="accordion-heading-ENEE3E">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-ENEE3E" aria-expanded="false" aria-controls="accordion-collapse-ENEE3E"><?= ALBERT_GESTION_DAVIS; ?> <span class="badge bg-pale-ash text-dark rounded-pill" style="text-decoration: line-through"><?= ALBERT_49_MOIS_3; ?></span> <span class="badge bg-green text-white rounded-pill"><?= ALBERT_OFFERT_2; ?></span></button>
                                </div>
                                <div id="accordion-collapse-ENEE3E" class="collapse" aria-labelledby="accordion-heading-ENEE3E" data-bs-target="#accordion-ENEE3E">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-3">
                                                <img src="<?= site_url('assets/img/icons_offre/6.png'); ?>" alt="">
                                            </div>
                                            <div class="col-9">
                                                <?= ALBERT_ALBERT_PREND_LES_COMMANDES_ET_FAIT_UN_PAS_AUDACIEU; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item">
                                <div class="card-header" id="accordion-heading-ENEN">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-ENEN" aria-expanded="false" aria-controls="accordion-collapse-ENEN">Albert Extra <span class="badge bg-pale-ash text-dark rounded-pill" style="text-decoration: line-through"><?= ALBERT_299_MOIS_2; ?></span> <span class="badge bg-green text-white rounded-pill"><?= ALBERT_OFFERT_2; ?></span></button>
                                </div>
                                <div id="accordion-collapse-ENEN" class="collapse" aria-labelledby="accordion-heading-ENEN" data-bs-target="#accordion-ENEN">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-3">
                                                <img src="<?= site_url('assets/img/icons_offre/5.png'); ?>" alt="">
                                            </div>
                                            <div class="col-9">
                                                <p><strong>Transformez votre annonce en une boutique e-commerce !</strong><br>
                                                    <strong class="text-warning">Aucune commission</strong> sur vos ventes !<br>
                                                    Albert vous équipe pour mettre en avant des prestations exclusives comme un départ tardif, une bouteille de champagne, ou encore un kit charnel aussi séduisant ce nouvel outil.
                                                </p>
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
    </div>
</section>

<section class="wrapper bg-dark">
    <div class="container py-14 py-md-16">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
                <h3 class="display-4 text-white mb-10"><?= ALBERT_QUELQUES_MINUTES_SUFFISENT_POUR_ETRE_OPERATIONNEL; ?></h3>
            </div>
        </div>

        <div class="row gx-md-8 gy-8 text-center text-white" data-cues="slideInDown" data-group="services" data-disabled="true">
            <div class="col-md-6 col-lg-4" data-cue="slideInDown" data-group="services" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-5"> <i class="fa fa-house"></i> </div>
                <?= ALBERT_AJOUTEZ_VOTRE_LOGEMENT_FOURNISSEZ_TOUTES_LES_INFOR; ?>
            </div>
            <div class="col-md-6 col-lg-4" data-cue="slideInDown" data-group="services" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-5"> <i class="fa fa-tasks"></i> </div>
                <?= ALBERT_FAITES_VALIDER_LE_LOGEMENT_NOS_AGENTS_PASSENT_EN_R; ?>
            </div>
            <div class="col-md-6 col-lg-4" data-cue="slideInDown" data-group="services" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-5"> <i class="fa fa-comment-dots"></i> </div>
                <?= ALBERT_NOUS_PRENONS_LA_MAIN_VOTRE_TEMPS_ET_VOTRE_CONCENTR; ?>
            </div>



        </div>
        <div class="col-12 text-center mb-0">
            <a href="<?= site_url('nos-offres#offres'); ?>" title="Nos offres" onclick="return gtag_report_conversion('<?= site_url('nos-offres#offres'); ?>');" class="btn btn-info mt-5"><?= ALBERT_COMMENCEZ_VOTRE_ESSAI_GRATUIT; ?></a>
        </div>
    </div>
    <!-- /.container -->
</section>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?= ALBERT_GARANTIE_SATISFAIT_OU_100_REMBOURSE_30_JOURS_SI_N; ?>
                    </div>
                </div>
            </div>

            <div class="row gx-lg-8 gx-xl-12 gy-6 align-items-center">
                <div class="col-lg-7 position-relative">
                    <div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1" style="top: 0px; left: -1.4rem; z-index: 0; transform: translate3d(0px, 24px, 0px);"></div>
                    <div class="row gx-md-5 gy-5">
                        <div class="col-md-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <figure class="rounded mt-md-10 position-relative"><img src="<?= site_url('assets/img/screen4.jpg'); ?>" alt=""></figure>
                        </div>

                        <div class="col-md-6">
                            <div class="row gx-md-5 gy-5">
                                <div class="col-md-12 order-md-2" data-cue="fadeIn" data-delay="900" data-show="true" style="animation-name: fadeIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                                    <figure class="rounded"><img src="<?= site_url('assets/img/screen5.jpg'); ?>" alt=""></figure>
                                </div>

                                <div class="col-md-10" data-cue="fadeIn" data-delay="300" data-show="true" style="animation-name: fadeIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">
                                    <div class="card bg-warning text-white text-center">
                                        <div class="card-body py-11 counter-wrapper">
                                            <h2 class="counter text-nowrap" style="visibility: visible;">97%</h2>
                                            <p class="mb-0 fw-bold"><?= ALBERT_DE_SATISFACTION_CLIENT; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 mt-5">
                    <div class="swiper-container dots-closer mb-6 swiper-container-0" data-margin="30" data-dots="true">
                        <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                            <div class="swiper-wrapper" id="swiper-wrapper-5ea63a6acaf85ef9" aria-live="off" style="cursor: grab; transform: translate3d(-527px, 0px, 0px); transition-duration: 0ms;">

                                <?php
                                $counter = 1;
                                foreach ($reviews as $review) {
                                ?>
                                    <div class="swiper-slide swiper-slide-prev" role="group" aria-label="<?= $counter; ?> / <?= count($reviews); ?>" style="width: 497px; margin-right: 30px;">
                                        <blockquote class="icon icon-top fs-lg text-center">
                                            <p>“<?= $review['review']; ?>”</p>
                                            <div class="blockquote-details justify-content-center text-center">
                                                <div class="info ps-0">
                                                    <h5 class="mb-1"><?= $review['name']; ?></h5>
                                                    <p class="mb-0"><?= $review['company']; ?></p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>

                                <?php
                                    $counter++;
                                }
                                ?>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <div class="swiper-controls">
                            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 py-5 py-md-14">
                    <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400" data-image-src="<?= site_url('assets/img/screen2.png'); ?>">
                        <div class="card-body p-6 p-md-11 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-center text-lg-start">
                            <div>
                                <h3 class="display-6 mb-6 mb-lg-0 pe-lg-10 pe-xl-5 pe-xxl-18 text-white"><?= ALBERT_NOTRE_SERVICE_PEUT_TRANSFORMER_RADICALEMENT_VOTRE_2; ?></h3>
                                <p class="text-white"><?= ALBERT_UNE_DEMONSTRATION_INTERACTIVE_EST_DISPONIBLE_GRATU; ?></p>
                            </div>
                            <a href="<?= site_url('demo-gratuite'); ?>" title="Notre offre" onclick="return gtag_report_conversion('<?= site_url('demo-gratuite'); ?>');" class="btn btn-warning rounded-pill mb-0 text-nowrap"><?= ALBERT_DECOUVRIR_LA_DEMO; ?> <i class="fa fa-chevron-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row g-3 mb-10 mt-5">
                        <div class="col-md-6 col-lg-4">
                            <div class="row">
                                <div class="col-auto">
                                    <img src="./assets/img/icons/lineal/telephone-3.svg" class="icon-svg icon-svg-sm text-primary me-4" alt="">
                                </div>
                                <div class="col">
                                    <h4 class="mb-1"><?= ALBERT_SUPPORT_365J_AN_24H_24; ?></h4>
                                    <p class="mb-0"><?= ALBERT_JOURS_FERIES_INCLUS_NOUS_APPORTONS_A_VOS_VOYAGEURS; ?></p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-4">
                            <div class="row">
                                <div class="col-auto">
                                    <img src="./assets/img/icons/lineal/shield.svg" class="icon-svg icon-svg-sm text-primary me-4" alt="">
                                </div>
                                <div class="col">
                                    <h4 class="mb-1"><?= ALBERT_PAIEMENTS_SECURISES; ?></h4>
                                    <p class="mb-0"><?= ALBERT_GEREZ_ET_STOPPEZ_VOTRE_ABONNEMENT_A_TOUT_MOMENT_SA; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="row">
                                <div class="col-auto">
                                    <img src="./assets/img/icons/lineal/earth.svg" class="icon-svg icon-svg-sm text-primary me-4" alt="">
                                </div>
                                <div class="col">
                                    <h4 class="mb-1"><?= ALBERT_AUCUNE_FRONTIERE; ?></h4>
                                    <p class="mb-0"><?= ALBERT_NOUS_REPONDONS_A_VOS_VOYAGEURS_DANS_TOUTES_LES_LAN; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>