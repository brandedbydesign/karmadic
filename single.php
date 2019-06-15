<?php
/**
 * The Template for displaying all single posts.
 *
 * @package karmadic
 */

get_header(); ?>
</div><!-- end container -->
<div class="leaderboard-image">
		
</div><!-- end leaderboard-image -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<?php get_sidebar(1); ?>
					</div><!-- .col -->
					<div class="col-md-9">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', 'single' ); ?>
							<?php karmadic_post_nav(); ?>
							<?php
								// If comments are open or we have at least one comment, load up the comment template
								if ( comments_open() || '0' != get_comments_number() ) :
									comments_template();
								endif;
							?>
						<?php endwhile; // end of the loop. ?>
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- end container -->
		</main><!-- #main -->
	</div><!-- #primary -->
<div class="container">
<?php get_footer(); ?>
