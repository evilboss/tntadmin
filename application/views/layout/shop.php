<!DOCTYPE html>
<html>
<head>


    <meta name="msapplication-TileImage" content="<?= base_url() ?>assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/jpg" href="<?= base_url() ?>assets/img/favicon.jpg"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $site['site_title'] ?> | Shop</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/select2/select2.min.css">



    <!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
    <?php if (!empty($add_css)): ?><?php foreach ($add_css as $css): ?>
        <link rel="stylesheet" href="<?= base_url($css) ?>"><?php endforeach; ?><?php endif; ?>

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/tnt.css">

    <script type="text/javascript">
        var base_url = "<?=base_url()?>";
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">
    <section id="wrapper-login">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4" style="padding-left:0;padding-right:0">
                                <a href="https://www.facebook.com/imaginarium.hobby/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <!-- <a href="https://twitter.com/toyntoys/" target="_blank"><i class="fab fa-twitter"></i></a> -->
                                <a href="https://www.instagram.com/imaginarium.art/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="weixin://dl/chat?{toID}" target="_blank"><i class="fab fa-weixin"></i></a>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#"><img class="header-logo" src="resources/img/logos/logo-imaginarium.png"></a>
                                    </div>
                                    <!--
                                                                    <div class="col-md-6">
                                                                        <a href="#"><img class="header-logo" src="resources/img/logos/logo-candyntoy.png"></a>
                                                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6" style="padding-left:0;padding-right:0">
                        <div class="row">
                            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                                <li class="nav-item container-language">
                                    <a href="#" class="" title="settings">
                                        <select class="border-l border-r input-lg" id="shift_lang" onchange="shift_lang('http://47.52.67.37:8000/TNTWeb/');"><option value="en" selected="">English</option><option value="cn">中文</option>                            </select><i class="fa fa-chevron-down"></i>
                                    </a>
                                </li>
                                <li class="dropdown nav-item ">
                                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn dropdown-toggle">LOGIN <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right mt-2">
                                        <form>
                                            <div class="form-group">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i style="color:#dde1e4" class="fas fa-user"></i></div>
                                                    </div>
                                                    <input type="email" class="form-control" id="login-username" placeholder="Username" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAkCAYAAADo6zjiAAAAAXNSR0IArs4c6QAAAbNJREFUWAntV8FqwkAQnaymUkpChB7tKSfxWCie/Yb+gbdeCqGf0YsQ+hU95QNyDoWCF/HkqdeiIaEUqyZ1ArvodrOHxanQOiCzO28y781skKwFW3scPV1/febP69XqarNeNTB2KGs07U3Ttt/Ozp3bh/u7V7muheQf6ftLUWyYDB5yz1ijuPAub2QRDDunJsdGkAO55KYYjl0OUu1VXOzQZ64Tr+IiPXedGI79bQHdbheCIAD0dUY6gV6vB67rAvo6IxVgWVbFy71KBKkAFaEc2xPQarXA931ot9tyHphiPwpJgSbfe54Hw+EQHMfZ/msVEEURjMfjCjbFeG2dFxPo9/sVOSYzxmAwGIjnTDFRQLMQAjQ5pJAQkCQJ5HlekeERxHEsiE0xUUCzEO9AmqYQhiF0Oh2Yz+ewWCzEY6aYKKBZCAGYs1wuYTabKdNNMWWxnaA4gp3Yry5JBZRlWTXDvaozUgGTyQSyLAP0dbb3DtQlmcan0yngT2ekE9ARc+z4AvC7nauh9iouhpcGamJeX8XF8MaClwaeROWRA7nk+tUnyzGvZrKg0/40gdME/t8EvgG0/NOS6v9NHQAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i style="color:#dde1e4" class="fas fa-lock"></i></div>
                                                    </div>
                                                    <input type="password" class="form-control" id="login-password" placeholder="Password" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAkCAYAAADo6zjiAAAAAXNSR0IArs4c6QAAAbNJREFUWAntV8FqwkAQnaymUkpChB7tKSfxWCie/Yb+gbdeCqGf0YsQ+hU95QNyDoWCF/HkqdeiIaEUqyZ1ArvodrOHxanQOiCzO28y781skKwFW3scPV1/febP69XqarNeNTB2KGs07U3Ttt/Ozp3bh/u7V7muheQf6ftLUWyYDB5yz1ijuPAub2QRDDunJsdGkAO55KYYjl0OUu1VXOzQZ64Tr+IiPXedGI79bQHdbheCIAD0dUY6gV6vB67rAvo6IxVgWVbFy71KBKkAFaEc2xPQarXA931ot9tyHphiPwpJgSbfe54Hw+EQHMfZ/msVEEURjMfjCjbFeG2dFxPo9/sVOSYzxmAwGIjnTDFRQLMQAjQ5pJAQkCQJ5HlekeERxHEsiE0xUUCzEO9AmqYQhiF0Oh2Yz+ewWCzEY6aYKKBZCAGYs1wuYTabKdNNMWWxnaA4gp3Yry5JBZRlWTXDvaozUgGTyQSyLAP0dbb3DtQlmcan0yngT2ekE9ARc+z4AvC7nauh9iouhpcGamJeX8XF8MaClwaeROWRA7nk+tUnyzGvZrKg0/40gdME/t8EvgG0/NOS6v9NHQAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                                                </div>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1" style="color: #fff">Remember Me</label>
                                                <a href=""><p style="float: right;color:#fff">I forgot my password</p></a>
                                            </div>

                                            <div id="logitin" class="btn btn-danger" style="width: 100%; margin-top: 10px;margin-bottom:10px">Login</div>

                                            <p style="text-align: center;color: #fff">or sign in with</p>
                                            <ul class="list-inline" style="text-align: center;margin-bottom: 10px">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                        <img src="resources/img/social_med/social_med-fb.jpg">
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                        <img src="resources/img/social_med/social_med-gplus.jpg">
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                        <img src="resources/img/social_med/social_med-qq.jpg">
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                                        <img src="resources/img/social_med/social_med-wechat.jpg">
                                                    </a>
                                                </li>
                                            </ul>
                                            <p style="text-align: center;color: #fff">Create an account</p>
                                            <a href="sign-up.php" class="btn btn-primary" style="width: 100%;margin-bottom:10px">Sign Up</a>
                                        </form>
                                    </ul>
                                </li>
                                <li class="nav-item container-hearts"><a href="#" class=""><i class="fas fa-heart"></i><span id="heartCounter" class="bubble-notif2" style="display: none;">0</span></a></li>
                                <li class="nav-item container-shopcart"><a href="cart.php" class=""><i class="fas fa-shopping-cart"></i><span id="cartCounter" class="bubble-notif3" style="display: none;">0</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <header class="main-header">

        <!-- Logo -->
        <a href="<?= site_url() ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>T</b>n<b>T</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b><?= $site['site_title'] ?></b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
            <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <?php $this->load->view('elements/flash_message'); ?>
            <?php $this->load->view($content); ?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong</strong>

    </footer>

    <div class="control-sidebar-bg"></div>

</div>
<?php $this->load->view('elements/kn_modal'); ?>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>assets/plugins/select2/select2.full.min.js"></script>

<!-- SlimScroll 1.3.0 -->
<script src="<?= base_url() ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/bootstrap-notify.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>

<script src="<?= base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/js/app.min.js"></script>

<?php if (!empty($add_js)): ?><?php foreach ($add_js as $js): ?>
    <script src="<?= $js ?>"></script> <?php endforeach; ?><?php endif; ?>
<script src="<?= base_url() ?>assets/js/kn.js"></script>
</body>
</html>