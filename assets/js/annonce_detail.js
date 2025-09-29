$(document).ready(function () {
    function reloadStats() {
        getStats(annonce_unique_id, "daily");
        getStats(annonce_unique_id, "weekly");
        getStats(annonce_unique_id, "monthly");
    }
    function getStats(annonce_unique_id, type) {
        $.ajax({
            method: "POST",
            url: base_url + "Actions/getStats",
            async: true,
            data: {
                basic: basic,
                annonce_unique_id: annonce_unique_id,
                type: type,
            },
            beforeSend: function () {
                $("#" + type + "_chart").html("Chargement");
            },
            success: function (response) {
                var resp = jQuery.parseJSON(response);

                let chartStatus = Chart.getChart(type + "_chart");

                if (chartStatus != undefined) {
                    chartStatus.destroy();
                }

                const allValuesAreZero = Object.values(resp).every((value) => value === 0);

                if (allValuesAreZero) {
                    $("#" + type + "_chart_tab").prepend("Aucune donnée pour cette période.");
                    console.log("All values are equal to 0.");
                } else {
                    console.log("Not all values are equal to 0.");

                    new Chart($("#" + type + "_chart"), {
                        type: "bar",
                        data: {
                            labels: ["Appels", "Conversations", "Incidents"],
                            datasets: [
                                {
                                    label: " ",
                                    data: [resp.call, resp.message, resp.event],
                                    borderWidth: 1,
                                },
                            ],
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true,
                                },
                            },
                        },
                    });
                }
            },
        });
    }

    $("body").on("click touchstart", ".addStat", function () {
        var type = $(this).attr("data-type");
        var annonce_unique_id = $("#annonce_unique_id").val();

        //Make ajax call (send to DB)
        $.ajax({
            method: "POST",
            url: base_url + "Actions/addStat",
            async: true,
            data: {
                basic: basic,
                annonce_unique_id: annonce_unique_id,
                type: type,
            },
            beforeSend: function () {
                $(this).html("Envoi");
            }.bind(this),
            success: function (response) {
                var resp = jQuery.parseJSON(response);

                switch (resp.state) {
                    case "done":
                        return_state = '<i class="fa fa-check me-2"></i> Ajouté';
                        break;

                    default:
                        return_state = '<i class="fa fa-time me-2"></i> ERREUR';
                        break;
                }

                $(this).html(return_state);
            }.bind(this),
            complete: function () {
                reloadStats();
            },
        });
    });

    reloadStats();
});
