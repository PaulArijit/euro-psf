<div class="layerPadSpecifications view">
<h2><?php echo __('Layer Pad Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($layerPadSpecification['LayerPadSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($layerPadSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $layerPadSpecification['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npi'); ?></dt>
		<dd>
			<?php echo h($layerPadSpecification['LayerPadSpecification']['npi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($layerPadSpecification['LayerPadSpecification']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($layerPadSpecification['LayerPadSpecification']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Board Quality'); ?></dt>
		<dd>
			<?php echo h($layerPadSpecification['LayerPadSpecification']['board_quality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marking Color'); ?></dt>
		<dd>
			<?php echo h($layerPadSpecification['LayerPadSpecification']['marking_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode Number'); ?></dt>
		<dd>
			<?php echo h($layerPadSpecification['LayerPadSpecification']['barcode_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Gross Weight'); ?></dt>
		<dd>
			<?php echo h($layerPadSpecification['LayerPadSpecification']['product_gross_weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film Embossed'); ?></dt>
		<dd>
			<?php echo h($layerPadSpecification['LayerPadSpecification']['film_embossed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Marking Position'); ?></dt>
		<dd>
			<?php echo h($layerPadSpecification['LayerPadSpecification']['ctn_marking_position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Marking Size Width'); ?></dt>
		<dd>
			<?php echo h($layerPadSpecification['LayerPadSpecification']['ctn_marking_size_width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctn Marking Size Height'); ?></dt>
		<dd>
			<?php echo h($layerPadSpecification['LayerPadSpecification']['ctn_marking_size_height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aditional Requirement'); ?></dt>
		<dd>
			<?php echo h($layerPadSpecification['LayerPadSpecification']['aditional_requirement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amendment Note'); ?></dt>
		<dd>
			<?php echo h($layerPadSpecification['LayerPadSpecification']['amendment_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Additional Information'); ?></dt>
		<dd>
			<?php echo h($layerPadSpecification['LayerPadSpecification']['additional_information']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Layer Pad Specification'), array('action' => 'edit', $layerPadSpecification['LayerPadSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Layer Pad Specification'), array('action' => 'delete', $layerPadSpecification['LayerPadSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $layerPadSpecification['LayerPadSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Layer Pad Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Layer Pad Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
