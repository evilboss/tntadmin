<!-- Title Page -->
<div class="store-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-lg-10 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Cart
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
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
                                    <th scope="row">1</th>
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
                        Total
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php echo "$ " . number_format($this->cart->total()); ?>

                        </div>
                        <div class="row">
                            <a class="btn-success btn" href="<?php echo base_url('cart/checkout') ?>">
                                Checkout
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!--   <div class="card">
            <div class="card-header">
                Cart
            </div>
            <div class="card-body">
                <?php /*echo form_open('cart/update'); */ ?>
                <table class="table-shopping-cart">
                    <tr class="table-head">
                        <th class="column-1"></th>
                        <th class="column-2">Product</th>
                        <th class="column-3">Price</th>
                        <th class="column-4">Quantity</th>
                        <th class="column-5">Total</th>
                        <th class="column-5">Action</th>
                    </tr>
                    <?php
        /*                    $i = 0;
                            foreach ($cart->contents() as $item) : */ ?>

                        <tr class="table-row">
                            <td class="column-1"
                            ">
                            <div class="cart-img-product b-rad-4 o-f-hidden">
                                <img src="<?php /*echo (isset($item['options']['product_image'])) ? base_url() . thumbImage($item['options']['product_image']) : ""; */ ?>"
                                     alt="IMG-PRODUCT">
                            </div>
                            </td>
                            <td class="column-2"><?php /*echo $item['name']; */ ?></td>
                            <td class="column-3"><?php /*echo $item['price']; */ ?></td>
                            <td class="column-4">
                                <input class="" type="hidden" name="<?php /*echo "cart[$i][rowid]" */ ?>"
                                       value="<?php /*echo $item['rowid']; */ ?>">
                                <div class="flex-w bo5 of-hidden w-size17">
                                    <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                        <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                    </button>

                                    <input class="size8 m-text18 t-center num-product" type="number"
                                           name="<?php /*echo "cart[$i][qty]" */ ?>" value="<?php /*echo $item['qty']; */ ?>">

                                    <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                        <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </td>
                            <td class="column-5"><?php /*echo number_format($item['subtotal']); */ ?></td>
                            <td class="column-6">
                                <button type="button" class="btn btn-sm btn-default remove_item"
                                        data-row-id="<?php /*echo $item['rowid'] */ ?>">X
                                </button>
                            </td>
                        </tr>
                        <?php
        /*                        $i++;
                            endforeach; */ ?>
                </table>
                <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                    Update Cart
                </button>
                <div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

                    <span class="m-text21 w-size20 w-full-sm">
						<?php /*echo "$ " . number_format($this->cart->total()) . " /-"; */ ?>
					</span>
                </div>
                <a href="<?php /*echo base_url('cart/checkout') */ ?>">
                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        Proceed to Checkout
                    </button>
                </a>
                <?php /*echo form_close() */ ?>

            </div>
        </div>
        <?php /*echo form_open(base_url('index.php/cart/remove-item', '', array("id" => "remove_item_form"))) */ ?>
        <input type="text" name="product_id" id="input_product_id" value="">
        --><?php /*echo form_close() */ ?>
    </div>
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container">
            <!-- Cart item -->
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">
                </div>
            </div>


            <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                <div class="flex-w flex-m w-full-sm">


                </div>

                <div class="size10 trans-0-4 m-t-10 m-b-10">
                    <!-- Button -->

                </div>
            </div>

            <!-- Total -->
            <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
                <h5 class="m-text20 p-b-24">
                    Cart Totals
                </h5>

                <!--  -->


                <!--  -->
                <div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

                    <span class="m-text21 w-size20 w-full-sm">
						<?php echo "$ " . number_format($this->cart->total()) . " /-"; ?>
					</span>
                </div>

                <div class="size15 trans-0-4">
                    <!-- Button -->

                </div>
            </div>
        </div>
    </section>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $('.remove_item').click(function () {

            var remove_item = $(this).data("row-id");

            $("#input_product_id").val(remove_item);
            // $("#remove_item_form").submit();
        });
    });
</script>


