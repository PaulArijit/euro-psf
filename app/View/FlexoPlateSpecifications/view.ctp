<div class="flexoPlateSpecifications view">
<h2><?php echo __('Flexo Plate Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($flexoPlateSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $flexoPlateSpecification['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npi'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['npi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flim Thickness'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['flim_thickness']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bag Width'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['bag_width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bag Length'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['bag_length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Repeat Print'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['repeat_print']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Open Bottom Gusset'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['open_bottom_gusset']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lip'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['lip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color One'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['color_one']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Two'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['color_two']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Three'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['color_three']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Four'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['color_four']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Five'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['color_five']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Six'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['color_six']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Side Printed'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['side_printed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Front'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['front']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Back'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['back']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty Per Set'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['qty_per_set']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pic Per Plate'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['pic_per_plate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Front Back'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['front_back']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode No'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['barcode_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode Format'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['barcode_format']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Additional Info'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['additional_info']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amendment Note'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['amendment_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film Substrate'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['film_substrate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Film Color'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['film_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eyemark Size'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['eyemark_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eyemark Color'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['eyemark_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eyemark Location'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['eyemark_location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eyemark Code'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['eyemark_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dot Mark'); ?></dt>
		<dd>
			<?php echo h($flexoPlateSpecification['FlexoPlateSpecification']['dot_mark']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Flexo Plate Specification'), array('action' => 'edit', $flexoPlateSpecification['FlexoPlateSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Flexo Plate Specification'), array('action' => 'delete', $flexoPlateSpecification['FlexoPlateSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $flexoPlateSpecification['FlexoPlateSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Flexo Plate Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flexo Plate Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
