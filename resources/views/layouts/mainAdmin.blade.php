<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Apaxy - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->

        <link href="{{ asset('dash/assets/images/favicon.ico') }}" rel="shortcut icon">

        <!-- slick css -->
  
        <link href="{{ asset('dash/assets/libs/slick-slider/slick/slick.css') }}" rel="stylesheet">

        <link href="{{ asset('dash/assets/libs/slick-slider/slick/slick-theme.css') }}" rel="stylesheet">

        <!-- jvectormap -->

        <link href="{{ asset('dash/assets/libs/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

        <!-- Bootstrap Css -->

        <link href="{{ asset('dash/assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Icons Css -->

        <link href="{{ asset('dash/assets/css/icons.min.css') }}" rel="stylesheet">
        <!-- App Css-->
        <link href="{{ asset('dash/assets/css/app.min.css') }}" rel="stylesheet">

        <!-- datatable -->

        <link href="{{ asset('dash/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
        <link href="{{ asset('dash/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
        <link href="{{ asset('dash/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('dash/assets/images/logo-sm-dark.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('dash/assets/images/logo-dark.png')}}" alt="" height="20">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('dash/assets/images/logo-sm-light.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('dash/assets/images/logo-light.png')}}" alt="" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-backburger"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                     

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{-- <img class="rounded-circle header-profile-user" src="dash/assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar"> --}}
                                <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->name }}</span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                {{-- <a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i> Billing</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock font-size-16 align-middle mr-1"></i> Lock screen</a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('administration.logout') }}"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout
                                  <form id="logout-form" action="{{ route('administration.logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                                </a>
                            </div>
                        </div>
            
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i><span class="badge badge-pill badge-success float-right">3</span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="/administration/competition" class=" waves-effect">
                                    <i class="mdi mdi-calendar-month"></i>
                                    <span>Compétition</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-email-multiple-outline"></i>
                                    <span>Email</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Email Read</a></li>
                                    <li><a href="email-compose.html">Email Compose</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-account-group"></i>
                                    <span>Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="auth-login.html">Login</a></li>
                                    <li><a href="auth-register.html">Register</a></li>
                                    <li><a href="auth-recoverpw.html">Recover Password</a></li>
                                    <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-google-pages"></i>
                                    <span>Pages</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-starter.html">Starter Page</a></li>
                                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                                    <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-gallery.html">Gallery</a></li>
                                    <li><a href="pages-faqs.html">FAQs</a></li>
                                    <li><a href="pages-pricing.html">Pricing</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Components</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-format-underline"></i>
                                    <span>Bootstrap UI</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-badge.html">Badge</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-navs.html">Navs</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-pagination.html">Pagination</a></li>
                                    <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                    <li><a href="ui-spinner.html">Spinner</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-video.html">Video</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-package-variant-closed"></i>
                                    <span>Advanced UI</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="advanced-alertify.html">Alertify</a></li>
                                    <li><a href="advanced-rating.html">Rating</a></li>
                                    <li><a href="advanced-nestable.html">Nestable</a></li>
                                    <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                    <li><a href="advanced-sweet-alert.html">Sweet-Alert</a></li>
                                    <li><a href="advanced-lightbox.html">Lightbox</a></li>
                                    <li><a href="advanced-maps.html">Maps</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-black-mesa"></i>
                                    <span>Icons</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-fontawesome.html">Font Awesome 5</a></li>
                                    <li><a href="icons-themify.html">Themify</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-table-settings"></i>
                                    <span>Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="mdi mdi-file-document-box-check-outline"></i>
                                    <span class="badge badge-pill badge-danger float-right">07</span>
                                    <span>Forms</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-editors.html">Form Editors</a></li>
                                    <li><a href="form-uploads.html">Form File Upload</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-poll"></i>
                                    <span>Charts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="charts-morris.html">Morris</a></li>
                                    <li><a href="charts-apex.html">Apex</a></li>
                                    <li><a href="charts-chartist.html">Chartist</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs</a></li>
                                    <li><a href="charts-flot.html">Flot</a></li>
                                    <li><a href="charts-sparkline.html">Sparkline</a></li>
                                    <li><a href="charts-knob.html">Jquery Knob</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-flip-horizontal"></i>
                                    <span>Layouts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                                    <li><a href="layouts-sidebar-sm.html">Small Sidebar</a></li>
                                    <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                    <li><a href="layouts-dark-topbar.html">Dark Topbar</a></li>
                                    <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-share-variant"></i>
                                    <span>Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                        <div class="sidebar-section mt-5 mb-3">
                            <h6 class="text-reset font-weight-medium">
                                Project Completed
                                <span class="float-right">67%</span>
                            </h6>
                            <div class="progress mt-3" style="height: 4px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        
                        @yield('content')

                        
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                2019 © Apaxy.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
    
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom rightbar-nav-tab nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link py-3 active" data-toggle="tab" href="#chat-tab" role="tab">
                            <i class="mdi mdi-message-text font-size-22"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3" data-toggle="tab" href="#tasks-tab" role="tab">
                            <i class="mdi mdi-format-list-checkbox font-size-22"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3" data-toggle="tab" href="#settings-tab" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                            <i class="mdi mdi-settings font-size-22"></i>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="chat-tab" role="tabpanel">
                
                        <form class="search-bar py-4 px-3">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>

                        <h6 class="font-weight-medium px-4 mt-2 text-uppercase">Group Chats</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-success"></i>
                                <span class="mb-0 mt-1">App Development</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-warning"></i>
                                <span class="mb-0 mt-1">Office Work</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-danger"></i>
                                <span class="mb-0 mt-1">Personal Group</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                <span class="mb-0 mt-1">Freelance</span>
                            </a>
                        </div>

                        <h6 class="font-weight-medium px-4 mt-4 text-uppercase">Favourites</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-10.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Andrew Mackie</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Rory Dalyell</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">To an English person, it will seem like simplified</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-9.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Jaxon Dunhill</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <h6 class="font-weight-medium px-4 mt-4 text-uppercase">Other Chats</h6>

                        <div class="p-2 pb-4">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Jackson Therry</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Charles Deakin</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Ryan Salting</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">If several languages coalesce the grammar of the resulting.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Sean Howse</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Dean Coward</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Hayley East</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">One could refuse to pay expensive translators.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="tab-pane" id="tasks-tab" role="tabpanel">
                        <h6 class="font-weight-medium px-3 mb-0 mt-4">Working Tasks</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">App Development<span class="float-right">75%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Database Repair<span class="float-right">37%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Backup Create<span class="float-right">52%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <h6 class="font-weight-medium px-3 mb-0 mt-4">Upcoming Tasks</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Sales Reporting<span class="float-right">12%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Redesign Website<span class="float-right">67%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">New Admin Design<span class="float-right">84%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <div class="p-3 mt-2">
                            <a href="javascript: void(0);" class="btn btn-success btn-block waves-effect waves-light">Create Task</a>
                        </div>

                    </div>
                    <div class="tab-pane" id="settings-tab" role="tabpanel">
                            <h6 class="font-weight-medium px-4 py-3 text-uppercase bg-light">General Settings</h6>

                        <div class="p-4">
                            <h6 class="font-weight-medium">Online Status</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check1" name="settings-check1" checked="">
                                <label class="custom-control-label font-weight-normal" for="settings-check1">Show your status to all</label>
                            </div>

                            <h6 class="font-weight-medium mt-4">Auto Updates</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check2" name="settings-check2" checked="">
                                <label class="custom-control-label font-weight-normal" for="settings-check2">Keep up to date</label>
                            </div>

                            <h6 class="font-weight-medium mt-4">Backup Setup</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check3" name="settings-check3">
                                <label class="custom-control-label font-weight-normal" for="settings-check3">Auto backup</label>
                            </div>

                        </div>

                        <h6 class="font-weight-medium px-4 py-3 mt-2 text-uppercase bg-light">Advanced Settings</h6>

                        <div class="p-4">
                            <h6 class="font-weight-medium">Application Alerts</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check4" name="settings-check4" checked="">
                                <label class="custom-control-label font-weight-normal" for="settings-check4">Email Notifications</label>
                            </div>

                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check5" name="settings-check5">
                                <label class="custom-control-label font-weight-normal" for="settings-check5">SMS Notifications</label>
                            </div>

                            <h6 class="font-weight-medium mt-4">API</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check6" name="settings-check6">
                                <label class="custom-control-label font-weight-normal" for="settings-check6">Enable access</label>
                            </div>

                        </div>
                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->

        <script src="{{ asset('dash/assets/libs/jquery/jquery.min.js') }}" defer></script>

        <script src="{{ asset('dash/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>

        <script src="{{ asset('dash/assets/libs/metismenu/metisMenu.min.js') }}" defer></script>

        <script src="{{ asset('dash/assets/libs/simplebar/simplebar.min.js') }}" defer></script>

        <script src="{{ asset('dash/assets/libs/node-waves/waves.min.js') }}" defer></script>

        <!-- apexcharts -->

        <script src="{{ asset('dash/assets/libs/apexcharts/apexcharts.min.js') }}" defer></script>

        <script src="{{ asset('dash/assets/libs/slick-slider/slick/slick.min.js') }}" defer></script>

        <!-- Jq vector map -->

        <script src="{{ asset('dash/assets/libs/jqvmap/jquery.vmap.min.js') }}" defer></script>

        <script src="{{ asset('dash/assets/libs/jqvmap/maps/jquery.vmap.usa.js') }}" defer></script>


        <script src="{{ asset('dash/assets/js/pages/dashboard.init.js') }}" defer></script>

        <script src="{{ asset('dash/assets/js/app.js') }}" defer></script>

        <!-- datatable -->
        <script src="{{ asset('dash/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}" defer></script>
        <script src="{{ asset('dash/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}" defer></script>
        <script src="{{ asset('dash/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}" defer></script>
        <script src="{{ asset('dash/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}" defer></script>
        <script src="{{ asset('dash/assets/libs/jszip/jszip.min.js') }}" defer></script>
        <script src="{{ asset('dash/assets/libs/pdfmake/build/pdfmake.min.js') }}" defer></script>
        <script src="{{ asset('dash/assets/libs/pdfmake/build/vfs_fonts.js') }}" defer></script>
        <script src="{{ asset('dash/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}" defer></script>
        <script src="{{ asset('dash/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}" defer></script>
        <script src="{{ asset('dash/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}" defer></script>
        <script src="{{ asset('dash/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}" defer></script>
        <script src="{{ asset('dash/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}" defer></script>
        <script src="{{ asset('dash/assets/js/pages/datatables.init.js') }}" defer></script>
        {{-- <script src="{{ asset('dash/assets/js/app.js') }}" defer></script>
        <script src="{{ asset('dash/assets/js/app.js') }}" defer></script> --}}

    </body>
</html>
