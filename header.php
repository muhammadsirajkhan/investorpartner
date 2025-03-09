<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<?php wp_head(); ?>


<?php 
$header_logo = get_field('header_logo', 'option'); 
$header_link_one = get_field('header_link_one', 'option'); 
$header_link_two = get_field('header_link_two', 'option'); 

?>

<body <?php body_class(); ?>>
	<header>
		<nav class="navbar navbar-expand-lg" aria-label="Eighth navbar example">
			<div class="container">
				<a class="navbar-brand" href="#"><img src="<?php echo $header_logo ?? ''; ?>" alt=""></a>
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
					<?php wp_nav_menu(array(
						'theme_location' => 'header_menu',
						'menu_id' => 'header-nav',
						'menu_class' => 'navbar-nav',
						'container' => false
					)); ?>

					<div class="btn-wrap d-flex gap-2">
						<a href="<?php echo $header_link_one['url'] ?? ''; ?>" class="btn btn-secondary rounded-pill"><?php echo $header_link_one['title'] ?? ''; ?></a>
						<a href="<?php echo $header_link_two['title'] ?? ''; ?>" class="btn btn-outline-primary rounded-pill"><?php echo $header_link_two['title'] ?? ''; ?></a>
					</div>
				</div>
			</div>
		</nav>
	</header>