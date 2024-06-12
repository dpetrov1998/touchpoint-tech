<?php 
get_header(); 
$args = array(
	'post_type'		 => 'tp_album',
	'posts_per_page' => 5,
	'orderby'		 => 'date',
	'order'			 => 'DESC'
);

$latest_albums_query = new WP_Query( $args );

if ( ! $latest_albums_query->have_posts() ) {
	return;
}
?>

<div class="popup js-popup">
	<div class="popup__inner">
		<header class="popup__head">
			<a href="#" class="btn-close js-popup-close"></a><!-- /.btn-close -->

			<h4><?php _e( 'Add New Album', 'tp' ); ?></h4>
		</header><!-- /.popup__head -->
		
		<div class="popup__body">
			<div class="file-upload">
				<input class="file_title js-upload-title-input" type="text" placeholder="Album title">

				<div class="file__add-images">
					<strong><?php _e( 'Add Images:', 'tp' ); ?></strong>

					<input class="file_upload-input js-upload-input" type="file" multiple>
				</div><!-- /.file__add-images -->

				<a href="#" class="btn js-upload"><?php _e( 'Add new album', 'tp' ); ?></a>

				<p class="file__message"></p>
			</div><!-- /.gallery-small -->
		</div><!-- /.popup__body -->
	</div><!-- /.popup__inner -->
</div><!-- /.popup -->

<section class="section-gallery">
	<div class="shell">
		<div class="section__inner">
			<div class="section__aside">
				<a href="#" class="btn js-popup-trigger">
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
						$images = carbon_get_the_post_meta( 'tp_album_gallery' );
						if ( empty( $images ) ) {
							continue;
						}
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
