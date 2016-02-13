<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Add New Item</div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php echo $this->Form->create('Item', array('class' => 'form-horizontal')); ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="">Product Description</label>
                                <div class="col-sm-6">
                                    <?php echo $this->Form->input('description', array('class' => 'form-control', 'placeholder' => 'Please enter description', 'label' => FALSE)); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="">Product Category</label>
                                <div class="col-sm-6">
                                    <?php echo $this->Form->input('category', array('options' => Configure::read('CATEGORY'),'class' => 'form-control', 'placeholder' => 'Please enter category', 'label' => FALSE)); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="">Sapcode</label>
                                <div class="col-sm-6">
                                    <?php echo $this->Form->input('sapcode', array('class' => 'form-control', 'placeholder' => 'Please enter sapcode', 'label' => FALSE)); ?>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            <button class="btn btn-success" type="submit">Save & Continue</button>
                        </div>
                        <?php $this->Form->end(); ?>
                    </div>
                </div>
            </div>										
        </div>
    </div>
</div>