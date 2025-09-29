<div class="row gx-0 gy-0">
    <div class="col-12">
        <h5 class="text-white text-center"><?= $annonce['title']; ?></h5>
    </div>
    
    <div class="col-md-4 offset-md-4">
        <!-- <div style="background: white;" class="py-5 rounded mt-5">
            <img src="<?= site_url('assets/img/cleaning.gif'); ?>" alt="" class="w-100  my-5">
        </div> -->
    
    </div>
    
    <h2 class="text-color text-center mt-5"><?= ALBERT_LOGEMENT_EST_ACTUELLEMENT_OCCUPE_PAR_UN_VOYAGEUR; ?></h2>

    <div class="card">
        <div class="card-body text-color">
            <?= ALBERT_SI_VOUS_ETES_DANS_LE_LOGEMENT_VOUS_DEVEZ_FORCER_LE; ?>

            <form action="<?= site_url('guide/markCheckOutAsDone'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">
                <input type="hidden" name="cleaning_rate" id="notation">
                <input type="hidden" name="name" value="Service nettoyage">
                <input type="hidden" name="from" value="albert-team">
                <div class="row">
                    <div class="col-12">

                        <button class="btn btn-gradient gradient-7 w-100"><?= ALBERT_FORCER_LE_CHECK_OUT; ?></button>
                    </div>
                </div>
            </form>
        </div>
    
    </div>
    

</div>