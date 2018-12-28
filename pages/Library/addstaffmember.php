<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header d-inline-block">
                        <div class="page-title">
                            <h1><i class="ti-book mr-1"></i> Library / Staff Member List</h1>
                        </div>
                    </div>
                    <!-- <a href="" class=" btn-secondary btn-sm float-right d-inline-block mt-2"><i class="ti-plus"></i>&nbsp; Add Student</a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated">
            <div class="card">
                <div class="card-header">
                    <span>Staff Member List</span>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">Member Id</th>
                                    <th>Library Card Number</th>
                                    <th>Staff Name</th>
                                    <th>Email</th>
                                    <th>Date Of Birth</th>
                                    <th>Mobile Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Teacher2</td>
                                    <td>teacher212@gmail.com</td>
                                    <td>5-May-1979</td>
                                    <td>9874563210</td>
                                    <td>
                                        <a class="btn btn-outline-primary btn-sm" href="" data-toggle="modal" data-target="#staticModal1"><i class="ti-plus"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>005</td>
                                    <td>Librarian</td>
                                    <td>Librarian12@gmail.com</td>
                                    <td>2-Mar-1989</td>
                                    <td>7498563210</td>
                                    <td>
                                    <a class="btn btn-outline-primary btn-sm" href="" data-toggle="modal" data-target="#staticModal"><i class="ti-share-alt"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title float-left" id="staticModalLabel">LIBRARY</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                            Are you sure want surnder membership?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-secondary btn-sm">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="staticModal1" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title float-left" id="staticModalLabel">Library</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="form-group ">
                                    <div class="col-md-12">
                                        <label for="Book_Title" class=" form-control-label">LIBRARY CARD NUMBER</label>
                                        <input type="number" id="Book_Title" placeholder="" class="form-control form-control-sm" required>
                                    </div>
                                </div>
                                <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-secondary btn-sm float-right">Add</button>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content -->

    <?php include "../../include/footer.php" ?>