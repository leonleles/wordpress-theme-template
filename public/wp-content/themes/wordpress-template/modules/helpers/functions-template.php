<?php

function bp_get_template_part_by(string $dir, string $slug, string $name = null, array $args = [])
{
    get_template_part("template-parts/$dir/$slug", $name, $args);
}

function bp_get_images_directory()
{
    return get_template_directory_uri() . "/images/";
}

function bp_get_acf_field($selector, $post_id = false, $format_value = true)
{
    if (function_exists('get_field')) return get_field($selector, $post_id, $format_value);

    return null;
}

function bp_print_svg($file)
{
    $iconfile = new DOMDocument();
    $iconfile->load($file);
    echo $iconfile->saveHTML($iconfile->getElementsByTagName('svg')[0]);
}

function bp_parse_array($array = [])
{
    if (empty($array)) return '';
    $data = json_encode($array);

    return "data-attributes='$data'";
}