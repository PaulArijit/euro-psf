<?php

    $current_tab = $tab;
    $tabNames = ['product', 'carton', 'core', 'cylinder', 'flexo plate', 'fusset', 'grommet', 'knife', 'label', 'wicket', 'quality form'];
    $active_class = 'active';
    
    foreach ($tabNames as $key => $value) {
        echo '<li class="'. ($current_tab == $value ? $active_class : '') .'"><a href="http://localhost/euro-psf/items/add/'. $itemId .'/'. $value .'">'. ucwords($value).'</a></li>';
    }
?>