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
        <div class="row">
            <h3>Featured Products</h3>
        </div>

    </div>
    <div class="carousel-wrap">

        <div class="product-container container owl-carousel owl-theme">

            <?php
            foreach ($featuredItems

                     as $item) {
                $data['item'] = $item;
                ?>
                <?php $this->load->view('shop/item', $data); ?>

                <?php

            }
            ?>
        </div>
        <?php
        foreach ($featuredItems

                 as $item) {
            $data['item'] = $item;
            ?>
            <?php $this->load->view('shop/itemModal', $data); ?>

            <?php

        }
        ?>


</section>
<!--<section class="dark-section item-container">
    <div class="container">

        <h3 class="text-white">Special Deals</h3>
        <div class="row product-container container-fluid">

        </div>


    </div>
</section>-->

<!--<section class="light-gray-section item-container">
    <div class="container">
        <h3>Best Seller</h3>
    </div>
</section>-->
<div id="blogCarousel" class="carousel slide" data-ride="carousel">
    <div class="container">
        <h3>Headline</h3>
    </div>

    <div class="carousel-inner store-carousel">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?= base_url('images/blog/blogbanner.jpg') ?>" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url('images/blog/blogbanner.jpg') ?>"
                 alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url('images/blog/blogbanner.jpg') ?>" alt="Third slide">
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

<section class="light-gray-section item-container">
    <div class="container">
        <h3>Blog post</h3>
        <div class="carousel-wrap">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="<?= base_url('images/blog/1_bthumbnail.jpg') ?>"/>
                    <span class="img-text">Back to the future</span>
                </div>
                <div class="item">
                    <img src="<?= base_url('images/blog/2_bthumbnail.jpg') ?>"/>
                    <span class="img-text">Home Alone</span>
                </div>
                <div class="item">
                    <img src="<?= base_url('images/blog/3_bthumbnail.jpg') ?>"/>
                    <span class="img-text">Jaws</span>
                </div>

            </div>

        </div>

    </div>
</section>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            margin: 20,
            nav: true,
            smartSpeed: 650,
            items: 4,
            navigationText: [
                "<i class='icon-chevron-left icon-white'><</i>",
                "<i class='icon-chevron-right icon-white'>></i>"
            ],

            navText: [
                '<div class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
                '<div class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>']
        });
    });

</script>
