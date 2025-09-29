<?php
$main_link = (!empty($is_preview_mode)) ? 'preview' : 'view';
$form_sending = (!empty($is_preview_mode)) ? 'previewCheckin' : 'markCheckInAsDone';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albert - <?= ALBERT_GUIDE_DENTREE; ?></title>
    <meta name="robots" content="noindex,nofollow">

    <link rel="apple-touch-icon" sizes="120x120" href="<?= site_url('assets/favicon/apple-touch-icon.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= site_url('assets/favicon/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= site_url('assets/favicon/favicon-16x16.png'); ?>">
    <link rel="manifest" href="<?= site_url('assets/favicon/site.webmanifest'); ?>">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#060719">

    <link rel="stylesheet" href="<?= site_url('assets/css/animate.min.css'); ?>">

    <link rel="stylesheet" href="<?= site_url('assets/css/plugins.css'); ?>">
    <link rel="stylesheet" href="<?= site_url('assets/css/style.css'); ?>">
    <!-- <link rel="stylesheet" href="<?= site_url('assets/css/guide.css'); ?>"> -->
    <?php
    switch ($proprio['guide_theme']) {
        case 'dark':
            $css_guide = 'guide2_dark';
            break;
        case 'light':
            $css_guide = 'guide2_light';
            break;
    }
    ?>
    <link rel="stylesheet" href="<?= site_url('assets/css/' . $css_guide . '.css?time=' . time()); ?>">
    <link rel="stylesheet" href="<?= site_url('assets/css/appup.css'); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php
    if (!empty($annonce['chatbase_bot_id'])) {
        /*
    ?>
        <script>
            window.chatbaseConfig = {
                chatbotId: "<?= $annonce['chatbase_bot_id']; ?>",
            }
        </script>
        <script src="https://www.chatbase.co/embed.min.js" id="<?= $annonce['chatbase_bot_id']; ?>" defer>
        </script>
    <?php
*/
    }
    ?>

    <link rel="stylesheet" href="<?= site_url('assets/css/guides/light.css'); ?>" id="theme-stylesheet">
    <link rel="stylesheet" id="theme-stylesheet">
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const darkModeMediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
            const themeStylesheet = document.getElementById('theme-stylesheet');

            const setTheme = (isDarkMode) => {
                themeStylesheet.setAttribute('href', isDarkMode ? '<?= site_url('assets/css/guides/dark.css'); ?>' : '<?= site_url('assets/css/guides/light.css'); ?>');
            };

            setTheme(darkModeMediaQuery.matches);

            darkModeMediaQuery.addEventListener('change', (event) => {
                setTheme(event.matches);
            });
        });
    </script>

</head>

<body>
    <?php
    if (!empty($is_preview_mode)) {
    ?>
        <div class="container">
            <div class="row">
                <div class="col-12 bg-dark text-center text-white py-3">
                    <i class="fa fa-warning me-3"></i>Mode aperçu<i class="fa fa-warning ms-3"></i>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <style>
        /* Chat bubble container */
        .chat-container {
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 1000;
        }

        /* Chat bubble button */
        .chat-bubble {
            width: 80px;
            background: rgba(55, 58, 137, 1);
            height: 80px;
            color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        /* Chat bubble img */
        .chat-bubble img {
            width: 40px;
            height: 40px;
        }

        .chat-bubble:hover {
            transform: scale(1.1);
        }

        /* Iframe container */
        .iframe-container {
            position: fixed;
            bottom: 65px;
            right: 30px;
            left: 30px;
            z-index: 999;
            display: none;
            background-color: #f7f9fb;
            border-radius: 10px;
            /* Ensure content doesn't overflow rounded corners */
            overflow: hidden;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .iframe-container iframe {
            border: none;
        }

        /* Close button */
        .close-btn {
            position: absolute;
            top: -15px;
            right: -15px;
            background-color: #fff;
            color: #ffce1f;
            border: 2px solid #ffce1f;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Media query for smaller screens */
        @media screen and (max-height: 800px) {
            .iframe-container iframe {
                height: 600px;
            }
        }

        /* Media query for larger screens */
        @media screen and (min-height: 800px) {
            .iframe-container iframe {
                height: 700px;
            }
        }
    </style>
    <div class="chat-container">
        <div class="chat-bubble" onclick="toggleIframe()">
            <img id="chatfloatingBubble" src="<?= site_url('assets/guides/chat-bubble.svg'); ?>" alt="" class="img-fluid">
        </div>
        <div class="iframe-container" id="iframeContainer">
            <!-- <div class="close-btn" onclick="toggleIframe()">X</div> -->
            <iframe src="https://ia-chat.albertsav.com/?ref=<?= $annonce['unique_reference']; ?>" title="description" width="100%" height="600"></iframe>
        </div>
    </div>

    <?php
    if (!empty($leaving_procedure)) {
    ?>
        <div class="modal fade" id="leaving-procedure-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>

                        <h4 class="mb-3 text-start"><i class="fa fa-door-open me-4"></i><?= ALBERT_PROCEDURE_DE_DEPART; ?></h4>

                        <div class="swiper-container dots-over" data-margin="5" data-dots="true" data-nav="true" data-autoheight="true">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <?php
                                    foreach ($leaving_procedure as $proc) {
                                    ?>
                                        <div class="swiper-slide">
                                            <img src="<?= $proc['file']; ?>" alt="" class="rounded">

                                            <p class="d-block mb-0 mt-2"><?= nl2br($proc['text']); ?></p>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="swiper-slide">
                                        <button class="btn btn-gradient main_gradient my-5 mb-10" data-bs-toggle="modal" data-bs-target="#leaving_modal">Valider mon départ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    if (!empty($procedure_list)) {
    ?>
        <div class="modal fade" id="entry-procedure-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>

                        <h4 class="mb-3 text-start text-color"><i class="fa fa-door-open me-4"></i><?= ALBERT_PROCEDURE_DENTREE; ?></h4>

                        <div class="swiper-container dots-over" data-margin="5" data-dots="true" data-nav="true" data-autoheight="true">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <?php
                                    foreach ($procedure_list as $proc) {
                                    ?>
                                        <div class="swiper-slide">
                                            <img src="<?= $proc['file']; ?>" alt="" class="rounded">

                                            <p class="bg-white d-block mb-0 mt-2"><?= nl2br($proc['text']); ?></p>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    if (!empty($procedure_list)) {
    ?>
        <div class="modal fade" id="entry-procedure-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>

                        <h4 class="mb-3 text-start text-color"><i class="fa fa-door-open me-4"></i><?= ALBERT_PROCEDURE_DENTREE; ?></h4>

                        <div class="swiper-container dots-over" data-margin="5" data-dots="true" data-nav="true" data-autoheight="true">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <?php
                                    foreach ($procedure_list as $proc) {
                                    ?>
                                        <div class="swiper-slide">
                                            <img src="<?= $proc['file']; ?>" alt="" class="rounded">

                                            <p class="bg-white d-block mb-0 mt-2"><?= nl2br($proc['text']); ?></p>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    if (!empty($annonce['parking_possibilities'])) {
    ?>
        <div class="modal fade" id="parking_step" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>

                        <h4 class="mb-3 text-start text-color"><i class="fa fa-car me-4"></i>Se garer</h4>
                        <p class="lead mb-0 text-start text-color"><?= $annonce['parking_possibilities']; ?></p>

                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    if (empty($is_cleaning_mod)) {
    ?>

        <div class="modal fade" id="arrived_modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>

                        <h4 class="mb-3 text-start text-color"><i class="fa fa-door-open me-4"></i><?= ALBERT_DERNIERE_ETAPE; ?></h4>

                        <form action="<?= site_url('guide/' . $form_sending); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">
                            <input type="hidden" name="booking_id" value="<?= $current_booking['booking_id'] ?? ''; ?>">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-4">
                                        <label for="name"><?= ALBERT_VOTRE_NOM_2; ?> *</label>
                                        <input type="text" class="form-control field-background" name="name" id="name" placeholder="<?= ALBERT_VOTRE_NOM_2; ?>" required>
                                    </div>

                                    <button class="btn btn-gradient main_gradient w-100"><?= ALBERT_VALIDER_MON_CHECK_IN; ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="leaving_modal" tabindex="-1" style="z-index: 10000000;">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>

                        <h4 class="mb-3 text-start text-color"><i class="fa fa-door-open me-4"></i><?= ALBERT_DERNIERE_ETAPE; ?></h4>

                        <p><?= ALBERT_ASSUREZ_VOUS_DAVOIR_BIEN_SUIVI_LA_PROCEDURE_DE_SOR; ?></p>


                        <form action="<?= site_url('guide/markCheckOutAsDone'); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">
                            <input type="hidden" name="cleaning_rate" id="notation">
                            <div class="row">
                                <div class="col-12">

                                    <div class="form-group mb-4">
                                        <p class="mb-0"><?= ALBERT_QUAVEZ_VOUS_PENSE_DE_VOTRE_SEJOUR; ?></p>
                                        <span class="rate">
                                            <i class="star_rate">★</i>
                                            <i class="star_rate">★</i>
                                            <i class="star_rate">★</i>
                                            <i class="star_rate">★</i>
                                            <i class="star_rate">★</i>
                                        </span>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="name"><?= ALBERT_VOTRE_NOM_2; ?> *</label>
                                        <input type="text" class="form-control field-background" name="name" id="name" placeholder="<?= ALBERT_VOTRE_NOM_2; ?>" required>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="comment"><?= ALBERT_COMMENTAIRE; ?></label>
                                        <textarea name="comment" id="comment" rows="3" class="form-control field-background" placeholder="<?= ALBERT_COMMENTAIRE_SUR_VOTRE_SEJOUR_FACULTATIF; ?>"></textarea>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="file"><?= ALBERT_SI_VOUS_LE_SOUHAITEZ_VOUS_POUVEZ_ENVOYER_DES_PHOTO; ?></label>
                                        <input type="file" name="file[]" id="file" multiple>
                                    </div>


                                    <button class="btn btn-gradient main_gradient w-100"><?= ALBERT_VALIDER_MON_CHECK_OUT; ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>


    <?php
    if (!empty($procedure_list)) {
    ?>
        <div class="modal fade" id="entry-procedure-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>

                        <h4 class="mb-3 text-start text-color"><i class="fa fa-door-open me-4"></i>Procédure d'entrée</h4>

                        <div class="swiper-container dots-over" data-margin="5" data-dots="true" data-nav="true" data-autoheight="true">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <?php
                                    foreach ($procedure_list as $proc) {
                                    ?>
                                        <div class="swiper-slide">
                                            <img src="<?= $proc['file']; ?>" alt="" class="rounded">

                                            <p class="bg-white d-block mb-0 mt-2"><?= nl2br($proc['text']); ?></p>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <div class="modal fade" id="location-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>

                    <h4 class="mb-3 text-start text-color"><i class="fa fa-location-dot me-4"></i>Localisation</h4>
                    <p class="lead mb-0 text-start"><?= $annonce['address']; ?><br><?= $annonce['zipcode']; ?> <?= $annonce['city']; ?> <?= $annonce['country']; ?></p>

                    <?php
                    if (!empty($annonce['floor'])) {
                    ?>
                        <hr class="my-3">
                        <p class="lead mb-0 text-start"><strong>Etage</strong> : <?= $annonce['floor']; ?></p>

                    <?php
                    }
                    ?>

                    <a href="http://maps.google.com/?q=<?= $annonce['address']; ?> <?= $annonce['zipcode']; ?> <?= $annonce['city']; ?> <?= $annonce['country']; ?>" target="_blank" class="btn btn-success main_gradient border-0 w-100 mt-4"><i class="fa fa-map-signs me-3"></i>Trouver sur Maps</a>


                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="check-in-out-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>

                    <h4 class="mb-3 text-start text-color"><i class="fa fa-clock me-4"></i>Check-in/out</h4>

                    <p class="lead mb-0 text-start"><i class="fa-solid fa-person-walking-luggage me-2"></i><strong><?= ALBERT_HEURE_DARRIVEE; ?> :</strong> <?= $annonce['arrival_hour']; ?></p>
                    <p class="lead mb-0 text-start"><i class="fa-solid fa-person-walking-arrow-right me-2"></i><strong><?= ALBERT_HEURE_DE_DEPART; ?> :</strong> <?= $annonce['leaving_hour']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php

    if (!empty($annonce['trash_location'])) {
    ?>
        <div class="modal fade" id="trash-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>

                        <h4 class="mb-3 text-start text-color"><i class="fa fa-recycle me-4"></i>Jet des ordures</h4>
                        <p class="lead mb-0 text-start"><?= $annonce['trash_location']; ?></p>

                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    if (!empty($annonce['entry_guide_link'])) {
    ?>
        <div class="modal fade" id="infos-comp" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>

                        <?php
                        if (filter_var($annonce['guide_link'], FILTER_VALIDATE_URL) !== false) {
                        ?>
                            <a href="<?= $annonce['guide_link']; ?>" class="text-color" style="text-decoration: underline;" target="_blank">
                                <h6 class="mb-0 text-color">Guide d'entrée <i class="fa-solid fa-arrow-up-right-from-square ms-2"></i></h6>
                            </a>
                            <small class="text-color">Le lien s'ouvrira dans un nouvel onglet</small>
                        <?php
                        }

                        if (filter_var($annonce['entry_guide_link'], FILTER_VALIDATE_URL) !== false) {
                        ?>
                            <a href="<?= $annonce['entry_guide_link']; ?>" class="text-color" style="text-decoration: underline;" target="_blank">
                                <h6 class="mb-0 text-color"><?= ALBERT_INFOS_COMPLEMENTAIRES; ?> <i class="fa-solid fa-arrow-up-right-from-square ms-2"></i></h6>
                            </a>
                            <small class="text-color">Le lien s'ouvrira dans un nouvel onglet</small>
                        <?php

                        } else {
                        ?>
                            <p class="text-color fw-bold"><?= ALBERT_INFOS_COMPLEMENTAIRES; ?></p>
                            <p class="text-color"><?= $annonce['entry_guide_link']; ?></p>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    if (!empty($annonce['reglement_list'])) {
    ?>
        <div class="modal fade" id="reglement-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>

                        <h4 class="mb-3 text-start text-color"><i class="fa fa-tasks me-4"></i>Règlement intérieur</h4>
                        <ul class="lead text-start icon-list bullet-bg bullet-soft-primary">
                            <?php
                            foreach ($reglement_list as $reglement) {
                                if ($reglement['id'] == 6) {
                            ?>
                                    <li><i class="uil uil-check"></i><?= $annonce['is_other_reglement']; ?></li>
                                <?php
                                } else {
                                ?>
                                    <li><i class="uil uil-check"></i><?= $reglement['name']; ?></li>
                            <?php
                                }
                            }
                            ?>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    if (empty($annonce['guide_cover'])) {
        switch ($annonce['type']) {
            case 'flat':
                $annonce['guide_cover'] = site_url('assets/img/guide-flat.jpg');
                break;

            case 'house':
                $annonce['guide_cover'] = site_url('assets/img/guide-house.jpg');
                break;
        }
    }
    ?>
    <div class="content-wrapper">

        <div class="cover_style" style="background-image: url('<?= $annonce['guide_cover']; ?>');">
            <div class="cover_style_caption">

                <div class="container">
                    <p class="h3 position-absolute bottom-0 mb-5 title_color"><?= $annonce['title']; ?></p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center py-5 mt-5">
                            <?php
                            if (empty($proprio['avatar'])) {
                            ?>

                                <img src="<?= site_url('assets/img/logo-picto.png'); ?>" alt="" class="mt-5" style="height: 75px;">
                            <?php
                            } else {
                            ?>
                                <img src="<?= $proprio['avatar_url']; ?>" alt="" class="mt-5 rounded" style="height: 75px;">
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <?php
            if (empty($hide_main_elements)) {
            ?>
                <div class="row">
                    <div class="col-md-12">
                        <p class="mb-0"><?= $annonce['address']; ?></p>
                        <p><?= $annonce['zipcode']; ?> <?= $annonce['city']; ?></p>
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="row">
                <div class="col-12">
                    <div class="container">
                        <div class="row main_gradient rounded align-items-center" style="height: 60px;" data-bs-toggle="modal" data-bs-target="#location-modal">
                            <div class="col-auto">
                                <img src="<?= site_url('assets/guides/maps-location.svg'); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col px-0">
                                Itinéraire
                            </div>
                            <div class="col-auto">
                                <img src="<?= site_url('assets/guides/arrow-right.svg'); ?>" alt="" class="img-fluid">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-6">
                    <p class="text-uppercase mb-0 fw-bold text-semi">Arrivée</p>
                    <p class="text-color"><?= $annonce['arrival_hour']; ?></p>
                </div>
                <div class="col-6">
                    <p class="text-uppercase mb-0 fw-bold text-semi">Départ</p>
                    <p class="text-color"><?= $annonce['leaving_hour']; ?></p>
                </div>
            </div>
        </div>

        <?php
        $pict = (!empty($is_cleaning_mod)) ? '18' : '14';
        ?>