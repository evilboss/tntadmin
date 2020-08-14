<div class="content store-content">

    <div class="container">

        <div class="row">
            <?php $this->load->view("profile/sidebar"); ?>

            <div class="col-md-10 col-sm-8">
                <div class="card">
                    <div class="card-header">
                        Addresses
                    </div>
                    <div class="card-body">
                        <?php echo form_open('shop/addresses') ?>
                        <?php $this->load->view('profile/addressForm') ?>
                        <?php echo form_close() ?>
                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <?php if (isset($addresses)):
                foreach ($addresses as $address):
                    ?>
                    <pre><?php print_r($address) ?></pre>
                <?php
                endforeach;
            endif; ?>

        </div>

    </div>
</div>

