<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header d-inline-block">
                        <div class="page-title">
                            <h1><i class="ti-layers mr-1"></i> Inventory / Add Item Stock</h1>
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
                            <span>Add Item Stock</span>
                        </div>
                        <div class="card-body">

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="Item_Category" class=" form-control-label">Item Category</label>
                                    <select name="class" id="Item_Category" class=" form-control form-control-sm" required>
                                        <option value="0">Select</option>
                                        <option value="1">Electronics</option>
                                        <option value="2">Furniture</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Item" class=" form-control-label">Item</label>
                                    <select name="class" id="Item" class=" form-control form-control-sm" required>
                                        <option value="0">Select</option>
                                        <option value="1">asfaf</option>
                                        <option value="2">iPhone</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Supplier" class=" form-control-label">Supplier</label>
                                    <select name="class" id="Supplier" class=" form-control form-control-sm" required>
                                        <option value="0">Select</option>
                                        <option value="1">Chairs</option>
                                        <option value="2">Panchanand Manjhi</option>
                                        <option value="3">Trazan Marbles</option>
                                        <option value="4">Om Enterprises</option>
                                        <option value="5">Suraj Hardware</option>
                                        <option value="6">Misthan Bhandar</option>
                                        <option value="7">Kitab Ghar</option>
                                        <option value="8">Greel Work</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Store" class=" form-control-label">Store</label>
                                    <select name="class" id="Store" class=" form-control form-control-sm" required>
                                        <option value="0">Select</option>
                                        <option value="1">Store Room</option>
                                        <option value="2">Hidden</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Quantity" class=" form-control-label">Quantity</label>

                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <div class="btn-group">
                                                <select name="class" id="Store" class=" form-control form-control-sm" required style="height: 31px;">
                                                    <option value="0">+</option>
                                                    <option value="1">-</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="number" id="Quantity"name="input1-group3" placeholder="" class="form-control form-control-sm" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Issue_Date" class=" form-control-label">Issue Date</label>
                                    <input type="date" id="Issue_Date" placeholder="" class="form-control form-control-sm" required>
                                </div>
                                <div class="form-group inputDnD">
                                    <label for="inputFile" class=" form-control-label">Attach Document</label>
                                    <div>
                                        <input type="file" class="form-control-file " id="inputFile" accept="image/*"  data-title="Drag and drop a file">
                                    </div>
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
                            <span>Item Stock List</span>
                        </div>
                        <div class="card-body">
                             <div class="table-stats order-table table-responsive">
                                <table class="table ">
                                    <thead>
                                    <!--  style="width: 80px;" -->
                                        <tr>
                                            <th class="serial">Name</th>
                                            <th >Category</th>
                                            <th>Supplier</th>
                                            <th>Store</th>
                                            <th>Quantity</th>
                                            <th>Date</th>
                                            <th style="width:103px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>iPhone</td>
                                            <td>Electronics</td>
                                            <td>Om Enterprises</td>
                                            <td>Store Room</td>
                                            <td>5</td> 
                                            <td>20-Nov-18</td>
                                            <td class="pr-0">
                                                <a class="btn btn-outline-primary btn-sm mt-2 mr-2" href="edititemstock.php"><i class="ti-pencil-alt"></i></a>
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