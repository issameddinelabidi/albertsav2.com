<section class="wrapper image-wrapper bg-image bg-overlay" data-image-src="<?= site_url('assets/img/office/8.jpg'); ?>">
    <div class="container py-18 pt-13 pb-5">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-8">
                <h3 class="display-2 text-white text-center pb-2"><?= ALBERT_DEMONSTRATION_DE_NOTRE_SERVICE; ?></h3>

                <h5 class="text-white text-center mb-5"><?= ALBERT_DES_CENTAINES_DE_GESTIONNAIRE_SUBISSENT_UN_STRESS; ?></h5>

                <iframe width="100%" class="d-none d-md-block" style="height: 480px;border-radius: 5px;background: rgba(0, 0, 0, 0.5)" src="https://www.youtube.com/embed/wQgA_g691zY?si=uAfyS_l0AdXnaPuY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe width="100%" class="d-sm-block d-md-none" style="height: 200px;border-radius: 5px;background: rgba(0, 0, 0, 0.5)" src="https://www.youtube.com/embed/wQgA_g691zY?si=uAfyS_l0AdXnaPuY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<div class="card">
    <div class="card-body gradient gradient-7 py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="row text-white gy-3">
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div class="me-2">
                                    <h3 class="display-5"><i class="fa fa-check text-white"></i></h3>
                                </div>
                                <div>
                                    <h5 class="mb-1 text-white"><?= ALBERT_DES_EXPERTS_FACONNES_DANS_LARTRAFFINE_DE_LHOTELLER; ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div class="me-2">
                                    <h3 class="display-5"><i class="fa fa-check text-white"></i></h3>
                                </div>
                                <div>
                                    <h5 class="mb-1 text-white"><?= ALBERT_DISPONIBLE_POUR_VOS_VOYAGEURS24H_24_ET_365J_AN; ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div class="me-2">
                                    <h3 class="display-5"><i class="fa fa-check text-white"></i></h3>
                                </div>
                                <div>
                                    <h5 class="mb-1 text-white"><?= ALBERT_RESOLUTION_DES_PROBLEMES; ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div class="me-2">
                                    <h3 class="display-5"><i class="fa fa-check text-white"></i></h3>
                                </div>
                                <div>
                                    <h5 class="mb-1 text-white"><?= ALBERT_PROTECTION_DE_VOTRE_TEMPS_ET_CONCENTRATION; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="wrapper">
    <div class="container py-18 pb-10 pt-13">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h3 class="display-2 text-dark text-center mb-0 pb-0 mt-5"><?= ALBERT_ENVIE_DECHANGER_EN_VISIO; ?></h3>
                <!-- Début de widget en ligne Calendly -->
                <div class="calendly-inline-widget" data-url="<?= APPUP::getCalendlyLink(); ?>" style="min-width:320px;height:850px;"></div>
                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                <!-- Fin de widget en ligne Calendly -->
            </div>
        </div>
    </div>
</section>