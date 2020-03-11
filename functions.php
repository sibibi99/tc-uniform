<?php
/**
 * tctheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tctheme
 */

if ( ! function_exists( 'tctheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tctheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tctheme, use a find and replace
		 * to change 'tctheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tctheme', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'tctheme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'tctheme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'tctheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tctheme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'tctheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'tctheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tctheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tctheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tctheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tctheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tctheme_scripts() {
	wp_enqueue_style( 'tctheme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'tctheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'tctheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tctheme_scripts' );

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

// Ham ACtive Menu
// add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 	2 );
// function special_nav_class ($classes, $item) {
// 	if (in_array('current-menu-item', $classes)) {
// 		$classes[] = 'active';
// 	}
// 	return $classes;
// }

// Convert Menu
class Convert_Menu extends Walker_Nav_Menu {

	// function start_lvl(&$output, $depth = 0, $args = array()) {
	// 	$indent = str_repeat("\t", $depth);
	// 	$submen = ($depth > 0) ? 'sub-menu' : '';
	// 	$output .= "\n$indent<ul class=\"dropdown-menu submenu depth-$depth\" aria-labelledby=\"navbarDropdownHome\">\n";
	// }

	function start_lvl( &$output, $depth = 0, $args = array() ) {
		// Depth-dependent classes.
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
				'sub-menu',
				( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
				( $display_depth >=2 ? 'sub-sub-menu' : '' ),
				'menu-depth-' . $display_depth
		);
		$class_names = implode( ' ', $classes );

		// Build HTML for output.
		$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
}

/**
 * Start the element output.
 *
 * Adds main/sub-classes to the list items and links.
 *
 * @param string $output Passed by reference. Used to append additional content.
 * @param object $item   Menu item data object.
 * @param int    $depth  Depth of menu item. Used for padding.
 * @param array  $args   An array of arguments. @see wp_nav_menu()
 * @param int    $id     Current item ID.
 */
function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

		// Depth-dependent classes.
		$depth_classes = array(
				( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
				( $depth >=2 ? 'sub-sub-menu-item' : '' ),
				( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
				'menu-item-depth-' . $depth
		);
		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

		// Passed classes.
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

		// Build HTML.
		$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

		// Link attributes.
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

		// Build HTML output and pass through the proper filter.
		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
				$args->before,
				$attributes,
				$args->link_before,
				apply_filters( 'the_title', $item->title, $item->ID ),
				$args->link_after,
				$args->after
		);
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
}
}


/**
 Hàm Rút gọn ký tự
 */
// function rutGonKyTu( $length ) {
// 	return 20;
// }
// add_filter( 'excerpt_length', 'rutGonKyTu', 999 );


//brecum

/**
 * Breadcrumb
 */
function dimox_breadcrumbs() {
	$delimiter = '»';
	$home = 'Trang chủ'; // chữ thay thế cho phần 'Home' link
	$before = '<span class="current">'; // thẻ html đằng trước mỗi link
	$after = '</span>'; // thẻ đằng sau mỗi link
	if ( !is_home() && !is_front_page() || is_paged() ) {
			echo '<div id="crumbs">';
			global $post;
			$homeLink = get_bloginfo('url');
			echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
			if ( is_category() ) {
					global $wp_query;
					$cat_obj = $wp_query->get_queried_object();
					$thisCat = $cat_obj->term_id;
					$thisCat = get_category($thisCat);
					$parentCat = get_category($thisCat->parent);
					if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
					echo $before . single_cat_title('', false) . $after;
			} elseif ( is_day() ) {
					echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
					echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
					echo $before . get_the_time('d') . $after;
			} elseif ( is_month() ) {
					echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
					echo $before . get_the_time('F') . $after;
			} elseif ( is_year() ) {
					echo $before . get_the_time('Y') . $after;
			} elseif ( is_single() && !is_attachment() ) {
					if ( get_post_type() != 'post' ) {
							$post_type = get_post_type_object(get_post_type());
							$slug = $post_type->rewrite;
							echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
							echo $before . get_the_title() . $after;
					} else {
							$cat = get_the_category(); $cat = $cat[0];
							echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
							echo $before . get_the_title() . $after;
					}
			} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
					$post_type = get_post_type_object(get_post_type());
					echo $before . $post_type->labels->singular_name . $after;
			} elseif ( is_attachment() ) {
					$parent = get_post($post->post_parent);
					$cat = get_the_category($parent->ID); $cat = $cat[0];
					echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
					echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
					echo $before . get_the_title() . $after;
			} elseif ( is_page() && !$post->post_parent ) {
					echo $before . get_the_title() . $after;
			} elseif ( is_page() && $post->post_parent ) {
					$parent_id = $post->post_parent;
					$breadcrumbs = array();
					while ($parent_id) {
							$page = get_page($parent_id);
							$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
							$parent_id = $page->post_parent;
					}
					$breadcrumbs = array_reverse($breadcrumbs);
					foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
					echo $before . get_the_title() . $after;
			} elseif ( is_search() ) {
					echo $before . 'Search results for "' . get_search_query() . '"' . $after;
			} elseif ( is_tag() ) {
					echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
			} elseif ( is_author() ) {
					global $author;
					echo $before . 'Articles posted by ' . $userdata->display_name . $after;
			} elseif ( is_404() ) {
					echo $before . 'Error 404' . $after;
			}
			if ( get_query_var('paged') ) {
					if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
					echo __('Page') . ' ' . get_query_var('paged');
					if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
			}
			echo '</div>';
	}
} // end dimox_breadcrumbs()


// Xóa Category URL
// Remove Parent Category from Child Category URL
add_filter('term_link', 'devvn_no_category_parents', 1000, 3);
function devvn_no_category_parents($url, $term, $taxonomy) {
    if($taxonomy == 'category'){
        $term_nicename = $term->slug;
        $url = trailingslashit(get_option( 'home' )) . user_trailingslashit( $term_nicename, 'category' );
    }
    return $url;
}
// Rewrite url mới
function devvn_no_category_parents_rewrite_rules($flash = false) {
    $terms = get_terms( array(
        'taxonomy' => 'category',
        'post_type' => 'post',
        'hide_empty' => false,
    ));
    if($terms && !is_wp_error($terms)){
        foreach ($terms as $term){
            $term_slug = $term->slug;
            add_rewrite_rule($term_slug.'/?$', 'index.php?category_name='.$term_slug,'top');
            add_rewrite_rule($term_slug.'/page/([0-9]{1,})/?$', 'index.php?category_name='.$term_slug.'&paged=$matches[1]','top');
            add_rewrite_rule($term_slug.'/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$', 'index.php?category_name='.$term_slug.'&feed=$matches[1]','top');
        }
    }
    if ($flash == true)
        flush_rewrite_rules(false);
}
add_action('init', 'devvn_no_category_parents_rewrite_rules');
 
/*Sửa lỗi khi tạo mới category bị 404*/
function devvn_new_category_edit_success() {
    devvn_no_category_parents_rewrite_rules(true);
}
add_action('created_category','devvn_new_category_edit_success');
add_action('edited_category','devvn_new_category_edit_success');
add_action('delete_category','devvn_new_category_edit_success');


//CODE LAY LUOT XEM
function getPostViews($postID){
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
			return "01";
	}
	return $count.' ';
}

// CODE DEM LUOT XEM
function setPostViews($postID) {
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
			$count = 0;
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
	}else{
			$count++;
			update_post_meta($postID, $count_key, $count);
	}
}

//CODE HIEN THI SO LUOT XEM BAI VIET TRONG DASHBOARDH
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
	$defaults['post_views'] = __('Views');
	return $defaults;
}
function posts_custom_column_views($column_name, $id){
	if($column_name === 'post_views'){
			echo getPostViews(get_the_ID());
	}
}

// Pagination Custom Post type
add_action( 'parse_query','changept' );
function changept() {
    if( is_category() && !is_admin() )
        set_query_var( 'post_type', array( 'post', 'ao_thun' ) );
    return;
}
?>

