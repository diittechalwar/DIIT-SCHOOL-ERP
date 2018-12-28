<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="menu-icon fa fa-cogs mr-1"></i> Human Resource / Staff Attendance Report</h1>
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Role</label>
                                    <select name="selectSm" id="selectSm" class="form-control-sm form-control" required/>
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Month</label>
                                    <select id="month" name="month" class="form-control-sm form-control" autocomplete="off" required/>
                                        <option value="">Select</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March" selected="selected">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Year</label>
                                    <select id="year" name="year" class="form-control-sm form-control" required/>
                                        <option value="">Select</option>
                                        <option value="2018" selected="">2018</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                               <button type="submit" name="search" class="btn btn-secondary btn-sm  float-right"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Content -->
            <div class="card">
                <div class="card-header">
                   <span>Staff Attendance Report</span>
                    <div class="day-show float-right">
                        <span>Present : <span > P </span></span>
                        <span>Late : <span > L </span></span>
                        <span>Absent : <span > A </span></span>
                        <span>Half Day : <span > F </span></span>
                        <span>Holiday : <span > H </span></span>
                    </div>
                </div>
                <div class="card-body " style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                    <div class="table-stats order-table table-responsive" style="box-sizing: content-box; width: 960px; padding-right: 0px;">
                        <table class="table " role="grid" style="margin-left: 0px; width: 100%;">
                            <thead>
                                <tr>
                                    <th class="serial">Staff/Date% <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th class="">P <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>L <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>A <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>F <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>H <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>01 Mon <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>02 Tue <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>03 Wed <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>04 Thu <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>05 Fri <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>06 Sat <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>07 Sun <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>08 Mon <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>09 Tue <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>10 Wed <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>11 Thu <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>12 Fri <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>13 Sat <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>14 Sun <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>15 Mon <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>16 Tue <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>17 Wed <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>18 Thu <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>19 Fri <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>20 Sat <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>21 Sun <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>22 Mon <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>23 Tue <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>24 Wed <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>25 Thu <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>26 Fri <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>27 Sat <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>28 Sun <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>29 Mon <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>30 Tue <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>31 Wed <i class="fa fa-caret-down" aria-hidden="true"></i></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="serial">Super Admin</td>
                                    <td class="">
                                        <label class="label label-default">-</label>
                                    </td>
                                    <td> 0 </td>
                                    <td> <span class="name">0</span> </td>
                                    <td> <span class="product">0</span> </td>
                                    <td><span class="count">0</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

<?php include "../../include/footer.php" ?>