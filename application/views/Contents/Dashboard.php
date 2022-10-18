<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
	<div>
		<h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
	</div>
	<div class="d-flex align-items-center flex-wrap text-nowrap">
		<button type="button" class="btn btn-outline-danger btn-icon-text mr-2 d-none d-md-block">
			<i class="btn-icon-prepend" data-feather="thermometer"></i>
			<span id="suhu">
				<!-- <?= $sensor[0]['suhu']; ?> ° C -->
			</span>
		</button>
		<button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">
			<i class="btn-icon-prepend" data-feather="cloud"></i>
			<span id="kelembaban">
				<!-- <?= $sensor[0]['kelembaban']; ?> % -->
			</span>
		</button>
		<div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex" id="dashboardDate">
			<span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
			<input type="text" class="form-control">
		</div>
	</div>
</div>

<div class="row my-3">
	<!-- Bg Slider -->
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
					<h6 class="card-title">Background Slider</h6>
					<div class="dropdown">
						<button class="btn p-0" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
							<a class="dropdown-item d-flex align-items-center" data-toggle="modal" data-target="#viewImageSlider"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
							<a class="dropdown-item d-flex align-items-center" href="<?= base_url('edit/slider_images'); ?>"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
						</div>
					</div>
				</div>
				<div class="owl-carousel owl-theme owl-fadeout">
					{image}
					<div class="item">
						<div class="card">
							<img src="{source_img}" alt="item-image" />
							<div class="card-body">
								<p class="card-text text-center">Background {id}</p>
							</div>
						</div>
					</div>
					{/image}
				</div>
			</div>
		</div>
	</div>
	<!-- End Of Bg Slider -->

	<!-- News -->
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
					<h6 class="card-title">News</h6>
					<div class="dropdown">
						<button class="btn p-0" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
							<a class="dropdown-item d-flex align-items-center" data-toggle="modal" data-target="#news"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
							<a class="dropdown-item d-flex align-items-center" href="<?= base_url('edit/news'); ?>"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
						</div>
					</div>
				</div>
				<div class="owl-carousel owl-theme owl-basic">
					<?php foreach ($news as $key => $val) : ?>
						<div class="item">
							<div class="card">
								<img src="<?= $val['news_image']; ?>" class="card-img-top" alt="...">
								<div class="card-body">
									<!-- <p class="card-text news_content"><?= substr($val['news_content'], 0, 60); ?></p> -->
									<p class="card-text text-center"><?= $val['news_title'] ?></p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Of News -->
</div> <!-- row -->

<div class="row my-3">
	<div class="col-md-4 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
					<h6 class="card-title">Extras</h6>
					<div class="dropdown">
						<button class="btn p-0" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
							<a class="dropdown-item d-flex align-items-center" data-toggle="modal" data-target="#extra
								"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
							<a class="dropdown-item d-flex align-items-center" href="<?= base_url('edit/extra'); ?>"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
						</div>
					</div>
				</div>
				<div class="owl-carousel owl-theme owl-basic">
					<?php foreach ($extra as $key => $val) : ?>
						<div class="item">
							<div class="card">
								<span class="text-center <?= $val['extra_icon']; ?>" style="display:inline;font-size: 5.7rem;color:#00204a;"></span>
								<div class="card-body">
									<h5 class="card-text text-center"><?= $val['extra_name']; ?></h5>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
					<h6 class="card-title">Alumni</h6>
					<div class="dropdown">
						<button class="btn p-0" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
							<a class="dropdown-item d-flex align-items-center" data-toggle="modal" data-target="#alumni
								"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
							<a class="dropdown-item d-flex align-items-center" href="<?= base_url('edit/alumni'); ?>"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
							<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
							<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
							<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
						</div>
					</div>
				</div>
				<div class="owl-carousel owl-theme owl-basic">
					<?php foreach ($alumni as $key => $val) : ?>
						<div class="item">
							<div class="card">
								<img src="<?= $val['alumni_image']; ?>" alt="">
								<div class="card-body">
									<h5 class="card-text text-center"><?= $val['alumni_name']; ?></h5>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
					<h6 class="card-title">Achievements</h6>
					<div class="dropdown">
						<button class="btn p-0" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
							<a class="dropdown-item d-flex align-items-center" data-toggle="modal" data-target="#achievement"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
							<a class="dropdown-item d-flex align-items-center" href="<?= base_url('edit/achievement'); ?>"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
						</div>
					</div>
				</div>
				<div class="owl-carousel owl-theme owl-basic">
					<?php foreach ($achievement as $key => $val) : ?>
						<div class="item">
							<div class="card">
								<span class="text-center <?= $val['achievement_icon']; ?>" style="display:inline;font-size: 5.7rem;color:#00204a;"></span>
								<div class="card-body">
									<h5 class="card-text text-center"><?= $val['achievement_name']; ?></h5>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row my-3">
	<div class="col-md-12 col-xl-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
					<h6 class="card-title">Teacher</h6>
					<div class="dropdown">
						<button class="btn p-0" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
							<a class="dropdown-item d-flex align-items-center" data-toggle="modal" data-target="#teacher"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
							<a class="dropdown-item d-flex align-items-center" href="<?= base_url('edit/teacher'); ?>"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
						</div>
					</div>
				</div>
				<div class="owl-carousel owl-theme owl-basic2">
					{teacher}
					<div class="item">
						<div class="card">
							<img src="{teacher_image}" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-text text-center">{teacher_name}</h5>
							</div>
						</div>
					</div>
					{/teacher}
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Bg Slider-->
<div class="modal fade" id="viewImageSlider" tabindex="-1" role="dialog" aria-labelledby="viewImageSliderLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="viewImageSliderLabel">Slider Image</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="owl-carousel owl-theme owl-fadeout">
					{image}
					<div class="item">
						<img src="{source_img}" alt="item-image" />
					</div>
					{/image}
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- End Of Modal Bg Slider -->

<!-- Modal News-->
<div class="modal fade" id="news" tabindex="-1" role="dialog" aria-labelledby="newsLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="newsLabel">News</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="owl-carousel owl-theme owl-basic">
					{news}
					<div class="item">
						<div class="card">
							<img src="{news_image}" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text news_content">{news_content}</p>
							</div>
						</div>
					</div>
					{/news}
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- End Of Modal News -->

<!-- Modal Extras-->
<div class="modal fade" id="extra" tabindex="-1" role="dialog" aria-labelledby="extraLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="extraLabel">Extras</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="owl-carousel owl-theme owl-basic">
					{extra}
					<div class="item">
						<div class="card">
							<span class="text-center {extra_icon}" style="display:inline;font-size: 4rem;color:#00204a;"></span>
							<div class="card-body">
								<p class="card-text text-center">{extra_name}</p>
							</div>
						</div>
					</div>
					{/extra}
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- End Of Modal Extras -->

<!-- Modal Alumni-->
<div class="modal fade" id="alumni" tabindex="-1" role="dialog" aria-labelledby="alumniLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="alumniLabel">Alumni</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="owl-carousel owl-theme owl-basic">
					{alumni}
					<div class="item">
						<div class="card">
							<img src="{alumni_image}" alt="">
							<div class="card-body">
								<p class="card-text text-center">{alumni_name}</p>
							</div>
						</div>
					</div>
					{/alumni}
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- End Of Modal Alumni -->

<!-- Modal Achievement-->
<div class="modal fade" id="achievement" tabindex="-1" role="dialog" aria-labelledby="achievementLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="achievementLabel">Achievement</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="owl-carousel owl-theme owl-basic">
					{achievement}
					<div class="item">
						<div class="card">
							<span class="text-center {achievement_icon}" style="display:inline;font-size: 4rem;color:#00204a;"></span>
							<div class="card-body">
								<p class="card-text text-center">{achievement_name}</p>
							</div>
						</div>
					</div>
					{/achievement}
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- End Of Modal Achievement -->

<!-- Modal Teacher-->
<div class="modal fade" id="teacher" tabindex="-1" role="dialog" aria-labelledby="teacherLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="teacherLabel">Teacher</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="owl-carousel owl-theme owl-basic">
					{teacher}
					<div class="item">
						<div class="card">
							<div class="card-body">
								<div class="item">
									<img src="{teacher_image}" alt="item-image" />
									<h5 class="card-text text-center">{teacher_name}</h5>
								</div>
							</div>
						</div>
					</div>
					{/teacher}
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
