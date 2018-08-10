<?php
/*
*** Urban Angels 1.0 ***
*/

/**
* Enqueue scripts and styles
*/
function urbanac_css_styles() {
	wp_enqueue_style( '', get_template_directory_uri() . '/assets/css/styles.css', array(),'','screen' );
}

add_action( 'wp_enqueue_scripts', 'urbanac_css_styles' );

function urbanac_theme_js() {

	wp_enqueue_script( 'urbanac_themejs', get_template_directory_uri() . '/assets/js/urbanac_themejs.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts',  'urbanac_theme_js' );

/**
* Sidebars
*/

function urbanac_widgets_init() {

// Register widgetized areas

	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'urbanac' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	) );

	register_sidebar(array(
		'name'          => __( 'Footer 1', 'urbanac' ),
		'id'            => 'footer-1',
		'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	) );

	register_sidebar(array(
		'name'          => __( 'Footer 2', 'urbanac' ),
		'id'            => 'footer-2',
		'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));

	register_sidebar(array(
		'name'          => __( 'Footer 3', 'urbanac' ),
		'id'            => 'footer-3',
		'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	) );

}
add_action( 'widgets_init', 'urbanac_widgets_init' );

/**
* Custom menu
*/

add_theme_support( 'menus' );

function register_urbanac_menu() {
	register_nav_menu('main_navigation',__( 'Main Navigation' ));
}

add_action( 'init', 'register_urbanac_menu' );

/**
*Featured image in post excerpt
*/

add_theme_support( 'post-thumbnails' );

/**
*Comments
*/

add_theme_support( 'html5', array(
	'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
) );


if ( ! function_exists( 'urbanac_comment_nav' ) ) :
/**
* Display navigation to next/previous comments when applicable.
*
* Based on Twenty Fifteen 1.0
*/
function urbanac_comment_nav() {
// Are there comments to navigate through?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
?>
	<nav class="navigation comment-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'urbanac' ); ?></h2>
		<div class="nav-links">
	<?php
		if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'urbanac' ) ) ) :
		printf( '<div class="nav-previous">%s</div>', $prev_link );
		endif;

		if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'urbanac' ) ) ) :
		printf( '<div class="nav-next">%s</div>', $next_link );
		endif;
	?>
		</div><!-- .nav-links -->
	</nav><!-- .comment-navigation -->
<?php
endif;

}
endif;