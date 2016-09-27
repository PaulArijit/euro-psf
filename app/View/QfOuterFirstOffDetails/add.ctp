<div class="qfOuterFirstOffDetails form">
<?php echo $this->Form->create('QfOuterFirstOffDetail'); ?>
	<fieldset>
		<legend><?php echo __('Add Qf Outer First Off Detail'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('previous_product');
		echo $this->Form->input('cylinder_circ_specification');
		echo $this->Form->input('repeat_print_specification');
		echo $this->Form->input('gusset_specification');
		echo $this->Form->input('middle_specification');
		echo $this->Form->input('closed_width_specification');
		echo $this->Form->input('open_width_specification');
		echo $this->Form->input('film_type_specification');
		echo $this->Form->input('film_color_specification');
		echo $this->Form->input('embossed_specification');
		echo $this->Form->input('wt_meter_specification');
		echo $this->Form->input('screw_specification');
		echo $this->Form->input('take_up_speed_specification');
		echo $this->Form->input('gels_specification');
		echo $this->Form->input('metal_fracture_specification');
		echo $this->Form->input('die_line_specification');
		echo $this->Form->input('film_appearance_one');
		echo $this->Form->input('film_appearance_two');
		echo $this->Form->input('film_appearance_three');
		echo $this->Form->input('film_appearance_four');
		echo $this->Form->input('artwork_detail');
		echo $this->Form->input('pantone_one');
		echo $this->Form->input('pantone_two');
		echo $this->Form->input('pantone_three');
		echo $this->Form->input('pantone_four');
		echo $this->Form->input('pantone_five');
		echo $this->Form->input('pantone_six');
		echo $this->Form->input('viscosity_one');
		echo $this->Form->input('viscosity_two');
		echo $this->Form->input('viscosity_three');
		echo $this->Form->input('viscosity_four');
		echo $this->Form->input('viscosity_five');
		echo $this->Form->input('viscosity_six');
		echo $this->Form->input('barcode_no');
		echo $this->Form->input('rub_test');
		echo $this->Form->input('thickness');
		echo $this->Form->input('opacity');
		echo $this->Form->input('tear_strength_md');
		echo $this->Form->input('tear_strength_cd');
		echo $this->Form->input('tensile_strength_md');
		echo $this->Form->input('tensile_strength_cd');
		echo $this->Form->input('elongation_md');
		echo $this->Form->input('elongation_cd');
		echo $this->Form->input('tensile_strength_md_mml');
		echo $this->Form->input('tensile_strength_cd_mml');
		echo $this->Form->input('impact_strength_one');
		echo $this->Form->input('impact_strength_two');
		echo $this->Form->input('impact_strength_three');
		echo $this->Form->input('impact_strength_four');
		echo $this->Form->input('impact_strength_five');
		echo $this->Form->input('impact_strength_six');
		echo $this->Form->input('sample_bag_attachment');
		echo $this->Form->input('version');
		echo $this->Form->input('rev_no');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Qf Outer First Off Details'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
