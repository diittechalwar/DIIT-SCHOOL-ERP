
<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class=" menu-icon fa fa-money mr-1"></i>  Fees Collection  / Add Fees Discount</h1>
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
                           <span>Add Fees Discount</span>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                            <div class="row">  
                               <div class="col-md-12 form-group">
                                   <label for="">Name</label>
                                    <input type="text" name="" id="" class="form-control-sm form-control" required >
                               </div> 
                               <div class="col-md-12 form-group ">
                                   <label for="">Discount Code</label>
                                    <input type="text" name="" id="" class="form-control-sm form-control" required>
                               </div> 
                               <div class="col-md-12 form-group">
                                   <label for="">Amount</label>
                                    <input type="text" name="" id="" class="form-control-sm form-control" required>
                               </div> 
                               <div class="col-md-12 form-group">
                                   <label for="">Descripation</label>
                                    <textarea name="" id="" cols="30" rows="2" class="form-control-sm form-control" required></textarea>
                               </div>
                               <div class="col-md-12 form-group">
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
                          <span>Fees Discount List</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                <div class="table-stats order-table  table-responsive">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>  
                                                    <th>Name</th> 
                                                    <th>Discount Code</th>
                                                    <th>Amount</th> 
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <tr>  
                                                    <td>1</td>    
                                                    <td>One Time</td>  
                                                    <td>250Off</td> 
                                                    <td>500</td> 
                                                    <td class="pr-0">  <a href="<?php echo BASE_URL ."pages/feesCollection/feesDiscountAssign.php" ?>"><button type="button"  class="btn btn-outline-success btn-sm  ml-2 "><span class="ti-bookmark-alt"></span></button></a>
                                                    <a href="<?php echo BASE_URL ."pages/feesCollection/editFeesDiscount.php" ?>"><button type="button"  class="btn btn-outline-primary btn-sm  ml-2"><span class="ti-pencil-alt"></span></button></a>
                                                    <button type="button"  class="btn btn-outline-danger btn-sm ml-2"><span class="ti-trash"></span></button>
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