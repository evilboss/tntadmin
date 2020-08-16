<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/select2/select2.min.css">
<script src="<?= base_url() ?>assets/plugins/select2/select2.full.min.js"></script>

<fieldset>
    <div class="form-group <?php echo (form_error('name')) ? ' has-error' : ''; ?>">
        <label>Event name</label>
        <?php echo form_input('name', '', ['class' => 'form-control']) ?>
        <?php echo form_error('name', '<span class="help-block">', '</span>') ?>

    </div>
    <div class="form-group <?php echo (form_error('productIds[]')) ? ' has-error' : ''; ?>">
        <label>Select Products</label>
        <?php echo form_dropdown('productIds[]', $options, [], ['multiple' => 'multiple', 'class' => 'form-control select2']) ?>
        <?php echo form_error('productIds[]', '<span class="help-block">', '</span>') ?>

    </div>
    <div class="form-group <?php echo (form_error('enabled')) ? ' has-error' : ''; ?>">
        <label>Enabled</label>
        <?php echo form_checkbox('enabled', 1, true, ['class' => 'form-check-input']) ?>
        <?php echo form_error('enabled', '<span class="help-block">', '</span>') ?>

    </div>
    <div class="form-group <?php echo (form_error('start')) ? ' has-error' : ''; ?>">
        <label>Start:</label>

        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" name="start" class="form-control pull-right datepicker"
                   value="<?php echo (isset($record->preOrderStart)) ? date_format(date_create($record->preOrderStart), 'Y/m/d') : ''; ?>"

                   id="preOrderStart">
        </div>
        <?php echo form_error('start', '<span class="help-block">', '</span>') ?>

        <!-- /.input group -->
    </div>
    <div class="form-group <?php echo (form_error('start')) ? ' has-error' : ''; ?>">
        <label>End Date:</label>

        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" name="end" class="form-control pull-right datepicker"
                   value="<?php echo (isset($record->preOrderStart)) ? date_format(date_create($record->preOrderStart), 'Y/m/d') : ''; ?>"

                   id="preOrderStart">
        </div>
        <?php echo form_error('end', '<span class="help-block">', '</span>') ?>

        <!-- /.input group -->
    </div>

</fieldset>
<script>
    $(() => {
        $('.select2').select2();
        //Date picker
        $('.datepicker').datepicker({
            autoclose: true
        })
    });

</script>
