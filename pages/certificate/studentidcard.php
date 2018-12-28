<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="fa fa-newspaper-o mr-1" aria-hidden="true"></i> Certificate / Student Id Card</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title" v-if="headerText"> Add Student Id Card</span>
                        </div>
                        <div class="card-body">
                            <!-- <div class="card-header"><strong>Add Student</strong><small> certificate</small></div> -->
                            <form action="#">
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Background image</label>
                                <input type="text" id="company" placeholder="" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Logo</label>
                                <input type="text" id="vat" placeholder="" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="street" class=" form-control-label">Signature</label>
                                <input type="text" id="street" placeholder="" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">School Name</label>
                                <input type="text" id="company" placeholder="" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Address/Email/Name</label>
                                <textarea name="textarea-input" id="textarea-input" rows="2" placeholder="" class="form-control " required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Id Card Title</label>
                                <input type="text" id="company" placeholder="" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Header color</label>
                                <input type="text" id="company" placeholder="" class="form-control form-control-sm" required>
                            </div>
                           
                            <div class="form-group row">
                                <div class="col-md-12 my-2">
                                    <!-- Material checked -->
                                    <label for="company" class=" form-control-label">Addmission No</label>
                                    <label class="switch ">
                                        <input type="checkbox" class="primary">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="col-md-12 my-2">
                                    <!-- Material checked -->
                                    <label for="company" class=" form-control-label">Student Name</label>
                                    <label class="switch ">
                                        <input type="checkbox" class="primary">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="col-md-12 my-2">
                                    <!-- Material checked -->
                                    <label for="company" class=" form-control-label">Class</label>
                                    <label class="switch ">
                                        <input type="checkbox" class="primary">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="col-md-12 my-2">
                                    <!-- Material checked -->
                                    <label for="company" class=" form-control-label">Father Name</label>
                                    <label class="switch ">
                                        <input type="checkbox" class="primary">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="col-md-12 my-2">
                                    <!-- Material checked -->
                                    <label for="company" class=" form-control-label">Mother Name</label>
                                    <label class="switch ">
                                        <input type="checkbox" class="primary">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="col-md-12 my-2">
                                    <!-- Material checked -->
                                    <label for="company" class=" form-control-label">Student Address</label>
                                    <label class="switch ">
                                        <input type="checkbox" class="primary">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="col-md-12 my-2">
                                    <!-- Material checked -->
                                    <label for="company" class=" form-control-label">Phone</label>
                                    <label class="switch ">
                                        <input type="checkbox" class="primary">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="col-md-12 my-2">
                                    <!-- Material checked -->
                                    <label for="company" class=" form-control-label">Date Of Birth</label>
                                    <label class="switch ">
                                        <input type="checkbox" class="primary">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="col-md-12 my-2">
                                    <!-- Material checked -->
                                    <label for="company" class=" form-control-label">Blood Group</label>
                                    <label class="switch ">
                                        <input type="checkbox" class="primary">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                               
                            </div>
                            <hr>
                            <button type="button" class="btn btn-primary btn-sm float-left"><i class="fa fa-star"></i>&nbsp; Reset</button>

                            <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title" v-if="headerText"> Student Id Card List</span>
                        </div>
                        <div class="card-body">
                            <div class="table-stats order-table table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">Student Certificate</th>
                                            <th class="avatar">Avatar</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="serial">Student Certificate</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img src="http://demo.flipscool.com/uploads/certificate/BACKGROUND.jpg" width="40"></a>
                                                </div>
                                            </td>

                                            <td class="pr-0">
                                                <span class=""><a class="btn btn-outline-secondary btn-sm mt-2  mr-2" href=""><i class="fa fa-align-justify" aria-hidden="true"></i></a>
                                                <a class="btn btn-outline-primary btn-sm mt-2  mr-2" href="editstudentidcard.php"><i class="ti-pencil-alt"></i></a>
                                                <a class="btn btn-outline-danger btn-sm mt-2" href=""><i class="ti-trash"></i></a>
                                            </span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--start form code -->

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

    <?php include "../../include/footer.php" ?>