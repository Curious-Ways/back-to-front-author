<?php 

// Background Style
// --------------------

if (get_field('background_style') == "Plain") {

	$background_style = "";

} elseif (get_field('background_style') == "Pattern") {

	$background_style = "has_background_pattern";

} elseif (get_field('background_style') == "Background Colour") {

	$background_style = "has_background_color";

} elseif (get_field('background_style') == "Image") {

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

$background_style_pattern = get_field('background_style_pattern');
$size = 'tile';
$background_style_pattern_array = wp_get_attachment_image_src($background_style_pattern, $size);
$background_style_pattern_url = $background_style_pattern_array[0];

// Background Style - Image
// ---------------------------

$background_style_image = get_field('background_style_image');
$size = 'widescreen';
$background_style_image_array = wp_get_attachment_image_src($background_style_image, $size);
$background_style_image_url = $background_style_image_array[0];


// Header Output
// -------------------- 

if (get_field('background_style') == "Image") { ?>
		
	<header class="page-header content-wrapper <?php echo $background_style; ?>" style="background-image: url('<?php echo $background_style_image_url; ?>');">

<?php } elseif (get_field('background_style') == "Pattern") { ?>

	<header class="page-header content-wrapper <?php echo $background_style; ?>" style="background-image: url('<?php echo $background_style_pattern_url; ?>');">

<?php } elseif (get_field('background_style') == "Background Colour") { ?>

	<header class="page-header content-wrapper <?php echo $background_style; ?> <?php echo $background_style_colour; ?>">

<?php } ?>

		<div class="content">

			<div class="page-header-content">

				<?php 

				// Title
				// --------------

				if (get_field('title')) {
					echo '<h1>'.get_field('title').'</h1>';
				} 

				// Subtitle
				// --------------

				if (get_field('subtitle')) {
					echo '<h2>'.get_field('subtitle').'</h2>';
				} 

				// Link
				// --------------

				if (get_field('link')) {
					echo '<a class="btn" href="'.get_field('link').'">'.get_field('link_text').'</a></h2>';
				} 

				?>

			</div>

		</div>

	</div>

</header>

<div id="content">
