
<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class=" menu-icon fa fa-money mr-1"></i>  Fees Collection  /  Search Due Payment  </h1>
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
                            <div class="col-md-4 form-group">
                               <label for="">Fees Group</label>
                                <select name="" id="" class="form-control-sm form-control" required>
                                    <option name="" id="">Select</option>
                                    <option name="" id="">Monthly</option>
                                    <option name="" id="">Yearly</option>
                                    <option name="" id="">Tutaion Fee</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                               <label for=""> Class</label>
                                <select name="" id="" class="form-control-sm form-control" required>
                                    <option name="" id="">Select</option>
                                    <option name="" id="">1</option>
                                    <option name="" id="">5</option>
                                    <option name="" id="">12</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                               <label for=""> Section</label>
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
               <span>Students List</span>
            </div> 
            <div class="card-body" >
                <div class="table-stats order-table table-responsive">
                    <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th> 
                                    <th>Admission no</th>
                                    <th>Roll No</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>D.O.B</th>
                                    <th>Duo Date</th>
                                    <th>Amount (Rs)</th>
                                    <th>Deposit (Rs)</th>
                                    <th>Discount (Rs)</th>
                                    <th>Fine (Rs)</th>
                                    <th>Blance (Rs)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>A</td>
                                    <td>007</td>
                                    <td>Anushua Das</td>
                                    <td>Tapan Das</td>
                                    <td>Tapan Das</td>
                                    <td>Tapan Das</td>
                                    <td>Tapan Das</td>
                                    <td>02-Feb-2012</td>
                                    <td>7851533143</td>
                                    
                                    <td>Active</td>
                                    <td>2000</td>
                                    <td>
                                        <a href="">
                                            <button type="button" class="btn btn-outline-primary btn-sm">Action</button> 
                                        </a>
                                        </td>

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