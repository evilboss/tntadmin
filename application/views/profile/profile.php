<div class="content store-content">
    <div class="container">
        <div class="row mx-0">
            <?php $this->load->view("profile/sidebar"); ?>

            <div class="col-md-8 col-sm-12 col-lg-10  ">
                <div class="card">
                    <div class="card-header">
                        Profile
                    </div>
                    <div class="card-body">
                        <?php /*echo form_open(base_url("index.php/")) */ ?>
                        <div class="form-group">
                            <label>Name :</label>
                            <?php echo form_input("first_name", set_value("name", $user->first_name), array('class' => 'form-control')); ?>
                            <span class="effect1-line"></span>
                        </div>
                        <div class="form-group">
                            <label>Name :</label>
                            <?php echo form_input("last_name", set_value("name", $user->last_name), array('class' => 'form-control')); ?>
                            <span class="effect1-line"></span>
                        </div>

                        <div class="form-group">
                            <label>Email :</label>
                            <?php echo form_input("name", set_value("name", $user->email), array('class' => 'form-control')); ?>
                            <span class="effect1-line"></span>
                        </div>

                        <?php /*echo form_close() */ ?>

                    </div>
                </div>

            </div>
            <!--  <div class="col-md-4 col-sm-12">
                  <div class="card">
                      <div class="card-header">
                          Payment Summary
                      </div>
                      <div class="card-body">
                          <dl class="row">
                              <dt class="col-sm-3">Item 1</dt>
                              <dd class="col-sm-9">1000</dd>

                              <dt class="col-sm-3">Item 2</dt>
                              <dd class="col-sm-9">1000</dd>
                              <dt class="col-sm-3">Total</dt>
                              <dd class="col-sm-9">2000</dd>

                          </dl>

                      </div>
                  </div>

              </div>-->

        </div>

    </div>

</div>

