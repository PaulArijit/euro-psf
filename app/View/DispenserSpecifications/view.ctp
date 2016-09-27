<div class="dispenserSpecifications view">
<h2><?php echo __('Dispenser Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dispenserSpecification['DispenserSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dispenserSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $dispenserSpecification['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npi'); ?></dt>
		<dd>
			<?php echo h($dispenserSpecification['DispenserSpecification']['npi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($dispenserSpecification['DispenserSpecification']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($dispenserSpecification['DispenserSpecification']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Board Quality'); ?></dt>
		<dd>
			<?php echo h($dispenserSpecification['DispenserSpecification']['board_quality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marking Color'); ?></dt>
		<dd>
			<?php echo h($dispenserSpecification['DispenserSpecification']['marking_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode Number'); ?></dt>
		<dd>
			<?php echo h($dispenserSpecification['DispenserSpecification']['barcode_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Gross Weight'); ?></dt>
		<dd>
			<?php echo h($dispenserSpecification['DispenserSpecification']['product_gross_weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film Embossed'); ?></dt>
		<dd>
			<?php echo h($dispenserSpecification['DispenserSpecification']['film_embossed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Marking Position'); ?></dt>
		<dd>
			<?php echo h($dispenserSpecification['DispenserSpecification']['ctn_marking_position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Marking Size Width'); ?></dt>
		<dd>
			<?php echo h($dispenserSpecification['DispenserSpecification']['ctn_marking_size_width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Marking Size Height'); ?></dt>
		<dd>
			<?php echo h($dispenserSpecification['DispenserSpecification']['ctn_marking_size_height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aditional Requirement'); ?></dt>
		<dd>
			<?php echo h($dispenserSpecification['DispenserSpecification']['aditional_requirement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amendment Note'); ?></dt>
		<dd>
			<?php echo h($dispenserSpecification['DispenserSpecification']['amendment_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Additional Information'); ?></dt>
		<dd>
			<?php echo h($dispenserSpecification['DispenserSpecification']['additional_information']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dispenser Specification'), array('action' => 'edit', $dispenserSpecification['DispenserSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dispenser Specification'), array('action' => 'delete', $dispenserSpecification['DispenserSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $dispenserSpecification['DispenserSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dispenser Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dispenser Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
