<?php include "../../include/header.php" ?>
    <style>
        .view-detail-anchor {
            color: white !important;
            background-color: #007bff !important;
        }
    </style>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class="fa fa-map-o mr-1"></i> Examination / Exam List</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated">

            <form action="">
                <div class="card">
                    <div class="card-header">
                        <span>Student Attendance List</span>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th class="">Name</th>
                                        <th>Exam Time</th>
                                        <th>Order Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="serial">1.</td>
                                        <td><span class="name">P A -01 (QUARTERLY)</span></td>
                                        <td>Standard Exam</td>
                                        <td> <span>1</span> </td>
                                        <td class="pr-0"><a class="btn-secondary btn-sm" href="./viewExamStatus.php"><i class="fa fa-calendar-times-o mr-2"></i>View Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="serial">2.</td>
                                        <td><span class="name">P A -01 (QUARTERLY)</span></td>
                                        <td>Standard Exam</td>
                                        <td> <span>1</span> </td>
                                        <td class="pr-0"><a class="btn-secondary btn-sm" href="./viewExamStatus.php"><i class="fa fa-calendar-times-o mr-2"></i>View Detail</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-stats -->
                    </div>
                </div>
            </form>
        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

    <?php include "../../include/footer.php" ?>