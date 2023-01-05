<?php

abstract class class_register_block_type
{
    public $name;

    public function __construct()
    {
        $this->setup();
    }

    private function setup()
    {
        add_action('init', [$this, '_register_block']);
    }

    public function _render_block($attributes, $content, $block)
    {
        if (empty($content)) return "<div class='wp-block-create-block-$this->name'></div>";

        return $content;
    }

    public function _register_block()
    {
        register_block_type(bp_get_blocks_directory() . $this->name, ['render_callback' => [$this, '_render_block']]);
    }
}