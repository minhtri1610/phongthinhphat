<?php get_header(); ?>

<main>
    <div class="container p-camera ">
        <div class="row nav-sub">
            <ul>
                <li><a href="<?php echo URL_ROOT;?>">Home</a> &#8811;</li>
                <li><a href="<?php echo URL_ROOT;?>/linh-phu-kien" class = "li-active">Linh kiện - Phụ kiện máy tính</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12 sp-left">
                <div class="linkien_title row" >
                    <p class = "" >Linh - phụ kiện máy tính</p>
                </div>
                <div class="row list-product">
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
                    <div class="col-md-3 list-pro-pad-r">
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
                            <div class="item-price">
                                Giá: <?php echo $price_product_lk;?>
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
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
