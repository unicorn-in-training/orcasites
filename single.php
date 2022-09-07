<?php

/**
 * Template Name: Single Post
 *
 * Description: The template for displaying single posts
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

							<div class="post-featured-image">
								<?php the_post_thumbnail('medium_large'); ?>
							</div>

						<?php endif; ?>

						<?php the_content(); ?>

					</section><!-- Closing line for #content -->

				<?php endwhile; ?>

				<section class="post-nav">
					<!-- Opening line for post navigation -->

					<?php if (get_previous_post()) : ?>
						<p class="prev-post"><?php previous_post_link('%link', 'Previous Post'); ?></p>
					<?php endif; ?>

					<?php if (get_next_post()) : ?>
						<p class="next-post"><?php next_post_link('%link', 'Next Post'); ?></p>
					<?php endif; ?>


				</section><!-- Closing line for post navigation -->

			<?php else : ?>

				<section <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<!-- Opening line for post not found -->
					<h3>Sorry, couldn't find what you were looking for.</h3>

				</section><!-- Closing line for post not found -->

			<?php endif; ?>

				</section><!-- Closes post section -->

			</section><!-- Closes #page-container -->

</section><!-- Closes container -->

<?php get_footer(); ?>