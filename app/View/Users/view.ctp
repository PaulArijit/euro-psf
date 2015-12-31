<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
               <?php echo ucfirst(h($user['User']['username'])); ?>
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
                    <dd><?php echo h($user['User']['role']); ?></dd>
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
                    <dd><?php
                        if ($user['User']['status'] == 1) {
                            echo 'Active';
                        } else if ($user['User']['status'] == 0) {
                            echo 'Inactive';
                        } else {
                            echo'Not Define';
                        }
                        ?></dd>
                </dl>
            </div>            
        </div>
    </div>
</div>

