<?php
$conf_categories = Configure::read('CATEGORY');
$category = $conf_categories[$this->request->data['Item']['category']];

$imgdirPath = 'app/webroot/img/uploaded/';
?>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Add New Item <a href="javascript:void(0)" onclick="printData('first-off-details-print')" class="print print-btn1" rel="first-off-details-print"><i class="fa fa-print"></i>&nbsp;Print</a></div>
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
                                    <a id="editForm" href="javascript:void(0)" style="font-size:18px; color: #ff9900" title="Edit Form" ><i class="fa fa-edit"></i> Edit Qf First Off Details</a>
                                <?php } else if ($this->Session->read('Auth.User.role') == 1) { ?>
                                    <a id="editForm" href="javascript:void(0)" style="font-size:18px; color: #ff9900" title="Edit Form" ><i class="fa fa-edit"></i> Edit Qf First Off Details</a>                                    
                                <?php } else if ($this->Session->read('Auth.User.role') == 2) { ?>

                                <?php } ?>                                
                            </div>
                        </div>
                        <div class="row">
                            <?php echo $this->Form->create('QfFirstOffDetail', array('enctype' => 'multipart/form-data')); ?>
                            <?php echo $this->Form->input('id'); ?>
                            <?php echo $this->Form->input('item_id', array('type' => 'hidden')); ?>
                            <h1 class="text-center">First Off Display Form (Bag Making)</h1>
                            <div class="col-lg-12">
                                <table class="bm-first-off-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td><label>Product Name</label></td>
                                        <td colspan="2">__________________________</td>
                                        <td></td>
                                        <td><label>Thickness (mu)</label></td>
                                        <td colspan="2">__________________________</td>
                                    </tr>
                                    <tr>
                                        <td><label>Product Code</label></td>
                                        <td colspan="2">__________________________</td>
                                        <td></td>
                                        <td><label>M/C No</label></td>
                                        <td colspan="2">__________________________</td>
                                    </tr>
                                    <tr>
                                        <td><label>W/O No</label></td>
                                        <td colspan="2">__________________________</td>
                                        <td></td>
                                        <td><label>Knife</label></td>
                                        <td colspan="2">__________________________</td>
                                    </tr>
                                    <tr>
                                        <td><label>Previous Product</label></td>
                                        <td colspan="2">__________________________</td>
                                        <td></td>
                                        <td><label>New Eyemark Code</label></td>
                                        <td colspan="2">__________________________</td>
                                    </tr>
                                    <tr>
                                        <td width="12%" class="text-right"><label>Date</label></td>
                                        <td width="12%">__________________________</td>
                                        <td width="12%" class="text-right"><label>Time</label></td>
                                        <td width="12%">________________</td>
                                        <td width="12%" class="text-right"><label>Shift</label></td>
                                        <td width="12%">M / N</td>
                                        <td width="12%" class="text-right">ID No</td>
                                        <td>_________</td>
                                    </tr>
                                </table>
                                <br/>
                            </div>
                            <div class="col-lg-6">
                                <div><label>Carton Marking</label></div>
                                <div class="panel fresh-color panel-default">                                    
                                    <div style="height: 415px;" class="panel-body text-center">
                                        <?php
                                        if ($this->request->data['QfFirstOffDetail']['ctn_marking'] == '') {
                                            echo 'No preview available';
                                        } else {
                                            echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['QfFirstOffDetail']['ctn_marking'] . '" width="420" height="370">';
                                        }
                                        ?>
                                    </div>
                                    <div class="panel-footer text-center">
                                        <?php echo $this->Form->file('ctn_marking'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <label style="margin-right: 20px; ">Outer</label>
                                    <div style="display: inline-block; border: 1px solid silver; width: 20px; height: 20px;"></div>                        
                                    <label style="margin-right: 20px; margin-left: 15px;">OK</label>            
                                    <div style="display: inline-block; border: 1px solid silver; width: 20px; height: 20px;"></div>
                                    <label style="margin-right: 20px; margin-left: 15px; ">NOT GOOD</label>
                                </div>
                                <div class="panel fresh-color panel-default">                                    
                                    <div style="height: 415px;" class="panel-body text-center">
                                        <?php
                                        if ($this->request->data['QfFirstOffDetail']['upload_two'] == '') {
                                            echo 'No preview available';
                                        } else {
                                            echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['QfFirstOffDetail']['upload_two'] . '" width="420" height="370">';
                                        }
                                        ?>
                                    </div>
                                    <div class="panel-footer text-center">
                                        <?php echo $this->Form->file('upload_two'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <table cellpadding="0" cellspacing="0" class="bm-first-off-tab2">
                                    <tr>
                                        <td><label>Carton Size</label></td>
                                        <td width="25%"></td>
                                        <td><label>Outer Size</label></td>
                                        <td width="25%"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="height: 70px;" valign="top">
                                            <label>Remark</label>
                                        </td>                                        
                                    </tr>
                                </table>
                                <br/>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <label style="margin-right: 20px; ">Label</label>
                                    <div style="display: inline-block; border: 1px solid silver; width: 20px; height: 20px;"></div>                        
                                    <label style="margin-right: 20px; margin-left: 15px;">OK</label>            
                                    <div style="display: inline-block; border: 1px solid silver; width: 20px; height: 20px;"></div>
                                    <label style="margin-right: 20px; margin-left: 15px; ">NOT GOOD</label>
                                </div>
                                <div class="panel fresh-color panel-default">                                    
                                    <div style="height: 415px;" class="panel-body text-center">
                                        <?php
                                        if ($this->request->data['QfFirstOffDetail']['upload_three'] == '') {
                                            echo 'No preview available';
                                        } else {
                                            echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['QfFirstOffDetail']['upload_three'] . '" width="420" height="370">';
                                        }
                                        ?>
                                    </div>
                                    <div class="panel-footer text-center">
                                        <?php echo $this->Form->file('upload_three'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div><label>Others</label></div>
                                <div class="panel fresh-color panel-default">                                    
                                    <div style="height: 415px;" class="panel-body text-center">
                                        <?php
                                        if ($this->request->data['QfFirstOffDetail']['upload_four'] == '') {
                                            echo 'No preview available';
                                        } else {
                                            echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['QfFirstOffDetail']['upload_four'] . '" width="420" height="370">';
                                        }
                                        ?>
                                    </div>
                                    <div class="panel-footer text-center">
                                        <?php echo $this->Form->file('upload_four'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <table cellpadding="0" cellspacing="0" class="bm-first-off-tab2">
                                    <tr>
                                        <td><label>Label Size</label></td>
                                        <td><?php echo $this->Form->input('label_size', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>Description</label></td>
                                        <td><?php echo $this->Form->input('description', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>                                    
                                </table>
                                <br/>
                            </div>
                            <div class="col-lg-12">
                                <table cellpadding="0" cellspacing="0" class="bm-first-off-tab3">
                                    <tr>
                                        <td colspan="4" class="text-center color-td"><label>PARAMETER CONTROL</label></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center color-td"><label>LINE</label></td>
                                        <td class="text-center color-td"><label>CYCLE</label></td>
                                        <td class="text-center color-td"><label>TOP TEMP. (ºC)</label></td>
                                        <td class="text-center color-td"><label>BOTTOM TEMP. (ºC)</label></td>
                                    </tr>
                                    <tr>
                                        <td><label>Left</label></td>
                                        <td><?php echo $this->Form->input('left_cycle', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Right</label></td>
                                        <td><?php echo $this->Form->input('right_cycle', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <br/>
                                <table cellpadding="0" cellspacing="0" class="bm-first-off-tab3">
                                    <tr>
                                        <td colspan="3" class="text-center color-td"><label>GLUE TANK TEMP (ºC)</label></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center color-td"><label>TANK TEMP. (ºC)</label></td>
                                        <td class="text-center color-td"><label>HOSE TEMP. (ºC)</label></td>
                                        <td class="text-center color-td"><label>GUN TEMP. (ºC)</label></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 40px;"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <br/>
                                <table cellpadding="0" cellspacing="0" class="bm-first-off-tab3">
                                    <tr>
                                        <td colspan="5" class="text-center color-td"><label>PACKING</label></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center color-td"><label>DESCRIPTION</label></td>
                                        <td width="35%" class="text-center color-td"><label>SPECIFICATION</label></td>
                                        <td width="10%" class="text-center color-td"><label>LEFT</label></td>
                                        <td width="10%" class="text-center color-td"><label>RIGHT</label></td>
                                        <td width="25%" class="text-center color-td"><label>REMARK</label></td>
                                    </tr>
                                    <tr>
                                        <td><label>FOLD</label></td>
                                        <td><?php echo $this->Form->input('fold_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>QTY PER BUNDLE  (pcs)</label></td>
                                        <td><?php echo $this->Form->input('qty_per_bundle_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>HOT PIN</label></td>
                                        <td><?php echo $this->Form->input('hot_pin_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>EMBOSSED</label></td>
                                        <td><?php echo $this->Form->input('embossed_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>GLUESPOT</label></td>
                                        <td><?php echo $this->Form->input('gluespot_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>QTY PER OUTER  (pcs)</label></td>
                                        <td><?php echo $this->Form->input('qty_per_outer_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>QTY PER CARTON  (pcs)</label></td>
                                        <td><?php echo $this->Form->input('qty_per_ctn_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>WEIGHT PER CARTON  (kg)</label></td>
                                        <td><?php echo $this->Form->input('weight_per_ctn_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <br/>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div><label>Knife Design</label></div>
                                <div class="panel fresh-color panel-default">                                    
                                    <div style="height: 415px;" class="panel-body text-center">
                                        <?php
                                        if ($this->request->data['QfFirstOffDetail']['knife_design'] == '') {
                                            echo 'No preview available';
                                        } else {
                                            echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['QfFirstOffDetail']['knife_design'] . '" width="1020" height="370">';
                                        }
                                        ?>
                                    </div>
                                    <div class="panel-footer text-center">
                                        <?php echo $this->Form->file('knife_design'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label text-right">Knife Size</label>
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->input('knife_size', array('class' => 'form-control', 'label' => FALSE)); ?>
                                    </div>
                                </div>                                                                
                            </div>
                            <div class="col-lg-12">
                                <div><label>Artwork</label></div>
                                <div class="panel fresh-color panel-default">                                    
                                    <div style="height: 415px;" class="panel-body text-center">
                                        <?php
                                        if ($this->request->data['QfFirstOffDetail']['artwork'] == '') {
                                            echo 'No preview available';
                                        } else {
                                            echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['QfFirstOffDetail']['artwork'] . '" width="1020" height="370">';
                                        }
                                        ?>
                                    </div>
                                    <div class="panel-footer text-center">
                                        <?php echo $this->Form->file('artwork'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label text-right">No Label</label>
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->input('extra_textf', array('class' => 'form-control', 'label' => FALSE)); ?><br/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <table cellpadding="0" cellspacing="0" class="bm-first-off-tab3">
                                    <tr>
                                        <td colspan="5" class="text-center color-td"><label>DIMENSION</label></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center color-td"><label>DESCRIPTION</label></td>
                                        <td width="35%" class="text-center color-td"><label>SPECIFICATION</label></td>
                                        <td width="10%" class="text-center color-td"><label>LEFT</label></td>
                                        <td width="10%" class="text-center color-td"><label>RIGHT</label></td>
                                        <td width="25%" class="text-center color-td"><label>REMARK</label></td>
                                    </tr>
                                    <tr>
                                        <td><label>GUSSET  (mm)</label></td>
                                        <td><?php echo $this->Form->input('gusset_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>CLOSED WIDTH  (mm)</label></td>
                                        <td><?php echo $this->Form->input('closed_width_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>LENGTH  (mm)</label></td>
                                        <td><?php echo $this->Form->input('length_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>PRINT FROM BOTTOM - FRONT  (mm)</label></td>
                                        <td><?php echo $this->Form->input('print_bottom_front_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>HANDLE LENGTH  (mm)</label></td>
                                        <td><?php echo $this->Form->input('handle_length_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>HANDLE WIDTH  (mm)</label></td>
                                        <td><?php echo $this->Form->input('handle_width_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>                                    
                                </table>
                                <br/>
                                <table cellpadding="0" cellspacing="0" class="bm-first-off-tab3">
                                    <tr>
                                        <td colspan="6" class="text-center color-td"><label>PERFORATION</label></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"><label>PERFORATION POSITION <br/><small>If applicable pls refer*</small></label></td>
                                        <td rowspan="2"><label>From</label></td>
                                        <td><label>Side (mm)</label></td>
                                        <td><?php echo $this->Form->input('perforation_position_side_one', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('perforation_position_side_two', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td width="25%"></td>
                                    </tr>                                    
                                    <tr>
                                        <td><label>Bottom (mm)</label></td>
                                        <td><?php echo $this->Form->input('perforation_position_bottom_one', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('perforation_position_bottom_two', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Perforation Size</label></td>
                                        <td colspan="2"></td>
                                        <td><?php echo $this->Form->input('perforation_size_one', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('perforation_size_two', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <br/>
                                <table cellpadding="0" cellspacing="0" class="bm-first-off-tab3">
                                    <tr>
                                        <td class="color-td text-center" colspan="5"><label>STRENGTH TESTING</label></td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><label>DISPENSER TEST</label></td>
                                        <td width="20%"><?php echo $this->Form->input('dispenser_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td width="22%"></td>
                                        <td width="22%"></td>
                                        <td width="21%"></td>
                                    </tr>
                                    <tr>
                                        <td><label>NO BLOCKING</label></td>
                                        <td><?php echo $this->Form->input('no_blocking', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>BAG STRENGTH</label></td>
                                        <td class="text-center"><label>/X</label></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>HANDLE SEAL</label></td>
                                        <td class="text-center"><label>/X</label></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>GUSSET SEAL</label></td>
                                        <td class="text-center"><label>/X</label></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>BASE SEAL</label></td>
                                        <td class="text-center"><label>/X</label></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>JOG TEST  (Kg/15mins)</label></td>
                                        <td><?php echo $this->Form->input('jog_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>SINGLE HANDLE LIFT  (kg)</label></td>
                                        <td><?php echo $this->Form->input('single_handle_lift', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>ULTIMATE LIFT  (kg)</label></td>
                                        <td><?php echo $this->Form->input('ultimate_lift', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <br/>
                                <label>** DISPENSER TEST: <b><small>Bag opened when pull, perforation must cut at the seal, no blocking & no debris</small></b></label>
                                <table cellpadding="0" cellspacing="0" class="bm-first-off-tab3">
                                    <tr>
                                        <td><label>MACHINE LINE</label></td>
                                        <td><label>WEIGHT/BLOCK,{x}  g</label></td>
                                        <td><label>WT/PUNCH OUT,{y}  g</label></td>
                                        <td><label>PUNCH OUT, {z}<br/>z = {y / { x + y) X 100} %</label></td>                                        
                                    </tr>
                                    <tr>
                                        <td rowspan="2"><label>Label</label></td>
                                        <td style="height: 30px;"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 30px;"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"><label>HANDLE SEAL</label></td>
                                        <td style="height: 30px;"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 30px;"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>PUNCH OUT AVERAGE {z / 4}% (GUIDELINE = %)</label></td>
                                        <td><?php echo $this->Form->input('punch_out_average', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                    </tr>                                    
                                </table>
                                <br/>
                            </div>
                            <div class="col-lg-6">
                                <table cellpadding="0" cellspacing="0" class="bm-first-off-tab3">
                                    <tr>
                                        <td class="text-center color-td" colspan="3"><label>PRODUCTION APPROVAL</label></td>
                                    </tr>
                                    <tr>
                                        <td width="33%" class="text-center color-td"><label>Leader(Initiation)</label></td>
                                        <td width="33%" class="text-center color-td"><label>Pre-Authorization</label></td>
                                        <td class="text-center color-td"><label>Final Authorization</label></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 50px;"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                    </tr>
                                </table>
                                <br/>
                                <div><label>Sample Bag Attachment</label></div>
                                <div class="panel fresh-color panel-default">                                    
                                    <div style="height: 215px;" class="panel-body text-center">
                                        <?php
                                        if ($this->request->data['QfFirstOffDetail']['sample_bag_attachment'] == '') {
                                            echo 'No preview available';
                                        } else {
                                            echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['QfFirstOffDetail']['sample_bag_attachment'] . '" width="400" height="180">';
                                        }
                                        ?>
                                    </div>
                                    <div class="panel-footer text-center">
                                        <?php echo $this->Form->file('sample_bag_attachment'); ?>
                                    </div>
                                </div>                                
                                <label>ORIGINAL: QA FILE – CONTROLLED COPY: DISPLAY </label><br/>
                                <label>Last Revision Date:</label>
                            </div>
                            <div class="col-lg-6">
                                <table cellpadding="0" cellspacing="0" class="bm-first-off-tab3">
                                    <tr>
                                        <td class="text-center color-td" colspan="3"><label>QA DEPARTMENT APPROVAL</label></td>
                                    </tr>
                                    <tr>
                                        <td width="33%" class="text-center color-td"><label>Leader(Initiation)</label></td>
                                        <td width="33%" class="text-center color-td"><label>Pre-Authorization</label></td>
                                        <td class="text-center color-td"><label>Final Authorization</label></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 50px;"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                    </tr>
                                </table>
                                <br/>
                                <div class="form-group pull-right">
                                    <label class="col-sm-4 control-label">Version:</label>
                                    <div class="col-sm-8">
                                        <?php echo $this->Form->input('version', array('class' => 'form-control', 'label' => FALSE)); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="pull-right">
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
<div id="first-off-details-print" class="print-hidden">
    <center>
        <table>
            <tr>
                <td width="90%" style="text-align: center;"><h2>First Off Display Form (Bag Making)</h2></td>
                <td><?php echo $this->Html->image('logo-print.jpg', array('alt' => 'logo', 'height' => '100')); ?></td>
            </tr>
        </table>
        <br/>
        <table class="tabprint" cellpadding="0" cellspacing="0">
            <tr>
                <td><label>Product Name</label></td>
                <td colspan="2">__________________________</td>
                <td></td>
                <td><label>Thickness (mu)</label></td>
                <td colspan="2">__________________________</td>
            </tr>
            <tr>
                <td><label>Product Code</label></td>
                <td colspan="2">__________________________</td>
                <td></td>
                <td><label>M/C No</label></td>
                <td colspan="2">__________________________</td>
            </tr>
            <tr>
                <td><label>W/O No</label></td>
                <td colspan="2">__________________________</td>
                <td></td>
                <td><label>Knife</label></td>
                <td colspan="2">__________________________</td>
            </tr>
            <tr>
                <td><label>Previous Product</label></td>
                <td colspan="2">__________________________</td>
                <td></td>
                <td><label>New Eyemark Code</label></td>
                <td colspan="2">__________________________</td>
            </tr>
            <tr>
                <td width="12%" class="text-right"><label>Date</label></td>
                <td width="12%">__________________________</td>
                <td width="12%" class="text-right"><label>Time</label></td>
                <td width="12%">________________</td>
                <td width="12%" class="text-right"><label>Shift</label></td>
                <td width="12%">M / N</td>
                <td width="12%" class="text-right">ID No</td>
                <td>_________</td>
            </tr>
        </table>
        <br/>
        <table>
            <tr>
                <td width="50%">
                    <div class="col-lg-6">
                        <div><label>Carton Marking</label></div>
                        <br/>
                        <div class="panel fresh-color panel-default">                                    
                            <div style="height: 175px; border: 1px solid silver;" class="panel-body text-center">
                                <?php
                                if ($this->request->data['QfFirstOffDetail']['ctn_marking'] == '') {
                                    echo 'No preview available';
                                } else {
                                    echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['QfFirstOffDetail']['ctn_marking'] . '" width="420" height="150">';
                                }
                                ?>
                            </div>                            
                        </div>
                    </div> 
                </td>
                <td width="50%">
                    <div class="col-lg-6">
                        <div>
                            <label style="margin-right: 20px; ">Outer</label>
                            <div style="display: inline-block; border: 1px solid silver; width: 20px; height: 20px;"></div>                        
                            <label style="margin-right: 20px; margin-left: 15px;">OK</label>            
                            <div style="display: inline-block; border: 1px solid silver; width: 20px; height: 20px;"></div>
                            <label style="margin-right: 20px; margin-left: 15px; ">NOT GOOD</label>
                        </div>
                        <div class="panel fresh-color panel-default">                                    
                            <div style="height: 175px; border: 1px solid silver;" class="panel-body text-center">
                                <?php
                                if ($this->request->data['QfFirstOffDetail']['upload_two'] == '') {
                                    echo 'No preview available';
                                } else {
                                    echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['QfFirstOffDetail']['upload_two'] . '" width="420" height="150">';
                                }
                                ?>
                            </div>                            
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <br/>
        <table cellpadding="0" cellspacing="0" class="tabprint">
            <tr>
                <td><label>Carton Size</label></td>
                <td width="25%"></td>
                <td><label>Outer Size</label></td>
                <td width="25%"></td>
            </tr>
            <tr>
                <td colspan="4" style="height: 70px;" valign="top">
                    <label>Remark</label>
                </td>                                        
            </tr>
        </table>

        <table>
            <tr>
                <td width="50%">
                    <div class="col-lg-6">
                        <div>
                            <label style="margin-right: 20px; ">Label</label>
                            <div style="display: inline-block; border: 1px solid silver; width: 20px; height: 20px;"></div>                        
                            <label style="margin-right: 20px; margin-left: 15px;">OK</label>            
                            <div style="display: inline-block; border: 1px solid silver; width: 20px; height: 20px;"></div>
                            <label style="margin-right: 20px; margin-left: 15px; ">NOT GOOD</label>
                        </div>
                        <div class="panel fresh-color panel-default">                                    
                            <div style="height: 175px; border: 1px solid silver;" class="panel-body text-center">
                                <?php
                                if ($this->request->data['QfFirstOffDetail']['upload_three'] == '') {
                                    echo 'No preview available';
                                } else {
                                    echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['QfFirstOffDetail']['upload_three'] . '" width="420" height="150">';
                                }
                                ?>
                            </div>                            
                        </div>
                    </div> 
                </td>
                <td width="50%">
                    <div class="col-lg-6">
                        <div>
                            <label style="margin-right: 20px; ">Outer</label>
                            <div style="display: inline-block; border: 1px solid silver; width: 20px; height: 20px;"></div>                        
                            <label style="margin-right: 20px; margin-left: 15px;">OK</label>            
                            <div style="display: inline-block; border: 1px solid silver; width: 20px; height: 20px;"></div>
                            <label style="margin-right: 20px; margin-left: 15px; ">NOT GOOD</label>
                        </div>
                        <div class="panel fresh-color panel-default">                                    
                            <div style="height: 175px; border: 1px solid silver;" class="panel-body text-center">
                                <?php
                                if ($this->request->data['QfFirstOffDetail']['upload_two'] == '') {
                                    echo 'No preview available';
                                } else {
                                    echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['QfFirstOffDetail']['upload_two'] . '" width="420" height="150">';
                                }
                                ?>
                            </div>                            
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <br/>
        <table cellpadding="0" cellspacing="0" class="tabprint">
            <tr>
                <td><label>Label Size</label></td>
                <td><?php echo $this->Form->value('label_size'); ?></td>
                <td><label>Description</label></td>
                <td><?php echo $this->Form->value('description'); ?></td>
            </tr>                                    
        </table>
        <br/>
        <table cellpadding="0" cellspacing="0" class="tabprint">
            <tr>
                <td colspan="4" class="text-center color-td"><label>PARAMETER CONTROL</label></td>
            </tr>
            <tr>
                <td class="text-center color-td"><label>LINE</label></td>
                <td class="text-center color-td"><label>CYCLE</label></td>
                <td class="text-center color-td"><label>TOP TEMP. (ºC)</label></td>
                <td class="text-center color-td"><label>BOTTOM TEMP. (ºC)</label></td>
            </tr>
            <tr>
                <td><label>Left</label></td>
                <td><?php echo $this->Form->value('left_cycle'); ?></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>Right</label></td>
                <td><?php echo $this->Form->value('right_cycle'); ?></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <br/>
        <div style="page-break-after:always"></div>
        <br/>
        <br/>
        <table cellpadding="0" cellspacing="0" class="tabprint">
            <tr>
                <td colspan="3" class="text-center color-td"><label>GLUE TANK TEMP (ºC)</label></td>
            </tr>
            <tr>
                <td class="text-center color-td"><label>TANK TEMP. (ºC)</label></td>
                <td class="text-center color-td"><label>HOSE TEMP. (ºC)</label></td>
                <td class="text-center color-td"><label>GUN TEMP. (ºC)</label></td>
            </tr>
            <tr>
                <td style="height: 40px;"></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <br/>
        <table cellpadding="0" cellspacing="0" class="tabprint">
            <tr>
                <td colspan="5" class="text-center color-td"><label>PACKING</label></td>
            </tr>
            <tr>
                <td class="text-center color-td"><label>DESCRIPTION</label></td>
                <td width="35%" class="text-center color-td"><label>SPECIFICATION</label></td>
                <td width="10%" class="text-center color-td"><label>LEFT</label></td>
                <td width="10%" class="text-center color-td"><label>RIGHT</label></td>
                <td width="25%" class="text-center color-td"><label>REMARK</label></td>
            </tr>
            <tr>
                <td><label>FOLD</label></td>
                <td><?php echo $this->Form->value('fold_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>QTY PER BUNDLE  (pcs)</label></td>
                <td><?php echo $this->Form->value('qty_per_bundle_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>HOT PIN</label></td>
                <td><?php echo $this->Form->value('hot_pin_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>EMBOSSED</label></td>
                <td><?php echo $this->Form->value('embossed_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>GLUESPOT</label></td>
                <td><?php echo $this->Form->value('gluespot_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>QTY PER OUTER  (pcs)</label></td>
                <td><?php echo $this->Form->value('qty_per_outer_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>QTY PER CARTON  (pcs)</label></td>
                <td><?php echo $this->Form->value('qty_per_ctn_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>WEIGHT PER CARTON  (kg)</label></td>
                <td><?php echo $this->Form->value('weight_per_ctn_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        
        <br/>
        <div class="col-lg-12 col-md-12">
            <div><label>Knife Design</label></div>
            <div class="panel fresh-color panel-default">                                    
                <div style="height: 175px; border: 1px solid silver;" class="panel-body text-center">
                    <?php
                    if ($this->request->data['QfFirstOffDetail']['knife_design'] == '') {
                        echo 'No preview available';
                    } else {
                        echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['QfFirstOffDetail']['knife_design'] . '" width="400" height="150">';
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label text-right">Knife Size</label>
                <div class="col-sm-4" style="text-align: left;">
                    <?php echo $this->Form->value('knife_size'); ?>
                </div>
            </div>                                                                
        </div>
        <br/>
        <div class="col-lg-12">
            <div><label>Artwork</label></div>
            <div class="panel fresh-color panel-default">                                    
                <div style="height: 175px; border: 1px solid silver;" class="panel-body text-center">
                    <?php
                    if ($this->request->data['QfFirstOffDetail']['artwork'] == '') {
                        echo 'No preview available';
                    } else {
                        echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['QfFirstOffDetail']['artwork'] . '" width="400" height="150">';
                    }
                    ?>
                </div>                
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label text-right">No Label</label>
                <div class="col-sm-4">
                    <?php echo $this->Form->value('extra_textf'); ?><br/>
                </div>
            </div>
        </div>
        <br/>
        <table cellpadding="0" cellspacing="0" class="tabprint">
            <tr>
                <td colspan="5" class="text-center color-td"><label>DIMENSION</label></td>
            </tr>
            <tr>
                <td class="text-center color-td"><label>DESCRIPTION</label></td>
                <td width="35%" class="text-center color-td"><label>SPECIFICATION</label></td>
                <td width="10%" class="text-center color-td"><label>LEFT</label></td>
                <td width="10%" class="text-center color-td"><label>RIGHT</label></td>
                <td width="25%" class="text-center color-td"><label>REMARK</label></td>
            </tr>
            <tr>
                <td><label>GUSSET  (mm)</label></td>
                <td><?php echo $this->Form->value('gusset_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>CLOSED WIDTH  (mm)</label></td>
                <td><?php echo $this->Form->value('closed_width_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>LENGTH  (mm)</label></td>
                <td><?php echo $this->Form->value('length_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>PRINT FROM BOTTOM - FRONT  (mm)</label></td>
                <td><?php echo $this->Form->value('print_bottom_front_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>HANDLE LENGTH  (mm)</label></td>
                <td><?php echo $this->Form->value('handle_length_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>HANDLE WIDTH  (mm)</label></td>
                <td><?php echo $this->Form->value('handle_width_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>                                    
        </table>
        <br/>
        <div style="page-break-after:always"></div>
        <br/>
        <br/>
        <table cellpadding="0" cellspacing="0" class="tabprint">
            <tr>
                <td colspan="6" class="text-center color-td"><label>PERFORATION</label></td>
            </tr>
            <tr>
                <td rowspan="2"><label>PERFORATION POSITION <br/><small>If applicable pls refer*</small></label></td>
                <td rowspan="2"><label>From</label></td>
                <td><label>Side (mm)</label></td>
                <td><?php echo $this->Form->value('perforation_position_side_one'); ?></td>
                <td><?php echo $this->Form->value('perforation_position_side_two'); ?></td>
                <td width="25%"></td>
            </tr>                                    
            <tr>
                <td><label>Bottom (mm)</label></td>
                <td><?php echo $this->Form->value('perforation_position_bottom_one'); ?></td>
                <td><?php echo $this->Form->value('perforation_position_bottom_two'); ?></td>
                <td></td>
            </tr>
            <tr>
                <td><label>Perforation Size</label></td>
                <td colspan="2"></td>
                <td><?php echo $this->Form->value('perforation_size_one'); ?></td>
                <td><?php echo $this->Form->value('perforation_size_two'); ?></td>
                <td></td>
            </tr>
        </table>
        <br/>
        <table cellpadding="0" cellspacing="0" class="tabprint">
            <tr>
                <td class="color-td text-center" colspan="5"><label>STRENGTH TESTING</label></td>
            </tr>
            <tr>
                <td width="15%"><label>DISPENSER TEST</label></td>
                <td width="20%"><?php echo $this->Form->value('dispenser_test'); ?></td>
                <td width="22%"></td>
                <td width="22%"></td>
                <td width="21%"></td>
            </tr>
            <tr>
                <td><label>NO BLOCKING</label></td>
                <td><?php echo $this->Form->value('no_blocking'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>BAG STRENGTH</label></td>
                <td class="text-center"><label>/X</label></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>HANDLE SEAL</label></td>
                <td class="text-center"><label>/X</label></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>GUSSET SEAL</label></td>
                <td class="text-center"><label>/X</label></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>BASE SEAL</label></td>
                <td class="text-center"><label>/X</label></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>JOG TEST  (Kg/15mins)</label></td>
                <td><?php echo $this->Form->value('jog_test'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>SINGLE HANDLE LIFT  (kg)</label></td>
                <td><?php echo $this->Form->value('single_handle_lift'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>ULTIMATE LIFT  (kg)</label></td>
                <td><?php echo $this->Form->value('ultimate_lift'); ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <br/>
        <label>** DISPENSER TEST: <b><small>Bag opened when pull, perforation must cut at the seal, no blocking & no debris</small></b></label>
        <table cellpadding="0" cellspacing="0" class="tabprint">
            <tr>
                <td><label>MACHINE LINE</label></td>
                <td><label>WEIGHT/BLOCK,{x}  g</label></td>
                <td><label>WT/PUNCH OUT,{y}  g</label></td>
                <td><label>PUNCH OUT, {z}<br/>z = {y / { x + y) X 100} %</label></td>                                        
            </tr>
            <tr>
                <td rowspan="2"><label>Label</label></td>
                <td style="height: 30px;"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="height: 30px;"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="2"><label>HANDLE SEAL</label></td>
                <td style="height: 30px;"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="height: 30px;"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"><label>PUNCH OUT AVERAGE {z / 4}% (GUIDELINE = %)</label></td>
                <td><?php echo $this->Form->value('punch_out_average'); ?></td>
                <td></td>
            </tr>                                    
        </table>
        <br/>
        <table>
            <tr>
                <td width="48%">
                    <div class="col-lg-6">
                        <table cellpadding="0" cellspacing="0" class="tabprint">
                            <tr>
                                <td class="text-center color-td" colspan="3"><label>PRODUCTION APPROVAL</label></td>
                            </tr>
                            <tr>
                                <td width="33%" class="text-center color-td"><label>Leader(Initiation)</label></td>
                                <td width="33%" class="text-center color-td"><label>Pre-Authorization</label></td>
                                <td class="text-center color-td"><label>Final Authorization</label></td>
                            </tr>
                            <tr>
                                <td style="height: 50px;"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                            </tr>
                        </table>
                        <br/>
                        <div><label>Sample Bag Attachment</label></div>
                        <div class="panel fresh-color panel-default">                                    
                            <div style="height: 105px; border: 0px solid silver;" class="panel-body text-center">
                                <?php
                                if ($this->request->data['QfFirstOffDetail']['sample_bag_attachment'] == '') {
                                    echo 'No preview available';
                                } else {
                                    echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['QfFirstOffDetail']['sample_bag_attachment'] . '" width="200" height="100">';
                                }
                                ?>
                            </div>                            
                        </div>                                
                        <label>ORIGINAL: QA FILE – CONTROLLED COPY: DISPLAY </label><br/>
                        <label>Last Revision Date:</label>
                    </div>
                </td>
                <td width="4%">&nbsp;</td>
                <td style="vertical-align: top">
                    <div class="col-lg-6">
                        <table cellpadding="0" cellspacing="0" class="tabprint">
                            <tr>
                                <td class="text-center color-td" colspan="3"><label>QA DEPARTMENT APPROVAL</label></td>
                            </tr>
                            <tr>
                                <td width="33%" class="text-center color-td"><label>Leader(Initiation)</label></td>
                                <td width="33%" class="text-center color-td"><label>Pre-Authorization</label></td>
                                <td class="text-center color-td"><label>Final Authorization</label></td>
                            </tr>
                            <tr>
                                <td style="height: 50px;"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                            </tr>
                        </table>
                        <br/>
                        <div class="form-group pull-right">
                            <label class="col-sm-4 control-label">Version:</label>
                            <div class="col-sm-8">
                                <?php echo $this->Form->value('version'); ?>
                            </div>
                        </div>
                    </div>
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
         
    $('#editForm').on('click', function(){
        $('input').removeAttr('disabled');
        $('textarea').removeAttr('disabled');
        $('select').removeAttr('disabled');
        $('input#file').removeAttr('disabled');
        $('button').removeAttr('disabled');
    });     

</script>