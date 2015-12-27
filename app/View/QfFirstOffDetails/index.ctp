<div class="qfFirstOffDetails index">
	<h2><?php echo __('Qf First Off Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ctn_marking'); ?></th>
			<th><?php echo $this->Paginator->sort('upload_two'); ?></th>
			<th><?php echo $this->Paginator->sort('upload_three'); ?></th>
			<th><?php echo $this->Paginator->sort('upload_four'); ?></th>
			<th><?php echo $this->Paginator->sort('label_size'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('left_cycle'); ?></th>
			<th><?php echo $this->Paginator->sort('right_cycle'); ?></th>
			<th><?php echo $this->Paginator->sort('fold_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('qty_per_bundle_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('hot_pin_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('embossed_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('gluespot_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('qty_per_outer_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('qty_per_ctn_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('weight_per_ctn_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('knife_design'); ?></th>
			<th><?php echo $this->Paginator->sort('knife_size'); ?></th>
			<th><?php echo $this->Paginator->sort('artwork'); ?></th>
			<th><?php echo $this->Paginator->sort('extra_textf'); ?></th>
			<th><?php echo $this->Paginator->sort('gusset_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('closed_width_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('length_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('print_bottom_front_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('handle_length_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('handle_width_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('perforation_position_side_one'); ?></th>
			<th><?php echo $this->Paginator->sort('perforation_position_side_two'); ?></th>
			<th><?php echo $this->Paginator->sort('perforation_position_bottom_one'); ?></th>
			<th><?php echo $this->Paginator->sort('perforation_position_bottom_two'); ?></th>
			<th><?php echo $this->Paginator->sort('perforation_size_one'); ?></th>
			<th><?php echo $this->Paginator->sort('perforation_size_two'); ?></th>
			<th><?php echo $this->Paginator->sort('dispenser_test'); ?></th>
			<th><?php echo $this->Paginator->sort('no_blocking'); ?></th>
			<th><?php echo $this->Paginator->sort('jog_test'); ?></th>
			<th><?php echo $this->Paginator->sort('single_handle_lift'); ?></th>
			<th><?php echo $this->Paginator->sort('ultimate_lift'); ?></th>
			<th><?php echo $this->Paginator->sort('punch_out_average'); ?></th>
			<th><?php echo $this->Paginator->sort('sample_bag_attachment'); ?></th>
			<th><?php echo $this->Paginator->sort('last_revision_date'); ?></th>
			<th><?php echo $this->Paginator->sort('version'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($qfFirstOffDetails as $qfFirstOffDetail): ?>
	<tr>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($qfFirstOffDetail['Item']['id'], array('controller' => 'items', 'action' => 'view', $qfFirstOffDetail['Item']['id'])); ?>
		</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['ctn_marking']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['upload_two']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['upload_three']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['upload_four']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['label_size']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['description']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['left_cycle']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['right_cycle']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['fold_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['qty_per_bundle_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['hot_pin_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['embossed_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['gluespot_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['qty_per_outer_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['qty_per_ctn_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['weight_per_ctn_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['knife_design']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['knife_size']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['artwork']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['extra_textf']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['gusset_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['closed_width_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['length_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['print_bottom_front_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['handle_length_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['handle_width_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['perforation_position_side_one']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['perforation_position_side_two']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['perforation_position_bottom_one']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['perforation_position_bottom_two']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['perforation_size_one']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['perforation_size_two']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['dispenser_test']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['no_blocking']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['jog_test']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['single_handle_lift']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['ultimate_lift']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['punch_out_average']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['sample_bag_attachment']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['last_revision_date']); ?>&nbsp;</td>
		<td><?php echo h($qfFirstOffDetail['QfFirstOffDetail']['version']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $qfFirstOffDetail['QfFirstOffDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $qfFirstOffDetail['QfFirstOffDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $qfFirstOffDetail['QfFirstOffDetail']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $qfFirstOffDetail['QfFirstOffDetail']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Qf First Off Detail'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
