
<?php include "../../include/header.php" ?>
<!-- /#header -->
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class=" menu-icon fa fa-bandcamp mr-1"></i> Front Office  /   Admission Enquiry  </h1>
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
               <i class="fa fa-search" aria-hidden="true"></i> <span class="ml-2"> Select Criteria </span>
            </div>
            <div class="card-body">
                <form action="#" method="post"  >
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="">Enquiry Date</label>
                                <input type="date" class="form-control form-control-sm" required>  
                             
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">Source</label>
                              <select name="" id="" class="form-control-sm form-control" required>
                                  <option value=""> Select</option>
                                  <option value="">Self</option>
                              </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">Status</label>
                              <select name="" id="" class="form-control-sm form-control" required>
                                  <option value=""> Select</option>
                                  <option value="">All</option>
                                  <option value="">Active </option>
                                  <option value="">Passive</option>
                                  <option value="">Dead</option>
                                  <option value="">Won</option>
                                  <option value="">Lost</option>
                              </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
                </form>
            </div>
       </div>
       <div class="card">
            <div class="card-header"> 
               <span>Admission Enquiry</span>
                <button type="button"  data-toggle="modal" data-target="#addEnquiry" class=" float-right btn-sm btn btn-secondary btn-sm"><i class="fa fa-plus"></i>&nbsp; Add </button> 
            </div> 
            <div class="card-body">
            <div class="table-stats order-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="serial">#</th> 
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Source</th>
                                    <th>Enquiry Date</th>
                                    <th>Last Follow Up Date</th>
                                    <th>Next Follow Up Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mahesh</td>
                                    <td>7023615476</td>
                                    <td>self</td>
                                    <td>12/05/2018</td>
                                    <td>12/05/2018</td>
                                    <td>12/10/2018</td>
                                    <td>Active</td>
                                    <td>  <button type="button"  data-toggle="modal" data-target="#phoneCallLog" class="btn btn-outline-danger btn-sm"><i class="fa fa-phone"></i></button> 
                                    <a href="editAdmissionEnquiry.php" class="btn btn-outline-primary btn-sm ml-2" title="Edit"><span class="ti-pencil-alt"></span></a> </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
       </div>


<!-- Model box add a Enquiry Data  -->
    <div class="modal fade show" id="addEnquiry" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"  >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title one-line" id="mediumModalLabel">Admission Enquiry</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        x
                    </button>
                </div>
                <div class="modal-body">
                     <form action="" method="post">
                         <div class="row"> 
                            <div class="col-md-4 form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control-sm form-control" required name="">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">Phone</label>
                                <input type="number" class="form-control-sm form-control" required name="">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control-sm form-control" required name="">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">Adderss</label>
                               <textarea name="" id="" cols="10" rows="2" class="form-control-sm form-control" required></textarea>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">Description</label>
                                <textarea name="" id="" cols="10" rows="2" class="form-control-sm form-control" required></textarea>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">Note</label>
                                <textarea name="" id="" cols="10" rows="2" class="form-control-sm form-control" required></textarea>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">Date</label>
                                <input type="date" class="form-control-sm form-control" required name="">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">Next Follow Up Date</label>
                                <input type="date" class="form-control-sm form-control" required name="">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">Assigned</label>
                                <input type="text" class="form-control-sm form-control" required name="">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">Reference</label>
                                <select name="" id="" class="form-control-sm form-control" required>
                                    <option value=""> Select</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">Source</label>
                                <select name="" id="" class="form-control-sm form-control" required>
                                    <option value=""> Select</option>
                                    <option value=""> Self</option>
                                    <option value=""> SD</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">Class</label>
                                <select name="" id="" class="form-control-sm form-control" required>
                                    <option value=""> Select</option>
                                    <option value=""> 1</option>
                                    <option value=""> 2</option>
                                    <option value=""> 3</option>
                                    <option value=""> 4</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">Number Of Child</label>
                                <input type="number" class="form-control-sm form-control" required name="">
                              
                            </div>
                           
                            <div class="col-md-12">
                         
                                <button type="submit" class="btn btn-sm btn-secondary float-right ml-3">Submit</button>
                                <button type="button" class="btn btn-sm btn-danger float-right" data-dismiss="modal">Close</button>
                            </div>
                    </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
<!-- Model box add a Enquiry Data  -->
    <div class="modal fade show" id="phoneCallLog" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"  >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title one-line" id="mediumModalLabel">Follow Up Admission Enquiry</h5>
                    <button type="button one-line" class="close" data-dismiss="modal"   >
                          x
                    </button>
                </div>
                <div class="modal-body">
                     <div class="row">
                         <div class="col-md-8 ">
                             <form action="" method="post">
                                <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for=""> Follow Up Date </label>
                                            <input type="date" class="form-control-sm form-control" required name=""> 
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">Next Follow Up Date</label>
                                            <input type="date" name="" id="" class="form-control-sm form-control" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">Response</label>
                                           <textarea name="" id="" cols="30" rows="2" class="form-control-sm form-control" required></textarea>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="">Note</label>
                                           <textarea name="" id="" cols="30" rows="2" class="form-control-sm form-control" required></textarea>
                                        </div>

                                        <div class="col-md-12  mt-3 ">
                                            <button type="submit" class="btn btn-sm btn-secondary float-right"> Submit</button>
                                        </div>
                                </div>
                             </form>
                             <div class="row">
                                <div class="col-md-12">
                                       <label for="">Follow Up (Raju Kumar)</label>
                                         
                                        <div class="page">
                                            <div class="page__demo">
                                                <div class="main-container page__container">
                                                <div class="timeline">
                                                    <div class="timeline__group">
                                                    <span class="timeline__year">2008</span>
                                                    <div class="timeline__box">
                                                        <div class="timeline__date">
                                                        <span class="timeline__day">2</span>
                                                        <span class="timeline__month">Feb</span>
                                                        </div>
                                                        <div class="timeline__post">
                                                        <div class="timeline__content">
                                                            <p>Attends the Philadelphia Museum School of Industrial Art. Studies design with Alexey Brodovitch, art director at Harper's Bazaar, and works as his assistant.</p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                     
                                                    </div>
                                                     
                                                </div>
                                                </div>
                                            </div>
                                            </div>

                                </div>
                             </div>
                        </div>
                         <div class="col-md-4 model-border-left" >
                                <div class="row">
                                    <div class="col-md-6"> 
                                         <h6>Summary</h6> 
                                          <span class="font-si mt-5">Created By: Admin</span>
                                    </div>
                                    <div class="col-md-6"> 
                                       <label for="">Status</label>
                                       <select name="" id="" class="form-control-sm form-control " required> 
                                            <option value="">Active</option>
                                            <option value="">Passive</option>
                                            <option value="">Dead</option>
                                            <option value="">Won</option>
                                            <option value="">Lost</option>
                                       </select>
                                    </div>
                                </div>
                               <div class="col-md-12">
                                         <span class=" ti-calendar"></span>&nbsp;<span class="font-si">Created By: 01-Nov-2018</span><br>
                                        <span class=" ti-calendar"></span>&nbsp;<span class="font-si">Last Follow Up Date:  08-Nov-2018</span><br>
                                        <span class=" ti-calendar"></span>&nbsp;<span class="font-si">Next Follow Up Date:  09-Nov-2018</span><br>
                               </div>
                                <div class="col-md-12 mt-3"> 
                                         <p> Phone : 12345657890</p>
                                        <p> Address : Mahesh </p>
                                        <p>Reference: </p>
                                        <p>  Description: </p>
                                        <p>  Note: </p>
                                        <p>  Source:</p>
                                        <p>    Self Assigned:</p>
                                        <p>    Email: raj@gmail.com </p>
                                        <p>   Class: 2 </p>
                                        <p>   Number Of Child: 3</p>
                                      </div>

                                </div>

                            </div>
                     </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-secondary">Submit</button>
                </div>
            </div>
        </div>
    </div>
   <!--  model box Code in End -->
</div><!-- .animated -->
</div>
<!-- /.content -->

<?php include "../../include/footer.php" ?>
 
 