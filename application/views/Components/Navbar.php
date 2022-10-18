<nav class="navbar">
	<a href="#" class="sidebar-toggler">
		<i data-feather="menu"></i>
	</a>
	<div class="navbar-content">
		<ul class="navbar-nav">
			<li class="nav-item">
				<button class="btn btn-outline-primary"><?= $this->session->name; ?></button>
			</li>
			<li class=" nav-item dropdown nav-profile">
				<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img src="https://ui-avatars.com/api/?name=<?= $this->session->name; ?>&background=727cf5&color=fff" alt="profile">
				</a>
				<div class="dropdown-menu" aria-labelledby="profileDropdown">
					<div class="dropdown-header d-flex flex-column align-items-center">
						<div class="figure mb-3">
							<img src="https://ui-avatars.com/api/?name=<?= $this->session->name; ?>&background=727cf5&color=fff" alt="">
						</div>
						<div class="info text-center">
							<p class="name font-weight-bold mb-0"><?= $this->session->name; ?></p>
						</div>
					</div>
					<div class="dropdown-body">
						<ul class="profile-nav p-0 pt-3">
							<li class="nav-item">
								<a href="<?= base_url('authLogout'); ?>" class="nav-link">
									<i data-feather="log-out"></i>
									<span>Log Out</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</li>
		</ul>
	</div>
</nav>
