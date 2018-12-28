<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="menu-icon fa fa-cogs mr-1"></i> Human Resource / Payroll Report</h1>
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
                                    <select name="selectSm" id="selectSm" class="form-control-sm form-control" required />
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
                                    <select id="month" name="month" class="form-control-sm form-control" autocomplete="off" required />
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
                                    <select id="year" name="year" class="form-control-sm form-control" required>
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
                            <span> Payroll Report</span>
                        </div>
                        <div class="card-body ">
                            <div class="table-stats order-table table-responsive">
                                <table class="table upload-table">
                                    <thead>
                                        <tr>
                                            <th class="serial">Name </th>
                                            <th class="avatar">Role </th>
                                            <th>Designation</th>
                                            <th>Month - Year </th>
                                            <th>Payslip #</th>
                                            <th class="serial">Basic Salary (Rs) </th>
                                            <th class="avatar">Earning (Rs) </th>
                                            <th>Deduction (Rs) </th>
                                            <th>Gross Salary (Rs) </th>
                                            <th> Tax (Rs) </th>
                                            <th>Net Salary (Rs)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                        </tr>

                                    </tbody>
                                </table>
                                <hr>
                                <div class="col-md-12">
                                    <h5 class="color-red text-center">No Data Available In Table</h5>
                                    <p style="font-size: 12px;">Record: 0 of 0</p>
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