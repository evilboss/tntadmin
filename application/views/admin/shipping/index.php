<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Shiping Settings
            <small>( Manage your shipping settings)</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <pre>
                <?php print_r($zones); ?>
            </pre>
            <?php echo form_open_multipart(base_url('admin/shipping/index')); ?>
            <?php $this->load->view('admin/shipping/form'); ?>

            <?php echo form_close(); ?>
            <button onclick="download_csv()">Download CSV</button>

        </div>
    </section>
</div>
<script>
    const data = [
        //headings
        ['Zone', 'Initial CostPer 1st 500grams', 'Every 500 gram'],
        [0, 0, 0],
        [1, 13.33, 2.22],
        [2, 18.8, 4.18],
        [3, 19.84, 4.8],
        [4, 21.93, 5.74],
        [5, 25.6, 8],
        [6, 29.24, 7.83],
        [7, 31.33, 8.24],
        [8, 34.99, 10.44],
        [9, 46.47, 12.53]
    ];


    function download_csv() {
        let csv = 'Name,Title\n';
        data.forEach(function (row) {
            csv += row.join(',');
            csv += "\n";
        });

        const hiddenElement = document.createElement('a');
        hiddenElement.href = 'data:text/csv;charset=utf-8,' + encodeURI(csv);
        hiddenElement.target = '_blank';
        hiddenElement.download = `shipping-settings-template-${new Date()}.csv`;
        hiddenElement.click();
    }
</script>

