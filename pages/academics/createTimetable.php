<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class="fa fa-dollar mr-1"></i> Academics / Create Timetable</h1>
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
                        <div class="col-md-4 form-group">
                            <label for="Select" class="">Subject</label>
                            <select name="" id="" class="form-control-sm form-control" required>
                                <option value="">Select</option>
                                <option value="">English</option>
                                <option value="">Hindi</option>
                                <option value="">Math</option>
                                <option value="">Science</option>
                            </select>
                        </div>
                        <div class="col-md-12 mt-2">
                            <button type="submit" class="btn btn-secondary btn-sm mt-2 float-right"><i class="fa fa-search mr-1"></i> Search</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <form action="">
            <div class="card">
                <div class="card-header">
                    <span>Class Time Table</span>
                </div>

                <div class="card-body">
                <div class="table-stats order-table ov-h">

                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Room Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Monday</td>
                                <td>
                                    <input type="time" class="form-control-sm form-control" required>
                                </td>
                                <td>
                                    <input type="time" class="form-control-sm form-control" required>
                                </td>
                                <td>
                                    <input type="number" min="0" class="form-control-sm form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td>tuesday</td>
                                <td>
                                    <input type="time" class="form-control-sm form-control" required>
                                </td>
                                <td>
                                    <input type="time" class="form-control-sm form-control" required>
                                </td>
                                <td>
                                    <input type="number" min="0" class="form-control-sm form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Wednesday</td>
                                <td>
                                    <input type="time" class="form-control-sm form-control" required>
                                </td>
                                <td>
                                    <input type="time" class="form-control-sm form-control" required>
                                </td>
                                <td>
                                    <input type="number" min="0" class="form-control-sm form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td>
                                    <input type="time" class="form-control-sm form-control" required>
                                </td>
                                <td>
                                    <input type="time" class="form-control-sm form-control" required>
                                </td>
                                <td>
                                    <input type="number" min="0" class="form-control-sm form-control" required>
                                </td>
                            </tr>

                            <tr>
                                <td>Friday</td>
                                <td>
                                    <input type="time" class="form-control-sm form-control" required>
                                </td>
                                <td>
                                    <input type="time" class="form-control-sm form-control" required>
                                </td>
                                <td>
                                    <input type="number" min="0" class="form-control-sm form-control" required>
                                </td>
                            </tr>

                            <tr>
                                <td>Saturday</td>
                                <td>
                                    <input type="time" class="form-control-sm form-control" required>
                                </td>
                                <td>
                                    <input type="time" class="form-control-sm form-control" required>
                                </td>
                                <td>
                                    <input type="number" min="0" class="form-control-sm form-control" required>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="col-md-12">
                        <button type="button " class="btn btn-secondary btn-sm float-right mt-2 mb-4"><i class="fa fa-save mr-1"></i>Save</button>
                    </div>
                    </div>
                </div>
                <!-- /.table-stats -->
                </form>
            </div>
        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

    <?php include "../../include/footer.php" ?>