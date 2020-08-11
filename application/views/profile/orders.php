<div class="content store-content">
    <div class="container">

        <div class="row">
            <div class=" col-md-2 col-sm-4 sidebar">
                <?php $this->load->view("profile/sidebar"); ?>
            </div>
            <div class="col-md-10 col-sm-8">
                <div class="card">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Product Name</th>
                            <th>Preview</th>
                            <th>qty</th>
                            <th>Status</th>
                            <th>Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($orders as $order) : ?>
                            <td> <?php echo $order->id; ?></td>
                            <?php foreach ($order->details as $details) : ?>
                                <td></td>

                                <td><?php echo $details->product_name; ?> </td>
                                <td>
                                    <div class="cart-img-product b-rad-4 o-f-hidden">
                                        <img src="<?php echo base_url("images/products/$details->product_img") ?>">
                                    </div>
                                </td>
                                <td><?php echo $details->qty; ?></td>

                                </tr>
                            <?php endforeach; ?>
                            <td> <?php echo $order->order_status; ?></td>
                            <td>
                                <?php if ($order->order_status === "For Payment"): ?>
                                    <a href="<?= base_url("cart/checkout/$order->id") ?>" class="btn btn-success btn-lg"
                                       role="button" aria-disabled="true">Pay
                                        Now</a>
                                <?php endif; ?>

                            </td>
                        <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>

