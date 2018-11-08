<?php get_header(); ?>
    
    <div class="container page-contact p-camera">
        <div class="row nav-sub">
            <ul>
                <li><a href="<?php echo URL_ROOT;?>">Home</a> &#8811;</li>
                <li><a href="<?php echo URL_ROOT;?>/download" class = "li-active">Download</a></li>
            </ul>
        </div>

        <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Máy chấm công</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Camera Dahua</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Camera Hikvision</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu3">Camera Paragon</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu4">Camera Kbvision</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane container active" id="home">
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
                                'meta_key'		=> 'type_download',
	                            'meta_value'	=> 'soft-may-cham-cong',
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
        <div class="tab-pane container fade" id="menu1">
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
                                'meta_key'		=> 'type_download',
	                            'meta_value'	=> 'soft-dahua',
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
        <div class="tab-pane container fade" id="menu2">
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
                                'meta_key'		=> 'type_download',
	                            'meta_value'	=> 'soft-hikvision ',
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
        <div class="tab-pane container fade" id="menu3">
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
                                'meta_key'		=> 'type_download',
	                            'meta_value'	=> 'soft-paragon',
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
        <div class="tab-pane container fade" id="menu4">
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
                                'meta_key'		=> 'type_download',
	                            'meta_value'	=> 'soft-kbvision',
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

    </div>
    
        
    </div>

<?php get_footer(); ?>