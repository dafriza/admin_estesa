<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Extras Data</h6>
				<a href="<?= base_url('extra/create'); ?>" class="btn btn-success mb-3">Create Extras</a>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>Extra Name</th>
								<th>Extra Icon</th>
								<th>Extra Caption</th>
								<th>Extra Image</th>
								<th>Extra Contents</th>
								<th>Created Data</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($extra as $key => $val) : ?>
								<tr>
									<td><?= $val['extra_name']; ?></td>
									<td class="text-center extra_icon"><i class="<?= $val['extra_icon']; ?>" style="font-size:2rem"></i></td>
									<td><?= substr($val['extra_caption'], 0, 30) ?></td>
									<td><img src="<?= $val['extra_image']?>" class="extra_image" alt=""></td>
									<td><?= substr($val['extra_contents'], 0, 30); ?></td>
									<td><?= $val['created_at']; ?></td>
									<td>
										<a href="<?= base_url('edit/extra/' . $val['id']); ?>" class="btn btn-success">
											<i data-feather="edit-2" width="14"></i>
										</a>
										<a href="<?= base_url('extra/delete/' . $val['id']); ?>" class="btn btn-danger">
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
