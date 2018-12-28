
<?php include "include/header.php" ?>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body info-box-1" style="background: #00b297; border-radius: 5px;">
                                <div class="stat-widget-five">
                                    <div class="stat-icon ">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">$<span class="count-1">23569</span></div>
                                        
                                        </div>
                                    </div>
                                    <div class="stat-heading mt-3 text-center">Monthly Fees Collection</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body info-box-1" style="background: #dc3545; border-radius: 5px;" >
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count-1">$3435</span></div>
                                           
                                        </div>
                                    </div>
                                    <div class="stat-heading mt-3 text-center">Monthly Expense</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body info-box-1" style="background: #0866C6; border-radius: 5px;" >
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count-1">$349</span></div>
                                           
                                        </div>
                                    </div>
                                    <div class="stat-heading mt-3 text-center">Student</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body info-box-1" style="background: #1D2939; border-radius: 5px;" >
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">Reports</div>
                                        
                                        </div>
                                    </div>
                                    <div class="stat-heading mt-3  text-center">Abesent Student </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->
                <!--  Traffic  -->
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card alert with-close">
                            <div class="card-header">
                                <span>Fees Collection & Expenses For December 2018</span>
                                <a href="" class="btn btn-outline-danger btn-sm float-right" data-dismiss="alert" aria-label="Close" title="close"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card alert with-close">
                            <div class="card-header">
                                <span>Fees Collection & Expenses For Session 2018-19</span>
                                <a href="" class="btn btn-outline-danger btn-sm float-right" data-dismiss="alert" aria-label="Close" title="close"><i class="fa fa-trash" aria-hidden="true"></i></a>                                
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas id="barChart"></canvas>
                                </div>
                            </div>
                        </div> -->
                        <div class="card">
                            <div class="card-header">
                                <span>Calendar</span>
                            </div>
                            <div class="card-body">
                                <div id="calendar" class="fc fc-unthemed fc-ltr">
                                    
                                </div>   
                            </div>
                        
                        </div>
                    </div> 
                    <div class="col-lg-3">
                        <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-body info-box-1" style="background: #51a5d0; border-radius: 5px;">
                                            <div class="stat-widget-five">
                                                <div class="stat-icon dib flat-color-4">
                                                    <i class="pe-7s-users"></i>
                                                </div>
                                                <div class="stat-content">
                                                    <div class="text-left dib">
                                                        <div class="stat-text"><span class="count-1">36</span></div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="stat-heading mt-3 text-center">Teacher</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-lg-12 col-md-12" >
                                    <div class="card">
                                        <div class="card-body info-box-1" style="background: #51a5d0; border-radius: 5px;">
                                            <div class="stat-widget-five">
                                                <div class="stat-icon dib flat-color-4">
                                                    <i class="pe-7s-users"></i>
                                                </div>
                                                <div class="stat-content">
                                                    <div class="text-left dib">
                                                        <div class="stat-text"><span class="count-1">5</span></div>
                                                        <div class="stat-heading mt-3 text-center">Acountent</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-lg-12 col-md-12" >
                                    <div class="card">
                                        <div class="card-body info-box-1" style="background: #51a5d0; border-radius: 5px;">
                                            <div class="stat-widget-five">
                                                <div class="stat-icon dib flat-color-4">
                                                    <i class="pe-7s-users"></i>
                                                </div>
                                                <div class="stat-content">
                                                    <div class="text-left dib">
                                                        <div class="stat-text"><span class="count-1">3</span></div>
                                                        <div class="stat-heading mt-3 text-center">Librarian</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-body info-box-1" style="background: #51a5d0; border-radius: 5px;">
                                            <div class="stat-widget-five">
                                                <div class="stat-icon dib flat-color-4">
                                                    <i class="pe-7s-users"></i>
                                                </div>
                                                <div class="stat-content">
                                                    <div class="text-left dib">
                                                        <div class="stat-text"><span class="count-1">2</span></div>
                                                        <div class="stat-heading mt-3 text-center">Receptinist</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                 
                                   
                        </div>
                    </div>
                   
                </div>
                <!--  /Traffic -->
                <div class="clearfix"></div>
               
                <div class="row">
                   
                    <div class="col-md-12 col-lg-9">
                        <div class="card">
                            
                        </div><!-- /.card -->
                    </div>
                   
                </div>
                <!-- Modal - Calendar - Add New Event -->
                <div class="modal fade none-border" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add New Event</strong></h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#event-modal -->
                <!-- Modal - Calendar - Add Category -->
                <div class="modal fade none-border" id="add-category">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add a category </strong></h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="pink">Pink</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  session Model Box code Start -->
               <div class="modal fade" id="staticModal1" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title float-left" id="staticModalLabel">Session</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="form-group ">
                                    <div class="col-md-12">
                                        <label for="Book_Title" class=" form-control-label">Session</label>
                                        <label for="Store" class=" form-control-label">Session</label>
                                    <select name="class" id="Store" class="form-control">
                                        <option value="0">2018-19</option>
                                        <option value="1">2018-17</option>
                                        <option value="2">2019-20</option>
                                        <option value="3">2020-21</option>
                                        <option value="4">2021-22</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-secondary btn-sm float-right">Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
       
        <?php include "include/footer.php" ?>
        