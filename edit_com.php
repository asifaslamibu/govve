<?php
include("sessioninput.php");
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo10/starter_kit_blank_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 06:32:07 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Sindh Human Rights Commission</title>
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap-select/bootstrap-select.min.css">

    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

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

        .car_upper {
            text-transform: uppercase !important;
        }

        .caret::before {
            content: none !important;
        }

        .select2-container--default .select2-selection--multiple {
            background-color: #fff;
        }
    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<?php
include("config_indemnifier.php");
$id = $_GET['id'];
$qry = mysqli_query($db, "select * from complaint where id='$id'"); // select query
$data = mysqli_fetch_array($qry);

?>


<body class="sidebar-noneoverflow starterkit">
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">
            <ul class="navbar-item flex-row">
                <li class="nav-item align-self-center page-heading">
                    <div class="page-header">
                        <div class="page-title">
                            <h3>Complaint Form</h3>
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


                <li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                            </path>
                        </svg><span class="badge badge-success"></span>
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

        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="content-wrapper">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <div class="content-body">
                            <div class="content-wrapper">
                                <div class="content-header row">
                                </div>
                                <div class="content-body">
                                    <div class="content-body">
                                        <div class="card">


                                            <div id="notify" class="alert alert-success" style="display:none;">

                                                <div class="message"></div>
                                            </div>
                                            <div class="card-body">
                                                <form action="updatecom.php?id=<?php echo $id; ?>" method="post">

                                                    <!-- <form method="post" class="msgfrm" id="msgfrm"> -->

                                                    <div class="form-group row">
                                                        <div class="col-sm-6"><label class="col-form-label" for="product_name">Complainte Name *</label>
                                                            <input type="text" placeholder="Complainte Name" class="form-control margin-bottom required" value="<?php echo $data['c_name'] ?>" id="c_name" name="c_name">
                                                        </div>


                                                        <div class="col-sm-6"><label class="col-form-label" for="product_code">Address</label>
                                                            <input type="text" placeholder="Address" class="form-control" value="<?php echo $data['address'] ?>" name="address" id="address">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">

                                                        <div class="col-sm-6"><label class="col-form-label" for="product_cat">N.I.C *</label>
                                                            <input type="text" placeholder="N.I.C" class="form-control" value="<?php echo $data['nic'] ?>" name="nic" id="nic">
                                                        </div>

                                                        <div class="col-sm-6"><label class="col-form-label" for="sub_cat">District</label>
                                                            <input type="text" placeholder="District" class="form-control" value="<?php echo $data['district'] ?>" id="district" name="district">
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">

                                                        <div class="col-sm-6"><label class="col-form-label" for="product_cat">Province</label>
                                                            <select class="form-control" value="<?php echo $data['province'] ?>" name="province" id="province">
                                                                <option value="Sindh">Sindh</option>
                                                                <option value="Panjab">Panjab</option>
                                                                <option value="Blochistan">Blochistan</option>
                                                                <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                                                            </select>
                                                        </div>
                                                        <!-- <div class="col-sm-6"><label class="col-form-label" for="product_cat">Name Of Department</label>
                                                            <select class="form-control" name="dpt" id="dpt">
                                                                <option value="I.T">I.T</option>
                                                                <option value="English">English</option>
                                                                <option value="Chemistry">Chemistry</option>

                                                            </select>
                                                        </div> -->
                                                    </div>

                                                    <hr>
                                                    <div class="form-group row">

                                                        &nbsp;&nbsp; &nbsp; &nbsp; <label class="col-form-label" for="sub_cat">Status:</label>

                                                        <div class="col-sm-6">

                                                            <div class="n-chk">
                                                                <label class="new-control new-radio square-radio new-radio-text radio-secondary">
                                                                    <input type="radio" class="new-control-input" <?php if ($data['status'] == "chiled") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> name="status" value="chiled">
                                                                    <span class="new-control-indicator"></span><span class="new-radio-content">Chiled</span>
                                                                </label>
                                                            </div>
                                                            <div class="n-chk">
                                                                <label class="new-control new-radio square-radio new-radio-text radio-secondary">
                                                                    <input type="radio" class="new-control-input" <?php if ($data['status'] == "male") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> name="status" value="male">
                                                                    <span class="new-control-indicator"></span><span class="new-radio-content">Male</span>
                                                                </label>
                                                            </div>
                                                            <div class="n-chk">
                                                                <label class="new-control new-radio square-radio new-radio-text radio-secondary">
                                                                    <input type="radio" class="new-control-input" <?php if ($data['status'] == "female") {
                                                                                                                        echo "checked";
                                                                                                                    } ?>name="status" value="female">
                                                                    <span class="new-control-indicator"></span><span class="new-radio-content">Female</span>
                                                                </label>
                                                            </div>
                                                            <div class="n-chk">
                                                                <label class="new-control new-radio square-radio new-radio-text radio-secondary">
                                                                    <input type="radio" class="new-control-input" <?php if ($data['status'] == "others") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> name="status" value="others">
                                                                    <span class="new-control-indicator"></span><span class="new-radio-content">Transgender/Aged Person</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <label class="col-form-label" for="sub_cat">Sub Category:</label>

                                                        <div class="col-sm-6">

                                                            <div class="n-chk">
                                                                <label class="new-control new-radio square-radio new-radio-text radio-secondary">
                                                                    <input type="radio" class="new-control-input" <?php if ($data['subcat'] == "disable") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> name="subcat" value="disable">
                                                                    <span class="new-control-indicator"></span><span class="new-radio-content">Disable</span>
                                                                </label>
                                                            </div>
                                                            <div class="n-chk">
                                                                <label class="new-control new-radio square-radio new-radio-text radio-secondary">
                                                                    <input type="radio" class="new-control-input" <?php if ($data['subcat'] == "sound") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> name="subcat" value="sound">
                                                                    <span class="new-control-indicator"></span><span class="new-radio-content">Sound </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    <div class="form-group row">


                                                        <div class="col-sm-6"><label class="col-form-label" for="product_cat">Response</label>
                                                            <input type="text" placeholder="Response" value="<?php echo $data['pro'] ?>" class="form-control" name="pro" id="pro">

                                                        </div>
                                                        <div class="col-sm-6"><label class="col-form-label" for="product_cat">References</label>
                                                            <select class="form-control" value="<?php echo $data['ref'] ?>" name="ref" id="ref">
                                                                <option value="EAN13">References</option>

                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">

                                                        <div class="col-sm-6"><label class="col-form-label" for="product_cat">Email</label>
                                                            <input type="text" placeholder="Enter Email" class="form-control" value="<?php echo $data['email'] ?>" name="email" id="email">
                                                        </div>
                                                        <div class="col-sm-6"><label class="col-form-label" for="product_cat">Whatsapp</label>
                                                            <input type="text" placeholder="Enter Whatsapp" class="form-control" value="<?php echo $data['whatsapp'] ?>" name="whatsapp" id="whatsapp">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">

                                                        <div class="col-sm-6"><label class="col-form-label" for="product_cat">Facebook</label>
                                                            <input type="text" placeholder="Enter Facebook" class="form-control" value="<?php echo $data['fb'] ?>" name="fb" id="fb">
                                                        </div>
                                                    </div>
                                                    <input type="submit" class="btn btn-success" style="float:right" value="Send">
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <!-- CONTENT AREA -->

            </div>

        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        $("#msgfrm").on("submit", function(event) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "ajax_inventory/insert_inv.php",

                data: $(this).serialize(),
                success: function(output) {
                    alert("record inserted successfully.")
                    location.reload();


                }
            });
        });
    </script>
    <script type="text/javascript">
        function addRows() {
            var table = document.getElementById('emptbl');
            var rowCount = table.rows.length;
            var cellCount = table.rows[0].cells.length;
            var row = table.insertRow(rowCount);
            for (var i = 0; i <= cellCount; i++) {
                var cell = 'cell' + i;
                cell = row.insertCell(i);
                var copycel = document.getElementById('col' + i).innerHTML;
                cell.innerHTML = copycel;

            }
        }

        function deleteRows() {
            var table = document.getElementById('emptbl');
            var rowCount = table.rows.length;
            if (rowCount > '2') {
                var row = table.deleteRow(rowCount - 1);
                rowCount--;
            } else {
                alert('There should be atleast one row');
            }
        }
    </script>

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
    </script>
    <script src="assets/js/custom.js"></script>
    <script src="plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="plugins/table/datatable/button-ext/jszip.min.js"></script>
    <script src="plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="plugins/table/datatable/button-ext/buttons.print.min.js"></script>
    <script src="plugins/treeview/custom-jstree.js"></script>
    <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>

    <script src="plugins/flatpickr/flatpickr.js"></script>
    <script src="plugins/noUiSlider/nouislider.min.js"></script>

    <script src="plugins/flatpickr/custom-flatpickr.js"></script>
    <script src="plugins/noUiSlider/custom-nouiSlider.js"></script>
    <script src="plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js"></script>

    <script src="assets/js/scrollspyNav.js"></script>
    <script src="plugins/select2/select2.min.js"></script>
    <script src="plugins/select2/custom-select2.js"></script>

    <script>
        $('#html5-extension').DataTable({
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [{
                        extend: 'copy',
                        className: 'btn'
                    },
                    {
                        extend: 'csv',
                        className: 'btn'
                    },
                    {
                        extend: 'excel',
                        className: 'btn'
                    },
                    {
                        extend: 'print',
                        className: 'btn'
                    }
                ]
            },
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });
    </script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo10/starter_kit_blank_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 06:32:07 GMT -->

</html>