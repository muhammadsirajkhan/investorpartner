<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
</head>

<?php wp_head(); ?>

<body <?php body_class(); ?>>
	<header>
		<nav class="navbar navbar-expand-lg" aria-label="Eighth navbar example">
			<div class="container">
				<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""></a>
				<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="navbar-collapse collapse justify-content-lg-end" id="navbarsExample07" style="">
					<!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" aria-disabled="true">Disabled</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
				<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#">Action</a></li>
				<li><a class="dropdown-item" href="#">Another action</a></li>
				<li><a class="dropdown-item" href="#">Something else here</a></li>
				</ul>
			</li>
			</ul> -->
					<?php wp_nav_menu(array('theme_location' => 'header_menu', 'menu_id' => 'header-nav')); ?>

					<div class="btn-wrap">
						<a href="tel:468786850" class="btn btn-secondary">Let’s Talk: 468 786 850</a>
						<a href="#" class="btn btn-outline-primary">Book Free Consultation</a>
					</div>
				</div>
			</div>
		</nav>
	</header>