<section>
    <div class="container pt-7 pt-md-11 pb-8">
        <div class="row">
            <div class="col-md-7">
                <div class="job-list mb-10">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="<?= site_url('account/updateParams'); ?>" method="POST" autocomplete="disabled">
                                <h3 class="checkout_title f_p f_600 f_size_20 mb_40 mt-2">
                                    Albert Assistant IA
                                </h3>
                                <p>Connectez votre channel manager à nos services en quelques clics seulement !</p>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="channel_manager_used">Quel channel manager utilisez-vous ?</label>
                                    <select class="form-control" name="channel_manager_used" id="channel_manager_used" required>
                                        <option value="0">Sélectionnez</option>
                                        <?php
                                        foreach ($channel_managers as $cm) {
                                            if ($cm['id'] == $user['channel_manager_used']) {
                                        ?>
                                                <option value="<?= $cm['id']; ?>" selected><?= $cm['name']; ?></option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="<?= $cm['id']; ?>"><?= $cm['name']; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group mb-4 channel_div">
                                    <?php
                                    switch ($user['channel_manager_used']) {
                                        case 1:
                                    ?>
                                            <label class="fw-bold" for="beds24_invite_code">Saisissez votre code d'invitation</label>
                                            <textarea name="beds24_invite_code" class="form-control" required><?= $user['beds24_invite_code'] ?? ''; ?></textarea>
                                            <a href="<?= site_url('foire-aux-questions#beds24'); ?>" class="text-info" target="_blank">Comment récupérer mon code d'invitation ?</a>
                                        <?php
                                            break;
                                        case 2:
                                        ?>
                                            <a href="<?= site_url('foire-aux-questions#superhote'); ?>" class="text-info" target="_blank">Comment synchroniser mes annonces ?</a>

                                    <?php
                                            break;

                                        default:

                                            break;
                                    }
                                    ?>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-gradient gradient-7 rounded-pill" onclick="return confirm('Confirmez-vous le changement de ces paramètres ?')">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php
                    if (!empty($this->data['user']['beds24_refresh_token'])) {
                    ?>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="<?= site_url('account/updateParams'); ?>" method="POST" autocomplete="disabled">

                                    <h2 class="mb-0" id="profile">Paramétrage Webhook</h2>

                                    <p class="fw-bold mb-0">Synchronisation de vos logements</p>
                                    <a href="<?= site_url('foire-aux-questions#beds24'); ?>" class="text-info mb-4" target="_blank">Comment configurer mes webhooks ?</a>

                                    <p class="fw-bold mb-0">Texte à copier dans URL sur Beds24 :</p>
                                    <div class="row">
                                        <div class="col">
                                            <span id="webhook_url"><?= site_url('Hook/beds24Hoooks/' . $this->data['user']['personal_token']); ?></span>
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-primary btn-sm copy_btn d-block" type="button" data-target="#webhook_url">Copier</button>
                                        </div>
                                    </div>

                                    <hr class="my-3">
                                    <p class="fw-bold mb-0">Texte à copier dans Custom Header sur Beds24 :</p>
                                    <div class="row">
                                        <div class="col">
                                            <span id="webhook_headers">albert-app-header:<?= $this->data['user']['personal_header']; ?></span>
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-primary btn-sm copy_btn d-block" type="button" data-target="#webhook_headers">Copier</button>
                                        </div>
                                    </div>


                                    <div class="text-center">
                                        <button type="submit" class="btn btn-gradient gradient-7 rounded-pill" onclick="return confirm('Confirmez-vous le changement de ces paramètres ?')">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="">
                                <h2 class="mb-0" id="profile"><?= ALBERT_PARAMETRES_DU_COMPTE; ?></h2>

                                <?php
                                if (empty($user['first_name']) || empty($user['first_name']) || empty($user['last_name']) || empty($user['direct_phone']) || empty($user['direct_phone'])) {
                                    $query_param = '?is_first_completion=1';
                                } else {
                                    $query_param = '';
                                }
                                ?>
                                <form action="<?= site_url('account/updateParams'.$query_param); ?>" method="POST" autocomplete="disabled">

                                    <h3 class="text-white"><?= $page_title; ?></h3>

                                    <?php
                                    if (empty($user['first_name']) || empty($user['first_name']) || empty($user['last_name']) || empty($user['direct_phone']) || empty($user['direct_phone'])) {
                                        $color = 'red';
                                    ?>
                                        <div class="alert alert-danger">
                                            <?= ALBERT_MERCI_DE_COMPLETER_VOTRE_PROFIL; ?>
                                        </div>
                                    <?php
                                    } else {
                                        $color = 'green';
                                    }
                                    ?>

                                    <div class="card mb-4">
                                        <div class="card-body bg-soft-<?= $color; ?>">
                                            <div class="form-group mb-4">
                                                <label for="name"><?= ALBERT_RAISON_SOCIALE; ?><strong class="text-danger">*</strong></label>
                                                <input type="text" name="username" class="form-control" value="<?= $user['username']; ?>">
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4">
                                                        <label for="first_name"><?= ALBERT_PRENOM; ?><strong class="text-danger">*</strong></label>
                                                        <input type="text" name="first_name" class="form-control" value="<?= $user['first_name']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4">
                                                        <label for="last_name"><?= ALBERT_NOM; ?><strong class="text-danger">*</strong></label>
                                                        <input type="text" name="last_name" class="form-control" value="<?= $user['last_name']; ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="name"><?= ALBERT_ADRESSE_E_MAIL; ?></label>
                                                <input type="email" name="email" class="form-control" value="<?= $user['email']; ?>" disabled>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4">
                                                        <label for="direct_phone"><?= ALBERT_LIGNE_DIRECTE; ?><strong class="text-danger">*</strong></label>
                                                        <input type="text" name="direct_phone" class="form-control" value="<?= $user['direct_phone']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4">
                                                        <label for="emergency_phone"><?= ALBERT_NUMERO_DURGENCE; ?></label>
                                                        <input type="text" name="emergency_phone" class="form-control" value="<?= $user['emergency_phone']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="cleaning_number"><?= ALBERT_N_SERVICE_NETTOYAGE; ?></label>
                                                <input type="text" name="cleaning_number" class="form-control" value="<?= $user['cleaning_number'] ?? ''; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="technical_service_number"><?= ALBERT_N_SERVICE_TECHNIQUE; ?></label>
                                                <input type="text" name="technical_service_number" class="form-control" value="<?= $user['technical_service_number'] ?? ''; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label for="infos_comp"><?= ALBERT_INFORMATIONS_COMPLEMENTAIRES; ?></label>
                                            <textarea name="infos_comp" id="infos_comp" class="form-control" placeholder="<?= ALBERT_TOUTE_INFORMATION_COMPLEMENTAIRE_QUE_VOUS_JUGEREZ; ?>"><?= $user['infos_comp'] ?? ''; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label for="channel_manager"><?= ALBERT_UTILISEZ_VOUS_UN_CHANNEL_MANAGER_SI_OUI_LEQUEL; ?></label>
                                            <input type="text" name="channel_manager" id="channel_manager" class="form-control" value="<?= $user['channel_manager']; ?>">
                                        </div>
                                    </div>




                                    <hr class="my-2">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group mt-2">
                                                    <label for="use_albert_guide">Utilisez-vous le guide Albert ?</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select name="use_albert_guide" class="form-control" required>
                                                        <option value="">Sélectionnez</option>
                                                        <option value="0" <?= (empty($user['use_albert_guide'])) ? 'selected' : ''; ?>>Non</option>
                                                        <option value="1" <?= (!empty($user['use_albert_guide'])) ? 'selected' : ''; ?>>Oui</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <hr class="my-2">

                                            <div class="col-md-8">
                                                <div class="form-group mb-4 mt-2">
                                                    <label for="use_albert_team_guide">Utilisez-vous le guide Albert Team ?</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mb-4">
                                                    <select name="use_albert_team_guide" class="form-control" required>
                                                        <option value="">Sélectionnez</option>
                                                        <option value="0" <?= (empty($user['use_albert_team_guide'])) ? 'selected' : ''; ?>>Non</option>
                                                        <option value="1" <?= (!empty($user['use_albert_team_guide'])) ? 'selected' : ''; ?>>Oui</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <hr class="my-2">
                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label for="use_jaffiche_complet">Utilisez-vous J'affiche Complet ?</label>

                                            <select name="use_jaffiche_complet" id="use_jaffiche_complet" class="form-control" required>
                                                <option value="">Sélectionnez</option>
                                                <option value="0" <?= (empty($user['use_jaffiche_complet'])) ? 'selected' : ''; ?>>Non</option>
                                                <option value="1" <?= (!empty($user['use_jaffiche_complet'])) ? 'selected' : ''; ?>>Oui</option>
                                            </select>

                                            <label for="jaffiche_complet_group_name"> Si oui quel est le nom du groupe ?</label>
                                            <input type="text" name="jaffiche_complet_group_name" id="jaffiche_complet_group_name" class="form-control" value="<?= $user['jaffiche_complet_group_name']; ?>">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-gradient gradient-7 rounded-pill" onclick="return confirm('<?= ALBERT_CONFIRMEZ_VOUS_LENREGISTREMENT_DE_CES_PARAMETRES; ?>')"><?= ALBERT_MODIFIER_MES_PARAMETRES; ?></button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card mb-5 bg-danger gradient-7">
                    <div class="card-body text-white">
                        <h2 class="mb-5 text-white">Portail affiliation</h2>
                        <a href="<?= site_url('account/portal'); ?>" class="btn btn-dark w-100">Accéder</a>
                    </div>
                </div>


                <?php
                /*
            <div class="col-md-5">
                <div class="card mb-5 bg-danger gradient-7">
                    <div class="card-body text-white">
                        <h2 class="mb-5 text-white"><?= ALBERT_AFFILIATION; ?></h2>

                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                if (!empty($user['promo_code_infos'])) {
                                ?>
                                    <p class="mb-0"><strong><?= ALBERT_CODE_PROMO; ?> :</strong></p>
                                    <p><?= $user['promo_code_infos'] ?? '-'; ?></p>

                                    <p class="mb-0"><strong><?= ALBERT_CE_QUALBERT_VOUS_DOIT; ?> :</strong></p>
                                    <p><?= $user['amount_due']; ?></p>
                                <?php
                                } else {
                                ?>
                                    <p class="mb-0"><?= ALBERT_AVOIR_DES_AMIS_CA_PAYE; ?><br><a href="<?= site_url('accueil#contact'); ?>" class="underline-3 style-3 white text-white"><?= ALBERT_CONTACTEZ_NOUS; ?></a> <?= ALBERT_POUR_ETRE_AFFILIE; ?></p>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="col-md-12">
                                <hr class="my-3 mt-3" style="border-top: 1px solid white;">
                                <p class="mb-0"><strong>Albert vous a déjà versé :</strong></p>
                                <p class="mb-0"><?= $user['amount_paid']; ?></p>
                            </div>
                            <div class="col-md-12">
                                <hr class="my-3 mt-3" style="border-top: 1px solid white;">
                                <p class="mb-2">Votre lien d'affiliation</p>
                                <input type="text" class="form-control" id="affiliate_link" value="<?= site_url('?affiliation=' . str_rot13($user['unique_id'])); ?>">
                                <a href="<?= site_url('account/children'); ?>" class="btn btn-primary btn-sm mt-2 w-100">Consulter mes filleuls</a>
                            </div>
                        </div>
                    </div>
                </div>
*/
                ?>

                <div class="job-list mb-10">

                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="<?= site_url('account/updateLogo'); ?>" method="POST" enctype="multipart/form-data">
                                <h3 class="checkout_title f_p f_600 f_size_20 mb_40 mt-2">
                                    Personnalisez votre guide
                                </h3>
                                <div class="row mb-4 gy-4">
                                    <div class="col text-left">
                                        <label class="mb-0">Votre logo (sur fond transparent) <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" name="file">
                                    </div>

                                    <div class="col-12 text-left">
                                        <label for="guide_theme" class="mb-0">Thème de votre guide <span class="text-danger">*</span></label>
                                        <select name="guide_theme" id="guide_theme" class="form-control">
                                            <option value="dark" <?= ($user['guide_theme'] == 'dark') ? 'selected' : ''; ?>>Sombre</option>
                                            <option value="light" <?= ($user['guide_theme'] == 'light') ? 'selected' : ''; ?>>Clair</option>
                                        </select>
                                    </div>

                                    <?php
                                    if (!empty($user['avatar'])) {
                                    ?>

                                        <div class="col-auto mt-5">
                                            <a href="<?= $user['avatar_url']; ?>" target="_blank">
                                                <div class="avatar_preview" style="background-image: url('<?= $user['avatar_url']; ?>');"></div>
                                            </a>
                                        </div>

                                    <?php
                                    }
                                    ?>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-gradient gradient-7 rounded-pill" type="submit"><?= ALBERT_ENREGISTRER; ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="<?= site_url('account/updatePassword'); ?>" method="POST">
                                <h3 class="checkout_title f_p f_600 f_size_20 mb_40 mt-2">
                                    <?= ALBERT_MODIFIER_VOTRE_MOT_DE_PASSE; ?>
                                </h3>
                                <div class="row mb-4">
                                    <div class="col-md-12 text-left">
                                        <label class="mb-0"><?= ALBERT_MOT_DE_PASSE_ACTUEL; ?> <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="current_password" placeholder="<?= ALBERT_VOTRE_MOT_DE_PASSE_ACTUEL; ?>" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-12 text-left">
                                        <label class="mb-0"><?= ALBERT_NOUVEAU_MOT_DE_PASSE_2; ?> <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="new_password" id="password_new" placeholder="<?= ALBERT_VOTRE_NOUVEAU_MOT_DE_PASSE; ?>" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-12 text-left">
                                        <label class="mb-0"><?= ALBERT_CONFIRMATION; ?> <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="new_password_conf" id="password_conf" placeholder="<?= ALBERT_CONFIRMATION_DU_NOUVEAU_MOT_DE_PASSE; ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-gradient gradient-7 rounded-pill" id="editPasswordButton" type="submit"><?= ALBERT_ENREGISTRER; ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="<?= site_url('account/updateParams'); ?>" method="POST">
                                <h3 class="checkout_title f_p f_600 f_size_20 mb_40 mt-2">
                                    Notifications mail
                                </h3>
                                <div class="alert alert-danger">
                                    <p class="small mb-0">🚨 Par défaut, tous les paramètres de notifications <strong>sont actifs</strong>.<br>En cas de désactivation de votre part, nous déclinons toute responsabilité en cas d'information non reçues de notre part vous permettant d'être tenu informé des éventuels évènements survenus dans vos logements.</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group mt-2">
                                            <label for="use_albert_guide">Notifications de nouveaux tickets</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="notification_tickets_allowed" class="form-control" required>
                                                <option value="">Sélectionnez</option>
                                                <option value="0" <?= (empty($user['notification_tickets_allowed'])) ? 'selected' : ''; ?>>Non</option>
                                                <option value="1" <?= (!empty($user['notification_tickets_allowed'])) ? 'selected' : ''; ?>>Oui</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-gradient gradient-7 rounded-pill" type="submit"><?= ALBERT_ENREGISTRER; ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <a href="<?= site_url('mon-abonnement'); ?>" class="btn btn-info rounded-pill py-3 w-100"><?= ALBERT_GERER_MON_ABONNEMENT; ?></a>
                        </div>
                    </div>

                    <div class="col-auto">
                        <a href="<?= site_url('deconnexion'); ?>" title="<?= ALBERT_DECONNEXION; ?>" class="btn btn-sm btn-danger text-white text-md-dark rounded w-100 mt-3" onclick="return confirm('<?= ALBERT_CONFIRMEZ_VOUS_LA_DECONNEXION; ?>')"><i class="uil uil-power"></i> Déconnexion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>