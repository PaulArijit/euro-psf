<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Add New User</div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php echo $this->Form->create('User', array('class' => 'form-horizontal')); 
                                echo $this->Form->input('id');
                            ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="">Current Password</label>
                                <div class="col-sm-6">
                                    <?php echo $this->Form->input('current_password', array('class' => 'form-control', 'label' => FALSE)); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="">Password</label>
                                <div class="col-sm-6">
                                    <?php echo $this->Form->input('password', array('class' => 'form-control', 'label' => FALSE)); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="">Role</label>
                                <div class="col-sm-6">
                                    <?php echo $this->Form->input('role', array('options' => Configure::read('ROLES'), 'class' => 'form-control', 'label' => FALSE)); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="">Status</label>
                                <div class="col-sm-6">
                                    <?php echo $this->Form->input('status', array('options' => Configure::read('STATUS'), 'class' => 'form-control', 'label' => FALSE)); ?>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>