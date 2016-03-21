<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">QC Lab Report Version List</div>                    
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('id'); ?></th>                            
                            <th><?php echo $this->Paginator->sort('version'); ?></th>
                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($qcLabReportDetails as $qcLabReportDetail): ?>                       
                            <tr>
                                <td><?php echo h($qcLabReportDetail['QcLabReportDetail']['id']); ?>&nbsp;</td>
                                <td><?php echo h($qcLabReportDetail['QcLabReportDetail']['version']); ?>&nbsp;</td>
                                <td><?php echo h($qcLabReportDetail['QcLabReportDetail']['created']); ?>&nbsp;</td>
                                <td class="actions">
                                    <span class="label label-info"><?php echo $this->Html->link(__('View'), array('action' => 'view', $qcLabReportDetail['QcLabReportDetail']['id'])); ?></span>
<!--                                    <span class="label label-danger"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $qcLabReportDetail['QcLabReportDetail']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $qcLabReportDetail['QcLabReportDetail']['id']))); ?></span>-->
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