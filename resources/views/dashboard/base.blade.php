<!doctype html>
<html lang="fr">

    <head>
        
        <meta charset="utf-8" />

        <title>@yield('title')</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('img/me.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-layout="vertical" data-layout-mode="dark" data-topbar="dark" data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">
            
            <header>
                
            </header>


            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.svg" alt="" height="22"> 
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">n.t519</span>
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">n.t519</span>
                        </span>
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.svg" alt="" height="22">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>


                            <li>
                                <a href="{{ route('dashboard') }}">
                                    <i class="bx bx-tachometer icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-dashboards">Dashboard</span>
                                    <span class="badge rounded-pill bg-success">5+</span>
                                </a>
                            </li>

                            <li class="menu-title" data-key="t-applications">Applications</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-receipt icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-invoices">Posts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('posts.create')}}" data-key="t-invoice-list"> Ajouter </a></li>
                                    <li><a href="{{route('posts.index')}}" data-key="t-invoice-detail">Post List</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-receipt icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-invoices">Works</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('works.create')}}" data-key="t-invoice-list"> Ajouter </a></li>
                                    <li><a href="{{route('works.index')}}" data-key="t-invoice-detail"> Works List </a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="apps-calendar.html">
                                    <i class="bx bx-calendar icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-calendar">Calendar</span>
                                </a>
                            </li>

                            <li>
                                <a href="apps-chat.html">
                                    <i class="bx bx-chat icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-chat">Chat</span>
                                    <span class="badge rounded-pill bg-danger" data-key="t-hot">Hot</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-envelope icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-email">Email</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html" data-key="t-inbox">Inbox</a></li>
                                    <li><a href="email-read.html" data-key="t-read-email">Read Email</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-store icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-ecommerce">Ecommerce</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ecommerce-products.html" data-key="t-products">Products</a></li>
                                    <li><a href="ecommerce-product-detail.html" data-key="t-product-detail">Product Detail</a></li>
                                    <li><a href="ecommerce-orders.html" data-key="t-orders">Orders</a></li>
                                    <li><a href="ecommerce-customers.html" data-key="t-customers">Customers</a></li>
                                    <li><a href="ecommerce-cart.html" data-key="t-cart">Cart</a></li>
                                    <li><a href="ecommerce-checkout.html" data-key="t-checkout">Checkout</a></li>
                                    <li><a href="ecommerce-shops.html" data-key="t-shops">Shops</a></li>
                                    <li><a href="ecommerce-add-product.html" data-key="t-add-product">Add Product</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bxs-user-detail icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-contacts">Contacts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="contacts-grid.html" data-key="t-user-grid">User Grid</a></li>
                                    <li><a href="contacts-list.html" data-key="t-user-list">User List</a></li>
                                    <li><a href="contacts-profile.html" data-key="t-user-settings">User Settings</a></li>
                                </ul>
                            </li>

                            <li class="menu-title" data-key="t-pages">Pages</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-user-circle icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-authentication">Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="auth-login.html" data-key="t-login">Login</a></li>
                                    <li><a href="auth-register.html" data-key="t-register">Register</a></li>
                                    <li><a href="auth-recoverpw.html" data-key="t-recover-password">Recover Password</a></li>
                                    <li><a href="auth-lock-screen.html" data-key="t-lock-screen">Lock Screen</a></li>
                                    <li><a href="auth-logout.html" data-key="t-logout">Log Out</a></li>
                                    <li><a href="auth-confirm-mail.html" data-key="t-confirm-mail">Confirm Mail</a></li>
                                    <li><a href="auth-email-verification.html" data-key="t-email-verification">Email Verification</a></li>
                                    <li><a href="auth-two-step-verification.html" data-key="t-two-step-verification">Two Step Verification</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-file icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-utility">Utility</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
                                    <li><a href="pages-maintenance.html" data-key="t-maintenance">Maintenance</a></li>
                                    <li><a href="pages-comingsoon.html" data-key="t-coming-soon">Coming Soon</a></li>
                                    <li><a href="pages-timeline.html" data-key="t-timeline">Timeline</a></li>
                                    <li><a href="pages-faqs.html" data-key="t-faqs">FAQs</a></li>
                                    <li><a href="pages-pricing.html" data-key="t-pricing">Pricing</a></li>
                                    <li><a href="pages-404.html" data-key="t-error-404">Error 404</a></li>
                                    <li><a href="pages-500.html" data-key="t-error-500">Error 500</a></li>
                                </ul>
                            </li>
                
                            <li>
                                <a href="layouts-vertical.html">
                                    <i class="bx bx-layout icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-vertical">Vertical</span>
                                </a>
                            </li>

                            <li class="menu-title" data-key="t-components">Components</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bxl-bootstrap icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-bootstrap">Bootstrap</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html" data-key="t-alerts">Alerts</a></li>
                                    <li><a href="ui-buttons.html" data-key="t-buttons">Buttons</a></li>
                                    <li><a href="ui-cards.html" data-key="t-cards">Cards</a></li>
                                    <li><a href="ui-carousel.html" data-key="t-carousel">Carousel</a></li>
                                    <li><a href="ui-dropdowns.html" data-key="t-dropdowns">Dropdowns</a></li>
                                    <li><a href="ui-grid.html" data-key="t-grid">Grid</a></li>
                                    <li><a href="ui-images.html" data-key="t-images">Images</a></li>
                                    <li><a href="ui-modals.html" data-key="t-modals">Modals</a></li>
                                    <li><a href="ui-offcanvas.html" data-key="t-offcanvas">Offcanvas</a></li>
                                    <li><a href="ui-placeholders.html" data-key="t-placeholders">Placeholders</a></li>
                                    <li><a href="ui-progressbars.html" data-key="t-progress-bars">Progress Bars</a></li>
                                    <li><a href="ui-tabs-accordions.html" data-key="t-tabs-accordions">Tabs &amp; Accordions</a></li>
                                    <li><a href="ui-typography.html" data-key="t-typography">Typography</a></li>
                                    <li><a href="ui-video.html" data-key="t-video">Video</a></li>
                                    <li><a href="ui-general.html" data-key="t-general">General</a></li>
                                    <li><a href="ui-colors.html" data-key="t-colors">Colors</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-disc icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-extended">Extended</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="extended-lightbox.html" data-key="t-lightbox">Lightbox</a></li>
                                    <li><a href="extended-rangeslider.html" data-key="t-range-slider">Range Slider</a></li>
                                    <li><a href="extended-sweet-alert.html" data-key="t-sweet-alert">SweetAlert 2</a></li>
                                    <li><a href="extended-rating.html" data-key="t-rating">Rating</a></li>
                                    <li><a href="extended-notifications.html" data-key="t-notifications">Notifications</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bxs-eraser icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-forms">Forms</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="form-elements.html" data-key="t-basic-elements">Basic Elements</a></li>
                                    <li><a href="form-validation.html"data-key="t-validation">Validation</a></li>
                                    <li><a href="form-advanced.html"data-key="t-advanced-plugins">Advanced Plugins</a></li>
                                    <li><a href="form-editors.html"data-key="t-editors">Editors</a></li>
                                    <li><a href="form-uploads.html"data-key="t-file-upload">File Upload</a></li>
                                    <li><a href="form-wizard.html"data-key="t-wizard">Wizard</a></li>
                                    <li><a href="form-mask.html" data-key="t-mask">Mask</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-list-ul icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-tables">Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tables-basic.html" data-key="t-bootstrap-basic">Bootstrap Basic</a></li>
                                    <li><a href="tables-advanced.html" data-key="t-advanced-tables">Advance Tables</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bxs-bar-chart-alt-2 icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-charts">Charts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="charts-apex.html" data-key="t-apex-charts">Apex</a></li>
                                    <li><a href="charts-chartjs.html" data-key="t-chartjs-charts">Chartjs</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-aperture icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-icons">Icons</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="icons-feather.html" data-key="t-feather">Feather</a></li>
                                    <li><a href="icons-boxicons.html" data-key="t-boxicons">Boxicons</a></li>
                                    <li><a href="icons-materialdesign.html" data-key="t-material-design">Material Design</a></li>
                                    <li><a href="icons-dripicons.html" data-key="t-dripicons">Dripicons</a></li>
                                    <li><a href="icons-fontawesome.html" data-key="t-font-awesome">Font awesome</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-map icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-maps">Maps</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="maps-google.html" data-key="t-google">Google</a></li>
                                    <li><a href="maps-vector.html" data-key="t-vector">Vector</a></li>
                                    <li><a href="maps-leaflet.html" data-key="t-leaflet">Leaflet</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-share-alt icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-multi-level">Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);" data-key="t-level-1.1">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" class="has-arrow" data-key="t-level-1.2">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);" data-key="t-level-2.1">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);" data-key="t-level-2.2">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
    

            
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            @yield('content')            
           
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <a href="index-dark.html#" class="right-bar-toggle layout-setting-btn" id="right-bar-toggle">
            <i class="icon-sm mb-2" data-feather="settings"></i> <span class="align-middle">Settings</span>
        </a>

        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center bg-primary p-3">

                    <h5 class="m-0 me-2 text-white">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="m-0" />

                <div class="p-4">
                    <h6 class="mb-3">Choose Layout</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-vertical" value="vertical">
                        <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-horizontal" value="horizontal">
                        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Theme Mode</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3">Layout Width</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-fluid" value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fluid">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>

                    <h6 class="mt-4 mb-3">Layout Position</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>

                    <h6 class="mt-4 mb-3">Topbar Color</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>

                    <div id="sidebar-setting">
                        <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size"
                                id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                            <label class="form-check-label" for="sidebar-size-default">Default</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size"
                                id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                            <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size"
                                id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                            <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                        </div>

                        <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color"
                                id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                            <label class="form-check-label" for="sidebar-color-light">Light</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color"
                                id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                            <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color"
                                id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                            <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                        </div>
                    </div>

                    <h6 class="mt-4 mb-3">Direction</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>

        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenujs/metismenujs.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        <!-- Chart JS -->
        <script src="{{asset('assets/js/pages/chartjs.js')}}"></script>

        <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>

        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>
</html>

