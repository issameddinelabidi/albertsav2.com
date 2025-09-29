<section class="wrapper">
    <div class="container py-10 pt-13">

        <h1 class="text-center">Ticket</h1>


        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5 class="mb-0"><a href="<?= site_url('annonce/' . $item['annonce_unique_id']); ?>"><?= $item['annonce']['title']; ?></a></h5>
                    </div>
                    <div class="col-auto">
                        <?php
                        if (!empty($item['sinister_date'])) {
                        ?>
                            <span class="btn btn-gradient gradient-7 btn-sm py-1 px-3" style="cursor: default;">Date sinistre : <?= APPUP::getFullDate($item['sinister_date'], false); ?></span>
                        <?php
                        } else {
                        ?>
                            <span class="btn btn-gradient gradient-7 btn-sm py-1 px-3" style="cursor: default;">Date : <?= APPUP::getFullDate($item['creation_date'], false); ?></span>
                        <?php
                        }
                        ?>
                    </div>
                </div>

            </div>
            <div class="card-body py-4">
                <div class="row">
                    <div class="col-md-8">
                        <?php

                        
                            if (!empty($item['type']) && $item['type'] == 'guide') {
                                $item['traveller_number'] = '<em class="text-muted">depuis Guide Albert</em>';
                            }
                        ?>

                        <h4 class="mb-1"><?= $item['name'] ?? $item['traveller_name']; ?> • <?= $item['traveller_number'] ?? ''; ?></h4>
                        <blockquote><?= $item['content'] ?? $item['comment']; ?></blockquote>
                    </div>
                    <div class="col-md-4">
                        <p><i class="fa fa-images me-2"></i><strong>Photos</strong></p>
                        <?php
                        if (!empty($item['files_list'])) {
                        ?>

                            <div class="grid grid-view">
                                <div class="row gx-md-8 gy-2 gy-md-4 isotope" style="position: relative; height: 1147.05px;">
                                    <?php
                                    foreach ($item['files_list'] as $picture) {
                                        if (empty($picture['deleted'])) {
                                    ?>
                                            <div class="project item col-md-4">
                                                <figure class="rounded mb-2">
                                                    <img src="<?= WS_URL . '/resize.php?key=crop/480x480/' . $picture['file_name']; ?>" alt="" />
                                                    <a class="item-link" href="<?= $picture['url']; ?>" data-glightbox data-gallery="projects-group-tickets-<?= $item['id']; ?>"><i class="uil uil-focus-add"></i></a>
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
                            <div class="alert alert-light">Aucune photo</div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <p class="small mb-0">Crée le <?= APPUP::getFullDate($item['creation_date']); ?></p>
            </div>
        </div>


</section>