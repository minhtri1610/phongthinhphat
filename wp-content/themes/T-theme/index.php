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
							<?php
								$args_news = array(
									'post_type' => 'news',
									'post_status' => 'publish',
									'posts_per_page' => '8'
								);
								$products_loop_news = new WP_Query( $args_news  );
								if ( $products_loop_news->have_posts() ) :
									while ( $products_loop_news->have_posts() ) : $products_loop_news->the_post();
									// Set variables
									$link_news = get_the_permalink();
									$title_news = get_the_title();
									$description_news = get_the_content();
							?>
								<li><a href="<?php echo $link_news;?>"><?php echo $title_news;?></a></li>
							<?php
								endwhile;
									wp_reset_postdata();
								endif;
							?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			
		</section>
	</nav>
	<main role="main" class = "container fix-container">
		
		<!-- dịch vụ -->
		<section class="service mgin-bot-50">
			<div class="row title-h1 ">
				<h1><i class="fas fa-cogs"></i> DỊCH VỤ</h1>
			</div>
			<div class="row list-ser">
				<div class="col-md-3 box-ser wow pulse"  data-wow-duration=".3" data-wow-delay=".1s">
					<img src="<?php echo URL_IMG;?>/product/lap-dat-camera.jpg" alt="">
					<p><a href="<?php echo URL_ROOT;?>/camera-quan-sat">Lắp đặt <br> camera quan sát</a></p>
				</div>
				<div class="col-md-3 box-ser wow pulse" data-wow-duration=".3" data-wow-delay=".2s">
					<img src="<?php echo URL_IMG;?>/product/lap-dat-may-cham-cong.jpg" alt="">
					<p><a href="<?php echo URL_ROOT;?>/may-cham-cong">Lắp đặt <br> máy chấm công</a></p>
				</div>
				<div class="col-md-3 box-ser wow pulse" data-wow-duration=".3" data-wow-delay=".3s">
					<img src="<?php echo URL_IMG;?>/product/sua-chua-may-tinh-hcm.jpg" alt="">
					<p><a href="<?php echo URL_ROOT;?>/sua-chua-may-tinh-may-in">Sữa chữa máy tính</a></p>
				</div>
				<div class="col-md-3 box-ser wow pulse" data-wow-duration=".3" data-wow-delay=".4s">
					<img src="<?php echo URL_IMG;?>/product/do-muc-may-in.jpg" alt="">
					<p><a href="<?php echo URL_ROOT;?>/sua-chua-may-tinh-may-in">Sửa chữa máy in</a></p>
				</div>
			</div>
		</section>
		<!-- end dịch vụ -->

		<section class=" slogan mgin-bot-50">
			<ul class="slogan-box " >
				<li class = "wow slideInDown" data-wow-duration=".3" data-wow-delay=".1s"><i class="fas fa-award"></i> Tận tâm, uy tín, chuyên nghiệp</li>
				<li class = "wow slideInDown" data-wow-duration=".3" data-wow-delay=".2s"><i class="fas fa-wrench"></i> Sửa chữa xem trực tiếp</li>
				<li class = "wow slideInDown" data-wow-duration=".3" data-wow-delay=".3s"><i class="fas fa-infinity"></i> Bảo hành dài hạn</li>
				<li class = "wow slideInDown" data-wow-duration=".3" data-wow-delay=".4s"><i class="fas fa-people-carry"></i> Dịch vụ chăm sóc tận nhà</li>
			</ul>
		</section>
		<!-- Camera quan sat -->
		<section class ="linkien mgin-bot-50">
			<div class="linkien_title " >
				<p class = "wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">Camera Quan sát</p>
			</div>
			<div class="linkien_content  row">

				<?php
					$args = array(
						'post_type' => 'camera',
						'post_status' => 'publish',
						'posts_per_page' => '8'
					);
					$products_loop = new WP_Query( $args );
					if ( $products_loop->have_posts() ) :
						while ( $products_loop->have_posts() ) : $products_loop->the_post();
						// Set variables
						$data_item = [];
						$link_camera = get_the_permalink();
						$title = get_the_title();
						$description = get_the_content();
						$name_product = get_field('name_product');
						$price_product = get_field('price_camera');
						$price_promotion = get_field('price_promotion');
						$img_1 = get_field('list_image');
						$img_2 = get_field('image_2');
						$img_3 = get_field('image_3');
						$do_phan_giai = get_field('do_phan_giai');
						$position = get_field('position_set_up');
						$long_vision = get_field('long_vision');
						$tg_bhanh = get_field('time_guarantee');
						$lens = get_field('lens');
						$name_marker = get_field('name_marker');
						$id_post_camera = get_the_ID();
				?>
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo $img_1;?>" alt="<?php echo $name_product;?>">
							<div class="box-shadow">
								<p><?php echo $name_product;?></p>
								<p>Hãng sản xuất: <?php echo $name_marker; ?></p>
								<p>Độ phân giải: <?php echo $price_product; ?></p>
								<p>Vị trí: <?php echo $position; ?></p>
								<p>Tầm nhìn tối đa: <?php echo $long_vision;?> </p>
								<p>Ống kính: <?php echo $lens;?></p>
							</div>
						</div>
						<div class="item-title">
							<a href="<?php echo $link_camera;?>" title="<?php echo $name_product;?>"> <?php echo $name_product;?></a>
						</div>
						<div class="item-price">
							Giá: <?php echo $price_product. ' VNĐ';?>
						</div>
						<div class="item-btn-oder">
							<button onclick = "show_info( 'camera', '<?php echo $name_product; ?>', '<?php echo $price_product; ?>', '<?php echo $price_promotion; ?>', '<?php echo $img_1; ?>', '<?php echo $id_post_camera; ?>', '<?php echo $link_camera; ?>')" class = "btn btn-primary btn-oder">
								Mua
							</button>
						</div>
					</div>
				</div>
					
				<?php
					endwhile;
						wp_reset_postdata();
					endif;
				?>
			</div>
		</section>
		<!-- end camera quan sats -->

		<!-- Máy chấm công -->
		<section class ="linkien mgin-bot-50">
			<div class="linkien_title" >
				<p class = " wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">Máy chấm công</p>
			</div>
			<div class="linkien_content  row">
				<?php
					$args_mcc = array(
						'post_type' => 'maychamcong',
						'post_status' => 'publish',
						'posts_per_page' => '8'
					);
					$products_loop_mcc = new WP_Query( $args_mcc );
					if ( $products_loop_mcc->have_posts() ) :
						while ( $products_loop_mcc->have_posts() ) : $products_loop_mcc->the_post();
						// Set variables
						$title_mcc = get_the_title();
						$link_mcc = get_the_permalink();
						$description_mcc = get_the_content();
						$name_product_mcc = get_field('name_product');
						$price_product_mcc = get_field('price');
						$price_promotion_mcc = get_field('price_promotion');
						$img_1_mcc = get_field('img_1');
						$img_2_mcc = get_field('img_2');
						$img_3_mcc = get_field('img_3');
						$knang_quan_ly = get_field('kha_nang_quan_ly');
						$memory = get_field('memory');
						$port_IO = get_field('port_IO');
						$ngdien = get_field('electric_suply');
						$size = get_field('size');
						$name_maker_mcc = get_field('name_maker');

				?>
				<div class="col-md-3">
					<div class="lk-item">
						<a href = "<?php echo $link_mcc;?>">
							<div class="item-img">
								<img src="<?php echo $img_1_mcc;?>" alt="<?php echo $name_product_mcc;?>">
								<div class="box-shadow">
									<p><?php echo $name_product_mcc;?></p>
									<p>Hãng sản xuất: <?php echo $name_maker_mcc;?></p>
									<p>Khả năng quản lý: <?php echo $knang_quan_ly;?></p>
									<p>Bộ nhớ: <?php echo $memory;?></p>
									<p>Cổng giao tiếp:  <?php echo $port_IO;?></p>
									<p>Nguồn điện: <?php echo $ngdien;?></p>
									<p>Kích thước: <?php echo $size;?></p>
								</div>
							</div>
						</a>
						<div class="item-title">
							<a href="<?php echo $link_mcc;?>" title="<?php echo $name_product_mcc;?>"><?php echo $name_product_mcc;?></a>
						</div>
						<div class="item-price">
							Giá: <?php echo $price_product_mcc;?> VNĐ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
				<?php
					endwhile;
						wp_reset_postdata();
					endif;
				?>
			</div>
		</section>
		<!-- end máy chấm công  -->

		<!-- Linh phụ kiện -->
		<section class ="linkien mgin-bot-50">
			<div class="linkien_title " >
				<p class = "wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">Linh kiện - Phụ kiện máy tính</p>
			</div>
			<div class="linkien_content  row">
				<?php
					$args_lk = array(
						'post_type' => 'linhphukien',
						'post_status' => 'publish',
						'posts_per_page' => '8'
					);
					$products_loop_lk = new WP_Query( $args_lk );
					if ( $products_loop_lk->have_posts() ) :
						while ( $products_loop_lk->have_posts() ) : $products_loop_lk->the_post();
						// Set variables
						$link_lk = get_the_permalink();
						$title_lk = get_the_title();
						$description_lk = get_the_content();
						$name_product_lk = get_field('name_linh_kien');
						$price_product_lk = get_field('price');
						$price_promotion_lk = get_field('price_promotion');
						$img_1_lk = get_field('img_1');
						$img_2_lk = get_field('img_2');
						$img_3_lk = get_field('img_3');
						$time_baohanh = get_field('time_guarantee');
						$name_maker = get_field('name_product');
				?>
				<div class="col-md-3">
					<div class="lk-item">
						<div class="item-img">
							<img src="<?php echo $img_1_lk;?>" alt="">
							<div class="box-shadow">
								<p><?php echo $name_product_lk;?></p>
								<p>Hãng sản xuất: <?php echo $name_maker;?></p>
								<p>Thời gian bảo hành: <?php echo $time_baohanh;?></p>
							</div>
						</div>
						<div class="item-title">
							<a href="<?php echo $link_lk;?>" title="<?php echo $name_product_lk;?>"><?php echo $name_product_lk;?></a>
						</div>
						<div class="item-price">
							Giá: <?php echo $price_product_lk;?> VNĐ
						</div>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder">
								<a href="#">Mua</a>
							</button>
						</div>
					</div>
				</div>
				<?php
					endwhile;
						wp_reset_postdata();
					endif;
				?>
			</div>
		</section>
		<!-- end linh phụ kiện  -->
					
		<!-- comment -->
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
		<!-- end comment -->

		<!-- dự án image -->
		<section class ="img-company mgin-bot-50">
			<div class="linkien_title">
				<p class = "wow fadeIn"  data-wow-duration=".3" data-wow-delay=".2s">Dự án đã thi công</p>
			</div>
			<div id="gallery_cmpany">
				<?php
					$args_da = array(
						'post_type' => 'duan',
						'post_status' => 'publish',
						'posts_per_page' => '10'
					);
					$products_loop_da = new WP_Query( $args_da );
					$list_data = [];
					if ( $products_loop_da->have_posts() ) :
						while ( $products_loop_da->have_posts() ) : $products_loop_da->the_post();
						// Set variables
						$link_da = get_the_permalink();
						$title_da = get_the_title();
						$description_da = get_the_content();
						$name_project = get_field('name_project');
						$name_customer = get_field('name_customer');
						// $img_01 = get_field('img_1');
						// $img_02 = get_field('img_2');
						// $img_03 = get_field('img_3');
						// $img_04 = get_field('img_4');
						// $img_05 = get_field('img_5');
						// $img_06 = get_field('img_6');
						// $img_07 = get_field('img_7');
						// $img_08 = get_field('img_8');
						// $img_09 = get_field('img_9');
						// $img_10 = get_field('img_10');
						for ($j=0; $j < 9; $j++) { 
							$img_link = get_field('img_'.$j);
							array_push($list_data, $img_link);
						}
						endwhile;
						wp_reset_postdata();
					endif;
				?>
				<?php 
					$length_arr = count($list_data);
					for ($i=0; $i < $length_arr; $i++) { 
						if($list_data[$i] != ''){
				?>
					<img alt="Image 1 Title" src="<?php echo $list_data[$i];?>"
					data-image="<?php echo $list_data[$i];?>">
				<?php 		
					}
				}
				?>
			</div>
		</section>
		<!-- end du an image -->
		
		<!-- modal cart -->
		<!-- Button to Open the Modal -->
		<button type="button" class="btn btn-primary show_modal_order" style="display: none;" data-toggle="modal" data-target="#modalOder">
			Open modal
		</button>

		<!-- The Modal -->
		<div class="modal fade" id="modalOder">
			<div class="modal-dialog modal-lg">
			<div class="modal-content">
			
				<!-- Modal Header -->
				<div class="modal-header">
				<h4 class="modal-title">MUA HÀNG</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<!-- Modal body -->
				<div class="modal-body">
					<div class="form-group thumnail-product">
						<img src="" alt="">
					</div>
					<div class="form-group">
						<label for="name_product"><a class="link_item" href = "">Tên sản phẩm </a></label>
						<input type="text" readonly class="form-control" id="name_product">
					</div>
					<div class="form-group">
						<label for="price">Giá: </label>
						<input type="text" readonly class="form-control" id="price">
					</div>
					<div class="form-group">
						<label for="price">Số lượng: </label>
						<input type="number" onchange = "charged()" class="form-control" id="quality" min = 1 max = 1000>
					</div>
					<div class="form-group">
						<label for="price">Thành tiền: </label>
						<input type="text" readonly class="form-control" id="total_price">
					</div>
					<input type="button" data-dismiss="modal" value = "Thêm vào giỏ hàng" class="btn btn-primary btn_add_cart">
				</div>
				
			</div>
			</div>
		</div>

	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
