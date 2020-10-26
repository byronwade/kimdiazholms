<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package byronwade.com
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'byronwade-com' ); ?></a>


	<nav class="navbar" role="navigation" aria-label="main navigation">
		<div class="navbar-brand">
			<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
			</a>
		</div>

		<div id="navbarBasicExample" class="navbar-menu">
			<div class="navbar-end">
				<div class="navbar-item">
					<a class="navbar-item">Home</a>
					<a class="navbar-item">Documentation</a>
					<div class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">More</a>
						<div class="navbar-dropdown">
							<a class="navbar-item">About</a>
							<a class="navbar-item">Jobs</a>
							<a class="navbar-item">Contact</a>
							<hr class="navbar-divider">
							<a class="navbar-item">Report an issue</a>
						</div>
					</div>
					<a class="navbar-item">Home</a>
					<a class="navbar-item">Home</a>
				</div>
			</div>

		</div>
	</nav>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation">
			<?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu',)); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
