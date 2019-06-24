<?php get_header(); ?>

<!-- Start the main container -->
<div class="container" role="document">

	<?php if (have_posts()) :
		while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="grid-container">

					<!-- controlled completley by grid for strange order process -->
					<div class="poster">
						<div class="poster-thumbnail"><?php the_post_thumbnail(); ?></div>
						<div class="over-flex-bg"></div>
						<h4 class="over-flex small-6 no-margin-bottom text-center">404</h4>
						<!-- needs a custom html set of tags for div class="poster-text" around the text areas to have them sit where the text goes -->
						<p class="poster-text">Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
						<p>How about head back to the <a href="/" title="home">home page</a> and start again</p>

					</div>
				</div> <!-- .grid-x -->

		<?php endwhile; // while have posts

		else : ?>
			<div class="grid-container">
				<div class="grid-x grid-padding-x gm-tb">
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<h4>404</h4>

						<p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
						<p>How about head back to the <a href="/" title="home">home page</a> and start again</p>
					 </div><!--.entry-->
				</div>
			</div>
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
				</div>
			</div>
		<?php }

		// pagination
		if ( $wp_query->max_num_pages > 1 ) : ?>
			<div class="grid-x">
				<h4 class="small-12 large-4 cell drop fall">Look deeper into the site</h4>
				<h4 class="small-12 large-4 cell drop fall"><?php next_posts_link ( '<span class="meta-nav">&larr;</span> Older posts' ) ; ?></h4>
				<h4 class="small-12 large-4 cell drop fall"><?php previous_posts_link ( '<span class="meta-nav">&rarr;</span> Newer posts' ) ; ?></h4>
			</div>
		<?php endif; ?>
</div>

<?php get_footer(); ?>
