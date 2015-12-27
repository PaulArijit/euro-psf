<div class="qfBmQualityReportDetails index">
	<h2><?php echo __('Qf Bm Quality Report Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id_no'); ?></th>
			<th><?php echo $this->Paginator->sort('bag_weight_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('ctn_weight_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('closed_width_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('open_width_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('length_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('handle_width_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('handle_length_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('pcs_block_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('pcs_outer_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('no_of_outer_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('knife_design_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('knife_design'); ?></th>
			<th><?php echo $this->Paginator->sort('print_front_base'); ?></th>
			<th><?php echo $this->Paginator->sort('print_front_side'); ?></th>
			<th><?php echo $this->Paginator->sort('print_back_base'); ?></th>
			<th><?php echo $this->Paginator->sort('print_back_side'); ?></th>
			<th><?php echo $this->Paginator->sort('handle_lr'); ?></th>
			<th><?php echo $this->Paginator->sort('gusset_lr'); ?></th>
			<th><?php echo $this->Paginator->sort('bottom_base'); ?></th>
			<th><?php echo $this->Paginator->sort('six_step_checking'); ?></th>
			<th><?php echo $this->Paginator->sort('no_blocking'); ?></th>
			<th><?php echo $this->Paginator->sort('safty_hole'); ?></th>
			<th><?php echo $this->Paginator->sort('hot_pin'); ?></th>
			<th><?php echo $this->Paginator->sort('embossed'); ?></th>
			<th><?php echo $this->Paginator->sort('gluespot'); ?></th>
			<th><?php echo $this->Paginator->sort('dispenser_test'); ?></th>
			<th><?php echo $this->Paginator->sort('packing'); ?></th>
			<th><?php echo $this->Paginator->sort('ctn_marking'); ?></th>
			<th><?php echo $this->Paginator->sort('jog_test'); ?></th>
			<th><?php echo $this->Paginator->sort('ultimate_lift'); ?></th>
			<th><?php echo $this->Paginator->sort('traceability_code_one'); ?></th>
			<th><?php echo $this->Paginator->sort('traceability_code_two'); ?></th>
			<th><?php echo $this->Paginator->sort('eyemark_code_one'); ?></th>
			<th><?php echo $this->Paginator->sort('eyemark_code_two'); ?></th>
			<th><?php echo $this->Paginator->sort('onhold_remark_one'); ?></th>
			<th><?php echo $this->Paginator->sort('onhold_remark_two'); ?></th>
			<th><?php echo $this->Paginator->sort('version'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($qfBmQualityReportDetails as $qfBmQualityReportDetail): ?>
	<tr>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($qfBmQualityReportDetail['Item']['id'], array('controller' => 'items', 'action' => 'view', $qfBmQualityReportDetail['Item']['id'])); ?>
		</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['id_no']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['bag_weight_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['ctn_weight_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['closed_width_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['open_width_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['length_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['handle_width_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['handle_length_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['pcs_block_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['pcs_outer_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['no_of_outer_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['knife_design_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['knife_design']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['print_front_base']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['print_front_side']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['print_back_base']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['print_back_side']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['handle_lr']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['gusset_lr']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['bottom_base']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['six_step_checking']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['no_blocking']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['safty_hole']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['hot_pin']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['embossed']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['gluespot']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['dispenser_test']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['packing']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['ctn_marking']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['jog_test']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['ultimate_lift']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['traceability_code_one']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['traceability_code_two']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['eyemark_code_one']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['eyemark_code_two']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['onhold_remark_one']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['onhold_remark_two']); ?>&nbsp;</td>
		<td><?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['version']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $qfBmQualityReportDetail['QfBmQualityReportDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $qfBmQualityReportDetail['QfBmQualityReportDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $qfBmQualityReportDetail['QfBmQualityReportDetail']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $qfBmQualityReportDetail['QfBmQualityReportDetail']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Qf Bm Quality Report Detail'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
