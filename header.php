<?php
/*
*** Urban Angels 1.0 ***
*   Header
*/ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon-114x114.png">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="outer-wrapper shadow">
	<div class="container">
<a href="#maincontent" class="tab_accessibility">Skip to main content</a>
	<header id="banner" class="container" role="banner">
		<a href="<?php bloginfo( 'url' ); ?>" ><img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo.gif" alt="logo" class="banner-logo" /></a>
		<nav  id="main-nav" role="navigation">
			<?php wp_nav_menu( array( 'container_id' => 'main-menu','theme_location' => 'main_navigation' ) ); ?>
		</nav>
	</header>
</div><!--.container-->
	</div><!--.outer-wrapper-->
	<div class="outer-wrapper shadow">
		<div class="container">

