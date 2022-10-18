<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Achievement Data</h6>
				<a href="<?= base_url('achievement/create'); ?>" class="btn btn-success mb-3">Create Achievement</a>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>Achievement Name</th>
								<th>Achievement Icon</th>
								<th>Achievement Caption</th>
								<th>Achievement Image</th>
								<th>Achive Contents</th>
								<th>Created Data</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($achievement as $key => $val) : ?>
								<tr>
									<td><?= $val['achievement_name']; ?></td>
									<td class="text-center achievement_icon"><i class="<?= $val['achievement_icon']; ?>" style="font-size:2rem"></i></td>
									<td><?= substr($val['achievement_caption'], 0, 30) ?></td>
									<td><img src="<?= $val['achievement_image']?>" class="achievement_image" alt=""></td>
									<td><?= substr($val['achievement_contents'], 0, 30); ?></td>
									<td><?= $val['created_at']; ?></td>
									<td>
										<a href="<?= base_url('edit/achievement/' . $val['id']); ?>" class="btn btn-success">
											<i data-feather="edit-2" width="14"></i>
										</a>
										<a href="<?= base_url('achievement/delete/' . $val['id']); ?>" class="btn btn-danger">
											<i data-feather="trash" width="14"></i>
										</a>
									</td>
								</tr>
							<?php endforeach;; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if ($this->session->flashdata('success')) : ?>
	<link rel="stylesheet" href="<?= base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.css'); ?>" />
	<script src="<?= base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.js'); ?>"></script>
	<script>
		Swal.fire({
			position: "middle-center",
			icon: "success",
			title: "Success",
			showConfirmButton: false,
			timer: 1500,
		});
	</script>
<?php endif; ?>
