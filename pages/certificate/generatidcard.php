<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="fa fa-newspaper-o mr-1" aria-hidden="true"></i> Certificate / Generate certificate</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title" v-if="headerText"><i class="fa fa-search mr-2"></i> Select Criteria</span>
                        </div>
                        <div class="card-body">
                        <form action="#">
                            <!-- <div class="card-header"><strong>Add Student</strong><small> certificate</small></div> -->
                         <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Class</label>
                                    <select name="selectSm" id="selectSm" class="form-control-sm form-control form-control-sm" required>
                                        <option value="0"> Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Section</label>
                                    <select name="selectSm" id="selectSm" class="form-control-sm form-control form-control-sm" required>
                                    <option value="0"> Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">ID Card</label>
                                    <select name="selectSm" id="selectSm" class="form-control-sm form-control form-control-sm" required>
                                    <option value="0"> Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class=col-md-12>
                                <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-search"></i>&nbsp; Search</button>
                            </div>
                        </div>
                        </form>   
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="animated">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <span class="card-title" v-if="headerText"> Student List</span>
                                <a hearf="">
                                    <button type="button" class="btn btn-secondary btn-sm float-right">&nbsp;Generate</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-stats order-table table-responsive">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <input type="checkbox" id="select_all">
                                                </th>
                                                <th class="serial">Admission</th>
                                                <th class="serial">Student</th>
                                                <th class="serial">Class</th>
                                                <th>father Name</th>
                                                <th class="serial">DOB</th>
                                                <th class="serial">Gender</th>
                                                <th class="serial">Category</th>
                                                <th>Mob. No</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="select_all">
                                                </td>
                                                <td class="serial">234</td>
                                                <td class="serial">anil</td>
                                                <td class="serial">four</td>
                                                <td class="serial">sunil</td>
                                                <td class="serial">5,6,7</td>
                                                <td class="serial">male</td>
                                                <td class="serial">obc</td>
                                                <td class="serial">6789</td>

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

            <!--start form code -->

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

    <?php include "../../include/footer.php" ?>