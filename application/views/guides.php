<div class="modal fade" id="register_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog shadow-lg">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <h5 class="modal-title" id="exampleModalLabel"><?= ALBERT_CREEZ_VOTRE_COMPTE_ALBERT; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('actions/register'); ?>" method="POST" id="registerForm" autocomplete="disabled">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-4">
                                <label for="username" class="mb-2"><?= ALBERT_SOCIETE; ?></label>
                                <input type="text" id="username" class="form-control" name="username" placeholder="<?= ALBERT_RAISON_SOCIALE_2; ?>" autocomplete="disabled" required>
                            </div>

                            <div class="form-group mb-4">
                                <label for="email" class="mb-2"><?= ALBERT_VOTRE_EMAIL; ?></label>
                                <input type="text" id="email" class="form-control" name="email" placeholder="<?= ALBERT_VOTRE_EMAIL; ?>" autocomplete="disabled" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="mb-2"><?= ALBERT_VOTRE_MOT_DE_PASSE; ?></label>
                                <input type="password" id="password" class="form-control" name="password" placeholder="<?= ALBERT_VOTRE_MOT_DE_PASSE; ?>" autocomplete="disabled">
                            </div>

                            <!-- <div class="form-group mb-4">
                                        <label for="max_annonces" class="mb-2">Nombre d'annonces autorisées</label>
                                        <input type="number" id="max_annonces" class="form-control" name="max_annonces" placeholder="" min="1" autocomplete="disabled" required>
                                    </div> -->
                        </div>

                        <div class="col-12 pt-2 text-center">
                            <div class="g-recaptcha mb-4" data-sitekey="6Leh200jAAAAAEayxRxi3n_ARw9v8GcKW-g0qNFp" data-callback="enableBtn"></div>

                            <button type="submit" class="btn btn-dark" id="sendButtonCaptcha"><i class="fa fa-user-plus me-3"></i> <?= ALBERT_CREER_LE_COMPTE; ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<section class="wrapper bg-dark angled lower-start">
    <div class="container pt-7 pt-md-11 pb-8">
        <div class="row justify-content-center">
            <div class="col-auto my-5 mb-10">
                <img class="logo-dark" src="<?= site_url('/assets/img/logo-light.png'); ?>" srcset="<?= site_url('assets/img/logo-light@2x.png 2x'); ?>" alt="" width="134">
            </div>
        </div>
        <div class="row gx-0 gy-10 align-items-center">
            <div class="col-lg-7" data-group="page-title" data-delay="600" data-disabled="true">
                <h1 class="display-1 text-white mb-4" data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">Découvrez nos <br>guides voyageurs<br><span class="typer text-secondary text-nowrap" data-delay="100" data-words="gratuits,multilingues..." style="color: black;">guides voyageurs</span><span class="cursor text-primary" data-owner="typer" style="transition: 0.1s; opacity: 1;">|</span></h1>
                <p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15" data-cue="slideInDown" data-group="page-title" data-delay="600" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">Albert est un service client spécialisé dans la location courte durée, avec plus de 8 000 annonces gérées quotidiennement.<br>
                    Nous vous offrons gratuitement les meilleurs outils numériques de gestion.<br>
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#register_modal" title="Inscription gratuite" class="btn btn-lg btn-gradient gradient-7 primary rounded mt-5">Accédez gratuitement à nos outils<i class="fa fa-arrow-right ms-2"></i></a>


                </p>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container py-14 text-center pb-5 pt-20 pb-10">
        <div class="row mt-5">
            <div class="col-md-12 mb-4">
                <h2 class="display-1 fs-60 mb-5 px-md-15 px-lg-0" data-cue="slideInDown" data-group="page-title" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">Profitez de nos outils exclusifs<br><span class="underline-3 style-3 text-warning primary">GRATUITEMENT</span></h2>
            </div>
            <div class="col-auto mx-auto" data-group="page-title">
                <lord-icon src="https://cdn.lordicon.com/hkjhuila.json" trigger="hover" delay="200" colors="primary:#faf9d1,secondary:#4bb3fd" style="width:120px;height:120px">
                </lord-icon>
                <p class="fw-bold">Messagerie</p>
            </div>
            <div class="col-auto mx-auto" data-group="page-title">
                <lord-icon src="https://cdn.lordicon.com/jwqxdsds.json" trigger="hover" colors="primary:#4bb3fd,secondary:#ffc738,tertiary:#e83a30,quaternary:#faf9d1,quinary:#393347" style="width:120px;height:120px">
                </lord-icon>
                <p class="fw-bold">Vérification</p>
            </div>
            <div class="col-auto mx-auto" data-group="page-title">
                <lord-icon src="https://cdn.lordicon.com/kbrfhxbe.json" trigger="hover" colors="primary:#faf9d1,secondary:#4bb3fd,tertiary:#f4c89c,quaternary:#3a3347,quinary:#92140c,senary:#e3c0ac,septenary:#e83a30" style="width:120px;height:120px">
                </lord-icon>
                <p class="fw-bold">Upsells</p>
            </div>
            <div class="col-auto mx-auto" data-group="page-title">
                <lord-icon src="https://cdn.lordicon.com/syxzveba.json" trigger="hover" colors="primary:#3080e8,secondary:#ffc738" style="width:120px;height:120px">
                </lord-icon>
                <p class="fw-bold">Upsells</p>
            </div>
            <div class="col-auto mx-auto" data-group="page-title">
                <lord-icon src="https://cdn.lordicon.com/oocoppch.json" trigger="hover" colors="primary:#e3c0ac,secondary:#104891,tertiary:#3080e8" style="width:120px;height:120px">
                </lord-icon>
                <p class="fw-bold">Accès</p>
            </div>
            <div class="col-auto mx-auto" data-group="page-title">
                <lord-icon src="https://cdn.lordicon.com/fikbvbcf.json" trigger="hover" colors="primary:#ffc738,secondary:#e3c0ac,tertiary:#4bb3fd" style="width:120px;height:120px">
                </lord-icon>
                <p class="fw-bold">Marketing</p>
            </div>
        </div>
    </div>
</section>

<section class="section-frame overflow-hidden">
    <div class="wrapper bg-soft-primary" style="border-radius: 1rem;">
        <div class="container py-5 pb-12">
            <div class="row text-center">
                <div class="col-xl-11 col-xxl-10 mx-auto">
                    <div class="row mt-5 mt-14">

                        <div class="col-md-4 mx-auto" data-cues="slideInDown" data-group="page-title">
                            <lord-icon src="https://cdn.lordicon.com/qotheuuk.json" trigger="hover" colors="primary:#e4e4e4,secondary:#3080e8,tertiary:#4bb3fd,quaternary:#2ca58d,quinary:#30c9e8,senary:#ffc738,septenary:#e83a30,octonary:#92140c,nonary:#f4c89c" style="width:250px;height:250px">
                            </lord-icon>
                            <p class="fw-bold">Votre branding</p>
                            <p>Personnalisez vos couleurs, vos logos et votre image de marque</p>
                        </div>
                        <div class="col-md-4 mx-auto" data-cues="slideInDown" data-group="page-title">
                            <lord-icon src="https://cdn.lordicon.com/gmujkako.json" trigger="hover" colors="primary:#e83a30,secondary:#08a88a,tertiary:#30c9e8,quaternary:#ffc738,quinary:#92140c,senary:#e4e4e4" style="width:250px;height:250px">
                            </lord-icon>
                            <p class="fw-bold">Vos règles</p>
                            <p>Adaptation automatique de vos interractions avec les voyageurs, afin de satisfaire leurs besoins spécifiques ainsi que ceux de votre entreprise</p>
                        </div>
                        <div class="col-md-4 mx-auto" data-cues="slideInDown" data-group="page-title">
                            <lord-icon src="https://cdn.lordicon.com/qnvyexpo.json" trigger="hover" colors="primary:#4bb3fd,secondary:#e4e4e4,tertiary:#ffc738,quaternary:#3080e8" style="width:250px;height:250px">
                            </lord-icon>
                            <p class="fw-bold">Sublimez l'expérience</p>
                            <p>Créez un parcours clair, rapide et sans contact pour vos invités, depuis la réservation jusqu'au départ</p>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container py-14 text-center pb-5 pt-5 pb-10">

        <div class="card bg-soft-green mb-10 mt-14">
            <div class="card-body p-12 py-0 pt-5 ps-0">
                <div class="row gy-10 align-items-center">
                    <div class="col-lg-5 order-lg-2">
                        <div class="post-category mb-3 text-green">Encaissez sans commissions !</div>
                        <h3 class="h1 post-title mb-3">Upsells personnalisés</h3>
                        <p>Albert vous équipe pour mettre en avant des prestations exclusives comme un départ tardif, une bouteille de champagne ou encore un kit charnel, aussi séduisant que ce nouvel outil, et ce, dès la confirmation de chaque réservation.</p>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#register_modal" title="Inscription gratuite" class="more hover link-green">Découvrir</a>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-7">
                        <figure><img class="img-fluid" src="<?= site_url('assets/mockups/extra.png'); ?>" alt=""></figure>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!--/.card-body -->
        </div>

        <div class="row gx-md-8 gx-xl-10">
            <div class="col-lg-6">
                <div class="card bg-soft-yellow mb-10">
                    <div class="card-body p-12 pb-0">
                        <div class="post-category mb-3 text-yellow">Une organisation inégalée</div>
                        <h3 class="h1 post-title mb-3">Guides Albert Team</h3>
                        <p>Offrez à votre personnel d'entretien le pouvoir de simplicité !<br><br>
                            Avec un simple lien ou un QR Code intégré à votre propriété, vos femmes de ménages peuvent déterminer à l'avance si les voyageurs sont présents ou non, optimisant ainsi leur efficacité opérationnelle.<br><br>
                            Elles peuvent également nous faire part de leurs retours sur le voyage et confirmer l'achèvement des tâches cruciales. Offrez-leur un environnement de travail plus intelligent et plus efficace.</p>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#register_modal" title="Inscription gratuite" class="more hover link-yellow">Découvrir</a>
                    </div>
                    <!--/.card-body -->
                    <img class="card-img-bottom" src="<?= site_url('assets/mockups/guides.png'); ?>" alt="">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card bg-dark" style="background: black !important;">
                    <div class="card-body p-12 pb-0">
                        <div class="post-category mb-3 text-blue">Vos données centralisées</div>
                        <h3 class="h1 post-title mb-3 text-white">Interface Albert</h3>
                        <p class="text-white">Une interface épurée pour gérer vos bien en location courte durée !<br><br>Albert vous offre aussi gratuitement nos outils de base de données pour y stocker et organiser efficacement toutes vos informations de location courte durée.<br><br>Des photos aux heures de check-in/check-out en passant par le règlement intérieur et les équipement de chacune de vos propriétés, tout est pensé pour que chaque information soit disponible pour nous et vos voyageurs.</p>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#register_modal" title="Inscription gratuite" class="more hover link-blue">Découvrir</a>
                    </div>
                    <!--/.card-body -->
                    <img class="card-img-bottom" src="<?= site_url('assets/mockups/ipad.png'); ?>" alt="">
                </div>
                <!--/.card -->
            </div>
            <!-- /column -->
        </div>

        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#register_modal" class="btn btn-lg btn-gradient gradient-7 primary rounded mt-10 mb-5">Accédez gratuitement à nos outils<i class="fa fa-arrow-right ms-2"></i></a>
    </div>
</section>