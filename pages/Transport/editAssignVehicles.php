<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header d-inline-block">
                        <div class="page-title">
                            <h1><i class=" ti-car mr-1"></i> Transport / Edit Assign Vehicles</h1>
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
                            <span> Edit Assign Vehicles On Route</span>
                        </div>
                        <div class="card-body">

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="Route" class=" form-control-label">Route</label>
                                    <select name="Route" id="Route" class=" form-control form-control-sm" required>
                                        <option value="0">Select</option>
                                        <option value="1">INDERPURI</option>
                                        <option value="3">Malviya Nagar</option>
                                        <option value="4">Jaipur</option>
                                        <option value="5">Vishali Nagar</option>
                                        <option value="6">Brisachowk to st.thomas</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Vehicle" class=" form-control-label">Vehicle</label>
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label for="checkbox1" class="form-check-label ">
                                                <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input"> 001
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="checkbox2" class="form-check-label ">
                                                <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> 002
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="checkbox3" class="form-check-label ">
                                                <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> 003
                                            </label>
                                        </div>
                                    </div>
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
                            <span>Vehicle Route List</span>
                        </div>
                        <div class="card-body">
                             <div class="table-stats order-table table-responsive">
                                <table class="table ">
                                    <thead>
                                    <!--  style="width: 80px;" -->
                                        <tr>
                                            <th class="serial">Route</th>
                                            <th >Vehicle</th>
                                            <th >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>INDERPURI</td>
                                            <td>002</td>
                                            <td class="pr-0">
                                                <a class="btn btn-outline-primary btn-sm mt-2 mr-2" href="editAssignVehicles.php"><i class="ti-pencil-alt"></i></a>
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