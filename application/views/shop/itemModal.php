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
