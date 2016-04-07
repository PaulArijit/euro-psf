<?php
$conf_categories = Configure::read('CATEGORY');
$category = $conf_categories[$this->request->data['Item']['category']];
?>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Add New Item <a href="javascript:void(0)" onclick="printData('fusset-print')" class="print print-btn1" rel="fusset-print"><i class="fa fa-print"></i>&nbsp;Print</a></div>
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
                                    <div class="panel-heading text-center">User</div>
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

<!--Print Section-->
<div id="fusset-print" class="print-hidden">
    <center>
        <h2>Fusset Specification</h2>
        <table style="width: 100%;" cellpadding="0" cellspacing="0">
            <tr>
                <td style="width: 70%; border: 1px solid silver;">
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="20%" style="text-align: center; background: #EEE;">Product Description:</td>
                            <td width="50%" style="text-align: left; font-weight: bold; padding-left: 20px;"><?php echo $this->request->data['Item']['description']; ?></td>
                        </tr>
                        <tr>
                            <td width="20%" style="text-align: center; background: #EEE;">Product Category:</td>
                            <td width="50%" style="text-align: left; font-weight: bold; padding-left: 20px;"><?php echo $category; ?></td>
                        </tr>
                        <tr>
                            <td width="20%" style="text-align: center; background: #EEE;">Sapcode:</td>
                            <td width="50%" style="text-align: left; font-weight: bold; padding-left: 20px;"><?php echo $this->request->data['Item']['sapcode']; ?></td>
                        </tr>
                        <tr>
                            <td width="20%" style="text-align: center; background: #EEE;">Ref No:</td>
                            <td width="50%" style="text-align: left; font-weight: bold; padding-left: 20px;"><?php echo $this->Form->value('ref_no'); ?></td>
                        </tr>                    
                    </table>
                </td>
                <td style="width: 10%;"></td>
                <td style="width: 20%; border: 1px solid silver;">
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="text-align: center; border-bottom:  1px solid silver;"><b>Username</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><?php echo $this->Form->value('npi'); ?></td>
                        </tr>
                    </table>
                </td>            
            </tr>
        </table>
        <br/>
        <table class="tabprint" cellpadding="0" cellspacing="0">
            <tr>
                <td colspan="2"><label>Material</label></td>
                <td><?php echo $this->Form->value('material'); ?></td>
                <td rowspan="5">
                    <label><label>Amendment Note:</label></label>
                    <?php echo $this->Form->value('amendment_note'); ?>
                </td>
            </tr>
            <tr>
                <td colspan="2"><label>Size</label></td>
                <td><?php echo $this->Form->value('size'); ?></td>
            </tr>
            <tr>
                <td rowspan="2"><label>Material</label></td>
                <td><label>Body</label></td>
                <td><?php echo $this->Form->value('color_body'); ?></td>
            </tr>
            <tr>
                <td><label>Cap</label></td>
                <td><?php echo $this->Form->value('color_cap'); ?></td>
            </tr>
            <tr>
                <td colspan="2"><label>Compression Strength(kg)</label></td>
                <td><?php echo $this->Form->value('compression_strength'); ?></td>	
            </tr>
            <tr>
                <td colspan="4">
                    <label><label>Remarks:</label></label>
                    <?php echo $this->Form->value('remarks'); ?>
                </td>								
            </tr>
        </table>        
    </center>
</div>