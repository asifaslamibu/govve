<link href="assets/css/elements/custom-tree_view.css" rel="stylesheet" type="text/css" />
 <script src="plugins/treeview/custom-jstree.js"></script>
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
 <style>
     .sidebar-wrapper #compactSidebar .menu-categories a.menu-toggle .base-icons svg {
         color: #fff !important;
     }

     h5 {
         color: #fff
     }

     .base-icons {
         color: #fff
     }

     .sidebar-wrapper #compact_submenuSidebar .submenu ul.submenu-list li a {
         color: #fff
     }

     .sidebar-wrapper #compact_submenuSidebar .submenu ul.submenu-list li a svg:not(.feather-chevron-right) {
         color: #f47621
     }

     .sidebar-wrapper #compactSidebar .menu-categories li.menu a.menu-toggle {
         border: 1px solid #32CD32;
         border-radius: 7px
     }

     .sidebar-wrapper #compactSidebar .theme-logo {
         border: 1px solid #32CD32;
         border-radius: 7px
     }
 </style>



 <div class="sidebar-wrapper sidebar-theme">

     <nav id="compactSidebar" style="background-color:green !important">

         <div class="theme-logo" style=" background-color: #fff;">
             <a href="#index.php">
                 <img src="favicon.png" class="navbar-logo" alt="logo">
                 <!-- <h3>S</h3> -->
             </a>
         </div>

         <ul class="menu-categories">
             <li class="menu">
                 <a href="#dashboard" data-active="false" class="menu-toggle">
                     <div class="base-menu">
                         <div class="base-icons">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                 <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                 <polyline points="9 22 9 12 15 12 15 22"></polyline>
                             </svg>
                         </div>
                     </div>
                 </a>
                 <div class="tooltip"><span>Dashboard</span></div>
             </li>


             <li class="menu ">
                 <a href="#more" data-active="false" class="menu-toggle">
                     <div class="base-menu">
                         <div class="base-icons">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                 <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                 <polyline points="14 2 14 8 20 8"></polyline>
                                 <line x1="16" y1="13" x2="8" y2="13"></line>
                                 <line x1="16" y1="17" x2="8" y2="17"></line>
                                 <polyline points="10 9 9 9 8 9"></polyline>
                             </svg>
                         </div>
                     </div>
                 </a>
                 <div class="tooltip"><span>Complaints</span></div>
             </li>
             <li class="menu ">
                 <a href="#email" data-active="false" class="menu-toggle">
                     <div class="base-menu">
                         <div class="base-icons">
                             <i class="far fa-envelope-open"></i>
                         </div>
                     </div>
                 </a>
                 <div class="tooltip"><span>Email</span></div>
             </li>

             <li class="menu ">
                 <a href="#setup" data-active="false" class="menu-toggle">
                     <div class="base-menu">
                         <div class="base-icons">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                 <circle cx="12" cy="12" r="3"></circle>
                                 <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                             </svg>
                         </div>
                     </div>
                 </a>
                 <div class="tooltip"><span>Setups</span></div>
             </li>

             <li class="menu ">
                 <a href="#report" data-active="false" class="menu-toggle">
                     <div class="base-menu">
                         <div class="base-icons">
                             <i class="far fa-file-excel"></i>
                         </div>
                     </div>
                 </a>
                 <div class="tooltip"><span>Reports</span></div>
             </li>
         </ul>
     </nav>

     <div id="compact_submenuSidebar" class="submenu-sidebar" style="background-color:#32CD32 !important">

         <div class="theme-brand-name">
             <!-- <span style="font-weight: bold;color: #fff;font-style: italic;font-weight: bold;text-align:center">Sindh Human Rights</span> -->
         </div>

         <div class="submenu" id="dashboard">
             <div class="category-info">
                 <h5>Dashboard</h5>

             </div>

             <ul class="submenu-list" data-parent-element="#app">
             </ul>



             <ul class="file-tree submenu-list">
                 <li class="file-tree-folder text-white">Dashboard



                 </li>

             </ul>
         </div>




         <div class="submenu" id="more">
             <div class="category-info">
                 <h5>Complains</h5>
             </div>
             <ul class="submenu-list" data-parent-element="#more">
                 <li>
                     <a href="com_table.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span> Manage Complain </a>
                 </li>
                 <li>
                     <a href="addusers.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span> Add Users </a>
                 </li>
             </ul>
         </div>
         <div class="submenu" id="setup">
             <div class="category-info">
                 <h5>Setup</h5>
             </div>
             <ul class="submenu-list" data-parent-element="#setup">
                 <li>
                     <a href="categories.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span> Category</a>
                 </li>
                 <li>
                     <a href="subcat.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span> Sub Category </a>
                 </li>
                 <li>
                     <a href="city.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span> City </a>
                 </li>
                 <li>
                     <a href="calr_type.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span> Caller Type </a>
                 </li>
                 <li>
                     <a href="priority.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span> Priority </a>
                 </li>
                 <li>
                     <a href="refrence.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span> References </a>
                 </li>
                 <li>
                     <a href="related_dpt.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span> Related Department </a>
                 </li>
                 <li>
                     <a href="departments.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span> Department </a>
                 </li>
             </ul>
         </div>

         <div class="submenu" id="imei">
             <div class="category-info">
                 <h5>Add Tracker</h5>
             </div>
             <ul class="submenu-list" data-parent-element="#imei">
                 <li class="">
                     <a href="manageimei.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span> Manage Tracker </a>
                 </li>

             </ul>
         </div>

         <div class="submenu" id="company">
             <div class="category-info">
                 <h5>Add Company</h5>

             </div>
             <ul class="submenu-list" data-parent-element="#company">

                 <li class="">
                     <a href="managecompany.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span> Manage Company </a>
                 </li>

             </ul>
         </div>

         <div class="submenu" id="chat">
             <div class="category-info">
                 <h5>Chat</h5>

             </div>
             <ul class="submenu-list" data-parent-element="#chat">
                 <li class="">
                     <a href="chat/chat2.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span> Chat </a>
                 </li>

             </ul>
         </div>

         <div class="submenu" id="email">
             <div class="category-info">
                 <h5>Email</h5>

             </div>
             <ul class="submenu-list" data-parent-element="#email">
                 <li class="">
                     <a href="report_mail.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span>Schedule Email </a>
                 </li>

             </ul>
         </div>

         <div class="submenu" id="excel">
             <div class="category-info">
                 <h5>Excel Importor</h5>

             </div>
             <ul class="submenu-list" data-parent-element="#excel">

                 <li class="">
                     <a href="excel/index.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span>Import Excel </a>
                 </li>

                 <li class="">
                     <a href="excel/add_fleed.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span>Fright Excel Import </a>
                 </li>

             </ul>
         </div>





         <div class="submenu" id="report">
             <div class="category-info">
                 <h5>Reports </h5>

             </div>
             <ul class="submenu-list" data-parent-element="#report">

                 <li class="">
                     <a href="complaint_report.php"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                 <circle cx="12" cy="12" r="10"></circle>
                             </svg></span>Complaints Report </a>
                 </li>





             </ul>
         </div>



     </div>

 </div>