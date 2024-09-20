<?php
/**
 * aiia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aiia
 */

if ( ! defined( 'AIIA_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'AIIA_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aiia_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on aiia, use a find and replace
		* to change 'aiia' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'aiia', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'aiia' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'aiia_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'aiia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aiia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'aiia_content_width', 640 );
}
add_action( 'after_setup_theme', 'aiia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aiia_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'aiia' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'aiia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'aiia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aiia_scripts() {
	wp_enqueue_style( 'aiia-style', get_stylesheet_uri(), array(), AIIA_VERSION );
	wp_style_add_data( 'aiia-style', 'rtl', 'replace' );

	wp_enqueue_script( 'aiia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), AIIA_VERSION, true );
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/css/home-page.css');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    
    // if (is_singular('blog')) {
    //     wp_enqueue_style('blog-style', get_template_directory_uri() . '/assets/css/blog.css');
    // }
    if (is_singular('resource')) {
        wp_enqueue_style('resource-style', get_template_directory_uri() . '/assets/css/resource.css');
    }
    // if (is_singular('issue')) {
    //     wp_enqueue_style('issue-style', get_template_directory_uri() . '/assets/css/issue.css');
    //     wp_enqueue_script( 'aiia-issue', get_template_directory_uri() . '/js/issue.js', array(), AIIA_VERSION, true );
    // }

    // if (is_page_template('page-blogs.php')) {
    //     wp_enqueue_style('blogs-style', get_template_directory_uri() . '/assets/css/blogs.css');
    // }

    if (is_page_template('page-aboutus.php')) {
        wp_enqueue_style('aboutus-style', get_template_directory_uri() . '/assets/css/about-us.css');
    }

    if (is_page_template('page-ResourceParent.php')) {
        wp_enqueue_style('resourceparent-style', get_template_directory_uri() . '/assets/css/resourceparent.css');
    }
    if (is_page_template('page-contactus.php')) {
        wp_enqueue_style('contact-us-style', get_template_directory_uri() . '/assets/css/contact-us.css');
    }
    // if (is_page_template('page-volunteer.php')) {
    //     wp_enqueue_style('volunteer-style', get_template_directory_uri() . '/assets/css/volunteer.css');
    // }
    // if (is_page_template('page-becomeAMember.php')) {
    //     wp_enqueue_style('becomeAmember-style', get_template_directory_uri() . '/assets/css/bcome-a-member.css');
    // }
    // if (is_page_template('page-financialContribution.php')) {
    //     wp_enqueue_style('financialContribution-style', get_template_directory_uri() . '/assets/css/financialContribution.css');
    // }
    // if (is_page_template('page-directoryOfProfessionals.php')) {
    //     wp_enqueue_style('directoryOfProfessionals-style', get_template_directory_uri() . '/assets/css/directory-of-professionals.css');
    // }
    
    
}
add_action( 'wp_enqueue_scripts', 'aiia_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// Add the category taxonomy to the page object type
function add_categories_to_pages() {
    register_taxonomy_for_object_type('category', 'page');
}
add_action('init', 'add_categories_to_pages');



// Register Custom Post Type for Issues
// function custom_post_type_issues() {

//     $labels = array(
//         'name'                  => _x( 'Issues', 'Post Type General Name', 'text_domain' ),
//         'singular_name'         => _x( 'Issue', 'Post Type Singular Name', 'text_domain' ),
//         'menu_name'             => __( 'Issues', 'text_domain' ),
//         'name_admin_bar'        => __( 'Issue', 'text_domain' ),
//         'archives'              => __( 'Issue Archives', 'text_domain' ),
//         'attributes'            => __( 'Issue Attributes', 'text_domain' ),
//         'parent_item_colon'     => __( 'Parent Issue:', 'text_domain' ),
//         'all_items'             => __( 'All Issues', 'text_domain' ),
//         'add_new_item'          => __( 'Add New Issue', 'text_domain' ),
//         'add_new'               => __( 'Add New', 'text_domain' ),
//         'new_item'              => __( 'New Issue', 'text_domain' ),
//         'edit_item'             => __( 'Edit Issue', 'text_domain' ),
//         'update_item'           => __( 'Update Issue', 'text_domain' ),
//         'view_item'             => __( 'View Issue', 'text_domain' ),
//         'view_items'            => __( 'View Issues', 'text_domain' ),
//         'search_items'          => __( 'Search Issue', 'text_domain' ),
//         'not_found'             => __( 'Not found', 'text_domain' ),
//         'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
//         'featured_image'        => __( 'Featured Image', 'text_domain' ),
//         'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
//         'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
//         'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
//         'insert_into_item'      => __( 'Insert into issue', 'text_domain' ),
//         'uploaded_to_this_item' => __( 'Uploaded to this issue', 'text_domain' ),
//         'items_list'            => __( 'Issues list', 'text_domain' ),
//         'items_list_navigation' => __( 'Issues list navigation', 'text_domain' ),
//         'filter_items_list'     => __( 'Filter issues list', 'text_domain' ),
//     );
//     $args = array(
//         'label'                 => __( 'Issue', 'text_domain' ),
//         'description'           => __( 'Post Type for Issues', 'text_domain' ),
//         'labels'                => $labels,
//         'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ,'page-attributes' ),
//         'taxonomies'            => array( 'category', 'post_tag' ),
//         'hierarchical'          => true,
//         'public'                => true,
//         'show_ui'               => true,
//         'show_in_menu'          => true,
//         'menu_position'         => 5,
//         'show_in_admin_bar'     => true,
//         'show_in_nav_menus'     => true,
//         'can_export'            => true,
//         'has_archive'           => true,
//         'exclude_from_search'   => false,
//         'publicly_queryable'    => true,
//         'capability_type'       => 'post',
//     );
//     register_post_type( 'issue', $args );

// }
// add_action( 'init', 'custom_post_type_issues', 0 );

// Register Custom Post Type for Blogs
// function custom_post_type_blogs() {

//     $labels = array(
//         'name'                  => _x( 'Blogs', 'Post Type General Name', 'text_domain' ),
//         'singular_name'         => _x( 'Blog', 'Post Type Singular Name', 'text_domain' ),
//         'menu_name'             => __( 'Blogs', 'text_domain' ),
//         'name_admin_bar'        => __( 'Blog', 'text_domain' ),
//         'archives'              => __( 'Blog Archives', 'text_domain' ),
//         'attributes'            => __( 'Blog Attributes', 'text_domain' ),
//         'parent_item_colon'     => __( 'Parent Blog:', 'text_domain' ),
//         'all_items'             => __( 'All Blogs', 'text_domain' ),
//         'add_new_item'          => __( 'Add New Blog', 'text_domain' ),
//         'add_new'               => __( 'Add New', 'text_domain' ),
//         'new_item'              => __( 'New Blog', 'text_domain' ),
//         'edit_item'             => __( 'Edit Blog', 'text_domain' ),
//         'update_item'           => __( 'Update Blog', 'text_domain' ),
//         'view_item'             => __( 'View Blog', 'text_domain' ),
//         'view_items'            => __( 'View Blogs', 'text_domain' ),
//         'search_items'          => __( 'Search Blog', 'text_domain' ),
//         'not_found'             => __( 'Not found', 'text_domain' ),
//         'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
//         'featured_image'        => __( 'Featured Image', 'text_domain' ),
//         'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
//         'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
//         'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
//         'insert_into_item'      => __( 'Insert into blog', 'text_domain' ),
//         'uploaded_to_this_item' => __( 'Uploaded to this blog', 'text_domain' ),
//         'items_list'            => __( 'Blogs list', 'text_domain' ),
//         'items_list_navigation' => __( 'Blogs list navigation', 'text_domain' ),
//         'filter_items_list'     => __( 'Filter blogs list', 'text_domain' ),
//     );
//     $args = array(
//         'label'                 => __( 'Blog', 'text_domain' ),
//         'description'           => __( 'Post Type for Blogs', 'text_domain' ),
//         'labels'                => $labels,
//         'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
//         'taxonomies'            => array( 'category', 'post_tag' ),
//         'hierarchical'          => false,
//         'public'                => true,
//         'show_ui'               => true,
//         'show_in_menu'          => true,
//         'menu_position'         => 6,
//         'show_in_admin_bar'     => true,
//         'show_in_nav_menus'     => true,
//         'can_export'            => true,
//         'has_archive'           => true,
//         'exclude_from_search'   => false,
//         'publicly_queryable'    => true,
//         'capability_type'       => 'post',
//     );
//     register_post_type( 'blog', $args );

// }
// add_action( 'init', 'custom_post_type_blogs', 0 );


function custom_post_type_resource() {

    $labels = array(
        'name'                  => _x( 'Resource', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Resource', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Resources', 'text_domain' ),
        'name_admin_bar'        => __( 'Resource', 'text_domain' ),
        'archives'              => __( 'Resource Archives', 'text_domain' ),
        'attributes'            => __( 'Resource Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Resource:', 'text_domain' ),
        'all_items'             => __( 'All Resource', 'text_domain' ),
        'add_new_item'          => __( 'Add New Resource', 'text_domain' ),
        'add_new'               => __( 'Add New Resource', 'text_domain' ),
        'new_item'              => __( 'New Resource', 'text_domain' ),
        'edit_item'             => __( 'Edit Resource', 'text_domain' ),
        'update_item'           => __( 'Update Resource', 'text_domain' ),
        'view_item'             => __( 'View Resource', 'text_domain' ),
        'view_items'            => __( 'View Resource', 'text_domain' ),
        'search_items'          => __( 'Search Resource', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into Resource', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Resource', 'text_domain' ),
        'items_list'            => __( 'Resources list', 'text_domain' ),
        'items_list_navigation' => __( 'Resources list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Resources list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Resource', 'text_domain' ),
        'description'           => __( 'Post Type for Resources', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'resource', $args );

}
add_action( 'init', 'custom_post_type_resource', 0 );


// get_page_id_by_template for footer page :
function get_page_id_by_template($template_name) {
    global $wpdb;
    $page_id = $wpdb->get_var($wpdb->prepare(
        "SELECT post_id FROM $wpdb->postmeta WHERE meta_key = '_wp_page_template' AND meta_value = %s",
        $template_name
    ));
    return $page_id;
}


function get_ACF_by_filed($ACF_filed_name) {
    if (get_field($ACF_filed_name)) {
        $ACF_title = get_field($ACF_filed_name) ; // Get the value of the 'ACF content' custom field               
        if (!empty($ACF_title)) {
            return $ACF_title;
        }
    } else {
        return 'you need the ACF filed for this section!';
    }
}

function get_ACF_by_filed_for_page($ACF_filed_name , $else_text , $php_page_name ) {
    $page_id = get_page_id_by_template($php_page_name);
    if (get_field($ACF_filed_name , $page_id)) {   
        $ACF_title = get_field($ACF_filed_name , $page_id); // Get the value of the 'footer_top_title' custom field  
        if (!empty($ACF_title)) {
            return $ACF_title;
        }else{
            return  $else_text;
        }
    } else {
        return 'There is no ACF';
    }
}

?>



