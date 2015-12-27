<div class="qfPositiveReleaseDetails index">
	<h2><?php echo __('Qf Positive Release Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bag_weight_std'); ?></th>
			<th><?php echo $this->Paginator->sort('bag_weight_min'); ?></th>
			<th><?php echo $this->Paginator->sort('bag_weight_max'); ?></th>
			<th><?php echo $this->Paginator->sort('vac_pack_weight_std'); ?></th>
			<th><?php echo $this->Paginator->sort('vac_pack_weight_min'); ?></th>
			<th><?php echo $this->Paginator->sort('vac_pack_weight_max'); ?></th>
			<th><?php echo $this->Paginator->sort('average_thickness_std'); ?></th>
			<th><?php echo $this->Paginator->sort('average_thickness_min'); ?></th>
			<th><?php echo $this->Paginator->sort('average_thickness_max'); ?></th>
			<th><?php echo $this->Paginator->sort('spot_thickness_std'); ?></th>
			<th><?php echo $this->Paginator->sort('spot_thickness_min'); ?></th>
			<th><?php echo $this->Paginator->sort('spot_thickness_max'); ?></th>
			<th><?php echo $this->Paginator->sort('opacity_std'); ?></th>
			<th><?php echo $this->Paginator->sort('opacity_min'); ?></th>
			<th><?php echo $this->Paginator->sort('opacity_max'); ?></th>
			<th><?php echo $this->Paginator->sort('dart_impact_weight_std'); ?></th>
			<th><?php echo $this->Paginator->sort('dart_impact_weight_min'); ?></th>
			<th><?php echo $this->Paginator->sort('dart_impact_weight_max'); ?></th>
			<th><?php echo $this->Paginator->sort('tensile_strength_md_std'); ?></th>
			<th><?php echo $this->Paginator->sort('tensile_strength_md_min'); ?></th>
			<th><?php echo $this->Paginator->sort('tensile_strength_md_max'); ?></th>
			<th><?php echo $this->Paginator->sort('tensile_strength_cd_std'); ?></th>
			<th><?php echo $this->Paginator->sort('tensile_strength_cd_min'); ?></th>
			<th><?php echo $this->Paginator->sort('tensile_strength_cd_max'); ?></th>
			<th><?php echo $this->Paginator->sort('tape_test'); ?></th>
			<th><?php echo $this->Paginator->sort('hotpin_collection_std'); ?></th>
			<th><?php echo $this->Paginator->sort('hotpin_collection_min'); ?></th>
			<th><?php echo $this->Paginator->sort('hotpin_collection_max'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode_scanner'); ?></th>
			<th><?php echo $this->Paginator->sort('surface_treatment'); ?></th>
			<th><?php echo $this->Paginator->sort('color_fastness'); ?></th>
			<th><?php echo $this->Paginator->sort('jog_test_intertek_std'); ?></th>
			<th><?php echo $this->Paginator->sort('jog_test_intertek_min'); ?></th>
			<th><?php echo $this->Paginator->sort('jog_test_intertek_max'); ?></th>
			<th><?php echo $this->Paginator->sort('ultimate_lift_std'); ?></th>
			<th><?php echo $this->Paginator->sort('ultimate_lift_min'); ?></th>
			<th><?php echo $this->Paginator->sort('ultimate_lift_max'); ?></th>
			<th><?php echo $this->Paginator->sort('handle_length_std'); ?></th>
			<th><?php echo $this->Paginator->sort('handle_length_min'); ?></th>
			<th><?php echo $this->Paginator->sort('handle_length_max'); ?></th>
			<th><?php echo $this->Paginator->sort('handle_width_std'); ?></th>
			<th><?php echo $this->Paginator->sort('handle_width_min'); ?></th>
			<th><?php echo $this->Paginator->sort('handle_width_max'); ?></th>
			<th><?php echo $this->Paginator->sort('bag_length_std'); ?></th>
			<th><?php echo $this->Paginator->sort('bag_length_min'); ?></th>
			<th><?php echo $this->Paginator->sort('bag_length_max'); ?></th>
			<th><?php echo $this->Paginator->sort('open_width_std'); ?></th>
			<th><?php echo $this->Paginator->sort('open_width_min'); ?></th>
			<th><?php echo $this->Paginator->sort('open_width_max'); ?></th>
			<th><?php echo $this->Paginator->sort('closed_width_std'); ?></th>
			<th><?php echo $this->Paginator->sort('closed_width_min'); ?></th>
			<th><?php echo $this->Paginator->sort('closed_width_max'); ?></th>
			<th><?php echo $this->Paginator->sort('gusset_fold_std'); ?></th>
			<th><?php echo $this->Paginator->sort('gusset_fold_min'); ?></th>
			<th><?php echo $this->Paginator->sort('gusset_fold_max'); ?></th>
			<th><?php echo $this->Paginator->sort('handle_seal_std'); ?></th>
			<th><?php echo $this->Paginator->sort('handle_seal_min'); ?></th>
			<th><?php echo $this->Paginator->sort('handle_seal_max'); ?></th>
			<th><?php echo $this->Paginator->sort('bottom_gusset_seal_std'); ?></th>
			<th><?php echo $this->Paginator->sort('bottom_gusset_seal_min'); ?></th>
			<th><?php echo $this->Paginator->sort('bottom_gusset_seal_max'); ?></th>
			<th><?php echo $this->Paginator->sort('base_seal_std'); ?></th>
			<th><?php echo $this->Paginator->sort('base_seal_min'); ?></th>
			<th><?php echo $this->Paginator->sort('base_seal_max'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($qfPositiveReleaseDetails as $qfPositiveReleaseDetail): ?>
	<tr>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($qfPositiveReleaseDetail['Item']['id'], array('controller' => 'items', 'action' => 'view', $qfPositiveReleaseDetail['Item']['id'])); ?>
		</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bag_weight_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bag_weight_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bag_weight_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['vac_pack_weight_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['vac_pack_weight_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['vac_pack_weight_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['average_thickness_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['average_thickness_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['average_thickness_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['spot_thickness_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['spot_thickness_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['spot_thickness_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['opacity_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['opacity_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['opacity_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['dart_impact_weight_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['dart_impact_weight_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['dart_impact_weight_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['tensile_strength_md_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['tensile_strength_md_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['tensile_strength_md_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['tensile_strength_cd_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['tensile_strength_cd_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['tensile_strength_cd_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['tape_test']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['hotpin_collection_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['hotpin_collection_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['hotpin_collection_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['barcode_scanner']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['surface_treatment']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['color_fastness']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['jog_test_intertek_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['jog_test_intertek_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['jog_test_intertek_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['ultimate_lift_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['ultimate_lift_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['ultimate_lift_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_length_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_length_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_length_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_width_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_width_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_width_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bag_length_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bag_length_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bag_length_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['open_width_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['open_width_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['open_width_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['closed_width_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['closed_width_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['closed_width_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['gusset_fold_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['gusset_fold_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['gusset_fold_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_seal_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_seal_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_seal_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bottom_gusset_seal_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bottom_gusset_seal_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bottom_gusset_seal_max']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['base_seal_std']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['base_seal_min']); ?>&nbsp;</td>
		<td><?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['base_seal_max']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $qfPositiveReleaseDetail['QfPositiveReleaseDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $qfPositiveReleaseDetail['QfPositiveReleaseDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $qfPositiveReleaseDetail['QfPositiveReleaseDetail']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $qfPositiveReleaseDetail['QfPositiveReleaseDetail']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Qf Positive Release Detail'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
