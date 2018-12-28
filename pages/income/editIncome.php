
<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>  <i class=" menu-icon fa fa-dollar mr-1"></i> Income  /  Add Income  </h1>
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
                           <span>Edit Income</span>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                            <div class="row"> 
                               <div class="col-md-12 form-group">
                                   <label for=""> Income Head</label>
                                 <select name="" id="" class="form-control-sm form-control" required>
                                    <option value=""> Select</option>
                                 </select> 
                               </div>
                               
                               <div class="col-md-12  form-group">
                                   <label for="">Name </label>
                                   <input type="text" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12  form-group">
                                   <label for="">Invoice Number</label>
                                   <input type="number" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12  form-group">
                                   <label for="">Date</label>
                                   <input type="date" name="" id="" class="form-control-sm form-control" required>
                               </div> 
                               
                               <div class="col-md-12  form-group">
                                   <label for="">Amount </label>
                                   <input type="text" name="" id="" class="form-control-sm form-control" required>
                               </div> 
                               <div class="col-md-12  form-group">
                                   <label for="">Note</label>
                                 <textarea name="" id="" cols="30" rows="2" class="form-control-sm form-control" required></textarea>
                               </div>
                               <div class="col-md-12  form-group">
                                   <label for="">Attach Document</label>
                                     <input type="file" name="" id="" class="" required > 
                               </div> 
                               <div class="col-md-12  form-group">
                                   <label for="">Description</label>
                                  <textarea name="" id="" cols="30" rows="2" class="form-control-sm form-control" required></textarea>
                               </div> 
                               <div class="col-md-12 ">
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
                           <span>Income List</span>
                        </div>
                        <div class="card-body">
                                <div class="table-stats order-table  table-responsive">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                  <th class="serial">#</th>  
                                                    <th>Name</th>
                                                    <th>Invoice Number</th>
                                                    <th>Date</th>
                                                    <th>Income Head</th>
                                                    <th>Amount</th> 
                                                    <th>Action</th>
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
                                                <td class="table-data">  <a href="<?php echo BASE_URL ."pages/income/editIncome.php" ?>"><button type="button"  class="btn btn-outline-primary btn-sm ml-2 float-left"><span class="ti-pencil-alt"></span></button></a>
                                                <button type="button"  class="btn btn-outline-danger btn-sm ml-2 float-left"><span class="ti-trash"></span></button>
                                              </td>

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