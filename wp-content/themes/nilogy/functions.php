<?php 

define('nilogy','nilogy');




add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    load_theme_textdomain(nilogy, get_template_directory() . '/languages');
}



function filter_by_country( $where ,$query ) {
	global $wpdb;
	if(is_admin()) return $where;
	
	
	$ok = false;
	if(in_array($query->get('post_type'),array('center','course','member','activity')))
	{
		$ok=true;
	}
	
	if($query->get('coursetype'))
	{
		$ok = true;
	}
	
	if($query->get('membertype'))
	{
		$ok = true;
	}

	if($query->get('centertype'))
	{
		$ok = true;
	}
	
	if(!$ok) return $where;
	
	@session_start();
	
	
	
	if(isset($_SESSION['country']) && $_SESSION['country'])
	{
		
		$country = esc_sql($_SESSION['country']);
		
		$where .= " and {$wpdb->prefix}posts.ID in (

select object_id from {$wpdb->prefix}term_taxonomy tx
inner join {$wpdb->prefix}terms t on t.term_id = tx.term_id  and t.slug='{$country}'
inner join {$wpdb->prefix}term_relationships trr on trr.term_taxonomy_id = tx.term_taxonomy_id

)";	
	}

	return $where;
    
}
add_filter( 'posts_where' , 'filter_by_country',10,2 );

function my_init() {
	
	
	register_nav_menu('header-menu', __('Header Menu'));
	register_nav_menu('left-menu', __('Left menu'));
	register_nav_menu('right-menu', __('Right menu'));
	register_nav_menu('main', __('main'));

	add_theme_support('post-thumbnails');

	set_post_thumbnail_size(150, 150);

	add_image_size('wide', 1140, 400, true);
	
	checkAjax();
	
}

add_action('init', 'my_init');

function new_excerpt_more($more) {
	return '&nbsp;&nbsp;<a class="more-link" href="' . get_permalink() . '">read more...</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Register Sidebar
 */
function nilogy_register_sidebars() {

    /* Register the primary sidebar. */
    register_sidebar(array(
        'id' => 'main-sidebar',
        'name' => 'Main Sidebar',
    ));
	
	 register_sidebar(array(
        'id' => 'about-us',
        'name' => 'About us',
    ));

	 register_sidebar(array(
        'id' => 'contact-us',
        'name' => 'Contact us',
    ));
    
 register_sidebar(array(
        'id' => 'rate',
        'name' => 'Rate',
    ));

	 register_sidebar(array(
        'id' => 'footer-left',
        'name' => ' Footer Left',
    ));

	 register_sidebar(array(
        'id' => 'footer-center',
        'name' => ' Footer Center',
    ));
	
	 register_sidebar(array(
        'id' => 'footer-right',
        'name' => ' Footer Right',
    ));
	 register_sidebar(array(
        'id' => 'footer-bottom',
        'name' => ' Footer Bottom',
    ));
	/* Repeat register_sidebar() code for additional sidebars. */
}

add_action('widgets_init', 'nilogy_register_sidebars');

add_action('about-us', 'About us');

add_action('contact-us', 'About us');

/**
 * Provides a standard format for the page title depending on the view. This is
 * filtered so that plugins can provide alternative title formats.
 *
 * @param       string    $title    Default title text for current view.
 * @param       string    $sep      Optional separator.
 * @return      string              The filtered title.
 * @package     mayer
 * @subpackage  includes
 * @version     1.0.0
 * @since       1.0.0
 */
function mayer_wp_title($title, $sep) {
	global $paged, $page;

	if (is_feed()) {
		return $title;
	}// end if

	// Add the site name.
	$title .= get_bloginfo('name');

	// Add the site description for the home/front page.
	$site_description = get_bloginfo('description', 'display');
	if ($site_description && (is_home() || is_front_page())) {
		$title = "$title $sep $site_description";
	}// end if

	// Add a page number if necessary.
	if ($paged >= 2 || $page >= 2) {
		$title = sprintf(__('Page %s', 'mayer'), max($paged, $page)) . " $sep $title";
	}// end if

	return $title;

}// end mayer_wp_title

add_filter('wp_title', 'mayer_wp_title', 10, 2);

//Page Slug Body Class
function add_slug_body_class($classes) {
	global $post;
	if (isset($post)) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}


register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'main' ),
) );


require_once('wp-bootstrap-navwalker.php');
add_filter('wp_title', 'mayer_wp_title', 10, 2);
add_filter( 'get_the_archive_title', 'paulg_5_get_the_archive_title' );
 
function paulg_5_get_the_archive_title( $title ) {
	
    $prefixes_to_remove = array(
        'Year: ',
        'Archive: ',
        'Category: ',
        'protfolio-cat: ',
        'coursetype: ',
        'centertype: ',
        'membertype:',
        'Archives: ',
        'booktype:',
        'الآرشيفات:'
                // Add other prefixes you want to remove...
    );
 
    foreach( $prefixes_to_remove as $prefix ) {
        // If title starts with $prefix, remove it and finish
        if( $prefix == substr( $title, 0, strlen( $prefix ) ) )  {
            return substr( $title, strlen( $prefix ) );
        }
    }
 
    // No prefix was matched
    return $title;
}


function checkAjax()
{
	
	if(isset($_GET['getrandomads']))
	{
		get_template_part('sliderrandomads');
		die();
	}
	
	if(isset($_GET['topads']))
	{
		get_template_part('topads');
		die();
	}
	
	if(isset($_GET['getrandomads']))
	{
		get_template_part('sliderrandomads');
		die();
	}
	
	
	if(isset($_GET['getactivecourses']))
	{
		get_template_part('activecourses');
		die();
	}
	
		
}



function prefix_nav_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( $args->link_after . '</a>', '<a data-description="' . $item->description . '"</a>' . $args->link_after . '</a>', $item_output );
    }
 
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );