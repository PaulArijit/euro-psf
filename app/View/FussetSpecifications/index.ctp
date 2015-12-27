<div class="fussetSpecifications index">
	<h2><?php echo __('Fusset Specifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('npi'); ?></th>
			<th><?php echo $this->Paginator->sort('ref_no'); ?></th>
			<th><?php echo $this->Paginator->sort('material'); ?></th>
			<th><?php echo $this->Paginator->sort('size'); ?></th>
			<th><?php echo $this->Paginator->sort('color_body'); ?></th>
			<th><?php echo $this->Paginator->sort('color_cap'); ?></th>
			<th><?php echo $this->Paginator->sort('compression_strength'); ?></th>
			<th><?php echo $this->Paginator->sort('amendment_note'); ?></th>
			<th><?php echo $this->Paginator->sort('remarks'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($fussetSpecifications as $fussetSpecification): ?>
	<tr>
		<td><?php echo h($fussetSpecification['FussetSpecification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fussetSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $fussetSpecification['Item']['id'])); ?>
		</td>
		<td><?php echo h($fussetSpecification['FussetSpecification']['npi']); ?>&nbsp;</td>
		<td><?php echo h($fussetSpecification['FussetSpecification']['ref_no']); ?>&nbsp;</td>
		<td><?php echo h($fussetSpecification['FussetSpecification']['material']); ?>&nbsp;</td>
		<td><?php echo h($fussetSpecification['FussetSpecification']['size']); ?>&nbsp;</td>
		<td><?php echo h($fussetSpecification['FussetSpecification']['color_body']); ?>&nbsp;</td>
		<td><?php echo h($fussetSpecification['FussetSpecification']['color_cap']); ?>&nbsp;</td>
		<td><?php echo h($fussetSpecification['FussetSpecification']['compression_strength']); ?>&nbsp;</td>
		<td><?php echo h($fussetSpecification['FussetSpecification']['amendment_note']); ?>&nbsp;</td>
		<td><?php echo h($fussetSpecification['FussetSpecification']['remarks']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fussetSpecification['FussetSpecification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fussetSpecification['FussetSpecification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fussetSpecification['FussetSpecification']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $fussetSpecification['FussetSpecification']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Fusset Specification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
