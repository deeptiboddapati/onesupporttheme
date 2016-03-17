<?php

require 'pricing_table_metaboxes_ost.php';

add_filter( 'acfw_include_widgets', 'add_include_widgets_pricingtable_ost' );

function add_include_widgets_pricingtable_ost(){

	$pricingtable_acfw_widgets_ost = array(
		array(
			'title' => 'OneSupport Pricing Table',
			'description' => 'Display a OneSupport Product Features Table Anywhere!',
			'slug' => 'ost-pt-widget',
			'id' => 'Ost_PT_Widget',
		),
	);
	
	return $pricingtable_acfw_widgets_ost;
	
}