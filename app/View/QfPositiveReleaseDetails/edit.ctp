<?php
$conf_categories = Configure::read('CATEGORY');
$category = $conf_categories[$this->request->data['Item']['category']];
?>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Add New Item <a href="javascript:void(0)" onclick="printData('qf-positive-release-details')" class="print print-btn1" rel="qf-positive-release-details"><i class="fa fa-print"></i>&nbsp;Print</a></div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-xs-10">
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
                            <div class="col-xs-2">
                                <?php
                                if ($this->request->data['Item']['status'] == 1) {
                                    echo $this->Html->image('approved.jpg', array('alt' => 'Approved', 'height' => '100'));
                                } else {
                                    echo $this->Html->image('notapproved.png', array('alt' => 'Not Approved', 'height' => '70'));
                                }
                                ?>
                            </div>
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
                            <div class="col-lg-8"></div>
                            <div class="col-lg-4 text-right">
                                <?php if ($this->Session->read('Auth.User.role') == 100) { ?>
                                    <a id="editForm" href="javascript:void(0)" style="font-size:18px; color: #ff9900" title="Edit Form" ><i class="fa fa-edit"></i> Edit Qf Positive Release</a>
                                <?php } else if ($this->Session->read('Auth.User.role') == 1) { ?>
                                    <a id="editForm" href="javascript:void(0)" style="font-size:18px; color: #ff9900" title="Edit Form" ><i class="fa fa-edit"></i> Edit Qf Positive Release</a>                                    
                                <?php } else if ($this->Session->read('Auth.User.role') == 2) { ?>

                                <?php } ?>                                
                            </div>
                        </div>
                        <div class="row">
                            <?php echo $this->Form->create('QfPositiveReleaseDetail'); ?>
                            <?php echo $this->Form->input('id'); ?>
                            <?php echo $this->Form->input('item_id', array('type' => 'hidden')); ?>
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
                                        <td class="text-center color-td" colspan="16"><label>PHYSICAL TEST</label></td>
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
                                    </tr>
                                    <tr>
                                        <td class="text-center lab-color-td" colspan="2"><label>Bag Weight</label></td>
                                        <td class="text-center lab-color-td">g</td>
                                        <td><?php echo $this->Form->input('bag_weight_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('bag_weight_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('bag_weight_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center lab-color-td" colspan="2"><label>Vacuum Pack Weight</label></td>
                                        <td class="text-center lab-color-td">kg</td>
                                        <td><?php echo $this->Form->input('vac_pack_weight_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('vac_pack_weight_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('vac_pack_weight_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center lab-color-td" rowspan="2"><label>Thickness</label></td>
                                        <td class="text-center lab-color-td"><label>Average Thickness</label></td>
                                        <td class="text-center lab-color-td">mu</td>
                                        <td><?php echo $this->Form->input('average_thickness_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('average_thickness_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('average_thickness_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center lab-color-td"><label>Spot Thickness</label></td>
                                        <td class="text-center lab-color-td">mu</td>
                                        <td><?php echo $this->Form->input('spot_thickness_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('spot_thickness_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('spot_thickness_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><?php echo $this->Form->input('opacity_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('opacity_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('opacity_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center lab-color-td"><label>Dart impact</label></td>
                                        <td class="text-center lab-color-td"><label>Weight</label></td>
                                        <td class="text-center lab-color-td">g</td>
                                        <td><?php echo $this->Form->input('dart_impact_weight_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('dart_impact_weight_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('dart_impact_weight_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center lab-color-td" rowspan="2"><label>Tensile Strength</label></td>
                                        <td class="text-center lab-color-td"><label>MD</label></td>
                                        <td class="text-center lab-color-td">N/15mm</td>
                                        <td><?php echo $this->Form->input('tensile_strength_md_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('tensile_strength_md_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('tensile_strength_md_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center lab-color-td"><label>CD</label></td>
                                        <td class="text-center lab-color-td">N/15mm</td>
                                        <td><?php echo $this->Form->input('tensile_strength_cd_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('tensile_strength_cd_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('tensile_strength_cd_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td colspan="3"><?php echo $this->Form->input('tape_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center lab-color-td" colspan="2"><label>Hot Pin Collection</label></td>
                                        <td class="text-center lab-color-td">mm</td>
                                        <td><?php echo $this->Form->input('hotpin_collection_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('hotpin_collection_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('hotpin_collection_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center lab-color-td" colspan="2"><label>Barcode Scanner</label></td>
                                        <td class="text-center lab-color-td">Scanable</td>
                                        <td colspan="3"><?php echo $this->Form->input('barcode_scanner', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center lab-color-td" rowspan="2"><label>Printing Perform</label></td>
                                        <td class="text-center lab-color-td"><label>Surface Treatment</label></td>
                                        <td class="text-center lab-color-td">38 Dyne</td>
                                        <td colspan="3"><?php echo $this->Form->input('surface_treatment', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center lab-color-td"><label>Color Fastness</label></td>
                                        <td class="text-center lab-color-td">Pass/Fail</td>
                                        <td colspan="3"><?php echo $this->Form->input('color_fastness', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><?php echo $this->Form->input('jog_test_intertek_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('jog_test_intertek_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('jog_test_intertek_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center lab-color-td" colspan="2"><label>Ultimate lift</label></td>
                                        <td class="text-center lab-color-td">kg</td>
                                        <td><?php echo $this->Form->input('ultimate_lift_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('ultimate_lift_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('ultimate_lift_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center lab-color-td" rowspan="6"><label>Bag Dimension</label></td>
                                        <td class="text-center lab-color-td"><label>Handle length</label></td>
                                        <td class="text-center lab-color-td">mm</td>
                                        <td><?php echo $this->Form->input('handle_length_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('handle_length_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('handle_length_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center lab-color-td"><label>Handle width</label></td>
                                        <td class="text-center lab-color-td">mm</td>
                                        <td><?php echo $this->Form->input('handle_width_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('handle_width_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('handle_width_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><?php echo $this->Form->input('bag_length_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('bag_length_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('bag_length_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><?php echo $this->Form->input('open_width_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('open_width_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('open_width_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><?php echo $this->Form->input('closed_width_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('closed_width_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('closed_width_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><?php echo $this->Form->input('gusset_fold_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('gusset_fold_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('gusset_fold_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><?php echo $this->Form->input('handle_seal_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('handle_seal_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('handle_seal_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center lab-color-td"><label>Bottom Gusset Seal</label></td>
                                        <td class="text-center lab-color-td">N/15mm</td>
                                        <td><?php echo $this->Form->input('bottom_gusset_seal_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('bottom_gusset_seal_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('bottom_gusset_seal_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><?php echo $this->Form->input('base_seal_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('base_seal_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('base_seal_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                <br/>
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
                                <br/>
                                <div class="form-group pull-left">
                                    <label class="col-sm-4 control-label">REV No:</label>
                                    <div class="col-sm-8">
                                        <?php echo $this->Form->input('rev_no', array('class' => 'form-control', 'label' => FALSE)); ?>
                                    </div>
                                </div>
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
                            <div class="col-lg-12 ">
                                <div class="pull-right noprint">
                                    <button  class="btn btn-success" type="submit" onclick="return confirm('Are you sure you want to continue')" >Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>										
            <!--tab panel end-->									
        </div>
    </div>
</div>
<!--Print Section-->
<div id="qf-positive-release-details" class="print-hidden">
    <center>
        <table>
            <tr>
                <td width="90%" style="text-align: center;"><h2>POSITIVE RELEASE TEST REPORT</h2></td>
                <td><?php echo $this->Html->image('logo-print.jpg', array('alt' => 'logo', 'height' => '100')); ?></td>
            </tr>
        </table>
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">SELF INSPECTION REPORT</div>
                <div style="border: 1px solid silver; padding: 10px; text-align: left;">
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
        <br/>
        <table class="tabprint" cellspacing="0" cellpadding="0">
            <tr>
                <td class="text-center color-td" colspan="16"><label>PHYSICAL TEST</label></td>
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
            </tr>
            <tr>
                <td class="text-center lab-color-td" colspan="2"><label>Bag Weight</label></td>
                <td class="text-center lab-color-td">g</td>
                <td><?php echo $this->Form->value('bag_weight_std'); ?></td>
                <td><?php echo $this->Form->value('bag_weight_min'); ?></td>
                <td><?php echo $this->Form->input('bag_weight_max'); ?></td>
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
                <td class="text-center lab-color-td" colspan="2"><label>Vacuum Pack Weight</label></td>
                <td class="text-center lab-color-td">kg</td>
                <td><?php echo $this->Form->input('vac_pack_weight_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('vac_pack_weight_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('vac_pack_weight_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td class="text-center lab-color-td" rowspan="2"><label>Thickness</label></td>
                <td class="text-center lab-color-td"><label>Average Thickness</label></td>
                <td class="text-center lab-color-td">mu</td>
                <td><?php echo $this->Form->input('average_thickness_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('average_thickness_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('average_thickness_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td class="text-center lab-color-td"><label>Spot Thickness</label></td>
                <td class="text-center lab-color-td">mu</td>
                <td><?php echo $this->Form->input('spot_thickness_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('spot_thickness_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('spot_thickness_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td><?php echo $this->Form->input('opacity_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('opacity_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('opacity_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td class="text-center lab-color-td"><label>Dart impact</label></td>
                <td class="text-center lab-color-td"><label>Weight</label></td>
                <td class="text-center lab-color-td">g</td>
                <td><?php echo $this->Form->input('dart_impact_weight_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('dart_impact_weight_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('dart_impact_weight_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td class="text-center lab-color-td" rowspan="2"><label>Tensile Strength</label></td>
                <td class="text-center lab-color-td"><label>MD</label></td>
                <td class="text-center lab-color-td">N/15mm</td>
                <td><?php echo $this->Form->input('tensile_strength_md_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('tensile_strength_md_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('tensile_strength_md_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td class="text-center lab-color-td"><label>CD</label></td>
                <td class="text-center lab-color-td">N/15mm</td>
                <td><?php echo $this->Form->input('tensile_strength_cd_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('tensile_strength_cd_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('tensile_strength_cd_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td colspan="3"><?php echo $this->Form->input('tape_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td class="text-center lab-color-td" colspan="2"><label>Hot Pin Collection</label></td>
                <td class="text-center lab-color-td">mm</td>
                <td><?php echo $this->Form->input('hotpin_collection_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('hotpin_collection_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('hotpin_collection_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td class="text-center lab-color-td" colspan="2"><label>Barcode Scanner</label></td>
                <td class="text-center lab-color-td">Scanable</td>
                <td colspan="3"><?php echo $this->Form->input('barcode_scanner', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td class="text-center lab-color-td" rowspan="2"><label>Printing Perform</label></td>
                <td class="text-center lab-color-td"><label>Surface Treatment</label></td>
                <td class="text-center lab-color-td">38 Dyne</td>
                <td colspan="3"><?php echo $this->Form->input('surface_treatment', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td class="text-center lab-color-td"><label>Color Fastness</label></td>
                <td class="text-center lab-color-td">Pass/Fail</td>
                <td colspan="3"><?php echo $this->Form->input('color_fastness', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td class="color-td text-center" colspan="16"><label>PERFORMANCE TEST</label></td>
            </tr>
            <tr>
                <td class="text-center lab-color-td"><label>Jog Test Intertek</label></td>
                <td class="text-center lab-color-td"><label>10kg, 10 minutes, 120 rpm, 1200cycles</label></td>
                <td class="text-center lab-color-td">kg</td>
                <td><?php echo $this->Form->input('jog_test_intertek_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('jog_test_intertek_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('jog_test_intertek_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td class="text-center lab-color-td" colspan="2"><label>Ultimate lift</label></td>
                <td class="text-center lab-color-td">kg</td>
                <td><?php echo $this->Form->input('ultimate_lift_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('ultimate_lift_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('ultimate_lift_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td class="text-center lab-color-td" rowspan="6"><label>Bag Dimension</label></td>
                <td class="text-center lab-color-td"><label>Handle length</label></td>
                <td class="text-center lab-color-td">mm</td>
                <td><?php echo $this->Form->input('handle_length_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('handle_length_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('handle_length_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td class="text-center lab-color-td"><label>Handle width</label></td>
                <td class="text-center lab-color-td">mm</td>
                <td><?php echo $this->Form->input('handle_width_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('handle_width_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('handle_width_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td><?php echo $this->Form->input('bag_length_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('bag_length_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('bag_length_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td><?php echo $this->Form->input('open_width_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('open_width_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('open_width_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td><?php echo $this->Form->input('closed_width_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('closed_width_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('closed_width_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td><?php echo $this->Form->input('gusset_fold_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('gusset_fold_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('gusset_fold_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td><?php echo $this->Form->input('handle_seal_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('handle_seal_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('handle_seal_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td class="text-center lab-color-td"><label>Bottom Gusset Seal</label></td>
                <td class="text-center lab-color-td">N/15mm</td>
                <td><?php echo $this->Form->input('bottom_gusset_seal_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('bottom_gusset_seal_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('bottom_gusset_seal_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                <td><?php echo $this->Form->input('base_seal_std', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('base_seal_min', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td><?php echo $this->Form->input('base_seal_max', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
        <br/>
        <table width="100%" cellpadding="0" cellspecing="0">
            <tr>
                <td width="45%">
                    <table class="tabprint" cellpadding="0" cellspacing="0">
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
                    <br/>
                    <label>REV NO:</label>
                    <?php echo $this->Form->value('rev_no'); ?>
                </td>
                <td width="10%"></td>
                <td width="45%">
                    <table class="tabprint" cellpadding="0" cellspacing="0">
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
                </td>
            </tr>
        </table>
    </center>
</div>
<!--Print Section-->
<script type="text/javascript">
    /********For View**********/
    $("input").attr("disabled", true);
    $("textarea").attr("disabled", true);
    $("select").attr("disabled", true);
    $('button').attr('disabled', true);
    $('input#file').attr('disabled', true);

    $('#editForm').on('click', function () {
        $('input').removeAttr('disabled');
        $('textarea').removeAttr('disabled');
        $('select').removeAttr('disabled');
        $('input#file').removeAttr('disabled');
        $('button').removeAttr('disabled');
    });

</script>
<!--<script type="text/javascript">
    $("#posReleaseTab").on('click', '.btnRemove', function() {
        $(this).closest('tr').toggle('slow');
    });
    $("#showAllTr").click(function() {
        $("#posReleaseTab tr").show();
    });
</script>-->

