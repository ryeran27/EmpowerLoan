<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Empower Loan - Admin</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('fronts/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('fronts/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    {{-- <i class="fas fa-laugh-wink"></i> --}}
                </div>
                <div class="sidebar-brand-text mx-3">Empower Loan</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Program
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOfficer"
                    aria-expanded="true" aria-controls="collapseOfficer">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Loan Officer</span>
                </a>
                <div id="collapseOfficer" class="collapse" aria-labelledby="headingOfficer" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Officer Info:</h6>
                        <a class="collapse-item" href="buttons.html">Add Officer</a>
                        <a class="collapse-item" href="cards.html">Officer List</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGroup"
                    aria-expanded="true" aria-controls="collapseGroup">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>Group</span>
                </a>
                <div id="collapseGroup" class="collapse" aria-labelledby="headingGroup"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Group Info:</h6>
                        <a class="collapse-item" href="utilities-color.html">Add Group</a>
                        <a class="collapse-item" href="utilities-border.html">Group List </a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClient"
                    aria-expanded="true" aria-controls="collapseClient">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                    <span>Client</span>
                </a>
                <div id="collapseClient" class="collapse" aria-labelledby="headingClient"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Client Info:</h6>
                        <a class="collapse-item" href="utilities-color.html">Add Client</a>
                        <a class="collapse-item" href="utilities-border.html">Client List</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Transaction
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLoan"
                    aria-expanded="true" aria-controls="collapseLoan">
                    <i class="fa fa-suitcase" aria-hidden="true"></i>
                    <span>Loan</span>
                </a>
                <div id="collapseLoan" class="collapse" aria-labelledby="headingLoan" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Loan Transactions:</h6>
                        <a class="collapse-item" href="buttons.html">Loan Application</a>
                        <a class="collapse-item" href="cards.html">Loan Approval</a>
                        <a class="collapse-item" href="cards.html">Loan Disbursement</a>
                        <a class="collapse-item" href="cards.html">Loan Collection</a>
                        <a class="collapse-item" href="cards.html">Loan Details</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSavings"
                    aria-expanded="true" aria-controls="collapseSavings">
                    <i class="fa fa-list-ol" aria-hidden="true"></i>
                    <span>Savings</span>
                </a>
                <div id="collapseSavings" class="collapse" aria-labelledby="headingSavings"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Savings Transactions:</h6>
                        <a class="collapse-item" href="utilities-color.html">Savings Account</a>
                        <a class="collapse-item" href="utilities-border.html">Deposit</a>
                        <a class="collapse-item" href="utilities-animation.html">Withdraw</a>
                        {{-- <a class="collapse-item" href="utilities-other.html">Other</a> --}}
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMicroinsurance"
                    aria-expanded="true" aria-controls="collapseMicroinsurance">
                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                    <span>Microinsurance</span>
                </a>
                <div id="collapseMicroinsurance" class="collapse" aria-labelledby="headingMicroinsurance"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Microinsurance:</h6>
                        <a class="collapse-item" href="utilities-color.html">Savings Account</a>
                        <a class="collapse-item" href="utilities-border.html">Deposit</a>
                        <a class="collapse-item" href="utilities-animation.html">Withdraw</a>
                        {{-- <a class="collapse-item" href="utilities-other.html">Other</a> --}}
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAccounting"
                    aria-expanded="true" aria-controls="collapseAccounting">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Accounting</span>
                </a>
                <div id="collapseAccounting" class="collapse" aria-labelledby="headingAccounting"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Accounting Transactions:</h6>
                        <a class="collapse-item" href="utilities-border.html">Charts of Accounts</a>
                        <a class="collapse-item" href="utilities-color.html">General Journal</a>
                        <a class="collapse-item" href="utilities-animation.html">Cashbook</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOthers"
                    aria-expanded="true" aria-controls="collapseOthers">
                    <i class="fa fa-asterisk" aria-hidden="true"></i>
                    <span>Others</span>
                </a>
                <div id="collapseOthers" class="collapse" aria-labelledby="headingOthers"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Other Transactions:</h6>
                        <a class="collapse-item" href="utilities-color.html">ID</a>
                        <a class="collapse-item" href="utilities-border.html">Insurance</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Reports
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseProgramReport" aria-expanded="true"
                    aria-controls="collapseProgramReport">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Program Report</span>
                </a>
                <div id="collapseProgramReport" class="collapse" aria-labelledby="headingProgramReport"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseAccountingReport" aria-expanded="true"
                    aria-controls="collapseAccountingReport">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Accounting Report</span>
                </a>
                <div id="collapseAccountingReport" class="collapse" aria-labelledby="headingAccountingReport"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseMISReport" aria-expanded="true"
                    aria-controls="collapseMISReport">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>MIS Report</span>
                </a>
                <div id="collapseMISReport" class="collapse" aria-labelledby="headingMISReport"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        
                    </div>
                </div>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('fronts/img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->