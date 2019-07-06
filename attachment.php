<?php get_header(); ?>

<!-- Start the main container -->
<main class="container" role="document">

	<!-- can remove the if has posts as its specifc and will fall back to 404.php -->

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="grid-container">

			<!-- controlled completley by grid for strange order process -->
			<div class="poster">
				<div class="poster-thumbnail"><?php the_post_thumbnail(); ?></div>
				<h4 class="over-flex-bg over-flex no-margin-bottom text-center gp-4">
					<?php if ( has_excerpt() ) { ?>

						<div class="entry-caption">
							<?php the_excerpt(); ?>
						</div><!-- .entry-caption -->
					<?php } ?>
				</h4>
			</div> <!-- .poster -->

			<div class="img-100 entry-attachment">
				<?php $image_size = apply_filters( 'wporg_attachment_size', 'large' );
					echo wp_get_attachment_image( get_the_ID(), $image_size ); ?>
			</div><!-- .entry-attachment -->

		</div> <!-- .grid-container -->
	</article> <!-- #post -->

	<!-- queries where the excerpt has been used to show the page it comes from when on the gallery -->
<?php $the_query = new WP_Query( array (
		's' => get_the_excerpt()
	) );
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();

			$remove = array(
				"&#8208;", // hypen
				"&#8209;", // non-breaking hypen
				"&#8210;", // figure dash
				"&#8211;", // en dash
				"&#8212;", // em dash
				"&#8213;", // horizontal bar
				"christchurch",
				"Christchurch",
				"CHRISTCHURCH"
			);
			$short_title = str_replace ( $remove, "", get_the_title()); ?>

			<div class="grid-container">
				<div class="grid-x grid-padding-x gm-tb text-center">
					<div class="cell gp-tb-large">
						<h4>Find More products in</h4>
					</div>
				</div>

				<div class="grid-x grid-padding-x gm-tb">
					<div class="small-12 large-6 cell gp-tb-large">
						<div class="service-grid shadow img-100">
							<?php the_post_thumbnail('medium_large'); ?> <!-- 768 accross -->
						</div>
					</div>
					<div class="small-12 large-6 cell gp-tb-large">
						<div class="bg-light-gray shadow">
							<h4 class="service-grid-bg no-margin-bottom gp-4"><a href="<?php the_permalink(); ?>" class="inline-block-100w"><?php echo $short_title; ?></a></h4>
							<div class="gp-4 no-margin-bottom">
								<?php the_excerpt(); ?>
							</div>
							<a href="<?php the_permalink(); ?>" class="gm-4 button hollow">More about <?php echo $short_title; ?></a>
						</div>
					</div>
				</div>
			</div>

		<?php }
	}
	wp_reset_query(); // Restore global post data ?>

</main>

</div> <!-- .keep -->

<?php get_footer(); ?>
