<?php
if (!empty($_GET['type']) && $_GET['type']=='payment'){
    $type = 'paiement';
} else {
    $type = 'abonnement';
}
?>

<div class="container py-14 py-md-16">

    <div class="author-info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h1 class="h3 my-3"><i class="fa fa-check text-success"></i>&nbsp;&nbsp;<?= ALBERT_MERCI_DE_VOTRE_CONFIANCE; ?></h1>
                        </div>
                        <div class="card-body text-center">

                            <p class=""><?= ALBERT_VOUS_RECEVREZ_DANS_QUELQUES_MINUTES_UN_MAIL_COMPRE; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>