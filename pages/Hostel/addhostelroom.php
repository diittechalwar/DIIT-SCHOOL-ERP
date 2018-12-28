<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header d-inline-block">
                        <div class="page-title">
                            <h1><i class="ti-home mr-1"></i> Hostel /  Hostel Room</h1>
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
                            <span>Add Hostel Room</span>
                        </div>
                        <div class="card-body">

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="Roll" class=" form-control-label">Roll(No.) / Name</label>
                                    <input type="text" id="Roll" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group">
                                    <label for="Hostel" class=" form-control-label">Hostel</label>
                                    <select name="class" id="Hostel" class=" form-control form-control-sm" required>
                                        <option value="0">Select</option>
                                        <option value="1">Boys</option>
                                        <option value="2">Girl</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Item_Category" class=" form-control-label">Room Type</label>
                                    <select name="class" id="Item_Category" class=" form-control form-control-sm" required>
                                        <option value="0">Select</option>
                                        <option value="1">Room 1</option>
                                        <option value="2">Room 2</option>
                                        <option value="3">Hall</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Bed(num)" class=" form-control-label">Bed(num)</label>
                                    <input type="Number" id="Bed(num)" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group">
                                    <label for="Cost_Per_Bed" class=" form-control-label">Cost Per Bed</label>
                                    <input type="number" id="Cost_Per_Bed" placeholder="" class="form-control form-control-sm" required>
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
                            <span>Hostel Room List</span>
                        </div>
                        <div class="card-body">
                             <div class="table-stats order-table table-responsive">
                                <table class="table ">
                                    <thead>
                                    <!--  style="width: 80px;" -->
                                        <tr>
                                            <th class="serial">Roll(num) / Name</th> 
                                            <th> Hostel</th>
                                            <th>Room Type</th>
                                            <th>Bed(Num)</th>
                                            <th style="width: 91px;">Cost Per Bed(RS.)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>001</td> 
                                            <td>Boys</td>
                                            <td>Room 1</td>
                                            <td>2</td>
                                            <td>1500.00</td>
                                            <td class="pr-0">
                                                <a class="btn btn-outline-primary btn-sm mt-2 mr-2" href="edithostelroom.php"><i class="ti-pencil-alt"></i></a>
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