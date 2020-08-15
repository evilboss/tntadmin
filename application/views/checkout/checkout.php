<!-- Cart item -->

<div class="container">
    <div class="row mx-0">
        <div class="col-md-10 col-lg-10 col-sm-12">
            <div class="card">
                <div class="card-header">
                    Checkout
                </div>
                <div class="card-body">
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 0;
                        foreach ($cart->contents() as $item) : ?>
                            <tr>
                                <td class="w-25">
                                    <img src="<?php echo (isset($item['options']['product_image'])) ? base_url() . thumbImage($item['options']['product_image']) : ""; ?>"
                                         alt="IMG-PRODUCT" class="img-fluid img-thumbnail">


                                </td>
                                <td class="column-2"><?php echo $item['name']; ?></td>
                                <td class="column-3"><?php echo $item['price']; ?></td>
                                <td class="column-3"><?php echo $item['qty'] ?></td>

                            </tr>

                            <?php
                            $i++;
                        endforeach; ?>
                        </tbody>
                    </table>


                </div>

            </div>

        </div>

        <div class="col-md-2  col-lg-2 col-sm-12">
            <div class="card">
                <div class="card-header">
                    Checkout Details
                </div>
                <div class="card-body">
                    <div class="row">
                        <dt class="">Total:</dt>
                        <dd class=""><?php echo "$ " . number_format($this->cart->total()); ?></dd>

                    </div>

                    <div class="row">
                        <?php echo form_open(base_url('place-order')) ?>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1"> Select Delivery Address:</label>
                            <?php
                            $dropDownAddresss = array('');

                            foreach ($addresses as $address) {
                                array_push($dropDownAddresss,
                                    "$address->country, $address->state, $address->city, $address->street, $address->postcode");
                            }
                            ?>
                            <?php echo(count($dropDownAddresss) > 1); ?>
                            <?php if (count($dropDownAddresss) > 1): ?>
                                <?php echo form_dropdown('deliveryId', $dropDownAddresss, '', ['class' => form_error('deliveryId') ? 'form-control is-invalid' : 'form-control']) ?>
                                <?php echo form_error('deliveryId', '<span class="help-block invalid-feedback">', '</span>') ?>

                                <div class="form-group">
                                    <!-- Button -->
                                    <button class="btn btn-primary" type="submit">
                                        Place Order
                                    </button>
                                </div>
                            <?php else: ?>
                                <a class="nav-link" href="<?= base_url('/shop/addresses/') ?>">Please set your delivery
                                    address
                                    address</a>
                            <?php endif; ?>

                        </div>


                        <?php echo form_close() ?>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
