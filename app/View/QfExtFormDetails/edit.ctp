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
                            <h1 class="text-center">EXTRUSION QUALITY REPORTS</h1>
                            <div class="col-lg-12">
                                <table class="ext-form-dfs-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td colspan="3" rowspan="3"><label>Product Name:<br/>Product Code:</label></td>
                                        <td><label>ID No</label></td>
                                        <td colspan="2"><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                    </tr>
                                    <tr>
                                        <td class="text-center color-td" colspan="9"><label>FILM PROPERTIES</label></td>
                                    </tr>
                                    <tr>
                                        <td><label>Weight / meter</label></td>
                                        <td class="text-center">g</td>
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td width="26%"><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>                                        
                                        <td colspan="2" class="text-center"><label>Repeat Print<small>(Bag Length : 530mm)</small></label></td>
                                        <td class="text-center">mm</td>
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><input type="text" class="form-control"/></td>
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
                                        <td><label>/X</label></td>
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
                                        <td class="text-center"><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
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


<!--<div class="qfExtFormDetails form">
<?php echo $this->Form->create('QfExtFormDetail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Qf Ext Form Detail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('id_no');
		echo $this->Form->input('left_gusset_width_specification');
		echo $this->Form->input('center_width_specification');
		echo $this->Form->input('right_gusset_width_specification');
		echo $this->Form->input('open_width_specification');
		echo $this->Form->input('weight_specification');
		echo $this->Form->input('thickness_specification');
		echo $this->Form->input('dart_impact_specification');
		echo $this->Form->input('embossed_specification');
		echo $this->Form->input('film_color_specification');
		echo $this->Form->input('no_blocking');
		echo $this->Form->input('hand_brust');
		echo $this->Form->input('tearing');
		echo $this->Form->input('print_distance_from_side');
		echo $this->Form->input('repeat_print');
		echo $this->Form->input('pantone');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('QfExtFormDetail.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('QfExtFormDetail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Qf Ext Form Details'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
