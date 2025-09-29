<section>
    <div class="container pt-2 pt-md-4 pb-8">
        <div class="row">
            <div class="col">
                <h2 class="mb-0"><?= ALBERT_GESTION_GUIDE_DENTREE; ?></h2>
                <p><a href="<?= site_url('annonce/' . $annonce['unique_id']); ?>">&lt; <?= ALBERT_RETOUR_A_LANNONCE; ?></a></p>
            </div>
        </div>

        <div class="row">
            
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <a href="<?= site_url('annonce/entryProcedure/' . $annonce['unique_id']); ?>" class="btn btn-success w-100"><?= ALBERT_GERER_LA_PROCEDURE_DENTREE; ?> <i class="fa fa-chevron-right ms-4"></i></a>
                            </div>
                            <div class="col-6">
                                <a href="<?= site_url('annonce/leaveProcedure/' . $annonce['unique_id']); ?>" class="btn btn-danger w-100"><?= ALBERT_GERER_LA_PROCEDURE_DE_SORTIE; ?> <i class="fa fa-chevron-right ms-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            

        </div>
    </div>
</section>



                