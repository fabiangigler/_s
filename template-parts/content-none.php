<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', '_s' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
			<p>It seems we can't find what you're looking for. Perhaps searching can help.</p>
			<?php get_search_form(); ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
