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
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($orders as $order) : ?>
                            <tr>
                            <td> <?php echo $order->id; ?></td>

                            <?php foreach ($order->details as $details) : ?>
                                <td><?php echo $details->product_name; ?> </td>
                                <td>
                                    <div class="cart-img-product b-rad-4 o-f-hidden">
                                        <img src="<?php echo base_url("images/products/$details->product_img") ?>">
                                    </div>
                                </td>
                                <td><?php echo $details->qty; ?></td>
                                <td> <?php echo $order->order_status; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>

