<section class="wrapper bg-light">
    <div class="container pt-11 pt-md-13 pb-11 text-center">
        <div class="row justify-content-center">
            <div class="col-md-9 mx-auto" data-cues="slideInDown" data-group="page-title" data-disabled="true">
                <h1 class="display-2 fs-48 mb-4 px-md-5 px-lg-0" data-cue="slideInDown" data-group="page-title" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;"><?= ALBERT_A_PROPOS_DALBERT_2; ?></h1>

            </div>
            <div class="col-md-8">

                <video controls style="border-radius: 20px;border: 3px solid #222;max-width: 100%;" class="shadow-lg mb-2 mt-4">
                    <source src="<?= site_url('assets/videos/about.mp4'); ?>" type="video/mp4" />
                </video>

            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light position-relative min-vh-70 d-lg-flex align-items-center my-10">
    <div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-50 shadow-lg" data-image-src="<?= site_url('assets/img/gary.jpg'); ?>">
    </div>
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="mt-10 mt-md-11 mt-lg-n10 px-10 px-md-11 ps-lg-0 pe-lg-13 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
                    <h1 class="display-1 mb-5"><?= ALBERT_LE_MOT_DU_FONDATEUR; ?></h1>
                    <p class="lead fs-25 lh-sm mb-7 pe-md-10">Gary GIUNTA</p>

                    <?= ALBERT_JE_ME_METS_A_VOTRE_PLACE_CAR_COMME_VOUS_JE_SUIS_DA; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mb-10">
    <div class="row justify-content-center">
        <div class="col-8 text-center">

            <h1 class="display-2 fs-48 mb-4 px-md-5 px-lg-0"><?= ALBERT_LES_COULISSES; ?></h1>

            <iframe width="100%" height="470" src="https://www.youtube.com/embed/i9-zKvEnsfg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</div>



<section class="wrapper image-wrapper bg-image bg-overlay" data-image-src="<?= site_url('assets/img/office/6.jpg'); ?>">
    <div class="container py-18">
        <div class="row">
            <div class="col-md-6 text-center">
                <h3 class="display-2 text-white text-center mb-5"><?= ALBERT_ENVIE_DECHANGER_EN_VISIO; ?></h3>
                <a href="<?= APPUP::getCalendlyLink(); ?>" target="_blank" class="btn btn-lg btn-gradient gradient-2 rounded-pill"><?= ALBERT_PRENDRE_RDV; ?></a>
            </div>
            <div class="col-md-6 text-center">
                <h3 class="display-2 text-white text-center mb-5"><?= ALBERT_UNE_DEMO_INTERACTIVE; ?></h3>
                <a href="<?= site_url('demo-gratuite'); ?>" title="<?= ALBERT_DEMO_GRATUITE; ?>" class="btn btn-lg btn-gradient gradient-2 rounded-pill"><?= ALBERT_VOIR_LA_DEMO; ?></a>
            </div>
        </div>
    </div>
</section>