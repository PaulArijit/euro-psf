<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Items List</div>                    
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('id'); ?></th>
                            <th><?php echo $this->Paginator->sort('description'); ?></th>
                            <th><?php echo $this->Paginator->sort('category'); ?></th>
                            <th><?php echo $this->Paginator->sort('sapcode'); ?></th>
                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                            <th><?php echo $this->Paginator->sort('modified'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($items as $item): ?>
                            <tr>
                                <td><?php echo h($item['Item']['id']); ?>&nbsp;</td>
                                <td><?php echo h($item['Item']['description']); ?>&nbsp;</td>
                                <td><?php echo h($item['Item']['category']); ?>&nbsp;</td>
                                <td><?php echo h($item['Item']['sapcode']); ?>&nbsp;</td>
                                <td><?php echo h($item['Item']['created']); ?>&nbsp;</td>
                                <td><?php echo h($item['Item']['modified']); ?>&nbsp;</td>
                                <td class="actions">
                                    <span class="label label-info"><?php echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['id'])); ?></span>
                                    <span class="label label-warning"><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $item['Item']['id'])); ?></span>
                                    <span class="label label-danger"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Item']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $item['Item']['id']))); ?></span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <p>
                    <?php
                    echo $this->Paginator->counter(array(
                        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                    ));
                    ?>	
                </p>
                <nav>
                    <ul class="pagination">
                        <li><?php echo $this->Paginator->prev('<i class="fa fa-angle-double-left"></i>' . '&nbsp;' . __('previous'), array('escape' => FALSE), null, array('class' => 'prev disabled')); ?></li>
                        <li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>                    
                        <li><?php echo $this->Paginator->next(__('next') . '&nbsp;' . ' <i class="fa fa-angle-double-right"></i>', array('escape' => FALSE), null, array('class' => 'next disabled')); ?></li>
                    </ul>
                </nav>                
            </div>
        </div>
    </div>
</div>