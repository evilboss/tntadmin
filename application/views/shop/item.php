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

        <div class="card-body product-body">
            <?= $item->isNew ?
                "<div class=\"corner $item->status-corner\"><span>NEW</span></div>" : ''
            ?>
            <img class="card-img product-img" src="<?= base_url("/images/products/$item->cover_image") ?>"
                 alt="Card image cap">
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
                    <?php $this->load->view('shop/itemDetail'); ?>
                </div>

            </div>
        </div>
    </div>

</div>

