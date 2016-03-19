<?php

// check if the repeater field has rows of data
if( have_rows('image_text_side') ):

 	// loop through the rows of data
    while ( have_rows('image_text_side') ) : the_row();

	$image = get_sub_field('image');
	$text = get_sub_field('text');
	if( !empty($image) && !empty($text)){
		$output = "<div class='col grid_3_of_12'> <img src='" .$image['sizes']['large']."' ></div>";
		$output .= "<div class='col grid_8_of_12'>".$text. "</div>";
		
	}
	elseif(!empty($image)){
		$output = "<div class='col grid_12_of_12'> <img src='" .$image['sizes']['large']."' ></div>";
		
	}
	elseif(!empty($text)){
		$output = "<div class='col grid_12_of_12'>".$text. "</div>";
	}
	else{
		$output="";
	}
	echo $output;
    endwhile;

else :

    echo "no rows";

endif;

