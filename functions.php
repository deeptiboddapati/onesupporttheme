<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('childstyle',get_stylesheet_directory() );
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

require('widgets/registerwidgetsfields.php');

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb',20);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action('woocommerce_after_shop_loop','woocommerce_pagination',10);
apply_filters( 'woocommerce_show_page_title', false );
?>