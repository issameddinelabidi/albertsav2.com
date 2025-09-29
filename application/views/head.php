<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= ALBERT_CONFIEZ_NOUS_VOTRE_SERVICE_CLIENT_POUR_VOS_LOCATIO; ?>">

    <?php
    if ($page_type == 'leave') {
    ?>
        <meta name="robots" content="noindex, nofollow" />
    <?php
    }

    // Récupérer l'URL de la page en cours
    $currentUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    // Remplacer le domaine actuel par albertsav.com
    $canonicalUrl = preg_replace("/^(https?:\/\/)([^\/]+)(.*)$/", "$1albertsav.com$3", $currentUrl);

    // Générer la balise canonical
    echo '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '" />';
    ?>
    <title><?= $page_title; ?></title>

    <link rel="apple-touch-icon" sizes="120x120" href="<?= site_url('assets/favicon/apple-touch-icon.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= site_url('assets/favicon/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= site_url('assets/favicon/favicon-16x16.png'); ?>">
    <link rel="manifest" href="<?= site_url('assets/favicon/site.webmanifest'); ?>">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#060719">

    <link rel="stylesheet" href="<?= site_url('assets/css/animate.min.css'); ?>">
    <link rel="stylesheet" href="<?= site_url('assets/css/plugins.css'); ?>">
    <link rel="stylesheet" href="<?= site_url('assets/css/style.css'); ?>">

    <link rel="stylesheet" href="<?= site_url('assets/css/colors/navy.css'); ?>">
    <link rel="preload" href="<?= site_url('assets/css/fonts/thicccboi.css'); ?>" as="style" onload="this.rel='stylesheet'">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?= site_url('assets/css/appup.css?time=' . time()); ?>">
    <!-- ======= Noty ======= -->
    <link href="<?= site_url('assets/lib/noty.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= site_url('assets/lib/themes/nest.css'); ?>">
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <?php
    if ($page_type == 'detail_annonce' || $page_type == 'stats' || $page_type == 'portal') {
    ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <?php
    }
    ?>
    <!-- <script src="https://js.stripe.com/v3/"></script> -->

    <?php
    // if (!empty($this->input->cookie("allow_cookie")) && $this->input->cookie('allow_cookie') == 'yes') {
    ?>

    <!-- Google tag (gtag.js) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11236307127"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-11236307127');
    </script> -->

    <!-- <script>
        function gtag_report_conversion(url) {
            var callback = function() {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-11236307127/Wvu1COuilbYYELfh8e0p',
                'event_callback': callback
            });
            return false;
        }
    </script> -->

    <!-- Google Tag Manager -->
    <!-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-58SGL4M');
    </script> -->
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-YW2Z8W8WKT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-YW2Z8W8WKT');
    </script> -->

    <!-- Meta Pixel Code -->
    <!-- <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '485246023406602');
        fbq('track', 'PageView');
    </script> -->
    <!-- <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=485246023406602&ev=PageView&noscript=1" /></noscript> -->
    <!-- End Meta Pixel Code -->
    <?php
    // }
    ?>

    <?php
    // if ($page_type=='pricing' OR $page_type=='demo'){
    ?>
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
    <style type="text/css">
        .calendly-badge-widget {
            left: auto !important;
            right: 20px !important;
        }
    </style>
    <?php
    // }
    ?>
    <meta name="google-site-verification" content="1LA2VK8QTGV6iIpdENnUgkSpQJ-BhLyJFtzbcTkt1Vg" />

    <style>
        .blink_me {
            animation: blinker 1s linear infinite;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

        /* Force l’affichage des sauts de ligne (\n) dans le popover */
        .popover .popover-body {
            white-space: pre-line;
        }
    </style>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-T28GH99M');
    </script>
    <!-- End Google Tag Manager -->

    <script src="https://cdn.jsdelivr.net/npm/@revolut/checkout/dist/revolut-checkout.js"></script>
    <script src="https://merchant.revolut.com/embed.js"></script>
</head>

<body>
    <?php
    if (!empty($page_type) && $page_type == 'dashboard') {
        if (empty($user['revolut_customer_id']) || empty($user['revolut_payment_method_id'])) {

    ?>
            <div class="bg-danger text-white d-flex flex-column justify-content-center align-items-center text-center" style="position: fixed;height: 50vh;z-index: 9999;right: 10px; left: 10px; bottom: 0px;background: #DC143C !important;border-top-left-radius: 30px; border-top-right-radius: 30px;">
                <div class="container">
                    <h1 class="fw-bold text-white mb-3">⚠️ Action Requise Immédiatement</h1>
                    <p class="lead mb-4">
                        Nous vous invitons à mettre à jour vos moyen de paiement pour éviter une coupure de vos services.
                    </p>
                    <a href="<?= site_url('abonnement'); ?>"
                        class="btn btn-light btn-lg fw-bold shadow text-dark">
                        🔄 Mettre à jour mon moyen de paiement
                    </a>
                </div>
            </div>
    <?php
        }
    }
    ?>


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T28GH99M"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <input type="hidden" id="base_url" value="<?= site_url(); ?>">
    <input type="hidden" id="basic" value="<?= $_SESSION['basic'] ?? ""; ?>">
    <?php
    if (!empty($user) && $user['access_level'] >= 50) {
    ?>
        <div id="floating_post_it" class="gradient-7 text-white" data-bs-toggle="modal" data-bs-target="#post-it-modal">
            <h1 class="text-white mt-1">+</h1>
        </div>

        <div class="modal fade modal-bottom-center" id="post-it-modal" tabindex="-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body p-6">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="mb-2">Nouveau post-it</h4>
                                <hr class="my-3">
                                <form action="<?= site_url('Account/addPostIt'); ?>" method="POST">
                                    <input type="hidden" name="user_id" value="<?= $user['id']; ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="traveller_name">Nom du voyageur</label>
                                            <input type="text" name="traveller_name" id="traveller_name" placeholder="Nom du voyageur" class="form-control mb-3">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="annonce">Annonce</label>
                                            <input type="text" name="annonce" id="annonce" placeholder="Annonce concernée" class="form-control mb-3">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="post_it_date">Date</label>
                                            <input type="text" name="post_it_date" id="post_it_date" placeholder="Date" class="form-control mb-3">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="platform">Plateforme</label>
                                            <input type="text" name="platform" id="platform" placeholder="Plateforme" class="form-control mb-3">
                                        </div>
                                        <div class="col-md-9">
                                            <label for="comment">Commentaire</label>
                                            <textarea name="comment" id="comment" rows="4" placeholder="Commentaire" class="form-control"></textarea>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="color">Type</label>
                                            <select name="color" id="color" class="form-control" required>
                                                <option value="">Sélectionnez</option>
                                                <option value="yellow">Infos à transmettre</option>
                                                <option value="blue">Appels</option>
                                                <option value="green">Infos rappels</option>
                                                <option value="ash">Tickets événements</option>
                                            </select>
                                            <label>&nbsp;</label>
                                            <button class="form-control btn btn-gradient gradient-7">Créer le post-it</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <div class="content-wrapper">
        <?php
        if (empty($dont_show)) {
        ?>
            <header>
                <div class="alert bg-dark text-white alert-dismissible fade show rounded-0 mb-0" role="alert">
                    <?php
                    if (empty($user)) {
                        /*
                    ?>
                        <div class="container">
                            <div class="alert-inner">
                                <div class="row">
                                    <div class="col text-center">
                                        Les onboarding sont suspendus <strong>du 20/12 au 29/12</strong> pour des raisons de qualité et d'organisation de nos équipes.<br>
                                        Le service reste <strong>pleinement opérationnel</strong> pour nos clients actuels ! Passez de joyeuses fêtes de fin d'année !
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php
                        */
                    ?>
                        <div class="container">
                            <div class="alert-inner">
                                <div class="row">
                                    <div class="col-auto col-md">
                                        Profitez de 7 jours gratuits !
                                    </div>
                                    <div class="col-auto col-md">
                                        Nouveaux horaires 6h - 1h
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= site_url('nos-offres'); ?>" title="Nos offres" class="alert-link ms-1"><span class="badge badge-lg bg-warning text-dark text-uppercase rounded blink_me">Découvrez nos offres<i class="fa fa-chevron-right ms-2"></i></span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="alert-inner d-inline justify-content-center align-items-center p-0"></div>
                            <!-- /.alert-inner -->
                        </div>
                        <!-- /.container -->
                        <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    <?php
                    } else {
                    ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <a href="<?= site_url('affiliation'); ?>" title="Affiliation"><span class="btn btn-dark btn-sm rounded"><i class="fa fa-star me-2"></i><?= ALBERT_OBTENEZ_ALBERT_GRATUITEMENT; ?><i class="fa fa-star ms-2"></i></span></a>
                                </div>
                            </div>

                        </div>
                    <?php
                    }
                    ?>

                </div>
            </header>
            <header>
                <?php
                if (!empty($page_style) && $page_style == 'dark') {
                    $style = 'bg-dark';
                    $logo_to_use = 'logo-light';
                    $navbar_style = 'navbar-dark';
                    $color_link = 'text-white';
                } else {
                    $style = '';
                    $logo_to_use = 'logo-dark';
                    $navbar_style = 'navbar-light';
                    $color_link = '';
                }
                ?>
                <nav class="navbar navbar-expand-lg center-nav transparent <?= $navbar_style; ?> <?= $style; ?> pt-0">
                    <div class="container flex-lg-row flex-nowrap align-items-center">
                        <div class="navbar-brand w-100">
                            <?php
                            if (!empty($user)) {
                                $link = 'dashboard';
                            } else {
                                $link = 'accueil';
                            }
                            ?>
                            <a href="<?= site_url($link); ?>">
                                <img class="logo-dark" src="<?= site_url('/assets/img/' . $logo_to_use . '.png'); ?>" srcset="<?= site_url('assets/img/' . $logo_to_use . '@2x.png 2x'); ?>" alt="" width="134">
                                <img class="logo-light" src="<?= site_url('assets/img/' . $logo_to_use . '.png'); ?>" srcset="<?= site_url('assets/img/' . $logo_to_use . '@2x.png 2x'); ?>" alt="" width="134">
                            </a>

                        </div>
                        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                            <div class="offcanvas-header d-lg-none">
                                <h3 class="text-white fs-30 mb-0"><img src="<?= site_url('/assets/img/logo-light.png'); ?>" srcset="<?= site_url('assets/img/logo-light@2x.png 2x'); ?>" alt="" width="134"></h3>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link <?= $color_link; ?>" href="<?= site_url(); ?>"><?= ALBERT_ACCUEIL; ?></a>
                                    </li>
                                    <?php
                                    if (!empty($user)) {
                                        if ($user['access_level'] >= 50) {
                                    ?>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="<?= site_url('dashboard'); ?>" data-bs-toggle="dropdown"><?= ALBERT_DASHBOARD; ?></a>
                                                <ul class="dropdown-menu">

                                                    <li class=""><a class="dropdown-item" href="<?= site_url('dashboard'); ?>"><?= ALBERT_DASHBOARD_2; ?></a></li>
                                                    <hr class="my-2">
                                                    <li class=""><a class="dropdown-item" href="<?= site_url('dashboard/beds24Activations'); ?>">Activations Beds24</a></li>
                                                    <hr class="my-2">
                                                    <li class=""><a class="dropdown-item" href="<?= site_url('dashboard/dailyCalls'); ?>"><?= ALBERT_DAILY_CALLS; ?></a></li>
                                                    <hr class="my-2">
                                                    <li class=""><a class="dropdown-item" href="<?= site_url('home/faqTeam'); ?>"><?= ALBERT_FAQ_TEAM; ?></a></li>
                                                    <hr class="my-2">
                                                    <li class=""><a class="dropdown-item" href="<?= site_url('home/AiAnswers'); ?>">Suivi réponses IA</a></li>
                                                </ul>
                                            </li>
                                        <?php
                                        } else {
                                        ?>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link <?= $color_link; ?> dropdown-toggle" href="<?= site_url('dashboard'); ?>"><?= ALBERT_DASHBOARD; ?></a>
                                                <ul class="dropdown-menu">

                                                    <li class=""><a class="dropdown-item" href="<?= site_url('dashboard'); ?>"><?= ALBERT_DASHBOARD; ?></a></li>
                                                    <hr class="my-2">
                                                    <?php
                                                    if (!empty($user) && $user['member_until'] > date('Y-m-d H:i:s')) {
                                                    ?>
                                                        <li class=""><a class="dropdown-item" href="<?= site_url('mise-en-route-premium'); ?>">Mise en route PREMIUM</a></li>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <li class=""><a class="dropdown-item" href="<?= site_url('mise-en-route-gratuite'); ?>">Mise en route GRATUITE</a></li>
                                                    <?php
                                                    }
                                                    ?>

                                                    <hr class="my-2">
                                                    <li class=""><a class="dropdown-item" href="<?= site_url('actions/extraDisclaimer'); ?>">Albert Extra</a></li>

                                                </ul>
                                            </li>
                                        <?php
                                        }
                                        ?>

                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= site_url('account/portal'); ?>">Affiliation</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link <?= $color_link; ?> dropdown-toggle" href="#!" data-bs-toggle="dropdown">Livres blancs</a>
                                            <ul class="dropdown-menu">

                                                <li class=""><a class="dropdown-item" href="<?= site_url('livre-blanc/guides'); ?>">Guides</a></li>
                                                <hr class="my-2">
                                                <li class=""><a class="dropdown-item" href="<?= site_url('livre-blanc/team'); ?>">Equipe Albert</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link <?= $color_link; ?>" href="<?= site_url('marketplace'); ?>"><?= ALBERT_MARKETPLACE; ?></a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link <?= $color_link; ?>" href="<?= site_url('statistiques'); ?>">Statistiques</a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?= $color_link; ?>" href="<?= site_url('nos-offres'); ?>" title="<?= ALBERT_NOS_OFFRES; ?>"><?= ALBERT_NOS_OFFRES; ?></a>
                                    </li>
                                    <?php
                                    if (empty($user)) {
                                    ?>
                                        <!-- <li class="nav-item">
                                        <a class="nav-link <?= $color_link; ?>" href="<?= site_url('guide-voyageur-gratuit'); ?>" title="Guide voyageur gratuit">Guide voyageur</a>
                                    </li> -->
                                    <?php
                                    }
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?= $color_link; ?>" href="<?= site_url('a-propos'); ?>" title="<?= ALBERT_A_PROPOS; ?>"><?= ALBERT_A_PROPOS; ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= $color_link; ?>" href="<?= site_url('foire-aux-questions'); ?>" title="<?= ALBERT_FOIRE_AUX_QUESTIONS; ?>"><?= ALBERT_FAQ; ?></a>
                                    </li>
                                    <!-- <li class="nav-item">
                                    <a class="nav-link" href="<?= site_url('accueil#contact'); ?>" title="<?= ALBERT_CONTACT; ?>"><?= ALBERT_CONTACT; ?></a>
                                </li> -->
                                </ul>
                                <div class="offcanvas-footer d-lg-none">
                                    <div>
                                        <!-- <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                                    <br /> 00 (123) 456 78 90 <br />
                                    <nav class="nav social social-white mt-4">
                                        <a href="#"><i class="uil uil-twitter"></i></a>
                                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                                        <a href="#"><i class="uil uil-dribbble"></i></a>
                                        <a href="#"><i class="uil uil-instagram"></i></a>
                                        <a href="#"><i class="uil uil-youtube"></i></a>
                                    </nav> -->
                                        <!-- /.social -->
                                    </div>
                                </div>
                                <!-- /.offcanvas-footer -->
                            </div>
                            <!-- /.offcanvas-body -->
                        </div>
                        <!-- /.navbar-collapse -->
                        <div class="navbar-other d-flex ms-auto">
                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <!-- <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li> -->
                                <li class="nav-item d-md-block">
                                    <?php
                                    if (!empty($user)) {
                                        /*
                                        ?>
                                        <a href="<?= site_url('deconnexion'); ?>" class="btn btn-sm btn-danger text-white text-md-dark rounded"><i class="uil uil-power me-2"></i> Déconnexion</a>
                                        <?php
                                        */
                                    } else {
                                    ?>
                                        <a href="<?= site_url('connexion'); ?>" title="Connexion" class="btn btn-sm btn-gradient gradient-7 text-white text-md-dark rounded-pill"><i class="uil uil-user me-2"></i> <?= ALBERT_PROS; ?></a>
                                    <?php
                                    }
                                    ?>

                                </li>
                                <li class="nav-item d-lg-none">
                                    <button class="hamburger offcanvas-nav-btn"><span></span></button>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                        </div>
                        <!-- /.navbar-other -->
                    </div>
                    <!-- /.container -->
                </nav>
                <!-- /.navbar -->
                <!-- <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
                <div class="container d-flex flex-row py-6">
                    <form class="search-form w-100">
                        <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
                    </form>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                </div> -->
                <!-- /.offcanvas -->
            </header>



        <?php
        }

        if (!empty($user) && !empty($is_dash)) {
        ?>
            <section>
                <div class="container pt-7 pt-md-11 pb-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="mb-0"><?= ALBERT_BONJOUR; ?> <?= $user['first_name'] . ' ' . $user['last_name']; ?></h4>
                                            <?php
                                            // if (!empty($available_annonces)) {

                                            /*
                                            $color = 'green';
                                            if ($percentage > 80) {
                                                $color = 'orange';
                                            }

                                            if ($percentage > 100) {
                                                $color = 'red';
                                            }

                                            if ($available_annonces == 1) {
                                                $ann_text = ALBERT_ANNONCE;
                                            } else {
                                                $ann_text = ALBERT_ANNONCES;
                                            }

                                            if ($user['access_level'] == 10) {
                                            ?>
                                                <p class="mb-0"></p>

                                                <ul class="progress-list">
                                                    <li>
                                                        <p><?= ALBERT_VOUS_POUVEZ_DEPOSER_ENCORE; ?> <strong><?= $available_annonces; ?> <?= $ann_text; ?></strong>.</p>
                                                        <div class="progressbar line <?= $color; ?>" data-value="<?= $percentage; ?>"></div>
                                                    </li>
                                                </ul>
                                            <?php
                                            }
*/
                                            ?>
                                        </div>
                                        <div class="col-auto">
                                            <a href="<?= site_url('account'); ?>" class="btn btn-sm btn-info text-white text-md-dark rounded"><i class="fa fa-cog me-2"></i> <?= ALBERT_PARAMETRES; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        // if ($page_type == 'dashboard' || $page_type == 'search_results') {
                        ?>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body py-5">
                                    <h2 class="fs-15 text-uppercase mb-3"><?= ALBERT_RECHERCHER_UNE_ANNONCE; ?><?= ($user['access_level'] > 10) ? ' ' . ALBERT_OU_UN_UTILISATEUR : ''; ?></h2>
                                    <form action="<?= site_url('recherche'); ?>" method="GET">
                                        <div class="row">
                                            <div class="col">
                                                <input type="search" name="search" placeholder="<?= ALBERT_SAISISSEZ_VOTRE_RECHERCHE; ?>" class="form-control" value="<?= (!empty($_GET['search'])) ? $_GET['search'] : ''; ?>" required>
                                            </div>
                                            <?php
                                            if ($user['access_level'] > 10) {
                                            ?><div class="col-auto">
                                                    <select name="type" class="form-control">
                                                        <option value="annonce" <?= (!empty($_GET['type']) && $_GET['type'] == 'annonce') ? 'selected' : ''; ?>><?= ALBERT_ANNONCES2; ?></option>
                                                        <option value="user" <?= (!empty($_GET['type']) && $_GET['type'] == 'user') ? 'selected' : ''; ?>><?= ALBERT_UTILISATEUR; ?></option>
                                                        <option value="reference" <?= (!empty($_GET['type']) && $_GET['type'] == 'reference') ? 'selected' : ''; ?>>Référence</option>
                                                    </select>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <input type="hidden" name="type" value="annonce">
                                            <?php
                                            }
                                            //<?= ALBERT_RECHERCHER;
                                            ?>

                                            <div class="col-auto">
                                                <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                        // }
                        ?>
                    </div>
                </div>
            </section>
        <?php
        }
        ?>