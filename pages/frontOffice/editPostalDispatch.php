
<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                         <h1><i class=" menu-icon fa fa-bandcamp mr-1"></i> Front Office  /   Postal Dispatch   </h1>
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
                           <span>Edit Postal Dispatch</span>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                            <div class="row"> 
                               <div class="col-md-12 form-group">
                                   <label for=""> To Title</label>
                                   <input type="text" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for=""> Reference No.</label>
                                   <input type="number" name="" id="" class="form-control-sm form-control" required>
                               </div> 
                               <div class="col-md-12 form-group">
                                   <label for="">Address</label>
                                 <textarea name="" id="" cols="30" rows="2" class="form-control-sm form-control" required></textarea>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for="">Note</label>
                                 <textarea name="" id="" cols="30" rows="2" class="form-control-sm form-control" required></textarea>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for=""> From Title</label>
                                   <input type="text" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for="">Date</label>
                                   <input type="date" name="" id="" class="form-control-sm form-control"required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for="">Attach Document</label>
                                <input type="file" name="" id=""   required> 
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
                        <span>Postal Dispatch List</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                <div class="table-stats order-table  table-responsive">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th> 
                                                    <th>To Title</th>
                                                    <th>Reference No.</th>
                                                    <th>From Title</th>
                                                    <th>Date</th> 
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <tr>
                                               <td>1</td> 
                                                <td>Mahesh</td>
                                                <td>001 </td> 
                                                <td>Flip School</td>
                                                <td>12/05/2018</td> 
                                                <td class="pr-0"> <button type="button"  data-toggle="modal" data-target="#details" class="btn btn-outline-secondary btn-sm float-left ml-2"><span class="ti-align-justify"></span></button> 
                                                <a href="<?php echo BASE_URL ."pages/frontOffice/editPostalDispatch.php" ?>"><button type="button"  class="btn btn-outline-primary btn-sm  float-left ml-2"><span class="ti-pencil-alt"></span></button></a>
                                                <button type="button"  class="btn btn-outline-danger btn-sm  float-left ml-2"><span class="ti-trash"></span></button>
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
                                <th ><label for="">To Title	</label></th>
                                <td >Rakesh</td>
                                <th ><label for="">Reference No.</label></th>
                                <td>1002</td>
                            </tr>
                            <tr>
                                <th><label for="">Address</label></th>
                                <td>S.no Jaipur	</td>
                                <th><label for="">Note</label></th>
                                <td>Asd</td>
                            </tr>
                            <tr>
                                <th><label for="">From Title	</label></th>
                                <td>Flip School</td>
                                <th><label for="">Date</label></th>
                                <td>27/01/2018</td>
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