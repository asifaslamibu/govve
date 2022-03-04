<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo10/apps_invoice-preview.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Nov 2021 11:57:24 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>View Complaint </title>
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/apps/invoice-preview.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap-select/bootstrap-select.min.css">
    <!--  END CUSTOM STYLE FILE  -->

</head>
<style>
    /*
            The below code is for DEMO purpose --- Use it if you are using this demo otherwise, Remove it
        */
    .navbar .navbar-item.navbar-dropdown {
        margin-left: auto;
    }

    .layout-px-spacing {
        min-height: calc(100vh - 125px) !important;
    }
    .caret::before {
        content: none !important;
    }

    .edits:hover {
        cursor: pointer;
        color: green;
    }

    .btn:not(:disabled):not(.disabled) {
        width: inherit;
        margin-top: 10px;

    }

    .info_sec {
        background-color: #fff;
        padding: 20px;
    }
</style>

<body class="sidebar-noneoverflow starterkit">
    <?php
    include("config_indemnifier.php");

    // $id = $_SESSION['userid'];
    // $result = mysqli_query($db, "SELECT * FROM `complaint`");
    $id = $_GET['id'];
    $qry = mysqli_query($db, "SELECT comp.*,us.name,us.login FROM `complaint` as comp join `users`as us on comp.user_id=us.id where comp.id='$id'"); // select query
    $data = mysqli_fetch_array($qry);
    ?>
    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">
            <ul class="navbar-item flex-row">
                <li class="nav-item align-self-center page-heading">
                    <div class="page-header">
                        <div class="page-title">
                            <h3>Manage Complains</h3>
                        </div>
                    </div>
                </li>
            </ul>
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                    <line x1="8" y1="6" x2="21" y2="6"></line>
                    <line x1="8" y1="12" x2="21" y2="12"></line>
                    <line x1="8" y1="18" x2="21" y2="18"></line>
                    <line x1="3" y1="6" x2="3" y2="6"></line>
                    <line x1="3" y1="12" x2="3" y2="12"></line>
                    <line x1="3" y1="18" x2="3" y2="18"></line>
                </svg></a>



            <ul class="navbar-item flex-row navbar-dropdown">

            <?php include 'lang.php'; ?>

                <li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                        </svg><span class="badge badge-primary"></span>
                    </a>
                    <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="messageDropdown">
                        <div class="">




                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">





                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </a>
                    <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="userProfileDropdown">

                        <div class="dropdown-item">
                            <a href="user_profile.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> <span>My Profile</span>
                            </a>
                        </div>

                        <div class="dropdown-item">
                            <a href="logout.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <?php include 'sidebar.php'; ?>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->

        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row invoice layout-top-spacing layout-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="doc-container">

                            <div class="row">

                                <div class="col-xl-9" id="send_data">

                                    <div class="invoice-container">
                                        <div class="invoice-inbox">

                                            <div id="ct" class="">

                                                <div class="invoice-00001">
                                                    <div class="content-section">

                                                        <div class="inv--head-section inv--detail-section info_sec">

                                                            <div class="row">

                                                                <div class="col-sm-6 col-12 mr-auto">
                                                                    <div class="d-flex">
                                                                        <img class="company-logo" style="width: 100px;"src="logo-loading.png" alt="company">
                                                                        <!-- <h4 style="font-weight: bold;    color: #3e3ea7;font-size: 72px;font-style: italic;font-weight: bold;text-decoration: underline">SITARA</h4> -->

                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 text-sm-right">
                                                                    <p class="inv-list-number"><span class="inv-title">Invoice: </span> <span class="inv-number">#<?php echo $data['id'] ?></span></p>
                                                                </div>

                                                                <div class="col-sm-6 align-self-center mt-3">
                                                                    <p class="inv-street-addr"><?php echo $data['name'] ?></p>
                                                                    <p class="inv-email-address"><?php echo $data['login'] ?></p>
                                                                    <!-- <p class="inv-email-address">(120) 456 789</p> -->
                                                                </div>
                                                                <div class="col-sm-6 align-self-center mt-3 text-sm-right">
                                                                    <p class="inv-created-date"><span class="inv-title">Invoice Date: </span> <span class="inv-date"><?php echo $data['dt'] ?></span></p>
                                                                    <p class="inv-due-date"><span class="inv-title">Due Date: </span> <span class="inv-date">26 Aug 2020</span></p>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="layout-px-spacing">



                                                            <div class="row layout-spacing">

                                                                <!-- Content -->
                                                                <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                                                                    <div class="user-profile layout-spacing">
                                                                        <div class="widget-content widget-content-area">
                                                                            <div class="d-flex justify-content-between">
                                                                                <h3 class="">Info</h3>
                                                                                <a href="user_account_setting.html" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                                                        <path d="M12 20h9"></path>
                                                                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                                                    </svg></a>
                                                                            </div>
                                                                            <div class="text-center">
                                                                                <img src="login (1).png" alt="avatar">
                                                                                <!-- <p class=""><?php echo $data['name'] ?></p> -->
                                                                            </div>
                                                                            <div class="user-info-list">

                                                                                <div class="">
                                                                                    <ul class="contacts-block list-unstyled">
                                                                                        <li class="contacts-block__item">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee">
                                                                                                <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                                                                                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                                                                                <line x1="6" y1="1" x2="6" y2="4"></line>
                                                                                                <line x1="10" y1="1" x2="10" y2="4"></line>
                                                                                                <line x1="14" y1="1" x2="14" y2="4"></line>
                                                                                            </svg> <?php echo $data['c_name'] ?>

                                                                                        </li>
                                                                                        <li class="contacts-block__item">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                                                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                                                                            </svg> <?php echo $data['dt'] ?>

                                                                                        </li>
                                                                                        <li class="contacts-block__item">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                                                                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                                                                <circle cx="12" cy="10" r="3"></circle>
                                                                                            </svg> <?php echo $data['address'], "&nbsp;", $data['city'], "&nbsp;", $data['province'] ?>

                                                                                        </li>

                                                                                        <li class="contacts-block__item">
                                                                                            <a href="mailto:example@mail.com"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                                                                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                                                                </svg> <?php echo $data['dpt'] ?></a>
                                                                                        </li>
                                                                                        <li class="contacts-block__item">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                                                                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                                                                            </svg> <?php echo $data['nic'] ?>
                                                                                        </li>

                                                                                        
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                    
                                                                </div>

                                                                <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

                                                                    <!-- <div class="skills layout-spacing ">
                                                                        <div class="widget-content widget-content-area">
                                                                            <h3 class="">Skills</h3>
                                                                            <div class="progress br-30">
                                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                                    <div class="progress-title"><span>PHP</span> <span>25%</span> </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="progress br-30">
                                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                                    <div class="progress-title"><span>Wordpress</span> <span>50%</span> </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="progress br-30">
                                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                                    <div class="progress-title"><span>Javascript</span> <span>70%</span> </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="progress br-30">
                                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                                    <div class="progress-title"><span>jQuery</span> <span>60%</span> </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div> -->

                                                                   <div class="bio layout-spacing ">
                                                                        <div class="widget-content widget-content-area">
                                                                            <h3 class="">Complaints</h3>





                                                                            <div class="bio-skill-box">

                                                                                <div class="row" class="outset">


                                                                                    <div class="row">
                                                                                        <div class="col-6 col-xl-6 col-lg-6 mb-xl-6 mb-6 ">

                                                                                            <div class="styled">

                                                                                                &nbsp; &nbsp;&nbsp; <label for="username">Comp:</label>
                                                                                            </div>
                                                                                            <div class="styled">

                                                                                                &nbsp; &nbsp;&nbsp; <label for="username">Address:</label>
                                                                                            </div>
                                                                                            <div class="styled">

                                                                                                &nbsp; &nbsp;&nbsp; <label for="username">NIC:</label>
                                                                                            </div>
                                                                                            <div class="styled">

                                                                                                &nbsp; &nbsp;&nbsp; <label for="username">Depart:</label>
                                                                                            </div>

                                                                                            <div class="styled">

                                                                                                &nbsp; &nbsp;&nbsp; <label for="username">Gender:</label>
                                                                                            </div>



                                                                                        </div>

                                                                                        <div class="col-2 col-xl-2 col-lg-2 mb-xl-2 mb-2 ">

                                                                                            <div class="styled">

                                                                                                <h8><?php echo  $data['c_name'] ?></h8>
                                                                                            </div>
                                                                                            <div class="styled">

                                                                                                <h8><?php echo  $data['address'] ?></h8>
                                                                                            </div>
                                                                                            <div class="styled">

                                                                                                <h8><?php echo  $data['nic'] ?></h8>
                                                                                            </div>
                                                                                            <div class="styled">

                                                                                                <h8><?php echo  $data['dpt'] ?></h8>
                                                                                            </div>
                                                                                            <div class="styled">

                                                                                                <h8><?php echo  $data['gender'] ?></h8>
                                                                                            </div>

                                                                                        </div>



                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-6 col-xl-6 col-lg-6 mb-xl-6 mb-6 ">

                                                                                            <div class="styled">

                                                                                                &nbsp; &nbsp;&nbsp; <label for="username">Type:</label>
                                                                                            </div>
                                                                                            <div class="styled">

                                                                                                &nbsp; &nbsp;&nbsp; <label for="username">HealthType:</label>
                                                                                            </div>
                                                                                            <div class="styled">
                                                                                                
                                                                                                &nbsp; &nbsp;&nbsp; <label for="username">Priority:</label>
                                                                                            </div>
                                                                                            <div class="styled">
                                                                                                
                                                                                                &nbsp; &nbsp;&nbsp; <label for="username">Calltype:</label>
                                                                                            </div>
                                                                                            <div class="styled">

                                                                                                &nbsp; &nbsp;&nbsp; <label for="username">CompType:</label>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-4 col-xl-4 col-lg-4 mb-xl-4 mb-4 ">

                                                                                            <div class="styled">

                                                                                                <h8><?php echo  $data['type'] ?></h8>
                                                                                            </div>
                                                                                                <div class="styled">

                                                                                                <h8><?php echo  $data['h_type'] ?></h8>
                                                                                            </div>
                                                                                            <div class="styled">

                                                                                                <h8><?php echo  $data['prio'] ?></h8>
                                                                                            </div>
                                                                                            <div class="styled">

                                                                                                <h8><?php echo  $data['cal_type'] ?></h8>
                                                                                            </div>
                                                                                            <div class="styled">

                                                                                                <h8><?php echo  $data['com_type'] ?></h8>
                                                                                            </div>

                                                                                        </div>



                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- <div class="bio-skill-box">

                                                                                <div class="row">

                                                                                    <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                                                                        <div class="d-flex b-skills">
                                                                                            <div>
                                                                                            </div>
                                                                                            <div class="">
                                                                                                <h5>Whatsapp:</h5>
                                                                                                <?php echo $data['whatsapp'] ?>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                                                                        <div class="d-flex b-skills">
                                                                                            <div>
                                                                                            </div>
                                                                                            <div class="">
                                                                                                 <div>
                                                                                                    <h5>Response:</h5>
                                                                                                </div>

                                                                                                <?php echo $data['pro'] ?>
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>




                                                                                </div>


                                                                            </div> -->
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>


                                        </div>

                                    </div>

                                </div>

                                <div class="col-xl-3">

                                    <div class="invoice-actions-btn">

                                        <div class="invoice-action-btn">

                                            <div class="row">
                                                <div class="col-xl-12 col-md-3 col-sm-6">
                                                    <a  class="btn btn-primary btn-send" id="sending"
                                                data-toggle="modal" data-target="#zoomupModal">Send Mail</a>
                                                </div>
                                                <div class="col-xl-12 col-md-3 col-sm-6">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-print  action-print">Print</a>
                                                </div>
                                                <!-- <div class="col-xl-12 col-md-3 col-sm-6">
                                                    <a href="javascript:void(0);" class="btn btn-success btn-download">Download</a>
                                                </div> -->
                                                <div class="col-xl-12 col-md-3 col-sm-6">
                                                    <a href="apps_invoice-edit.html" class="btn btn-dark btn-edit">Edit</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </div>


                        </div>

                    </div>
                </div>
            </div>



        </div>



        <!-- END MAIN CONTAINER -->

        <div id="zoomupModal" class="modal animated zoomInUp custo-zoomInUp" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="color:#000" id="title_edit">Send Mail</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container my-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="employee_table"></div>
                                    <div class="form-row mb-4">
                                        <label for="inputEmail4">Email Address</label>
                                        <div class="form-group col-md-12">


                                            <select class="selectpicker" id="multi_mail" name="multi_mail"
                                                data-width='100%'>
                                                <option>Select Email</option>
                                                <option value="ahmedhamzaansari.99@gmail.com">ahmedhamzaansari.99@gmail.com</option>
                                                <option value="abasit9119@gmail.com">abasit9119@gmail.com</option>
                                                <!-- <?php foreach($resultdevice as $key => $value){ ?>
                                                <option value="<?= $value['email'];?>"><?= $value['email']; ?>
                                                </option>
                                                <?php } 
                                                        ?> -->
                                            </select>
                                            <input type="hidden" name="com_id" id="com_id" value="<?php echo $data['id'] ?>">
                                            <!-- <input type="hidden" name="dpt_name" id="dpt_name" value="<?php echo $data['name'] ?>"> -->
                                        </div>
                                        <div id='loader1' style='display: none;'>
                                            <img src='images/loader.gif' width='100%'>
                                        </div>

                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="button" class="btn btn-primary" name="insert"
                                                    onclick="send_mail()" id="insert" value="Send"
                                                    style="float:right" />

                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer md-button">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                        <!-- <button type="button" class="btn btn-primary">Save</button> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- END MAIN CONTAINER -->

        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="assets/js/app.js"></script>

        <script>
            $(document).ready(function() {
                App.init();
            });
            $('.action-print').on('click', function(event) {
                event.preventDefault();
                /* Act on the event */
                window.print();
            });
        </script>
        <script src="assets/js/custom.js"></script>
        <script src="plugins/highlight/highlight.pack.js"></script>
    <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>

        <script src="assets/js/scrollspyNav.js"></script>
    

        <script>
    function send_mail() {

        var em = document.getElementById("send_data");
        var com_id = document.getElementById("com_id").value;
        var multi_mail = document.getElementById("multi_mail").value;
        console.log(em);
        alert(com_id);
        var email_arr = [];

       

        // $('#multi_mail:selected').each(function(key) {
        //     email_arr[key] = $(this).val();


        // })
        // alert(email_arr);

        

        // var r_email = [];
        // r_email.push('ahmedhamzaansari.99@gmail.com')/?email_arr='+email_arr+'&ui_data='+em+'

        $.ajax({
            url: 'http://151.106.17.246:8080/sitara_schedule_email/government_report.php?email_arr='+multi_mail+'&com_no='+com_id+'',
             type: 'POST',
            data: {
                email_arr: multi_mail,
                com_no: com_id
            },
            cache: false,
            processData: false,
            dataType: 'text',
            crossDomain: true,
            xhrFields: {
                withCredentials: true
            },
            beforeSend: function() {
                // $('#insert').val("Updating");
                $("#insert").prop("disabled", true);
                $("#loader1").show();
                $('#insert').val("Sending");
                $('#title_edit').text("Sending Mail");


            },
            success: function(data) {


                console.log(data)

                setTimeout(() => {
                    $("#employee_table").fadeOut();
                    // $('#employee_table').html('');

                }, 5000);






            },
            complete: function(data) {
                // Hide image container
                $("#loader1").hide();
                $('#employee_table').html('<h1> Mail Send Successfully ..!</h1>');
                $("#insert").prop("disabled", false);
                $('#insert').val("Send");

                $('#title_edit').text("Send Mail");

                // $('#zoomupModal').modal('hide');
            }
        });



    }
    </script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->
        <!-- <script src="assets/js/apps/invoice-preview.js"></script> -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo10/apps_invoice-preview.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Nov 2021 11:57:25 GMT -->

</html>