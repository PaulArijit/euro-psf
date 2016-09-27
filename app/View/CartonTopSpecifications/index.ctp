<div class="cartonTopSpecifications index">
	<h2><?php echo __('Carton Top Specifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('npi'); ?></th>
			<th><?php echo $this->Paginator->sort('ref_no'); ?></th>
			<th><?php echo $this->Paginator->sort('size'); ?></th>
			<th><?php echo $this->Paginator->sort('board_quality'); ?></th>
			<th><?php echo $this->Paginator->sort('marking_color'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode_number'); ?></th>
			<th><?php echo $this->Paginator->sort('product_gross_weight'); ?></th>
			<th><?php echo $this->Paginator->sort('film_embossed'); ?></th>
			<th><?php echo $this->Paginator->sort('ctn_marking_position'); ?></th>
			<th><?php echo $this->Paginator->sort('ctn_marking_size_width'); ?></th>
			<th><?php echo $this->Paginator->sort('ctn_marking_size_height'); ?></th>
			<th><?php echo $this->Paginator->sort('aditional_requirement'); ?></th>
			<th><?php echo $this->Paginator->sort('amendment_note'); ?></th>
			<th><?php echo $this->Paginator->sort('additional_information'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cartonTopSpecifications as $cartonTopSpecification): ?>
	<tr>
		<td><?php echo h($cartonTopSpecification['CartonTopSpecification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cartonTopSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $cartonTopSpecification['Item']['id'])); ?>
		</td>
		<td><?php echo h($cartonTopSpecification['CartonTopSpecification']['npi']); ?>&nbsp;</td>
		<td><?php echo h($cartonTopSpecification['CartonTopSpecification']['ref_no']); ?>&nbsp;</td>
		<td><?php echo h($cartonTopSpecification['CartonTopSpecification']['size']); ?>&nbsp;</td>
		<td><?php echo h($cartonTopSpecification['CartonTopSpecification']['board_quality']); ?>&nbsp;</td>
		<td><?php echo h($cartonTopSpecification['CartonTopSpecification']['marking_color']); ?>&nbsp;</td>
		<td><?php echo h($cartonTopSpecification['CartonTopSpecification']['barcode_number']); ?>&nbsp;</td>
		<td><?php echo h($cartonTopSpecification['CartonTopSpecification']['product_gross_weight']); ?>&nbsp;</td>
		<td><?php echo h($cartonTopSpecification['CartonTopSpecification']['film_embossed']); ?>&nbsp;</td>
		<td><?php echo h($cartonTopSpecification['CartonTopSpecification']['ctn_marking_position']); ?>&nbsp;</td>
		<td><?php echo h($cartonTopSpecification['CartonTopSpecification']['ctn_marking_size_width']); ?>&nbsp;</td>
		<td><?php echo h($cartonTopSpecification['CartonTopSpecification']['ctn_marking_size_height']); ?>&nbsp;</td>
		<td><?php echo h($cartonTopSpecification['CartonTopSpecification']['aditional_requirement']); ?>&nbsp;</td>
		<td><?php echo h($cartonTopSpecification['CartonTopSpecification']['amendment_note']); ?>&nbsp;</td>
		<td><?php echo h($cartonTopSpecification['CartonTopSpecification']['additional_information']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cartonTopSpecification['CartonTopSpecification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cartonTopSpecification['CartonTopSpecification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cartonTopSpecification['CartonTopSpecification']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cartonTopSpecification['CartonTopSpecification']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Carton Top Specification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
