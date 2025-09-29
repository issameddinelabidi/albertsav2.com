<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <h4>Liste des échanges</h4>
        </div>
        <div class="col-md-9">
            <div class="row mt-5 gy-3">
                <?php
                $messages_ids = '';
                $counter = 0;
                foreach ($messages as $message) {
                    $counter++;
                    $messages_ids .= $message['id'] . ',';

                    if ($message['author'] == 'guest') {
                        $bubble_style = 'message my-message';
                        $mess_style = '';
                        $date_style = '';
                        $card_style = '';
                    } else {
                        $bubble_style = 'message other-message pull-right pull-right bg-dark bg-dark text-white';
                        $mess_style = 'offset-3';
                        $date_style = ' text-white';
                        $card_style = 'bg-dark text-white';
                    }

                    $last_div = ($counter == count($messages)) ? 'last_mess' : '';
                ?>
                    <div class="col-9 <?= $mess_style; ?> clearfix" id="<?= $last_div; ?>">
                        <div class="card <?= $card_style; ?>">
                            <div class="card-body">

                                <div class="">
                                    <?php
                                    if ($message['author'] == 'host' && $message['read_by'] == 1009) {
                                    ?>
                                        <span class="btn btn-inline btn-light text-dark p-1 px-3">IA</span>
                                    <?php
                                    }
                                    ?>
                                    <span class="message-data-time<?= $date_style; ?>"><?= APPUP::getFullDate($message['message_date']); ?></span>
                                </div>
                                <p class="mb-0"><?= nl2br($message['message']); ?></p>
                                <?php
                                if (!empty($message['read_by'])) {
                                    if ($message['author'] == 'guest') {
                                ?>
                                        <p class="small text-muted mb-0">Lu par <?= $agents_list[$message['read_by']] ?? ''; ?></p>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>

                </ul>
            </div>
        </div>
    </div>
</div>