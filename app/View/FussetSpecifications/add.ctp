<div class="fussetSpecifications form">
<?php echo $this->Form->create('FussetSpecification'); ?>
	<fieldset>
		<legend><?php echo __('Add Fusset Specification'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('npi');
		echo $this->Form->input('ref_no');
		echo $this->Form->input('material');
		echo $this->Form->input('size');
		echo $this->Form->input('color_body');
		echo $this->Form->input('color_cap');
		echo $this->Form->input('compression_strength');
		echo $this->Form->input('amendment_note');
		echo $this->Form->input('remarks');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Fusset Specifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
