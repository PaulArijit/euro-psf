<div class="logFields index">
	<h2><?php echo __('Log Fields'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('log_id'); ?></th>
			<th><?php echo $this->Paginator->sort('field_name'); ?></th>
			<th><?php echo $this->Paginator->sort('old_value'); ?></th>
			<th><?php echo $this->Paginator->sort('new_value'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($logFields as $logField): ?>
	<tr>
		<td><?php echo h($logField['LogField']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($logField['Log']['id'], array('controller' => 'logs', 'action' => 'view', $logField['Log']['id'])); ?>
		</td>
		<td><?php echo h($logField['LogField']['field_name']); ?>&nbsp;</td>
		<td><?php echo h($logField['LogField']['old_value']); ?>&nbsp;</td>
		<td><?php echo h($logField['LogField']['new_value']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $logField['LogField']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $logField['LogField']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $logField['LogField']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $logField['LogField']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Log Field'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
