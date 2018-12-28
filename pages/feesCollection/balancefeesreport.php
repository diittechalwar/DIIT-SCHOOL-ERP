
<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1> <i class=" menu-icon fa fa-money mr-1"></i> Fees Collection  /  Balance Fees Report </h1>
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
                <form action="#" method="post"  >
                        <div class="row">
                            <div class="col-md-6">
                                <label for=""> Class</label>
                                <select name="" id="" class="form-control-sm form-control" required>
                                    <option name="" id="">Select</option>
                                    <option name="" id="">1</option>
                                    <option name="" id="">5</option>
                                    <option name="" id="">12</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                               <label for="">Fees Group</label>
                                <select name="" id="" class="form-control-sm form-control" required>
                                    <option name="" id="">Select</option>
                                </select>
                            </div>
                    
                        </div>
                        <button type="submit" class="float-right btn btn-secondary btn-sm mt-3"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search </button>
                </form>
            </div>
       </div>
       <div class="card">
            <div class="card-header"> 
                <span>Student Fees Report</span>
            </div> 
            <div class="card-body">
            <div class="table-stats order-table  table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th> 
                                    <th>Student Name</th>
                                    <th>Admission Number</th>
                                    <th>Roll Number</th>
                                    <th>Father Name	</th>
                                    <th>Total Fees (Rs)	</th>
                                    <th>Discount (Rs)	</th>
                                    <th>Fine (Rs)</th>
                                    <th>Paid Fees (Rs)</th>
                                    <th>Balance  (Rs)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nitesha</td>
                                    <td>FLIP001</td>
                                    <td>0001</td>
                                    <td>Gopal</td>
                                    <td>21200.00</td>
                                    <td>820.00</td>
                                    <td>105.00</td>
                                    <td>12135.00</td>
                                    <td>8245.00</td>
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