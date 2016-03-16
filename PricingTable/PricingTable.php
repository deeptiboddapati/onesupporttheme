<?php

$options = array();


function create_pricing_table_menu_item(){
	add_menu_page(
		"Pricing Table",
		"Pricing Table Settings",
		"manage_options",
		"pricingtable",
		"pricing_table_menu_ost",
		'dashicons-chart-pie',
		'3'
		);
	add_option(
		"pricing_table_ost_options",
		'',
		'',
		'yes'
		);

}



add_action('admin_menu', 'create_pricing_table_menu_item');

function pricing_table_menu_ost(){
	if(!current_user_can('manage_options')){
		wp_die("You have insufficent permissions to access this page.");
	}
	global $options;
	if(isset($_POST['pricing_table_form_ost_submitted'])){
		$hidden_field = esc_html($_POST['pricing_table_form_ost_submitted']);
		if($hidden_field == 'Y'){
			$sample_txt_ost = esc_html($_POST['sample_txt_ost']);
			$options[ 'product-name'] = esc_html($_POST['product-name' ]);
			$options[ 'woocommerce-slug'] = esc_html($_POST['woocommerce-slug' ]);
			$options[ 'monthly-price'] = esc_html($_POST['monthly-price' ]);
			$options[ 'onetime-fee'] = esc_html($_POST['onetime-fee' ]);
			$options[ 'yearly-price'] = esc_html($_POST['yearly-price' ]);
			$options[ 'description'] = esc_html($_POST['description' ]);
			$options['sample_txt_ost'] = $sample_txt_ost;
			$options['last_updated'] = time();
			update_option("pricing_table_ost_options",$options);
		}
	}
	$options = get_option('pricing_table_ost_options');
	if($options != ''){
		$sample_txt_ost = $options['sample_txt_ost'];
		echo $sample_txt_ost;
		$options[ 'product-name'];
		echo $options[ 'woocommerce-slug'];
		echo $options[ 'monthly-price'];
		echo $options[ 'onetime-fee'];
		echo $options[ 'yearly-price'];
		echo $options[ 'description'];
	}
	require('pricingtablemenupage.php');
}