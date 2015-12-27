<div class="knifeSpecifications index">
	<h2><?php echo __('Knife Specifications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('npi'); ?></th>
			<th><?php echo $this->Paginator->sort('ref_no'); ?></th>
			<th><?php echo $this->Paginator->sort('knife_size'); ?></th>
			<th><?php echo $this->Paginator->sort('similar_knife'); ?></th>
			<th><?php echo $this->Paginator->sort('knife_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m6_screw_holes'); ?></th>
			<th><?php echo $this->Paginator->sort('machine_type'); ?></th>
			<th><?php echo $this->Paginator->sort('base'); ?></th>
			<th><?php echo $this->Paginator->sort('panchout'); ?></th>
			<th><?php echo $this->Paginator->sort('handle_length'); ?></th>
			<th><?php echo $this->Paginator->sort('handle-width'); ?></th>
			<th><?php echo $this->Paginator->sort('amendment_note'); ?></th>
			<th><?php echo $this->Paginator->sort('remarks'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($knifeSpecifications as $knifeSpecification): ?>
	<tr>
		<td><?php echo h($knifeSpecification['KnifeSpecification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($knifeSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $knifeSpecification['Item']['id'])); ?>
		</td>
		<td><?php echo h($knifeSpecification['KnifeSpecification']['npi']); ?>&nbsp;</td>
		<td><?php echo h($knifeSpecification['KnifeSpecification']['ref_no']); ?>&nbsp;</td>
		<td><?php echo h($knifeSpecification['KnifeSpecification']['knife_size']); ?>&nbsp;</td>
		<td><?php echo h($knifeSpecification['KnifeSpecification']['similar_knife']); ?>&nbsp;</td>
		<td><?php echo h($knifeSpecification['KnifeSpecification']['knife_type']); ?>&nbsp;</td>
		<td><?php echo h($knifeSpecification['KnifeSpecification']['m6_screw_holes']); ?>&nbsp;</td>
		<td><?php echo h($knifeSpecification['KnifeSpecification']['machine_type']); ?>&nbsp;</td>
		<td><?php echo h($knifeSpecification['KnifeSpecification']['base']); ?>&nbsp;</td>
		<td><?php echo h($knifeSpecification['KnifeSpecification']['panchout']); ?>&nbsp;</td>
		<td><?php echo h($knifeSpecification['KnifeSpecification']['handle_length']); ?>&nbsp;</td>
		<td><?php echo h($knifeSpecification['KnifeSpecification']['handle-width']); ?>&nbsp;</td>
		<td><?php echo h($knifeSpecification['KnifeSpecification']['amendment_note']); ?>&nbsp;</td>
		<td><?php echo h($knifeSpecification['KnifeSpecification']['remarks']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $knifeSpecification['KnifeSpecification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $knifeSpecification['KnifeSpecification']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $knifeSpecification['KnifeSpecification']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $knifeSpecification['KnifeSpecification']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Knife Specification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
