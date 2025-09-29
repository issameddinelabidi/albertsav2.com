<style>
    .table:not(.table-borderless) tbody {
        border-top: none !important;
    }
</style>

<div class="container">

    <div class="row mt-5">
        <div class="col-md-12">
            <h3 class="mb-0">Votre espace dédié à la gestion de votre abonnement</h3>
        </div>
        <?php
        if (empty($annonces_list)) {
        ?>
            <div class="col-md-12">
                <div class="alert alert-warning">
                    <?= ALBERT_VOUS_NAVEZ_AUCUNE_ANNONCE; ?>
                </div>
            </div>
        <?php
        } else {
        ?>
            <input type="hidden" id="active_annonces" value="<?= $active_annonces; ?>">
            <input type="hidden" id="member_until" value="<?= date('Y-m-d', strtotime($user['member_until'])) ?? ''; ?>">
            <div class="col-md-12">
                <p class="mb-0">Vous avez actuellement : <?= $active_annonces; ?>/<?= count($annonces_list); ?> annonces actives</p>
                <p class="small">Montant par logement : <?= number_format($amount_per_annonce / 100, 2, ',', ' '); ?>€</p>
            </div>

            <div class="col-8">

                <!-- Modal de confirmation Restauration -->
                <div class="modal fade" id="restoreConfirmModal" tabindex="-1" aria-hidden="true" style="background: rgba(0, 0, 0, 0.5)">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header pb-0">
                                <h5 class="modal-title mb-0">Confirmer la restauration</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                            </div>
                            <form action="<?= site_url('subscription/restoreProperties'); ?>" method="POST">

                                <div class="modal-body pt-5">
                                    <p>
                                        Vous avez sélectionné <strong id="restoreCount">0</strong> logement(s) inactif(s) à restaurer.
                                    </p>

                                    <!-- (Optionnel) aperçu des IDs -->
                                    <div id="restorePreviewWrap" class="mb-3 d-none">
                                        <label class="form-label">Liste des logements à restaurer :</label>
                                        <ul id="restorePreview" class="small mb-0"></ul>
                                    </div>

                                    <div class="mb-2">
                                        <label for="restoreConfirmInput" class="form-label">
                                            Pour confirmer, tapez <code>restaurer</code> :
                                        </label>
                                        <input type="text" class="form-control" id="restoreConfirmInput" name="restore_word" placeholder="restaurer" autocomplete="off">
                                        <div id="restoreHelp" class=" d-none"></div>
                                    </div>

                                    <div class="alert alert-warning mb-0" role="alert">
                                        Cette action va réactiver les logements sélectionnés.
                                    </div>

                                    <div id="pricingWrap" class="mt-3 d-none text-dark">
                                        <div class="border rounded p-3">
                                            <div>Tarif par logement : <strong><span id="unitPrice">0,00 €</span></strong></div>
                                            <div>Quantité restaurée aujourd’hui : <strong><span id="qtyToRestore">0</span></strong></div>
                                            <div>Total prélevé aujourd’hui : <strong><span class="totalPrice">0,00 €</span></strong></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-success" id="confirmRestoreBtn" disabled>Restaurer et payer <span class="totalPrice">0,00 €</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <form action="<?= site_url('subscription/removeProperties'); ?>" method="POST">
                    <div class="card mb-5">
                        <div class="card-body p-0">

                            <table class="table table-hover border-top-0 mb-0">
                                <tr>
                                    <td colspan="3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check_all_properties">
                                            <label class="form-check-label" for="check_all_properties"> Sélectionner toutes les annonces</label>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                foreach ($annonces_list as $annonce) {
                                    $style = (!empty($annonce['deleted'])) ? 'opacity: 0.3; color: red !important; text-decoration: line-through' : '';
                                    $is_active = (empty($annonce['deleted'])) ? 1 : 0;
                                ?>
                                    <tr>
                                        <td width="10%">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input property_checkbox" name="to_remove[]" value="<?= $annonce['unique_id']; ?>" data-isactive="<?= $is_active; ?>" data-title="<?= $annonce['title']; ?>">
                                            </div>
                                        </td>
                                        <td width="80%">
                                            <p class="mb-0"><a href="<?= site_url('annonce/' . $annonce['unique_id']); ?>" class="lift" style="<?= $style; ?>"><?= $annonce['title']; ?></a></p>
                                            <p class="small mb-0" style="<?= $style; ?>"><i class="uil uil-map-marker-minus"></i> <?= $annonce['address']; ?> <?= $annonce['zipcode']; ?> <?= $annonce['city']; ?></p>
                                        </td>

                                        <td width="10%"><a href="<?= site_url('annonce/' . $annonce['unique_id']); ?>" class="btn btn-dark"><i class="fa fa-chevron-right"></i></a></td>
                                    </tr>

                                <?php
                                }
                                ?>
                                <tr>
                                    <td colspan="2">
                                        <!-- <button type="submit" class="btn btn-danger">Désactiver des annonces</button> -->
                                        <button type="submit" id="btnDeactivate" class="btn btn-danger" disabled>Désactiver les logements (0)</button>

                                    </td>
                                    <td>
                                        <button type="submit" id="btnRestore" class="btn btn-success" disabled>Restaurer les logements (0)</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
            <?php
        }
            ?>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Votre abonnement</h4>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">Montant de votre prélèvement : <strong><?= number_format($next_billing / 100, 2, ',', ' '); ?>€</strong></p>
                        <p class="mb-0">Prélevé le <?= APPUP::getFullDate($user['member_until'], false); ?></p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Moyen de paiement</h4>
                    </div>
                    <div class="card-body">
                        <div id="revolut-pay"></div>
                    </div>
                </div>

                <!-- <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Historique de vos transactions</h4>
                    </div>
                    <div class="card-body">
                        Historique à venir
                    </div>
                </div> -->

            </div>
    </div>
    <div class="row">
        <div class="col-auto"></div>
        <div class="col-md-3">
            <form action="<?= site_url('account/updateRenew'); ?>" method="POST">
                <select name="autorenew" id="autorenew" class="form-control mt-4">
                    <option value="0" <?= (empty($user['autorenew'])) ? 'selected' : ''; ?>>Renouvellement désactivé</option>
                    <option value="1" <?= (!empty($user['autorenew'])) ? 'selected' : ''; ?>>Renouvellement activé</option>
                </select>
                <button type="submit" class="btn btn-primary mt-3 btn-sm"><i class="fa fa-save me-2"></i>Enregistrer</button>
            </form>
        </div>
    </div>
</div>


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
                        variant: 'dark', // 'dark' | 'light' | 'light-outlined'
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