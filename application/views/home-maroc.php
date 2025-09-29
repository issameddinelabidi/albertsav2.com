<section class="wrapper image-wrapper bg-image angled bg-overlay text-white" data-image-src="./assets/img/photos/bg1-maroc.jpg">
    <div class="container pt-7 pt-md-7 pb-6">
        <div class="row gx-0 gy-10 align-items-center">
            <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
                <h1 class="display-2 text-white mb-4 mt-14" style="color: #f2d938"><?= ALBERT_SERVICE_CLIENT_SPECIALISE; ?> <br /><span class="typer text-white text-nowrap" data-delay="50" data-words="<?= $config['banner']; ?>"></span><span class="cursor text-warning" data-owner="typer"></span></h1>
                <p class="lead fs-24 lh-sm text-white mb-5 pe-md-18 pe-lg-0 pe-xxl-15 mb-17"><?= ALBERT_RENDEZ_VOS_VOYAGEURS_HEUREUX; ?> <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><br>
                    <?php
                    /*
                
                    <a href="<?= site_url('nos-offres#offres'); ?>" title="Nos offres" onclick="return gtag_report_conversion('<?= site_url('nos-offres#offres'); ?>');" class="btn btn-warning mt-5">Commencez votre essai gratuit</a> <a href="<?= site_url('demo-gratuite'); ?>" title="Démo gratuite" onclick="return gtag_report_conversion('<?= site_url('demo-gratuite'); ?>');" class="btn btn-gradient gradient-7 mt-5">Découvrir en vidéo</a>
                </p>
*/
                    ?>

            </div>

            <div class="col-lg-5 offset-lg-1 mb-n15" data-cues="slideInDown">
                <div class="">
                    <!-- <a href="./assets/media/movie.mp4" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i class="icn-caret-right"></i></a> -->
                    <figure class="rounded"><img src="<?= site_url('assets/mockups/4.png'); ?>" alt=""></figure>
                </div>
            </div>
        </div>
    </div>

</section>




<section class="wrapper bg-light">
    <div class="container py-14 text-center pb-5">
        <div class="row">
            <div class="col-md-9 mx-auto mt-5" data-cues="slideInDown" data-group="page-title">
                <h1 class="display-1 fs-60 mb-4 px-md-15 px-lg-0"><?= ALBERT_RETROUVEZ_VOTRE_TRANQUILITE; ?></h1>
                <?php
                /*
                <?= ALBERT_LE_TOUT_EN_OFFRANT_A_VOS_VOYAGEURS_UNE_AVENTURE_EX; ?>
                <div>
                    <!-- <a class="btn btn-lg btn-warning rounded mb-5">Découvrir notre offre dès 29.99€/mois/annonce<i class="fa fa-chevron-right ms-3"></i></a> -->
                </div>
*/
                ?>
                <video controls style="border-radius: 20px;border: 3px solid #222;max-width: 100%;" class="shadow-lg mb-4">
                    <source src="<?= site_url('assets/videos/accueil_v2.mp4'); ?>" type="video/mp4" />
                </video>
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

<section class="wrapper bg-light">
    <div class="container py-14 pt-5 text-center">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="">
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


    <div class="container">
        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-17">
            <div class="col-md-8 col-lg-6 position-relative">
                <!-- <a href="https://player.hihaho.com/embed/90710d61-5015-478f-822c-4e6098ce3f1f" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox=""><i class="icn-caret-right"></i></a> -->
                <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; transform: translate3d(0px, 0px, 0px);"></div>
                <figure class="rounded"><img src="<?= site_url('assets/img/screen1.png'); ?>" alt=""></figure>
            </div>


            <div class="col-lg-5 offset-lg-1">
                <h2 class="fs-15 text-uppercase text-muted mb-3"><?= ALBERT_NOTRE_ATOUT; ?></h2>
                <h3 class="display-4 mb-6"><?= ALBERT_LIMPATIENCE_EST_UNIVERSELLE_MAIS_POUR_VOS_VOYAGEUR; ?></h3>
                <h3 class="display-6 mb-6"><?= ALBERT_3_MIN_DE_TEMPS_DE_REPONSE_MOYEN_AUX_QUESTIONS_DE_V; ?></h3>
                <div class="row gy-3 gx-xl-8">
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                            <li><span><i class="uil uil-check"></i></span><span><?= ALBERT_NOUS_REGLONS_LES_PROBLEMES_POUR_VOUS; ?></span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span><?= ALBERT_UNE_MEMOIRE_INFAILLIBLE_GRACE_A_NOTRE_IA; ?></span></li>
                        </ul>
                    </div>

                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                            <li><span><i class="uil uil-check"></i></span><span><?= ALBERT_DITES_ADIEU_A_LESCLAVAGE_DE_VOTRE_SMARTPHONE; ?></span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span><?= ALBERT_DES_PROFESSIONNELS_ENTRAINES_AUX_ARTS_ET_MANIERES; ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <p class="fw-bold"><i class="fa fa-star"></i> <?= ALBERT_VOS_VOYAGEURS_MERITENT_LE_MEILLEUR_DE_VOUS_MEME_2; ?></p>

                        <?= ALBERT_VOUS_SOUHAITEZ_APPORTER_LA_MEILLEURE_EXPERIENCE_A_2; ?>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <a href="#!" class="btn btn-primary w-100 py-1 mb-0"><span class="display-5 my-0 me-2"><?= APPUP::getFlag('MA'); ?></span> Numéro marocain</a>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-white mb-4" style="background-image: url('<?= site_url('assets/img/screen3.png'); ?>');background-size: cover;background-position: center center;">
    <div class="container pt-10 pt-md-10 pb-md-14 text-center">
        <div class="row py-20">
            <div class="col-md-4">
                <h1 class="display-5 mb-4 rounded"><?= ALBERT_LES_INDISPENSABLES_POUR_AUTOMATISER_VOTRE_LOCATION; ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container">
        <div class="row mt-14">
            <div class="col-xl-10 mx-auto">
                <div class="col-md-12">
                    <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400" data-image-src="<?= site_url('assets/img/screen2.png'); ?>">
                        <div class="card-body p-6 p-md-11 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-center text-lg-start">
                            <div>
                                <h3 class="display-6 mb-6 mb-lg-0 pe-lg-10 pe-xl-5 pe-xxl-18 text-white"><?= ALBERT_NOTRE_SERVICE_PEUT_TRANSFORMER_RADICALEMENT_VOTRE; ?></h3>
                                <p class="text-white"><?= ALBERT_CONFIEZ_NOUS_LA_GESTION_DE_VOTRE_SERVICE_CLIENT; ?></p>
                            </div>
                            <a href="<?= site_url('demo-gratuite'); ?>" title="Notre offre" onclick="return gtag_report_conversion('<?= site_url('demo-gratuite'); ?>');" class="btn btn-warning rounded-pill mb-0 text-nowrap"><?= ALBERT_DECOUVRIR_LA_DEMO; ?> <i class="fa fa-chevron-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="wrapper bg-gray mt-14">
    <div class="container py-14">
        <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0 justify-content-center align-items-center">
            <div class="col-md-4 mt-lg-2">
                <h3 class="display-4 mb-3 pe-xxl-5 text-center text-md-left"><?= ALBERT_DE_NOMBREUX_CLIENTS_NOUS_FONT_CONFIANCE; ?></h3>
                <p class="lead fs-lg mb-0 pe-xxl-5 text-center text-md-left"><?= ALBERT_NOUS_DEPLOYONS_LA_REPONSE_PARFAITE_POUR_SUBLIMER_V; ?><br><a href="<?= site_url('nos-offres#offres'); ?>" title="Nos offres" class="btn btn-primary mt-5"><?= ALBERT_NOTRE_OFFRE_UNIQUE; ?></a></p>


            </div>

            <div class="col-auto pt-5">
                <video controls style="border-radius: 40px;border: 5px solid #222;max-width: 300px;" class="shadow-lg">
                    <source src="<?= site_url('assets/videos/avis.mp4'); ?>" type="video/mp4" />
                </video>

            </div>
        </div>
    </div>
</section>

<!-- /section -->

<section class="wrapper bg-light">
    <div class="container py-5">
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
</section>




<?php
if (!empty($blog_list)) {
?>
    <section class="wrapper bg-light mt-1">
        <div class="overflow-hidden">
            <div class="container py-2">
                <div class="row">
                    <div class="col">
                        <h2 class="text-left mt-2 mb-10"><?= ALBERT_NOTRE_BLOG; ?></h2>
                    </div>
                    <div class="col-auto">
                        <a href="<?= site_url('blog'); ?>" title="Blog" class="btn btn-gradient gradient-7 rounded-pill"><?= ALBERT_TOUS_LES_ARTICLES; ?></a>
                    </div>
                </div>

                <div class="swiper-container nav-bottom nav-color mb-14" data-margin="30" data-dots="false" data-nav="true" data-items-lg="3" data-items-md="2" data-items-xs="1">
                    <div class="swiper overflow-visible pb-2">
                        <div class="swiper-wrapper">
                            <?php
                            $duration = 2;
                            foreach ($blog_list as $blog) {
                                $url = site_url('blog/' . $blog['id'] . '/' . $blog['slug']);
                            ?>
                                <div class="swiper-slide wow fadeInRight" data-wow-delay="0.<?= $duration; ?>s">
                                    <article>
                                        <div class="card shadow-lg">
                                            <figure class="card-img-top overlay overlay-1"><a href="<?= $url; ?>" title="<?= $blog['title']; ?>">
                                                    <div style="height: 270px;width: 100%;background-image: url('<?= $blog['cover_url']; ?>');background-position: center center;background-size: cover;"></div>
                                                </a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0"><?= ALBERT_LIRE; ?></h5>
                                                </figcaption>
                                            </figure>
                                            <div class="card-body p-6">
                                                <div class="post-header">
                                                    <h2 class="post-title h3 mt-1 mb-3">
                                                        <a href="<?= $url; ?>" title="<?= $blog['title']; ?>" class="link-dark"><?= $blog['title']; ?></a>
                                                    </h2>
                                                    <p><?= $blog['hook']; ?></p>
                                                </div>
                                                <div class="post-footer">
                                                    <ul class="post-meta d-flex mb-0">
                                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?= date('d', strtotime($blog['change_dt'])); ?> <?= APPUP::smallMonth(date('M', strtotime($blog['change_dt']))); ?></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            <?php
                                $duration += 2;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>

<section class="wrapper bg-light">
    <div class="container py-5 py-md-1 mb-10">
        <div class="card bg-light text-dark" id="contact">
            <div class="card-body py-12 pb-0">
                <div class="row gx-md-8 gx-xl-12 gy-10">
                    <div class="col-lg-6">
                        <h2 class="display- mb-3 pe-lg-10 text-dark"><?= ALBERT_BESOIN_DE_PRECISIONS_SUPPLEMENTAIRES_NOUS_SOMMES_L; ?></h2>
                        <?= ALBERT_UTILISEZ_CE_FORMULAIRE_DE_CONTACT_POUR_NOUS_ECRIRE; ?>
                    </div>
                    <div class="col-lg-6">
                        <form action="<?= site_url('actions/SendContactForm'); ?>" method="POST" class="support-form row">
                            <div class="col-md-6 mb-3">
                                <input type="text" name="name" class="form-control" placeholder="<?= ALBERT_VOTRE_NOM; ?>" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" name="email" class="form-control" placeholder="<?= ALBERT_VOTRE_EMAIL; ?>" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="phone" name="phone" class="form-control" placeholder="<?= ALBERT_VOTRE_NUMERO_DE_TELEPHONE; ?>" required>
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control mb-3" placeholder="<?= ALBERT_VOTRE_MESSAGE_A_DESTINATION_DE_NOTRE_SERVICE_CLIEN; ?>" style="max-height: 165px;" required></textarea>

                                <div class="g-recaptcha" data-sitekey="6Leh200jAAAAAEayxRxi3n_ARw9v8GcKW-g0qNFp" data-callback="enableBtn"></div>

                                <button type="submit" class="btn btn-warning rounded-pill mt-3" id="sendButtonCaptcha"><img src="assets/img/icons/mail.svg" alt="" class="svg"> <?= ALBERT_ENVOYER_MON_MESSAGE; ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>