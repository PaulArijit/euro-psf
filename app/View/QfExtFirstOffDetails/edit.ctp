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
                            <h1 class="text-center">Ext First Off Dfs</h1>
                            <div class="col-lg-12">
                                <table class="ext-first-off-tab1" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="20%"><label>M/C No.:P/Q/E/K/NQ</label></td>
                                        <td>______________________________</td>
                                    </tr>
                                    <tr>
                                        <td><label>Product Name:</label></td>
                                        <td>______________________________</td>
                                    </tr>
                                    <tr>
                                        <td><label>Sap Code:</label></td>
                                        <td>______________________________</td>
                                    </tr>
                                    <tr>
                                        <td><label>Previous Product:</label></td>
                                        <td><input style="width: 30%" type="text" class="form-control"/></td>
                                    </tr>
                                    <tr>
                                        <td><label>Date : Time</label></td>
                                        <td>___________________ : _________________</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">                                            
                                            <div style="display: inline-block; border: 1px solid silver; width: 20px; height: 20px;"></div>                        
                                            <label style="margin-right: 20px; "> - Start Up</label>            
                                            <div style="display: inline-block; border: 1px solid silver; width: 20px; height: 20px;"></div>
                                            <label style="margin-right: 20px; margin-left: 15px;"> - Change Order</label>
                                            <div style="display: inline-block; border: 1px solid silver; width: 20px; height: 20px;"></div>
                                            <label style="margin-right: 20px; margin-left: 15px;"> - Change Cylinder (Previous Eyemark _________________)</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">                                            
                                            <div style="display: inline-block; border: 1px solid silver; width: 20px; height: 20px;"></div>                        
                                            <label style="margin-right: 20px; "> - Start Up</label>            
                                            <div style="display: inline-block; border: 1px solid silver; width: 20px; height: 20px;"></div>
                                            <label style="margin-right: 20px; margin-left: 15px; background-color: yellow;"> - All previous product, packaging material, displays and specs have been removed </label>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-12">
                                <table class="ext-first-off-tab2" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="text-center color-td" colspan="4"><label>DIMENSION</label></td>
                                    </tr>
                                    <tr>
                                        <td width="25%" class="text-center"><label>DESCRIPTION</label></td>
                                        <td width="30%" class="text-center"><label>SPECIFICATION</label></td>
                                        <td width="20%" class="text-center"><label>START UP SAMPLE RESULT</label></td>
                                        <td width="25%" class="text-center"><label>MASS PRODUCTION SAMPLE RESULT</label></td>
                                    </tr>
                                    <tr>
                                        <td><label>CYLINDER CIRC. (mm) </label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>REPEAT PRINT  (mm) </label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>GUSSET  (mm) </label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>MIDDLE (mm)</label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>CLOSED WIDTH (mm)</label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>OPEN WIDTH (mm)</label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center color-td" colspan="4"><label>FILM PROPERTIES</label></td>
                                    </tr>
                                    <tr>
                                        <td><label>FILM TYPE</label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>FILM COLOR</label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>HAND BURST</label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>FILM PULL TEST</label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>TEARING TEST (by hand)</label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>EMBOSSED</label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center color-td" colspan="4"><label>PROCESSING CONTROLS</label></td>
                                    </tr>
                                    <tr>
                                        <td><label>WT/METER (g)</label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>SCREW (rpm)</label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>TAKE UP SPEED (meter / min)</label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center color-td" colspan="4"><label>FILM APPEARANCE</label></td>
                                    </tr>
                                    <tr>
                                        <td><label>1- GELS</label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>2- MELT FRACTURE(</label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>3- DIE LINE/MATERIAL LINE</label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-12">
                                <div><label>Artwork Details</label></div>
                                <div class="panel fresh-color panel-default">                                    
                                    <div style="height: 415px;" class="panel-body text-center">
                                        upload
                                    </div>
                                    <div class="panel-footer text-center">
                                        <button class="btn btn-info" type="button">Upload</button>
                                    </div>
                                </div>
                                <div style="display: inline-block; border: 1px solid silver; width: 20px; height: 20px;"></div>
                                <label style="margin-right: 20px; margin-left: 15px; background-color: yellow;"> --	All previous product artwork, inks and solvents (where applicable) have been removed.</label>
                            </div>
                            <div class="col-lg-12">
                                <table class="ext-first-off-tab2" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="text-center color-td" colspan="4"><label>PRINTING DETAILS</label></td>
                                    </tr>
                                    <tr>
                                        <td width="25%" class="text-center"><label>PANTONE</label></td>
                                        <td width="30%" class="text-center"><label>VISCOSITY</label></td>
                                        <td width="20%" class="text-center"><label>START UP SAMPLE RESULT</label></td>
                                        <td width="25%" class="text-center"><label>MASS PRODUCTION SAMPLE RESULT</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="color-td text-center"><label>ARTWORK DETAILS</label></td>
                                    </tr>
                                    <tr>
                                        <td><label>CHECK AGAINST ARTWORK</label></td>
                                        <td class="text-center"><label>/X</label></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>BARCODE NO. (Scanable) </label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-12">
                                <table class="ext-first-off-tab2" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="text-center color-td" colspan="8"><label>PRINT ADHESION TESTING</label></td>
                                    </tr>
                                    <tr>
                                        <td width="25%" colspan="2" class="text-center" colspan="2"><label>DESCRIPTION</label></td>
                                        <td width="30%" colspan="2" class="text-center"><label>SPECIFICATION</label></td>
                                        <td width="20%" colspan="2" class="text-center"><label>START UP SAMPLE RESULT</label></td>
                                        <td width="25%" colspan="2" class="text-center"><label>MASS PRODUCTION SAMPLE RESULT</label></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>TREATMENT</label></td>
                                        <td colspan="2" class="text-center"><label>/X</label></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>TAPE TEST</label></td>
                                        <td colspan="2" class="text-center"><label>/X</label></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center color-td" colspan="8"><label>LAB TEST RESULTS</label></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>RUB TEST</label></td>
                                        <td colspan="2"><input type="text" class="form-control"/></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>THICKNESS <small>(µm)</small></label></td>
                                        <td colspan="2"><input type="text" class="form-control"/></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>OPACITY <small>(%)</small></label></td>
                                        <td colspan="2"><input type="text" class="form-control"/></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"><label>TEAR STRENGTH <small>(mN)</small></label></td>
                                        <td><label>MD</label></td>
                                        <td colspan="2"><input type="text" class="form-control"/></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td><label>CD</label></td>
                                        <td colspan="2"><input type="text" class="form-control"/></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"><label>TENSILE STRENGTH <small>(N/15mm)</small></label></td>
                                        <td><label>MD</label></td>
                                        <td colspan="2"><input type="text" class="form-control"/></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td><label>CD</label></td>
                                        <td colspan="2"><input type="text" class="form-control"/></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"><label>ELONGATION<small>(%)</small></label></td>
                                        <td><label>MD</label></td>
                                        <td colspan="2"><input type="text" class="form-control"/></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td><label>CD</label></td>
                                        <td colspan="2"><input type="text" class="form-control"/></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>TENSILE STRENGTH CD <small>(mm2)</small></label></td>
                                        <td colspan="2"><input type="text" class="form-control"/></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>Elongation <small>(%)</small></label></td>
                                        <td colspan="2"><input type="text" class="form-control"/></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><label>IMPACT STRENGTH <small>(g)</small></label></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                        <td><input type="text" class="form-control"/></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-10">
                                <table class="ext-first-off-tab2" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="text-center color-td" colspan="4"><label>PRINT ADHESION TESTING</label></td>
                                    </tr>
                                    <tr>
                                        <td width="25%" class="text-center"><label>Material Type</label></td>
                                        <td width="25%" class="text-center"><label>KG</label></td>
                                        <td width="25%" class="text-center"><label>Qty (bag)</label></td>
                                        <td width="25%" class="text-center"><label>Percentage (%)</label></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 10px;">&nbsp;</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 10px;">&nbsp;</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 10px;">&nbsp;</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 10px;">&nbsp;</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 10px;">&nbsp;</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 10px;">&nbsp;</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 10px;">&nbsp;</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 10px;">&nbsp;</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 10px;">&nbsp;</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 10px;">&nbsp;</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr style="background: #EEE;">
                                        <td style="height: 10px;"><label><b>Quantity</b></label></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-2">
                                <div class="panel panel-info">
                                    <div class="panel-heading text-center">Verified By</div>
                                    <div class="panel-body text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div style="display: inline-block; border: 1px solid silver; width: 30px; height: 30px;"></div>
                                <label style="margin-right: 20px; margin-left: 15px; background-color: yellow;"> All previous product, packaging material, displays and specs inks and solvents (where applicable) have been removed prior to running of the next production.</label>
                            </div>
                            <div class="col-lg-6">
                                <table cellpadding="0" cellspacing="0" class="bm-first-off-tab3">
                                    <tr>
                                        <td class="text-center color-td" colspan="3"><label>PRODUCTION APPROVAL</label></td>
                                    </tr>
                                    <tr>
                                        <td width="33%" class="text-center color-td"><label>Leader(Initiation)</label></td>
                                        <td width="33%" class="text-center color-td"><label>Pre-Authorization</label></td>
                                        <td class="text-center color-td"><label>Final Authorization</label></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 50px;"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                    </tr>
                                </table>
                                <br/>
                                <div><label>Sample Bag Attachment</label></div>
                                <div class="panel fresh-color panel-default">                                    
                                    <div style="height: 215px;" class="panel-body text-center">
                                        upload
                                    </div>
                                    <div class="panel-footer text-center">
                                        <button class="btn btn-info" type="button">Upload</button>
                                    </div>
                                </div>                                
                                <label>ORIGINAL: QA FILE – CONTROLLED COPY: DISPLAY </label><br/>
                                <label>Last Revision Date:</label>
                            </div>
                            <div class="col-lg-6">
                                <table cellpadding="0" cellspacing="0" class="bm-first-off-tab3">
                                    <tr>
                                        <td class="text-center color-td" colspan="3"><label>QA DEPARTMENT APPROVAL</label></td>
                                    </tr>
                                    <tr>
                                        <td width="33%" class="text-center color-td"><label>Leader(Initiation)</label></td>
                                        <td width="33%" class="text-center color-td"><label>Pre-Authorization</label></td>
                                        <td class="text-center color-td"><label>Final Authorization</label></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 50px;"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                        <td class="text-left" style="height: 30px;"><label>Date:</label></td>
                                    </tr>
                                </table>
                                <br/>
                                <div class="form-group pull-right">
                                    <label class="col-sm-4 control-label">Version:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="pull-right">
                                    <button class="btn btn-success" type="button">Save</button>
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



<!--<div class="qfExtFirstOffDetails form">
<?php echo $this->Form->create('QfExtFirstOffDetail'); ?>
        <fieldset>
                <legend><?php echo __('Edit Qf Ext First Off Detail'); ?></legend>
<?php
echo $this->Form->input('id');
echo $this->Form->input('item_id');
echo $this->Form->input('previous_product');
echo $this->Form->input('cylinder_circ_specification');
echo $this->Form->input('repeat_print_specification');
echo $this->Form->input('gusset_specification');
echo $this->Form->input('middle_specification');
echo $this->Form->input('closed_width_specification');
echo $this->Form->input('open_width_specification');
echo $this->Form->input('film_type_specification');
echo $this->Form->input('film_color_specification');
echo $this->Form->input('embossed_specification');
echo $this->Form->input('wt_meter_specification');
echo $this->Form->input('screw_specification');
echo $this->Form->input('take_up_speed_specification');
echo $this->Form->input('gels_specification');
echo $this->Form->input('metal_fracture_specification');
echo $this->Form->input('die_line_specification');
echo $this->Form->input('film_appearance_one');
echo $this->Form->input('film_appearance_two');
echo $this->Form->input('film_appearance_three');
echo $this->Form->input('film_appearance_four');
echo $this->Form->input('artwork_detail');
echo $this->Form->input('pantone_one');
echo $this->Form->input('pantone_two');
echo $this->Form->input('pantone_three');
echo $this->Form->input('pantone_four');
echo $this->Form->input('pantone_five');
echo $this->Form->input('pantone_six');
echo $this->Form->input('viscosity_one');
echo $this->Form->input('viscosity_two');
echo $this->Form->input('viscosity_three');
echo $this->Form->input('viscosity_four');
echo $this->Form->input('viscosity_five');
echo $this->Form->input('viscosity_six');
echo $this->Form->input('barcode_no');
echo $this->Form->input('rub_test');
echo $this->Form->input('thickness');
echo $this->Form->input('opacity');
echo $this->Form->input('tear_strength_md');
echo $this->Form->input('tear_strength_cd');
echo $this->Form->input('tensile_strength_md');
echo $this->Form->input('tensile_strength_cd');
echo $this->Form->input('elongation_md');
echo $this->Form->input('elongation_cd');
echo $this->Form->input('tensile_strength_cd_mml');
echo $this->Form->input('elongation');
echo $this->Form->input('impact_strength_one');
echo $this->Form->input('impact_strength_two');
echo $this->Form->input('impact_strength_three');
echo $this->Form->input('impact_strength_four');
echo $this->Form->input('impact_strength_five');
echo $this->Form->input('impact_strength_six');
echo $this->Form->input('version');
?>
        </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>

                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('QfExtFirstOffDetail.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('QfExtFirstOffDetail.id'))); ?></li>
                <li><?php echo $this->Html->link(__('List Qf Ext First Off Details'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
        </ul>
</div>-->
