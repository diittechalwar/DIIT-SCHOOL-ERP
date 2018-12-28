<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header d-inline-block">
                        <div class="page-title">
                            <h1><i class="ti-car mr-1"></i> Transport / Student Transport Report</h1>
                        </div>
                    </div>
                    <!-- <a href="" class=" btn-secondary btn-sm float-right d-inline-block mt-2"><i class="ti-plus"></i>&nbsp; Add Student</a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated">
            <div class="card">
                <div class="card-header">
                   <i class="fa fa-search" aria-hidden="true"></i> <span class="ml-2">Select Criteria</span>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class=" row">
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="class" class=" form-control-label">Class</label>
                                <select name="class" id="class" class=" form-control form-control-sm" required>
                                    <option value="0">Select</option>
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
                            <div class="form-group">
                                <label for="Section" class=" form-control-label">Section</label>
                                <select name="Section" id="Section" class=" form-control form-control-sm" required>
                                    <option value="0">Select</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-3">
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
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="Vehicle_Number" class=" form-control-label">Vehicle Number</label>
                                <select name="Vehicle_Number" id="Vehicle_Number" class=" form-control form-control-sm" required>
                                    <option value="0">Select</option>
                                    <option value="1">001</option>
                                    <option value="2">sdfsasa</option>
                                    <option value="3">002</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <span>Student Transport Report</span>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">Class_Sec</th>
                                    <th>Admission(Num)</th>
                                    <th>Name(student)</th>
                                    <th>Phone</th>
                                    <th>Route Title</th>
                                    <th>Vehicle_Num</th>
                                    <th>Driver Name</th>
                                    <th>Driver Contact</th>
                                    <th>Fare(RS.)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1-A</td>
                                    <td>65999</td>
                                    <td>Nik</td>
                                    <td> </td>
                                    <td>INDERPURI</td>
                                    <td>001</td>
                                    <td>Noor</td>
                                    <td>9874563210</td>
                                    <td>500</td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content -->

    <?php include "../../include/footer.php" ?>