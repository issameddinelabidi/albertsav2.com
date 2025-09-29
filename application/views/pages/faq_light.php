<section class="wrapper">
    <div class="container py-10 pt-13">

        <div class="swiper-container mb-10" data-margin="20" data-nav="false" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1" data-autoplay="true">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    $pictures = [1, 3, 4, 5, 6, 7];

                    foreach ($pictures as $p) {
                    ?>
                        <div class="swiper-slide">
                            <div class="card shadow">
                                <a href="https://www.youtube.com/@albertserviceclient7236" target="_blank">
                                    <img src="<?= site_url('assets/img/faq/thumb_' . $p . '.jpg'); ?>" alt="" class="w-100 shadow">
                                </a>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mb-5 mt-5 pt-3">
                <div class="card shadow-lg card-border-bottom border-soft-blue">
                    <div class="card-body">
                        <h4>Comment pouvez-vous connaitre mon bien ?</h4>

                        <p>Lorsque vous remplirez le questionnaire de votre annonce, nos questions portent sur
                            votre bien, <strong>mais surtout sur sa viabilité</strong>. </p>
                        <p>C&#39;est-à-dire que nous devons connaître des détails poussés tels que : le type de TV
                            (smart ou non, nombre de télécommandes), les équipements à disposition ainsi que
                            leur fonctionnement pour les plus &quot;insolites&quot;.</p>
                        <p><strong>Nous examinerons aussi les défaillances</strong> que peuvent vivre un voyageur, par
                            exemple : Une fenêtre ou une porte qui nécessite &quot;<strong>un coup de main</strong>&quot; particulier
                            pour son fonctionnement, ou bien le type de création d&#39;eau chaude si jamais le
                            voyageur venait à manquer. </p>
                        <p>Vous pourrez ajouter ou supprimer des informations directement dans votre espace
                            &quot;Albert PROS&quot;</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-12 mb-5">
                <div class="card shadow-lg card-border-bottom border-soft-blue">
                    <div class="card-body">
                        <h4>A qui s'adresse Albert ?</h4>
                        <p>Notre service s&#39;adresse aussi bien <strong>aux petits investisseurs</strong>, qui n&#39;ont que
                            quelques appartements et pas les moyens techniques et financiers
                            d&#39;engager une équipe en CDI pour gérer le service client en continu, mais
                            aussi aux plus gros qui ne souhaitent pas alourdir leur charge de travail <strong>tel
                                que les conciergeries</strong>.</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-12 mb-5">
                <div class="card shadow-lg card-border-bottom border-soft-blue">
                    <div class="card-body">
                        <h4>Combien de temps faut-il pour être opérationnel ?</h4>
                        <p>24 à 72h maximum</p>
                        <p>Dès validation de votre commande, vous recevrez <strong>immédiatement</strong> un accès à votre
                            base de données personnelles et au calendrier pour notre appel stratégique de mise
                            en place.</p>
                        <p>Ce dernier est <strong>possible dès le lendemain</strong> ouvré de votre commande.<br>
                            <strong>Après cet appel, nous faisons partie intégrante de votre équipe pour accomplir
                                vos objectifs !</strong>
                        </p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <div class="col-md-12 mb-5" id="beds24">
                <div class="card shadow-lg card-border-bottom border-soft-blue">
                    <div class="card-body">
                        <h4>Comment me synchroniser à Beds24 ?</h4>
                        <p>Afin de permettre à notre chat d'être connecté à votre compte beds24, quelques étapes de configuration sont à prévoir.</p>
                        <p>Ces étapes ne prendront que quelques minutes de votre temps pour nous permettre de gérer de manière optimale toutes vos réservations Beds24.</p>


                        <p>La première étape consiste à créer votre clé d'API sur votre compte Beds24.</p>

                        <p class="fs-20 fw-bold text-blue">Etape 1</p>
                        <p>Rendez-vous dans l'onglet <strong>Account</strong> puis sélectionnez <strong>Account access</strong>.</p>
                        <img src="<?= site_url('assets/img/faq-channels/beds24/step_1.png'); ?>" style="max-width: 100%;">

                        <p class="fs-20 fw-bold text-blue">Etape 2</p>
                        <p><strong>Saisissez votre mot de passe</strong> afin de confirmer votre identité</p>
                        <img src="<?= site_url('assets/img/faq-channels/beds24/step_2.png'); ?>" style="max-width: 100%;">

                        <p class="fs-20 fw-bold text-blue">Etape 3</p>
                        <p>A cet instant, plusieurs paramètres sont modifiables sur votre compte.<br>
                            <strong>Descendez la page</strong> jusqu'à arriver à la zone "<strong>API KEY</strong>".
                        </p>
                        <img src="<?= site_url('assets/img/faq-channels/beds24/step_3.png'); ?>" style="max-width: 100%;">

                        <p>Remplissez les paramètres comme ci-dessus, en définissant <strong>une clé d'API complexe</strong>.<br>
                            <span class="text-danger">Attention : ne mettez pas votre mot de passe ici</span><br>
                            <em>Cette clé sera utilisée par Albert pour se synchroniser avec Beds24.</em>
                        </p>

                        <p>Une fois votre clé saisie, veillez à bien cliquer sur [<strong>SAVE</strong>] pour prendre en compte vos modifications.</p>

                        <p class="fs-20 fw-bold text-blue">Etape 4</p>
                        <p>Recopiez la clé d'API que vous venez de créer dans le champ approprié dans vos <strong>paramètres</strong></p>
                        <img src="<?= site_url('assets/img/faq-channels/beds24/step_3_1.png'); ?>" style="max-width: 100%;">

                        <p class="fs-20 fw-bold text-blue">Etape 5</p>
                        <p>Rendez-vous dans l'onglet <strong>Properties</strong> puis sélectionnez <strong>Access</strong></p>
                        <img src="<?= site_url('assets/img/faq-channels/beds24/step_4.png'); ?>" style="max-width: 100%;">

                        <p class="fs-20 fw-bold text-blue">Etape 6</p>
                        <p><strong>Sélectionnez un logement</strong> dans la liste.</p>
                        <img src="<?= site_url('assets/img/faq-channels/beds24/step_5.png'); ?>" style="max-width: 100%;">
                        <p>Remplissez le champ "<strong>propKey</strong>" pour le logement sélectionné avec un identifiant unique.<br>
                            <em>Cette clé sera utilisée par Albert pour lier votre annonce Albert à votre logement Beds24.</em>
                        </p>

                        <p>Une fois votre clé saisie, veillez à bien cliquer sur [<strong>SAVE</strong>] pour prendre en compte vos modifications.</p>

                        <p class="fs-20 fw-bold text-blue">Etape 7</p>
                        <p><strong>Rendez-vous sur l'annonce de votre logement Albert</strong> et recherchez la zone afin de gérer votre idenfitiant unique d'API puis cliquez sur <strong>Gérer</strong></p>
                        <img src="<?= site_url('assets/img/faq-channels/beds24/step_6.png'); ?>" style="max-width: 100%;">

                        <p class="fs-20 fw-bold text-blue">Etape 8</p>
                        <p>Collez la "<strong>propKey</strong>" crée en étape 5 dans le champ ci-après puis cliquez sur [<strong>Enregister</strong>]</p>
                        <img src="<?= site_url('assets/img/faq-channels/beds24/step_7.png'); ?>" style="max-width: 100%;">

                        <div class="alert alert-danger">
                            <p class="fw-bold text-danger mb-0">Répétez les étapes 6, 7 et 8 pour tous les logements présents sur votre Channel manager.</p>
                        </div>

                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>





            <!--/column -->
            <?php
            /*
            <div class="col-md-12 mb-5">
                <div class="card shadow-lg card-border-bottom border-soft-blue">
                    <div class="card-body">
                        <h4>Résiliation de l'abonnement</h4>
                        <p>Vous n&#39;avez plus besoin de nos services ?<strong>Nous vous facilitons la vie</strong> !</p>
                        <p>Vous avez accès directement au bouton &quot;Annuler mon abonnement&quot; dans la section paramètre de votre compte.</p>
                        <p>Effet immédiat :)</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
*/
            ?>
            <!--/column -->
        </div>
    </div>
</section>