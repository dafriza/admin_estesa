<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Teacher Data</h6>
				<a href="<?= base_url('teacher/create'); ?>" class="btn btn-success mb-3">Create Teacher</a>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>Teacher Name</th>
								<th>Teacher Caption</th>
								<th>Teacher Image</th>
								<th>Created Data</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($teacher as $key => $val) : ?>
								<tr>
									<td><?= $val['teacher_name']; ?></td>
									<td><?= substr($val['teacher_caption'], 0, 60); ?> ...</td>
									<td class="text-center"><img src="<?= $val['teacher_image']; ?>" alt="news_image" class="img-fluid image_detail"></td>
									<td><?= $val['created_at']; ?></td>
									<td>
										<a href="<?= base_url('edit/teacher/' . $val['id']); ?>" class="btn btn-success">
											<i data-feather="edit-2" width="14"></i>
										</a>
										<a href="<?= base_url('teacher/delete/' . $val['id']); ?>" class="btn btn-danger">
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

	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Teacher Show</h6>
				<div class="row">
					<?php foreach ($tenaga_pendidik as $key => $val) : ?>
						<div class="col">
							<?= form_open(base_url('teacher/updateJabatan')); ?>
							<?= form_hidden('id', $val['id']); ?>
							<div class="col">
								<div class="card">
									<div class="card-body text-center">
										<img src="<?= $val['teacher_image']; ?>" alt="" class="img-fluid">
										<div class="form-group mt-3 text-center">
											<label for="jabatan"><?= $val['teacher_name']; ?></label>
											<select class="form-control jabatan" name="teacher_name">
											</select>
										</div>
										<button type="submit" class="btn btn-success">Update</button>
									</div>
								</div>
							</div>
							</form>
						</div>
					<?php endforeach; ?>
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
