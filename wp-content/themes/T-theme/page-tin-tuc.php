<?php get_header(); ?>
    <div class="container page-contact p-camera">
        <div class="row nav-sub">
            <ul>
                <li><a href="<?php echo URL_ROOT;?>">Home</a> &#8811;</li>
                <li><a href="<?php echo URL_ROOT;?>/tin-tuc" class = "li-active">Tin Tức</a></li>
            </ul>
        </div>
        <div class="title-contact">
            <div class="linkien_title row" >
                <p class = "">Tin tức</p>
            </div>
        </div>
        <div class="ctn-news">
           

            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                $args_lk = array(
                    'post_type' => 'news',
                    'post_status' => 'publish',
                    'posts_per_page' => '20',
                    'paged' => $paged
                );
                $products_loop_lk = new WP_Query( $args_lk );
                if ( $products_loop_lk->have_posts() ) :
                    while ( $products_loop_lk->have_posts() ) : $products_loop_lk->the_post();
                    // Set variables
                    $link_lk = get_the_permalink();
                    $title_lk = get_the_title();
                    $description_lk = get_the_excerpt();
                    $date_post = get_the_date();
            ?>
            <div class="row item-box">
                <div class="col-md-2 img-news">
                    <?php if ( has_post_thumbnail() ) {?>
                        <?php nl2br(the_post_thumbnail()); ?>
                    <?php } else{?>
                        <img src="<?php echo URL_IMG."/news.jpg"?>"/>
                    <?php } ?>
                    
                </div>
                <div class="col-md-10">
                    <div class="box-news">
                        <div class="row tit-news"><h5><a href="<?php echo $link_lk;?>"><?php echo $title_lk;?></a></h5></div>
                        <div class="row post-date"><p>Ngày đăng: <?php echo $date_post;?></p></div>
                        <div class="row content-date">
                            <?php echo nl2br($description_lk);?>
                        </div>
                        <div class="row">
                            <div class="fb-share-button" 
                                data-href="<?php echo $link_lk;?>" 
                                data-layout="button" data-size = "small">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                    wp_reset_postdata();
                endif;
            ?>
            <!--  -->
        </div>
        <div class="row pagination-list">
            <?php if (function_exists('devvn_wp_corenavi')) devvn_wp_corenavi($products_loop_lk);?>
        </div>
    </div>
<?php get_footer(); ?>