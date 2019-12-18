<?php
/*
 *  Template Name: Gutenberg
 */

get_header(); ?>

<!-- Start the main container -->
<main class="container" role="document">

	<?php if (have_posts()) :
		while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="grid-container">


					<div class="crown"> <!-- I should fix up the double poster class as its not quite right -->
						<div class="poster-thumbnail">
							<?php
								$value = get_post_meta( get_the_ID(), 'featured_video_meta_block', true );
								if ( $value ) { ?>
									<video autoplay muted loop>
										<source src="<?php echo $value; ?>">
									</video>
								<?php } else {
									the_post_thumbnail();
								} // this needs something incase there isnt either
							?>
						</div>
						<h4 class="crown-title"><?php the_title(); ?></h4>
					</div>

					<div>
						<?php the_content(); ?>

					</div> <!-- .poster -->
				</div> <!-- .grid-container -->
			</article> <!-- #post -->

		<?php endwhile; // while have posts

	else : ?>
		<div class="grid-container">
			<div class="grid-x grid-padding-x gm-tb">
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h4>404</h4>
					<p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
					<p>How about head back to the <a href="/" title="home">home page</a> and start again</p>
				 </div><!--.entry-->
			</div> <!-- .grid-x -->
		</div> <!-- .grid-container -->
	<?php endif; // if have posts

	if (is_single()) { ?>
		<!-- single pagination -->
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<ul class="no-bullet">

					<p class="small-6 cell">Check out some other posts</p>
					<li class="small-3 cell"><p class=""><?php previous_post_link( '%link', '%title', TRUE ); ?></p></li>
					<li class="small-3 cell"><p class="text-right"> <?php next_post_link( '%link', '%title', TRUE ); ?> </p></li>

				</ul>
			</div> <!-- .grid-x -->
		</div> <!-- .grid-container -->
	<?php } ?>

</main>

</div> <!-- .keep -->

<?php get_footer(); ?>
