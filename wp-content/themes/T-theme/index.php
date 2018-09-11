
<?php get_header(); ?>
	<nav>
		<section class = "container fix-padding">
			<div class="row">
				<div class="col-md-3">
					<!-- <div class="top-news">
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
								<li>
								<?php if ( has_post_thumbnail() ) {?>
									<?php the_post_thumbnail(); ?>
								<?php } else{?>
									<img src="<?php echo URL_IMG."/news.jpg"?>"/>
								<?php } ?>
									<a href="<?php echo $link_news;?>"><?php echo $title_news;?></a>
								</li>
							<?php
								endwhile;
									wp_reset_postdata();
								endif;
							?>
							</ul>
						</div>
					</div> -->
					<div class="list-menu">
						<ul class = "ul-parent">
							<li class = "li-sub">
								<a href="<?php echo URL_ROOT;?>/camera-quan-sat">&raquo; Camera quan sát</a>
								<ul class = "sub-ul">
									<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-dahua">Camera dahua</a></li>
									<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-hikvison">Camera hikvison</a></li>
									<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-paragon">Camera paragon</a></li>
									<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-kbvison">Camera kbvison</a></li>
								</ul>
							</li>
							<li class = "li-sub">
								<a href="<?php echo URL_ROOT;?>/may-cham-cong">&raquo; Máy chấm công</a>
								<ul class = "sub-ul">
									<li><a href="<?php echo URL_ROOT;?>/may-cham-cong/may-cham-cong-van-tay">Máy Vân Tay</a></li>
									<li><a href="<?php echo URL_ROOT;?>/may-cham-cong/may-cham-cong-the-giay">Máy thẻ giấy</a></li>
								</ul>
							</li>
							<li>
								<a href="<?php echo URL_ROOT;?>/linh-phu-kien">&raquo; Linh Kiện máy tính</a>
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

				</div>
				<div class="col-md-9">
					<div id="gallery_banner" class="carousel slide" data-ride="carousel">

						<!-- Indicators -->
						<?php 
							$args_banner = array(
								'post_type' => 'list_banner',
								'post_status' => 'publish',
								'posts_per_page' => '10'
							);
							$list_banner = new WP_Query( $args_banner );

						?>
						<!-- The slideshow -->
						<div class="carousel-inner">
						<?php
							$tmp = 0;
							if ( $list_banner->have_posts() ) :
								while ( $list_banner->have_posts() ) : $list_banner->the_post();
								
								$tmp_img_link = get_field('img');
								$link_img = $tmp_img_link['url'];
								$stt = get_field('stt');
								if($stt == "Hiện"){
								$tmp++;
						?>
							<div class="carousel-item <?php if($tmp == 1){ echo 'active';}?>">
								<img src="<?php echo $link_img;?>" alt="Phong Thịnh Phát">
							</div>
						<?php
								}
								endwhile;
								wp_reset_postdata();
							endif;
						?>
						</div>

						<ul class="carousel-indicators">
							<?php for ($i=0; $i < $tmp; $i++) {?>
								<li data-target="#gallery_banner" data-slide-to="<?php echo $i;?>" class="<?php if($i == 0){ echo 'active';}?>"></li>
							<?php }?>
						</ul>

						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#gallery_banner" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#gallery_banner" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>

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
				<div class="col-lg-3 col-md-6 box-ser wow pulse"  data-wow-duration=".3" data-wow-delay=".1s">
					<img src="<?php echo URL_IMG;?>/product/lap-dat-camera.jpg" alt="">
					<p><a href="<?php echo URL_ROOT;?>/camera-quan-sat">Lắp đặt <br> camera quan sát</a></p>
				</div>
				<div class="col-lg-3 col-md-6 box-ser wow pulse" data-wow-duration=".3" data-wow-delay=".2s">
					<img src="<?php echo URL_IMG;?>/product/lap-dat-may-cham-cong.jpg" alt="">
					<p><a href="<?php echo URL_ROOT;?>/may-cham-cong">Lắp đặt <br> máy chấm công</a></p>
				</div>
				<div class="col-lg-3 col-md-6 box-ser wow pulse" data-wow-duration=".3" data-wow-delay=".3s">
					<img src="<?php echo URL_IMG;?>/product/sua-chua-may-tinh-hcm.jpg" alt="">
					<p><a href="<?php echo URL_ROOT;?>/sua-chua-may-tinh-may-in">Sữa chữa máy tính</a></p>
				</div>
				<div class="col-lg-3 col-md-6 box-ser wow pulse" data-wow-duration=".3" data-wow-delay=".4s">
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
						$view_price = formatMoney($price_product);
						$view_price_pro = formatMoney($price_promotion);
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
				<div class="col-lg-3 col-md-4">
					<div class="lk-item">
						<a href="<?php echo $link_camera;?>" title="<?php echo $name_product;?>">
							<div class="item-img">
								<img src="<?php echo $img_1;?>" alt="<?php echo $name_product;?>">
								<div class="box-shadow">
									<p><?php echo $name_product;?></p>
									<p>Hãng sản xuất: <?php echo $name_marker; ?></p>
									<p>Độ phân giải: <?php echo $do_phan_giai; ?></p>
									<p>Vị trí: <?php echo $position; ?></p>
									<p>Tầm nhìn tối đa: <?php echo $long_vision;?> </p>
									<p>Ống kính: <?php echo $lens;?></p>
								</div>
							</div>
						</a>
						<div class="item-title">
							<a href="<?php echo $link_camera;?>" title="<?php echo $name_product;?>"> <?php echo $name_product;?></a>
						</div>
						<?php if($price_promotion == ''){?>
							<div class="item-price">
								<?php echo $view_price. ' VNĐ';?>
							</div>
						<?php } else{?>
								<span class="item-price"> <?php echo $view_price_pro. ' VNĐ';?> </span>
								<span class = "promotion_price"><?php echo $view_price. ' VNĐ';?></span> 
						<?php }?>

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
						$view_price_mcc = formatMoney($price_product_mcc);
						$view_price_pro_mcc = formatMoney($price_promotion_mcc);
						$img_1_mcc = get_field('img_1');
						$img_2_mcc = get_field('img_2');
						$img_3_mcc = get_field('img_3');
						$knang_quan_ly = get_field('kha_nang_quan_ly');
						$memory = get_field('memory');
						$port_IO = get_field('port_IO');
						$ngdien = get_field('electric_suply');
						$size = get_field('size');
						$name_maker_mcc = get_field('name_maker');
						$id_post_mcc = get_the_ID();
				?>
				<div class="col-lg-3 col-md-4">
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

						<?php if($price_promotion_mcc == ''){?>
							<div class="item-price">
								<?php echo $view_price_mcc. ' VNĐ';?>
							</div>
						<?php } else{?>
								<span class="item-price"> <?php echo $view_price_pro_mcc. ' VNĐ';?> </span>
								<span class = "promotion_price"><?php echo $view_price_mcc. ' VNĐ';?></span> 
						<?php }?>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder" onclick = "show_info( 'maychamcong', '<?php echo $name_product_mcc; ?>', '<?php echo $price_product_mcc; ?>', '<?php echo $price_promotion_mcc; ?>', '<?php echo $img_1_mcc; ?>', '<?php echo $id_post_mcc; ?>', '<?php echo $link_mcc; ?>')" >Mua
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
						$view_pri_lk = formatMoney($price_product_lk);
						$view_pri_lk_pro = formatMoney($price_promotion_lk);
						$img_1_lk = get_field('img_1');
						$img_2_lk = get_field('img_2');
						$img_3_lk = get_field('img_3');
						$time_baohanh = get_field('time_guarantee');
						$name_maker = get_field('name_product');
						$id_post_lk = get_the_ID();
				?>
				<div class="col-lg-3 col-md-4">
					<div class="lk-item">
						<a href="<?php echo $link_lk;?>" title="<?php echo $name_product_lk;?>">
							<div class="item-img">
								<img src="<?php echo $img_1_lk;?>" alt="">
								<div class="box-shadow">
									<p><?php echo $name_product_lk;?></p>
									<p>Hãng sản xuất: <?php echo $name_maker;?></p>
									<p>Thời gian bảo hành: <?php echo $time_baohanh;?></p>
								</div>
							</div>
						</a>
						<div class="item-title">
							<a href="<?php echo $link_lk;?>" title="<?php echo $name_product_lk;?>"><?php echo $name_product_lk;?></a>
						</div>

						<?php if($price_promotion_lk == ''){?>
							<div class="item-price">
								<?php echo $view_pri_lk. ' VNĐ';?>
							</div>
						<?php } else{?>
								<span class="item-price"> <?php echo $view_pri_lk_pro. ' VNĐ';?> </span>
								<span class = "promotion_price"><?php echo $view_pri_lk. ' VNĐ';?></span> 
						<?php }?>
						<div class="item-btn-oder">
							<button class = "btn btn-primary btn-oder" onclick = "show_info( 'lk', '<?php echo $name_product_lk; ?>', '<?php echo $price_product_lk; ?>', '<?php echo $price_promotion_lk; ?>', '<?php echo $img_1_lk; ?>', '<?php echo $id_post_lk; ?>', '<?php echo $link_lk; ?>')" > Mua
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
				<!-- The slideshow -->
				<div class="carousel-inner">
					<?php
						$cnt = 0;
						$args = array(
							'post_type' => 'list_feedback',
							'post_status' => 'publish',
							'posts_per_page' => '8'
						);
						$list_feedback = new WP_Query( $args );
						if ( $list_feedback->have_posts() ) :
							while ( $list_feedback->have_posts() ) : $list_feedback->the_post();
							// Set variables
							$name_cuss = get_field('name_cus');
							$avt = get_field('avt');
							$job = get_field('job');
							$comment_text = get_field('content_feed');
							$url_avt = $avt['url'];
							$cnt++;
					?>
				
					<div class="carousel-item <?php if($cnt == 1){ echo "active";}?> content-comment">
						<div class="text-comment">
							<?php echo $comment_text;?>
						</div>
						<div class="img-comment">
							<div class="avatar-comment">
								<img src="<?php echo $url_avt;?>" alt="">
							</div>
							<div class="name-comment">
								<p><?php echo $name_cuss;?></p>
								<p><?php echo $job;?></p>
							</div>
						</div>
					</div>

					<?php
						endwhile;
							wp_reset_postdata();
						endif;
					?>
					
				</div>
				<ul class="carousel-indicators">
					<?php for ($j=0; $j < $cnt; $j++) {?>
						<li data-target="#gallery_comment" data-slide-to="<?php echo $j;?>" class="<?php if($i == 0){ echo 'active';}?>"></li>
					<?php }?>
				</ul>
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
		<?php get_template_part( 'init/popup' ); ?>
		
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
