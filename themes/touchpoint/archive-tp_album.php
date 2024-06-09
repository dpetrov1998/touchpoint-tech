<?php get_header(); ?>

<section class="section-gallery">
	<div class="shell">
		<div class="section__inner">
			<div class="section__aside">
				<a href="#" class="btn">
					<span><?php _e( 'Add', 'tp' ); ?></span>

					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/resources/images/btn-icon.svg" alt="Button Icon">
				</a><!-- /.btn -->

				<ul class="secondary-nav">
					<li class="is-active">
						<a href="#"><?php _e( 'Recently added', 'tp' ); ?></a>
					</li>

					<li>
						<a href="#"><?php _e( 'Albums', 'tp' ); ?></a>
					</li>

					<li>
						<a href="#"><?php _e( 'All Photos', 'tp' ); ?></a>
					</li>

					<li>
						<a href="#"><?php _e( 'All Videos', 'tp' ); ?></a>
					</li>
				</ul><!-- /.secondary-nav -->
			</div><!-- /.section__aside -->

			<div class="section__body">
				<div class="gallery">
					
				</div><!-- /.gallery -->
			</div><!-- /.section__body -->
		</div><!-- /.section__inner -->
	</div><!-- /.shell -->
</section><!-- /.section-gallery -->

<?php get_footer(); ?>
