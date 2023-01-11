<?php if (has_post_thumbnail()) { ?>
    <div class="template-part-component-the-thumbnail">
        <?php the_post_thumbnail(); ?>
        <?php $caption = get_the_post_thumbnail_caption();

        if (!empty($caption)) echo "<span>$caption</span>";
        ?>
    </div>
<?php } ?>