<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class=" fa fa-calendar-check-o mr-1"></i> Attendance / Attendance By Date</h1>
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
                                <label for="Select" class=" ">Class</label>
                                <select name="" id="" class="form-control form-control-sm" required>
                                    <option value="">Select</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="Select" class=" ">Section</label>
                                <select name="" id="" class="form-control form-control-sm" required>
                                    <option value="">Select</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="" class=" ">Date</label>
                                <input type="date" class="form-control form-control-sm" required>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-search" aria-hidden="true"></i> &nbsp; Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="card">
                <form action="">
                    <div class="card-header">
                        <span>Student Attendance List</span>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12 p-0">
                            <button type="button" class="btn btn-secondary btn-sm float-left "><i class="fa fa-square-o " aria-hidden="true"></i>&nbsp; Mark As Holiday</button>
                            <button type="button" class="btn btn-secondary btn-sm float-right"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save Attendance</button>
                        </div>
                        <br>
                        <br>
                        <div class="table-stats order-table table-responsive">

                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th class="">Admission Number</th>
                                        <th>Roll Number</th>
                                        <th>Name</th>
                                        <th>Attendance</th>
                                        <th>Note</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="serial">1.</td>
                                        <td><span class="name">01201</span></td>
                                        <td> #5469 </td>
                                        <td> <span>Special</span> </td>
                                        <td>
                                            <div class="radio radio-info radio-inline float-left pr-3">
                                                <input checked="" type="radio" id="attendencetype53-0" value="1" name="attendencetype53">
                                                <label for="attendencetype53-0">
                                                    Present
                                                </label>
                                            </div>
                                            <div class="radio radio-info radio-inline float-left pr-3">
                                                <input type="radio" id="attendencetype53-0" value="2" name="attendencetype53">
                                                <label for="attendencetype53-1">
                                                    Late
                                                </label>
                                            </div>
                                            <div class="radio radio-info radio-inline float-left pr-3">
                                                <input type="radio" id="attendencetype53-0" value="3" name="attendencetype53">
                                                <label for="attendencetype53-2">
                                                    Absent
                                                </label>
                                            </div>
                                            <div class="radio radio-info radio-inline float-left pr-3">
                                                <input type="radio" id="attendencetype53-0" value="4" name="attendencetype53">
                                                <label for="attendencetype53-3">
                                                    Half Day
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text">
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                </form>
                </div>
                </div>
                <!-- /.table-stats -->
            </div>

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

<?php include "../../include/footer.php" ?>