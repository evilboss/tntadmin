<script src="<?= base_url('assets/libs/jquery.countdown-2.2.0/jquery.countdown.min.js') ?>"></script>
<div id="bannerCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php
        $bannerCounter = 0;
        if (isset($banners)) {
            foreach ($banners as $key => $slide) {
                reset($slide);
                if ($key === key($banners))
                    echo 'FIRST ELEMENT!';

                ?>

                <div class="carousel-item <?php if ($key === key($banners))
                    echo 'active' ?>">
                    <img class="d-block w-100" src="<?= base_url("images/products/$slide->banner") ?>"
                         alt="<?= $slide->name ?>">
                </div>

                <?php
            }

        }
        ?>
        <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<section class="light-gray-section item-container">

    <div class="container">
        <div class="row mx-3">
            <h3><?= isset($containerText) ? $containerText : "Featured Products" ?></h3>
        </div>
    </div>
    <div class="product-container owl-carousel owl-theme container">
        <?php
        foreach ($featuredItems as $item) {
            $data['item'] = $item;
            ?>
            <?php $this->load->view('shop/item', $data); ?>
            <?php
        }
        ?>
    </div>
    <?php foreach ($featuredItems as $item) {
        $data['item'] = $item;
        ?>
        <?php $this->load->view('shop/itemModal', $data); ?>

        <?php

    }
    ?>


</section>

<?php if (isset($deal)): ?>


    <?php if (isset($specialDeals) && !empty($specialDeals)): ?>
        <section class="dark-section item-container">
            <div class="deals-header">

                <div class="container">
                    <div class="row mx-3">
                        <div class="col-md-4">
                            <h3 class="text-white">Special Deals</h3>

                        </div>
                        <div class="col-md-4 clock-container" style="text-align: center">
                            <div id="clock"></div>

                        </div>
                        <div class="col-md-4" style="text-align: right">
                            <button class="btn dark text-white">View All</button>

                        </div>

                    </div>
                </div>
            </div>

            <div class="product-container owl-carousel owl-theme container">
                <?php
                foreach ($specialDeals as $item) {
                    $data['item'] = $item;
                    $data['isDark'] = true;
                    $this->load->view('shop/item', $data);
                } ?>
            </div>
            <?php
            foreach ($specialDeals as $item) {
                $data['item'] = $item;
                $data['isDark'] = true;
                $this->load->view('shop/itemModal', $data);
            } ?>


        </section>

    <?php endif; ?>
<?php endif; ?>
<section class="light-gray-section item-container">

    <div class="container">
        <div class="row mx-3">
            <h3>Best Seller</h3>
        </div>
    </div>
    <div class="product-container owl-carousel owl-theme container">
        <?php
        foreach ($featuredItems as $item) {
            $data['item'] = $item;
            $data['isDark'] = false;

            ?>
            <?php $this->load->view('shop/item', $data); ?>
            <?php
        }
        ?>
    </div>
    <?php foreach ($featuredItems as $item) {
        $data['item'] = $item;
        ?>
        <?php $this->load->view('shop/itemModal', $data); ?>

        <?php

    }
    ?>


</section>

<?php if (isset($displayBlog)): ?>
    <div id="blogCarousel" class="carousel slide" data-ride="carousel">
        <div class="container">
            <h3>Headline</h3>
        </div>

        <div class="carousel-inner store-carousel">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?= base_url('images/blog/blogbanner.jpg') ?>" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('images/blog/2_blogbanner.jpg') ?>"
                     alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('images/blog/3_blogbanner.jpg') ?>" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#blogCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#blogCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section class="light-gray-section">
        <div class="container">
            <h3>Blog Post</h3>
        </div>
        <div class="container">
            <div class="card-group blog-card-container">
                <div class="card blog-container">
                    <img class="card-img-top" src="<?= base_url('images/blog/1_bthumbnail.jpg') ?>"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Blog 1 title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card blog-container">
                    <img class="card-img-top" src="<?= base_url('images/blog/2_bthumbnail.jpg') ?>"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Blog 2 title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card blog-container">
                    <img class="card-img-top" src="<?= base_url('images/blog/3_bthumbnail.jpg') ?>"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Blog 3 title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional
                            content. This card has even longer content than the first to show that equal height
                            action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>

        </div>

    </section>

<?php endif; ?>
<script>
    const timer = <?=isset($deal) && isset($deal->end) ? strtotime($deal->end) : '""'?>;
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            autoWidth: true
        });
        $('.slider').owlCarousel({
            center: true,
            items: 4,
            loop: true,
            margin: 10,
        });

        $('.blog-carousel').owlCarousel({
            smartSpeed: 650,
            margin: 50,
            center: true,
            responsiveClass: true,
            autoWidth: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                }
            }

        });
        if (timer) {
            $('#clock').countdown(new Date(timer * 1000), function (event) {
                const $this = $(this).html(event.strftime(`
                        <div class="text-amber">
                                <span>
                                    <span>%d:</span>
                                    <span class="clock-text">DAYS</span>
                                </span>
                                <span>
                                <span>%H:</span>
                                <span class="clock-text">HRS</span>
                                </span>
                                <span>
                                <span>%M:</span>
                                <span class="clock-text">MINS|</span>
                                </span>
                                <span>

                                    <span>%S</span>
                                <span class="clock-text">SECS</span>
                                </span>
                                </div>`));
            });
        }


    });

</script>
