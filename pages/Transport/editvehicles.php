<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header d-inline-block">
                        <div class="page-title">
                            <h1><i class=" ti-car mr-1"></i> Transport / Edit Vehicles</h1>
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
                            <span>Edit Vehicles</span>
                        </div>
                        <div class="card-body">

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="Vehicles_Number" class=" form-control-label">Vehicles Number</label>
                                    <input type="text" id="Vehicles_Number" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group">
                                    <label for="Vehicles_Model" class=" form-control-label">Vehicles Model</label>
                                    <input type="text" id="Vehicles_Model" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group">
                                    <label for="Year_Made" class=" form-control-label">Year Made</label>
                                    <input type="number" id="Year_Made" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group">
                                    <label for="Driver_Name" class=" form-control-label">Driver Name</label>
                                    <input type="text" id="Driver_Name" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group">
                                    <label for="Driver_Contact" class=" form-control-label">Driver Contact</label>
                                    <input type="number" id="Driver_Contact" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group">
                                    <label for="Note" class=" form-control-label">Note</label>
                                    <textarea name="textarea-input" id="Note" rows="3" placeholder="" class="form-control form-control-sm" required></textarea>
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
                            <span>Vehicles List</span>
                        </div>
                        <div class="card-body">
                             <div class="table-stats order-table table-responsive">
                                <table class="table ">
                                    <thead>
                                    <!--  style="width: 80px;" -->
                                        <tr>
                                            <th class="serial">V.Number</th>
                                            <th>V.Model</th>
                                            <th>Year_Made</th>
                                            <th>D.Name</th>
                                            <th>D.License</th>
                                            <th>D.Contact</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>1000</td>
                                            <td>2007</td>
                                            <td>Noor</td>
                                            <td>NMC123</td>
                                            <td>748963210</td>
                                            <td class="pr-0">
                                                <a class="btn btn-outline-primary btn-sm mt-2 mr-2" href="editvehicles.php"><i class="ti-pencil-alt"></i></a>
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