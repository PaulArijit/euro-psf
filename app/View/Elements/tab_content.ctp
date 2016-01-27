<?php
    $current_tab = strtolower($tab);
    if ($current_tab == 'carton') {
        echo $this->element('item_sp/carton_specification');
    } else if ($current_tab == 'core') {
        echo $this->element('item_sp/core_specification');
    } else if ($current_tab == 'cylinder') {
        echo $this->element('item_sp/cylinder_specification');
    } else if ($current_tab == 'flexo plate') {
        echo $this->element('item_sp/flexo_plate_specification');
    } else if ($current_tab == 'fusset') {
        echo $this->element('item_sp/fusset_specification');
    } else if ($current_tab == 'grommet') {
        echo $this->element('item_sp/grommet_specification');
    } else if ($current_tab == 'knife') {
        echo $this->element('item_sp/knife_specification');
    } else if ($current_tab == 'label') {
        echo $this->element('item_sp/label_specification');
    } else if ($current_tab == 'wicket') {
        echo $this->element('item_sp/wicket_specification');
    } else if ($current_tab == 'quality form') {
        echo $this->element('item_sp/quality_form_specification');
    }else{
        echo $this->element('item_sp/product_specification');
    }
?>