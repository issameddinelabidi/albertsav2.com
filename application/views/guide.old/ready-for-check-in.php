<div class="row gx-0 gy-0">
    <div class="col-12">
        <h5 class="text-white text-center"><?= $annonce['title']; ?></h5>
    </div>

    <div class="col-md-4 offset-md-4">
        <!-- <div style="background: white;" class="py-5 rounded mt-5">
            <img src="<?= site_url('assets/img/cleaning.gif'); ?>" alt="" class="w-100  my-5">
        </div> -->

    </div>

    <h2 class="text-white text-center mt-5"><?= ALBERT_LOGEMENT_EST_PRET_POUR_UN_CHECK_IN; ?></h2>


    <form action="<?= site_url('guide/markCheckInAsDone'); ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="annonce_unique_id" value="<?= $annonce['unique_id']; ?>">
        <input type="hidden" name="from_cleaning_view" value="1">
        <div class="row">
            <div class="col-12 mt-5">
                <button class="btn btn-gradient gradient-7 w-100"><?= ALBERT_FORCER_LE_CHECK_IN; ?></button>
            </div>
        </div>
    </form>

</div>