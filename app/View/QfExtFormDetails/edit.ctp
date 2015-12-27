<div class="qfExtFormDetails form">
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
</div>
