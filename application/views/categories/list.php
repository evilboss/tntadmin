<?php $this->load->view('categories/navbar'); ?>
<!-- Content page -->
<div class="container">
    <?php if (isset($brands) && !empty($brands)) {
        echo "Brands";
        echo "<div class='row'>";
        foreach ($brands as $brand) {
            /* echo "<pre>";
             print_r($genre);

             echo "</pre>";*/
            ?>

            <div class="col-2">
                <a href="<?php echo base_url("categories/$brand->id"); ?>">
                    <div class="card" style="">
                        <img src="<?= ($brand->cover_image) ? base_url() . "/images/categories/" . $brand->cover_image : 'https://via.placeholder.com/100x50' ?>"
                             class="card-img-top img-thumbnail" alt="<?= $brand->name ?>">
                    </div>
                </a>
            </div>

            <?php
        }
        echo "</div>";
    } ?>
    <?php if (isset($manufacturers) && !empty($manufacturers)) {
        echo "Manufacturers";
        echo "<div class=\"row\">";
        foreach ($manufacturers as $brand) {
            /* echo "<pre>";
             print_r($genre);

             echo "</pre>";*/
            ?>

            <div class="col-2">
                <a href="<?php echo base_url("categories/$brand->id"); ?>">
                    <div class="card" style="">
                        <img src="<?= ($brand->cover_image) ? base_url() . "/images/categories/" . $brand->cover_image : 'https://via.placeholder.com/100x50' ?>"
                             class="card-img-top img-thumbnail" alt="<?= $brand->name ?>">
                    </div>
                </a>
            </div>

            <?php
        }
        echo "</div>";
    } ?>
    <?php if (isset($productTypes) && !empty($productTypes)) {
        echo "Product Types";
        echo "<div class='row'>";
        foreach ($productTypes as $brand) {
            /* echo "<pre>";
             print_r($genre);

             echo "</pre>";*/
            ?>

            <div class="col-2">
                <a href="<?php echo base_url("categories/$brand->id"); ?>">
                    <div class="card" style="">
                        <img src="<?= ($brand->cover_image) ? base_url() . "/images/categories/" . $brand->cover_image : 'https://via.placeholder.com/100x50' ?>"
                             class="card-img-top img-thumbnail" alt="<?= $brand->name ?>">
                    </div>
                </a>
            </div>

            <?php
        }
        echo "</div>";
    } ?>
    <?php if (isset($genres) && !empty($genres)) {
        echo "<h3>Genre</h3>";
        echo "<div class='row'>";
        foreach ($genres as $genre) {
            /* echo "<pre>";
             print_r($genre);

             echo "</pre>";*/
            ?>

            <div class="col-2">
                <a href="<?php echo base_url("categories/$genre->id"); ?>">
                    <div class="card" style="">
                        <img src="<?= ($genre->cover_image) ? base_url() . "/images/categories/" . $genre->cover_image : 'https://via.placeholder.com/100x50' ?>"
                             class="card-img-top img-thumbnail" alt="<?= $genre->name ?>">
                    </div>
                </a>
            </div>

            <?php
        }
        echo "</div>";
    } ?>
    <?php if (isset($category) && !empty($category)) {
        ?>
        <div class="product-container-row">
            <?php
            foreach ($products as $item) {
                $data['item'] = $item;
                $this->load->view('shop/item', $data);
                $this->load->view('shop/itemModal', $data);
            }

            ?>
        </div>
        <?php


    } ?>
</div>


<!-- Back to top -->


<!-- Container Selection -->
