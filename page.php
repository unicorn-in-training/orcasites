<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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

					<h1 class="wp-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h1>

					<section id="content" class="col-md-12">

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