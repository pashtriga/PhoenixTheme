<?php 
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function phoenix_script_enqueue(){
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('customstyle', get_stylesheet_directory_uri().'/css/main.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri().'/modules/assets/css/portfolio.css');
    wp_enqueue_style('owlcarouselmincss', get_stylesheet_directory_uri().'/css/owl.carousel.min.css');
    wp_enqueue_style('owlthemedefaultmincss', get_stylesheet_directory_uri().'/css/owl.theme.default.min.css');
    wp_enqueue_script('boortstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_style( 'pratafont', 'https://fonts.googleapis.com/css2?family=Prata&display=swap' );
    wp_enqueue_style( 'Montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap' );
    wp_enqueue_style( 'w3animright', 'https://www.w3schools.com/w3css/4/w3.css'); 
    wp_enqueue_style('difference-component', get_stylesheet_directory_uri().'/modules/assets/css/difference-component.css');
    if(basename($_SERVER['REQUEST_URI']) == 'contact'){
        wp_enqueue_style('contact', get_stylesheet_directory_uri().'/modules/assets/css/contact.css');
    }
    if(is_front_page()) {
        wp_enqueue_style('causes-componentstyle', get_stylesheet_directory_uri().'/modules/assets/css/causes-component.css');
        wp_enqueue_style('donation-video', get_stylesheet_directory_uri().'/modules/assets/css/donation-video.css');
        wp_enqueue_style('question-componentstyle', get_stylesheet_directory_uri().'/modules/assets/css/question-component.css');
        wp_enqueue_style('volunteers-componentstyle', get_stylesheet_directory_uri().'/modules/assets/css/volunteers-component.css');
        wp_enqueue_style('logos-component', get_stylesheet_directory_uri().'/modules/assets/css/logos-component.css');
        wp_enqueue_style('get-involved', get_stylesheet_directory_uri().'/modules/assets/css/get-involved.css');
        wp_enqueue_style('active-events', get_stylesheet_directory_uri().'/modules/assets/css/active-events.css');
        wp_enqueue_style('donate-component', get_stylesheet_directory_uri().'/modules/assets/css/donate-component.css');
        wp_enqueue_style('valuable-component', get_stylesheet_directory_uri().'/modules/assets/css/valuable-component.css');

    }   
    if(is_single()){
        wp_enqueue_style('comment', get_stylesheet_directory_uri().'/modules/assets/css/comment.css');
    }
    if(basename($_SERVER['REQUEST_URI']) == 'register'){
        wp_enqueue_style('signupstyle', get_stylesheet_directory_uri().'/css/signup.css');
    } 
}

add_action('wp_enqueue_scripts', 'phoenix_script_enqueue');

function wpb_adding_scripts() {
    wp_register_script('mainjs', get_template_directory_uri() . '/js/main.js', array('jquery'),'1.1', true);
    wp_enqueue_script('mainjs');
    wp_register_script('jquery2minjs', get_template_directory_uri() . '/js/jquery.2.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('jquery2minjs');
    wp_register_script('owlcarouselminjs', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('owlcarouselminjs');
    if(basename($_SERVER['REQUEST_URI']) == 'register'){
        wp_register_script('signupscript', get_template_directory_uri() . '/js/signup.js', array('jquery'),'1.1', true);
        wp_enqueue_script('signupscript');
    }
    if(is_front_page()) {
        wp_register_script('difference-componentjs', get_template_directory_uri() . '/modules/assets/js/difference-component.js', array('jquery'), '1.1', true);
        wp_enqueue_script('difference-componentjs');
        wp_register_script('causes-componentjs', get_template_directory_uri() . '/modules/assets/js/causes-component.js', array('jquery'),'1.1', true);
        wp_enqueue_script('causes-componentjs');
        wp_register_script('question-componentjs', get_template_directory_uri() . '/modules/assets/js/question-component.js', array('jquery'),'1.1', true);
        wp_enqueue_script('question-componentjs');
        wp_register_script('volunteers-componentjs', get_template_directory_uri() . '/modules/assets/js/volunteers-component.js', array('jquery'),'1.1', true);
        wp_enqueue_script('volunteers-componentjs');  
        wp_register_script('active-eventsjs', get_template_directory_uri() . '/modules/assets/js/active-events.js', array('jquery'),'1.1', true);
        wp_enqueue_script('active-eventsjs'); 
        wp_register_script('donation-videojs', get_template_directory_uri() . '/modules/assets/js/donation-video.js', array('jquery'),'1.1', true);
        wp_enqueue_script('donation-videojs');
        wp_register_script('logos-componentjs', get_template_directory_uri() . '/modules/assets/js/logos-component.js', array('jquery'),'1.1', true);
        wp_enqueue_script('logos-componentjs');        
        wp_register_script('valuable-componentjs', get_template_directory_uri() . '/modules/assets/js/valuable-component.js', array('jquery'),'1.1', true);
        wp_enqueue_script('valuable-componentjs');

    }
    wp_register_script('fade-in-featurejs', get_template_directory_uri() . '/modules/assets/js/fade-in-feature.js', array('jquery'), '1.1', true);
    wp_enqueue_script('fade-in-featurejs');
    wp_register_script('jqBootstrapValidation', get_template_directory_uri() . '/modules/assets/js/jqBootstrapValidation.js', array('jquery'), '1.1', true);
    wp_enqueue_script('jqBootstrapValidation');
    if(is_page( 'Contact Us' )){
        wp_register_script( 'gmap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDChiuD-qJTVtm0m2vpZz7x2BZrEDwbHAc' );
        wp_enqueue_script('gmap');
        wp_register_script('contact-usjs', get_template_directory_uri() . '/modules/assets/js/contact-us.js', array('jquery','gmap'), '1.1', true);
        wp_enqueue_script('contact-usjs');
    }
    if(is_single()){
        wp_register_script('commentjs', get_template_directory_uri() . '/modules/assets/js/comment.js', array('jquery'), '1.1', true);
        wp_enqueue_script('commentjs');
    }

    // global $post;
	// if ( ! empty( $post ) && is_page( $post ) ) {
	// 	wp_register_script('localizescript', get_template_directory_uri() . '/modules/assets/js/localize.js', array('jquery'),'1.1', true);
    //     wp_enqueue_script('localizescript');
		// wp_localize_script( 'contact-usjs', 'vars', array(
		// 	// 'childCount' => count( get_children( $post->ID ) ),
        //     'messageSent' => __('Thanks, your email was sent successfully.', 'pippin')
        //     // 'dd' => dd(get_children( $post->ID ))
		// ) );
	// }
} 

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts'); 


function phoenix_theme_setup() {
    add_theme_support( 'menus' );
    register_nav_menu( 'primarymenu', 'Primary Header Navigation' );
    register_nav_menu( 'secondary', 'Footer Navigation' );
}
add_action( 'init', 'phoenix_theme_setup' );

/* 
    ====================================
        Custom Post Type
    ====================================
*/

function phoenix_custom_post_type() {
    $labels = array(
        'name' => 'Portfolio',
        'singullar_name' => 'Portfolio',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Portfolio',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item' 
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'taxonomies' => array(
            'category',
            'post_tag'
        ),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type('portfolio', $args);
}
add_action('init', 'phoenix_custom_post_type');

function phoenix_custom_post_tools_used() {
    $labels = array(
        'name' => 'Tools Used',
        'singular_name' => 'Tools Used',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Tool',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item' 
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'publicly_queryable' => false,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title'),
        'menu_position' => 5,
        'exclude_from_search' => true
    );
    register_post_type('tools_used', $args);
}
add_action('init', 'phoenix_custom_post_tools_used');

/* 
    ====================================
        Theme support
    ====================================
*/
add_theme_support('post-thumbnails');
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );


/* 
    ====================================
        Breadcrumb
    ====================================
*/
function get_breadcrumb() {
    // Settings
    $separator          = '<i class="fa fa-angle-right"></i>';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = 'Home';
      
    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';
       
    // Get the query & post information
    global $post,$wp_query;
       
    // Do not display on the homepage
    if ( !is_front_page() ) {
       
        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
           
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';
           
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
              
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
              
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
              
        } else if ( is_single() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            // Get post category info
            // $category = get_the_category();
             
            // if(!empty($category)) {
              
            //     // Get last category post is in
            //     $last_category = end(array_values($category));
                  
            //     // Get parent any categories and create array
            //     $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
            //     $cat_parents = explode(',',$get_cat_parents);
                  
            //     // Loop through parent categories and store in variable $cat_display
            //     $cat_display = '';
            //     foreach($cat_parents as $parents) {
            //         $cat_display .= '<li class="item-cat">'.$parents.'</li>';
            //         $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
            //     }
             
            // }
              
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                   
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
               
            }
              
            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                  
                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
              
            } else {
                  
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            }
              
        } else if ( is_category() ) {
               
            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
               
        } else if ( is_page() ) {
               
            // Standard page
            if( $post->post_parent ){
                   
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                   
                // Get parents in the right order
                $anc = array_reverse($anc);
                   
                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                   
                // Display parent pages
                echo $parents;
                   
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                   
            } else {
                   
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                   
            }
               
        } else if ( is_tag() ) {
               
            // Tag page
               
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
               
            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
           
        } elseif ( is_day() ) {
               
            // Day archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
               
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_month() ) {
               
            // Month Archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_year() ) {
               
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
               
        } else if ( is_author() ) {
               
            // Auhor archive
               
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
               
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
           
        } else if ( get_query_var('paged') ) {
               
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
               
        } else if ( is_search() ) {
           
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
           
        } elseif ( is_404() ) {
               
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
       
        echo '</ul>';
           
    }
       
}

/* 
    ====================================
        Dumb and Die 
    ====================================
*/

function dd($obj){
    echo '<pre>';
    print_r($obj);
    echo '</pre>';
    die();
}

function meks_time_ago() {
	return human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'ago' );
}



/* 
    ====================================
        Pagination
    ====================================
*/
if ( ! function_exists( 'post_pagination' ) ) :
    function post_pagination() {
      global $wp_query;
      $pager = 999999999; // need an unlikely integer
  
         echo paginate_links( array(
              'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
              'format' => '?paged=%#%',
              'current' => max( 1, get_query_var('paged') ),
              'total' => $wp_query->max_num_pages
         ) );
    }
 endif;

/* 
    ====================================
        Sidebar function
    ====================================
*/
function phoenix_widget_setup() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'class' => 'custom',
        'description' => 'Single post of blog sidebar',
    ));
}
add_action('widgets_init', 'phoenix_widget_setup');


function auto_redirect_external_after_logout(){
    wp_redirect(home_url().'/register');
    exit();
}
add_action('wp_logout','auto_redirect_external_after_logout');



/////////////////////////////////////////////////////////
////////////////////////////////////////////////////////
function post_like_table_create() {

    global $wpdb;
    $table_name = $wpdb->prefix. "post_like_table";
    global $charset_collate;
    $charset_collate = $wpdb->get_charset_collate();
    global $db_version;

    if( $wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") != $table_name)
    { $create_sql = "CREATE TABLE " . $table_name . " (
    id INT(11) NOT NULL auto_increment,
    postid INT(11) NOT NULL ,

    userid VARCHAR(40) NOT NULL ,

    PRIMARY KEY (id))$charset_collate;";
    require_once(ABSPATH . "wp-admin/includes/upgrade.php");
    dbDelta( $create_sql );
    }

    //register the new table with the wpdb object
    if (!isset($wpdb->post_like_table))
    {
    $wpdb->post_like_table = $table_name;
    //add the shortcut so you can use $wpdb->stats
    $wpdb->tables[] = str_replace($wpdb->prefix, '', $table_name);
    }

}
add_action( 'init', 'post_like_table_create');

    // Add the JS
function theme_name_scripts() {
    if(is_single() || basename($_SERVER['REQUEST_URI']) == 'blog'){
        wp_enqueue_script( 'script-name', get_template_directory_uri() . '/modules/assets/js/post-like.js', array('jquery'), '1.0.0', true );
        wp_localize_script( 'script-name', 'MyAjax', array(
        // URL to wp-admin/admin-ajax.php to process the request
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        // generate a nonce with a unique ID "myajax-post-comment-nonce"
        // so that you can check it later when an AJAX request is sent
        'security' => wp_create_nonce( 'my-special-string' )
        ));
    }
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// The function that handles the AJAX request

function my_action_callback() {
    check_ajax_referer( 'my-special-string', 'security' );
    $postid = intval( $_POST['postid'] );
    $user = get_current_user_id();
    $like=0;
    $dislike=0;
    $like_count=0;
    //check if post id and userid present
    global $wpdb;
    $row = $wpdb->get_results( "SELECT id FROM $wpdb->post_like_table WHERE postid = '$postid' AND userid = '$user' AND userid != 0");
    if ( is_user_logged_in() ) {
        if(empty($row)){
        //insert row
        $wpdb->insert( $wpdb->post_like_table, array( 'postid' => $postid, 'userid' => $user ), array( '%d', '%d' ) );
        //echo $wpdb->insert_id;
        $like=1;
        } else {
            //delete row
            $wpdb->delete( $wpdb->post_like_table, array( 'postid' => $postid, 'userid'=> $user ), array( '%d','%s' ) );
            $dislike=1;
        }
    }

    //calculate like count from db.
    $totalrow = $wpdb->get_results( "SELECT id FROM $wpdb->post_like_table WHERE postid = '$postid'");
    $total_like=$wpdb->num_rows;
    $data=array( 'postid'=>$postid,'likecount'=>$total_like,'userid'=>$user,'like'=>$like,'dislike'=>$dislike);
    echo json_encode($data);
    die(); // this is required to return a proper result
}
add_action( 'wp_ajax_my_action', 'my_action_callback' );
add_action( 'wp_ajax_nopriv_my_action', 'my_action_callback' );

//////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////


function automatically_log_me_in( $user_id ) {
    wp_set_current_user( $user_id );
    wp_set_auth_cookie( $user_id );
    wp_redirect( home_url( '/wp-admin' ) );
    exit(); 
}
add_action( 'user_register', 'automatically_log_me_in' );



function ajax_login_init(){

    wp_register_script('ajax-login-script', get_template_directory_uri() . '/ajax-login-script.js', array('jquery') ); 
    wp_enqueue_script('ajax-login-script');

    wp_localize_script( 'ajax-login-script', 'ajax_login_object', array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => home_url(),
        'loadingmessage' => __('Sending user info, please wait...')
    ));

    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
}

// Execute the action only if the user isn't logged in
if (!is_user_logged_in()) {
    add_action('init', 'ajax_login_init');
}


function ajax_login(){

    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-login-nonce', 'security' );

    // Nonce is checked, get the POST data and sign user on
    $info = array();
    $info['user_login'] = $_POST['username'];
    $info['user_password'] = $_POST['password'];
    $info['remember'] = true;

    $user_signon = wp_signon( $info, false );
    if ( is_wp_error($user_signon) ){
        echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));
    } else {
        echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful, redirecting...')));
    }

    die();
}


function my_filter_where($where = ''){
    if(is_home()) {
        return $where .= "AND trim(coalesce(post_content, '')) <>''";
    } 
    return $where;
}
add_filter('posts_where', 'my_filter_where');

/**
 * Filter decision if post type is excluded from the XML sitemap.
 *
 * @param bool   $exclude Default false.
 * @param string $type    Post type name.
 */
add_filter( 'rank_math/sitemap/exclude_post_type', function( $exclude, $type="portfolio" ){
	return $exclude;
}, 10, 2 );


add_filter( 'rank_math/sitemap/posts_to_exclude', function( $posts_to_exclude ){
    $posts_ids = []; // Add the post ids you want to exclude seperated by coma.
    $posts = get_posts();
    foreach ($posts as $post) {
        if($post->post_content == "") {
            $posts_ids [] = $post->ID;
        }
    }
    return array_merge( $posts_to_exclude,$posts_ids );
});

/**
 * Collect data to output in JSON-LD.
 *
 * @param array  $unsigned An array of data to output in json-ld.
 * @param JsonLD $unsigned JsonLD instance.
 */

// add_filter( 'rank_math/json_ld', function( $data, $jsonld ) {
//     if(is_home() || is_single()) {
//         $twitter = get_the_author_meta( 'twitter', $post->post_author );
//         $facebook = get_the_author_meta( 'facebook', $post->post_author );
//         $data['BlogPosting'] = [
//             "@context" => "http://schema.org/",
//             "@type" => "BlogPosting",
//             "author" => [
//                 "@type" => "Person",
//                 "name" => get_the_author_meta('display_name', $author_id),
//                 "sameAs" => ['https://twitter.com/' . $twitter, $facebook]
//             ]
//         ];
//         return $data;
//     }
//     return [];
// }, 10, 2);

add_filter( 'rank_math/snippet/rich_snippet_article_entity', function( $entity ) {
    if(is_home() || is_single()) {
        $twitter = get_the_author_meta( 'twitter', $post->post_author );
        $facebook = get_the_author_meta( 'facebook', $post->post_author );
        $entity['author'] = [
            '@type' => 'Person',
            'name'  => get_the_author_meta('display_name', $author_id),
            'sameAs' => ['https://twitter.com/' . $twitter, $facebook]
        ];

        return $entity;
    }
    return [];
});

add_filter( 'rank_math/snippet/rich_snippet_article_entity', function( $entity ) {
    if(is_home() || is_single()) {
        $entity['publisher'] = [
            '@type' => 'Organization',
            'name'  => 'Phoenix',
            'logo' => [
                '@type' => 'ImageObject',
                'URL' => 'https://www.google.com/search?q=cat+pic&client=opera&hs=GNX&tbm=isch&source=iu&ictx=1&fir=I0jdWhnK9jQQ7M%252CzzeqIp7U3jok-M%252C_&vet=1&usg=AI4_-kQ619-h5swQIYu2jG1C9u_JUvDN_A&sa=X&ved=2ahUKEwi3-NmInO7qAhWM3eAKHeUiC60Q9QEwAnoECAUQMw&biw=1326&bih=627#imgrc=I0jdWhnK9jQQ7M'
            ]
        ];

        return $entity;
    }
    return [];
});