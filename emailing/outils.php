<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Outils albert</title>

    <style>
        body {
            color: #fff;
        }

        h2 {
            color: #ccceef;
            font-size: 35px;
            line-height: 40px !important;
            text-align: center;
        }

        .theme-gradient {
            display: inline-block;
            /* background: linear-gradient(90deg, #12B5DE -30%, #7130C3 30%, #FF3BD4 90%) !important; */
            background: #ce00dd;
            text-transform: capitalize;
            -webkit-background-clip: text;

            background-clip: text !important;
            -webkit-text-fill-color: transparent;
        }

        .bg-light-gradient {
            border-style: solid;
            border-width: 0px;
            border-color: transparent;
            border-radius: 8px;
            background: #a200dd;
            background-size: 200% auto;
            transition-duration: 300ms;
            color: var(--color-white);
            font-size: 16px;
            font-weight: 400;
            text-align: center;
            text-decoration: none;
            text-shadow: var(--shadow-light);
            display: inline-block;
            height: 50px;
            line-height: 50px;
            letter-spacing: 0.5px;
            width: auto;
            height: 60px;
            line-height: 60px;
            padding: 0 37px;
            font-size: 17px;
            position: relative;
        }

        .has-bg-light {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease-in-out;
            background: #a200dd;
        }

        p {
            color: #7376aa;
        }

        #tutu {
            display: flex;
            margin-bottom: 20px;
        }

        #tutu {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            /* Espacement horizontal et vertical entre les divs */
        }

        #tutu>div {
            flex: 1 1 calc(50% - 10px);
            /* Ajustement pour compenser la moitié de l'espacement horizontal */
            box-sizing: border-box;
            /* S'assure que padding et bordure sont inclus dans la largeur */
        }

        .btn-start-free {
            padding: 0 28px;
            border-style: solid;
            border-width: 0px;
            border-color: transparent;
            border-radius: 8px;
            background-color: transparent;
            background: #a200dd;
            background-size: 200% auto;
            transition-duration: 300ms;
            color: var(--color-white);
            font-size: 16px;
            font-weight: 400;
            text-align: center;
            text-decoration: none;
            text-shadow: var(--shadow-light);
            display: inline-block;
            height: 50px;
            line-height: 50px;
            letter-spacing: 0.5px;
            width: auto;
            transition: 0.4s;
        }
    </style>
</head>

<body style="margin: 0px; background: #000;">
    <div width="100%" style="background: #000; padding: 0px 0px; font-family: arial; line-height: 28px; height: 100%; width: 100%;">
        <div style="max-width: 700px; padding: 0px; margin: 0px auto; font-size: 14px;text-align: center;">
            <a href="https://albertsav.com"><img src="https://albertsav.com/outils/assets/images/logo/logo.png" width="auto" height="45px;" alt="Logo Albert" style="border: none;margin-top: 30px;" /></a>
            <div style="padding-top: 40px; background: #000;text-align: center;">

                <h2>Profitez gratuitement de nos <span class="theme-gradient">meilleurs outils numériques</span> pour simplifier votre gestion.</h2>
                <a class="bg-light-gradient" href="https://albertsav.com/outils" style="margin-bottom: 40px;">
                    <div class="has-bg-light"></div>
                    <span>Accédez gratuitement à nos outils</span>
                </a>

                <img src="https://albertsav.com/outils/assets/images/separator/separator-top.svg" alt="" width="100%" height="auto">

                <div style="background: #070711;padding-left: 20px;padding-right: 20px;">
                    <div style="text-align: center;padding-top: 30px;">
                        <h3 class="subtitle">
                            <span class="theme-gradient" style="font-size: 24px;">100% GRATUIT !</span>
                        </h3>
                    </div>

                    <h2>Testé sur le terrain avec 8000+ annonces.</h2>

                    <div id="tutu">
                        <div style="background: #0f1021;padding: 25px; text-align: center;">
                            <img src="https://albertsav.com/outils/assets/mocks/guides.png" alt="" style="width: auto;height: 150px;">

                            <h3 class="subtitle" style="font-size: 24px;">
                                <span class="theme-gradient">Guide Albert</span>
                            </h3>

                            <p>Un guide d'accueil personnalisé qui reflète votre propriété et vos voyageurs, alliant humanité, IA, et géolocalisation pour une expérience inégalée. Il s'adapte automatiquement à la langue de vos invités !</p>
                        </div>

                        <div style="background: #0f1021;padding: 25px; text-align: center;">
                            <img src="https://albertsav.com/outils/assets/mocks/dash.png" alt="" style="width: auto;height: 150px;">

                            <h3 class="subtitle" style="font-size: 24px;">
                                <span class="theme-gradient">Interface Albert</span>
                            </h3>

                            <p>Nos outils de base de données pour stocker et organiser efficacement toutes vos informations de location courte durée.Tout est pensé pour que chaque information soit disponible facilement.</p>
                        </div>
                    </div>
                    <div id="tutu">
                        <div style="background: #0f1021;padding: 25px; text-align: center;">
                            <img src="https://albertsav.com/outils/assets/mocks/guides.png" alt="" style="width: auto;height: 150px;">

                            <h3 class="subtitle" style="font-size: 24px;">
                                <span class="theme-gradient">Guide TEAM</span>
                            </h3>

                            <p>Donnez à votre personnel d'entretien le pouvoir de simplicité ! Offrez-leur un environnement de travail plus intelligent et plus efficace.</p>
                        </div>

                        <div style="background: #0f1021;padding: 25px; text-align: center;">
                            <img src="https://albertsav.com/outils/assets/mocks/dash.png" alt="" style="width: auto;height: 150px;">

                            <h3 class="subtitle" style="font-size: 24px;">
                                <span class="theme-gradient">Réceptionniste IA</span>
                            </h3>

                            <p>Une réceptionniste 5* disponible 24/24, connectée à votre base de données et prête à vous assister au quotidien.Chat GPT4o</p>
                        </div>
                    </div>
                    <div id="tutu">
                        <div style="background: #0f1021;padding: 25px; text-align: center;">
                            <img src="https://albertsav.com/outils/assets/mocks/guides.png" alt="" style="width: auto;height: 150px;">

                            <h3 class="subtitle" style="font-size: 24px;">
                                <span class="theme-gradient">Livres Blancs</span>
                            </h3>

                            <p>Suivez la vétusté opérationnelle de votre bien :<br>
                                Gardez un oeil sur l'état opérationnel de votre propriété en suivant régulièrement son usure</p>
                        </div>

                        <div style="background: #0f1021;padding: 25px; text-align: center;">
                            <img src="https://albertsav.com/outils/assets/mocks/dash.png" alt="" style="width: auto;height: 150px;">

                            <h3 class="subtitle" style="font-size: 24px;">
                                <span class="theme-gradient">La séquence Albert</span>
                            </h3>

                            <p>Des modèles de messages qui créent l'effet WoW + nos recommandations de partenaires exclusifs !</p>
                        </div>
                    </div>

                    <img src="https://albertsav.com/outils/assets/images/separator/separator-top.svg" alt="" width="100%" height="auto" style="margin-top: 30px;margin-bottom: 30px;">

                    <div style="text-align: center">
                        <h3 class="subtitle">
                            <span class="theme-gradient" style="text-transform: uppercase;font-size: 24px;">Comment ça marche ?</span>
                        </h3>
                    </div>

                    <h2>Démarrez en 3 étapes</h2>

                    <div style="background: #0f1021;padding: 20px;border-radius: 14px;">

                        <p style="color: #ccceef">1. INSCRIPTION</p>
                        <p>Inscrivez-vous en moins de 30 secondes sur notre plateforme.</p>

                        <p style="color: #ccceef;margin-top: 20px;">2. AJOUT LOGEMENTS</p>
                        <p>Ajoutez vos fiches logements, vos photos, configurez votre marque.</p>

                        <p style="color: #ccceef;margin-top: 20px;">3. CONFIGURATION GUIDES</p>
                        <p>Configurez le comportement de vos guides voyageurs.</p>

                    </div>

                    <div style="text-align: center;margin-top: 30px;padding-bottom: 30px;">
                        <a class="btn-start-free" href="https://albertsav.com/outils">Démarrer gratuitement</a>
                    </div>

                </div>

                <img src="https://albertsav.com/outils/assets/images/separator/separator-bottom.svg" alt="" width="100%" height="auto">

                <p style="font-size: 24px; font-weight: bold; color: #ccceef;text-align: center">Upsells personnalisés</p>

                <!-- <img src="https://albertsav.com/outils/assets/images/mockups/extra.png" alt="Upsells personnalisés" style="width: 100%;"> -->
                <p style="text-align: center;">Albert vous équipe pour mettre en avant des prestations exclusives comme un départ tardif, une bouteille de champagne ou encore un kit charnel, aussi séduisant que ce nouvel outil, et ce, dès la confirmation de chaque réservation.</p>


                <div style="text-align: center">
                    <h3 class="subtitle">
                        <span class="theme-gradient" style="font-size: 24px;">Facilitez le séjour de vos voyageurs</span>
                    </h3>


                    <h2>Une expérience unique</h2>

                    <a class="bg-light-gradient" href="https://albertsav.com/outils" style="margin-bottom: 40px;">
                        <div class="has-bg-light"></div>
                        <span>Testez gratuitement</span>
                    </a>

                    <div style="margin-top: 50px;">
                        <a href="https://albertsav.com"><img src="https://albertsav.com/outils/assets/images/logo/logo.png" width="auto" height="45px;" alt="Logo Albert" style="border: none;" /></a>
                        <p style="font-size: 20px;">Service client spécialisé en location courte durée</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>