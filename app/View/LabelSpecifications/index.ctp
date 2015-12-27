<div class="labelSpecifications index">
	<h2><?php echo __('Label Specifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('npi'); ?></th>
			<th><?php echo $this->Paginator->sort('ref_no'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('size'); ?></th>
			<th><?php echo $this->Paginator->sort('label_color'); ?></th>
			<th><?php echo $this->Paginator->sort('wording_color'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode_number'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode_format'); ?></th>
			<th><?php echo $this->Paginator->sort('qty_per_vac_ctn'); ?></th>
			<th><?php echo $this->Paginator->sort('applied_for'); ?></th>
			<th><?php echo $this->Paginator->sort('amendment_note'); ?></th>
			<th><?php echo $this->Paginator->sort('remarks'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($labelSpecifications as $labelSpecification): ?>
	<tr>
		<td><?php echo h($labelSpecification['LabelSpecification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($labelSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $labelSpecification['Item']['id'])); ?>
		</td>
		<td><?php echo h($labelSpecification['LabelSpecification']['npi']); ?>&nbsp;</td>
		<td><?php echo h($labelSpecification['LabelSpecification']['ref_no']); ?>&nbsp;</td>
		<td><?php echo h($labelSpecification['LabelSpecification']['type']); ?>&nbsp;</td>
		<td><?php echo h($labelSpecification['LabelSpecification']['size']); ?>&nbsp;</td>
		<td><?php echo h($labelSpecification['LabelSpecification']['label_color']); ?>&nbsp;</td>
		<td><?php echo h($labelSpecification['LabelSpecification']['wording_color']); ?>&nbsp;</td>
		<td><?php echo h($labelSpecification['LabelSpecification']['barcode_number']); ?>&nbsp;</td>
		<td><?php echo h($labelSpecification['LabelSpecification']['barcode_format']); ?>&nbsp;</td>
		<td><?php echo h($labelSpecification['LabelSpecification']['qty_per_vac_ctn']); ?>&nbsp;</td>
		<td><?php echo h($labelSpecification['LabelSpecification']['applied_for']); ?>&nbsp;</td>
		<td><?php echo h($labelSpecification['LabelSpecification']['amendment_note']); ?>&nbsp;</td>
		<td><?php echo h($labelSpecification['LabelSpecification']['remarks']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $labelSpecification['LabelSpecification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $labelSpecification['LabelSpecification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $labelSpecification['LabelSpecification']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $labelSpecification['LabelSpecification']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Label Specification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
