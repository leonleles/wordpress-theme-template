<?php
$locations = get_nav_menu_locations();
?>
<main class="template-part-front-page">
    <?php
    if (isset($locations['solutions_menu']) && !empty($solutions_menu = $locations['solutions_menu'])) {
        $solutions_menu_object = wp_get_nav_menu_object($solutions_menu);

        $objects_menu = wp_get_nav_menu_items($solutions_menu_object);
        ?>
        <section class="container solutions">
            <strong><?= $solutions_menu_object->name ?></strong>

            <?php if (!empty($objects_menu)) { ?>
                <ul>
                    <?php foreach ($objects_menu as $index => $item_menu) {
                        if ($index > 2) break;
                        ?>
                        <li data-aos="zoom-in">
                            <?php bp_get_template_part_by(
                                'component',
                                'box-image-text',
                                null,
                                [
                                    'image' => bp_get_acf_field('imagem', $item_menu->ID),
                                    'title' => $item_menu->title,
                                    'description' => bp_get_acf_field('descricao', $item_menu->ID),
                                    'url' => $item_menu->url,
                                    'target' => $item_menu->target
                                ]
                            ); ?>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>

            <?php
            $link_saiba_mais = bp_get_acf_field('link_saiba_mais', $solutions_menu_object);

            if (!empty($link_saiba_mais)) { ?>
                <a href="<?= esc_attr($link_saiba_mais) ?>"><?= __('Saiba mais') ?></a>
            <?php } ?>
        </section>
    <?php } ?>

    <?php if (isset($locations['segmentos_menu']) && !empty($segmentos_menu = $locations['segmentos_menu'])) {
        $segmentos_menu_object = wp_get_nav_menu_object($segmentos_menu);
        $description_segmentos_menu = bp_get_acf_field('texto', $segmentos_menu_object);
        ?>
        <section class="container segments">
            <strong><?= $segmentos_menu_object->name ?></strong>
            <p><?= $description_segmentos_menu ?></p>
            <?php
            $objects_segmentos_menu = wp_get_nav_menu_items($segmentos_menu_object);

            if (!empty($objects_segmentos_menu)) {
                ?>
                <ul>
                    <?php
                    $delay = 300;
                    foreach ($objects_segmentos_menu as $item_menu) {
                        ?>
                        <li data-aos="flip-left"
                            data-aos-easing="ease-out-cubic"
                            data-aos-delay="<?= $delay ?>"><?php bp_get_template_part_by(
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
                            ); ?></li>
                        <?php
                        $delay = $delay + 100;
                    } ?>
                </ul>
            <?php } ?>
        </section>
    <?php } ?>

    <section class="container locations">
        <?php $title_locations = get_theme_mod('national_performance_title'); ?>
        <strong><?= !empty($title_locations) ? $title_locations : 'Atuação Nacional' ?></strong>
        <?php $text_locations = get_theme_mod('national_performance_text'); ?>

        <?php if (!empty($text_locations)) { ?>
            <p><?= $text_locations ?></p>
        <?php } else { ?>
            <p>Atuamos em todos os estados do Brasil, sempre aliando tradição e modernidade. Primando pela eficiência,
                agilidade e segurança nos serviços prestados.</p>
        <?php } ?>

        <?php $national_performance_image = get_theme_mod('national_performance_image');

        if (!empty($national_performance_image)) {
            ?>
            <img data-aos="fade-left" src="<?= $national_performance_image ?>"
                 alt="Atuação Nacional">
        <?php } else { ?>
            <img data-aos="fade-left" src="<?= esc_attr(bp_get_images_directory() . 'fasa-brasil.png') ?>"
                 alt="Atuação Nacional">
        <?php } ?>
    </section>

    <section class="container charge-judicial">
        <?php $charge_judicial_image = get_theme_mod('charge_judicial_image'); ?>
        <?php if (!empty($charge_judicial_image)) { ?>
            <img src="<?= esc_attr($charge_judicial_image) ?>" alt="">
        <?php } ?>
        <div class="container-texts">
            <?php $charge_judicial_title = get_theme_mod('charge_judicial_title'); ?>
            <strong><?= $charge_judicial_title ?></strong>
            <?php $charge_judicial_text = get_theme_mod('charge_judicial_text'); ?>
            <?php if (!empty($charge_judicial_text)) { ?>
                <p><?= $charge_judicial_text ?></p>
            <?php } else { ?>
                <p></p>
            <?php } ?>
        </div>
    </section>

    <section class="container contact">
        <div class="container-texts">
            <?php $contact_us_title = get_theme_mod('contact_us_title'); ?>
            <strong><?= !empty($contact_us_title) ? $contact_us_title : 'Fale conosco' ?></strong>
            <?php $contact_us_text = get_theme_mod('contact_us_text'); ?>
            <?php if (!empty($contact_us_text)) { ?>
                <p><?= $contact_us_text ?></p>
            <?php } else { ?>
                <p>Nossa equipe de consultores especializados está sempre disponível para atender você e esclarecer
                    todas as
                    dúvidas de seus clientes e parceiros de negócios.</p>
            <?php } ?>
        </div>
        <?php bp_get_template_part_by('component', 'form-contact'); ?>
    </section>
</main>