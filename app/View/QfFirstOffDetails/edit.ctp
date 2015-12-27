<div class="qfFirstOffDetails form">
<?php echo $this->Form->create('QfFirstOffDetail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Qf First Off Detail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('ctn_marking');
		echo $this->Form->input('upload_two');
		echo $this->Form->input('upload_three');
		echo $this->Form->input('upload_four');
		echo $this->Form->input('label_size');
		echo $this->Form->input('description');
		echo $this->Form->input('left_cycle');
		echo $this->Form->input('right_cycle');
		echo $this->Form->input('fold_specification');
		echo $this->Form->input('qty_per_bundle_specification');
		echo $this->Form->input('hot_pin_specification');
		echo $this->Form->input('embossed_specification');
		echo $this->Form->input('gluespot_specification');
		echo $this->Form->input('qty_per_outer_specification');
		echo $this->Form->input('qty_per_ctn_specification');
		echo $this->Form->input('weight_per_ctn_specification');
		echo $this->Form->input('knife_design');
		echo $this->Form->input('knife_size');
		echo $this->Form->input('artwork');
		echo $this->Form->input('extra_textf');
		echo $this->Form->input('gusset_specification');
		echo $this->Form->input('closed_width_specification');
		echo $this->Form->input('length_specification');
		echo $this->Form->input('print_bottom_front_specification');
		echo $this->Form->input('handle_length_specification');
		echo $this->Form->input('handle_width_specification');
		echo $this->Form->input('perforation_position_side_one');
		echo $this->Form->input('perforation_position_side_two');
		echo $this->Form->input('perforation_position_bottom_one');
		echo $this->Form->input('perforation_position_bottom_two');
		echo $this->Form->input('perforation_size_one');
		echo $this->Form->input('perforation_size_two');
		echo $this->Form->input('dispenser_test');
		echo $this->Form->input('no_blocking');
		echo $this->Form->input('jog_test');
		echo $this->Form->input('single_handle_lift');
		echo $this->Form->input('ultimate_lift');
		echo $this->Form->input('punch_out_average');
		echo $this->Form->input('sample_bag_attachment');
		echo $this->Form->input('last_revision_date');
		echo $this->Form->input('version');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('QfFirstOffDetail.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('QfFirstOffDetail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Qf First Off Details'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
