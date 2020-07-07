<section>
    <div class="row">
        <div class="col">
            <div class="col">
                <h1>Your Shopping Cart</h1>
                <input type="button" class="btn btn-primary" value="Continue Shopping"
                       onclick="window.location='shop/products'"/>
                <div><?php echo $message ?></div>
                <table>
                    <?php if ($cart = $this->cart->contents()): ?>
                        <tr>
                            <td>Serial</td>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Qty</td>
                            <td>Amount</td>
                            <td>Options</td>
                        </tr>
                        <?php
                        echo form_open('cart/update_cart');
                        $grand_total = 0;
                        $i = 1;

                        foreach ($cart as $item):
                            echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                            echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                            echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                            echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                            echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                            ?>
                            <tr>
                            <td>
                                <?php echo $i++; ?>
                            </td>
                            <td>
                                <?php echo $item['name']; ?>
                            </td>
                            <td>
                                $ <?php echo number_format($item['price'], 2); ?>
                            </td>
                            <td>
                                <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                            </td>
                            <?php $grand_total = $grand_total + $item['subtotal']; ?>
                            <td>
                                $ <?php echo number_format($item['subtotal'], 2) ?>
                            </td>
                            <td>
                                <?php echo anchor('cart/remove/' . $item['rowid'], 'Cancel'); ?>
                            </td>
                        <?php endforeach; ?>
                        </tr>
                        <tr>
                            <td><b>Order Total: $<?php echo number_format($grand_total, 2); ?></b></td>
                            <td><input type="button" value="Clear Cart" onclick="clear_cart()">
                                <input type="submit" value="Update Cart">
                                <?php echo form_close(); ?>
                                <input type="button" value="Checkout" onclick="window.location='billing'"></td>
                        </tr>
                    <?php endif; ?>
                </table>
            </div>
        </div>

    </div>

</section>


<script>
    function clear_cart() {
        const result = confirm('Are you sure want to clear all Items?');

        if (result) {
            window.location = "<?php echo base_url(); ?>cart/remove/all";
        } else {
            return false; // cancel button
        }
    }
</script>