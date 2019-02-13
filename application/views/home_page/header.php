<header class="header_menu_area white_menu">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt=""><img src="img/logo.png" alt=""></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span></span>
		<span></span>
		<span></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="nav navbar-nav">
			<li class="dropdown submenu active">
				<a href="index.php">Home</a>
			</li>
			<li><a href="about-us.php"><?php echo $menu[0]->menu_home ?></a></li>
			<!-- <li><a href="studio.php">Studio</a></li> -->
			<li><a href="work-list.php"><?php echo $menu[0]->menu_prduct ?></a></a></li>
			<li class="dropdown submenu">
				<a href="work-masonry.php"><?php echo $menu[0]->menu_projects ?></a></a>
				<!-- <ul class="dropdown-menu">
					<li><a href="work-grid.php">Work Grid</a></li>

					<li><a href="work-masonry.php">Work Masonry</a></li>
					<li><a href="project-detail.php">Project Details</a></li>
				</ul> -->
			</li>
			<!-- <li class="dropdown submenu">
				<div class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</div>
				<ul class="dropdown-menu">
					<li><a href="blog-grid.php">Blog Grid</a></li>
					<li><a href="blog-masonry.php">Blog Masonry</a></li>
					<li><a href="blog-with-sidebar.php">Blog With Sidebar</a></li>
					<li><a href="single-blog-gallery.php">Single Blog Gallery</a></li>
					<li><a href="single-blog-image.php">Single Blog Image</a></li>
					<li><a href="single-blog-video.php">Single Blog Video</a></li>
				</ul>
			</li> -->
			<li><a href="contact.php"><?php echo $menu[0]->menu_contact ?></a></a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="active"><a href="<?php echo base_url("home/ar") ?>" class="lang">Ar</a></li>
			<!-- <li><a href="#">Ar</a></li> -->
		</ul>
	</div>
</nav>
</header>
<header class="full_header content-white mobile_menu">
	<div class="float-left">
		<a class="logo" href="#"><img src="img/logo.png" alt=""><img src="img/logo.png" alt=""></a>
		<a class="phone" href="tel:3689565656"><i class="lnr lnr-phone-handset"></i> (+070) 3689 56 56 56</a>
	</div>
	<div class="float-right">
		<div class="bar_menu">
			<i class="lnr lnr-menu"></i>
		</div>
	</div>
</header>
