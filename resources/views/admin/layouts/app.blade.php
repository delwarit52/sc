<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Adminox - Responsive Web App Kit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- C3 charts css -->
    <link href="{{ asset('back/plugins/c3/c3.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('back/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/css/style.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('back/js/modernizr.min.js') }}"></script>

    <!-- DataTables css -->

    <link href="{{ ('back/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ ('back/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ ('back/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- Sweet Alert -->
    <link href="{{ asset('back/css/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">

</head>


<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                    <span>
                        <img src="{{ asset('back/images/logo-1.png') }}" alt="">
                    </span>
                    <i>
                        <img src="{{ asset('back/images/logo-1.png') }}" alt="">
                    </i>
                </a>
            </div>

            <nav class="navbar-custom">
                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="badge badge-pink noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-power"></i> <span>Logout</span>
                            </a>

                        </div>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-light waves-effect">
                            <i class="dripicons-menu"></i>
                        </button>
                    </li>
                    <!-- HEADER AREA START-->
                    <li class="menu sm_header_area">
                        <div class="top_mid_menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>
                                    <a href="#">Category <i class="fas fa-angle-down"></i></a>
                                    <ul class="sub_menu">
                                        <li class="item_1"><a href="smart_house.html">Smart house</a></li>
                                        <li class="item_2"><a href="hotel.html">Hotel</a></li>
                                        <li class="item_3"><a href="education.html">Education</a></li>
                                        <li class="item_4"><a href="int_shopping.html">Shopping</a></li>
                                        <li class="item_5"><a href="hospital.html">Hospital</a></li>
                                        <li class="item_6"><a href="restaurant.html">Restaurant</a></li>
                                        <li class="item_7"><a href="travel.html">Tourist place</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- HEADER AREA END-->
                </ul>
            </nav>

        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Navigation</li>
                        <li>
                            <a href="{{ route('dashboard') }}"><i class="fi-layers"></i> <span> Dashboard </span></a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="fi-air-play"></i><span class="badge badge-success pull-right">2</span> <span> Manage By Admin </span>
                            </a>
                            <ul class="nav-second-level" aria-expanded=false>
                                <li><a href="{{ route('admin.category') }}">Category</a></li>
                                <li><a href="{{ route('admin.subcategory') }}">Subcategory</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="fi-target"></i> <span> Admin UI </span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="admin-grid.html">Grid</a></li>
                                <li><a href="admin-sweet-alert.html">Sweet Alert</a></li>
                                <li><a href="admin-tiles.html">Tiles Box</a></li>
                                <li><a href="admin-nestable.html">Nestable List</a></li>
                                <li><a href="admin-rangeslider.html">Range Slider</a></li>
                                <li><a href="admin-ratings.html">Ratings</a></li>
                                <li><a href="admin-filemanager.html">File Manager</a></li>
                                <li><a href="admin-lightbox.html">Lightbox</a></li>
                                <li><a href="admin-scrollbar.html">Scroll bar</a></li>
                                <li><a href="admin-slider.html">Slider</a></li>
                                <li><a href="admin-treeview.html">Treeview</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">

                    <!-- end row -->
                    @yield('content')
                </div>
                    <!-- end row -->
                </div> <!-- container -->
            </div> <!-- content -->
            <footer class="footer text-right">
                2021 © Smat City For Life
            </footer>
        </div>

        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{ asset('back') }}/{{ 'js/jquery.min.j' }}s"></script>
    <script src="{{ asset('back') }}/{{ 'js/tether.min.js' }}"></script><!-- Tether for Bootstrap -->
    <script src="{{ asset('back') }}/{{ 'js/bootstrap.min.j' }}s"></script>
    <script src="{{ asset('back') }}/{{ 'js/metisMenu.min.js' }}"></script>
    <script src="{{ asset('back') }}/{{ 'js/waves.js' }}"></script>
    <script src="{{ asset('back') }}/{{ 'js/jquery.slimscroll.js' }}"></script>

    <!-- Counter js  -->
    <script src="{{ asset('back') }}/{{ 'plugins/waypoints/jquery.waypoints.min.js' }}"></script>
    <script src="{{ asset('back') }}/{{ 'plugins/counterup/jquery.counterup.min.js' }}"></script>

    <!--C3 Chart-->
    <script type="text/javascript" src="{{ asset('back') }}/{{ 'plugins/d3/d3.min.js' }}"></script>
    <script type="text/javascript" src="{{ asset('back') }}/{{ 'plugins/c3/c3.min.js' }}"></script>

    <!--Echart Chart-->
    <script src="{{ asset('back') }}/{{ 'plugins/echart/echarts-all.j' }}s"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('back') }}/{{ 'pages/jquery.dashboard.j' }}s"></script>

    <!-- App js -->
    <script src="{{ asset('back') }}/{{ 'js/jquery.core.j' }}s"></script>
    <script src="{{ asset('back') }}/{{ 'js/jquery.app.js' }}"></script>

    {{-- data table scripts --}}
    
        <!-- Required datatable js -->
        <script src="{{ asset('back/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('back/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('back/plugins/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('back/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('back/plugins/datatables/jszip.min.js') }}"></script>
        <script src="{{ asset('back/plugins/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('back/plugins/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('back/plugins/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('back/plugins/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('back/plugins/datatables/buttons.colVis.min.js') }}"></script>
        <!-- Responsive examples -->
        <script src="{{ asset('back/plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('back/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
        {{-- Sweet Alert --}}
        <script src="{{asset('back/js/sweetalert.min.js')}}"></script>

        
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf', 'colvis']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );


            
        //Delete Alert - Sweet alert
        $(document).on("click","#delete", function(e){
          e.preventDefault();
          var link = $(this).attr("href");
            swal({
              title: "Are you sure?",
              text: "Delete for everytime!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                window.location.href = link;
              } else {
                swal("Your file is safe!");
              }
            });
        });

        </script>

        {{-- end data table script --}}

        

</body>

</html>

