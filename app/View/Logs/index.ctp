<?php $imgdirPath = 'app/webroot/img/uploaded/'; ?>
<div class="logs index">
    <h2><?php echo __('Logs'); ?></h2>
    <?php $url = array('controller' => 'Logs', 'action' => 'index'); ?>
    <?php echo $this->Form->create('Filter', array('url' => $url)); ?>
    <div class="src-area noprint">
        <ul class="filters">            
            <li><?php echo $this->Form->input('value', array('class' => 'form-control input-sm', 'label' => false, 'placeholder' => 'Search')); ?></li>
            <li><?php echo $this->Form->input('field', array('options' => array('sapcode' => 'Sapcode', 'description' => 'Description'), 'label' => false, 'class' => 'form-control input-sm')); ?></li>
            <li><button type="submit" class="btn  btn-info"><i class="fa fa-search"></i></button></li>
            <li><?php echo $this->Html->link('<i class="fa fa-refresh"></i>', array('action' => 'index'), array('escape' => FALSE, 'class' => 'btn btn-warning')); ?></li>            
        </ul>
        <div class="input-group srch-btn">

        </div>
    </div>
    <table cellpadding="0" cellspacing="0" class="table table-bordered">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('Item Desc'); ?></th>
                <th><?php echo $this->Paginator->sort('Sapcode'); ?></th>
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
                <?php $rowspan = sizeof($log['LogField']); ?>

                <?php foreach ($log['LogField'] as $key => $logField): ?>
                    <tr>
                        <?php if ($key == 0) : ?>
                            <td rowspan="<?php echo $rowspan ?>"><?php echo h($log['Log']['id']); ?>&nbsp;</td>
                            <td rowspan="<?php echo $rowspan ?>"><?php echo h($log['Item']['description']); ?>&nbsp;</td>
                            <td rowspan="<?php echo $rowspan ?>"><?php echo h($log['Item']['sapcode']); ?>&nbsp;</td>
                            <td rowspan="<?php echo $rowspan ?>"><?php echo h($log['Log']['table_name']); ?>&nbsp;</td>
                        <?php endif; ?>

                        <td><?php echo h(str_replace('_', ' ', $logField['field_name'])); ?>&nbsp;</td>
                        <td style="color: #cc0033">
                            <?php
                            $img_ext = substr($logField['old_value'], -4);

                            if ($img_ext == '.jpg' || $img_ext == '.png') {
                                echo '<img src="' . SITE_URL . $imgdirPath . $logField['old_value'] . '" width="150" height="100">';
                            } else {
                                echo h($logField['old_value']);
                            }
                            ?>&nbsp;
                        </td>
                        <td style="color: #009933">
                            <?php
                            $img_ext = substr($logField['new_value'], -4);

                            if ($img_ext == '.jpg' || $img_ext == '.png') {
                                echo '<img src="' . SITE_URL . $imgdirPath . $logField['new_value'] . '" width="150" height="100">';
                            } else {
                                echo h($logField['new_value']);
                            }
                            ?>&nbsp;
                        </td>

                        <?php if ($key == 0) : ?>
                            <td rowspan="<?php echo $rowspan ?>"><?php echo h($log['Log']['created']); ?>&nbsp;</td>
                            <td rowspan="<?php echo $rowspan ?>">
                                <?php echo $this->Html->link($log['User']['username'], array('controller' => 'users', 'action' => 'view', $log['User']['id'])); ?>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>

            <?php endforeach; ?>
        </tbody>
    </table>	
</div>

<?php
//pr($logs); ?>