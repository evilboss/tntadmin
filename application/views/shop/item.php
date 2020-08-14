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
            <img class="card-img product-img" src="<?= base_url("/images/products/$item->thumbnail") ?>"
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
</div>

<!-- Modal -->

