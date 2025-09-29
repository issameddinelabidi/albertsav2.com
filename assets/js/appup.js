var base_url = $("#base_url").val();
var basic = $("#basic").val();
var annonce_unique_id = $("#annonce_unique_id").val();

function highlight(div) {
    $("#" + div).addClass("highlight");
    setTimeout(function () {
        $("#" + div).removeClass("highlight");
    }, 700);
}

$(".yes_no_listener").change(function () {
    var div = $(this).attr("data-div");

    var id = $(this).attr("id");

    var val = $("#" + id)
        .find(":selected")
        .val();

    //If answer is yes, show div
    if (val == 1) {
        $("#" + div)
            .removeClass("d-none")
            .addClass("d-block");
        highlight(div);
    }

    //If answer is no, hide div
    if (val == 0) {
        $("#" + div)
            .removeClass("d-block")
            .addClass("d-none");
    }
});

$(".is_other").change(function () {
    var div = $(this).attr("data-div");

    if ($(this).is(":checked")) {
        // console.log('checked')
        $("#" + div + "_div")
            .removeClass("d-none")
            .addClass("d-block");
        $("#" + div).attr("required", true);
        highlight(div + "_div");
    } else {
        // console.log('unchecked')
        $("#" + div + "_div")
            .removeClass("d-block")
            .addClass("d-none");
        $("#" + div).attr("required", false);
    }
});

$(":radio").change(function () {
    var div = $(this).attr("data-div");

    if ($(this).hasClass("is_other")) {
        console.log("checked");
        $("#" + div + "_div")
            .removeClass("d-none")
            .addClass("d-block");
        $("#" + div).prop("required", true);
        highlight(div + "_div");
    } else {
        console.log("unchecked");
        $("#" + div + "_div")
            .removeClass("d-block")
            .addClass("d-none");
        $("#" + div).prop("required", false);
    }
    console.log(div);
});

$("body").on("click touchend", "#add_more_picture", function () {
    $("#add_picture_zone").append('<p><input type="file" name="file[]"></p>');
});

$("body").on("click touchend", ".star_rate", function () {
    var idx = $(this).index() + 1;

    $("#notation").val(idx);

    $(".star_rate:lt(" + idx + ")").addClass("star_rate_selected");

    console.log("div " + idx);
});

$("#cleaning_form").on("submit", function (e) {
    e.preventDefault();

    var allChecked = true;
    $("input.needed_checkboxed").each(function (index, element) {
        if (!element.checked) {
            allChecked = false;
            return false;
        }
    });

    if (allChecked) {
        // alert('Ok');
        $(this).unbind("submit").submit(); // Release
    } else {
        alert("Merci de valider toutes vos tâches !");
    }
});

$("body").on("click touchstart", "#copy_button", function () {
    element = $(this).attr("data-item");

    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($("#" + element).text()).select();
    document.execCommand("copy");
    $temp.remove();

    $(this).html("Copié !").removeClass("btn-primary").addClass("btn-success");
});

$("body").on("change", "#channel_manager_used", function () {
    var value = $(this).find(":selected").val();

    console.log(value);
    switch (value) {
        case "1":
            var content =
                '<label for="beds24_invite_code">Saisissez votre code d\'invitation</label><textarea name="beds24_invite_code" class="form-control" required></textarea><a href="' +
                base_url +
                '/foire-aux-questions#beds24" class="text-info" target="_blank">Comment récupérer mon code d\'invitation ?</a>';
            break;

        case "2":
            var content = '<a href="' + base_url + '/foire-aux-questions#superhote" class="text-info" target="_blank">Comment synchroniser mes annonces ?</a>';
            break;

        default:
            var content = "";
            break;
    }

    $(".channel_div").html(content);
});

$("body").on("change", "#autonomy_value", function () {
    var value = $(this).val();

    console.log(value);
    switch (value) {
        case "1":
        case "2":
        case "3":
        case "4":
            $(".autonomy_answers").removeClass("d-block").addClass("d-none");
            $("#answer_" + value)
                .removeClass("d-none")
                .addClass("d-block");
            break;

        default:
            $(".autonomy_answers").removeClass("d-block").addClass("d-none");
            break;
    }
});

$("body").on("click", "#add_annonce_button", function () {
    var allFilled = true;
    var processedCheckboxGroups = [];

    var error_messages = "";
    $(
        "#upload_form_full input[required], #upload_form_full select[required], #upload_form_full textarea[required], #upload_form_full input[type='checkbox'], #upload_form_full input[type='radio']"
    ).each(function () {
        var isFilled = true;
        var elementType = $(this).prop("tagName").toLowerCase();
        var inputType = $(this).attr("type");
        var inputName = $(this).attr("name");

        // console.log(elementType);
        // console.log(inputType);
        // console.log(inputName);
        // console.log("-------");

        // Vérification pour les checkboxes
        if (inputType === "checkbox" || inputType === "radio") {
            var name = $(this).attr("name");

            // Vérifier si on a déjà traité ce groupe de checkboxes
            if (processedCheckboxGroups.indexOf(name) === -1) {
                processedCheckboxGroups.push(name);

                if ($("input[name='" + name + "']:checked").length === 0) {
                    // Si aucune checkbox n'est cochée dans ce groupe, marquer le groupe comme non rempli
                    isFilled = false;

                    // Trouver le premier label précédent ce groupe de checkboxes
                    var label = $("label[for='" + $(this).attr("name") + "']");

                    // Obtenir le contenu texte du label en supprimant les balises HTML
                    var labelText = $("<div>").html(label.html()).text();

                    // Ajouter le texte du label à la variable `error_messages`
                    error_messages += labelText.trim() + "<br>";
                }
            }
        }
        // Vérification générique pour les autres éléments requis
        else if ($(this).val() === "" || $(this).val() === null) {
            isFilled = false;
        }

        if (!isFilled) {
            allFilled = false;

            // Trouver le label associé à cet élément
            var label = $("label[for='" + $(this).attr("id") + "']");

            // Si le label n'a pas de `for`, essayer de le trouver par parenté
            if (label.length === 0) {
                label = $(this).closest("label");
            }

            var labelText = $("<div>").html(label.html()).text();
            error_messages += labelText.trim() + "<br>";
        }
    });

    if (allFilled) {
        $("#notifModal").remove();

        // var base64 = $("#colors_sketch")[0].toDataURL();
        // $("#imgCapture").val(base64);
        var modalContent = `
            <div class="modal modal-transparent fade" id="notifModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content bg-dark">
                        <div class="modal-body text-white">
                            <div class="card">
                                <div class="card-body bg-dark text-center">
                                    <p class="h2 text-white"><i class="fa-solid fa-spinner fa-spin"></i></p>
                                    <p class="text-large mb-3 h4 fw-bold text-white">Veuillez patienter</p>
                                    <p class="mb-0 text-white">Ne pas recharger la page durant le chargement.<br><small>En cas de blocage, nous contacter.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
        // Append modal to body
        $("body").append(modalContent);
        $("#notifModal").modal("show");

        $("#upload_form_full").submit();
    } else {
        $("#notifModal").remove();

        var modalContent =
            `
            <div class="modal fade" id="notifModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
                    <div class="modal-content p-3 p-md-5 bg-dark">
                        <div class="modal-body pb-0 text-white">
                            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="text-center mb-4">
                                <h3 class="mb-0"><i class="ti ti-alert-circle display-1 text-white"></i></h3>
                                <h3 class="mb-2 text-danger">Certains champs sont manquants</h3>
                                <p class="text-white">Pensez à remplir tous les champs marqués d'une étoile rouge <strong class="text-danger">*</strong></p>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <h5 class="text-white">Champs requis manquants :</h5>
                                    ` +
            error_messages +
            `
                                </div>
                                <p class="text-center mb-0"><button class="btn btn-light text-dark" data-bs-dismiss="modal">Fermer</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `;

        // Append modal to body
        $("body").append(modalContent);
        $("#notifModal").modal("show");
    }
});

$(document).ready(function () {
    // Set the date we're counting down to
    var countDownDate = new Date("May 31, 2025 23:59:59").getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {
        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="countdown"
        $("#countdown").html(days + " jours " + hours + "h " + minutes + "m " + seconds + "s ");

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            $("#countdown").html("Offre expirée");
        }
    }, 1000);
});


$(document).ready(function () {
    $(".copy_btn").click(function () {
        // Récupérer l'élément cible à partir de l'attribut data-target
        const cible = $(this).data("target");
        const texte = $(cible).text();

        // Copier le texte dans le presse-papier
        navigator.clipboard.writeText(texte).then(() => {
            // Changer le texte du bouton et ajouter la classe btn-success
            $(this).text("Copié ✅").removeClass('btn-primary').addClass("btn-success");

            // Optionnel : Réinitialiser le bouton après un certain temps
            setTimeout(() => {
                $(this).text("Copier").removeClass("btn-success");
            }, 3000); // Réinitialiser après 3 secondes
        }).catch(function (err) {
            console.error("Une erreur s'est produite :", err);
        });
    });


    // $('#check_all_properties').on('change', function () {
    //     let isChecked = $(this).is(':checked');
    //     let actionText = isChecked ? "sélectionner" : "dé-sélectionner";

    //     if (confirm("Voulez-vous vraiment " + actionText + " toutes les cases ?")) {
    //         $('.property_checkbox').prop('checked', isChecked);
    //     } else {
    //         // On annule le changement sur la checkbox principale
    //         $(this).prop('checked', !isChecked);
    //     }
    // });

});

$(document).ready(function () {
    const $master = $('#check_all_properties');
    const $checks = $('.property_checkbox');
    const $btnDeactivate = $('#btnDeactivate');
    const $btnRestore = $('#btnRestore');

    const restoreModalEl = document.getElementById('restoreConfirmModal');
    const restoreModal = new bootstrap.Modal(restoreModalEl, { backdrop: 'static', keyboard: false });
    const $restoreCount = $('#restoreCount');
    const $restorePreviewWrap = $('#restorePreviewWrap');
    const $restorePreview = $('#restorePreview');
    const $restoreInput = $('#restoreConfirmInput');
    const $confirmRestoreBtn = $('#confirmRestoreBtn');
    const $restoreHelp = $('#restoreHelp'); // affichage pricing + prorata

    // ===== Paliers (PHP -> JS) =====
    // $prices_steps = [55 => 1795, 20 => 1899, 0 => 1999];
    const priceSteps = [
        { min: 55, priceCents: 1795 },
        { min: 20, priceCents: 1899 },
        { min: 0, priceCents: 1999 }
    ];
    const fmt = new Intl.NumberFormat('fr-FR', { style: 'currency', currency: 'EUR' });
    const formatCents = (c) => fmt.format((c || 0) / 100);

    function getActiveCount() {
        const el = $('#active_annonces');
        let v = 0;
        if (!el.length) return 0;
        if (el.is('input, textarea, select')) v = parseInt(el.val(), 10);
        else v = parseInt((el.text() || el.html() || '').toString().trim(), 10);
        return isNaN(v) ? 0 : v;
    }

    function getSelectedInactive() {
        return $checks.filter(':checked').filter(function () {
            return String($(this).data('isactive')) === '0';
        });
    }

    function getUnitPriceCents(totalAfter) {
        for (const step of priceSteps) {
            if (totalAfter >= step.min) return step.priceCents;
        }
        return priceSteps[priceSteps.length - 1].priceCents;
    }

    // ---- PRORATA ----
    function parseMemberUntil() {
        const el = $('#member_until');
        if (!el.length) return null;
        const raw = el.is('input, textarea') ? (el.val() || '') : (el.text() || el.html() || '');
        const str = String(raw).trim();
        // attendu Y-m-d
        const m = /^(\d{4})-(\d{2})-(\d{2})$/.exec(str);
        if (!m) return null;
        const d = new Date(Date.UTC(+m[1], +m[2] - 1, +m[3])); // en UTC pour éviter les décalages
        // validation simple
        return isNaN(d.getTime()) ? null : d;
    }

    function daysBetweenUTC(fromDateUTC, toDateUTC) {
        // diff en jours (to - from), sans inclure le jour de fin
        const MS_PER_DAY = 86400000;
        const diff = toDateUTC.getTime() - fromDateUTC.getTime();
        return Math.max(0, Math.floor(diff / MS_PER_DAY));
    }

    function todayUTC() {
        const now = new Date();
        return new Date(Date.UTC(now.getUTCFullYear(), now.getUTCMonth(), now.getUTCDate()));
    }

    function updateSelectionCounts() {
        let activeCount = 0;
        let inactiveCount = 0;

        $checks.filter(':checked').each(function () {
            const isActive = String($(this).data('isactive')) === '1';
            if (isActive) activeCount++; else inactiveCount++;
        });

        $btnDeactivate.text(`Supprimer les logements (${activeCount})`)
            .prop('disabled', activeCount === 0);

        $btnRestore.text(`Restaurer les logements (${inactiveCount})`)
            .prop('disabled', inactiveCount === 0);
    }

    // ---- Résumé pricing + prorata (affiché dans #restoreHelp) ----
    function updatePricingSummary() {
        const alreadyActive = getActiveCount();
        const $selInactive = getSelectedInactive();
        const restoreQty = $selInactive.length;
        const totalAfter = alreadyActive + restoreQty;

        if (restoreQty === 0) {
            $restoreHelp.addClass('d-none').empty();
            return;
        }

        const unit = getUnitPriceCents(totalAfter); // prix plein / logement (en centimes)
        let total = unit * restoreQty;

        // Info palier
        const applied = priceSteps.find(s => totalAfter >= s.min) || priceSteps[priceSteps.length - 1];

        // Prorata éventuel
        const memberUntil = parseMemberUntil();
        const today = todayUTC();
        let detailsProrata = '';
        if (memberUntil && memberUntil.getTime() >= today.getTime()) {
            const daysLeft = daysBetweenUTC(today, memberUntil); // nb jours restants
            // Hypothèse : tarif mensuel => base 30 jours
            const dailyUnit = unit / 30;
            const proratedUnit = Math.round(dailyUnit * daysLeft); // en centimes
            const proratedTotal = proratedUnit * restoreQty;

            total = proratedTotal; // on remplace le total plein par le total proratisé

            detailsProrata = `
                <div class="mt-2 p-2 border rounded bg-light">
                    <div class="fw-bold mb-1">Prorata jusqu’au ${memberUntil.toISOString().slice(0, 10)} :</div>
                    <div>Jours restants : <strong>${daysLeft}</strong></div>
                    <div>Prix journalier (base 30 j) : <strong>${formatCents(Math.round(dailyUnit))}</strong> / logement</div>
                    <div>Prix proratisé par logement : <strong>${formatCents(proratedUnit)}</strong></div>
                    <div>Total proratisé aujourd’hui : <strong>${formatCents(proratedTotal)}</strong></div>
                    <div class="text-muted small mt-1">Calcul au prorata basé sur un tarif mensuel /30.</div>
                </div>
            `;
        }

        // Rendu
        $restoreHelp
            .removeClass('d-none')
            .html(
                `
                <div class="mt-2">
                    <strong>Tarif par logement (plein) :</strong> ${formatCents(unit)}<br>
                    <strong>Quantité restaurée aujourd'hui :</strong> ${restoreQty}<br>
                    <strong>Total prélevé aujourd'hui${detailsProrata ? ' (proratisé)' : ''} :</strong> ${formatCents(total)}
                    ${detailsProrata}
                </div>
                `
            );
    }

    // Master toggle + confirmation
    $master.on('change', function () {
        const willCheck = $(this).is(':checked');
        const actionText = willCheck ? 'cocher' : 'décocher';

        if (confirm(`Voulez-vous vraiment ${actionText} toutes les cases ?`)) {
            $checks.prop('checked', willCheck);
            updateSelectionCounts();

            if ($(restoreModalEl).hasClass('show')) {
                updatePricingSummary();
            }
        } else {
            $(this).prop('checked', !willCheck);
        }
    });

    // Individuels
    $checks.on('change', function () {
        updateSelectionCounts();
        const allChecked = $checks.length > 0 && $checks.length === $checks.filter(':checked').length;
        $master.prop('checked', allChecked);

        if ($(restoreModalEl).hasClass('show')) {
            updatePricingSummary();
        }
    });

    // === Flux restauration avec modale ===
    let idsToRestoreCache = [];

    $('#btnRestore').on('click', function (e) {
        e.preventDefault();

        const idsToRestore = $checks.filter(':checked').filter(function () {
            return String($(this).data('isactive')) === '0';
        }).map(function () { return $(this).val(); }).get();

        if (!idsToRestore.length) return;

        idsToRestoreCache = idsToRestore;

        $restoreCount.text(idsToRestore.length);

        $restorePreview.empty();
        if (idsToRestore.length > 0) {
            const preview = $checks.filter(':checked').filter(function () {
                return String($(this).data('isactive')) === '0';
            }).slice(0, 10);

            preview.each(function () {
                const title = $(this).data('title');
                const id = $(this).val()
                $restorePreview.append(`<input type="hidden" name="to_restore[]" value="${id}">`);
                $restorePreview.append(`<li>${title}</li>`);
            });

            $restorePreviewWrap.toggleClass('d-none', preview.length === 0);
        } else {
            $restorePreviewWrap.addClass('d-none');
        }

        $restoreInput.val('');
        $confirmRestoreBtn.prop('disabled', true);

        // >>> MAJ pricing + prorata <<<
        updatePricingSummary();

        restoreModal.show();
    });

    function normalize(s) { return String(s || '').trim().toLowerCase(); }
    $restoreInput.on('input', function () {
        const ok = normalize($(this).val()) === 'restaurer';
        $confirmRestoreBtn.prop('disabled', !ok);
    });

    // Confirmer la restauration
    $confirmRestoreBtn.on('click', function () {
        if ($confirmRestoreBtn.prop('disabled')) return;

        // $.post('/properties/restore', { ids: idsToRestoreCache }, function (resp) { ... });

        $checks.filter(function () {
            return idsToRestoreCache.includes($(this).val());
        }).each(function () {
            $(this).prop('checked', false)
                .data('isactive', 1)
                .attr('data-isactive', '1');
        });

        idsToRestoreCache = [];
        updateSelectionCounts();
        $master.prop('checked', false);
        restoreModal.hide();
    });

    restoreModalEl.addEventListener('hidden.bs.modal', function () {
        $restoreInput.val('');
        $confirmRestoreBtn.prop('disabled', true);
        $restorePreview.empty();
        $restorePreviewWrap.addClass('d-none');
        $restoreHelp.addClass('d-none').empty();
    });

    updateSelectionCounts();
});


