<div class="row gx-0 gy-0">
    <div class="col-12">
        <h5 class="text-white text-center"><?= $annonce['title']; ?></h5>
    </div>
    <?php
    if (!empty($procedure_list)) {
    ?>
        <div class="col-12 mt-5">
            <div class="item-inner">
                <div class="card bg-soft-primary" data-bs-toggle="modal" data-bs-target="#entry-procedure-modal">
                    <div class="card-body text-center mx-0">
                        <h1 class="display-1"><i class="fa fa-door-open"></i></h1>
                        <h6 class="mb-0"><?= ALBERT_PROCEDURE_DENTREE; ?></h6>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    ?>

    <div class="col-6">
        <div class="item-inner">
            <div class="card bg-soft-primary" data-bs-toggle="modal" data-bs-target="#location-modal">
                <div class="card-body text-center px-2">
                    <h1 class="display-1"><i class="fa fa-location-dot"></i></h1>
                    <h6 class="mb-0"><?= ALBERT_LOCALISATION; ?></h6>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="item-inner">
            <div class="card bg-soft-primary" data-bs-toggle="modal" data-bs-target="#check-in-out-modal">
                <div class="card-body text-center px-2">
                    <h1 class="display-1"><i class="fa fa-clock"></i></h1>
                    <h6 class="mb-0"><?= ALBERT_CHECK_IN_OUT; ?></h6>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <button class="btn btn-gradient gradient-7 w-100 mt-5" data-bs-toggle="modal" data-bs-target="#arrived_modal"><?= ALBERT_JE_SUIS_ARRIVE; ?></button>
    </div>


</div>