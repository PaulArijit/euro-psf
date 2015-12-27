<div class="labelSpecifications form">
<?php echo $this->Form->create('LabelSpecification'); ?>
	<fieldset>
		<legend><?php echo __('Edit Label Specification'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('npi');
		echo $this->Form->input('ref_no');
		echo $this->Form->input('type');
		echo $this->Form->input('size');
		echo $this->Form->input('label_color');
		echo $this->Form->input('wording_color');
		echo $this->Form->input('barcode_number');
		echo $this->Form->input('barcode_format');
		echo $this->Form->input('qty_per_vac_ctn');
		echo $this->Form->input('applied_for');
		echo $this->Form->input('amendment_note');
		echo $this->Form->input('remarks');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LabelSpecification.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('LabelSpecification.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Label Specifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
