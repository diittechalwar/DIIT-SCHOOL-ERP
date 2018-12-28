
<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1> <i class=" menu-icon fa fa-money mr-1"></i> Fees Collection  /  Collect Fees  </h1>
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
                            <div class="col-md-4">
                                <label for="">Class</label>
                              <select name="" id="" class="form-control-sm form-control" required >
                                  <option value=""> Select</option>
                                  <option value="">1</option>
                                  <option value="">2</option>
                                  <option value="">5</option>
                                  <option value="">8</option>
                                  <option value="">12</option>
                              </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">Section</label>
                              <select name="" id="" class="form-control-sm form-control" required >
                                  <option value=""> Select</option>
                              </select>
                            </div>
                            <div class="col-md-4">
                               <label for="">Search By Keyword</label>
                               <input type="text" class="form-control-sm form-control" required  placeholder="Search By Student Name,Roll Number,Enroll Number,National Id,Local Id Etc.">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary btn-sm mt-4 float-right"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search </button>
                </form>
            </div>
       </div>
       <div class="card">
             
            <div class="card-body">
            <div class="table-stats order-table  table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th> 
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Admissin Number</th>
                                    <th>Student Name</th>
                                    <th>Father Name</th>
                                    <th>Date Of Birth</th>
                                    <th>Phone</th>
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
                                    <td>02-Feb-2012</td>
                                    <td>7851533143</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="addFees.php">
                                            <button type="button" class="btn btn-outline-primary btn-sm">Rs Collect Fees</button> 
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