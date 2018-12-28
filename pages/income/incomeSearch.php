
<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>  <i class=" menu-icon fa fa-dollar mr-1"></i> Income  / Search Income  </h1>
                    </div>
                </div>
            </div>
             
        </div>
    </div>
</div>
<div class="content">
    <div class="animated row">
        <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> 
                            <span>Income</span>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                            <div class="row"> 
                                <div class="col-md-6">
                                        <div class="row">
                                            <form action="" method="post">
                                                <div class="col-md-6">
                                                    <label for="">Date From</label>
                                                        <input type="date" name="" id="" class="form-control-sm form-control" required> 
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <label for="">Date To </label>
                                                    <input type="date" name="" id="" class="form-control-sm form-control" required>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <button type="submit" class="btn btn-sm btn-secondary float-right" >Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="">Search</label>
                                                    <input type="text" name="" id="" class="form-control-sm form-control" required>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <button type="submit" class="btn btn-sm btn-secondary float-right" >Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                            </form>
                        </div>
                </div>
        </div>

        <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> 
                            <span>Income List</span>
                        </div>
                        <div class="card-body">
                                <div class="table-stats  order-table table-responsive">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>  
                                                    <th>Name</th>
                                                    <th>Invoice Number</th>
                                                    <th>Income Head</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <tr>
                                               <td>1</td>  
                                                <td>Mahesh </td> 
                                                <td>011</td>
                                                <td>12/05/2018</td> 
                                                <td>Donation</td> 
                                                <td>100000</td> 
                                                 

                                               </tr>
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                </div>
        </div>
    </div><!-- .animated -->
</div>
  
<?php include "../../include/footer.php" ?>