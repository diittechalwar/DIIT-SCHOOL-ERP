<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header d-inline-block">
                        <div class="page-title">
                            <h1><i class="ti-user mr-1"></i> Student Information / Student Login Credential</h1>
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
                    <i class="fa fa-search" aria-hidden="true"></i> <span class="ml-2">Select Criteria</span>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                        <div class="col-md-6">
                        <div class="form-group ">
                                <label for="class" class=" form-control-label">Class</label>
                                <select name="class" id="class" class=" form-control form-control-sm" required>
                                    <option value="0">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">LKG</option>
                                    <option value="9">UKG</option>
                                    <option value="10">Nursery</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group ">
                                <label for="Section" class=" form-control-label">Section</label>
                                <select name="Section" id="Section" class=" form-control form-control-sm" required>
                                    <option value="0">Select</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                </select>
                            </div>
                        </div>
                           
                          
                        </div>
                        <div class="form-actions form-group">
                            <button type="submit" class="btn btn-secondary btn-sm float-right"> <i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <span>Login Credential Report</span>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <tr>
                                        <th>Admission(Num)</th>
                                        <th>Name(student)</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Parent Username</th>
                                        <th>Parent Password</th>
                                    </tr>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <tr>
                                        <td>KK002</td>
                                        <td><a href="studentinformation.php"> karam</a></td>
                                        <td>std118</td>
                                        <td>sdfsf1</td>
                                        <td>Parent120</td>
                                        <td>dfsa09</td>
                                    </tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content -->

    <?php include "../../include/footer.php" ?>