<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class="fa fa-mortar-board mr-1"></i> Academics / Subject</h1>
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
                            <span>Edit Subject</span>
                        </div>
                        <form action="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="" class=" ">Subject Name</label>
                                        <input type="text" class="form-control form-control-sm" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label class="mr-2" for="53">
                                            <input class="mr-1" type="radio" checked=""  value="1"  name="theory">Theory</label>
                                        <label class="ml-2" for="">
                                            <input class="mr-1" type="radio" name="theory" value="2">Practical</label>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="54" class=" ">Subject Code</label>
                                        <input type="text" class="form-control form-control-sm" required>
                                    </div>
                                    <div class="col-md-12">
                                    <hr>
                                        <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-save mr-1"></i> Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <span>Subject List</span>
                        </div>
                        <div class="card-body">
                            <div class="table-stats order-table table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Subject Code</th>
                                            <th>Subject Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>English</td>
                                            <td>001</td>
                                            <td>Theory</td>
                                            <td class="pr-0">
                                                <a href="editSubject.php">
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