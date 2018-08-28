<?php
/*
 *  Author: Minh Tri VV-JSC
 *  URL: T-Theme.com | @tthemess
 *  Theme perfect
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

define( 'URL_CSS', get_template_directory_uri().'/css' );
define( 'URL_JS', get_template_directory_uri().'/js' );
define( 'URL_IMG', get_template_directory_uri().'/img' );
define('URL_ROOT', get_home_url());

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
}
// import init function
require dirname( __FILE__ ).'/init/init.php';
/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    // wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank'); // Enqueue it!
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}


// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 1;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}


// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}


/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
// add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
// add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('html5-blank', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('HTML5 Blank Custom Post', 'html5blank'), // Rename these to suit
            'singular_name' => __('HTML5 Blank Custom Post', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit HTML5 Blank Custom Post', 'html5blank'),
            'new_item' => __('New HTML5 Blank Custom Post', 'html5blank'),
            'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'view_item' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'search_items' => __('Search HTML5 Blank Custom Post', 'html5blank'),
            'not_found' => __('No HTML5 Blank Custom Posts found', 'html5blank'),
            'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

// dev TRI customer
add_action('init', 'myStartSession', 1);
function myStartSession() {
    if(!session_id()) {
        session_start();
    }
}

// đặt hàng
$url_link = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/T-theme/';
require ( $url_link . 'PHPMailer/src/PHPMailer.php' );
require ( $url_link . 'PHPMailer/src/Exception.php' );
require ( $url_link . 'PHPMailer/src/SMTP.php' );
function prefix_send_email_to_admin() {
    
    $name = $_POST['name_custome'];
    $email = $_POST['email'];
    $tel    = $_POST['tel'];
    $add    = $_POST['add'];

    if(isset($_SESSION["data_cart"])){
        $tmp_cart = $_SESSION["data_cart"];
        $html = '';
        $html .= '<tr>';
            $html .= '<td style = "width: 250px">';
                $html .= '<b>Tên sản phẩm</b>';
            $html .= '</td>';
            $html .= '<td style = "width: 150px">';
                $html .= '<b>Số lượng</b>';
            $html .= '</td>';
            $html .= '<td style = "width: 250px">';
                $html .= '<b>Giá</b>( /1 sản phẩm)';
            $html .= '</td>';
        $html .= '</tr>';
        foreach ($tmp_cart as $key => $value) {
            
            $html .= '<tr>';
                $html .= '<td>';
                    $html .= $value[0]['name_product'];
                $html .= '</td>';
                $html .= '<td>';
                    $html .= $value[0]['tmp_sll'];
                $html .= '</td>';
                $html .= '<td>';
                    $html .= formatMoney($value[0]['price']);
                $html .= '</td>';
            $html .= '</tr>';
                    
        }
        $html .= '<p><b>SĐT đặt hàng:</b>'.$tel.'</p>';
        $html .= '<p><b>Địa chỉ nhận hàng:</b>'.$add.'</p>';

        $html .= '<p><b>Công ty Phong Thịnh Phát</b></p>';
        $html .= '<p><b>Địa chỉ</b>: 36p, Đường số 12, Phường Tân Thới Nhất, Quận 12, TP-HCM</p>';
        $html .= '<p><b>Số điện thoại</b>: 0908 784 337</p>';
        
        
        $mail = new PHPMailer\PHPMailer\PHPMailer();                              // Passing `true` enables exceptions
        //Server settings
        // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'phongthinhphatvn@gmail.com';                 // SMTP username
        $mail->Password = 'uyphong6689';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('phongthinhphatvn@gmail.com', 'Công ty Phong Thịnh Phát');
        $mail->addAddress($email, $name);     // Add a recipient
        $mail->AddCC('phongthinhphatvn@gmail.com');
        //Content
        $mail->isHTML(true);                               // Set email format to HTML
        $mail->Subject = 'Xác nhận đơn hàng từ Công ty Phong Thịnh Phát';
        $mail->CharSet = "UTF-8";
            $body_mail = '<b>Cám ơn '.$name.'! Bạn đã đặt hàng thành công. Chúng tôi sẽ liên lạc sớm nhất để xác nhận đơn hàng.</b> <br />'.
                    'Nội dung đơn hàng<br />'
                    .'----------------------<br>'
                    .$html;
        $mail->Body    = $body_mail;
        $mail->IsHTML(true); 
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        if ( $mail->send() ) {
            session_destroy();
            wp_redirect(URL_ROOT."/success");
        }
    }
    
}
add_action( 'admin_post_nopriv_contact_form', 'prefix_send_email_to_admin' );
add_action( 'admin_post_contact_form', 'prefix_send_email_to_admin' );


add_action( 'wp_ajax_delItemSessionItem', 'del_order_init' );
add_action( 'wp_ajax_nopriv_delItemSessionItem', 'del_order_init' );
function del_order_init() {
    $id_item            = (isset($_POST['id_del']))?esc_attr($_POST['id_del']) : '';

    if(!empty($_SESSION['data_cart'])){
        $tmp_data   = $_SESSION['data_cart'];
        foreach ($tmp_data as $key => $value) {
            if(($value[0]['id_item'] == $id_item)){
                unset($tmp_data[$key]);
                $_SESSION['data_cart'] = $tmp_data;
                break;
            }
        }
    }
    wp_send_json_success($tmp_data);
    die();
}

add_action( 'wp_ajax_editSessionItem', 'edit_order_init' );
add_action( 'wp_ajax_nopriv_editSessionItem', 'edit_order_init' );
function edit_order_init() {
    $id_item            = (isset($_POST['id_edit']))?esc_attr($_POST['id_edit']) : '';
    $num                = (isset($_POST['num_sll']))?esc_attr($_POST['num_sll']) : '';

    if(!empty($_SESSION['data_cart'])){
        $tmp_data   = $_SESSION['data_cart'];
        foreach ($tmp_data as $key => $value) {
            if(($value[0]['id_item'] == $id_item)){
                $tmp_data[$key][0]['tmp_sll'] =  $num;
                $_SESSION['data_cart'] = $tmp_data;
                break;
            }
        }
    }
    wp_send_json_success($num);
    die();
}

add_action( 'wp_ajax_saveSessionItem', 'order_init' );
add_action( 'wp_ajax_nopriv_saveSessionItem', 'order_init' );

function order_init() {
    $link_thumnail_img  = (isset($_POST['link_thumnail_img']))?esc_attr($_POST['link_thumnail_img']) : '';
    $name_product       = (isset($_POST['name_product']))?esc_attr($_POST['name_product']) : '';
    $price              = (isset($_POST['price']))?esc_attr($_POST['price']) : '';
    $link_item          = (isset($_POST['link_item']))?esc_attr($_POST['link_item']) : '';
    $tmp_sll            = (isset($_POST['tmp_sll']))?esc_attr($_POST['tmp_sll']) : '';
    $id_item            = (isset($_POST['id_item']))?esc_attr($_POST['id_item']) : '';

    //session_cart
    $item_order = [];
    $item_order[] = ['id_item' => $id_item, 'name_product' => $name_product, 'price' => $price, 'tmp_sll' => $tmp_sll, 'link_thumnail_img' => $link_thumnail_img, 'link_item' => $link_item];

    if(!empty($_SESSION['data_cart'])){
        $tmp_data   = [];
        $tmp_data   = $_SESSION['data_cart'];
        $check_item = 0;
        $_SESSION['data_cart'] = [];
        foreach ($tmp_data as $key => $value) {
            if(($value[0]['id_item'] == $id_item) && ($name_product == $value[0]['name_product'])){
                $current_sl = $value[0]['tmp_sll'];
                $new_sl     = $current_sl + $tmp_sll;
                $tmp_data[$key][0]['tmp_sll'] =  $new_sl;
                $_SESSION['data_cart'] = $tmp_data;
                $check_item = 1;
                break;
            }
        }
        if($check_item == 0){
            $tmp_data[] = $item_order;
            $_SESSION['data_cart'] = $tmp_data;
        }
    } else{
        $tmp_data[] = $item_order;
        $_SESSION['data_cart'] = $tmp_data;
    }
    $count = 0;
    $count = count($_SESSION['data_cart']);
    wp_send_json_success($count);
 
    die();//bắt buộc phải có khi kết thúc
}

function my_login_logo_one() { 
    ?> 
<style type="text/css"> 
body.login div#login h1 a {
    background-image: url(<?php echo URL_IMG;?>/logo/logo.png);
} 
</style>
<?php 
} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );

add_action('init', 'formatMoney');
function formatMoney($number, $fractional=false) { 
    if ($fractional) { 
        $number = sprintf('%.2f', $number); 
    } 
    while (true) { 
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1.$2', $number); 
        if ($replaced != $number) { 
            $number = $replaced; 
        } else { 
            break; 
        } 
    } 
    return $number; 
} 

?>
