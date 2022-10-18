<nav class="sidebar">
	<div class="sidebar-header">
		<a href="#" class="sidebar-brand">
			ESTE<span>SA</span>
		</a>
		<div class="sidebar-toggler not-active">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div class="sidebar-body">
		<ul class="nav">
			<li class="nav-item nav-category">Main</li>
			<li class="nav-item">
				<a href="<?= base_url('dashboard'); ?>" class="nav-link">
					<i class="link-icon" data-feather="box"></i>
					<span class="link-title">Dashboard</span>
				</a>
			</li>
			<li class="nav-item nav-category">Menu</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#menupanel" role="button" aria-expanded="false" aria-controls="emails">
					<i class="link-icon" data-feather="command"></i>
					<span class="link-title">Menu panel</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="menupanel">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url('edit/achievement'); ?>" class="nav-link">Footer</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('edit/achievedetail');?>" class="nav-link">Achievement Detail</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('edit/slider_images'); ?>" class="nav-link">
					<i class="link-icon" data-feather="airplay"></i>
					<span class="link-title">Slider Image</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('edit/news'); ?>" class="nav-link">
					<i class="link-icon" data-feather="paperclip"></i>
					<span class="link-title">News</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('edit/extra'); ?>" class="nav-link">
					<i class="link-icon" data-feather="star"></i>
					<span class="link-title">Extracurricular</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('edit/alumni'); ?>" class="nav-link">
					<i class="link-icon" data-feather="user"></i>
					<span class="link-title">Alumni</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
					<i class="link-icon" data-feather="award"></i>
					<span class="link-title">Achievement</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="emails">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url('edit/achievement'); ?>" class="nav-link">Achievement Master</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('edit/achievedetail');?>" class="nav-link">Achievement Detail</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('edit/teacher'); ?>" class="nav-link">
					<i class="link-icon" data-feather="users"></i>
					<span class="link-title">Teacher</span>
				</a>
			</li>
			<?php if ($this->session->akses == 'superadmin') : ?>
				<li class="nav-item">
					<a href="<?= base_url('edit/superadmin'); ?>" class="nav-link">
						<i class="link-icon" data-feather="key"></i>
						<span class="link-title">Super Admin</span>
					</a>
				</li>
			<?php endif; ?>
		</ul>
	</div>
</nav>
