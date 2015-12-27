<div class="wicketSpecifications index">
	<h2><?php echo __('Wicket Specifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('npi'); ?></th>
			<th><?php echo $this->Paginator->sort('ref_no'); ?></th>
			<th><?php echo $this->Paginator->sort('size_length'); ?></th>
			<th><?php echo $this->Paginator->sort('size_middle'); ?></th>
			<th><?php echo $this->Paginator->sort('size_diameter'); ?></th>
			<th><?php echo $this->Paginator->sort('material'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_wicket'); ?></th>
			<th><?php echo $this->Paginator->sort('compression_strength'); ?></th>
			<th><?php echo $this->Paginator->sort('amendment_note'); ?></th>
			<th><?php echo $this->Paginator->sort('remarks'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($wicketSpecifications as $wicketSpecification): ?>
	<tr>
		<td><?php echo h($wicketSpecification['WicketSpecification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($wicketSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $wicketSpecification['Item']['id'])); ?>
		</td>
		<td><?php echo h($wicketSpecification['WicketSpecification']['npi']); ?>&nbsp;</td>
		<td><?php echo h($wicketSpecification['WicketSpecification']['ref_no']); ?>&nbsp;</td>
		<td><?php echo h($wicketSpecification['WicketSpecification']['size_length']); ?>&nbsp;</td>
		<td><?php echo h($wicketSpecification['WicketSpecification']['size_middle']); ?>&nbsp;</td>
		<td><?php echo h($wicketSpecification['WicketSpecification']['size_diameter']); ?>&nbsp;</td>
		<td><?php echo h($wicketSpecification['WicketSpecification']['material']); ?>&nbsp;</td>
		<td><?php echo h($wicketSpecification['WicketSpecification']['similar_wicket']); ?>&nbsp;</td>
		<td><?php echo h($wicketSpecification['WicketSpecification']['compression_strength']); ?>&nbsp;</td>
		<td><?php echo h($wicketSpecification['WicketSpecification']['amendment_note']); ?>&nbsp;</td>
		<td><?php echo h($wicketSpecification['WicketSpecification']['remarks']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $wicketSpecification['WicketSpecification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $wicketSpecification['WicketSpecification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $wicketSpecification['WicketSpecification']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $wicketSpecification['WicketSpecification']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Wicket Specification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
