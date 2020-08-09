<!-- Title Page -->


<!-- Profile section -->

<div class="content store-content">
    <div class="container">

        <div class="row">
            <div class=" col-md-2 col-sm-4 sidebar">

                <?php $this->load->view("profile/sidebar"); ?>
            </div>
            <div class="col-md-10 col-sm-8">
                <div class="card">
                    <?php echo form_open(base_url("index.php/")) ?>
                    <div class="form-control">
                        <label>Name :</label>
                        <?php echo form_input("first_name", set_value("name", $user->first_name), array()); ?>
                        <span class="effect1-line"></span>
                    </div>
                    <div class="form-control">
                        <label>Name :</label>
                        <?php echo form_input("last_name", set_value("name", $user->last_name), array()); ?>
                        <span class="effect1-line"></span>
                    </div>

                    <div class="form-control">
                        <label>Email :</label>
                        <?php echo form_input("name", set_value("name", $user->email), array()); ?>
                        <span class="effect1-line"></span>
                    </div>

                    <?php echo form_close() ?>
                </div>

            </div>
        </div>

    </div>
</div>



