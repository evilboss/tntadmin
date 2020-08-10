<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#card"
        aria-expanded="false" aria-controls="collapseExample">
    Pay with Card
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#paynow"
            aria-expanded="false" aria-controls="collapseExample">
        Pay with Paynow
    </button>
</button>

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="paynow-tab" data-toggle="tab" href="#paynow" role="tab"
           aria-controls="paynow" aria-selected="true">Paynow</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#card" role="tab" aria-controls="card"
           aria-selected="false">Card Payment</a>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="paynow" role="tabpanel" aria-labelledby="paynow-tab">

        Pay with paynow scan qr code
        add this as the referene code
        <img src="<?= base_url('assets/images/qr-tnt.jpeg') ?>">

    </div>
    <div class="tab-pane" id="card" role="tabpanel" aria-labelledby="profile-tab">Card Payment</div>
</div>
