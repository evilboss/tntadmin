<div class="col-lg-2 col-md-4 col-sm-12 ">
    <div class="card">
        <div class="card-header">
                        <span href="#" class="list-group-item">
            <i class="fa fa-user"></i> <?= "$user->first_name $user->last_name" ?>
        </span>

        </div>
        <div class="card-body">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="<?php echo base_url('shop/profile/') ?>"
                       class="<?= $this->router->method == 'profile' ? 'active' : '' ?>">
                        <i class="fa fa-user-circle"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('shop/orders/') ?>"
                       class="<?= $this->router->method == 'orders' ? 'active' : '' ?>">
                        <i class="fa fa-shopping-cart"></i> Orders
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('shop/addresses/') ?>"
                       class="<?php echo ($this->uri->segment(2) == "addresses") ? " active1" : ""; ?>">
                        <i class="fa fa-home"></i> Addresses
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>

