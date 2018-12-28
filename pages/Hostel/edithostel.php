<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner"> 
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header d-inline-block">
                        <div class="page-title">
                            <h1><i class="ti-home mr-1"></i> Hostel / Edit Hostel</h1>
                        </div>
                    </div>
                    <!-- <a href="" class=" btn-secondary btn-sm float-right d-inline-block mt-2"><i class="ti-plus"></i>&nbsp; Add Student</a> -->
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
                            <span>Edit Hostel</span>
                        </div>
                        <div class="card-body">

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="Roll" class=" form-control-label">Hostel Name</label>
                                    <input type="text" id="Roll" placeholder="" class="form-control form-control-sm" required >
                                </div>
                                <div class="form-group">
                                    <label for="Type" class=" form-control-label">Type</label>
                                    <select name="class" id="Type" class=" form-control form-control-sm" required >
                                        <option value="0">Select</option>
                                        <option value="1">Boys</option>
                                        <option value="2">Girl</option>
                                        <option value="3">Combine</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Address" class=" form-control-label">Address</label>
                                    <input type="text" id="Address" placeholder="" class="form-control form-control-sm" required  >
                                </div>
                                <div class="form-group">
                                    <label for="Intake" class=" form-control-label">Intake</label>
                                    <input type="number" id="Intake" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group">
                                    <label for="Description" class=" form-control-label">Description</label>
                                    <textarea name="textarea-input" id="Description" rows="3" placeholder="" class="form-control form-control-sm" required></textarea>
                                </div>
                                <div class="form-actions form-group">
                                    <hr>
                                    <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <span>Hostel List</span>
                        </div>
                        <div class="card-body">
                             <div class="table-stats order-table table-responsive">
                                <table class="table ">
                                    <thead>
                                    <!--  style="width: 80px;" -->
                                        <tr>
                                            <th class="serial">Hostel Name</th> 
                                            <th>Type</th>
                                            <th>Address</th>
                                            <th>Intake</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Boys Hostel</td> 
                                            <td>Boys</td>
                                            <td> </td>
                                            <td>0</td>
                                            <td class="pr-0">
                                                <a class="btn btn-outline-primary btn-sm mt-2 mr-2" href="edithostel.php"><i class="ti-pencil-alt"></i></a>
                                                <a class="btn btn-outline-danger btn-sm mt-2" href=""><i class="ti-trash"></i></a>                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content -->

    <?php include "../../include/footer.php" ?>