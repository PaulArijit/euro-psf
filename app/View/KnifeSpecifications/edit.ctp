<?php
$conf_categories = Configure::read('CATEGORY');
$category = $conf_categories[$this->request->data['Item']['category']];
$imgdirPath = 'app/webroot/img/uploaded/';
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
                            <div class="col-xs-10">
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
                            <div class="col-xs-2">
                                <?php
                                if ($this->request->data['Item']['status'] == 1) {
                                    echo $this->Html->image('approved.jpg', array('alt' => 'Approved', 'height' => '100'));
                                } else {
                                    echo $this->Html->image('notapproved.png', array('alt' => 'Not Approved', 'height' => '70'));
                                }
                                ?>
                            </div>
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
                            <div class="col-lg-8"></div>
                            <div class="col-lg-4 text-right">
                                <?php if ($this->Session->read('Auth.User.role') == 100) { ?>
                                    <a id="editForm" href="javascript:void(0)" style="font-size:18px; color: #ff9900" title="Edit Form" ><i class="fa fa-edit"></i> Edit Knife Specification</a>
                                <?php } else if ($this->Session->read('Auth.User.role') == 1) { ?>
                                    <a id="editForm" href="javascript:void(0)" style="font-size:18px; color: #ff9900" title="Edit Form" ><i class="fa fa-edit"></i> Edit Knife Specification</a>                                    
                                <?php } else if ($this->Session->read('Auth.User.role') == 2) { ?>

                                <?php } ?>                                
                            </div>
                        </div>
                        <div class="row">
                            <?php echo $this->Form->create('KnifeSpecification', array('enctype' => 'multipart/form-data')); ?>
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
                                            <dt><?php echo __('Ref No Two'); ?></dt>
                                            <dd>
                                                <?php echo $this->Form->input('ref_no_two', array('class' => 'form-control', 'label' => FALSE)); ?>
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
                                <br/>
                                <div class="pull-left">
                                    <table class="cylinder-tab2">
                                        <tr>
                                            <td><label>Additional Information</label></td>
                                            <td  style="height: 200px; vertical-align: top; text-align: center;">
                                                <p style="height: 180px;"><?php
                                                    if ($this->request->data['KnifeSpecification']['additional_information'] == '') {
                                                        echo 'No preview available';
                                                    } else {
                                                        echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['KnifeSpecification']['additional_information'] . '" width="300" height="200">';
                                                    }
                                                    ?>
                                                </p>
                                                <p style="padding-top: 20px;">
                                                    <?php echo $this->Form->file('additional_information'); ?>
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
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
        <table>
            <tr>
                <td width="90%" style="text-align: center;"><h2>Knife Specification</h2></td>
                <td><?php echo $this->Html->image('logo-print.jpg', array('alt' => 'logo', 'height' => '100')); ?></td>
            </tr>
        </table>
        <br/>
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
                        <tr>
                            <td width="20%" style="text-align: center; background: #EEE;">Ref No Two:</td>
                            <td width="50%" style="text-align: left; font-weight: bold; padding-left: 20px;"><?php echo $this->Form->value('ref_no_two'); ?></td>
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
        <?php
            $knife_type = Configure::read('KNIFETYPE');
            $knifetypes = $knife_type[$this->Form->value('knife_type')];
            
            $machine_type = Configure::read('MACHINETYPE');
            $machinepes = $machine_type[$this->Form->value('machine_type')];
        ?>
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
                <td><?php echo $knifetypes; ?></td>
            </tr>
            <tr>
                <td><label>M6 Screw Holes</label></td>
                <td><?php echo $this->Form->value('m6_screw_holes'); ?></td>									
            </tr>								
            <tr>
                <td><label>Machine Type</label></td>
                <td><?php echo $machinepes; ?></td>									
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
                <td><?php echo $this->Form->value('handle_width'); ?></td>		
            </tr>
            <tr>
                <td colspan="3">
                    <label>Amendment Note:</label>
                    <?php echo $this->Form->value('amendment_note'); ?>
                </td>
            </tr>            
        </table>
        <br/>
        <table class="tabprint" cellpadding="0" cellspacing="0">
            <tr>
                <td><label>Additional Information</label></td>
                <td style="height: 200px; vertical-align: top; text-align: center;">
                    <p style="height: 180px;"><?php
                        if ($this->request->data['KnifeSpecification']['additional_information'] == '') {
                            echo 'No preview available';
                        } else {
                            echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['KnifeSpecification']['additional_information'] . '" width="300" height="200">';
                        }
                        ?>
                    </p>                    
                </td>
            </tr>
        </table>
    </center>
</div>
<!--disabled text for user2-->
<script type="text/javascript">
       /********For View**********/
        $("input").attr("disabled", true);
        $("textarea").attr("disabled", true);
        $("select").attr("disabled", true);
        $('button').attr('disabled', true);
         $('input#file').attr('disabled', true);
         
    $('#editForm').on('click', function(){
        $('input').removeAttr('disabled');
        $('textarea').removeAttr('disabled');
        $('select').removeAttr('disabled');
        $('input#file').removeAttr('disabled');
        $('#KnifeSpecificationNpi').attr("disabled", true);
        $('button').removeAttr('disabled');
    });     

</script>