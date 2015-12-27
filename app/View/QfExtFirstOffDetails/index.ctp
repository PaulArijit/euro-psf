<div class="qfExtFirstOffDetails index">
	<h2><?php echo __('Qf Ext First Off Details'); ?></h2>
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
			<th><?php echo $this->Paginator->sort('tensile_strength_cd_mml'); ?></th>
			<th><?php echo $this->Paginator->sort('elongation'); ?></th>
			<th><?php echo $this->Paginator->sort('impact_strength_one'); ?></th>
			<th><?php echo $this->Paginator->sort('impact_strength_two'); ?></th>
			<th><?php echo $this->Paginator->sort('impact_strength_three'); ?></th>
			<th><?php echo $this->Paginator->sort('impact_strength_four'); ?></th>
			<th><?php echo $this->Paginator->sort('impact_strength_five'); ?></th>
			<th><?php echo $this->Paginator->sort('impact_strength_six'); ?></th>
			<th><?php echo $this->Paginator->sort('version'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($qfExtFirstOffDetails as $qfExtFirstOffDetail): ?>
	<tr>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($qfExtFirstOffDetail['Item']['id'], array('controller' => 'items', 'action' => 'view', $qfExtFirstOffDetail['Item']['id'])); ?>
		</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['previous_product']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['cylinder_circ_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['repeat_print_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['gusset_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['middle_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['closed_width_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['open_width_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['film_type_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['film_color_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['embossed_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['wt_meter_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['screw_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['take_up_speed_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['gels_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['metal_fracture_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['die_line_specification']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['film_appearance_one']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['film_appearance_two']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['film_appearance_three']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['film_appearance_four']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['artwork_detail']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['pantone_one']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['pantone_two']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['pantone_three']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['pantone_four']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['pantone_five']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['pantone_six']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['viscosity_one']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['viscosity_two']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['viscosity_three']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['viscosity_four']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['viscosity_five']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['viscosity_six']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['barcode_no']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['rub_test']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['thickness']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['opacity']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['tear_strength_md']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['tear_strength_cd']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['tensile_strength_md']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['tensile_strength_cd']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['elongation_md']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['elongation_cd']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['tensile_strength_cd_mml']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['elongation']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['impact_strength_one']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['impact_strength_two']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['impact_strength_three']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['impact_strength_four']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['impact_strength_five']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['impact_strength_six']); ?>&nbsp;</td>
		<td><?php echo h($qfExtFirstOffDetail['QfExtFirstOffDetail']['version']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $qfExtFirstOffDetail['QfExtFirstOffDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $qfExtFirstOffDetail['QfExtFirstOffDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $qfExtFirstOffDetail['QfExtFirstOffDetail']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $qfExtFirstOffDetail['QfExtFirstOffDetail']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Qf Ext First Off Detail'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
