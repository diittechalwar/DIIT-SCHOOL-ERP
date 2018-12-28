
<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                         <h1><i class=" menu-icon fa fa-bandcamp mr-1"></i> Front Office / Complain</h1>
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
                          <span>Add Complain</span>
                       </div>
                        <div class="card-body">
                            <form action="" method="post">
                            <div class="row"> 
                               <div class="col-md-12 form-group">
                                   <label for=""> Complain Type</label>
                                 <select name="" id="" class="form-control-sm form-control"   required>
                                    <option value=""> Select</option>
                                 </select> 
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for=""> Source</label>
                                   <select name="" id="" class="form-control-sm form-control"   required>
                                    <option value=""> Select</option>
                                 </select> 
                               </div> 
                               <div class="col-md-12 form-group">
                                   <label for="">Complain By</label>
                                   <input type="text" name="" id="" class="form-control-sm form-control"   required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for="">Phone</label>
                                   <input type="number" name="" id="" class="form-control-sm form-control"   required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for="">Date</label>
                                   <input type="date" name="" id="" class="form-control-sm form-control"   required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for="">Descripation</label>
                                 <textarea name="" id="" cols="30" rows="2" class="form-control-sm form-control" required></textarea>
                               </div>
                               
                               <div class="col-md-12 form-group">
                                   <label for="">Action Taken</label>
                                   <input type="text" name="" id="" class="form-control-sm form-control" required>
                               </div> 
                               <div class="col-md-12 form-group">
                                   <label for="">Note</label>
                                 <textarea name="" id="" cols="30" rows="2" class="form-control-sm form-control" required></textarea>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for="">Attach Document</label>
                                <input type="file" name="" id="" class="" required> 
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
                          <span>Complain  List</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                <div class="table-stats order-table   table-responsive">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th> 
                                                    <th> Compalin Type</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Date</th> 
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <tr>
                                               <td>1</td> 
                                                <td>General</td>
                                                <td>Mahesh </td> 
                                                <td>7023615476</td>
                                                <td>12/05/2018</td> 
                                                <td class="table-data pr-0"> <button type="button"  data-toggle="modal" data-target="#complain" title="Details" class="btn btn-outline-secondary btn-sm ml-2"><span class="ti-align-justify"></span></button> 
                                                <a href="<?php echo BASE_URL ."pages/frontOffice/editComplain.php" ?>"><button type="button" title="Edit"  class="btn btn-outline-primary btn-sm ml-2  float-left"><span class="ti-pencil-alt"></span></button></a>
                                                <button type="button"  class="btn btn-outline-danger btn-sm  float-left ml-2" title="Delete"><span class="ti-trash"></span></button>
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
  
<!-- model box code start -->

<div class="modal fade show" id="complain" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"  >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title one-line" id="mediumModalLabel">Details</h5>
                    <button type="button" class="close" data-dismiss="modal"   >
                        x
                    </button>
                </div>
                <div class="modal-body">
                     <div class="col-md-12">
                        <table class="table table-bordered">
                            <tr>
                                <th><label for="">Complain </label></th>
                                <td >1</td>
                                <th><label for="">Complain Type</label></th>
                                <td >Copy or book lo</td>
                            </tr>
                            <tr>
                                <th><label for="">Source</label></th>
                                <td> </td>
                                <th><label for="">	Name</label></th>
                                <td>Mahesh Sain</td>
                            </tr>
                            <tr>
                                <th><label for="">Phone</label></th>
                                <td>7023615476</td>
                                <th><label for="">Date</label></th>
                                <td>27/01/2018</td>
                            </tr> 
                            <tr>
                                <th><label for="">Description</label></th>
                                <td></td>
                                <th><label for="">Action Taken</label></th>
                                <td></td>
                            </tr> 
                            <tr>
                                <th><label for="">Assigned</label></th>
                                <td></td>
                                <th><label for="">Note</label></th>
                                <td></td>
                            </tr> 

                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button> 
                </div>
            </div>
        </div>
    </div>
<!-- model box code End -->
<?php include "../../include/footer.php" ?>