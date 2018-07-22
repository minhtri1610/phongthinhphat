<?php get_header(); ?>
	<nav>
		<section class = "container fix-padding">
			<div class="row">
				<div class="col-md-8">
					<div id="gallery_banner" class="carousel slide" data-ride="carousel">

						<!-- Indicators -->
						<ul class="carousel-indicators">
							<li data-target="#gallery_banner" data-slide-to="0" class="active"></li>
							<li data-target="#gallery_banner" data-slide-to="1"></li>
							<li data-target="#gallery_banner" data-slide-to="2"></li>
						</ul>

						<!-- The slideshow -->
						<div class="carousel-inner">
							<div class="carousel-item active ">
								<img src="<?php echo URL_IMG?>/banner/3.png" alt="">
							</div>
							<div class="carousel-item ">
								<img src="<?php echo URL_IMG?>/banner/1.jpg" alt="">
							</div>
							<div class="carousel-item ">
								<img src="<?php echo URL_IMG?>/banner/2.jpg" alt="">
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#gallery_banner" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#gallery_banner" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>

					</div>
				</div>
				<div class="col-md-4">
					<div class="top-news">
						<div class="linkien_title" >
							<p class = "wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">Tin Tức</p>
						</div>
						<div class="news-content">
							<ul>
								<li><a href="#">Tin tức 1</a></li>
								<li><a href="#">Tin tức 2</a></li>
								<li><a href="#">Tin tức 3</a></li>
								<li><a href="#">Tin tức 4</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			
		</section>
	</nav>
	<main role="main" class = "container fix-container">
		<!-- section -->
		<section>

			<h1><?php// _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php //get_template_part('loop'); ?>

			<?php //get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
		
		<section class="service mgin-bot-50">
			<div class="row title-h1 ">
				<h1><i class="fas fa-cogs"></i> DỊCH VỤ</h1>
			</div>
			<div class="row list-ser">
				<!-- <div class="col-md-4 ">
					<div class="ser-box">
						<div class=" ser-title wow fadeIn" data-wow-duration=".3" data-wow-delay=".4s">
							<i class="fas fa-laptop"></i>
							<p>Sửa chữa vi tính</p> 
						</div>
						<div class=" ser-box-detail">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, perspiciatis quidem! Molestias deleniti, rerum odit illum, sed beatae quisquam numquam nemo assumenda asperiores ullam et exercitationem voluptatibus quo non iure.</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ser-box">
						<div class=" ser-title wow fadeIn" data-wow-duration=".3" data-wow-delay=".4s">
							<i class="fas fa-video"></i> 
							<p>Lắp đặt và bảo trì Camera</p>
						</div>
						<div class=" ser-box-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, error aperiam est, labore ad explicabo optio quae nisi et dolores numquam consequuntur impedit corporis, aliquid iure natus suscipit amet unde.</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ser-box">
						<div class=" ser-title wow fadeIn" data-wow-duration=".3" data-wow-delay=".4s">
							<i class="fas fa-print"></i> 
							<p>Sửa chữa, lắp đặt máy in</p>
						</div>
						<div class=" ser-box-detail">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit officiis quis mollitia repudiandae numquam laboriosam dolorem? Aperiam laborum deserunt ipsum numquam repellat eos error quasi expedita vel, sint eum unde!</div>
					</div>
				</div> -->
				<div class="col-md-3 box-ser wow pulse"  data-wow-duration=".3" data-wow-delay=".1s">
					<img src="<?php echo URL_IMG;?>/product/lap-dat-camera.jpg" alt="">
					<p><a href="#">Lắp đặt <br> camera quan sát</a></p>
				</div>
				<div class="col-md-3 box-ser wow pulse" data-wow-duration=".3" data-wow-delay=".2s">
					<img src="<?php echo URL_IMG;?>/product/lap-dat-may-cham-cong.jpg" alt="">
					<p><a href="#">Lắp đặt <br> máy chấm công</a></p>
				</div>
				<div class="col-md-3 box-ser wow pulse" data-wow-duration=".3" data-wow-delay=".3s">
					<img src="<?php echo URL_IMG;?>/product/sua-chua-may-tinh-hcm.jpg" alt="">
					<p><a href="#">Sữa chữa máy tính</a></p>
				</div>
				<div class="col-md-3 box-ser wow pulse" data-wow-duration=".3" data-wow-delay=".4s">
					<img src="<?php echo URL_IMG;?>/product/do-muc-may-in.jpg" alt="">
					<p><a href="#">Sửa chữa máy in</a></p>
				</div>
			</div>
		</section>

		<section class=" slogan mgin-bot-50">
			<ul class="slogan-box " >
				<li class = "wow slideInDown" data-wow-duration=".3" data-wow-delay=".1s"><i class="fas fa-award"></i> Tận tâm, uy tín, chuyên nghiệp</li>
				<li class = "wow slideInDown" data-wow-duration=".3" data-wow-delay=".2s"><i class="fas fa-wrench"></i> Sửa chữa xem trực tiếp</li>
				<li class = "wow slideInDown" data-wow-duration=".3" data-wow-delay=".3s"><i class="fas fa-infinity"></i> Bảo hành dài hạn</li>
				<li class = "wow slideInDown" data-wow-duration=".3" data-wow-delay=".4s"><i class="fas fa-people-carry"></i> Dịch vụ chăm sóc tận nhà</li>
			</ul>
		</section>
		<section class ="linkien mgin-bot-50">
			<div class="linkien_title " >
				<p class = "wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">Camera Quan sát</p>
			</div>
			<div class="linkien_content  row">
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo URL_IMG?>/product/camera.jpg" alt="">
							<div class="box-shadow">
								<p>Laptop Acer F5-573-39Q0</p>
								<p>Intel core 7</p>
								<p>Ram : 8GB</p>
								<p>SSD: 1TB</p>
								<p>Màn hình 32inch</p>
								
							</div>
						</div>
						<div class="item-title">
							<a href="#" title="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">Laptop Acer F5-573-39Q0</a>
						</div>
						<div class="item-price">
							10.100.000 đ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo URL_IMG?>/product/camera.jpg" alt="">
							<div class="box-shadow">
								<p>Laptop Acer F5-573-39Q0</p>
								<p>Intel core 7</p>
								<p>Ram : 8GB</p>
								<p>SSD: 1TB</p>
								<p>Màn hình 32inch</p>
								
							</div>
						</div>
						<div class="item-title">
							<a href="#">Laptop Acer F5-573-39Q0</a>
						</div>
						<div class="item-price">
							10.100.000 đ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo URL_IMG?>/product/camera.jpg" alt="">
							<div class="box-shadow">
								<p>Laptop Acer F5-573-39Q0</p>
								<p>Intel core 7</p>
								<p>Ram : 8GB</p>
								<p>SSD: 1TB</p>
								<p>Màn hình 32inch</p>
								
							</div>
						</div>
						<div class="item-title">
							<a href="#">Laptop Acer F5-573-39Q0 </a>
						</div>
						<div class="item-price">
							10.100.000 đ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo URL_IMG?>/product/camera.jpg" alt="">
							<div class="box-shadow">
								<p>Laptop Acer F5-573-39Q0</p>
								<p>Intel core 7</p>
								<p>Ram : 8GB</p>
								<p>SSD: 1TB</p>
								<p>Màn hình 32inch</p>
								
							</div>
						</div>
						<div class="item-title">
							<a href="#">Laptop Acer F5-573-39Q0</a>
						</div>
						<div class="item-price">
							10.100.000 đ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class ="linkien mgin-bot-50">
			<div class="linkien_title" >
				<p class = " wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">Máy chấm công</p>
			</div>
			<div class="linkien_content  row">
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo URL_IMG?>/product/point.jpg" alt="">
							<div class="box-shadow">
								<p>Laptop Acer F5-573-39Q0</p>
								<p>Intel core 7</p>
								<p>Ram : 8GB</p>
								<p>SSD: 1TB</p>
								<p>Màn hình 32inch</p>
								
							</div>
						</div>
						<div class="item-title">
							<a href="#" title="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">Laptop Acer F5-573-39Q0</a>
						</div>
						<div class="item-price">
							10.100.000 đ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo URL_IMG?>/product/point.jpg" alt="">
							<div class="box-shadow">
								<p>Laptop Acer F5-573-39Q0</p>
								<p>Intel core 7</p>
								<p>Ram : 8GB</p>
								<p>SSD: 1TB</p>
								<p>Màn hình 32inch</p>
								
							</div>
						</div>
						<div class="item-title">
							<a href="#">Laptop Acer F5-573-39Q0</a>
						</div>
						<div class="item-price">
							10.100.000 đ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo URL_IMG?>/product/point.jpg" alt="">
							<div class="box-shadow">
								<p>Laptop Acer F5-573-39Q0</p>
								<p>Intel core 7</p>
								<p>Ram : 8GB</p>
								<p>SSD: 1TB</p>
								<p>Màn hình 32inch</p>
								
							</div>
						</div>
						<div class="item-title">
							<a href="#">Laptop Acer F5-573-39Q0 </a>
						</div>
						<div class="item-price">
							10.100.000 đ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo URL_IMG?>/product/point.jpg" alt="">
							<div class="box-shadow">
								<p>Laptop Acer F5-573-39Q0</p>
								<p>Intel core 7</p>
								<p>Ram : 8GB</p>
								<p>SSD: 1TB</p>
								<p>Màn hình 32inch</p>
								
							</div>
						</div>
						<div class="item-title">
							<a href="#">Laptop Acer F5-573-39Q0</a>
						</div>
						<div class="item-price">
							10.100.000 đ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class ="linkien mgin-bot-50">
			<div class="linkien_title " >
				<p class = "wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">Linh kiện máy tính</p>
			</div>
			<div class="linkien_content  row">
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo URL_IMG?>/product/laptop.jpg" alt="">
							<div class="box-shadow">
								<p>Laptop Acer F5-573-39Q0</p>
								<p>Intel core 7</p>
								<p>Ram : 8GB</p>
								<p>SSD: 1TB</p>
								<p>Màn hình 32inch</p>
								
							</div>
						</div>
						<div class="item-title">
							<a href="#" title="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">Laptop Acer F5-573-39Q0</a>
						</div>
						<div class="item-price">
							10.100.000 đ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo URL_IMG?>/product/laptop.jpg" alt="">
							<div class="box-shadow">
								<p>Laptop Acer F5-573-39Q0</p>
								<p>Intel core 7</p>
								<p>Ram : 8GB</p>
								<p>SSD: 1TB</p>
								<p>Màn hình 32inch</p>
								
							</div>
						</div>
						<div class="item-title">
							<a href="#">Laptop Acer F5-573-39Q0</a>
						</div>
						<div class="item-price">
							10.100.000 đ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo URL_IMG?>/product/laptop.jpg" alt="">
							<div class="box-shadow">
								<p>Laptop Acer F5-573-39Q0</p>
								<p>Intel core 7</p>
								<p>Ram : 8GB</p>
								<p>SSD: 1TB</p>
								<p>Màn hình 32inch</p>
								
							</div>
						</div>
						<div class="item-title">
							<a href="#">Laptop Acer F5-573-39Q0 </a>
						</div>
						<div class="item-price">
							10.100.000 đ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo URL_IMG?>/product/laptop.jpg" alt="">
							<div class="box-shadow">
								<p>Laptop Acer F5-573-39Q0</p>
								<p>Intel core 7</p>
								<p>Ram : 8GB</p>
								<p>SSD: 1TB</p>
								<p>Màn hình 32inch</p>
								
							</div>
						</div>
						<div class="item-title">
							<a href="#">Laptop Acer F5-573-39Q0</a>
						</div>
						<div class="item-price">
							10.100.000 đ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class ="linkien mgin-bot-50">
			<div class="linkien_title " >
				<p class ="wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">Phụ kiện máy tính</p>
			</div>
			<div class="linkien_content  row">
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo URL_IMG?>/product/pk.jpg" alt="">
							<div class="box-shadow">
								<p>Laptop Acer F5-573-39Q0</p>
								<p>Intel core 7</p>
								<p>Ram : 8GB</p>
								<p>SSD: 1TB</p>
								<p>Màn hình 32inch</p>
								
							</div>
						</div>
						<div class="item-title">
							<a href="#" title="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">Laptop Acer F5-573-39Q0</a>
						</div>
						<div class="item-price">
							10.100.000 đ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo URL_IMG?>/product/pk.jpg" alt="">
							<div class="box-shadow">
								<p>Laptop Acer F5-573-39Q0</p>
								<p>Intel core 7</p>
								<p>Ram : 8GB</p>
								<p>SSD: 1TB</p>
								<p>Màn hình 32inch</p>
								
							</div>
						</div>
						<div class="item-title">
							<a href="#">Laptop Acer F5-573-39Q0</a>
						</div>
						<div class="item-price">
							10.100.000 đ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo URL_IMG?>/product/pk.jpg" alt="">
							<div class="box-shadow">
								<p>Laptop Acer F5-573-39Q0</p>
								<p>Intel core 7</p>
								<p>Ram : 8GB</p>
								<p>SSD: 1TB</p>
								<p>Màn hình 32inch</p>
								
							</div>
						</div>
						<div class="item-title">
							<a href="#">Laptop Acer F5-573-39Q0 </a>
						</div>
						<div class="item-price">
							10.100.000 đ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo URL_IMG?>/product/pk.jpg" alt="">
							<div class="box-shadow">
								<p>Laptop Acer F5-573-39Q0</p>
								<p>Intel core 7</p>
								<p>Ram : 8GB</p>
								<p>SSD: 1TB</p>
								<p>Màn hình 32inch</p>
								
							</div>
						</div>
						<div class="item-title">
							<a href="#">Laptop Acer F5-573-39Q0</a>
						</div>
						<div class="item-price">
							10.100.000 đ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class = "custom-comment">
			<div class="customer-title wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">
				NHẬN XÉT CỦA KHÁCH HÀNG VỀ PHONG THỊNH PHÁT	
			</div>
			<div id="gallery_comment" class="carousel slide" data-ride="carousel">

				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#gallery_comment" data-slide-to="0" class="active"></li>
					<li data-target="#gallery_comment" data-slide-to="1"></li>
					<li data-target="#gallery_comment" data-slide-to="2"></li>
				</ul>

				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active content-comment">
						<div class="text-comment">
							<span>"</span>
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque est minus illum quae expedita! Alias corrupti doloribus adipisci dignissimos, illo eius vitae. Magnam incidunt, ratione est tempora eveniet fuga reprehenderit?</p>
						</div>
						<div class="img-comment">
							<div class="avatar-comment">
								<img src="<?php echo URL_IMG;?>/product/pk.jpg" alt="">
							</div>
							<div class="name-comment">
								<p>TRAN MINH TRI</p>
								<p>DEV</p>
							</div>
						</div>
					</div>
					<div class="carousel-item content-comment">
						<div class="text-comment">
							<span>"</span>
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque est minus illum quae expedita! Alias corrupti doloribus adipisci dignissimos, illo eius vitae. Magnam incidunt, ratione est tempora eveniet fuga reprehenderit?</p>
						</div>
						<div class="img-comment">
							<div class="avatar-comment">
								<img src="<?php echo URL_IMG;?>/product/pk.jpg" alt="">
							</div>
							<div class="name-comment">
								<p>TRAN MINH TRI</p>
								<p>DEV</p>
							</div>
						</div>
					</div>
					<div class="carousel-item content-comment">
						<div class="text-comment">
							<span>"</span>
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque est minus illum quae expedita! Alias corrupti doloribus adipisci dignissimos, illo eius vitae. Magnam incidunt, ratione est tempora eveniet fuga reprehenderit?</p>
						</div>
						<div class="img-comment">
							<div class="avatar-comment">
								<img src="<?php echo URL_IMG;?>/product/pk.jpg" alt="">
							</div>
							<div class="name-comment">
								<p>TRAN MINH TRI</p>
								<p>DEV</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#gallery_comment" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#gallery_comment" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>

			</div>
		</section>

		<section class ="img-company mgin-bot-50">
			<div class="linkien_title">
				<p class = "wow fadeIn"  data-wow-duration=".3" data-wow-delay=".2s">Dự án đã thi công</p>
			</div>
			<div id="gallery_cmpany">
				<img alt="Image 1 Title" src="<?php echo URL_IMG?>/project/p1.jpg"
					data-image="<?php echo URL_IMG?>/project/p1.jpg"
					data-description="Image 1 Description">
					<img alt="Image 1 Title" src="<?php echo URL_IMG?>/project/p1.jpg"
					data-image="<?php echo URL_IMG?>/project/p1.jpg"
					data-description="Image 1 Description">
					<img alt="Image 1 Title" src="<?php echo URL_IMG?>/project/p1.jpg"
					data-image="<?php echo URL_IMG?>/project/p1.jpg"
					data-description="Image 1 Description">
			</div>
		</section>
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
