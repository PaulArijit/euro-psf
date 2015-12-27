<div class="qfBmQualityReportDetails view">
<h2><?php echo __('Qf Bm Quality Report Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($qfBmQualityReportDetail['Item']['id'], array('controller' => 'items', 'action' => 'view', $qfBmQualityReportDetail['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id No'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['id_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bag Weight Specification'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['bag_weight_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Weight Specification'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['ctn_weight_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closed Width Specification'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['closed_width_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Open Width Specification'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['open_width_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Length Specification'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['length_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Width Specification'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['handle_width_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Length Specification'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['handle_length_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pcs Block Specification'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['pcs_block_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pcs Outer Specification'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['pcs_outer_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Of Outer Specification'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['no_of_outer_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Knife Design Specification'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['knife_design_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Knife Design'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['knife_design']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Print Front Base'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['print_front_base']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Print Front Side'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['print_front_side']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Print Back Base'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['print_back_base']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Print Back Side'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['print_back_side']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Lr'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['handle_lr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gusset Lr'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['gusset_lr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bottom Base'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['bottom_base']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Six Step Checking'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['six_step_checking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Blocking'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['no_blocking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Safty Hole'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['safty_hole']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hot Pin'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['hot_pin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Embossed'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['embossed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gluespot'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['gluespot']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dispenser Test'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['dispenser_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Packing'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['packing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Marking'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['ctn_marking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jog Test'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['jog_test']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultimate Lift'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['ultimate_lift']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Traceability Code One'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['traceability_code_one']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Traceability Code Two'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['traceability_code_two']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eyemark Code One'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['eyemark_code_one']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eyemark Code Two'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['eyemark_code_two']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Onhold Remark One'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['onhold_remark_one']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Onhold Remark Two'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['onhold_remark_two']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version'); ?></dt>
		<dd>
			<?php echo h($qfBmQualityReportDetail['QfBmQualityReportDetail']['version']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Qf Bm Quality Report Detail'), array('action' => 'edit', $qfBmQualityReportDetail['QfBmQualityReportDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Qf Bm Quality Report Detail'), array('action' => 'delete', $qfBmQualityReportDetail['QfBmQualityReportDetail']['id']), array(), __('Are you sure you want to delete # %s?', $qfBmQualityReportDetail['QfBmQualityReportDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Qf Bm Quality Report Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qf Bm Quality Report Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
