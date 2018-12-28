<?php include "../../include/header.php" ?>
    <!-- /#header -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><i class="menu-icon fa fa-volume-up mr-1" aria-hidden="true"></i> Communicate / Send Message</h1>
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
                <div class="card-header">
                    <i class="fa fa-commenting-o" aria-hidden="true"></i> <span class="ml-2">Compose New Message</span>
                </div>
                <div class="card-body">
                    <form action="" id="message-form">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" id="input-small" name="input-small" class="input-sm form-control-sm form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Message</label>
                                    <textarea name="message" name="" id="message-board" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Notice Date <small>*</small></label>
                                    <input id="date" name="date" placeholder="" type="date" class="form-control date form-control-sm" value="" autocomplete="off" required>

                                </div>

                                <div class="form-group">
                                    <label for="">Publish On <small>*</small> </label>
                                    <input id="date" name="date" placeholder="" type="date" class="form-control date form-control-sm" value="" autocomplete="off" required>
                                </div>
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
                        <hr>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-envelope-o mr-1"></i> Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->

<?php include "../../include/footer.php" ?>