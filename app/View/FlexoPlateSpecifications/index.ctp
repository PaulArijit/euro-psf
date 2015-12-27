<div class="flexoPlateSpecifications index">
	<h2><?php echo __('Flexo Plate Specifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('npi'); ?></th>
			<th><?php echo $this->Paginator->sort('ref_no'); ?></th>
			<th><?php echo $this->Paginator->sort('flim_thickness'); ?></th>
			<th><?php echo $this->Paginator->sort('bag_width'); ?></th>
			<th><?php echo $this->Paginator->sort('bag_length'); ?></th>
			<th><?php echo $this->Paginator->sort('repeat_print'); ?></th>
			<th><?php echo $this->Paginator->sort('open_bottom_gusset'); ?></th>
			<th><?php echo $this->Paginator->sort('lip'); ?></th>
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
			<th><?php echo $this->Paginator->sort('pic_per_plate'); ?></th>
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
			<th><?php echo $this->Paginator->sort('dot_mark'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($flexoPlateSpecifications as $flexoPlateSpecification): ?>
	<tr>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($flexoPlateSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $flexoPlateSpecification['Item']['id'])); ?>
		</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['npi']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['ref_no']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['flim_thickness']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['bag_width']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['bag_length']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['repeat_print']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['open_bottom_gusset']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['lip']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['color']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['color_one']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['color_two']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['color_three']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['color_four']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['color_five']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['color_six']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['side_printed']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['front']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['back']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['qty_per_set']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['pic_per_plate']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['front_back']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['barcode_no']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['barcode_format']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['additional_info']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['amendment_note']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['film_substrate']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['film_color']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['eyemark_size']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['eyemark_color']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['eyemark_location']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['eyemark_code']); ?>&nbsp;</td>
		<td><?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['dot_mark']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $flexoPlateSpecification['FlexoPlateSpecification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $flexoPlateSpecification['FlexoPlateSpecification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $flexoPlateSpecification['FlexoPlateSpecification']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $flexoPlateSpecification['FlexoPlateSpecification']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Flexo Plate Specification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
