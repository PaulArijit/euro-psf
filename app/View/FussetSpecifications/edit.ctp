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
                            <?php echo $this->Form->create('FussetSpecification'); ?>
                            <?php echo $this->Form->input('id'); ?>
                            <?php echo $this->Form->input('item_id', array('type' => 'hidden')); ?>
                            <h1 class="text-center">FUSSET</h1>
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
                                    <div class="panel-heading text-center">NPI</div>
                                    <div class="panel-body text-center">
                                        <?php echo $this->Form->input('npi', array('class' => 'form-control', 'label' => FALSE, 'readonly' => TRUE)); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <table class="fusset-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td colspan="2"><label>Material</label></td>
                                        <td><?php echo $this->Form->input('material', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td rowspan="5">
                                            <label><label>Amendment Note:</label></label>
                                            <?php echo $this->Form->input('amendment_note', array('class' => 'form-control', 'label' => FALSE, 'type' => 'textarea', 'rows' => '6')); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>Size</label></td>
                                        <td><?php echo $this->Form->input('size', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"><label>Material</label></td>
                                        <td><label>Body</label></td>
                                        <td><?php echo $this->Form->input('color_body', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Cap</label></td>
                                        <td><?php echo $this->Form->input('color_cap', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>Compression Strength(kg)</label></td>
                                        <td><?php echo $this->Form->input('compression_strength', array('class' => 'form-control', 'label' => FALSE)); ?></td>	
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <label><label>Remarks:</label></label>
                                            <?php echo $this->Form->input('remarks', array('class' => 'form-control', 'label' => FALSE, 'type' => 'textarea', 'rows' => '3')); ?>
                                        </td>								
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="pull-right">
                                    <button class="btn btn-success" type="submit">Save</button>
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


<!--<div class="fussetSpecifications form">
<?php echo $this->Form->create('FussetSpecification'); ?>
        <fieldset>
                <legend><?php echo __('Edit Fusset Specification'); ?></legend>
<?php
echo $this->Form->input('id');
echo $this->Form->input('item_id');
echo $this->Form->input('npi');
echo $this->Form->input('ref_no');
echo $this->Form->input('material');
echo $this->Form->input('size');
echo $this->Form->input('color_body');
echo $this->Form->input('color_cap');
echo $this->Form->input('compression_strength');
echo $this->Form->input('amendment_note');
echo $this->Form->input('remarks');
?>
        </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>

                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FussetSpecification.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('FussetSpecification.id'))); ?></li>
                <li><?php echo $this->Html->link(__('List Fusset Specifications'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
        </ul>
</div>-->
