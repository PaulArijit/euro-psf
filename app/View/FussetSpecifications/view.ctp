<div class="fussetSpecifications view">
<h2><?php echo __('Fusset Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fussetSpecification['FussetSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fussetSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $fussetSpecification['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npi'); ?></dt>
		<dd>
			<?php echo h($fussetSpecification['FussetSpecification']['npi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($fussetSpecification['FussetSpecification']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material'); ?></dt>
		<dd>
			<?php echo h($fussetSpecification['FussetSpecification']['material']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($fussetSpecification['FussetSpecification']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Body'); ?></dt>
		<dd>
			<?php echo h($fussetSpecification['FussetSpecification']['color_body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Cap'); ?></dt>
		<dd>
			<?php echo h($fussetSpecification['FussetSpecification']['color_cap']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Compression Strength'); ?></dt>
		<dd>
			<?php echo h($fussetSpecification['FussetSpecification']['compression_strength']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amendment Note'); ?></dt>
		<dd>
			<?php echo h($fussetSpecification['FussetSpecification']['amendment_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($fussetSpecification['FussetSpecification']['remarks']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fusset Specification'), array('action' => 'edit', $fussetSpecification['FussetSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fusset Specification'), array('action' => 'delete', $fussetSpecification['FussetSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $fussetSpecification['FussetSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fusset Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fusset Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
