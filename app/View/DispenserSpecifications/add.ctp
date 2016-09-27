<div class="dispenserSpecifications form">
<?php echo $this->Form->create('DispenserSpecification'); ?>
	<fieldset>
		<legend><?php echo __('Add Dispenser Specification'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('npi');
		echo $this->Form->input('ref_no');
		echo $this->Form->input('size');
		echo $this->Form->input('board_quality');
		echo $this->Form->input('marking_color');
		echo $this->Form->input('barcode_number');
		echo $this->Form->input('product_gross_weight');
		echo $this->Form->input('film_embossed');
		echo $this->Form->input('ctn_marking_position');
		echo $this->Form->input('ctn_marking_size_width');
		echo $this->Form->input('ctn_marking_size_height');
		echo $this->Form->input('aditional_requirement');
		echo $this->Form->input('amendment_note');
		echo $this->Form->input('additional_information');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dispenser Specifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
