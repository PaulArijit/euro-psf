<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">New QC Lab Report Version</div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php echo $this->Form->create('QcLabReportDetail', array('class' => 'form-horizontal')); ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="">Version</label>
                                <div class="col-sm-6">
                                    <?php echo $this->Form->input('version', array('class' => 'form-control', 'label' => FALSE)); ?>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>