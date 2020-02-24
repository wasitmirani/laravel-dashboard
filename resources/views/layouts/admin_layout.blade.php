

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Dashboard - SB Admin Pro</title>
        <link href="{{url('public/admin/css/styles.css')}}" rel="stylesheet" />
        <script src="{{ url('public/js/app.js') }}" defer></script>
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
            <a class="navbar-brand d-none d-sm-block" href="index.html"><img src="assets/img/sbpro-logo.svg"/></a><button class="btn sb-btn-icon sb-btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>
            <form class="form-inline mr-auto d-none d-lg-block"><input class="form-control sb-form-control-solid mr-sm-2" type="search" placeholder="Search" aria-label="Search" /></form>
            <form class="form-inline ml-auto mr-3">
                <a class="btn btn-outline-primary btn-sm" href="https://docs.startbootstrap.com/sb-admin-pro" target="_blank"
                    ><div class="d-none d-sm-inline-flex align-items-center"><i class="mr-1" data-feather="book"></i>Documentation</div>
                    <div class="d-inline d-sm-none">Docs</div></a
                >
            </form>
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown no-caret mr-3 sb-dropdown-notifications">
                    <a class="btn sb-btn-icon sb-btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                        <h6 class="dropdown-header sb-dropdown-notifications-header"><i class="mr-2" data-feather="bell"></i>Alerts Center</h6>
                        <a class="dropdown-item sb-dropdown-notifications-item" href="javascript:void(0);"
                            ><div class="sb-dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                            <div class="sb-dropdown-notifications-item-content">
                                <div class="sb-dropdown-notifications-item-content-details">December 29, 2019</div>
                                <div class="sb-dropdown-notifications-item-content-text">This is an alert message. It&apos;s nothing serious, but it requires your attention.</div>
                            </div></a
                        ><a class="dropdown-item sb-dropdown-notifications-item" href="javascript:void(0);"
                            ><div class="sb-dropdown-notifications-item-icon bg-info"><i data-feather="bar-chart"></i></div>
                            <div class="sb-dropdown-notifications-item-content">
                                <div class="sb-dropdown-notifications-item-content-details">December 22, 2019</div>
                                <div class="sb-dropdown-notifications-item-content-text">A new monthly report is ready. Click here to view!</div>
                            </div></a
                        ><a class="dropdown-item sb-dropdown-notifications-item" href="javascript:void(0);"
                            ><div class="sb-dropdown-notifications-item-icon bg-danger"><i class="fas fa-exclamation-triangle"></i></div>
                            <div class="sb-dropdown-notifications-item-content">
                                <div class="sb-dropdown-notifications-item-content-details">December 8, 2019</div>
                                <div class="sb-dropdown-notifications-item-content-text">Critical system failure, systems shutting down.</div>
                            </div></a
                        ><a class="dropdown-item sb-dropdown-notifications-item" href="javascript:void(0);"
                            ><div class="sb-dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i></div>
                            <div class="sb-dropdown-notifications-item-content">
                                <div class="sb-dropdown-notifications-item-content-details">December 2, 2019</div>
                                <div class="sb-dropdown-notifications-item-content-text">New user request. Woody has requested access to the organization.</div>
                            </div></a
                        ><a class="dropdown-item sb-dropdown-notifications-footer" href="javascript:void(0);">View All Alerts</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-caret mr-3 sb-dropdown-notifications">
                    <a class="btn sb-btn-icon sb-btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="mail"></i></a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                        <h6 class="dropdown-header sb-dropdown-notifications-header"><i class="mr-2" data-feather="mail"></i>Message Center</h6>
                        <a class="dropdown-item sb-dropdown-notifications-item" href="javascript:void(0);"
                            ><img class="sb-dropdown-notifications-item-img" src="https://source.unsplash.com/vTL_qy03D1I/60x60" />
                            <div class="sb-dropdown-notifications-item-content">
                                <div class="sb-dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="sb-dropdown-notifications-item-content-details">Emily Fowler &#xB7; 58m</div>
                            </div></a
                        ><a class="dropdown-item sb-dropdown-notifications-item" href="javascript:void(0);"
                            ><img class="sb-dropdown-notifications-item-img" src="https://source.unsplash.com/4ytMf8MgJlY/60x60" />
                            <div class="sb-dropdown-notifications-item-content">
                                <div class="sb-dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="sb-dropdown-notifications-item-content-details">Diane Chambers &#xB7; 2d</div>
                            </div></a
                        ><a class="dropdown-item sb-dropdown-notifications-footer" href="javascript:void(0);">Read All Messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-caret mr-3 sb-dropdown-user">
                    <a class="btn sb-btn-icon sb-btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"/></a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <img class="sb-dropdown-user-img" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" />
                            <div class="sb-dropdown-user-details">
                                <div class="sb-dropdown-user-details-name">Valerie Luna</div>
                                <div class="sb-dropdown-user-details-email">vluna@aol.com</div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0);"
                            ><div class="sb-dropdown-item-icon"><i data-feather="settings"></i></div>
                            Account</a
                        ><a class="dropdown-item" href="javascript:void(0);"
                            ><div class="sb-dropdown-item-icon"><i data-feather="log-out"></i></div>
                            Logout</a
                        >
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav sb-shadow-right sb-sidenav-light">
                    <div class="sb-sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html"
                                ><div class="sb-nav-link-icon"><i data-feather="activity"></i></div>
                                Dashboard</a
                            >
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i data-feather="layout"></i></div>
                                Layout
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" data-parent="#accordionSidenav">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a><a class="nav-link" href="layout-dark.html">Dark Sidenav</a><a class="nav-link" href="layout-rtl.html">RTL Layout</a
                                    ><a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsPageHeaders" aria-expanded="false" aria-controls="collapseLayoutsPageHeaders"
                                        >Page Headers
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="collapseLayoutsPageHeaders" data-parent="#accordionSidenavLayout">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="header-simplified.html">Simplified</a><a class="nav-link" href="header-overlap.html">Content Overlap</a><a class="nav-link" href="header-breadcrumbs.html">Breadcrumbs</a><a class="nav-link" href="header-light.html">Light</a></nav>
                                    </div>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseComponents" aria-expanded="false" aria-controls="collapseComponents"
                                ><div class="sb-nav-link-icon"><i data-feather="package"></i></div>
                                Components
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseComponents" data-parent="#accordionSidenav">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="alerts.html">Alerts</a><a class="nav-link" href="badges.html">Badges</a><a class="nav-link" href="buttons.html">Buttons</a><a class="nav-link" href="cards.html">Cards</a><a class="nav-link" href="dropdowns.html">Dropdowns</a><a class="nav-link" href="forms.html">Forms</a><a class="nav-link" href="modals.html">Modals</a><a class="nav-link" href="navigation.html">Navigation</a><a class="nav-link" href="progress.html">Progress</a><a class="nav-link" href="toasts.html">Toasts</a><a class="nav-link" href="tooltips.html">Tooltips</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities"
                                ><div class="sb-nav-link-icon"><i data-feather="tool"></i></div>
                                Utilities
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseUtilities" data-parent="#accordionSidenav">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="animations.html">Animations</a><a class="nav-link" href="background.html">Background</a><a class="nav-link" href="borders.html">Borders</a><a class="nav-link" href="shadows.html">Shadows</a><a class="nav-link" href="typography.html">Typography</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i data-feather="book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePages" data-parent="#accordionSidenav">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                        >Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseAuth" data-parent="#accordionSidenavPages">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="accordionSidenavPagesAuth">
                                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuthBasic" aria-expanded="false" aria-controls="pagesCollapseAuthBasic"
                                                >Basic
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                            ></a>
                                            <div class="collapse" id="pagesCollapseAuthBasic" data-parent="#accordionSidenavPagesAuth">
                                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login-basic.html">Login</a><a class="nav-link" href="register-basic.html">Register</a><a class="nav-link" href="password-basic.html">Forgot Password</a></nav>
                                            </div>
                                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuthSocial" aria-expanded="false" aria-controls="pagesCollapseAuthSocial"
                                                >Social
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                            ></a>
                                            <div class="collapse" id="pagesCollapseAuthSocial" data-parent="#accordionSidenavPagesAuth">
                                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login-social.html">Login</a><a class="nav-link" href="register-social.html">Register</a><a class="nav-link" href="password-social.html">Forgot Password</a></nav>
                                            </div>
                                        </nav>
                                    </div>
                                    <a class="nav-link" href="blank.html">Blank</a
                                    ><a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                        >Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseError" data-parent="#accordionSidenavPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="404-glitch.html">404 Page (Glitch Effect)</a><a class="nav-link" href="500.html">500 Page</a></nav>
                                    </div>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows"
                                ><div class="sb-nav-link-icon"><i data-feather="repeat"></i></div>
                                Flows
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseFlows" data-parent="#accordionSidenav">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="accordionSidenavPages"><a class="nav-link" href="multi-tenant-select.html">Multi-Tenant Registration</a></nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html"
                                ><div class="sb-nav-link-icon"><i data-feather="bar-chart"></i></div>
                                Charts</a
                            ><a class="nav-link" href="tables.html"
                                ><div class="sb-nav-link-icon"><i data-feather="filter"></i></div>
                                Tables</a
                            >
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div>
                            <div class="small">Logged in as:</div>
                            Start Bootstrap
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="sb-page-header pb-10 sb-page-header-dark bg-gradient-primary-to-secondary">
                        <div class="container-fluid">
                            <div class="sb-page-header-content py-5">
                                <h1 class="sb-page-header-title">
                                    <div class="sb-page-header-icon"><i data-feather="activity"></i></div>
                                    <span>Dashboard</span>
                                </h1>
                                <div class="sb-page-header-subtitle">Example dashboard overview and content summary</div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-n10">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">Area Chart Example</div>
                                    <div class="card-body">
                                        <div class="chart-area"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">Bar Chart Example</div>
                                    <div class="card-body">
                                        <div class="chart-bar"><canvas id="myBarChart" width="100%" height="30"></canvas></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">DataTable Example</div>
                            <div class="card-body">
                                <div class="sb-datatable table-responsive">
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                                <td><div class="badge badge-warning badge-pill">Pending</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                                <td><div class="badge badge-secondary badge-pill">Part-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                                <td><div class="badge badge-info badge-pill">Contract</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                                <td><div class="badge badge-info badge-pill">Contract</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                                <td><div class="badge badge-warning badge-pill">Pending</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                                <td><div class="badge badge-secondary badge-pill">Part-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                                <td><div class="badge badge-info badge-pill">Contract</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                                <td><div class="badge badge-info badge-pill">Contract</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                                <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                                <td><div class="badge badge-secondary badge-pill">Part-time</div></td>
                                                <td>
                                                    <button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn sb-btn-datatable sb-btn-icon sb-btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="sb-footer py-4 mt-auto sb-footer-light">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div>Copyright &#xA9; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &#xB7;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>


        <!-- Bootstrap core JavaScript-->
        <!-- Custom scripts for all pages-->
        <script src="{{ url('public/admin/js/sb-admin-2.min.js')}}"></script>
        <script src="{{ url('public/admin/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ url('public/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <!-- Scripts -->

    </body>
</html>
