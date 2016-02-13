<div class="row">
    <h1 class="text-center">Knife</h1>
    <div class="col-lg-10">
        <div class="panel panel-default">
            <div class="panel-body">
                <label></label><br/>
                <label></label><br/>
                <label></label>
            </div>
        </div>
    </div>
    <?php echo $this->Form->create('KnifeSpecification', array('action' => 'edit', 'controller' => 'KnifeSpecifications')); ?>
    
    <div class="col-lg-2">
        <div class="panel fresh-color panel-success">
            <div class="panel-heading text-center">NPI</div>
            <div class="panel-body text-center">
                Admin
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-12">
        <table class="grommet-tab1" cellpadding="0" cellspacing="0">            
            <tr>
                <td><label>Knife Size (mm)</label></td>
                <td><?php echo $this->Form->input('KnifeSpecification.0.knife_size', array('class' => 'form-control', 'label' => FALSE)); ?></td>
                <td rowspan="9" valign="top">
                    <label>Remarks:</label>
                    <textarea rows="8" class="form-control"></textarea>
                </td>
            </tr>
            
            <tr>
                <td><label>Similar Knife</label></td>
                <td><input type="text" class="form-control"/></td>
            </tr>
            <tr>
                <td><label>Knife Type</label></td>
                <td><input type="text" class="form-control"/></td>
            </tr>
            <tr>
                <td><label>M6 Screw Holes</label></td>
                <td><input type="text" class="form-control"/></td>									
            </tr>								
            <tr>
                <td><label>Machine Type</label></td>
                <td><input type="text" class="form-control"/></td>									
            </tr>
            <tr>
                <td><label>Base</label></td>
                <td><input type="text" class="form-control"/></td>									
            </tr>
            <tr>
                <td><label>Punch Out %</label></td>
                <td><input type="text" class="form-control"/></td>									
            </tr>
            <tr>
                <td><label>Handle Length (mm)</label></td>
                <td><input type="text" class="form-control"/></td>									
            </tr>
            <tr>
                <td><label>Handle Width (mm)</label></td>
                <td><input type="text" class="form-control"/></td>									
            </tr>
            <tr>
                <td colspan="3">
                    <label>Amendment Note:</label>
                    <textarea rows="3" class="form-control"></textarea>
                </td>
            </tr>            
        </table>
    </div>
    <div class="col-lg-12 ">
        <div class="pull-right">
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </div>
    
    <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
    <?php $this->Form->end(); ?>
</div>