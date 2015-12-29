<div class="login-panel-body">
    <?php echo $this->Form->create('User'); ?>
    <div class="control">
        <label>Username</label>
        <?php echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Enter Your Username', 'label' => FALSE)); ?>
    </div>
    <div class="control">
        <label>Password</label>
        <?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Enter Your Password', 'label' => FALSE)); ?>
    </div>
    <div class="login-button text-center">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
</div>