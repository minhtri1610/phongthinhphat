<?php get_header(); ?>

<main>
    <div class="container p-camera">
        <div class="row nav-sub">
            <ul>
                <li><a href="<?php echo URL_ROOT;?>">Home</a> &#8811;</li>
                <li><a href="<?php echo URL_ROOT;?>/may-cham-cong" class = "li-active">Máy chấm công</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-9 sp-left">
                <div class="linkien_title row" >
                    <p class = "" >Máy chấm công</p>
                </div>
                <div class="row list-product">

                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                        $args_mcc = array(
                            'post_type' => 'maychamcong',
                            'post_status' => 'publish',
                            'posts_per_page' => '20',
                            'paged' => $paged
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
                    <div class="col-lg-4 col-md-4 list-pro-pad-r">
                        <div class="lk-item box-product">
                            <a href="<?php echo $link_mcc;?>">
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
                <div class="row pagination-list">
                    <?php if (function_exists('devvn_wp_corenavi')) devvn_wp_corenavi($products_loop_mcc);?>
                </div>
            </div>
            <div class="col-md-3 sp-right">
                <div class="linkien_title row" >
                    <p class = "" >Danh Mục</p>
                </div>
                <div class="row">
                    <div class="list-camera-title">
                        <ul>
                            <li><a href="<?php echo URL_ROOT;?>/may-cham-cong/may-cham-cong-the-giay">&#8811; Máy thẻ giấy</a></li>
                            <li><a href="<?php echo URL_ROOT;?>/may-cham-cong/may-cham-cong-van-tay">&#8811; Máy vân tay</a></li>
                            
                        </ul>
                        
                    </div>
                </div>

                <div class="linkien_title row" >
                    <p class = "" >Dịch vụ</p>
                </div>
                <div class="row">
                    <div class="list-ser-cam">
                        <ul>
                            <li><a href="#">Tư vấn lắp đặt máy chấm công</a></li>
                            <li><a href="#">Sửa chữa máy chấm công</a></li>
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
