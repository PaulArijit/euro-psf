<div class="qfOuterFirstOffDetails index">
	<h2><?php echo __('Qf Outer First Off Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('previous_product'); ?></th>
			<th><?php echo $this->Paginator->sort('cylinder_circ_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('repeat_print_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('gusset_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('closed_width_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('open_width_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('film_type_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('film_color_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('embossed_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('wt_meter_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('screw_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('take_up_speed_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('gels_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('metal_fracture_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('die_line_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('film_appearance_one'); ?></th>
			<th><?php echo $this->Paginator->sort('film_appearance_two'); ?></th>
			<th><?php echo $this->Paginator->sort('film_appearance_three'); ?></th>
			<th><?php echo $this->Paginator->sort('film_appearance_four'); ?></th>
			<th><?php echo $this->Paginator->sort('artwork_detail'); ?></th>
			<th><?php echo $this->Paginator->sort('pantone_one'); ?></th>
			<th><?php echo $this->Paginator->sort('pantone_two'); ?></th>
			<th><?php echo $this->Paginator->sort('pantone_three'); ?></th>
			<th><?php echo $this->Paginator->sort('pantone_four'); ?></th>
			<th><?php echo $this->Paginator->sort('pantone_five'); ?></th>
			<th><?php echo $this->Paginator->sort('pantone_six'); ?></th>
			<th><?php echo $this->Paginator->sort('viscosity_one'); ?></th>
			<th><?php echo $this->Paginator->sort('viscosity_two'); ?></th>
			<th><?php echo $this->Paginator->sort('viscosity_three'); ?></th>
			<th><?php echo $this->Paginator->sort('viscosity_four'); ?></th>
			<th><?php echo $this->Paginator->sort('viscosity_five'); ?></th>
			<th><?php echo $this->Paginator->sort('viscosity_six'); ?></th>
			<th><?php echo $this->Paginator->sort('barcode_no'); ?></th>
			<th><?php echo $this->Paginator->sort('rub_test'); ?></th>
			<th><?php echo $this->Paginator->sort('thickness'); ?></th>
			<th><?php echo $this->Paginator->sort('opacity'); ?></th>
			<th><?php echo $this->Paginator->sort('tear_strength_md'); ?></th>
			<th><?php echo $this->Paginator->sort('tear_strength_cd'); ?></th>
			<th><?php echo $this->Paginator->sort('tensile_strength_md'); ?></th>
			<th><?php echo $this->Paginator->sort('tensile_strength_cd'); ?></th>
			<th><?php echo $this->Paginator->sort('elongation_md'); ?></th>
			<th><?php echo $this->Paginator->sort('elongation_cd'); ?></th>
			<th><?php echo $this->Paginator->sort('tensile_strength_md_mml'); ?></th>
			<th><?php echo $this->Paginator->sort('tensile_strength_cd_mml'); ?></th>
			<th><?php echo $this->Paginator->sort('impact_strength_one'); ?></th>
			<th><?php echo $this->Paginator->sort('impact_strength_two'); ?></th>
			<th><?php echo $this->Paginator->sort('impact_strength_three'); ?></th>
			<th><?php echo $this->Paginator->sort('impact_strength_four'); ?></th>
			<th><?php echo $this->Paginator->sort('impact_strength_five'); ?></th>
			<th><?php echo $this->Paginator->sort('impact_strength_six'); ?></th>
			<th><?php echo $this->Paginator->sort('sample_bag_attachment'); ?></th>
			<th><?php echo $this->Paginator->sort('version'); ?></th>
			<th><?php echo $this->Paginator->sort('rev_no'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($qfOuterFirstOffDetails as $qfOuterFirstOffDetail): ?>
	<tr>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($qfOuterFirstOffDetail['Item']['id'], array('controller' => 'items', 'action' => 'view', $qfOuterFirstOffDetail['Item']['id'])); ?>
		</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['previous_product']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['cylinder_circ_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['repeat_print_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['gusset_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['middle_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['closed_width_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['open_width_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['film_type_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['film_color_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['embossed_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['wt_meter_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['screw_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['take_up_speed_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['gels_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['metal_fracture_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['die_line_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['film_appearance_one']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['film_appearance_two']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['film_appearance_three']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['film_appearance_four']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['artwork_detail']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['pantone_one']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['pantone_two']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['pantone_three']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['pantone_four']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['pantone_five']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['pantone_six']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['viscosity_one']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['viscosity_two']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['viscosity_three']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['viscosity_four']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['viscosity_five']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['viscosity_six']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['barcode_no']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['rub_test']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['thickness']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['opacity']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['tear_strength_md']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['tear_strength_cd']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['tensile_strength_md']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['tensile_strength_cd']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['elongation_md']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['elongation_cd']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['tensile_strength_md_mml']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['tensile_strength_cd_mml']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['impact_strength_one']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['impact_strength_two']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['impact_strength_three']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['impact_strength_four']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['impact_strength_five']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['impact_strength_six']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['sample_bag_attachment']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['version']); ?>&nbsp;</td>
		<td><?php echo h($qfOuterFirstOffDetail['QfOuterFirstOffDetail']['rev_no']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $qfOuterFirstOffDetail['QfOuterFirstOffDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $qfOuterFirstOffDetail['QfOuterFirstOffDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $qfOuterFirstOffDetail['QfOuterFirstOffDetail']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $qfOuterFirstOffDetail['QfOuterFirstOffDetail']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Qf Outer First Off Detail'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
