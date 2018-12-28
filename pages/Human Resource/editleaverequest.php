<?php include "../../include/header.php" ?>
<div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="menu-icon fa fa-cogs mr-1"></i> Human Resource / Edit Approve Leave Request</h1>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="content">
    <div class="animated">
        <div class="card">
            <div class="card-header">
                <span>Edit Details</span>
            </div>
            <div class="card-body">
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
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>        
<?php include "../../include/footer.php" ?>



