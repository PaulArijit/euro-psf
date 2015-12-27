<div class="productSpecifications view">
<h2><?php echo __('Product Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $productSpecification['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prepared By'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['prepared_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issue No'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['issue_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Ref'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['customer_ref']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dataid'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['dataid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film Type'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['film_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film Color'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['film_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Loop Color'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['loop_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Printing Pantone Ref'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['printing_pantone_ref']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Printed'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['printed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Of Color'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['no_of_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Of Sides Printed'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['no_of_sides_printed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Safty Holes'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['safty_holes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hanging Hole'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['hanging_hole']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Embossed'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['embossed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Glue Spot'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['glue_spot']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diagonal Corner Seal'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['diagonal_corner_seal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closed Width Specification'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['closed_width_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closed Width Tolerance'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['closed_width_tolerance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Open Width Specification'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['open_width_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Open Width Tolerance'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['open_width_tolerance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Length Specification'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['length_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Length Tolerance'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['length_tolerance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thickness Specification'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['thickness_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thickness Tolerance'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['thickness_tolerance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bag Weight Specification'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['bag_weight_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bag Weight Tolerance'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['bag_weight_tolerance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Case Weight Specification'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['case_weight_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Case Weight Tolerance'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['case_weight_tolerance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opacity Specification'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['opacity_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opacity Tolerance'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['opacity_tolerance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Open Bottom Gusset Specification'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['open_bottom_gusset_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Open Bottom Gusset Tolerance'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['open_bottom_gusset_tolerance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Turn Over Top Specification'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['turn_over_top_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Turn Over Top Tolerance'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['turn_over_top_tolerance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bag Lip Specification'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['bag_lip_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bag Lip Tolerance'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['bag_lip_tolerance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Loop Thickness Specification'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['loop_thickness_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Loop Thickness Tolerance'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['loop_thickness_tolerance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultimate Lift Specification'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['ultimate_lift_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultimate Lift Tolerance'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['ultimate_lift_tolerance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jog Test Specification'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['jog_test_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jog Test Tolerance'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['jog_test_tolerance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cut Out Specification'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['cut_out_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cut Out Tolerance'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['cut_out_tolerance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Packing Type'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['packing_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Case Quantity'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['case_quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('With Without Inner'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['with_without_inner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity Per Inner'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['quantity_per_inner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity Per Block'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['quantity_per_block']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Roll Dispensing'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['roll_dispensing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inner Pack Label Required'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['inner_pack_label_required']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dispencing Design'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['dispencing_design']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Palletize Loading Required'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['palletize_loading_required']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aplicable Regulation'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['aplicable_regulation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Additional Information'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['additional_information']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bag Artwork'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['bag_artwork']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Artwork'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['ctn_artwork']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Label Artwork'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['label_artwork']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Placement Ctn'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['placement_ctn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Placement Label'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['placement_label']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Vacpac Dimension Lengthn'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['ctn_vacpac_dimension_lengthn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Vacpac Dimension Width'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['ctn_vacpac_dimension_width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Vacpac Dimension Height'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['ctn_vacpac_dimension_height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Vacpac Dimension Color'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['ctn_vacpac_dimension_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Core Dimension Inner'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['core_dimension_inner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Core Dimension Length'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['core_dimension_length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Core Dimension Thickness'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['core_dimension_thickness']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Core Dimension Weight'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['core_dimension_weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode Outer Case Type'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['barcode_outer_case_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode Outer Case Digit'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['barcode_outer_case_digit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode Inner Pack Type'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['barcode_inner_pack_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode Inner Pack Digit'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['barcode_inner_pack_digit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode Individual Bag Type'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['barcode_individual_bag_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode Individual Bag Digit'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['barcode_individual_bag_digit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved By'); ?></dt>
		<dd>
			<?php echo h($productSpecification['ProductSpecification']['approved_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Specification'), array('action' => 'edit', $productSpecification['ProductSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Specification'), array('action' => 'delete', $productSpecification['ProductSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $productSpecification['ProductSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
