<?php
$conf_categories = Configure::read('CATEGORY');
$category = $conf_categories[$this->request->data['Item']['category']];
?>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Add New Item <a href="javascript:void(0)" onclick="printData('bm-quality-report-print')" class="print print-btn1" rel="bm-quality-report-print"><i class="fa fa-print"></i>&nbsp;Print</a></div>
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
                                    <a id="editForm" href="javascript:void(0)" style="font-size:18px; color: #ff9900" title="Edit Form" ><i class="fa fa-edit"></i> Edit BM Quality Report</a>
                                <?php } else if ($this->Session->read('Auth.User.role') == 1) { ?>
                                    <a id="editForm" href="javascript:void(0)" style="font-size:18px; color: #ff9900" title="Edit Form" ><i class="fa fa-edit"></i> Edit BM Quality Report</a>                                    
                                <?php } else if ($this->Session->read('Auth.User.role') == 2) { ?>

                                <?php } ?>                                
                            </div>
                        </div>
                        <div class="row">
                            <?php echo $this->Form->create('QfBmQualityReportDetail'); ?>
                            <?php echo $this->Form->input('id'); ?>
                            <?php echo $this->Form->input('item_id', array('type' => 'hidden')); ?>
                            <h1 class="text-center">BM QUALITY REPORTS DFS</h1>
                            <div class="col-lg-12">
                                <table class="bm-quality-report-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td colspan="3" rowspan="2"><label>Product Name:<br/>Product Code:</label></td>
                                        <td><label>ID No</label></td>
                                        <td colspan="3"><?php echo $this->Form->input('id_no', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>M/C No.:</label></td>
                                        <td colspan="3"><label>T / L / S - ______________</label></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-center"><label>MORNING SHIFT</label></td>
                                        <td colspan="4" class="text-center"><label>NIGHT SHIFT</label></td>
                                    </tr>
                                    <tr class="color-tr">
                                        <td class="text-center"><label>DIMENSIONS</label></td>
                                        <td class="text-center"><label>UNITS</label></td>
                                        <td class="text-center"><label>SPECIFICATION</label></td>
                                        <td class="text-center"><label>Left</label></td>
                                        <td class="text-center"><label>Right</label></td>
                                        <td class="text-center"><label>Left</label></td>
                                        <td class="text-center"><label>Right</label></td>
                                        <td class="text-center"><label>Left</label></td>
                                        <td class="text-center"><label>Right</label></td>
                                        <td class="text-center"><label>Left</label></td>
                                        <td class="text-center"><label>Right</label></td>
                                    </tr>
                                    <tr>
                                        <td><label>Bag Weight</label></td>
                                        <td class="text-center">g</td>
                                        <td><?php echo $this->Form->input('bag_weight_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><label>Carton Weight</label></td>
                                        <td class="text-center">kg</td>
                                        <td><?php echo $this->Form->input('ctn_weight_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><label>Closed Width</label></td>
                                        <td class="text-center">mm</td>
                                        <td><?php echo $this->Form->input('closed_width_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><label>Open Width</label></td>
                                        <td class="text-center">mm</td>
                                        <td><?php echo $this->Form->input('open_width_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><label>Length</label></td>
                                        <td class="text-center">mm</td>
                                        <td><?php echo $this->Form->input('length_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><label>Handle Width</label></td>
                                        <td class="text-center">mm</td>
                                        <td><?php echo $this->Form->input('handle_width_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><label>Handle Length</label></td>
                                        <td class="text-center">mm</td>
                                        <td><?php echo $this->Form->input('handle_length_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><label>Pcs/Block</label></td>
                                        <td class="text-center">Counter</td>
                                        <td><?php echo $this->Form->input('pcs_block_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><label>Pcs/Outer</label></td>
                                        <td class="text-center">Counter</td>
                                        <td><?php echo $this->Form->input('pcs_outer_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><label>No. Of Outer</label></td>
                                        <td class="text-center">Manual</td>
                                        <td><?php echo $this->Form->input('no_of_outer_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><label>Knife Design</label></td>
                                        <td class="text-center">/X</td>
                                        <td><?php echo $this->Form->input('knife_design_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                <div class="form-group">
                                    <label class="col-sm-2 control-label text-right">Knife Design</label>
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->input('knife_design', array('class' => 'form-control', 'label' => FALSE)); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <br/>
                                <table class="bm-quality-report-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="color-td text-center" colspan="12"><label>PRINT DETAILS</label></td>
                                    </tr>
                                    <tr>                                        
                                        <td class="text-center" width="6%" rowspan="2"><label>Front</label></td>
                                        <td class="text-center" width="7%"><label>Fr. Base</label></td>
                                        <td class="text-center" width="5%">mm</td>
                                        <td width="30%"><?php echo $this->Form->input('print_front_base', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center"><label>Fr. Side</label></td>
                                        <td class="text-center">mm</td>
                                        <td><?php echo $this->Form->input('print_front_side', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center" rowspan="2"><label>Back</label></td>
                                        <td class="text-center"><label>Fr. Base</label></td>
                                        <td class="text-center">mm</td>
                                        <td><?php echo $this->Form->input('print_back_base', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td class="text-center"><label>Fr. Side</label></td>
                                        <td class="text-center">mm</td>
                                        <td><?php echo $this->Form->input('print_back_side', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                            <div class="col-lg-12">
                                <table class="bm-quality-report-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="color-td text-center" colspan="13"><label>PHYSICAL PROPERTIES</label></td>
                                    </tr>
                                    <tr>                                        
                                        <td rowspan="3" width="5%" class="text-center"><label>SEAL</label></td>
                                        <td width="7%"><label>Handle L/R</label></td>
                                        <td width="5%">Physical</td>
                                        <td width="30%" colspan="2"><?php echo $this->Form->input('handle_lr', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><label>Gusset L/R</label></td>
                                        <td>Physical</td>
                                        <td colspan="2"><?php echo $this->Form->input('gusset_lr', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td><label>Bottom/Base</label></td>
                                        <td>Physical</td>
                                        <td colspan="2"><?php echo $this->Form->input('bottom_base', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td colspan="2" class="text-center"><label>6 Step Checking</label></td>
                                        <td>Physical</td>
                                        <td colspan="2"><?php echo $this->Form->input('six_step_checking', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td colspan="2" class="text-center"><label>No Blocking</label></td>
                                        <td>Physical</td>
                                        <td colspan="2"><?php echo $this->Form->input('no_blocking', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td colspan="2" class="text-center"><label>Safety Holes</label></td>
                                        <td>Physical</td>
                                        <td colspan="2"><?php echo $this->Form->input('safty_hole', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td colspan="2" class="text-center"><label>Hot Pin</label></td>
                                        <td>Physical</td>
                                        <td colspan="2"><?php echo $this->Form->input('hot_pin', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td colspan="2" class="text-center"><label>Embossed</label></td>
                                        <td>Physical</td>
                                        <td colspan="2"><?php echo $this->Form->input('embossed', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td colspan="2" class="text-center"><label>Glue Spot</label></td>
                                        <td>Visual</td>
                                        <td colspan="2"><?php echo $this->Form->input('gluespot', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td colspan="2" class="text-center"><label>Dispenser Test</label></td>
                                        <td>Physical</td>
                                        <td colspan="2"><?php echo $this->Form->input('dispenser_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td colspan="2" class="text-center"><label>Packing</label></td>
                                        <td>Visual</td>
                                        <td colspan="2"><?php echo $this->Form->input('packing', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td colspan="2" class="text-center"><label>Carton Marking</label></td>
                                        <td>Visual</td>
                                        <td colspan="2"><?php echo $this->Form->input('ctn_marking', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                        <td colspan="2" class="text-center"><label>Jog Test</label></td>
                                        <td>kg/15min</td>
                                        <td colspan="2"><?php echo $this->Form->input('jog_test', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>                                        
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center"><label>Ultimate Lift</label></td>
                                        <td>kg</td>
                                        <td colspan="2"><?php echo $this->Form->input('ultimate_lift', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center"><label>Traceability Code</label></td>
                                        <td colspan="2" width="10%"><?php echo $this->Form->input('traceability_code_one', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td width="20%"><?php echo $this->Form->input('traceability_code_two', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center"><label>Eyemark Code</label></td>
                                        <td colspan="2" width="10%"><?php echo $this->Form->input('eyemark_code_one', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td width="20%"><?php echo $this->Form->input('eyemark_code_two', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="13">**<u><b>Dispenser Test - Bag opened when pull, perforation must cut at the seal, no blocking & debris</b></u></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center"><label>On Hold/Remarks</label></td>
                                        <td colspan="2" width="10%"><?php echo $this->Form->input('onhold_remark_one', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td width="20%"><?php echo $this->Form->input('onhold_remark_two', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>
                                    </tr>
                                </table>
                                <br/>
                            </div>
                            <div class="col-lg-6">
                                <table cellpadding="0" cellspacing="0" class="bm-quality-report-tab1">
                                    <tr>
                                        <td class="text-center color-td" colspan="2"><label>MORNING SHIFT</label></td>
                                    </tr>
                                    <tr>
                                        <td width="50%" class="text-center color-td"><label>Checked By</label></td>
                                        <td width="50%" class="text-center color-td"><label>Approved By</label></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 80px;"></td>
                                        <td></td>                                        
                                    </tr>
                                    <tr>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                    </tr>
                                </table>
                                <br/>                                
                                <label>Last Revision Date:</label>
                            </div>
                            <div class="col-lg-6">
                                <table cellpadding="0" cellspacing="0" class="bm-quality-report-tab1">
                                    <tr>
                                        <td class="text-center color-td" colspan="2"><label>NIGHT SHIFT</label></td>
                                    </tr>
                                    <tr>
                                        <td width="50%" class="text-center color-td"><label>Checked By</label></td>
                                        <td width="50%" class="text-center color-td"><label>Approved By</label></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 80px;"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                    </tr>
                                </table>
                                <br/>
                                <div class="form-group pull-right">
                                    <label class="pull-right">Leader or Above</label><br/>
                                    <label class="col-sm-4 control-label">Version:</label>
                                    <div class="col-sm-8">
                                        <?php echo $this->Form->input('version', array('class' => 'form-control', 'label' => FALSE)); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="pull-right">
                                    <button class="btn btn-success" type="submit" onclick="return confirm('Are you sure you want to continue')" >Save</button>
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
<div id="bm-quality-report-print" class="print-hidden">
    <center>        
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td width="90%" style="text-align: center;"><h2>BM Quality Report Specification</h2></td>
                <td><?php echo $this->Html->image('logo-print.jpg', array('alt' => 'logo', 'height' => '50')); ?></td>
            </tr>
        </table>
        <br/>
        <table style="width: 100%;" cellpadding="0" cellspacing="0">
            <tr>
                <td style="width: 100%; border: 1px solid silver;">
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="20%" style="text-align: center; background: #EEE; font-size: 11px;">Product Description:</td>
                            <td width="50%" style="text-align: left; font-weight: bold; padding-left: 20px; font-size: 9px;"><?php echo $this->request->data['Item']['description']; ?></td>
                        </tr>
                        <tr>
                            <td width="20%" style="text-align: center; background: #EEE; font-size: 11px;">Product Category:</td>
                            <td width="50%" style="text-align: left; font-weight: bold; padding-left: 20px; font-size: 9px;"><?php echo $category; ?></td>
                        </tr>
                        <tr>
                            <td width="20%" style="text-align: center; background: #EEE; font-size: 11px;">Sapcode:</td>
                            <td width="50%" style="text-align: left; font-weight: bold; padding-left: 20px; font-size: 9px;"><?php echo $this->request->data['Item']['sapcode']; ?></td>
                        </tr>                   
                    </table>
                </td>           
            </tr>
        </table>
        <br/>
        <table class="tabprint" cellpadding="0" cellspacing="0">
            <tr>
                <td colspan="3" rowspan="2"><label>Product Name:<br/>Product Code:</label></td>
                <td><label>ID No</label></td>
                <td colspan="3"><?php echo $this->Form->value('id_no'); ?></td>
                <td><label>M/C No.:</label></td>
                <td colspan="3"><label>T / L / S - ______________</label></td>
            </tr>
            <tr>
                <td colspan="4" class="text-center"><label>MORNING SHIFT</label></td>
                <td colspan="4" class="text-center"><label>NIGHT SHIFT</label></td>
            </tr>
            <tr class="color-tr">
                <td class="text-center"><label>DIMENSIONS</label></td>
                <td class="text-center"><label>UNITS</label></td>
                <td class="text-center"><label>SPECIFICATION</label></td>
                <td class="text-center"><label>Left</label></td>
                <td class="text-center"><label>Right</label></td>
                <td class="text-center"><label>Left</label></td>
                <td class="text-center"><label>Right</label></td>
                <td class="text-center"><label>Left</label></td>
                <td class="text-center"><label>Right</label></td>
                <td class="text-center"><label>Left</label></td>
                <td class="text-center"><label>Right</label></td>
            </tr>
            <tr>
                <td><label>Bag Weight</label></td>
                <td class="text-center">g</td>
                <td><?php echo $this->Form->value('bag_weight_specification'); ?></td>
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
                <td><label>Carton Weight</label></td>
                <td class="text-center">kg</td>
                <td><?php echo $this->Form->value('ctn_weight_specification'); ?></td>
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
                <td><label>Closed Width</label></td>
                <td class="text-center">mm</td>
                <td><?php echo $this->Form->value('closed_width_specification'); ?></td>
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
                <td><label>Open Width</label></td>
                <td class="text-center">mm</td>
                <td><?php echo $this->Form->value('open_width_specification'); ?></td>
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
                <td><label>Length</label></td>
                <td class="text-center">mm</td>
                <td><?php echo $this->Form->value('length_specification'); ?></td>
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
                <td><label>Handle Width</label></td>
                <td class="text-center">mm</td>
                <td><?php echo $this->Form->value('handle_width_specification'); ?></td>
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
                <td><label>Handle Length</label></td>
                <td class="text-center">mm</td>
                <td><?php echo $this->Form->value('handle_length_specification'); ?></td>
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
                <td><label>Pcs/Block</label></td>
                <td class="text-center">Counter</td>
                <td><?php echo $this->Form->value('pcs_block_specification'); ?></td>
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
                <td><label>Pcs/Outer</label></td>
                <td class="text-center">Counter</td>
                <td><?php echo $this->Form->value('pcs_outer_specification'); ?></td>
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
                <td><label>No. Of Outer</label></td>
                <td class="text-center">Manual</td>
                <td><?php echo $this->Form->value('no_of_outer_specification'); ?></td>
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
                <td><label>Knife Design</label></td>
                <td class="text-center">/X</td>
                <td><?php echo $this->Form->value('knife_design_specification'); ?></td>
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
        <table class="tabprint">
            <tr>
                <td>Knife Design</td>
                <td><?php echo $this->Form->value('knife_design'); ?></td>
            </tr>
        </table>
        <br/>
        <table class="tabprint" cellpadding="0" cellspacing="0">
            <tr>
                <td class="color-td text-center" colspan="12"><label>PRINT DETAILS</label></td>
            </tr>
            <tr>                                        
                <td class="text-center" width="6%" rowspan="2"><label>Front</label></td>
                <td class="text-center" width="7%"><label>Fr. Base</label></td>
                <td class="text-center" width="5%">mm</td>
                <td width="30%"><?php echo $this->Form->value('print_front_base'); ?></td>
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
                <td class="text-center"><label>Fr. Side</label></td>
                <td class="text-center">mm</td>
                <td><?php echo $this->Form->value('print_front_side'); ?></td>
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
                <td class="text-center" rowspan="2"><label>Back</label></td>
                <td class="text-center"><label>Fr. Base</label></td>
                <td class="text-center">mm</td>
                <td><?php echo $this->Form->value('print_back_base'); ?></td>
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
                <td class="text-center"><label>Fr. Side</label></td>
                <td class="text-center">mm</td>
                <td><?php echo $this->Form->value('print_back_side'); ?></td>
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
        <table class="tabprint" cellpadding="0" cellspacing="0">
            <tr>
                <td class="color-td text-center" colspan="13"><label>PHYSICAL PROPERTIES</label></td>
            </tr>
            <tr>                                        
                <td rowspan="3" width="5%" class="text-center"><label>SEAL</label></td>
                <td width="7%"><label>Handle L/R</label></td>
                <td width="5%">Physical</td>
                <td width="30%" colspan="2"><?php echo $this->Form->value('handle_lr'); ?></td>
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
                <td><label>Gusset L/R</label></td>
                <td>Physical</td>
                <td colspan="2"><?php echo $this->Form->value('gusset_lr'); ?></td>
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
                <td><label>Bottom/Base</label></td>
                <td>Physical</td>
                <td colspan="2"><?php echo $this->Form->value('bottom_base'); ?></td>
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
                <td colspan="2" class="text-center"><label>6 Step Checking</label></td>
                <td>Physical</td>
                <td colspan="2"><?php echo $this->Form->value('six_step_checking'); ?></td>
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
                <td colspan="2" class="text-center"><label>No Blocking</label></td>
                <td>Physical</td>
                <td colspan="2"><?php echo $this->Form->value('no_blocking'); ?></td>
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
                <td colspan="2" class="text-center"><label>Safety Holes</label></td>
                <td>Physical</td>
                <td colspan="2"><?php echo $this->Form->value('safty_hole'); ?></td>
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
                <td colspan="2" class="text-center"><label>Hot Pin</label></td>
                <td>Physical</td>
                <td colspan="2"><?php echo $this->Form->value('hot_pin'); ?></td>
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
                <td colspan="2" class="text-center"><label>Embossed</label></td>
                <td>Physical</td>
                <td colspan="2"><?php echo $this->Form->value('embossed'); ?></td>
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
                <td colspan="2" class="text-center"><label>Glue Spot</label></td>
                <td>Visual</td>
                <td colspan="2"><?php echo $this->Form->value('gluespot'); ?></td>
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
                <td colspan="2" class="text-center"><label>Dispenser Test</label></td>
                <td>Physical</td>
                <td colspan="2"><?php echo $this->Form->value('dispenser_test'); ?></td>
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
                <td colspan="2" class="text-center"><label>Packing</label></td>
                <td>Visual</td>
                <td colspan="2"><?php echo $this->Form->value('packing'); ?></td>
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
                <td colspan="2" class="text-center"><label>Carton Marking</label></td>
                <td>Visual</td>
                <td colspan="2"><?php echo $this->Form->value('ctn_marking'); ?></td>
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
                <td colspan="2" class="text-center"><label>Jog Test</label></td>
                <td>kg/15min</td>
                <td colspan="2"><?php echo $this->Form->value('jog_test'); ?></td>
                <td colspan="2"></td>
                <td colspan="2"></td>                                        
                <td colspan="2"></td>                                        
                <td colspan="2"></td>                                        
            </tr>
            <tr>
                <td colspan="2" class="text-center"><label>Ultimate Lift</label></td>
                <td>kg</td>
                <td colspan="2"><?php echo $this->Form->value('ultimate_lift'); ?></td>
                <td colspan="2"></td>
                <td colspan="2"></td>                                        
                <td colspan="2"></td>                                        
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="2" class="text-center"><label>Traceability Code</label></td>
                <td colspan="2" width="10%"><?php echo $this->Form->value('traceability_code_one'); ?></td>
                <td width="20%"><?php echo $this->Form->value('traceability_code_two'); ?></td>
                <td colspan="2"></td>
                <td colspan="2"></td>                                        
                <td colspan="2"></td>                                        
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="2" class="text-center"><label>Eyemark Code</label></td>
                <td colspan="2" width="10%"><?php echo $this->Form->value('eyemark_code_one'); ?></td>
                <td width="20%"><?php echo $this->Form->value('eyemark_code_two'); ?></td>
                <td colspan="2"></td>
                <td colspan="2"></td>                                        
                <td colspan="2"></td>                                        
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="13">**<u><b>Dispenser Test - Bag opened when pull, perforation must cut at the seal, no blocking & debris</b></u></td>
            </tr>
            <tr>
                <td colspan="2" class="text-center"><label>On Hold/Remarks</label></td>
                <td colspan="2" width="10%"><?php echo $this->Form->value('onhold_remark_one'); ?></td>
                <td width="20%"><?php echo $this->Form->value('onhold_remark_two'); ?></td>
                <td colspan="2"></td>
                <td colspan="2"></td>                                        
                <td colspan="2"></td>                                        
                <td colspan="2"></td>
            </tr>
        </table>
        <br/>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td colspan="2">
                    <table cellpadding="0" cellspacing="0" class="tabprint">
                        <tr>
                            <td class="text-center color-td" colspan="2"><label>MORNING SHIFT</label></td>
                        </tr>
                        <tr>
                            <td width="50%" class="text-center color-td"><label>Checked By</label></td>
                            <td width="50%" class="text-center color-td"><label>Approved By</label></td>
                        </tr>
                        <tr>
                            <td style="height: 80px;"></td>
                            <td></td>                                        
                        </tr>
                        <tr>
                            <td class="text-left" style="height: 15px;"><label>Date:</label></td>
                            <td class="text-left" style="height: 15px;"><label>Date:</label></td>
                        </tr>
                    </table> 
                </td>
                <td width="10%"></td>
                <td colspan="2">
                    <table cellpadding="0" cellspacing="0" class="tabprint">
                        <tr>
                            <td class="text-center color-td" colspan="2"><label>NIGHT SHIFT</label></td>
                        </tr>
                        <tr>
                            <td width="50%" class="text-center color-td"><label>Checked By</label></td>
                            <td width="50%" class="text-center color-td"><label>Approved By</label></td>
                        </tr>
                        <tr>
                            <td style="height: 80px;"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-left" style="height: 15px;"><label>Date:</label></td>
                            <td class="text-left" style="height: 15px;"><label>Date:</label></td>
                        </tr>
                    </table> 
                </td>
            </tr>
            <tr>
                <td width="10%"></td>
                <td></td>
                <td width="10%"></td>
                <td width="10%">Leader or Above</td>
                <td></td>
            </tr>
            <tr>
                <td width="10%">Last Revision Date:</td>
                <td></td>
                <td width="10%"></td>
                <td width="10%">Version:</td>
                <td><?php echo $this->Form->value('version'); ?></td>
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