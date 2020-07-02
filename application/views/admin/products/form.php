<fieldset>
    <div class="col col-lg-12">
        <div class="col col-lg-4">
            <div class="form-group<?php echo (form_error('productCode')) ? ' has-error' : ''; ?>">
                <label for="name">Product Code *</label>
                <?php echo form_input('productCode', (isset($record)) ? set_value("productCode", $record->productCode) : set_value("productCode"), array('class' => 'form-control', 'placeholder' => 'Product Code', 'id' => 'productCode')); ?>
                <?php echo form_error('productCode', '<span class="help-block">', '</span>') ?>
            </div>
            <div class="form-group<?php echo (form_error('name')) ? ' has-error' : ''; ?>">
                <label for="name">Name *</label>
                <?php echo form_input('name', (isset($record)) ? set_value("name", $record->name) : set_value("name"), array('class' => 'form-control', 'placeholder' => 'Product name', 'id' => 'name')); ?>
                <?php echo form_error('name', '<span class="help-block">', '</span>') ?>
            </div>
            <div class="form-group<?php echo (form_error('brand_id')) ? ' has-error' : ''; ?>">
                <label for="category_id">Brand *</label>
                <!--  <?php
                /*                $select_categories = array();
                                foreach ($categories as $category) {
                                    $select_categories[$category['id']] = $category['name'];
                                } */ ?>
                <?php /*echo form_dropdown('category_id', array('' => 'Select') + $select_categories, (isset($record)) ? set_value("category_id", $record->category_id) : set_value("category_id"), array('class' => 'form-control', 'placeholder' => '5000', 'id' => 'category_id')); */ ?>
                --><?php /*echo form_error('category_id', '<span class="help-block">', '</span>') */ ?>
                TO BE ADDED
            </div>
            <div class="form-group<?php echo (form_error('brand_id')) ? ' has-error' : ''; ?>">
                <label for="category_id">Product Type *</label>
                <!--  <?php
                /*                $select_categories = array();
                                foreach ($categories as $category) {
                                    $select_categories[$category['id']] = $category['name'];
                                } */ ?>
                <?php /*echo form_dropdown('category_id', array('' => 'Select') + $select_categories, (isset($record)) ? set_value("category_id", $record->category_id) : set_value("category_id"), array('class' => 'form-control', 'placeholder' => '5000', 'id' => 'category_id')); */ ?>
                --><?php /*echo form_error('category_id', '<span class="help-block">', '</span>') */ ?>
                TO BE ADDED
            </div>

            <div class="form-group<?php echo (form_error('category_id')) ? ' has-error' : ''; ?>">
                <label for="category_id">Category *</label>
                <?php
                $select_categories = array();
                foreach ($categories as $category) {
                    $select_categories[$category['id']] = $category['name'];
                } ?>
                <?php echo form_dropdown('category_id', array('' => 'Select') + $select_categories, (isset($record)) ? set_value("category_id", $record->category_id) : set_value("category_id"), array('class' => 'form-control', 'placeholder' => '5000', 'id' => 'category_id')); ?>
                <?php echo form_error('category_id', '<span class="help-block">', '</span>') ?>
            </div>


        </div>

        <div class="col col-lg-4">
            <div class="form-group<?php echo (form_error('price')) ? ' has-error' : ''; ?>">
                <label for="price">Price *</label>
                <input name="price" id="price" type="number" min="0" class="form-control"
                       value="<?= (isset($record) ? $record->price : '') ?>"/>
                <?php echo form_error('price', '<span class="help-block">', '</span>') ?>
            </div>
            <div class="form-group<?php echo (form_error('cover_image')) ? ' has-error' : ''; ?>">
                <label for="cover_image">Cover Image *</label>
                <input type="file" name="cover_image" class="form-control" id="cover_image"/>
                <?php echo form_error('cover_image', '<span class="help-block">', '</span>') ?>
            </div>
            <div class="form-group<?php echo (form_error('images[]')) ? ' has-error' : ''; ?>">
                <label for="images">images *</label>
                <input type="file" name="images[]" class="form-control" multiple="multiple"/>
                <?php echo form_error('images[]', '<span class="help-block">', '</span>') ?>
            </div>
            <div class="form-group<?php echo (form_error('active')) ? ' has-error' : ''; ?>">
                <label>Active * &nbsp </label>

                <label class="radio-inline">
                    <?php echo form_radio('active', 1, (isset($record)) ? $record->active : true, array()); ?>Yes
                </label>

                <label class="radio-inline">
                    <?php echo form_radio('active', 0, (isset($record) && $record->active == 0) ? true : false, array()); ?>
                    No
                </label>
                <?php echo form_error('active', '<span class="help-block">', '</span>') ?>
            </div>
            <div class="form-group<?php echo (form_error('webItem')) ? ' has-error' : ''; ?>">
                <label>Web Item * &nbsp </label>

                <label class="radio-inline">
                    <?php echo form_radio('webItem', 1, (isset($record)) ? $record->webItem : true, array()); ?>Yes
                </label>

                <label class="radio-inline">
                    <?php echo form_radio('webItem', 0, (isset($record) && $record->webItem == 0) ? true : false, array()); ?>
                    No
                </label>
                <?php echo form_error('webItem', '<span class="help-block">', '</span>') ?>
            </div>
        </div>
        <div class="col col-lg-4">

            <div class="form-group">
                <label>Pre Order Start:</label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="preorderStart" class="form-control pull-right datepicker" id="preorderStart">
                </div>
                <!-- /.input group -->
            </div>
            <label>Pre Order End:</label>
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input type="text" name="preOrderEnd" class="form-control pull-right datepicker" id="preOrderEnd">
            </div>
        </div>


    </div>
    <div class="col col-lg-12">

        <div class="col col-lg-6">

            <div class="form-group<?php echo (form_error('description')) ? ' has-error' : ''; ?>">
                <label for="description">Description *</label>
                <?php echo form_textarea('description', (isset($record)) ? set_value("description", $record->description) : set_value("description"), array('class' => 'form-control', 'placeholder' => 'Description', 'id' => 'description')); ?>
                <?php echo form_error('description', '<span class="help-block">', '</span>') ?>

            </div>


        </div>
        <div class="col col-lg-6">
            <div class="form-group<?php echo (form_error('summary')) ? ' has-error' : ''; ?>">
                <label for="description">Summary *</label>
                <?php echo form_textarea('summary', (isset($record)) ? set_value("summary", $record->description) : set_value("description"), array('class' => 'form-control', 'placeholder' => 'Description', 'id' => 'description')); ?>
                <?php echo form_error('summary', '<span class="help-block">', '</span>') ?>

            </div>


        </div>
</fieldset>
<script>
    $(() => {
        //Date picker
        $('.datepicker').datepicker({
            autoclose: true
        })
    })
</script>
