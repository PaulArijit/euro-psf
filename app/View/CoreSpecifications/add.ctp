<div class="coreSpecifications form">
<?php echo $this->Form->create('CoreSpecification'); ?>
	<fieldset>
		<legend><?php echo __('Add Core Specification'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('npi');
		echo $this->Form->input('ref_no');
		echo $this->Form->input('internal_diameter');
		echo $this->Form->input('length');
		echo $this->Form->input('thickness');
		echo $this->Form->input('core_required_per_ctn');
		echo $this->Form->input('additional_requirement');
		echo $this->Form->input('amendment_note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Core Specifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
