<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header d-inline-block">
                        <div class="page-title">
                            <h1><i class="ti-layers mr-1"></i> Inventory / Edit Item Store</h1>
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
                            <span>Edit Item Store</span>
                        </div>
                        <div class="card-body">

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="Item_Store_name" class=" form-control-label">Item Store Name</label>
                                    <input type="text" id="Item_Store_name" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group">
                                    <label for="Item_Stock_Code" class=" form-control-label">Item Stock Code</label>
                                    <input type="text" id="Item_Stock_Code" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group">
                                    <label for="Description" class=" form-control-label">Description</label>
                                    <textarea name="textarea-input" id="Description" rows="3" placeholder="" class="form-control form-control-sm" required></textarea>
                                </div>
                                <div class="form-actions ">
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
                            <span>Item Store List</span>
                        </div>
                        <div class="card-body">
                             <div class="table-stats order-table table-responsive">
                                <table class="table ">
                                    <thead>
                                    <!--  style="width: 80px;" -->
                                        <tr>
                                            <th class="serial">Item Store Name</th>
                                            <th >Item Stock Code</th>
                                            <th >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Store</td>
                                            <td>ASD</td>
                                            <td class="pr-0">
                                                <a class="btn btn-outline-primary btn-sm mt-2 mr-2" href="edititemstore.php"><i class="ti-pencil-alt"></i></a>
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