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
<label>Images</label>
<input id="images" name="files[]" type="file" multiple=true data-preview-file-type="any"/>


<script>
    const imageDir = 'images/products';
    const images = <?php echo (isset($record) && isset($record->images) && empty(!$record->images)) ? json_encode($record->images) : "[]"?>;
    const imagePaths = [];

    const imageConfigs = [];
    images.map((image, key) => {
        console.log(image);
        imagePaths.push(`<?=base_url('images/products/')?>${image.path}`);
        imageConfigs.push({
            caption: image.path,
            width: "120px",
            url: `<?= base_url('/admin/products/deleteImage/')?>${image.id}`,
            key: key
        });
    })

    $("#images").fileinput({
        theme: 'fa',
        showUpload: false,
        initialPreviewAsData: true,
        overwriteInitial: false,
        allowedFileExtensions: ['jpg', 'gif', 'png', 'jpeg'],
        initialPreview: imagePaths,
        initialPreviewConfig: imageConfigs

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
                        $.alert('File deletion was aborted! ');
                    }
                }
            });
        });
    }).on('filedeleted', function () {
        console.log('file deleted');
    });
</script>
