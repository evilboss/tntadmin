<div class="col product-item">
    <div class="card hovereffect" style="width: 14rem;">
        <div class="card-header product-item-header">
            <div class="row">
                <div class="col-sm">
                    <span class="badge badge-primary">Coming Soon</span>
                </div>
                <div class="col-sm">
                    <span class="text-right"><?= $item['id'] ?></span>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="corner"><span>NEW</span></div>
            <img class="card-img" src="https://place-hold.it/400x400" alt="Card image cap">
        </div>
        <div class="card-body info">
            <ul class="list-unstyled">
                <li><h6>Item name</h6></li>
                <li>Description</li>
                <li>Price</li>
            </ul>
        </div>


        <div class="overlay">
            <a class="info" data-toggle="modal" data-target="#itemModal-<?= $item['id'] ?>">Quick View</a>
        </div>

    </div>


    <!-- Modal -->
    <div class="modal fade product-modal" id="itemModal-<?= $item['id'] ?>" role="dialog"
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
                                <a href="https://place-hold.it/400x400" data-lightbox="gallery-<?= $item['id'] ?>"
                                   data-toggle="lightbox">
                                    <img src="https://place-hold.it/400x400" class="main-img img-fluid"
                                         alt="Responsive image">
                                </a>

                                <div class="row justify-content-center ">
                                    <div class="thumb-nails overflow-auto mt-2 owl-carousel owl-theme">
                                        <a href="https://unsplash.it/1200/768.jpg?image=251"
                                           data-lightbox="gallery-<?= $item['id'] ?>" class="col-sm-4">
                                            <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid">
                                        </a>
                                        <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox"
                                           data-lightbox="gallery-<?= $item['id'] ?>" class="col-sm-4">
                                            <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid">
                                        </a>
                                        <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox"
                                           data-lightbox="gallery-<?= $item['id'] ?>" class="col-sm-4">
                                            <img src="https://unsplash.it/600.jpg?image=253" class="img-fluid">
                                        </a>
                                        <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox"
                                           data-lightbox="gallery-<?= $item['id'] ?>" class="col-sm-4">
                                            <img src="https://unsplash.it/600.jpg?image=254" class="img-fluid">
                                        </a>
                                        <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox"
                                           data-lightbox="gallery-<?= $item['id'] ?>" class="col-sm-4">
                                            <img src="https://unsplash.it/600.jpg?image=255" class="img-fluid">
                                        </a>
                                        <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox"
                                           data-lightbox="gallery-<?= $item['id'] ?>" class="col-sm-4">
                                            <img src="https://unsplash.it/600.jpg?image=256" class="img-fluid">
                                        </a>

                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-6">
                                        <span class="badge badge-primary">Coming Soon</span>
                                        <span class="item-id"><?= $item['id'] ?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="text-bold">Product Description</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <label class="font-weight-bold">Product Type</label>
                                            <span class="">Product Type</span>

                                        </div>
                                        <div class="row">
                                            <label class="font-weight-bold">Brand Category</label>
                                            <span class="">Brand Category</span>

                                        </div>
                                        <div class="row">
                                            <label class="font-weight-bold">Brand</label>
                                            <span class="">Brand</span>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <label class="font-weight-bold">Manufacturer</label>
                                            <span class="">Manufacturer</span>

                                        </div>
                                        <div class="row">
                                            <label class="font-weight-bold">Manufacturer Ca</label>
                                            <span class="">Manufacturer Ca</span>
                                        </div>
                                        <div class="row">
                                            <label class="font-weight-bold">Item Weight</label>
                                            <span class="">Item Weight</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <nav>
                                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                                   href="#nav-details" role="tab" aria-controls="nav-home"
                                                   aria-selected="true">Details</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                   href="#nav-specs" role="tab" aria-controls="nav-profile"
                                                   aria-selected="false">Specs</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                            <div class="tab-pane fade show active text-wrap" id="nav-details"
                                                 role="tabpanel"
                                                 aria-labelledby="nav-home-tab">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially unchanged. It was popularised in the 1960s with the release
                                                of Letraset sheets containing Lorem Ipsum passages, and more recently
                                                with desktop publishing software like Aldus PageMaker including versions
                                                of Lorem Ipsum.


                                            </div>
                                            <div class="tab-pane fade text-wrap" id="nav-specs" role="tabpanel"
                                                 aria-labelledby="nav-profile-tab">
                                                <span class="text-wrap">
                                                    It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                letters, as opposed to using 'Content here, content here', making it
                                                look like readable English. Many desktop publishing packages and web
                                                page editors now use Lorem Ipsum as their default model text, and a
                                                search for 'lorem ipsum' will uncover many web sites still in their
                                                infancy. Various versions have evolved over the years, sometimes by
                                                accident, sometimes on purpose (injected humour and the like).
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

