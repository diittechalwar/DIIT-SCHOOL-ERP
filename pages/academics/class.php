<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class="fa fa-mortar-board mr-1"></i> Academics / Class</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <span>Add Class</span>
                        </div>
                        <form action="">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12 form-group">
                                        <label for="" class=" ">Class</label>
                                        <input type="text" class="form-control form-control-sm" required>
                                    </div>
                                    <div class="col-md-12  ">
                                        <label for="" class="">Section</label>
                                        <div class="checkbox">
                                            <label for="">
                                                <input type="checkbox"> A</label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="">
                                                <input type="checkbox"> B</label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="">
                                                <input type="checkbox"> C</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 ">
                                    <hr>
                                        <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-save mr-1"></i>Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <span>Class List</span>
                        </div>

                        <div class="card-body">
                            <div class="table-stats order-table table-responsive">

                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>Class</th>
                                            <th>Section</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>English</td>
                                            <td>001</td>
                                            <td class="pr-0">
                                                <a href="editClass.php">
                                                    <button type="button" class="btn btn-outline-primary btn-sm ml-2"><span class="ti-pencil-alt"></span></button>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-sm ml-2"><span class="ti-trash"></span></button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.table-stats -->
                    </div>
                </div>
            </div>

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

    <?php include "../../include/footer.php" ?>