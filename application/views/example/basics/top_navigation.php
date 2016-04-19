<!-- top navigation -->
<div class="top_nav">

    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right" style="margin-right: 2%">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo base_url()."assets/images/".$this->session->userdata('security_key').$this->session->userdata('username').".jpg"?>" alt=""><?php echo $this->session->userdata('username'); ?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                        <li><a href=""  data-toggle="modal" data-target="#login-modal">Profile</a>
                        </li>

                        <li><a href="<?php echo base_url()."index.php/login_controller/logout" ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                        </li>
                    </ul>
                </li>



            </ul>
        </nav>
    </div>
    <!-- BEGIN # MODAL LOGIN -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; margin-top: 10%">
        <!-- Cropping modal -->
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal" type="button">&times;</button>
                            <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                        </div>
                        <div class="modal-body">
                            <div class="avatar-body">
                                <?php echo form_open_multipart('index.php/profile/photo_change');?>
                                <!-- Upload image and data -->
                                <div class="avatar-upload">
                                    <input class="avatar-src" name="avatar_src" type="hidden">
                                    <input class="avatar-data" name="avatar_data" type="hidden">
                                    <label for="avatarInput">Only .jpg files are allowed</label>
                                    <input class="avatar-input" id="avatarInput" name="file_name" type="file">
                                </div>

                                <div class="row avatar-btns">

                                    <div class="col-md-3">
                                        <button class="btn btn-primary btn-block avatar-save" type="submit">Done</button>
                                    </div>
                                </div>
                                <?php echo form_close(); ?>

                            </div>
                        </div>
                        <!-- <div class="modal-footer">
          <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
        </div> -->
                </div>
            </div>
        <!-- /.modal -->

    </div>
    <!-- END # MODAL LOGIN -->

</div>
<!-- /top navigation -->