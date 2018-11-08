<?php get_header(); ?>

<main>
    <div class="container p-camera ">
        <div class="row nav-sub">
            <ul>
                <li><a href="<?php echo URL_ROOT;?>">Home</a> &#8811;</li>
                <li><a href="<?php echo URL_ROOT;?>/linh-phu-kien">Linh kiện - Phụ kiện máy tính</a> &#8811;</li>
                <li><a href="<?php echo URL_ROOT;?>/linh-phu-kien/chuot" class = "li-active">Chuột</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12 sp-left">
                <div class="linkien_title row" >
                    <p class = "" >Chuột</p>
                </div>
                <div class="row list-product">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                        $args_lk = array(
                            'post_type' => 'linhphukien',
                            'post_status' => 'publish',
                            'meta_key'		=> 'type_lk',
	                        'meta_value'	=> 'chuot',
                            'posts_per_page' => '20',
                            'paged' => $paged
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
                            $view_price_lk = formatMoney($price_product_lk);
                            $view_price_pro_lk = formatMoney($price_promotion_lk);
                            $img_1_lk = get_field('img_1');
                            $img_2_lk = get_field('img_2');
                            $img_3_lk = get_field('img_3');
                            $time_baohanh = get_field('time_guarantee');
                            $name_maker = get_field('name_product');
                            $id_post_lk = get_the_ID();
                    ?>
                    <div class="col-lg-3 col-md-4 list-pro-pad-r">
                        <div class="lk-item box-product">
                            <a href="<?php echo $link_lk;?>">
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
                                    <?php echo $view_price_lk. ' VNĐ';?>
                                </div>
                            <?php } else{?>
                                    <span class="item-price"> <?php echo $view_price_lk. ' VNĐ';?> </span>
                                    <span class = "promotion_price"><?php echo $view_price_pro_lk. ' VNĐ';?></span> 
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
                    <div class="row pagination-list">
                        <?php if (function_exists('devvn_wp_corenavi')) devvn_wp_corenavi($products_loop_lk);?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal cart -->
	<?php get_template_part( 'init/popup' ); ?>
</main>

<?php get_footer(); ?>
