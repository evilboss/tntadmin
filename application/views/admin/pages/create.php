<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Page
            <small>( Manage your page )</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?= site_url('admin/pages') ?>">Pages</a></li>
            <li class="active">Add Page</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Page</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?php echo validation_errors(); ?>
                    <form data-validate method="POST" name="add_employee" action="<?= site_url('admin/pages/insert') ?>"
                          validate>
                        <div class="box-body">

                            <div class="form-group">
                                <label for="title">Page Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                       value="<?php echo set_value('title', @$page['title']); ?>"
                                       placeholder="Enter Title">
                            </div>

                            <div class="form-group">
                                <label for="content">Page content</label>
                                <textarea class="form-control ckeditor"
                                          name="content"><?php echo set_value('content', @$page['content']); ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="slug">Page slug</label>
                                <input type="text" class="form-control" id="slug" name="slug"
                                       value="<?php echo set_value('slug', @$page['slug']); ?>"
                                       placeholder="Enter slug">
                            </div>

                            <div class="form-group">
                                <label for="photo">Page Photo</label>
                                <input type="file" id="photo">
                                <p class="help-block">upload the main photo for the Page</p>
                            </div>
                            <div class="checkbox">
                                <label for="status">Status</label>
                                <select name="status" class="form-control">
                                    <option value="1">Published</option>
                                    <option value="0">Draft</option>
                                </select>
                            </div>

                        </div>
                        <div class="box-footer">
                            <a href="<?= site_url('admin/products') ?>" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-success pull-right">SAVE</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
