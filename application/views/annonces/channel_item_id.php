<section>
    <div class="container pt-2 pt-md-4 pb-8">
        <div class="row">

            <div class="col-md-12">
                <h2 class="mb-0">ID Unique Channel Manager - <?= $annonce['title']; ?></h2>
                <p><a href="<?= site_url('annonce/' . $annonce['unique_reference']); ?>">Retour à l'annonce</a></p>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="alert alert-warning">
                        <i class="fa fa-exclamation-triangle me-2"></i>Attention, une fois cet identifiant saisi, vous ne pourrez plus le modifier afin que nos services soient toujours en mesure communiquer avec votre channel manager.
                    </div>

                    <?php
                    if (empty($annonce['channel_item_id'])) {
                    ?>
                        <form action="<?= site_url('annonce/updateChannelItemID'); ?>" method="POST">
                            <input type="hidden" name="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="channel_item_id"><strong>Identifiant unique d'annonce</strong></label>
                                    <input type="text" name="channel_item_id" id="channel_item_id" class="form-control" value="<?= $annonce['channel_item_id']; ?>" required>
                                    <a href="<?= site_url('foire-aux-questions'); ?>" class="text-info mt-2">Où trouver cette information selon votre Channel Manager ?</a>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-gradient gradient-7" onclick="return confirm('Enregistrer ce paramètre ?')"><?= ALBERT_ENREGISTRER; ?></button>

                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
</section>