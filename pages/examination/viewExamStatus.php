<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class="fa fa-map-o mr-1"></i> Examination / View Exam Status</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated">

            <div class="card">
                <div class="card-header">   
                    <span>Status</span>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th class="">Class(Section) </th>
                                    <th>Exam Scheduled</th>
                                    <th>Marks Register Prepared</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="serial">1.</td>
                                    <td><span class="name">P A -01 (QUARTERLY)</span></td>
                                    <td><span class="badge badge-primary mr-2">Yes</span><span><a data-toggle="modal" data-target="#schedule" href="">View Schedule</a></span> </td>
                                    <td> <span><span class="badge badge-primary">Yes</span></span>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-stats -->
                </div>
            </div>

        </div>
        <!-- .animated -->

    </div>
    <!-- /.content -->
    <!-- modal-box -->
    <!-- code-start -->
    <div class="modal fade show" id="schedule" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mediumModalLabel" style="font-size: 16px;">Exam P A -01 (QUARTERLY)</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th class="">Subject</th>
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Rooms</th>
                                    <th>Full Marks</th>
                                    <th>Passing Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="serial">1.</td>
                                    <td><span>English</span></td>
                                    <td>2018-08-27</td>
                                    <td>12:00 AM</td>
                                    <td>12:30 AM</td>
                                    <td>12</td>
                                    <td>10</td>
                                    <td>15</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-stats -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <?php include "../../include/footer.php" ?>