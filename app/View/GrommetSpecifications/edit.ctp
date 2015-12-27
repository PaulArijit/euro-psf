<div class="grommetSpecifications form">
<?php echo $this->Form->create('GrommetSpecification'); ?>
	<fieldset>
		<legend><?php echo __('Edit Grommet Specification'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('npi');
		echo $this->Form->input('ref_no');
		echo $this->Form->input('size_diameter');
		echo $this->Form->input('size_hole_diameter');
		echo $this->Form->input('material');
		echo $this->Form->input('color');
		echo $this->Form->input('similar_grommet');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GrommetSpecification.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('GrommetSpecification.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Grommet Specifications'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
