<?php
/**
 * Infoimg Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'c-infoimg-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'c-infoimg'; 
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}
if ($is_preview) {
    $className .= ' is-admin';
}

// Get ACF fields
$image = get_field('image');
$description = get_field('description');

// Generate unique ID for tooltip
$tooltip_id = 'hover-text-description-' . $block['id'];
?>



<div id="<?php echo esc_attr($id); ?>" 
     class="<?php echo esc_attr($className); ?> c-hover-text-wrapper"
     tabindex="0"
     aria-expanded="false">
    <?php if ($image): ?>
        <figure class="gb-block-image">
            <?php echo wp_get_attachment_image($image['ID'], 'full', false, array(
                'class' => 'gb-image',
                'decoding' => 'async',
                'aria-describedby' => $tooltip_id
            )); ?>
        </figure>
    <?php endif; ?>

    <?php if ($description): ?>
        <div class="gb-container c-hover-text" 
             id="<?php echo esc_attr($tooltip_id); ?>" 
             role="tooltip" 
             aria-hidden="true">
            <p><?php echo esc_html($description); ?></p>
        </div>
    <?php endif; ?>
</div>


