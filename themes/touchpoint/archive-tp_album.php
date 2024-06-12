<?php 
get_header(); 
$args = array(
	'post_type'		 => 'tp_album',
	'posts_per_page' => 6,
	'orderby'		 => 'date',
	'order'			 => 'DESC'
);

$latest_albums_query = new WP_Query( $args );

if ( ! $latest_albums_query->have_posts() ) {
	return;
}
?>

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
					<?php while ( $latest_albums_query->have_posts() ) : 
						$latest_albums_query->the_post(); 
						$images = carbon_get_post_meta( get_the_ID(), 'tp_album_gallery' );
						?>
						<div class="gallery_item">
							<?php echo wp_get_attachment_image( $images[0] ); ?>
						</div><!-- /.gallery_item -->
					<?php endwhile; wp_reset_postdata(); ?>
				</div><!-- /.gallery -->
			</div><!-- /.section__body -->
		</div><!-- /.section__inner -->
	</div><!-- /.shell -->
</section><!-- /.section-gallery -->

<?php get_footer(); ?>
