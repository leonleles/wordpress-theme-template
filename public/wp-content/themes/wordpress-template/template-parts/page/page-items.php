<?php /* Template Name: Listagem de itens */ ?>

<main class="template-part-page-items">
    <div class="container">
        <h1><?php the_title() ?></h1>

        <?php bp_get_template_part_by('component', 'the_thumbnail'); ?>

        <article>
            <?php bp_get_template_part_by('component', 'content'); ?>
        </article>

        <?php
        $locations = get_nav_menu_locations();
        $location_name = "menu_page_" . get_the_ID();

        if (isset($locations[$location_name]) && !empty($menu_id = $locations[$location_name])) {
            $menu_object = wp_get_nav_menu_object($menu_id);
            $menu_items = wp_get_nav_menu_items($menu_object);

            if (!empty($menu_items)) {
                ?>
                <ul>
                    <?php foreach ($menu_items as $item_menu) { ?>
                        <li><?php bp_get_template_part_by(
                                'component',
                                'item-icon-text',
                                null,
                                [
                                    'icon' => bp_get_acf_field('icone', $item_menu->ID),
                                    'title' => $item_menu->title,
                                    'description' => bp_get_acf_field('descricao', $item_menu->ID),
                                    'url' => $item_menu->url,
                                    'target' => $item_menu->target
                                ]
                            ); ?>
                        </li>
                    <?php } ?>
                </ul>
            <?php }
        } ?>
    </div>
</main>