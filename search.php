<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package karmadic
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="row">

				<div class="col-md-3">

					<?php get_sidebar(1); ?>

				</div><!-- .col -->

				<div class="col-md-9">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'karmadic' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php karmadic_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
			</div><!-- .col -->

			</div><!-- .row -->
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
