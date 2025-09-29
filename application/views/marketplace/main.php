<?php
    $types_list = [
        'consumable' => 'Consommable',
        'tool' => 'Outils',
        'training' => 'Formation'
    ];
?>

<section class="wrapper bg-light">
    <div class="container py-10">
        <div class="row">
            <div class="col-md-12 mx-auto mb-8">
                <h2 class="fs-20 text-uppercase text-muted text-center mb-3"><?= ALBERT_BIENVENUE; ?></h2>
                <h5 class="display-9 text-center"><?= ALBERT_POUR_VOUS_AIDER_AU_QUOTIDIEN_VOICI_DES_PARTENAIRES; ?></h5>
            </div>
        </div>
        
        <div class="grid grid-view projects-masonry">
            <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                <?php
                foreach ($products_list as $prod) {
                ?>
                    <div class="project item col-md-6 col-xl-4 product">
                        <figure class="lift rounded mb-6">
                            <a href="<?= $prod['link']; ?>" target="_blank">
                                <img src="<?= $prod['url']; ?>" alt="" />
                            </a>
                        </figure>

                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <div class="post-category text-line mb-0 text-info"><?= $types_list[$prod['type']]; ?></div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>