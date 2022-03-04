<?php
include("config_indemnifier.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT * FROM users WHERE login = '$myusername' and description = '$mypassword'";

    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //   $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        //  session_register("myusername"); 
        $_SESSION['username'] = $myusername;
        $_SESSION['password'] = $mypassword;

        $_SESSION['userid'] = $row['id'];
        $_SESSION['dpt'] = $row['dpt'];


        $_SESSION['prive'] = $row['privilege'];

        $_SESSION['userid'] = $row['id'];



        //  echo $_SESSION['userid'];

        header("location: complains.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo10/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 06:30:57 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Sindh Human Rights Commission</title>
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">
</head>

<style>
    .form-form .form-form-wrap form .field-wrapper svg {
        position: absolute;
        top: 16px;
        color: green;
        fill: rgba(27, 85, 226, 0.23921568627450981);
    }

    .bg {
        background-image: url("logo-loading.png");

        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: 480px;

    }
</style>

<body class="form">


    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content" style="width: 656px;">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="index.php">
                                        <!-- <img src="images/crm logo 1.png" alt="" srcset=""  style="display: block;margin-left: auto;margin-right: auto;width: 60%;"> -->
                                        <!-- <h7 style="    color: black;font-size: 32px;font-weight: bold;">Sindh Human Rights Commission</h7> -->
                                    </a>
                                </div>
                            </div>
                        </div>

                        <h1 class="text-success">Login <a href="index.php"></a></h1>

                        <form class="text-left" action="" method="post">
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="username" name="username" type="text" class="form-control" placeholder="Username">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Show Password</p>
                                        <label class="switch s-success">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-success" value="">Log In</button>
                                    </div>

                                </div>

                                <!-- <div class="field-wrapper text-center keep-logged-in">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                          <input type="checkbox" class="new-control-input">
                                          <span class="new-control-indicator"></span>Keep me logged in
                                        </label>
                                    </div>
                                </div> -->

                                <!-- <div class="field-wrapper">
                                    <a href="auth_pass_recovery.html" class="forgot-pass-link">Forgot Password?</a>
                                </div> -->

                            </div>
                        </form>
                        <!-- <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>                        -->
                        <!-- <p class="terms-conditions">© 2020 All Rights Reserved. <a href="index.html">CORK</a> is a product of Designreset. <a href="javascript:void(0);">Cookie Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p> -->

                    </div>
                </div>
            </div>
        </div>
        <div class="form-image bg">
            <div class="l-image" style="background-color: transparent;">
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/authentication/form-1.js"></script>

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo10/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 06:30:57 GMT -->

</html>