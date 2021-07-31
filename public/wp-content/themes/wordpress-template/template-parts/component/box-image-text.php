<?php

$image = $args['image'] ?? '';
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
$url = $args['url'] ?? '';
$target = $args['target'] ?? '_self';

?>

<div class="template-part-component-box-image-text">
    <img src="<?= esc_attr($image) ?>" alt="<?= esc_attr($title) ?>">
    <div class="body">
        <strong><?= $title ?></strong>
        <p><?= wp_trim_words($description, 115, '...') ?></p>
        <?php if(trim($url) && trim($url) != '#') {?>
        <a href="<?= esc_attr($url) ?>" target="<?= esc_attr($target) ?>">
            <span>Ler mais</span>
            <img src="<?= esc_attr(bp_get_images_directory() . 'icon-arrow-right.svg') ?>" alt="">
        </a>
        <?php } ?>
    </div>
</div>