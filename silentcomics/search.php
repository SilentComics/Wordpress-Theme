<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package SilentComics
 */

get_header(); ?>

		<div class="entry-wrap wrap clear">
			<div class="entry-content clear">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'silentcomics' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php silentcomics_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

		</div><!-- .entry-content -->
		</div><!-- .entry-wrap -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>