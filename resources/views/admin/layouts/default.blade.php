<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @section('title')
        | ABSUN
        @show
    </title>

    <!-- global css -->

    <!-- end of global css -->

    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->


    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->


                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Notifications Dropdown Menu -->

                    <li class="nav-item">
                        <a class="nav-link btn-primary text-light rounded-pill" data-widget="control-sidebar"
                        data-slide="true"
                        href="{{ URL::to('admin/logout') }}"
                        role="button"

                        >
                           LogOut
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="{{ route('admin.dashboard') }}"
                class="brand-link">
                    <img src="dist/img/AdminLTELogo.png"
                    alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminLTE</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="dist/img/user2-160x160.jpg"
                            class="img-circle elevation-2"
                            alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Alexander Pierce</a>
                        </div>
                    </div>

                    <!-- SidebarSearch Form -->


                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        @include('admin.layouts._left_menu')
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>


            <!-- global js -->

            @yield('content')

           
            <!-- end of global js -->
            <!-- begin page level js -->
            @yield('footer_scripts')
            <!-- end page level js -->
            
    </body>

</html>