<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
	<div>
		<h4 class="mb-3 mb-md-0">Edit Slider Image</h4>
	</div>
	<div class="d-flex align-items-center flex-wrap text-nowrap">
		<div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex" id="dashboardDate">
			<span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
			<input type="text" class="form-control">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12 col-xl-12 stretch-card">
		<div class="col-12 grid-margin stretch-card">
			<div class="card-deck">
				{image}
				<div class="card">
					<img src="{source_img}" class="card-img-top" alt="image">
					<div class="card-body">
						<h5 class="card-title">Image Slider</h5>
						<p class="card-text">{title_img}</p>
						<a data-toggle="modal" data-target="#editImage{id}" class="btn btn-primary">Edit Photo</a>
					</div>
				</div>
				<div class="modal fade" id="editImage{id}" tabindex="-1" role="dialog" aria-labelledby="editImage{id}Label" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="editImage{id}Label">Edit Background Image Slider</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="card">
									<img src="{source_img}" class="card-img-top" alt="image">
									<div class="card-body">
										<h5 class="card-title">Change Photo</h5>
										<?= form_open_multipart('edit/upload'); ?>
										<?= form_hidden('id', '{id}'); ?>
										<div class="form-group row">
											<div class="col-lg-3">
												<label class="col-form-label">Title Photo</label>
											</div>
											<div class="col-lg-8">
												<input class="form-control" maxlength="25" name="title" id="titlePhoto" type="text" placeholder="Type Something.." required>
											</div>
										</div>
										<input type="file" class="myDropify" name="image" data-max-file-size="10M" required />
										<button type="submit" class="btn btn-primary" value="<?= html_escape('upload'); ?>">Submit</button>
										</form>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				{/image}
				<!-- Notif Success -->
				<?php if($this->session->flashdata('success')): ;?>
				<script src="<?= base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.js');?>"></script>
				<?php endif ;?>
				<!-- End Of Notif Success -->
			</div>
		</div>
	</div>
</div> <!-- row -->

