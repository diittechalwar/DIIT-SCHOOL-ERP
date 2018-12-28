<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                        <h1><i class="ti-book mr-1"></i> Library / Book List</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated">

            <div class="card">
                <div class="card-header">
                    <span>Book List</span>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">Book Title</th>
                                    <th style="width: 80px;">Book Number</th>
                                    <th>ISBN Number</th>
                                    <th>Publisher</th>
                                    <th>Author</th>
                                    <th>Subject</th>
                                    <th>Rack Number</th>
                                    <th>Qty</th>
                                    <th>Book Price()</th>
                                    <th>Post Date</th>
                                    <th style="width:103px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hunter</td>
                                    <td>001</td>
                                    <td>SD015</td>
                                    <td>ASD</td>
                                    <td>ZAP</td>
                                    <td>Literature</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>501.00</td>
                                    <td>23-nov-2018</td>
                                    <td class="pr-0">
                                        <a class="btn btn-outline-primary btn-sm mr-2" href="Editbook.php"><i class="ti-pencil-alt"></i></a>
                                        <a class="btn btn-outline-danger btn-sm" href=""><i class="ti-trash"></i></a>                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
 
        </div>
        <!-- .animated -->

    </div>

    <!-- /.content -->

    <?php include "../../include/footer.php" ?>