<div class="container">
    <h1><?php echo lang('create_user_heading'); ?></h1>
    <p><?php echo lang('create_user_subheading'); ?></p>
    <div class="col-sm-12">
        <?php echo form_open(((isset($loginRoute) ? $loginRoute : "shop/register"))); ?>
        <div class="form-group">

            <label>First Name:</label>
            <?php echo lang('create_user_fname_label', 'first_name'); ?> <br/>
            <?php echo form_input($first_name, '', 'class="form-control"'); ?>
        </div>

        <div class="form-group">
            <label>Last Name:</label>

            <?php echo lang('create_user_lname_label', 'last_name'); ?> <br/>
            <?php echo form_input($last_name, '', 'class="form-control"'); ?>
        </div>


        <div class="form-group">
            <label>Email:</label>
            <?php echo lang('create_user_email_label', 'email'); ?> <br/>
            <?php echo form_input($email, '', 'class="form-control"'); ?>
        </div>

        <div class="form-group">
            <label>Phone:</label>

            <?php echo lang('create_user_phone_label', 'phone'); ?> <br/>
            <?php echo form_input($phone, '', 'class="form-control"'); ?>
        </div>

        <div class="form-group">
            <label>Password:</label>

            <?php echo lang('create_user_password_label', 'password'); ?> <br/>
            <?php echo form_input($password, '', 'class="form-control"'); ?>
        </div>

        <div class="form-group">
            <label>Password Confirm:</label>

            <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br/>
            <?php echo form_input($password_confirm, '', 'class="form-control"'); ?>
        </div>

        <?php echo form_hidden($csrf); ?>

        <div class="form-group">
            <?php echo form_submit('submit', "Sign Up", array('class' => 'btn btn-success')); ?>
        </div>

        <?php echo form_close(); ?>


    </div>
