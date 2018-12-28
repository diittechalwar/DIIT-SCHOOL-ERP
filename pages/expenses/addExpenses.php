<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="fa fa-dollar mr-1"></i>Expenses / Add Expenses</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated">
            <form action="">
                <div class="card">
                    <div class="card-header">
                        <span>Add Expenses</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="Select" class=" ">Expensive Head</label>
                                <select name="" id="" class="form-control-sm form-control" required>
                                    <option value="">Select</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="" class=" ">Name *</label>
                                <input type="text" class="form-control-sm form-control" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="" class=" ">Invoice Number</label>
                                <input type="text" class="form-control-sm form-control" required>
                            </div>
                            <div class="col-md-4 form-group ">
                                <label for="" class=" ">Date</label>
                                <input type="date" class="form-control-sm form-control" required>
                            </div>
                            <div class="col-md-4 form-group ">
                                <label for="" class=" ">Amount</label>
                                <input type="number" min="0" class="form-control-sm form-control" required>
                            </div>
                            <div class="col-md-4 form-group ">
                                <label for="" class=" ">Attachment</label>
                                <input type="file" id="file-input" name="file-input" class="form-control-file">
                            </div>
                            <div class="col-md-12 ">
                                <label for="" class=" ">Description</label>
                                <textarea name="textarea-input" id="textarea-input" class="form-control-sm form-control" required></textarea>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
                                    <th>Action</th>
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
                                    <td>
                                        <span class="badge badge-complete">Complete</span>
                                    </td>
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