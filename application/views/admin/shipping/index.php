<!-- Content Wrapper. Contains page content -->
<script src="<?= base_url('assets/libs/papaparse/papaparse.js') ?>"></script>
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
        [0, 0, 0, `Singapore`],
        [1, 13.33, 2.22, `Macau
        Hong Kong
        TaiwanMacau`],
        [2, 18.8, 4.18, `South Korea
        Japan`],
        [3, 19.84, 4.8, `Philippines
        Cambodia
        Malaysia
        Thailand
        Indonesia
        Vietnam`],
        [4, 21.93, 5.74, `Australia
        New Zealand`],
        [5, 25.6, 8, `United States`],
        [6, 29.24, 7.83, `Ireland
        Australia
        Belgium
        Denmark
        Germany
        Fracen
        Finland
        Canada
        Luxemberg
        Malta
        Portugal
        Switzerland
        Norway
        Sweden
        Spain
        Italy
        United Kingdom`],
        [7, 31.33, 8.24, `Pakistan
        Laos
        Bangladesh
        Nepal
        Sri Lanka
        Turkey
        India`],
        [8, 34.99, 10.44, `Argentina
        Panama
        Brazil
        Poland
        Russia
        Colombia
        Cuba
        Saudi Arabia
        Guyana
        Czech
        Peru
        Mexico
        Ukraine
        Hungary
        Israel
        Jordan`],
        [9, 46.47, 12.53, `Qatar
        Kuwait`]
    ];

    console.log(Papa.unparse(data));

    function download_csv() {
        let csv = 'Zone,Initial CostPer 1st 500grams,Every 500 grams,locations\n';
        csv += Papa.unparse(data);

        const hiddenElement = document.createElement('a');
        hiddenElement.href = 'data:text/csv;charset=utf-8,' + encodeURI(csv);
        hiddenElement.target = '_blank';
        hiddenElement.download = `shipping-settings-template-${new Date()}.csv`;
        hiddenElement.click();
    }
</script>

