<?php

use Carbon_Fields\Container\Container;
use Carbon_Fields\Field\Field;

Container::make( 'post_meta', __( 'Gallery', 'tp' ) )
	->where( 'post_type', '=', 'tp_album' )
	->add_fields( [
		Field::make( 'media_gallery', 'tp_album_gallery', __( 'Album Gallery' ) )
			->set_type( [ 'image' ] )
			->set_required( true )
			->set_duplicates_allowed( false )
	] );
