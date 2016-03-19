<?php 
//template part for Onesupport Pricing Table Widget

$post_object = get_field('product_name', $acfw );
//print_r($post_object);
if( $post_object ): 

	// override $post
	 setup_postdata( $GLOBALS['post'] =& $post_object );

$choice = get_the_title();
if($choice =='OneSupport') {
	$output = "<h2><span class='support'>One</span>Support</h2>";
}
elseif($choice =='OneProtect') {
	$output = "<h2><span class='protect'>One</span>Protect</h2>";
}
elseif($choice == 'OneSecurity'){
$output = "<h2><span class='security'>One</span>Security</h2>";

}
else{
	$output = wrapit_ost('h2',$choice);
}

echo $output;
echo woocommerce_template_single_price();
	?>
 
    
<?php

// check if the repeater field has rows of data
if( have_rows('features') ):

 	// loop through the rows of data
 	$featuresoutput = '';
    while ( have_rows('features') ) : the_row();
        
        // display a sub field value
        $heading= get_sub_field('section_heading');
        $heading = wrapit_ost('h3',$heading);
        $explanation = get_sub_field("explanation");
        $explanation = wrapit_ost('div',$explanation);
        $featuresoutput .=$heading.$explanation;
    endwhile;
    echo wrapit_ost('div',$featuresoutput,array('accordion'),NULL);
    
else :

    // no rows found

endif;
echo woocommerce_template_single_add_to_cart();
?>

    
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>