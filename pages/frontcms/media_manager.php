<?php include "../../include/header.php" ?>
        <!-- /#header -->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-12">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1><i class="menu-icon fa fa-empire mr-1"></i>  Front CMS / Media Manager</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                           
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                   <img style="width: 100%;" class="" src="http://demo.flipscool.com/uploads/gallery/media/thumb/blank start.png" alt="manager-img">
                                </div>
                                <div class="col-md-6">
                               
                                    <dl class="mediaDL">
                                        <dt>Media Name</dt>
                                        <dd id="modal_media_name">blank start.png</dd>
                                        <dt>Media Type</dt>
                                        <dd id="modal_media_type">image/png</dd>
                                        <dt>Media Path</dt>
                                        <dd id="modal_media_path"><a href="http://demo.flipscool.com/uploads/gallery/media/thumb/blank start.png" target="_blank" style="color: blue; font-weight: bold; text-transform: uppercase;"> star.png</a></dd>
                                        <dt>Media Size</dt>
                                        <dd id="modal_media_size">10.2 KB</dd>

                                    </dl>
                              
                                </div>
                            </div>
                       </div>
                     
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="content">
           <div class="animated">
                <div class="card"> 
                    <div class="card-header">
                       <span>Media Manager</span>
                    </div>
                    <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Upload Your File</label><br>
                                    <input type="file" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Upload Youtube Video</label><br>
                                    <input type="text" class="form-control form-control-sm" name="video_url" id="video_url" placeholder="URL" autocomplete="off" required >
                                </div>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-secondary btn-sm float-right">Submit</button>
                    </form>
                        
                    </div>
                </div>

                <div class="card"> 
                    <div class="card-header">
                     <span>Search By File Name</span>
                    </div>
                    <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="name" class="control-label">Search By File Name</label>
                                <input type="text" value="" class="form-control form-control-sm search_text" id="" placeholder="Enter Keyword..." autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Filter By File Type</label><br>
                                    <select class="form-control form-control-sm file_type">
                                        <option value="">Select</option>
                                        <option value="Image">Image</option>

                                        <option value="Video">Video</option>

                                        <option value="Text">Text</option>

                                        <option value="Zip">Zip</option>

                                        <option value="Rar">Rar</option>

                                        <option value="Pdf">Pdf</option>

                                        <option value="Word">Word</option>

                                        <option value="Excel">Excel</option>

                                        <option value="Other">Other</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                           
                    </form>
                    <div class="row mt-4">
                        <div class="col-sm-3 col-md-2 col-xs-6 img_div_modal image_div div_record_18">
                            <div class="media_manager_img">
                                <img class="" src="http://demo.flipscool.com/uploads/gallery/media/thumb/blank start.png" alt="manager-img">
                                <div class="button-manager-area mt-2 mb-2">
                                   <button type="button" class="btn btn-outline-primary btn-sm mr-2" data-toggle="modal" data-target="#staticModal"><i class="fa fa-align-justify" aria-hidden="true"></i></button>
                                   <button type="button" class="btn btn-outline-danger btn-sm "><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-2 col-xs-6 img_div_modal image_div div_record_18">
                            <div class="media_manager_img">
                                <img class="" src="http://demo.flipscool.com/uploads/gallery/media/thumb/blank start.png" alt="manager-img">
                                <div class="button-manager-area mt-2 mb-2">
                                   <button type="button" class="btn btn-outline-primary btn-sm mr-2" data-toggle="modal" data-target="#staticModal"><i class="fa fa-align-justify" aria-hidden="true"></i></button>
                                   <button type="button" class="btn btn-outline-danger btn-sm "><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-2 col-xs-6 img_div_modal image_div div_record_18">
                            <div class="media_manager_img">
                                <img class="" src="http://demo.flipscool.com/uploads/gallery/media/thumb/blank start.png" alt="manager-img">
                                <div class="button-manager-area mt-2 mb-2">
                                   <button type="button" class="btn btn-outline-primary btn-sm mr-2" data-toggle="modal" data-target="#staticModal"><i class="fa fa-align-justify" aria-hidden="true"></i></button>
                                   <button type="button" class="btn btn-outline-danger btn-sm "><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-2 col-xs-6 img_div_modal image_div div_record_18">
                            <div class="media_manager_img">
                                <img class="" src="http://demo.flipscool.com/uploads/gallery/media/thumb/blank start.png" alt="manager-img">
                                <div class="button-manager-area mt-2 mb-2">
                                   <button type="button" class="btn btn-outline-primary btn-sm mr-2" data-toggle="modal" data-target="#staticModal"><i class="fa fa-align-justify" aria-hidden="true"></i></button>
                                   <button type="button" class="btn btn-outline-danger btn-sm "><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-2 col-xs-6 img_div_modal image_div div_record_18">
                            <div class="media_manager_img">
                                <img class="" src="http://demo.flipscool.com/uploads/gallery/media/thumb/blank start.png" alt="manager-img">
                                <div class="button-manager-area mt-2 mb-2">
                                   <button type="button" class="btn btn-outline-primary btn-sm mr-2" data-toggle="modal" data-target="#staticModal"><i class="fa fa-align-justify" aria-hidden="true"></i></button>
                                   <button type="button" class="btn btn-outline-danger btn-sm "><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-2 col-xs-6 img_div_modal image_div div_record_18">
                            <div class="media_manager_img">
                                <img class="" src="http://demo.flipscool.com/uploads/gallery/media/thumb/blank start.png" alt="manager-img">
                                <div class="button-manager-area mt-2 mb-2">
                                   <button type="button" class="btn btn-outline-primary btn-sm mr-2" data-toggle="modal" data-target="#staticModal"><i class="fa fa-align-justify" aria-hidden="true"></i></button>
                                   <button type="button" class="btn btn-outline-danger btn-sm "><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </div>
                                
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