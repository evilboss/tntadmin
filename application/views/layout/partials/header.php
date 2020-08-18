<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url() ?>assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url() ?>assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url() ?>assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
          href="<?= base_url() ?>assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= base_url('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/libs/owl.carousel/dist/assets/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/libs/slick-1.8.1/slick/slick.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/libs/lightgallery/dist/css/lightgallery.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/libs/slick-1.8.1/slick/slick-theme.css') ?>">

    <link rel="stylesheet" href="/assets/css/tnt-store.css">

    <title>Toyntoys</title>
</head>
<body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="<?= base_url('assets/libs/owl.carousel/dist/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/libs/lightgallery/dist/js/lightgallery.min.js') ?>"></script>

<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: 'your-app-id',
            autoLogAppEvents: true,
            xfbml: true,
            version: 'v8.0'
        });
    };
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

<script src="/assets/js/cart.js"></script>
<?php if (!empty($add_js)): ?><?php foreach ($add_js as $js): ?>
    <script src="<?= $js ?>"></script> <?php endforeach; ?><?php endif; ?>
<header class="fixed-top">

    <nav class="navbar navbar-expand-lg navbar-dark dark-section p-0">
        <div class="w-100 mx-6" id="nav-one">
            <!--visible only in small-->
            <div class="d-block d-sm-none">
                <div class="d-flex bd-highlight mb-3">
                    <div class="p-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Language / 字符
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">中文</a>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="p-2">
                            <span class="badge badge-secondary"><i class="fa fa-heart fa-2x"
                                                                   aria-hidden="true"></i></span>
                        </div>
                        <div class="p-2">
                            <div class="dropdown">
                                <a class="nav-link p-0" href="#" role="button"
                                   id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <span class="nav-link badge badge-secondary">                                   <?php echo $cart->total_items(); ?>

                                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
                                </span> </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <div class="header-cart-wrapbtn">
                                        <!-- Button -->
                                        <a href="<?php echo base_url('cart') ?>"
                                           class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                            View Cart
                                        </a>
                                    </div>

                                    <div class="header-cart-wrapbtn">
                                        <!-- Button -->
                                        <a href="<?php echo base_url('cart/checkout') ?>"
                                           class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                            Check Out
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="p-2">
                            <div class="dropdown">
                                <a class="nav-link p-0" href="#" role="button"
                                   id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <span class="nav-link badge badge-secondary">
                                    <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                                </span> </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <?php if (isset($user)) {
                                        ?>
                                        <div class="header-cart-wrapbtn">

                                            <a class="nav-link" href="<?= base_url('shop/profile') ?>"><i
                                                        class="fa fa-user"></i> Profile</a>

                                            <a class="nav-link" href="<?= base_url('shop/logout') ?>"> <i
                                                        class="fa fa-sign-out"></i>Logout</a>
                                        </div>


                                        <?php
                                    } else {
                                        ?>
                                        <li class="nav-item">
                                        </li>
                                        <div class="header-cart-wrapitem">
                                            <a href="<?= base_url('shop/login') ?>" class="nav-link">Login</a>
                                            <a href="<?= base_url('shop/register') ?>" class="nav-link">Sign Up</a>
                                        </div>

                                        <?php
                                    } ?>


                                    <div class="header-cart-wrapbtn">
                                        <!-- Button -->

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="d-none d-sm-block d-flex">
                <div class="d-flex justify-content-between">
                    <div class="mr-auto">
                        <ul class="navbar-nav mr-auto social-media-icons flex-row">
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="https://www.facebook.com/toyntoys" target="_blank"><i
                                            class="fa fa-facebook"
                                            aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="nav-item  mx-2">
                                <a class="nav-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#"><i class="fa fa-instagram"
                                                                aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#"><i class="fa fa-weixin" aria-hidden="true"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="d-flex">
                        <ul class="navbar-nav nav-buttons flex-row">
                            <!-- <li class="nav-item active">
                                <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
                            </li> -->

                            <li class="nav-item dropdown">
                                <a class="nav-link text-white" href="#" id="navbarDropdown"
                                   role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Language / 字符
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">中文</a>
                                </div>
                            </li>
                            <?php if (isset($user)) {
                                ?>
                                <li class="nav-item">
                                    <a href="#" data-toggle="dropdown" class="nav-link text-white dropdown-toggle mr-3">Profile</a>
                                    <div class="dropdown-menu login-form gray-section">


                                        <?php echo form_close() ?>
                                        <a class="nav-link text-white" href="<?= base_url('shop/profile') ?>"><i
                                                    class="fa fa-user"></i> Profile</a>

                                        <a class="nav-link text-white" href="<?= base_url('shop/logout') ?>"> <i
                                                    class="fa fa-sign-out"></i>Logout</a>


                                    </div>
                                </li>


                                <?php
                            } else {
                                ?>
                                <li class="nav-item">
                                    <a href="#" data-toggle="dropdown" class="nav-link text-white dropdown-toggle mr-3">Login</a>
                                    <div class="dropdown-menu login-form gray-section">

                                        <?php echo form_open('shop/login') ?>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-white text-muted"> <i
                                                                class="fa fa-user"></i> </span>
                                                </div>
                                                <input name="identity" class="form-control" placeholder="Email"
                                                       type="email">
                                            </div> <!-- input-group.// -->
                                        </div> <!-- form-group// -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-white text-muted"> <i
                                                                class="fa fa-lock"></i> </span>
                                                </div>
                                                <input name="password" class="form-control" placeholder="Password"
                                                       type="password">
                                            </div> <!-- input-group.// -->
                                        </div> <!-- form-group// -->
                                        <div class="d-flex justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Remember me
                                                </label>
                                            </div>

                                            <a href="" class="text-primary">I forgot my password</a></div>
                                        <div class="form-group mt-2">
                                            <button type="submit" class="btn btn-danger btn-block"> Login</button>
                                        </div> <!-- form-group// -->
                                        <?php echo form_close() ?>

                                        <p class="text-primary text-center">or sign in with</p>
                                        <div class="text-center">

                                            <i class="fa fa-facebook"></i>
                                            <i class="fa fa-twitter"></i>
                                            <i class="fa fa-instagram"></i>
                                            <i class="fa fa-weixin"></i>
                                        </div>
                                        <?php echo form_open('shop/register', array('method' => 'get')) ?>

                                        <p class="text-primary text-center">Create an account</p>
                                        <button class="btn btn-primary btn-block"
                                                href="<?= base_url('shop/register') ?>">
                                            Sign
                                            up
                                        </button>
                                        <?php echo form_close() ?>


                                    </div>
                                </li>

                                <?php
                            } ?>

                        </ul>
                        <ul class="navbar-nav flex-row">
                            <li class="nav-item ">
                                <a class="nav-link heart-badge" href="#">
                                    <i class="fa fa-heart px-2 " aria-hidden="true"></i>

                                    <span class="badge">9</span>

                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link cart-badge" type="button"
                                   id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <i class="fa fa-shopping-cart px-2" aria-hidden="true"></i>
                                    <span class="badge"><?php echo $cart->total_items(); ?></span>
                                </a>
                                <div class="header-cart header-dropdown dropdown-menu dropdown-menu-right"
                                     aria-labelledby="dropdownMenuButton">
                                    <ul class="header-cart-wrapitem">
                                        <?php foreach ($cart->contents() as $header_cart) : ?>
                                            <li class="header-cart-item">
                                                <div class="header-cart-item-img">
                                                    <img class="img-thumbnail"
                                                         src="<?php echo (isset($header_cart['options']['product_image'])) ? base_url() . thumbImage($header_cart['options']['product_image']) : ""; ?>"
                                                         alt="IMG">
                                                </div>

                                                <div class="header-cart-item-txt">

                                                    <?php echo $header_cart['name'] ?>

                                                    <span class="header-cart-item-info">
											<?php echo $header_cart['qty'] . "x" . $header_cart['price'] ?>
                                    </span>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>

                                    <div class="header-cart-total">
                                        Total: $ <?php echo number_format($this->cart->total()); ?>
                                    </div>

                                    <div class="header-cart-buttons">
                                        <div class="header-cart-wrapbtn">
                                            <!-- Button -->
                                            <a href="<?php echo base_url('cart') ?>"
                                               class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                                View Cart
                                            </a>
                                        </div>

                                        <div class="header-cart-wrapbtn">
                                            <!-- Button -->
                                            <a href="<?php echo base_url('cart/checkout') ?>"
                                               class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                                Check Out
                                            </a>
                                        </div>
                                    </div>
                                </div>


                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark gray-section">
        <div class="mx-6 d-flex justify-content-space-between">
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="/assets/img/tnt-logo.png"></a>

            <button class="navbar-toggler" style="height: 50px" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="w-100 mx-6 d-flex justify-content-between">
                <div class="row">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item mx-3 <?= $this->router->method == 'index' ? 'active' : '' ?>">
                                <a class="nav-link text-white" href="<?php echo base_url(); ?>">Home</a>
                            </li>
                            <li class="nav-item mx-3  <?= $this->router->method == 'new' ? 'active' : '' ?>">
                                <a class="nav-link text-white" href="<?php echo base_url('new'); ?>">New</a>
                            </li>
                            <li class="nav-item mx-3 <?= $this->router->method == 'comingSoon' ? 'active' : '' ?>">
                                <a class="nav-link text-white" href="<?php echo base_url('coming-soon'); ?>">Coming
                                    Soon</a>
                            </li>
                            <li class="nav-item mx-3 <?= $this->router->method == 'preOrders' ? 'active' : '' ?>">
                                <a class="nav-link text-white" href="<?php echo base_url('pre-orders'); ?>">Pre
                                    Order</a>
                            </li>
                            <li class="nav-item mx-3 <?= $this->router->method == 'products' ? 'active' : '' ?>">
                                <a class="nav-link text-white" href="<?php echo base_url('products'); ?>">Shop</a>
                            </li>
                            <li class="nav-item mx-3 <?= $this->router->method == 'categories' ? 'active' : '' ?>">
                                <a class="nav-link text-white"
                                   href="<?php echo base_url('categories'); ?>">Categories</a>
                            </li>
                            <li class="nav-item mx-3 <?= $this->router->method == 'about' ? 'active' : '' ?>">
                                <a class="nav-link text-white" href="<?php echo base_url('about'); ?>">About</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-white" href="<?php echo base_url('blog'); ?>">Blog</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a href="#" class="nav-link text-white">
                                    <span class="glyphicon glyphicon-search"></span>
                                </a>

                            </li>

                        </ul>
                        <div class="d-block d-sm-none">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item mx-3">
                                    <a class="nav-link text-white" href="#"><i class="fa fa-facebook-square"
                                                                               aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="nav-item mx-3">
                                    <a class="nav-link text-white" href="#"><i class="fa fa-twitter"
                                                                               aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="nav-item mx-3">
                                    <a class="nav-link text-white" href="#"><i class="fa fa-instagram"
                                                                               aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="nav-item mx-3">
                                    <a class="nav-link text-white" href="#"><i class="fa fa-weixin"
                                                                               aria-hidden="true"></i>
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>

            </div>

    </nav>


</header>

<section class="store-content">
    <?php $this->load->view('partials/flash'); ?>
