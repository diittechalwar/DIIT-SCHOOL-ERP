<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="menu-icon fa fa-cogs mr-1"></i> Human Resource / Profile</h1>
                        </div>
                    </div>
                    <div id="mySidenav" class="sidenav">
                        <div class="card">
                            <div class="card-header" style="background: #f48001;">
                                <span class="color-white">Staff</span>
                                <span href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</span>

                            </div>
                            <div class="card-body p-0">
                                <a href="staffprofile.php"> Admin</a>
                                <a href="staffprofile.php"> Admin</a>
                                <a href="staffprofile.php"> Admin</a>
                                <a href="staffprofile.php"> Admin</a>
                                <a href="staffprofile.php"> Admin</a>
                                <a href="staffprofile.php"> Admin</a>
                                <a href="staffprofile.php"> Admin</a>
                                <a href="staffprofile.php"> Admin</a>
                                <a href="staffprofile.php"> Admin</a>
                                <a href="staffprofile.php"> Admin</a>
                                <a href="staffprofile.php"> Admin</a>
                                <a href="staffprofile.php"> Admin</a>
                                <a href="staffprofile.php"> Admin</a>
                                <a href="staffprofile.php"> Admin</a>
                                <a href="staffprofile.php"> Admin</a>
                            </div>
                        </div>

                    </div>
                    <a href="#" onclick="openNav()" class="float-right mt-2 pb-0 pt-0 btn btn-outline-secondary btn-sm" style="font-size: 17px;"><i class="fa fa-align-justify" aria-hidden="true"></i></a>
                    <a href="#" title="Disabled" class="float-right mr-3 mt-2 pb-0 pt-0 btn btn-outline-danger btn-sm" style="font-size: 17px;"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
                    <a href="edit_staff.php" title="Edit" class="float-right mr-3 mt-2 pb-0 pt-0 btn btn-outline-primary btn-sm" style="font-size: 17px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="content">
        <div class="animated">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <img class="profile-user-img img-responsive img-circle" src="http://demo.flipscool.com/uploads/staff_images/no_image.png" alt="User profile picture">
                            <h3 class="profile-username text-center">Super Admin </h3>
                        </div>
                        <div class="card-body">
                            <div class="box-body box-profile">
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item listnoback">
                                        <b>Staff ID</b>
                                        <a class="pull-right text-aqua"></a>
                                    </li>
                                    <li class="list-group-item listnoback">
                                        <b>Role</b> <a class="pull-right text-aqua">Super Admin</a>
                                    </li>

                                    <li class="list-group-item listnoback">
                                        <b>Designation</b>
                                        <a class="pull-right text-aqua"></a>
                                    </li>
                                    <li class="list-group-item listnoback">
                                        <b>Department</b>
                                        <a class="pull-right text-aqua"></a>
                                    </li>

                                    <li class="list-group-item listnoback">
                                        <b>EPF No</b>
                                        <a class="pull-right text-aqua"></a>
                                    </li>
                                    <li class="list-group-item listnoback">
                                        <b>Basic Salary</b>
                                        <a class="pull-right text-aqua"></a>
                                    </li>

                                    <li class="list-group-item listnoback">
                                        <b>Contract Type</b>
                                        <a class="pull-right text-aqua"></a>
                                    </li>
                                    <li class="list-group-item listnoback">
                                        <b>Work Shift</b>
                                        <a class="pull-right text-aqua"></a>
                                    </li>
                                    <li class="list-group-item listnoback">
                                        <b>Location</b>
                                        <a class="pull-right text-aqua"></a>
                                    </li>
                                    <li class="list-group-item listnoback">
                                        <b>Date Of Joining</b> <a class="pull-right text-aqua">30-Nov--0001</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Payroll</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Leaves</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab-2" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true">Attendance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab-2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false">Documents</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab-2" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="false">Timeline</a>
                                </li>
                            </ul>

                        </div>
                        <div class="card-body p-0">
                            <div class="tab-content pl-3 p-3" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <table class="table table-hover profile-table-staff">
                                        <tbody>

                                            <tr>
                                                <td>Phone</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Emergency Contact Number</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>info@nlet.in</td>
                                            </tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Date Of Birth</td>
                                                <td>30-Nov--0001</td>
                                            </tr>
                                            <tr>
                                                <td>Marital Status</td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td class="col-md-4">Father Name</td>
                                                <td class="col-md-5"></td>
                                            </tr>

                                            <tr>
                                                <td>Mother Name</td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>Qualification</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Work Experience</td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>Note</td>
                                                <td></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <div class="card mt-4">
                                        <div class="card-header" style="background: #ececed;">
                                            <span>Address</span>
                                        </div>
                                        <div class="card-body p-0">
                                            <table class="table table-hover ">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-md-4">Current Address</td>
                                                        <td class="col-md-5"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Permanent Address</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card mt-4">
                                        <div class="card-header" style="background: #ececed;">
                                            <span>Bank Account Details</span>
                                        </div>
                                        <div class="card-body p-0">
                                            <table class="table table-hover ">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-md-4">Account Title</td>
                                                        <td class="col-md-5"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Bank Name</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Branch Name</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Account Number</td>
                                                        <td></td>
                                                    </tr>

                                                    <tr>
                                                        <td>IFSC Code</td>
                                                        <td></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card mt-4">
                                        <div class="card-header" style="background: #ececed;">
                                            <span>Social Media Link</span>
                                        </div>
                                        <div class="card-body p-0">
                                            <table class="table table-hover ">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-md-4">Facebook URL</td>
                                                        <td class="col-md-5">
                                                            <a href="" target="_blank"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Twitter URL</td>
                                                        <td>
                                                            <a href="" target="_blank"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Linkedin URL</td>
                                                        <td>
                                                            <a href="" target="_blank"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Instagram URL</td>
                                                        <td>
                                                            <a href="" target="_blank"></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row p-0">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="staffprofile">

                                                <h5>Total Net Salary Paid</h5>
                                                <span>Rs: 0</span>
                                                <div class="icon-9 mt12font40">
                                                    <i class="fa fa-money"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-6-->

                                        <div class="col-md-6 col-sm-6">
                                            <div class="staffprofile">

                                                <h5>Total Gross Salary</h5>
                                                <span>Rs: 0</span>
                                                <div class="icon-9 mt12font40">
                                                    <i class="fa fa-money"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-6-->

                                        <div class="col-md-6 col-sm-6">
                                            <div class="staffprofile">

                                                <h5>Total Earning</h5>
                                                <span>Rs: 0</span>
                                                <div class="icon-9 mt12font40">
                                                    <i class="fa fa-money"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-6-->

                                        <div class="col-md-6 col-sm-6">
                                            <div class="staffprofile">

                                                <h5>Total Deduction</h5>
                                                <span>Rs: 0</span>
                                                <div class="icon-9 mt12font40">
                                                    <i class="fa fa-money"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-6-->

                                    </div>
                                    <div class="table-stats order-table table-responsive">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">Payslip # <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                                    <th class="avatar">Month-Year <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                                    <th>Date <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                                    <th>Mode <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                                    <th>Status <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                                    <th>Net Salary(Rs) <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                                    <th>Action <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>

                                            </tbody>
                                        </table>
                                        <hr>
                                        <div class="col-md-12">
                                            <h5 class="color-red text-center">No data available in table</h5>
                                            <p style="font-size: 12px;">Record 0 of 0</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="table-stats order-table table-responsive">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">Leave Type <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                                    <th class="avatar">Leave Date <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                                    <th>Days <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                                    <th>Apply Date <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                                    <th>Status <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                                    <th>Action <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>

                                            </tbody>
                                        </table>
                                        <hr>
                                        <div class="col-md-12">
                                            <h5 class="color-red text-center">No data available in table</h5>
                                            <p style="font-size: 12px;">Record 0 of 0</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="home2" role="tabpanel" aria-labelledby="home-tab2">
                                    <div class="row p-0">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="staffprofile">

                                                <h5>Total Present</h5>
                                                <span>14</span>
                                                <div class="icon-9 mt12font40">
                                                    <i class="fa  fa-check-square-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-6-->

                                        <div class="col-md-6 col-sm-6">
                                            <div class="staffprofile">

                                                <h5>Total Late</h5>
                                                <span>0</span>
                                                <div class="icon-9 mt12font40">
                                                    <i class="fa  fa-check-square-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-6-->

                                        <div class="col-md-6 col-sm-6">
                                            <div class="staffprofile">

                                                <h5>Total Absent</h5>
                                                <span>0</span>
                                                <div class="icon-9 mt12font40">
                                                    <i class="fa  fa-check-square-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-6-->

                                        <div class="col-md-6 col-sm-6">
                                            <div class="staffprofile">

                                                <h5>Total Half Day</h5>
                                                <span>0</span>
                                                <div class="icon-9 mt12font40">
                                                    <i class="fa  fa-check-square-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!--./col-md-6-->
                                        <div class="col-md-6 col-sm-6">
                                            <div class="staffprofile">

                                                <h5>Total Half Day</h5>
                                                <span>0</span>
                                                <div class="icon-9 mt12font40">
                                                    <i class="fa  fa-check-square-o"></i>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <!--./col-md-4-->
                                        <div class="col-md-3">
                                            <form id="" action="" method="">
                                                <div class="form-group">
                                                    <label class="sess18">Year</label>
                                                    <div class="sessyearbox">
                                                        <select class="form-control form-control-sm" style="margin-top: -5px;" name="year" autocomplete="off">
                                                            <option selected="" value="2018">2018</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="day-show float-right">
                                                <span>Present : <span > P </span></span>
                                                <span>Late : <span > L </span></span>
                                                <span>Absent : <span > A </span></span>
                                                <span>Half Day : <span > F </span></span>
                                                <span>Holiday : <span > H </span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="table-stats order-table table-responsive">
                                            <table class="table ">
                                                <thead>
                                                    <tr>
                                                        <th class="serial">Date</th>
                                                        <th class="avatar">Jan</th>
                                                        <th>Feb</th>
                                                        <th>Mar</th>
                                                        <th>Apr</th>
                                                        <th>May</th>
                                                        <th>Jun</th>
                                                        <th>Jul</th>
                                                        <th>Aug</th>
                                                        <th>Sep</th>
                                                        <th>Oct</th>
                                                        <th>Nov</th>
                                                        <th>Dec</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="serial">001.</td>

                                                    </tr>
                                                    <tr>
                                                        <td class="serial">002.</td>

                                                    </tr>
                                                    <tr>
                                                        <td class="serial">003.</td>

                                                    </tr>
                                                    <tr>
                                                        <td class="serial">004.</td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">
                                    <div class="col-md-12 p-0">
                                        <div class="alert alert-info">No Record Found</div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab2">
                                    <div class="col-md-12 p-0">
                                        <div class="alert alert-info">No Record Found</div>
                                    </div>
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