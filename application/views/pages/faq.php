<?php
if (!empty($is_mer)) {
    $bg_string = site_url('assets/img/mise-en-route.jpeg');
    $txt_color = 'white';
} else {
    $bg_string = '';
    $txt_color = 'dark';
}
?>

<section class="wrapper bg-light">
    <div class="container">
        <div class="card bg-soft-primary rounded-4 mt-2 mb-13 mb-md-17" style="background: url('<?= $bg_string; ?>');">
            <div class="card-body p-md-10 py-xl-11 px-xl-15">
                <div class="row gx-lg-8 gx-xl-0 gy-10 align-items-center">
                    <div class="col-lg-6 order-lg-2 d-flex position-relative">
                        <img class="img-fluid ms-auto mx-auto me-lg-8" src="<?= site_url('assets/img/photos/co3.png'); ?>" srcset="<?= site_url('assets/img/photos/co3@2x.png 2x'); ?>" alt="" data-cue="fadeIn">
                        <div data-cue="slideInRight" data-delay="300">
                            <div class="card shadow-lg position-absolute" style="bottom: 10%; right: -3%;">
                                <div class="card-body py-4 px-5">
                                    <div class="d-flex flex-row align-items-center">
                                        <div>
                                            <div class="icon btn btn-circle btn-md btn-soft-yellow pe-none mx-auto me-3"> <i class="uil uil-users-alt"></i> </div>
                                        </div>
                                        <div>
                                            <h3 class="counter mb-0 text-nowrap">6 000+</h3>
                                            <p class="fs-14 lh-sm mb-0 text-nowrap"><?= ALBERT_ANNONCES_EN_GESTION; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-start text-<?= $txt_color; ?>" data-cues="slideInDown" data-group="page-title" data-delay="600">
                        <?php
                        if (!empty($is_mer)) {
                        ?>
                            <h1 class="display-2 mb-5 text-<?= $txt_color; ?>">Bienvenue chez Albert !</h1>
                            <p class="lead fs-lg lh-sm mb-7 pe-xl-5">Profitez de nos services en toute indépendance !<br>Nous avons hâte de collaborer avec vous en première ligne !</p>
                            <?php
                            if ($is_mer == 'premium') {
                            ?>
                                <p class="text-success fw-bold lead">Checklist onboarding</p>
                                <p class="mb-2"><i class="fa fa-check me-2 text-success"></i>Renseigner vos paramètres</p>
                                <p class="mb-2"><i class="fa fa-check me-2 text-success"></i>Remplir vos fiches</p>
                                <p class="mb-2"><i class="fa fa-check me-2 text-success"></i>Faire une demande de validation des fiches</p>
                                <p class="mb-2"><i class="fa fa-check me-2 text-success"></i>Connexion des plateformes</p>
                                <p class="mb-2"><i class="fa fa-check me-2 text-success"></i>Connexion au Channel Manager</p>
                                <p class="mb-2"><i class="fa fa-check me-2 text-success"></i>Communication opérationnelle via WhatsApp</p>
                            <?php
                            }
                        } else {
                            ?>
                            <h1 class="display-2 mb-5"><?= $page_title; ?></h1>
                            <p class="lead fs-lg lh-sm mb-7 pe-xl-10"><?= ALBERT_DECOUVREZ_LES_REPONSES_AUX_QUESTIONS_AUXQUELLES_NO; ?></p>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="author-area sep-bottom pb-5">
    <div class="author-info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="item-details">
                        <div class="row">
                            <div class="col-lg-3 pr_50">
                                <div class="faq_tab">
                                    <ul class="nav nav-tabs nav-pills">
                                        <?php
                                        $i = 0;
                                        foreach ($faq_main as $main) {
                                            $active_state = ($i == 0) ? 'active' : '';
                                        ?>
                                            <li class="nav-item w-100 mb-2">
                                                <a class="nav-link <?= $active_state; ?>" data-bs-toggle="tab" href="#<?= $main['slug']; ?>">
                                                    <span><?= $main['name']; ?></span>
                                                </a>
                                            </li>
                                        <?php
                                            $i++;
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="tab-content mt-0">
                                    <?php
                                    $i = 0;
                                    foreach ($faq_main as $main) {
                                        $act = ($i == 0) ? 'show active' : '';
                                    ?>
                                        <div class="tab-pane fade <?= $act; ?>" id="<?= $main['slug']; ?>">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="mb-0 pink-color"><?= $main['name']; ?></h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="accordion accordion-wrapper" id="accordion<?= $main['id']; ?>">

                                                        <?php
                                                        foreach ($faq_content as $content) {
                                                            if ($content['faq_id'] == $main['id']) {
                                                        ?>
                                                                <div class="card accordion-item">
                                                                    <div class="card-header" id="heading<?= $content['id']; ?>">
                                                                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $content['id']; ?>" aria-expanded="true" aria-controls="collapse<?= $content['id']; ?>"> <?= $content['question']; ?> </button>
                                                                    </div>

                                                                    <div id="collapse<?= $content['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $content['id']; ?>" data-bs-parent="#accordionSimpleExample">
                                                                        <div class="card-body">
                                                                            <?= $content['answer']; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>