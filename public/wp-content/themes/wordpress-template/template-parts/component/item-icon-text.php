<?php

$uploads_dir = wp_upload_dir()['basedir'] ?? '';

$icon = $args['icon'] ?? [];
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
$url = $args['url'] ?? 'javascript:void(0)';
$target = $args['target'] ?? '_self';

$icon_url = explode('uploads', $icon['url'])[1] ?? '';
$svg_path = $uploads_dir . $icon_url;

?>
<a
        href="<?= esc_attr(trim($url) != '#' ? $url : 'javascript:void(0)') ?>"
        class="template-part-item-icon-text"
        target="<?= esc_attr($target) ?>"
>
    <div class="container-icon">
        <?php bp_print_svg($svg_path) ?>
    </div>
    <strong><?= $title ?></strong>
    <?php if (!empty($description)) { ?>
        <p><?= $description ?></p>
    <?php } ?>
</a>