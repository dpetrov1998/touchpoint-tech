<?php 
get_header(); 

global $wp_query;

$categories = get_terms( [
	'taxonomy' => 'tp_album_category',
	'hide_empty' => true,
] );

$paged = get_query_var( 'paged' ) ?: 1;
$max_num_pages = $wp_query->max_num_pages;
$show_albums = $_GET['show-albums'] ?? 'latest';

if ( ! have_posts() ) {
	return;
}

get_template_part( 'fragments/popup', args: compact( 'categories' ) );
?>
<section class="section-gallery">
	<div class="shell">
		<div class="section__inner">
			<div class="section__aside">
				<a href="#" class="btn js-popup-trigger">
					<span><?php _e( 'Add', 'tp' ); ?></span>

					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/resources/images/btn-icon.svg" alt="Button Icon">
				</a><!-- /.btn -->

				<ul class="secondary-nav js-secondary-nav">
					<li class="<?php echo $show_albums === 'latest' ? 'is-active' : ''; ?>">
						<a href="#" data-slug="latest">
							<?php _e( 'Recently added', 'tp' ); ?>
						</a>
					</li>

					<li class="<?php echo $show_albums === 'all' ? 'is-active' : ''; ?>">
						<a href="#" data-slug="all">
							<?php _e( 'Albums', 'tp' ); ?>
						</a>
					</li>

					<?php foreach ( $categories as $category ) : ?>
						<li class="<?php echo $show_albums === $category->slug ? 'is-active' : ''; ?>">
							<a href="#" data-slug="<?php echo $category->slug; ?>">
								<?php echo __( 'All ', 'tp' ) . $category->name; ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul><!-- /.secondary-nav -->
			</div><!-- /.section__aside -->

			<div class="section__body">
				<div class="gallery js-gallery">
					<?php while ( have_posts() ) :
						the_post();
						$images = carbon_get_the_post_meta( 'tp_album_gallery' );
						?>
						<div class="gallery_item">
							<?php echo wp_get_attachment_image( $images[0] ); ?>
						</div><!-- /.gallery_item -->
					<?php endwhile; wp_reset_postdata(); ?>

					<?php if ( $show_albums !== 'latest' && $max_num_pages > $paged ) : ?>
						<a href="#" class="js-load-more" data-paged="<?php echo $paged; ?>"></a>
					<?php endif; ?>
				</div><!-- /.gallery -->
			</div><!-- /.section__body -->
		</div><!-- /.section__inner -->
	</div><!-- /.shell -->
</section><!-- /.section-gallery -->

<?php get_footer(); ?>
