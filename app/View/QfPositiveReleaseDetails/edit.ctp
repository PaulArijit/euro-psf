<?php
$conf_categories = Configure::read('CATEGORY');
$category = $conf_categories[$this->request->data['Item']['category']];
?>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Add New Item</div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <dl>
                                <dt><?php echo __('Product Description'); ?></dt>
                                <dd>
                                    <?php echo $this->request->data['Item']['description']; ?>
                                    &nbsp;
                                </dd>
                                <dt><?php echo __('Product Category'); ?></dt>
                                <dd>
                                    <?php echo $category; ?>
                                    &nbsp;
                                </dd>
                                <dt><?php echo __('Sapcode'); ?></dt>
                                <dd>
                                    <?php echo $this->request->data['Item']['sapcode']; ?>
                                    &nbsp;
                                </dd>
                            </dl>
                        </div>
                        <div class="panel-footer text-right">
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', 'controller' => 'Items', $this->request->data['Item']['id']), array('type' => 'button', 'class' => 'btn btn-success')); ?>
                        </div>
                    </div>
                </div>
            </div>	
            <!--tab panel start-->									
            <div class="card-body no-padding">               
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul role="tablist" class="nav nav-tabs">
                        <?php echo $this->element('tab_navigation'); ?>
                    </ul>    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="row">
                            <h1 class="text-center">POSITIVE RELEASE TEST REPORT</h1>
                            <div class="col-lg-12">
                                <div class="panel panel-info">
                                    <div class="panel-heading">SELF INSPECTION REPORT</div>
                                    <div class="panel-body">
                                        <label>SUPPLIER / FACTORY :</label>_______________________________________<br/>
                                        <label>PRODUCT NAME (THICKNESS) :</label>_________________________________<br/>
                                        <label>PO NUMBER :</label>_______________________________________<br/>
                                        <label>QUANTITY :</label>_______________________________________<br/>
                                        <label>CONTAINER NUMBER :</label>_______________________________________<br/>
                                        <label>LOADING DATE :</label>_______________________________________<br/>
                                        <label>DATE :</label>_______________________________________<br/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <table class="positive-release-tab1" cellspacing="0" cellpadding="0" id="posReleaseTab">
                                    <tr>
                                        <td class="text-center color-td" colspan="17"><label>PHYSICAL TEST</label></td>
                                    </tr>
                                    <tr class="lab-color-tr">
                                        <td width="25%" colspan="2">&nbsp;</td>
                                        <td width="5%" class="text-center"><label>Unit</label></td>
                                        <td width="5%" class="text-center"><label>Std</label></td>
                                        <td width="5%" class="text-center"><label>Min</label></td>
                                        <td width="5%" class="text-center"><label>Max</label></td>
                                        <td width="5%" class="text-center"><label>1</label></td>
                                        <td width="5%" class="text-center"><label>2</label></td>
                                        <td width="5%" class="text-center"><label>3</label></td>
                                        <td width="5%" class="text-center"><label>4</label></td>
                                        <td width="5%" class="text-center"><label>5</label></td>
                                        <td width="5%" class="text-center"><label>6</label></td>
                                        <td width="5%" class="text-center"><label>7</label></td>
                                        <td width="5%" class="text-center"><label>8</label></td>
                                        <td width="5%" class="text-center"><label>AVERAGE</label></td>
                                        <td width="7%" class="text-center"><label>STD DEV</label></td>
                                        <td width="3%" style="color: #00cc66;"><button id="showAllTr"><i class="fa fa-refresh"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td" colspan="2"><label>Bag Weight</label></td>
                                        <td class="text-center lab-color-td">g</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center" style="color: red;"><button class="btnRemove"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td" colspan="2"><label>Vacuum Pack Weight</label></td>
                                        <td class="text-center lab-color-td">kg</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center" style="color: red;"><button class="btnRemove"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td" rowspan="2"><label>Thickness</label></td>
                                        <td class="text-center lab-color-td"><label>Average Thickness</label></td>
                                        <td class="text-center lab-color-td">mu</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td rowspan="2" class="text-center" style="color: red;"><button class="btnRemove"><i class="fa fa-close"></i></button></td>                                        
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td"><label>Spot Thickness</label></td>
                                        <td class="text-center lab-color-td">mu</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td" colspan="2"><label>Opacity</label></td>
                                        <td class="text-center lab-color-td">%</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center" style="color: red;"><button class="btnRemove"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td"><label>Dart impact</label></td>
                                        <td class="text-center lab-color-td"><label>Weight</label></td>
                                        <td class="text-center lab-color-td">g</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center" style="color: red;"><button class="btnRemove"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td" rowspan="2"><label>Tensile Strength</label></td>
                                        <td class="text-center lab-color-td"><label>MD</label></td>
                                        <td class="text-center lab-color-td">N/15mm</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td rowspan="2" class="text-center" style="color: red;"><button class="btnRemove"><i class="fa fa-close"></i></button></td>                                        
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td"><label>CD</label></td>
                                        <td class="text-center lab-color-td">N/15mm</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td" colspan="2"><label>Tape Test*</label></td>
                                        <td class="text-center lab-color-td">Pass/Fail</td>
                                        <td colspan="3"><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center" style="color: red;"><button class="btnRemove"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td" colspan="2"><label>Hot Pin Collection</label></td>
                                        <td class="text-center lab-color-td">mm</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center" style="color: red;"><button class="btnRemove"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td" colspan="2"><label>Barcode Scanner</label></td>
                                        <td class="text-center lab-color-td">Scanable</td>
                                        <td colspan="3"><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center" style="color: red;"><button class="btnRemove"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td" rowspan="2"><label>Printing Perform</label></td>
                                        <td class="text-center lab-color-td"><label>Surface Treatment</label></td>
                                        <td class="text-center lab-color-td">38 Dyne</td>
                                        <td colspan="3"><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td rowspan="2" class="text-center" style="color: red;"><button class="btnRemove"><i class="fa fa-close"></i></button></td>                                        
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td"><label>Color Fastness</label></td>
                                        <td class="text-center lab-color-td">Pass/Fail</td>
                                        <td colspan="3"><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="color-td text-center" colspan="17"><label>PERFORMANCE TEST</label></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td"><label>Jog Test Intertek</label></td>
                                        <td class="text-center lab-color-td"><label>10kg, 10 minutes, 120 rpm, 1200cycles</label></td>
                                        <td class="text-center lab-color-td">kg</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center" style="color: red;"><button class="btnRemove"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td" colspan="2"><label>Ultimate lift</label></td>
                                        <td class="text-center lab-color-td">kg</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center" style="color: red;"><button class="btnRemove"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td" rowspan="6"><label>Bag Dimension</label></td>
                                        <td class="text-center lab-color-td"><label>Handle length</label></td>
                                        <td class="text-center lab-color-td">mm</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center" rowspan="6" style="color: red;"><button class="btnRemove"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td"><label>Handle width</label></td>
                                        <td class="text-center lab-color-td">mm</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td"><label>Bag length</label></td>
                                        <td class="text-center lab-color-td">mm</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td"><label>Open width</label></td>
                                        <td class="text-center lab-color-td">mm</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td"><label>Closed width</label></td>
                                        <td class="text-center lab-color-td">mm</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td"><label>Gusset fold(opened)</label></td>
                                        <td class="text-center lab-color-td">mm</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td" rowspan="3"><label>Tensile Seal Test</label></td>
                                        <td class="text-center lab-color-td"><label>Handle Seal</label></td>
                                        <td class="text-center lab-color-td">N/15mm</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center" rowspan="3" style="color: red;"><button class="btnRemove"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td"><label>Bottom Gusset Seal</label></td>
                                        <td class="text-center lab-color-td">N/15mm</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td"><label>Base Seal</label></td>
                                        <td class="text-center lab-color-td">N/15mm</td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-6">
                                <table class="positive-release-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>Inspected By:</td>
                                        <td>Verified By:</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 60px;"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>QA-Inspector</label></td>
                                        <td><label>QA-Executive</label></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-6">
                                <table class="positive-release-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>Received By:</label></td>
                                        <td>Approved By:</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 60px;"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>QA-Manager</label></td>
                                        <td><label>Factory Manager</label></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>										
            <!--tab panel end-->									
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#posReleaseTab").on('click', '.btnRemove', function() {
        $(this).closest('tr').toggle('slow');
    });
    $("#showAllTr").click(function() {
        $("#posReleaseTab tr").show();
    });
</script>

<!--<div class="qfPositiveReleaseDetails form">
<?php echo $this->Form->create('QfPositiveReleaseDetail'); ?>
        <fieldset>
                <legend><?php echo __('Edit Qf Positive Release Detail'); ?></legend>
<?php
echo $this->Form->input('id');
echo $this->Form->input('item_id');
echo $this->Form->input('bag_weight_std');
echo $this->Form->input('bag_weight_min');
echo $this->Form->input('bag_weight_max');
echo $this->Form->input('vac_pack_weight_std');
echo $this->Form->input('vac_pack_weight_min');
echo $this->Form->input('vac_pack_weight_max');
echo $this->Form->input('average_thickness_std');
echo $this->Form->input('average_thickness_min');
echo $this->Form->input('average_thickness_max');
echo $this->Form->input('spot_thickness_std');
echo $this->Form->input('spot_thickness_min');
echo $this->Form->input('spot_thickness_max');
echo $this->Form->input('opacity_std');
echo $this->Form->input('opacity_min');
echo $this->Form->input('opacity_max');
echo $this->Form->input('dart_impact_weight_std');
echo $this->Form->input('dart_impact_weight_min');
echo $this->Form->input('dart_impact_weight_max');
echo $this->Form->input('tensile_strength_md_std');
echo $this->Form->input('tensile_strength_md_min');
echo $this->Form->input('tensile_strength_md_max');
echo $this->Form->input('tensile_strength_cd_std');
echo $this->Form->input('tensile_strength_cd_min');
echo $this->Form->input('tensile_strength_cd_max');
echo $this->Form->input('tape_test');
echo $this->Form->input('hotpin_collection_std');
echo $this->Form->input('hotpin_collection_min');
echo $this->Form->input('hotpin_collection_max');
echo $this->Form->input('barcode_scanner');
echo $this->Form->input('surface_treatment');
echo $this->Form->input('color_fastness');
echo $this->Form->input('jog_test_intertek_std');
echo $this->Form->input('jog_test_intertek_min');
echo $this->Form->input('jog_test_intertek_max');
echo $this->Form->input('ultimate_lift_std');
echo $this->Form->input('ultimate_lift_min');
echo $this->Form->input('ultimate_lift_max');
echo $this->Form->input('handle_length_std');
echo $this->Form->input('handle_length_min');
echo $this->Form->input('handle_length_max');
echo $this->Form->input('handle_width_std');
echo $this->Form->input('handle_width_min');
echo $this->Form->input('handle_width_max');
echo $this->Form->input('bag_length_std');
echo $this->Form->input('bag_length_min');
echo $this->Form->input('bag_length_max');
echo $this->Form->input('open_width_std');
echo $this->Form->input('open_width_min');
echo $this->Form->input('open_width_max');
echo $this->Form->input('closed_width_std');
echo $this->Form->input('closed_width_min');
echo $this->Form->input('closed_width_max');
echo $this->Form->input('gusset_fold_std');
echo $this->Form->input('gusset_fold_min');
echo $this->Form->input('gusset_fold_max');
echo $this->Form->input('handle_seal_std');
echo $this->Form->input('handle_seal_min');
echo $this->Form->input('handle_seal_max');
echo $this->Form->input('bottom_gusset_seal_std');
echo $this->Form->input('bottom_gusset_seal_min');
echo $this->Form->input('bottom_gusset_seal_max');
echo $this->Form->input('base_seal_std');
echo $this->Form->input('base_seal_min');
echo $this->Form->input('base_seal_max');
?>
        </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>

                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('QfPositiveReleaseDetail.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('QfPositiveReleaseDetail.id'))); ?></li>
                <li><?php echo $this->Html->link(__('List Qf Positive Release Details'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
        </ul>
</div>-->
