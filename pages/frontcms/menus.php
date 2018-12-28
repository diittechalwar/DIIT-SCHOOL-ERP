<?php include "../../include/header.php" ?>
        <!-- /#header -->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-12">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1><i class="menu-icon fa fa-empire mr-1"></i>  Front CMS / Add Menu</h1>
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
                                <span>Add Menu</span>
                            </div>
                            <div class="card-body">
                                <form action="">
                                <div class="form-group">
                                    <label for="">Menu</label> 
                                    <input autofocus="" id="menu" name="menu" placeholder="" type="text" class="form-control form-control-sm" value="" autocomplete="off" required/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea class="form-control form-control-sm" id="description" name="description" placeholder="" rows="3"></textarea>
                                </div>
                                <hr>
                                     <button type="submit" class="btn btn-secondary pull-right btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
                                </form>    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card"> 
                            <div class="card-header">
                                <span>Menu List</span>
                            </div>
                            <div class="card-body">
                            <div class="table-stats order-table table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">Title <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                            <th class="avatar">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="alert with-close">
                                            <td class="serial"><a href="#">Main Menu</a></td>
                                            <td class="pr-0"><a class="btn btn-outline-secondary btn-sm" href="add_menu_item.php"><i class="fa fa-plus" aria-hidden="true"></i></a></td>
                                        </tr>
                                        <tr class="alert with-close">
                                            <td class="serial"><a href="">Bottom Menu</a></td>
                                             <td class="pr-0"><a class="btn btn-outline-secondary btn-sm" href="add_menu_item.php"><i class="fa fa-plus" aria-hidden="true"></i></a></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- animated -->
        </div>        
           <!-- content -->




        
<?php include "../../include/footer.php" ?>