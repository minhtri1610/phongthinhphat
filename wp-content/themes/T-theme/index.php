<?php get_header(); ?>
	<nav>
		<section class = "container-fluid fix-padding">
			<div id="gallery_banner">
				<img alt="Image 1 Title" src="<?php echo URL_IMG?>/banner/home-s1.jpg"
					data-image="<?php echo URL_IMG?>/banner/home-s1.jpg"
					data-description="Image 1 Description">
					<img alt="Image 1 Title" src="<?php echo URL_IMG?>/banner/home-s2.jpg"
					data-image="<?php echo URL_IMG?>/banner/home-s2.jpg"
					data-description="Image 1 Description">
					<img alt="Image 1 Title" src="<?php echo URL_IMG?>/banner/home-s1.jpg"
					data-image="<?php echo URL_IMG?>/banner/home-s1.jpg"
					data-description="Image 1 Description">
			</div>
		</section>
	</nav>
	<main role="main" class = "container">
		<!-- section -->
		<section>

			<h1><?php// _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php //get_template_part('loop'); ?>

			<?php //get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
		
		<section class="service mgin-bot-50">
			<div class="row title-h1 wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
				<h1><i class="fas fa-cogs"></i> DỊCH VỤ</h1>
			</div>
			<div class="row">
				<div class="col-md-4 ">
					<div class="ser-box">
						<div class=" ser-title wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
							<i class="fas fa-laptop"></i>
							<p>Sửa chữa vi tính</p> 
						</div>
						<div class=" ser-box-detail">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, perspiciatis quidem! Molestias deleniti, rerum odit illum, sed beatae quisquam numquam nemo assumenda asperiores ullam et exercitationem voluptatibus quo non iure.</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ser-box">
						<div class=" ser-title wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
							<i class="fas fa-video"></i> 
							<p>Lắp đặt và bảo trì Camera</p>
						</div>
						<div class=" ser-box-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, error aperiam est, labore ad explicabo optio quae nisi et dolores numquam consequuntur impedit corporis, aliquid iure natus suscipit amet unde.</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ser-box">
						<div class=" ser-title wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
							<i class="fas fa-print"></i> 
							<p>Sửa chữa, lắp đặt máy in</p>
						</div>
						<div class=" ser-box-detail">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit officiis quis mollitia repudiandae numquam laboriosam dolorem? Aperiam laborum deserunt ipsum numquam repellat eos error quasi expedita vel, sint eum unde!</div>
					</div>
				</div>
			</div>
		</section>

		<section class=" slogan mgin-bot-50">
			<ul class="slogan-box wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
				<li><i class="fas fa-award"></i> Tận tâm, uy tín, chuyên nghiệp</li>
				<li><i class="fas fa-wrench"></i> Sửa chữa xem trực tiếp</li>
				<li><i class="fas fa-infinity"></i> Bảo hành dài hạn</li>
				<li><i class="fas fa-people-carry"></i> Dịch vụ chăm sóc tận nhà</li>
			</ul>
		</section>

		<section class ="linkien mgin-bot-50">
			<div class="linkien_title wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
				<p>Linh kiện</p>
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
							<a href="http://" title="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">Laptop Acer F5-573-39Q0</a>
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
							<a href="http://">Laptop Acer F5-573-39Q0</a>
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
							<a href="http://">Laptop Acer F5-573-39Q0 </a>
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
							<a href="http://">Laptop Acer F5-573-39Q0</a>
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
			<div class="linkien_title wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
				<p>Phụ kiện</p>
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
							<a href="http://" title="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">Laptop Acer F5-573-39Q0</a>
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
							<a href="http://">Laptop Acer F5-573-39Q0</a>
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
							<a href="http://">Laptop Acer F5-573-39Q0 </a>
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
							<a href="http://">Laptop Acer F5-573-39Q0</a>
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
			<div class="customer-title wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
				NHẬN XÉT CỦA KHÁCH HÀNG VỀ PHONG THỊNH PHÁT	
			</div>
			<div class="row content-comment">
				<div class="col-md-6 col-sm-6">
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
				<div class="col-md-6 col-sm-6">
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
		</section>

		<section class ="img-company">
			<div class="linkien_title">
				<p>Một số hình ảnh của công ty</p>
			</div>
			<div id="gallery_cmpany">
				<img alt="Image 1 Title" src="<?php echo URL_IMG?>/banner/home-s1.jpg"
					data-image="<?php echo URL_IMG?>/banner/home-s1.jpg"
					data-description="Image 1 Description">
					<img alt="Image 1 Title" src="<?php echo URL_IMG?>/banner/home-s2.jpg"
					data-image="<?php echo URL_IMG?>/banner/home-s2.jpg"
					data-description="Image 1 Description">
					<img alt="Image 1 Title" src="<?php echo URL_IMG?>/banner/home-s1.jpg"
					data-image="<?php echo URL_IMG?>/banner/home-s1.jpg"
					data-description="Image 1 Description">
			</div>
		</section>
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
