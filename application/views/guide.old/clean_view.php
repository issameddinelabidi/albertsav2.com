<h2 class="text-center text-white mb-3">Guide Albert team</h2>
<div class="card">
    <div class="card-header">
        <h5 class="mb-0"><?= $annonce['title']; ?></h5>
    </div>
    <div class="card-body text-dark">
        <img src="<?= site_url('assets/img/cleaning.png'); ?>" alt="" class="w-100">
        <form action="<?= site_url('guide/markCleaningAsDone'); ?>" method="POST" enctype="multipart/form-data" id="cleaning_form">
            <input type="hidden" name="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">
            <input type="hidden" name="cleaning_rate" id="notation" value="">
            <input type="hidden" name="name" id="name" value="Service nettoyage">
            <div class="row">
                <div class="col-12">
                    <!-- <div class="form-group mb-4">
                        <label for="name">Votre nom *</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Votre nom" required>
                    </div> -->
                    
                    <div class="form-group mb-4">
                        <p class="mb-0"><?= ALBERT_DANS_QUEL_ETAT_AVEZ_VOUS_TROUVE_LE_LOGEMENT; ?></p>
                        <span class="rate">
                            <i class="star_rate">★</i>
                            <i class="star_rate">★</i>
                            <i class="star_rate">★</i>
                            <i class="star_rate">★</i>
                            <i class="star_rate">★</i>
                        </span>
                    </div>
                    <hr class="my-2">

                    <?php
                        if (!empty($cleaning_tasks)){
                            ?>
                            <h6 class="mb-0"><?= ALBERT_TACHES_A_FAIRE; ?></h6>
                            <div class="form-check mb-4">
                                <?php
                                    foreach ($cleaning_tasks As $task){
                                        ?>
                                        <p class="mb-0">
                                        <input class="form-check-input needed_checkboxed" type="checkbox" value="" id="task_<?= $task['id']; ?>">
                                        <label class="form-check-label" for="task_<?= $task['id']; ?>"> <?= $task['name']; ?></label>
                                        </p>
                                        <?php
                                    }
                                ?>
                            </div>
                            <?php
                        }

                        if (!empty($cleaning_inventory)){
                            ?>
                            <h6 class="mb-0"><?= ALBERT_INVENTAIRE_A_FAIRE; ?></h6>
                            <div class="form-check mb-4 px-0">
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
                            <?php
                        }
                    ?>
                    
                    <div class="form-group mb-4">
                        <label for="file"><?= ALBERT_SI_BESOIN_MERCI_DENVOYER_DES_PHOTOS_VIDEOS; ?></label>
                        <input type="file" name="file[]" id="file" multiple>
                    </div>

                    <div class="form-group mb-4">
                        <label for="comment"><?= ALBERT_COMMENTAIRE; ?></label>
                        <textarea name="comment" id="comment" rows="3" class="form-control" placeholder="<?= ALBERT_COMMENTAIRE_FACULTATIF?>"></textarea>
                    </div>
                    
                    <button class="btn btn-gradient gradient-7 w-100"><?= ALBERT_VALIDER_LE_MENAGE; ?></button>
                </div>
            </div>
        </form>
    </div>
</div>