<div class="knifeTopSpecifications view">
<h2><?php echo __('Knife Top Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($knifeTopSpecification['KnifeTopSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($knifeTopSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $knifeTopSpecification['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npi'); ?></dt>
		<dd>
			<?php echo h($knifeTopSpecification['KnifeTopSpecification']['npi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($knifeTopSpecification['KnifeTopSpecification']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No Two'); ?></dt>
		<dd>
			<?php echo h($knifeTopSpecification['KnifeTopSpecification']['ref_no_two']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Knife Size'); ?></dt>
		<dd>
			<?php echo h($knifeTopSpecification['KnifeTopSpecification']['knife_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Knife'); ?></dt>
		<dd>
			<?php echo h($knifeTopSpecification['KnifeTopSpecification']['similar_knife']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Knife Type'); ?></dt>
		<dd>
			<?php echo h($knifeTopSpecification['KnifeTopSpecification']['knife_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('M6 Screw Holes'); ?></dt>
		<dd>
			<?php echo h($knifeTopSpecification['KnifeTopSpecification']['m6_screw_holes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Machine Type'); ?></dt>
		<dd>
			<?php echo h($knifeTopSpecification['KnifeTopSpecification']['machine_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Base'); ?></dt>
		<dd>
			<?php echo h($knifeTopSpecification['KnifeTopSpecification']['base']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Punchout'); ?></dt>
		<dd>
			<?php echo h($knifeTopSpecification['KnifeTopSpecification']['punchout']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Length'); ?></dt>
		<dd>
			<?php echo h($knifeTopSpecification['KnifeTopSpecification']['handle_length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Width'); ?></dt>
		<dd>
			<?php echo h($knifeTopSpecification['KnifeTopSpecification']['handle_width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amendment Note'); ?></dt>
		<dd>
			<?php echo h($knifeTopSpecification['KnifeTopSpecification']['amendment_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($knifeTopSpecification['KnifeTopSpecification']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Additional Information'); ?></dt>
		<dd>
			<?php echo h($knifeTopSpecification['KnifeTopSpecification']['additional_information']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Knife Top Specification'), array('action' => 'edit', $knifeTopSpecification['KnifeTopSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Knife Top Specification'), array('action' => 'delete', $knifeTopSpecification['KnifeTopSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $knifeTopSpecification['KnifeTopSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Knife Top Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Knife Top Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
