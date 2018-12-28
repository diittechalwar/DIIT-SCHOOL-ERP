<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class="fa fa-mortar-board mr-1"></i> Academics / Assign Subject</h1>
                    </div>
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
            <form action="">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="Select" class=" ">Class</label>
                            <select name="" id="" class="form-control-sm form-control" required>
                                <option value="">Select</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="Select" class=" ">Section</label>
                            <select name="" id="" class="form-control-sm form-control" required>
                                <option value="">Select</option>
                                <option value="">A</option>
                                <option value="">B</option>
                                <option value="">C</option>
                                <option value="">1</option>
                            </select>
                        </div>
                        
                        <div class="col-md-12 ">
                            <button type="submit" class="btn btn-secondary btn-sm mt-2 float-right"><i class="fa fa-search mr-1"></i> Search</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>



            <div class="card">
                    <div class="card-header">
                        <span>Assign Subject</span>
                    </div>
                    
                    <div class="card-body">
                        <form action="">
                        <div class="table-stats order-table ov-h">
    
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Teacher</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><select name="" id="" class="form-control-sm form-control" required>
                                        <option value="">Select</option>
                                        <option value="">English</option>
                                        <option value="">Math</option>
                                    </select></td>
                                    <td><select name="" id="" class="form-control-sm form-control" required>
                                        <option value="">Select</option>
                                        <option value="">Teacher 01</option>
                                        <option value="">Teacher02</option>
                                    </select></td>
                                    
                                </tr>
    
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-stats -->
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-secondary btn-sm mt-2 float-right"><i class="fa fa-save mr-1"></i> Save</button>
                    </div>
                        </form>
                    </div>
        </div>
    </div>
    <!-- .animated -->
    </div>
    <!-- /.content -->

    <?php include "../../include/footer.php" ?>