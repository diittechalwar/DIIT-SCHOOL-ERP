<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class="fa fa-mortar-board mr-1"></i> Academics / Assign Class Teacher</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated">
            <div class="row">
                <div class="col-md-4">
                    <form action="">
                        <div class="card">
                            <div class="card-header">
                                <span>Edit Assign Class Teacher</span>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12 form-group">
                                        <label for="Select" class=" ">Class</label>
                                        <select name="" id="" class="form-control-sm form-control" required>
                                            <option value="">Select</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="Select" class=" ">Section</label>
                                        <select name="" id="" class="form-control-sm form-control" required>
                                            <option value="">Select</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="" class="">Class Teacher</label>
                                        <div class="checkbox">
                                            <label for="">
                                                <input type="checkbox"> Teacher</label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="">
                                                <input type="checkbox"> Teacher</label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="">
                                                <input type="checkbox"> Teacher</label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="">
                                                <input type="checkbox"> Teacher</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 ">
                                    <hr>
                                        <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-save mr-2"></i>Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-8">
                    <form action="">
                        <div class="card">
                            <div class="card-header">
                                <span>Class Teacher List</span>
                            </div>

                            <div class="card-body">
                                <div class="table-stats order-table table-responsive">

                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th>Class</th>
                                                <th>Section</th>
                                                <th>Class Teacher</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>A</td>
                                                <td>Nikhil</td>
                                                <td class="pr-0">
                                                    <a href="editassignClassTeacher.php">
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
                    </form>
                </div>
            </div>

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

    <?php include "../../include/footer.php" ?>