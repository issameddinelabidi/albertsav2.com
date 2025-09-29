<?php
$main_link = (!empty($is_preview_mode)) ? 'preview' : 'view';
$booking_resa = (!empty($current_booking)) ? '/' . $this->uri->segment(3) : '';
?>
<div class="container">
	<div class="row">

		<div class="col-12">
			<?php

			if (!empty($current_booking)) {
			?>
				<div class="card mb-4">
					<div class="card-header main_gradient px-4">
						<p class="mb-0 fw-bold text-white">Bonjour <?= $current_booking['first_name'] . ' ' . $current_booking['last_name']; ?>,<br>voici les informations sur votre séjour</p>
					</div>
					<div class="card-body bg-light text-dark p-2 px-4">
						<?php
						if (!empty($current_booking['platform'])) {
						?>
							<p class="mb-0"><strong>Réservation via</strong> : <?= $current_booking['platform']; ?></p>
						<?php
						}
						?>
						<p class="mb-0"><strong>N° de réservation</strong> : <?= $current_booking['booking_id']; ?></p>
						<p class="mb-2"><strong>Dates du séjour</strong> : du <?= APPUP::getFullDate($current_booking['booking_start_date'], false); ?> au <?= APPUP::getFullDate($current_booking['booking_end_date'], false); ?></p>
					</div>
				</div>
			<?php
			}

			if (!empty($annonce['video_check_in'])) {
			?>
				<a href="<?= $annonce['video_check_in']; ?>" target="_blank">
					<div class="box_zone mb-3 shadow-lg background-10">
						<div class="content_box_zone row align-items-center">
							<div class="col">
								<p class="text-uppercase fw-bold text-white mb-0 box_title ps-4">
									Vidéo du<br>
									Check-in
								</p>
							</div>
							<div class="col-auto align-items-center">
								<img src="<?= site_url('assets/guides/arrow-right.svg'); ?>" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</a>
			<?php
			}
			?>

			<a href="<?= site_url('guide/' . $main_link . '/' . $annonce['unique_id'] . $booking_resa); ?>?action=check-in">
				<div class="box_zone mb-3 shadow-lg background-1">
					<div class="content_box_zone row align-items-center">
						<div class="col">
							<p class="text-uppercase fw-bold text-white mb-0 box_title ps-4">
								Arrivée<br>
								Autonome
							</p>
						</div>
						<div class="col-auto align-items-center">
							<img src="<?= site_url('assets/guides/arrow-right.svg'); ?>" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</a>


			<?php
			if (!empty($annonce['parking_possibilities'])) {
			?>
				<div class="box_zone mb-3 shadow-lg background-9" data-bs-toggle="modal" data-bs-target="#parking_step">
					<div class="content_box_zone row align-items-center">
						<div class="col">
							<p class="text-uppercase fw-bold text-white mb-0 box_title ps-4">
								Se<br>
								Garer
							</p>
						</div>
						<div class="col-auto align-items-center">
							<img src="<?= site_url('assets/guides/arrow-right.svg'); ?>" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</div>