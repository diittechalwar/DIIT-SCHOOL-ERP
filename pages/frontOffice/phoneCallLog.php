
<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class=" menu-icon fa fa-bandcamp mr-1"></i> Front Office  /   Phone Call Log</h1>
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
                         <span>Add Phone Call Log</span>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                            <div class="row"> 
                               <div class="col-md-12 form-group">
                                   <label for=""> Name</label>
                                   <input type="text" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for=""> Phone</label>
                                   <input type="number" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for="">Date</label>
                                   <input type="date" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for="">Description</label>
                                 <textarea name="" id="" cols="30" rows="2" class="form-control-sm form-control" required></textarea>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for=""> Next Follow Up Date</label>
                                   <input type="date" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for="">Call Duration</label>
                                   <input type="text" name="" id="" class="form-control-sm form-control" required>
                               </div>
                               <div class="col-md-12 form-group">
                                   <label for="">Note</label>
                                 <textarea name="" id="" cols="30" rows="2" class="form-control-sm form-control" required></textarea>
                               </div>
                               <div class="col-md-12 ">
                                   <label for=""> Call Type :-</label>
                                   <div class="radio radio-info radio-inline  pr-3">
                                        <input checked="" type="radio" id="attendencetype53-0" value="1" name="attendencetype53">
                                        <label for="attendencetype53-0">
                                          Incoming
                                        </label>
                                    </div>
                                    <div class="radio radio-info radio-inline  pr-3">
                                        <input type="radio" id="attendencetype53-0" value="2" name="attendencetype53">
                                        <label for="attendencetype53-1">
                                          Outgoing  
                                        </label>
                                    </div>
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
                        <span>Phone Call Log List</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                <div class="table-stats  order-table  table-responsive">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th> 
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Date</th>
                                                    <th>Next Follow Up Date</th>
                                                    <th>Call Type</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <tr>
                                               <td>1</td> 
                                                <td>Mahesh</td>
                                                <td>7023615476</td> 
                                                <td>12/05/2018</td>
                                                <td>12/05/2018</td>
                                                <td>Outgoing</td> 
                                                <td class="table-data">  <button type="button"  data-toggle="modal" data-target="#details" class="btn btn-outline-secondary btn-sm ml-2"><span class="ti-align-justify"></span></button> 
                                                <a href="<?php echo BASE_URL ."pages/frontOffice/editphoneCallLog.php" ?>"><button type="button"  class="btn btn-outline-primary btn-sm  ml-2"><span class="ti-pencil-alt"></span></button></a>
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
                    <button type="button" class="close" data-dismiss="modal" >x</button>
                </div>
                <div class="modal-body">
                     <div class="col-md-12">
                        <table class="table  table-bordered">
                            <tr>
                                <th style="column-count:3;"><label for="">Name	</label></th>
                                <td class="cc-2">Rakesh</td>
                                <th style="column-count:3;"><label for="">Date</label></th>
                                <td class="cc-2">27-Nov-2018	</td>
                            </tr>
                            <tr>
                                <th><label for="">Phone</label></th>
                                <td>9824759632	</td>
                                <th><label for="">Next Follow Up Date	</label></th>
                                <td>28-Nov-2018</td>
                            </tr>
                            <tr>
                                <th><label for="">Call Duration	</label></th>
                                <td>10:00	</td>
                                <th><label for="">Call Type	</label></th>
                                <td>Outgoing</td>
                            </tr>
                            <tr>
                                <th><label for="">Description</label></th>
                                <td>ASK	</td>
                                <th><label for="">Note</label></th>
                                <td>ASDF</td>
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