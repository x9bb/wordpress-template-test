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

$opts = get_option('ct_theme_settings', []);
$logo_id = isset($opts['logo_id']) ? (int)$opts['logo_id'] : 0;
$home_url = esc_url(home_url('/'));
$alt      = get_bloginfo('name');
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
				<span>CALL US NOW!</span> <strong><?php echo $opts['phone'] ?></strong>
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
				<a href="<?php echo $home_url; ?>" rel="home">
					<?php if ($logo_id) : ?>
					<?php
						echo wp_get_attachment_image(
						$logo_id,
						'full', // or a custom size like 'ct-logo'
						false,
						[
							'class'    => 'site-logo',
							'alt'      => $alt,
							'loading'  => 'eager',
							'decoding' => 'async',
						]
						);
					?>
					<?php else : ?>
					<img
						class="site-logo"
						src="<?php echo esc_url( get_template_directory_uri() . '/images/logo.png' ); ?>"
						alt="<?php echo esc_attr($alt); ?>"
						loading="eager"
						decoding="async"
					/>
					<?php endif; ?>
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
