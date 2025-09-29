<section>
    <div class="container pt-7 pt-md-11 pb-8">
        <div class="row">

            <div class="col-md-12">
                <div class="job-list mb-10">

                    <h2 class="mb-2"><?= $page_title; ?></h2>
                    <p>Les <strong>200 derniers évènements</strong> de vos annonces <strong class="text-info">transmis par les agents Albert</strong></p>
                    <?php
                    if (empty($tickets)) {
                    ?>
                        <div class="alert alert-warning">
                            Vos annonces n'ont encore aucun évènement.
                        </div>
                    <?php
                    } else {

                    ?>
                        <div class="row">
                            <?php
                            foreach ($tickets as $ticket) {
                            ?>
                                <div class="col-md-12 mb-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="mb-0"><a href="<?= site_url('annonce/' . $ticket['unique_id']); ?>"><?= $ticket['title']; ?></a></h5>
                                                </div>
                                                <div class="col-auto">
                                                    <?php
                                                    if (!empty($ticket['sinister_date'])) {
                                                    ?>
                                                        <span class="btn btn-gradient gradient-7 btn-sm py-1 px-3" style="cursor: default;">Date sinistre : <?= APPUP::getFullDate($ticket['sinister_date'], false); ?></span>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <span class="btn btn-gradient gradient-7 btn-sm py-1 px-3" style="cursor: default;">Date : <?= APPUP::getFullDate($ticket['creation_date'], false); ?></span>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-body py-4">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h4 class="mb-1"><?= $ticket['traveller_name']; ?> - <?= $ticket['traveller_number']; ?></h4>
                                                    <blockquote><?= $ticket['content']; ?></blockquote>
                                                </div>
                                                <div class="col-md-4">
                                                    <p><i class="fa fa-images me-2"></i><strong>Photos</strong></p>
                                                    <?php
                                                    if (!empty($ticket['pictures'])) {
                                                    ?>

                                                        <div class="grid grid-view">
                                                            <div class="row gx-md-8 gy-2 gy-md-4 isotope" style="position: relative; height: 1147.05px;">
                                                                <?php
                                                                foreach ($ticket['pictures'] as $picture) {
                                                                    if (empty($picture['deleted'])) {
                                                                ?>
                                                                        <div class="project item col-md-4">
                                                                            <figure class="rounded mb-2">
                                                                                <img src="<?= WS_URL . '/resize.php?key=crop/480x480/' . $picture['file_name']; ?>" alt="" />
                                                                                <a class="item-link" href="<?= $picture['url']; ?>" data-glightbox data-gallery="projects-group-tickets-<?= $ticket['id']; ?>"><i class="uil uil-focus-add"></i></a>
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
                                            <p class="small mb-0">Crée le <?= APPUP::getFullDate($ticket['creation_date']); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>

            <div class="col-md-12">
                <?php
                /*
            if (!empty($pagination)){
                ?>
                <div class="pagination">
                    <ul>
                        <?php
                            foreach ($pagination as $page => $state) {
                                if ($state){
                                    ?>
                                    <li class="active"><?= $page; ?></li>
                                    <?php
                                } else {
                                    ?>
                                    <li><a href="<?= site_url('livre-blanc/page/'.$page); ?>"><?= $page; ?></a></li>
                                    <?php
                                }
                            }
                        ?>
                    </ul>
                </div>
                <?php
            }
            */
                ?>
            </div>
        </div>
    </div>
</section>