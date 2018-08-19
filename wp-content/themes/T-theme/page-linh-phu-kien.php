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
                            $view_price_lk = formatMoney($price_product_lk);
                            $view_price_pro_lk = formatMoney($price_promotion_lk);
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
                </div>
            </div>
        </div>
    </div>

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
                <h4 class="modal-title">Thêm vào giỏ hàng</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 box-left-cart">
                        <div class="form-group thumnail-product">
                            <img src="" alt="">
                        </div>
                        <input type="hidden" name="id_item" class ="id_item">
                        <input type="button" data-dismiss="modal" value = "Chọn Mua" class="btn btn-primary btn_add_cart">
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="name_product"><a class="link_item" href = ""><b>Tên sản phẩm</b></a></label>
                            <input type="text" readonly class="form-control" id="name_product">
                        </div>
                        <div class="form-group">
                            <label for="price"><b>Giá</b></label>
                            <input type="text" readonly class="form-control" id="price">
                        </div>
                        <div class="form-group">
                            <label for="price"><b>Số lượng</b></label>
                            <input type="number" onchange = "charged()" class="form-control" id="quality" min = 1 max = 1000>
                        </div>
                        <div class="form-group">
                            <label for="price"><b>Thành tiền</b></label>
                            <input type="text" readonly class="form-control" id="total_price">
                        </div>
                    </div>
                </div>
                
                

                
            </div>
            
        </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
