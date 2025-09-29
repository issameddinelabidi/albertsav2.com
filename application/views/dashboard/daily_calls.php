<section>
    <div class="container pt-7 pt-md-11 pb-8">
        <div class="row">
            <div class="col-md-12">

                <h2 class="mb-4">Daily calls</h2>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Nom</td>
                            <td>Prénom</td>
                            <td>Téléphone</td>
                            <td>Réservation</td>
                            <td>Annonce</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($bookings_to_call as $booking) {
                        ?>
                            <tr>
                                <td><?= $booking['last_name']; ?></td>
                                <td><?= $booking['first_name']; ?></td>
                                <td><?= $booking['phone']; ?></td>
                                <td>N°<?= $booking['booking_id']; ?></td>
                                <td><a href="<?= site_url('annonce/' . $booking['unique_id']); ?>" class="">Voir l'annonce <i class="fa fa-chevron-right ms-2"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>