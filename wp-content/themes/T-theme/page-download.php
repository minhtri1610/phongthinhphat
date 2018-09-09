<?php get_header(); ?>
    
    <div class="container page-contact p-camera">
        <div class="row nav-sub">
            <ul>
                <li><a href="<?php echo URL_ROOT;?>">Home</a> &#8811;</li>
                <li><a href="<?php echo URL_ROOT;?>/download" class = "li-active">Download</a></li>
            </ul>
        </div>
        <!-- <div class="title-contact"> -->
            <div class="linkien_title row" >
                <p class = " " >Download</p>
            </div>
        <!-- </div> -->
        <div class="content-contact row">
            <table class = "table tab_down">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên chương trình</th>
                        <th width = "10%"><i class="fas fa-download"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $args = array(
                            'post_type' => 'list_downloads',
                            'post_status' => 'publish',
                            'posts_per_page' => '100'
                        );
                        $products_loop = new WP_Query( $args );
                        $cnt = 0;
                        if ( $products_loop->have_posts() ) :
                            while ( $products_loop->have_posts() ) : $products_loop->the_post();
                            // Set variables
                           
                            $name_program = get_field('name_program');
                            $link_down = get_field('link_download');
                            $id_link = get_the_ID();
                            $cnt++;
                    ?>
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td><a href="<?php echo $link_down;?>" target = "_blank"><?php echo $name_program;?></a></td>
                        <td><a class = "dow-icon" href="<?php echo $link_down;?>" target = "_blank"><i class="fas fa-download"></i></a></td>
                    </tr>
                    <?php
                        endwhile;
                            wp_reset_postdata();
                        endif;
                    ?>
                </tbody>
            </table>
        </div>
        
    </div>

<?php get_footer(); ?>