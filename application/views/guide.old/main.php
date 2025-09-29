<div class="row gx-0 gy-0">
	<div class="col-12 text-center">
		<h5 class="text-white"><?= ALBERT_GUIDE_DENTREE; ?></h5>

		<h3 class="display-1 mb-6 text-white pt-5">
			<?= $annonce['title']; ?>
		</h3>

		<h3 class="text-white mt-13"><?= ALBERT_BIENVENUE; ?></h3>
		<a href="<?= site_url('guide/view/' . $annonce['unique_id']); ?>?action=check-in"
			class="btn btn-gradient gradient-7 rounded-pill mt-5"><?= ALBERT_ARRIVEE_AUTONOME; ?> <i
				class="fa fa-chevron-right ms-3"></i></a>
		<h6 class="fs_15 text-white mt-10"><?= ALBERT_NOUS_VOUS_SOUHAITONS_UN_AGREABLE_SEJOUR; ?></h6>

		<div class="row">
			<div class="col-6">
				<div class="item-inner">
					<div class="card bg-soft-primary"  data-bs-toggle="modal" data-bs-target="#location-modal">
					<div class="card-body text-center px-2">
							<h1 class="display-1"><i class="fa fa-location-dot"></i></h1>
							<h6 class="mb-0"><?= ALBERT_LOCALISATION; ?></h6>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-6">
				<div class="item-inner">
					<div class="card bg-soft-primary"  data-bs-toggle="modal" data-bs-target="#check-in-out-modal">
					<div class="card-body text-center px-2">
							<h1 class="display-1"><i class="fa fa-clock"></i></h1>
							<h6 class="mb-0"><?= ALBERT_CHECK_IN_OUT; ?></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>