<?php
/**
 * Template Name: About Us
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>


        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        	<header class="entry-header">
        		<?php if ( has_post_thumbnail() ) : ?>
        			<?php the_post_thumbnail( 'large' ); ?>
        		<?php endif; ?>

        		



        		</div><!-- .entry-meta -->
        	</header><!-- .entry-header -->

        	<div class="entry-content">
        		<?php the_content(); ?>
        		<?php
        			wp_link_pages( array(
        				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
        				'after'  => '</div>',
        			) );
        		?>
        	</div><!-- .entry-content -->

        	<footer class="entry-footer">
        		<?php red_starter_entry_footer(); ?>
        	</footer><!-- .entry-footer -->
        </article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
