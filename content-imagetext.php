<?php

// check if the repeater field has rows of data
if( have_rows('image_text_side') ):

 	// loop through the rows of data
    while ( have_rows('image_text_side') ) : the_row();

	$image = get_sub_field('image');
	$text = get_sub_field('text');
	if( !empty($image) && !empty($text)){
		$output = "<div class='grid_4_of_12'> <img src='" .$image['sizes']['large']."' ></div>";
		$output .= "<div class='grid_8_of_12'>".$text. "</div>";
		echo $output;
	}
	elseif(!empty($image)){
		echo "image";
	}
	elseif(!empty($text)){
		echo "text";
	}
	else{
		echo "nothin";
	}
	
    endwhile;

else :

    echo "no rows";

endif;

