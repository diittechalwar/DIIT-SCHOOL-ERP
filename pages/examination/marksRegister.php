<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="fa fa-map-o mr-1"></i> Examinations / Marks Register</h1>
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
                                <label for="Select" class=" ">Exam Name</label>
                                <select name="" id="" class="form-control-sm form-control" required>
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
                            <div class="col-md-12 mt-2">
                                <button type="submit" class="btn btn-secondary btn-sm mt-2 float-right"><i class="fa fa-search mr-1"></i>Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <span>Exam Schedule</span>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table table-responsive" >
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Admission Number</th>
                                    <th>Roll Number</th>
                                    <th>Student</th>
                                    <th>Father</th>
                                    <th>English (Th: 3/10)</th>
                                    <th>Social Science (Th: 30/80)</th>
                                    <th>Science (Th: 30/80)</th>
                                    <th>Physical Exercise (Pr: 30/80)</th>
                                    <th>Maths (Pr: 30/80)</th>
                                    <th>Grand Total</th>
                                    <th>Percent(%)</th>
                                    <th>Result</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Flip001</td>
                                    <td>001</td>
                                    <td>Nitesha</td>
                                    <td>Gopal</td>
                                    <td>5.00</td>
                                    <td>7.00</td>
                                    <td>8.00</td>
                                    <td>5.00</td>
                                    <td>5.00</td>
                                    <td>34/330</td>
                                    <td>10.30</td>
                                    <td><span class="badge badge-primary">Fail</span></td>
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