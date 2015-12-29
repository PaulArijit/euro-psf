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
                            <?php echo $this->Form->create('Item', array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Product Description</label>
                                    <div class="col-sm-6">
                                        <?php echo $this->Form->input('description', array('class' => 'form-control', 'placeholder' => 'Please enter description', 'label' => FALSE)); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Product Category</label>
                                    <div class="col-sm-6">
                                        <?php echo $this->Form->input('category', array('class' => 'form-control', 'placeholder' => 'Please enter category', 'label' => FALSE)); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">Sapcode</label>
                                    <div class="col-sm-6">
                                        <?php echo $this->Form->input('sapcode', array('class' => 'form-control', 'placeholder' => 'Please enter sapcode', 'label' => FALSE)); ?>
                                    </div>
                                </div>
                        </div>
                        <div class="panel-footer text-right">
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </div>	
            <!--tab panel start-->									
            <div class="card-body no-padding">
                <!---------------------------------------------------------->
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul role="tablist" class="nav nav-tabs">
                        <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="product" href="#product">Product</a></li>
                        <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="carton" href="#carton">Carton</a></li>
                        <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="core" href="#core">Core</a></li>
                        <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="cylinder" href="#cylinder">Cylinder</a></li>
                        <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="flexoplate" href="#flexoplate">Flexo Plate</a></li>
                        <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="fusset" href="#fusset">Fusset</a></li>
                        <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="grommet" href="#grommet">Grommet</a></li>
                        <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="knife" href="#knife">Knife</a></li>
                        <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="labelsp" href="#labelsp">Label</a></li>
                        <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="wicket" href="#wicket">Wicket</a></li>
                        <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="quality" href="#quality">Quality Form</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="product" class="tab-pane active" role="tabpanel">
                            <!-- product specification start -->
                            <div class="row">
                                <h1 class="text-center">Product</h1>
                                <div class="col-lg-10">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <label>Basic panel example</label><br/>
                                            <label>Basic panel example</label><br/>
                                            <label>Basic panel example</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="panel fresh-color panel-success">
                                        <div class="panel-heading text-center">NPI</div>
                                        <div class="panel-body text-center">
                                            Admin
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <table class="product-tab1" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td><label>Prepared By</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><label>Film Type</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><label>Printed</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><label>Safety Holes</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Date</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><label>Film Color</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><label>No. of Colors</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><label>Hanging Holes</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Issue No.</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><label>Loop Color</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><label>No of sides printed</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><label>Embossed</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Customer Ref</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td rowspan="2"><label>Printing Pantone Ref</label></td>									
                                            <td rowspan="2" colspan="3"><input type="text" class="form-control"/></td>
                                            <td><label>Glue Spot</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Data ID</label></td>								
                                            <td><input type="text" class="form-control"/></td>
                                            <td><label>Diagonal Corner Seal</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                    </table>
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
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Open Width (mm)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Length (mm)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Thickness (mu)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Bag Weight (g)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Case Weight (kg)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Opacity (%)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Closed Width (mm)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Open Bottom Gusset (mm)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Turn Over Top (mm)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Bag Lip (mm)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Loop Thickness (mu)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Ultimate Lift (kg)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Jog Test (kg)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Cut Out (%)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                    </table>	
                                </div>
                                <div class="col-lg-4">
                                    <div class="panel fresh-color panel-info">
                                        <div class="panel-heading text-center"><label>Aditional Information</label></div>
                                        <div style="height: 580px;" class="panel-body text-center">
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
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Case Quantity (pcs)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Without Inner / With Inner</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Quantity per Inner</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Quantity per Block</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Roll Dispensing (Open side first/ bottom side first)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Inner Label / Pack Label Required</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Dispensing Design - ie Thumb block/Bar block/Loose/Ear Block/etc</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Palletize Loading Required</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <label>Applicable Regulations:</label>
                                                <textarea rows="3" class="form-control"></textarea>	
                                            </td>									
                                        </tr>								
                                    </table>	
                                </div>
                                <div class="col-lg-4">
                                    <div class="panel fresh-color panel-info">
                                        <div class="panel-heading text-center"><label>Bag Artwork</label></div>
                                        <div style="height: 415px;" class="panel-body text-center">
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
                                                <td><input type="text" class="form-control"/></td>
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
                                                <td><input type="text" class="form-control"/></td>
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
                                            <td><input type="text" class="form-control"/></td>									
                                            <td><label>Inner Dia (mm)</label></td>									
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Width (mm)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><label>Length (mm)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><label>Outer Case</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Height (mm)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><label>Thickness (mm)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><label>Inner Pack</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Color</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><label>Weight (g)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><label>Individual Bag</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                    </table>
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
                                        <button class="btn btn-success" type="button">Save</button>
                                        <button class="btn btn-warning" type="button">Replace</button>
                                    </div>
                                </div>	
                            </div>
                            <!-- product specification end -->
                        </div>
                        <div id="carton" class="tab-pane" role="tabpanel">
                            <!-- carton Specification start -->
                            <div class="row">
                                <h1 class="text-center">Carton</h1>
                                <div class="col-lg-10">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <label>Basic panel example</label><br/>
                                            <label>Basic panel example</label><br/>
                                            <label>Basic panel example</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="panel fresh-color panel-success">
                                        <div class="panel-heading text-center">NPI</div>
                                        <div class="panel-body text-center">
                                            Admin
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <table class="carton-tab1" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td><label>Size (mm) (LxWxH)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Board Quality</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Marking Color</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Barcode Number</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <table class="carton-tab2" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td colspan="2"><label>Product Gross Weight (kg)</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><label>Film Embossed?</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"><label>Carton Marking Position</label></td>
                                            <td><label>Width:</label> </td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Height:</label></td> 
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><label>Carton Marking Size</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><label>Additional Requirement</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><label>Amendment Note</label></td>
                                            <td><textarea rows="3" class="form-control"></textarea></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-12 ">
                                    <div class="pull-right">
                                        <button class="btn btn-success" type="button">Save</button>
                                        <button class="btn btn-warning" type="button">Reset</button>
                                    </div>
                                </div>						
                            </div>
                            <!-- carton Specification end -->
                        </div>
                        <div id="core" class="tab-pane" role="tabpanel">
                            <!-- core specification start -->
                            <div class="row">
                                <h1 class="text-center">Core</h1>
                                <div class="col-lg-10">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <label>Basic panel example</label><br/>
                                            <label>Basic panel example</label><br/>
                                            <label>Basic panel example</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="panel fresh-color panel-success">
                                        <div class="panel-heading text-center">NPI</div>
                                        <div class="panel-body text-center">
                                            Admin
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
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>								
                                    </table>
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <table class="core-tab2" cellpadding="0" cellspacing="0">								
                                        <tr>
                                            <td><label>Core required per carton</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Additional Requirement</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Amendment Note</label></td>
                                            <td><textarea rows="3" class="form-control"></textarea></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-12 ">
                                    <div class="pull-right">
                                        <button class="btn btn-success" type="button">Save</button>
                                        <button class="btn btn-warning" type="button">Reset</button>
                                    </div>
                                </div>						
                            </div>
                            <!-- core specification end -->
                        </div>
                        <div id="cylinder" class="tab-pane" role="tabpanel">												
                            <!--cylinder specification start-->
                            <div class="row">
                                <h1 class="text-center">Gravure Cylinder</h1>
                                <div class="col-lg-10">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <label>Basic panel example</label><br/>
                                            <label>Basic panel example</label><br/>
                                            <label>Basic panel example</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="panel fresh-color panel-success">
                                        <div class="panel-heading text-center">NPI</div>
                                        <div class="panel-body text-center">
                                            Admin
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <table class="cylinder-tab1" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td><label>Repeat Print (mm)</label></td>
                                            <td><label>Bag Width (mm)</label></td>
                                            <td><label>Bag Length (mm)</label></td>
                                            <td><label>Cylinder Circumference (mm)</label></td>
                                            <td><label>Cylinder Width (mm)</label></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <table class="cylinder-tab2" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="15%"><label>Color</label></td>
                                            <td width="60px"><input type="text" class="form-control"/></td>
                                            <td class="text-center"><label>1</label></td>
                                            <td class="text-center"><label>2</label></td>
                                            <td class="text-center"><label>3</label></td>
                                            <td class="text-center"><label>4</label></td>
                                            <td class="text-center"><label>5</label></td>
                                            <td class="text-center"><label>6</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Side printed</label></td>
                                            <td width="60px"><input type="text" class="form-control"/></td>
                                            <td rowspan="3"><input type="text" class="form-control"/></td>
                                            <td rowspan="3"><input type="text" class="form-control"/></td>
                                            <td rowspan="3"><input type="text" class="form-control"/></td>
                                            <td rowspan="3"><input type="text" class="form-control"/></td>
                                            <td rowspan="3"><input type="text" class="form-control"/></td>
                                            <td rowspan="3"><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Front (pcs)</label></td>
                                            <td width="60px"><input type="text" class="form-control"/></td>																		
                                        </tr>
                                        <tr>
                                            <td><label>Back (pcs)</label></td>
                                            <td width="60px"><input type="text" class="form-control"/></td>									
                                        </tr>
                                        <tr>
                                            <td><label>Qty per set (pcs)</label></td>									
                                            <td colspan="3"><input type="text" class="form-control"/></td>
                                            <td class="text-center" rowspan="2"><label>Film</label></td>
                                            <td><label>Substrate</label></td>
                                            <td colspan="2"><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Picture per Cylinder</label></td>									
                                            <td colspan="3"><input type="text" class="form-control"/></td>
                                            <td><label>Color</label></td>
                                            <td colspan="2"><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Front & Back</label></td>									
                                            <td colspan="3"><input type="text" class="form-control"/></td>
                                            <td class="text-center" rowspan="4"><label>Eyemark</label></td>
                                            <td><label>Size (mm)</label></td>
                                            <td colspan="2"><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Barcode Number</label></td>									
                                            <td colspan="3"><input type="text" class="form-control"/></td>									
                                            <td><label>color</label></td>
                                            <td colspan="2"><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Barcode Format</label></td>									
                                            <td colspan="3"><input type="text" class="form-control"/></td>									
                                            <td><label>Location</label></td>
                                            <td colspan="2"><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Additional Info</label></td>									
                                            <td colspan="3"><input type="text" class="form-control"/></td>									
                                            <td><label>Code</label></td>
                                            <td colspan="2"><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"><label>Amendment Note</label></td>									
                                            <td rowspan="2" colspan="3"><textarea rows="3" class="form-control"></textarea></td>
                                            <td class="text-center" rowspan="2"><label>Cross Mark</label></td>
                                            <td><label>Size (mm)</label></td>
                                            <td colspan="3"><input type="text" class="form-control"/></td>									
                                        </tr>
                                        <tr>
                                            <td><label>Position</label></td>
                                            <td colspan="2"><input type="text" class="form-control"/></td>									
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-12 ">
                                    <div class="pull-right">
                                        <button class="btn btn-success" type="button">Save</button>
                                        <button class="btn btn-warning" type="button">Replace</button>
                                    </div>
                                </div>	
                            </div>
                            <!--cylinder specification end-->
                        </div>
                        <div id="flexoplate" class="tab-pane" role="tabpanel">
                            <!----------------------------------------->
                            <div class="row">
                                <h1 class="text-center">Flexo Plate</h1>
                                <div class="col-lg-10">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <label>Basic panel example</label><br/>
                                            <label>Basic panel example</label><br/>
                                            <label>Basic panel example</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="panel fresh-color panel-success">
                                        <div class="panel-heading text-center">NPI</div>
                                        <div class="panel-body text-center">
                                            Admin
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <table class="flexo-tab1" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td><label>Film Thickness (mu)</label></td>
                                            <td><label>Bag Width (mm)</label></td>
                                            <td><label>Bag Length (mm)</label></td>
                                            <td><label>Repeat print (mm)</label></td>
                                            <td><label>Open bottom Gusset (mm)</label></td>
                                            <td><label>Lip (mm)</label></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <table class="flexo-tab2" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="15%"><label>Color</label></td>
                                            <td width="60px"><input type="text" class="form-control"/></td>
                                            <td class="text-center"><label>1</label></td>
                                            <td class="text-center"><label>2</label></td>
                                            <td class="text-center"><label>3</label></td>
                                            <td class="text-center"><label>4</label></td>
                                            <td class="text-center"><label>5</label></td>
                                            <td class="text-center"><label>6</label></td>
                                        </tr>
                                        <tr>
                                            <td><label>Side printed</label></td>
                                            <td width="60px"><input type="text" class="form-control"/></td>
                                            <td rowspan="3"><input type="text" class="form-control"/></td>
                                            <td rowspan="3"><input type="text" class="form-control"/></td>
                                            <td rowspan="3"><input type="text" class="form-control"/></td>
                                            <td rowspan="3"><input type="text" class="form-control"/></td>
                                            <td rowspan="3"><input type="text" class="form-control"/></td>
                                            <td rowspan="3"><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Front</label></td>
                                            <td width="60px"><input type="text" class="form-control"/></td>																		
                                        </tr>
                                        <tr>
                                            <td><label>Back</label></td>
                                            <td width="60px"><input type="text" class="form-control"/></td>									
                                        </tr>
                                        <tr>
                                            <td><label>Qty per set (pcs)</label></td>									
                                            <td colspan="3"><input type="text" class="form-control"/></td>
                                            <td class="text-center" rowspan="2"><label>Film</label></td>
                                            <td><label>Substrate</label></td>
                                            <td colspan="2"><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Picture per Plate</label></td>									
                                            <td colspan="3"><input type="text" class="form-control"/></td>
                                            <td><label>Color</label></td>
                                            <td colspan="2"><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Front & Back</label></td>									
                                            <td colspan="3"><input type="text" class="form-control"/></td>
                                            <td class="text-center" rowspan="4"><label>Eyemark</label></td>
                                            <td><label>Size (mm)</label></td>
                                            <td colspan="2"><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Barcode Number</label></td>									
                                            <td colspan="3"><input type="text" class="form-control"/></td>									
                                            <td><label>color</label></td>
                                            <td colspan="2"><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Barcode Format</label></td>									
                                            <td colspan="3"><input type="text" class="form-control"/></td>									
                                            <td><label>Location</label></td>
                                            <td colspan="2"><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Additional Info</label></td>									
                                            <td colspan="3"><input type="text" class="form-control"/></td>									
                                            <td>Code</td>
                                            <td colspan="2"><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Amendment Note</label></td>									
                                            <td colspan="3"><textarea rows="3" class="form-control"></textarea></td>
                                            <td class="text-center"><label>Dot Mark</label></td>
                                            <td colspan="3"><input type="text" class="form-control"/></td>									
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-12 ">
                                    <div class="pull-right">
                                        <button class="btn btn-success" type="button">Save</button>
                                        <button class="btn btn-warning" type="button">Replace</button>
                                    </div>
                                </div>						
                            </div>
                            <!----------------------------------------->
                        </div>
                        <div id="fusset" class="tab-pane" role="tabpanel">
                            <!----------------------------------------------->
                            <div class="row">
                                <h1 class="text-center">FUSSET</h1>
                                <div class="col-lg-10">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <label>Basic panel example</label><br/>
                                            <label>Basic panel example</label><br/>
                                            <label>Basic panel example</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="panel fresh-color panel-success">
                                        <div class="panel-heading text-center">NPI</div>
                                        <div class="panel-body text-center">
                                            Admin
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <table class="fusset-tab1" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td colspan="2"><label>Material</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                            <td rowspan="5">
                                                <label><label>Amendment Note:</label></label>
                                                <textarea rows="8" class="form-control"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><label>Size</label></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"><label>Material</label></td>
                                            <td><label>Body</label></td>
                                            <td><input type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td><label>Cap</label></td>
                                            <td><input type="text" class="form-control" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><label>Compression Strength(kg)</label></td>
                                            <td><input type="text" class="form-control"/></td>	
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <label><label>Remarks:</label></label>
                                                <textarea rows="3" class="form-control"></textarea>
                                            </td>								
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-12 ">
                                    <div class="pull-right">
                                        <button class="btn btn-success" type="button">Save</button>
                                        <button class="btn btn-warning" type="button">Replace</button>
                                    </div>
                                </div>						
                            </div>
                            <!----------------------------------------------->
                        </div>
                        <div id="quality" class="tab-pane" role="tabpanel">
                            <!-- Quality Form Start -->
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default" id="panel1">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-target="#collapseOne" 
                                               href="#collapseOne">
                                                Collapsible Group Item #1
                                            </a>
                                        </h4>

                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                    </div>
                                </div>
                                <div class="panel panel-default" id="panel2">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-target="#collapseTwo" 
                                               href="#collapseTwo" class="collapsed">
                                                Collapsible Group Item #2
                                            </a>
                                        </h4>

                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                    </div>
                                </div>
                                <div class="panel panel-default" id="panel3">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-target="#collapseThree"
                                               href="#collapseThree" class="collapsed">
                                                Collapsible Group Item #3
                                            </a>
                                        </h4>

                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Quality Form End -->
                        </div>
                    </div>
                </div>
                <!---------------------------------------------------------->											
            </div>										
            <!--tab panel end-->									
        </div>
    </div>
</div>