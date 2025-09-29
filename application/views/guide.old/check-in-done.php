<div class="row gx-0 gy-0">
    <div class="col-12">
        <h5 class="text-white text-center"><?= $annonce['title']; ?></h5>
    </div>
    <?php

    //Localisation du logement
    ?>
    <div class="col-6">
        <div class="item-inner">
            <div class="card bg-soft-primary" data-bs-toggle="modal" data-bs-target="#location-modal">
                <div class="card-body text-center px-2">
                    <h1 class="display-1"><i class="fa fa-location-dot"></i></h1>
                    <h6 class="mb-0"><?= ALBERT_LOCALISATION; ?></h6>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="item-inner">
            <div class="card bg-soft-primary" data-bs-toggle="modal" data-bs-target="#check-in-out-modal">
                <div class="card-body text-center px-2">
                    <h1 class="display-1"><i class="fa fa-clock"></i></h1>
                    <h6 class="mb-0"><?= ALBERT_CHECK_IN_OUT; ?></h6>
                </div>
            </div>
        </div>
    </div>
    <?php

    // if (!empty($annonce['building_code']) OR !empty($annonce['key_box_code'])){
    ?>
    <div class="col-6">
        <div class="item-inner">
            <a href="https://www.tripadvisor.fr/Search?q=<?= $annonce['city']; ?>&blockRedirect=true&geo=1&searchSessionId=B1ECC0003C735FD6184A7161D98F17781677195835638ssid&sid=88BEA01201CD42E9881BF6E28DA5AFEC1677195836487&ssrc=A&rf=1" target="_blank">
                <div class="card bg-soft-primary">
                    <div class="card-body text-center px-2">
                        <h1 class="display-1"><i class="fa fa-walking"></i></h1>
                        <h6 class="mb-0"><?= ALBERT_ACTIVITES; ?></h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <?php
    // }


    if (!empty($annonce['is_wifi'])) {
    ?>
        <div class="col-6">
            <div class="item-inner">
                <div class="card bg-soft-primary" data-bs-toggle="modal" data-bs-target="#wifi-modal">
                    <div class="card-body text-center px-2">
                        <h1 class="display-1"><i class="fa fa-wifi"></i></h1>
                        <h5 class="mb-0"><?= ALBERT_WIFI; ?></h5>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    if (!empty($annonce['reglement_list'])) {
    ?>
        <div class="col-6">
            <div class="item-inner">
                <div class="card bg-soft-primary" data-bs-toggle="modal" data-bs-target="#reglement-modal">
                    <div class="card-body text-center px-2">
                        <h1 class="display-1"><i class="fa fa-tasks"></i></h1>
                        <h6 class="mb-0"><?= ALBERT_REGLEMENT; ?></h6>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    if (!empty($annonce['trash_location'])) {
    ?>
        <div class="col-6">
            <div class="item-inner">
                <div class="card bg-soft-primary" data-bs-toggle="modal" data-bs-target="#trash-modal">
                    <div class="card-body text-center px-2">
                        <h1 class="display-1"><i class="fa fa-recycle"></i></h1>
                        <h6 class="mb-0"><?= ALBERT_ORDURES; ?></h6>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    if (!empty($leaving_procedure)) {
    ?>
        <div class="col-12">
            <div class="item-inner">
                <div class="card bg-soft-primary" data-bs-toggle="modal" data-bs-target="#leaving-procedure-modal">
                    <div class="card-body text-center mx-0">
                        <h1 class="display-1"><i class="fa fa-door-open"></i></h1>
                        <h6 class="mb-0"><?= ALBERT_PROCEDURE_DE_DEPART; ?></h6>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    if (!empty($annonce['entry_guide_link'])) {
    ?>
        <div class="col-12 mb-5">
            <div class="item-inner">
                <div class="card bg-soft-primary">
                    <div class="card-body text-center mx-0">
                        <h1 class="display-1"><i class="fa fa-info-circle"></i></h1>

                        <?php
                        if (filter_var(trim($annonce['entry_guide_link']), FILTER_VALIDATE_URL) !== false) {
                        ?>
                            <a href="<?= $annonce['entry_guide_link']; ?>" target="_blank">
                                <h6 class="mb-0"><?= ALBERT_INFOS_COMPLEMENTAIRES; ?></h6>
                            </a>
                        <?php

                        } else {
                        ?>
                            <p class="text-dark fw-bold"><?= ALBERT_INFOS_COMPLEMENTAIRES; ?></p>
                            <p class="text-dark"><?= $annonce['entry_guide_link']; ?></p>
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
?>

</div>