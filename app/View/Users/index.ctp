<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Users List</div>                    
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('id'); ?></th>
                            <th><?php echo $this->Paginator->sort('username'); ?></th>
                            <th><?php echo $this->Paginator->sort('role'); ?></th>
                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                            <th><?php echo $this->Paginator->sort('modified'); ?></th>
                            <th><?php echo $this->Paginator->sort('status'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <?php                            
                            $conf_roles = Configure::read('ROLES');
                            $role = $conf_roles[$user['User']['role']];

                            if ($user['User']['status'] == 1) {
                                $status = 'Active';
                            } elseif ($user['User']['status'] == 0) {
                                $status = 'Inactive';
                            } else {
                                $status = 'Not Defined';
                            }
                            ?>
                            <tr>
                                <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                                <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
                                <td><?php echo $role; ?>&nbsp;</td>
                                <td><?php echo h($user['User']['created']); ?>&nbsp;</td>
                                <td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
                                <td><?php echo $status; ?>&nbsp;</td>
                                <td class="actions">
                                    <?php if ($this->Session->read('Auth.User.role') == 100){ ?>
                                    <span class="label label-info"><?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?></span>
                                    <span class="label label-warning"><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?></span>
                                    <span class="label label-danger"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?></span>
                                    <?php }else if ($this->Session->read('Auth.User.role') == 2){?>
                                    <span class="label label-info"><?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?></span>
                                    <?php } ?>
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