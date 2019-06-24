<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12917302-17', 'auto');
			ga('send', 'pageview');

		</script>

		<style>
			.excerpt {
				color: blue;
			}
		</style>

	</head>

	<body <?php body_class(); ?>>

		<!-- canvas wrappers -->
		<div class="off-canvas-wrapper">
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

				<!-- this is the off canvas aka small menu -->
				<div class="off-canvas position-top hide-for-print" id="my-info" data-off-canvas data-position="right">

					<?php if ( has_nav_menu( 'primary' ) ) { ?>
						<nav>
							<?php
								// Primary navigation menu.
								wp_nav_menu( array(

									'theme_location'    => 'primary',
									'items_wrap'        => '<ul class="vertical menu text-center">%3$s</ul>'
								) );
							?>
						</nav> <!-- .main-navigation -->

					<?php } else {
						$current_user = wp_get_current_user();
						$current_id = $current_user->ID;
						$user_info = get_userdata( $current_id );
						if (is_user_logged_in ()) {
							$user_role = implode(', ', $user_info->roles);
						}

						if ($user_role == 'administrator') { ?>
							<ul class="menu align-right"><li><a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-admin/nav-menus.php" class="button">Put the menu in.</a></li></ul>
						<?php }
					} ?>
				</div>

				<!--  this is the in canvas -->
				<div class="off-canvas-content" data-off-canvas-content>
					<div id="page" class="site">

						<div class="keep">
						<header id="header">
							<div class="bg-primary hero-logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . '/img/PriestSheetMetal&PlateChristchurch-white-600x149.png'; ?>" alt="<?php bloginfo ('name') ?>" class="gm-tb"></a>
							</div><!-- .grid-x -->

							<a herf="" data-open="my-info" class="h4 white-a">
								<div class="hide-for-medium bg-secondary shadow-darker text-center gp-tb"> <!-- small navigation -->
								Menu
								</div> <!-- .grid-x -->
							</a>

							<div class="cell shrink show-for-medium bg-secondary shadow"><!-- medium up navigation -->
								<?php if ( has_nav_menu( 'primary' ) ) { ?>
									<nav>
										<?php
											// Primary navigation menu.
											wp_nav_menu( array(
												'menu_class'     => 'nav-menu',
												'theme_location' => 'primary',
												'items_wrap' => '<ul class="menu align-center">%3$s</ul>',
											) );
										?>
									</nav><!-- .main-navigation -->
								<?php } else {
									$current_user = wp_get_current_user();
									$current_id = $current_user->ID;
									$user_info = get_userdata( $current_id );
									if (is_user_logged_in ()) {
										$user_role = implode(', ', $user_info->roles);
									}

									if ($user_role == 'administrator') { ?>
										<ul class="menu align-right"><li><a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-admin/nav-menus.php" class="hollow button secondary">Put the menu in.</a></li></ul>
									<?php }
								} ?>
							</div><!-- medium up nav -->

							<?php if ( ! is_front_page() ) { ?>
								<!-- currently this isnt in use but its easier to leave it ready if we do need it -->
								<div id="" class="bg-light-gray shadow gm-bottom gp-top">
									<div class="hero">
										<h3>SPECIALIST WELDERS, SHEETMETAL ENGINEERS &amp; GENERAL FABRICATORS IN CHRISTCHURCH.</h3>

										<div class="together">
											<div class="display-grid bg-dark-gray gm-tb shadow">
												<div class="grid-icon bg-black gp-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"><path fill="none" d="M0 0h24v24H0V0z" /><path d="M6.54 5c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51m9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19M7.5 3H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1z"  fill="#fefefe"/></svg>
												</div>
												<div class="grid-text bg-dark-gray gp-4">
													<p class="one-point-two-em no-margin-bottom"><b><a href="tel:033669818">Call us today to discuss your project: 366 9818</a></b></p>
												</div>
											</div> <!-- .display-grid -->

											<div class="display-grid bg-dark-gray gm-tb shadow">
												<div class="grid-icon bg-black gp-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z" fill="#fefefe"/><circle cx="12" cy="9" r="2.5" fill="#fefefe"/></svg>
												</div>
												<div class="grid-text bg-dark-gray gp-4">
													<p class="one-point-two-em no-margin-bottom"><b><a href="https://goo.gl/maps/EzF5epUkFxaEihtLA">Find us at 10 Barbour Street, Christchurch</a></b></p>
												</div>
											</div> <!-- .display-grid -->
										</div> <!-- .together -->
									</div> <!-- .hero -->
								</div> <!-- .bg-light-gray -->
							<?php } ?>
						</header>

					<!-- left open -->
					<!-- .site -->
				<!-- .off-canvas-content -->
			<!-- .off-canvas-wrapper-inner -->
		<!-- .off-canvas-wrapper -->
	<!-- body -->
<!-- html -->
