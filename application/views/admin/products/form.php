<fieldset>
    <div class="col col-lg-12">
        <div class="col col-lg-4">
            <div class="form-group<?php echo (form_error('active')) ? ' has-error' : ''; ?>">
                <label>Active * &nbsp </label>

                <label class="radio-inline">
                    <?php echo form_radio('active', 1, (isset($record->active)) ? $record->active : true, array()); ?>
                    Yes
                </label>

                <label class="radio-inline">
                    <?php echo form_radio('active', 0, (isset($record->active) && $record->active == 0) ? true : false, array()); ?>
                    No
                </label>
                <?php echo form_error('active', '<span class="help-block">', '</span>') ?>
            </div>
            <div class="form-group<?php echo (form_error('webItem')) ? ' has-error' : ''; ?>">
                <label>Web Item * &nbsp </label>

                <label class="radio-inline">
                    <?php echo form_radio('webItem', 1, (isset($record->webItem)) ? $record->webItem : true, array()); ?>
                    Yes
                </label>

                <label class="radio-inline">
                    <?php echo form_radio('webItem', 0, (isset($record->webItem) && $record->webItem == 0) ? true : false, array()); ?>
                    No
                </label>
                <?php echo form_error('webItem', '<span class="help-block">', '</span>') ?>
            </div>
            <div class="form-group<?php echo (form_error('recomended')) ? ' has-error' : ''; ?>">
                <label>Recomended * &nbsp </label>

                <label class="radio-inline">
                    <?php echo form_radio('recomended', 1, (isset($record->recomended)) ? $record->recomended : true, array()); ?>
                    Yes
                </label>

                <label class="radio-inline">
                    <?php echo form_radio('recomended', 0, (isset($record->recomended) && $record->recomended == 0) ? true : false, array()); ?>
                    No
                </label>
                <?php echo form_error('recomended', '<span class="help-block">', '</span>') ?>
            </div>

            <div class="col col-lg-6">
            </div>
            <div class="form-group<?php echo (form_error('productCode')) ? ' has-error' : ''; ?>">
                <label for="name">Product Code *</label>
                <?php echo form_input('productCode', (isset($record->productCode)) ? set_value("productCode", $record->productCode) : set_value("productCode"), array('class' => 'form-control', 'placeholder' => 'Product Code', 'id' => 'productCode')); ?>
                <?php echo form_error('productCode', '<span class="help-block">', '</span>') ?>
            </div>
            <div class="form-group<?php echo (form_error('name')) ? ' has-error' : ''; ?>">
                <label for="name">Name *</label>
                <?php echo form_input('name', (isset($record->name)) ? set_value("name", $record->name) : set_value("name"), array('class' => 'form-control', 'placeholder' => 'Product name', 'id' => 'name')); ?>
                <?php echo form_error('name', '<span class="help-block">', '</span>') ?>
            </div>
            <div class="form-group<?php echo (form_error('price')) ? ' has-error' : ''; ?>">
                <label for="price">Retail Price *</label>

                <input name="price" id="price" type="number" min="0" class="form-control" value=
                    <?= isset($record) ? is_object($record) ? isset($record->price) ? $record->price : '' : floatval($record['price']) : '' ?>/>
                <?php echo form_error('price', '<span class="help-block">', '</span>') ?>
            </div>
            <div class="col col-lg-6">
                <div class="form-group<?php echo (form_error('manufacturerId')) ? ' has-error' : ''; ?>">
                    <label for="manufacturerId">Manufacturer *</label>

                    <?php
                    $select_manufacturers = array();
                    foreach ($manufacturers as $manufacturer) {
                        $select_manufacturers[$manufacturer['id']] = $manufacturer['name'];
                    } ?>
                    <?php echo form_dropdown('manufacturerId', array('' => 'Select') + $select_manufacturers, (isset($record->manufacturerId)) ? set_value("manufacturerId", $record->manufacturerId) : set_value("manufacturerId"), array('class' => 'form-control', 'placeholder' => '5000', 'id' => 'manufacturerId')); ?>
                    <?php echo form_error('manufacturerId', '<span class="help-block">', '</span>') ?>            </div>

            </div>
            <div class="col col-lg-6">
                <div class="form-group<?php echo (form_error('brand_id')) ? ' has-error' : ''; ?>">
                    <label for="brand_id">Brand *</label>
                    <?php
                    $select_Brands = array();
                    foreach ($brands as $brand) {
                        $select_Brands[$brand['id']] = $brand['name'];
                    } ?>
                    <?php echo form_dropdown('brandId', array('' => 'Select') + $select_Brands, (isset($record->brandId)) ? set_value("brandId", $record->brandId) : set_value("brandId"), array('class' => 'form-control', 'placeholder' => '5000', 'id' => 'brandId')); ?>
                    <?php echo form_error('brandId', '<span class="help-block">', '</span>') ?>
                </div>
            </div>
            <div class="col col-lg-6">
                <div class="form-group<?php echo (form_error('productType')) ? ' has-error' : ''; ?>">
                    <label for="productType_id">Product Type *</label>

                    <?php
                    $select_productType = array();
                    foreach ($productTypes as $productType) {
                        $select_productType[$productType['id']] = $productType['name'];
                    } ?>
                    <?php echo form_dropdown('productTypeId', array('' => 'Select') + $select_productType, (isset($record->productTypeId)) ? set_value("productType_id", $record->productTypeId) : set_value("productTypeId"), array('class' => 'form-control', 'placeholder' => '5000', 'id' => 'productTypeId')); ?>
                    <?php echo form_error('productTypeId', '<span class="help-block">', '</span>') ?>            </div>

            </div>
            <div class="col col-lg-6">
                <div class="form-group<?php echo (form_error('category_id')) ? ' has-error' : ''; ?>">
                    <label for="category_id">Category *</label>
                    <?php
                    $select_categories = array();
                    foreach ($categories as $category) {
                        $select_categories[$category['id']] = $category['name'];
                    } ?>
                    <?php echo form_dropdown('category_id', array('' => 'Select') + $select_categories, (isset($record->category_id)) ? set_value("category_id", $record->category_id) : set_value("category_id"), array('class' => 'form-control', 'placeholder' => '5000', 'id' => 'category_id')); ?>
                    <?php echo form_error('category_id', '<span class="help-block">', '</span>') ?>
                </div>

            </div>
            <div class=" form-group<?php echo (form_error('cover_image')) ? ' has-error' : ''; ?>">
                <label for="cover_image">Cover Image *</label>
                <input type="file" name="cover_image" class="form-control" id="cover_image"/>
                <?php echo form_error('cover_image', '<span class="help-block">', '</span>') ?>
            </div>
            <div class="form-group<?php echo (form_error('images[]')) ? ' has-error' : ''; ?>">
                <label for="images">images *</label>
                <input type="file" name="images[]" class="form-control" multiple="multiple"/>
                <?php echo form_error('images[]', '<span class="help-block">', '</span>') ?>
            </div>


        </div>

        <div class="col col-lg-4">
            <div class="form-group <?php echo (form_error('preOrderStart')) ? ' has-error' : ''; ?>">
                <label>Pre Order Start:</label>

                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="preOrderStart" class="form-control pull-right datepicker"
                           value="<?php echo (isset($record->preOrderStart)) ? date_format(date_create($record->preOrderStart), 'Y/m/d') : ''; ?>"

                           id="preOrderStart">
                </div>
                <?php echo form_error('preOrderStart', '<span class="help-block">', '</span>') ?>

                <!-- /.input group -->
            </div>
            <div class="form-group <?php echo (form_error('preOrderEnd')) ? ' has-error' : ''; ?>">
                <label>Pre Order End:</label>

                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="preOrderEnd"
                           value="<?php echo (isset($record->preOrderEnd)) ? date_format(date_create($record->preOrderEnd), 'Y/m/d') : ''; ?>"
                           class="form-control pull-right datepicker" id="preOrderEnd">
                </div>
                <?php echo form_error('preOrderEnd', '<span class="help-block">', '</span>') ?>

            </div>

            <div class="form-group <?php echo (form_error('releaseDate')) ? ' has-error' : ''; ?>">
                <label>Release Date:</label>

                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="releaseDate" class="form-control pull-right datepicker"
                           value="<?php echo (isset($record->releaseDate)) ? date_format(date_create($record->releaseDate), 'Y/m/d') : ''; ?>"

                           id="releaseDate">
                </div>
                <?php echo form_error('releaseDate', '<span class="help-block">', '</span>') ?>

                <!-- /.input group -->
            </div>
            <div class="form-group <?php echo (form_error('arrivalDate')) ? ' has-error' : ''; ?>">
                <label>Arrival Date:</label>

                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="arrivalDate"
                           value="<?php echo (isset($record->arrivalDate)) ? date_format(date_create($record->arrivalDate), 'Y/m/d') : ''; ?>"
                           class="form-control pull-right datepicker" id="arrivalDate">
                </div>
                <?php echo form_error('arrivalDate', '<span class="help-block">', '</span>') ?>

            </div>
            <div class="form-group<?php echo (form_error('poPrice')) ? ' has-error' : ''; ?>">
                <input name="poPrice" id="poPrice" type="number" min="0" class="form-control" value=
                    <?= isset($record) ? is_object($record) ? isset($record->poPrice) ? $record->poPrice : '' : floatval($record['poPrice']) : '' ?>/>
                <?php echo form_error('price', '<span class="help-block">', '</span>') ?>
            </div>


        </div>
        <div class="col col-lg-4">
            <label>Special Offer</label>
            <div class="form-group<?php echo (form_error('spPrice')) ? ' has-error' : ''; ?>">
                <label for="price">Special Offer Price</label>

                <input name="spPrice" id="spPrice" type="number" min="0" class="form-control" value=
                    <?= isset($record) ? is_object($record) ? isset($record->spPrice) ? $record->spPrice : '' : floatval($record['spPrice']) : '' ?>/>
                <?php echo form_error('price', '<span class="help-block">', '</span>') ?>
            </div>
            <div class="form-group <?php echo (form_error('spStartDate')) ? ' has-error' : ''; ?>">
                <label>Special Offer Start Date:</label>

                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="spStartDate"
                           value="<?php echo (isset($record->spStartDate)) ? date_format(date_create($record->spStartDate), 'Y/m/d') : ''; ?>"
                           class="form-control pull-right datepicker" id="spStartDate">
                </div>
                <?php echo form_error('spStartDate', '<span class="help-block">', '</span>') ?>

            </div>
            <div class="form-group <?php echo (form_error('spEndDate')) ? ' has-error' : ''; ?>">
                <label>Special Offer End Date:</label>

                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="spEndDate"
                           value="<?php echo (isset($record->spEndDate)) ? date_format(date_create($record->spEndDate), 'Y/m/d') : ''; ?>"
                           class="form-control pull-right datepicker" id="spEndDate">
                </div>
                <?php echo form_error('spEndDate', '<span class="help-block">', '</span>') ?>

            </div>


        </div>


    </div>
    <div class="col col-lg-12">

        <div class="col col-lg-6">

            <div class="form-group<?php echo (form_error('description')) ? ' has-error' : ''; ?>">
                <label for="description">Description *</label>
                <?php echo form_textarea('description', (isset($record->description)) ? set_value("description", $record->description) : set_value("description"), array('class' => 'form-control', 'placeholder' => 'Description', 'id' => 'description')); ?>
                <?php echo form_error('description', '<span class="help-block">', '</span>') ?>

            </div>


        </div>
        <div class="col col-lg-6">
            <div class="form-group<?php echo (form_error('summary')) ? ' has-error' : ''; ?>">
                <label for="description">Summary *</label>
                <?php echo form_textarea('summary', (isset($record->summary)) ? set_value("summary", $record->summary) : set_value("Summary"), array('class' => 'form-control', 'placeholder' => 'Description', 'id' => 'description')); ?>
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
