<link href="<?= base_url('/assets/libs/file-input/') ?>css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<script src="<?= base_url('/assets/libs/file-input/') ?>js/plugins/piexif.js" type="text/javascript"></script>
<script src="<?= base_url('/assets/libs/file-input/') ?>js/plugins/sortable.js" type="text/javascript"></script>
<script src="<?= base_url('/assets/libs/file-input/') ?>js/fileinput.js" type="text/javascript"></script>
<script src="<?= base_url('/assets/libs/file-input/') ?>js/locales/fr.js" type="text/javascript"></script>
<script src="<?= base_url('/assets/libs/file-input/') ?>js/locales/es.js" type="text/javascript"></script>
<script src="<?= base_url('/assets/libs/file-input/') ?>themes/fas/theme.js" type="text/javascript"></script>
<script src="<?= base_url('/assets/libs/file-input/') ?>themes/explorer-fas/theme.js" type="text/javascript"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Products
            <small>List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <?php echo form_open_multipart(base_url('admin/products/upload')) ?>
            <input id="images" name="files[]" type="file" multiple=true data-preview-file-type="any"/>
            <input type="submit"/>
            <?php echo form_close() ?>
        </div>
    </section>
</div>


<script>
    $("#images").fileinput({
        theme: 'fa',
        uploadUrl: "<?=base_url('admin/products/upload')?>",
        showUpload: true,
    });
</script>
