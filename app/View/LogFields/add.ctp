<div class="logFields form">
<?php echo $this->Form->create('LogField'); ?>
	<fieldset>
		<legend><?php echo __('Add Log Field'); ?></legend>
	<?php
		echo $this->Form->input('log_id');
		echo $this->Form->input('field_name');
		echo $this->Form->input('old_value');
		echo $this->Form->input('new_value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Log Fields'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
