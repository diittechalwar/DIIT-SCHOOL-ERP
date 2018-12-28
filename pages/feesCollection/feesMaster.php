
<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1> <i class=" menu-icon fa fa-money mr-1"></i>  Income  /   Fees Master</h1>
                    </div>
                </div>
            </div>
             
        </div>
    </div>
</div>
<div class="content">
    <div class="animated row">
        <div class="col-md-4">
                    <div class="card">
                        <div class="card-header"> 
                            <span>Add Fees Master</span>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                            <div class="row"> 
                               <div class="col-md-12 form-group">
                                   <label for="">Fee Frequency </label>
                                    <select name="" id="" class="form-control-sm form-control" required>
                                        <option value="">Select</option>
                                        <option value="">Yearly</option>
                                    </select>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for="">Fees Group </label>
                                    <select name="" id="" class="form-control-sm form-control" required>
                                        <option value="">Select</option>
                                        <option value="">One Time</option>
                                    </select>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for="">Fees Type</label>
                                    <select name="" id="" class="form-control-sm form-control"  required>
                                        <option value="">Select</option>
                                        <option value="">Adminssion</option>
                                    </select>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for="">Due Date</label>
                                    <input type="date" name="" id="" class="form-control-sm form-control" required>
                               </div> 
                               <div class="col-md-12 form-group">
                                   <label for="">Amount</label>
                                    <input type="text" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12">
                               <hr>
                                   <button type="submit" class="btn btn-sm btn-secondary float-right" >Submit</button>
                               </div>
                            </div>
                            </form>
                        </div>
                </div>
        </div>

        <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> 
                           <span>Fees Master List</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                <div class="table-stats  order-table table-responsive">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>  
                                                    <th>Fees Group</th>
                                                    <th>Fees Code</th>  
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <tr>
                                               <td>1</td>    
                                                <td>School Fees</td> 
                                                <td>Adm rs. 25000</td> 
                                                <td>  <a href="<?php echo BASE_URL ."pages/feesCollection/editFeesMaster.php" ?>"><button type="button"  class="btn btn-outline-primary btn-sm ml-2 "><span class="ti-pencil-alt"></span></button></a>
                                                <button type="button"  class="btn btn-outline-danger btn-sm ml-2 "><span class="ti-trash"></span></button>
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
    </div><!-- .animated -->
</div>
  
<?php include "../../include/footer.php" ?>