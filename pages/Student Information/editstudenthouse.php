<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header d-inline-block">
                        <div class="page-title">
                            <h1><i class=" ti-user mr-1"></i> Student Information / Student House</h1>
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
                            <span>Edit Student House</span>
                        </div>
                        <div class="card-body">

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="Route_Title" class=" form-control-label">Category Name</label>
                                    <input type="text" id="Route_Title" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group">
                                    <label for="Description" class=" form-control-label">Description</label>
                                    <input type="text" id="Description" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <hr>
                                <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-secondary btn-sm float-right">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <span>Student House List</span>
                        </div>
                        <div class="card-body">
                             <div class="table-stats order-table table-responsive">
                                <table class="table ">
                                    <thead>
                                    <!--  style="width: 80px;" -->
                                        <tr>
                                            <th class="serial">Name</th>
                                            <th>Description</th>
                                            <th >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Blue</td>
                                            <td>Hansraj House</td>
                                            <td>
                                                <a class="btn btn-outline-primary btn-sm mt-2 ml-2" href="editstudenthouse.php"><i class="ti-pencil-alt"></i></a>                                            
                                                <a class="btn btn-outline-danger btn-sm mt-2 ml-2" href=""><i class="ti-trash"></i></a>
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