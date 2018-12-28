<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="menu-icon fa fa-cogs mr-1"></i> Human Resource / Payroll</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="content">
        <div class="animated">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-search" aria-hidden="true"></i> <span class="ml-2">Select Criteria</span>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Role</label>
                                    <select name="selectSm" id="selectSm" class="form-control-sm form-control">
                                        <option value="0">Select</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Teacher</option>
                                        <option value="3">Accountant</option>
                                        <option value="4">Librarian</option>
                                        <option value="5">Receptionist</option>
                                        <option value="5">Super Admin</option>
                                        <option value="5">ABC</option>
                                        <option value="5">Staff</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Month</label>
                                    <select id="month" name="month" class="form-control-sm form-control" autocomplete="off">
                                        <option value="">Select</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March" selected="selected">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Year</label>
                                    <select id="year" name="year" class="form-control-sm form-control">
                                        <option value="">Select</option>
                                        <option value="2018" selected="">2018</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                              <button type="submit" name="search" class="btn btn-secondary btn-sm float-right"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <span>  Staff List</span>
                        </div>
                        <div class="card-body  ">
                            <div class="table-stats order-table table-responsive ">
                                <table class="table upload-table">
                                    <thead>
                                        <tr>
                                            <th class="serial">Staff ID <i class="fa fa-caret-down" aria-hidden="true"></i> </th>
                                            <th class="avatar">Name <i class="fa fa-caret-down" aria-hidden="true"></i> </th>
                                            <th>Role <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                            <th>Department <i class="fa fa-caret-down" aria-hidden="true"></i> </th>
                                            <th>Designation <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                            <th class="serial">Phone <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                            <th class="avatar">Status <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                            <th>Action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>001</td>
                                            <td>Super Admin</td>
                                            <td>Super Admin</td>
                                            <td>Computer</td>
                                            <td>Teacher</td>
                                            <td>-</td>
                                            <td><small class="label label-default">Not Generated</small></td>
                                            <td><a class="btn btn-secondary btn-sm checkbox-toggle edit_setting color-white" role="button" href="gernate_payroll.php">Generate Payroll</a></td>
                                        </tr>
                                        <tr>
                                            <td>002</td>
                                            <td>Super Admin</td>
                                            <td>Super Admin</td>
                                            <td>Computer</td>
                                            <td>Teacher</td>
                                            <td>-</td>
                                            <td><small class="label label-default">Not Generated</small></td>
                                            <td><a class="btn btn-secondary btn-sm checkbox-toggle edit_setting color-white" role="button" href="gernate_payroll.php">Generate Payroll</a></td>
                                        </tr>
                                        <tr>
                                            <td>003</td>
                                            <td>Super Admin</td>
                                            <td>Super Admin</td>
                                            <td>Computer</td>
                                            <td>Teacher</td>
                                            <td>-</td>
                                            <td><small class="label label-default">Not Generated</small></td>
                                            <td><a class="btn btn-secondary btn-sm checkbox-toggle edit_setting color-white" role="button" href="gernate_payroll.php">Generate Payroll</a></td>
                                        </tr>

                                    </tbody>
                                </table>
                                <hr>
                                <div class="col-md-12">

                                    <p style="font-size: 12px;">Record: 3 of 12</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

<?php include "../../include/footer.php" ?>