<div class="content store-content">
    <div class="container">

        <div class="row">
            <?php $this->load->view("profile/sidebar"); ?>

            <div class="col-md-10 col-sm-12 col-lg-10  ">
                <div class="card">
                    <table class="table">
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
                                    <table>
                                        <thead>
                                        <th>Item</th>
                                        <th>Item Image</th>
                                        <th>Quantity</th>
                                        <th>Actions</th>

                                        </thead>
                                        <tbody>
                                        <?php foreach ($order->details as $details) : ?>
                                            <td><?php echo $details->product_name; ?> </td>
                                            <td>
                                                <div class="cart-img-product b-rad-4 o-f-hidden">
                                                    <img class="image img-fluid img-bordered img-responsive"
                                                         src="<?php echo base_url("images/products/$details->product_img") ?>">
                                                </div>
                                            </td>
                                            <td><?php echo $details->qty; ?></td>
                                            <td>
                                                <button class="btn btn-success">Pay</button>
                                                <button class="btn btn-danger">Cancel</button>
                                                <a class="btn btn-danger"
                                                   href="<?= base_url("shop/return-product/$details->order_id/$details->product_id") ?>">Request
                                                    Return</a>
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
</div>

