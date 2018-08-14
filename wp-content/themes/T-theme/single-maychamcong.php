<?php get_header(); ?>
<main id="content">
    
    <div class="container main-bvnb p-camera">
        <?php while ( have_posts() ) : the_post(); 
            $id_post = get_the_ID();
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
            $time_maintain = get_field('time_bao_hanh');
            $type_feature = get_field('type_features');
            $content_pro = get_field('other_description');
        ?>
        <div class="row nav-sub">
            <ul>
                <li><a href="<?php echo URL_ROOT;?>">Home</a> &#8811;</li>
                <li><a href="<?php echo URL_ROOT;?>/camera-quan-sat" class = "">Máy chấm công</a> &#8811;</li>
                <li><a href="<?php echo $link_mcc;?>" class = "li-active"><?php echo $name_product_mcc;?></a></li>
            </ul>
        </div>
        
        <div class="row head-sp">
            <div class="col-md-6">
                <div class="content-img">
                    <div class="easyzoom easyzoom--adjacent easyzoom--overlay easyzoom--with-thumbnails">
                        <a href="<?php echo $img_1_mcc;?>">
                            <img src="<?php echo $img_1_mcc;?>" alt="" class = "img_show" />
                        </a>
                    </div>
                    <!-- <div style="float: right; width: 1000px; height: 400px; background: #EEE;"></div> -->
                    <ul class="thumbnails list-img-thumnail">
                        <li>
                            <a href="<?php echo $img_1_mcc;?>" data-standard="<?php echo $img_1_mcc;?>">
                                <img src="<?php echo $img_1_mcc;?>" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $img_2_mcc;?>" data-standard="<?php echo $img_2_mcc;?>">
                                <img src="<?php echo $img_2_mcc;?>" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $img_3_mcc;?>" data-standard="<?php echo $img_3_mcc;?>">
                                <img src="<?php echo $img_3_mcc;?>" alt="" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 info-product">
                <div class="detail_product">
                    <h3><?php echo $name_product_mcc;?></h3>
                    <p>Hãng sản xuất: <span class = "green-color"><?php echo $name_maker_mcc;?></span></p>
                    <?php if($price_promotion_mcc != ""){?>
                        <p>Giá: <span class ="un_price"><?php echo $price_product_mcc;?> VNĐ </span></p>
                        
                        <p>Giá khuyến mãi: <span class="price"><?php echo $price_promotion_mcc;?> VNĐ</span></p>
                    <?php } else {?>
                        <p>Giá: <span class ="price"><?php echo $price_product_mcc;?> VNĐ</span></p>

                    <?php }?>
                    <p>Bảo hành: <span class = "green-color"><?php echo $time_maintain;?> tháng</span></p>
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
                        <td><?php echo $name_maker_mcc;?></td>
                    </tr>
                    <tr>
                        <td>Bảo hành</td>
                        <td><?php echo $time_maintain ." tháng";?></td>
                    </tr>
                    <tr>
                        <td>Khả năng quản lý</td>
                        <td><?php echo $knang_quan_ly;?></td>
                    </tr>
                    <tr>
                        <td>Bộ nhớ</td>
                        <td><?php echo $memory;?></td>
                    </tr>
                    <tr>
                        <td>Cổng giao tiếp</td>
                        <td><?php echo $port_IO;?></td>
                    </tr>
                    <tr>
                        <td>Nguồn điện</td>
                        <td><?php echo $ngdien;?></td>
                    </tr>
                    <tr>
                        <td>Kích thước</td>
                        <td><?php echo $size;?></td>
                    </tr>
                    <tr>
                        <td>Hình thức chấm công</td>
                        <td><?php echo $type_feature;?></td>
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
        <br>
        <div class="fb-comments" xid="<?php the_ID(); ?>" width="100%" data-numposts="20" data-colorscheme="light" data-version="v2.3"></div>
        <?php //comments_template(); ?>
        <div class="linkien_title sp-lienquan" >
            <p class = "wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">Sản phẩm liên quan</p>
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
                    $id_post_item = get_the_ID();
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
                    if($id_post != $id_post_item){
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
                            <button class = "btn btn-primary btn-oder" onclick="myFunction()">
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