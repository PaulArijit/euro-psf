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
                    <div class="title">Add New Item <a href="javascript:void(0)" onclick="printData('ctn-print')" class="print print-btn1" rel="ctn-print"><i class="fa fa-print"></i>&nbsp;Print</a></div>
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
                                    <a id="editForm" href="javascript:void(0)" style="font-size:18px; color: #ff9900" title="Edit Form" ><i class="fa fa-edit"></i> Edit Carton Specification</a>
                                <?php } else if ($this->Session->read('Auth.User.role') == 1) { ?>
                                    <a id="editForm" href="javascript:void(0)" style="font-size:18px; color: #ff9900" title="Edit Form" ><i class="fa fa-edit"></i> Edit Carton Specification</a>                                    
                                <?php } else if ($this->Session->read('Auth.User.role') == 2) { ?>

                                <?php } ?>                                
                            </div>
                        </div>
                        <div class="row">
                            <?php echo $this->Form->create('CartonSpecification', array('enctype' => 'multipart/form-data')); ?>
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
                                    <div class="panel-heading text-center">User</div>
                                    <div class="panel-body text-center">
                                        <?php echo $this->Form->input('npi', array('class' => 'form-control', 'label' => FALSE)); ?>
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
                                    <tr>
                                        <td><label>Additional Information</label></td>
                                        <td style="height: 200px; vertical-align: top">
                                            <p style="height: 180px;"><?php
                                                if ($this->request->data['CartonSpecification']['additional_information'] == '') {
                                                    echo 'No preview available';
                                                } else {
                                                    echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['CartonSpecification']['additional_information'] . '" width="300" height="200">';
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
                                    <button  class="btn btn-success" type="submit" onclick="return confirm('Are you sure you want to continue')" >Save</button>
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
<div id="ctn-print" class="print-hidden">
    <center>
        <table>
            <tr>
                <td width="90%" style="text-align: center;"><h2>Carton Specification</h2></td>
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
                        <td><label>Size (mm) (LxWxH)</label></td>
                        <td><?php echo $this->Form->value('size'); ?></td>
                    </tr>
                    <tr>
                        <td><label>Board Quality</label></td>
                        <td><?php echo $this->Form->value('board_quality'); ?></td>
                    </tr>
                    <tr>
                        <td><label>Marking Color</label></td>
                        <td><?php echo $this->Form->value('marking_color'); ?></td>
                    </tr>
                    <tr>
                        <td><label>Barcode Number</label></td>
                        <td><?php echo $this->Form->value('barcode_number'); ?></td>
                    </tr>
                    <tr>
                        <td><label>Additional Information</label></td>
                        <td style="height: 200px; vertical-align: top">
                            <p style="height: 180px;"><?php
                                if ($this->request->data['CartonSpecification']['additional_information'] == '') {
                                    echo 'No preview available';
                                } else {
                                    echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['CartonSpecification']['additional_information'] . '" width="300" height="200">';
                                }
                                ?>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
            <td width="5%"></td>
            <td width="40%">
                <table class="tabprint" cellpadding="0" cellspacing="0">
                    <tr>
                        <td colspan="2"><label>Product Gross Weight (kg)</label></td>
                        <td><?php echo $this->Form->value('product_gross_weight'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label>Film Embossed?</label></td>
                        <td><?php echo $this->Form->value('film_embossed'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label>Carton Marking Position</label></td>
                        <td><?php echo $this->Form->value('ctn_marking_position'); ?></td>
                    </tr>                                    
                    <tr>
                        <td rowspan="2"><label>Carton Marking Size</label></td>
                        <td><label>Width:</label> </td>
                        <td><?php echo $this->Form->value('ctn_marking_size_width'); ?></td>
                    </tr>
                    <tr>
                        <td><label>Height:</label></td> 
                        <td><?php echo $this->Form->value('ctn_marking_size_height'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label>Additional Requirement</label></td>
                        <td><?php echo $this->Form->value('aditional_requirement'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label>Amendment Note</label></td>
                        <td><?php echo $this->Form->value('amendment_note'); ?></td>
                    </tr>
                </table>
            </td>
        </table>
    </center>
</div>
<!--Print Section-->

<script type="text/javascript">
    /********For View**********/
    $("input").attr("disabled", true);
    $("textarea").attr("disabled", true);
    $("select").attr("disabled", true);
    $('button').attr('disabled', true);
    $('input#file').attr('disabled', true);

    $('#editForm').on('click', function () {
        $('input').removeAttr('disabled');
        $('textarea').removeAttr('disabled');
        $('select').removeAttr('disabled');
        $('input#file').removeAttr('disabled');
        $('#CartonSpecificationNpi').attr("disabled", true);
        $('button').removeAttr('disabled');
    });

</script>

