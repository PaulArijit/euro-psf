<?php
$conf_categories = Configure::read('CATEGORY');
$category = $conf_categories[$this->request->data['Item']['category']];
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
                <div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <dl>
                                <dt><?php echo __('Product Description'); ?></dt>
                                <dd>
                                    <?php echo $this->request->data['Item']['description']; ?>
                                    &nbsp;
                                </dd>
                                <dt><?php echo __('Product Category'); ?></dt>
                                <dd>
                                    <?php echo $category; ?>
                                    &nbsp;
                                </dd>
                                <dt><?php echo __('Sapcode'); ?></dt>
                                <dd>
                                    <?php echo $this->request->data['Item']['sapcode']; ?>
                                    &nbsp;
                                </dd>
                            </dl>
                        </div>
                        <div class="panel-footer text-right">
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', 'controller' => 'Items', $this->request->data['Item']['id']), array('type' => 'button', 'class' => 'btn btn-success')); ?>
                        </div>
                    </div>
                </div>
            </div>	
            <!--tab panel start-->									
            <div class="card-body no-padding">               
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul role="tablist" class="nav nav-tabs">
                        <?php echo $this->element('tab_navigation'); ?>
                    </ul>    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="row">
                            <?php echo $this->Form->create('LabelSpecification'); ?>
                            <?php echo $this->Form->input('id'); ?>
                            <?php echo $this->Form->input('item_id', array('type' => 'hidden')); ?>
                            <h1 class="text-center">Label</h1>
                            <div class="col-lg-10">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <dl>
                                            <dt><?php echo __('Product Description'); ?></dt>
                                            <dd>
                                                <?php echo $this->request->data['Item']['description']; ?>
                                                &nbsp;
                                            </dd>
                                            <dt><?php echo __('Product Category'); ?></dt>
                                            <dd>
                                                <?php echo $category; ?>
                                                &nbsp;
                                            </dd>
                                            <dt><?php echo __('Sapcode'); ?></dt>
                                            <dd>
                                                <?php echo $this->request->data['Item']['sapcode']; ?>
                                                &nbsp;
                                            </dd>
                                            <dt><?php echo __('Ref No'); ?></dt>
                                            <dd>
                                                <?php echo $this->Form->input('ref_no', array('class' => 'form-control', 'label' => FALSE)); ?>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="panel fresh-color panel-success">
                                    <div class="panel-heading text-center">User</div>
                                    <div class="panel-body text-center">
                                        <?php echo $this->Form->input('npi', array('class' => 'form-control', 'label' => FALSE, 'readonly' => TRUE)); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <table class="grommet-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td><label>Type</label></td>
                                        <td><?php echo $this->Form->input('type', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td rowspan="8" valign="top">
                                            <label>Remarks:</label>
                                            <?php echo $this->Form->input('remarks', array('class' => 'form-control', 'label' => FALSE, 'type' => 'textarea', 'rows' => '8')); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Size (mm)</label></td>
                                        <td><?php echo $this->Form->input('size', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Label Color</label></td>
                                        <td><?php echo $this->Form->input('label_color', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Wording Color</label></td>
                                        <td><?php echo $this->Form->input('wording_color', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                                    </tr>								
                                    <tr>
                                        <td><label>Barcode Number</label></td>
                                        <td><?php echo $this->Form->input('barcode_number', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                                    </tr>
                                    <tr>
                                        <td><label>Barcode Format</label></td>
                                        <td><?php echo $this->Form->input('barcode_format', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                                    </tr>
                                    <tr>
                                        <td><label>Qty/Vac or Carton</label></td>
                                        <td><?php echo $this->Form->input('qty_per_vac_ctn', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                                    </tr>
                                    <tr>
                                        <td><label>Applied for</label></td>
                                        <td><?php echo $this->Form->input('applied_for', array('class' => 'form-control', 'label' => FALSE)); ?></td>		
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <label>Amendment Note:</label>
                                            <?php echo $this->Form->input('amendment_note', array('class' => 'form-control', 'label' => FALSE, 'type' => 'textarea', 'rows' => '3')); ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="pull-right">
                                    <button class="btn btn-success" type="submit" onclick="return confirm('Are you sure you want to continue')">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>										
            <!--tab panel end-->									
        </div>
    </div>
</div>



<!--<div class="labelSpecifications form">
<?php echo $this->Form->create('LabelSpecification'); ?>
        <fieldset>
                <legend><?php echo __('Edit Label Specification'); ?></legend>
<?php
echo $this->Form->input('id');
echo $this->Form->input('item_id');
echo $this->Form->input('npi');
echo $this->Form->input('ref_no');
echo $this->Form->input('type');
echo $this->Form->input('size');
echo $this->Form->input('label_color');
echo $this->Form->input('wording_color');
echo $this->Form->input('barcode_number');
echo $this->Form->input('barcode_format');
echo $this->Form->input('qty_per_vac_ctn');
echo $this->Form->input('applied_for');
echo $this->Form->input('amendment_note');
echo $this->Form->input('remarks');
?>
        </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>

                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LabelSpecification.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('LabelSpecification.id'))); ?></li>
                <li><?php echo $this->Html->link(__('List Label Specifications'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
        </ul>
</div>-->
