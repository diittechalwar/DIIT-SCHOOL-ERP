<?php include "../../include/header.php" ?>

    <!-- /#header -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="menu-icon fa fa-bar-chart mr-1" aria-hidden="true"></i> Homework /  Evaluation Report</h1>
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
                                        <div class="table-stats order-table ov-h ">
                                            <table class="table upload-table">
                                                <thead>
                                                    <tr>
                                                        <th class="serial">Admission Number <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                                        <th class="avatar">Name <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="title">001</td>
                                                        <td>Anushua Das</td>
                                                        <td>
                                                            <label class="label label-success">Complete</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="title">002</td>
                                                        <td>Nikhil sharma</td>
                                                        <td>
                                                            <label class="label label-success">Incomplete</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="title">003</td>
                                                        <td>Manoj Singh</td>
                                                        <td>
                                                            <label class="label label-success">Complete</label>
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
                <div class="card-header">
                    <span class="ml-2">  Evaluation Report</span>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table table-responsive">
                        <table class="table upload-table">
                            <thead>
                                <tr>
                                    <th class="serial">Subject <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>Homework Date <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>Submission Date <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>Complete/incomplete <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>Complete% <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>Action <i class="fa fa-caret-down" aria-hidden="true"></i></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="title">English</td>
                                    <td>23-Nov-2018</td>
                                    <td class="date">01-Jan-1970 </td>
                                    <td> 5/2 </td>
                                    <td> 71.43 </td>
                                    <td><a href="#" class="btn btn-outline-secondary btn-sm mr-2" data-toggle="modal" data-target="#staticModal3"><i class="fa fa-align-justify" aria-hidden="true"></i></a>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                        <hr>
                        <div class="col-md-12">

                            <p style="font-size: 12px;">Record: 1 of 12</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

<?php include "../../include/footer.php" ?>