<div class="content store-content">

    <div class="row">
        <?php $this->load->view("profile/sidebar"); ?>

        <div class="col-md-10 col-sm-12 col-lg-10  ">
            <div class="card">
                <div class="card-title">
                    Request Product Return
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <img src="https://place-hold.it/200x200"/>
                        </div>
                        <div class="col-sm-12 col-md-10 col-lg-10">
                            <div class="row">
                                <dt class="col-sm-12"><?= $product->name ?></dt>
                            </div>
                            <div class="row">
                                <dd class="col-sm-12 col-md-5">
                                    <dl class="row">
                                        <dt class="col-sm-4">Product Code</dt>
                                        <dd class="col-sm-8"><?= $product->productCode ?>
                                        </dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-4">Product Type</dt>
                                        <dd class="col-sm-8">Model
                                        </dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-4">Product Status
                                        </dt>
                                        <dd class="col-sm-8">In stock
                                        </dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-4">Order Date</dt>
                                        <dd class="col-sm-8"><?= $order->created_at ?>
                                        </dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-4">Order Status</dt>
                                        <dd class="col-sm-8"><?= $order->order_status ?>
                                        </dd>
                                    </dl>
                                </dd>
                                <dd class="col-sm-12 col-md-5">
                                    <dl class="row">
                                        <dt class="col-sm-4">Price</dt>
                                        <dd class="col-sm-8">
                                            $ <?= $product->price ?>
                                        </dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-4">Quantity</dt>
                                        <dd class="col-sm-8"><?= $productOrder->qty ?>
                                        </dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-4">Total Price
                                        </dt>
                                        <dd class="col-sm-8">
                                        </dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-4">Order Number
                                        </dt>
                                        <dd class="col-sm-8">TNT<?= $order->id ?>
                                        </dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-4">Order Date</dt>
                                        <dd class="col-sm-8"><?= $order->created_at ?>
                                        </dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-4">Order Status</dt>
                                        <dd class="col-sm-8"><?= $order->order_status ?>
                                        </dd>
                                    </dl>
                                </dd>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <?php echo form_open(); ?>
                                <div class="form-group">
                                    <label for="reason">Reason</label>
                                    <?php echo form_dropdown('reason', '', '', array('class' => 'form-control select2-multiple')) ?>

                                </div>
                                <div class="form-group">
                                    <label for="solution">Solution</label>

                                    <?php echo form_dropdown('solution', '', '', array('class' => 'form-control select2-multiple')) ?>

                                </div>
                                <div class="form-group">
                                    <label for="description">Describe the problem</label>

                                    <?php echo form_textarea('description', '', array('class' => 'form-control')) ?>
                                    <button class="btn btn-success">Submit return request</button>
                                </div>
                                <?php echo form_close() ?>
                            </div>
                            <div class="col-md-4">
                                <?php $this->load->view("profile/upload_form"); ?>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
    <script>
        $(function () {
            $(".select2-multiple").select2({
                tags: true,
                containerCssClass: 'form-control'
            });

        });


    </script>

