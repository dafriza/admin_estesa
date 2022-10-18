<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Alumni Data</h6>
				<a href="<?= base_url('alumni/create'); ?>" class="btn btn-success mb-3">Create Alumni</a>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>Alumni Name</th>
								<th>Alumni Image</th>
								<th>Alumni Testimoni</th>
								<th>Created Data</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($alumni as $key => $val) : ?>
								<tr>
									<td><?= $val['alumni_name']; ?></td>
									<td><img src="<?= $val['alumni_image']; ?>" alt="news_image" class="img-fluid image_detail"></td>
									<td class="news_content"><?= substr($val['alumni_testimoni'], 0, 60); ?></td>
									<td><?= $val['created_at']; ?></td>
									<td>
										<a href="<?= base_url('edit/alumni/' . $val['id']); ?>" class="btn btn-success">
											<i data-feather="edit-2" width="14"></i>
										</a>
										<a href="<?= base_url('alumni/delete/' . $val['id']); ?>" class="btn btn-danger">
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
	<link rel="stylesheet" href="<?=base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.css');?>"/>
	<script src="<?=base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.js');?>"></script>
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
