<div class="labelSpecifications view">
<h2><?php echo __('Label Specification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($labelSpecification['LabelSpecification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($labelSpecification['Item']['id'], array('controller' => 'items', 'action' => 'view', $labelSpecification['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Npi'); ?></dt>
		<dd>
			<?php echo h($labelSpecification['LabelSpecification']['npi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref No'); ?></dt>
		<dd>
			<?php echo h($labelSpecification['LabelSpecification']['ref_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($labelSpecification['LabelSpecification']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($labelSpecification['LabelSpecification']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Label Color'); ?></dt>
		<dd>
			<?php echo h($labelSpecification['LabelSpecification']['label_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wording Color'); ?></dt>
		<dd>
			<?php echo h($labelSpecification['LabelSpecification']['wording_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode Number'); ?></dt>
		<dd>
			<?php echo h($labelSpecification['LabelSpecification']['barcode_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barcode Format'); ?></dt>
		<dd>
			<?php echo h($labelSpecification['LabelSpecification']['barcode_format']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qty Per Vac Ctn'); ?></dt>
		<dd>
			<?php echo h($labelSpecification['LabelSpecification']['qty_per_vac_ctn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Applied For'); ?></dt>
		<dd>
			<?php echo h($labelSpecification['LabelSpecification']['applied_for']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amendment Note'); ?></dt>
		<dd>
			<?php echo h($labelSpecification['LabelSpecification']['amendment_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($labelSpecification['LabelSpecification']['remarks']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Label Specification'), array('action' => 'edit', $labelSpecification['LabelSpecification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Label Specification'), array('action' => 'delete', $labelSpecification['LabelSpecification']['id']), array(), __('Are you sure you want to delete # %s?', $labelSpecification['LabelSpecification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Label Specifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Label Specification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
