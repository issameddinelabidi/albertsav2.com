<div class="container my-5">
    <div class="card">
        <div class="card-body">

            <h3>Suivis des réponses IA</h3>

            <?php
            if (!empty($answers)) {
            ?>
                <table class="table">
                    <thead>
                        <tr>
                            <td>Booking ID</td>
                            <td>Prénom</td>
                            <td>Nom</td>
                            <td>Dernier message à</td>
                            <td></td>
                        </tr>
                    </thead>
                    <?php
                    foreach ($answers as $ans) {
                    ?>
                        <tr>
                            <td><?= $ans['booking_id']; ?></td>
                            <td><?= $ans['first_name']; ?></td>
                            <td><?= $ans['last_name']; ?></td>
                            <td><?= APPUP::getFullDate($ans['last_msg_at']); ?></td>
                            <td><a href="<?= site_url('home/AiAnswersDetails/'.$ans['booking_id']); ?>" class="btn btn-dark btn-sm" target="_blank">Voir la conversation</a></td>
                        </tr>

                    <?php
                    }
                    ?>
                </table>
            <?php
            }
            ?>

        </div>
    </div>
</div>