<header class="template-part-header">
    <div class="container">

        <div class="menu-mobile-container">
            <nav role="navigation">
                <div id="menuToggle">
                    <input type="checkbox"/>
                    <div class="line-wrapper">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="container-menu">
                        <?php wp_nav_menu([
                            'container' => 'ul',
                            'theme_location' => 'primary_menu',
                            'depth' => 1
                        ]) ?>
                        <a href="<?= get_theme_mod('link_fasaweb') ?>" target="_blank" class="link-fasaweb-mobile">
                            <p>fasa<b>web</b></p>
                        </a>
                        <div class="socials-icons">
                            <?php bp_get_template_part_by('component', 'socials-network'); ?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div>
            <?php the_custom_logo(); ?>
        </div>

        <div class="menu-wrapper">
            <?php wp_nav_menu([
                'theme_location' => 'primary_menu',
                'depth' => 1
            ]) ?>

            <a href="<?= get_theme_mod('link_fasaweb') ?>" target="_blank" class="link-fasaweb">
                <span>fasa<b>web</b></span>
            </a>
        </div>
    </div>

    <?php if (is_front_page()) { ?>
        <div class="presentation-wrapper">
            <div class="container">
                <div class="left-wrapper">
                    <h1>
                        <?php $title = get_theme_mod('presentation_title');

                        if (!$title) $title = 'Soluções em Cobrança Corporativa';
                        echo $title;
                        ?>
                    </h1>
                    <p>
                        <?php $subtitle = get_theme_mod('presentation_paragraph');

                        if (!$subtitle) $subtitle = 'Múltiplas soluções que convertem inadimplência em receita para o seu negócio.';
                        echo $subtitle;
                        ?>
                    </p>
                    <a href="<?= get_theme_mod('presentation_link') ?>">
                        <span>
                            <?php $text_button = get_theme_mod('presentation_button');

                            if (!$text_button) $text_button = 'Conheça agora';
                            echo $text_button;
                            ?>
                        </span>
                        <img width="28px" src="<?= esc_attr(bp_get_images_directory() . 'icon-link.svg') ?>"
                             alt="<?= esc_html('Clique para ir') ?>">
                    </a>

                    <div class="icons">
                        <?php bp_get_template_part_by('component', 'socials-network'); ?>
                    </div>
                </div>

                <?php
                $image_presentation = get_theme_mod('presentation_image');
                if (!$image_presentation) $image_presentation = bp_get_images_directory() . 'flat-business.png';
                ?>
                <img
                        src="<?= esc_attr($image_presentation) ?>"
                        alt="Business"
                >
            </div>
        </div>
    <?php } ?>
</header>