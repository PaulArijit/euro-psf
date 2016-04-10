<div class="row">
    <div class="col-xs-12">
        <div class="card" id="list-items">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Items List</div>
                </div>
            </div>
            <div class="card-body">
                <?php $url = array('controller' => 'Items', 'action' => 'index'); ?>
                <?php echo $this->Form->create('Filter', array('url' => $url)); ?>
                <div class="src-area noprint">
                    <ul class="filters">
                        <li>
                            <?php
                            $options = array(10 => 10, 25 => 25, 50 => 50, 75 => 75, 100 => 100, 500 => 500, 1000 => 1000, 10000 => 10000);
                            echo $this->Form->input('limit', array('class' => 'form-control input-sm', 'label' => false, 'options' => $options));
                            ?>
                        </li>
                        <li><?php echo $this->Form->input('cal_from', array('class' => 'date form-control input-sm', 'label' => false, 'placeholder' => 'From')); ?></li>
                        <li><?php echo $this->Form->input('cal_to', array('class' => 'date form-control input-sm', 'label' => false, 'placeholder' => 'To')); ?></li>
                        <li><?php echo $this->Form->input('category', array('options' => Configure::read('CATEGORY'), 'label' => false, 'class' => 'form-control input-sm')); ?></li>
                        <li><?php echo $this->Form->input('value', array('class' => 'form-control input-sm', 'label' => false, 'placeholder' => 'Search')); ?></li>
                        <li><?php echo $this->Form->input('field', array('options' => array('sapcode' => 'Sapcode', 'description' => 'Description', 'id' => 'ID'), 'label' => false, 'class' => 'form-control input-sm')); ?></li>
                        <li><button type="submit" class="btn  btn-info"><i class="fa fa-search"></i></button></li>
                        <li><?php echo $this->Html->link('<i class="fa fa-refresh"></i>', array('action' => 'index'), array('escape' => FALSE, 'class' =>'btn btn-warning')); ?></li>
                        <li><a href="javascript:void(0)" onclick="printData('list-items')" class="btn  btn-success" rel="list-items"><i class="fa fa-print"></i></a></li>
                    </ul>
                    <div class="input-group srch-btn">

                    </div>
                </div>
                <table class="table table-hover list">
                    <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('id'); ?></th>
                            <th><?php echo $this->Paginator->sort('description'); ?></th>
                            <th><?php echo $this->Paginator->sort('category'); ?></th>
                            <th><?php echo $this->Paginator->sort('sapcode'); ?></th>
                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                            <th><?php echo $this->Paginator->sort('modified'); ?></th>
                            <th><?php echo 'Status'; ?></th>
                            <th class="actions noprint"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($items as $item): ?>
                            <?php
                            $conf_categories = Configure::read('CATEGORY');
                            $category = $conf_categories[$item['Item']['category']];
                            ?>
                            <tr>
                                <td><?php echo h($item['Item']['id']); ?>&nbsp;</td>
                                <td><?php echo h($item['Item']['description']); ?>&nbsp;</td>
                                <td><?php echo $category; ?>&nbsp;</td>
                                <td><?php echo h($item['Item']['sapcode']); ?>&nbsp;</td>
                                <td><?php echo h($item['Item']['created']); ?>&nbsp;</td>
                                <td><?php echo h($item['Item']['modified']); ?>&nbsp;</td>
                                <td><span id="chst<?php echo $item['Item']['id']; ?>" class="change_status <?php echo $item['Item']['status'] == 1 ? 'approved' : 'pending'; ?>" opt="<?php echo $item['Item']['id']; ?>" rel="<?php echo $item['Item']['status']; ?>"><?php echo $item['Item']['status'] == 1 ? 'Approved' : 'Pending'; ?></span>&nbsp;</td>
                                <td class="actions noprint">
                                    <?php if($this->Session->read('Auth.User.role') == 100){ ?>
                                    <span class="label label-success"><?php echo $this->Html->link(__('Approve'), array('action' => 'view', $item['Item']['id'])); ?></span>
                                    <span class="label label-info"><?php echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['id'])); ?></span>
                                    <span class="label label-warning"><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $item['Item']['id'])); ?></span>
                                    <span class="label label-danger"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Item']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $item['Item']['id']))); ?></span> 
                                <?php }else if($this->Session->read('Auth.User.role') == 1){?>
                                    <span class="label label-info"><?php echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['id'])); ?></span>
                                    <span class="label label-warning"><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $item['Item']['id'])); ?></span>
                                    <span class="label label-danger"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Item']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $item['Item']['id']))); ?></span>
                                <?php }else if($this->Session->read('Auth.User.role') == 2){?>
                                    <span class="label label-info"><?php echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['id'])); ?></span>
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
                    <ul class="pagination noprint">
                        <li><?php echo $this->Paginator->prev('<i class="fa fa-angle-double-left"></i>' . '&nbsp;' . __('previous'), array('escape' => FALSE), null, array('class' => 'prev disabled')); ?></li>
                        <li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>                    
                        <li><?php echo $this->Paginator->next(__('next') . '&nbsp;' . ' <i class="fa fa-angle-double-right"></i>', array('escape' => FALSE), null, array('class' => 'next disabled')); ?></li>
                    </ul>
                </nav>                
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#FilterCalFrom').datepicker({format: 'dd-mm-yyyy'});
        $('#FilterCalTo').datepicker({format: 'dd-mm-yyyy'});
    });
</script>