<?php print_r($featuredItems) ?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner store-carousel">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://place-hold.it/1920x500?auto=yes" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://place-hold.it/1920x500?auto=yes"
                 alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://place-hold.it/1920x500?auto=yes" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<section class="light-gray-section item-container">
    <div class="container">
        <div class="row">
            <h3>Featured Products</h3>
        </div>
    </div>
    <div class="product-container container">
        <?php
        foreach ($featuredItems as $item) {
            $data['item'] = $item;
            $this->load->view('shop/item', $data);
        }
        ?>

    </div>


</section>
<section class="dark-section item-container">
    <div class="container">

        <h3 class="text-white">Special Deals</h3>
        <div class="row product-container container-fluid">

        </div>


    </div>
</section>

<section class="light-gray-section item-container">
    <div class="container">
        <h3>Best Seller</h3>
    </div>
</section>
<div id="blogCarousel" class="carousel slide" data-ride="carousel">
    <div class="container">
        <h3>Headline</h3>
    </div>

    <div class="carousel-inner store-carousel">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://place-hold.it/1920x500?auto=yes" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://place-hold.it/1920x500?auto=yes"
                 alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://place-hold.it/1920x500?auto=yes" alt="Third slide">
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
    </div>
</section>

