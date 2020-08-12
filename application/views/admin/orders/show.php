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
                        <?php $this->load->view('admin/partials/flash') ?>
                        <?php print_r($record); ?>
                        <?php echo form_open("admin/orders/show/$record->id") ?>

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
                                    <?php if ($record->order_status === "Pending Verification"): ?>

                                        <button id="approvePayment" class="btn btn-success" type="button">Aprove
                                        </button>
                                        <button id="rejectPayment" class="btn btn-dangera" type="button">Reject</button>

                                    <?php else: ?>
                                        <button id="changeStatus" class="btn btn-success" type="button">Change</button>
                                        <select id="status-select" name="order_status" class="hide">
                                            <option value="Ordered">
                                                Ordered
                                            </option>
                                            <option value="Processing">
                                                Processing
                                            </option>

                                            <option value="For Payment">
                                                For Payment
                                            </option>
                                            <option value="Paid">
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
                                    <?php endif; ?>
                                </td>
                            </tr>
                            </tbody>

                        </table>
                        <?php echo form_close() ?>


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
                case 'For Payment':
                    $('#orderTableBody').append(_.template(`
                                <tr class="option-row">
                                <th>Set Shipping Rate:</th>
                                <td><input name="shippingPrice" class="form-control"/></td>
                                <td><button type="submit" class="btn btn-primary">Save</button></td>
                            </tr>

                            `));
                    $('.save').on('click', function () {
                        console.log('save button');
                    });
                    break;
                case 'Processing':
                    $('#orderTableBody').append(_.template(`<tr class="option-row">
                                <th>Set Transaction number:</th>
                                <td><input name="transactionNumber" class="form-control"/></td>
                                <td><button class="btn btn-success save">Save</button></td>

                            </tr>`));
                    $('.save').on('click', function () {
                        console.log('save button');
                    });
                    // code block
                    break;
                case 'Paid':
                    $('#orderTableBody').append(_.template(`<tr class="option-row">
                                <th>Set Transaction number:</th>
                                <td><input class="form-control"/></td>
                                <td><input name="transactionNumber" class="form-control"/></td>
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
