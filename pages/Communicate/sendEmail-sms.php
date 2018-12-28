<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="menu-icon fa fa-volume-up mr-1" aria-hidden="true"></i> Communicate / Send Email / SMS</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <!-- Content -->
    <div class="content">
        <div class="animated">
            <div class="card">
                <form action="">
                    <div class="card-header">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i> <span class="ml-2">Compose New Email / SMS</span>
                        <ul class="nav nav-tabs float-right" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Group</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Individual</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Class</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content pl-3 p-1" id="myTabContent">
                            <div class="tab-pane active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" id="input-small" name="input-small" class="input-sm form-control-sm form-control" required>
                                            <div class="form-group">
                                                <label class="pr20 mr-2">Send Through</label>
                                                <label class="checkbox-inline mr-2">
                                                    <input class="mr-1" type="checkbox" value="mail" name="group_send_by[]"> Email </label>
                                                <label class="checkbox-inline mr-2">
                                                    <input class="mr-2" type="checkbox" value="sms" name="group_send_by[]">SMS </label>

                                            </div>
                                            <label for="">Message</label>
                                            <br>
                                            <textarea name="message" name="" id="message-board" required></textarea>
                                        </div>

                                    </div>
                                    <div class="col-md-4">

                                        <label for="">Message To</label>
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <label for="checkbox1" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Student
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> Parent
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Admin
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Teacher
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Accountant
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Librarian
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Receptionist
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Super Admin
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> ABC
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Staff

                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" id="input-small" name="input-small" class="input-sm form-control-sm form-control" required>
                                            <div class="form-group">
                                                <label class="pr20 mr-2">Send Through</label>
                                                <label class="checkbox-inline mr-2">
                                                    <input class="mr-1" type="checkbox" value="mail" name="group_send_by[]"> Email </label>
                                                <label class="checkbox-inline mr-2">
                                                    <input class="mr-2" type="checkbox" value="sms" name="group_send_by[]">SMS </label>

                                            </div>
                                            <label for="">Message</label>
                                            <br>
                                            <textarea name="message" name="" id="message-board" required></textarea>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Message To</label>
                                        <div class="input-group">
                                            <div class="input-group-btn search-panel">
                                                <button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown">
                                                    <span id="search_concept">Select</span> <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#contains">Admin</a></li>
                                                    <li><a href="#its_equal">Teacher</a></li>
                                                    <li><a href="#greather_than">ABC</a></li>
                                                    <li><a href="#less_than">Staff </a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#all">Students</a></li>
                                                </ul>
                                            </div>
                                            <input type="hidden" name="search_param" value="all" id="search_param">
                                            <input type="text" class="form-control form-control-sm" name="x">
                                            <span class="input-group-btn">
                                             <button class="btn btn-default btn-sm" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </span>
                                        </div>
                                        <br>
                                        <div class="dual-list list-right">

                                            <div class="well minheight260">
                                                <div class="input-group">
                                                    <input type="text" id="input2-group1" name="input2-group1" placeholder="Search" class="form-control form-control-sm">
                                                    <span class="input-group-btn">
                                            <button class="btn btn-default btn-sm" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </span>
                                                </div>
                                                <div class=" mt-2">
                                                    <ul class="list-group section_list listcheckbox">
                                                        <div class="checkbox">
                                                            <label for="checkbox3" class="form-check-label ">
                                                                <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> ABC
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label for="checkbox3" class="form-check-label ">
                                                                <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Staff

                                                            </label>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" id="input-small" name="input-small" class="input-sm form-control-sm form-control" required>
                                            <div class="form-group">
                                                <label class="pr20 mr-2">Send Through</label>
                                                <label class="checkbox-inline mr-2">
                                                    <input class="mr-1" type="checkbox" value="mail" name="group_send_by[]"> Email </label>
                                                <label class="checkbox-inline mr-2">
                                                    <input class="mr-2" type="checkbox" value="sms" name="group_send_by[]">SMS </label>

                                            </div>
                                            <label for="">Message</label>
                                            <br>
                                            <textarea name="message" name="" id="message-board" required></textarea>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Message To</label>
                                        <select id="class_id" name="class_id" class="form-control form-control-sm" autocomplete="off">
                                            <option value="">Select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="7">7</option>
                                            <option value="8">UKG</option>
                                            <option value="9">LKG</option>
                                            <option value="10">Nursery</option>
                                            <option value="11">6</option>
                                        </select>
                                        <br>
                                        <div class="dual-list list-right">
                                            <div class="well minheight260">
                                                <div class="wellscroll">
                                                    <b>Section</b>
                                                    <ul class="list-group section_list listcheckbox">
                                                        <div class="checkbox">
                                                            <label for="checkbox3" class="form-check-label ">
                                                                <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> ABC
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label for="checkbox3" class="form-check-label ">
                                                                <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Staff

                                                            </label>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-envelope-o mr-1"></i> Send</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

<?php include "../../include/footer.php" ?>