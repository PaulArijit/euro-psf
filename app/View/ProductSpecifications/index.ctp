<div class="productSpecifications index">
	<h2><?php echo __('Product Specifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('prepared_by'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('issue_no'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_ref'); ?></th>
			<th><?php echo $this->Paginator->sort('dataid'); ?></th>
			<th><?php echo $this->Paginator->sort('film_type'); ?></th>
			<th><?php echo $this->Paginator->sort('film_color'); ?></th>
			<th><?php echo $this->Paginator->sort('loop_color'); ?></th>
			<th><?php echo $this->Paginator->sort('printing_pantone_ref'); ?></th>
			<th><?php echo $this->Paginator->sort('printed'); ?></th>
			<th><?php echo $this->Paginator->sort('no_of_color'); ?></th>
			<th><?php echo $this->Paginator->sort('no_of_sides_printed'); ?></th>
			<th><?php echo $this->Paginator->sort('safty_holes'); ?></th>
			<th><?php echo $this->Paginator->sort('hanging_hole'); ?></th>
			<th><?php echo $this->Paginator->sort('embossed'); ?></th>
			<th><?php echo $this->Paginator->sort('glue_spot'); ?></th>
			<th><?php echo $this->Paginator->sort('diagonal_corner_seal'); ?></th>
			<th><?php echo $this->Paginator->sort('closed_width_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('closed_width_tolerance'); ?></th>
			<th><?php echo $this->Paginator->sort('open_width_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('open_width_tolerance'); ?></th>
			<th><?php echo $this->Paginator->sort('length_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('length_tolerance'); ?></th>
			<th><?php echo $this->Paginator->sort('thickness_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('thickness_tolerance'); ?></th>
			<th><?php echo $this->Paginator->sort('bag_weight_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('bag_weight_tolerance'); ?></th>
			<th><?php echo $this->Paginator->sort('case_weight_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('case_weight_tolerance'); ?></th>
			<th><?php echo $this->Paginator->sort('opacity_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('opacity_tolerance'); ?></th>
			<th><?php echo $this->Paginator->sort('open_bottom_gusset_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('open_bottom_gusset_tolerance'); ?></th>
			<th><?php echo $this->Paginator->sort('turn_over_top_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('turn_over_top_tolerance'); ?></th>
			<th><?php echo $this->Paginator->sort('bag_lip_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('bag_lip_tolerance'); ?></th>
			<th><?php echo $this->Paginator->sort('loop_thickness_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('loop_thickness_tolerance'); ?></th>
			<th><?php echo $this->Paginator->sort('ultimate_lift_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('ultimate_lift_tolerance'); ?></th>
			<th><?php echo $this->Paginator->sort('jog_test_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('jog_test_tolerance'); ?></th>
			<th><?php echo $this->Paginator->sort('cut_out_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('cut_out_tolerance'); ?></th>
			<th><?php echo $this->Paginator->sort('packing_type'); ?></th>
			<th><?php echo $this->Paginator->sort('case_quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('with_without_inner'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity_per_inner'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity_per_block'); ?></th>
			<th><?php echo $this->Paginator->sort('roll_dispensing'); ?></th>
			<th><?php echo $this->Paginator->sort('inner_pack_label_required'); ?></th>
			<th><?php echo $this->Paginator->sort('dispencing_design'); ?></th>
			<th><?php echo $this->Paginator->sort('palletize_loading_required'); ?></th>
			<th><?php echo $this->Paginator->sort('aplicable_regulation'); ?></th>
			<th><?php echo $this->Paginator->sort('additional_information'); ?></th>
			<th><?php echo $this->Paginator->sort('bag_artwork'); ?></th>
			<th><?php echo $this->Paginator->sort('ctn_artwork'); ?></th>
			<th><?php echo $this->Paginator->sort('label_artwork'); ?></th>
			<th><?php echo $this->Paginator->sort('placement_ctn'); ?></th>
			<th><?php echo $this->Paginator->sort('placement_label'); ?></th>
			<th><?php echo $this->Paginator->sort('ctn_vacpac_dimension_lengthn'); ?></th>
			<th><?php echo $this->Paginator->sort('ctn_vacpac_dimension_width'); ?></th>
			<th><?php echo $this->Paginator->sort('ctn_vacpac_dimension_height'); ?></th>
			<th><?php echo $this->Paginator->sort('ctn_vacpac_dimension_color'); ?></th>
			<th><?php echo $this->Paginator->sort('core_dimension_inner'); ?></th>
			<th><?php echo $this->Paginator->sort('core_dimension_length'); ?></th>
			<th><?php echo $this->Paginator->sort('core_dimension_thickness'); ?></th>
			<th><?php echo $this->Paginator->sort('core_dimension_weight'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode_outer_case_type'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode_outer_case_digit'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode_inner_pack_type'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode_inner_pack_digit'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode_individual_bag_type'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode_individual_bag_digit'); ?></th>
			<th><?php echo $this->Paginator->sort('approved_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($productSpecifications as $productSpecification): ?>
	<tr>
		<td><?php echo h($productSpecification['ProductSpecification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $productSpecification['Item']['id'])); ?>
		</td>
		<td><?php echo h($productSpecification['ProductSpecification']['prepared_by']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['date']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['issue_no']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['customer_ref']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['dataid']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['film_type']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['film_color']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['loop_color']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['printing_pantone_ref']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['printed']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['no_of_color']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['no_of_sides_printed']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['safty_holes']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['hanging_hole']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['embossed']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['glue_spot']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['diagonal_corner_seal']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['closed_width_specification']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['closed_width_tolerance']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['open_width_specification']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['open_width_tolerance']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['length_specification']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['length_tolerance']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['thickness_specification']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['thickness_tolerance']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['bag_weight_specification']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['bag_weight_tolerance']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['case_weight_specification']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['case_weight_tolerance']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['opacity_specification']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['opacity_tolerance']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['open_bottom_gusset_specification']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['open_bottom_gusset_tolerance']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['turn_over_top_specification']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['turn_over_top_tolerance']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['bag_lip_specification']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['bag_lip_tolerance']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['loop_thickness_specification']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['loop_thickness_tolerance']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['ultimate_lift_specification']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['ultimate_lift_tolerance']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['jog_test_specification']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['jog_test_tolerance']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['cut_out_specification']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['cut_out_tolerance']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['packing_type']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['case_quantity']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['with_without_inner']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['quantity_per_inner']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['quantity_per_block']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['roll_dispensing']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['inner_pack_label_required']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['dispencing_design']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['palletize_loading_required']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['aplicable_regulation']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['additional_information']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['bag_artwork']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['ctn_artwork']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['label_artwork']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['placement_ctn']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['placement_label']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['ctn_vacpac_dimension_lengthn']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['ctn_vacpac_dimension_width']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['ctn_vacpac_dimension_height']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['ctn_vacpac_dimension_color']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['core_dimension_inner']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['core_dimension_length']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['core_dimension_thickness']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['core_dimension_weight']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['barcode_outer_case_type']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['barcode_outer_case_digit']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['barcode_inner_pack_type']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['barcode_inner_pack_digit']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['barcode_individual_bag_type']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['barcode_individual_bag_digit']); ?>&nbsp;</td>
		<td><?php echo h($productSpecification['ProductSpecification']['approved_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productSpecification['ProductSpecification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productSpecification['ProductSpecification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productSpecification['ProductSpecification']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $productSpecification['ProductSpecification']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Product Specification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
