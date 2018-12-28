<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header d-inline-block">
                        <div class="page-title">
                            <h1><i class="ti-layers"></i> Inventory / Edit Inventory Issue Item</h1>
                        </div>
                    </div>
                    <!-- <a href="" class=" btn-secondary btn-sm float-right d-inline-block mt-2"><i class="ti-plus"></i>&nbsp; Add Student</a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title ml-2" v-if="headerText">Edit Inventory Issue Item</strong>
                </div>
                <div class="card-body">
                <form action="" method="post">
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="User_Type" class=" form-control-label">User Type</label>
                                <select name="class" id="User_Type" class=" form-control form-control-sm" required>
                                    <option value="0">Admin</option>
                                    <option value="1">Teacher</option>
                                    <option value="2">Accountant</option>
                                    <option value="3">Librarian</option>
                                    <option value="4">Receptionist</option>
                                    <option value="5">Super Admin</option>
                                    <option value="6">ABC</option>
                                    <option value="7">Staff</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="Issue_To" class=" form-control-label">Issue To</label>
                                <select name="class" id="Issue_To" class=" form-control form-control-sm" required>
                                    <option value="0">Select</option>
                                    <option value="1">Super Admin</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="Issued_By" class=" form-control-label">Issued By</label>
                                <input type="text" id="Issued_By" placeholder="" class="form-control form-control-sm" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="Issue_Date" class=" form-control-label">Issue Date</label>
                                <input type="date" id="Issue_Date" placeholder="" class="form-control form-control-sm" required>
                            </div>
                            <div class="col-md-4">
                                <label for="Return_Date" class=" form-control-label">Return Date</label>
                                <input type="date" id="Return_Date" placeholder="" class="form-control form-control-sm" required>
                            </div>
                            <div class="col-md-4">
                            <label for="Note" class=" form-control-label">Note</label>
                                <textarea name="textarea-input" id="Note" rows="1" placeholder="" class="form-control form-control-sm" required></textarea>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="Item_Category" class=" form-control-label">Item Category</label>
                                <select name="class" id="Item_Category" class=" form-control form-control-sm" required>
                                    <option value="0">Select</option>
                                    <option value="1">Electronics</option>
                                    <option value="2">Furniture</option>
                                </select>
                            </div>
                            <div class="col-md-4"> 
                                <label for="Item" class=" form-control-label">Item</label>
                                <select name="class" id="Item" class=" form-control form-control-sm" required>
                                    <option value="0">Select</option>
                                    <option value="1">assdf</option>
                                    <option value="2">iPhone</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="Quantity" class=" form-control-label">Quantity</label>
                                <input type="number" id="Quantity" placeholder="" class="form-control form-control-sm" required>
                            </div>
                        </div>
                        <div class="form-actions form-group">
                            <button type="submit" class="btn btn-secondary btn-sm float-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content -->

    <?php include "../../include/footer.php" ?>