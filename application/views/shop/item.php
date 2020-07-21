<div class="col product-item">
    <div class="card hovereffect" style="width: 14rem;height:auto">
        <div class="card-header product-item-header">
            <div class="row">
                <div class="col-sm">
                    <span class="badge <?= $item->status ?>">


                        <?= $item->status ? implode(' ', explode('-', $item->status)) : '' ?>
                    </span>
                </div>
                <div class="col-sm">
                    <span class="text-right"><?= $item->productCode ?></span>
                </div>
            </div>
        </div>

        <div class="card-body">
            <?= $item->isNew ?
                "<div class=\"corner $item->status-corner\"><span>NEW</span></div>" : ''
            ?>
            <img class="card-img product-img" src="https://place-hold.it/400x400" alt="Card image cap">
            <div class="product-type <?= $item->status ?>"><?= $item->productTypeName ?></div>
        </div>
        <div class="card-body info">
            <ul class="list-unstyled">
                <li><h6><?= $item->name; ?></h6></li>
                <li><?= $item->price; ?></li>
            </ul>
        </div>


        <div class="overlay">
            <a class="info" data-toggle="modal" data-target="#itemModal-<?= $item->id ?>">Quick View</a>
        </div>

    </div>


    <!-- Modal -->
    <div class="modal fade product-modal" id="itemModal-<?= $item->id ?>" role="dialog"
         aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <button type="button" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
                <div class="modal-body">


                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <a href="https://place-hold.it/400x400" data-lightbox="gallery-<?= $item->id ?>"
                                   data-toggle="lightbox">
                                    <img src="https://place-hold.it/400x400" class="main-img img-fluid"
                                         alt="Responsive image">
                                </a>

                                <div class="row justify-content-center ">
                                    <div class="thumb-nails overflow-auto mt-2 jr-carousel owl-theme">
                                        <a href="https://unsplash.it/1200/768.jpg?image=251"
                                           data-lightbox="gallery-<?= $item->id ?>" class="col-sm-4">
                                            <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid">
                                        </a>
                                        <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox"
                                           data-lightbox="gallery-<?= $item->id ?>" class="col-sm-4">
                                            <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid">
                                        </a>
                                        <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox"
                                           data-lightbox="gallery-<?= $item->id ?>" class="col-sm-4">
                                            <img src="https://unsplash.it/600.jpg?image=253" class="img-fluid">
                                        </a>
                                        <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox"
                                           data-lightbox="gallery-<?= $item->id ?>" class="col-sm-4">
                                            <img src="https://unsplash.it/600.jpg?image=254" class="img-fluid">
                                        </a>
                                        <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox"
                                           data-lightbox="gallery-<?= $item->id ?>" class="col-sm-4">
                                            <img src="https://unsplash.it/600.jpg?image=255" class="img-fluid">
                                        </a>
                                        <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox"
                                           data-lightbox="gallery-<?= $item->id ?>" class="col-sm-4">
                                            <img src="https://unsplash.it/600.jpg?image=256" class="img-fluid">
                                        </a>


                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-6">
                                        <span class="badge <?= $item->status ?> "><?= $item->status ? implode(' ', explode('-', $item->status)) : '' ?></span>
                                        <span class="item-id"><?= $item->productCode ?></span>
                                    </div>
                                </div>

                                <h5><?= $item->name ?> </h5>
                                <div class="row desc">
                                    <div class="col-6">
                                        <div>
                                            <label class="font-weight-bold">Product Type</label>
                                            <span class="">Product Type</span>

                                        </div>
                                        <div>
                                            <label class="font-weight-bold">Brand Category</label>
                                            <span class=""><?= $item->brandName ?></span>

                                        </div>
                                        <div>
                                            <label class="font-weight-bold">Brand</label>
                                            <span class=""><?= $item->brandName ?></span>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label class="font-weight-bold">Manufacturer</label>
                                            <span class="">Manufacturer</span>

                                        </div>
                                        <div>
                                            <label class="font-weight-bold">Manufacturer Ca</label>
                                            <span class="">Manufacturer Ca</span>
                                        </div>
                                        <div>
                                            <label class="font-weight-bold">Item Weight</label>
                                            <span class=""><?= $item->weight ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="details-container">
                                            <div class="price">
                                                <span>Deposit: <?= $item->poPrice ?></span>
                                                <h3>$<?= $item->spPrice ?></h3>
                                                <span class="prev-amt">$<?= $item->price ?></span>
                                            </div>
                                            <div class="price-actions">
                                                <button type="button" class="btn btn-outline-secondary btn-number"
                                                        disabled="disabled" data-type="minus" data-field="quant[1]">
                                                    <i class="fa fa-minus-circle"></i>
                                                </button>
                                                <input type="text" name="quant[1]"
                                                       class="form-control input-number item-quantity"
                                                       value="1" min="1" max="10"/>
                                                <button type="button" class="btn btn-outline-secondary btn-number"
                                                        data-type="plus" data-field="quant[1]"><i
                                                            class="fa fa-plus-circle"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 actions">

                                        <?php echo form_open(base_url('add-to-cart')) ?>
                                        <input name="id" type="hidden" value="<?= $item->id ?>">
                                        <button class="btn btn-outline-primary" type="submit"><i
                                                    class="fa fa-shopping-cart"></i> Add To cart
                                        </button>
                                        <?php echo form_close(); ?>


                                        <?php echo form_open(base_url('add-to-cart')) ?>
                                        <input name="id" type="hidden" value="<?= $item->id ?>">
                                        <button class="btn btn-primary" type="submit">Buy Now</button>

                                        <?php echo form_close(); ?>

                                        <button class="button btn-secondary"><i class="fa fa-heart"></i>
                                        </button>
                                        <button class="btn btn-secondary">
                                            <i class="fa fa-share-alt" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <div class="col-12"
                                         style="visibility:  <?php if (empty($item->releaseDate)) {
                                             echo "hidden";
                                         } else {
                                             echo "visible";
                                         } ?>"
                                    >

                                        <span class="release-date"><i
                                                    class="fa fa-calendar"
                                                    aria-hidden="true"></i> Release date <?= $item->releaseDate ?></span>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <nav>
                                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-details-tab"
                                                   data-toggle="tab"
                                                   href="#nav-details" role="tab" aria-controls="nav-details"
                                                   aria-selected="true">Details</a>
                                                <a class="nav-item nav-link" id="nav-specs-tab"
                                                   data-toggle="tab"
                                                   href="#nav-specs" role="tab" aria-controls="nav-specs"
                                                   aria-selected="false">Specs</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active text-wrap" id="nav-details"
                                                 role="tabpanel"
                                                 aria-labelledby="nav-details-tab">
                                                <?= $item->summary ?>


                                            </div>
                                            <div class="tab-pane fade text-wrap" id="nav-specs" role="tabpanel"
                                                 aria-labelledby="nav-specs-tab">
                                                <span class="text-wrap">
                                                </span>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

