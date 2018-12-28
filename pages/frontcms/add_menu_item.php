<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="menu-icon fa fa-empire mr-1"></i>  Front CMS / Add Menu Item</h1>
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
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <span>Add Menu Item </span>
                        </div>
                        <div class="card-body">
                            <form action="#">
                                <div class="form-group">
                                    <label for="">Menu Item</label>
                                    <input autofocus="" id="menu" name="menu" placeholder="" type="text" class="form-control form-control-sm" value="" autocomplete="off" required/>
                                </div>
                                <div class="form-group">
                                    <label for="">External URL</label>
                                    
                                    <label class="switch ">
                                        <input type="checkbox" class="primary" >
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="">Open In New Tab</label>
                                    
                                    <label class="switch ">
                                        <input type="checkbox" class="primary">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="">External URL Address</label>
                                    <input id="ext_url_link" name="ext_url_link" type="text" class="form-control form-control-sm" value="" required>

                                </div>
                                <div class="form-group">
                                    <label for="">Pages</label>
                                    <select id="page_id" name="page_id" class="form-control form-control-sm" required>
                                        <option value="">Select</option>
                                        <option value="1">Home</option>
                                        <option value="2" selected="selected">Complain</option>
                                        <option value="54">404 page</option>
                                        <option value="76">Contact us</option>
                                        <option value="77">About Us</option>
                                        <option value="78">Gallery</option>
                                    </select>

                                </div>
                                <hr>
                                <button type="submit" class="btn btn-secondary pull-right btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <span>Menu Item List</span>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li class="mb-2"><i class="fa fa-th-large" aria-hidden="true"></i> Gallery
                                
                                    <span class="float-right">
                                        <a class="btn btn-outline-primary btn-sm   mr-2" href="edit_menu_item.php"><i class="ti-pencil-alt"></i></a>
                                        <a class="btn btn-outline-danger btn-sm  mr-1" href=""><i class="ti-trash"></i></a>
                                    </span>
                                </li>
                                <hr>
                                <li class="mb-2 mt-3"><i class="fa fa-th-large" aria-hidden="true"></i> Gallery
                                    <span class="float-right">
                                        <a class="btn btn-outline-primary btn-sm  mr-2" href="edit_menu_item.php"><i class="ti-pencil-alt"></i></a>
                                        <a class="btn btn-outline-danger btn-sm mr-1" href=""><i class="ti-trash"></i></a>
                                    </span>
                                </li>
                                <hr>
                                <li class="mb-2 mt-3"><i class="fa fa-th-large" aria-hidden="true"></i> Gallery
                                    <span class="float-right">
                                        <a class="btn btn-outline-primary btn-sm mr-2" href="edit_menu_item.php"><i class="ti-pencil-alt"></i></a>
                                        <a class="btn btn-outline-danger btn-sm mr-1" href=""><i class="ti-trash"></i></a>
                                    </span>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- animated -->
    </div>
    <!-- content -->

    <?php include "../../include/footer.php" ?>