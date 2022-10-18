<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<?= form_open_multipart(base_url('teacher/insert')); ?>
				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col">
								<div class="card" style="height:100%">
									<div class="card-body">
										<h6 class="card-title">Teacher Data</h6>
										<div class="form-group row">
											<div class="col-2">
												<label class="col-form-label">Teacher Name</label>
											</div>
											<div class="col-8">
												<input class="form-control defaultconfig" maxlength="50" name="teacher_name" type="text" placeholder="Teacher Name..." required>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-2">
												<label class="col-form-label">Teacher Caption</label>
											</div>
											<div class="col-8">
												<input class="form-control defaultconfig" maxlength="200" name="teacher_caption" type="text" placeholder="Teacher Caption..." required>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="card">
									<div class="card-body">
										<h6 class="card-title">Teacher Image</h6>
										<input type="file" name="teacher_image" class="myDropify border" data-height="300" />
									</div>
								</div>
							</div>
							<div class="col-12 mt-3">
								<button type="submit" class="btn btn-success" value="upload">Create</button>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
