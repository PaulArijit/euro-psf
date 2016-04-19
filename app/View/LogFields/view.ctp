<div class="logFields view">
<h2><?php echo __('Log Field'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($logField['LogField']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Log'); ?></dt>
		<dd>
			<?php echo $this->Html->link($logField['Log']['id'], array('controller' => 'logs', 'action' => 'view', $logField['Log']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Field Name'); ?></dt>
		<dd>
			<?php echo h($logField['LogField']['field_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Old Value'); ?></dt>
		<dd>
			<?php echo h($logField['LogField']['old_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('New Value'); ?></dt>
		<dd>
			<?php echo h($logField['LogField']['new_value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Log Field'), array('action' => 'edit', $logField['LogField']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Log Field'), array('action' => 'delete', $logField['LogField']['id']), array(), __('Are you sure you want to delete # %s?', $logField['LogField']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Log Fields'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log Field'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
