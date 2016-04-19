<div class="logs index">
	<h2><?php echo __('Logs'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('table_name'); ?></th>
			<th><?php echo $this->Paginator->sort('field_name'); ?></th>
			<th><?php echo $this->Paginator->sort('old_data'); ?></th>
			<th><?php echo $this->Paginator->sort('new_data'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($logs as $log): ?>
        <?php $rowspan = sizeof($log['LogField']) ; ?>

        <?php foreach ($log['LogField'] as $key => $logField): ?>
        <tr>
                    <?php if ($key == 0) : ?>
                        <td rowspan="<?php echo $rowspan ?>"><?php echo h($log['Log']['id']); ?>&nbsp;</td>
                        <td rowspan="<?php echo $rowspan ?>"><?php echo h($log['Log']['table_name']); ?>&nbsp;</td>
                    <?php endif;?>
                    
                    <td><?php echo h($logField['field_name']); ?>&nbsp;</td>
                    <td><?php echo h($logField['old_value']); ?>&nbsp;</td>
                    <td><?php echo h($logField['new_value']); ?>&nbsp;</td>
                    
                    <?php if ($key == 0) : ?>
                        <td rowspan="<?php echo $rowspan ?>"><?php echo h($log['Log']['created']); ?>&nbsp;</td>
                        <td rowspan="<?php echo $rowspan ?>">
                                <?php echo $this->Html->link($log['User']['id'], array('controller' => 'users', 'action' => 'view', $log['User']['id'])); ?>
                        </td>
                    <?php endif;?>
                </tr>
            <?php endforeach; ?>
        
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Log'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php //pr($logs); ?>