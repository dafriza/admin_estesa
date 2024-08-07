<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<?= form_open_multipart(base_url('achievement/insert')); ?>
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
												<input class="form-control defaultconfig" maxlength="50" name="achievement_name" type="text" placeholder="Achievement name ..."  required>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-2 align-self-center">
												<label class="col-form-label">Achievement Icon</label>
											</div>
											<div class="col-6 align-self-center">
												<input class="form-control defaultconfig" id="realIcon" maxlength="50" name="achievement_icon" type="text" placeholder="Achievement icon ..."  required>
											</div>
											<div class="col-3 align-self-center text-center">
												<i id="iconTarget" class="" style="font-size:3rem"></i>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-2">
												<label class="col-form-label">Caption</label>
											</div>
											<div class="col-8">
												<input class="form-control defaultconfig" maxlength="200" name="achievement_caption" type="text" placeholder="Achievement caption ..." >
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="card">
									<div class="card-body">
										<h6 class="card-title">News Image</h6>
										<input type="file" name="achievement_image" class="myDropify border" data-height="300" />
									</div>
								</div>
							</div>
							<div class="col-md-12 grid-margin stretch-card mt-5">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Achievement Contents</h4>
										<textarea class="form-control" name="achievement_contents" id="tinymceExample" rows="10"></textarea>
									</div>
								</div>
							</div>
							<div class="col">
								<button class="btn btn-success" type="submit" value="upload">Create</button>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
