<section>
    <div class="container pt-2 pt-md-4 pb-8">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col">
                        <h4>Mouvements dans votre logement</h4>
                    </div>
                </div>

                <?php
                if (!empty($guide_logs)) {
                ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            foreach ($guide_logs as $log) {
                                switch ($log['type']) {
                                    case 'check-in':
                                        $log_type = '<i class="fa fa-door-open"></i> Check-in';
                                        break;

                                    case 'check-out':
                                        $log_type = '<i class="fa fa-door-closed"></i> Check-out';
                                        break;

                                    case 'cleaning':
                                        $log_type = '<i class="fa fa-broom"></i> Ménage';
                                        break;
                                }
                                /*
                                    ?>
                                        <tr>
                                            <td><?= $log['name']; ?></td>
                                            <td><?= $log_type; ?></td>
                                            <td><?= APPUP::getFullDate($log['creation_date']); ?></td>
                                        </tr>
                                    <?php
*/
                            ?>
                                <div class="col-md-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="alert alert-info"><?= $log_type; ?> - <?= APPUP::getFullDate($log['creation_date'], false); ?></div>
                                                    <h4 class="mb-1"><?= $log['name']; ?></h4>
                                                    <?php
                                                    if (!empty($log['cleaning_rate'])) {
                                                    ?>
                                                        <p class="mb-0 text-body">Note : <?= $log['cleaning_rate']; ?>/5</p>
                                                    <?php
                                                    }

                                                    if (!empty($log['comment'])) {
                                                    ?>
                                                        <p class="mb-0 text-body">Commentaire : <?= nl2br($log['comment']); ?></p>
                                                    <?php
                                                    }
                                                    ?>

                                                </div>
                                                <div class="col-md-4">
                                                    <p><i class="fa fa-images me-2"></i><strong>Photos</strong></p>
                                                    <?php
                                                    if (!empty($log['files'])) {
                                                    ?>

                                                        <div class="grid grid-view">
                                                            <div class="row gx-md-8 gy-2 gy-md-4 isotope" style="position: relative; height: 1147.05px;">
                                                                <?php
                                                                foreach ($log['files_list'] as $picture) {
                                                                    if (empty($picture['deleted'])) {
                                                                ?>
                                                                        <div class="project item col-md-4">
                                                                            <figure class="rounded mb-2">
                                                                                <img src="<?= WS_URL . '/resize.php?key=crop/480x480/' . $picture['file_name']; ?>" alt="" />
                                                                                <a class="item-link" href="<?= $picture['url']; ?>" data-glightbox data-gallery="projects-group-tickets-<?= $log['id']; ?>"><i class="uil uil-focus-add"></i></a>
                                                                            </figure>
                                                                        </div>

                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>

                                                    <?php
                                                    } else {
                                                    ?>
                                                        <div class="alert alert-warning">Aucune photo</div>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <div class="alert alert-warning">
                        Aucun mouvement répertorié via le guide Albert.
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>