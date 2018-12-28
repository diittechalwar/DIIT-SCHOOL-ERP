<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class="fa fa-mortar-board mr-1"></i> Academics / Section</h1>
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
                            <span>Edit Section</span>
                        </div>
                        <form action="">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12 form-group">
                                        <label for="" class=" ">Section</label>
                                        <input type="text" class="form-control form-control-sm" required>
                                    </div>

                                    <div class="col-md-12">
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
                            <span>Section List</span>
                        </div>
                        <div class="card-body">
                            <div class="table-stats order-table table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>Section</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A</td>
                                            <td class="pr-0">
                                                <a href="editSection.php">
                                                    <button type="button" class="btn btn-outline-primary btn-sm ml-1"><span class="ti-pencil-alt"></span></button>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-sm ml-1"><span class="ti-trash"></span></button>
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