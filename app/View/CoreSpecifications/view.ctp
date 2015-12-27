<div class="coreSpecifications view">
<h2><?php echo __('Core Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coreSpecification['CoreSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coreSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $coreSpecification['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npi'); ?></dt>
		<dd>
			<?php echo h($coreSpecification['CoreSpecification']['npi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($coreSpecification['CoreSpecification']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Internal Diameter'); ?></dt>
		<dd>
			<?php echo h($coreSpecification['CoreSpecification']['internal_diameter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Length'); ?></dt>
		<dd>
			<?php echo h($coreSpecification['CoreSpecification']['length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thickness'); ?></dt>
		<dd>
			<?php echo h($coreSpecification['CoreSpecification']['thickness']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Core Required Per Ctn'); ?></dt>
		<dd>
			<?php echo h($coreSpecification['CoreSpecification']['core_required_per_ctn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Additional Requirement'); ?></dt>
		<dd>
			<?php echo h($coreSpecification['CoreSpecification']['additional_requirement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amendment Note'); ?></dt>
		<dd>
			<?php echo h($coreSpecification['CoreSpecification']['amendment_note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Core Specification'), array('action' => 'edit', $coreSpecification['CoreSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Core Specification'), array('action' => 'delete', $coreSpecification['CoreSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $coreSpecification['CoreSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Core Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Core Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
