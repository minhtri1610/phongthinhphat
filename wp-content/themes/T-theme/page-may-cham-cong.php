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
                    <div class="col-md-4 list-pro-pad-r">
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
                                    <?php echo $price_product_mcc. ' VNĐ';?>
                                </div>
                            <?php } else{?>
                                    <span class="item-price"> <?php echo $price_promotion_mcc. ' VNĐ';?> </span>
                                    <span class = "promotion_price"><?php echo $price_product_mcc. ' VNĐ';?></span> 
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
                    <!-- <div class="col-md-4 list-pro-pad-r">
                        <div class="box-product">
                            <div class="img-item">
                                <img src="<?php echo URL_IMG;?>/product/lap-dat-may-cham-cong.jpg" alt="">
                            </div>
                            <div class="title-item">
                                <a href="<?php echo URL_ROOT?>/camera-quan-sat">Máy chấm công xxxx</a>
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

                        <input type="hidden" name="id_item" class ="id_item">
                        <input type="button" data-dismiss="modal" value = "Thêm vào giỏ hàng" class="btn btn-primary btn_add_cart">
                    </div>
                    
                </div>
			</div>
		</div>
</main>

<?php get_footer(); ?>
