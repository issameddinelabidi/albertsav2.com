<section>
    <div class="container pt-2 pt-md-4 pb-8">
        <div class="row">
            <div class="col">
                <h2 class="mb-0"><?= ALBERT_GESTION_GUIDE_MENAGE; ?></h2>
                <p><a href="<?= site_url('annonce/' . $annonce['unique_id']); ?>">&lt; <?= ALBERT_RETOUR_A_LANNONCE; ?></a></p>
            </div>
        </div>

        <div class="row">
            <a href="<?= site_url('annonces/handleStocks/' . $annonce['unique_id']); ?>" class="btn btn-gradient gradient-7 w-100 mb-5"><?= ALBERT_GERER_LES_STOCKS_DE_LINVENTAIRE; ?></a>


            <div class="card mb-5">
                <div class="card-body">
                    <form action="<?= site_url('annonce/updateTasksAndInventory'); ?>" method="POST">
                        <input type="hidden" name="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">
                        <div class="row">

                            <div class="col-6">
                                <h5><?= ALBERT_TACHES; ?></h5>
                                <div class="form-check mb-4">
                                    <?php
                                    foreach ($cleaning_tasks as $task) {
                                        $state = '';
                                        if (!empty($annonce['tasks_list'])) {
                                            $state = (in_array($task['id'], explode(',', $annonce['tasks_list']))) ? 'checked' : '';
                                        }
                                    ?>
                                        <p class="mb-0">
                                            <input class="form-check-input" type="checkbox" name="tasks[]" value="<?= $task['id']; ?>" id="task_<?= $task['id']; ?>" <?= $state; ?>>
                                            <label class="form-check-label" for="task_<?= $task['id']; ?>"> <?= $task['name']; ?></label>
                                        </p>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5><?= ALBERT_INVENTAIRE; ?></h5>

                                <div class="form-check mb-4">
                                    <?php
                                    foreach ($cleaning_inventory as $inventory) {
                                        $state = '';
                                        if (!empty($annonce['inventory_list'])) {
                                            $state = (in_array($inventory['id'], explode(',', $annonce['inventory_list']))) ? 'checked' : '';
                                        }
                                    ?>
                                        <p class="mb-0">
                                            <input class="form-check-input" type="checkbox" name="inventory[]" value="<?= $inventory['id']; ?>" id="inventory_<?= $inventory['id']; ?>" <?= $state; ?>>
                                            <label class="form-check-label" for="inventory_<?= $inventory['id']; ?>"> <?= $inventory['name']; ?></label>
                                        </p>
                                    <?php
                                    }
                                    ?>
                                </div>

                                <?php
                                /*
                                        foreach ($cleaning_inventory As $inventory){
                                            ?>
                                            <div class="form-group mb-1">
                                                <input type="number" class="form-control d-inline" min="0" max="9999" style="width: 100px;"> <?= $inventory['name']; ?>
                                            </div>            
                                            <?php
                                        }
                                        */
                                ?>

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