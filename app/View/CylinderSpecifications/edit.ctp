<?php
$conf_categories = Configure::read('CATEGORY');
$category = $conf_categories[$this->request->data['Item']['category']];
?>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Add New Item <a href="javascript:void(0)" onclick="printData('cylinder-print')" class="print print-btn1" rel="cylinder-print"><i class="fa fa-print"></i>&nbsp;Print</a></div>
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
                            <?php echo $this->Form->create('CylinderSpecification'); ?>
                            <?php echo $this->Form->input('id'); ?>
                            <?php echo $this->Form->input('item_id', array('type' => 'hidden')); ?>
                            <h1 class="text-center">Gravure Cylinder</h1>
                            <div class="col-lg-10">
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
                                            <dt><?php echo __('Ref No'); ?></dt>
                                            <dd>
                                                <?php echo $this->Form->input('ref_no', array('class' => 'form-control', 'label' => FALSE)); ?>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="panel fresh-color panel-success">
                                    <div class="panel-heading text-center">User</div>
                                    <div class="panel-body text-center">
                                        <?php echo $this->Form->input('npi', array('class' => 'form-control', 'label' => FALSE, 'readonly' => TRUE)); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <table class="cylinder-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td><label>Repeat Print (mm)</label></td>
                                        <td><label>Bag Width (mm)</label></td>
                                        <td><label>Bag Length (mm)</label></td>
                                        <td><label>Cylinder Circumference (mm)</label></td>
                                        <td><label>Cylinder Width (mm)</label></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $this->Form->input('repeat_print', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('bag_width', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('bag_length', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('cylinder_circumference', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('cylinder_width', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                </table>
                                <br/>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <table class="cylinder-tab2" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="15%"><label>Color</label></td>
                                        <td width="60px"><?php echo $this->Form->input('color', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td class="text-center"><label>1</label></td>
                                        <td class="text-center"><label>2</label></td>
                                        <td class="text-center"><label>3</label></td>
                                        <td class="text-center"><label>4</label></td>
                                        <td class="text-center"><label>5</label></td>
                                        <td class="text-center"><label>6</label></td>
                                    </tr>
                                    <tr>
                                        <td><label>Side printed</label></td>
                                        <td width="60px"><?php echo $this->Form->input('side_printed', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td rowspan="3"><?php echo $this->Form->input('color_one', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td rowspan="3"><?php echo $this->Form->input('color_two', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td rowspan="3"><?php echo $this->Form->input('color_three', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td rowspan="3"><?php echo $this->Form->input('color_four', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td rowspan="3"><?php echo $this->Form->input('color_five', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td rowspan="3"><?php echo $this->Form->input('color_six', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Front (pcs)</label></td>
                                        <td width="60px"><?php echo $this->Form->input('front', array('class' => 'form-control', 'label' => FALSE)); ?></td>																		
                                    </tr>
                                    <tr>
                                        <td><label>Back (pcs)</label></td>
                                        <td width="60px"><?php echo $this->Form->input('back', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                                    </tr>
                                    <tr>
                                        <td><label>Qty per set (pcs)</label></td>									
                                        <td colspan="3"><?php echo $this->Form->input('qty_per_set', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td class="text-center" rowspan="2"><label>Film</label></td>
                                        <td><label>Substrate</label></td>
                                        <td colspan="2"><?php echo $this->Form->input('film_substrate', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Picture per Cylinder</label></td>									
                                        <td colspan="3"><?php echo $this->Form->input('pic_per_cylinder', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>Color</label></td>
                                        <td colspan="2"><?php echo $this->Form->input('film_color', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Front & Back</label></td>									
                                        <td colspan="3"><?php echo $this->Form->input('front_back', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td class="text-center" rowspan="4"><label>Eyemark</label></td>
                                        <td><label>Size (mm)</label></td>
                                        <td colspan="2"><?php echo $this->Form->input('eyemark_size', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Barcode Number</label></td>									
                                        <td colspan="3"><?php echo $this->Form->input('barcode_no', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                                        <td><label>color</label></td>
                                        <td colspan="2"><?php echo $this->Form->input('eyemark_color', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Barcode Format</label></td>									
                                        <td colspan="3"><?php echo $this->Form->input('barcode_format', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                                        <td><label>Location</label></td>
                                        <td colspan="2"><?php echo $this->Form->input('eyemark_location', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Additional Info</label></td>									
                                        <td colspan="3"><?php echo $this->Form->input('additional_info', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                                        <td><label>Code</label></td>
                                        <td colspan="2"><?php echo $this->Form->input('eyemark_code', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"><label>Amendment Note</label></td>									
                                        <td rowspan="2" colspan="3"><?php echo $this->Form->input('amendment_note', array('class' => 'form-control', 'label' => FALSE, 'type' => 'textarea', 'rows' => '3')); ?></td>
                                        <td class="text-center" rowspan="2"><label>Cross Mark</label></td>
                                        <td><label>Size (mm)</label></td>
                                        <td colspan="3"><?php echo $this->Form->input('crossmark_size', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                                    </tr>
                                    <tr>
                                        <td><label>Position</label></td>
                                        <td colspan="2"><?php echo $this->Form->input('crossmark_position', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="pull-right">
                                    <button class="btn btn-success" type="submit" onclick="return confirm('Are you sure you want to continue')">Save</button>
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
<div id="cylinder-print" class="print-hidden">
    <center>
        <h2>Cylinder Specification</h2>
        <table style="width: 100%;" cellpadding="0" cellspacing="0">
            <tr>
                <td style="width: 70%; border: 1px solid silver;">
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="20%" style="text-align: center; background: #EEE;">Product Description:</td>
                            <td width="50%" style="text-align: left; font-weight: bold; padding-left: 20px;"><?php echo $this->request->data['Item']['description']; ?></td>
                        </tr>
                        <tr>
                            <td width="20%" style="text-align: center; background: #EEE;">Product Category:</td>
                            <td width="50%" style="text-align: left; font-weight: bold; padding-left: 20px;"><?php echo $category; ?></td>
                        </tr>
                        <tr>
                            <td width="20%" style="text-align: center; background: #EEE;">Sapcode:</td>
                            <td width="50%" style="text-align: left; font-weight: bold; padding-left: 20px;"><?php echo $this->request->data['Item']['sapcode']; ?></td>
                        </tr>
                        <tr>
                            <td width="20%" style="text-align: center; background: #EEE;">Ref No:</td>
                            <td width="50%" style="text-align: left; font-weight: bold; padding-left: 20px;"><?php echo $this->Form->value('ref_no'); ?></td>
                        </tr>                    
                    </table>
                </td>
                <td style="width: 10%;"></td>
                <td style="width: 20%; border: 1px solid silver;">
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="text-align: center; border-bottom:  1px solid silver;"><b>Username</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><?php echo $this->Form->value('npi'); ?></td>
                        </tr>
                    </table>
                </td>            
            </tr>
        </table>
        <br/>
        <table class="tabprint" cellpadding="0" cellspacing="0">
            <tr>
                <td><label>Repeat Print (mm)</label></td>
                <td><label>Bag Width (mm)</label></td>
                <td><label>Bag Length (mm)</label></td>
                <td><label>Cylinder Circumference (mm)</label></td>
                <td><label>Cylinder Width (mm)</label></td>
            </tr>
            <tr>
                <td><?php echo $this->Form->value('repeat_print'); ?></td>
                <td><?php echo $this->Form->value('bag_width'); ?></td>
                <td><?php echo $this->Form->value('bag_length'); ?></td>
                <td><?php echo $this->Form->value('cylinder_circumference'); ?></td>
                <td><?php echo $this->Form->value('cylinder_width'); ?></td>
            </tr>
        </table>
        <br/>
        <table class="tabprint" cellpadding="0" cellspacing="0">
            <tr>
                <td width="15%"><label>Color</label></td>
                <td width="60px"><?php echo $this->Form->value('color'); ?></td>
                <td class="text-center"><label>1</label></td>
                <td class="text-center"><label>2</label></td>
                <td class="text-center"><label>3</label></td>
                <td class="text-center"><label>4</label></td>
                <td class="text-center"><label>5</label></td>
                <td class="text-center"><label>6</label></td>
            </tr>
            <tr>
                <td><label>Side printed</label></td>
                <td width="60px"><?php echo $this->Form->value('side_printed'); ?></td>
                <td rowspan="3"><?php echo $this->Form->value('color_one'); ?></td>
                <td rowspan="3"><?php echo $this->Form->value('color_two'); ?></td>
                <td rowspan="3"><?php echo $this->Form->value('color_three'); ?></td>
                <td rowspan="3"><?php echo $this->Form->value('color_four'); ?></td>
                <td rowspan="3"><?php echo $this->Form->value('color_five'); ?></td>
                <td rowspan="3"><?php echo $this->Form->value('color_six'); ?></td>
            </tr>
            <tr>
                <td><label>Front (pcs)</label></td>
                <td width="60px"><?php echo $this->Form->value('front'); ?></td>																		
            </tr>
            <tr>
                <td><label>Back (pcs)</label></td>
                <td width="60px"><?php echo $this->Form->value('back'); ?></td>									
            </tr>
            <tr>
                <td><label>Qty per set (pcs)</label></td>									
                <td colspan="3"><?php echo $this->Form->value('qty_per_set'); ?></td>
                <td class="text-center" rowspan="2"><label>Film</label></td>
                <td><label>Substrate</label></td>
                <td colspan="2"><?php echo $this->Form->value('film_substrate'); ?></td>
            </tr>
            <tr>
                <td><label>Picture per Cylinder</label></td>									
                <td colspan="3"><?php echo $this->Form->value('pic_per_cylinder'); ?></td>
                <td><label>Color</label></td>
                <td colspan="2"><?php echo $this->Form->value('film_color'); ?></td>
            </tr>
            <tr>
                <td><label>Front & Back</label></td>									
                <td colspan="3"><?php echo $this->Form->value('front_back'); ?></td>
                <td class="text-center" rowspan="4"><label>Eyemark</label></td>
                <td><label>Size (mm)</label></td>
                <td colspan="2"><?php echo $this->Form->value('eyemark_size'); ?></td>
            </tr>
            <tr>
                <td><label>Barcode Number</label></td>									
                <td colspan="3"><?php echo $this->Form->value('barcode_no'); ?></td>									
                <td><label>color</label></td>
                <td colspan="2"><?php echo $this->Form->value('eyemark_color'); ?></td>
            </tr>
            <tr>
                <td><label>Barcode Format</label></td>									
                <td colspan="3"><?php echo $this->Form->input('barcode_format', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                <td><label>Location</label></td>
                <td colspan="2"><?php echo $this->Form->input('eyemark_location', array('class' => 'form-control', 'label' => FALSE)); ?></td>
            </tr>
            <tr>
                <td><label>Additional Info</label></td>									
                <td colspan="3"><?php echo $this->Form->input('additional_info', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                <td><label>Code</label></td>
                <td colspan="2"><?php echo $this->Form->input('eyemark_code', array('class' => 'form-control', 'label' => FALSE)); ?></td>
            </tr>
            <tr>
                <td rowspan="2"><label>Amendment Note</label></td>									
                <td rowspan="2" colspan="3"><?php echo $this->Form->input('amendment_note', array('class' => 'form-control', 'label' => FALSE, 'type' => 'textarea', 'rows' => '3')); ?></td>
                <td class="text-center" rowspan="2"><label>Cross Mark</label></td>
                <td><label>Size (mm)</label></td>
                <td colspan="3"><?php echo $this->Form->input('crossmark_size', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
            </tr>
            <tr>
                <td><label>Position</label></td>
                <td colspan="2"><?php echo $this->Form->input('crossmark_position', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
            </tr>
        </table>
    </center>
</div>