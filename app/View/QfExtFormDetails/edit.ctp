<?php
$conf_categories = Configure::read('CATEGORY');
$category = $conf_categories[$this->request->data['Item']['category']];
?>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Add New Item <a href="javascript:void(0)" onclick="printData('ext-form-details-print')" class="print print-btn1" rel="ext-form-details-print"><i class="fa fa-print"></i>&nbsp;Print</a></div>
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
                                    <a id="editForm" href="javascript:void(0)" style="font-size:18px; color: #ff9900" title="Edit Form" ><i class="fa fa-edit"></i> Edit Qf Ext Form Details</a>
                                <?php } else if ($this->Session->read('Auth.User.role') == 1) { ?>
                                    <a id="editForm" href="javascript:void(0)" style="font-size:18px; color: #ff9900" title="Edit Form" ><i class="fa fa-edit"></i> Edit Qf Ext Form Details</a>                                    
                                <?php } else if ($this->Session->read('Auth.User.role') == 2) { ?>

                                <?php } ?>                                
                            </div>
                        </div>
                        <div class="row">
                            <?php echo $this->Form->create('QfExtFormDetail'); ?>
                            <?php echo $this->Form->input('id'); ?>
                            <?php echo $this->Form->input('item_id', array('type' => 'hidden')); ?>
                            <h1 class="text-center">EXTRUSION QUALITY REPORTS</h1>
                            <div class="col-lg-12">
                                <table class="ext-form-dfs-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td colspan="3" rowspan="3"><label>Product Name:<br/>Product Code:</label></td>
                                        <td><label>ID No</label></td>
                                        <td colspan="2><?php echo $this->Form->input('id_no', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                            <td><label>M/C No.:</label></td>
                                            <td colspan="2"><label>P / Q / E / K / NQ -  ______________</label></td>
                                    </tr>
                                    <tr>
                                        <td><label>SHIFT</label></td>
                                        <td colspan="2" class="text-center"><label> M / N </label></td>
                                        <td><label>Eyemark Code :</label></td>
                                        <td colspan="2"><label>_________________________</label></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="text-center color-td"><label>ROLL NO</label></td>
                                    </tr>
                                    <tr class="color-tr">
                                        <td class="text-center"><label>DIMENSIONS</label></td>
                                        <td class="text-center"><label>UNITS</label></td>
                                        <td class="text-center"><label>SPECIFICATION</label></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                    </tr>
                                    <tr>
                                        <td><label>LEFT  Gusset Width</label></td>
                                        <td class="text-center">mm</td>
                                        <td><?php echo $this->Form->input('left_gusset_width_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Center Width</label></td>
                                        <td class="text-center">mm</td>
                                        <td><?php echo $this->Form->input('center_width_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>RIGHT Gusset Width</label></td>
                                        <td class="text-center">mm</td>
                                        <td><?php echo $this->Form->input('right_gusset_width_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                    </tr>
                                    <tr>
                                        <td class="text-center color-td" colspan="9"><label>FILM PROPERTIES</label></td>
                                    </tr>
                                    <tr>
                                        <td><label>Weight / meter</label></td>
                                        <td class="text-center">g</td>
                                        <td><?php echo $this->Form->input('weight_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Thickness</label></td>
                                        <td class="text-center">µm</td>
                                        <td><?php echo $this->Form->input('thickness_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Dart Impact </label></td>
                                        <td class="text-center">g</td>
                                        <td><?php echo $this->Form->input('dart_impact_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Embossed</label></td>
                                        <td class="text-center">Visual</td>
                                        <td><?php echo $this->Form->input('embossed_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Film Color</label></td>
                                        <td class="text-center">Visual</td>
                                        <td><?php echo $this->Form->input('film_color_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>No Blocking</label></td>
                                        <td class="text-center">/X</td>
                                        <td><?php echo $this->Form->input('no_blocking', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center color-td" colspan="9"><label>PHYSICAL INSPECTION</label></td>
                                    </tr>
                                    <tr>
                                        <td><label>Hand burst</label></td>
                                        <td class="text-center">Physical</td>
                                        <td><?php echo $this->Form->input('hand_brust', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Tearing</label></td>
                                        <td class="text-center">Physical</td>
                                        <td><?php echo $this->Form->input('tearing', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                <table class="ext-form-dfs-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="color-td text-center" colspan="12"><label>PRINTING</label></td>
                                    </tr>
                                    <tr>                                        
                                        <td class="text-center" width="5%" rowspan="2"><label>Color</label></td>
                                        <td class="text-center" width="5%"><label>Front</label></td>
                                        <td class="text-center" width="4%">/X</td>
                                        <td width="26%" class="text-center"><label>Visual</label></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                    </tr>
                                    <tr>                                        
                                        <td class="text-center"><label>Back</label></td>
                                        <td class="text-center">/X</td>
                                        <td class="text-center"><label>Visual</label></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>                                        
                                        <td colspan="2" class="text-center"><label>Print Distance from side</label></td>
                                        <td class="text-center">/X</td>
                                        <td><?php echo $this->Form->input('print_distance_from_side', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>                                        
                                        <td colspan="2" class="text-center"><label>Repeat Print</label></td>
                                        <td class="text-center">mm</td>
                                        <td><?php echo $this->Form->input('repeat_print', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>                                        
                                        <td colspan="2" class="text-center"><label>PANTONE</label></td>
                                        <td class="text-center">Visual</td>
                                        <td><?php echo $this->Form->input('pantone', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>                                        
                                        <td colspan="2" class="text-center"><label>Tape test</label></td>
                                        <td class="text-center">Tape</td>
                                        <td class="text-center"><label>/X</label></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="10">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>                                        
                                        <td colspan="2" class="text-center"><label>On Hold / Remarks</label></td>
                                        <td class="text-center"><?php echo $this->Form->input('onhold_remark_one', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('onhold_remark_two', array('class' => 'form-control', 'label' => FALSE)); ?></td>
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
                                <table cellpadding="0" cellspacing="0" class="ext-form-dfs-tab1">
                                    <tr>
                                        <td width="25%" class="text-center color-td"><label>TESTED BY :</label></td>
                                        <td width="25%" class="text-center color-td"><label>EXTRUSION</label></td>
                                        <td width="25%" class="text-center color-td"><label>LAB</label></td>
                                        <td width="25%" class="text-center color-td"><label>APPROVED BY :</label></td>
                                    </tr>                                    
                                    <tr>
                                        <td style="height: 80px;"></td>
                                        <td></td>                                        
                                        <td></td>                                        
                                        <td></td>                                        
                                    </tr>
                                    <tr>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                    </tr>
                                </table>
                                <br/>                                
                                <label>Last Revision Date:</label>
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
<div id="ext-form-details-print" class="print-hidden">
    <center>
        <table>
            <tr>
                <td width="90%" style="text-align: center;"><h2>EXTRUSION QUALITY REPORTS</h2></td>
                <td><?php echo $this->Html->image('logo-print.jpg', array('alt' => 'logo', 'height' => '100')); ?></td>
            </tr>
        </table>
        <br/>
        <table class="tabprint" cellpadding="0" cellspacing="0">
            <tr>
                <td colspan="3" rowspan="3"><label>Product Name:<br/>Product Code:</label></td>
                <td><label>ID No</label></td>
                <td colspan="2><?php echo $this->Form->value('id_no'); ?></td>
                    <td><label>M/C No.:</label></td>
                    <td colspan="2"><label>P / Q / E / K / NQ -  ______________</label></td>
            </tr>
            <tr>
                <td><label>SHIFT</label></td>
                <td colspan="2" class="text-center"><label> M / N </label></td>
                <td><label>Eyemark Code :</label></td>
                <td colspan="2"><label>_________________________</label></td>
            </tr>
            <tr>
                <td colspan="6" class="text-center color-td"><label>ROLL NO</label></td>
            </tr>
            <tr class="color-tr">
                <td class="text-center"><label>DIMENSIONS</label></td>
                <td class="text-center"><label>UNITS</label></td>
                <td class="text-center"><label>SPECIFICATION</label></td>
                <td width="10%"></td>
                <td width="10%"></td>
                <td width="10%"></td>
                <td width="10%"></td>
                <td width="10%"></td>
                <td width="10%"></td>
            </tr>
            <tr>
                <td><label>LEFT  Gusset Width</label></td>
                <td class="text-center">mm</td>
                <td><?php echo $this->Form->value('left_gusset_width_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>Center Width</label></td>
                <td class="text-center">mm</td>
                <td><?php echo $this->Form->value('center_width_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>RIGHT Gusset Width</label></td>
                <td class="text-center">mm</td>
                <td><?php echo $this->Form->value('right_gusset_width_specification'); ?></td>
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
            </tr>
            <tr>
                <td class="text-center color-td" colspan="9"><label>FILM PROPERTIES</label></td>
            </tr>
            <tr>
                <td><label>Weight / meter</label></td>
                <td class="text-center">g</td>
                <td><?php echo $this->Form->value('weight_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>Thickness</label></td>
                <td class="text-center">µm</td>
                <td><?php echo $this->Form->value('thickness_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>Dart Impact </label></td>
                <td class="text-center">g</td>
                <td><?php echo $this->Form->value('dart_impact_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>Embossed</label></td>
                <td class="text-center">Visual</td>
                <td><?php echo $this->Form->value('embossed_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>Film Color</label></td>
                <td class="text-center">Visual</td>
                <td><?php echo $this->Form->value('film_color_specification'); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>No Blocking</label></td>
                <td class="text-center">/X</td>
                <td><?php echo $this->Form->value('no_blocking'); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="text-center color-td" colspan="9"><label>PHYSICAL INSPECTION</label></td>
            </tr>
            <tr>
                <td><label>Hand burst</label></td>
                <td class="text-center">Physical</td>
                <td><?php echo $this->Form->value('hand_brust'); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><label>Tearing</label></td>
                <td class="text-center">Physical</td>
                <td><?php echo $this->Form->value('tearing'); ?></td>
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
                <td class="color-td text-center" colspan="12"><label>PRINTING</label></td>
            </tr>
            <tr>                                        
                <td class="text-center" width="5%" rowspan="2"><label>Color</label></td>
                <td class="text-center" width="5%"><label>Front</label></td>
                <td class="text-center" width="4%">/X</td>
                <td width="26%" class="text-center"><label>Visual</label></td>
                <td width="10%"></td>
                <td width="10%"></td>
                <td width="10%"></td>
                <td width="10%"></td>
                <td width="10%"></td>
                <td width="10%"></td>
            </tr>
            <tr>                                        
                <td class="text-center"><label>Back</label></td>
                <td class="text-center">/X</td>
                <td class="text-center"><label>Visual</label></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>                                        
                <td colspan="2" class="text-center"><label>Print Distance from side</label></td>
                <td class="text-center">/X</td>
                <td><?php echo $this->Form->value('print_distance_from_side'); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>                                        
                <td colspan="2" class="text-center"><label>Repeat Print</label></td>
                <td class="text-center">mm</td>
                <td><?php echo $this->Form->value('repeat_print'); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>                                        
                <td colspan="2" class="text-center"><label>PANTONE</label></td>
                <td class="text-center">Visual</td>
                <td><?php echo $this->Form->value('pantone'); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>                                        
                <td colspan="2" class="text-center"><label>Tape test</label></td>
                <td class="text-center">Tape</td>
                <td class="text-center"><label>/X</label></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="10">
                    &nbsp;
                </td>
            </tr>
            <tr>                                        
                <td colspan="2" class="text-center"><label>On Hold / Remarks</label></td>
                <td class="text-center"><?php echo $this->Form->value('onhold_remark_one'); ?></td>
                <td><?php echo $this->Form->value('onhold_remark_two'); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <br/>
        <table cellpadding="0" cellspacing="0" class="tabprint">
            <tr>
                <td width="25%" class="text-center color-td"><label>TESTED BY :</label></td>
                <td width="25%" class="text-center color-td"><label>EXTRUSION</label></td>
                <td width="25%" class="text-center color-td"><label>LAB</label></td>
                <td width="25%" class="text-center color-td"><label>APPROVED BY :</label></td>
            </tr>                                    
            <tr>
                <td style="height: 80px;"></td>
                <td></td>                                        
                <td></td>                                        
                <td></td>                                        
            </tr>
            <tr>
                <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                <td class="text-left" style="height: 30px;"><label>Date:</label></td>
            </tr>
        </table>
        <br/>
        <table>
            <tr>
                <td colspan="5" style="text-align: right;">Leader or Above</td>
            </tr>
            <tr>
                <td width="15%">Last Revision Date:</td>
                <td width="25%">&nbsp;</td>
                <td width="25%">&nbsp;</td>
                <td width="10%">version:</td>
                <td width="25%"><?php echo $this->Form->value('version'); ?></td>
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