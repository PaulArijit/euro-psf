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

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <?php echo ucfirst(h($user['User']['username'])); ?> <?php echo $this->Html->link('Change Password', array('controller' => 'users', 'action' => 'change_password'), array('escape' => FALSE)); ?>
            </div>
            <div class="panel-body">
                <dl>
                    <dt><?php echo __('Id'); ?></dt>
                    <dd>
                        <?php echo h($user['User']['id']); ?>
                        &nbsp;
                    </dd>
                    <dt><?php echo __('Username'); ?></dt>
                    <dd>
                        <?php echo h($user['User']['username']); ?>
                        &nbsp;
                    </dd>
                    <dt><?php echo __('Role'); ?></dt>
                    <dd><?php echo $role; ?></dd>
                    <dt><?php echo __('Created'); ?></dt>
                    <dd>
                        <?php echo h($user['User']['created']); ?>
                        &nbsp;
                    </dd>
                    <dt><?php echo __('Modified'); ?></dt>
                    <dd>
                        <?php echo h($user['User']['modified']); ?>
                        &nbsp;
                    </dd>
                    <dt><?php echo __('Status'); ?></dt>
                    <dd><?php echo $status; ?></dd>
                </dl>
            </div>            
        </div>
    </div>
</div>

