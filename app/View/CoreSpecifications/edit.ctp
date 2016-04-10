<?php
$conf_categories = Configure::read('CATEGORY');
$category = $conf_categories[$this->request->data['Item']['category']];
?>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Add New Item <a href="javascript:void(0)" onclick="printData('core-details-print')" class="print print-btn1" rel="core-details-print"><i class="fa fa-print"></i>&nbsp;Print</a></div>
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
                            <?php echo $this->Form->create('CoreSpecification'); ?>
                            <?php echo $this->Form->input('id'); ?>
                            <?php echo $this->Form->input('item_id', array('type' => 'hidden')); ?>
                            <h1 class="text-center">Core</h1>
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
                            <div class="col-lg-6 col-md-6">
                                <table class="core-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td rowspan="2"><label>Size (mm)</label></td>
                                        <td><label>Internal Diameter</label></td>
                                        <td><label>Length</label></td>
                                        <td><label>Thickness</label></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $this->Form->input('internal_diameter', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('length', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('thickness', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>								
                                </table>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <table class="core-tab2" cellpadding="0" cellspacing="0">								
                                    <tr>
                                        <td><label>Core required per carton</label></td>
                                        <td><?php echo $this->Form->input('core_required_per_ctn', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Additional Requirement</label></td>
                                        <td><?php echo $this->Form->input('additional_requirement', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Amendment Note</label></td>
                                        <td><?php echo $this->Form->input('amendment_note', array('class' => 'form-control', 'label' => FALSE, 'type' => 'textarea')); ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-12 core-img">
                                <div id="core-internal-dia">&nbsp;</div>
                                <div id="core-length">&nbsp;</div>
                                <div id="core-thickness">&nbsp;</div>
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
<script type="text/javascript">
        $(document).ready(function() {
            
            $('#core-length').html($('#CoreSpecificationLength').val());
            $('#core-internal-dia').html($('#CoreSpecificationInternalDiameter').val());
            $('#core-thickness').html($('#CoreSpecificationThickness').val());
            
            $('#CoreSpecificationLength').keyup(function() {
                $('#core-length').text($(this).val());
            });
            $('#CoreSpecificationInternalDiameter').keyup(function() {
                $('#core-internal-dia').text($(this).val());
            });
            $('#CoreSpecificationThickness').keyup(function() {
                $('#core-thickness').text($(this).val());
            });
                           
        });
</script>
<!--Print Section-->
<div id="core-details-print" class="print-hidden">
<center>
    <h2>Core Specification</h2>
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
    <table style="width: 100%;" cellpadding="0" cellspacing="0">
        <td width="55%" valign="top">
            <table class="tabprint" cellpadding="0" cellspacing="0">
                <tr>
                    <td rowspan="2"><label>Size (mm)</label></td>
                    <td><label>Internal Diameter</label></td>
                    <td><label>Length</label></td>
                    <td><label>Thickness</label></td>
                </tr>
                <tr>
                    <td><?php echo $this->Form->value('internal_diameter'); ?></td>
                    <td><?php echo $this->Form->value('length'); ?></td>
                    <td><?php echo $this->Form->value('thickness'); ?></td>
                </tr>								
            </table>
        </td>
        <td width="5%"></td>
        <td width="40%">
            <table class="tabprint" cellpadding="0" cellspacing="0">								
                <tr>
                    <td><label>Core required per carton</label></td>
                    <td><?php echo $this->Form->value('core_required_per_ctn'); ?></td>
                </tr>
                <tr>
                    <td><label>Additional Requirement</label></td>
                    <td><?php echo $this->Form->value('additional_requirement'); ?></td>
                </tr>
                <tr>
                    <td><label>Amendment Note</label></td>
                    <td><?php echo $this->Form->value('amendment_note'); ?></td>
                </tr>
            </table>
        </td>
    </table>
</center>
</div>
<!--Print Section-->
<!--disabled text for user2-->
<input style="display: none;" id="role_val" type="text" value="<?php echo $this->Session->read('Auth.User.role'); ?>"/>
<script type="text/javascript">
    $(document).ready(function() {
        if($('#role_val').val() == 2){
            $("input").attr('disabled','disabled');
            $("input[type=file]").attr('disabled','disabled');
            $("textarea").attr('disabled','disabled');
        }else{
            $("input").removeAttr('disabled');
        }
    });
    
</script>