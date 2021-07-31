<main class="template-part-page">
    <div class="container">
        <h1><?php the_title() ?></h1>

        <?php bp_get_template_part_by('component', 'the_thumbnail'); ?>

        <article>
            <?php bp_get_template_part_by('component', 'content'); ?>
        </article>
    </div>
</main>