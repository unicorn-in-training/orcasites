<?php

/**
 * Template Name: Home Page
 *
 * Description: This is the template for the site's home page. It is full width and does not contain a right sidebar.
 *
 * @package    WordPress
 * @subpackage OrcaSites 2021 Theme
 * @author     Susie Butler <susie@orcasites.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://OrcaSites.com
 * @since      1.0.0
 */

?>

<?php get_header(); ?>

<section id="container" class="row">

	<?php
	if (have_posts()) :
		while (have_posts()) :
			the_post();
	?>

			<section id="page-container" class="col-md-12">
				<section <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<!-- Opening line for headline and content -->
					<h1 class="hidden"><?php bloginfo('title'); ?></h1>

					<h2 id="site-description"><?php bloginfo('description'); ?></h2>


					<section id="home-content" class="col-md-12">

						<?php if ($debug_mode === true) : ?>
							<p class="center">This template is
								<?php
								global $template;
								echo esc_html(basename($template));
								?>
							</p>
						<?php endif; ?>

						<?php if (has_post_thumbnail()) : ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail('thumbnail'); ?>
							</a>
						<?php endif; ?>

						<?php the_content(); ?>

					</section><!-- Closing line for #content -->

				<?php endwhile; ?>

			<?php else : ?>

			<?php endif; ?>

				</section><!-- Closes post section -->

			</section><!-- Closes #page-container -->

</section><!-- Closes container -->

<?php get_footer(); ?>