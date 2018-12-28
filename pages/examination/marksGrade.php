<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class="fa fa-map-o mr-1"></i> Examination / Marks Grade</h1>
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
                            <span>Add Grade</span>
                        </div>
                            <div class="card-body">
                            <form action="">
                            <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="" class=" ">Grade Name</label>
                                        <input type="text" class="form-control-sm form-control" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="" class=" ">Percent From *</label>
                                        <input type="text" class="form-control-sm form-control" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="" class=" ">Percent Upto *</label>
                                        <input type="text" class="form-control-sm form-control" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="" class=" ">Description</label>
                                        <textarea class="form-control-sm form-control" required id="description"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                    <hr>
                                        <button type="submit" class="btn btn-secondary btn-sm float-right"> <i class="fa fa-save"></i> Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <form action="">
                        <div class="card">
                            <div class="card-header">
                                <span>Grade List</span>
                            </div>

                            <div class="card-body">
                            <div class="table-stats order-table table-responsive">

                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="">Grade Name</th>
                                            <th>Percent From</th>
                                            <th>Percent Upto</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A1</td>
                                            <td>95.00</td>
                                            <td>90.00</td>
                                            <td class="pr-0">  
                                            <a href="<?php echo BASE_URL ."pages/examination/editmarksGrade.php" ?>"><button type="button" class="btn btn-outline-primary btn-sm ml-1"><span class="ti-pencil-alt"></span></button></a>
                                            <button type="button" class="btn btn-outline-danger btn-sm ml-1"><span class="ti-trash"></span></button> </td>
                                        </tr>

                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- /.table-stats -->
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

<?php include "../../include/footer.php" ?>