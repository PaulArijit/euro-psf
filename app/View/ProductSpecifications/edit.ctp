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
                    <div class="title">Add New Item <a href="javascript:void(0)" onclick="printData('product-specification')" class="print print-btn1" rel="product-specification"><i class="fa fa-print"></i>&nbsp;Print</a></div>
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
                                    <a id="editForm" href="javascript:void(0)" style="font-size:18px; color: #ff9900" title="Edit Form" ><i class="fa fa-edit"></i> Edit Product Specification</a>
                                <?php } else if ($this->Session->read('Auth.User.role') == 1) { ?>
                                    <a id="editForm" href="javascript:void(0)" style="font-size:18px; color: #ff9900" title="Edit Form" ><i class="fa fa-edit"></i> Edit Product Specification</a>                                    
                                <?php } else if ($this->Session->read('Auth.User.role') == 2) { ?>

                                <?php } ?>                                
                            </div>
                        </div>
                        <div class="row">
                            <?php echo $this->Form->create('ProductSpecification', array('enctype' => 'multipart/form-data')); ?>
                            <?php
                            echo $this->Form->input('id');
                            echo $this->Form->input('item_id', array('type' => 'hidden'));
                            ?>
                            <h1 class="text-center">Product</h1>
                            <div class="col-lg-12">
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
                                </div>
                            </div>                            
                            <div class="col-xs-12 col-md-12">
                                <table class="product-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td><label>Prepared By</label></td>
                                        <td><?php echo $this->Form->input('prepared_by', array('class' => 'form-control', 'label' => FALSE, 'readonly' => TRUE)); ?></td>
                                        <td><label>Film Type</label></td>
                                        <td><?php echo $this->Form->input('film_type', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>Printed</label></td>
                                        <td><?php echo $this->Form->input('printed', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>Safety Holes</label></td>
                                        <td><?php echo $this->Form->input('safety_hole', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Date</label></td>
                                        <td><?php echo $this->Form->input('date', array('class' => 'date form-control', 'label' => FALSE, 'id' => 'productSpecificationDate', 'type' => 'text')); ?></td>
                                        <td><label>Film Color</label></td>
                                        <td><?php echo $this->Form->input('film_color', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>No. of Colors</label></td>
                                        <td><?php echo $this->Form->input('no_of_color', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>Hanging Holes</label></td>
                                        <td><?php echo $this->Form->input('hanging_hole', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Issue No.</label></td>
                                        <td><?php echo $this->Form->input('issue_no', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>Loop Color</label></td>
                                        <td><?php echo $this->Form->input('loop_color', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>No of sides printed</label></td>
                                        <td><?php echo $this->Form->input('no_of_sides_printed', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>Embossed</label></td>
                                        <td><?php echo $this->Form->input('embossed', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Customer Ref</label></td>
                                        <td><?php echo $this->Form->input('customer_ref', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td rowspan="2"><label>Printing Pantone Ref</label></td>									
                                        <td rowspan="2" colspan="3"><?php echo $this->Form->input('printing_pantone_ref', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>Glue Spot</label></td>
                                        <td><?php echo $this->Form->input('glue_spot', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Data ID</label></td>								
                                        <td><?php echo $this->Form->input('dataid', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>Diagonal Corner Seal</label></td>
                                        <td><?php echo $this->Form->input('diagonal_corner_seal', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                </table>
                                <br/>
                                <br/>
                            </div>
                            <div class="col-lg-8 col-xs-8 col-md-8">
                                <table class="product-tab2" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <th>Description</th>
                                        <th>Specification</th>
                                        <th>Tolerance</th>
                                    </tr>
                                    <tr>
                                        <td><label>Closed Width (mm)</label></td>
                                        <td><?php echo $this->Form->input('closed_width_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('closed_width_tolerance', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Open Width (mm)</label></td>
                                        <td><?php echo $this->Form->input('open_width_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('open_width_tolerance', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Length (mm)</label></td>
                                        <td><?php echo $this->Form->input('length_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('length_tolerance', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Thickness (mu)</label></td>
                                        <td><?php echo $this->Form->input('thickness_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('thickness_tolerance', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Bag Weight (g)</label></td>
                                        <td><?php echo $this->Form->input('bag_weight_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('bag_weight_tolerance', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Case Weight (kg)</label></td>
                                        <td><?php echo $this->Form->input('case_weight_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('case_weight_tolerance', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Opacity (%)</label></td>
                                        <td><?php echo $this->Form->input('opacity_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('opacity_tolerance', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>                                    
                                    <tr>
                                        <td><label>Open Bottom Gusset (mm)</label></td>
                                        <td><?php echo $this->Form->input('open_bottom_gusset_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('open_bottom_gusset_tolerance', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Turn Over Top (mm)</label></td>
                                        <td><?php echo $this->Form->input('turn_over_top_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('turn_over_top_tolerance', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Bag Lip (mm)</label></td>
                                        <td><?php echo $this->Form->input('bag_lip_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('bag_lip_tolerance', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Loop Thickness (mu)</label></td>
                                        <td><?php echo $this->Form->input('loop_thickness_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('loop_thickness_tolerance', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Ultimate Lift (kg)</label></td>
                                        <td><?php echo $this->Form->input('ultimate_lift_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('ultimate_lift_tolerance', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Jog Test (kg)</label></td>
                                        <td><?php echo $this->Form->input('jog_test_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('jog_test_tolerance', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Cut Out (%)</label></td>
                                        <td><?php echo $this->Form->input('cut_out_specification', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('cut_out_tolerance', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                </table>
                                <br/>
                            </div>
                            <div class="col-lg-4">
                                <div class="panel fresh-color panel-info">
                                    <div class="panel-heading text-center"><label>Additional Information</label></div>
                                    <div style="height: 535px;"  class="panel-body text-center">
                                        <?php
                                        if ($this->request->data['ProductSpecification']['additional_information'] == '') {
                                            echo 'No preview available';
                                        } else {
                                            echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['ProductSpecification']['additional_information'] . '" width="300" height="435">';
                                        }
                                        ?>
                                    </div>
                                    <div class="panel-footer text-center">
                                        <?php echo $this->Form->file('additional_information'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 col-xs-8 col-md-8">
                                <table class="product-tab3" cellpadding="0" cellspacing="0">								
                                    <tr>
                                        <td><label>Packing Type - ie Carton/Vac Pack</label></td>
                                        <td><?php echo $this->Form->input('packing_type', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Case Quantity (pcs)</label></td>
                                        <td><?php echo $this->Form->input('case_quantity', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Without Inner / With Inner</label></td>
                                        <td><?php echo $this->Form->input('with_without_inner', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Quantity per Inner</label></td>
                                        <td><?php echo $this->Form->input('quantity_per_inner', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Quantity per Block</label></td>
                                        <td><?php echo $this->Form->input('quantity_per_block', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Roll Dispensing (Open side first/ bottom side first)</label></td>
                                        <td><?php echo $this->Form->input('roll_dispensing', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Inner Label / Pack Label Required</label></td>
                                        <td><?php echo $this->Form->input('inner_pack_label_required', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Dispensing Design - ie Thumb block/Bar block/Loose/Ear Block/etc</label></td>
                                        <td><?php echo $this->Form->input('dispencing_design', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Palletize Loading Required</label></td>
                                        <td><?php echo $this->Form->input('palletize_loading_required', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <label>Applicable Regulations:</label>
                                            <?php echo $this->Form->input('aplicable_regulation', array('class' => 'form-control', 'label' => FALSE, 'type' => 'textarea')); ?>	
                                        </td>									
                                    </tr>								
                                </table>
                                <br/>
                            </div>
                            <div class="col-lg-4">
                                <div class="panel fresh-color panel-info">
                                    <div class="panel-heading text-center"><label>Bag Artwork</label></div>
                                    <div style="height: 475px;" class="panel-body text-center">
                                        <?php
                                        if ($this->request->data['ProductSpecification']['bag_artwork'] == '') {
                                            echo 'No preview available';
                                        } else {
                                            echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['ProductSpecification']['bag_artwork'] . '" width="300" height="435">';
                                        }
                                        ?>
                                    </div>
                                    <div class="panel-footer text-center">
                                        <?php echo $this->Form->file('bag_artwork'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel fresh-color panel-info">
                                    <div class="panel-heading text-center"><label>Carton Artwork</label></div>
                                    <div style="height: 300px;" class="panel-body text-center">
                                        <?php
                                        if ($this->request->data['ProductSpecification']['ctn_artwork'] == '') {
                                            echo 'No preview available';
                                        } else {
                                            echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['ProductSpecification']['ctn_artwork'] . '" width="435" height="235">';
                                        }
                                        ?>
                                    </div>
                                    <div class="panel-footer text-center">
                                        <?php echo $this->Form->file('ctn_artwork'); ?>
                                    </div>
                                    <table class="product-tab4">
                                        <tr>
                                            <td class="ltd"><label>Placement</label></td>
                                            <td><?php echo $this->Form->input('placement_ctn', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel fresh-color panel-info">
                                    <div class="panel-heading text-center"><label>Label Artwork</label></div>
                                    <div style="height: 300px;" class="panel-body text-center">
                                        <?php
                                        if ($this->request->data['ProductSpecification']['label_artwork'] == '') {
                                            echo 'No preview available';
                                        } else {
                                            echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['ProductSpecification']['label_artwork'] . '" width="435" height="235">';
                                        }
                                        ?>
                                    </div>
                                    <div class="panel-footer text-center">
                                        <?php echo $this->Form->file('label_artwork'); ?>
                                    </div>
                                    <table class="product-tab4">
                                        <tr>
                                            <td class="ltd"><label>Placement</label></td>
                                            <td><?php echo $this->Form->input('placement_label', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        </tr>
                                    </table>                                    
                                </div>							
                            </div>
                            <div class="col-lg-12">
                                <table class="product-tab5" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="text-center" colspan="2"><label>Carton/Vac Pack Dimension</label></td>
                                        <td class="text-center" colspan="2"><label>Core Dimension</label></td>
                                        <td class="text-center" rowspan="2"><label>Barcode Details</label></td>
                                        <td class="text-center" rowspan="2"><label>Type</label></td>
                                        <td class="text-center" rowspan="2"><label>Digit</label></td>
                                    </tr>
                                    <tr>
                                        <td><label>Length (mm)</label></td>
                                        <td><?php echo $this->Form->input('ctn_vacpac_dimension_length', array('class' => 'form-control', 'label' => FALSE)); ?></td>									
                                        <td><label>Inner Dia (mm)</label></td>									
                                        <td><?php echo $this->Form->input('core_dimension_inner', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Width (mm)</label></td>
                                        <td><?php echo $this->Form->input('ctn_vacpac_dimension_width', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>Length (mm)</label></td>
                                        <td><?php echo $this->Form->input('core_dimension_length', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>Outer Case</label></td>
                                        <td><?php echo $this->Form->input('barcode_outer_case_type', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('barcode_outer_case_digit', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Height (mm)</label></td>
                                        <td><?php echo $this->Form->input('ctn_vacpac_dimension_height', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>Thickness (mm)</label></td>
                                        <td><?php echo $this->Form->input('core_dimension_thickness', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>Inner Pack</label></td>
                                        <td><?php echo $this->Form->input('barcode_inner_pack_type', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('barcode_inner_pack_digit', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>Color</label></td>
                                        <td><?php echo $this->Form->input('ctn_vacpac_dimension_color', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>Weight (g)</label></td>
                                        <td><?php echo $this->Form->input('core_dimension_weight', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><label>Individual Bag</label></td>
                                        <td><?php echo $this->Form->input('barcode_individual_bag_type', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                        <td><?php echo $this->Form->input('barcode_individual_bag_digit', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                                    </tr>
                                </table>
                                <br/>
                                <br/>
                            </div>
                            <div class="col-lg-12">
                                <table class="product-tab6" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="top-td" valign="top" width="33%"><label>Authorized By :</label></td>
                                        <td valign="top" width="33%"><label>Approved By :</label></td>
                                        <td valign="top"><label>Agreed By Customer :</label></td>									
                                    </tr>
                                    <tr>
                                        <td><label>Date:</label></td>
                                        <td><label>Date:</label></td>									
                                        <td><label>Date:</label></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="pull-right">
                                    <button class="btn btn-success" id="sbmtbtn" type="submit" onclick="return confirm('Are you sure you want to continue')">Save</button>
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
                            $('#productSpecificationDate').datepicker({format: 'dd-mm-yyyy'}).datepicker('setDate', new Date()).datepicker('update');


                        });
</script>
<!--Print Section-->
<div id="product-specification" class="print-hidden">
    <center>
        <table>
            <tr>
                <td width="90%" style="text-align: center;"><h2>Product Specification</h2></td>
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
                    </table>
                </td>           
            </tr>
        </table>
        <br/>
        <table class="tabprint" cellpadding="0" cellspacing="0">
            <tr>
                <td><label>Prepared By</label></td>
                <td><?php echo $this->Form->value('prepared_by'); ?></td>
                <td><label>Film Type</label></td>
                <td><?php echo $this->Form->value('film_type'); ?></td>
                <td><label>Printed</label></td>
                <td><?php echo $this->Form->value('printed'); ?></td>
                <td><label>Safety Holes</label></td>
                <td><?php echo $this->Form->value('safety_hole'); ?></td>
            </tr>
            <tr>
                <td><label>Date</label></td>
                <td><?php echo $this->Form->value('date'); ?></td>
                <td><label>Film Color</label></td>
                <td><?php echo $this->Form->value('film_color'); ?></td>
                <td><label>No. of Colors</label></td>
                <td><?php echo $this->Form->value('no_of_color'); ?></td>
                <td><label>Hanging Holes</label></td>
                <td><?php echo $this->Form->value('hanging_hole'); ?></td>
            </tr>
            <tr>
                <td><label>Issue No.</label></td>
                <td><?php echo $this->Form->value('issue_no'); ?></td>
                <td><label>Loop Color</label></td>
                <td><?php echo $this->Form->value('loop_color'); ?></td>
                <td><label>No of sides printed</label></td>
                <td><?php echo $this->Form->value('no_of_sides_printed'); ?></td>
                <td><label>Embossed</label></td>
                <td><?php echo $this->Form->value('embossed'); ?></td>
            </tr>
            <tr>
                <td><label>Customer Ref</label></td>
                <td><?php echo $this->Form->value('customer_ref'); ?></td>
                <td rowspan="2"><label>Printing Pantone Ref</label></td>									
                <td rowspan="2" colspan="3"><?php echo $this->Form->value('printing_pantone_ref'); ?></td>
                <td><label>Glue Spot</label></td>
                <td><?php echo $this->Form->value('glue_spot'); ?></td>
            </tr>
            <tr>
                <td><label>Data ID</label></td>								
                <td><?php echo $this->Form->value('dataid'); ?></td>
                <td><label>Diagonal Corner Seal</label></td>
                <td><?php echo $this->Form->value('diagonal_corner_seal'); ?></td>
            </tr>
        </table>
        <br/>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td width="75%" valign="top">
                    <table class="tabprint" cellpadding="0" cellspacing="0">
                        <tr>
                            <th>Description</th>
                            <th>Specification</th>
                            <th>Tolerance</th>
                        </tr>
                        <tr>
                            <td><label>Closed Width (mm)</label></td>
                            <td><?php echo $this->Form->value('closed_width_specification'); ?></td>
                            <td><?php echo $this->Form->value('closed_width_tolerance'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Open Width (mm)</label></td>
                            <td><?php echo $this->Form->value('open_width_specification'); ?></td>
                            <td><?php echo $this->Form->value('open_width_tolerance'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Length (mm)</label></td>
                            <td><?php echo $this->Form->value('length_specification'); ?></td>
                            <td><?php echo $this->Form->value('length_tolerance'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Thickness (mu)</label></td>
                            <td><?php echo $this->Form->value('thickness_specification'); ?></td>
                            <td><?php echo $this->Form->value('thickness_tolerance'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Bag Weight (g)</label></td>
                            <td><?php echo $this->Form->value('bag_weight_specification'); ?></td>
                            <td><?php echo $this->Form->value('bag_weight_tolerance'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Case Weight (kg)</label></td>
                            <td><?php echo $this->Form->value('case_weight_specification'); ?></td>
                            <td><?php echo $this->Form->value('case_weight_tolerance'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Opacity (%)</label></td>
                            <td><?php echo $this->Form->value('opacity_specification'); ?></td>
                            <td><?php echo $this->Form->value('opacity_tolerance'); ?></td>
                        </tr>                                    
                        <tr>
                            <td><label>Open Bottom Gusset (mm)</label></td>
                            <td><?php echo $this->Form->value('open_bottom_gusset_specification'); ?></td>
                            <td><?php echo $this->Form->value('open_bottom_gusset_tolerance'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Turn Over Top (mm)</label></td>
                            <td><?php echo $this->Form->value('turn_over_top_specification'); ?></td>
                            <td><?php echo $this->Form->value('turn_over_top_tolerance'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Bag Lip (mm)</label></td>
                            <td><?php echo $this->Form->value('bag_lip_specification'); ?></td>
                            <td><?php echo $this->Form->value('bag_lip_tolerance'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Loop Thickness (mu)</label></td>
                            <td><?php echo $this->Form->value('loop_thickness_specification'); ?></td>
                            <td><?php echo $this->Form->value('loop_thickness_tolerance'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Ultimate Lift (kg)</label></td>
                            <td><?php echo $this->Form->value('ultimate_lift_specification'); ?></td>
                            <td><?php echo $this->Form->value('ultimate_lift_tolerance'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Jog Test (kg)</label></td>
                            <td><?php echo $this->Form->value('jog_test_specification'); ?></td>
                            <td><?php echo $this->Form->value('jog_test_tolerance'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Cut Out (%)</label></td>
                            <td><?php echo $this->Form->value('cut_out_specification'); ?></td>
                            <td><?php echo $this->Form->value('cut_out_tolerance'); ?></td>
                        </tr>
                    </table>
                </td>
                <td width="5%"></td>
                <td style="border: 1px solid silver; padding: 5px;">
                    <h3>Additional Information</h3>
                    <?php
                    if ($this->request->data['ProductSpecification']['additional_information'] == '') {
                        echo 'No preview available';
                    } else {
                        echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['ProductSpecification']['additional_information'] . '" width="300" height="200">';
                    }
                    ?>
                </td>
            </tr>
        </table>
        <br/>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td width="75%" valign="top">
                    <table class="tabprint" cellpadding="0" cellspacing="0">								
                        <tr>
                            <td><label>Packing Type - ie Carton/Vac Pack</label></td>
                            <td width="70"><?php echo $this->Form->value('packing_type'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Case Quantity (pcs)</label></td>
                            <td><?php echo $this->Form->value('case_quantity'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Without Inner / With Inner</label></td>
                            <td><?php echo $this->Form->value('with_without_inner'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Quantity per Inner</label></td>
                            <td><?php echo $this->Form->value('quantity_per_inner'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Quantity per Block</label></td>
                            <td><?php echo $this->Form->value('quantity_per_block'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Roll Dispensing (Open side first/ bottom side first)</label></td>
                            <td><?php echo $this->Form->value('roll_dispensing'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Inner Label / Pack Label Required</label></td>
                            <td><?php echo $this->Form->value('inner_pack_label_required'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Dispensing Design - ie Thumb block/Bar block/Loose/Ear Block/etc</label></td>
                            <td><?php echo $this->Form->value('dispencing_design'); ?></td>
                        </tr>
                        <tr>
                            <td><label>Palletize Loading Required</label></td>
                            <td><?php echo $this->Form->value('palletize_loading_required'); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" height="60">
                                <label>Applicable Regulations:</label>
                                <br/>
                                <?php echo $this->Form->value('aplicable_regulation'); ?>	
                            </td>									
                        </tr>								
                    </table>
                </td>
                <td width="5%"></td>
                <td style="border: 1px solid silver; padding: 5px;">
                    <h3>Bag Artwork</h3>
                    <?php
                    if ($this->request->data['ProductSpecification']['bag_artwork'] == '') {
                        echo 'No preview available';
                    } else {
                        echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['ProductSpecification']['bag_artwork'] . '" width="300" height="200">';
                    }
                    ?>
                </td>
            </tr>
        </table>
        <div style="page-break-after:always"></div>
        <br/>
        <br/>
        <table class="tabprint" cellpadding="0" cellspacing="0">
            <tr>
                <td colspan="2" style="text-align: center; padding: 5px; height: 240px;">
                    <h3>Carton Artwork</h3>
                    <?php
                    if ($this->request->data['ProductSpecification']['ctn_artwork'] == '') {
                        echo 'No preview available';
                    } else {
                        echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['ProductSpecification']['ctn_artwork'] . '" width="300" height="235">';
                    }
                    ?>
                </td>
                <td colspan="2" style="text-align: center; padding: 5px; height: 240px;">
                    <h3>Label Artwork</h3>
                    <?php
                    if ($this->request->data['ProductSpecification']['label_artwork'] == '') {
                        echo 'No preview available';
                    } else {
                        echo '<img src="' . SITE_URL . $imgdirPath . $this->request->data['ProductSpecification']['label_artwork'] . '" width="300" height="235">';
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Placement</td>
                <td><?php echo $this->Form->value('placement_ctn'); ?></td>
                <td>Placement</td>
                <td><?php echo $this->Form->value('placement_label'); ?></td>
            </tr>
        </table>
        <br/>
        <table class="tabprint" cellpadding="0" cellspacing="0">
            <tr>
                <td class="text-center" colspan="2"><label>Carton/Vac Pack Dimension</label></td>
                <td class="text-center" colspan="2"><label>Core Dimension</label></td>
                <td class="text-center" rowspan="2"><label>Barcode Details</label></td>
                <td class="text-center" rowspan="2"><label>Type</label></td>
                <td class="text-center" rowspan="2"><label>Digit</label></td>
            </tr>
            <tr>
                <td><label>Length (mm)</label></td>
                <td><?php echo $this->Form->value('ctn_vacpac_dimension_length'); ?></td>									
                <td><label>Inner Dia (mm)</label></td>									
                <td><?php echo $this->Form->value('core_dimension_inner'); ?></td>
            </tr>
            <tr>
                <td><label>Width (mm)</label></td>
                <td><?php echo $this->Form->value('ctn_vacpac_dimension_width'); ?></td>
                <td><label>Length (mm)</label></td>
                <td><?php echo $this->Form->value('core_dimension_length'); ?></td>
                <td><label>Outer Case</label></td>
                <td><?php echo $this->Form->value('barcode_outer_case_type'); ?></td>
                <td><?php echo $this->Form->value('barcode_outer_case_digit'); ?></td>
            </tr>
            <tr>
                <td><label>Height (mm)</label></td>
                <td><?php echo $this->Form->value('ctn_vacpac_dimension_height'); ?></td>
                <td><label>Thickness (mm)</label></td>
                <td><?php echo $this->Form->value('core_dimension_thickness'); ?></td>
                <td><label>Inner Pack</label></td>
                <td><?php echo $this->Form->value('barcode_inner_pack_type'); ?></td>
                <td><?php echo $this->Form->value('barcode_inner_pack_digit'); ?></td>
            </tr>
            <tr>
                <td><label>Color</label></td>
                <td><?php echo $this->Form->value('ctn_vacpac_dimension_color'); ?></td>
                <td><label>Weight (g)</label></td>
                <td><?php echo $this->Form->value('core_dimension_weight'); ?></td>
                <td><label>Individual Bag</label></td>
                <td><?php echo $this->Form->value('barcode_individual_bag_type'); ?></td>
                <td><?php echo $this->Form->value('barcode_individual_bag_digit'); ?></td>
            </tr>
        </table>
        <br/>
<!--        <div style="page-break-after:always"></div>-->
        <table class="tabprint" cellpadding="0" cellspacing="0">
            <tr>
                <td valign="top" width="33%" height="150"><label>Authorized By :</label></td>
                <td valign="top" width="33%"><label>Approved By :</label></td>
                <td valign="top"><label>Agreed By Customer :</label></td>									
            </tr>
            <tr>
                <td><label>Date:</label></td>
                <td><label>Date:</label></td>									
                <td><label>Date:</label></td>
            </tr>
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
         
    $('#editForm').on('click', function(){
        $('input').removeAttr('disabled');
        $('textarea').removeAttr('disabled');
        $('select').removeAttr('disabled');
        $('input#file').removeAttr('disabled');
        $('#ProductSpecificationPreparedBy').attr("disabled", true);
        $('button').removeAttr('disabled');
    });     

</script>