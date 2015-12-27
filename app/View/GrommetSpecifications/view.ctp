<div class="grommetSpecifications view">
<h2><?php echo __('Grommet Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($grommetSpecification['GrommetSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grommetSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $grommetSpecification['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npi'); ?></dt>
		<dd>
			<?php echo h($grommetSpecification['GrommetSpecification']['npi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($grommetSpecification['GrommetSpecification']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size Diameter'); ?></dt>
		<dd>
			<?php echo h($grommetSpecification['GrommetSpecification']['size_diameter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size Hole Diameter'); ?></dt>
		<dd>
			<?php echo h($grommetSpecification['GrommetSpecification']['size_hole_diameter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material'); ?></dt>
		<dd>
			<?php echo h($grommetSpecification['GrommetSpecification']['material']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo h($grommetSpecification['GrommetSpecification']['color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Grommet'); ?></dt>
		<dd>
			<?php echo h($grommetSpecification['GrommetSpecification']['similar_grommet']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Compression Strength'); ?></dt>
		<dd>
			<?php echo h($grommetSpecification['GrommetSpecification']['compression_strength']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amendment Note'); ?></dt>
		<dd>
			<?php echo h($grommetSpecification['GrommetSpecification']['amendment_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($grommetSpecification['GrommetSpecification']['remarks']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grommet Specification'), array('action' => 'edit', $grommetSpecification['GrommetSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grommet Specification'), array('action' => 'delete', $grommetSpecification['GrommetSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $grommetSpecification['GrommetSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grommet Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grommet Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
