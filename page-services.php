<?php get_header(); ?>

<!-- Start the main container -->
<main class="container" role="document"> <!-- needs fix. two main in the first few lines nested -->

<?php if (have_posts()) :
	while (have_posts()) : the_post(); ?>

		<main class="grid-container gp2-top gp3-bottom">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="grid-x grid-padding-x">
					<div class="small-12 medium-6 cell gm-tb">
						<div class="service-grid shadow">
							<!-- this works based on width and resolution by the browser including fallback for no js -->
							<img data-src="<?php echo content_url(); ?>/uploads/2016/09/cutting-folding-640.jpg"
								 data-srcset="<?php echo content_url(); ?>/uploads/2016/09/cutting-folding-1280.jpg 1280w,
											  <?php echo content_url(); ?>/uploads/2016/09/cutting-folding-960.jpg 960w,
											  <?php echo content_url(); ?>/uploads/2016/09/cutting-folding-640.jpg 640w"
								 sizes="(min-width:640px) 50vw,
										100vw"
								 class="lozad-set"
								 alt="Priest Sheet Metal"
							/>
							<noscript><img src="<?php echo content_url(); ?>/uploads/2016/09/cutting-folding-640.jpg" alt="Priest Sheet Metal"></noscript>
							<h4 class="service-grid-bg text-center no-margin-bottom gp-4"><a href="<?php echo home_url(); ?>/metal-cutting-folding" class="inline-block-100w">Cutting &amp; Folding</a></h4>
						</div> <!-- .flex -->
						<div class="bg-light-gray shadow">
							<p class="gp-4 no-margin-bottom">Priest Sheetmetal &amp; Plate Christchurch can supply a comprehensive range of steel from one-off small jobs to commercial wholesale quantities.
							</p>
							<a href="<?php echo home_url(); ?>/metal-cutting-folding" class="gm-4 button hollow">More about Cutting &amp; Folding</a>
						</div>
					</div>

					<div class="small-12 medium-6 cell gm-tb">
						<div class="service-grid shadow">
							<img data-src="<?php echo content_url(); ?>/uploads/2017/11/plasma-cutter-3840-640x213.jpg"
								data-srcset="<?php echo content_url(); ?>/uploads/2017/11/plasma-cutter-3840.jpg 3840w,
									<?php echo content_url(); ?>/uploads/2017/11/plasma-cutter-3840-1920x640.jpg 1920w,
									<?php echo content_url(); ?>/uploads/2017/11/plasma-cutter-3840-1024x341.jpg 1024w,
									<?php echo content_url(); ?>/uploads/2017/11/plasma-cutter-3840-768x256.jpg 768w,
									<?php echo content_url(); ?>/uploads/2017/11/plasma-cutter-3840-640x213.jpg 640w,
									<?php echo content_url(); ?>/uploads/2017/11/plasma-cutter-3840-360x120.jpg 360w"
								sizes="(min-width:640px) 50vw,
										100vw"
								class="lozad-set"
								alt="Priest Sheet Metal"
							/>
							<noscript><img src="<?php echo content_url(); ?>/uploads/2017/11/plasma-cutter-3840-640x213.jpg" alt="Priest Sheet Metal"></noscript>
							<h4 class="service-grid-bg text-center no-margin-bottom gp-4"><a href="<?php echo home_url(); ?>/cnc-profile-cutting" class="inline-block-100w">CNC Profile Cutting</a></h4>
						</div> <!-- .flex -->
						<div class="bg-light-gray shadow">
							<p class="gp-4 no-margin-bottom">Priest Sheetmetal &amp; Plate Christchurch can help you with your 2D &amp; 3D CAD Drawing and Modelling. We have been in operation for 63 years so you can be sure that we have the experience and expertise to work with you on the design and planning of your project.</p>
							<a href="<?php echo home_url(); ?>/cnc-profile-cutting" class="gm-4 button hollow">More about CNC Profile Cutting</a>
						</div>
					</div>

					<div class="small-12 medium-6 cell gm-tb">
						<div class="service-grid shadow">
							<img data-src="<?php echo content_url(); ?>/uploads/2016/09/Priest_Sheet_Metal_0147-640x213.jpg"
								 data-srcset="<?php echo content_url(); ?>/uploads/2016/09/Priest_Sheet_Metal_0147.jpg 3840w,
											  <?php echo content_url(); ?>/uploads/2016/09/Priest_Sheet_Metal_0147-1920x640.jpg 1920w,
											  <?php echo content_url(); ?>/uploads/2016/09/Priest_Sheet_Metal_0147-1024x341.jpg 1024w,
											  <?php echo content_url(); ?>/uploads/2016/09/Priest_Sheet_Metal_0147-768x256.jpg 768w,
											  <?php echo content_url(); ?>/uploads/2016/09/Priest_Sheet_Metal_0147-640x213.jpg 640w,
											  <?php echo content_url(); ?>/uploads/2016/09/Priest_Sheet_Metal_0147-360x120.jpg 360w"
								 sizes="(min-width:640px) 50vw,
										100vw"
								 class="lozad-set"
								 alt="Priest Sheet Metal"
							/>
							<noscript><img src="<?php echo content_url(); ?>/uploads/2016/09/Priest_Sheet_Metal_0147-640x213.jpg" alt="Priest Sheet Metal"></noscript>
							<h4 class="service-grid-bg text-center no-margin-bottom gp-4"><a href="<?php echo home_url(); ?>/welding-christchurch" class="inline-block-100w">Welding</a></h4>
						</div> <!-- .flex -->
						<div class="bg-light-gray shadow">
							<p class="gp-4 no-margin-bottom">Priest Sheetmetal &amp; Plate Christchurch operate using a variety of welding machines and techniques.</p>
							<a href="<?php echo home_url(); ?>/welding-christchurch" class="gm-4 button hollow">More about Welding</a>
						</div>
					</div>

					<div class="small-12 medium-6 cell gm-tb">
						<div class="service-grid shadow">
							<!-- we only have a very low res version of this image as far as I know -->
							<img data-src="<?php echo content_url(); ?>/uploads/2017/12/cut-fold.jpg"
								 data-srcset="<?php echo content_url(); ?>/uploads/2017/12/cut-fold.jpg 640w,
											  <?php echo content_url(); ?>/uploads/2017/12/cut-fold-360x120.jpg 360w"
								 sizes="(min-width:640px) 50vw,
										100vw"
								 alt="Priest Sheet Metal"
								 class="lozad"
							/>
							<noscript><img src="<?php echo content_url(); ?>/uploads/2017/12/cut-fold.jpg" alt="Priest Sheet Metal"></noscript>
							<h4 class="service-grid-bg text-center no-margin-bottom gp-4"><a href="<?php echo home_url(); ?>/fabrication-christchurch" class="inline-block-100w">Fabrication</a></h4>
						</div> <!-- .flex -->
						<div class="bg-light-gray shadow">
							<p class="gp-4 no-margin-bottom">Priest Sheetmetal &amp; Plate Christchurch can supply a comprehensive range of steel from one-off small jobs to commercial wholesale quantities.</p>
							<a href="<?php echo home_url(); ?>/fabrication-christchurch" class="gm-4 button hollow">More about Fabrication</a>
						</div>
					</div>

					<div class="small-12 medium-6 cell gm-tb">
						<div class="service-grid shadow">
							<!-- this works based on width and resolution by the browser including fallback for no js -->
							<img data-src="<?php echo content_url(); ?>/uploads/2016/09/cad-drawing-design-640x213.jpg"
							 data-srcset="<?php echo content_url(); ?>/uploads/2016/09/cad-drawing-design.jpg 3840w,
										  <?php echo content_url(); ?>/uploads/2016/09/cad-drawing-design-1920x640.jpg 1920w,
										  <?php echo content_url(); ?>/uploads/2016/09/cad-drawing-design-1024x341.jpg 1024w,
										  <?php echo content_url(); ?>/uploads/2016/09/cad-drawing-design-768x256.jpg 768w,
										  <?php echo content_url(); ?>/uploads/2016/09/cad-drawing-design-640x213.jpg 640w,
										  <?php echo content_url(); ?>/uploads/2016/09/cad-drawing-design-360x120.jpg 360w"
							 sizes="(min-width:640px) 50vw,
									100vw"
							 class="lozad-set"
							 alt="Priest Sheet Metal"
						/>
						<noscript><img src="<?php echo content_url(); ?>/uploads/2016/09/cad-drawing-design-640x213.jpg" alt="Priest Sheet Metal"></noscript>
							<h4 class="service-grid-bg text-center no-margin-bottom gp-4"><a href="<?php echo home_url(); ?>/cad-drawing-design" class="inline-block-100w">CAD Drawing &amp; Design</a></h4>
						</div> <!-- .flex -->
						<div class="bg-light-gray shadow">
							<p class="gp-4 no-margin-bottom">Priest Sheetmetal &amp; Plate Christchurch can help you with your 2D &amp; 3D CAD Drawing and Modelling. We have been in operation for 63 years so you can be sure that we have the experience and expertise to work with you on the design and planning of your project.</p>
							<a href="<?php echo home_url(); ?>/cad-drawing-design" class="gm-4 button hollow">More about CAD Drawing &amp; Design</a>
						</div>
					</div>

					<div class="small-12 medium-6 cell gm-tb">
						<div class="service-grid shadow">
							<img data-src="<?php echo content_url(); ?>/uploads/2016/09/design-640x213.jpg"
							 data-srcset="<?php echo content_url(); ?>/uploads/2016/09/design.jpg 3840w,
										  <?php echo content_url(); ?>/uploads/2016/09/design-1920x640.jpg 1920w,
										  <?php echo content_url(); ?>/uploads/2016/09/design-1024x341.jpg 1024w,
										  <?php echo content_url(); ?>/uploads/2016/09/design-768x256.jpg 768w,
										  <?php echo content_url(); ?>/uploads/2016/09/design-640x213.jpg 640w,
										  <?php echo content_url(); ?>/uploads/2016/09/design-360x120.jpg 360w"
							 sizes="(min-width:640px) 50vw,
									100vw"
							 class="lozad-set"
							 alt="Priest Sheet Metal"
						/>
						<noscript><img src="<?php echo content_url(); ?>/uploads/2016/09/design-640x213.jpg" alt="Priest Sheet Metal"></noscript>
							<h4 class="service-grid-bg text-center no-margin-bottom gp-4"><a href="<?php echo home_url(); ?>/industrial-architectural-sheetmetal-plate-services" class="inline-block-100w">Industry &amp; Architechtural</a></h4>
						</div> <!-- .flex -->
						<div class="bg-light-gray shadow">
							<p class="gp-4 no-margin-bottom">Priest Sheetmetal &amp; Plate support numerous fields of industry in Canterbury. No matter what your trade, we can work with you to get the job done.</p>
							<a href="<?php echo home_url(); ?>/industrial-architectural-sheetmetal-plate-services" class="gm-4 button hollow">More about Industry &amp; Architechtural</a>
						</div>
					</div>

					<div class="small-12 medium-6 cell gm-tb">
						<div class="service-grid shadow">
							<img data-src="<?php echo content_url(); ?>/uploads/2016/09/stainlesssteel-alloy-640x213.jpg"
							 data-srcset="<?php echo content_url(); ?>/uploads/2016/09/stainlesssteel-alloy-768x256.jpg 768w,
										  <?php echo content_url(); ?>/uploads/2016/09/stainlesssteel-alloy-640x213.jpg 640w,
										  <?php echo content_url(); ?>/uploads/2016/09/stainlesssteel-alloy-360x120.jpg 360w"
							 sizes="(min-width:640px) 50vw,
									100vw"
							 class="lozad-set"
							 alt="Priest Sheet Metal"
						/>
						<noscript><img src="<?php echo content_url(); ?>/uploads/2016/09/stainlesssteel-alloy-640x213.jpg" alt="Priest Sheet Metal"></noscript>
							<h4 class="service-grid-bg text-center no-margin-bottom gp-4"><a href="<?php echo home_url(); ?>/plate-flange-rolling" class="inline-block-100w">Plate &amp; Flange Rolling</a></h4>
						</div> <!-- .flex -->
						<div class="bg-light-gray shadow">
							<p class="gp-4 no-margin-bottom">Priest Sheetmetal &amp; Plate Christchurch have the following Plate &amp; Flat rolling capabilties:</p>
							<a href="<?php echo home_url(); ?>/plate-flange-rolling" class="gm-4 button hollow">More about Plate &amp; Flange Rolling</a>
						</div>
					</div>

					<div class="small-12 medium-6 cell gm-tb">
						<div class="service-grid shadow">
							<img data-src="<?php echo content_url(); ?>/uploads/2016/09/heavy-plates-made-of-steel-640x213.jpg"
							 data-srcset="<?php echo content_url(); ?>/uploads/2016/09/heavy-plates-made-of-steel.jpg 3840w,
										  <?php echo content_url(); ?>/uploads/2016/09/heavy-plates-made-of-steel-1920x640.jpg 1920w,
										  <?php echo content_url(); ?>/uploads/2016/09/heavy-plates-made-of-steel-1024x341.jpg 1024w,
										  <?php echo content_url(); ?>/uploads/2016/09/heavy-plates-made-of-steel-768x256.jpg 768w,
										  <?php echo content_url(); ?>/uploads/2016/09/heavy-plates-made-of-steel-640x213.jpg 640w,
										  <?php echo content_url(); ?>/uploads/2016/09/heavy-plates-made-of-steel-360x120.jpg 360w"
							 sizes="(min-width:640px) 50vw,
									100vw"
							 class="lozad-set"
							 alt="Priest Sheet Metal"
						/>
						<noscript><img src="<?php echo content_url(); ?>/uploads/2016/09/heavy-plates-made-of-steel-640x213.jpg" alt="Priest Sheet Metal"></noscript>
							<h4 class="service-grid-bg text-center no-margin-bottom gp-4"><a href="<?php echo home_url(); ?>/steel-suppliers" class="inline-block-100w">Steel Supplies</a></h4>
						</div> <!-- .flex -->
						<div class="bg-light-gray shadow">
							<p class="gp-4 no-margin-bottom">Priest Sheetmetal &amp; Plate Christchurch can supply a comprehensive range of steel from one-off small jobs to commercial wholesale quantities. We supply the following Steel:</p>
							<a href="<?php echo home_url(); ?>/steel-suppliers" class="gm-4 button hollow">More about Steel Supplies</a>
						</div>
					</div>
				</div><!-- grid-x -->
			</article>
		</main> <!-- .grid-container -->
	<?php endwhile; // while have posts -->

	else : ?>
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell">
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<p>Hmmm, seems like what you were looking for isn't here.  You might want to give it another try - the server might have hiccuped - or maybe you even spelled something wrong (though it's more likely <strong>I</strong> did).</p>
						<p>How about head back to the <a href="/" title="home">home page</a> and start again</p>
					</div><!--.entry-->
				</div>
			</div>
		</div>

	<?php endif; ?> <!-- if have posts -->
</main> <!--.container -->
<?php get_footer(); ?>
