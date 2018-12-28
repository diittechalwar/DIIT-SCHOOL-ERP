<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="menu-icon fa fa-cogs mr-1"></i> Human Resource / Approve Leave Request</h1>
                        </div>

                    </div>
                    <button data-toggle="modal" data-target="#staticModal5" class="btn btn-secondary btn-sm float-right mt-2">Add Leave Request</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticModal4" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="display: inline-block;" id="staticModalLabel">Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        x
                    </button>
                </div>
                <div class="modal-body p-0">
                    <table class="table mb0 table-striped table-bordered ">
                        <tbody>
                            <tr>
                                <th width="15%">Name</th>
                                <td width="35%"><span id="name">Admin</span></td>
                                <th width="15%">Staff ID</th>
                                <td width="35%"><span id="employee_id">0001</span>
                                    
                                </td>

                            </tr>
                            <tr>
                                <th>Submit By</th>
                                <td><span id="appliedby">Admin</span></td>
                                <th>Leave Type</th>
                                <td><span id="leave_type">0.5 C.L.</span>
                                    <input id="leave_request_id" name="leave_request_id" placeholder="" type="hidden" class="form-control" value="19">
                                   </td>
                            </tr>
                            <tr>
                                <th>Leave</th>
                                <td><span id="leave_from">12/05/2018</span> -
                                    <label> </label><span id="leave_to">12/05/2018</span> (<span id="days">1 Days</span>)
                                    </td>
                                <th>Apply Date</th>
                                <td><span id="applied_date">05/12/2018</span></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <label class="radio-inline">
                                        <input type="radio" value="pending" name="status"> Pending </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="approve" name="status"> Approve </label>
                                    <label class="radio-inline">
                                        <input type="radio" value="disapprove" name="status"> Disapprove
                                    </label>

                                </td>
                                <th>Reason</th>
                                <td><span id="remark"></span></td>
                            </tr>
                            <tr>
                                <th>Note</th>
                            </tr>
                            <tr>
                                <td colspan=" 4">
                                    <div id="reason">
                                        <textarea class="form-control" style="resize: none;" rows="2" id="detailremark" name="detailremark" placeholder=""></textarea>
                                        <span class="text-danger"></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="save" class="btn btn-secondary btn-sm submit_schsetting pull-right"> Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticModal5" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="display: inline-block;" id="staticModalLabel">Add Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        x
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Role</label>
                                    <select name="role" class="form-control form-control-sm" autocomplete="off" required>
                                        <option value="" selected="">Select</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Teacher">Teacher</option>
                                        <option value="Accountant">Accountant</option>
                                        <option value="Librarian">Librarian</option>
                                        <option value="Receptionist">Receptionist</option>
                                        <option value="Super Admin">Super Admin</option>
                                        <option value="ABC">ABC</option>
                                        <option value="Staff">Staff</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <select name="empname" id="empname" value="" class="form-control form-control-sm" autocomplete="off"  required>
                                        <option value="" selected="">Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from-group">
                                    <label for="">Apply Date</label>
                                    <input type="date" id="applieddate" name="applieddate" value="12/07/2018" class="form-control form-control-sm" autocomplete="off"  required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from-group">
                                    <label for="">Leave Type</label>
                                    <select value="" name="leave_type" id="leave_type" class="form-control form-control-sm" autocomplete="off"  required>
                                        <option>Select</option>
                                        <option value="4">E.L. (1)</option>
                                        <option value="5">0.5 C.L. (1)</option>
                                        <option value="6">Leave without pay (5)</option>
                                        <option value="7">Special leave (3)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="from-group">
                                    <label for="">Leave Date</label>
                                    <input type="date" id="applieddate" name="applieddate" value="12/07/2018" class="form-control form-control-sm" autocomplete="off"  required>
                                </div>

                            </div>

                            <div class="col-md-6 mt-4">
                                <div class="from-group">
                                    <label for="">To</label>
                                    <input type="date" id="applieddate" name="applieddate" value="12/07/2018" class="form-control form-control-sm" autocomplete="off"  required>
                                </div>

                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-4">
                                <label>Reason</label>
                                <br>
                                <textarea name="reason" id="reason" style="resize: none;" rows="4" class="form-control" autocomplete="off"></textarea>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-4">
                                <label>Note</label>
                                <br>
                                <textarea name="note" style="resize: none;" rows="4" class="form-control" autocomplete="off"></textarea>

                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-4">
                                <label>Attach Document</label>
                                <br>
                                <input type="file">
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-6 mt-4">
                                <label>Status </label>
                                <br>
                                <label class="radio-inline">
                                    <input type="radio" value="pending" name="status2"> Pending </label>
                                <label class="radio-inline">
                                    <input type="radio" value="approve" name="status2"> Approve </label>
                                <label class="radio-inline">
                                    <input type="radio" value="disapprove" name="status2"> Disapprove
                                </label>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-secondary btn-sm  float-right ">Save</button>
                               <button type="button" class="btn btn-danger btn-sm float-right mr-2" data-dismiss="modal">Cancel</button>
                             
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- Content -->
    <div class="content">
        <div class="animated">
            <div class="card">
                <div class="card-header">
                    <span>Approve Leave Request</span>
                </div>
                <div class="card-body ">
                    <div class="table-stats order-table table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">Staff <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th class="avatar">Leave Type <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>Leave Date <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>Days <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>Apply Date <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="serial">Admin</td>
                                    <td>0.5 C.L.</td>
                                    <td>05-Dec-2018 - 05-Dec-2018</td>
                                    <td><span class="days">1</span> </td>
                                    <td> <span class="apply-date">12-May-2018</span> </td>
                                    <td>
                                        <span class="badge badge-complete">Approve</span>
                                    </td>
                                    <td><a href="#" data-toggle="modal" data-target="#staticModal4" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-align-justify" aria-hidden="true"></i></a>
                                        <a href="editleaverequest.php"  class="btn btn-outline-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
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