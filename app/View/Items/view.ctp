<div class="items view">
<h2><?php echo __('Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($item['Item']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($item['Item']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sapcode'); ?></dt>
		<dd>
			<?php echo h($item['Item']['sapcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($item['Item']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($item['Item']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']), array(), __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carton Specifications'), array('controller' => 'carton_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carton Specification'), array('controller' => 'carton_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Core Specifications'), array('controller' => 'core_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Core Specification'), array('controller' => 'core_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cylinder Specifications'), array('controller' => 'cylinder_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cylinder Specification'), array('controller' => 'cylinder_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flexo Plate Specifications'), array('controller' => 'flexo_plate_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flexo Plate Specification'), array('controller' => 'flexo_plate_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fusset Specifications'), array('controller' => 'fusset_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fusset Specification'), array('controller' => 'fusset_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grommet Specifications'), array('controller' => 'grommet_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grommet Specification'), array('controller' => 'grommet_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Knife Specifications'), array('controller' => 'knife_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Knife Specification'), array('controller' => 'knife_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Label Specifications'), array('controller' => 'label_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Label Specification'), array('controller' => 'label_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Specifications'), array('controller' => 'product_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Specification'), array('controller' => 'product_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qf Bm Quality Report Details'), array('controller' => 'qf_bm_quality_report_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qf Bm Quality Report Detail'), array('controller' => 'qf_bm_quality_report_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qf Ext First Off Details'), array('controller' => 'qf_ext_first_off_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qf Ext First Off Detail'), array('controller' => 'qf_ext_first_off_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qf Ext Form Details'), array('controller' => 'qf_ext_form_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qf Ext Form Detail'), array('controller' => 'qf_ext_form_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qf First Off Details'), array('controller' => 'qf_first_off_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qf First Off Detail'), array('controller' => 'qf_first_off_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qf Positive Release Details'), array('controller' => 'qf_positive_release_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qf Positive Release Detail'), array('controller' => 'qf_positive_release_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wicket Specifications'), array('controller' => 'wicket_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wicket Specification'), array('controller' => 'wicket_specifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Carton Specifications'); ?></h3>
	<?php if (!empty($item['CartonSpecification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Npi'); ?></th>
		<th><?php echo __('Ref No'); ?></th>
		<th><?php echo __('Size'); ?></th>
		<th><?php echo __('Board Quality'); ?></th>
		<th><?php echo __('Marking Color'); ?></th>
		<th><?php echo __('Barcode Number'); ?></th>
		<th><?php echo __('Product Gross Weight'); ?></th>
		<th><?php echo __('Film Embossed'); ?></th>
		<th><?php echo __('Ctn Marking Position'); ?></th>
		<th><?php echo __('Ctn Marking Size Weight'); ?></th>
		<th><?php echo __('Ctn Marking Size Height'); ?></th>
		<th><?php echo __('Aditional Requirement'); ?></th>
		<th><?php echo __('Amendment Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($item['CartonSpecification'] as $cartonSpecification): ?>
		<tr>
			<td><?php echo $cartonSpecification['id']; ?></td>
			<td><?php echo $cartonSpecification['item_id']; ?></td>
			<td><?php echo $cartonSpecification['npi']; ?></td>
			<td><?php echo $cartonSpecification['ref_no']; ?></td>
			<td><?php echo $cartonSpecification['size']; ?></td>
			<td><?php echo $cartonSpecification['board_quality']; ?></td>
			<td><?php echo $cartonSpecification['marking_color']; ?></td>
			<td><?php echo $cartonSpecification['barcode_number']; ?></td>
			<td><?php echo $cartonSpecification['product_gross_weight']; ?></td>
			<td><?php echo $cartonSpecification['film_embossed']; ?></td>
			<td><?php echo $cartonSpecification['ctn_marking_position']; ?></td>
			<td><?php echo $cartonSpecification['ctn_marking_size_weight']; ?></td>
			<td><?php echo $cartonSpecification['ctn_marking_size_height']; ?></td>
			<td><?php echo $cartonSpecification['aditional_requirement']; ?></td>
			<td><?php echo $cartonSpecification['amendment_note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'carton_specifications', 'action' => 'view', $cartonSpecification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'carton_specifications', 'action' => 'edit', $cartonSpecification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'carton_specifications', 'action' => 'delete', $cartonSpecification['id']), array(), __('Are you sure you want to delete # %s?', $cartonSpecification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Carton Specification'), array('controller' => 'carton_specifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Core Specifications'); ?></h3>
	<?php if (!empty($item['CoreSpecification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Npi'); ?></th>
		<th><?php echo __('Ref No'); ?></th>
		<th><?php echo __('Internal Diameter'); ?></th>
		<th><?php echo __('Length'); ?></th>
		<th><?php echo __('Thickness'); ?></th>
		<th><?php echo __('Core Required Per Ctn'); ?></th>
		<th><?php echo __('Additional Requirement'); ?></th>
		<th><?php echo __('Amendment Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($item['CoreSpecification'] as $coreSpecification): ?>
		<tr>
			<td><?php echo $coreSpecification['id']; ?></td>
			<td><?php echo $coreSpecification['item_id']; ?></td>
			<td><?php echo $coreSpecification['npi']; ?></td>
			<td><?php echo $coreSpecification['ref_no']; ?></td>
			<td><?php echo $coreSpecification['internal_diameter']; ?></td>
			<td><?php echo $coreSpecification['length']; ?></td>
			<td><?php echo $coreSpecification['thickness']; ?></td>
			<td><?php echo $coreSpecification['core_required_per_ctn']; ?></td>
			<td><?php echo $coreSpecification['additional_requirement']; ?></td>
			<td><?php echo $coreSpecification['amendment_note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'core_specifications', 'action' => 'view', $coreSpecification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'core_specifications', 'action' => 'edit', $coreSpecification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'core_specifications', 'action' => 'delete', $coreSpecification['id']), array(), __('Are you sure you want to delete # %s?', $coreSpecification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Core Specification'), array('controller' => 'core_specifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cylinder Specifications'); ?></h3>
	<?php if (!empty($item['CylinderSpecification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Npi'); ?></th>
		<th><?php echo __('Ref No'); ?></th>
		<th><?php echo __('Repeat Print'); ?></th>
		<th><?php echo __('Bag Width'); ?></th>
		<th><?php echo __('Bag Length'); ?></th>
		<th><?php echo __('Cylinder Circumference'); ?></th>
		<th><?php echo __('Cylinder Width'); ?></th>
		<th><?php echo __('Color'); ?></th>
		<th><?php echo __('Color One'); ?></th>
		<th><?php echo __('Color Two'); ?></th>
		<th><?php echo __('Color Three'); ?></th>
		<th><?php echo __('Color Four'); ?></th>
		<th><?php echo __('Color Five'); ?></th>
		<th><?php echo __('Color Six'); ?></th>
		<th><?php echo __('Side Printed'); ?></th>
		<th><?php echo __('Front'); ?></th>
		<th><?php echo __('Back'); ?></th>
		<th><?php echo __('Qty Per Set'); ?></th>
		<th><?php echo __('Pic Per Cylinder'); ?></th>
		<th><?php echo __('Front Back'); ?></th>
		<th><?php echo __('Barcode No'); ?></th>
		<th><?php echo __('Barcode Format'); ?></th>
		<th><?php echo __('Additional Info'); ?></th>
		<th><?php echo __('Amendment Note'); ?></th>
		<th><?php echo __('Film Substrate'); ?></th>
		<th><?php echo __('Film Color'); ?></th>
		<th><?php echo __('Eyemark Size'); ?></th>
		<th><?php echo __('Eyemark Color'); ?></th>
		<th><?php echo __('Eyemark Location'); ?></th>
		<th><?php echo __('Eyemark Code'); ?></th>
		<th><?php echo __('Crossmark Size'); ?></th>
		<th><?php echo __('Crossmark Position'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($item['CylinderSpecification'] as $cylinderSpecification): ?>
		<tr>
			<td><?php echo $cylinderSpecification['id']; ?></td>
			<td><?php echo $cylinderSpecification['item_id']; ?></td>
			<td><?php echo $cylinderSpecification['npi']; ?></td>
			<td><?php echo $cylinderSpecification['ref_no']; ?></td>
			<td><?php echo $cylinderSpecification['repeat_print']; ?></td>
			<td><?php echo $cylinderSpecification['bag_width']; ?></td>
			<td><?php echo $cylinderSpecification['bag_length']; ?></td>
			<td><?php echo $cylinderSpecification['cylinder_circumference']; ?></td>
			<td><?php echo $cylinderSpecification['cylinder_width']; ?></td>
			<td><?php echo $cylinderSpecification['color']; ?></td>
			<td><?php echo $cylinderSpecification['color_one']; ?></td>
			<td><?php echo $cylinderSpecification['color_two']; ?></td>
			<td><?php echo $cylinderSpecification['color_three']; ?></td>
			<td><?php echo $cylinderSpecification['color_four']; ?></td>
			<td><?php echo $cylinderSpecification['color_five']; ?></td>
			<td><?php echo $cylinderSpecification['color_six']; ?></td>
			<td><?php echo $cylinderSpecification['side_printed']; ?></td>
			<td><?php echo $cylinderSpecification['front']; ?></td>
			<td><?php echo $cylinderSpecification['back']; ?></td>
			<td><?php echo $cylinderSpecification['qty_per_set']; ?></td>
			<td><?php echo $cylinderSpecification['pic_per_cylinder']; ?></td>
			<td><?php echo $cylinderSpecification['front_back']; ?></td>
			<td><?php echo $cylinderSpecification['barcode_no']; ?></td>
			<td><?php echo $cylinderSpecification['barcode_format']; ?></td>
			<td><?php echo $cylinderSpecification['additional_info']; ?></td>
			<td><?php echo $cylinderSpecification['amendment_note']; ?></td>
			<td><?php echo $cylinderSpecification['film_substrate']; ?></td>
			<td><?php echo $cylinderSpecification['film_color']; ?></td>
			<td><?php echo $cylinderSpecification['eyemark_size']; ?></td>
			<td><?php echo $cylinderSpecification['eyemark_color']; ?></td>
			<td><?php echo $cylinderSpecification['eyemark_location']; ?></td>
			<td><?php echo $cylinderSpecification['eyemark_code']; ?></td>
			<td><?php echo $cylinderSpecification['crossmark_size']; ?></td>
			<td><?php echo $cylinderSpecification['crossmark_position']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cylinder_specifications', 'action' => 'view', $cylinderSpecification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cylinder_specifications', 'action' => 'edit', $cylinderSpecification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cylinder_specifications', 'action' => 'delete', $cylinderSpecification['id']), array(), __('Are you sure you want to delete # %s?', $cylinderSpecification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cylinder Specification'), array('controller' => 'cylinder_specifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Flexo Plate Specifications'); ?></h3>
	<?php if (!empty($item['FlexoPlateSpecification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Npi'); ?></th>
		<th><?php echo __('Ref No'); ?></th>
		<th><?php echo __('Flim Thickness'); ?></th>
		<th><?php echo __('Bag Width'); ?></th>
		<th><?php echo __('Bag Length'); ?></th>
		<th><?php echo __('Repeat Print'); ?></th>
		<th><?php echo __('Open Bottom Gusset'); ?></th>
		<th><?php echo __('Lip'); ?></th>
		<th><?php echo __('Color'); ?></th>
		<th><?php echo __('Color One'); ?></th>
		<th><?php echo __('Color Two'); ?></th>
		<th><?php echo __('Color Three'); ?></th>
		<th><?php echo __('Color Four'); ?></th>
		<th><?php echo __('Color Five'); ?></th>
		<th><?php echo __('Color Six'); ?></th>
		<th><?php echo __('Side Printed'); ?></th>
		<th><?php echo __('Front'); ?></th>
		<th><?php echo __('Back'); ?></th>
		<th><?php echo __('Qty Per Set'); ?></th>
		<th><?php echo __('Pic Per Plate'); ?></th>
		<th><?php echo __('Front Back'); ?></th>
		<th><?php echo __('Barcode No'); ?></th>
		<th><?php echo __('Barcode Format'); ?></th>
		<th><?php echo __('Additional Info'); ?></th>
		<th><?php echo __('Amendment Note'); ?></th>
		<th><?php echo __('Film Substrate'); ?></th>
		<th><?php echo __('Film Color'); ?></th>
		<th><?php echo __('Eyemark Size'); ?></th>
		<th><?php echo __('Eyemark Color'); ?></th>
		<th><?php echo __('Eyemark Location'); ?></th>
		<th><?php echo __('Eyemark Code'); ?></th>
		<th><?php echo __('Dot Mark'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($item['FlexoPlateSpecification'] as $flexoPlateSpecification): ?>
		<tr>
			<td><?php echo $flexoPlateSpecification['id']; ?></td>
			<td><?php echo $flexoPlateSpecification['item_id']; ?></td>
			<td><?php echo $flexoPlateSpecification['npi']; ?></td>
			<td><?php echo $flexoPlateSpecification['ref_no']; ?></td>
			<td><?php echo $flexoPlateSpecification['flim_thickness']; ?></td>
			<td><?php echo $flexoPlateSpecification['bag_width']; ?></td>
			<td><?php echo $flexoPlateSpecification['bag_length']; ?></td>
			<td><?php echo $flexoPlateSpecification['repeat_print']; ?></td>
			<td><?php echo $flexoPlateSpecification['open_bottom_gusset']; ?></td>
			<td><?php echo $flexoPlateSpecification['lip']; ?></td>
			<td><?php echo $flexoPlateSpecification['color']; ?></td>
			<td><?php echo $flexoPlateSpecification['color_one']; ?></td>
			<td><?php echo $flexoPlateSpecification['color_two']; ?></td>
			<td><?php echo $flexoPlateSpecification['color_three']; ?></td>
			<td><?php echo $flexoPlateSpecification['color_four']; ?></td>
			<td><?php echo $flexoPlateSpecification['color_five']; ?></td>
			<td><?php echo $flexoPlateSpecification['color_six']; ?></td>
			<td><?php echo $flexoPlateSpecification['side_printed']; ?></td>
			<td><?php echo $flexoPlateSpecification['front']; ?></td>
			<td><?php echo $flexoPlateSpecification['back']; ?></td>
			<td><?php echo $flexoPlateSpecification['qty_per_set']; ?></td>
			<td><?php echo $flexoPlateSpecification['pic_per_plate']; ?></td>
			<td><?php echo $flexoPlateSpecification['front_back']; ?></td>
			<td><?php echo $flexoPlateSpecification['barcode_no']; ?></td>
			<td><?php echo $flexoPlateSpecification['barcode_format']; ?></td>
			<td><?php echo $flexoPlateSpecification['additional_info']; ?></td>
			<td><?php echo $flexoPlateSpecification['amendment_note']; ?></td>
			<td><?php echo $flexoPlateSpecification['film_substrate']; ?></td>
			<td><?php echo $flexoPlateSpecification['film_color']; ?></td>
			<td><?php echo $flexoPlateSpecification['eyemark_size']; ?></td>
			<td><?php echo $flexoPlateSpecification['eyemark_color']; ?></td>
			<td><?php echo $flexoPlateSpecification['eyemark_location']; ?></td>
			<td><?php echo $flexoPlateSpecification['eyemark_code']; ?></td>
			<td><?php echo $flexoPlateSpecification['dot_mark']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'flexo_plate_specifications', 'action' => 'view', $flexoPlateSpecification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'flexo_plate_specifications', 'action' => 'edit', $flexoPlateSpecification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'flexo_plate_specifications', 'action' => 'delete', $flexoPlateSpecification['id']), array(), __('Are you sure you want to delete # %s?', $flexoPlateSpecification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Flexo Plate Specification'), array('controller' => 'flexo_plate_specifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Fusset Specifications'); ?></h3>
	<?php if (!empty($item['FussetSpecification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Npi'); ?></th>
		<th><?php echo __('Ref No'); ?></th>
		<th><?php echo __('Material'); ?></th>
		<th><?php echo __('Size'); ?></th>
		<th><?php echo __('Color Body'); ?></th>
		<th><?php echo __('Color Cap'); ?></th>
		<th><?php echo __('Compression Strength'); ?></th>
		<th><?php echo __('Amendment Note'); ?></th>
		<th><?php echo __('Remarks'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($item['FussetSpecification'] as $fussetSpecification): ?>
		<tr>
			<td><?php echo $fussetSpecification['id']; ?></td>
			<td><?php echo $fussetSpecification['item_id']; ?></td>
			<td><?php echo $fussetSpecification['npi']; ?></td>
			<td><?php echo $fussetSpecification['ref_no']; ?></td>
			<td><?php echo $fussetSpecification['material']; ?></td>
			<td><?php echo $fussetSpecification['size']; ?></td>
			<td><?php echo $fussetSpecification['color_body']; ?></td>
			<td><?php echo $fussetSpecification['color_cap']; ?></td>
			<td><?php echo $fussetSpecification['compression_strength']; ?></td>
			<td><?php echo $fussetSpecification['amendment_note']; ?></td>
			<td><?php echo $fussetSpecification['remarks']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'fusset_specifications', 'action' => 'view', $fussetSpecification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'fusset_specifications', 'action' => 'edit', $fussetSpecification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fusset_specifications', 'action' => 'delete', $fussetSpecification['id']), array(), __('Are you sure you want to delete # %s?', $fussetSpecification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Fusset Specification'), array('controller' => 'fusset_specifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Grommet Specifications'); ?></h3>
	<?php if (!empty($item['GrommetSpecification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Npi'); ?></th>
		<th><?php echo __('Ref No'); ?></th>
		<th><?php echo __('Size Diameter'); ?></th>
		<th><?php echo __('Size Hole Diameter'); ?></th>
		<th><?php echo __('Material'); ?></th>
		<th><?php echo __('Color'); ?></th>
		<th><?php echo __('Similar Grommet'); ?></th>
		<th><?php echo __('Compression Strength'); ?></th>
		<th><?php echo __('Amendment Note'); ?></th>
		<th><?php echo __('Remarks'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($item['GrommetSpecification'] as $grommetSpecification): ?>
		<tr>
			<td><?php echo $grommetSpecification['id']; ?></td>
			<td><?php echo $grommetSpecification['item_id']; ?></td>
			<td><?php echo $grommetSpecification['npi']; ?></td>
			<td><?php echo $grommetSpecification['ref_no']; ?></td>
			<td><?php echo $grommetSpecification['size_diameter']; ?></td>
			<td><?php echo $grommetSpecification['size_hole_diameter']; ?></td>
			<td><?php echo $grommetSpecification['material']; ?></td>
			<td><?php echo $grommetSpecification['color']; ?></td>
			<td><?php echo $grommetSpecification['similar_grommet']; ?></td>
			<td><?php echo $grommetSpecification['compression_strength']; ?></td>
			<td><?php echo $grommetSpecification['amendment_note']; ?></td>
			<td><?php echo $grommetSpecification['remarks']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'grommet_specifications', 'action' => 'view', $grommetSpecification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'grommet_specifications', 'action' => 'edit', $grommetSpecification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'grommet_specifications', 'action' => 'delete', $grommetSpecification['id']), array(), __('Are you sure you want to delete # %s?', $grommetSpecification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grommet Specification'), array('controller' => 'grommet_specifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Knife Specifications'); ?></h3>
	<?php if (!empty($item['KnifeSpecification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Npi'); ?></th>
		<th><?php echo __('Ref No'); ?></th>
		<th><?php echo __('Knife Size'); ?></th>
		<th><?php echo __('Similar Knife'); ?></th>
		<th><?php echo __('Knife Type'); ?></th>
		<th><?php echo __('M6 Screw Holes'); ?></th>
		<th><?php echo __('Machine Type'); ?></th>
		<th><?php echo __('Base'); ?></th>
		<th><?php echo __('Panchout'); ?></th>
		<th><?php echo __('Handle Length'); ?></th>
		<th><?php echo __('Handle-width'); ?></th>
		<th><?php echo __('Amendment Note'); ?></th>
		<th><?php echo __('Remarks'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($item['KnifeSpecification'] as $knifeSpecification): ?>
		<tr>
			<td><?php echo $knifeSpecification['id']; ?></td>
			<td><?php echo $knifeSpecification['item_id']; ?></td>
			<td><?php echo $knifeSpecification['npi']; ?></td>
			<td><?php echo $knifeSpecification['ref_no']; ?></td>
			<td><?php echo $knifeSpecification['knife_size']; ?></td>
			<td><?php echo $knifeSpecification['similar_knife']; ?></td>
			<td><?php echo $knifeSpecification['knife_type']; ?></td>
			<td><?php echo $knifeSpecification['m6_screw_holes']; ?></td>
			<td><?php echo $knifeSpecification['machine_type']; ?></td>
			<td><?php echo $knifeSpecification['base']; ?></td>
			<td><?php echo $knifeSpecification['panchout']; ?></td>
			<td><?php echo $knifeSpecification['handle_length']; ?></td>
			<td><?php echo $knifeSpecification['handle-width']; ?></td>
			<td><?php echo $knifeSpecification['amendment_note']; ?></td>
			<td><?php echo $knifeSpecification['remarks']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'knife_specifications', 'action' => 'view', $knifeSpecification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'knife_specifications', 'action' => 'edit', $knifeSpecification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'knife_specifications', 'action' => 'delete', $knifeSpecification['id']), array(), __('Are you sure you want to delete # %s?', $knifeSpecification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Knife Specification'), array('controller' => 'knife_specifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Label Specifications'); ?></h3>
	<?php if (!empty($item['LabelSpecification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Npi'); ?></th>
		<th><?php echo __('Ref No'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Size'); ?></th>
		<th><?php echo __('Label Color'); ?></th>
		<th><?php echo __('Wording Color'); ?></th>
		<th><?php echo __('Barcode Number'); ?></th>
		<th><?php echo __('Barcode Format'); ?></th>
		<th><?php echo __('Qty Per Vac Ctn'); ?></th>
		<th><?php echo __('Applied For'); ?></th>
		<th><?php echo __('Amendment Note'); ?></th>
		<th><?php echo __('Remarks'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($item['LabelSpecification'] as $labelSpecification): ?>
		<tr>
			<td><?php echo $labelSpecification['id']; ?></td>
			<td><?php echo $labelSpecification['item_id']; ?></td>
			<td><?php echo $labelSpecification['npi']; ?></td>
			<td><?php echo $labelSpecification['ref_no']; ?></td>
			<td><?php echo $labelSpecification['type']; ?></td>
			<td><?php echo $labelSpecification['size']; ?></td>
			<td><?php echo $labelSpecification['label_color']; ?></td>
			<td><?php echo $labelSpecification['wording_color']; ?></td>
			<td><?php echo $labelSpecification['barcode_number']; ?></td>
			<td><?php echo $labelSpecification['barcode_format']; ?></td>
			<td><?php echo $labelSpecification['qty_per_vac_ctn']; ?></td>
			<td><?php echo $labelSpecification['applied_for']; ?></td>
			<td><?php echo $labelSpecification['amendment_note']; ?></td>
			<td><?php echo $labelSpecification['remarks']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'label_specifications', 'action' => 'view', $labelSpecification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'label_specifications', 'action' => 'edit', $labelSpecification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'label_specifications', 'action' => 'delete', $labelSpecification['id']), array(), __('Are you sure you want to delete # %s?', $labelSpecification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Label Specification'), array('controller' => 'label_specifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Product Specifications'); ?></h3>
	<?php if (!empty($item['ProductSpecification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Prepared By'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Issue No'); ?></th>
		<th><?php echo __('Customer Ref'); ?></th>
		<th><?php echo __('Data Id'); ?></th>
		<th><?php echo __('Film Type'); ?></th>
		<th><?php echo __('Film Color'); ?></th>
		<th><?php echo __('Loop Color'); ?></th>
		<th><?php echo __('Printing Pantone Ref'); ?></th>
		<th><?php echo __('Printed'); ?></th>
		<th><?php echo __('No Of Color'); ?></th>
		<th><?php echo __('No Of Sides Printed'); ?></th>
		<th><?php echo __('Safty Holes'); ?></th>
		<th><?php echo __('Hanging Hole'); ?></th>
		<th><?php echo __('Embossed'); ?></th>
		<th><?php echo __('Glue Spot'); ?></th>
		<th><?php echo __('Diagonal Corner Seal'); ?></th>
		<th><?php echo __('Closed Width Specification'); ?></th>
		<th><?php echo __('Closed Width Tolerance'); ?></th>
		<th><?php echo __('Open Width Specification'); ?></th>
		<th><?php echo __('Open Width Tolerance'); ?></th>
		<th><?php echo __('Length Specification'); ?></th>
		<th><?php echo __('Length Tolerance'); ?></th>
		<th><?php echo __('Thickness Specification'); ?></th>
		<th><?php echo __('Thickness Tolerance'); ?></th>
		<th><?php echo __('Bag Weight Specification'); ?></th>
		<th><?php echo __('Bag Weight Tolerance'); ?></th>
		<th><?php echo __('Case Weight Specification'); ?></th>
		<th><?php echo __('Case Weight Tolerance'); ?></th>
		<th><?php echo __('Opacity Specification'); ?></th>
		<th><?php echo __('Opacity Tolerance'); ?></th>
		<th><?php echo __('Open Bottom Gusset Specification'); ?></th>
		<th><?php echo __('Open Bottom Gusset Tolerance'); ?></th>
		<th><?php echo __('Turn Over Top Specification'); ?></th>
		<th><?php echo __('Turn Over Top Tolerance'); ?></th>
		<th><?php echo __('Bag Lip Specification'); ?></th>
		<th><?php echo __('Bag Lip Tolerance'); ?></th>
		<th><?php echo __('Loop Thickness Specification'); ?></th>
		<th><?php echo __('Loop Thickness Tolerance'); ?></th>
		<th><?php echo __('Ultimate Lift Specification'); ?></th>
		<th><?php echo __('Ultimate Lift Tolerance'); ?></th>
		<th><?php echo __('Jog Test Specification'); ?></th>
		<th><?php echo __('Jog Test Tolerance'); ?></th>
		<th><?php echo __('Cut Out Specification'); ?></th>
		<th><?php echo __('Cut Out Tolerance'); ?></th>
		<th><?php echo __('Packing Type'); ?></th>
		<th><?php echo __('Case Quantity'); ?></th>
		<th><?php echo __('With Without Inner'); ?></th>
		<th><?php echo __('Quantity Per Inner'); ?></th>
		<th><?php echo __('Quantity Per Block'); ?></th>
		<th><?php echo __('Roll Dispensing'); ?></th>
		<th><?php echo __('Inner Pack Label Required'); ?></th>
		<th><?php echo __('Dispencing Design'); ?></th>
		<th><?php echo __('Palletize Loading Required'); ?></th>
		<th><?php echo __('Aplicable Regulation'); ?></th>
		<th><?php echo __('Additional Information'); ?></th>
		<th><?php echo __('Bag Artwork'); ?></th>
		<th><?php echo __('Ctn Artwork'); ?></th>
		<th><?php echo __('Label Artwork'); ?></th>
		<th><?php echo __('Placement Ctn'); ?></th>
		<th><?php echo __('Placement Label'); ?></th>
		<th><?php echo __('Ctn Vacpac Dimension Lengthn'); ?></th>
		<th><?php echo __('Ctn Vacpac Dimension Width'); ?></th>
		<th><?php echo __('Ctn Vacpac Dimension Height'); ?></th>
		<th><?php echo __('Ctn Vacpac Dimension Color'); ?></th>
		<th><?php echo __('Core Dimension Inner'); ?></th>
		<th><?php echo __('Core Dimension Length'); ?></th>
		<th><?php echo __('Core Dimension Thickness'); ?></th>
		<th><?php echo __('Core Dimension Weight'); ?></th>
		<th><?php echo __('Barcode Outer Case Type'); ?></th>
		<th><?php echo __('Barcode Outer Case Digit'); ?></th>
		<th><?php echo __('Barcode Inner Pack Type'); ?></th>
		<th><?php echo __('Barcode Inner Pack Digit'); ?></th>
		<th><?php echo __('Barcode Individual Bag Type'); ?></th>
		<th><?php echo __('Barcode Individual Bag Digit'); ?></th>
		<th><?php echo __('Approved By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($item['ProductSpecification'] as $productSpecification): ?>
		<tr>
			<td><?php echo $productSpecification['id']; ?></td>
			<td><?php echo $productSpecification['item_id']; ?></td>
			<td><?php echo $productSpecification['prepared_by']; ?></td>
			<td><?php echo $productSpecification['date']; ?></td>
			<td><?php echo $productSpecification['issue_no']; ?></td>
			<td><?php echo $productSpecification['customer_ref']; ?></td>
			<td><?php echo $productSpecification['data_id']; ?></td>
			<td><?php echo $productSpecification['film_type']; ?></td>
			<td><?php echo $productSpecification['film_color']; ?></td>
			<td><?php echo $productSpecification['loop_color']; ?></td>
			<td><?php echo $productSpecification['printing_pantone_ref']; ?></td>
			<td><?php echo $productSpecification['printed']; ?></td>
			<td><?php echo $productSpecification['no_of_color']; ?></td>
			<td><?php echo $productSpecification['no_of_sides_printed']; ?></td>
			<td><?php echo $productSpecification['safty_holes']; ?></td>
			<td><?php echo $productSpecification['hanging_hole']; ?></td>
			<td><?php echo $productSpecification['embossed']; ?></td>
			<td><?php echo $productSpecification['glue_spot']; ?></td>
			<td><?php echo $productSpecification['diagonal_corner_seal']; ?></td>
			<td><?php echo $productSpecification['closed_width_specification']; ?></td>
			<td><?php echo $productSpecification['closed_width_tolerance']; ?></td>
			<td><?php echo $productSpecification['open_width_specification']; ?></td>
			<td><?php echo $productSpecification['open_width_tolerance']; ?></td>
			<td><?php echo $productSpecification['length_specification']; ?></td>
			<td><?php echo $productSpecification['length_tolerance']; ?></td>
			<td><?php echo $productSpecification['thickness_specification']; ?></td>
			<td><?php echo $productSpecification['thickness_tolerance']; ?></td>
			<td><?php echo $productSpecification['bag_weight_specification']; ?></td>
			<td><?php echo $productSpecification['bag_weight_tolerance']; ?></td>
			<td><?php echo $productSpecification['case_weight_specification']; ?></td>
			<td><?php echo $productSpecification['case_weight_tolerance']; ?></td>
			<td><?php echo $productSpecification['opacity_specification']; ?></td>
			<td><?php echo $productSpecification['opacity_tolerance']; ?></td>
			<td><?php echo $productSpecification['open_bottom_gusset_specification']; ?></td>
			<td><?php echo $productSpecification['open_bottom_gusset_tolerance']; ?></td>
			<td><?php echo $productSpecification['turn_over_top_specification']; ?></td>
			<td><?php echo $productSpecification['turn_over_top_tolerance']; ?></td>
			<td><?php echo $productSpecification['bag_lip_specification']; ?></td>
			<td><?php echo $productSpecification['bag_lip_tolerance']; ?></td>
			<td><?php echo $productSpecification['loop_thickness_specification']; ?></td>
			<td><?php echo $productSpecification['loop_thickness_tolerance']; ?></td>
			<td><?php echo $productSpecification['ultimate_lift_specification']; ?></td>
			<td><?php echo $productSpecification['ultimate_lift_tolerance']; ?></td>
			<td><?php echo $productSpecification['jog_test_specification']; ?></td>
			<td><?php echo $productSpecification['jog_test_tolerance']; ?></td>
			<td><?php echo $productSpecification['cut_out_specification']; ?></td>
			<td><?php echo $productSpecification['cut_out_tolerance']; ?></td>
			<td><?php echo $productSpecification['packing_type']; ?></td>
			<td><?php echo $productSpecification['case_quantity']; ?></td>
			<td><?php echo $productSpecification['with_without_inner']; ?></td>
			<td><?php echo $productSpecification['quantity_per_inner']; ?></td>
			<td><?php echo $productSpecification['quantity_per_block']; ?></td>
			<td><?php echo $productSpecification['roll_dispensing']; ?></td>
			<td><?php echo $productSpecification['inner_pack_label_required']; ?></td>
			<td><?php echo $productSpecification['dispencing_design']; ?></td>
			<td><?php echo $productSpecification['palletize_loading_required']; ?></td>
			<td><?php echo $productSpecification['aplicable_regulation']; ?></td>
			<td><?php echo $productSpecification['additional_information']; ?></td>
			<td><?php echo $productSpecification['bag_artwork']; ?></td>
			<td><?php echo $productSpecification['ctn_artwork']; ?></td>
			<td><?php echo $productSpecification['label_artwork']; ?></td>
			<td><?php echo $productSpecification['placement_ctn']; ?></td>
			<td><?php echo $productSpecification['placement_label']; ?></td>
			<td><?php echo $productSpecification['ctn_vacpac_dimension_lengthn']; ?></td>
			<td><?php echo $productSpecification['ctn_vacpac_dimension_width']; ?></td>
			<td><?php echo $productSpecification['ctn_vacpac_dimension_height']; ?></td>
			<td><?php echo $productSpecification['ctn_vacpac_dimension_color']; ?></td>
			<td><?php echo $productSpecification['core_dimension_inner']; ?></td>
			<td><?php echo $productSpecification['core_dimension_length']; ?></td>
			<td><?php echo $productSpecification['core_dimension_thickness']; ?></td>
			<td><?php echo $productSpecification['core_dimension_weight']; ?></td>
			<td><?php echo $productSpecification['barcode_outer_case_type']; ?></td>
			<td><?php echo $productSpecification['barcode_outer_case_digit']; ?></td>
			<td><?php echo $productSpecification['barcode_inner_pack_type']; ?></td>
			<td><?php echo $productSpecification['barcode_inner_pack_digit']; ?></td>
			<td><?php echo $productSpecification['barcode_individual_bag_type']; ?></td>
			<td><?php echo $productSpecification['barcode_individual_bag_digit']; ?></td>
			<td><?php echo $productSpecification['approved_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'product_specifications', 'action' => 'view', $productSpecification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'product_specifications', 'action' => 'edit', $productSpecification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'product_specifications', 'action' => 'delete', $productSpecification['id']), array(), __('Are you sure you want to delete # %s?', $productSpecification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product Specification'), array('controller' => 'product_specifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Qf Bm Quality Report Details'); ?></h3>
	<?php if (!empty($item['QfBmQualityReportDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Id No'); ?></th>
		<th><?php echo __('Bag Weight Specification'); ?></th>
		<th><?php echo __('Ctn Weight Specification'); ?></th>
		<th><?php echo __('Closed Width Specification'); ?></th>
		<th><?php echo __('Open Width Specification'); ?></th>
		<th><?php echo __('Length Specification'); ?></th>
		<th><?php echo __('Handle Width Specification'); ?></th>
		<th><?php echo __('Handle Length Specification'); ?></th>
		<th><?php echo __('Pcs Block Specification'); ?></th>
		<th><?php echo __('Pcs Outer Specification'); ?></th>
		<th><?php echo __('No Of Outer Specification'); ?></th>
		<th><?php echo __('Knife Design Specification'); ?></th>
		<th><?php echo __('Knife Design'); ?></th>
		<th><?php echo __('Print Front Base'); ?></th>
		<th><?php echo __('Print Front Side'); ?></th>
		<th><?php echo __('Print Back Base'); ?></th>
		<th><?php echo __('Print Back Side'); ?></th>
		<th><?php echo __('Handle Lr'); ?></th>
		<th><?php echo __('Gusset Lr'); ?></th>
		<th><?php echo __('Bottom Base'); ?></th>
		<th><?php echo __('Six Step Checking'); ?></th>
		<th><?php echo __('No Blocking'); ?></th>
		<th><?php echo __('Safty Hole'); ?></th>
		<th><?php echo __('Hot Pin'); ?></th>
		<th><?php echo __('Embossed'); ?></th>
		<th><?php echo __('Gluespot'); ?></th>
		<th><?php echo __('Dispenser Test'); ?></th>
		<th><?php echo __('Packing'); ?></th>
		<th><?php echo __('Ctn Marking'); ?></th>
		<th><?php echo __('Jog Test'); ?></th>
		<th><?php echo __('Ultimate Lift'); ?></th>
		<th><?php echo __('Traceability Code One'); ?></th>
		<th><?php echo __('Traceability Code Two'); ?></th>
		<th><?php echo __('Eyemark Code One'); ?></th>
		<th><?php echo __('Eyemark Code Two'); ?></th>
		<th><?php echo __('Onhold Remark One'); ?></th>
		<th><?php echo __('Onhold Remark Two'); ?></th>
		<th><?php echo __('Version'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($item['QfBmQualityReportDetail'] as $qfBmQualityReportDetail): ?>
		<tr>
			<td><?php echo $qfBmQualityReportDetail['id']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['item_id']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['id_no']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['bag_weight_specification']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['ctn_weight_specification']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['closed_width_specification']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['open_width_specification']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['length_specification']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['handle_width_specification']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['handle_length_specification']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['pcs_block_specification']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['pcs_outer_specification']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['no_of_outer_specification']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['knife_design_specification']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['knife_design']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['print_front_base']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['print_front_side']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['print_back_base']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['print_back_side']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['handle_lr']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['gusset_lr']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['bottom_base']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['six_step_checking']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['no_blocking']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['safty_hole']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['hot_pin']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['embossed']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['gluespot']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['dispenser_test']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['packing']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['ctn_marking']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['jog_test']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['ultimate_lift']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['traceability_code_one']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['traceability_code_two']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['eyemark_code_one']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['eyemark_code_two']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['onhold_remark_one']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['onhold_remark_two']; ?></td>
			<td><?php echo $qfBmQualityReportDetail['version']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'qf_bm_quality_report_details', 'action' => 'view', $qfBmQualityReportDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'qf_bm_quality_report_details', 'action' => 'edit', $qfBmQualityReportDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'qf_bm_quality_report_details', 'action' => 'delete', $qfBmQualityReportDetail['id']), array(), __('Are you sure you want to delete # %s?', $qfBmQualityReportDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Qf Bm Quality Report Detail'), array('controller' => 'qf_bm_quality_report_details', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Qf Ext First Off Details'); ?></h3>
	<?php if (!empty($item['QfExtFirstOffDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Previous Product'); ?></th>
		<th><?php echo __('Cylinder Circ Specification'); ?></th>
		<th><?php echo __('Repeat Print Specification'); ?></th>
		<th><?php echo __('Gusset Specification'); ?></th>
		<th><?php echo __('Middle Specification'); ?></th>
		<th><?php echo __('Closed Width Specification'); ?></th>
		<th><?php echo __('Open Width Specification'); ?></th>
		<th><?php echo __('Film Type Specification'); ?></th>
		<th><?php echo __('Film Color Specification'); ?></th>
		<th><?php echo __('Embossed Specification'); ?></th>
		<th><?php echo __('Wt Meter Specification'); ?></th>
		<th><?php echo __('Screw Specification'); ?></th>
		<th><?php echo __('Take Up Speed Specification'); ?></th>
		<th><?php echo __('Gels Specification'); ?></th>
		<th><?php echo __('Metal Fracture Specification'); ?></th>
		<th><?php echo __('Die Line Specification'); ?></th>
		<th><?php echo __('Film Appearance One'); ?></th>
		<th><?php echo __('Film Appearance Two'); ?></th>
		<th><?php echo __('Film Appearance Three'); ?></th>
		<th><?php echo __('Film Appearance Four'); ?></th>
		<th><?php echo __('Artwork Detail'); ?></th>
		<th><?php echo __('Pantone One'); ?></th>
		<th><?php echo __('Pantone Two'); ?></th>
		<th><?php echo __('Pantone Three'); ?></th>
		<th><?php echo __('Pantone Four'); ?></th>
		<th><?php echo __('Pantone Five'); ?></th>
		<th><?php echo __('Pantone Six'); ?></th>
		<th><?php echo __('Viscosity One'); ?></th>
		<th><?php echo __('Viscosity Two'); ?></th>
		<th><?php echo __('Viscosity Three'); ?></th>
		<th><?php echo __('Viscosity Four'); ?></th>
		<th><?php echo __('Viscosity Five'); ?></th>
		<th><?php echo __('Viscosity Six'); ?></th>
		<th><?php echo __('Barcode No'); ?></th>
		<th><?php echo __('Rub Test'); ?></th>
		<th><?php echo __('Thickness'); ?></th>
		<th><?php echo __('Opacity'); ?></th>
		<th><?php echo __('Tear Strength Md'); ?></th>
		<th><?php echo __('Tear Strength Cd'); ?></th>
		<th><?php echo __('Tensile Strength Md'); ?></th>
		<th><?php echo __('Tensile Strength Cd'); ?></th>
		<th><?php echo __('Elongation Md'); ?></th>
		<th><?php echo __('Elongation Cd'); ?></th>
		<th><?php echo __('Tensile Strength Cd Mml'); ?></th>
		<th><?php echo __('Elongation'); ?></th>
		<th><?php echo __('Impact Strength One'); ?></th>
		<th><?php echo __('Impact Strength Two'); ?></th>
		<th><?php echo __('Impact Strength Three'); ?></th>
		<th><?php echo __('Impact Strength Four'); ?></th>
		<th><?php echo __('Impact Strength Five'); ?></th>
		<th><?php echo __('Impact Strength Six'); ?></th>
		<th><?php echo __('Version'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($item['QfExtFirstOffDetail'] as $qfExtFirstOffDetail): ?>
		<tr>
			<td><?php echo $qfExtFirstOffDetail['id']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['item_id']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['previous_product']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['cylinder_circ_specification']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['repeat_print_specification']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['gusset_specification']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['middle_specification']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['closed_width_specification']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['open_width_specification']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['film_type_specification']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['film_color_specification']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['embossed_specification']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['wt_meter_specification']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['screw_specification']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['take_up_speed_specification']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['gels_specification']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['metal_fracture_specification']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['die_line_specification']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['film_appearance_one']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['film_appearance_two']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['film_appearance_three']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['film_appearance_four']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['artwork_detail']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['pantone_one']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['pantone_two']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['pantone_three']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['pantone_four']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['pantone_five']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['pantone_six']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['viscosity_one']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['viscosity_two']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['viscosity_three']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['viscosity_four']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['viscosity_five']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['viscosity_six']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['barcode_no']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['rub_test']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['thickness']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['opacity']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['tear_strength_md']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['tear_strength_cd']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['tensile_strength_md']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['tensile_strength_cd']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['elongation_md']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['elongation_cd']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['tensile_strength_cd_mml']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['elongation']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['impact_strength_one']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['impact_strength_two']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['impact_strength_three']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['impact_strength_four']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['impact_strength_five']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['impact_strength_six']; ?></td>
			<td><?php echo $qfExtFirstOffDetail['version']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'qf_ext_first_off_details', 'action' => 'view', $qfExtFirstOffDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'qf_ext_first_off_details', 'action' => 'edit', $qfExtFirstOffDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'qf_ext_first_off_details', 'action' => 'delete', $qfExtFirstOffDetail['id']), array(), __('Are you sure you want to delete # %s?', $qfExtFirstOffDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Qf Ext First Off Detail'), array('controller' => 'qf_ext_first_off_details', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Qf Ext Form Details'); ?></h3>
	<?php if (!empty($item['QfExtFormDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Id No'); ?></th>
		<th><?php echo __('Left Gusset Width Specification'); ?></th>
		<th><?php echo __('Center Width Specification'); ?></th>
		<th><?php echo __('Right Gusset Width Specification'); ?></th>
		<th><?php echo __('Open Width Specification'); ?></th>
		<th><?php echo __('Weight Specification'); ?></th>
		<th><?php echo __('Thickness Specification'); ?></th>
		<th><?php echo __('Dart Impact Specification'); ?></th>
		<th><?php echo __('Embossed Specification'); ?></th>
		<th><?php echo __('Film Color Specification'); ?></th>
		<th><?php echo __('No Blocking'); ?></th>
		<th><?php echo __('Hand Brust'); ?></th>
		<th><?php echo __('Tearing'); ?></th>
		<th><?php echo __('Print Distance From Side'); ?></th>
		<th><?php echo __('Repeat Print'); ?></th>
		<th><?php echo __('Pantone'); ?></th>
		<th><?php echo __('Onhold Remark One'); ?></th>
		<th><?php echo __('Onhold Remark Two'); ?></th>
		<th><?php echo __('Version'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($item['QfExtFormDetail'] as $qfExtFormDetail): ?>
		<tr>
			<td><?php echo $qfExtFormDetail['id']; ?></td>
			<td><?php echo $qfExtFormDetail['item_id']; ?></td>
			<td><?php echo $qfExtFormDetail['id_no']; ?></td>
			<td><?php echo $qfExtFormDetail['left_gusset_width_specification']; ?></td>
			<td><?php echo $qfExtFormDetail['center_width_specification']; ?></td>
			<td><?php echo $qfExtFormDetail['right_gusset_width_specification']; ?></td>
			<td><?php echo $qfExtFormDetail['open_width_specification']; ?></td>
			<td><?php echo $qfExtFormDetail['weight_specification']; ?></td>
			<td><?php echo $qfExtFormDetail['thickness_specification']; ?></td>
			<td><?php echo $qfExtFormDetail['dart_impact_specification']; ?></td>
			<td><?php echo $qfExtFormDetail['embossed_specification']; ?></td>
			<td><?php echo $qfExtFormDetail['film_color_specification']; ?></td>
			<td><?php echo $qfExtFormDetail['no_blocking']; ?></td>
			<td><?php echo $qfExtFormDetail['hand_brust']; ?></td>
			<td><?php echo $qfExtFormDetail['tearing']; ?></td>
			<td><?php echo $qfExtFormDetail['print_distance_from_side']; ?></td>
			<td><?php echo $qfExtFormDetail['repeat_print']; ?></td>
			<td><?php echo $qfExtFormDetail['pantone']; ?></td>
			<td><?php echo $qfExtFormDetail['onhold_remark_one']; ?></td>
			<td><?php echo $qfExtFormDetail['onhold_remark_two']; ?></td>
			<td><?php echo $qfExtFormDetail['version']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'qf_ext_form_details', 'action' => 'view', $qfExtFormDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'qf_ext_form_details', 'action' => 'edit', $qfExtFormDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'qf_ext_form_details', 'action' => 'delete', $qfExtFormDetail['id']), array(), __('Are you sure you want to delete # %s?', $qfExtFormDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Qf Ext Form Detail'), array('controller' => 'qf_ext_form_details', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Qf First Off Details'); ?></h3>
	<?php if (!empty($item['QfFirstOffDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Ctn Marking'); ?></th>
		<th><?php echo __('Upload Two'); ?></th>
		<th><?php echo __('Upload Three'); ?></th>
		<th><?php echo __('Upload Four'); ?></th>
		<th><?php echo __('Label Size'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Left Cycle'); ?></th>
		<th><?php echo __('Right Cycle'); ?></th>
		<th><?php echo __('Fold Specification'); ?></th>
		<th><?php echo __('Qty Per Bundle Specification'); ?></th>
		<th><?php echo __('Hot Pin Specification'); ?></th>
		<th><?php echo __('Embossed Specification'); ?></th>
		<th><?php echo __('Gluespot Specification'); ?></th>
		<th><?php echo __('Qty Per Outer Specification'); ?></th>
		<th><?php echo __('Qty Per Ctn Specification'); ?></th>
		<th><?php echo __('Weight Per Ctn Specification'); ?></th>
		<th><?php echo __('Knife Design'); ?></th>
		<th><?php echo __('Knife Size'); ?></th>
		<th><?php echo __('Artwork'); ?></th>
		<th><?php echo __('Extra Textf'); ?></th>
		<th><?php echo __('Gusset Specification'); ?></th>
		<th><?php echo __('Closed Width Specification'); ?></th>
		<th><?php echo __('Length Specification'); ?></th>
		<th><?php echo __('Print Bottom Front Specification'); ?></th>
		<th><?php echo __('Handle Length Specification'); ?></th>
		<th><?php echo __('Handle Width Specification'); ?></th>
		<th><?php echo __('Perforation Position Side One'); ?></th>
		<th><?php echo __('Perforation Position Side Two'); ?></th>
		<th><?php echo __('Perforation Position Bottom One'); ?></th>
		<th><?php echo __('Perforation Position Bottom Two'); ?></th>
		<th><?php echo __('Perforation Size One'); ?></th>
		<th><?php echo __('Perforation Size Two'); ?></th>
		<th><?php echo __('Dispenser Test'); ?></th>
		<th><?php echo __('No Blocking'); ?></th>
		<th><?php echo __('Jog Test'); ?></th>
		<th><?php echo __('Single Handle Lift'); ?></th>
		<th><?php echo __('Ultimate Lift'); ?></th>
		<th><?php echo __('Punch Out Average'); ?></th>
		<th><?php echo __('Sample Bag Attachment'); ?></th>
		<th><?php echo __('Last Revision Date'); ?></th>
		<th><?php echo __('Version'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($item['QfFirstOffDetail'] as $qfFirstOffDetail): ?>
		<tr>
			<td><?php echo $qfFirstOffDetail['id']; ?></td>
			<td><?php echo $qfFirstOffDetail['item_id']; ?></td>
			<td><?php echo $qfFirstOffDetail['ctn_marking']; ?></td>
			<td><?php echo $qfFirstOffDetail['upload_two']; ?></td>
			<td><?php echo $qfFirstOffDetail['upload_three']; ?></td>
			<td><?php echo $qfFirstOffDetail['upload_four']; ?></td>
			<td><?php echo $qfFirstOffDetail['label_size']; ?></td>
			<td><?php echo $qfFirstOffDetail['description']; ?></td>
			<td><?php echo $qfFirstOffDetail['left_cycle']; ?></td>
			<td><?php echo $qfFirstOffDetail['right_cycle']; ?></td>
			<td><?php echo $qfFirstOffDetail['fold_specification']; ?></td>
			<td><?php echo $qfFirstOffDetail['qty_per_bundle_specification']; ?></td>
			<td><?php echo $qfFirstOffDetail['hot_pin_specification']; ?></td>
			<td><?php echo $qfFirstOffDetail['embossed_specification']; ?></td>
			<td><?php echo $qfFirstOffDetail['gluespot_specification']; ?></td>
			<td><?php echo $qfFirstOffDetail['qty_per_outer_specification']; ?></td>
			<td><?php echo $qfFirstOffDetail['qty_per_ctn_specification']; ?></td>
			<td><?php echo $qfFirstOffDetail['weight_per_ctn_specification']; ?></td>
			<td><?php echo $qfFirstOffDetail['knife_design']; ?></td>
			<td><?php echo $qfFirstOffDetail['knife_size']; ?></td>
			<td><?php echo $qfFirstOffDetail['artwork']; ?></td>
			<td><?php echo $qfFirstOffDetail['extra_textf']; ?></td>
			<td><?php echo $qfFirstOffDetail['gusset_specification']; ?></td>
			<td><?php echo $qfFirstOffDetail['closed_width_specification']; ?></td>
			<td><?php echo $qfFirstOffDetail['length_specification']; ?></td>
			<td><?php echo $qfFirstOffDetail['print_bottom_front_specification']; ?></td>
			<td><?php echo $qfFirstOffDetail['handle_length_specification']; ?></td>
			<td><?php echo $qfFirstOffDetail['handle_width_specification']; ?></td>
			<td><?php echo $qfFirstOffDetail['perforation_position_side_one']; ?></td>
			<td><?php echo $qfFirstOffDetail['perforation_position_side_two']; ?></td>
			<td><?php echo $qfFirstOffDetail['perforation_position_bottom_one']; ?></td>
			<td><?php echo $qfFirstOffDetail['perforation_position_bottom_two']; ?></td>
			<td><?php echo $qfFirstOffDetail['perforation_size_one']; ?></td>
			<td><?php echo $qfFirstOffDetail['perforation_size_two']; ?></td>
			<td><?php echo $qfFirstOffDetail['dispenser_test']; ?></td>
			<td><?php echo $qfFirstOffDetail['no_blocking']; ?></td>
			<td><?php echo $qfFirstOffDetail['jog_test']; ?></td>
			<td><?php echo $qfFirstOffDetail['single_handle_lift']; ?></td>
			<td><?php echo $qfFirstOffDetail['ultimate_lift']; ?></td>
			<td><?php echo $qfFirstOffDetail['punch_out_average']; ?></td>
			<td><?php echo $qfFirstOffDetail['sample_bag_attachment']; ?></td>
			<td><?php echo $qfFirstOffDetail['last_revision_date']; ?></td>
			<td><?php echo $qfFirstOffDetail['version']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'qf_first_off_details', 'action' => 'view', $qfFirstOffDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'qf_first_off_details', 'action' => 'edit', $qfFirstOffDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'qf_first_off_details', 'action' => 'delete', $qfFirstOffDetail['id']), array(), __('Are you sure you want to delete # %s?', $qfFirstOffDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Qf First Off Detail'), array('controller' => 'qf_first_off_details', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Qf Positive Release Details'); ?></h3>
	<?php if (!empty($item['QfPositiveReleaseDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Bag Weight Std'); ?></th>
		<th><?php echo __('Bag Weight Min'); ?></th>
		<th><?php echo __('Bag Weight Max'); ?></th>
		<th><?php echo __('Vac Pack Weight Std'); ?></th>
		<th><?php echo __('Vac Pack Weight Min'); ?></th>
		<th><?php echo __('Vac Pack Weight Max'); ?></th>
		<th><?php echo __('Average Thickness Std'); ?></th>
		<th><?php echo __('Average Thickness Min'); ?></th>
		<th><?php echo __('Average Thickness Max'); ?></th>
		<th><?php echo __('Spot Thickness Std'); ?></th>
		<th><?php echo __('Spot Thickness Min'); ?></th>
		<th><?php echo __('Spot Thickness Max'); ?></th>
		<th><?php echo __('Opacity Std'); ?></th>
		<th><?php echo __('Opacity Min'); ?></th>
		<th><?php echo __('Opacity Max'); ?></th>
		<th><?php echo __('Dart Impact Weight Std'); ?></th>
		<th><?php echo __('Dart Impact Weight Min'); ?></th>
		<th><?php echo __('Dart Impact Weight Max'); ?></th>
		<th><?php echo __('Tensile Strength Md Std'); ?></th>
		<th><?php echo __('Tensile Strength Md Min'); ?></th>
		<th><?php echo __('Tensile Strength Md Max'); ?></th>
		<th><?php echo __('Tensile Strength Cd Std'); ?></th>
		<th><?php echo __('Tensile Strength Cd Min'); ?></th>
		<th><?php echo __('Tensile Strength Cd Max'); ?></th>
		<th><?php echo __('Tape Test'); ?></th>
		<th><?php echo __('Hotpin Collection Std'); ?></th>
		<th><?php echo __('Hotpin Collection Min'); ?></th>
		<th><?php echo __('Hotpin Collection Max'); ?></th>
		<th><?php echo __('Barcode Scanner'); ?></th>
		<th><?php echo __('Surface Treatment'); ?></th>
		<th><?php echo __('Color Fastness'); ?></th>
		<th><?php echo __('Jog Test Intertek Std'); ?></th>
		<th><?php echo __('Jog Test Intertek Min'); ?></th>
		<th><?php echo __('Jog Test Intertek Max'); ?></th>
		<th><?php echo __('Ultimate Lift Std'); ?></th>
		<th><?php echo __('Ultimate Lift Min'); ?></th>
		<th><?php echo __('Ultimate Lift Max'); ?></th>
		<th><?php echo __('Handle Length Std'); ?></th>
		<th><?php echo __('Handle Length Min'); ?></th>
		<th><?php echo __('Handle Length Max'); ?></th>
		<th><?php echo __('Handle Width Std'); ?></th>
		<th><?php echo __('Handle Width Min'); ?></th>
		<th><?php echo __('Handle Width Max'); ?></th>
		<th><?php echo __('Bag Length Std'); ?></th>
		<th><?php echo __('Bag Length Min'); ?></th>
		<th><?php echo __('Bag Length Max'); ?></th>
		<th><?php echo __('Open Width Std'); ?></th>
		<th><?php echo __('Open Width Min'); ?></th>
		<th><?php echo __('Open Width Max'); ?></th>
		<th><?php echo __('Closed Width Std'); ?></th>
		<th><?php echo __('Closed Width Min'); ?></th>
		<th><?php echo __('Closed Width Max'); ?></th>
		<th><?php echo __('Gusset Fold Std'); ?></th>
		<th><?php echo __('Gusset Fold Min'); ?></th>
		<th><?php echo __('Gusset Fold Max'); ?></th>
		<th><?php echo __('Handle Seal Std'); ?></th>
		<th><?php echo __('Handle Seal Min'); ?></th>
		<th><?php echo __('Handle Seal Max'); ?></th>
		<th><?php echo __('Bottom Gusset Seal Std'); ?></th>
		<th><?php echo __('Bottom Gusset Seal Min'); ?></th>
		<th><?php echo __('Bottom Gusset Seal Max'); ?></th>
		<th><?php echo __('Base Seal Std'); ?></th>
		<th><?php echo __('Base Seal Min'); ?></th>
		<th><?php echo __('Base Seal Max'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($item['QfPositiveReleaseDetail'] as $qfPositiveReleaseDetail): ?>
		<tr>
			<td><?php echo $qfPositiveReleaseDetail['id']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['item_id']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['bag_weight_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['bag_weight_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['bag_weight_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['vac_pack_weight_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['vac_pack_weight_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['vac_pack_weight_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['average_thickness_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['average_thickness_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['average_thickness_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['spot_thickness_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['spot_thickness_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['spot_thickness_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['opacity_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['opacity_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['opacity_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['dart_impact_weight_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['dart_impact_weight_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['dart_impact_weight_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['tensile_strength_md_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['tensile_strength_md_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['tensile_strength_md_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['tensile_strength_cd_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['tensile_strength_cd_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['tensile_strength_cd_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['tape_test']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['hotpin_collection_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['hotpin_collection_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['hotpin_collection_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['barcode_scanner']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['surface_treatment']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['color_fastness']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['jog_test_intertek_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['jog_test_intertek_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['jog_test_intertek_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['ultimate_lift_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['ultimate_lift_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['ultimate_lift_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['handle_length_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['handle_length_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['handle_length_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['handle_width_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['handle_width_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['handle_width_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['bag_length_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['bag_length_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['bag_length_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['open_width_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['open_width_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['open_width_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['closed_width_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['closed_width_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['closed_width_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['gusset_fold_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['gusset_fold_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['gusset_fold_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['handle_seal_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['handle_seal_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['handle_seal_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['bottom_gusset_seal_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['bottom_gusset_seal_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['bottom_gusset_seal_max']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['base_seal_std']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['base_seal_min']; ?></td>
			<td><?php echo $qfPositiveReleaseDetail['base_seal_max']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'qf_positive_release_details', 'action' => 'view', $qfPositiveReleaseDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'qf_positive_release_details', 'action' => 'edit', $qfPositiveReleaseDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'qf_positive_release_details', 'action' => 'delete', $qfPositiveReleaseDetail['id']), array(), __('Are you sure you want to delete # %s?', $qfPositiveReleaseDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Qf Positive Release Detail'), array('controller' => 'qf_positive_release_details', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Wicket Specifications'); ?></h3>
	<?php if (!empty($item['WicketSpecification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Npi'); ?></th>
		<th><?php echo __('Ref No'); ?></th>
		<th><?php echo __('Size Length'); ?></th>
		<th><?php echo __('Size Middle'); ?></th>
		<th><?php echo __('Size Diameter'); ?></th>
		<th><?php echo __('Material'); ?></th>
		<th><?php echo __('Similar Wicket'); ?></th>
		<th><?php echo __('Compression Strength'); ?></th>
		<th><?php echo __('Amendment Note'); ?></th>
		<th><?php echo __('Remarks'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($item['WicketSpecification'] as $wicketSpecification): ?>
		<tr>
			<td><?php echo $wicketSpecification['id']; ?></td>
			<td><?php echo $wicketSpecification['item_id']; ?></td>
			<td><?php echo $wicketSpecification['npi']; ?></td>
			<td><?php echo $wicketSpecification['ref_no']; ?></td>
			<td><?php echo $wicketSpecification['size_length']; ?></td>
			<td><?php echo $wicketSpecification['size_middle']; ?></td>
			<td><?php echo $wicketSpecification['size_diameter']; ?></td>
			<td><?php echo $wicketSpecification['material']; ?></td>
			<td><?php echo $wicketSpecification['similar_wicket']; ?></td>
			<td><?php echo $wicketSpecification['compression_strength']; ?></td>
			<td><?php echo $wicketSpecification['amendment_note']; ?></td>
			<td><?php echo $wicketSpecification['remarks']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'wicket_specifications', 'action' => 'view', $wicketSpecification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'wicket_specifications', 'action' => 'edit', $wicketSpecification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'wicket_specifications', 'action' => 'delete', $wicketSpecification['id']), array(), __('Are you sure you want to delete # %s?', $wicketSpecification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Wicket Specification'), array('controller' => 'wicket_specifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
