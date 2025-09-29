<div class="container">
    <div class="row gy-0">
        <?php
        if (!empty($procedure_list)) {
        ?>
            <div class="col-md-12 mt-3">
                <!-- <h4 class="mb-3 text-start text-color"><i class="fa fa-door-open me-4"></i><?= ALBERT_PROCEDURE_DENTREE; ?></h4> -->

                <div class="swiper-container dots-over" data-margin="5" data-dots="false" data-nav="true" data-autoheight="true">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php
                            $counter = 1;
                            foreach ($procedure_list as $proc) {
                            ?>
                                <div class="swiper-slide">
                                    <p class="text-center fw-bold">Etape <?= $counter; ?></p>
                                    <img src="<?= $proc['file']; ?>" alt="" class="rounded">

                                    <p class="d-block mb-0 mt-3 text-color text-center"><?= nl2br($proc['text']); ?></p>
                                </div>
                            <?php
                                $counter++;
                            }
                            ?>
                            <div class="swiper-slide">
                                <p class="text-center fw-bold">Bienvenue</p>
                                <div id="access_to_guide_zone" data-bs-toggle="modal" data-bs-target="#arrived_modal">
                                    <div id="access_caption" class="row align-items-center">
                                        <p class="px-5">Accéder<br>
                                            Aux guides<br>
                                            De votre logement</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } else {
        ?>
            <p class="text-center fw-bold">Bienvenue</p>
            <div id="access_to_guide_zone" data-bs-toggle="modal" data-bs-target="#arrived_modal">
                <div id="access_caption" class="row align-items-center">
                    <p class="px-5">Accéder<br>
                        Aux guides<br>
                        De votre logement</p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>