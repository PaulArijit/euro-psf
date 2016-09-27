<div class="knifeBottomSpecifications view">
<h2><?php echo __('Knife Bottom Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($knifeBottomSpecification['KnifeBottomSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($knifeBottomSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $knifeBottomSpecification['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npi'); ?></dt>
		<dd>
			<?php echo h($knifeBottomSpecification['KnifeBottomSpecification']['npi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($knifeBottomSpecification['KnifeBottomSpecification']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No Two'); ?></dt>
		<dd>
			<?php echo h($knifeBottomSpecification['KnifeBottomSpecification']['ref_no_two']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Knife Size'); ?></dt>
		<dd>
			<?php echo h($knifeBottomSpecification['KnifeBottomSpecification']['knife_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Similar Knife'); ?></dt>
		<dd>
			<?php echo h($knifeBottomSpecification['KnifeBottomSpecification']['similar_knife']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Knife Type'); ?></dt>
		<dd>
			<?php echo h($knifeBottomSpecification['KnifeBottomSpecification']['knife_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('M6 Screw Holes'); ?></dt>
		<dd>
			<?php echo h($knifeBottomSpecification['KnifeBottomSpecification']['m6_screw_holes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Machine Type'); ?></dt>
		<dd>
			<?php echo h($knifeBottomSpecification['KnifeBottomSpecification']['machine_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Base'); ?></dt>
		<dd>
			<?php echo h($knifeBottomSpecification['KnifeBottomSpecification']['base']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Punchout'); ?></dt>
		<dd>
			<?php echo h($knifeBottomSpecification['KnifeBottomSpecification']['punchout']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Length'); ?></dt>
		<dd>
			<?php echo h($knifeBottomSpecification['KnifeBottomSpecification']['handle_length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle Width'); ?></dt>
		<dd>
			<?php echo h($knifeBottomSpecification['KnifeBottomSpecification']['handle_width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amendment Note'); ?></dt>
		<dd>
			<?php echo h($knifeBottomSpecification['KnifeBottomSpecification']['amendment_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($knifeBottomSpecification['KnifeBottomSpecification']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Additional Information'); ?></dt>
		<dd>
			<?php echo h($knifeBottomSpecification['KnifeBottomSpecification']['additional_information']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Knife Bottom Specification'), array('action' => 'edit', $knifeBottomSpecification['KnifeBottomSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Knife Bottom Specification'), array('action' => 'delete', $knifeBottomSpecification['KnifeBottomSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $knifeBottomSpecification['KnifeBottomSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Knife Bottom Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Knife Bottom Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
