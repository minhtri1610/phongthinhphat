<?php get_header(); ?>

<main>
    <div class="container p-camera">
        <div class="row nav-sub">
            <ul>
                <li><a href="<?php echo URL_ROOT;?>">Home</a> &#8811;</li>
                <li><a href="<?php echo URL_ROOT;?>/camera-quan-sat" class = "li-active">Camera quan sát</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-9 sp-left">
                <div class="linkien_title row" >
                    <p class = "" >Camera quan sát</p>
                </div>
                <div class="row list-product">

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
                            $title = get_the_title();
                            $link_lk = get_the_permalink();
                            $description = get_the_content();
                            $name_product = get_field('name_product');
                            $price_product = get_field('price_camera');
                            $price_promotion= get_field('price_promotion');
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
                            $name_marker = get_field('name_maker');
                            $id_post_camera = get_the_ID();
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 list-pro-pad-r">
                        <div class="lk-item box-product">
                            <div class="item-img">
                                <img src="<?php echo $img_1;?>" alt="<?php echo $name_product;?>">
                                <a href="<?php echo $link_lk;?>">
                                <div class="box-shadow">
                                    <p><?php echo $name_product;?></p>
                                    <p>Hãng sản xuất: <?php echo $name_marker; ?></p>
                                    <p>Độ phân giải: <?php echo $price_product; ?></p>
                                    <p>Vị trí: <?php echo $position; ?></p>
                                    <p>Tầm nhìn tối đa: <?php echo $long_vision;?> </p>
                                    <p>Ống kính: <?php echo $lens;?></p>
                                </div>
                                </a>
                            </div>
                            <div class="item-title">
                                <a href="<?php echo $link_lk;?>" title="<?php echo $name_product;?>"> <?php echo $name_product;?></a>
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
                                <button class = "btn btn-primary btn-oder" onclick = "show_info( 'camera', '<?php echo $name_product; ?>', '<?php echo $price_product; ?>', '<?php echo $price_promotion; ?>', '<?php echo $img_1; ?>', '<?php echo $id_post_camera; ?>', '<?php echo $link_lk; ?>')">Mua</button>
                            </div>
                        </div>
                    </div>
                        
                    <?php
                        endwhile;
                            wp_reset_postdata();
                        else:
                    ?>
                        <div>
                            <h6>Không có sản phẩm nào.</h6>
                        </div>
                    <?php
                        endif;
                    ?>
                    <!-- <div class="col-md-4 list-pro-pad-r">
                        <div class="box-product">
                            <div class="img-item">
                                <img src="<?php echo URL_IMG;?>/product/camera.jpg" alt="">
                            </div>
                            <div class="title-item">
                                <a href="<?php echo URL_ROOT?>/camera-quan-sat">Camera xxxx</a>
                            </div>
                            <div class="price-item">
                                Giá: <span> 10000vnd </span>
                            </div>
                            <div class="buy-btn">
                                <button>
                                    Mua
                                </button>
                            </div>
                        </div>
                    </div> -->
                    
                </div>
            </div>
            <div class="col-md-3 sp-right">
                <div class="linkien_title row" >
                    <p class = "" >Danh Mục</p>
                </div>
                <div class="row">
                    <div class="list-camera-title">
                        <ul>
                            <li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-dahua">&#8811; Camera DAHUA</a></li>
                            <li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-hikvison">&#8811; Camera HIKVISON</a></li>
                            <li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-paragon">&#8811; Camera PARAGON</a></li>
                            <li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-kbvison">&#8811; Camera KBVISON</a></li>
                        </ul>
                        
                    </div>
                </div>

                <div class="linkien_title row" >
                    <p class = "" >Dịch vụ</p>
                </div>
                <div class="row">
                    <div class="list-ser-cam">
                        <ul>
                            <li><a href="#">Tư vấn lắp đặt camera</a></li>
                            <li><a href="#">Bảo trì camera</a></li>
                            <li><a href="#">Sửa chữa camera</a></li>
                        </ul>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>

    <!-- modal cart -->
    <?php get_template_part( 'init/popup' ); ?>
</main>

<?php get_footer(); ?>
