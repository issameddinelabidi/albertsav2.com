<section>
    <div class="container pt-2 pt-md-4 pb-8">
        <div class="row">
            <div class="col">
                <h2 class="mb-0"><?= ALBERT_GESTION_DES_STOCKS; ?></h2>
                <p><a href="<?= site_url('guide/handleCleaningGuide/' . $annonce['unique_id']); ?>">&lt; <?= ALBERT_RETOUR_A_AU_GUIDE; ?></a></p>
            </div>
        </div>

        <div class="row">
            
            <div class="card mb-5">
                <div class="card-body">
                <form action="<?= site_url('annonce/updateStocks'); ?>" method="POST">
                    <input type="hidden" name="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">

                    <div class="row">
                        
                            <div class="col-6">
                                <h5><?= ALBERT_INVENTAIRE; ?></h5>
                                
                                <div class="form-check mb-4">
                                    <?php
                                        foreach ($cleaning_inventory As $inventory){
                                            ?>
                                            <div class="form-group mb-1">
                                                <input type="number" class="form-control d-inline" name="item_<?= $inventory['id']; ?>" min="0" max="9999" style="width: 100px;" value="<?= (!empty($real_stocks[$inventory['id']])) ? $real_stocks[$inventory['id']] : '0'; ?>"> <?= $inventory['name']; ?>
                                            </div>            
                                            <?php
                                        }
                                    ?>
                                </div>
                                
                            </div>
                            <div class="col-12">
                                <button class="btn btn-success"><?= ALBERT_ENREGISTRER_LES_CHANGEMENTS; ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>



                