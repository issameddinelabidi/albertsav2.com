<div class="row gx-0 gy-0">
    <div class="col-12">
        <h5 class="text-white text-center"><?= $annonce['title']; ?></h5>
    </div>
    
    <div class="col-md-4 offset-md-4">
        <div style="background: white;" class="py-5 rounded mt-5">
        <img src="<?= site_url('assets/img/cleaning.gif'); ?>" alt="" class="w-100  my-5">
        </div>
    
    </div>
    
    <h2 class="text-white text-center mt-5"><?= ALBERT_LOGEMENT_EST_EN_COURS_DE_PREPARATION; ?></h2>

    <div class="col-12">
        <div class="item-inner">
            <div class="card bg-soft-primary"  data-bs-toggle="modal" data-bs-target="#location-modal">
            <div class="card-body text-center px-2">
                    <h1 class="display-1"><i class="fa fa-location-dot"></i></h1>
                    <h6 class="mb-0"><?= ALBERT_LOCALISATION; ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>