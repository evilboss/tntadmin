<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Products
            <small>Create</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="box">
                    <div class="box-header">
                        Order Details
                    </div>

                    <div class="box-body">
                        <?php print_r($record); ?>
                        <table class="table table-bordered">
                            <thead>
                            <th>Field</th>
                            <th>Field</th>
                            <th>Actions</th>

                            </thead>
                            <tbody id="orderTableBody">
                            <tr>
                                <th>Id</th>
                                <td><?php echo xss_clean($record->id) ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>User</th>
                                <td><?php echo xss_clean($record->user_name) ?></td>
                                <td></td>

                            </tr>

                            <tr>
                                <th>Email</th>
                                <td><?php echo xss_clean($record->email) ?></td>
                                <td></td>

                            </tr>
                            <tr>
                                <th>Delivery address</th>
                                <td><?php echo xss_clean($record->delivery_address) ?></td>
                                <td></td>

                            </tr>
                            <tr>
                                <th>Total order weight:</th>
                                <td><?php echo xss_clean($record->total_weight) ?></td>

                            </tr>
                            <tr>
                                <th>Total order amount</th>
                                <td>$ <?php echo xss_clean($record->total_amt) ?></td>

                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><?php echo xss_clean($record->order_status) ?>
                                </td>
                                <td>
                                    <button id="changeStatus" class="btn btn-success" type="button">Change</button>
                                    <select id="status-select" class="hide">
                                        <option value="ordered">
                                            Ordered
                                        </option>
                                        <option value="processing">
                                            Processing
                                        </option>

                                        <option value="for payment">
                                            For Payment
                                        </option>
                                        <option value="paid">
                                            Paid
                                        </option>
                                        <option value="for shipping">
                                            For Shipping
                                        </option>
                                        <option value="shipped">
                                            Shipped
                                        </option>
                                        <option value="delivered">
                                            Delivered
                                        </option>
                                    </select>

                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
    </section>
</div>
<script>
    $(function () {

        $('#changeStatus').on('click', function () {
            console.log('changes status click');
            $('#changeStatus').addClass('hide');
            $('#status-select').removeClass('hide');
        });

        $('#status-select').on('change', function (e) {
            console.log(e.currentTarget.value);
            $('tr').remove('.option-row');

            switch (e.currentTarget.value) {
                case 'for payment':
                    $('#orderTableBody').append(_.template(`<tr class="option-row">
                                <th>Set Shipping Rate:</th>
                                <td><input class="form-control"/></td>
                                <td><button id="saveBtn" class="btn btn-success save">Save</button></td>

                            </tr>`));
                    $('.save').on('click', function () {
                        console.log('save button');
                    });
                    break;
                case 'processing':
                    $('#orderTableBody').append(_.template(`<tr class="option-row">
                                <th>Set Transaction number:</th>
                                <td><input class="form-control"/></td>
                                <td><button class="btn btn-success save">Save</button></td>

                            </tr>`));
                    $('.save').on('click', function () {
                        console.log('save button');
                    });
                    // code block
                    break;
                case 'paid':
                    $('#orderTableBody').append(_.template(`<tr class="option-row">
                                <th>Set Transaction number:</th>
                                <td><input class="form-control"/></td>
                                <td><button class="btn btn-success save">Save</button></td>

                            </tr>`));
                    $('.save').on('click', function () {
                        console.log('save button');
                    });
                    // code block
                    break;
                case 'shipped':
                    $('#orderTableBody').append(_.template(`<tr class="option-row">
                                <th>Set shipping number:</th>
                                <td><input class="form-control"/></td>
                                <td><button class="btn btn-success save">Save</button></td>

                            </tr>`));
                    $('.save').on('click', function () {
                        console.log('save button');
                    });
                    break;
                default:

                // code block
            }

        });

    });
</script>
