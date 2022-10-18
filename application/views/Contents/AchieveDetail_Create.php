<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<?= form_open_multipart(base_url('achievedetail/insert')); ?>
				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col-9">
								<div class="card" style="height:100%">
									<div class="card-body">
										<h6 class="card-title">Achievement Data</h6>
										<div class="form-group row">
											<div class="col-2">
												<label class="col-form-label">Achievement Name</label>
											</div>
											<div class="col-6">
												<input class="form-control defaultconfig" maxlength="50" name="achieve_name" type="text" placeholder="Achievement name ..." required>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-2 align-self-center">
												<label class="col-form-label">Achievement Tag</label>
											</div>
											<div class="col-6 align-self-center">
												<input class="form-control defaultconfig" id="realIcon" maxlength="50" name="tag" type="text" placeholder="O2SN,Karate,..." required>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="card">
									<div class="card-body">
										<h6 class="card-title">Achieve Image</h6>
										<input type="file" name="achieve_img" class="myDropify border" data-height="300" />
									</div>
								</div>
							</div>
							<div class="col mt-3">
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
