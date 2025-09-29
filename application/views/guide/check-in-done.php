<div class="container">
    <div class="row">
        <?php
        if (!empty($annonce['is_wifi'])) {
        ?>

            <div class="col-6">
                <p class="text-uppercase mb-0 fw-bold text-semi">Réseau WIFI</p>
                <p><?= $annonce['wifi_user']; ?></p>
            </div>
            <div class="col-6">
                <p class="text-uppercase mb-0 fw-bold text-semi">Mot de passe</p>
                <p><?= $annonce['wifi_password']; ?></p>
            </div>
        <?php
        }
        ?>
    </div>

    <?php
    if (!empty($current_booking)) {
    ?>
        <div class="card mb-4">
            <div class="card-header main_gradient px-4">
                <p class="mb-0 fw-bold text-white">Bonjour <?= $current_booking['first_name'] . ' ' . $current_booking['last_name']; ?>,<br>voici les informations sur votre séjour</p>
            </div>
            <div class="card-body text-dark p-2 px-4">

                <p class="mb-0"><strong>N° de réservation</strong> : <?= $current_booking['booking_id']; ?></p>
                <p class="mb-2"><strong>Dates du séjour</strong> : du <?= APPUP::getFullDate($current_booking['booking_start_date'], false); ?> au <?= APPUP::getFullDate($current_booking['booking_end_date'], false); ?></p>
            </div>
        </div>
    <?php
    }
    ?>
    <div class="row gx-0 gy-0">
        <?php
        if (!empty($annonce['shop_link'])) {
        ?>
            <a href="<?= $annonce['shop_link']; ?>" target="_blank">
                <div class="box_zone mb-3 shadow-lg background-11" data-bs-toggle="modal" data-bs-target="#infos-comp">
                    <div class="content_box_zone row align-items-center">
                        <div class="col">
                            <p class="text-uppercase fw-bold text-white mb-0 box_title ps-4">
                                Notre<br>
                                Boutique
                            </p>
                        </div>
                        <div class="col-auto align-items-center">
                            <img src="<?= site_url('assets/guides/arrow-right.svg'); ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </a>
        <?php
        }
        ?>

        <a href="https://www.tripadvisor.fr/Search?q=<?= $annonce['city']; ?>&blockRedirect=true&geo=1&searchSessionId=B1ECC0003C735FD6184A7161D98F17781677195835638ssid&sid=88BEA01201CD42E9881BF6E28DA5AFEC1677195836487&ssrc=e&rf=1" target="_blank">
            <div class="box_zone mb-3 shadow-lg background-8">
                <div class="content_box_zone row align-items-center">
                    <div class="col">
                        <p class="text-uppercase fw-bold text-white mb-0 box_title ps-4">
                            Se<br>
                            Restaurer
                        </p>
                    </div>
                    <div class="col-auto align-items-center">
                        <img src="<?= site_url('assets/guides/arrow-right.svg'); ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </a>

        <a href="https://www.tripadvisor.fr/Search?q=<?= $annonce['city']; ?>&blockRedirect=true&geo=1&searchSessionId=B1ECC0003C735FD6184A7161D98F17781677195835638ssid&sid=88BEA01201CD42E9881BF6E28DA5AFEC1677195836487&ssrc=A&rf=1" target="_blank">
            <div class="box_zone mb-3 shadow-lg background-6">
                <div class="content_box_zone row align-items-center">
                    <div class="col">
                        <p class="text-uppercase fw-bold text-white mb-0 box_title ps-4">
                            Trouver des<br>
                            Activités
                        </p>
                    </div>
                    <div class="col-auto align-items-center">
                        <img src="<?= site_url('assets/guides/arrow-right.svg'); ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </a>

        <div class="box_zone mb-3 shadow-lg background-7" data-bs-toggle="modal" data-bs-target="#reglement-modal">
            <div class="content_box_zone row align-items-center">
                <div class="col">
                    <p class="text-uppercase fw-bold text-white mb-0 box_title ps-4">
                        Règlement<br>
                        Intérieur
                    </p>
                </div>
                <div class="col-auto align-items-center">
                    <img src="<?= site_url('assets/guides/arrow-right.svg'); ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="box_zone mb-3 shadow-lg background-5" data-bs-toggle="modal" data-bs-target="#trash-modal">
            <div class="content_box_zone row align-items-center">
                <div class="col">
                    <p class="text-uppercase fw-bold text-white mb-0 box_title ps-4">
                        Jet des<br>
                        Ordures
                    </p>
                </div>
                <div class="col-auto align-items-center">
                    <img src="<?= site_url('assets/guides/arrow-right.svg'); ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="box_zone mb-3 shadow-lg background-4" data-bs-toggle="modal" data-bs-target="#infos-comp">
            <div class="content_box_zone row align-items-center">
                <div class="col">
                    <p class="text-uppercase fw-bold text-white mb-0 box_title ps-4">
                        Informations<br>
                        Complémentaires
                    </p>
                </div>
                <div class="col-auto align-items-center">
                    <img src="<?= site_url('assets/guides/arrow-right.svg'); ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>



        <?php
        if (!empty($depart_autonome)) {
        ?>
            <div class="box_zone mb-3 shadow-lg background-3" data-bs-toggle="modal" data-bs-target="#leaving-procedure-modal">
                <div class="content_box_zone row align-items-center">
                    <div class="col">
                        <p class="text-uppercase fw-bold text-white mb-0 box_title ps-4">
                            Procédure<br>
                            de sortie
                        </p>
                    </div>
                    <div class="col-auto align-items-center">
                        <img src="<?= site_url('assets/guides/arrow-right.svg'); ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</div>