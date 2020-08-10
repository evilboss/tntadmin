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
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th>Id</th>
                                <td><?php echo xss_clean($record->id) ?></td>
                            </tr>
                            <tr>
                                <th>User</th>
                                <td><?php echo xss_clean($record->user_name) ?></td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <td><?php echo xss_clean($record->email) ?></td>
                            </tr>
                            <tr>
                                <th>Delivery Address</th>
                                <td><?php echo xss_clean($record->delivery_address) ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><?php echo xss_clean($record->order_status) ?>
                                    <button id="changeStatus" class="btn btn-success" type="button">Change</button>
                                    <select id="status-select" class="hide">
                                        <option value="paid">
                                            Paid
                                        </option>
                                        <option value="for payment">
                                            For Payment
                                        </option>
                                        <option value="For Shipping">
                                            For Shipping
                                        </option>
                                        <option value="Shipped">
                                            Shipped
                                        </option>
                                        <option value="Delivered">
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

        $('#changeStatus').click(function () {
            console.log('changes status click');
            $('#changeStatus').addClass('hide');
            $('#status-select').removeClass('hide');
        });
        $('#status-select').on('change', function (e) {
            console.log(e.currentTarget.value);
        })
    });
</script>
