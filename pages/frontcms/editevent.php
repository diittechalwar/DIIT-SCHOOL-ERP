<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="fa fa-empire mr-1" aria-hidden="true"></i> Front CMS / Edit Event</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title" v-if="headerText"> Edit Event</span>

                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input id="title" name="title" placeholder="" type="text" class="form-control form-control-sm" autocomplete="off">
                                <span class="text-danger"></span>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Venue</label>
                                        <input autofocus="" id="venue" name="venue" placeholder="" type="text" class="form-control form-control-sm" value="LE MERIDIAN HOTEL" autocomplete="off">
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Event Start</label>
                                        <input id="start_date" name="start_date" placeholder="" type="text" class="form-control form-control-sm date" value="13-Oct-2018" readonly="readonly">
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Event End</label>
                                        <input id="end_date" name="end_date" placeholder="" type="text" class="form-control form-control-sm date" value="31-Oct-2018" readonly="readonly">
                                        <span class="text-danger"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-secondary btn-sm float-right" data-target="#staticModal" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp; Add Media</button>
                            </div>

                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="" style="color: blue;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            SEO Details
                        <span class="float-right"><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </a>
                           
                        </div>
                        <div class="card-body">
                            <div class="collapse" id="collapseExample">
                                <div class="box-body" style="display: block;">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Meta Title</label>
                                        <input id="meta_title" name="meta_title" placeholder="" type="text" class="form-control form-control-sm" value="">
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Meta Keyword</label>
                                        <input id="meta_keywords" name="meta_keywords" placeholder="" type="text" class="form-control form-control-sm" value="">
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Meta Description</label>
                                        <textarea id="editor1" name="meta_description" placeholder="" type="text" class="form-control form-control-sm"></textarea>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <div class=col-md-3>
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title" v-if="headerText"> Sidebar Setting</span>
                        </div>
                        <div class="card-body">
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sidebar</label>
                                    <div class="material-switch pull-right">
                                        <label class="switch ">
                                            <input type="checkbox" class="primary">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticModalLabel" style="display: inline-block;">Media Manager</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input type="text" class="form-control search_text form-control-sm " placeholder="Search By File Name" autocomplete="off">
                                                <button class="btn btn-sm"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <label for="new_name" class="control-label float-right">Filter By File Type :-</label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <select class="form-control file_type form-control-sm">
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

                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-2">
                                      <div class="fadeheight"><img class="" data-fid="18" data-content_type="image/png" data-content_name="blank start.png" data-is_image="1" data-vid_url="" data-img="" src="http://demo.flipscool.com/uploads/gallery/media/thumb/blank start.png"></div>
                                    
                                    </div>
                                    <div class="col-md-2">
                                      <div class="fadeheight"><img class="" data-fid="18" data-content_type="image/png" data-content_name="blank start.png" data-is_image="1" data-vid_url="" data-img="" src="http://demo.flipscool.com/uploads/gallery/media/thumb/blank start.png"></div>
                                    
                                    </div>
                                    <div class="col-md-2">
                                      <div class="fadeheight"><img class="" data-fid="18" data-content_type="image/png" data-content_name="blank start.png" data-is_image="1" data-vid_url="" data-img="" src="http://demo.flipscool.com/uploads/gallery/media/thumb/blank start.png"></div>
                                    
                                    </div>
                                    <div class="col-md-2">
                                      <div class="fadeheight"><img class="" data-fid="18" data-content_type="image/png" data-content_name="blank start.png" data-is_image="1" data-vid_url="" data-img="" src="http://demo.flipscool.com/uploads/gallery/media/thumb/blank start.png"></div>
                                    
                                    </div>
                                    <div class="col-md-2">
                                      <div class="fadeheight"><img class="" data-fid="18" data-content_type="image/png" data-content_name="blank start.png" data-is_image="1" data-vid_url="" data-img="" src="http://demo.flipscool.com/uploads/gallery/media/thumb/blank start.png"></div>
                                    
                                    </div>
                                    <div class="col-md-2">
                                      <div class="fadeheight"><img class="" data-fid="18" data-content_type="image/png" data-content_name="blank start.png" data-is_image="1" data-vid_url="" data-img="" src="http://demo.flipscool.com/uploads/gallery/media/thumb/blank start.png"></div>
                                    
                                    </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-sm br-0" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-secondary btn-sm">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="" style="color: blue;" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Featured Image
                                <span class="float-right"><i class="fa fa-plus" aria-hidden="true"></i></span>
                            </a>
                          
                        </div>
                        <div class="card-body">
                            <div class="collapse" id="collapseExample1">
                                <div class="box-body" style="display: block;">
                                    <div class="box-body" style="display: block;">
                                        <div class="form-group">
                                            <div class="input-group input-group-sm">
                                                <input class="form-control iframe-btn" placeholder="Select Image" type="text" name="image" id="image" value="">
                                                <span class="input-group-btn">
                                                 <a class="btn btn-outline-secondary btn-sm ml-1" href="" data-target="#staticModal" data-toggle="modal"><i class="fa fa-folder-open"></i></a>
                                                 <a class="btn btn-outline-danger btn-sm " href=""><i class="ti-trash"></i></a>

                                                </span>
                                                </div>
                                             <div id="image_preview" class="thumbnail" style="margin-top: 10px;  display: none">
                                                <img src="" class="img-responsive feature_image_url">
                                             </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                 
                        <button type="submit" class="btn btn-primary btn-sm mx-auto d-block"><i class="fa fa-star"></i>&nbsp; Save</button>
                </div>

            </div>

            <!--start form code -->

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

    <?php include "../../include/footer.php" ?>