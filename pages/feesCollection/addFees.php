<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class=" menu-icon fa fa-money mr-1"></i> Fees Collection / Student  Fees </h1>
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
                <i class="fa fa-search" aria-hidden="true"></i> <span class="ml-2">Select Criteria</span>
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="student-img" src="../../images/admin.jpg" alt="">
                            </div>
                            <div class="col-md-10 table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th class="bozero">Name</th>
                                            <td class="bozero">Nitesha </td>
                                            <th class="bozero">Class Section</th>
                                            <td class="bozero">1 (A) </td>
                                        </tr>
                                        <tr>
                                            <th>Father Name</th>
                                            <td>Gopal </td>
                                            <th>Admission Number</th>
                                            <td>FLIP001</td>
                                        </tr>
                                        <tr>
                                            <th>Mobile Number</th>
                                            <td></td>
                                            <th>Roll Number</th>
                                            <td> 0001
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Category</th>
                                            <td>
                                                GEN
                                            </td>
                                            <th>RTE</th>
                                            <td><b class="text-danger"> No </b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <!-- <strong class="card-title" v-if="headerText">Student List</strong> -->
                <button type="button" data-toggle="modal" data-target="#editEnquiry" class="btn btn-secondary btn-sm">Assign
                    Fess </button>
                <button type="button" data-toggle="modal" data-target="#addEnquiry" class=" float-right btn btn-secondary btn-sm"><i
                        class="fa fa-plus"></i> Add Fees </button>
            </div>
            <div class="card-body">
               
                    <div class="table-top-div">
                    <div class="table-stats order-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Fees Group</th>
                                    <th>Fees Code</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Amount (Rs)</th>
                                    <th>Payment Id</th>
                                    <th>Mode</th>
                                    <th>Date</th>
                                    <th>Discount (Rs)</th>
                                    <th>Fine (Rs)</th>
                                    <th>Paid (Rs)</th>
                                    <th>Balance (Rs)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tuition Fee </td>
                                    <td> Exam Fee</td>
                                    <td>01-Feb-2018 s</td>
                                    <td> <button type="button" class="btn btn-outline-danger btn-sm">Paid</button> </td>
                                    <td> 200.00 </td>
                                    <td>37/1</td>
                                    <td>Cash</td>
                                    <td>05-Dec-2018</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td></td>
                                    <td>200.00 </td>
                                    <td class="mt-4 p-0">
                                        <button type="button" data-toggle="modal" data-target="#editEnquiry" class="btn float-left ml-1 btn-outline-primary btn-sm"><span
                                            class=" ti-printer"></span></button>
                                        <button type="button" data-toggle="modal" data-target="#phoneCallLog" class="btn ml-1 btn-outline-danger btn-sm"><span
                                            class="ti-reload"></span></button>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
             
            </div>
        </div>


        <!-- Model box add a Enquiry Data  -->
        <div class="modal fade show" id="addEnquiry" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content"> 
                    <div class="modal-header">
                        <h5 class="modal-title one-line" id="mediumModalLabel">Fees Collection</h5>
                        <button type="button" class="close" data-dismiss="modal"   >
                           x
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="">Date</label>
                                    <input type="date" class="form-control-sm form-control" name="" required>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="">Amount</label>
                                    <input type="number" disabled class="form-control-sm form-control" name="" value="0" required>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="">Amount</label>
                                    <input type="number" class="form-control-sm form-control" name="" value="0" required>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="">Discount Group</label>
                                    <select name="" id="" class="form-control-sm form-control" required>
                                        <option value="">Select</option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="">Discount</label>
                                    <input type="text" class="form-control-sm form-control" value="0" required>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="">Fine</label>
                                    <input type="text" class="form-control-sm form-control" value="0" required>
                                </div>
                                <div class="col-md-4 form-group mt-3">
                                    <label for="">Payment Mode :-</label> <br>
                                    <div class="radio radio-info radio-inline float-left pr-3">
                                        <input checked="" type="radio" id="attendencetype53-0" value="1" name="attendencetype53">
                                        <label for="attendencetype53-0">
                                            Cheque
                                        </label>
                                    </div>
                                    <div class="radio radio-info radio-inline float-left pr-3">
                                        <input type="radio" id="attendencetype53-0" value="2" name="attendencetype53">
                                        <label for="attendencetype53-1">
                                            Cash
                                        </label>
                                    </div>
                                    <div class="radio radio-info radio-inline float-left pr-3">
                                        <input type="radio" id="attendencetype53-0" value="3" name="attendencetype53">
                                        <label for="attendencetype53-2">
                                            Dd
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 form-group">
                                    <label for="">Note</label>
                                    <textarea name="" id="" cols="10" rows="2" class="form-control-sm form-control" required></textarea>
                                </div>
                              
                                <div class="col-md-12">
                                <hr>
                                    <button type="submit" class="btn btn-sm btn-secondary float-right ml-2">Submit</button>
                                    <button type="button" class="btn btn-sm btn-danger float-right ml-2" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                 
                </div>
            </div>
        </div>
        <!-- Model box Edit A Enquiry Data  -->
        <div class="modal fade show" id="editEnquiry" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title one-line" id="mediumModalLabel">Assign Fees</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            x
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Fees Group</label>
                                    <select name="" id="" class="form-control-sm form-control" required>
                                        <option value="">Select</option>
                                        <option value="">One Time</option>
                                        <option value="">Monthly</option>
                                        <option value="">Yearly</option>
                                        <option value="">Quartly</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                <hr>
                                    <button type="submit" class="btn btn-sm btn-secondary float-right ml-2">Submit</button>
                                    <button type="button" class="btn btn-sm btn-danger float-right ml-2" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                
                </div>
            </div>
        </div>
        
        <!--  model box Code in End -->
    </div><!-- .animated -->
</div>
<!-- /.content -->

<?php include "../../include/footer.php" ?>