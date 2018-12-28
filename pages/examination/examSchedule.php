<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="fa fa-map-o mr-1"></i> Examinations / Exam Schedule</h1>
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
                    <div class="row">
                        <div class="col-md-6">
                            <i class="fa fa-search" aria-hidden="true"></i> <span class="ml-2">Select Criteria</span>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-secondary btn-sm float-right" href="./create.php"> <i class="fa fa-plus mr-1"></i>Add</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="Select" class=" ">Class</label>
                                <select name="" id="" class="form-control-sm form-control " required>
                                    <option value="">Select</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="Select" class=" ">Section</label>
                                <select name="" id="" class="form-control-sm form-control" required>
                                    <option value="">Select</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group mt-4">
                                <button type="submit" class="btn btn-secondary btn-sm mt-2"><i class="fa fa-search mr-1"></i>Search</button>
                            </div>
                        </div>
                </div>
                </form>
            </div>

            <div class="card">
                <div class="card-header">
                    <span>Expense List</span>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Exam</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="serial">1.</td>
                                    <td>
                                        <span class="name">Louis Stanley</span>
                                    </td>
                                    <td class="pr-0">
                                        <button type="button" data-toggle="modal" data-target="#view-schedule" class="btn btn-secondary btn-sm mt-2"><i class="fa fa-calendar-times-o mr-2"></i>View </button>
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

    <!-- /.content -->
    <!-- modal-box -->
    <!-- code-start -->
    <div class="modal fade show" id="view-schedule" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mediumModalLabel" style="font-size: 16px;">Exam P A -01 (QUARTERLY)</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th class="">Subject</th>
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Rooms</th>
                                    <th>Full Marks</th>
                                    <th>Passing Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="serial">1.</td>
                                    <td><span>English</span></td>
                                    <td>2018-08-27</td>
                                    <td>12:00 AM</td>
                                    <td>12:30 AM</td>
                                    <td>12</td>
                                    <td>10</td>
                                    <td>15</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-stats -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <?php include "../../include/footer.php" ?>