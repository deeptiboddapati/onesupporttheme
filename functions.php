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

require('widgets/registerwidgetsfields.php');



function ost_wc_subscriptions_custom_price_string( $pricestring ) {

$sign_up = WC_Subscriptions_Product::get_sign_up_fee( get_the_id() );
$monthly = WC_Subscriptions_Product::get_price( get_the_id() );
$period= WC_Subscriptions_Product::get_period( get_the_id() );
$pricestring = "$".$sign_up." for the first ".$period." and $" .$monthly." for every ".$period." afterwards";
    return $pricestring;
}
add_filter( 'woocommerce_subscriptions_product_price_string', 'ost_wc_subscriptions_custom_price_string' );
add_filter( 'woocommerce_subscription_price_string', 'ost_wc_subscriptions_custom_price_string' );

function ost_wc_sub_cart_price(){
//echo is_cart();
if(is_cart()){
	remove_filter( 'woocommerce_subscriptions_product_price_string', 'ost_wc_subscriptions_custom_price_string' );
	remove_filter( 'woocommerce_subscription_price_string', 'ost_wc_subscriptions_custom_price_string' );

}
}

add_action('wp','ost_wc_sub_cart_price');
		remove_action( 'woocommerce_variable-subscription_add_to_cart', 'WC_Subscriptions::variable_subscription_add_to_cart', 30 );

function ostvariable_sub(){
	global $product;

		// Enqueue variation scripts
		wp_enqueue_script( 'wc-add-to-cart-variation' );

		// Get Available variations?
		$get_variations = sizeof( $product->get_children() ) <= apply_filters( 'woocommerce_ajax_variation_threshold', 30, $product );

		// Load the template
		wc_get_template( 'single-product/add-to-cart/variable-subscription.php', array(
			'available_variations' => $get_variations ? $product->get_available_variations() : false,
			'attributes'           => $product->get_variation_attributes(),
			'selected_attributes'  => $product->get_variation_default_attributes(),
		), '', plugin_dir_path( __FILE__ ) . 'templates/' );
	}

add_action('woocommerce_variable-subscription_add_to_cart','ostvariable_sub');
?>