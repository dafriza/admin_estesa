{admin}
<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<!-- <h6 class="card-title">News Data</h6> -->
				<?= form_open(base_url('superadmin/update')); ?>
				<div class="row">
					<?= form_hidden('id', '{id}'); ?>
					<div class="col-12">
						<div class="row">
							<div class="col">
								<div class="card" style="height:100%">
									<div class="card-body">
										<h6 class="card-title">Admin Data</h6>
										<div class="form-group row">
											<div class="col-2">
												<label class="col-form-label">Username</label>
											</div>
											<div class="col-8">
												<input class="form-control defaultconfig" maxlength="50" name="username" type="text" placeholder="Username..." value="{username}">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-2">
												<label class="col-form-label">Password</label>
											</div>
											<div class="col-8">
												<input class="form-control defaultconfig" maxlength="100" name="password" type="text" placeholder="Password..." value="{password}">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-2">
												<label class="col-form-label">Hak Akses</label>
											</div>
											<div class="col-8">
											<select class="form-control jabatan" name="akses">
												<option value="admin">Admin</option>
												<option value="superadmin">Super Admin</option>
											</select>
											</div>
										</div>
										<button class="btn btn-success mt-3" type="submit" value="upload">Update</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
{/admin}
