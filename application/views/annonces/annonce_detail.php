<?php
$red_star = ' <span class="text-danger">*</span>';

$verify_state = (!empty($annonce['is_reviewed_by_agent'])) ? 'fa-check-circle text-success' : 'fa-times-circle text-danger';
$verify_text = (!empty($annonce['is_reviewed_by_agent'])) ? 'Cette annonce a été vérifiée par nos agents.' : 'Cette annonce n\'a pas encore été vérifiée par nos agents.';
?>
<input type="hidden" id="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">

<section>
    <div class="container pt-2 pt-md-4 pb-8">
        <div class="row">
            <div class="col-12">
                <?php /*<?= APPUP::displaySubscriptionState($proprio['member_until'], $proprio['id'], $user['id']); ?>*/ ?>
                <?php
                if ($user['access_level'] >= 50) {
                    switch ($proprio['active_plan']) {
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
                    <div class="card bg-<?= $bg_color; ?> text-<?= $text_color; ?> mb-3">
                        <div class="card-body">
                            <i class="fa fa-user me-3"></i> Type d'abonnement : <strong><?= $abo_type; ?></strong>
                            <?php
                            if ($proprio['sub_state'] == 'grace') {
                            ?>
                                <br>Attention, ce membre est en période de grâce.
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col">
                <h2 class="mb-0"><?= $annonce['title']; ?> <i class="fa <?= $verify_state; ?>" title="<?= $verify_text; ?>"></i></h2>
                <p><?= $annonce['unique_reference']; ?></p>
            </div>
            <?php
            if ($user['access_level'] == 10 && $user['active_plan'] > 1) {
                if (empty($annonce['to_review'])) {
            ?>
                    <div class="col-auto text-right">
                        <a href="<?= site_url('annonce/askForVerify/' . $annonce['unique_id']); ?>" class="btn btn-success" onclick="return confirm('Confirmez-vous vouloir demander à Albert de vérifier cette annonce ?')"><i class="fa fa-check me-2"></i>Demander la vérification</a>
                    </div>
                    <?php
                } else {
                    if (empty($annonce['is_reviewed_by_agent'])) {
                    ?>
                        <div class="col-auto text-right">
                            <div class="alert alert-warning">
                                Cette annonce est en cours de vérification par nos agents.
                            </div>
                        </div>
                <?php
                    }
                }
            }

            if ($user['access_level'] >= 50 && empty($annonce['is_reviewed_by_agent'])) {
                ?>
                <div class="col-auto text-right">
                    <a href="<?= site_url('annonce/markAsVerified/' . $annonce['unique_id']); ?>" class="btn btn-success" onclick="return confirm('Confirmez-vous vouloir marquer cette annonce comme vérifiée ?')"><i class="fa fa-check me-2"></i>Marquer comme vérifiée</a>
                </div>
            <?php
            }
            ?>

            <div class="col-auto text-right">
                <a href="<?= site_url('annonce/edit/' . $annonce['unique_id']); ?>" class="btn btn-info"><?= ALBERT_MODIFIER; ?></a>
            </div>
        </div>

        <div class="row">

            <?php
            if (!empty($annonce['deleted'])) {
            ?>
                <div class="col-md-12">
                    <div class="alert alert-danger"><?= ALBERT_ATTENTION_CETTE_ANNONCE_EST_DESACTIVEE; ?></div>
                </div>
            <?php
            }

            if (!empty($annonce['free_note'])) {
                $col_width = (empty($annonce['autonomy_value'])) ? 12 : 8;

            ?>
                <div class="col-md-<?= $col_width; ?>">
                    <div class="alert alert-pink">
                        <p class="mb-0"><strong><?= ALBERT_NOTE_LIBRE; ?> :</strong></p>
                        <p class="mb-0"><?= nl2br($annonce['free_note']); ?></p>
                    </div>
                </div>
            <?php
            }

            if (!empty($annonce['autonomy_value'])) {
            ?>
                <div class="col-md-4">
                    <div class="alert alert-dark text-center">
                        <p class="mb-0"><strong>Autonomie de l'annonce :</strong></p>
                        <p class="mb-0 display-6"><?= $annonce['autonomy_value']; ?></p>
                    </div>
                </div>
            <?php
            }

            if ($user['access_level'] >= 50) {
                $col1 = 6;
                $col2 = 6;
            } else {
                $col2 = 12;
            }
            if ($user['access_level'] >= 50) {
            ?>
                <div class="col-md-<?= $col1; ?> mb-4">
                    <div class="card">
                        <iframe src="https://ia-chat.albertsav.com/?ref=<?= $annonce['unique_reference']; ?>" width="100%" height="472px" class="rounded" frameborder="0"></iframe>
                    </div>
                </div>

                <div class="col-md-<?= $col2; ?> mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Statistiques du logement</h4>
                            <div id="annonces_stats">
                                <ul class="nav nav-tabs nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#daily_chart_tab">
                                            <span>Aujourd'hui</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#weekly_chart_tab">
                                            <span>Cette semaine</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#monthly_chart_tab">
                                            <span>Ce mois-ci</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="daily_chart_tab">
                                        <canvas id="daily_chart"></canvas>
                                    </div>
                                    <div class="tab-pane fade" id="weekly_chart_tab">
                                        <canvas id="weekly_chart"></canvas>
                                    </div>
                                    <div class="tab-pane fade" id="monthly_chart_tab">
                                        <canvas id="monthly_chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>


            <?php
            if ($user['access_level'] >= 50) {
            ?>
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Ajouter une intervention sur ce logement</h4>
                                    <div class="d-flex justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900" data-cue="slideInDown" data-disabled="true" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                                        <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="500" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;"><button class="btn btn-lg btn-primary rounded me-2 addStat" data-type="call"><i class="fa fa-phone me-2"></i> Appel reçu</button></span>
                                        <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1500ms; animation-direction: normal; animation-fill-mode: both;"><button class="btn btn-lg btn-purple rounded me-2 addStat" data-type="message"><i class="fa fa-comments me-2"></i> Conversation</button></span>
                                        <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1500ms; animation-direction: normal; animation-fill-mode: both;"><button class="btn btn-lg btn-yellow rounded me-2 addStat" data-type="event"><i class="fa fa-explosion me-2"></i> Incident</button></span>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- <h4>Ajouter une intervention sur ce logement</h4>
                                    <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900" data-cue="slideInDown" data-disabled="true" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                                        <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="500" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;"><a class="btn btn-lg btn-primary rounded me-2"><i class="fa fa-phone me-2"></i> Appel reçu</a></span>
                                        <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="700" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1200ms; animation-direction: normal; animation-fill-mode: both;"><a class="btn btn-lg btn-green rounded me-2"><i class="fa fa-comments me-2"></i> Message reçu</a></span>
                                        <span data-cue="slideInDown" data-group="page-title-buttons" data-delay="900" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1500ms; animation-direction: normal; animation-fill-mode: both;"><a class="btn btn-lg btn-yellow rounded"><i class="fa fa-explosion me-2"></i> Incident</a></span>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            <?php
            }
            ?>
            <div class="col-md-4">
                <div class="card mb-5">
                    <div class="card-body">
                        <p class="mb-0"><i class="fa-solid fa-building-user me-2"></i><strong><?= ALBERT_PROPRIETAIRE; ?> :</strong></p>
                        <p class="text-info"><strong><a href="<?= site_url('user/' . $proprio['unique_id']); ?>" class="text-info"><?= $proprio['username']; ?></a></strong></p>
                        <p class="mb-0"><?= $proprio['first_name'] . ' ' . strtoupper($proprio['last_name']); ?></p>
                        <p class=""><?= $proprio['email']; ?></p>
                        <p class="mb-0"><strong><?= ALBERT_LIGNE_DIRECTE; ?> :</strong> <?= $proprio['direct_phone']; ?></p>
                        <p class="mb-0"><strong><?= ALBERT_NUMERO_DURGENCE; ?> :</strong> <?= $proprio['emergency_phone']; ?></p>
                        <hr class="my-2">
                        <p class="mb-0"><strong><?= ALBERT_N_SERVICE_NETTOYAGE; ?> :</strong> <?= $proprio['cleaning_number'] ?? 'NC'; ?></p>
                        <p class="mb-0"><strong><?= ALBERT_N_SERVICE_TECHNIQUE; ?> :</strong> <?= $proprio['technical_service_number'] ?? 'NC'; ?></p>
                        <?php
                        if (!empty($proprio['channel_manager'])) {
                        ?>
                            <p class="mt-4 mb-0"><strong><?= ALBERT_CHANNEL_MANAGER; ?> :</strong></p>
                            <p class="mb-0"><a href="<?= $proprio['channel_manager']; ?>" target="_blank"><?= $proprio['channel_manager']; ?></a></p>
                        <?php
                        }

                        if (!empty($proprio['use_jaffiche_complet'])) {
                        ?>
                            <div class="row">

                                <div class="col-md-8">
                                    <p class="mb-0"><strong>Nom du groupe</strong> :</p>
                                    <p class="mb-0"><?= $proprio['jaffiche_complet_group_name']; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?= site_url('assets/img/jaffiche-complet.png'); ?>" alt="J'affiche complet logo" class="img-fluid">
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="card mb-5">
                    <div class="card-body">
                        <p class="mb-0"><i class="fa-solid fa-location me-2"></i><strong><?= ALBERT_ADRESSE; ?> :</strong></p>
                        <p class="mb-0"><?= $annonce['address']; ?></p>
                        <p><?= $annonce['zipcode']; ?> <?= $annonce['city']; ?> <?= $annonce['country']; ?></p>

                        <hr class="my-4">
                        <p class="mb-0"><i class="fa-solid fa-moon me-2"></i><strong><?= ALBERT_SAV_23H_09H; ?> :</strong> <?= (!empty($annonce['user_makes_sav'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-body">
                        <p class="mb-0"><i class="fa-regular fa-rectangle-list me-2"></i><strong><?= ALBERT_PLATEFORMES; ?> :</strong></p>
                        <?php
                        if (!empty($annonce['booking_link'])) {
                        ?>

                            <p class="mb-1"><a href="<?= $annonce['booking_link']; ?>" target="_blank" class="btn btn-primary w-100" style="background-color: #003580;border: none;">Booking</a></p>
                        <?php
                        }

                        if (!empty($annonce['airbnb_link'])) {
                        ?>

                            <p class="mb-1"><a href="<?= $annonce['airbnb_link']; ?>" target="_blank" class="btn btn-primary w-100" style="background-color: #FF5A5F;border: none;">Airbnb</a></p>
                        <?php
                        }

                        if (!empty($annonce['leboncoin_link'])) {
                        ?>

                            <p class="mb-1"><a href="<?= $annonce['leboncoin_link']; ?>" target="_blank" class="btn btn-primary w-100" style="background-color: #ff6e14;border: none;">Leboncoin</a></p>
                        <?php
                        }

                        if (!empty($annonce['abritel_link'])) {
                        ?>

                            <p class="mb-1"><a href="<?= $annonce['abritel_link']; ?>" target="_blank" class="btn btn-primary w-100" style="background-color: #0067db;border: none;">Abritel</a></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <?php
                if (!empty($proprio['channel_manager_used'])) {
                    $channel_item_state = (empty($annonce['channel_item_id'])) ? 'times text-danger' : 'check text-success';
                ?>
                    <div class="card mb-5">
                        <div class="card-header">
                            <h6 class="mb-0">Identification Channel manager</h6>
                        </div>
                        <div class="card-body py-3 pb-5">
                            <p class="mb-0"><i class="fa-regular fa-rectangle-list me-2"></i><strong>ID Unique Annonce : <i class="fa fa-<?= $channel_item_state; ?>"></i></strong></p>

                            <?php
                            if (!empty($annonce['channel_item_id'])) {
                            ?>
                                <p class="mb-0"><?= $annonce['channel_item_id']; ?></p>
                            <?php
                            } else {
                            ?>
                                <a href="<?= site_url('annonce/handleChannelID/' . $annonce['unique_id']); ?>" class="btn btn-primary w-100">Gérer</a>
                            <?php
                            }
                            ?>


                        </div>
                    </div>
                <?php
                }

                if (!empty($annonce['platform_reference'])) {
                    $channel_item_state = (empty($annonce['platform_reference'])) ? 'airbnb text-danger' : 'airbnb text-success';
                ?>
                    <div class="card mb-5">
                        <div class="card-header">
                            <h6 class="mb-0">Airbnb ID</h6>
                        </div>
                        <div class="card-body py-3 pb-5">
                            <p class="mb-0"><i class="fa-regular fa-rectangle-list me-2"></i><strong>ID Unique Annonce : <i class="fa-brands fa-<?= $channel_item_state; ?>"></i></strong></p>

                            <?php
                            if (!empty($annonce['platform_reference'])) {
                            ?>
                                <p class="mb-0"><?= $annonce['platform_reference']; ?></p>
                            <?php
                            }
                            ?>


                        </div>
                    </div>
                <?php
                }

                if ($proprio['channel_manager_used'] == 1) {
                ?>
                    <div class="card mb-5">
                        <div class="card-header">
                            <h6 class="mb-0">Informations Beds24</h6>
                        </div>
                        <div class="card-body py-3 pb-5">
                            <form action="<?= site_url('annonces/update'); ?>" method="POST">
                                <input type="hidden" name="unique_id" value="<?= $annonce['unique_id']; ?>">
                                <input type="hidden" name="annonce_id" value="<?= $annonce['id']; ?>">

                                <label for="beds24_property_id">Property ID</label>
                                <input type="text" class="form-control mb-3" name="beds24_property_id" id="beds24_property_id" placeholder="Property ID" value="<?= $annonce['beds24_property_id'] ?? ''; ?>">

                                <label for="beds24_room_id">Room ID</label>
                                <input type="text" class="form-control mb-3" name="beds24_room_id" id="beds24_room_id" placeholder="Room ID" value="<?= $annonce['beds24_room_id'] ?? ''; ?>">

                                <button class="btn btn-gradient gradient-7">Mettre à jour</button>
                            </form>
                        </div>
                    </div>
                <?php
                }
                ?>

                <div class="card">
                    <div class="card-body">
                        <p class="mb-0"><strong><?= ALBERT_MESSAGERIE_CENTRALISEE; ?> :</strong></p>
                        <p><?= (!empty($annonce['is_centralized_messagerie'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>

                        <p class="mb-0"><strong><?= ALBERT_DUREE_MINIMUM_DU_SEJOUR; ?> :</strong></p>
                        <p><?= $annonce['minimum_travel_duration']; ?> jours</p>

                        <p class="mb-0"><strong><?= ALBERT_DUREE_MAXIMUM_DU_SEJOUR; ?> :</strong></p>
                        <p><?= $annonce['maximum_travel_duration']; ?> jours</p>

                        <p class="mb-0"><strong><?= ALBERT_HEURE_MAXIMUM_DE_RESERVATION; ?> :</strong></p>
                        <p><?= $annonce['limit_reservation_hour_same_day']; ?></p>

                        <p class="mb-0"><strong><?= ALBERT_FREQUENCE_RESERVATION_LOGEMENT; ?> :</strong></p>
                        <p><?= $annonce['month_reservation_average']; ?> par mois</p>

                        <p class="mb-0"><strong><?= ALBERT_ENTREE_AUTONOME; ?> :</strong></p>
                        <p><?= (!empty($annonce['is_self_entry'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>

                        <p class="mb-0"><strong><?= ALBERT_MESSAGES_AUTOMATIQUES; ?> :</strong></p>
                        <p><?= (!empty($annonce['is_automatic_message'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>

                        <?php
                        if (!empty($annonce['is_automatic_message']) && !empty($annonce['automatic_message_reception'])) {
                        ?>
                            <p class="mb-0"><strong>Message :</strong></p>
                            <p><?= nl2br($annonce['automatic_message_reception']); ?></p>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <?php
                if ($user['access_level'] < 50) {
                ?>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Statistiques du logement</h4>

                                    <div id="annonces_stats">
                                        <ul class="nav nav-tabs nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#daily_chart_tab">
                                                    <span>Aujourd'hui</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#weekly_chart_tab">
                                                    <span>Cette semaine</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#monthly_chart_tab">
                                                    <span>Ce mois-ci</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="daily_chart_tab">
                                                <canvas id="daily_chart"></canvas>
                                            </div>
                                            <div class="tab-pane fade" id="weekly_chart_tab">
                                                <canvas id="weekly_chart"></canvas>
                                            </div>
                                            <div class="tab-pane fade" id="monthly_chart_tab">
                                                <canvas id="monthly_chart"></canvas>
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
                <!-- <div class="card">
                    <div class="card-body"> -->
                <?php
                switch ($annonce['guide_state']) {
                    case 'check-in-done':
                ?>
                        <div class="alert alert-info">
                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Le logement est occupé.</p>
                                </div>
                                <div class="col-auto">
                                    <form action="<?= site_url('guide/markCheckOutAsDone'); ?>" method="POST" enctype="multipart/form-data" target="_blank">
                                        <input type="hidden" name="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">
                                        <input type="hidden" name="cleaning_rate" id="notation" value="">
                                        <input type="hidden" name="name" value="Albert SAV">

                                        <button class="btn btn-primary" onclick="return confirm('Confirmez-vous le check-out comme étant fait et le logement en attente de ménage ?');">Forcer le check-out</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                        break;

                    case 'check-out-done':
                    ?>
                        <div class="alert alert-warning">
                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Le logement est actuellement en attente de nettoyage.</p>
                                </div>
                                <div class="col-auto">
                                    <form action="<?= site_url('guide/markCleaningAsDone'); ?>" method="POST" target="_blank">
                                        <input type="hidden" name="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">
                                        <input type="hidden" name="cleaning_rate" id="notation" value="">
                                        <input type="hidden" name="name" value="Albert SAV">

                                        <button class="btn btn-warning" onclick="return confirm('Confirmez-vous le ménage comme étant fait et le logement disponible pour un check-in ?');">Forcer le nettoyage</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php

                        break;

                    case 'cleaning-done':
                    ?>
                        <div class="alert alert-success">
                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Le logement est prêt</p>
                                </div>
                            </div>
                        </div>
                <?php
                        break;
                }
                ?>
                <!-- </div>
                </div> -->

                <?php
                if (!empty($current_booking)) {
                ?>
                    <div class="card mb-4">
                        <div class="card-header bg-dark">
                            <p class="mb-0 fw-bold text-white">Un séjour est en cours sur ce logement</p>
                        </div>
                        <div class="card-body">
                            <?php
                            if (!empty($current_booking['platform'])) {
                            ?>
                                <p class="mb-0"><strong>Réservation via</strong> : <?= $current_booking['platform']; ?></p>
                            <?php
                            }
                            ?>
                            <p class="mb-0"><strong>N° de réservation</strong> : <?= $current_booking['booking_id']; ?></p>
                            <p class="mb-2"><strong>Dates du séjour</strong> : du <?= APPUP::getFullDate($current_booking['booking_start_date'], false); ?> au <?= APPUP::getFullDate($current_booking['booking_end_date'], false); ?></p>
                            <p class="mb-0"><strong>Voyageur</strong> : <?= $current_booking['first_name'] . ' ' . $current_booking['last_name']; ?></p>
                            <p class="mb-2"><strong>N° téléphone</strong> : <?= $current_booking['phone'] ?? '-'; ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>



                <div class="col-md-12 mb-4">
                    <div class="card bg-dark">
                        <div class="card-body p-2">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <h2 class="text-white mb-0 ms-3 d-inline"><i class="fa-solid fa-spray-can-sparkles"></i></h2>
                                </div>
                                <div class="col">
                                    <a href="<?= site_url('annonce/manageGuide/' . $annonce['unique_id']); ?>" class="btn btn-white w-100">
                                        <div class="row w-100">
                                            <div class="col">Gérer le guide d'entée/ménage du logement <i class="fa fa-chevron-right ms-2"></i></div>
                                            <div class="col-auto">
                                                <span class="bg-danger p-2 rounded text-white blink" style="background: #ed281a !important;">NEW !</span>
                                            </div>
                                        </div>
                                    </a>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <?php
                if (!empty($annonce['aprobation_rules'])) {
                ?>
                    <div class="col-md-12">
                        <div class="alert alert-dark">
                            <p class="mb-0"><strong><?= ALBERT_REGLES_DAPPROBATION_DE_RESERVATION; ?> :</strong></p>
                            <p class="mb-0"><?= nl2br($annonce['aprobation_rules']); ?></p>
                        </div>
                    </div>
                <?php
                }

                if (!empty($annonce['recurring_answers'])) {
                ?>
                    <div class="col-md-12">
                        <div class="alert alert-dark">
                            <p class="mb-0"><strong>Réponses récurrentes :</strong></p>
                            <p class="mb-0"><?= nl2br($annonce['recurring_answers']); ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>



                <div class="col-md-12">
                    <div class="alert alert-info">
                        <p class="mb-0"><strong><?= ALBERT_TYPE_DE_SAV; ?> :</strong> <?= ($annonce['sav_type'] == 'strict') ? ALBERT_STRICT : ALBERT_JOVIAL; ?></p>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="mb-0"><strong><?= ALBERT_TYPE_DE_LOGEMENT; ?> :</strong> <?= ($annonce['type'] == 'flat') ? ALBERT_APPARTEMENT : ALBERT_MAISON; ?></p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-0"><strong><?= ALBERT_SUPERFICIE; ?> :</strong> <?= $annonce['size']; ?>m<sup>2</sup></p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-0"><strong>Nombre de couchages :</strong> <?= $annonce['nb_couchages']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-0"><strong><?= ALBERT_ETAGE; ?> :</strong> <?= $annonce['floor']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-0"><strong><?= ALBERT_ASCENSEUR; ?> :</strong> <?= (!empty($annonce['is_elevator'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>
                            </div>

                            <div class="col-md-6">
                                <p class="mb-0"><strong><?= ALBERT_ENTREE_AUTONOME_2; ?> :</strong> <?= (!empty($annonce['is_self_entry'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>
                            </div>

                            <div class="col-md-6">
                                <p class="mb-0"><strong><?= ALBERT_PARKING; ?> :</strong> <?= (!empty($annonce['is_parking'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>
                            </div>

                            <?php
                            if (!empty($annonce['parking_possibilities'])) {
                            ?>
                                <div class="col-md-12">
                                    <p class="mb-0"><strong><?= ALBERT_POSSIBILITES_STATIONNEMENT; ?> :</strong></p>
                                    <p><?= $annonce['parking_possibilities']; ?></p>
                                </div>
                            <?php
                            }
                            ?>


                            <?php
                            if (!empty($annonce['building_code']) || !empty($annonce['key_box_code'])) {
                            ?>
                                <hr class="my-3">
                            <?php
                            }
                            if (!empty($annonce['building_code'])) {
                            ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong><?= ALBERT_CODE_IMMEUBLE; ?> :</strong> <?= $annonce['building_code']; ?></p>
                                </div>
                            <?php
                            }

                            if (!empty($annonce['key_box_code'])) {
                            ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong><?= ALBERT_CODE_LOGEMENT_BOITE_A_CLEF; ?> :</strong> <?= $annonce['key_box_code']; ?></p>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="mb-0"><i class="fa-solid fa-person-walking-luggage me-2"></i><strong><?= ALBERT_HEURE_DARRIVEE; ?> :</strong> <?= $annonce['arrival_hour']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-0"><i class="fa-solid fa-person-walking-arrow-right me-2"></i><strong><?= ALBERT_HEURE_DE_DEPART; ?> :</strong> <?= $annonce['leaving_hour']; ?></p>
                            </div>
                            <hr class="my-3">

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0"><strong><?= ALBERT_EARLY_CHECK_IN; ?> :</strong> <?= (!empty($annonce['early_check_in'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>
                                    </div>
                                    <?php
                                    if (!empty($annonce['early_check_in'])) {
                                    ?>
                                        <div class="col-md-6">
                                            <p class="mb-0"><strong><?= ALBERT_REGLES; ?> :</strong> <?= $annonce['early_check_rules']; ?></p>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0"><strong><?= ALBERT_LATE_CHECK_OUT; ?> :</strong> <?= (!empty($annonce['late_check_out'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>
                                    </div>
                                    <?php
                                    if (!empty($annonce['late_check_out'])) {
                                    ?>
                                        <div class="col-md-6">
                                            <p class="mb-0"><strong><?= ALBERT_REGLES; ?> :</strong> <?= $annonce['late_check_rules']; ?></p>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>


                            <?php

                            ?>
                            <hr class="my-3">
                            <div class="col-md-12">
                                <p class="mb-0"><strong><?= ALBERT_CONSIGNE_DEPOT_BAGAGES; ?> :</strong> <?= (!empty($annonce['is_bags_deposit'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>
                            </div>

                            <?php
                            if (!empty($annonce['is_bags_deposit'])) {
                            ?>
                                <div class="col-md-12">
                                    <p class="mb-0"><strong><?= ALBERT_DETAILS_DE_LA_CONSIGNE; ?> :</strong> <?= $annonce['bags_deposit_rules']; ?></p>
                                </div>
                            <?php
                            }
                            ?>
                            <hr class="my-3">
                            <div class="col-md-12">
                                <p class="mb-2"><strong>Lien vidéo check-in</strong> : <?= (!empty($annonce['video_check_in'])) ? $annonce['video_check_in'] : 'Non défini'; ?></p>
                            </div>

                            <div class="col-md-12">
                                <p class="mb-0"><strong>Lien boutique</strong> : <?= (!empty($annonce['shop_link'])) ? $annonce['shop_link'] : 'Non défini'; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="mb-0"><i class="fa-solid fa-credit-card me-2"></i><strong><?= ALBERT_CAUTION; ?> :</strong> <?= (!empty($annonce['is_deposit'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>
                            </div>
                            <?php
                            if (!empty($annonce['is_deposit'])) {
                            ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong><?= ALBERT_REGLES; ?> :</strong> <?= $annonce['deposit_rules']; ?></p>
                                </div>

                                <div class="col-md-12">
                                    <p class="mb-0"><strong><?= ALBERT_RESTITUTION_CAUTION; ?> :</strong> <?= $annonce['deposit_refund']; ?></p>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>

                <div class="card mb-5 bg-info">
                    <div class="card-body">
                        <h5 class="text-white"><?= ALBERT_PHOTOS_DU_LOGEMENT; ?> (<?= count($pictures); ?>)</h5>
                        <a href="<?= site_url('annonce/gallery/' . $annonce['unique_id']); ?>" class="btn btn-white">Accéder à la galerie</a>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row">
                            <?php
                            if (!empty($annonce['guide_link']) && filter_var($annonce['guide_link'], FILTER_VALIDATE_URL) !== false) {
                            ?>
                                Lien du guide d'entrée : <a href="<?= $annonce['guide_link']; ?>" target="_blank" class="btn btn-light text-dark w-100"><?= $annonce['guide_link']; ?></a>
                            <?php
                            }

                            if (!empty($annonce['entry_guide_link'])) {
                            ?>
                                <div class="col-md-6">
                                    <?php
                                    if (filter_var($annonce['entry_guide_link'], FILTER_VALIDATE_URL) !== false) {
                                    ?>
                                        <a href="<?= $annonce['entry_guide_link']; ?>" target="_blank" class="btn btn-light text-dark w-100"><?= ALBERT_GUIDE_DENTREE; ?></a>
                                    <?php
                                    } else {
                                    ?>
                                        <?= $annonce['entry_guide_link']; ?>
                                    <?php
                                    }
                                    ?>

                                </div>
                            <?php
                            }

                            if (!empty($annonce['refund_political_link'])) {
                            ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong><?= ALBERT_POLITIQUE_DANNULATION_AND_REMBOURSEMENTS; ?> :</strong></p>
                                    <?php
                                    $url = $annonce['refund_political_link'];
                                    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
                                    ?>
                                        <a href="<?= $url; ?>" target="_blank"><?= $url; ?></a>
                                    <?php
                                    } else {
                                        echo $url;
                                    }
                                    ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row">
                            <?php
                            if (!empty($equipements_list)) {
                            ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong><?= ALBERT_EQUIPEMENTS; ?> :</strong></p>
                                    <ul class="icon-list bullet-bg bullet-soft-primary">
                                        <?php
                                        foreach ($equipements_list as $equipement) {
                                            if ($equipement['id'] == 9) {
                                        ?>
                                                <li><i class="uil uil-check"></i><?= $annonce['is_other_equipement']; ?></li>
                                            <?php
                                            } else {
                                            ?>
                                                <li><i class="uil uil-check"></i><?= $equipement['name']; ?></li>
                                        <?php
                                            }
                                        }
                                        ?>

                                    </ul>
                                </div>
                            <?php
                            }

                            if (!empty($consommables_list)) {
                            ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong><?= ALBERT_CONSOMMABLES; ?> :</strong></p>
                                    <ul class="icon-list bullet-bg bullet-soft-primary">
                                        <?php
                                        foreach ($consommables_list as $consommable) {
                                            if ($consommable['id'] == 8) {
                                        ?>
                                                <li><i class="uil uil-check"></i><?= $annonce['is_other_consommable']; ?></li>
                                            <?php
                                            } else {
                                            ?>
                                                <li><i class="uil uil-check"></i><?= $consommable['name']; ?></li>
                                        <?php
                                            }
                                        }
                                        ?>

                                    </ul>
                                </div>
                            <?php
                            }

                            if (!empty($reglement_list)) {
                            ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong><?= ALBERT_REGLEMENT_INTERIEUR; ?> :</strong></p>
                                    <ul class="icon-list bullet-bg bullet-soft-primary">
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
                            <?php
                            }

                            if (!empty($annonce['extra_prestations_details'])) {
                            ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong><?= ALBERT_PRESTATIONS_SUPPLEMENTAIRES; ?> :</strong></p>
                                    <p><?= $annonce['extra_prestations_details']; ?></p>
                                </div>
                            <?php
                            }
                            ?>

                            <div class="col-md-6">
                                <p class="mb-0"><strong><?= ALBERT_JET_DES_ORDURES; ?> :</strong></p>
                                <p><?= $annonce['trash_location']; ?></p>
                            </div>


                            <?php

                            if (!empty($annonce['coffe_type'])) {
                            ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong>Type de machine à café :</strong></p>
                                    <p class="mb-0"><?= $coffe_type; ?></p>
                                </div>
                            <?php
                            }
                            ?>

                            <?php
                            if (!empty($annonce['heater_type'])) {
                            ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong><?= ALBERT_TYPE_DE_CHAUFFAGE; ?> :</strong></p>
                                    <p class="mb-0"><?= $annonce['heater_type']; ?></p>
                                </div>
                                <?php
                                if (!empty($annonce['heater_tips'])) {
                                ?>
                                    <div class="col-md-6">
                                        <p class="mb-0"><strong><?= ALBERT_FONCTIONNEMENT_DU_CHAUFFAGE; ?> :</strong></p>
                                        <p><?= $annonce['heater_tips']; ?></p>
                                    </div>
                                <?php
                                }
                            }

                            if (!empty($annonce['have_clim'])) {
                                ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong>Climatisation :</strong></p>
                                    <p class="mb-0"><?= (!empty($annonce['have_clim'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>

                                    <?php
                                    if (!empty($annonce['is_other_clim'])) {
                                    ?>
                                        <p><?= nl2br($annonce['is_other_clim']); ?></p>
                                    <?php
                                    }
                                    ?>
                                </div>
                            <?php
                            }

                            if (!empty($annonce['have_fan'])) {
                            ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong>Ventilateur :</strong></p>
                                    <p class="mb-0"><?= (!empty($annonce['have_fan'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>
                                </div>
                            <?php
                            }

                            if (!empty($annonce['have_electric_dash'])) {
                            ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong>Tableau électrique :</strong></p>
                                    <p class="mb-0"><?= (!empty($annonce['have_electric_dash'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>

                                    <?php
                                    if (!empty($annonce['is_other_electric_dash'])) {
                                    ?>
                                        <p><?= nl2br($annonce['is_other_electric_dash']); ?></p>
                                    <?php
                                    }
                                    ?>
                                </div>
                            <?php
                            }

                            if (!empty($annonce['have_poi_around'])) {
                            ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong>Attractions autour :</strong></p>
                                    <p class="mb-0"><?= (!empty($annonce['have_poi_around'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>

                                    <?php
                                    if (!empty($annonce['is_other_poi_around'])) {
                                    ?>
                                        <p><?= nl2br($annonce['is_other_poi_around']); ?></p>
                                    <?php
                                    }
                                    ?>
                                </div>
                            <?php
                            }

                            ?>
                            <div class="col-md-6">
                                <p class="mb-0"><strong>Local à vélo :</strong></p>
                                <p class="mb-0"><?= (!empty($annonce['bike_room'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>

                                <?php
                                if (!empty($annonce['bike_room_details'])) {
                                ?>
                                    <p><?= nl2br($annonce['bike_room_details']); ?></p>
                                <?php
                                }
                                ?>
                            </div>
                            <?php

                            if (!empty($annonce['have_tv_more_chanels'])) {
                            ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong>Chaines TV supplémentaires :</strong></p>
                                    <p class="mb-0"><?= (!empty($annonce['have_tv_more_chanels'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>

                                    <?php
                                    if (!empty($annonce['is_other_tv_more_chanels'])) {
                                    ?>
                                        <p><?= nl2br($annonce['is_other_tv_more_chanels']); ?></p>
                                    <?php
                                    }
                                    ?>
                                </div>
                            <?php
                            }

                            if (!empty($annonce['have_nego_price'])) {
                            ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong>Prix négociable ?</strong></p>
                                    <p class="mb-0"><?= (!empty($annonce['have_nego_price'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></p>

                                    <?php
                                    if (!empty($annonce['is_other_nego_price'])) {
                                    ?>
                                        <p><?= nl2br($annonce['is_other_nego_price']); ?></p>
                                    <?php
                                    }
                                    ?>
                                </div>
                            <?php
                            }




                            if (!empty($annonce['average_ttt'])) {
                            ?>
                                <div class="col-md-6">
                                    <p class="mb-0"><strong>Temps de trajet moyens de transports</strong></p>
                                    <?php
                                    if (!empty($annonce['average_ttt'])) {
                                    ?>
                                        <p><?= nl2br($annonce['average_ttt']); ?></p>
                                    <?php
                                    }
                                    ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>


                <?php
                if (!empty($annonce['other_points'])) {
                ?>
                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="col-md-12">
                                <p class="mb-0"><strong>Le cerveau d'Albert IA :</strong></p>
                                <p><?= nl2br($annonce['other_points']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>


                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="mb-0"><i class="fa-solid fa-wifi me-2"></i><strong><?= ALBERT_WIFI; ?> : <?= (!empty($annonce['is_wifi'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></strong></p>

                                        <?php
                                        if (!empty($annonce['is_wifi'])) {
                                        ?>
                                            <p class="mb-0"><?= ALBERT_RESEAU; ?> : <?= $annonce['wifi_user']; ?></p>
                                            <p class="mb-0"><?= ALBERT_MOT_DE_PASSE; ?> : <?= $annonce['wifi_password']; ?></p>

                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="mb-0"><i class="fa-solid fa-tv me-2"></i><strong><?= ALBERT_CODE_TELEVISION; ?> : <?= (!empty($annonce['is_tv_code'])) ? '<span class="text-success"><strong>' . ALBERT_OUI . '</strong></span>' : '<span class="text-danger"><strong>' . ALBERT_NON . '</strong></span>'; ?></strong></p>

                                        <?php
                                        if (!empty($annonce['is_tv_code'])) {
                                        ?>
                                            <p class="mb-0"><?= ALBERT_CODE; ?> : <?= $annonce['tv_code']; ?></p>

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
        </div>



        <div class="row mt-5">
            <?php
            if ($user['access_level'] > 10) {
            ?>
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3><?= ALBERT_NOUVEAU_TICKET; ?></h3>
                            <hr class="my-3">
                            <form action="<?= site_url('annonces/addTicket'); ?>" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="annonce_id" value="<?= $annonce['id']; ?>">
                                <input type="hidden" name="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">

                                <div class="mb-4">
                                    <label for="traveller_name"><strong><?= ALBERT_NOM_DU_VOYAGEUR; ?><?= $red_star; ?></strong></label>
                                    <input type="text" name="traveller_name" id="traveller_name" class="form-control" placeholder="<?= ALBERT_NOM_DU_VOYAGEUR; ?>" required>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <label for="traveller_number"><strong><?= ALBERT_NUMERO_DE_TELEPHONE_DU_VOYAGEUR; ?><?= $red_star; ?></strong></label>
                                            <input type="text" name="traveller_number" id="traveller_number" class="form-control" placeholder="<?= ALBERT_NUMERO_DE_TELEPHONE_DU_VOYAGEUR; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <label for="sinister_date"><strong><?= ALBERT_DATE_DU_SINISTRE; ?><?= $red_star; ?></strong></label>
                                            <input type="date" name="sinister_date" id="sinister_date" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="content"><strong><?= ALBERT_CONTENU; ?><?= $red_star; ?></strong></label>
                                    <textarea id="content" name="content" class="form-control" placeholder="<?= ALBERT_INFORMATIONS_A_PROPOS_DU_SINISTRE; ?>" required></textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="other_points"><strong><?= ALBERT_PHOTOS_DU_SINISTRE; ?></strong></label>
                                    <div id="add_picture_zone">
                                        <p><input type="file" name="file[]" required></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-outline-primary btn-sm" id="add_more_picture"><i class="fa fa-plus me-2"></i> <?= ALBERT_AJOUTER; ?></button>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-gradient gradient-7 w-100" onclick="return confirm('<?= ALBERT_CONFIRMEZ_VOUS_LA_CREATION_DE_CE_TICKET; ?>')"><?= ALBERT_CREER_LE_TICKET; ?></button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="col-md-6">
                <h4>Tickets d'évènements</h4>

                <div class="row">
                    <?php
                    if (empty($tickets_list)) {
                    ?>
                        <div class="alert alert-warning">
                            <?= ALBERT_AUCUN_TICKET_POUR_LE_MOMENT; ?>
                        </div>
                        <?php
                    } else {
                        foreach ($tickets_list as $ticket) {
                        ?>
                            <div class="col-md-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="badge bg-pale-dark text-dark rounded py-1 mb-2"><?= ALBERT_DATE_DU_SINISTRE; ?> : <?= APPUP::getFullDate($ticket['sinister_date'], false); ?></span>
                                                <h4 class="mb-1"><?= $ticket['traveller_name']; ?> - <?= $ticket['traveller_number']; ?></h4>
                                                <p class="mb-0 text-body"><?= nl2br($ticket['content']); ?></p>
                                            </div>

                                            <div class="col-md-4">
                                                <p><i class="fa fa-images me-2"></i><strong><?= ALBERT_PHOTOS_DU_SINISTRE; ?></strong></p>
                                                <?php
                                                if (!empty($ticket['pictures'])) {
                                                ?>
                                                    <div class="grid grid-view">
                                                        <div class="row gx-md-8 gy-2 gy-md-4 isotope" style="position: relative; height: 1147.05px;">
                                                            <?php
                                                            foreach ($ticket['pictures'] as $picture) {
                                                                if (empty($picture['deleted'])) {
                                                            ?>
                                                                    <div class="project item col-md-4">
                                                                        <figure class="rounded mb-2">
                                                                            <img src="<?= WS_URL . '/resize.php?key=crop/480x480/' . $picture['file_name']; ?>" alt="" />
                                                                            <a class="item-link" href="<?= $picture['url']; ?>" data-glightbox data-gallery="projects-group-tickets-<?= $ticket['id']; ?>"><i class="uil uil-focus-add"></i></a>
                                                                        </figure>
                                                                    </div>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div class="alert alert-warning"><?= ALBERT_AUCUNE_PHOTO; ?></div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-8 mb-0">
                                                <hr class="my-3">
                                                <p class="small mb-0 text-muted"><?= ALBERT_TICKET_CREE_LE; ?> <?= APPUP::getFullDate($ticket['creation_date']); ?></p>
                                            </div>
                                            <?php
                                            if ($user['access_level'] > 10) {
                                            ?>
                                                <div class="col-md-4 mb-0 text-right">
                                                    <hr class="my-3">
                                                    <a href="<?= site_url('annonce/editTicket/' . $ticket['id'] . '/' . $annonce['unique_id']); ?>" class="btn btn-outline-dark btn-sm mb-0"><?= ALBERT_MODIFIER; ?></a>
                                                    <a href="<?= site_url('annonce/removeTicket/' . $ticket['id'] . '/' . $annonce['unique_id']); ?>" class="btn btn-outline-danger btn-sm mb-0" onclick="return confirm('Confirmez-vous la suppression de ce ticket ?')"><?= ALBERT_SUPPRIMER; ?></a>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col">
                        <h4>Entrées/sorties/ménages</h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= site_url('annonce/viewMoves/' . $annonce['unique_id']); ?>" class="btn btn-primary">Voir tout</a>
                    </div>
                </div>

                <?php
                if (!empty($guide_logs)) {
                ?>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <thead>
                                    <th>
                                        Voyageur
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
                <?php
                } else {
                ?>
                    <div class="alert alert-warning">
                        Aucun mouvement répertorié via le guide Albert.
                    </div>
                <?php
                }
                ?>
            </div>

            <?php

            // if ($user['access_level'] >= 50) {
            ?>
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="card-header fw-bold">
                        Cerveau d'Albert
                    </div>
                    <div class="card-body">
                        <form action="<?= site_url('annonce/updateEmbed'); ?>" method="POST">
                            <input type="hidden" name="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">

                            <div class="mb-4">
                                <label for="other_points"><strong>ID de l'annonce sur la plateforme Airbnb<?= $red_star; ?></strong></label>
                                <input type="text" name="platform_reference" id="platform_reference" class="form-control" value="<?= $annonce['platform_reference']; ?>">
                            </div>

                            <button class="btn btn-gradient gradient-7" type="submit" onclick="return confirm('Confirmez-vous la mise à jour du cerveau ?');">Mettre à jour</button>
                        </form>
                    </div>
                </div>

            </div>
            <?php
            // }

            if (empty($annonce['deleted'])) {
            ?>
                <div class="col-md-12">
                    <a href="<?= site_url('annonce/remove/' . $annonce['unique_id']); ?>" class="btn btn-danger w-100" onclick="return confirm('<?= ALBERT_ATTENTION_EN_DESACTIVANT_CETTE_ANNONCE_NI_LES_UTIL; ?>')"><?= ALBERT_DESACTIVER_CETTE_ANNONCE; ?></a>
                </div>
                <?php
            } else {
                if ($user['access_level'] == 100) {
                ?>
                    <div class="col-md-12">
                        <a href="<?= site_url('annonce/restore/' . $annonce['unique_id']); ?>" class="btn btn-info w-100" onclick="return confirm('<?= ALBERT_ATTENTION_EN_RESTAURANT_CETTE_ANNONCE_LES_UTILISAT; ?>')"><?= ALBERT_RESTAURER_CETTE_ANNONCE; ?></a>
                    </div>
                <?php
                } else {
                ?>
                    <div class="col-md-12">
                        <a href="#!" class="btn btn-secondary w-100"><?= ALBERT_DESACTIVER_CETTE_ANNONCE; ?></a>
                    </div>
            <?php
                }
            }
            ?>
</section>