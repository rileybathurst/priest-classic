<?php get_header(); ?>

<!-- Start the main container -->
<main class="container" role="document">

	<?php if (have_posts()) :
		while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="grid-container">


					<div class="poster gm-tb"> <!-- I should fix up the double poster class as its not quite right -->
						<div class="poster-thumbnail"><?php the_post_thumbnail(); ?></div>
						<h4 class="over-flex-bg over-flex no-margin-bottom text-center gp-4"><?php the_title(); ?></h4>
					</div>
					
					<?php the_content(); ?>
				</div> <!-- .grid-container -->
			</article> <!-- #post -->

		<?php endwhile; // while have posts
	endif; ?> <!-- if have posts -->
</main>
</div> <!-- .keep -->
<?php get_footer(); ?>
