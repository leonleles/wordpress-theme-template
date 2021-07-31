<main class="template-part-post">
    <div class="container">
        <h1><?php the_title() ?></h1>
        <?php the_excerpt(); ?>

        <div class="author-wrapper">
            <?php if (get_the_author()) { ?>
                <strong>Por <?php echo get_the_author() ?></strong>
            <?php } ?>
            <p><?php echo get_the_date() ?></p>
        </div>

        <?php bp_get_template_part_by('component', 'the_thumbnail'); ?>

        <article>
            <?php bp_get_template_part_by('component', 'content'); ?>
        </article>
    </div>
</main>