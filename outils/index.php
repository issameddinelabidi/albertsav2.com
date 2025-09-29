<!DOCTYPE html>
<html lang="fr">

<?php
$site_url = 'https://albertsav.com/outils/';
// $site_url = 'http://localhost/albertsav/albertsav-fo/outils/';
$title = 'Albert';
include './partials/head.php'
?>

<body>
    <div class="modal fade" id="register_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog shadow-lg">
            <div class="modal-content bg-transparent">
                <div class="single-settings-box top-flashlight light-xl overflow-hidden">
                    <div class="form-check form-switch notification-box-switch">
                        <h4 class="title">Créez votre compte Albert</h4>
                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="rbt-sm-separator mt-0"></div>
                    <div class="rbt-checkbox-grp">
                        <form action="../actions/register" method="POST" id="registerForm" autocomplete="disabled">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <label for="username" class="mb-2">Raison sociale</label>
                                        <input type="text" id="username" class="form-control text-white" name="username" placeholder="Raison sociale" autocomplete="disabled" required style="background: #0f1021;">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="email" class="mb-2">Votre adresse mail</label>
                                        <input type="text" id="email" class="form-control text-white" name="email" placeholder="Votre adresse mail" autocomplete="disabled" required style="background: #0f1021;">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="mb-2">Votre mot de passe</label>
                                        <input type="password" id="password" class="form-control text-white" name="password" placeholder="Votre mot de passe" autocomplete="disabled" required style="background: #0f1021;">
                                    </div>

                                    <!-- <div class="form-group mb-4">
                                        <label for="max_annonces" class="mb-2">Nombre d'annonces autorisées</label>
                                        <input type="number" id="max_annonces" class="form-control" name="max_annonces" placeholder="" min="1" autocomplete="disabled" required>
                                    </div> -->
                                </div>

                                <div class="col-12 pt-2 text-center">
                                    <div class="g-recaptcha mb-4" data-sitekey="6Leh200jAAAAAEayxRxi3n_ARw9v8GcKW-g0qNFp" data-callback="enableBtn"></div>

                                    <button type="submit" class="btn-default" id="sendButtonCaptcha" onclick="return gtag_report_conversion('inscription');"><i class="fa fa-user-plus me-3"></i> Créer mon compte</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T28GH99M"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <main class="page-wrapper">

        <!-- start header -->
        <header class="rainbow-header header-default header-not-transparent header-sticky">
            <div class="container position-relative">
                <div class="row align-items-center row--0">
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="logo">
                            <a href="<?= $site_url; ?>">
                                <img class="logo-light" src="<?= $site_url; ?>assets/images/logo/logo.png" alt="Albert Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-6">
                        <div class="header-right">
                            <div class="header-btn">
                                <a class="btn-default btn-small round" target="_blank" href="javascript:void();" data-bs-toggle="modal" data-bs-target="#register_modal">Démarrer gratuitement</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End  header -->

        <!-- start mobilemenu -->
        <?php include './partials/mobilemenu.php' ?>
        <!-- End  mobilemenu -->


        <!-- Start Slider Area  -->
        <div class="slider-area slider-style-1 variation-default slider-bg-image bg-banner1" data-black-overlay="1">
            <!-- <div class="bg-blend-top bg_dot-mask"></div> -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="inner text-center mt--60">
                            <h1 class="title display-one">Profitez gratuitement de nos<span class="theme-gradient"> meilleurs outils numériques</span> pour simplifier votre gestion.
                            </h1>
                            <!-- <p class="b1 desc-text">Profitez gratuitement de nos meilleurs outils numériques pour simplifier votre gestion.</p> -->
                            <!-- <p class="b1 desc-text">Testé sur le terrain avec 8000+ annonces.</p> -->
                            <div class="button-group">
                                <a class="btn-default bg-light-gradient btn-large" href="javascript:void();" data-bs-toggle="modal" data-bs-target="#register_modal">
                                    <div class="has-bg-light"></div>
                                    <span>Accédez gratuitement à nos outils</span>
                                </a>
                            </div>
                            <!-- <p class="color-gray mt--5">💳 No credit card required!</p> -->
                        </div>
                    </div>
                    <div class="col-lg-10 col-xl-10 order-1 order-lg-2 py-5 mb-5">
                        <!-- <div class="frame-image frame-image-bottom bg-flashlight video-popup icon-center">
                            <img src="<?= $site_url; ?>assets/images/cadeau.png" alt="Banner Images">
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="chatenai-separator has-position-bottom">
                <img class="w-100" src="<?= $site_url; ?>assets/images/separator/separator-top.svg" alt="">
            </div>
        </div>
        <!-- End Slider Area  -->

        <!-- Start Service__Style--1 Area  -->
        <div class="rainbow-service-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle">
                                <span class="theme-gradient">100% GRATUIT !</span>
                            </h4>
                            <h2 class="title w-600 mb--20">Testé sur le terrain avec 8000+ annonces.</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--15 service-wrapper">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="" data-sal-duration="700">
                        <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                            <div class="icon">
                                <img src="<?= $site_url; ?>assets/mocks/guides.png" class="w-50" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title w-600">
                                    <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#register_modal"><span class="theme-gradient">Guide Albert</span></a>
                                </h4>
                                <p class="description b1 color-gray mb--0">Un guide d'accueil personnalisé qui reflète votre propriété et vos voyageurs, alliant humanité, IA, et géolocalisation pour une expérience inégalée. Il s'adapte automatiquement à la langue de vos invités !
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="" data-sal-duration="700" data-sal-delay="100">
                        <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                            <div class="icon">
                                <img src="<?= $site_url; ?>assets/mocks/dash.png" class="w-50" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title w-600">
                                    <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#register_modal"><span class="theme-gradient">Interface Albert</span></a>
                                </h4>
                                <p class="description b1 color-gray mb--0">Nos outils de base de données pour stocker et organiser efficacement toutes vos informations de location courte durée.Tout est pensé pour que chaque information soit disponible facilement.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="" data-sal-duration="700" data-sal-delay="200">
                        <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                            <div class="icon">
                                <img src="<?= $site_url; ?>assets/mocks/team.png" class="w-50" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title w-600">
                                    <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#register_modal"><span class="theme-gradient">Guide TEAM</span></a>
                                </h4>
                                <p class="description b1 color-gray mb--0">Donnez à votre personnel d'entretien le pouvoir de simplicité ! Offrez-leur un environnement de travail plus intelligent et plus efficace.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="" data-sal-duration="700" data-sal-delay="100">
                        <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                            <div class="icon">
                                <img src="<?= $site_url; ?>assets/mocks/ia.png" class="w-50" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title w-600">
                                    <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#register_modal"><span class="theme-gradient">Réceptionniste IA</span></a>
                                </h4>
                                <p class="description b1 color-gray mb--0">Une réceptionniste 5* disponible 24/24, connectée à votre base de données et prête à vous assister au quotidien.Chat GPT4o</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="" data-sal-duration="700" data-sal-delay="200">
                        <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                            <div class="icon">
                                <img src="<?= $site_url; ?>assets/mocks/livres.png" class="w-50" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title w-600">
                                    <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#register_modal"><span class="theme-gradient">Livres Blancs</span></a>
                                </h4>
                                <p class="description b1 color-gray mb--0">Suivez la vétusté opérationnelle de votre bien :<br>
                                    Gardez un oeil sur l'état opérationnel de votre propriété en suivant régulièrement son usure</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="" data-sal-duration="700">
                        <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                            <div class="icon">
                                <img src="<?= $site_url; ?>assets/mocks/sequence.png" class="w-50" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title w-600">
                                    <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#register_modal"><span class="theme-gradient">La séquence Albert</span></a>
                                </h4>
                                <p class="description b1 color-gray mb--0">Des modèles de messages qui créent l'effet WoW + nos recommandations de partenaires exclusifs !</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Service__Style--1 Area  -->

        <!-- Start Seperator Area  -->
        <div class="chatenai-separator">
            <img class="w-100" src="<?= $site_url; ?>assets/images/separator/separator-top.svg" alt="">
        </div>
        <!-- End Seperator Area  -->

        <!-- Start Timeline-Style-Four  -->
        <div class="rainbow-timeline-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle ">
                                <span class="theme-gradient">COMMENT ÇA MARCHE ?</span>
                            </h4>
                            <h2 class="title w-600 mb--20">Démarrez en 3 étapes</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 mt--30">
                        <div class="timeline-style-two bg-flashlight bg-color-blackest">
                            <div class="row row--0">
                                <div class="col-lg-4 col-md-4 rainbow-timeline-single dark-line">
                                    <div class="rainbow-timeline">
                                        <h6 class="title" data-sal="" data-sal-duration="700" data-sal-delay="200">1. INSCRIPTION</h6>
                                        <div class="progress-line">
                                            <div class="line-inner"></div>
                                        </div>
                                        <div class="progress-dot">
                                            <div class="dot-level">
                                                <div class="dot-inner"></div>
                                            </div>
                                        </div>
                                        <p class="description" data-sal="" data-sal-duration="700" data-sal-delay="300">Inscrivez-vous en moins de 30 secondes sur notre plateforme.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 rainbow-timeline-single dark-line">
                                    <div class="rainbow-timeline">
                                        <h6 class="title" data-sal="" data-sal-duration="700" data-sal-delay="200">2. AJOUT LOGEMENTS</h6>
                                        <div class="progress-line">
                                            <div class="line-inner"></div>
                                        </div>
                                        <div class="progress-dot">
                                            <div class="dot-level">
                                                <div class="dot-inner"></div>
                                            </div>
                                        </div>
                                        <p class="description" data-sal="" data-sal-duration="700" data-sal-delay="300">Ajoutez vos fiches logements, vos photos, configurez votre marque.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 rainbow-timeline-single dark-line">
                                    <div class="rainbow-timeline">
                                        <h6 class="title" data-sal="" data-sal-duration="700" data-sal-delay="200">3. CONFIGURATION GUIDES</h6>
                                        <div class="progress-line">
                                            <div class="line-inner"></div>
                                        </div>
                                        <div class="progress-dot">
                                            <div class="dot-level">
                                                <div class="dot-inner"></div>
                                            </div>
                                        </div>
                                        <p class="description" data-sal="" data-sal-duration="700" data-sal-delay="300">Configurez le comportement de vos guides voyageurs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-group mt--50 text-center">
                            <a class="btn-default btn-large" href="javascript:void();" data-bs-toggle="modal" data-bs-target="#register_modal" onclick="return gtag_report_conversion('demarrer_gratuitement');">Démarrer gratuitement</a>
                            <!-- <a class="btn-default btn-large btn-border popup-video" href="https://www.youtube.com/watch?v=CG1LhL0vuwM"><span>
                                    <i class="feather-play"></i>
                                </span> Découvrir en vidéo</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Timeline-Style-Four  -->

        <!-- Start Seperator Area  -->
        <div class="chatenai-separator">
            <img class="w-100" src="<?= $site_url; ?>assets/images/separator/separator-bottom.svg" alt="">
        </div>
        <!-- End Seperator Area  -->

        <!-- Start Split Style-1 Area  -->
        <div class="rainbow-split-area rainbow-section-gap">
            <div class="container">
                <div class="rainbow-splite-style">
                    <div class="split-wrapper">
                        <div class="row g-0 radius-10 align-items-center">
                            <div class="col-lg-12 col-xl-6 col-12">
                                <div class="thumbnail">
                                    <img class="radius" src="<?= $site_url; ?>assets/images/mockups/extra.png" alt="split Images">
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6 col-12">
                                <div class="split-inner">
                                    <h4 class="title" data-sal="" data-sal-duration="400" data-sal-delay="200">Upsells personnalisés</h4>
                                    <p class="description" data-sal="" data-sal-duration="400" data-sal-delay="300">Albert vous équipe pour mettre en avant des prestations exclusives comme un départ tardif, une bouteille de champagne ou encore un kit charnel, aussi séduisant que ce nouvel outil, et ce, dès la confirmation de chaque réservation.</p>
                                    <div class="view-more-button mt--35" data-sal="" data-sal-duration="400" data-sal-delay="400">
                                        <a class="btn-default" href="">Découvrir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="chatenai-separator">
            <img class="w-100" src="<?= $site_url; ?>assets/images/separator/separator-top.svg" alt="">
        </div>

        <!-- <div class="rainbow-split-area rainbow-section-gap">
            <div class="container">
                <div class="rainbow-splite-style">
                    <div class="split-wrapper">
                        <div class="row g-0 radius-10 align-items-center">
                            <div class="col-lg-12 col-xl-6 col-12">
                                <div class="split-inner">
                                    <h4 class="title" data-sal="" data-sal-duration="400" data-sal-delay="200">Guides Albert Team
                                    </h4>
                                    <p class="description" data-sal="" data-sal-duration="400" data-sal-delay="300">Offrez à votre personnel d'entretien le pouvoir de simplicité !<br><br>

                                        Avec un simple lien ou un QR Code intégré à votre propriété, vos femmes de ménages peuvent déterminer à l'avance si les voyageurs sont présents ou non, optimisant ainsi leur efficacité opérationnelle.</p>
                                    <div class="view-more-button mt--35" data-sal="" data-sal-duration="400" data-sal-delay="400">
                                        <a class="btn-default" href="javascript:void();" data-bs-toggle="modal" data-bs-target="#register_modal">Découvrir</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6 col-12">
                                <div class="thumbnail">
                                    <img class="radius" src="<?= $site_url; ?>assets/images/mockups/guides.png" alt="split Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="chatenai-separator">
            <img class="w-100" src="<?= $site_url; ?>assets/images/separator/separator-bottom.svg" alt="">
        </div> -->

        <!-- <div class="rainbow-split-area rainbow-section-gap">
            <div class="container">
                <div class="rainbow-splite-style">
                    <div class="split-wrapper">
                        <div class="row g-0 radius-10 align-items-center">
                            <div class="col-lg-12 col-xl-6 col-12">
                                <div class="thumbnail">
                                    <img class="radius" src="<?= $site_url; ?>assets/images/mockups/ipad.png" alt="split Images">
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6 col-12">
                                <div class="split-inner">
                                    <h4 class="title" data-sal="" data-sal-duration="400" data-sal-delay="200">Interface Albert</h4>
                                    <p class="description" data-sal="" data-sal-duration="400" data-sal-delay="300">Une interface épurée pour gérer vos bien en location courte durée !<br><br>

                                        Albert vous offre aussi gratuitement nos outils de base de données pour y stocker et organiser efficacement toutes vos informations de location courte durée.</p>
                                    <div class="view-more-button mt--35" data-sal="" data-sal-duration="400" data-sal-delay="400">
                                        <a class="btn-default" href="javascript:void();" data-bs-toggle="modal" data-bs-target="#register_modal">Découvrir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="chatenai-separator">
            <img class="w-100" src="<?= $site_url; ?>assets/images/separator/separator-top.svg" alt="">
        </div> -->


        <!-- Start Call TO Action Area  -->
        <div class="rainbow-callto-action-area">
            <div class="wrapper">
                <div class="rainbow-callto-action clltoaction-style-default rainbow-section-gap">
                    <div class="container">
                        <div class="row row--0">
                            <div class="col-lg-12">
                                <div class="align-items-center content-wrapper">
                                    <div class="inner">
                                        <div class="content text-center">
                                            <span class="theme-gradient b2 mb--30 d-inline-block">FACILITEZ LE SÉJOUR DE VOS VOYAGEURS</span>
                                            <h2 class="title" data-sal="" data-sal-duration="400" data-sal-delay="200">Une expérience unique !</h2>
                                            <div class="call-to-btn" data-sal="" data-sal-duration="400" data-sal-delay="350">
                                                <a class="btn-default bg-light-gradient btn-large" href="javascript:void();" data-bs-toggle="modal" data-bs-target="#register_modal">
                                                    <div class="has-bg-light"></div>
                                                    <span>Testez gratuitement</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                /*
?>
                <div class="fancy-genearate-section">
                    <div class="container">
                        <div class="genarator-section">
                            <ul class="genarator-card-group full-width-list ">
                                <li>
                                    <a href="javascript:void();" class="genarator-card bg-flashlight-static center-align">
                                        <div class="inner">
                                            <div class="left-align">
                                                <div class="img-bar">
                                                    <lord-icon
                                                        src="https://cdn.lordicon.com/hkjhuila.json"
                                                        trigger="hover"
                                                        colors="primary:#9ce5f4,secondary:#4bb3fd"
                                                        style="width:60px;height:60px">
                                                    </lord-icon>
                                                </div>
                                                <h5 class="title">Messagerie</h5>
                                                <span class="rainbow-demo-btn">Tester gratuitement</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void();" class="genarator-card bg-flashlight-static center-align">
                                        <div class="inner">
                                            <div class="left-align">
                                                <div class="img-bar">
                                                    <lord-icon
                                                        src="https://cdn.lordicon.com/jwqxdsds.json"
                                                        trigger="hover"
                                                        colors="primary:#9ce5f4,secondary:#4bb3fd"
                                                        style="width:60px;height:60px">
                                                    </lord-icon>
                                                </div>
                                                <h5 class="title">Vérification</h5>
                                                <span class="rainbow-demo-btn">Tester gratuitement</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void();" class="genarator-card bg-flashlight-static center-align">
                                        <div class="inner">
                                            <div class="left-align">
                                                <div class="img-bar">
                                                    <lord-icon
                                                        src="https://cdn.lordicon.com/soingmrp.json"
                                                        trigger="hover"
                                                        colors="primary:#9ce5f4,secondary:#ffc738,tertiary:#3080e8"
                                                        style="width:60px;height:60px">
                                                    </lord-icon>
                                                </div>
                                                <h5 class="title">Notifications</h5>
                                                <span class="rainbow-demo-btn">Tester gratuitement</span>
                                                <!-- <span class="rainbow-badge-card ml--10">Hot</span> -->
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void();" class="genarator-card bg-flashlight-static center-align">
                                        <div class="inner">
                                            <div class="left-align">
                                                <div class="img-bar">
                                                    <lord-icon
                                                        src="https://cdn.lordicon.com/oocoppch.json"
                                                        trigger="hover"
                                                        colors="primary:#e3c0ac,secondary:#66d7ee,tertiary:#ffffff"
                                                        style="width:60px;height:60px">
                                                    </lord-icon>
                                                </div>
                                                <h5 class="title">Accès</h5>
                                                <span class="rainbow-demo-btn">Tester gratuitement</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void();" class="genarator-card bg-flashlight-static center-align">
                                        <div class="inner">
                                            <div class="left-align">
                                                <div class="img-bar">
                                                    <lord-icon
                                                        src="https://cdn.lordicon.com/fikbvbcf.json"
                                                        trigger="hover"
                                                        colors="primary:#ffc738,secondary:#e3c0ac,tertiary:#4bb3fd"
                                                        style="width:60px;height:60px">
                                                    </lord-icon>
                                                </div>
                                                <h5 class="title">Marketing</h5>
                                                <span class="rainbow-demo-btn">Tester gratuitement</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
<?php
*/
                ?>
            </div>
        </div>
        <!-- End Call TO Action Area  -->

        <!-- Start Footer Area  -->
        <?php include './partials/footer.php' ?>
        <!-- End Footer Area  -->


        <div class="rn-progress-parent">
            <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
            </svg>
        </div>
    </main>
    <!-- All Scripts  -->

    <!-- JS -->
    <script src="<?= $site_url; ?>assets/js/vendor/modernizr.min.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/jquery.min.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/popper.min.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/waypoint.min.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/wow.min.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/counterup.min.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/feather.min.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/sal.min.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/backto-top.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/masonry.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/imageloaded.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/magnify.min.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/lightbox.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/slick.min.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/easypie.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/text-type.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/prism.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/jquery.style.swicher.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/bootstrap-select.min.js"></script>

    <script src="<?= $site_url; ?>assets/js/vendor/js.cookie.js"></script>
    <script src="<?= $site_url; ?>assets/js/vendor/jquery-one-page-nav.js"></script>
    <!-- Main JS -->
    <script src="<?= $site_url; ?>assets/js/main.js"></script>

</html>