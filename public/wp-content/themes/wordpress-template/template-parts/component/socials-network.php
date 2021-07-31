<?php

$isWhite = $args['isWhite'] ?? false;
$sulfix = $isWhite ? '-white' : '';

?>

<div class="template-part-component-socials-network">
    <?php $facebook = get_theme_mod('link_facebook');

    if (!empty($facebook)) {
        ?>
        <a target="_blank" href="<?= esc_attr($facebook) ?>">
            <img class="facebook"
                 src="<?= esc_attr(bp_get_images_directory() . "icon-facebook$sulfix.svg") ?>"
                 alt="Facebook">
        </a>
    <?php } ?>
    <?php $twitter = get_theme_mod('link_twitter');

    if (!empty($twitter)) {
        ?>
        <a target="_blank" href="<?= esc_attr($twitter) ?>">
            <img class="twitter"
                 src="<?= esc_attr(bp_get_images_directory() . "icon-twitter$sulfix.svg") ?>"
                 alt="Twitter">
        </a>
    <?php } ?>
    <?php $instagram = get_theme_mod('link_instagram');

    if (!empty($instagram)) {
        ?>
        <a target="_blank" href="<?= esc_attr($instagram) ?>">
            <img src="<?= esc_attr(bp_get_images_directory() . "icon-instagram$sulfix.svg") ?>"
                 alt="Instagram">
        </a>
    <?php } ?>
    <?php $linkedin = get_theme_mod('link_linkedin');

    if (!empty($linkedin)) {
        ?>
        <a target="_blank" href="<?= esc_attr($linkedin) ?>">
            <img class="linkedin" src="<?= esc_attr(bp_get_images_directory() . "icon-linkedin$sulfix.svg") ?>"
                 alt="Linkedin">
        </a>
    <?php } ?>
</div>