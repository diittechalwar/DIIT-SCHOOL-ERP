<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="menu-icon fa fa-cogs mr-1"></i> Human Resource / Department</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="content">
        <div class="animated">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <span>Add Department</span>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input autofocus="" id="type" name="type" placeholder="" type="text" class="form-control form-control-sm" value="" autocomplete="off" required>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-secondary btn-sm pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <span>Department List</span>
                        </div>
                        <div class="card-body">
                            <div class="table-stats order-table table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">Name <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                            <th class="avatar">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="alert with-close">
                                            <td class="serial">Maths 1</td>
                                            <td class="pr-0"><a href="editdepartment.php" title="edit" class="btn btn-outline-primary btn-sm mr-2"><i class="fa fa-pencil-square-o " aria-hidden="true"></i></a>
                                                <a href="" class="btn btn-outline-danger btn-sm" data-dismiss="alert" aria-label="Close" title="close"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="alert with-close">
                                            <td class="serial">Maths 2</td>
                                            <td class="pr-0"><a href="editdepartment.php" title="edit" class="btn btn-outline-primary btn-sm mr-2"><i class="fa fa-pencil-square-o " aria-hidden="true"></i></a>
                                                <a href="" class="btn btn-outline-danger btn-sm" data-dismiss="alert" aria-label="Close" title="close"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="alert with-close">
                                            <td class="serial">Maths 3</td>
                                            <td class="pr-0"><a href="editdepartment.php" title="edit" class="btn btn-outline-primary btn-sm mr-2"><i class="fa fa-pencil-square-o " aria-hidden="true"></i></a>
                                                <a href="" class="btn btn-outline-danger btn-sm" data-dismiss="alert" aria-label="Close" title="close"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="alert with-close">
                                            <td class="serial">Maths 4</td>
                                            <td class="pr-0"><a href="editdepartment.php" title="edit" class="btn btn-outline-primary btn-sm mr-2"><i class="fa fa-pencil-square-o " aria-hidden="true"></i></a>
                                                <a href="" class="btn btn-outline-danger btn-sm" data-dismiss="alert" aria-label="Close" title="close"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="alert with-close">
                                            <td class="serial">Maths 5</td>
                                            <td class="pr-0"><a href="editdepartment.php" title="edit" class="btn btn-outline-primary btn-sm mr-2"><i class="fa fa-pencil-square-o " aria-hidden="true"></i></a>
                                                <a href="" class="btn btn-outline-danger btn-sm" data-dismiss="alert" aria-label="Close" title="close"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="alert with-close">
                                            <td class="serial">Maths 6</td>
                                            <td class="pr-0"><a href="editdepartment.php" title="edit" class="btn btn-outline-primary btn-sm mr-2"><i class="fa fa-pencil-square-o " aria-hidden="true"></i></a>
                                                <a href="" class="btn btn-outline-danger btn-sm" data-dismiss="alert" aria-label="Close" title="close"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
        <!-- .animated -->
    </div>
    <!-- /.content -->

<?php include "../../include/footer.php" ?>