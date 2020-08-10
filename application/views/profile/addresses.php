<div class="content store-content">

    <div class="container">

        <div class="row">
            <div class=" col-md-2 col-sm-4 sidebar">
                <?php $this->load->view("profile/sidebar"); ?>
            </div>
            <div class="col-md-10 col-sm-8">


                <div class="card">
                    <?php echo form_open('shop/addresses') ?>
                    <?php $this->load->view('profile/addressForm') ?>
                    <?php echo form_close() ?>
                </div>

            </div>
        </div>

    </div>
</div>

