<section class="wrapper bg-light">
    <div class="container py-5 ">
        <h2 class="display-5 mb-3 text-center">Nos <span class="underline-3 style-3 text-warning primary">offres</span></h2>
        <p class="text-lead text-center">Sans engagement, sans frais de mise en place</p>
        <div class="pricing-wrapper">
            <div class="row gx-4 gy-6 mt-2 justify-content-center">

                <?php
                //Mensuel
                foreach ($products_list as $product) {
                    if (empty($user) && $product->id == 'prod_ORFe4xUNpMWhcq') {
                        continue;
                    }
                    $popular = '';
                    $pop_mt = '';
                    if ($product->id == 'prod_ORFdYffZzm63Rz') {
                        $popular = ' bg-soft-blue mt-0';
                        $pop_mt = ' pt-4';
                    }
                ?>
                    <div class="col-md-3">
                        <div class="pricing card shadow-none<?= $popular; ?>">

                            <div class="card-body mx-0<?= $pop_mt; ?>">
                                <p class="text-center w-100">
                                    <?php if (!empty($popular)) {
                                    ?>
                                        <span class="badge bg-blue rounded-pill mb-3">Top Vente</span><br>
                                    <?php
                                    }
                                    ?>

                                    <img src="<?= $product->images[0]; ?>" class="rounded shadow-lg mb-4" style="max-width: 150px;" alt="">
                                </p>
                                <h4 class="card-title text-center"><?= $product->name; ?></h4>
                                <?php


                                foreach ($prices_list as $price) {
                                    if ($price->product == $product->id) {

                                        $tiers_mode = ($price->tiers_mode == 'volume') ? '/annonce' : '';
                                ?>
                                        <div class="prices text-dark">
                                            <div class="price price-show justify-content-center"><span class="price-value"><?= number_format($plan_price[$price->id] / 100, 2, ',', ' '); ?></span><span class="price-currency">€</span><span class="price-duration">mois<?= $tiers_mode; ?></span></div>
                                        </div>

                                        <?php
                                        if ($product->id == 'prod_ORFe4xUNpMWhcq') {
                                        ?>
                                            <div class="alert alert-info w-100 text-center fw-bold mt-4">
                                                Jusqu'à 100 annonces
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="alert alert-success w-100 text-center fw-bold mt-4">
                                                7 jours gratuits
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8">
                                            <!-- <li><i class="uil uil-check"></i><span><strong>100MB</strong> Storage </span></li>
                                        <li><i class="uil uil-times bullet-soft-red"></i><span> Weekly <strong>Reports</strong> </span></li> -->
                                            <?= $plans_contents[$price->id]; ?>
                                        </ul>

                                        <?php
                                        if (empty($user['active_subscription'])) {


/*
                                            if (empty($user)) {
                                        ?>
                                                <div class="text-center">
                                                    <a href="<?= site_url('inscription'); ?>" class="btn btn-gradient gradient-7 rounded-pill" id="checkout-and-portal-button" type="submit" name="subscribe" value="free"><i class="fa fa-user-plus me-2"></i>
                                                        S'inscrire
                                                    </a>
                                                </div>
                                                <?php
                                            } else {
*/
                                                if (empty($user['active_subscription'])) {
                                                ?>
                                                    <form action="<?= site_url('checkout'); ?>" method="POST" class="text-center">
                                                        <?php
                                                        if (!empty($tiers_mode)) {
                                                        ?>
                                                            <legend class="h6 fs-16 mb-2 mt-5">
                                                                <?= ALBERT_SELECTION_DU_NOMBRE_DANNONCES; ?>
                                                            </legend>

                                                            <div class="input-group  mb-3">
                                                                <span class="input-group-btn">
                                                                    <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="quantity_<?= $product->id; ?>">
                                                                        <span class="fa fa-minus text-dark"></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" id="quantity_<?= $product->id; ?>" name="nb_annonces" class="form-control input-number mx-1" value="10" min="1" max="250">
                                                                <span class="input-group-btn">
                                                                    <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="quantity_<?= $product->id; ?>">
                                                                        <span class="fa fa-plus text-dark"></span>
                                                                    </button>
                                                                </span>
                                                            </div>

                                                        <?php
                                                        }
                                                        ?>
                                                        <div class="text-center">
                                                            <button class="btn btn-gradient gradient-7 rounded-pill" id="checkout-and-portal-button" type="submit" name="subscribe" value="<?= $price->id; ?>"><i class="uil uil-shopping-bag"></i>
                                                                S'abonner
                                                            </button>
                                                        </div>
                                                    </form>
                                            <?php
                                                }
                                            // }
                                            ?>
                                            </form>
                                        <?php
                                        }
                                        ?>
                                <?php
                                    }
                                }
                                ?>

                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>

                <?php
                }

                if (empty($user)) {
                ?>
                    <div class="col-md-3">
                        <div class="pricing card shadow-none">
                            <div class="card-body mx-0">
                                <p class="text-center w-100"><img src="<?= site_url('assets/img/albert_free.png'); ?>" class="rounded shadow-lg mb-4" style="max-width: 150px;" alt=""></p>
                                <h4 class="card-title text-center">Gratuit</h4>

                                <div class="prices text-dark">
                                    <div class="price price-show justify-content-center"><span class="price-value">0,00</span><span class="price-currency">€</span><span class="price-duration">mois</span></div>
                                </div>

                                <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8">
                                    <li><i class="uil uil-check bullet-blue"></i><span>Interface Albert</span></li>
                                    <li><i class="uil uil-check bullet-blue"></i><span>Guide d'entrée numérique IA</span></li>
                                    <li><i class="uil uil-check bullet-blue"></i><span>Guide Albert Team</span></li>
                                    <li><i class="uil uil-check bullet-blue"></i><span>Livre blanc</span></li>
                                </ul>

                                <?php
                                if (empty($user)) {
                                ?>
                                    <div class="text-center">
                                        <a href="<?= site_url('inscription'); ?>" class="btn btn-gradient gradient-7 rounded-pill" id="checkout-and-portal-button" type="submit" name="subscribe" value="free"><i class="fa fa-user-plus me-2"></i>
                                            S'inscrire
                                        </a>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>

                <?php
                }
                ?>

            </div>

            <p class="text-lead text-center mt-5">Sans engagement, sans frais de mise en place</p>
        </div>
        <!--/.pricing-wrapper -->
    </div>
    <!-- /.container -->
</section>

