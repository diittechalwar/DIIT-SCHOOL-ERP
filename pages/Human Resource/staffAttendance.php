<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="menu-icon fa fa-cogs mr-1"></i> Human Resource / Staff Attendance</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <!-- Content -->
    <div class="content">
        <div class="animated">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-search" aria-hidden="true"></i> <span class="ml-2">Select Criteria</span>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Role</label>
                                    <select name="selectSm" id="selectSm" class="form-control-sm form-control" required />
                                    <option value="0">Select</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Teacher</option>
                                    <option value="3">Accountant</option>
                                    <option value="4">Librarian</option>
                                    <option value="5">Receptionist</option>
                                    <option value="5">Super Admin</option>
                                    <option value="5">ABC</option>
                                    <option value="5">Staff</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Attendance Date</label>
                                    <input type="date" placeholder="Date" class="form-control-sm form-control" required />
                                </div>
                            </div>
                            <div class="col-md-12">
                               <button type="submit" name="search" class="btn btn-secondary btn-sm  float-right"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <span>Staff List</span>
                </div>
                <div class="card-body ">
                    <div class="col-lg-12 p-0">
                        <button type="button" class="btn btn-secondary btn-sm float-left "><i class="fa fa-square-o " aria-hidden="true"></i>&nbsp; Mark As Holiday</button>
                        <button type="button" class="btn btn-secondary btn-sm float-right "><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save Attendance</button>
                    </div>
                    <br>
                    <br>
                    <div class="col-lg-12 p-0">
                        <div class="table-stats order-table table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial"># <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                        <th>Staff ID <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                        <th>Name <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                        <th>Role <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                        <th>Attendance <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                        <th>Note </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="serial">1.</td>
                                        <td> #5469 </td>
                                        <td> <span class="name">Louis Stanley</span> </td>
                                        <td> <span class="product">Admin</span> </td>
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
                                            <input type="text" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="serial">2.</td>
                                        <td> #5468 </td>
                                        <td> <span class="name">Gregory Dixon</span> </td>
                                        <td> <span class="product">Admin</span> </td>
                                        <td>
                                            <div class="radio radio-info radio-inline float-left pr-3">
                                                <input checked="" type="radio" id="attendencetype54-0" value="1" name="attendencetype54">
                                                <label for="attendencetype53-0">
                                                    Present
                                                </label>
                                            </div>
                                            <div class="radio radio-info radio-inline float-left pr-3">
                                                <input type="radio" id="attendencetype54-0" value="2" name="attendencetype54">
                                                <label for="attendencetype53-1">
                                                    Late
                                                </label>
                                            </div>
                                            <div class="radio radio-info radio-inline float-left pr-3">
                                                <input type="radio" id="attendencetype54-0" value="3" name="attendencetype54">
                                                <label for="attendencetype53-2">
                                                    Absent
                                                </label>
                                            </div>
                                            <div class="radio radio-info radio-inline float-left pr-3">
                                                <input type="radio" id="attendencetype54-0" value="4" name="attendencetype54">
                                                <label for="attendencetype53-3">
                                                    Half Day
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

    <?php include "../../include/footer.php" ?>