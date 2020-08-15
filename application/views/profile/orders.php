<div class="content store-content">

    <div class="row mx-0">
        <?php $this->load->view("profile/sidebar"); ?>

        <div class="col-md-8 col-sm-12 col-lg-10  ">
            <div class="card">
                <table class="table-responsive">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Details</th>
                    </tr>

                    </thead>
                    <tbody>
                    <?php foreach ($orders as $order) : ?>
                        <tr>
                            <td> TNT<?php echo $order->id; ?></td>
                            <td>
                                <table class="table-responsive">
                                    <thead>
                                    <th>Item</th>
                                    <th>Item Image</th>
                                    <th>Quantity</th>
                                    <th>Actions</th>

                                    </thead>
                                    <tbody>
                                    <?php foreach ($order->details as $details) : ?>
                                        <?php print_r($order) ?>
                                        <td><?php echo $details->product_name; ?> </td>
                                        <td>
                                            <div class="cart-img-product b-rad-4 o-f-hidden">
                                                <img class="image img-fluid img-bordered img-responsive"
                                                     src="<?php echo base_url("images/products/$details->product_img") ?>">
                                            </div>
                                        </td>
                                        <td><?php echo $details->qty; ?></td>
                                        <td>

                                            <?php if ($order->order_status === 'For Payment'): ?>
                                                <a class="btn btn-success"
                                                   href="<?= base_url("cart/checkout/$order->id") ?>">Pay</a>
                                            <?php else: ?>
                                                <button class="btn btn-danger">Cancel</button>

                                            <?php endif; ?>
                                            <?php if ($order->order_status === 'delivered'): ?>
                                                <a class="btn btn-danger"
                                                   href="<?= base_url("shop/return-product/$details->order_id/$details->product_id") ?>">Request
                                                    return</a>
                                            <?php endif; ?>

                                        </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </td>


                        </tr>

                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

