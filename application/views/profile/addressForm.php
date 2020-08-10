<div class="form-group ">
    <label for="country">Country</label>
    <?php echo form_input('country', '', ['class' => form_error('country') ? 'form-control is-invalid' : 'form-control']); ?>
    <?php echo form_error('country', '<span class="help-block invalid-feedback">', '</span>') ?>

</div>
<div class="form-group">
    <label for="state">State</label>
    <?php echo form_input('state', '', ['class' => form_error('state') ? 'form-control is-invalid' : 'form-control']); ?>
    <?php echo form_error('state', '<span class="help-block invalid-feedback">', '</span>') ?>
</div>
<div class="form-group">
    <label for="city">City</label>
    <?php echo form_input('city', '', ['class' => form_error('city') ? 'form-control is-invalid' : 'form-control']); ?>
    <?php echo form_error('city', '<span class="help-block invalid-feedback">', '</span>') ?>
</div>

<div class="form-group">
    <label for="street">Street Address</label>
    <?php echo form_input('street', '', ['class' => form_error('street') ? 'form-control is-invalid' : 'form-control']); ?>
    <?php echo form_error('street', '<span class="help-block invalid-feedback">', '</span>') ?>
</div>
<div class="form-group">
    <label for="postcode">Zip Code</label>
    <?php echo form_input('postcode', '', ['class' => form_error('postcode') ? 'form-control is-invalid' : 'form-control']); ?>
    <?php echo form_error('postcode', '<span class="help-block invalid-feedback">', '</span>') ?>
</div>
<pre><?php print_r($debug) ?></pre>
<button class="btn btn-primary" type="submit">Save</button>

