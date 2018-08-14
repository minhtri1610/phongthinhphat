<?php get_header(); ?>
<main id="content">
    
    <div class="container main-bvnb p-camera">
        <?php while ( have_posts() ) : the_post(); 
            $id_post = get_the_ID();
            $title_mcc = get_the_title();
            $link_mcc = get_the_permalink();
            $description_mcc = get_the_content();
            $date_post = get_the_date();
        ?>
        
        <div class="row nav-sub">
            <ul>
                <li><a href="<?php echo URL_ROOT;?>">Home</a> &#8811;</li>
                <li><a href="<?php echo URL_ROOT;?>/tin-tuc" class = "">Tin tức</a> &#8811;</li>
                <li><a href="<?php echo $link_mcc;?>" class = "li-active"><?php echo $title_mcc;?></a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-9">
                <h4><?php echo $title_mcc;?></h4>
                <div class="content">
                    <?php echo  $description_mcc;?>
                </div>
                <br>
                <div class="fb-comments" xid="<?php the_ID(); ?>" width="100%" data-numposts="20" data-colorscheme="light" data-version="v2.3"></div>
            </div>
        <?php
            
            endwhile;
        ?>
        <div class="col-md-3">
            <div class="linkien_title row" >
                <p class = "">Tin mới nhất</p>
            </div>
            <div class="body-new">
                <?php
                    $args_lk = array(
                        'post_type' => 'news',
                        'post_status' => 'publish',
                        'posts_per_page' => '10'
                    );
                    $products_loop_lk = new WP_Query( $args_lk );
                    if ( $products_loop_lk->have_posts() ) :
                        while ( $products_loop_lk->have_posts() ) : $products_loop_lk->the_post();
                        // Set variables
                        $link_lk = get_the_permalink();
                        $title_lk = get_the_title();
                        $description_lk = get_the_content();
                        $id_post_item = get_the_ID();

                        if($id_post_item != $id_post){
                ?>
                    <div class="row item-box">
                        <div class="col-md-3 img-news">
                            <?php if ( has_post_thumbnail() ) {?>
                                <?php the_post_thumbnail(); ?>
                            <?php } else{?>
                                <img src="<?php echo URL_IMG."/news.jpg"?>"/>
                            <?php } ?>
                            
                        </div>
                        <div class="col-md-9">
                            <div class="box-news">
                                <div class="row tit-news"><h5><a href="<?php echo $link_lk;?>"><?php echo $title_lk;?></a></h5></div>
                                <div class="row post-date"><p>Ngày đăng: <?php echo $date_post;?></p></div>
                                
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
        </div>
    </div>
</main>
<?php get_footer(); ?>