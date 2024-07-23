<?php
require './db/connection.php';

include './includes/header.php';

$user_profile = get_profile_data($id,$conn);

?>
<!-- Page Sidebar Ends-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Edit Profile</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active"> Edit Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-4">
                <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">My Profile</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                                <div class="row">
                                    <div class="profile-title">
                                        <div class="media mb-0">
                                            <img class=" rounded-circle" alt="" src="<?php echo get_profile_id($id,$conn) ?>" style="width:80px;height:80px;">
                                            <div class="media-body">
                                                <h5 class="mb-1"><?php echo $user_profile['first_name']." ".$user_profile['last_name']  ?></h5>
                                                <p><?php echo $user_profile['email_address']  ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Change Password</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="./form_submissions/password-change.php" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <div class="form-group position-relative">
                                        <label class="col-form-label">Current Password</label>
                                        <div class="form-input position-relative">
                                            <input class="form-control" type="password" name="current_password"
                                                required="" placeholder="*********">
                                            <div class="show-hide position-absolute top-50 end-12px"><span
                                                    class="show"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group position-relative">
                                        <label class="col-form-label">New Password</label>
                                        <div class="form-input position-relative">
                                            <input class="form-control" type="password" name="new_password" required=""
                                                placeholder="*********">
                                            <div class="show-hide position-absolute top-50 end-12px"><span
                                                    class="show"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group position-relative">
                                        <label class="col-form-label">Retype New Password</label>
                                        <div class="form-input position-relative">
                                            <input class="form-control" type="password" name="re_enter_password"
                                                required="" placeholder="*********">
                                            <div class="show-hide position-absolute top-50 end-12px"><span
                                                    class="show"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-footer my-4">
                                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 h-100">
                    <form class="card" method="POST" action="./form_submissions/profile-update.php" enctype="multipart/form-data">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Edit Profile</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="#" data-bs-toggle="card-remove">
                                    <i class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <input class="form-control" name="first_name" value="<?php echo $user_profile['first_name'] ?>" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input class="form-control" name="last_name" value="<?php echo $user_profile['last_name'] ?>" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12 ">
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <label class="form-label">Email address</label>
                                            <div class="form-check form-switch">
                                                <label class="form-label" style="color:#F27B01;">Email Notification </label>
                                                <input class="form-check-input" id="flexSwitchCheckDefault" name="email-notification" type="checkbox" role="switch" checked>
                                            </div>
                                        </div>
                                        <input class="form-control" name="email" value="<?php echo $user_profile['email_address'] ?>" readonly type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input class="form-control" name="username" value="<?php echo $user_profile['username'] ?>" type="text" placeholder="">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Date Format</label>
                                        <select class="form-control btn-square" value="<?php echo $user_profile['date_format'] ?>" name="date_format" id="date_format">
                                            <option value="Y-m-d">YYYY-MM-DD</option>
                                            <option value="Y/m/d">YYYY/MM/DD</option>
                                            <option value="m-d-Y">MM-DD-YYYY</option>
                                            <option value="m/d/Y">MM/DD/YYYY</option>
                                            <option value="d-m-Y">DD-MM-YYYY</option>
                                            <option value="d/m/Y">DD/MM/YYYY</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Language</label>
                                        <select class="form-control btn-square" value="<?php echo $user_profile['language'] ?>" name="language" id="language">
                                            <option value="English">English</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="French">French</option>
                                            <option value="Arabic">Arabic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Time Format</label>
                                        <select class="form-control btn-square" value="<?php echo $user_profile['time_format'] ?>" name="time_format" id="time_format">
                                            <option value="H:i:s">24 hrs</option>
                                            <option value="h:i:s">12 hrs</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Time Zone</label>
                                        <select class="form-control btn-square" value="<?php echo $user_profile['timezone'] ?>" name="timezone" id="timezone">>
                                            <option value="Asia/Kolkata">IST (Indian Standard Time)</option>
                                            <option value="Asia/Dubai">GST (Gulf Standard Time)</option>
                                            <option value="America/New_York">EST (Eastern Standard Time)</option>
                                            <option value="Europe/London">GMT (Greenwich Mean Time)</option>
                                            <option value="Asia/Tokyo">JST (Japan Standard Time)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Change Profile Picture</label>
                                        <input class="form-control" name="profile_picture" id="inputGroupFile04" type="file" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<!-- footer start-->


<?php include './includes/footer.php'; ?>