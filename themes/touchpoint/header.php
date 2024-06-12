<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=6">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div class="wrapper">
		<div class="wrapper__inner">
			<header class="header">
				<div class="shell">
					<div class="header__inner">
						<div class="header__logo">
							<a href="<?php echo home_url( '/' ); ?>" class="logo">
								<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/resources/images/logo.png" alt="<?php bloginfo('name'); ?>">
							</a>
						</div><!-- /.header__logo -->
						
						<div class="header__wrapper js-menu">
							<div class="header__nav">
								<?php
								if ( has_nav_menu( 'main-menu' ) ) {
									wp_nav_menu( [
										'theme_location'	=> 'main-menu',
										'container' 	  	=> 'nav',
										'container_class' 	=> 'nav',
									] );
								}
								?>
							</div><!-- /.header__nav -->

							<div class="header__login">
								<p>
									<?php _e( 'Anonymous', 'tp' ); ?>
								</p>

								<figure>
									<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/resources/images/avatar-ph.png" alt="<?php _e( 'Avatar Placeholder', 'tp' ); ?>">
								</figure>

								<span></span>
							</div><!-- /.header__login -->

						</div><!-- /.header__wrapper -->

						<div class="header__toggle">
							<div class="menu-toggle js-toggle">
								<span></span>

								<span></span>

								<span></span>
							</div><!-- /.menu-toggle -->
						</div><!-- /.header__toggle -->
					</div><!-- /.header__inner -->
				</div><!-- /.shell -->
			</header><!-- /.header -->

			<div class="main">
