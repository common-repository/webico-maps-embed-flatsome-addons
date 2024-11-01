<?php
// [wbc_maps]
function wbc_shortcode_maps_blog($atts, $content = null, $tag) {

	extract(shortcode_atts(array(
		"_id" => 'row-'.rand(),
		'style' => '',
		'class' => '',
		'zoom' => '17',
		'address' => '235 cộng hòa, phường 13, quận tân bình, tp hồ chí minh, việt nam',
		'width' => '100%',
		'height' => '400'

	), $atts));

	ob_start();



?>
<div class="gmap_canvas">
	<iframe width="<?php echo $width; ?>" height="<?php echo $height; ?>" id="gmap_canvas" src="https://maps.google.com/maps?t=&z=13&ie=UTF8&iwloc=&output=embed&q=<?php echo htmlspecialchars($address); ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>
<?php
$content = ob_get_contents();
ob_end_clean();
return $content;
}

add_shortcode("wbc_maps", "wbc_shortcode_maps_blog");
