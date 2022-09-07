<?php

/**
 * Sidebar
 *
 * @package    WordPress
 * @subpackage OrcaSites 2021 Theme
 * @author     Susie Butler <susie@orcasites.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://OrcaSites.com
 * @since      1.0.0
 */

?>

<section id="sidebar" class="col-md-3">

	<?php if (is_active_sidebar('main-sidebar')) : ?>
		<h2 class="widgettitle">Search</h2>
		<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" role="search">
			<div class="input-group">
				<input class="field form-control" id="s" name="s" type="text" placeholder="Search" value="<?php the_search_query(); ?>">
				<span class="input-group-append">
					<button class="search-submit btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
				</span>
			</div>
		</form>
		<br>
		<?php the_widget('WP_Widget_Pages', 'title=Menu&sortby=menu_order'); ?>

	<?php else : ?>

		<?php the_widget('WP_Widget_Pages'); ?>

	<?php endif; ?>

</section>