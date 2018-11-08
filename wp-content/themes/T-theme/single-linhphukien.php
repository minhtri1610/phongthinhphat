<?php get_header(); ?>
<main id="content">
    
    <div class="container main-bvnb p-camera">
        <?php while ( have_posts() ) : the_post(); 
            $id_post = get_the_ID();
            $tmp_title =  get_the_title();
            $tmp_link = get_the_permalink();
            $name_product = get_field('name_linh_kien');
            $price_product = get_field('price');
            $price_promotion= get_field('price_promotion');
            $view_price = formatMoney($price_product);
            $view_price_pro = formatMoney($price_promotion);
            $img_1 = get_field('img_1');
            $img_2 = get_field('img_2');
            $img_3 = get_field('img_3');
            $name_marker = get_field('name_product');
            $content_pro = get_field('orther_descriptions');
            $tg_bhanh = get_field('time_guarantee');
        ?>
        <div class="row nav-sub">
            <ul>
                <li><a href="<?php echo URL_ROOT;?>">Home</a> &#8811;</li>
                <li><a href="<?php echo URL_ROOT;?>/linh-phu-kien" class = "">Linh - Phụ kiện</a> &#8811;</li>
                <li><a href="<?php echo $tmp_link;?>" class = "li-active"><?php echo $name_product;?></a></li>
            </ul>
        </div>
        
        <div class="row head-sp">
            <div class="col-md-6">
                <div class="content-img">
                    <div class="easyzoom easyzoom--adjacent easyzoom--overlay easyzoom--with-thumbnails">
                        <a href="<?php echo $img_1;?>">
                            <img src="<?php echo $img_1;?>" alt="" class = "img_show" />
                        </a>
                    </div>
                    <!-- <div style="float: right; width: 1000px; height: 400px; background: #EEE;"></div> -->
                    <ul class="thumbnails list-img-thumnail">
                        <li>
                            <a href="<?php echo $img_1;?>" data-standard="<?php echo $img_1;?>">
                                <img src="<?php echo $img_1;?>" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $img_2;?>" data-standard="<?php echo $img_2;?>">
                                <img src="<?php echo $img_2;?>" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $img_3;?>" data-standard="<?php echo $img_3;?>">
                                <img src="<?php echo $img_3;?>" alt="" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 info-product">
                <div class="detail_product">
                    <h3><?php echo $name_product;?></h3>
                    <p>Hãng sản xuất: <span class = "green-color"><?php echo $name_marker;?></span></p>
                    <?php if($price_promotion != ""){?>
                        <p>Giá: <span class ="un_price"><?php echo $view_price;?> VNĐ </span></p>
                        
                        <p>Giá khuyến mãi: <span class="price"><?php echo $view_price_pro;?> VNĐ</span></p>
                    <?php } else {?>
                        <p>Giá: <span class ="price"><?php echo $view_price;?> VNĐ</span></p>

                    <?php }?>
                    <p>Bảo hành: <span class = "green-color"><?php echo $tg_bhanh;?> tháng</span></p>
                    <div class="fb-share-button" 
                        data-href="<?php echo $link_lk;?>" 
                        data-layout="button" data-size = "small">
                    </div>
                </div>
                <div class="box-order">
                <button class = "btn btn-primary btn-oder" onclick = "show_info( 'lk', '<?php echo $name_product; ?>', '<?php echo $price_product; ?>', '<?php echo $price_promotion; ?>', '<?php echo $img_1; ?>', '<?php echo $id_post; ?>', '<?php echo $tmp_link; ?>')" > Mua
                        </button>
                </div>
            </div>
        </div>
            <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="custom-nav">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#info-pro">Thông tin sản phẩm</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
            </li> -->
        </ul>

<!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane container active" id="info-pro">
                
                <!-- <h5>Thông số kỹ thuật:</h5> -->
                <table class="table table-bordered">
                    <tr>
                        <td>Hãng sản xuất</td>
                        <td><?php echo $name_marker;?></td>
                    </tr>
                    <tr>
                        <td>Bảo hành</td>
                        <td><?php echo $tg_bhanh ." tháng";?></td>
                    </tr>
                    
                </table>

                <!-- content sp -->
                <div class="cotent-detail-pro">
                    <?php echo  nl2br($content_pro);?>
                </div>
                <!-- end sp -->
            </div>
            <!-- <div class="tab-pane container fade" id="menu1">...</div>
            <div class="tab-pane container fade" id="menu2">...</div> -->
        </div>
        <?php endwhile; // end of the loop. ?>
        <br>
        <div class="fb-comments" xid="<?php the_ID(); ?>" width="100%" data-numposts="20" data-colorscheme="light" data-version="v2.3"></div>
        <div class="linkien_title sp-lienquan" >
            <p class = "wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">Sản phẩm liên quan</p>

            
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
                    $view_price = formatMoney($price_product_lk);
                    $view_price_pro = formatMoney($price_promotion_lk);
                    $img_1_lk = get_field('img_1');
                    $img_2_lk = get_field('img_2');
                    $img_3_lk = get_field('img_3');
                    $time_baohanh = get_field('time_guarantee');
                    $name_maker = get_field('name_product');
                    $id_post_item = get_the_ID();
                    if($id_post_item != $id_post){
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
                    <?php if($price_promotion == ''){?>
                        <div class="item-price">
                            <?php echo $view_price. ' VNĐ';?>
                        </div>
                    <?php } else{?>
                            <span class="item-price"> <?php echo $view_price_pro. ' VNĐ';?> </span>
                            <span class = "promotion_price"><?php echo $view_price. ' VNĐ';?></span> 
                    <?php }?>
                    <div class="item-btn-oder">
                        <button class = "btn btn-primary btn-oder" onclick = "show_info( 'lk', '<?php echo $name_product_lk; ?>', '<?php echo $price_product_lk; ?>', '<?php echo $price_promotion; ?>', '<?php echo $img_1_lk; ?>', '<?php echo $id_post_item; ?>', '<?php echo $link_lk; ?>')" > Mua
                        </button>
                    </div>
                </div>
            </div>
            <?php
                    }
                endwhile;
                    wp_reset_postdata();
                endif;
            ?>
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