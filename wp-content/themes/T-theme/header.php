<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" type="image/x-icon">
		<!-- add css -->
		<link rel="stylesheet" href="<?php echo URL_CSS; ?>/bootstrap.min.css" >
		<link rel="stylesheet" href="<?php echo URL_CSS; ?>/all.css" >
		<link rel="stylesheet" href="<?php echo URL_CSS; ?>/unite-gallery.css" >
		<link rel="stylesheet" href="<?php echo URL_CSS; ?>/animate.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" >
		<link rel="stylesheet" href="<?php echo URL_CSS; ?>/easyzoom.css">
		<link rel="stylesheet" href="<?php echo URL_CSS; ?>/pygments.css">
		<link rel="stylesheet" href="<?php echo URL_CSS; ?>/child-style.css?<?php echo '11h4330102018' ?>" >
		<?php wp_head(); ?>
		<meta property="fb:app_id" content="828266150704740" />
		<meta property="fb:admins" content="CxXykU9x7Ai"/>
	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<header class="header clear" role="banner">

				<div class="container">
					<div class="row top-page">
						<div class="col-md-4 logo sp-padding">
							<a href="<?php echo URL_ROOT;?>">
								<img src="<?php echo URL_IMG?>/logo/logo.png" alt="">
							</a>
							<p><b>Công Ty Phong Thịnh Phát</b></p>
						</div>
						<div class="col-md-4 list-task sp-padding">
							<ul class ="set_up">
								<li><b>Chuyên </b></li>
								<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat"><span style = "color: red">&#8811;</span> Camera quan sát - Báo động - Báo cháy</a></li>
								<li><a href="<?php echo URL_ROOT;?>/may-cham-cong"><span style = "color: red">&#8811;</span> Mấy chấm công - Cửa từ - Bộ đàm</a></li>
								<li><a href="<?php echo URL_ROOT;?>/sua-chua-may-tinh-may-in"><span style = "color: red">&#8811;</span> Máy tính - Máy in - TB văn phòng</a></li>
							</ul>

							<div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon">
								<div class="phonering-alo-ph-circle"></div>
								<div class="phonering-alo-ph-circle-fill"></div>
								<a href="tel:+840935088669" class="pps-btn-img" title="Liên hệ">
									<div class="phonering-alo-ph-img-circle"></div>
								</a>
							</div>

						</div>

						<div class="col-md-4 sp-padding">
							<div class="box-tt">
								<div class="row h-hotline hot-line-pc">
									<div class="col-md-4 col-xl-4 sp-padding">
										<i class="fas fa-mobile"></i> <span>Hotline: </span> 
									</div>
									<div class="col-md-8 col-xl-8 sp-padding" style = "padding-right: 0;">
										<b>0935 088 669 - 0908 784 337</b>
									</div>
								</div>

								<div class="hot-line-sp h-hotline">
									<i class="fas fa-mobile"></i> <span>&nbsp;Hotline: <b> 0935 088 669 - 0908 784 337</b></span>
								</div>

								<div class="row h-point box-cart"> 
									<div class="col-md-12 sp-padding">
										<?php 
											$cnt_cart = 0;
											if(!empty($_SESSION['data_cart'])){
												$cnt_cart = count($_SESSION['data_cart']);
											}
											
										?>
										<a href="<?php echo URL_ROOT;?>/gio-hang"><i class="fas fa-cart-arrow-down"></i> <b>&nbsp;Giỏ hàng:</b> &nbsp;&nbsp;&nbsp;&nbsp;<span class="num_cart"><?php echo $cnt_cart;?></span> sản phẩm </a>
									</div>
								</div>

							</div>

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
							<li class="nav-item list-sp">
								<a class="nav-link">
									<i class="fas fa-list"></i> Danh Mục Sản Phẩm
								</a>
								<?php if(!is_home()){ ?>
									<div class="list-menu menu-diff-home">
										<ul class = "ul-parent">
											<li class = "li-sub">
												<a href="<?php echo URL_ROOT;?>/camera-quan-sat">&raquo; Camera quan sát</a>
												<ul class = "sub-ul">
													<li class="li2-sub"><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-dahua">Camera dahua</a>
														<ul class = "sub2-ul">
															<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-dahua/camera-ip-dahua">Camera Ip</a></li>
															<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-dahua/dau-ghi-dahua">Đầu ghi</a></li>
															<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-dahua/tvl-dahua">Tvl</a></li>
														</ul>
													</li>
													<li class="li2-sub"><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-hikvison">Camera hikvision</a>
														<ul class = "sub2-ul">
															<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-hikvison/camera-ip-hikvision">Camera Ip</a></li>
															<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-hikvison/dau-ghi-hikvision">Đầu ghi</a></li>
															<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-hikvison/tvl-hikvision">Tvl</a></li>
														</ul>
													</li>
													<li class="li2-sub"><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-paragon">Camera paragon</a>
														<ul class = "sub2-ul">
															<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-paragon/camera-ip-paragon">Camera Ip</a></li>
															<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-paragon/dau-ghi-paragon">Đầu ghi</a></li>
															<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-paragon/tvl-paragon">Tvl</a></li>
														</ul>
													</li>
													<li class="li2-sub"><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-kbvison">Camera kbvision</a>
														<ul class = "sub2-ul">
															<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-kbvison/camera-ip-kbvision">Camera Ip</a></li>
															<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-kbvison/dau-ghi-kbvision">Đầu ghi</a></li>
															<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-kbvison/tvl-kbvision">Tvl</a></li>
														</ul>
													</li>
													<li class="li2-sub"><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-ip-da-nang">Camera IP đa năng</a>
													</li>
													
												</ul>
											</li>
											<li class = "li-sub">
												<a href="<?php echo URL_ROOT;?>/may-cham-cong">&raquo; Máy chấm công</a>
												<ul class = "sub-ul">
													<li><a href="<?php echo URL_ROOT;?>/may-cham-cong/may-cham-cong-van-tay">Máy Vân Tay</a></li>
													<li><a href="<?php echo URL_ROOT;?>/may-cham-cong/may-cham-cong-the-giay">Máy thẻ giấy</a></li>
												</ul>
											</li>
											<li class ="li-sub">
												<a href="<?php echo URL_ROOT;?>/linh-phu-kien">&raquo; Linh Kiện máy tính</a>
												<ul class = "sub-ul">
													<li><a href="<?php echo URL_ROOT;?>/linh-phu-kien/ban-phim">Bàn phím</a>
													</li>
													<li><a href="<?php echo URL_ROOT;?>/linh-phu-kien/bo-phat-wifi">Bộ phát wifi</a>
													</li>
													<li><a href="<?php echo URL_ROOT;?>/linh-phu-kien/card-man-hinh">Card màn hình</a>
													</li>
													<li><a href="<?php echo URL_ROOT;?>/linh-phu-kien/case">CASE</a>
													</li>
													<li><a href="<?php echo URL_ROOT;?>/linh-phu-kien/chuot">Chuột</a>
													</li>
													<li><a href="<?php echo URL_ROOT;?>/linh-phu-kien/cpu">CPU</a>
													</li>
													<li><a href="<?php echo URL_ROOT;?>/linh-phu-kien/nguon">Nguồn</a>
													</li>
													<li><a href="<?php echo URL_ROOT;?>/linh-phu-kien/ram">Ram</a>
													</li>
													<li><a href="<?php echo URL_ROOT;?>/linh-phu-kien/pk-may-tinh">Phụ kiện máy tính</a>
													</li>
													<li><a href="<?php echo URL_ROOT;?>/linh-phu-kien/tb-may-tinh">Trọn bộ máy tính</a>
													</li>
												</ul>
											</li>
											<li>
												<a class="" href="<?php echo URL_ROOT;?>/sua-chua-may-tinh-may-in">&raquo; sửa chữa máy tính
												</a>
											</li>
											<li>
												<a class="" href="<?php echo URL_ROOT;?>/sua-chua-may-tinh-may-in">&raquo; sửa chữa máy in
												</a>
											</li>
										</ul>
									</div>
								<?php }?>
							</li>
							<li class="nav-item <?php if(is_home()){ echo 'active';}?>">
								<a class="nav-link" href="<?php echo URL_ROOT;?>"><i class="fas fa-home"></i> Trang chủ<span class="sr-only">(current)</span></a>
							</li>
							
							
							<!-- <li class="nav-item <?php if(is_page('camera-quan-sat')|| is_singular('camera')){ echo 'active';}?>">
								<a class="nav-link" href="<?php echo URL_ROOT;?>/camera-quan-sat">
									camera quan sát
								</a>
							</li>
							<li class="nav-item <?php if(is_page('may-cham-cong')|| is_singular('maychamcong')){ echo 'active';}?>">
								<a class="nav-link" href="<?php echo URL_ROOT;?>/may-cham-cong">
									máy chấm công
								</a>
							</li>
							<li class="nav-item <?php if(is_page('sua-chua-may-tinh-may-in')){ echo 'active';}?>">
								<a class="nav-link" href="<?php echo URL_ROOT;?>/sua-chua-may-tinh-may-in">
									sửa chữa máy tính - máy in
								</a>
							</li>
							
							<li class="nav-item <?php if(is_page('linh-phu-kien')|| is_singular('linhphukien')){ echo 'active';}?>">
								<a class="nav-link" href="<?php echo URL_ROOT;?>/linh-phu-kien">
									Linh - Phụ kiện máy tính
								</a>
							</li> -->
							<li class="nav-item <?php if(is_page('gioi-thieu')){ echo 'active';}?>">
								<a class="nav-link" href="<?php echo URL_ROOT;?>/gioi-thieu"> <i class="far fa-building"></i> Giới Thiệu</a>
							</li>
							<li class="nav-item <?php if(is_page('download')){ echo 'active';}?>">
								<a class="nav-link" href="<?php echo URL_ROOT;?>/download"> <i class="fas fa-download"></i> download</a>
							</li>
							<li class="nav-item <?php if(is_page('tin-tuc') || is_singular('news')){ echo 'active';}?>">
								<a class="nav-link" href="<?php echo URL_ROOT;?>/tin-tuc"> <i class="far fa-newspaper"></i> Tin tức</a>
							</li>
							<li class="nav-item <?php if(is_page('lien-he')){ echo 'active';}?>">
								<a class="nav-link" href="<?php echo URL_ROOT;?>/lien-he"><i class="fas fa-headset"></i> Liên Hệ</a>
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
