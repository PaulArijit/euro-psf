<div class="coreSpecifications index">
	<h2><?php echo __('Core Specifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('npi'); ?></th>
			<th><?php echo $this->Paginator->sort('ref_no'); ?></th>
			<th><?php echo $this->Paginator->sort('internal_diameter'); ?></th>
			<th><?php echo $this->Paginator->sort('length'); ?></th>
			<th><?php echo $this->Paginator->sort('thickness'); ?></th>
			<th><?php echo $this->Paginator->sort('core_required_per_ctn'); ?></th>
			<th><?php echo $this->Paginator->sort('additional_requirement'); ?></th>
			<th><?php echo $this->Paginator->sort('amendment_note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($coreSpecifications as $coreSpecification): ?>
	<tr>
		<td><?php echo h($coreSpecification['CoreSpecification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($coreSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $coreSpecification['Item']['id'])); ?>
		</td>
		<td><?php echo h($coreSpecification['CoreSpecification']['npi']); ?>&nbsp;</td>
		<td><?php echo h($coreSpecification['CoreSpecification']['ref_no']); ?>&nbsp;</td>
		<td><?php echo h($coreSpecification['CoreSpecification']['internal_diameter']); ?>&nbsp;</td>
		<td><?php echo h($coreSpecification['CoreSpecification']['length']); ?>&nbsp;</td>
		<td><?php echo h($coreSpecification['CoreSpecification']['thickness']); ?>&nbsp;</td>
		<td><?php echo h($coreSpecification['CoreSpecification']['core_required_per_ctn']); ?>&nbsp;</td>
		<td><?php echo h($coreSpecification['CoreSpecification']['additional_requirement']); ?>&nbsp;</td>
		<td><?php echo h($coreSpecification['CoreSpecification']['amendment_note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $coreSpecification['CoreSpecification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $coreSpecification['CoreSpecification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $coreSpecification['CoreSpecification']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $coreSpecification['CoreSpecification']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Core Specification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
