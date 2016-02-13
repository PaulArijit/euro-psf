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
                            <?php echo $this->Form->create('ProductSpecification'); ?>
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
                                        <td><?php echo $this->Form->input('date', array('class' => 'date form-control', 'label' => FALSE, 'id'=>'productSpecificationDate', 'type' => 'text')); ?></td>
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
                            </div>
                            <div class="col-lg-4">
                                <div class="panel fresh-color panel-info">
                                    <div class="panel-heading text-center"><label>Aditional Information</label></div>
                                    <div style="height: 535px;" class="panel-body text-center">
                                        upload
                                    </div>
                                    <div class="panel-footer text-center">
                                        <button class="btn btn-info" type="button">Upload</button>
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
                                        upload
                                    </div>
                                    <div class="panel-footer text-center">
                                        <button class="btn btn-info" type="button">Upload</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel fresh-color panel-info">
                                    <div class="panel-heading text-center"><label>Carton Artwork</label></div>
                                    <div style="height: 300px;" class="panel-body text-center">
                                        upload
                                    </div>
                                    <div class="panel-footer text-center">
                                        <button class="btn btn-info" type="button">Upload</button>
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
                                        upload
                                    </div>
                                    <div class="panel-footer text-center">
                                        <button class="btn btn-info" type="button">Upload</button>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#productSpecificationDate').datepicker({format: 'dd-mm-yyyy'}).datepicker('setDate', new Date()).datepicker('update');
    });
</script>

<!--<div class="productSpecifications form">

        <fieldset>
                <legend><?php echo __('Edit Product Specification'); ?></legend>
<?php
echo $this->Form->input('id');
echo $this->Form->input('item_id');
echo $this->Form->input('prepared_by');
echo $this->Form->input('date');
echo $this->Form->input('issue_no');
echo $this->Form->input('customer_ref');
echo $this->Form->input('dataid');
echo $this->Form->input('film_type');
echo $this->Form->input('film_color');
echo $this->Form->input('loop_color');
echo $this->Form->input('printing_pantone_ref');
echo $this->Form->input('printed');
echo $this->Form->input('no_of_color');
echo $this->Form->input('no_of_sides_printed');
echo $this->Form->input('safty_holes');
echo $this->Form->input('hanging_hole');
echo $this->Form->input('embossed');
echo $this->Form->input('glue_spot');
echo $this->Form->input('diagonal_corner_seal');
echo $this->Form->input('closed_width_specification');
echo $this->Form->input('closed_width_tolerance');
echo $this->Form->input('open_width_specification');
echo $this->Form->input('open_width_tolerance');
echo $this->Form->input('length_specification');
echo $this->Form->input('length_tolerance');
echo $this->Form->input('thickness_specification');
echo $this->Form->input('thickness_tolerance');
echo $this->Form->input('bag_weight_specification');
echo $this->Form->input('bag_weight_tolerance');
echo $this->Form->input('case_weight_specification');
echo $this->Form->input('case_weight_tolerance');
echo $this->Form->input('opacity_specification');
echo $this->Form->input('opacity_tolerance');
echo $this->Form->input('open_bottom_gusset_specification');
echo $this->Form->input('open_bottom_gusset_tolerance');
echo $this->Form->input('turn_over_top_specification');
echo $this->Form->input('turn_over_top_tolerance');
echo $this->Form->input('bag_lip_specification');
echo $this->Form->input('bag_lip_tolerance');
echo $this->Form->input('loop_thickness_specification');
echo $this->Form->input('loop_thickness_tolerance');
echo $this->Form->input('ultimate_lift_specification');
echo $this->Form->input('ultimate_lift_tolerance');
echo $this->Form->input('jog_test_specification');
echo $this->Form->input('jog_test_tolerance');
echo $this->Form->input('cut_out_specification');
echo $this->Form->input('cut_out_tolerance');
echo $this->Form->input('packing_type');
echo $this->Form->input('case_quantity');
echo $this->Form->input('with_without_inner');
echo $this->Form->input('quantity_per_inner');
echo $this->Form->input('quantity_per_block');
echo $this->Form->input('roll_dispensing');
echo $this->Form->input('inner_pack_label_required');
echo $this->Form->input('dispencing_design');
echo $this->Form->input('palletize_loading_required');
echo $this->Form->input('aplicable_regulation');
echo $this->Form->input('additional_information');
echo $this->Form->input('bag_artwork');
echo $this->Form->input('ctn_artwork');
echo $this->Form->input('label_artwork');
echo $this->Form->input('placement_ctn');
echo $this->Form->input('placement_label');
echo $this->Form->input('ctn_vacpac_dimension_lengthn');
echo $this->Form->input('ctn_vacpac_dimension_width');
echo $this->Form->input('ctn_vacpac_dimension_height');
echo $this->Form->input('ctn_vacpac_dimension_color');
echo $this->Form->input('core_dimension_inner');
echo $this->Form->input('core_dimension_length');
echo $this->Form->input('core_dimension_thickness');
echo $this->Form->input('core_dimension_weight');
echo $this->Form->input('barcode_outer_case_type');
echo $this->Form->input('barcode_outer_case_digit');
echo $this->Form->input('barcode_inner_pack_type');
echo $this->Form->input('barcode_inner_pack_digit');
echo $this->Form->input('barcode_individual_bag_type');
echo $this->Form->input('barcode_individual_bag_digit');
echo $this->Form->input('approved_by');
?>
        </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>-->
<!--<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>

                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductSpecification.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ProductSpecification.id'))); ?></li>
                <li><?php echo $this->Html->link(__('List Product Specifications'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
        </ul>
</div>-->
