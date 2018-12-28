
<?php include "../../include/header.php" ?>
        <!-- /#header -->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-12">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1><i class="menu-icon fa fa-cogs mr-1"></i> Human Resource / Staff Directory</h1>
                            </div>
                        </div>
                        <a href="add_staff.php" class="btn btn-secondary btn-sm mt-2 float-right color-white"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Staff</a>
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
                    <div class="row">
                        <div class="col-md-6">
                            <form action="#">
                                <label for="">Role <sup class="color-red">*</sup></label>
                                <select name="selectSm" id="selectSm" class="form-control-sm form-control" required>
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
                                <button type="submit" class="btn btn-secondary btn-sm mt-4 float-right"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form action="">
                                <label for="">Search By Keyword</label>
                                <input type="text" placeholder="Search By Staff ID,Name,Role etc..." class="form-control-sm form-control" required>
                                <button type="submit" class="btn btn-secondary btn-sm mt-4 float-right"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Card View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-list" aria-hidden="true"></i> List View</a>
                    </li>
                </ul>
                </div>
                <div class="card-body ">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                       <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <div class="admin-card-div">
                                    <div class="row p-0">
                                        <div class="col-md-6">
                                            <div class="img-box-staff">
                                            <img src="http://demo.flipscool.com/uploads/staff_images/no_image.png">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="staff-text-div">
                                          <h5 class="mt-2">Super Admin</h5>
                                          <span>Super Admin</span>
                                           <div class="stafficons mt-4">
                                                <a title="profile" class="btn btn-outline-secondary btn-sm mr-2" href="staffprofile.php"><i class="fa fa-align-justify" aria-hidden="true"></i></a>
                                                <a title="edit" href="add_staff.php" class="btn btn-outline-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="admin-card-div">
                                    <div class="row p-0">
                                        <div class="col-md-6">
                                            <div class="img-box-staff">
                                            <img src="http://demo.flipscool.com/uploads/staff_images/no_image.png">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="staff-text-div">
                                          <h5 class="mt-2">Super Admin</h5>
                                          <span>Super Admin</span>
                                           <div class="stafficons mt-4">
                                                <a title="profile" class="btn btn-outline-secondary btn-sm mr-2" href="staffprofile.php"><i class="fa fa-align-justify" aria-hidden="true"></i></a>
                                                <a title="edit" href="add_staff.php" class="btn btn-outline-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="admin-card-div">
                                    <div class="row p-0">
                                        <div class="col-md-6">
                                            <div class="img-box-staff">
                                            <img src="http://demo.flipscool.com/uploads/staff_images/no_image.png">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="staff-text-div">
                                          <h5 class="mt-2">Super Admin</h5>
                                          <span>Super Admin</span>
                                           <div class="stafficons mt-4">
                                                <a title="profile" class="btn btn-outline-secondary btn-sm mr-2" href="staffprofile.php"><i class="fa fa-align-justify" aria-hidden="true"></i></a>
                                                <a title="edit" href="add_staff.php" class="btn btn-outline-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-stats order-table ov-h ">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="serial">Staff ID</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Department</th>
                                        <th>Designation</th>
                                        <th>Mobile No.</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="serial">1.</td>
                                        <td> <a href="staffprofile.php" style="color: blue;">Teacher</a></td>
                                        <td>  <span class="name">Teacher</span> </td>
                                        <td> <span class="product">Computer</span> </td>
                                        <td><span class="count">Teacher</span></td>
                                        <td>9887766554</td>
                                        <td>
                                            <a title="profile" class="btn btn-outline-secondary btn-sm mr-2" href="staffprofile.php"><i class="fa fa-align-justify" aria-hidden="true"></i></a>
                                            <a title="edit" href="add_staff.php" class="btn btn-outline-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
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