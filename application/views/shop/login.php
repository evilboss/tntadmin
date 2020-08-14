<div class="store-content container">
    <div class="card">
        <div class="card-title">
            Login
        </div>
        <div class="card-body">
            <h1><?php echo lang('login_heading'); ?></h1>
            <p><?php echo lang('login_subheading'); ?></p>
            <?php if ($message): ?>
                <div id="infoMessage" class="alert alert-success"><?php echo $message; ?></div>
            <?php endif; ?>
            <?php if ($error): ?>
                <div id="infoMessage" class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>
            <?php $this->load->view('admin/partials/flash') ?>

            <?php echo form_open(((isset($loginRoute) ? $loginRoute : "shop/login"))); ?>
            <div class="form-group has-feedback">
                <?php echo form_input($identity, false, array('class' => 'form-control', 'placeholder' => 'Username')); ?>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <?php echo form_password('password', false, array('class' => 'form-control', 'placeholder' => 'Password')); ?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>

                <!-- /.col -->
            </div>
            <p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>
            <?php echo form_close(); ?>

        </div>
    </div>

</div>
