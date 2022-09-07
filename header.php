<?php

/**
 * Header
 *
 * Page header template
 *
 * @package    WordPress
 * @subpackage OrcaSites 2021 Theme
 * @author     Susie Butler <susie@orcasites.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://OrcaSites.com
 * @since      1.0.0
 */

?>

<!doctype html>
<html>

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		<?php the_title(); ?> - <?php bloginfo( 'name' ); ?>
	</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
<div id="wrapper" class="container-fluid">
	<header>

		<nav id="main-nav" class="navbar navbar-expand-md">

				<!-- Your site title as branding in the menu -->
				<?php if ( ! has_custom_logo() ) { ?>

					<?php if ( is_front_page() && is_home() ) : ?>

						<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

					<?php else : ?>

					<?php endif; ?>


					<?php
				} else {
					the_custom_logo();
				}
				?>
				<!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
					)
				);
				?>

		</nav><!-- .site-navigation -->

	</header>
