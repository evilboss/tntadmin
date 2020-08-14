<div class="content store-content">

    <div class="row">
        <?php $this->load->view("profile/sidebar"); ?>

        <div class="col-md-10 col-sm-12 col-lg-10  ">
            <div class="card">
                <div class="card-title">
                    Request Product Return
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="https://place-hold.it/200x200"/>
                        </div>
                        <div class="col-sm-10">
                            <dt class="col-sm-12"><?= $product->name ?></dt>
                            <dd class="col-sm-12">
                                <dl class="row">
                                    <dt class="col-sm-4">Nested definition list</dt>
                                    <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit
                                        nunc.
                                    </dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-sm-4">Nested definition list</dt>
                                    <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit
                                        nunc.
                                    </dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-sm-4">Nested definition list</dt>
                                    <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit
                                        nunc.
                                    </dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-sm-4">Nested definition list</dt>
                                    <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit
                                        nunc.
                                    </dd>
                                </dl>
                            </dd>


                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <?php echo form_open(); ?>
                            <div class="form-group">
                                <label for="reason">Reason</label>

                                <?php echo form_dropdown('reason', '', '', array('class' => 'form-control select2-multiple')) ?>

                            </div>
                            <div class="form-group">
                                <label for="solution">Solution</label>

                                <?php echo form_dropdown('solution', '', '', array('class' => 'form-control select2-multiple')) ?>

                            </div>
                            <div class="form-group">
                                <label for="description">Describe the problem</label>

                                <?php echo form_textarea('description', '', array('class' => 'form-control')) ?>

                            </div>
                            <?php echo form_close() ?>
                        </div>
                        <div class="col-md-4">
                            <?php $this->load->view("profile/upload_form"); ?>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</div>
<script>
    $(function () {
        $(".select2-multiple").select2({
            tags: true,
            containerCssClass: 'form-control'
        });

    });


</script>

