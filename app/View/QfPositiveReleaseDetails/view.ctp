<div class="qfPositiveReleaseDetails view">
<h2><?php echo __('Qf Positive Release Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($qfPositiveReleaseDetail['Item']['id'], array('controller' => 'items', 'action' => 'view', $qfPositiveReleaseDetail['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bag Weight Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bag_weight_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bag Weight Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bag_weight_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bag Weight Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bag_weight_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vac Pack Weight Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['vac_pack_weight_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vac Pack Weight Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['vac_pack_weight_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vac Pack Weight Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['vac_pack_weight_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Average Thickness Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['average_thickness_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Average Thickness Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['average_thickness_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Average Thickness Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['average_thickness_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Spot Thickness Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['spot_thickness_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Spot Thickness Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['spot_thickness_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Spot Thickness Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['spot_thickness_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opacity Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['opacity_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opacity Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['opacity_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opacity Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['opacity_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dart Impact Weight Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['dart_impact_weight_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dart Impact Weight Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['dart_impact_weight_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dart Impact Weight Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['dart_impact_weight_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tensile Strength Md Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['tensile_strength_md_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tensile Strength Md Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['tensile_strength_md_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tensile Strength Md Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['tensile_strength_md_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tensile Strength Cd Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['tensile_strength_cd_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tensile Strength Cd Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['tensile_strength_cd_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tensile Strength Cd Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['tensile_strength_cd_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tape Test'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['tape_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotpin Collection Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['hotpin_collection_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotpin Collection Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['hotpin_collection_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotpin Collection Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['hotpin_collection_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode Scanner'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['barcode_scanner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surface Treatment'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['surface_treatment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Fastness'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['color_fastness']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jog Test Intertek Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['jog_test_intertek_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jog Test Intertek Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['jog_test_intertek_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jog Test Intertek Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['jog_test_intertek_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultimate Lift Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['ultimate_lift_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultimate Lift Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['ultimate_lift_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultimate Lift Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['ultimate_lift_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Length Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_length_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Length Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_length_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Length Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_length_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Width Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_width_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Width Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_width_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Width Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_width_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bag Length Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bag_length_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bag Length Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bag_length_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bag Length Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bag_length_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Open Width Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['open_width_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Open Width Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['open_width_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Open Width Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['open_width_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closed Width Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['closed_width_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closed Width Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['closed_width_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closed Width Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['closed_width_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gusset Fold Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['gusset_fold_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gusset Fold Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['gusset_fold_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gusset Fold Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['gusset_fold_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Seal Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_seal_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Seal Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_seal_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Seal Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['handle_seal_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bottom Gusset Seal Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bottom_gusset_seal_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bottom Gusset Seal Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bottom_gusset_seal_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bottom Gusset Seal Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['bottom_gusset_seal_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Base Seal Std'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['base_seal_std']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Base Seal Min'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['base_seal_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Base Seal Max'); ?></dt>
		<dd>
			<?php echo h($qfPositiveReleaseDetail['QfPositiveReleaseDetail']['base_seal_max']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Qf Positive Release Detail'), array('action' => 'edit', $qfPositiveReleaseDetail['QfPositiveReleaseDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Qf Positive Release Detail'), array('action' => 'delete', $qfPositiveReleaseDetail['QfPositiveReleaseDetail']['id']), array(), __('Are you sure you want to delete # %s?', $qfPositiveReleaseDetail['QfPositiveReleaseDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Qf Positive Release Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qf Positive Release Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
