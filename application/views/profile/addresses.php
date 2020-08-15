<div class="content store-content">

    <div class="container">

        <div class="row">
            <?php $this->load->view("profile/sidebar"); ?>

            <div class="col-md-10 col-sm-8">
                <div class="card">
                    <div class="card-header">
                        Add New Address
                    </div>
                    <div class="card-body">
                        <?php echo form_open('shop/addresses') ?>
                        <?php $this->load->view('profile/addressForm') ?>
                        <?php echo form_close() ?>

                    </div>

                </div>

            </div>
            <?php if (!empty($addresses)): ?>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            Your Address
                        </div>

                        <div class="card-body">
                            <div class="container">

                                <?php
                                foreach ($addresses as $address):
                                    ?>
                                    <address>
                                        <?= "$address->street, $address->city, $address->state, $address->country, $address->postcode" ?></address>
                                <?php
                                endforeach;
                                ?>

                                <?php if (!empty($cart->contents())): ?>
                                    <a class="btn btn-success" href="<?= base_url('/cart/checkout') ?>"><i
                                                class="fa fa-shopping-cart"></i> Checkout Now</a>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
    <div class="row">


    </div>

</div>
</div>

