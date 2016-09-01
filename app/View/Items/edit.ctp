<?php
$itemId = $this->request->data['Item']['id'];
?>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Add New Item</div>
                </div>
            </div>
            <div class="card-body">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-xs-10">
                                <?php echo $this->Form->create('Item', array('class' => 'form-horizontal')); ?>
                                <?php echo $this->Form->input('id'); ?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Product Description</label>
                                    <div class="col-sm-8">
                                        <?php echo $this->Form->input('description', array('class' => 'form-control', 'placeholder' => 'Please enter description', 'label' => FALSE)); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Product Category</label>
                                    <div class="col-sm-8">
                                        <?php echo $this->Form->input('category', array('options' => Configure::read('CATEGORY'), 'class' => 'form-control', 'placeholder' => 'Please enter category', 'label' => FALSE)); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Sapcode</label>
                                    <div class="col-sm-8">
                                        <?php echo $this->Form->input('sapcode', array('class' => 'form-control', 'placeholder' => 'Please enter sapcode', 'label' => FALSE)); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <?php
                                if ($this->Form->value('status') == 1) {
                                    echo $this->Html->image('approved.jpg', array('alt' => 'Approved', 'height' => '100'));
                                } else {
                                    echo $this->Html->image('notapproved.png', array('alt' => 'Not Approved', 'height' => '70'));
                                }
                                ?>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            <?php if ($this->Session->read('Auth.User.role') == 3) { ?>
                            <?php
                            echo'<a class="btn btn-warning" href="http://localhost/euro-psf/ProductSpecifications/edit/' . $itemId . '">Continue</a>';
                                    ?>
                            <?php }else{ ?>
                            <button class="btn btn-success" type="submit">Save & Continue</button>
                            <?php } ?>
                        </div>
                    </div>
                </div>                
            </div>										
        </div>
    </div>
</div>