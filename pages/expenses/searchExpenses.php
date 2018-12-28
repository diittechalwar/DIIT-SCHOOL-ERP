<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class="fa fa-dollar mr-1"></i>Expenses / Search Expenses</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated">

            <div class="card">
                <div class="card-header">
                     <i class="fa fa-search" aria-hidden="true"></i> <span class="ml-2">Search Expense</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="">
                                <div class="row">

                                    <div class="col-md-5 form-group">
                                        <label for="" class="">Date From</label>
                                        <input type="date" class="form-control-sm form-control" required>
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <label for="" class="">Date From</label>
                                        <input type="date" class="form-control-sm form-control" required>
                                    </div>
                                    <div class="col-md-2 mt-2">
                                        <button type="submit" class="btn btn-secondary mt-4 btn-sm"><i class="fa fa-search mr-2"></i>Search</button>
                                    </div>
                                </div>

                            </form>

                        </div>

                        <div class="col-md-5 form-group ml-4">
                        <form action="">
                            <div class="row">
                                <div class="col-md-8 form-group">
                                    <label for="" class="">Search By Name</label>
                                    <input type="text" class="form-control-sm form-control" required>
                                </div>
                                <div class="col-md-2 form-group mt-2">
                                    <button type="submit" class="btn btn-secondary mt-4 btn-sm"><i class="fa fa-search mr-2"></i>Search</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <span>Expense List</span>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th class="">Name</th>
                                    <th>Invoice Number</th>
                                    <th>Date</th>
                                    <th>Expence Header</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="serial">1.</td>
                                    <td>
                                        <span class="name">Louis Stanley</span>
                                    </td>
                                    <td> #5469 </td>
                                    <td> <span>09-Nov-2018</span> </td>
                                    <td> <span>Stationary</span> </td>
                                    <td><span>5000</span></td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-stats -->
                </div>
            </div>

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

    <?php include "../../include/footer.php" ?>