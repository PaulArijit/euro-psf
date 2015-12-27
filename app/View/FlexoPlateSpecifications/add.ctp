<div class="flexoPlateSpecifications form">
<?php echo $this->Form->create('FlexoPlateSpecification'); ?>
	<fieldset>
		<legend><?php echo __('Add Flexo Plate Specification'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('npi');
		echo $this->Form->input('ref_no');
		echo $this->Form->input('flim_thickness');
		echo $this->Form->input('bag_width');
		echo $this->Form->input('bag_length');
		echo $this->Form->input('repeat_print');
		echo $this->Form->input('open_bottom_gusset');
		echo $this->Form->input('lip');
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
		echo $this->Form->input('pic_per_plate');
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
		echo $this->Form->input('dot_mark');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Flexo Plate Specifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
