<div class="productSpecifications form">
<?php echo $this->Form->create('ProductSpecification'); ?>
	<fieldset>
		<legend><?php echo __('Edit Product Specification'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('prepared_by');
		echo $this->Form->input('date');
		echo $this->Form->input('issue_no');
		echo $this->Form->input('customer_ref');
		echo $this->Form->input('dataid');
		echo $this->Form->input('film_type');
		echo $this->Form->input('film_color');
		echo $this->Form->input('loop_color');
		echo $this->Form->input('printing_pantone_ref');
		echo $this->Form->input('printed');
		echo $this->Form->input('no_of_color');
		echo $this->Form->input('no_of_sides_printed');
		echo $this->Form->input('safty_holes');
		echo $this->Form->input('hanging_hole');
		echo $this->Form->input('embossed');
		echo $this->Form->input('glue_spot');
		echo $this->Form->input('diagonal_corner_seal');
		echo $this->Form->input('closed_width_specification');
		echo $this->Form->input('closed_width_tolerance');
		echo $this->Form->input('open_width_specification');
		echo $this->Form->input('open_width_tolerance');
		echo $this->Form->input('length_specification');
		echo $this->Form->input('length_tolerance');
		echo $this->Form->input('thickness_specification');
		echo $this->Form->input('thickness_tolerance');
		echo $this->Form->input('bag_weight_specification');
		echo $this->Form->input('bag_weight_tolerance');
		echo $this->Form->input('case_weight_specification');
		echo $this->Form->input('case_weight_tolerance');
		echo $this->Form->input('opacity_specification');
		echo $this->Form->input('opacity_tolerance');
		echo $this->Form->input('open_bottom_gusset_specification');
		echo $this->Form->input('open_bottom_gusset_tolerance');
		echo $this->Form->input('turn_over_top_specification');
		echo $this->Form->input('turn_over_top_tolerance');
		echo $this->Form->input('bag_lip_specification');
		echo $this->Form->input('bag_lip_tolerance');
		echo $this->Form->input('loop_thickness_specification');
		echo $this->Form->input('loop_thickness_tolerance');
		echo $this->Form->input('ultimate_lift_specification');
		echo $this->Form->input('ultimate_lift_tolerance');
		echo $this->Form->input('jog_test_specification');
		echo $this->Form->input('jog_test_tolerance');
		echo $this->Form->input('cut_out_specification');
		echo $this->Form->input('cut_out_tolerance');
		echo $this->Form->input('packing_type');
		echo $this->Form->input('case_quantity');
		echo $this->Form->input('with_without_inner');
		echo $this->Form->input('quantity_per_inner');
		echo $this->Form->input('quantity_per_block');
		echo $this->Form->input('roll_dispensing');
		echo $this->Form->input('inner_pack_label_required');
		echo $this->Form->input('dispencing_design');
		echo $this->Form->input('palletize_loading_required');
		echo $this->Form->input('aplicable_regulation');
		echo $this->Form->input('additional_information');
		echo $this->Form->input('bag_artwork');
		echo $this->Form->input('ctn_artwork');
		echo $this->Form->input('label_artwork');
		echo $this->Form->input('placement_ctn');
		echo $this->Form->input('placement_label');
		echo $this->Form->input('ctn_vacpac_dimension_lengthn');
		echo $this->Form->input('ctn_vacpac_dimension_width');
		echo $this->Form->input('ctn_vacpac_dimension_height');
		echo $this->Form->input('ctn_vacpac_dimension_color');
		echo $this->Form->input('core_dimension_inner');
		echo $this->Form->input('core_dimension_length');
		echo $this->Form->input('core_dimension_thickness');
		echo $this->Form->input('core_dimension_weight');
		echo $this->Form->input('barcode_outer_case_type');
		echo $this->Form->input('barcode_outer_case_digit');
		echo $this->Form->input('barcode_inner_pack_type');
		echo $this->Form->input('barcode_inner_pack_digit');
		echo $this->Form->input('barcode_individual_bag_type');
		echo $this->Form->input('barcode_individual_bag_digit');
		echo $this->Form->input('approved_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductSpecification.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ProductSpecification.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Product Specifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
