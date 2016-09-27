<div class="planeBoardSpecifications view">
<h2><?php echo __('Plane Board Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($planeBoardSpecification['PlaneBoardSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($planeBoardSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $planeBoardSpecification['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npi'); ?></dt>
		<dd>
			<?php echo h($planeBoardSpecification['PlaneBoardSpecification']['npi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($planeBoardSpecification['PlaneBoardSpecification']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($planeBoardSpecification['PlaneBoardSpecification']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Board Quality'); ?></dt>
		<dd>
			<?php echo h($planeBoardSpecification['PlaneBoardSpecification']['board_quality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marking Color'); ?></dt>
		<dd>
			<?php echo h($planeBoardSpecification['PlaneBoardSpecification']['marking_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode Number'); ?></dt>
		<dd>
			<?php echo h($planeBoardSpecification['PlaneBoardSpecification']['barcode_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Gross Weight'); ?></dt>
		<dd>
			<?php echo h($planeBoardSpecification['PlaneBoardSpecification']['product_gross_weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film Embossed'); ?></dt>
		<dd>
			<?php echo h($planeBoardSpecification['PlaneBoardSpecification']['film_embossed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Marking Position'); ?></dt>
		<dd>
			<?php echo h($planeBoardSpecification['PlaneBoardSpecification']['ctn_marking_position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Marking Size Width'); ?></dt>
		<dd>
			<?php echo h($planeBoardSpecification['PlaneBoardSpecification']['ctn_marking_size_width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Marking Size Height'); ?></dt>
		<dd>
			<?php echo h($planeBoardSpecification['PlaneBoardSpecification']['ctn_marking_size_height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aditional Requirement'); ?></dt>
		<dd>
			<?php echo h($planeBoardSpecification['PlaneBoardSpecification']['aditional_requirement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amendment Note'); ?></dt>
		<dd>
			<?php echo h($planeBoardSpecification['PlaneBoardSpecification']['amendment_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Additional Information'); ?></dt>
		<dd>
			<?php echo h($planeBoardSpecification['PlaneBoardSpecification']['additional_information']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plane Board Specification'), array('action' => 'edit', $planeBoardSpecification['PlaneBoardSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plane Board Specification'), array('action' => 'delete', $planeBoardSpecification['PlaneBoardSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $planeBoardSpecification['PlaneBoardSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Plane Board Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plane Board Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
