<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header d-inline-block">
                        <div class="page-title">
                            <h1><i class="ti-book mr-1"></i> Library / Select Criteria</h1>
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
                    <form action="#" method="post">
                        <div class=" row">
                        <div class="col-md-6">
                        <div class="form-group">
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
                        <div class="form-group">
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
                        <div class="form-actions ">
                            <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <span>Students</span>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">Member Id</th>
                                    <th>Library Card Number</th>
                                    <th>Admission Number</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>Father Name</th>
                                    <th>Date Of Birth</th>
                                    <th>Gender</th>
                                    <th>Mobile Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>002</td>
                                    <td>FlIP001</td>
                                    <td>Nitesha</td>
                                    <td>1(A)</td>
                                    <td>Gopal</td>
                                    <td>22-Jun-2004</td>
                                    <td>Male</td>
                                    <td>9874563210</td>
                                    <td>
                                    <a class="btn btn-outline-primary btn-sm" href="" data-toggle="modal" data-target="#staticModal"><i class="ti-share-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td></td>
                                    <td>FlIP051</td>
                                    <td>Gopal</td>
                                    <td>3(A)</td>
                                    <td>Gopal</td>
                                    <td>20-Jan-2003</td>
                                    <td>Male</td>
                                    <td>9784562310</td>
                                    <td>
                                        <a class="btn btn-outline-primary btn-sm" href="" data-toggle="modal" data-target="#staticModal1"><i class="ti-plus"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title float-left" id="staticModalLabel">LIBRARY</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                            Are you sure want surnder membership?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-secondary btn-sm">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="staticModal1" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title float-left" id="staticModalLabel">Library</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="form-group ">
                                    <div class="col-md-12">
                                        <label for="Book_Title" class=" form-control-label">LIBRARY CARD NUMBER</label>
                                        <input type="number" id="Book_Title" placeholder="" class="form-control form-control-sm" required>
                                    </div>
                                </div>
                                <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-secondary btn-sm float-right">Add</button>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content -->

    <?php include "../../include/footer.php" ?>