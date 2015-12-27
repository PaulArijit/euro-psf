<div class="cylinderSpecifications index">
	<h2><?php echo __('Cylinder Specifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('npi'); ?></th>
			<th><?php echo $this->Paginator->sort('ref_no'); ?></th>
			<th><?php echo $this->Paginator->sort('repeat_print'); ?></th>
			<th><?php echo $this->Paginator->sort('bag_width'); ?></th>
			<th><?php echo $this->Paginator->sort('bag_length'); ?></th>
			<th><?php echo $this->Paginator->sort('cylinder_circumference'); ?></th>
			<th><?php echo $this->Paginator->sort('cylinder_width'); ?></th>
			<th><?php echo $this->Paginator->sort('color'); ?></th>
			<th><?php echo $this->Paginator->sort('color_one'); ?></th>
			<th><?php echo $this->Paginator->sort('color_two'); ?></th>
			<th><?php echo $this->Paginator->sort('color_three'); ?></th>
			<th><?php echo $this->Paginator->sort('color_four'); ?></th>
			<th><?php echo $this->Paginator->sort('color_five'); ?></th>
			<th><?php echo $this->Paginator->sort('color_six'); ?></th>
			<th><?php echo $this->Paginator->sort('side_printed'); ?></th>
			<th><?php echo $this->Paginator->sort('front'); ?></th>
			<th><?php echo $this->Paginator->sort('back'); ?></th>
			<th><?php echo $this->Paginator->sort('qty_per_set'); ?></th>
			<th><?php echo $this->Paginator->sort('pic_per_cylinder'); ?></th>
			<th><?php echo $this->Paginator->sort('front_back'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode_no'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode_format'); ?></th>
			<th><?php echo $this->Paginator->sort('additional_info'); ?></th>
			<th><?php echo $this->Paginator->sort('amendment_note'); ?></th>
			<th><?php echo $this->Paginator->sort('film_substrate'); ?></th>
			<th><?php echo $this->Paginator->sort('film_color'); ?></th>
			<th><?php echo $this->Paginator->sort('eyemark_size'); ?></th>
			<th><?php echo $this->Paginator->sort('eyemark_color'); ?></th>
			<th><?php echo $this->Paginator->sort('eyemark_location'); ?></th>
			<th><?php echo $this->Paginator->sort('eyemark_code'); ?></th>
			<th><?php echo $this->Paginator->sort('crossmark_size'); ?></th>
			<th><?php echo $this->Paginator->sort('crossmark_position'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cylinderSpecifications as $cylinderSpecification): ?>
	<tr>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cylinderSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $cylinderSpecification['Item']['id'])); ?>
		</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['npi']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['ref_no']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['repeat_print']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['bag_width']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['bag_length']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['cylinder_circumference']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['cylinder_width']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['color']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['color_one']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['color_two']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['color_three']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['color_four']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['color_five']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['color_six']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['side_printed']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['front']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['back']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['qty_per_set']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['pic_per_cylinder']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['front_back']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['barcode_no']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['barcode_format']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['additional_info']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['amendment_note']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['film_substrate']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['film_color']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['eyemark_size']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['eyemark_color']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['eyemark_location']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['eyemark_code']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['crossmark_size']); ?>&nbsp;</td>
		<td><?php echo h($cylinderSpecification['CylinderSpecification']['crossmark_position']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cylinderSpecification['CylinderSpecification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cylinderSpecification['CylinderSpecification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cylinderSpecification['CylinderSpecification']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cylinderSpecification['CylinderSpecification']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Cylinder Specification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
