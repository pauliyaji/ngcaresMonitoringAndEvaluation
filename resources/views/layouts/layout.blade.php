<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FCSU-M&E - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{('dashboard') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-money-bill"></i>
            </div>
            <div class="sidebar-brand-text mx-3">FCSU <sup>M&E</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{(url('dashboard'))}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            MASTERS
        </div>

        <!-- Nav Item - Pages Collapse Menu -->

        <!-- STAFF MASTERS  -->
<!-- RA 1-->
        <li class="nav-item">
            <a class="nav-link @if(!request()->is('admin/staff*')) collapsed @endif" href="#" data-toggle="collapse"
               data-target="#collapseStaff3" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-table"></i>
                <span>Result Area 1</span>
            </a>
            <div id="collapseStaff3" class="collapse @if(request()->is('admin/staff*')) show @endif"
                 aria-labelledby="headingThree" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#">Social Transfers</a>
                    <a class="collapse-item" href="#">LIPWs</a>
                    <a class="collapse-item" href="#">Livelihoods</a>
                    <a class="collapse-item" href="#">Basic Services</a>
                    <a style="background-color: orange; color: white; font-weight: bold;" class="collapse-item" href="{{ route('ra1.submissions') }}">Make a Submission</a>
                </div>
            </div>
        </li>
<!-- RA 2-->
        <li class="nav-item">
            <a class="nav-link @if(!request()->is('admin/staff*')) collapsed @endif" href="#" data-toggle="collapse"
               data-target="#collapseStaff4" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-table"></i>
                <span>Result Area 2</span>
            </a>
            <div id="collapseStaff4" class="collapse @if(request()->is('admin/staff*')) show @endif"
                 aria-labelledby="headingFour" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#">Agric Input & Services</a>
                    <a class="collapse-item" href="#">Agric Infrastructures</a>
                    <a class="collapse-item" href="#">Agricultural Assets</a>
                    <a class="collapse-item" href="#">Wet Markets</a>
                    <a style="background-color: orange; color: white; font-weight: bold;" class="collapse-item" href="{{ route('ra2.submissions') }}">Make a Submission</a>
                </div>
            </div>
        </li>
<!-- RA 3-->
        <li class="nav-item">
            <a class="nav-link @if(!request()->is('admin/staff*')) collapsed @endif" href="#" data-toggle="collapse"
               data-target="#collapseStaff5" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-table"></i>
                <span>Result Area 3</span>
            </a>
            <div id="collapseStaff5" class="collapse @if(request()->is('admin/staff*')) show @endif"
                 aria-labelledby="headingFive" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#">Credit Grant</a>
                    <a class="collapse-item" href="#">Operations Grant</a>
                    <a class="collapse-item" href="#">Enhancement Grant</a>
                    <a style="background-color: orange; color: white; font-weight: bold;" class="collapse-item" href="{{ route('ra3.submissions') }}">Make a Submission</a>
                </div>
            </div>
        </li>

        @if(Auth::user()->id == 1)
            <li class="nav-item">
                <a class="nav-link @if(!request()->is('admin/staff*')) collapsed @endif" href="#" data-toggle="collapse"
                   data-target="#collapseStaff9" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Reports</span>
                </a>
                <div id="collapseStaff9" class="collapse @if(request()->is('admin/staff*')) show @endif"
                     aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">SCCU Reporting Template</a>
                        <a class="collapse-item" href="#">Consolidated Summary</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(!request()->is('admin/staff*')) collapsed @endif" href="#" data-toggle="collapse"
                   data-target="#collapseStaff" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Users</span>
                </a>
                <div id="collapseStaff" class="collapse @if(request()->is('admin/staff*')) show @endif"
                     aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ url('users/create') }}">Add New</a>

                        <a class="collapse-item" href="{{ route('users.index') }}">View All</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(!request()->is('admin/staff*')) collapsed @endif" href="#" data-toggle="collapse"
                   data-target="#collapseStaff2" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Settings</span>
                </a>
                <div id="collapseStaff2" class="collapse @if(request()->is('admin/staff*')) show @endif"
                     aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('roles.index') }}">View Roles</a>
                        <a class="collapse-item" href="{{ route('permissions.index') }}">View Permissions</a>
                    </div>
                </div>
            </li>

        @endif

        <!-- LOGOUT -->
        <li class="nav-item active">

            <form method="POST" action="{{ route('logout') }}">

                @csrf
                <a class="nav-link" href="route('logout')" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>

            </form>

        </li>
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
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>

                            <img class="img-profile rounded-circle" src="{{ asset('public/storage/imgs/'. Auth::user()->photo) }}" height="60" width="60">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('users.edit', Auth::user()->id) }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a class="dropdown-item" href="route('logout')" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>

                            </form>

                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
                @if(Session::has('success'))
                <div class="card" style="padding: 10px; margin: 10px;" >
                <h4 class="text-success">{{ Session('success') }}</h4>
                </div>
                @elseif(Session::has('error'))
                <div class="card" style="padding: 10px; margin: 10px;" >
                <h4 class="text-danger">{{ Session('error') }}</h4>
                </div>

                @endif

          @yield('content')
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; NGCARES 2023</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="btn btn-primary" :href="route('logout')"
                                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>

    </div>
</div>

@yield('scripts')


</body>

</html>
<?php
/**
 * Created by PhpStorm.
 * User: Paul-Iyaji
 * Date: 10/8/2021
 * Time: 5:46 AM
 */
