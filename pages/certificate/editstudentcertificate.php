<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="fa fa-newspaper-o mr-1" aria-hidden="true"></i> Certificate / Edit Student Certificate</h1>
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
                            <span class="card-title" v-if="headerText"> Edit Student Certificate</span>
                        </div>
                        <div class="card-body">
                            <!-- <div class="card-header"><strong>Add Student</strong><small> certificate</small></div> -->
                            <form action="#">
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Certificate Name</label>
                                <input type="text" id="company" placeholder="" class="form-control form-control-sm" required />
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Header Left Text</label>
                                <input type="text" id="vat" placeholder="" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="street" class=" form-control-label">Header Center Text</label>
                                <input type="text" id="street" placeholder="" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Header Right Text</label>
                                <input type="text" id="company" placeholder="" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Body text</label>
                                <textarea name="textarea-input" id="textarea-input" rows="2" placeholder="" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Footer Left Text</label>
                                <input type="text" id="vat" placeholder="" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="street" class=" form-control-label">Footer Center Text</label>
                                <input type="text" id="street" placeholder="" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Footer Right Text</label>
                                <input type="text" id="company" placeholder="" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Certificate Design</label>
                                <input type="text" id="company" placeholder="" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="company" class=" form-control-label d-block my-2">Certificate Design</label>
                                </div>
                                <div class="col-md-6 my-2">
                                    <input type="text" id="company" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <div class="col-md-6 my-2">
                                    <input type="text" id="company" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <div class="col-md-6 my-2">
                                    <input type="text" id="company" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <div class="col-md-6 my-2">
                                    <input type="text" id="company" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <div class="col-md-6 my-2">
                                    <!-- Material checked -->
                                    <label for="company" class=" form-control-label">S.Photo</label>
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="col-md-6 my-2">
                                    <input type="text" id="company" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Background Image</label>
                                <input type="file" id="company" placeholder="image" class="">
                            </div>
                            <hr>
                            <button type="button" class="btn btn-primary float-left btn-sm"><i class="fa fa-star"></i>&nbsp; Reset</button>

                            <button type="submit" class="btn btn-secondary float-right btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
                            </form>
                        </div>
                      
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title" v-if="headerText"> Student Certificate List</span>
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
                                            <td class="serial">Birth Certificate</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img src="http://demo.flipscool.com/uploads/certificate/BACKGROUND.jpg" width="40"></a>
                                                </div>
                                            </td>

                                            <td class="pr-0">
                                            <span class="">
                                               <a class="btn btn-outline-secondary btn-sm mt-2  mr-2" href=""><i class="fa fa-align-justify" aria-hidden="true"></i></a>
                                               <a class="btn btn-outline-primary btn-sm mt-2  mr-2" href="editstudentcertificate.php"><i class="ti-pencil-alt"></i></a>
                                               <a class="btn btn-outline-danger btn-sm mt-2 " href=""><i class="ti-trash"></i></a>
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