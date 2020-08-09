<link href="<?= base_url('/assets/libs/file-input/') ?>css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<link href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" rel="stylesheet"
      type="text/css"/>
<script src="<?= base_url('/assets/libs/file-input/') ?>js/plugins/piexif.js" type="text/javascript"></script>
<script src="<?= base_url('/assets/libs/file-input/') ?>js/plugins/sortable.js" type="text/javascript"></script>
<script src="<?= base_url('/assets/libs/file-input/') ?>js/fileinput.js" type="text/javascript"></script>
<script src="<?= base_url('/assets/libs/file-input/') ?>js/locales/fr.js" type="text/javascript"></script>
<script src="<?= base_url('/assets/libs/file-input/') ?>js/locales/es.js" type="text/javascript"></script>
<script src="<?= base_url('/assets/libs/file-input/') ?>themes/fas/theme.js" type="text/javascript"></script>
<script src="<?= base_url('/assets/libs/file-input/') ?>themes/explorer-fas/theme.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

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
        showUpload: true,
        initialPreviewAsData: true,
        overwriteInitial: false,

        initialPreview: [
            "http://lorempixel.com/1920/1080/transport/1",
            "http://lorempixel.com/1920/1080/transport/2",
            "http://lorempixel.com/1920/1080/transport/3"
        ],
        initialPreviewConfig: [
            {
                caption: "transport-1.jpg",
                size: 329892,
                width: "120px",
                url: "<?= base_url('/admin/products/deleteImage/0')?>",
                key: 1
            },
            {
                caption: "transport-2.jpg",
                size: 872378,
                width: "120px",
                url: "<?= base_url('/admin/products/deleteImage/0')?>",
                key: 2
            },
            {
                caption: "transport-3.jpg",
                size: 632762,
                width: "120px",
                url: "<?= base_url('/admin/products/deleteImage/0')?>",
                key: 3
            }
        ]

    }).on('filebeforedelete', function () {
        return new Promise(function (resolve, reject) {
            $.confirm({
                title: 'Confirmation!',
                content: 'Are you sure you want to delete this file?',
                type: 'red',
                buttons: {
                    ok: {
                        btnClass: 'btn-primary text-white',
                        keys: ['enter'],
                        action: function () {
                            resolve();
                        }
                    },
                    cancel: function () {
                        $.alert('File deletion was aborted! ' + krajeeGetCount('file-6'));
                    }
                }
            });
        });
    }).on('filedeleted', function () {
        console.log('file deleted');
    });
</script>
