<?php

function bp_menu_filter_limit_items(&$items, $limit = null) {

    if ($limit) {
        $toplinks = 0;
        foreach ($items as $k => $v) {
            if ($v->menu_item_parent == 0) {
                // count how many top-level links we have so far...
                $toplinks++;
            }
            // if we've passed our max # ...
            if ($toplinks > $limit) {
                unset($items[$k]);
            }
        }
    }

    return $items;
}