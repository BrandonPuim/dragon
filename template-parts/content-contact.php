<?php

//**
//* Template Name: Name
//*

//  Title
//  Address <h3> Address </h3>
//  Map - Use Google
//  Content
//  Form - Use Contact Form 7

?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

					<h1> This is my Title </h1>
					<h2> 123 Fake st. </h2>
					<p> L5M 3V8 </p>
					
				<?php get_template_part( 'template-parts/content', 'contact' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>




