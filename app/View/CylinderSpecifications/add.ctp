<div class="cylinderSpecifications form">
<?php echo $this->Form->create('CylinderSpecification'); ?>
	<fieldset>
		<legend><?php echo __('Add Cylinder Specification'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('npi');
		echo $this->Form->input('ref_no');
		echo $this->Form->input('repeat_print');
		echo $this->Form->input('bag_width');
		echo $this->Form->input('bag_length');
		echo $this->Form->input('cylinder_circumference');
		echo $this->Form->input('cylinder_width');
		echo $this->Form->input('color');
		echo $this->Form->input('color_one');
		echo $this->Form->input('color_two');
		echo $this->Form->input('color_three');
		echo $this->Form->input('color_four');
		echo $this->Form->input('color_five');
		echo $this->Form->input('color_six');
		echo $this->Form->input('side_printed');
		echo $this->Form->input('front');
		echo $this->Form->input('back');
		echo $this->Form->input('qty_per_set');
		echo $this->Form->input('pic_per_cylinder');
		echo $this->Form->input('front_back');
		echo $this->Form->input('barcode_no');
		echo $this->Form->input('barcode_format');
		echo $this->Form->input('additional_info');
		echo $this->Form->input('amendment_note');
		echo $this->Form->input('film_substrate');
		echo $this->Form->input('film_color');
		echo $this->Form->input('eyemark_size');
		echo $this->Form->input('eyemark_color');
		echo $this->Form->input('eyemark_location');
		echo $this->Form->input('eyemark_code');
		echo $this->Form->input('crossmark_size');
		echo $this->Form->input('crossmark_position');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cylinder Specifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
