<div class="cartonBottomSpecifications view">
<h2><?php echo __('Carton Bottom Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cartonBottomSpecification['CartonBottomSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cartonBottomSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $cartonBottomSpecification['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npi'); ?></dt>
		<dd>
			<?php echo h($cartonBottomSpecification['CartonBottomSpecification']['npi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($cartonBottomSpecification['CartonBottomSpecification']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($cartonBottomSpecification['CartonBottomSpecification']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Board Quality'); ?></dt>
		<dd>
			<?php echo h($cartonBottomSpecification['CartonBottomSpecification']['board_quality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marking Color'); ?></dt>
		<dd>
			<?php echo h($cartonBottomSpecification['CartonBottomSpecification']['marking_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode Number'); ?></dt>
		<dd>
			<?php echo h($cartonBottomSpecification['CartonBottomSpecification']['barcode_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Gross Weight'); ?></dt>
		<dd>
			<?php echo h($cartonBottomSpecification['CartonBottomSpecification']['product_gross_weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film Embossed'); ?></dt>
		<dd>
			<?php echo h($cartonBottomSpecification['CartonBottomSpecification']['film_embossed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Marking Position'); ?></dt>
		<dd>
			<?php echo h($cartonBottomSpecification['CartonBottomSpecification']['ctn_marking_position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Marking Size Width'); ?></dt>
		<dd>
			<?php echo h($cartonBottomSpecification['CartonBottomSpecification']['ctn_marking_size_width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Marking Size Height'); ?></dt>
		<dd>
			<?php echo h($cartonBottomSpecification['CartonBottomSpecification']['ctn_marking_size_height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aditional Requirement'); ?></dt>
		<dd>
			<?php echo h($cartonBottomSpecification['CartonBottomSpecification']['aditional_requirement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amendment Note'); ?></dt>
		<dd>
			<?php echo h($cartonBottomSpecification['CartonBottomSpecification']['amendment_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Additional Information'); ?></dt>
		<dd>
			<?php echo h($cartonBottomSpecification['CartonBottomSpecification']['additional_information']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Carton Bottom Specification'), array('action' => 'edit', $cartonBottomSpecification['CartonBottomSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Carton Bottom Specification'), array('action' => 'delete', $cartonBottomSpecification['CartonBottomSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $cartonBottomSpecification['CartonBottomSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Carton Bottom Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carton Bottom Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
