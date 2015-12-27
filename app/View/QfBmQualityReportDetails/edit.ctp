<div class="qfBmQualityReportDetails form">
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
</div>
