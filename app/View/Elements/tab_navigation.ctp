<?php

$current_tab = $tab;
$tabNames = array('product', 'carton', 'dispenser', 'plane board', 'carton top', 'carton bottom', 'layer pad', 'core', 'cylinder', 'flexo plate', 'fusset', 'grommet', 'knife', 'knife top', 'knife bottom', 'label', 'wicket', 'bmqr', 'efo', 'ofo', 'lhf', 'efd', 'fod', 'prd');
$controlName = array('ProductSpecifications', 'CartonSpecifications', 'DispenserSpecifications', 'PlaneBoardSpecifications', 'CartonTopSpecifications', 'CartonBottomSpecifications', 'LayerPadSpecifications', 'CoreSpecifications', 'CylinderSpecifications', 'FlexoPlateSpecifications', 'FussetSpecifications', 'GrommetSpecifications', 'KnifeSpecifications', 'KnifeTopSpecifications', 'KnifeBottomSpecifications', 'LabelSpecifications', 'WicketSpecifications', 'QfBmQualityReportDetails', 'QfExtFirstOffDetails', 'QfOuterFirstOffDetails', 'QfLoopHandleFirstOffDetails', 'QfExtFormDetails', 'QfFirstOffDetails', 'QfPositiveReleaseDetails');
$active_class = 'active';

foreach ($tabNames as $key => $value) {
    echo '<li class="' . ($current_tab == $value ? $active_class : '') . '"><a href="http://localhost/euro-psf/'. $controlName[$key] .'/edit/' . $itemId . '">' . ucwords($value) . '</a></li>';
    
    //echo '<li class="' . ($current_tab == $value ? $active_class : '') . '"><a href="http://devachieve.com/euro-psf/'. $controlName[$key] .'/edit/' . $itemId . '">' . ucwords($value) . '</a></li>';

}
?>