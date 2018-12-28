<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header d-inline-block">
                        <div class="page-title">
                            <h1><i class="ti-user mr-1"></i> Student Information / Disabeld Student</h1>
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
                    <i class="fa fa-search" aria-hidden="true"></i> <span class="ml-2"> Select Criteria </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
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
                                    <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form action="" method="post">
                                <div class="form-group ">
                                    <label for="Keyword" class=" form-control-label">Search By Keyword</label>
                                    <input type="text" id="Keyword" placeholder="Search By Student Name, Roll Number,Id" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">List View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Details View</a>
                    </li>
                </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content  p-1" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="table-stats order-table  table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>Admission(Num)</th>
                                            <th>Name(student)</th>
                                            <th>Class</th>
                                            <th>Father Name</th>
                                            <th>D.O.B</th>
                                            <th>Gender</th>
                                            <th>Category</th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>KK002</td>
                                            <td><a href="studentinformation.php"> karam</a></td>
                                            <td>2(B)</td>
                                            <td>karan</td>
                                            <td>27-may-2000</td>
                                            <td>Male</td>
                                            <td></td>
                                            <td></td>
                                            <td class="pr-0">
                                                <a class="btn btn-outline-primary btn-sm mt-2 ml-2"  href="editstudent.php"><i class="ti-pencil-alt"></i></a>
                                                <a class="btn btn-outline-danger btn-sm mt-2 ml-2" href=""><i class="ti-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="table-stats order-table  table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>Admission(Num)</th>
                                            <th>Name(student)</th>
                                            <th>Class</th>
                                            <th>Father Name</th>
                                            <th>D.O.B</th>
                                            <th>Gender</th>
                                            <th>Category</th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>KK002</td>
                                            <td><a href="studentinformation.php"> karam</a></td>
                                            <td>2(B)</td>
                                            <td>karan</td>
                                            <td>27-may-2000</td>
                                            <td>Male</td>
                                            <td></td>
                                            <td></td>
                                            <td class="pr-0">
                                               <a class="btn btn-outline-primary btn-sm mt-2 ml-2"  href="editstudent.php"><i class="ti-pencil-alt"></i></a>
                                               <a class="btn btn-outline-danger btn-sm mt-2 ml-2" href=""><i class="ti-trash"></i></a>
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
    </div>

    <!-- /.content -->

<?php include "../../include/footer.php" ?>
