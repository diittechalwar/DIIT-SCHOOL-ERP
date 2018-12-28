<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="menu-icon fa fa-download mr-1" aria-hidden="true"></i> Download Center / Upload Content</h1>
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
                            <span>Upload Content</span>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Content Title</label>
                                    <input autofocus="" id="content_title" name="content_title" placeholder="" type="text" class="form-control form-control-sm" value="" autocomplete="off" required/>
                                </div>
                                <div class="form-group">
                                    <label for="">Content Type</label>
                                    <select id="content_type" name="content_type" class="form-control form-control-sm">
                                        <option value="">Select</option>
                                        <option value="Assignments">Assignments</option>
                                        <option value="Study Material">Study Material</option>
                                        <option value="Syllabus">Syllabus</option>
                                        <option value="Other Download">Other Download</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <!-- Radio group !-->
                                    <label class="control-label">Available For</label><small class="req"> *</small>
                                    <div class="checkbox ">
                                        <label>
                                            <input type="checkbox" class="content_available" name="content_available[]" value="Admin"> All Admin </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="content_available" name="content_available[]" value="student"> Student </label>
                                    </div>
                                    <span class="text-danger"></span>

                                </div>
                                <div class="upload_content content_disable">
                                    <div class="checkbox">
                                        <label>
                                            <input class="mr-2" type="checkbox" value="Yes" name="visibility" id="chk"><b>Available For All Classes </b></label>
                                    </div>

                                    <div class="form-group">

                                        <label for="">Class </label>

                                        <select id="class_id" name="class_id" class="form-control form-control-sm">
                                            <option value="">Select</option>
                                            <option value="1">
                                                1</option>
                                            <option value="2">
                                                2</option>
                                            <option value="3">
                                                3</option>
                                            <option value="4">
                                                4</option>
                                            <option value="5">
                                                5</option>
                                            <option value="7">
                                                7</option>
                                            <option value="8">
                                                UKG</option>
                                            <option value="9">
                                                LKG</option>
                                            <option value="10">
                                                Nursery</option>
                                            <option value="11">
                                                6</option>
                                        </select>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="">Section</label>
                                        <select id="section_id" name="section_id" class="form-control form-control-sm">
                                            <option value="">Select</option>
                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Upload Date</label>
                                    <input id="upload_date" name="upload_date" placeholder="" type="date" class="form-control form-control-sm" value="">
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea class="form-control" id="description" name="note" placeholder="" rows="3"></textarea>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <label for="">Content File</label><small class="req"> *</small>
                                    <input type="file" />

                                </div>
                                <hr>
                                <button type="submit" class="btn btn-secondary btn-sm pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 p-0">
                    <div class="card">
                        <div class="card-header">
                            <span>Content List</span>
                        </div>
                        <div class="card-body ">
                            <div class="table-stats order-table table-responsive ">
                                <table class="table upload-table">
                                    <thead>
                                        <tr>
                                            <th class="serial">Content Title <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                            <th class="avatar">Type <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                            <th>Date <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                            <th>Available <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                            <th>Class <i class="fa fa-caret-down" aria-hidden="true"></i></th>
                                            <th >Action <i class="fa fa-caret-down" aria-hidden="true"></i></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="alert with-close">
                                            <td class="title"><a href="#">Nikhil</a></td>
                                            <td class="type">
                                                Assignments
                                            </td>
                                            <td class="date">01-Jan-1970 </td>
                                            <td> Admin student </td>
                                            <td>ALL Classes </td>
                                            <td class="p-0"><a href="#" title="download" class="btn btn-outline-primary btn-sm mr-2"><i class="fa fa-download" aria-hidden="true"></i></a>
                                              <a href="" class="btn btn-outline-danger btn-sm float-right" data-dismiss="alert" aria-label="Close" title="close"><i class="fa fa-trash" aria-hidden="true"></i></a>                                            
                                            </td>
                                         
                                        </tr>
                                        <tr class="alert with-close">
                                            <td class="title"><a href="#">Nikhil</a></td>
                                            <td class="type">
                                                Assignments
                                            </td>
                                            <td class="date">01-Jan-1970 </td>
                                            <td> Admin student </td>
                                            <td>ALL Classes </td>
                                            <td class="p-0"><a href="#" title="download" class="btn btn-outline-primary btn-sm mr-2"><i class="fa fa-download" aria-hidden="true"></i></a>
                                              <a href="" class="btn btn-outline-danger btn-sm float-right" data-dismiss="alert" aria-label="Close" title="close"><i class="fa fa-trash" aria-hidden="true"></i></a>                                            
                                            </td>
                                         
                                        </tr>
                              
                     

                                    </tbody>
                                </table>
                                <hr>
                                <div class="col-md-12">
                                    <p style="font-size: 12px;">Record: 2 of 13</p>
                                </div>
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