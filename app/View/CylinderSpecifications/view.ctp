<div class="cylinderSpecifications view">
<h2><?php echo __('Cylinder Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cylinderSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $cylinderSpecification['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npi'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['npi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Repeat Print'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['repeat_print']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bag Width'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['bag_width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bag Length'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['bag_length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cylinder Circumference'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['cylinder_circumference']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cylinder Width'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['cylinder_width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color One'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['color_one']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Two'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['color_two']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Three'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['color_three']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Four'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['color_four']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Five'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['color_five']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Six'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['color_six']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Side Printed'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['side_printed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Front'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['front']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Back'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['back']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty Per Set'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['qty_per_set']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pic Per Cylinder'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['pic_per_cylinder']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Front Back'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['front_back']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode No'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['barcode_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode Format'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['barcode_format']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Additional Info'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['additional_info']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amendment Note'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['amendment_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film Substrate'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['film_substrate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film Color'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['film_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eyemark Size'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['eyemark_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eyemark Color'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['eyemark_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eyemark Location'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['eyemark_location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eyemark Code'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['eyemark_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Crossmark Size'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['crossmark_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Crossmark Position'); ?></dt>
		<dd>
			<?php echo h($cylinderSpecification['CylinderSpecification']['crossmark_position']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cylinder Specification'), array('action' => 'edit', $cylinderSpecification['CylinderSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cylinder Specification'), array('action' => 'delete', $cylinderSpecification['CylinderSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $cylinderSpecification['CylinderSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cylinder Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cylinder Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
