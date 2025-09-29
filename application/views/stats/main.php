<section class="wrapper bg-gradient-reverse-primary">
	<div class="container pb-14 pb-md-16">
		<div class="row justify-content-center">
			<h3 class="display-3 mb-4 text-center"><?= $page_title; ?></h3>

			<div class="col-auto">
				<div class="card">
					<div class="card-body">
						<p><a href="<?= site_url('statistiques?period=daily'); ?>"><button class="btn btn-<?= ($wanted_period=='daily') ? 'primary text-light' : 'light text-dark'; ?>">Aujourd'hui</button></a></p>
						<p><a href="<?= site_url('statistiques?period=weekly'); ?>"><button class="btn btn-<?= ($wanted_period=='weekly') ? 'primary text-light' : 'light text-dark'; ?>">Cette semaine</button></a></p>
						<p><a href="<?= site_url('statistiques?period=monthly'); ?>"><button class="btn btn-<?= ($wanted_period=='monthly') ? 'primary text-light' : 'light text-dark'; ?>">Ce mois-ci</button></a></p>
						<p><a href="<?= site_url('statistiques?period=all_time'); ?>"><button class="btn btn-<?= ($wanted_period=='all_time') ? 'primary text-light' : 'light text-dark'; ?>">Depuis le début</button></a></p>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="card">
					<div class="card-body">
						<?php
						if (!empty($is_empty_chart)) {
						?>
							<p class="alert alert-info mb-0">Aucune statistique pour la période définie.</p>
						<?php
						} else {
						?>
							<canvas id="global_stats_chart"></canvas>
						<?php
						}

						?>

					</div>
				</div>

			</div>

			<?php
			if (empty($is_empty_chart)) {
			?>
				<div class="col-md-12">
					<!-- <h3 class="display-3 mb-7">Page en travaux</h3> -->


					<table class="table table-striped mt-5">
						<thead>
							<th>Annonce</th>
							<th>Total</th>
							<th>Appels</th>
							<th>Messages</th>
							<th>Incidents</th>
						</thead>
						<tbody>
							<?php
							foreach ($items_list as $item) {
							?>
								<tr>
									<td><a href="#" class="fw-bold"><?= $item['title']; ?></a></td>
									<td><?= $item['counter']; ?></td>
									<td><?= $item['call_count']; ?></td>
									<td><?= $item['message_count']; ?></td>
									<td><?= $item['event_count']; ?></td>
								</tr>
							<?php
							}
							?>

						</tbody>
					</table>
				</div>
			<?php
			}
			?>
		</div>
	</div>

</section>