<?php extract($args); ?>
<div class="popup js-popup">
	<div class="popup__inner">
		<header class="popup__head">
			<a href="#" class="btn-close js-popup-close"></a><!-- /.btn-close -->

			<h4><?php _e( 'Add New Album', 'tp' ); ?></h4>
		</header><!-- /.popup__head -->
		
		<div class="popup__body">
			<div class="file-upload">
				<input class="file_title js-upload-title-input" type="text" placeholder="Album title">
				
				<?php if ( ! empty( $categories ) ) : ?>
					<select name="category-options" class="file__category-options js-category-options">
						<option value=""><?php _e( 'Select album category' ); ?></option>

						<?php foreach ( $categories as $category ) : ?>
							<option value="<?php echo $category->slug; ?>"><?php echo $category->name; ?></option>
						<?php endforeach; ?>
					</select>
				<?php endif; ?>

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
