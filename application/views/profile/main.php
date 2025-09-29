<section>
    <div class="container pt-2 pt-md-4 pb-8">
        <div class="row">
            <div class="col">
                <?= APPUP::displaySubscriptionState($profile['member_until'], $profile['id'], $user['id']); ?>
            </div>
            <div class="col-auto">
                <a href="<?= site_url('livre-blanc/' . $profile['unique_id']); ?>" class="btn btn-dark">Consulter le livre blanc</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row gx-lg-0 gy-10 align-items-center">
                    <div class="col-md-8">
                        <h2 class="display-4 mb-3">
                            <?= $profile['username']; ?>
                        </h2>
                        <p class="lead">
                            <?= $profile['email']; ?>
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="mb-0"><strong>
                                        <?= ALBERT_PRENOM; ?> :
                                    </strong></p>
                                <p>
                                    <?= $profile['first_name']; ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-0"><strong>
                                        <?= ALBERT_NOM; ?> :
                                    </strong></p>
                                <p>
                                    <?= $profile['last_name']; ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-0"><strong>
                                        <?= ALBERT_LIGNE_DIRECTE; ?> :
                                    </strong></p>
                                <p>
                                    <?= $profile['direct_phone']; ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-0"><strong>
                                        <?= ALBERT_NUMERO_DURGENCE; ?> :
                                    </strong></p>
                                <p>
                                    <?= $profile['emergency_phone']; ?>
                                </p>
                            </div>

                            <div class="col-md-6">
                                <p class="mb-0"><strong>
                                        <?= ALBERT_N_SERVICE_NETTOYAGE; ?> :
                                    </strong></p>
                                <p>
                                    <?= $profile['cleaning_number']; ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-0"><strong>
                                        <?= ALBERT_N_SERVICE_TECHNIQUE; ?> :
                                    </strong></p>
                                <p>
                                    <?= $profile['technical_service_number']; ?>
                                </p>
                            </div>

                            <div class="col-md-12">
                                <p class="mb-0"><strong>
                                        <?= ALBERT_INFORMATIONS_COMPLEMENTAIRES; ?> :
                                    </strong></p>
                                <p>
                                    <?= (!empty($profile['infos_comp'])) ? nl2br($profile['infos_comp']) : ''; ?>
                                </p>
                            </div>
                        </div>
                        <?php

                        if ($user['access_level'] == 100 || $user['id'] == $profile['id']) {
                        ?>
                            <p><a href="<?= site_url('user/edit/' . $profile['unique_id']); ?>" class="btn btn-info"><?=
                                                                                                                        ALBERT_MODIFIER; ?></a></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
            if (!empty($profile['promo_code_infos'])) {
            ?>
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="mb-5">
                                <?= ALBERT_AFFILIATION_2; ?>
                            </h2>

                            <p class="mb-0"><strong>
                                    <?= ALBERT_CODE_PROMO; ?> :
                                </strong></p>
                            <p>
                                <?= $profile['promo_code_infos'] ?? '-'; ?>
                            </p>

                            <p class="mb-0"><strong>
                                    <?= ALBERT_CE_QUALBERT_VOUS_DOIT; ?> :
                                </strong></p>
                            <p>
                                <?= $profile['amount_due']; ?>
                            </p>

                            <p class="mb-0"><strong>Albert vous a déjà versé :</strong></p>
                            <p class="mb-0">
                                <?= $profile['amount_paid']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="col-md-12 mt-5">
                <div class="job-list mb-10">
                    <h3 class="mb-4">
                        <?= ALBERT_ANNONCES2; ?>
                        <?= count($annonces_list) . '/' . $profile['max_annonces']; ?>
                    </h3>
                    <?php
                    if (empty($annonces_list)) {
                    ?>
                        <div class="alert alert-warning">
                            <?= ALBERT_VOUS_NAVEZ_AUCUNE_ANNONCE; ?>
                        </div>
                        <?php
                    } else {

                        foreach ($annonces_list as $annonce) {
                            $type_icon = ($annonce['type'] == 'house') ? 'estate' : 'building';
                            $type_color = ($annonce['type'] == 'house') ? 'green' : 'blue';

                            $style = ($user['access_level'] == 100 && !empty($annonce['deleted'])) ? 'opacity: 0.3; text-decoration: line-through' : '';
                        ?>
                            <a href="<?= site_url('annonce/' . $annonce['unique_id']); ?>" class="card mb-4 lift" style="<?= $style; ?>">
                                <div class="card-body p-5">
                                    <span class="row justify-content-between align-items-center">
                                        <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                            <span class="avatar bg-<?= $type_color; ?> text-white w-9 h-9 fs-20 me-3"><i class="uil uil-<?= $type_icon; ?>"></i></span>
                                            <?= $annonce['title']; ?>
                                        </span>
                                        <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                                            <i class="uil uil-map-marker-minus me-1"></i>
                                            <?= $annonce['zipcode']; ?>
                                            <?= $annonce['city']; ?>
                                            <?php
                                            if (!empty($annonce['channel_item_id'])) {
                                            ?>
                                                <i class="fa-solid fa-house-laptop text-success ms-5" title="Synchro Channel Manager effectuée"></i>
                                            <?php
                                            }

                                            if (!empty($annonce['platform_reference'])) {
                                            ?>
                                                <td><i class="fa-brands fa-airbnb text-success ms-5" title="ID Airbnb OK"></i></td>
                                            <?php
                                            }
                                            ?>
                                        </span>
                                        <span class="d-none d-lg-block col-1 text-center text-body">
                                            <i class="uil uil-angle-right-b"></i>
                                        </span>
                                    </span>
                                </div>
                            </a>
                        <?php
                        }
                        ?>

                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>


    </div>

    </div>
</section>