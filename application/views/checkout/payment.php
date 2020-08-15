<div class="content store-content">
    <?php if ($order->order_status === "For Payment"): ?>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="paynow-tab" data-toggle="tab" href="#paynow" role="tab"
                   aria-controls="paynow" aria-selected="true">Paynow</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#card" role="tab" aria-controls="card"
                   aria-selected="false">To be added</a>
            </li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content payment">
            <div class="tab-pane active" id="paynow" role="tabpanel" aria-labelledby="paynow-tab">
                <div class="row">
                    <div class="col-md-6">
                        Pay with paynow scan qr code
                        add this as the referene code
                        <?php echo form_open(base_url("cart/checkout/$order->id")) ?>
                        <label>Transaction Number</label>
                        <?php echo form_hidden('transactionType', 'transactionNumber'); ?>
                        <?php echo form_input('transactionNumber'); ?>

                        <button class="btn btn-success">Pay</button>
                        <?php echo form_close() ?>

                    </div>
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/images/qr-tnt.jpeg') ?>">

                    </div>

                </div>


            </div>
            <div class="tab-pane" id="card" role="tabpanel" aria-labelledby="profile-tab">Card Payment</div>
        </div>
    <?php else: ?>
        <h1>Order is pending</h1>
        <a href="<?= base_url("shop/orders") ?>" class="btn btn-success btn-lg"
           role="button" aria-disabled="true">Go to Orders</a>
    <?php endif; ?>


</div>
