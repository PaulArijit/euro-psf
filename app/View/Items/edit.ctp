<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Edit Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description');
		echo $this->Form->input('category');
		echo $this->Form->input('sapcode');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Item.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Item.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Carton Specifications'), array('controller' => 'carton_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carton Specification'), array('controller' => 'carton_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Core Specifications'), array('controller' => 'core_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Core Specification'), array('controller' => 'core_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cylinder Specifications'), array('controller' => 'cylinder_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cylinder Specification'), array('controller' => 'cylinder_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flexo Plate Specifications'), array('controller' => 'flexo_plate_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flexo Plate Specification'), array('controller' => 'flexo_plate_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fusset Specifications'), array('controller' => 'fusset_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fusset Specification'), array('controller' => 'fusset_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grommet Specifications'), array('controller' => 'grommet_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grommet Specification'), array('controller' => 'grommet_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Knife Specifications'), array('controller' => 'knife_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Knife Specification'), array('controller' => 'knife_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Label Specifications'), array('controller' => 'label_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Label Specification'), array('controller' => 'label_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Specifications'), array('controller' => 'product_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Specification'), array('controller' => 'product_specifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qf Bm Quality Report Details'), array('controller' => 'qf_bm_quality_report_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qf Bm Quality Report Detail'), array('controller' => 'qf_bm_quality_report_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qf Ext First Off Details'), array('controller' => 'qf_ext_first_off_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qf Ext First Off Detail'), array('controller' => 'qf_ext_first_off_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qf Ext Form Details'), array('controller' => 'qf_ext_form_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qf Ext Form Detail'), array('controller' => 'qf_ext_form_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qf First Off Details'), array('controller' => 'qf_first_off_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qf First Off Detail'), array('controller' => 'qf_first_off_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qf Positive Release Details'), array('controller' => 'qf_positive_release_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qf Positive Release Detail'), array('controller' => 'qf_positive_release_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wicket Specifications'), array('controller' => 'wicket_specifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wicket Specification'), array('controller' => 'wicket_specifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
