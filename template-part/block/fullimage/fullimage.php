<?php

/**
 * blockname Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'c-full-img-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'c-full-img';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
if( $is_preview ) {
    $className .= ' is-admin';
}

$width = 100;
?>

<?php if( get_field('width') ) { $width = get_field('width'); }?>

 
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="width: <?php echo $width;?>%">

<?php
$image = get_field('image');
$size = 'full';
if($image){
 echo wp_get_attachment_image($image, $size);
}
?>


    <?php if( get_field('caption') ) { echo '<div class="c-image-caption"><p>' . get_field('caption') . '</p></div>'; }?>


</div>
