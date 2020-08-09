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
            Submenu

        </span>
    <a href="#" class="list-group-item">
        <i class="fa fa-comment-o"></i> Lorem ipsum
    </a>
    <a href="#" class="list-group-item">
        <i class="fa fa-search"></i> Lorem ipsum
    </a>
    <a href="#" class="list-group-item">
        <i class="fa fa-user"></i> Lorem ipsum
    </a>
    <a href="#" class="list-group-item">
        <i class="fa fa-folder-open-o"></i> Lorem ipsum <span class="badge">14</span>
    </a>
    <a href="#" class="list-group-item">
        <i class="fa fa-bar-chart-o"></i> Lorem ipsumr <span class="badge">14</span>
    </a>
    <a href="#" class="list-group-item">
        <i class="fa fa-envelope"></i> Lorem ipsum
    </a>
</div>


<script>
    $(function () {

        $('#slide-submenu').on('click', function () {
            $(this).closest('.list-group').fadeOut('slide', function () {
                $('.mini-submenu').fadeIn();
            });

        });

        $('.mini-submenu').on('click', function () {
            $(this).next('.list-group').toggle('slide');
            $('.mini-submenu').hide();
        })
    })

</script>



