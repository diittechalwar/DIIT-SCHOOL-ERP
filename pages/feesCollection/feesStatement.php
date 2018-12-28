
<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class=" menu-icon fa fa-money mr-1"></i> Fees Collection  /  Fees Statement </h1>
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
                    
                        <div class="row">
                            <div class="col-md-4">
                                <label for=""> Class</label>
                                    <select name="" id="" class="form-control-sm form-control" required>
                                        <option name="" id="">Select</option>
                                        <option name="" id="">1</option>
                                        <option name="" id="">5</option>
                                        <option name="" id="">12</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                <label for=""> Section</label>
                                    <select name="" id="" class="form-control-sm form-control" required>
                                        <option name="" id="">Select</option>
                                    </select>
                                </div>
                            <div class="col-md-4">
                               <label for="">Fees Group</label>
                                <select name="" id="" class="form-control-sm form-control" required>
                                    <option name="" id="">Select</option>
                                    <option name="" id="">Monthly</option>
                                    <option name="" id="">Yearly</option>
                                    <option name="" id="">Tutaion Fee</option>
                                </select>
                            </div>
                            
                        </div>
                        <button type="submit" class="float-right btn btn-secondary btn-sm mt-3"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search </button>
                </form>
            </div>
       </div>
       <div class="card">
            <div class="card-header"> 
               <i class="fa fa-search" aria-hidden="true"></i> <span class="ml-2">Select Criteria</span>
            </div>
            <div class="card-body">
                <form action="#" method="post">
                <div class="row">
                            <div class="col-md-2">
                                <img class="student-img" src="../../images/admin.jpg" alt="">
                            </div>
                            <div class="col-md-10  ">
                            <table class="table table-striped mb0 font13">
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
                </form>
            </div>
       </div>
       <div class="card">
            <div class="card-header"> 
               <span>Fees Statement</span>
            </div> 
            <div class="card-body">
                <div class="table-stats order-table table-responsive" >
                <table class="table " >
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
                                    <th>Balance (Rs) </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tuition Fee</td>
                                    <td>Exam Fee	</td>
                                    <td>	01-Feb-2018</td>
                                    <td><button type="button"class="btn btn-danger btn-sm">Unpaid</button></td>
                                    <td>200.00	</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>0.00	</td>
                                    <td>0.00	</td>
                                    <td>	0.00	</td>
                                    <td>200.00</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Grand Total</td>
                                    <td>Rs20400.00	</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Rs0.00</td>
                                    <td>Rs0.00</td>
                                    <td>Rs0.00</td>
                                    <td>Rs20400.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
       </div>

</div><!-- .animated -->
</div>
<!-- /.content -->

<?php include "../../include/footer.php" ?>