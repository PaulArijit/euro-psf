<div class="cartonTopSpecifications view">
<h2><?php echo __('Carton Top Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cartonTopSpecification['CartonTopSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cartonTopSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $cartonTopSpecification['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npi'); ?></dt>
		<dd>
			<?php echo h($cartonTopSpecification['CartonTopSpecification']['npi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($cartonTopSpecification['CartonTopSpecification']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($cartonTopSpecification['CartonTopSpecification']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Board Quality'); ?></dt>
		<dd>
			<?php echo h($cartonTopSpecification['CartonTopSpecification']['board_quality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marking Color'); ?></dt>
		<dd>
			<?php echo h($cartonTopSpecification['CartonTopSpecification']['marking_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode Number'); ?></dt>
		<dd>
			<?php echo h($cartonTopSpecification['CartonTopSpecification']['barcode_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Gross Weight'); ?></dt>
		<dd>
			<?php echo h($cartonTopSpecification['CartonTopSpecification']['product_gross_weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film Embossed'); ?></dt>
		<dd>
			<?php echo h($cartonTopSpecification['CartonTopSpecification']['film_embossed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Marking Position'); ?></dt>
		<dd>
			<?php echo h($cartonTopSpecification['CartonTopSpecification']['ctn_marking_position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Marking Size Width'); ?></dt>
		<dd>
			<?php echo h($cartonTopSpecification['CartonTopSpecification']['ctn_marking_size_width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Marking Size Height'); ?></dt>
		<dd>
			<?php echo h($cartonTopSpecification['CartonTopSpecification']['ctn_marking_size_height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aditional Requirement'); ?></dt>
		<dd>
			<?php echo h($cartonTopSpecification['CartonTopSpecification']['aditional_requirement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amendment Note'); ?></dt>
		<dd>
			<?php echo h($cartonTopSpecification['CartonTopSpecification']['amendment_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Additional Information'); ?></dt>
		<dd>
			<?php echo h($cartonTopSpecification['CartonTopSpecification']['additional_information']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Carton Top Specification'), array('action' => 'edit', $cartonTopSpecification['CartonTopSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Carton Top Specification'), array('action' => 'delete', $cartonTopSpecification['CartonTopSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $cartonTopSpecification['CartonTopSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Carton Top Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carton Top Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
