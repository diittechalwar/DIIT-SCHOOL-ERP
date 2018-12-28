<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class="fa fa-mortar-board mr-1"></i> Academics / Class Time Table</h1>
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
                           
                                <a class="btn btn-secondary btn-sm float-right" href="./createTimetable.php"> <i class="fa fa-plus mr-2"></i>Add</a>
                            
                        </div>
                    </div>
                </div>
                <form action="">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="Select" class=" ">Class</label>
                            <select name="" id="" class="form-control-sm form-control" required>
                                <option value="">Select</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="Select" class=" ">Section</label>
                            <select name="" id="" class="form-control-sm form-control" required>
                                <option value="">Select</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                            </select>
                        </div>

                        <div class="col-md-12 form-group ">
                            <button type="submit " class="btn btn-secondary btn-sm mt-2 float-right"><i class="fa fa-search mr-1"></i> Search</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>

            <div class="card">
                <div class="card-header">
                    <span>Class Time Table</span>
                </div>

                    <div class="card-body">
                    <div class="table-stats order-table table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>English</td>
                                    <td>08:50 AM - 09:30 AM Room No: 01 (Teacher)</td>
                                    <td>08:50 AM - 09:30 AM Room No: 01 (Teacher)</td>
                                    <td>08:50 AM - 09:30 AM Room No: 01 (Teacher)</td>
                                    <td>08:50 AM - 09:30 AM Room No: 01 (Teacher)</td>
                                    <td>08:50 AM - 09:30 AM Room No: 01 (Teacher)</td>
                                    <td>08:50 AM - 09:30 AM Room No: 01 (Teacher)</td>
                                    <td>Not Scheduled</td>

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