<section>
    <div class="container pt-2 pt-md-4 pb-8">
        <div class="row gy-3">
            <div class="col-md-12">
                <h2>Portail d'affiliation</h2>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#versementMode">
                    <i class="fa fa-cog me-2"></i>Mode de versement
                </button>

                <!-- Modal -->
                <div class="modal fade" id="versementMode" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><img src="<?= site_url('assets/img/cyber-security.png'); ?>" alt="" style="width: 70px;margin-right: 20px;">Mise à jour du mode de versement</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="<?= site_url('account/updatePM'); ?>" method="POST">
                                <div class="modal-body pt-0">

                                    <p>Afin de réaliser les versements des sommes qui vous sont dûes, saisissez ci-dessous les informations liées votre IBAN.</p>
                                    <div class="card bg-dark text-white mb-2">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-md-3">
                                                    <p class="mb-0">Votre nom :</p>
                                                </div>
                                                <div class="col-md-9 mb-3">
                                                    <input type="text" name="payment_method" placeholder="Votre nom complet" class="form-control" value="<?= $user['payment_method'] ?? ''; ?>">
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="mb-0">IBAN</p>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="payment_method_value" placeholder="FR76..." class="form-control" value="<?= $user['payment_method_value'] ?? ''; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="small">Ces données seront utilisées exclusivement à fins de versements de la société <strong>Albert Ventures LLP</strong> à destination de votre compte.<br>Aucune demande de paiement ne vous sera jamais faite par nos équipes.</p>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <?php
                $versements = [];

                $amount_paid = 0;
                foreach ($payments as $pay) {
                    $amount_paid += $pay['amount'];
                    array_push($versements, ["date" => date('d-m-Y', strtotime($pay['creation_date'])), "montant" => $pay['amount'] / 100]);
                }
                $versementsJson = json_encode($versements);


                if ($amount_paid > 0) {
                ?>
                    <div class="alert alert-success">
                        <h3 class="mb-0"><i class="fa fa-check-circle text-success me-2"></i></strong><?= number_format($amount_paid / 100, 2, ',', ' '); ?>€ déjà versés par Albert</h3>
                    </div>
                <?php
                }
                ?>

                <div class="card">
                    <div class="card-body">
                        <canvas id="histogramme" class="mt-3"></canvas>
                    </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        // Récupérer les données PHP en JSON
                        let versements = <?php echo $versementsJson; ?>;

                        // Extraire les dates et montants
                        let labels = versements.map(v => v.date);
                        let data = versements.map(v => v.montant);

                        // Configuration du graphique
                        let ctx = document.getElementById("histogramme").getContext("2d");
                        new Chart(ctx, {
                            type: "bar",
                            data: {
                                labels: labels,
                                datasets: [{
                                    label: "Montants versés (€)",
                                    data: data,
                                    backgroundColor: "rgba(75, 192, 192, 0.7)",
                                    borderColor: "rgba(75, 192, 192, 1)",
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    });
                </script>
            </div>
            <div class="col-md-4">

                <h3>Votre lien d'affiliation</h3>
                <input type="text" class="form-control mb-3" id="affiliate_link" value="<?= site_url('?affiliation=' . str_rot13($user['unique_id'])); ?>">
                <a href="<?= $config['press_kit'] ?? '#!'; ?>" target="_blank">
                    <div class="btn btn-gradient gradient-7 w-100 h3" style="padding-top: 130px; padding-bottom: 130px;">
                        <div class="row">
                            <div class="col-12">
                                <p class="w-100 d-block"><i class="fa fa-file-download me-3 display-1"></i></p>
                            </div>
                            <div class="col-12">
                                <p class="w-100 d-block">Télécharger le kit de presse</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-6">
                <h3>Derniers versements</h3>

                <?php
                if (empty($payments)) {
                ?>
                    <div class="alert alert-info">
                        <p class="mb-0">Aucun versement n'a encore été émis en votre faveur.</p>
                    </div>
                <?php
                } else {
                ?>
                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table mb-0">
                                <thead>
                                    <th>Montant</th>
                                    <th>Date du versement</th>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($payments as $pay) {
                                    ?>
                                        <tr>
                                            <td><strong><i class="fa fa-check text-success me-2"></i></strong><?= number_format($pay['amount'] / 100, 2, ',', ' '); ?>€</td>
                                            <td><?= APPUP::getFullDate($pay['creation_date']); ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <div class="col-md-6">
                <h3>Vos filleuls</h3>

                <?php
                if (empty($children)) {
                ?>
                    <div class="alert alert-danger">
                        <p class="mb-0">Vous n'avez aucun filleul</p>
                    </div>
                <?php
                } else {
                ?>
                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table mb-0">
                                <thead>
                                    <th>Nom d'utilisateur</th>
                                    <th>Date d'inscription</th>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($children as $child) {
                                    ?>
                                        <tr>
                                            <td><?= $child['username']; ?></td>
                                            <td><?= APPUP::getFullDate($child['creation_date']); ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
</section>