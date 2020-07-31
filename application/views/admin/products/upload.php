

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
            <p><input type="file" id="myfile" name="myfile" size="30" onchange="doTest()"></p>

            <img id="uploadPreview" src="" width="100" style="display:none" />
        </div>
    </section>
</div>
<script type="text/javascript">
    if (window.FileReader) {

        var reader = new FileReader(), rFilter = /^(image\/bmp|image\/cis-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x-cmu-raster|image\/x-cmx|image\/x-icon|image\/x-portable-anymap|image\/x-portable-bitmap|image\/x-portable-graymap|image\/x-portable-pixmap|image\/x-rgb|image\/x-xbitmap|image\/x-xpixmap|image\/x-xwindowdump)$/i;

        reader.onload = function (oFREvent) {
            preview = document.getElementById("uploadPreview")
            preview.src = oFREvent.target.result;
            preview.style.display = "block";
        };

        function doTest() {

            if (document.getElementById("myfile").files.length === 0) { return; }
            var file = document.getElementById("myfile").files[0];
            if (!rFilter.test(file.type)) { alert("You must select a valid image file!"); return; }
            reader.readAsDataURL(file);
        }

    } else {
        alert("FileReader object not found :( \nTry using Chrome, Firefox or WebKit");
    }
</script>
