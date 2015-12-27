<div class="qfPositiveReleaseDetails form">
<?php echo $this->Form->create('QfPositiveReleaseDetail'); ?>
	<fieldset>
		<legend><?php echo __('Add Qf Positive Release Detail'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('bag_weight_std');
		echo $this->Form->input('bag_weight_min');
		echo $this->Form->input('bag_weight_max');
		echo $this->Form->input('vac_pack_weight_std');
		echo $this->Form->input('vac_pack_weight_min');
		echo $this->Form->input('vac_pack_weight_max');
		echo $this->Form->input('average_thickness_std');
		echo $this->Form->input('average_thickness_min');
		echo $this->Form->input('average_thickness_max');
		echo $this->Form->input('spot_thickness_std');
		echo $this->Form->input('spot_thickness_min');
		echo $this->Form->input('spot_thickness_max');
		echo $this->Form->input('opacity_std');
		echo $this->Form->input('opacity_min');
		echo $this->Form->input('opacity_max');
		echo $this->Form->input('dart_impact_weight_std');
		echo $this->Form->input('dart_impact_weight_min');
		echo $this->Form->input('dart_impact_weight_max');
		echo $this->Form->input('tensile_strength_md_std');
		echo $this->Form->input('tensile_strength_md_min');
		echo $this->Form->input('tensile_strength_md_max');
		echo $this->Form->input('tensile_strength_cd_std');
		echo $this->Form->input('tensile_strength_cd_min');
		echo $this->Form->input('tensile_strength_cd_max');
		echo $this->Form->input('tape_test');
		echo $this->Form->input('hotpin_collection_std');
		echo $this->Form->input('hotpin_collection_min');
		echo $this->Form->input('hotpin_collection_max');
		echo $this->Form->input('barcode_scanner');
		echo $this->Form->input('surface_treatment');
		echo $this->Form->input('color_fastness');
		echo $this->Form->input('jog_test_intertek_std');
		echo $this->Form->input('jog_test_intertek_min');
		echo $this->Form->input('jog_test_intertek_max');
		echo $this->Form->input('ultimate_lift_std');
		echo $this->Form->input('ultimate_lift_min');
		echo $this->Form->input('ultimate_lift_max');
		echo $this->Form->input('handle_length_std');
		echo $this->Form->input('handle_length_min');
		echo $this->Form->input('handle_length_max');
		echo $this->Form->input('handle_width_std');
		echo $this->Form->input('handle_width_min');
		echo $this->Form->input('handle_width_max');
		echo $this->Form->input('bag_length_std');
		echo $this->Form->input('bag_length_min');
		echo $this->Form->input('bag_length_max');
		echo $this->Form->input('open_width_std');
		echo $this->Form->input('open_width_min');
		echo $this->Form->input('open_width_max');
		echo $this->Form->input('closed_width_std');
		echo $this->Form->input('closed_width_min');
		echo $this->Form->input('closed_width_max');
		echo $this->Form->input('gusset_fold_std');
		echo $this->Form->input('gusset_fold_min');
		echo $this->Form->input('gusset_fold_max');
		echo $this->Form->input('handle_seal_std');
		echo $this->Form->input('handle_seal_min');
		echo $this->Form->input('handle_seal_max');
		echo $this->Form->input('bottom_gusset_seal_std');
		echo $this->Form->input('bottom_gusset_seal_min');
		echo $this->Form->input('bottom_gusset_seal_max');
		echo $this->Form->input('base_seal_std');
		echo $this->Form->input('base_seal_min');
		echo $this->Form->input('base_seal_max');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Qf Positive Release Details'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
