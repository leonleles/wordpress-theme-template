<footer class="template-part-footer">
    <div class="container">
        <div class="header">
            <?php $custom_logo_footer = get_theme_mod('custom_logo_footer');

            if (empty($custom_logo_footer)) $custom_logo_footer = bp_get_images_directory() . 'fasa-logo-white.png';

            if (!empty($custom_logo_footer)) { ?>
                <a href="/">
                    <img src="<?= esc_attr($custom_logo_footer); ?>"
                         alt="<?= esc_attr(get_bloginfo('name')); ?>">
                </a>
            <?php } ?>

            <?php wp_nav_menu([
                'theme_location' => 'footer_menu',
                'depth' => 1
            ]) ?>
        </div>

        <div class="wrapper-infos">
            <ul>
                <li>
                    <strong>Endereço</strong>
                    <p>
                        <?php $address = get_theme_mod('footer_address');
                        if (empty($address)) $address = 'Rua Barão de Souza Leão, N. 425 Sala 605. Pontes Corporate Center, Boa Viagem, Recife. CEP:
                        51.030-300';
                        echo esc_html($address);
                        ?>
                    </p>
                </li>
                <li>
                    <strong>E-mail</strong>
                    <p>
                        <?php $mail = get_theme_mod('footer_mail');
                        if (empty($mail)) $mail = 'contato@fasacobrancas.com.br';

                        echo esc_html($mail);
                        ?>
                    </p>
                </li>
                <li>
                    <strong>Telefone</strong>
                    <p>
                        <?php $phone = get_theme_mod('footer_phone');
                        if (empty($phone)) $phone = '(81) 3033 0085';

                        echo esc_html($phone);
                        ?>
                    </p>
                </li>
            </ul>

            <div class="socials">
                <?php bp_get_template_part_by('component', 'socials-network', null, ['isWhite' => true]); ?>
            </div>
        </div>

        <div class="signature">
            <p>© <?= esc_html(date('Y')) ?> fasasolucoes.com.br</p>

            <div class="icons">

            </div>
        </div>
    </div>
</footer>
