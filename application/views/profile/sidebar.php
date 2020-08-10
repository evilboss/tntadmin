<!--<div class="leftbar p-r-20 p-r-0-sm">
    <ul class="p-b-54">
        <li class="p-t-4">
            <a href="<?php /*echo base_url('shop/profile/') */ ?>"
               class="s-text13<?php /*echo ($this->uri->segment(2) == "") ? " active1" : ""; */ ?>">
                Profile
            </a>
        </li>
        <li class="p-t-4">
            <a href="<?php /*echo base_url('shop/orders') */ ?>"
               class="s-text13<?php /*echo ($this->uri->segment(2) == "my-orders") ? " active1" : ""; */ ?>">
                My Orders
            </a>

        </li>

    </ul>
    <pre><?php /*print_r($user); */ ?></pre>
</div>
-->

<div class="list-group">

        <span href="#" class="list-group-item active">
            <i class="fa fa-user"></i> <?= "$user->first_name $user->last_name" ?>
        </span>

    <a href="<?php echo base_url('shop/profile/') ?>"
       class="list-group-item<?php echo ($this->uri->segment(2) == "") ? " active1" : ""; ?>">
        <i class="fa fa-user-circle"></i> Profile
    </a>
    <a href="<?php echo base_url('shop/orders/') ?>"
       class="list-group-item<?php echo ($this->uri->segment(2) == "") ? " active1" : ""; ?>">
        <i class="fa fa-shopping-cart"></i> Orders
    </a>
    <a href="<?php echo base_url('shop/addresses/') ?>"
       class="list-group-item<?php echo ($this->uri->segment(2) == "addresses") ? " active1" : ""; ?>">
        <i class="fa fa-home"></i> Addresses
    </a>

</div>





