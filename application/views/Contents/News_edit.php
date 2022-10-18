{news}
<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<!-- <h6 class="card-title">News Data</h6> -->
				<div class="row">
					<?= form_open_multipart(base_url('news/update')); ?>
					<?= form_hidden('id', '{id}'); ?>
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
												<input class="form-control defaultconfig" maxlength="50" name="news_writer" type="text" placeholder="News Writer..." value="{news_writer}">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-2">
												<label class="col-form-label">News Title</label>
											</div>
											<div class="col-8">
												<input class="form-control defaultconfig" maxlength="50" name="news_title" type="text" placeholder="News Title..." value="{news_title}">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="card">
									<div class="card-body">
										<h6 class="card-title">News Image</h6>
										<input type="file" name="news_image" class="myDropify border" data-default-file="{news_image}" data-height="300" value="{news_image}"/>
									</div>
								</div>
							</div>
							<div class="col-md-12 grid-margin stretch-card mt-5">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">News Content</h4>
										<textarea class="form-control" name="news_content" id="tinymceExample" rows="10">{news_content}</textarea>
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
{/news}
