<?php
$red_star = ' <span class="text-danger">*</span>';
?>
<section>
    <div class="container pt-7 pt-md-11 pb-8">
        <div class="row">
            <div class="col-md-12">
                <div class="job-list mb-10">
                    <h3 class="display-3 mb-4 text-center"><?= ALBERT_MODIFICATION_DE_VOTRE_ANNONCE; ?></h3>

                    <form action="<?= site_url('annonces/update'); ?>" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="unique_id" value="<?= $annonce['unique_id']; ?>">
                        <input type="hidden" name="annonce_id" value="<?= $annonce['id']; ?>">
                        <div class="card card-border-start border-success mb-5">
                            <div class="card-body py-5">
                                <h4 class="mb-3"><?= ALBERT_A_PROPOS_DE_VOTRE_LOGEMENT; ?> :</h3>
                                    <div class="mb-4">
                                        <label for="title"><strong><?= ALBERT_MERCI_DINDIQUER_ICI_LE_NOM_DE_LANNONCE; ?><?= $red_star; ?></strong></label>
                                        <input type="text" name="title" id="title" class="form-control" placeholder="AlbertSAV" value="<?= $annonce['title']; ?>" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="aprobation_rules"><strong><?= ALBERT_REGLES_DAPPROBATION_DE_RESERVATION; ?></strong></label>
                                        <textarea id="aprobation_rules" name="aprobation_rules" class="form-control" placeholder=""><?= $annonce['aprobation_rules']; ?></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label for="sav_type"><strong><?= ALBERT_TYPE_DE_SERVICE_CLIENT; ?><?= $red_star; ?></strong></label>
                                        <select class="form-select" id="sav_type" name="sav_type" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="happy" <?= ($annonce['sav_type'] == 'happy') ? 'selected' : ''; ?>><?= ALBERT_JOVIAL; ?></option>
                                            <option value="strict" <?= ($annonce['sav_type'] == 'strict') ? 'selected' : ''; ?>><?= ALBERT_STRICT; ?></option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label for="title"><strong><?= ALBERT_EST_CE_UNE_MAISON_OU_UN_APPARTEMENT; ?><?= $red_star; ?></strong></label>
                                        <select class="form-select" id="title" name="type" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="house" <?= ($annonce['type'] == 'house') ? 'selected' : ''; ?>><?= ALBERT_MAISON; ?></option>
                                            <option value="flat" <?= ($annonce['type'] == 'flat') ? 'selected' : ''; ?>><?= ALBERT_APPARTEMENT; ?></option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label for="address"><strong><?= ALBERT_RUE; ?><?= $red_star; ?></strong></label>
                                        <input type="text" name="address" id="address" class="form-control" value="<?= $annonce['address']; ?>" required>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <label for="zipcode"><strong><?= ALBERT_CODE_POSTAL; ?><?= $red_star; ?></strong></label>
                                                <input type="text" name="zipcode" id="zipcode" class="form-control" value="<?= $annonce['zipcode']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <label for="city"><strong><?= ALBERT_VILLE; ?><?= $red_star; ?></strong></label>
                                                <input type="text" name="city" id="city" class="form-control" value="<?= $annonce['city']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-4">
                                                <label for="country"><strong><?= ALBERT_PAYS; ?><?= $red_star; ?></strong></label>
                                                <input type="text" name="country" id="country" class="form-control" value="<?= $annonce['country']; ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="size"><strong><?= ALBERT_SUPERFICIE; ?><?= $red_star; ?></strong></label>
                                        <input type="number" name="size" id="size" class="form-control" min="1" value="<?= $annonce['size']; ?>" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="floor"><strong><?= ALBERT_ETAGE; ?><?= $red_star; ?></strong></label>
                                        <input type="text" name="floor" id="floor" class="form-control" value="<?= $annonce['floor']; ?>" required>
                                    </div>

                                    <div class="row">
                                        <div class="mb-4 col-md-6">
                                            <label for="building_code"><strong><?= ALBERT_CODE_IMMEUBLE; ?></strong></label>
                                            <input type="text" name="building_code" id="building_code" class="form-control" value="<?= $annonce['building_code'] ?? ''; ?>">
                                        </div>

                                        <div class="mb-4 col-md-6">
                                            <label for="key_box_code"><strong><?= ALBERT_CODE_LOGEMENT_BOITE_A_CLEF; ?></strong></label>
                                            <input type="text" name="key_box_code" id="key_box_code" class="form-control" value="<?= $annonce['key_box_code'] ?? ''; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="is_elevator"><strong><?= ALBERT_Y_A_TIL_UN_ASCENSEUR; ?><?= $red_star; ?></strong></label>
                                        <select class="form-select" id="is_elevator" name="is_elevator" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['is_elevator'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['is_elevator'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label for="nb_couchages"><strong><?= ALBERT_COMBIEN_DE_COUCHAGES_A_VOTRE_LOGEMENT; ?><?= $red_star; ?></strong></label>
                                        <input type="number" name="nb_couchages" id="nb_couchages" class="form-control" value="<?= $annonce['nb_couchages']; ?>" required>
                                    </div>


                                    <div class="mb-4">
                                        <label for="equipements[]"><strong><?= ALBERT_QUELS_SONT_LES_EQUIPEMENTS_PRESENTS_DANS_LE_LOGEME; ?><?= $red_star; ?></strong></label>
                                        <?php
                                        $i = 0;
                                        $eq_list = explode(',', $annonce['equipements_list']);
                                        foreach ($equipements_list as $eq) {

                                            $is_other = ($eq['id'] == 9) ? 'is_other' : '';
                                            $is_other_div = ($eq['id'] == 9) ? 'is_other_equipement' : '';

                                            $checked = (in_array($eq['id'], $eq_list)) ? 'checked' : '';

                                            $i++;

                                            if ($i == count($equipements_list)) {
                                                $required = '';
                                            } else {
                                                $required = '';
                                            }


                                        ?>
                                            <p class="mb-0"><input type="checkbox" name="equipements[]" class="form-check-input <?= $is_other; ?>" id="equipements_<?= $eq['id']; ?>" value="<?= $eq['id']; ?>" <?= $checked; ?> <?= $required; ?> data-div="<?= $is_other_div; ?>"> <label for="equipements_<?= $eq['id']; ?>"><?= $eq['name']; ?></p>
                                        <?php
                                        }


                                        $show_other_equipements = (in_array(9, $eq_list)) ? 'd-block' : 'd-none';
                                        $show_other_equipements_state = (in_array(9, $eq_list)) ? 'required' : '';
                                        ?>
                                    </div>

                                    <div class="mb-4 <?= $show_other_equipements; ?>" id="is_other_equipement_div">
                                        <label for="is_other_equipement"><strong><?= ALBERT_PRECISEZ; ?><?= $red_star; ?></strong></label>
                                        <input type="text" name="is_other_equipement" id="is_other_equipement" class="form-control" value="<?= $annonce['is_other_equipement']; ?>" <?= $show_other_equipements_state; ?>>
                                    </div>

                                    <div class="mb-4">
                                        <label for="have_poi_around"><strong>Y a-t-il des attractions aux alentours ?<?= $red_star; ?></strong></label>
                                        <select class="form-select yes_no_listener" id="have_poi_around" name="have_poi_around" data-div="is_other_poi_around_div" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['have_poi_around'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['have_poi_around'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="mb-4 d-none" id="is_other_poi_around_div">
                                        <label for="is_other_poi_around"><strong><?= ALBERT_PRECISEZ; ?></strong></label>
                                        <input type="text" name="is_other_poi_around" id="is_other_poi_around" class="form-control" value="<?= $annonce['is_other_poi_around']; ?>">
                                    </div>

                                    <div class="mb-4">
                                        <label for="have_tv_more_chanels"><strong>Avez-vous des chaînes TV particulières ? (Netflix, Molotov...)<?= $red_star; ?></strong></label>
                                        <select class="form-select yes_no_listener" id="have_tv_more_chanels" name="have_tv_more_chanels" data-div="is_other_tv_more_chanels_div" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['have_tv_more_chanels'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['have_tv_more_chanels'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="mb-4 d-none" id="is_other_tv_more_chanels_div">
                                        <label for="is_other_tv_more_chanels"><strong><?= ALBERT_PRECISEZ; ?></strong></label>
                                        <input type="text" name="is_other_tv_more_chanels" id="is_other_tv_more_chanels" class="form-control" value="<?= $annonce['is_other_tv_more_chanels']; ?>">
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-4">
                                            <label for="bike_room"><strong>Y a-t-il un local à vélo ?<?= $red_star; ?></strong></label>
                                            <select class="form-select yes_no_listener" id="bike_room" name="bike_room" data-div="bike_room_details_div" required>
                                                <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                                <option value="1" <?= ($annonce['bike_room'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                                <option value="0" <?= ($annonce['bike_room'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                            </select>
                                        </div>

                                        <div class="mb-4 <?= (!empty($annonce['bike_room'])) ? 'd-block' : 'd-none'; ?>" id="bike_room_details_div">
                                            <label for="bike_room_details"><strong>Lien obligatoire avec indication pour visualiser le local à vélo<?= $red_star; ?></strong> <?= $red_star; ?></label>
                                            <input type="text" name="bike_room_details" id="bike_room_details" class="form-control" value="<?= $annonce['bike_room_details']; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="have_nego_price"><strong>Avez-vous des tarifs négociables ?<?= $red_star; ?></strong></label>
                                        <select class="form-select yes_no_listener" id="have_nego_price" name="have_nego_price" data-div="is_other_nego_price_div" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['have_nego_price'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['have_nego_price'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="mb-4 d-none" id="is_other_nego_price_div">
                                        <label for="is_other_nego_price"><strong><?= ALBERT_PRECISEZ; ?></strong></label>
                                        <input type="text" name="is_other_nego_price" id="is_other_nego_price" class="form-control" value="<?= $annonce['is_other_nego_price']; ?>">
                                    </div>

                                    <div class="mb-4">
                                        <label for="average_ttt"><strong>Temps de trajet aux moyens de transports les plus proches</strong></label>
                                        <input type="text" name="average_ttt" id="average_ttt" class="form-control" placeholder="<?= ALBERT_PRECISEZ; ?>" value="<?= $annonce['average_ttt']; ?>">
                                    </div>
                            </div>
                        </div>

                        <div class="card card-border-start border-warning mb-5">
                            <div class="card-body py-5">
                                <h4 class="mb-3"><?= ALBERT_ACTIVITE_OPERATIONNELLE; ?> :</h3>


                                    <div class="mb-4">
                                        <label for="arrival_hour"><strong><?= ALBERT_QUELLE_EST_LHEURE_DARRIVEE; ?><?= $red_star; ?></strong></label>
                                        <input type="text" name="arrival_hour" id="arrival_hour" class="form-control" value="<?= $annonce['arrival_hour']; ?>" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="leaving_hour"><strong><?= ALBERT_QUELLE_EST_LHEURE_DE_DEPART; ?><?= $red_star; ?></strong></label>
                                        <input type="text" name="leaving_hour" id="leaving_hour" class="form-control" value="<?= $annonce['leaving_hour']; ?>" required>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="early_check_in"><strong><?= ALBERT_EARLY_CHECK_IN; ?> ?<?= $red_star; ?></strong></label>
                                                <select class="form-select yes_no_listener" id="early_check_in" name="early_check_in" data-div="early_check_rules_div" required>
                                                    <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                                    <option value="1" <?= ($annonce['early_check_in'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                                    <option value="0" <?= ($annonce['early_check_in'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                                </select>
                                            </div>

                                            <div class="mb-4 <?= (!empty($annonce['early_check_in'])) ? 'd-block' : 'd-none'; ?>" id="early_check_rules_div">
                                                <label for="early_check_rules"><strong><?= ALBERT_SI_OUI_QUELLES_SONT_LES_REGLES_DU_CHECK_IN; ?><?= $red_star; ?></strong></label>
                                                <input type="text" name="early_check_rules" id="early_check_rules" class="form-control" value="<?= $annonce['early_check_rules']; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="late_check_out"><strong><?= ALBERT_LATE_CHECK_OUT; ?> ?<?= $red_star; ?></strong></label>
                                                <select class="form-select yes_no_listener" id="late_check_out" name="late_check_out" data-div="late_check_rules_div" required>
                                                    <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                                    <option value="1" <?= ($annonce['late_check_out'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                                    <option value="0" <?= ($annonce['late_check_out'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                                </select>
                                            </div>

                                            <div class="mb-4 <?= (!empty($annonce['late_check_out'])) ? 'd-block' : 'd-none'; ?>" id="late_check_rules_div">
                                                <label for="late_check_rules"><strong><?= ALBERT_SI_OUI_QUELLES_SONT_LES_REGLES_DU_CHECK_OUT; ?><?= $red_star; ?></strong></label>
                                                <input type="text" name="late_check_rules" id="late_check_rules" class="form-control" value="<?= $annonce['late_check_rules']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="is_deposit"><strong><?= ALBERT_Y_A_T_IL_UNE_CAUTION; ?><?= $red_star; ?></strong></label>
                                        <select class="form-select yes_no_listener" id="is_deposit" name="is_deposit" data-div="caution_infos_div" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['is_deposit'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['is_deposit'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="<?= (!empty($annonce['is_deposit'])) ? 'd-block' : 'd-none'; ?>" id="caution_infos_div">
                                        <div class="mb-4">
                                            <label for="deposit_rules"><strong><?= ALBERT_SI_OUI_DETAILS_CONCERNANT_LE_VERSEMENT_DE_LA_CAUTI; ?></strong></label>
                                            <input type="text" name="deposit_rules" id="deposit_rules" class="form-control" value="<?= $annonce['deposit_rules']; ?>">
                                        </div>

                                        <div class="mb-4">
                                            <label for="deposit_refund"><strong><?= ALBERT_SI_OUI_QUAND_LA_CAUTION_SERA_RESTITUEE; ?></strong></label>
                                            <input type="text" name="deposit_refund" id="deposit_refund" class="form-control" value="<?= $annonce['deposit_refund']; ?>">
                                        </div>
                                    </div>



                                    <div class="mb-4">
                                        <label for="consommables[]"><strong><?= ALBERT_QUELS_CONSOMMABLES_PROPOSEZ_VOUS; ?><?= $red_star; ?></strong></label>
                                        <?php
                                        $i = 0;
                                        $cons_list = explode(',', $annonce['consommables_list']);
                                        foreach ($consommables_list as $cons) {
                                            if (in_array($cons['id'], $cons_list)) {
                                                $checked = 'checked';
                                            } else {
                                                $checked = '';
                                            }

                                            $i++;

                                            if ($i == count($consommables_list)) {
                                                $required = '';
                                            } else {
                                                $required = '';
                                            }

                                            $is_other = ($cons['id'] == 8) ? 'is_other' : '';
                                            $is_other_div = ($cons['id'] == 8) ? 'is_other_consommable' : '';
                                        ?>
                                            <p class="mb-0"><input type="checkbox" name="consommables[]" class="form-check-input <?= $is_other; ?>" id="consommable_<?= $cons['id']; ?>" value="<?= $cons['id']; ?>" data-div="<?= $is_other_div; ?>" <?= $checked; ?> <?= $required; ?>> <label for="consommable_<?= $cons['id']; ?>"><?= $cons['name']; ?></p>
                                        <?php
                                        }

                                        $show_other_consommables = (in_array(8, $cons_list)) ? 'd-block' : 'd-none';
                                        $show_other_consommables_state = (in_array(8, $cons_list)) ? 'required' : '';
                                        ?>
                                    </div>

                                    <div class="mb-4 <?= $show_other_consommables; ?>" id="is_other_consommable_div">
                                        <label for="is_other_consommable"><strong><?= ALBERT_PRECISEZ; ?><?= $red_star; ?></strong></label>
                                        <input type="text" name="is_other_consommable" id="is_other_consommable" class="form-control" <?= $show_other_consommables_state; ?> value="<?= $annonce['is_other_consommable']; ?>">
                                    </div>


                                    <div class="mb-4">
                                        <label for="coffe_type[]"><strong><?= ALBERT_TYPE_DE_MACHINE_A_CAFE; ?><?= $red_star; ?></strong></label>
                                        <?php
                                        foreach ($coffe_list as $coff) {

                                            if ($annonce['coffe_type'] == $coff['id']) {
                                                $checked = 'checked';
                                            } else {
                                                $checked = '';
                                            }

                                            $is_other = ($coff['id'] == 5) ? 'is_other' : '';
                                            $is_other_div = 'is_other_coffe_type';
                                        ?>
                                            <p class="mb-0"><input type="radio" name="coffe_type[]" class="form-check-input radio_coffe_check <?= $is_other; ?>" id="coffe_<?= $coff['id']; ?>" value="<?= $coff['id']; ?>" data-div="<?= $is_other_div; ?>" <?= $checked; ?>> <label for="coffe_<?= $coff['id']; ?>"><?= $coff['name']; ?></p>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                    <div class="mb-4 d-none" id="is_other_coffe_type_div">
                                        <label for="is_other_coffe_type"><strong><?= ALBERT_PRECISEZ; ?><?= $red_star; ?></strong></label>
                                        <input type="text" name="is_other_coffe_type" id="is_other_coffe_type" class="form-control">
                                    </div>

                                    <div class="mb-4">
                                        <label for="is_other_coffe_type"><strong><?= ALBERT_TYPE_DE_CHAUFFAGE; ?></strong></label>
                                        <input type="text" name="heater_type" class="form-control" placeholder="<?= ALBERT_TYPE_DE_CHAUFFAGE; ?>" value="<?= $annonce['heater_type']; ?>">
                                    </div>

                                    <div class="mb-4">
                                        <label for="is_other_coffe_type"><strong><?= ALBERT_FONCTIONNEMENT_DU_CHAUFFAGE; ?></strong></label>
                                        <input type="text" name="heater_tips" class="form-control" placeholder="<?= ALBERT_FONCTIONNEMENT_DU_CHAUFFAGE; ?>" value="<?= $annonce['heater_tips']; ?>">
                                    </div>

                                    <div class="mb-4">
                                        <label for="extra_prestations"><strong><?= ALBERT_PROPOSEZ_VOUS_DES_PRESTATIONS_SUPPLEMENTAIRES_PETI; ?><?= $red_star; ?></strong></label>
                                        <select class="form-select yes_no_listener" id="extra_prestations" name="extra_prestations" data-div="extra_prestations_details_div" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['extra_prestations'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['extra_prestations'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="mb-4 <?= (!empty($annonce['extra_prestations'])) ? 'd-block' : 'd-none'; ?>" id="extra_prestations_details_div">
                                        <label for="extra_prestations_details"><strong><?= ALBERT_SI_OUI_LESQUELLES; ?></strong></label>
                                        <input type="text" name="extra_prestations_details" id="extra_prestations_details" class="form-control" value="<?= $annonce['extra_prestations_details']; ?>">
                                    </div>

                                    <div class="mb-4">
                                        <label for="shop_link"><strong>Lien vers votre boutique</strong></label>
                                        <input type="text" name="shop_link" id="shop_link" class="form-control" placeholder="https://......" maxlength="190" value="<?= $annonce['shop_link']; ?>">
                                        <p class="small text-danger">Le lien de votre boutique doit être une URL valide.</p>
                                    </div>

                                    <div class="mb-4">
                                        <label for="reglements[]"><strong><?= ALBERT_QUELS_EST_LE_REGLEMENT_INTERIEUR; ?><?= $red_star; ?></strong></label>
                                        <?php
                                        $i = 0;
                                        $reg_list = explode(',', $annonce['reglement_list']);
                                        foreach ($reglement_list as $reg) {

                                            if (in_array($reg['id'], $reg_list)) {
                                                $checked = 'checked';
                                            } else {
                                                $checked = '';
                                            }
                                            $i++;

                                            if ($i == count($reglement_list)) {
                                                $required = '';
                                            } else {
                                                $required = '';
                                            }

                                            $is_other = ($reg['id'] == 6) ? 'is_other' : '';
                                            $is_other_div = ($reg['id'] == 6) ? 'is_other_reglement' : '';
                                        ?>
                                            <p class="mb-0"><input type="checkbox" name="reglements[]" class="form-check-input <?= $is_other; ?>" id="reg_<?= $reg['id']; ?>" value="<?= $reg['id']; ?>" data-div="<?= $is_other_div; ?>" <?= $checked; ?> <?= $required; ?>> <label for="reg_<?= $reg['id']; ?>"><?= $reg['name']; ?></p>
                                        <?php
                                        }

                                        $show_other_reglements = (in_array(6, $reg_list)) ? 'd-block' : 'd-none';
                                        $show_other_reglements_state = (in_array(6, $reg_list)) ? 'required' : '';
                                        ?>
                                    </div>

                                    <div class="mb-4 <?= $show_other_reglements; ?>" id="is_other_reglement_div">
                                        <label for="is_other_reglement"><strong><?= ALBERT_PRECISEZ; ?><?= $red_star; ?></strong></label>
                                        <input type="text" name="is_other_reglement" id="is_other_reglement" class="form-control" <?= $show_other_reglements_state; ?> value="<?= $annonce['is_other_reglement']; ?>">
                                    </div>

                                    <div class="mb-4">
                                        <label><strong><?= ALBERT_QUELLES_PLATEFORMES_DE_LOCATION_UTILISEZ_VOUS; ?></strong></label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="booking_link"><strong>Booking</strong></label>
                                                    <input type="text" name="booking_link" id="booking_link" class="form-control" placeholder="Lien booking" value="<?= $annonce['booking_link']; ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="airbnb_link"><strong>Airbnb</strong><?= $red_star; ?></label>
                                                    <input type="text" name="airbnb_link" id="airbnb_link" class="form-control" placeholder="Lien airbnb" value="<?= $annonce['airbnb_link']; ?>" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="leboncoin_link"><strong>Leboncoin</strong></label>
                                                    <input type="text" name="leboncoin_link" id="leboncoin_link" class="form-control" placeholder="Lien leboncoin" value="<?= $annonce['leboncoin_link']; ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="abritel_link"><strong>Abritel</strong></label>
                                                    <input type="text" name="abritel_link" id="abritel_link" class="form-control" placeholder="Lien abritel" value="<?= $annonce['abritel_link']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="is_centralized_messagerie"><strong><?= ALBERT_LA_MESSAGERIE_EST_ELLE_CENTRALISEE; ?><?= $red_star; ?></strong></label>
                                        <select class="form-select" id="is_centralized_messagerie" name="is_centralized_messagerie" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['is_centralized_messagerie'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['is_centralized_messagerie'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label for="minimum_travel_duration"><strong><?= ALBERT_QUELLE_EST_LA_DUREE_MINIMUM_DE_SEJOUR; ?><?= $red_star; ?></strong></label>
                                        <input type="number" name="minimum_travel_duration" id="minimum_travel_duration" class="form-control" value="<?= $annonce['minimum_travel_duration']; ?>" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="maximum_travel_duration"><strong><?= ALBERT_QUELLE_EST_LA_DUREE_MAXIMUM_DE_SEJOUR; ?><?= $red_star; ?></strong></label>
                                        <input type="text" name="maximum_travel_duration" id="maximum_travel_duration" class="form-control" value="<?= $annonce['maximum_travel_duration']; ?>" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="limit_reservation_hour_same_day"><strong><?= ALBERT_JUSQUA_QUELLE_HEURE_LES_VOYAGEURS_PEUVENT_ILS_RESE; ?><?= $red_star; ?></strong></label>
                                        <input type="text" name="limit_reservation_hour_same_day" id="limit_reservation_hour_same_day" class="form-control" value="<?= $annonce['limit_reservation_hour_same_day']; ?>" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="month_reservation_average"><strong><?= ALBERT_QUELLE_EST_LA_FREQUENCE_DE_RESERVATION_DU_LOGEMENT; ?><?= $red_star; ?></strong></label>
                                        <input type="number" name="month_reservation_average" id="month_reservation_average" class="form-control" value="<?= $annonce['month_reservation_average']; ?>" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="is_automatic_message"><strong><?= ALBERT_AVEZ_VOUS_UN_MESSAGE_AUTOMATIQUE_POUR_VOS_INSTRUCT; ?><?= $red_star; ?></strong></label>
                                        <select class="form-select yes_no_listener" id="is_automatic_message" name="is_automatic_message" data-div="automatic_message_reception_div" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['is_automatic_message'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['is_automatic_message'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="mb-4 <?= (!empty($annonce['is_automatic_message'])) ? 'd-block' : 'd-none'; ?>" id="automatic_message_reception_div">
                                        <label for="automatic_message_reception"><strong><?= ALBERT_SI_OUI_QUAND_EST_CE_QUE_LE_VOYAGEUR_LE_RECOIT; ?></strong></label>
                                        <textarea name="automatic_message_reception" id="automatic_message_reception" class="form-control" rows="2"><?= $annonce['automatic_message_reception']; ?></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label for="is_self_entry"><strong><?= ALBERT_LENTREE_EST_ELLE_AUTONOME; ?><?= $red_star; ?></strong><strong></label>
                                        <select class="form-select" id="is_self_entry" name="is_self_entry" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['is_self_entry'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['is_self_entry'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label for="guide_link"><strong>Lien du guide d'entée<?= $red_star; ?></strong></label>
                                        <textarea name="guide_link" id="guide_link" class="form-control" rows="3"><?= $annonce['guide_link'] ?? ''; ?></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label for="entry_guide_link"><strong>Infos complémentaires guide<?= $red_star; ?></strong></label>
                                        <textarea name="entry_guide_link" id="entry_guide_link" class="form-control" rows="5" value="<?= $annonce['entry_guide_link']; ?>" required><?= $annonce['entry_guide_link']; ?></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label for="video_check_in"><strong>Vidéo du check-in</strong></label>
                                        <input type="text" name="video_check_in" id="video_check_in" class="form-control" placeholder="Renseignez le lien d'une vidéo de votre check-in" maxlength="190" value="<?= $annonce['video_check_in']; ?>">
                                        <p class="small text-danger">Le lien de votre vidéo doit être une URL valide.</p>
                                    </div>

                                    <div class="mb-4">
                                        <label for="refund_political_link"><strong><?= ALBERT_QUELLE_EST_LA_POLITIQUE_DANNULATION_REMBOURSEMENT; ?><?= $red_star; ?></strong></label>
                                        <input type="text" name="refund_political_link" id="refund_political_link" class="form-control" value="<?= $annonce['refund_political_link']; ?>" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="is_parking"><strong><?= ALBERT_PARKING_AVEC_LE_LOGEMENT; ?><?= $red_star; ?></strong></label>
                                        <select class="form-select" id="is_parking" name="is_parking" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['is_parking'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['is_parking'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label for="parking_possibilities"><strong><?= ALBERT_PRECISEZ_NOUS_COMMENT_Y_ACCEDER_SI_PAS_DE_PARKING; ?></strong></label>
                                        <input type="text" name="parking_possibilities" id="parking_possibilities" class="form-control" value="<?= $annonce['parking_possibilities']; ?>">
                                    </div>

                                    <div class="mb-4">
                                        <label for="user_makes_sav"><strong><?= ALBERT_FEREZ_VOUS_LE_SERVICE_CLIENT_ENTRE_23H_ET_9H; ?><?= $red_star; ?></strong></label>
                                        <select class="form-select" id="user_makes_sav" name="user_makes_sav" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['user_makes_sav'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['user_makes_sav'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label for="is_wifi"><strong><?= ALBERT_AVEZ_VOUS_LA_WIFI_DANS_LE_LOGEMENT; ?><?= $red_star; ?></strong></label>
                                        <select class="form-select yes_no_listener" id="is_wifi" name="is_wifi" data-div="wifi_zone_div" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['is_wifi'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['is_wifi'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="<?= (!empty($annonce['is_wifi'])) ? 'd-block' : 'd-none'; ?>" id="wifi_zone_div">
                                        <div class="row">
                                            <div class="mb-4">
                                                <label for="wifi_user"><strong><?= ALBERT_IDENTIFIANT_WIFI; ?></strong></label>
                                                <input type="text" name="wifi_user" id="wifi_user" class="form-control" value="<?= $annonce['wifi_user'] ?? ''; ?>">
                                            </div>

                                            <div class="mb-4">
                                                <label for="wifi_password"><strong><?= ALBERT_MOT_DE_PASSE_WIFI; ?></strong></label>
                                                <input type="text" name="wifi_password" id="wifi_password" class="form-control" value="<?= $annonce['wifi_password']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-12">
                                        <label for="have_fan"><strong>Y a t-il un ventilateur ? ?<?= $red_star; ?></strong></label>
                                        <select class="form-select" id="have_fan" name="have_fan">
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['have_fan'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['have_fan'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label for="have_clim"><strong>Avez-vous la climatisation dans le logement ?<?= $red_star; ?></strong></label>
                                        <select class="form-select yes_no_listener" id="have_clim" name="have_clim" data-div="have_clim_zone_div" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['have_clim'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['have_clim'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="d-none" id="have_clim_zone_div">
                                        <div class="row">
                                            <div class="mb-4 col-md-12">
                                                <label for="is_other_clim"><strong><?= ALBERT_PRECISEZ; ?></strong></label>
                                                <input type="text" name="is_other_clim" id="is_other_clim" maxlength="190" placeholder="Précisez" value="<?= $annonce['is_other_clim']; ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="have_electric_dash"><strong>Y a-t-il un tableau électrique dans le logement ?<?= $red_star; ?></strong></label>
                                        <select class="form-select yes_no_listener" id="have_electric_dash" name="have_electric_dash" data-div="have_electric_dash_zone_div" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['have_electric_dash'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['have_electric_dash'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="d-none" id="have_electric_dash_zone_div">
                                        <div class="row">
                                            <div class="mb-4 col-md-12">
                                                <label for="is_other_electric_dash"><strong><?= ALBERT_PRECISEZ; ?></strong></label>
                                                <input type="text" name="is_other_electric_dash" id="have_electric_dash_div" maxlength="190" placeholder="Précisez" value="<?= $annonce['is_other_electric_dash']; ?>" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="is_tv_code"><strong><?= ALBERT_NECESSITE_DUN_CODE_POUR_LEQUIPEMENT_TELEVISION; ?><?= $red_star; ?></strong></label>
                                        <select class="form-select yes_no_listener" id="is_tv_code" name="is_tv_code" data-div="tv_code_div" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['is_tv_code'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['is_tv_code'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="mb-4 <?= (!empty($annonce['is_tv_code'])) ? 'd-block' : 'd-none'; ?>" id="tv_code_div">
                                        <label for="tv_code"><strong><?= ALBERT_SI_OUI_QUEL_EST_LE_CODE; ?></strong></label>
                                        <input type="text" name="tv_code" id="tv_code" class="form-control" value="<?= $annonce['tv_code'] ?? ''; ?>">
                                    </div>

                                    <div class="mb-4">
                                        <label for="is_bags_deposit"><strong><?= ALBERT_POSSIBILITE_DUNE_CONSIGNE_OU_DEPOTS_BAGAGES; ?><?= $red_star; ?></strong></label>
                                        <select class="form-select yes_no_listener" id="is_bags_deposit" name="is_bags_deposit" data-div="bags_deposit_rules_div" required>
                                            <option selected="" disabled="" value=""><?= ALBERT_SELECTIONNEZ; ?></option>
                                            <option value="1" <?= ($annonce['is_bags_deposit'] == '1') ? 'selected' : ''; ?>><?= ALBERT_OUI; ?></option>
                                            <option value="0" <?= ($annonce['is_bags_deposit'] == '0') ? 'selected' : ''; ?>><?= ALBERT_NON; ?></option>
                                        </select>
                                    </div>

                                    <div class="mb-4 <?= (!empty($annonce['is_bags_deposit'])) ? 'd-block' : 'd-none'; ?>" id="bags_deposit_rules_div">
                                        <label for="bags_deposit_rules"><strong><?= ALBERT_SI_OUI_LIEN_DE_LA_CONSIGNE; ?></strong></label>
                                        <input type="text" name="bags_deposit_rules" id="bags_deposit_rules" class="form-control" value="<?= $annonce['bags_deposit_rules']; ?>">
                                    </div>

                                    <div class="mb-4">
                                        <label for="trash_location"><strong><?= ALBERT_OU_LES_VOYAGEURS_DOIVENT_ILS_JETER_LES_POUBELLES; ?><?= $red_star; ?></strong></label>
                                        <input type="text" name="trash_location" id="trash_location" class="form-control" value="<?= $annonce['trash_location']; ?>" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="other_points"><strong>Le cerveau d'Albert IA<?= $red_star; ?></strong></label>
                                        <textarea name="other_points" id="other_points" class="form-control" rows="5" required><?= $annonce['other_points']; ?></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label for="recurring_answers"><strong>Réponses récurrentes</strong></label>
                                        <textarea name="recurring_answers" id="recurring_answers" class="form-control" rows="5"><?= $annonce['recurring_answers']; ?></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label for="free_note"><strong><?= ALBERT_NOTE_LIBRE; ?></strong></label>
                                        <textarea name="free_note" id="free_note" class="form-control" rows="5"><?= $annonce['free_note']; ?></textarea>
                                    </div>
                            </div>
                        </div>

                        <div class="card card-border-start border-dark mb-5">
                            <div class="card-body py-5">
                                <label for="other_points"><strong>Pour finir, quel niveau d'autonomie et d'imagination les agents doivent avoir ?<?= $red_star; ?></strong></label>

                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <input type="range" id="autonomy_value" name="autonomy_value" class="form-range" steps="1" min="1" max="4" value="<?= $annonce['autonomy_value']; ?>" oninput="this.nextElementSibling.value = this.value" required>

                                    </div>
                                    <div class="col-md-6">
                                        <p id="answer_1" class="autonomy_answers d-<?= ($annonce['autonomy_value'] == '1') ? 'block' : 'none'; ?>"><span class="display-6 me-2">1</span>Aucune autonomie, vous pouvez me déranger régulièrement.</p>
                                        <p id="answer_2" class="autonomy_answers d-<?= ($annonce['autonomy_value'] == '2') ? 'block' : 'none'; ?>"><span class="display-6 me-2">2</span>Utilisation des fiches + me demander si besoin.</p>
                                        <p id="answer_3" class="autonomy_answers d-<?= ($annonce['autonomy_value'] == '3') ? 'block' : 'none'; ?>"><span class="display-6 me-2">3</span>Prise d'initiatives régulières, début de l'autonomie.</p>
                                        <p id="answer_4" class="autonomy_answers d-<?= ($annonce['autonomy_value'] == '4') ? 'block' : 'none'; ?>"><span class="display-6 me-2">4</span>Les agents sont libres de chaque décision et se basent sur les informations fournies dans la fiche logement.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-gradient gradient-7 w-100" onclick="return confirm('<?= ALBERT_CONFIRMEZ_VOUS_LA_MODIFICATION_DE_CETTE_ANNONCE; ?>')"><?= ALBERT_ENREGISTRER; ?></button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>