<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<!-- <h6 class="card-title">alumni Data</h6> -->
				<?= form_open_multipart(base_url('alumni/insert')); ?>
				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col-9">
								<div class="card" style="height:100%">
									<div class="card-body">
										<h6 class="card-title">Alumni Data</h6>
										<div class="form-group row">
											<div class="col-3">
												<label class="col-form-label">Alumni Name</label>
											</div>
											<div class="col-8">
												<input class="form-control defaultconfig" maxlength="50" name="alumni_name" type="text" placeholder="Alumni Name..." required>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-3">
												<label class="col-form-label">Alumni Testimoni</label>
											</div>
											<div class="col-8">
												<input class="form-control defaultconfig" maxlength="255" name="alumni_testimoni" type="text" placeholder="Alumni Testimoni..." required>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-3">
												<label class="col-form-label">Alumni Instansi</label>
											</div>
											<div class="col-8">
												<input class="form-control defaultconfig" maxlength="50" name="alumni_instansi" type="text" placeholder="Alumni Instansi..." required>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<div class="card-body">
										<h6 class="card-title">Alumni Image</h6>
										<input type="file" name="alumni_image" class="myDropify border" data-height="250"/>
									</div>
								</div>
							</div>
							<div class="col-12 mt-4">
								<button class="btn btn-success" type="submit" value="upload">Create</button>
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
