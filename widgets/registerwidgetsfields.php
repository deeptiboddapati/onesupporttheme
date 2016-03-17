<?php

require 'pricing_table_metaboxes_ost.php';

add_filter( 'acfw_include_widgets', 'include_widget_ost' );

function include_widget_ost(){

	$acfw_widgets_ost = array(
		array(
			'title' => 'OneSupport Video Embed',
			'description' => 'Display a Video',
			'slug' => 'ost-video-embed-widget',
			'id' => 'Ost_Video_Embed_Widget',
			),
		array(
			'title' => 'OneSupport Pricing Table',
			'description' => 'Display a OneSupport Product Features Table Anywhere!',
			'slug' => 'ost-pt-widget',
			'id' => 'Ost_PT_Widget',
			),
		array(
			'title'=>"OneSupport Text Editor",
			'description' => "Display a Text Box Anywhere",
			'slug' => 'ost-wysiwyg-editor',
			'id' => 'Ost_Wysiwyg-editor'

			),
			array(
			'title'=>"OneSupport Image Widget",
			'description' => "Display an Image Anywhere",
			'slug' => 'ost-image-widget',
			'id' => 'Ost_Image_Widget'

			),
			array(
			'title'=>"OneSupport ",
			'description' => "Display a Anywhere",
			'slug' => 'ost-',
			'id' => 'Ost_'

			),
		);
	
	return $acfw_widgets_ost;
	
}