<section id="wrapper-footer" class="">
    <div class="dark-section">
        <div class="container text-white">
            <div class="row  header-wrapper">
                <div class="col-lg-3 col-md-12 col-sm-12 ">
                    <h3 class="mb-4">Facebook</h3>


                    <div class="fb-page" data-href="https://www.facebook.com/toyntoys" data-tabs="timeline"
                         data-width="" data-height="410" data-small-header="false" data-adapt-container-width="true"
                         data-hide-cover="false" data-show-facepile="true"
                         data-pin-scale-width="80"
                    >
                        <blockquote cite="https://www.facebook.com/toyntoys/" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/toyntoys/">Toyntoys</a></blockquote>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12"><h3 class="mb-4">Pinterest</h3>
                    <a data-pin-do="embedUser" data-adapt-container-width="true" data-height="410"
                       data-pin-scale-width="80" href="https://www.pinterest.ph/danny1272/"></a>
                </div>

                <div class="col-lg-3 col-md-12 col-sm-12"><h3 class="mb-4">Twitter</h3>
                    <a class="twitter-timeline" data-theme="dark"
                       data-height="410"
                       href="https://twitter.com/Toyntoys1?ref_src=twsrc%5Etfw">Tweets by Toyntoys1</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 ">
                    <h3 class="mb-4">Subscribe to our Newsletter</h3>
                    <?= form_open('/') ?>

                    <div class="row">
                        <div class="form-group col-lg-8 col-md-12">
                            <?= form_input('email', '', ['class' => 'form-control w-100', 'placeholder' => 'Enter Your Email']) ?>


                        </div>
                        <div class="col-lg-4 col-md-12">
                            <button class="btn btn-yellow">Subscribe</button>

                        </div>
                        <div class="col-sm-12 mt-5">
                            <img class="img-fluid" src="<?= base_url('assets/images/mvp.png') ?>"
                        </div>
                    </div>
                    <?= form_close() ?>
                </div>

            </div>
        </div>
    </div>
    <div class="gray-section">
        <div class="container text-white" style="">
            <p class="copyright-text">Copyright © 2020 ToyNToys. All rights reserved</p>

        </div>
    </div>


</section>
<script async defer type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>

<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: 'your-app-id',
            autoLogAppEvents: true,
            xfbml: true,
            version: 'v8.0'
        });
    };
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>


</body>
</html>
