<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Super Admin</h6>
				<a href="<?= base_url('superadmin/create'); ?>" class="btn btn-success mb-3">Create Admin</a>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>Username</th>
								<th>Hak Akses</th>
								<th>Created At</th>
								<th>Updated At</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($admin as $key => $val) : ?>
								<tr>
									<td><?= $val['username']; ?></td>
									<td><?= $val['akses'];?></td>
									<td><?= $val['created_at']; ?></td>
									<td><?= $val['updated_at'];?></td>
									<td>
										<a href="<?= base_url('edit/superadmin/' . $val['id']); ?>" class="btn btn-success">
											<i data-feather="edit-2" width="14"></i>
										</a>
										<a href="<?= base_url('superadmin/delete/' . $val['id']); ?>" class="btn btn-danger">
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
