<?php 

// ID
// --------------------

if (get_sub_field('block_id')) {
	$block_id = 'id="block_'.get_sub_field('block_id').'"';
} else {
	$block_id = "";
}

// Background Style
// --------------------

if (get_sub_field('background_style') == "Plain") {

	$background_style = "has_background_plain";

} elseif (get_sub_field('background_style') == "Pattern") {

	$background_style = "has_background_pattern";

} elseif (get_sub_field('background_style') == "Background Colour") {

	$background_style = "has_background_color";

} elseif (get_sub_field('background_style') == "Image") {

	$background_style = "has_background_img";

} 

// Background Color
// --------------------
// orange : Orange

if (get_sub_field('background_style_colour') == "orange") {

	$background_style_colour = "clr-orange";

} 

// Background Style - Pattern
// ---------------------------

$background_style_pattern = get_sub_field('background_style_pattern');
$size = 'tile';
$background_style_pattern_array = wp_get_attachment_image_src($background_style_pattern, $size);
$background_style_pattern_url = $background_style_pattern_array[0]; 

// Background Style - Image
// ---------------------------

$background_style_image = get_sub_field('background_style_image');
$size = 'widescreen';
$background_style_image_array = wp_get_attachment_image_src($background_style_image, $size);
$background_style_image_url = $background_style_image_array[0];


// Content Background Image
// ---------------------------

$content_background_image = get_sub_field('content_background_image');
$size = 'w400';
$content_background_image_array = wp_get_attachment_image_src($content_background_image, $size);
$content_background_image_url = $content_background_image_array[0];


// Header Output
// -------------------- 

	// Image

 	if (get_sub_field('background_style') == "Image") { ?>
		
		<div <?php echo $block_id; ?> class="content-wrapper <?php echo $background_style; ?>" style="background-image: url('<?php echo $background_style_image_url; ?>');">
	<?php

	// Pattern

	} elseif (get_sub_field('background_style') == "Pattern") { ?>

		<div <?php echo $block_id; ?> class="content-wrapper <?php echo $background_style; ?>" style="background-image: url('<?php echo $background_style_pattern_url; ?>');">
	<?php

	// Background Color

	} elseif (get_sub_field('background_style') == "Background Colour") { ?>

		<div <?php echo $block_id; ?> class="content-wrapper <?php echo $background_style; ?> <?php echo $background_style_colour; ?>">
	<?php

	// Plain

	} elseif (get_sub_field('background_style') == "Plain") { ?>

		<div <?php echo $block_id; ?> class="content-wrapper <?php echo $background_style; ?>">
	<?php }

	// Content background image
	// --------------------------

	// Position
	if (get_sub_field('content_background_image_position') == "Left") {

		$content_background_image_position = "content_background_img_left";

	}
	elseif (get_sub_field('content_background_image_position') == "Right") {

		$content_background_image_position = "content_background_img_right";

	}	else {

		$content_background_image_position = "";

	}

	// Output
	if (get_sub_field('content_background_image')) {

		echo '<div class="content_background_img '.$content_background_image_position.'" style="background-image: url('.$content_background_image_url.');">';
	
	}