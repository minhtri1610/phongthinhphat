<?php get_header(); ?>
<main id="content">
    
    <div class="container main-bvnb p-camera">
        <?php while ( have_posts() ) : the_post(); 
            $id_post = get_the_ID();
            $tmp_title =  get_the_title();
            $tmp_link = get_the_permalink();
            $name_product = get_field('name_product');
            $price_product = get_field('price_camera');
            $price_promotion= get_field('price_promotion');
            $img_1 = get_field('list_image');
            $img_2 = get_field('image_2');
            $img_3 = get_field('image_3');
            $do_phan_giai = get_field('do_phan_giai');
            $position = get_field('position_set_up');
            $long_vision = get_field('long_vision');
            $tg_bhanh = get_field('time_guarantee');
            $lens = get_field('lens');
            $name_marker = get_field('name_maker');
            $content_pro = get_field('content_product');
        ?>
        <div class="row nav-sub">
            <ul>
                <li><a href="<?php echo URL_ROOT;?>">Home</a> &#8811;</li>
                <li><a href="<?php echo URL_ROOT;?>/camera-quan-sat" class = "">Camera quan sát</a> &#8811;</li>
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
                        <p>Giá: <span class ="un_price"><?php echo $price_product;?> VNĐ </span></p>
                        
                        <p>Giá khuyến mãi: <span class="price"><?php echo $price_promotion;?> VNĐ</span></p>
                    <?php } else {?>
                        <p>Giá: <span class ="price"><?php echo $price_product;?> VNĐ</span></p>

                    <?php }?>
                    <p>Bảo hành: <span class = "green-color"><?php echo $tg_bhanh;?> tháng</span></p>
                </div>
                <div class="box-order">
                    <button class="btn btn-primary">Mua Ngay</button>
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
                    <tr>
                        <td>Độ phân giải</td>
                        <td><?php echo $do_phan_giai;?></td>
                    </tr>
                    <tr>
                        <td>Loại camera</td>
                        <td><?php echo $position;?></td>
                    </tr>
                    <tr>
                        <td>Ống kính</td>
                        <td><?php echo $lens;?></td>
                    </tr>
                    <tr>
                        <td>Tầm nhìn</td>
                        <td><?php echo $long_vision;?></td>
                    </tr>
                </table>

                <!-- content sp -->
                <div class="cotent-detail-pro">
                    <?php echo $content_pro;?>
                </div>
                <!-- end sp -->
            </div>
            <!-- <div class="tab-pane container fade" id="menu1">...</div>
            <div class="tab-pane container fade" id="menu2">...</div> -->
        </div>
        <?php endwhile; // end of the loop. ?>

        <div class="linkien_title sp-lienquan" >
            <p class = "wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">Sản phẩm liên quan</p>

            
        </div>

        <div class="linkien_content  row">

            <?php
                $args = array(
                    'post_type' => 'camera',
                    'post_status' => 'publish',
                    'posts_per_page' => '4'
                );
                $products_loop = new WP_Query( $args );
                if ( $products_loop->have_posts() ) :
                    while ( $products_loop->have_posts() ) : $products_loop->the_post();
                    // Set variables
                    $id_post_item = get_the_ID();
                    $link_camera = get_the_permalink();
                    $title = get_the_title();
                    $description = get_the_content();
                    $name_product = get_field('name_product');
                    $price_product = get_field('price_camera');
                    $price_promotion= get_field('price_promotion');
                    $img_1 = get_field('list_image');
                    $img_2 = get_field('image_2');
                    $img_3 = get_field('image_3');
                    $do_phan_giai = get_field('do_phan_giai');
                    $position = get_field('position_set_up');
                    $long_vision = get_field('long_vision');
                    $tg_bhanh = get_field('time_guarantee');
                    $lens = get_field('lens');
                    $name_marker = get_field('name_marker');
                    if($id_post != $id_post_item){
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
                        <button class = "btn btn-primary btn-oder">
                            <a href="#">Mua</a>
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
</main>
<?php get_footer(); ?>