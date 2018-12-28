
<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class=" menu-icon fa fa-money mr-1"></i>  Fees Collection  /  Search Fees Payment  </h1>
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
                               <label for="">Payment Id</label>
                               <input type="text" class="form-control-sm form-control" required>
                            </div>
                            <div class="col-md-4 mt-4">
                            <button type="submit" class="btn btn-secondary btn-sm mt-2"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search </button>
                            </div>
                        </div>
                      
                </form>
            </div>
       </div>
       <div class="card">
            <div class="card-header"> 
                <span> Payment Id Detail</span>
            </div> 
            <div class="card-body">
            <div class="table-stats order-table table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th> 
                                    <th>Payment Id</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Fees Group</th>
                                    <th>Fees Type</th>
                                    <th>Mode</th>
                                    <th>Amount</th>
                                    <th>Discount</th>
                                    <th>Fine</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Balance Master	A</td>
                                    <td>Previous Session Balance	</td>
                                    <td>29-Dec-2018	</td>
                                    <td>Tapan Das</td>
                                    <td>0.00	</td>
                                    <td> 0.0</td>
                                    <td> 0.00</td>
                                    <td> 0.00</td>
                                    <td>0.00</td>         
                                    <td>0.00</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary btn-sm"> Action</button> 
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