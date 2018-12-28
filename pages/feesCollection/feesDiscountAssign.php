
<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1> <i class=" menu-icon fa fa-money mr-1"></i>  Fees Collection  / Add Fees Discount</h1>
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
                           <span>Add Fees Discount</span>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                            <div class="row">  
                               <div class="col-md-2">
                                   <label for="">Class</label>
                                   <select name="" id="" class="form-control-sm form-control" required>
                                        <option value=""> Select</option>
                                        <option value=""> 1</option>
                                   </select>
                               </div> 
                               <div class="col-md-2">
                                   <label for="">Section</label>
                                   <select name="" id="" class="form-control-sm form-control" required>
                                        <option value=""> Select</option>
                                        <option value=""> A</option>
                                   </select>
                               </div> 
                               <div class="col-md-2">
                                   <label for="">Category</label>
                                   <select name="" id="" class="form-control-sm form-control" required>
                                        <option value=""> Select</option>
                                        <option value="">GEN</option>
                                        <option value="">OBC</option>
                                        <option value="">SC</option>
                                        <option value="">ST</option>
                                   </select>
                               </div> 
                               <div class="col-md-2">
                                   <label for="">Gender</label>
                                   <select name="" id="" class="form-control-sm form-control" required>
                                        <option value=""> Select</option>
                                        <option value="">Male</option>
                                        <option value="">Female</option> 
                                   </select>
                               </div> 
                               <div class="col-md-2">
                                   <label for="">RTE</label>
                                   <select name="" id="" class="form-control-sm form-control" required>
                                        <option value=""> Select</option>
                                        <option value="">Yes</option>
                                        <option value="">No</option> 
                                   </select>
                               </div>
                               <div class="col-md-2 mt-4">
                                   <button type="submit" class="btn btn-secondary btn-sm float-right" >Submit</button>
                               </div>
                            </div>  
                            </form>
                        </div>
                </div>
        </div>

        <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> 
                           <span>Assign Fees Discount</span>
                        </div>
                        <div class="card-body">
                                <div class="table-stats order-table table-responsive">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>  
                                                    <th>Fees Discount</th> 
                                                    <th><input type="checkbox" name="" id="" class="mr-1"> All</th>
                                                    <th>Admission Number</th>
                                                    <th>Student Name</th> 
                                                    <th>Class</th>
                                                    <th>Father Name</th>
                                                    <th>Category</th>
                                                    <th>Gender</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <tr>  
                                                    <td>1</td>    
                                                    <td>25off </td>  
                                                    <td><input type="checkbox" name="" id=""></td> 
                                                    <td>FLIP001</td> 
                                                    <td> Nitesha	</td>
                                                    <td> 1(A)	</td>
                                                    <td>Gopal</td>
                                                    <td>Gen</td>
                                                   <td>Male</td>

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