<div class="qfExtFormDetails index">
	<h2><?php echo __('Qf Ext Form Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id_no'); ?></th>
			<th><?php echo $this->Paginator->sort('left_gusset_width_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('center_width_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('right_gusset_width_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('open_width_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('weight_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('thickness_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('dart_impact_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('embossed_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('film_color_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('no_blocking'); ?></th>
			<th><?php echo $this->Paginator->sort('hand_brust'); ?></th>
			<th><?php echo $this->Paginator->sort('tearing'); ?></th>
			<th><?php echo $this->Paginator->sort('print_distance_from_side'); ?></th>
			<th><?php echo $this->Paginator->sort('repeat_print'); ?></th>
			<th><?php echo $this->Paginator->sort('pantone'); ?></th>
			<th><?php echo $this->Paginator->sort('onhold_remark_one'); ?></th>
			<th><?php echo $this->Paginator->sort('onhold_remark_two'); ?></th>
			<th><?php echo $this->Paginator->sort('version'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($qfExtFormDetails as $qfExtFormDetail): ?>
	<tr>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($qfExtFormDetail['Item']['id'], array('controller' => 'items', 'action' => 'view', $qfExtFormDetail['Item']['id'])); ?>
		</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['id_no']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['left_gusset_width_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['center_width_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['right_gusset_width_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['open_width_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['weight_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['thickness_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['dart_impact_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['embossed_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['film_color_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['no_blocking']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['hand_brust']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['tearing']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['print_distance_from_side']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['repeat_print']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['pantone']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['onhold_remark_one']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['onhold_remark_two']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFormDetail['QfExtFormDetail']['version']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $qfExtFormDetail['QfExtFormDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $qfExtFormDetail['QfExtFormDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $qfExtFormDetail['QfExtFormDetail']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $qfExtFormDetail['QfExtFormDetail']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Qf Ext Form Detail'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
