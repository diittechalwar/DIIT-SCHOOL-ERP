<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="ti-book mr-1"></i> Library / Add Book</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated">

            <div class="card">
                <div class="card-header">
                    <span>Add Book</span>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class=" row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Book_Title" class=" form-control-label">Book Title</label>
                                    <input type="text" id="Book_Title" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Book_Number" class=" form-control-label">Book Number</label>
                                    <input type="number" id="Book_Number" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ISBN_Number" class=" form-control-label">ISBN Number</label>
                                    <input type="text" id="ISBN_Number" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Publisher" class=" form-control-label">Publisher</label>
                                    <input type="text" id="Publisher" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Author" class=" form-control-label">Author</label>
                                    <input type="text" id="Author" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Subject" class=" form-control-label">Subject</label>
                                    <input type="text" id="Subject" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Rack_Number" class=" form-control-label">Rack Number</label>
                                    <input type="number" id="Rack_Number" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Qty" class=" form-control-label">Qty</label>
                                    <input type="number" id="Qty" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Book_Price" class=" form-control-label">Book Price</label>
                                    <input type="number" id="Book_Price" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Post_Date" class=" form-control-label">Post Date</label>
                                    <input type="date" id="Post_Date" placeholder="" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="textarea-input" class=" form-control-label">Textarea</label>
                                    <textarea name="textarea-input" id="textarea-input" rows="3" placeholder="" class="form-control form-control-sm" required></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="form-actions form-group">
                            <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- /.content -->

    <?php include "../../include/footer.php" ?>