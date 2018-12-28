<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="menu-icon fa fa-bar-chart mr-1" aria-hidden="true"></i> Homework / Add Homework</h1>
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
                    <span>Edit Homework</span>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pwd">Class</label>
                                    <select class="form-control form-control-sm" name="class_id" id="class_id" required>
                                        <option value="">Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="7">7</option>
                                        <option value="8">UKG</option>
                                        <option value="9">LKG</option>
                                        <option value="10">Nursery</option>
                                        <option value="11">6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Section</label>
                                    <select id="secid" name="section_id" class="form-control form-control-sm" autocomplete="off" required>
                                        <option value="">Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <select id="subid" name="subject_id" class="form-control form-control-sm" autocomplete="off" required>
                                        <option value="">Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Homework Date</label>
                                    <input type="date" name="date" class="form-control form-control-sm" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Submission Date</label>
                                    <input type="date" name="date" class="form-control form-control-sm" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Attach Document</label>
                                    <input type="file" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea class="w-100" style="height: 200px; border: 1px solid #ced4da;" name="" id=""></textarea>
                                </div>

                            </div>
                        </div>
               
                        <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
                  
                </form>
                </div>
            
            </div>
        </div>
    </div>
<?php include "../../include/footer.php" ?>

