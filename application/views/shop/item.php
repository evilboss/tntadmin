<div class="col product-item item ">
    <div class="card hovereffect <?= (isset($isDark) && $isDark) ? 'dark-item' : '' ?>">
        <div class="card-header product-item-header <?= (isset($isDark) && $isDark) ? 'dark-item' : '' ?>">
            <div class="row">
                <div class="col-sm">
                    <span class="badge product-badge product-badge-left <?= $item->status ?>">
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
            <div class="product-type <?= $item->status ?>"><?= $item->brandName ?></div>
        </div>
        <div class="card-body info">
            <ul class="list-unstyled">
                <li><h6 class="text-truncate lato-regular-20"><?= $item->name; ?></h6></li>
                <li class="manufacturerCategoryText"><?= $item->manufacturerName; ?></li>
                <li class="lato-regular-20"> <?= $item->price ? "$ $item->price" : ""; ?></li>
            </ul>
        </div>


        <div class="overlay">
            <a class="info" data-toggle="modal" data-target="#itemModal-<?= $item->id ?>">Quick View</a>
        </div>

    </div>
</div>

<!-- Modal -->

