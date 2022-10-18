<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<!-- <h6 class="card-title">News Data</h6> -->
				<div class="row">
					<?= form_open_multipart(base_url('news/insert')); ?>
					<div class="col-12">
						<div class="row">
							<div class="col">
								<div class="card" style="height:100%">
									<div class="card-body">
										<h6 class="card-title">News Data</h6>
										<div class="form-group row">
											<div class="col-2">
												<label class="col-form-label">News Writer</label>
											</div>
											<div class="col-8">
												<input class="form-control defaultconfig" maxlength="50" name="news_writer" type="text" placeholder="News Writer..." required>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-2">
												<label class="col-form-label">News Title</label>
											</div>
											<div class="col-8">
												<input class="form-control defaultconfig" maxlength="50" name="news_title" type="text" placeholder="News Title..." required>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="card">
									<div class="card-body">
										<h6 class="card-title">News Image</h6>
										<input type="file" name="news_image" class="myDropify border" data-height="300" />
									</div>
								</div>
							</div>
							<div class="col-md-12 grid-margin stretch-card mt-5">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">News Content</h4>
										<textarea class="form-control" name="news_content" id="tinymceExample" rows="10"></textarea>
									</div>
								</div>
							</div>
							<div class="col">
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-success" value="upload">Create</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
