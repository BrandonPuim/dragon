<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'template-parts/content' , 'shop-home' ); ?>
			<?php get_template_part( 'template-parts/content' , 'journal-home' ); ?>
			<?php get_template_part( 'template-parts/content' , 'adventure-home' ); ?>

		</main>
	</div>


<?php get_footer(); ?>
