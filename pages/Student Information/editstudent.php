<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="ti-user mr-1"></i> Student Information / Edit Student Details</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated">
            <form action="" method="post">
                <div class="card">
                    <div class="card-header">
                        <span>Edit Student Details</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Book_Title" class=" form-control-label">Admission Number</label>
                                    <input type="text" id="Book_Title" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Book_Number" class=" form-control-label">Roll Number</label>
                                    <input type="number" id="Book_Number" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="class" class=" form-control-label">Class</label>
                                    <select name="class" id="class" class=" form-control form-control-sm" required>
                                        <option value="0">select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">LKG</option>
                                        <option value="9">UKG</option>
                                        <option value="10">Nursery</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Section" class=" form-control-label">Section</label>
                                    <select name="Section" id="Section" class=" form-control form-control-sm" required>
                                        <option value="0">select</option>
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                        <option value="3">C</option>>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="ISBN_Number" class=" form-control-label">First Name</label>
                                    <input type="text" id="ISBN_Number" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="ISBN_Number2" class=" form-control-label">Last Name</label>
                                    <input type="text" id="ISBN_Number2" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Section" class=" form-control-label">Gender</label>
                                    <select name="Section" id="Section" class=" form-control form-control-sm" required>
                                        <option value="0">select</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Publisher" class=" form-control-label">Date Of Birth</label>
                                    <input type="date" id="Publisher" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Section" class=" form-control-label">Category</label>
                                    <select name="Section" id="Section" class=" form-control form-control-sm" required>
                                        <option value="0">select</option>
                                        <option value="1">GEN</option>
                                        <option value="2">OBC</option>
                                        <option value="3">SC</option>
                                        <option value="4">ST</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Caste" class=" form-control-label">Caste</label>
                                    <input type="text" id="Caste" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Religion" class=" form-control-label">Religion</label>
                                    <input type="text" id="Religion" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Subject" class=" form-control-label">Mobile Number</label>
                                    <input type="Number" id="Subject" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Email" class=" form-control-label">Email</label>
                                    <input type="email" id="Email" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Admission" class=" form-control-label">Admission Date</label>
                                    <input type="Date" id="Admission" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Rack_Number" class=" form-control-label">Student Photo</label>
                                    <input type="file" id="Rack_Number" placeholder="" class=" form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Section" class=" form-control-label">Blood Group</label>
                                    <select name="Section" id="Section" class=" form-control form-control-sm" required>
                                        <option value="0">select</option>
                                        <option value="1">O+</option>
                                        <option value="2">O-</option>
                                        <option value="3">AB+</option>
                                        <option value="4">AB-</option>
                                        <option value="5">A+</option>
                                        <option value="6">A-</option>
                                        <option value="7">B+</option>
                                        <option value="8">B-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Section" class=" form-control-label">Student House</label>
                                    <select name="Section" id="Section" class=" form-control form-control-sm" required>
                                        <option value="0">select</option>
                                        <option value="1">Blue</option>
                                        <option value="2">Green</option>
                                        <option value="3">Red</option>
                                        <option value="4">Yellow</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Book_Price" class=" form-control-label">Height(kg)</label>
                                    <input type="number" id="Book_Price" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Post_Date" class=" form-control-label">Weight(kg)</label>
                                    <input type="date" id="Post_Date" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="Date" class=" form-control-label">As on Date</label>
                                    <input type="date" id="Date" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">

                                <div class="form-group ">
                                    <label for="Date" class=" form-control-label d-block">sibling</label>

                                    <a class="btn btn-secondary btn-sm" href="" data-toggle="modal" data-target="#staticModal3"><i class="ti-plus"></i> Add</a>
                                    <p class="m-0 d-inline-block"><i class="badge badge-success">Sibling: </i></p>
                                </div>
                            </div>
                        </div>
                        <!-- -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>Transport Details</span>
                    </div>
                    <div class="card-body">

                        <div class=" row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Section" class=" form-control-label">Route List</label>
                                    <select name="Section" id="Section" class=" form-control form-control-sm" required>
                                        <option value="0">select</option>
                                        <option value="1"> Malviya Nagar:002</option>
                                        <option value="2">INDERPURI: 001</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>Hostel Details</span>
                    </div>
                    <div class="card-body">

                        <div class=" row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Section" class=" form-control-label">Hostel</label>
                                    <select name="Section" id="Section" class=" form-control form-control-sm" required>
                                        <option value="0">select</option>
                                        <option value="1"> Boys</option>
                                        <option value="2">Girls</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Section" class=" form-control-label">Room Number</label>
                                    <select name="Section" id="Section" class=" form-control form-control-sm" required>
                                        <option value="0">select</option>
                                        <option value="1"> Room 1</option>
                                        <option value="2">Room 2</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>Parent Gardian Details</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Book_Title" class=" form-control-label">Father Name</label>
                                    <input type="text" id="Book_Title" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Book_Number" class=" form-control-label">Phone Number</label>
                                    <input type="number" id="Book_Number" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Book_Title" class=" form-control-label">Father Occupation</label>
                                    <input type="text" id="Book_Title" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Book_Title" class=" form-control-label">Father Photo</label>
                                    <input type="file" id="Book_Title" placeholder="" class=" form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Book_Title" class=" form-control-label">Mother Name</label>
                                    <input type="text" id="Book_Title" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Book_Number" class=" form-control-label">Phone Number</label>
                                    <input type="number" id="Book_Number" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">

                                <div class="form-group">
                                    <label for="Book_Title" class=" form-control-label">Mother Occupation</label>
                                    <input type="text" id="Book_Title" placeholder="" class="form-control form-control-sm" required>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Book_Title" class=" form-control-label">Mother Photo</label>
                                    <input type="file" id="Book_Title" placeholder="" class=" form-control-sm" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class=" form-group">
                                    <label class=" form-control-label">If Guardian Is</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class=" form-group">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label ml-2">
                                            <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">Father
                                        </label>
                                        <label for="inline-radio2" class="form-check-label ml-2 ">
                                            <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Mother
                                        </label>
                                        <label for="inline-radio3" class="form-check-label ml-2 ">
                                            <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Other
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Book_Title" class=" form-control-label">Guardian Name</label>
                                    <input type="text" id="Book_Title" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Book_Number" class=" form-control-label">Phone Number</label>
                                    <input type="number" id="Book_Number" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Book_Title" class=" form-control-label">Guardian Occupation</label>
                                    <input type="text" id="Book_Title" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">

                                <div class="form-group">
                                    <label for="Book_Title" class=" form-control-label">Guardian Photo</label>
                                    <input type="file" id="Book_Title" placeholder="" class=" form-control-sm" required>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Book_Title" class=" form-control-label">Guardian Email</label>
                                    <input type="Email" id="Book_Title" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Book_Number" class=" form-control-label">Guardian Relation</label>
                                    <input type="text" id="Book_Number" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Book_Title" class=" form-control-label">Guardian Address</label>
                                    <textarea name="textarea-input" id="textarea-input" rows="1" placeholder="" class="form-control form-control-sm" required></textarea>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>Address Details</span>
                    </div>
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label for="checkbox3" class="form-check-label ">
                                                <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">If Guardian Address is Current Address
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label for="checkbox3" class="form-check-label ">
                                                <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">If Permanent Address is Current Address
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="textarea-input3" class=" form-control-label">Current Address</label>
                                    <textarea name="textarea-input" id="textarea-input3" rows="2" placeholder="" class="form-control form-control-sm" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="Book_Title" class=" form-control-label">Permanent Address</label>
                                    <textarea name="textarea-input" id="textarea-input" rows="2" placeholder="" class="form-control form-control-sm" required></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>Address Details</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class=" form-group">
                                    <label for="Account" class=" form-control-label">Bank Account Number</label>
                                    <input type="text" id="Account" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class=" form-group">
                                    <label for="Bank_name" class=" form-control-label">Bank Name</label>
                                    <input type="text" id="Bank_name" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class=" form-group">
                                    <label for="Account" class=" form-control-label">IFSC Code</label>
                                    <input type="number" id="Account" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Natonal" class=" form-control-label">Natonal Identification Number</label>
                                    <input type="number" id="Natonal" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Local" class=" form-control-label">Local Identification Number</label>
                                    <input type="number" id="Local" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class=" form-control-label">RTE</label>
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label ml-2">
                                            <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">Yes
                                        </label>
                                        <label for="inline-radio2" class="form-check-label ml-2 ">
                                            <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Previous" class=" form-control-label">Previous School Details</label>
                                    <textarea name="textarea-input" id="Previous" rows="2" placeholder="" class="form-control form-control-sm" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Note" class=" form-control-label">Note</label>
                                    <textarea name="textarea-input" id="Note" rows="2" placeholder="" class="form-control form-control-sm" required></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="form-actions form-group">
                            <button type="submit" class="btn btn-secondary btn-sm float-right">Save</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal fade" id="staticModal3" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title float-left" id="staticModalLabel">Add Time Line</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="form-group ">
                                    <label for="class" class=" form-control-label">Class</label>
                                    <select name="class" id="class" class=" form-control form-control-sm" required>
                                        <option value="0">select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">LKG</option>
                                        <option value="9">UKG</option>
                                        <option value="10">Nursery</option>
                                    </select>
                                </div>

                                <div class="form-group ">
                                    <label for="Section" class=" form-control-label">Section</label>
                                    <select name="Section" id="Section" class=" form-control form-control-sm" required>
                                        <option value="0">select</option>
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                        <option value="3">C</option>>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label for="Section" class=" form-control-label">Student</label>
                                    <select name="Section" id="Section" class=" form-control form-control-sm" required>
                                        <option value="0">select</option>
                                        <option value="1"> Nitesha</option>
                                        <option value="2">Jyons</option>
                                        <option value="3">Ria</option>
                                        <option value="4">Manoj</option>
                                    </select>
                                </div>
                                <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-secondary btn-sm float-right"><span class="ti-user mr-2"></span> Add</button>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content -->

    <?php include "../../include/footer.php" ?>