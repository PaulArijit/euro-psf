<div class="qfExtFormDetails view">
<h2><?php echo __('Qf Ext Form Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($qfExtFormDetail['Item']['id'], array('controller' => 'items', 'action' => 'view', $qfExtFormDetail['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id No'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['id_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Left Gusset Width Specification'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['left_gusset_width_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Center Width Specification'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['center_width_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Right Gusset Width Specification'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['right_gusset_width_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Open Width Specification'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['open_width_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight Specification'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['weight_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thickness Specification'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['thickness_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dart Impact Specification'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['dart_impact_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Embossed Specification'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['embossed_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film Color Specification'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['film_color_specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Blocking'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['no_blocking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hand Brust'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['hand_brust']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tearing'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['tearing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Print Distance From Side'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['print_distance_from_side']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Repeat Print'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['repeat_print']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pantone'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['pantone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Onhold Remark One'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['onhold_remark_one']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Onhold Remark Two'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['onhold_remark_two']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version'); ?></dt>
		<dd>
			<?php echo h($qfExtFormDetail['QfExtFormDetail']['version']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Qf Ext Form Detail'), array('action' => 'edit', $qfExtFormDetail['QfExtFormDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Qf Ext Form Detail'), array('action' => 'delete', $qfExtFormDetail['QfExtFormDetail']['id']), array(), __('Are you sure you want to delete # %s?', $qfExtFormDetail['QfExtFormDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Qf Ext Form Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qf Ext Form Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
