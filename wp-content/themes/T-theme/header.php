<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<!-- add css -->
		<link rel="stylesheet" href="<?php echo URL_CSS; ?>/bootstrap.min.css" >
		<link rel="stylesheet" href="<?php echo URL_CSS; ?>/all.css" >
		<link rel="stylesheet" href="<?php echo URL_CSS; ?>/unite-gallery.css" >
		<link rel="stylesheet" href="<?php echo URL_CSS; ?>/animate.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" >
		<link rel="stylesheet" href="<?php echo URL_CSS; ?>/child-style.css" >
		
		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<header class="header clear" role="banner">

				<div class="container">
					<div class="row top-page">
						<div class="col-md-4 logo">
							<a href="<?php echo URL_ROOT;?>">
								<img src="<?php echo URL_IMG?>/logo/logo.png" alt="">
							</a>
						</div>
						<div class="col-md-2">
							<div class="row h-hotline"><i class="fas fa-mobile"></i> <span> Hotline</span> </div>
							<div class="row">(+84)0908784337</div>

							<div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon">
								<div class="phonering-alo-ph-circle"></div>
								<div class="phonering-alo-ph-circle-fill"></div>
								<a href="tel:+84123456789" class="pps-btn-img" title="Liên hệ">
									<div class="phonering-alo-ph-img-circle"></div>
								</a>
							</div>

						</div>
						<div class="col-md-2">
							<div class="row h-time-work">
								<i class="far fa-clock"></i> <span> Thời gian làm việc </span>
							</div>
							<div class="row">
								T2-CN: 24/7
							</div>
						</div>
						<div class="col-md-4">
							<div class="row h-point"> <i class="fas fa-map-marked-alt"></i> <span> Địa chỉ</span> </div>
							<div class="row">Nguyễn Văn Quá, Quận 12, TP-HCM</div>
						</div>
					</div>
				</div>
				<!-- menu -->
				<nav class="navbar navbar-expand-lg navbar-light bg-menu">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav  container">
							<li class="nav-item active">
								<a class="nav-link" href="<?php echo URL_ROOT;?>"><i class="fas fa-home"></i> <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="<?php echo URL_ROOT;?>/camera-quan-sat">
									camera quan sát
								</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="<?php echo URL_ROOT;?>/may-cham-cong">
									máy chấm công
								</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="<?php echo URL_ROOT;?>/sua-chua-may-tinh-may-in">
									sửa chữa máy tính - máy in
								</a>
							</li>
							
							<li class="nav-item ">
								<a class="nav-link" href="<?php echo URL_ROOT;?>/linh-phu-kien">
									Linh - Phụ kiện máy tính
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo URL_ROOT;?>/tin-tuc">Tin tức</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo URL_ROOT;?>/lien-he">Liên Hệ</a>
							</li>
						</ul>
						<!-- <form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form> -->
					</div>
				</nav>
				<!-- end menu -->
			</header>
			<!-- /header -->
