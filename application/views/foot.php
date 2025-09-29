</div>

<?php
if (empty($dont_show)) {
?>
    <footer class="bg-dark text-inverse">
        <div class="container pt-10 pb-3">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4">
                    <div class="widget">
                        <img class="mb-4" src="<?= site_url('assets/img/logo-light.png'); ?>" alt="" style="max-width: 150px;">

                        <p class="mb-4"><?= ALBERT_2022_TOUS_DROITS_RESERVES; ?></p>
                        <nav class="nav social social-white">
                            <a href="https://www.facebook.com/albertserviceclient" target="_blank"><i class="uil uil-facebook-f"></i></a>
                            <a href="https://www.instagram.com/albert_sav/" target="_blank"><i class="uil uil-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCD46KcXFEk3Ea5kOAJUoVRw/" target="_blank"><i class="uil uil-youtube"></i></a>
                        </nav>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3"><?= ALBERT_RESTONS_EN_CONTACT; ?></h4>
                        <address class="pe-xl-15 pe-xxl-17"><?= ALBERT_1_RUE_DU_LUXEMBOURG; ?><br><?= ALBERT_11100_NARBONNE; ?></address>
                        <a href="mailto:#">contact@albertsav.fr</a><br />
                        <a href="<?= site_url('accueil#contact'); ?>" title="Nous contacter">Formulaire de contact</a>
                        <?php // ALBERT_04_30_17_80_19; 
                        ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3"><?= ALBERT_LIENS_UTILES; ?></h4>
                        <ul class="list-unstyled  mb-0">
                            <li><a href="<?= site_url('mentions-legales'); ?>"><?= ALBERT_MENTIONS_LEGALES; ?></a></li>
                            <li><a href="<?= site_url('politique-de-confidentialite'); ?>"><?= ALBERT_POLITIQUE_DE_CONFIDENTIALITE; ?></a></li>
                            <li><a href="<?= site_url('conditions-generales-de-vente'); ?>"><?= ALBERT_CGV; ?></a></li>
                            <li><a href="<?= site_url('affiliation'); ?>" title="<?= ALBERT_AFFILIATION; ?>"><?= ALBERT_AFFILIATION; ?></a></li>
                            <li><a href="<?= site_url('blog'); ?>" title="Blog">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 mb-5 mt-10 text-center">
                    <p class="mb-0"><?= ALBERT_SITE_DEVELOPPE_PAR; ?> <a href="https://appup.fr" title="Création sites web sur mesure et applications mobiles Belfort Mulhouse" class="text-warning">Appup</a></p>
                </div>
            </div>
        </div>
    </footer>
<?php
}

$full_current_link = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$current_endpoint = $full_current_link;

$endpoint_token = JWT::encode($current_endpoint, JWT_KEY);

if (empty($this->input->cookie("allow_cookie"))) {
?>
    <div id="cookie-banner" class="p-4 gradient-7">
        <div class="row py-1">
            <div class="col-md-8">
                <p class="h4 text-white"><?= ALBERT_NOUS_RESPECTONS_VOTRE_VIE_PRIVEE; ?></p>
                <p class="text-white"><?= ALBERT_NOUS_UTILISONS_LES_COOKIES_POUR_COMPRENDRE_SECURIS; ?></p>
                <p class="mb-3 mb-md-0"><strong><a href="<?= site_url('politique-de-confidentialite'); ?>" title="Politique de confidentialité" class="text-white"><?= ALBERT_CONSULTER_LA_POLITIQUE_DE_CONFIDENTIALITE ?></a></strong></p>
            </div>
            <div class="col-md-2">
                <a href="<?= site_url('Home/acceptCookies?token=' . $endpoint_token); ?>" rel="nofollow" class="btn btn-dark rounded-pill w-100 mb-3 mb-md-0"><?= ALBERT_ACCEPTER; ?></a>

            </div>
            <div class="col-md-2">
                <a href="<?= site_url('Home/declineCookies?token=' . $endpoint_token); ?>" rel="nofollow" class="btn text-white btn-border w-100"><?= ALBERT_REFUSER; ?></a>
            </div>
        </div>
    </div>
<?php
}
?>


<!-- <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div> -->
<script src="<?= site_url('assets/js/plugins.js'); ?>"></script>
<script src="<?= site_url('assets/js/theme.js'); ?>"></script>
<script src="<?= site_url('assets/lib/noty.js'); ?>"></script>
<script src="<?= site_url('assets/js/wow.min.js'); ?>"></script>
<script>
    new WOW().init();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js" integrity="sha512-suUtSPkqYmFd5Ls30Nz6bjDX+TCcfEzhFfqjijfdggsaFZoylvTj+2odBzshs0TCwYrYZhQeCgHgJEkncb2YVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?= site_url('assets/js/appup.js?time=' . time()); ?>"></script>
<script>
    $(document).ready(function() {
        $('#up_to_date_modal').modal('show')

        $('body').on('#close_up_to_date_modal', 'touchstart click', function() {
            $('#up_to_date_modal').hide()
        })



    });
    <?php
    /*
    if (!empty($user) && $user['member_until'] > date('Y-m-d')) {
    } else {
    ?>
        $(document).ready(function() {
            setTimeout(function() {
                $('#promo_modal').modal('show');
            }, 13000); // 15000 millisecondes = 15 secondes

            $(window).on('beforeunload', function(e) {
                // Empêche le comportement par défaut (quitter la page) et montre la modal
                $('#promo_modal').modal('show');

                // Empêche l'événement `beforeunload` de fonctionner
                e.preventDefault();

                // Retourne une chaîne pour afficher un message par défaut (certains navigateurs l'ignorent)
                return '';
            });
        });
    <?php
    }
*/
    ?>
</script>
<?php

switch ($page_type) {
    case 'detail_annonce':
?>
        <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.0/dist/index.bundle.min.js"></script>
        <script src="<?= site_url('assets/js/annonce_detail.js?time=' . time()); ?>"></script>
    <?php
        break;

    case 'stats':
    ?>
        <script>
            $(document).ready(function() {
                new Chart($("#global_stats_chart"), {
                    type: "doughnut",
                    data: {
                        labels: ["Appels", "Conversations", "Incidents"],
                        datasets: [{
                            label: " ",
                            data: [<?= $chart_stats['calls']; ?>, <?= $chart_stats['messages']; ?>, <?= $chart_stats['events']; ?>],
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(54, 162, 235)',
                                'rgb(255, 205, 86)'
                            ],
                        }, ],
                    }
                });
            });
        </script>
    <?php
        break;
}



if (!empty($this->session->flashdata('notif'))) {
    $notif = $this->session->flashdata('notif');
    ?>
    <script>
        new Noty({
            text: "<?= $notif['text']; ?>",
            theme: 'nest',
            type: '<?= $notif['type']; ?>',
            timeout: '4000',
            animation: {
                open: 'animated bounceInRight', // Animate.css class names
                close: 'animated bounceOutRight' // Animate.css class names
            }
        }).show();
    </script>
<?php
}
?>

<script>
    var test_modal = new bootstrap.Modal(
        document.getElementById('cookie_modal')
    )
    test_modal.show()
</script>

<script>
    $(document).ready(function() {
        document.addEventListener("DOMContentLoaded", function() {
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            })
        })
    });
</script>

<script>
    document.getElementById("sendButtonCaptcha").disabled = true;

    function enableBtn() {
        document.getElementById("sendButtonCaptcha").disabled = false;
    }

    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();

        $(this).val('<?= ALBERT_COPIE; ?>');
    }
</script>

<?php
if (empty($dont_show)) {
    if (!empty($user) && $user['access_level'] >= 50) {
    } else {
?>
        <script type="text/javascript">
            window.onload = function() {
                Calendly.initBadgeWidget({
                    url: '<?= APPUP::getCalendlyLink(); ?>',
                    text: '<?= ALBERT_DISCUTONS_EN; ?>',
                    color: '#073b88',
                    textColor: '#ffffff',
                    branding: undefined
                });
            }
        </script>
<?php
    }
}
?>

<script type="text/javascript">
    $(document).ready(function() {

        var quantitiy = 0;
        $('.quantity-right-plus').click(function(e) {

            var field = $(this).attr('data-field')
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#' + field).val());

            // If is not undefined

            quantity = Math.max(3, quantity)
            $('#' + field).val(quantity + 1);


            // Increment

        });

        $('.quantity-left-minus').click(function(e) {
            // Stop acting like a button
            var field = $(this).attr('data-field')

            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#' + field).val());

            // If is not undefined


            // Increment
            if (quantity > 0) {
                quantity = Math.max(3, quantity - 1)
                $('#' + field).val(quantity);
            }
        });

    });
</script>

<script>
    $(document).ready(function() {
        $('#myCheckbox').change(function() {
            if ($(this).is(':checked')) {
                $('#myButton').removeClass('disabled');
            } else {
                $('#myButton').addClass('disabled');
            }
        });
    });
</script>

<img src="https://tracker.metricool.com/c3po.jpg?hash=d39f25e71690f8894bc03d98d4507165" style="width: 1px;height: 1px;position: absolute; bottom: 0px; left: 0px;" />

<?php
if ($page_type == 'ask_for_pm') {
?>
    <script>
        (function() {
            const overlay = document.getElementById('checkout-overlay');
            const openBtn = document.getElementById('open-checkout');
            const closeBtn = document.getElementById('close-checkout');
            const submitBtn = document.getElementById('submit-card');
            const nameInput = document.querySelector('#rc-meta [name="full_name"]');

            // S'assurer que l'overlay est directement sous <body> (anti stacking bugs)
            if (overlay && overlay.parentElement !== document.body) document.body.appendChild(overlay);

            let RCInstance = null,
                cardInstance = null,
                isMounting = false;

            function lockScroll(lock) {
                document.body.style.overflow = lock ? 'hidden' : '';
            }

            async function fetchOrderToken() {
                const r = await fetch('/subscription/getRevolutOrderToken', {
                    credentials: 'same-origin'
                });
                const j = await r.json();
                if (!j || !j.token) throw new Error('Pas de token reçu du backend');
                return j.token;
            }

            async function mountCardField() {
                if (cardInstance || isMounting) return;
                isMounting = true;
                try {
                    const token = await fetchOrderToken();
                    RCInstance = await window.RevolutCheckout(token);

                    // IMPORTANT : le conteneur est VISIBLE à ce moment
                    cardInstance = RCInstance.createCardField({
                        target: document.getElementById('rc-card-field'),
                        locale: 'fr',
                        theme: 'light',
                        showLoadingIndicator: true,
                        styles: {
                            default: {
                                fontFamily: 'system-ui, -apple-system, Segoe UI, Roboto, Inter, sans-serif',
                                fontSize: '14px', // ↑ taille
                                lineHeight: '28px', // ↑ interligne
                                padding: '5px 5px', // ↑ air interne -> champs plus hauts
                                letterSpacing: '0.4px', // un poil plus lisible pour chiffres
                                color: '#111827', // texte plus foncé (meilleur contraste)
                                borderRadius: '16px',
                                border: '1px solid #e5e7eb',
                                backgroundColor: '#ffffff',
                                /* Certaines versions du SDK respectent ceci pour le placeholder; si ignoré, la taille ↑ reste déterminante */
                                placeholderColor: '#6b7280',

                            },
                            // on cible spécifiquement les sous-champs
                            fieldDate: {
                                width: '90px', // largeur minimale pour MM/AA
                                flex: '0 0 100px' // force plus de place
                            },
                            fieldCvc: {
                                minWidth: '80px',
                                flex: '0 0 90px'
                            },
                            fieldNumber: {
                                flex: '1 1 auto' // le numéro prend le reste
                            },
                            focused: {
                                border: '1px solid #00c2a8',
                                boxShadow: '0 0 0 4px rgba(0,194,168,.15)'
                            },
                            invalid: {
                                border: '1px solid #ef4444',
                                boxShadow: '0 0 0 4px rgba(239,68,68,.15)'
                            }
                        },
                        onSuccess() {
                            window.location.href = '<?= site_url('Actions/handleRevolutCard'); ?>';
                        },
                        onError(err) {
                            console.error(err);
                            alert(err?.message || 'Erreur de paiement');
                        },
                        onCancel() {
                            console.log('Paiement annulé');
                        }
                    });
                } finally {
                    isMounting = false;
                }
            }

            function openCheckout() {
                overlay.style.display = 'block';
                lockScroll(true);
                mountCardField();
            }

            function closeCheckout() {
                overlay.style.display = 'none';
                lockScroll(false);
            }
            // openBtn.addEventListener('click', openCheckout);
            


            submitBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const name = (nameInput?.value || '').trim();
                if (!cardInstance) {
                    alert('Le champ carte n’est pas prêt.');
                    return;
                }

                // Fermer la modale AVANT la phase 3DS pour qu’elle ne masque rien
                document.documentElement.classList.add('challenge-active'); // <html> a la classe
                // (si tu préfères) overlay.style.display = 'none';
                submitBtn.disabled = true;

                cardInstance.submit({
                        name,
                        savePaymentMethodFor: 'merchant'
                    })
                    .catch((err) => {
                        // Erreur / abandon : on ré-ouvre la modale pour réessayer
                        console.error(err);
                        alert(err?.message || 'Échec de la vérification/paiement');
                        document.documentElement.classList.remove('challenge-active');
                        // overlay.style.display = 'block'; // si tu utilises la variable overlay
                    })
                    .finally(() => {
                        submitBtn.disabled = false;
                    });

                // NOTE : en cas de succès, ton onSuccess() existant redirige la page
                // window.location.href = '<?= site_url('Actions/handleRevolutCard'); ?>';
            });

            window.addEventListener('load', () => {
                openCheckout();
            });

        })();
    </script>
<?php
}

if ($page_type == 'subscriptions') {
?>

    <script>
        (async () => {
            function ready(fn) {
                document.readyState !== 'loading' ? fn() : document.addEventListener('DOMContentLoaded', fn);
            }
            ready(async () => {

                // 1) S'assurer que le SDK est bien chargé
                if (!window.RevolutCheckout) {
                    console.log('Revolut SDK not loaded. Vérifie la balise <script> du SDK.');
                    return;
                }
                try {
                    const {
                        revolutPay
                    } = await window.RevolutCheckout.payments({
                        publicToken: '<?= REVOLUT_PK; ?>',
                        locale: 'fr'
                    });

                    const orderRes = await fetch('/subscription/getRevolutOrderToken');
                    const order = await orderRes.json();
                    if (!order.token) {
                        console.log('Pas de token reçu du backend');
                        return;
                    }

                    revolutPay.mount('#revolut-pay', {
                        currency: 'EUR',
                        totalAmount: 0,
                        savePaymentMethodForMerchant: true,
                        createOrder: async () => ({
                            publicId: order.token
                        }),
                        buttonStyle: {
                            // Personnalisation + suppression pub
                            variant: 'light', // 'dark' | 'light' | 'light-outlined'
                            size: 'small', // 'large' | 'small'
                            height: '44px',
                            radius: 'large', // 'none' | 'small' | 'large' | 'round'
                            action: 'pay', // 'pay' | 'buy' | 'subscribe' | 'donate'
                            cashback: false // << désactive le bandeau promo
                            // cashbackCurrency: 'EUR' // ne pas mettre
                        }
                    });

                    // (Optionnel) écouter les événements
                    // revolutPay.on('payment', (e) => {
                    //     log('payment event: ' + JSON.stringify(e));
                    //     // Après validation, Revolut redirigera vers redirect_url (défini côté PHP)
                    //     // Sur return URL, on appelle:
                    //     //  - GET /api/orders/{id}        -> pour customer_id
                    //     //  - GET /api/orders/{id}/payments -> pour payment_method.id
                    // });

                    revolutPay.on('payment', (e) => {
                        if (e.type === 'success') {
                            window.location.href = '<?= site_url('Actions/handleRevolutCard'); ?>';
                        }
                    });
                } catch (err) {
                    console.error(err);
                    console.log('Erreur: ' + (err && err.message ? err.message : err));
                }
            });
        })();
    </script>
<?php
}
?>
</body>

</html>