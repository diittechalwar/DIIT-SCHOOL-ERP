<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="menu-icon fa fa-bar-chart mr-1" aria-hidden="true"></i> Homework / Add Homework</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="content">
        <div class="animated">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-search" aria-hidden="true"></i> <span class="ml-2">Select Criteria</span>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Class</label>
                                        <select autofocus="" id="searchclassid" name="class_id" class="form-control form-control-sm" autocomplete="off" required />
                                        <option value="">Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="7">7</option>
                                        <option value="8">UKG</option>
                                        <option value="9">LKG</option>
                                        <option value="10">Nursery</option>
                                        <option value="11">6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Section</label>
                                        <select id="secid" name="section_id" class="form-control form-control-sm" autocomplete="off" required>
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <select id="subid" name="subject_id" class="form-control form-control-sm" autocomplete="off" required>
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="search" class="btn btn-secondary btn-sm checkbox-toggle pull-right"><i class="fa fa-search mr-1"></i> Search</button>

                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <span class="ml-2"> Homework List</span>
                    <button type="button" class="btn btn-sm btn-secondary float-right" data-toggle="modal" data-target="#staticModal"><i class="fa fa-plus"></i> Add</button>
                    <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="box-title"> Add Homework</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        x
                                    </button>
                                </div>
                                <form action="">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="pwd">Class</label>
                                                    <select class="form-control form-control-sm" name="class_id" id="class_id" required>
                                                        <option value="">Select</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="7">7</option>
                                                        <option value="8">UKG</option>
                                                        <option value="9">LKG</option>
                                                        <option value="10">Nursery</option>
                                                        <option value="11">6</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Section</label>
                                                    <select id="secid" name="section_id" class="form-control form-control-sm" autocomplete="off" required>
                                                        <option value="">Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Subject</label>
                                                    <select id="subid" name="subject_id" class="form-control form-control-sm" autocomplete="off" required>
                                                        <option value="">Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Homework Date</label>
                                                    <input type="date" name="date" class="form-control form-control-sm" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Submission Date</label>
                                                    <input type="date" name="date" class="form-control form-control-sm" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Attach Document</label>
                                                    <input type="file" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Description</label>
                                                    <textarea class="w-100" style="height: 200px; border: 1px solid #ced4da;" name="" id=""></textarea>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-secondary btn-sm">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal fade" id="staticModal3" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="box-title"> Evaluate Homework</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        x
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <form action="">
                                                <div class="alert alert-info" style="font-size: 12px;">Homework already evaluated, now you can update evaluation.</div>
                                                <div class="row">
                                                    <div class="col-md-5 student-list-col">
                                                        <div class="test">
                                                            <label>Students List</label>
                                                            <div class="text-inner">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                <button class="btn btn-default btn-sm" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                                </span>
                                                                    <input type="text" id="input2-group1" name="input2-group1" placeholder="Search" class="form-control form-control-sm">
                                                                    <button><i class="fa fa-square-o" aria-hidden="true"></i></button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <label for="">Evaluation Date:-</label>
                                                        <input type="date">
                                                    </div>
                                                    <div class="col-md-2 mt-5 button-col">
                                                        <button><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                                                        <button class="mt-2"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="test">
                                                            <label>Homework Completed</label>
                                                            <div class="text-inner">
                                                                <div class="input-group">
                                                                    <button><i class="fa fa-square-o" aria-hidden="true"></i></button>
                                                                    <input type="text" id="input2-group1" name="input2-group1" placeholder="Search" class="form-control form-control-sm">
                                                                    <span class="input-group-btn">
                                                                <button class="btn btn-default btn-sm" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-danger btn-sm float-right " data-dismiss="modal">Cancel</button>
                                                        <button type="button" class="btn btn-secondary btn-sm float-right mr-2">Save</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-4 col-summary">
                                            <div class="taskside">
                                                <h4>Summary</h4>
                                                <div class="box-tools pull-right">
                                                </div>
                                                <!-- /.box-tools -->
                                                <h5 class="pt0 task-info-created">
                                                        <!--small class="text-dark">Homework Date <span class="text-dark">23-Nov-2018</span> <i class="fa fa-clock-o" data-toggle="tooltip" data-title="Created at 31.05.2018 13:00:09"></i></small-->
                                                    </h5>

                                                <hr class="taskseparator">
                                                <div class="task-info task-single-inline-wrap task-info-start-date">
                                                    <h5><i class="fa task-info-icon fa-fw fa-lg fa-calendar-plus-o pull-left fa-margin"></i>
                                                            <span>Homework Date</span>:23-Nov-2018                                      
                                                        </h5>
                                                </div>
                                                <div class="task-info task-single-inline-wrap task-info-start-date">
                                                    <h5><i class="fa task-info-icon fa-fw fa-lg fa-calendar-plus-o pull-left fa-margin"></i>
                                                            <span>Submission Date</span>:29-Nov-2018                                      
                                                        </h5>
                                                </div>
                                                <div class="task-info task-single-inline-wrap task-info-start-date">
                                                    <h5><i class="fa task-info-icon fa-fw fa-lg fa-calendar-plus-o pull-left fa-margin"></i>
                                                                <span>Evaluation Date</span>:23-Nov-2018                                       
                                                            </h5>
                                                </div>
                                                <div class="task-info task-single-inline-wrap ptt10">
                                                    <label><span>Created By</span>: Admin </label>
                                                    <br>
                                                    <label><span>Evaluated By</span>: Admin </label>
                                                    <br>
                                                    <label><span>Section</span>: A</label>
                                                    <br>
                                                    <label><span>Class</span>: 1</label>
                                                    <br>
                                                    <label><span>Section</span>: A</label>
                                                    <br>
                                                    <label><span>Subject</span>: English</label>
                                                    <br>
                                                    <label><a href="#">Download <i class="fa fa-download"></i></a></label>
                                                    <br>
                                                    <label><span>Description</span>:
                                                        <br>
                                                        <p>Welcome Erp</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body ">
                    <div class="table-stats order-table table-responsive">
                        <table class="table upload-table">
                            <thead>
                                <tr>
                                    <th class="serial">Class <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th class="avatar">Section <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>Subject <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>Homework Date <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>Submission <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>Evaluation Date <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>Created By <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>Action <i class="fa fa-caret-down" aria-hidden="true"></i></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="alert with-close">
                                    <td class="title">1</td>
                                    <td>A</td>
                                    <td>English</td>
                                    <td class="date">01-Jan-1970 </td>
                                    <td class="date">03-Jan-1970 </td>
                                    <td class="date">01-Jan-1970 </td>
                                    <td>Admin</td>
                                    <td><a href="#" data-toggle="modal" class="btn btn-outline-secondary btn-sm mr-2" data-target="#staticModal3"><i class="fa fa-align-justify" aria-hidden="true"></i></a><a href="editaddhomework.php" title="edit" class="btn btn-outline-primary btn-sm mr-1" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="" class="btn btn-outline-danger btn-sm" data-dismiss="alert" aria-label="Close" title="close"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                    </td>

                                </tr>
                            

                            </tbody>
                        </table>
                        <hr>
                        <div class="col-md-12">

                            <p style="font-size: 12px;">Record: 3 of 12</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

<?php include "../../include/footer.php" ?>