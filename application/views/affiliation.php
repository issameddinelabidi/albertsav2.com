<section class="wrapper">
    <div class="container pt-10 pb-8">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="display-4 mb-10"><?= $page_title; ?></h2>
            </div>
            <div class="col-md-5 position-relative">
                <a href="https://www.youtube.com/watch?v=hM-SFliTbjc" class="btn btn-circle btn-info btn-play ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox=""><i class="icn-caret-right"></i></a>

                <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem; transform: translate3d(0px, -1px, 0px);"></div>
                <figure class="rounded"><img src="./assets/img/photos/affiliation.jpg" alt=""></figure>
            </div>

            <div class="col-md-7">
                <?= ALBERT_NOTRE_MISSION_EST_DE_PERMETTRE_A_UN_MAXIMUM_DEXPLO; ?>
            </div>
            <div class="col-md-5 pt-5">
                <?= ALBERT_VOUS_CHOISIREZ_VOUS_MEME_LES_PREFERENCES_DE_PAIEME; ?>
            </div>
            <div class="col-md-7">
                <h3 class="text-center"><?= ALBERT_DANS_VOTRE_ZONE_PARAMETRES; ?></h3>
                <figure class="rounded"><img src="./assets/img/aff.png" alt=""></figure>
            </div>

            <div class="col-12 text-center">
                <a href="<?= site_url('contact'); ?>" title="<?= ALBERT_NOUS_CONTACTER; ?>" class="btn btn-gradient gradient-7 rounded-pill"><?= ALBERT_NOUS_CONTACTER; ?></a>
            </div>
        </div>
    </div>
</section>