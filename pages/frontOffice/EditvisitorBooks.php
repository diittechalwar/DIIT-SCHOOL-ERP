<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                    <h1><i class=" menu-icon fa fa-bandcamp mr-1"></i> Front Office  /   Visitor Books</h1>
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
                          <span>Edit Visitor </span>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                            <div class="row">
                               <div class="col-md-12 form-group">
                                   <label for=""> Purpose</label>
                                   <select name="" id="" class="form-control-sm form-control " required>
                                       <option value=""> Select</option>
                                       <option value=""> Admission</option>
                                       <option value=""> Meet With Students</option>
                                       <option value=""> Fees</option>
                                       <option value=""> Complaint</option>
                                       <option value=""> Fees Payment</option>
                                   </select>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for=""> Name</label>
                                   <input type="text" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for=""> Phone</label>
                                   <input type="number" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for=""> ID Card</label>
                                   <input type="text" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for=""> Number Of Person</label>
                                   <input type="number" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for=""> Date</label>
                                   <input type="date" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for=""> In Time</label>
                                   <input type="time" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for=""> Out Time</label>
                                   <input type="time" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for=""> Note</label>
                                  <textarea name=" " id="" cols="30" rows="2" class="form-control-sm form-control" required></textarea>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for=""> Attach Document</label>
                                   <input type="file" name="" id="" class="  " required>
                               </div>
                               <div class="col-md-12">
                               <hr>
                                   <button type="submit" class="btn btn-secondary btn-sm float-right" >Submit</button>
                               </div>
                            </div>
                            </form>
                        </div>
                </div>
        </div>

        <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> 
                            <span>Visitor List</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                <div class="table-stats  order-table  table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th class="avatar">PurPose</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Date</th>
                                                    <th>In Time</th>
                                                    <th>Out Time</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <tr>
                                               <td>1</td>
                                               <td>Complaint</td>
                                                <td>Mahesh</td>
                                                <td>7023615476</td> 
                                                <td>12/05/2018</td>
                                                <td>1:15 PM</td>
                                                <td>12:20 AM</td> 
                                                <td class="table-data">  <button type="button"  data-toggle="modal" data-target="#details" class="btn btn-outline-secondary btn-sm  ml-2"><span class="ti-align-justify"></span></button> 
                                                     <a href="<?php echo BASE_URL ."pages/frontOffice/EditvisitorBooks.php" ?>"><button type="button"  class="btn btn-outline-primary btn-sm  ml-2"><span class="ti-pencil-alt"></span></button></a>
                                                     <button type="button"  class="btn btn-outline-danger  btn-sm ml-2"><span class="ti-trash"></span></button> </td>
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
<!-- /.content -->
<!-- model box code start -->

   <div class="modal fade show" id="details" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"  >
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
                                <th class="cc-2"><label for="">Purpose</label></th>
                                <td class="cc-2">Admission</td>
                                <th class="cc-2"><label for="">Name</label></th>
                                <td class="cc-2">Test Admission</td>
                            </tr>
                            <tr>
                                <th><label for="">Phone</label></th>
                                <td>0123456788</td>
                                <th><label for="">	Number Of Person</label></th>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th><label for="">Date</label></th>
                                <td>06-Dec-2018</td>
                                <th><label for="">	In Time</label></th>
                                <td>01:15 PM</td>
                            </tr>
                            <tr>
                                <th><label for="">Out Time</label></th>
                                <td>01:15 PM</td>
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