<?php include "../../include/header.php" ?>
    <style>
        .modal-body th {
            padding: 5px !important;
        }
        
        .modal-body td {
            padding: 5px;
        }
    </style>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class="fa fa-map-o mr-2"></i>Examination / Report</h1>
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
                                <label for="Select" class="">Class</label>
                                <select name="" id="" class="form-control-sm form-control" required>
                                    <option value="">Select</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="Select" class="">Section</label>
                                <select name="" id="" class="form-control-sm form-control" required>
                                    <option value="">Select</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                </select>
                            </div>

                            <div class="col-md-4 form-group mt-4">
                                <button type="submit" class="btn btn-secondary btn-sm mt-2"><i class="fa fa-search mr-1"></i> Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="card">
                <div class="card-header">
                    <span>Marks Register</span>
                </div>

                <div class="card-body">
                    <div class="table-stats order-table ov-h">

                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th class="">Admission Number</th>
                                    <th>Roll Number</th>
                                    <th>Student </th>
                                    <th>Full Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="serial">1.</td>
                                    <td>FLIP001</td>
                                    <td>001</td>
                                    <td>Nitesha</td>
                                    <td>Gopal</td>
                                    <td class="pr-0">
                                        <button type="button" data-toggle="modal" data-target="#view-schedule" class="btn btn-secondary btn-sm mt-2"><i class="fa fa-calendar-times-o mr-2"></i>View Report Card</button>
                                    </td>

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
    <div class="modal fade show" id="view-schedule" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mediumModalLabel" style="font-size: 16px;">Exam P A -01 (QUARTERLY)</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="fluid-container">
                        <table class="header_info" style="width:100%;">
                            <tbody>
                                <tr>
                                    <th style="width: 17%;"><img width="150" height="115" src="../../images/admin.jpg"></th>
                                    <th class="text-center">
                                        <h2>Diit</h2>
                                        <h4>Tej Mandi, Alwar</h4>
                                        <h4>Progress Report: 2018-19</h4></th>
                                    <th style="width: 17%;">&nbsp;</th>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div class="header_name">
                            <table style="width:75%; margin-left: 15%;">
                                <tbody>
                                    <tr>
                                        <td>Name of Student : <b>Nitesha &nbsp;&nbsp; </b>
                                            <br>Father`s Name : <b>Nasib</b>
                                            <br>Mother`s Name : <b>Najma</b>
                                            <br>Admission No : <b>FLIP001</b>
                                            <br>
                                        </td>
                                        <td>Roll No: <b>0001</b>
                                            <br>Class: <b>1</b>
                                            <br>DOB: <b>2004-06-22<b><br></b></b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <table style="width:100%; border-collapse:collapse;" border="">
                            <tbody>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Subject Name</th>
                                    <th>P A -01 (QUARTERLY)
                                        <br>(3 / 10)</th>
                                    <th>Half Yearly
                                        <br>(30 / 80)</th>
                                    <th>Yearly
                                        <br>(30 / 80)</th>
                                    <th>Marks obtained (170)</th>
                                    <th>Grade</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>English</td>
                                    <td>5.00</td>
                                    <td>55.00</td>
                                    <td>50.00</td>
                                    <td>110</td>
                                    <td>B1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Science</td>
                                    <td>8.00</td>
                                    <td>43.00</td>
                                    <td>65.00</td>
                                    <td>116</td>
                                    <td>B1</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Social Science</td>
                                    <td>7.00</td>
                                    <td>37.00</td>
                                    <td>61.00</td>
                                    <td>105</td>
                                    <td>B1</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Physical Exercise</td>
                                    <td>6.00</td>
                                    <td>50.00</td>
                                    <td>75.00</td>
                                    <td>131</td>
                                    <td>B1</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Maths</td>
                                    <td>8.00</td>
                                    <td>55.00</td>
                                    <td>12.00</td>
                                    <td>75</td>
                                    <td>C</td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td> Total </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td>537</td>
                                    <td>B1</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>Co-Scholastic Areas [On a 3-point (A-C) grading scale]
                        <table style="width:100%; border-collapse:collapse;" border="">
                            <tbody>
                                <tr></tr>
                                <tr>
                                    <th colspan="2">Term 1</th>
                                    <th colspan="2">Term 2</th>
                                </tr>
                                <tr>
                                    <th>Activity</th>
                                    <th style=>Grade</th>
                                    <th>Activity</th>
                                    <th>Grade</th>
                                </tr>
                                <tr>
                                    <td>Work Education</td>
                                    <td></td>
                                    <td>Work Education</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Art Education</td>
                                    <td></td>
                                    <td>Art Education</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Health &amp; Physical Education</td>
                                    <td></td>
                                    <td>Health &amp; Physical Education</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Discipline</td>
                                    <td></td>
                                    <td>Discipline</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table style="width:100%">
                            <tbody>
                                <tr>
                                    <th>Class Teacher’s remarks:...........</th>
                                    <th>Promoted to Class:...........</th>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table style="width:100%; text-align:center;">
                            <tbody>
                                <tr>
                                    <th>Signature of Parents</th>
                                    <th>Signature of Class Teacher</th>
                                    <th>Signature of Principal</th>
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