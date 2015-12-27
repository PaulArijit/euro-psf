<div class="wicketSpecifications view">
<h2><?php echo __('Wicket Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($wicketSpecification['WicketSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($wicketSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $wicketSpecification['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npi'); ?></dt>
		<dd>
			<?php echo h($wicketSpecification['WicketSpecification']['npi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($wicketSpecification['WicketSpecification']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size Length'); ?></dt>
		<dd>
			<?php echo h($wicketSpecification['WicketSpecification']['size_length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size Middle'); ?></dt>
		<dd>
			<?php echo h($wicketSpecification['WicketSpecification']['size_middle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size Diameter'); ?></dt>
		<dd>
			<?php echo h($wicketSpecification['WicketSpecification']['size_diameter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material'); ?></dt>
		<dd>
			<?php echo h($wicketSpecification['WicketSpecification']['material']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Wicket'); ?></dt>
		<dd>
			<?php echo h($wicketSpecification['WicketSpecification']['similar_wicket']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Compression Strength'); ?></dt>
		<dd>
			<?php echo h($wicketSpecification['WicketSpecification']['compression_strength']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amendment Note'); ?></dt>
		<dd>
			<?php echo h($wicketSpecification['WicketSpecification']['amendment_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($wicketSpecification['WicketSpecification']['remarks']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wicket Specification'), array('action' => 'edit', $wicketSpecification['WicketSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Wicket Specification'), array('action' => 'delete', $wicketSpecification['WicketSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $wicketSpecification['WicketSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Wicket Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wicket Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
