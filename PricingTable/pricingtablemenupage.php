<?php

$formfields ='<textarea id="" name="sample_txt_ost" cols="80" rows="10" class="large-text"></textarea><br>';

echo '<form name="pricing_table_form_ost" method="post" action="">';
echo $formfields;
echo '<input type="hidden" name="pricing_table_form_ost_submitted" value="Y">';
?>


<span class="description"><?php esc_attr_e( 'Product Name', 'wp_admin_style' ); ?></span><br>
<input type="text" name="product-name" class="regular-text" value=" product" /><br>
<span class="description"><?php esc_attr_e( 'Woocommerce Slug', 'wp_admin_style' ); ?></span><br>
<input type="text" name="woocommerce-slug" class="regular-text" value="woocommerce " /><br>

<span class="description"><?php esc_attr_e( 'Monthly price', 'wp_admin_style' ); ?></span><br>
<input type="text" name="monthly-price" class="small-text" value=" monthly" /> <br>

<span class="description"><?php esc_attr_e( 'Onetime fee', 'wp_admin_style' ); ?></span><br>
<input type="text" name="onetime-fee" class="small-text" value="onetime " /> <br>

<span class="description"><?php esc_attr_e( 'Yearly price', 'wp_admin_style' ); ?></span><br>
<input type="text" name="yearly-price" class="small-text" value=" yearly" /> <br>

<span class="description"><?php esc_attr_e( 'Description: Section Headings need to have h3 tags.', 'wp_admin_style' ); ?></span><br>
<textarea id="" name="description" cols="80" rows="10" class="large-text" value=" description" >product desc</textarea><br>

<?php
submit_button( $text = null, $type = 'primary', $name = 'submit', $wrap = true, $other_attributes = null );
echo '</form>';