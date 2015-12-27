<div class="knifeSpecifications view">
<h2><?php echo __('Knife Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($knifeSpecification['KnifeSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($knifeSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $knifeSpecification['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npi'); ?></dt>
		<dd>
			<?php echo h($knifeSpecification['KnifeSpecification']['npi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($knifeSpecification['KnifeSpecification']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Knife Size'); ?></dt>
		<dd>
			<?php echo h($knifeSpecification['KnifeSpecification']['knife_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Knife'); ?></dt>
		<dd>
			<?php echo h($knifeSpecification['KnifeSpecification']['similar_knife']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Knife Type'); ?></dt>
		<dd>
			<?php echo h($knifeSpecification['KnifeSpecification']['knife_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('M6 Screw Holes'); ?></dt>
		<dd>
			<?php echo h($knifeSpecification['KnifeSpecification']['m6_screw_holes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Machine Type'); ?></dt>
		<dd>
			<?php echo h($knifeSpecification['KnifeSpecification']['machine_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Base'); ?></dt>
		<dd>
			<?php echo h($knifeSpecification['KnifeSpecification']['base']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Panchout'); ?></dt>
		<dd>
			<?php echo h($knifeSpecification['KnifeSpecification']['panchout']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Length'); ?></dt>
		<dd>
			<?php echo h($knifeSpecification['KnifeSpecification']['handle_length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle-width'); ?></dt>
		<dd>
			<?php echo h($knifeSpecification['KnifeSpecification']['handle-width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amendment Note'); ?></dt>
		<dd>
			<?php echo h($knifeSpecification['KnifeSpecification']['amendment_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($knifeSpecification['KnifeSpecification']['remarks']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Knife Specification'), array('action' => 'edit', $knifeSpecification['KnifeSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Knife Specification'), array('action' => 'delete', $knifeSpecification['KnifeSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $knifeSpecification['KnifeSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Knife Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Knife Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
