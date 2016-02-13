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
                            <h1 class="text-center">BM QUALITY REPORTS DFS</h1>
                            <div class="col-lg-12">
                                <table class="bm-quality-report-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td colspan="3" rowspan="2"><label>Product Name:<br/>Product Code:</label></td>
                                        <td><label>ID No</label></td>
                                        <td colspan="3"><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <table class="bm-quality-report-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="color-td text-center" colspan="12"><label>PRINT DETAILS</label></td>
                                    </tr>
                                    <tr>                                        
                                        <td class="text-center" width="6%" rowspan="2"><label>Front</label></td>
                                        <td class="text-center" width="7%"><label>Fr. Base</label></td>
                                        <td class="text-center" width="5%">mm</td>
                                        <td width="30%"><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                            <div class="col-lg-12">
                                <table class="bm-quality-report-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="color-td text-center" colspan="13"><label>PHYSICAL PROPERTIES</label></td>
                                    </tr>
                                    <tr>                                        
                                        <td rowspan="3" width="5%" class="text-center"><label>SEAL</label></td>
                                        <td width="7%"><label>Handle L/R</label></td>
                                        <td width="5%">Physical</td>
                                        <td width="30%" colspan="2"><input type="text" class="form-control"/></td>
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
                                        <td colspan="2"><input type="text" class="form-control"/></td>
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
                                        <td colspan="2"><input type="text" class="form-control"/></td>
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
                                        <td colspan="2"><input type="text" class="form-control"/></td>
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
                                        <td colspan="2"><input type="text" class="form-control"/></td>
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
                                        <td colspan="2"><input type="text" class="form-control"/></td>
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
                                        <td colspan="2"><input type="text" class="form-control"/></td>
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
                                        <td colspan="2"><input type="text" class="form-control"/></td>
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
                                        <td colspan="2"><input type="text" class="form-control"/></td>
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
                                        <td colspan="2"><input type="text" class="form-control"/></td>
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
                                        <td colspan="2"><input type="text" class="form-control"/></td>
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
                                        <td colspan="2"><input type="text" class="form-control"/></td>
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
                                        <td colspan="2"><input type="text" class="form-control"/></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>                                        
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center"><label>Ultimate Lift</label></td>
                                        <td>kg</td>
                                        <td colspan="2"><input type="text" class="form-control"/></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center"><label>Traceability Code</label></td>
                                        <td colspan="2" width="10%"><input type="text" class="form-control"/></td>
                                        <td width="20%"><input type="text" class="form-control"/></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center"><label>Eyemark Code</label></td>
                                        <td colspan="2" width="10%"><input type="text" class="form-control"/></td>
                                        <td width="20%"><input type="text" class="form-control"/></td>
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
                                        <td colspan="2" width="10%"><input type="text" class="form-control"/></td>
                                        <td width="20%"><input type="text" class="form-control"/></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>                                        
                                        <td colspan="2"></td>
                                    </tr>
                                </table>
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
                                        <input type="text" class="form-control">
                                    </div>
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



<!--<div class="qfBmQualityReportDetails form">
<?php echo $this->Form->create('QfBmQualityReportDetail'); ?>
        <fieldset>
                <legend><?php echo __('Edit Qf Bm Quality Report Detail'); ?></legend>
<?php
echo $this->Form->input('id');
echo $this->Form->input('item_id');
echo $this->Form->input('id_no');
echo $this->Form->input('bag_weight_specification');
echo $this->Form->input('ctn_weight_specification');
echo $this->Form->input('closed_width_specification');
echo $this->Form->input('open_width_specification');
echo $this->Form->input('length_specification');
echo $this->Form->input('handle_width_specification');
echo $this->Form->input('handle_length_specification');
echo $this->Form->input('pcs_block_specification');
echo $this->Form->input('pcs_outer_specification');
echo $this->Form->input('no_of_outer_specification');
echo $this->Form->input('knife_design_specification');
echo $this->Form->input('knife_design');
echo $this->Form->input('print_front_base');
echo $this->Form->input('print_front_side');
echo $this->Form->input('print_back_base');
echo $this->Form->input('print_back_side');
echo $this->Form->input('handle_lr');
echo $this->Form->input('gusset_lr');
echo $this->Form->input('bottom_base');
echo $this->Form->input('six_step_checking');
echo $this->Form->input('no_blocking');
echo $this->Form->input('safty_hole');
echo $this->Form->input('hot_pin');
echo $this->Form->input('embossed');
echo $this->Form->input('gluespot');
echo $this->Form->input('dispenser_test');
echo $this->Form->input('packing');
echo $this->Form->input('ctn_marking');
echo $this->Form->input('jog_test');
echo $this->Form->input('ultimate_lift');
echo $this->Form->input('traceability_code_one');
echo $this->Form->input('traceability_code_two');
echo $this->Form->input('eyemark_code_one');
echo $this->Form->input('eyemark_code_two');
echo $this->Form->input('onhold_remark_one');
echo $this->Form->input('onhold_remark_two');
echo $this->Form->input('version');
?>
        </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>

                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('QfBmQualityReportDetail.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('QfBmQualityReportDetail.id'))); ?></li>
                <li><?php echo $this->Html->link(__('List Qf Bm Quality Report Details'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
        </ul>
</div>-->
