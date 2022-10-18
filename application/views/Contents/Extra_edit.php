{extra}
<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<!-- <h6 class="card-title">extra Data</h6> -->
				<div class="row">
					<?= form_open_multipart(base_url('extra/update')); ?>
					<?= form_hidden('id', '{id}'); ?>
					<div class="col-12">
						<div class="row">
							<div class="col-9">
								<div class="card" style="height:100%">
									<div class="card-body">
										<h6 class="card-title">Extras Data</h6>
										<div class="form-group row">
											<div class="col-3">
												<label class="col-form-label">Extra Name</label>
											</div>
											<div class="col-3">
												<input class="form-control extraconfig" maxlength="50" name="extra_name" type="text" placeholder="extra name ..." value="{extra_name}" required>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-3 align-self-center">
												<label class="col-form-label">Extra Icon</label>
											</div>
											<div class="col-6 align-self-center">
												<input class="form-control extraconfig" id="realIcon" maxlength="50" name="extra_icon" type="text" placeholder="extra icon ..." value="{extra_icon}" required>
											</div>
											<div class="col-3 align-self-center text-center">
												<i id="iconTarget" class="{extra_icon}" style="font-size:3rem"></i>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-3">
												<label class="col-form-label">Extra Caption</label>
											</div>
											<div class="col-8">
												<input class="form-control extraconfig" maxlength="200" name="extra_caption" type="text" placeholder="extra caption ..." value="{extra_caption}">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-3">
								<div class="card">
									<div class="card-body">
										<h6 class="card-title">Extra Image</h6>
										<input type="file" name="extra_image" class="myDropify border" data-default-file="{extra_image}" data-height="300" value="{extra_image}" />
									</div>
								</div>
							</div>
							<div class="col-md-12 grid-margin stretch-card mt-5">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Extra Contents</h4>
										<textarea class="form-control" name="extra_contents" id="tinymceExample" rows="10">{extra_contents}</textarea>
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
{/extra}
