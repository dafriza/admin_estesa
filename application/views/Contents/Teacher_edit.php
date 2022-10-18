{news}
<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<!-- <h6 class="card-title">News Data</h6> -->
				<?= form_open_multipart(base_url('teacher/update')); ?>
				<div class="row">
					<?= form_hidden('id', '{id}'); ?>
					<div class="col-12">
						<div class="row">
							<div class="col-8">
								<div class="card" style="height:100%">
									<div class="card-body">
										<h6 class="card-title">Teacher Data</h6>
										<div class="form-group row">
											<div class="col-2">
												<label class="col-form-label">Teacher Name</label>
											</div>
											<div class="col-8">
												<input class="form-control defaultconfig" maxlength="50" name="teacher_name" type="text" placeholder="Teacher Name..." value="{teacher_name}">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-2">
												<label class="col-form-label">Teacher Caption</label>
											</div>
											<div class="col-8">
												<input class="form-control defaultconfig" maxlength="200" name="teacher_caption" type="text" placeholder="Teacher Caption..." value="{teacher_caption}">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="card">
									<div class="card-body">
										<h6 class="card-title">Teacher Image</h6>
										<input type="file" name="teacher_image" class="myDropify border" data-default-file="{teacher_image}" data-height="300" value="{teacher_image}" />
									</div>
								</div>
							</div>
							<div class="col">
								<button class="btn btn-success mt-3" type="submit" value="upload">Update</button>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
{/news}
