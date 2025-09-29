<style>
    :root {
        --primary: #00c2a8;
        --border: #e5e7eb;
        --text: #111827;
        --muted: #6b7280;
        --bg: #fff;
        --panel: #fff;
        --panel-alt: #f8fafc;
    }

    /* Overlay inchangé */
    #checkout-overlay {
        position: fixed;
        inset: 0;
        display: none;
        background: rgba(0, 0, 0, .55);
        z-index: 2147483600;
    }

    /* Panel plus large pour donner de l'air au champ CB */
    .checkout-panel {
        position: fixed;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: min(1120px, 96vw);
        /* ↑ largeur max */
        height: min(860px, 94vh);
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 24px 80px rgba(0, 0, 0, .28);
        display: grid;
        grid-template-rows: auto 1fr auto;
        /* pas d'overflow:hidden ici pour éviter toute coupe */
    }

    .checkout-header,
    .checkout-footer {
        padding: 24px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .checkout-header h2 {
        margin: 0;
        font-size: 1.4rem;
        letter-spacing: .2px;
    }

    /* Corps scrollable + colonnes avec largeur mini solide pour la CB */
    .checkout-body {
        display: grid;
        grid-template-columns: minmax(640px, 1.2fr) minmax(320px, .8fr);
        /* ⬅️ garantie min 640px pour la CB */
        gap: 28px;
        padding: 28px;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        overscroll-behavior: contain;
    }

    @media (max-width: 1100px) {
        .checkout-body {
            grid-template-columns: minmax(560px, 1fr) minmax(300px, .8fr);
        }
    }

    @media (max-width: 900px) {
        .checkout-body {
            grid-template-columns: 1fr;
        }
    }

    /* Cartes internes : surtout pas de coupe sur l'iframe */
    .card {
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        padding: 20px;
        background: #fff;
        overflow: visible;
    }

    /* -------- Card Field : hauteur + lisibilité -------- */
    #rc-card-field {
        display: block;
        min-height: 96px;
        /* réserve l'espace */
        padding: 10px 0;
        position: relative;
        z-index: 2;
        transform: translateZ(0);
    }

    /* force l’iframe à une hauteur confortable */
    #rc-card-field>iframe {
        display: block !important;
        width: 100% !important;
        height: 88px !important;
        /* ↑ */
    }

    @media (max-width: 480px) {
        #rc-card-field {
            min-height: 110px;
        }

        #rc-card-field>iframe {
            height: 100px !important;
        }
    }

    /* Champ "Nom complet" (pour l’exemple) */
    .text-input {
        width: 100%;
        border: 1px solid #e5e7eb;
        border-radius: 14px;
        padding: 12px 14px;
        font-size: 18px;
        line-height: 28px;
        outline: none;
    }

    P .text-input:focus {
        border-color: #00c2a8;
        box-shadow: 0 0 0 4px rgba(0, 194, 168, .15);
    }

    /* Pendant le challenge 3DS, on cache la modale */
    .challenge-active #checkout-overlay {
        display: none !important;
    }


    .table:not(.table-borderless) tbody {
        border-top: none !important;
    }
</style>

<div class="container">

    <section class="wrapper image-wrapper bg-image bg-content text-white rounded my-10" data-image-src="<?= site_url('assets/img/photos/bg3.jpg'); ?>" style="border-radius: 24px !important;">
        <div class="container pt-18 pb-16 px-5 px-md-15" style="z-index: 5; position:relative">
            <div class="row gx-0 gy-12 align-items-center">
                <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 content text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
                    <h1 class="display-2 mb-5 text-white">Une dernière étape <?= $user['first_name']; ?></h1>
                    <p class="lead fs-lg lh-sm mb-7 pe-xl-10">Vous êtes à 1 clic de confier la gestion de vos <?= count($annonces_list); ?> annonces à nos équipes ! 🚀</p>
                    <p>Il ne vous reste plus qu'à saisir votre moyen de paiement.</p>

                </div>
                <!--/column -->
                <div class="col-lg-5 offset-lg-1">


                    <!-- Bouton qui ouvre la modale -->
                    <!-- <button id="open-checkout" class="btn btn-white rounded-pill"><i class="fa fa-plus me-2"></i>Enregistrer ma carte</button> -->

                    <div id="checkout-overlay" aria-modal="true" role="dialog">
                        <div class="checkout-panel" role="document">
                            <div class="checkout-header">
                                <h2>Paiement sécurisé</h2>
                            </div>

                            <div class="checkout-body">
                                <div class="card">
                                    <h3 style="margin-top:0">Carte bancaire</h3>
                                    <p class="muted">Vos coordonnées sont chiffrées et sécurisées.</p>

                                    <div id="rc-card-field" style="margin-top:16px;"></div>

                                    <div id="rc-meta" style="margin-top:16px; display:grid; gap:12px;">
                                        <input class="text-input" type="text" name="full_name" placeholder="Nom complet" autocomplete="name" required>
                                    </div>
                                </div>

                                <div class="card summary" style="display:flex; flex-direction:column;">
                                    <h3 style="margin-top:0">Résumé</h3>
                                    <ul style="list-style:none; padding:0; margin:12px 0;">
                                        <li class="muted">Enregistrement du moyen de paiement pour prélèvements futurs.</li>
                                        <li class="muted">3D Secure si nécessaire.</li>
                                        <li class="muted"><strong>Aucun paiement</strong> ne sera réalisé aujourd’hui.</li>
                                    </ul>
                                    <div style="margin-top:auto;">
                                        <button id="submit-card" class="btn btn-primary" style="width:100%;">Valider et continuer</button>
                                        <p class="muted" style="margin-top:8px; font-size:.9rem;">En validant, vous acceptez nos <a href="<?= site_url('conditions-generales-de-vente'); ?>" target="_blank">CGV</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

</div>