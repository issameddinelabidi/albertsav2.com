<section>
    <div class="container pt-7 pt-md-11 pb-8">
        <div class="row">
            <div class="col-md-12">
                <div class="job-list mb-10">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="">
                                <h2 class="mb-0"><?= ALBERT_MODIFICATION_DU_COMPTE; ?></h2>

                                <form action="<?= site_url('user/updateProfile'); ?>" method="POST" autocomplete="disabled">
                                    <input type="hidden" name="user_unique_id" value="<?= $profile['unique_id']; ?>">

                                    <h3 class="text-white"><?= $page_title; ?></h3>

                                    <div class="form-group mb-4">
                                        <label for="name"><?= ALBERT_RAISON_SOCIALE; ?></label>
                                        <input type="text" name="username" class="form-control" value="<?= $profile['username']; ?>">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="first_name"><?= ALBERT_PRENOM; ?></label>
                                                <input type="text" name="first_name" class="form-control" value="<?= $profile['first_name']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="last_name"><?= ALBERT_NOM; ?></label>
                                                <input type="text" name="last_name" class="form-control" value="<?= $profile['last_name']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="direct_phone"><?= ALBERT_LIGNE_DIRECTE; ?></label>
                                                <input type="text" name="direct_phone" class="form-control" value="<?= $profile['direct_phone']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="emergency_phone"><?= ALBERT_NUMERO_DURGENCE; ?></label>
                                                <input type="text" name="emergency_phone" class="form-control" value="<?= $profile['emergency_phone']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="cleaning_number"><?= ALBERT_N_SERVICE_NETTOYAGE; ?></label>
                                                <input type="text" name="cleaning_number" class="form-control" value="<?= $profile['cleaning_number'] ?? ''; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="technical_service_number"><?= ALBERT_N_SERVICE_TECHNIQUE; ?></label>
                                                <input type="text" name="technical_service_number" class="form-control" value="<?= $profile['technical_service_number'] ?? ''; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label for="infos_comp"><?= ALBERT_INFORMATIONS_COMPLEMENTAIRES; ?></label>
                                            <textarea name="infos_comp" id="infos_comp" class="form-control" placeholder="<?= ALBERT_TOUTE_INFORMATION_COMPLEMENTAIRE_QUE_VOUS_JUGEREZ; ?>"><?= $profile['infos_comp'] ?? ''; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="">
                                            <label for="channel_manager"><?= ALBERT_UTILISEZ_VOUS_UN_CHANNEL_MANAGER_SI_OUI_LEQUEL; ?></label>
                                            <input type="text" name="channel_manager" id="channel_manager" class="form-control" value="<?= $profile['channel_manager']; ?>">
                                        </div>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary" onclick="return confirm('<?= ALBERT_CONFIRMEZ_VOUS_LENREGISTREMENT_DE_CES_PARAMETRES; ?>')"><?= ALBERT_MODIFIER_MES_PARAMETRES; ?></button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>