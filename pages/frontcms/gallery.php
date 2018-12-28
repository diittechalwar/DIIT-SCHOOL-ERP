<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="fa fa-empire mr-1" aria-hidden="true"></i> Front CMS / Gallery List</h1>
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
                            <span class="card-title" v-if="headerText"> Gallery list</span>
                           <a href="addgallery.php"> <button type="button" class="btn btn-secondary btn-sm float-right"><i class="fa fa-plus"></i>&nbsp; Add</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-stats order-table table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                        <th class="serial">Title</th>
                                            <th class="serial">Url</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="serial">photo First</td>
                                            <td class="serial">about photo url</td>
                                            <td class="pr-0">
                                            <a class="btn btn-outline-primary btn-sm mt-2 mr-2" href="editgallery.php"><i class="ti-pencil-alt"></i></a>
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

            <!--start form code -->

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

    <?php include "../../include/footer.php" ?>