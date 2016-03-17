<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'jquery', false, array(), false, true );
	wp_register_script("jqueryui",trailingslashit( get_stylesheet_directory_uri() ).'libraries/jquery-ui/jquery-ui.js', array('jquery'),NULL, true );
	wp_enqueue_script('jqueryui');
	wp_register_script("pricingaccordion",trailingslashit( get_stylesheet_directory_uri() )."js/pricingtableaccordion.js", array('jqueryui'), NULL, true );
	wp_enqueue_script("pricingaccordion");
	wp_dequeue_style( 'quark-fonts' );
	wp_register_script( 'small-menu', trailingslashit( get_stylesheet_directory_uri() ) . 'js/small-menu.js', array( 'jquery' ), '20130130', true );
	wp_enqueue_script( 'small-menu' );
	
}

function wrapit_ost($tag=NULL,$content=NULL, $classes=NULL, $ids=NULL){
	//classes, ids can be null.
	$openingbrace ='<';
	$closingbrace = '>';
	$closingtagbrace = '</';
	$classlist = '';
	$idlist='';
	if($tag && $content){
		$output = $openingbrace.$tag.$closingbrace.$content.$closingtagbrace.$tag.$closingbrace;

	}
	elseif($content){
		$tag ="div";
		
	}
	if($classes){
		$classlist = ' class="';
		foreach($classes as $key =>$value) {
			$classlist.= $value;
			$classlist.= ' ';
		}
		$classlist .='"';
		
	}
	if($ids){
		$idlist =' id="';
		$idlist .= $ids;	
		$idlist .= '"';
	}
	else{
		$output = NULL;
	}
	$output = $openingbrace.$tag.$classlist.$idlist.$closingbrace.$content.$closingtagbrace.$tag.$closingbrace;
	return $output;
}

//require('PricingTable/PricingTable.php');



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
?>