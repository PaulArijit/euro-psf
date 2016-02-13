<?php

$current_tab = $tab;
$tabNames = array('product', 'carton', 'core', 'cylinder', 'flexo plate', 'fusset', 'grommet', 'knife', 'label', 'wicket', 'qf one', 'qf two', 'qf three', 'qf four', 'qf five');
$controlName = array('ProductSpecifications', 'CartonSpecifications', 'CoreSpecifications', 'CylinderSpecifications', 'FlexoPlateSpecifications', 'FussetSpecifications', 'GrommetSpecifications', 'KnifeSpecifications', 'LabelSpecifications', 'WicketSpecifications', 'QfBmQualityReportDetails', 'QfExtFirstOffDetails', 'QfExtFormDetails', 'QfFirstOffDetails', 'QfPositiveReleaseDetails');
$active_class = 'active';

foreach ($tabNames as $key => $value) {
    echo '<li class="' . ($current_tab == $value ? $active_class : '') . '"><a href="http://localhost/euro-psf/'. $controlName[$key] .'/edit/' . $itemId . '">' . ucwords($value) . '</a></li>';
    
    //echo '<li class="' . ($current_tab == $value ? $active_class : '') . '"><a href="http://devachieve.com/euro-psf/'. $controlName[$key] .'/edit/' . $itemId . '">' . ucwords($value) . '</a></li>';

}
?>