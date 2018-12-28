<?php include "../../include/header.php" ?>
 
<!-- Content -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                    <h1><i class=" menu-icon fa fa-bandcamp mr-1"></i> Front Office  /  Setup Front Office </h1>
                    </div>
                </div> 
            </div>

        </div>
    </div>
</div>
<div class="content">
    <div class="animated row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs flex-column" style="border-bottom: none;" id="myTab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item " >
                            <a class="nav-link active tabs-front-ul" id="home-tab" data-toggle="tab"  href="#home" role="tab" aria-controls="home" aria-selected="true">Purpose</a>
                        <hr>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tabs-front-ul" id="profile-tab"   data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Compain Type</a>
                        <hr>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tabs-front-ul" id="contact-tab"  data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Source</a>
                        <hr>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tabs-front-ul" id="ls-tab"  data-toggle="tab" href="#ls" role="tab" aria-controls="ls" aria-selected="false">Reference</a>
                        <hr>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <div class="col-md-9">
       <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <span>Add Purpose</span>   
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for=""> Purpose</label>
                                                    <input type="text" name="" id="" class="form-control-sm form-control" required>
                                                </div>
                                                <div class="col-md-12  form-group">
                                                    <label for=""> Descripation</label>
                                                    <textarea name="" id="" cols="30" rows="2" class="form-control-sm form-control" required></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <hr>
                                                    <button type="submit" class="btn btn-sm btn-secondary float-right">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <span> Purpose List</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-stats order-table table-responsive">
                                            <table class="table ">
                                                <thead>
                                                    <tr>
                                                        <th class="serial">#</th>
                                                        <th>Purpose</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mahesh</td>
                                                        <td > <a href="editPurpose.php"><button type="button" class="btn btn-outline-primary btn-sm ml-2"><span
                                                        class="ti-pencil-alt"></span></button></a>
                                                        <button type="button"  class="btn btn-outline-danger btn-sm  ml-2" title="Delete"><span class="ti-trash"></span></button>
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
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                      <span>Add Complain Type</span>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for=""> Complain Type *</label>
                                                    <input type="text" name="" id="" class="form-control-sm form-control" required>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label for=""> Descripation</label>
                                                    <textarea name="" id="" cols="30" rows="2" class="form-control-sm form-control" required></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <hr>
                                                    <button type="submit" class="btn btn-secondary btn-sm float-right">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                         <span>Complain Type List</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-stats order-table  table-responsive">
                                            <table class="table ">
                                                <thead>
                                                    <tr>
                                                        <th class="serial">#</th>
                                                        <th>Complain Type</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Book</td>
                                                        <td><a href="editComplaintype.php"><button type="button" class="btn btn-outline-primary btn-sm  "><span
                                                        class="ti-pencil-alt"></span></button></a>
                                                        <button type="button"  class="btn btn-outline-danger btn-sm  ml-2" title="Delete"><span class="ti-trash"></span></button>
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
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <span>Add Source</span>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for=""> Source </label>
                                                    <input type="text" name="" id="" class="form-control-sm form-control" required>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label for=""> Descripation</label>
                                                    <textarea name="" id="" cols="30" rows="2" class="form-control-sm form-control" required></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <hr>
                                                    <button type="submit" class="btn btn-sm btn-secondary float-right">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                       <span>Source List</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-stats order-table table-responsive">
                                            <table class="table ">
                                                <thead>
                                                    <tr>
                                                        <th class="serial">#</th>
                                                        <th>Source</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mahesh</td>
                                                        <td><a href="editSource.php"><button type="button" class="btn btn-outline-primary btn-sm "><span
                                                        class="ti-pencil-alt"></span></button></a>
                                                        <button type="button"  class="btn btn-outline-danger btn-sm  ml-2" title="Delete"><span class="ti-trash"></span></button>
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
                    <div class="tab-pane fade" id="ls" role="tabpanel" aria-labelledby="ls-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <span>Add Reference</span>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for=""> Reference</label>
                                                    <input type="text" name="" id="" class="form-control-sm form-control" required>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label for=""> Descripation</label>
                                                    <textarea name="" id="" cols="30" rows="2" class="form-control-sm form-control" required></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <hr>
                                                    <button type="submit" class="btn btn-sm btn-secondary float-right">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <span> Reference  List</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-stats order-table  table-responsive">
                                            <table class="table ">
                                                <thead>
                                                    <tr>
                                                        <th class="serial">#</th>
                                                        <th>Reference </th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mahesh</td>
                                                        <td><a href="editReference.php"><button type="button" class="btn btn-outline-primary btn-sm  "><span
                                                        class="ti-pencil-alt"></span></button></a>
                                                        <button type="button"  class="btn btn-outline-danger btn-sm  ml-2" title="Delete"><span class="ti-trash"></span></button>
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
        </div>
    </div><!-- .animated -->
</div>


<?php include "../../include/footer.php" ?>