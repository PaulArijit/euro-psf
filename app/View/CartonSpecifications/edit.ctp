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
                            <button class="btn btn-success" type="submit">Edit</button>
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
                            <?php echo $this->Form->create('CartonSpecification'); ?>
                            <?php echo $this->Form->input('id'); ?>
                            <?php echo $this->Form->input('item_id', array('type' => 'hidden')); ?>
                            <h1 class="text-center">Carton</h1>
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
                            <div class="col-lg-6 col-md-6">
                                <table class="carton-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td><label>Size (mm) (LxWxH)</label></td>
                                        <td><?php echo $this->Form->input('size', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Board Quality</label></td>
                                        <td><?php echo $this->Form->input('board_quality', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Marking Color</label></td>
                                        <td><?php echo $this->Form->input('marking_color', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Barcode Number</label></td>
                                        <td><?php echo $this->Form->input('barcode_number', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <table class="carton-tab2" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td colspan="2"><label>Product Gross Weight (kg)</label></td>
                                        <td><?php echo $this->Form->input('product_gross_weight', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>Film Embossed?</label></td>
                                        <td><?php echo $this->Form->input('film_embossed', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>Carton Marking Position</label></td>
                                        <td><?php echo $this->Form->input('ctn_marking_position', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>                                    
                                    <tr>
                                        <td rowspan="2"><label>Carton Marking Size</label></td>
                                        <td><label>Width:</label> </td>
                                        <td><?php echo $this->Form->input('ctn_marking_size_width', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Height:</label></td> 
                                        <td><?php echo $this->Form->input('ctn_marking_size_height', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>Additional Requirement</label></td>
                                        <td><?php echo $this->Form->input('aditional_requirement', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>Amendment Note</label></td>
                                        <td><?php echo $this->Form->input('amendment_note', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="pull-right">
                                    <button class="btn btn-success" type="submit">Save</button>
                                </div>
                            </div>
                            <?php $this->Form->end(); ?>
                        </div>
                    </div>
                </div>
            </div>										
            <!--tab panel end-->									
        </div>
    </div>
</div>


<!--<div class="cartonSpecifications form">
<?php echo $this->Form->create('CartonSpecification'); ?>
        <fieldset>
                <legend><?php echo __('Edit Carton Specification'); ?></legend>
<?php
echo $this->Form->input('id');
echo $this->Form->input('item_id');
echo $this->Form->input('npi');
echo $this->Form->input('ref_no');
echo $this->Form->input('size');
echo $this->Form->input('board_quality');
echo $this->Form->input('marking_color');
echo $this->Form->input('barcode_number');
echo $this->Form->input('product_gross_weight');
echo $this->Form->input('film_embossed');
echo $this->Form->input('ctn_marking_position');
echo $this->Form->input('ctn_marking_size_weight');
echo $this->Form->input('ctn_marking_size_height');
echo $this->Form->input('aditional_requirement');
echo $this->Form->input('amendment_note');
?>
        </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>

                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CartonSpecification.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CartonSpecification.id'))); ?></li>
                <li><?php echo $this->Html->link(__('List Carton Specifications'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
        </ul>
</div>-->
