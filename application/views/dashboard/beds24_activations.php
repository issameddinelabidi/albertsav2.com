<div class="container mt-5">
    <div class="card">
        <div class="card-body">

            <h3>Suivis d'activation Beds24</h3>

            <?php
            if (!empty($users_list)) {
            ?>
                <table class="table">
                    <thead>
                        <tr>
                            <td>Client</td>
                            <td>Code invitation</td>
                            <td>Refresh Token</td>
                            <td>Auth Token</td>
                            <td>Dernière MAJ</td>
                            <td>Logts.</td>
                        </tr>
                    </thead>
                    <?php
                    foreach ($users_list as $client) {


                        $invite_code = (!empty($client['beds24_invite_code'])) ? substr($client['beds24_invite_code'], 0, 5) . '.......' . substr($client['beds24_invite_code'], -5) : '-';
                        $refresh_token = (!empty($client['beds24_refresh_token'])) ? substr($client['beds24_refresh_token'], 0, 5) . '.......' . substr($client['beds24_refresh_token'], -5) : '-';
                        $auth_token = (!empty($client['beds24_auth_token'])) ? substr($client['beds24_auth_token'], 0, 5) . '.......' . substr($client['beds24_auth_token'], -5) : '-';
                        $last_update = (!empty($client['beds24_auth_token_last_refresh'])) ? APPUP::getFullDate($client['beds24_auth_token_last_refresh']) : '-';

                    ?>
                        <tr>
                            <td>
                                <a href="<?= site_url('user/' . $client['unique_id']); ?>" target="_blank"><strong><?= $client['username']; ?></strong><br>
                                    <?= $client['email']; ?></a>
                                <div class="accordion" id="accordionExample<?= $client['id']; ?>">
                                    <div class="accordion-item">
                                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?= $client['id']; ?>" aria-expanded="true" aria-controls="collapseOne">
                                            Logements
                                        </button>

                                        <div id="collapseOne<?= $client['id']; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <?php
                                                if (!empty($client['properties'])) {
                                                ?>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <td>Titre</td>
                                                                <td>Property ID</td>
                                                                <td>Room ID</td>
                                                            </tr>
                                                        </thead>
                                                        <?php
                                                        foreach ($client['properties'] as $prop) {
                                                        ?>
                                                            <tr>
                                                                <td><a href="<?= site_url('properties/' . $prop['unique_id']); ?>"><?= $prop['title']; ?></a></td>
                                                                <td><?= $prop['beds24_property_id']; ?></td>
                                                                <td><?= $prop['beds24_room_id']; ?></td>
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
                                </div>
                            </td>
                            <td><?= $invite_code; ?></td>
                            <td><?= $refresh_token; ?></td>
                            <td><?= $auth_token; ?></td>
                            <td><?= $last_update; ?></td>
                            <td>

                            </td>
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