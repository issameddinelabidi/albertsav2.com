<section>
    <div class="container pt-7 pt-md-11 pb-8">
        <div class="row">

            <div class="col-md-12">
                <div class="job-list mb-10">

                    <h2 class="mb-4">Annonces</h2>
                    <?php
                    if (empty($annonces_to_review)) {
                    ?>
                        <div class="alert alert-warning">
                            Il n'y a aucune annonce à vérifier.
                        </div>
                        <?php
                    } else {

                        foreach ($annonces_to_review as $annonce) {
                            $type_icon = ($annonce['type'] == 'house') ? 'estate' : 'building';
                            $type_color = ($annonce['type'] == 'house') ? 'green' : 'blue';
                        ?>
                            <?php
                            $style = ($user['access_level'] == 100 && !empty($annonce['deleted'])) ? 'opacity: 0.3; text-decoration: line-through' : '';
                            ?>
                            <a href="<?= site_url('annonce/' . $annonce['unique_id']); ?>" class="card mb-4 lift" style="<?= $style; ?>">
                                <div class="card-body p-5">


                                    <span class="row justify-content-between align-items-center">
                                        <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                            <span class="avatar bg-<?= $type_color; ?> text-white w-9 h-9 fs-20 me-3"><i class="uil uil-<?= $type_icon; ?>"></i></span> <?= $annonce['title']; ?>
                                        </span>
                                        <span class="col-5 col-md-3 text-body d-flex align-items-center">
                                            <i class="uil uil-user me-1"></i> <?= $annonce['username']; ?>
                                        </span>
                                        <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                                            <i class="uil uil-map-marker-minus me-1"></i> <?= $annonce['zipcode']; ?> <?= $annonce['city']; ?>
                                        </span>
                                        <span class="d-none d-lg-block col-1 text-center text-body">
                                            <i class="uil uil-angle-right-b"></i>
                                        </span>
                                    </span>
                                </div>
                            </a>
                        <?php
                        }
                        ?>

                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>