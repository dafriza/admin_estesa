{achievement}
<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<!-- <h6 class="card-title">achievement Data</h6> -->
				<div class="row">
					<?= form_open_multipart(base_url('achievement/update')); ?>
					<?= form_hidden('id', '{id}'); ?>
					<div class="col-12">
						<div class="row">
							<div class="col-9">
								<div class="card" style="height:100%">
									<div class="card-body">
										<h6 class="card-title">Achievement Data</h6>
										<div class="form-group row">
											<div class="col-3">
												<label class="col-form-label">Achievement Name</label>
											</div>
											<div class="col-3">
												<input class="form-control defaultconfig" maxlength="50" name="achievement_name" type="text" placeholder="Achievement name ..." value="{achievement_name}" required>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-3 align-self-center">
												<label class="col-form-label">Achievement Icon</label>
											</div>
											<div class="col-6 align-self-center">
												<input class="form-control defaultconfig" id="realIcon" maxlength="50" name="achievement_icon" type="text" placeholder="achievement icon ..." value="{achievement_icon}" required>
											</div>
											<div class="col-3 align-self-center text-center">
												<i id="iconTarget" class="{achievement_icon}" style="font-size:3rem"></i>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-3">
												<label class="col-form-label">Achievement Caption</label>
											</div>
											<div class="col-8">
												<input class="form-control defaultconfig" maxlength="200" name="achievement_caption" type="text" placeholder="achievement caption ..." value="{achievement_caption}">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="card">
									<div class="card-body">
										<h6 class="card-title">Achievement Image</h6>
										<input type="file" name="achievement_image" class="myDropify border" data-default-file="{achievement_image}" data-height="300" value="{achievement_image}" />
									</div>
								</div>
							</div>
							<div class="col-md-12 grid-margin stretch-card mt-5">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Achievement Contents</h4>
										<textarea class="form-control" name="achievement_contents" id="tinymceExample" rows="10">{achievement_contents}</textarea>
									</div>
								</div>
							</div>
							<div class="col">
								<button class="btn btn-success" type="submit" value="upload">Update</button>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
{/achievement}
