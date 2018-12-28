<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class="fa fa-mortar-board mr-1"></i> Academics / Teacher Timetable</h1>
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
                      <i class="fa fa-search" aria-hidden="true"></i> <span class="ml-2">Select Criteria</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="Select" class=" ">Teacher</label>
                                <select name="" id="" class="form-control form-control-sm" required>
                                    <option value="">Select</option>
                                    <option value="">teacher 01</option>
                                    <option value="">teacher 02</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                </select>
                            </div>

                            <div class="col-md-8 fomr-group mt-4">
                                <button type="submit" class="btn btn-secondary btn-sm mt-2"><i class="fa fa-search mr-1"></i> Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="card">
                <div class="card-header">
                    <span>Class Time Table</span>
                </div>

                <div class="card-body">
                    <div class="table-stats order-table ov-h">

                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Periods</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="serial">1</td>
                                    <td>English 1th A</td>
                                    <td>English 1th A</td>
                                    <td>English 1th A</td>
                                    <td>English 1th A</td>
                                    <td>English 1th A</td>
                                    <td>English 1th A</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
                <!-- /.table-stats -->

            </div>
        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

    <?php include "../../include/footer.php" ?>