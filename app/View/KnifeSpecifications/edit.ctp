<?php
$conf_categories = Configure::read('CATEGORY');
$category = $conf_categories[$this->request->data['Item']['category']];
?>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Add New Item <a href="javascript:void(0)" onclick="printData('knife-print')" class="print print-btn1" rel="knife-print"><i class="fa fa-print"></i>&nbsp;Print</a></div>
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
                            <?php echo $this->Form->create('KnifeSpecification'); ?>
                            <?php echo $this->Form->input('id'); ?>
                            <?php echo $this->Form->input('item_id', array('type' => 'hidden')); ?>
                            <h1 class="text-center">Knife</h1>
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
                                        <td width="20%"><label>Knife Size (mm)</label></td>
                                        <td><?php echo $this->Form->input('knife_size', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td width="40%" rowspan="9" valign="top">
                                            <label>Remarks:</label>
                                            <?php echo $this->Form->input('remarks', array('class' => 'form-control', 'label' => FALSE, 'type' => 'textarea', 'rows' => '8')); ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><label>Similar Knife</label></td>
                                        <td><?php echo $this->Form->input('similar_knife', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Knife Type</label></td>
                                        <td><?php echo $this->Form->input('knife_type', array('options' => Configure::read('KNIFETYPE'), 'class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>M6 Screw Holes</label></td>
                                        <td><?php echo $this->Form->input('m6_screw_holes', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                                    </tr>								
                                    <tr>
                                        <td><label>Machine Type</label></td>
                                        <td><?php echo $this->Form->input('machine_type', array('options' => Configure::read('MACHINETYPE'), 'class' => 'form-control', 'label' => FALSE), array('width' => '20')); ?></td>									
                                    </tr>
                                    <tr>
                                        <td><label>Base</label></td>
                                        <td><?php echo $this->Form->input('base', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                                    </tr>
                                    <tr>
                                        <td><label>Punch Out %</label></td>
                                        <td><?php echo $this->Form->input('punchout', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                                    </tr>
                                    <tr>
                                        <td><label>Handle Length (mm)</label></td>
                                        <td><?php echo $this->Form->input('handle_length', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                                    </tr>
                                    <tr>
                                        <td><label>Handle Width (mm)</label></td>
                                        <td><?php echo $this->Form->input('handle_width', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
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

<div id="knife-print" class="print-hidden">
    <center>
        <h2>Knife Specification</h2>
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
                <td width="20%"><label>Knife Size (mm)</label></td>
                <td><?php echo $this->Form->value('knife_size'); ?></td>
                <td width="40%" rowspan="9" valign="top">
                    <label>Remarks:</label>
                    <?php echo $this->Form->value('remarks'); ?>
                </td>
            </tr>

            <tr>
                <td><label>Similar Knife</label></td>
                <td><?php echo $this->Form->value('similar_knife'); ?></td>
            </tr>
            <tr>
                <td><label>Knife Type</label></td>
                <td><?php echo $this->Form->value('knife_type'); ?></td>
            </tr>
            <tr>
                <td><label>M6 Screw Holes</label></td>
                <td><?php echo $this->Form->value('m6_screw_holes'); ?></td>									
            </tr>								
            <tr>
                <td><label>Machine Type</label></td>
                <td><?php echo $this->Form->value('machine_type', array('options' => Configure::read('MACHINETYPE'))); ?></td>									
            </tr>
            <tr>
                <td><label>Base</label></td>
                <td><?php echo $this->Form->value('base'); ?></td>
            </tr>
            <tr>
                <td><label>Punch Out %</label></td>
                <td><?php echo $this->Form->value('punchout'); ?></td>									
            </tr>
            <tr>
                <td><label>Handle Length (mm)</label></td>
                <td><?php echo $this->Form->value('handle_length'); ?></td>	
            </tr>
            <tr>
                <td><label>Handle Width (mm)</label></td>
                <td><?php echo $this->Form->input('value'); ?></td>		
            </tr>
            <tr>
                <td colspan="3">
                    <label>Amendment Note:</label>
                    <?php echo $this->Form->value('amendment_note'); ?>
                </td>
            </tr>            
        </table>        
    </center>
</div>
<!--disabled text for user2-->
<input style="display: none;" id="role_val" type="text" value="<?php echo $this->Session->read('Auth.User.role'); ?>"/>
<script type="text/javascript">
    $(document).ready(function() {
        if($('#role_val').val() == 2){
            $("input").attr('disabled','disabled');
            $("input[type=file]").attr('disabled','disabled');
            $("select").attr('disabled','disabled');
            $("textarea").attr('disabled','disabled');
        }else{
            $("input").removeAttr('disabled');
        }
    });
    
</script>
