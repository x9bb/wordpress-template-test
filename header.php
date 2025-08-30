<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ct-custom' ); ?></a>

	<header id="custom-header" class="site-header">
		<!-- Top Bar Section -->
		<div class="top-bar">
			<div class="contact-info-header">
				<span>CALL US NOW!</span> <strong>385.154.11.28.35</strong>
			</div>

			<!-- Login/Signup Buttons -->
			<div class="auth-buttons">
				<a href="#" class="login">LOGIN</a>
				<a href="#" class="signup">SIGN UP</a>
			</div>
		</div>

		<!-- Main Header Section -->
		<div class="main-header">
			<div class="logo">
				<!-- Your Logo -->
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Your Logo">
				</a>
			</div>

			<!-- Navigation Menu -->
			 <div class="main-menu">
				<nav class="main-navigation">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary', // Assuming you have registered a primary menu
						'menu_class' => 'nav-menu',
					));
					?>
				</nav>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
