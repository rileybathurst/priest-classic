<?php
/*
 *  Template Name: Home
 */
?>

<?php get_header(); ?>

<!-- Start the main container -->
<main class="container" role="document">
	<div class="bg-light-gray ngm-top gm-bottom shadow">

	<?php if ( have_posts() ) :
		/* Start the Loop */
		while ( have_posts() ) :
			the_post(); ?>

			<div class="hero gp-top">
				<!-- no script Cross fading images aka slider aka carousel http://css3.bradshawenterprises.com/cfimg/ -->
				<div class="cfimg shadow">
					<picture>
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-fabfiraction-sheetmetal-christchurch_new_zealand-3600.webp" type="image/webp" media="(min-width: 1920px)" alt="priestsheetmetal fabrication">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-fabfiraction-sheetmetal-christchurch_new_zealand-3600.jpg" media="(min-width: 1920px)" alt="priestsheetmetal fabrication">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-fabfiraction-sheetmetal-christchurch_new_zealand-1920.webp" type="image/webp" media="(min-width: 1024px)" alt="priestsheetmetal fabrication">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-fabfiraction-sheetmetal-christchurch_new_zealand-1920.jpg" media="(min-width: 1024px)" alt="priestsheetmetal fabrication">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-fabfiraction-sheetmetal-christchurch_new_zealand-1024.webp" type="image/webp" media="(min-width: 768px)" alt="priestsheetmetal fabrication">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-fabfiraction-sheetmetal-christchurch_new_zealand-1024.jpg" media="(min-width: 768px)" alt="priestsheetmetal fabrication">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-fabfiraction-sheetmetal-christchurch_new_zealand-768.webp" type="image/webp" media="(min-width: 360px)" alt="priestsheetmetal fabrication">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-fabfiraction-sheetmetal-christchurch_new_zealand-768.jpg" media="(min-width: 360px)" alt="priestsheetmetal fabrication">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-fabfiraction-sheetmetal-christchurch_new_zealand-360.webp" type="image/webp" media="(max-width: 360px)" alt="priestsheetmetal fabrication">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-fabfiraction-sheetmetal-christchurch_new_zealand-360.jpg" media="(max-width: 360px)" alt="priestsheetmetal fabrication">
						<img src="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-fabfiraction-sheetmetal-christchurch_new_zealand-360.jpg" alt="priestsheetmetal fabrication">
					</picture>

					<picture>
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-industrial-sheetmetal-christchurch_new_zealand-1920.webp" type="image/webp" media="(min-width: 1024px)" alt="priestsheetmetal industrial">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-industrial-sheetmetal-christchurch_new_zealand-1920.jpg" media="(min-width: 1024px)" alt="priestsheetmetal industrial">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-industrial-sheetmetal-christchurch_new_zealand-1024.webp" type="image/webp" media="(min-width: 768px)" alt="priestsheetmetal industrial">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-industrial-sheetmetal-christchurch_new_zealand-1024.jpg" media="(min-width: 768px)" alt="priestsheetmetal industrial">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-industrial-sheetmetal-christchurch_new_zealand-768.webp" type="image/webp" media="(min-width: 360px)" alt="priestsheetmetal industrial">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-industrial-sheetmetal-christchurch_new_zealand-768.jpg" media="(min-width: 360px)" alt="priestsheetmetal industrial">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-industrial-sheetmetal-christchurch_new_zealand-360.webp" type="image/webp" media="(max-width: 360px)" alt="priestsheetmetal industrial">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-industrial-sheetmetal-christchurch_new_zealand-360.jpg" media="(max-width: 360px)" alt="priestsheetmetal industrial">
						<img src="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-industrial-sheetmetal-christchurch_new_zealand-360.jpg" alt="priestsheetmetal industrial">
					</picture>

					<picture>
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-sheetmetal-christchurch_new_zealand-2460.webp" type="image/webp" media="(min-width: 1920px)" alt="priestsheetmetal sheetmetal">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-sheetmetal-christchurch_new_zealand-2460.jpg" media="(min-width: 1920px)" alt="priestsheetmetal sheetmetal">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-sheetmetal-christchurch_new_zealand-1920.webp" type="image/webp" media="(min-width: 1024px)" alt="priestsheetmetal sheetmetal">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-sheetmetal-christchurch_new_zealand-1920.jpg" media="(min-width: 1024px)" alt="priestsheetmetal sheetmetal">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-sheetmetal-christchurch_new_zealand-1024.webp" type="image/webp" media="(min-width: 768px)" alt="priestsheetmetal sheetmetal">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-sheetmetal-christchurch_new_zealand-1024.jpg" media="(min-width: 768px)" alt="priestsheetmetal sheetmetal">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-sheetmetal-christchurch_new_zealand-768.webp" type="image/webp" media="(min-width: 360px)" alt="priestsheetmetal sheetmetal">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-sheetmetal-christchurch_new_zealand-768.jpg" media="(min-width: 360px)" alt="priestsheetmetal sheetmetal">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-sheetmetal-christchurch_new_zealand-360.webp" type="image/webp" media="(max-width: 360px)" alt="priestsheetmetal sheetmetal">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-sheetmetal-christchurch_new_zealand-360.jpg" media="(max-width: 360px)" alt="priestsheetmetal sheetmetal">
						<img src="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-sheetmetal-christchurch_new_zealand-360.jpg" alt="priestsheetmetal sheetmetal">
					</picture>

					<picture>
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-welding-sheetmetal-christchurch_new_zealand-3840.webp" type="image/webp" media="(min-width: 1920px)" alt="priestsheetmetal welding">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-welding-sheetmetal-christchurch_new_zealand-3840.jpg" media="(min-width: 1920px)" alt="priestsheetmetal welding">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-welding-sheetmetal-christchurch_new_zealand-1920.webp" type="image/webp" media="(min-width: 1024px)" alt="priestsheetmetal welding">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-welding-sheetmetal-christchurch_new_zealand-1920.jpg" media="(min-width: 1024px)" alt="priestsheetmetal welding">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-welding-sheetmetal-christchurch_new_zealand-1024.webp" type="image/webp" media="(min-width: 768px)" alt="priestsheetmetal welding">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-welding-sheetmetal-christchurch_new_zealand-1024.jpg" media="(min-width: 768px)" alt="priestsheetmetal welding">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-welding-sheetmetal-christchurch_new_zealand-768.webp" type="image/webp" media="(min-width: 360px)" alt="priestsheetmetal welding">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-welding-sheetmetal-christchurch_new_zealand-768.jpg" media="(min-width: 360px)" alt="priestsheetmetal welding">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-welding-sheetmetal-christchurch_new_zealand-360.webp" type="image/webp" media="(max-width: 360px)" alt="priestsheetmetal welding">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-welding-sheetmetal-christchurch_new_zealand-360.jpg" media="(max-width: 360px)" alt="priestsheetmetal welding">
						<img src="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-welding-sheetmetal-christchurch_new_zealand-360.jpg" alt="priestsheetmetal welding">
					</picture>

				</div>
				<div> <!-- keeps the content together -->
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>

			<div class="hero gp-top">
				<div class="small-12 medium-6 cell show-for-medium">
					<h2>We're Experienced Sheetmetal Engineers.</h2>
					<p>Priest Sheetmetal &amp; Plate Ltd is a family run business that has operated out of our 10 Barbour St address in Waltham, Christchurch for over 63 years. Let our experience guide you from design, manufacture, to assembly and installation of your fabrication project.</p>
				</div>

				<div class="small-12 medium-6 cell cfimg shadow">
					<picture>
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-architechtural-sheetmetal-christchurch_new_zealand-1337.webp" type="image/webp" media="(min-width: 1024px)" alt="priestsheetmetal architechtural">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-architechtural-sheetmetal-christchurch_new_zealand-1337.jpg" media="(min-width: 1024px)" alt="priestsheetmetal architechtural">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-architechtural-sheetmetal-christchurch_new_zealand-1024.webp" type="image/webp" media="(min-width: 768px)" alt="priestsheetmetal architechtural">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-architechtural-sheetmetal-christchurch_new_zealand-1024.jpg" media="(min-width: 768px)" alt="priestsheetmetal architechtural">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-architechtural-sheetmetal-christchurch_new_zealand-768.webp" type="image/webp" media="(min-width: 360px)" alt="priestsheetmetal architechtural">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-architechtural-sheetmetal-christchurch_new_zealand-768.jpg" media="(min-width: 360px)" alt="priestsheetmetal architechtural">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-architechtural-sheetmetal-christchurch_new_zealand-360.webp" type="image/webp" media="(max-width: 360px)" alt="priestsheetmetal architechtural">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-architechtural-sheetmetal-christchurch_new_zealand-360.jpg" media="(max-width: 360px)" alt="priestsheetmetal architechtural">
						<img src="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-architechtural-sheetmetal-christchurch_new_zealand-360.jpg" alt="priestsheetmetal architechtural">
					</picture>

					<picture>
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-brass-sheetmetal-christchurch_new_zealand-1632.webp" type="image/webp" media="(min-width: 1024px)" alt="priestsheetmetal brass">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-brass-sheetmetal-christchurch_new_zealand-1632.jpg" media="(min-width: 1024px)" alt="priestsheetmetal brass">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-brass-sheetmetal-christchurch_new_zealand-1024.webp" type="image/webp" media="(min-width: 768px)" alt="priestsheetmetal brass">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-brass-sheetmetal-christchurch_new_zealand-1024.jpg" media="(min-width: 768px)" alt="priestsheetmetal brass">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-brass-sheetmetal-christchurch_new_zealand-768.webp" type="image/webp" media="(min-width: 360px)" alt="priestsheetmetal brass">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-brass-sheetmetal-christchurch_new_zealand-768.jpg" media="(min-width: 360px)" alt="priestsheetmetal brass">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-brass-sheetmetal-christchurch_new_zealand-360.webp" type="image/webp" media="(max-width: 360px)" alt="priestsheetmetal brass">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-brass-sheetmetal-christchurch_new_zealand-360.jpg" media="(max-width: 360px)" alt="priestsheetmetal brass">
						<img src="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-brass-sheetmetal-christchurch_new_zealand-360.jpg" alt="priestsheetmetal brass">
					</picture>

					<picture>
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-cad-sheetmetal-christchurch_new_zealand-1024.webp" type="image/webp" media="(min-width: 768px)" alt="priestsheetmetal cad">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-cad-sheetmetal-christchurch_new_zealand-1024.jpg" media="(min-width: 768px)" alt="priestsheetmetal cad">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-cad-sheetmetal-christchurch_new_zealand-768.webp" type="image/webp" media="(min-width: 360px)" alt="priestsheetmetal cad">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-cad-sheetmetal-christchurch_new_zealand-768.jpg" media="(min-width: 360px)" alt="priestsheetmetal cad">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-cad-sheetmetal-christchurch_new_zealand-360.webp" type="image/webp" media="(max-width: 360px)" alt="priestsheetmetal cad">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-cad-sheetmetal-christchurch_new_zealand-360.jpg" media="(max-width: 360px)" alt="priestsheetmetal cad">
						<img src="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-cad-sheetmetal-christchurch_new_zealand-1024.jpg" alt="priestsheetmetal cad">
					</picture>

					<picture>
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-custom-sheetmetal-christchurch_new_zealand-1024.webp" type="image/webp" media="(min-width: 768px)" alt="priestsheetmetal steel">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-custom-sheetmetal-christchurch_new_zealand-1024.jpg" media="(min-width: 768px)" alt="priestsheetmetal steel">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-custom-sheetmetal-christchurch_new_zealand-768.webp" type="image/webp" media="(min-width: 360px)" alt="priestsheetmetal steel">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-custom-sheetmetal-christchurch_new_zealand-768.jpg" media="(min-width: 360px)" alt="priestsheetmetal steel">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-custom-sheetmetal-christchurch_new_zealand-360.webp" type="image/webp" media="(max-width: 360px)" alt="priestsheetmetal steel">
						<source srcset="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-custom-sheetmetal-christchurch_new_zealand-360.jpg" media="(max-width: 360px)" alt="priestsheetmetal steel">
						<img src="<?php echo content_url(); ?>/uploads/2019/05/priest_sheetmetal-custom-sheetmetal-christchurch_new_zealand-1024.jpg" alt="priestsheetmetal steel">
					</picture>

				</div>

				<div class="small-12 medium-6 cell hide-for-medium">
					<h2>We're Experienced Sheetmetal Engineers.</h2>
					<p>Priest Sheetmetal &amp; Plate Ltd is a family run business that has operated out of our 10 Barbour St address in Waltham, Christchurch for over 63 years. Let our experience guide you from design, manufacture, to assembly and installation of your fabrication project.</p>
				</div>
			</div>

		<?php endwhile;
	endif; ?>

		<div class="hero gp-top">
			<div class="display-grid bg-dark-gray gm-bottom shadow-darker">
				<div class="grid-icon bg-black gp-4">
					<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"><path fill="none" d="M0 0h24v24H0V0z" /><path d="M6.54 5c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51m9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19M7.5 3H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1z"  fill="#fefefe"/></svg>
				</div>
				<div class="grid-text bg-dark-gray gp-4">
					<p class="one-point-two-em no-margin-bottom"><b><a href="tel:033669818">Call us today to discuss your project: 366 9818</a></b></p>
				</div>
			</div> <!-- .display-grid -->

			<div class="display-grid bg-dark-gray gm-bottom shadow-darker">
				<div class="grid-icon bg-black gp-4">
					<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z" fill="#fefefe"/><circle cx="12" cy="9" r="2.5" fill="#fefefe"/></svg>
				</div>
				<div class="grid-text bg-dark-gray gp-4">
					<p class="one-point-two-em no-margin-bottom"><b><a href="https://goo.gl/maps/EzF5epUkFxaEihtLA">Find us at 10 Barbour Street, Christchurch</a></b></p>
				</div>
			</div> <!-- .display-grid -->
		</div> <!-- .cell -->
	</div>

	<div class="grid-container">
		<div class="grid-x grid-padding-x gp-tb">
			<div class="cell gm-tb">

				<?php
				$services = get_page_by_title('Services');
				$services_id = $services->ID;

				$the_query = new WP_Query( array (
					'post_type' => 'page',
					'post_parent' => $services_id,
					'orderby' => 'menu_order',
					'order' => 'ASC'
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

					<?php }
				}
				wp_reset_query(); // Restore global post data ?>

			</div>
		</div> <!-- grid-x -->
	</div> <!-- .grid-container -->

	<div class="bg-light-gray shadow-darker">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell gp2-tb">
					<span class="iframe-100"><iframe data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2891.9573440490253!2d172.6515813562169!3d-43.544931066056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d3189f0816bfbed%3A0xc483fb0bb523cec9!2s10+Barbour+St%2C+Waltham%2C+Christchurch+8011%2C+New+Zealand!5e0!3m2!1sen!2sus!4v1473280636797" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen class="lozad vimeo"></iframe></span>
				</div>
			</div> <!-- .grid-x -->
		</div> <!-- .grid-container -->
	</div>
</main><!-- container -->

<?php get_footer(); ?>
