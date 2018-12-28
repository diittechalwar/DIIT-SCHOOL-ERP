<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="menu-icon fa fa-cogs mr-1"></i> Human Resource / Edit Staff</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="content">
        <div class="animated">
            <div class="card">
                <div class="card-header">
                    <span class="ml-2">Basic Information</span>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Staff ID</label>
                                    <input autofocus="" id="employee_id" name="employee_id" placeholder="" type="text" class="form-control form-control-sm" value="" autocomplete="off" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Role</label>
                                    <select id="role" name="role" class="form-control form-control-sm" required />
                                    <option value="">Select</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Teacher</option>
                                    <option value="3">Accountant</option>
                                    <option value="4">Librarian</option>
                                    <option value="6">Receptionist</option>
                                    <option value="7">Super Admin</option>
                                    <option value="8">ABC</option>
                                    <option value="20">Staff</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Designation</label>

                                    <select id="designation" name="designation" placeholder="" type="text" class="form-control form-control-sm" required />
                                    <option value="select">Select</option>
                                    <option value="2">Teacher</option>
                                    <option value="3">Principal</option>
                                    <option value="4">Junior account officer</option>
                                    <option value="5">Multitasking staff</option>
                                    <option value="6">Gate keeper</option>
                                    <option value="7">Co- ordinator</option>
                                    <option value="8">Examination controller</option>
                                    <option value="9">HOD Hindi</option>
                                    <option value="10">HOD English</option>
                                    <option value="11">HOD Science</option>
                                    <option value="12">HOD Math</option>
                                    <option value="13">HOD Sanskrit</option>
                                    <option value="14">HOD SST</option>
                                    <option value="15">HOD Computer</option>
                                    <option value="17">Driver</option>
                                    <option value="18">Khalasi</option>
                                    <option value="19">Gatekeeper</option>
                                    <option value="20">Multi tasking staff</option>
                                    <option value="21">sv</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Department</label>
                                    <select id="department" name="department" placeholder="" type="text" class="form-control form-control-sm">
                                        <option value="select">Select</option>
                                        <option value="2">Maths</option>
                                        <option value="3">Accounts</option>
                                        <option value="4">Science</option>
                                        <option value="5">English</option>
                                        <option value="6">Social science</option>
                                        <option value="7">Hindi</option>
                                        <option value="8">Examination</option>
                                        <option value="9">Sanskrit</option>
                                        <option value="10">Computer</option>
                                        <option value="11">Art &amp; Craft</option>
                                        <option value="12">E.C.A.</option>
                                        <option value="13">Junior</option>
                                        <option value="14">Middle</option>
                                        <option value="15">Senior</option>
                                        <option value="16">Administration</option>
                                        <option value="17">Transportation</option>
                                        <option value="18">Hostel Admin</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">First Name</label>
                                    <input id="name" name="name" placeholder="" type="text" class="form-control form-control-sm" value="" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input id="surname" name="surname" placeholder="" type="text" class="form-control form-control-sm" value="" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Father Name</label>
                                    <input id="father_name" name="father_name" placeholder="" type="text" class="form-control form-control-sm" value="" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Mother Name</label>
                                    <input id="mother_name" name="mother_name" placeholder="" type="text" class="form-control form-control-sm" value="" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for=""> Gender</label>
                                    <select class="form-control form-control-sm" name="gender">
                                        <option value="">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Marital Status</label>
                                    <select class="form-control form-control-sm" name="marital_status" required />
                                    <option value="">Select</option>
                                    <option value="Single">Single</option>

                                    <option value="Married">Married</option>

                                    <option value="Widowed">Widowed</option>

                                    <option value="Seperated">Seperated</option>

                                    <option value="Not Specified">Not Specified</option>

                                    </select>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Date Of Birth</label>
                                    <input id="dob" name="dob" placeholder="" type="date" class="form-control form-control-sm" value="" autocomplete="off" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Date Of Joining</label>
                                    <input id="date_of_joining" name="date_of_joining" placeholder="" type="date" class="form-control form-control-sm" value="" autocomplete="off" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input id="mobileno" name="contactno" placeholder="" type="text" class="form-control form-control-sm" value="" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Emergency Phone No.</label>
                                    <input id="mobileno" name="emergency_no" placeholder="" type="text" class="form-control form-control-sm" value="" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input id="email" name="email" placeholder="" type="email" class="form-control form-control-sm" value="" required />

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Photo</label>
                                    <input type="file" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Current Address</label>
                                    <div>
                                        <textarea name="address" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Permanent Address</label>
                                    <div>
                                        <textarea name="permanent_address" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Qualification</label>
                                    <textarea id="qualification" name="qualification" placeholder="" class="form-control"></textarea>

                                </div>
                            </div>
                            <div class="col-md-3">

                                <div class="form-group">
                                    <label for="">Work Experience</label>
                                    <textarea id="work_exp" name="work_exp" placeholder="" class="form-control "></textarea>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Note</label>
                                    <div>
                                        <textarea name="note" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="card-header">
                    <a class="" style="color: blue;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Add More Details
            </a>
                    <span class="float-right"><i class="fa fa-plus" aria-hidden="true"></i></span>
                </div>
                <div class="card-body">
                    <div class="collapse" id="collapseExample">
                        <div class="card">
                            <div class="card-header">
                                <span>Payroll</span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">EPF No</label>
                                            <input id="epf_no" name="epf_no" placeholder="" type="text" class="form-control form-control-sm" value="" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Basic Salary</label>
                                            <input type="text" class="form-control form-control-sm" name="basic_salary" value="" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Contract Type</label>
                                            <select class="form-control form-control-sm" name="contract_type">
                                                <option value="">Select</option>
                                                <option value="permanent">Permanent</option>

                                                <option value="probation">Probation</option>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Work Shift</label>
                                            <input id="shift" name="shift" placeholder="" type="text" class="form-control form-control-sm" value="" required />

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">

                                            <label for="">Location</label>
                                            <input id="location" name="location" placeholder="" type="text" class="form-control form-control-sm" value="" autocomplete="off" required />

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <span>Leaves</span>
                            </div>
                            <div class="card-body">
                                <div class="row around10">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">E.L.</label>
                                            <input placeholder="Number of Leaves" type="text" class="form-control form-control-sm" required />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">0.5 C.L.</label>
                                            <input placeholder="Number of Leaves" type="text" class="form-control form-control-sm" required />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Leave without pay</label>
                                            <input placeholder="Number of Leaves" type="text" class="form-control form-control-sm" required />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Special leave</label>
                                            <input placeholder="Number of Leaves" type="text" class="form-control form-control-sm" required />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">holiday</label>
                                            <input placeholder="Number of Leaves" type="text" class="form-control form-control-sm" required />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <span>Bank Account Details</span>
                            </div>
                            <div class="card-body">
                                <div class="row around10">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Account Title</label>
                                            <input id="account_title" name="account_title" placeholder="" type="text" class="form-control form-control-sm" value="" required />

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Bank Account Number</label>
                                            <input id="bank_account_no" name="bank_account_no" placeholder="" type="text" class="form-control form-control-sm" value="" required />

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Bank Name</label>
                                            <input id="bank_name" name="bank_name" placeholder="" type="text" class="form-control form-control-sm" value="" required />

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">IFSC Code</label>
                                            <input id="ifsc_code" name="ifsc_code" placeholder="" type="text" class="form-control form-control-sm" value="" required />

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Bank Branch Name</label>
                                            <input id="bank_branch" name="bank_branch" placeholder="" type="text" class="form-control form-control-sm" value="" required />

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <span>Social Media Link</span>
                            </div>
                            <div class="card-body">
                                <div class="row around10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Facebook URL</label>
                                            <input id="bank_account_no" name="facebook" placeholder="" type="text" class="form-control form-control-sm" value="" required />

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Twitter URL</label>
                                            <input id="bank_account_no" name="twitter" placeholder="" type="text" class="form-control form-control-sm" value="" required />

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Linkedin URL</label>
                                            <input id="bank_name" name="linkedin" placeholder="" type="text" class="form-control form-control-sm" value="" required />

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Instagram URL</label>
                                            <input id="instagram" name="instagram" placeholder="" type="text" class="form-control form-control-sm" value="" required />

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <span>Upload Documents</span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Resume</label>
                                            <br>
                                            <input type="file" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""> Joining Letter</label>
                                            <input type="file" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Other Documents</label>
                                            <input type="file" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-secondary btn-sm float-right">Save</button>
                    
                    </form>
                </div>

            </div>
        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

<?php include "../../include/footer.php" ?>