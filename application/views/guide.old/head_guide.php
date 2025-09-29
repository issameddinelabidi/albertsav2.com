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
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="<?= site_url('assets/css/animate.min.css'); ?>">

    <link rel="stylesheet" href="<?= site_url('assets/css/plugins.css'); ?>">
    <link rel="stylesheet" href="<?= site_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= site_url('assets/css/guide.css'); ?>">
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
    <style>
  /* Styles for the chat bubble container */
  .chat-bubble-container {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #fff;
    border-radius: 20px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    transition: transform 0.3s ease-in-out;
  }
  /* Styles for the close button */
  .close-button {
    cursor: pointer;
    padding: 5px 10px;
  }
</style>

</head>

<body>
 <div class="chat-bubble-container" id="chatBubble">
    <!-- Chat bubble icon -->
    <div class="close-button" id="chatButton"><i class="fa fa-comments p-3"></i></div>
    <!-- Embed iframe (hidden by default) -->
    <iframe src="https://albert.streamlit.app/?embed=true&embed_options=dark_theme,light_theme&ref=<?= $annonce['unique_reference']; ?>" width="350px" height="500px" frameborder="0" style="display: none;"></iframe>
  </div>
    <?php
    if (!empty($depart_autonome)) {
    ?>
        <div style="position: fixed; bottom: 30px; z-index: 88888;width: 100%;">
            <div class="col-12 text-center w-100">
                <button class="btn btn-gradient gradient-7 btn-lg p-5 py-4" style="width: 85%" data-bs-toggle="modal" data-bs-target="#leaving_modal"><?= ALBERT_DEPART_AUTONOME; ?></button>
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

                        <h4 class="mb-3 text-start"><i class="fa fa-door-open me-4"></i><?= ALBERT_PROCEDURE_DENTREE; ?></h4>

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

    if (empty($is_cleaning_mod)) {
    ?>

        <div class="modal fade" id="arrived_modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>

                        <h4 class="mb-3 text-start"><i class="fa fa-door-open me-4"></i><?= ALBERT_DERNIERE_ETAPE; ?></h4>

                        <form action="<?= site_url('guide/markCheckInAsDone'); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-4">
                                        <label for="name"><?= ALBERT_VOTRE_NOM_2; ?> *</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="<?= ALBERT_VOTRE_NOM_2; ?>" required>
                                    </div>

                                    <button class="btn btn-gradient gradient-7 w-100"><?= ALBERT_VALIDER_MON_CHECK_IN; ?></button>
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

                        <h4 class="mb-3 text-start"><i class="fa fa-door-open me-4"></i><?= ALBERT_DERNIERE_ETAPE; ?></h4>

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
                                        <input type="text" class="form-control" name="name" id="name" placeholder="<?= ALBERT_VOTRE_NOM_2; ?>" required>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="comment"><?= ALBERT_COMMENTAIRE; ?></label>
                                        <textarea name="comment" id="comment" rows="3" class="form-control" placeholder="<?= ALBERT_COMMENTAIRE_SUR_VOTRE_SEJOUR_FACULTATIF; ?>"></textarea>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="file"><?= ALBERT_SI_VOUS_LE_SOUHAITEZ_VOUS_POUVEZ_ENVOYER_DES_PHOTO; ?></label>
                                        <input type="file" name="file[]" id="file" multiple>
                                    </div>


                                    <button class="btn btn-gradient gradient-7 w-100"><?= ALBERT_VALIDER_MON_CHECK_OUT; ?></button>
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


    if (!empty($annonce['is_wifi'])) {
    ?>
        <div class="modal fade" id="wifi-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>

                        <h4 class="mb-3 text-start"><i class="fa fa-wifi me-4"></i>Wifi</h4>
                        <p class="lead mb-0 text-start"><strong>Nom du réseau</strong> : <?= $annonce['wifi_user']; ?></p>
                        <p class="lead mb-0 text-start"><strong>Mot de passe</strong> : <?= $annonce['wifi_password']; ?></p>

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

                        <h4 class="mb-3 text-start"><i class="fa fa-door-open me-4"></i>Procédure d'entrée</h4>

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

                    <h4 class="mb-3 text-start"><i class="fa fa-location-dot me-4"></i>Localisation</h4>
                    <p class="lead mb-0 text-start"><?= $annonce['address']; ?><br><?= $annonce['zipcode']; ?> <?= $annonce['city']; ?> <?= $annonce['country']; ?></p>

                    <?php
                    if (!empty($annonce['floor'])) {
                    ?>
                        <hr class="my-3">
                        <p class="lead mb-0 text-start"><strong>Etage</strong> : <?= $annonce['floor']; ?></p>

                    <?php
                    }
                    ?>

                    <a href="http://maps.google.com/?q=<?= $annonce['address']; ?> <?= $annonce['zipcode']; ?> <?= $annonce['city']; ?> <?= $annonce['country']; ?>" target="_blank" class="btn btn-success w-100 mt-4"><i class="fa fa-map-signs me-3"></i>Trouver sur Maps</a>


                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="check-in-out-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>

                    <h4 class="mb-3 text-start"><i class="fa fa-clock me-4"></i>Check-in/out</h4>

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

                        <h4 class="mb-3 text-start"><i class="fa fa-recycle me-4"></i>Jet des ordures</h4>
                        <p class="lead mb-0 text-start"><?= $annonce['trash_location']; ?></p>

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

                        <h4 class="mb-3 text-start"><i class="fa fa-tasks me-4"></i>Règlement intérieur</h4>
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

    ?>
    <div class="content-wrapper">
        <?php
        $pict = (!empty($is_cleaning_mod)) ? '18' : '14';
        ?>
        <section class="wrapper image-wrapper bg-image text-white" data-image-src="<?= site_url('assets/img/photos/bg' . $pict . '.png'); ?>" style="height: 100%">

            <header class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 my-3 mb-0 pt-3 text-center">
                            <a href="<?= site_url(); ?>">
                                <?php
                                if (empty($proprio['avatar'])) {
                                ?>
                                    <img src="<?= site_url('/assets/img/logo-dark.png'); ?>" srcset="<?= site_url('assets/img/logo-dark@2x.png 2x'); ?>" alt="Logo Albert" width="100" />
                                <?php
                                } else {
                                ?>
                                    <img src="<?= $proprio['avatar_url']; ?>" srcset="<?= $proprio['avatar_url']; ?>" alt="Logo" width="100" />
                                <?php
                                }
                                ?>
                            </a>
                        </div>
                    </div>
                </div>
            </header>


            <section class="wrapper">
                <div class="container py-14 py-md-10 pt-2">