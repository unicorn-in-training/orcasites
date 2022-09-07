<?php

/**
 * 404 Page
 *
 * 404 page template.
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

	<section id="page-container" class="col-md-12">

		<h1 class="wp-title">Content Not Found</h1>

		<section id="content" class="col-md-12">

			<?php if ($debug_mode === true) : ?>
				<p class="center">This template is
					<?php
					global $template;
					echo esc_html(basename($template));
					?>
				</p>
			<?php endif; ?>

			<section class="row">
				<p class="col-md-12 center">It looks like what you were looking for couldn't be found. Perhaps try a search?</p>
			</section>
			<section class="row">
				<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" role="search">
					<div class="input-group">
						<input class="field form-control" id="s" name="s" type="text" placeholder="Search" value="<?php the_search_query(); ?>">
						<span class="input-group-append">
							<button class="search-submit btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
						</span>
					</div>
				</form>
			</section>
		</section><!-- Closing line for #content -->

	</section><!-- Closes #page-container -->

</section><!-- Closes container -->

<?php get_footer(); ?>