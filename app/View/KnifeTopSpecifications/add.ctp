<div class="knifeTopSpecifications form">
<?php echo $this->Form->create('KnifeTopSpecification'); ?>
	<fieldset>
		<legend><?php echo __('Add Knife Top Specification'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('npi');
		echo $this->Form->input('ref_no');
		echo $this->Form->input('ref_no_two');
		echo $this->Form->input('knife_size');
		echo $this->Form->input('similar_knife');
		echo $this->Form->input('knife_type');
		echo $this->Form->input('m6_screw_holes');
		echo $this->Form->input('machine_type');
		echo $this->Form->input('base');
		echo $this->Form->input('punchout');
		echo $this->Form->input('handle_length');
		echo $this->Form->input('handle_width');
		echo $this->Form->input('amendment_note');
		echo $this->Form->input('remarks');
		echo $this->Form->input('additional_information');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Knife Top Specifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
