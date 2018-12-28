
<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>  <i class=" menu-icon fa fa-money mr-1"></i>  Fees Collection  / Fees Carry Forward</h1>
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
                          <span>Search Fees Carry Forward</span>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                            <div class="row">  
                               <div class="col-md-5">
                                   <label for="">Class</label>
                                   <select name="" id="" class="form-control form-control-sm" required>
                                        <option value=""> Select</option>
                                        <option value=""> 1</option>
                                        <option value=""> 2</option>
                                        <option value=""> 3</option>
                                        <option value=""> 4</option>
                                   </select>
                               </div> 
                               <div class="col-md-5">
                                   <label for="">Section</label>
                                   <select name="" id="" class="form-control form-control-sm" required>
                                        <option value=""> Select</option>
                                        <option value="">A</option>
                                        <option value="">B</option>
                                        <option value="">C</option> 
                                   </select>
                               </div> 
                               <div class="col-md-2 mt-4">
                                   <button type="submit" class="btn btn-sm btn-secondary float-right mt-2" >Search</button>
                               </div>
                            </div>
                            </form>
                        </div>
                </div>
        </div>

        <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> 
                        <span>Previous Session Balance Fees</span>
                        </div>
                        <div class="card-body">
                                <div class="table-stats order-table  table-responsive">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>  
                                                    <th>Student Name</th> 
                                                    <th>Adminssion Number</th> 
                                                    <th>Adminssion Date</th> 
                                                    <th>Roll Number</th> 
                                                    <th>Father Name</th> 
                                                    <th>Balance (Rs)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <tr>
                                               <td>1</td>    
                                                <td>Mahesh Sain</td>
                                                <td>kk001</td> 
                                                <td>27-Nov-2018</td> 
                                                <td>3</td> 
                                                <td>Murli Dhar Sain</td>    
                                                <td> <input type="text" name="" id="" class="form-control-sm form-control"> </td>

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