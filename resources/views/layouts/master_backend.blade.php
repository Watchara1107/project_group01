<!DOCTYPE html>
<html lang="en">

<head>
    <title>nanaphan</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('backend/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/pages/waves/css/waves.min.css') }}" type="text/css"
        media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/bootstrap/css/bootstrap.min.css') }}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/pages/waves/css/waves.min.css') }}" type="text/css"
        media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/icon/themify-icons/themify-icons.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/assets/icon/font-awesome/css/font-awesome.min.css') }}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/jquery.mCustomScrollbar.css') }}">
    <!-- am chart export.css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
</head>

<body>
    @include('sweetalert::alert')

    <!-- Pre-loader start -->

    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/home') }}">
                         <h4>Welcome</h4>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>
                            
                            <li>
                                
                            </li>
                        </ul>
                        <ul class="nav-right">
          
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
            
                                    <span>{{ Auth::user()->name }}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    
                                    <li class="waves-effect waves-light">
                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    {{-- <img class="img-80 img-radius"
                                        src="{{ asset('backend/assets/images/avatar-4.jpg') }}"
                                        alt="User-Profile-Image"> --}}
                                    <div class="user-details">
                                        <span id="more-details"> <h3>สวนนานาพันธ์</h3> </span>
                                    </div>
                                </div>
                                <div class="main-menu-content">       
                                </div>
                            </div>
                            <div class="p-15 p-b-0">
                             
                            </div>
                            
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="{{ route('home') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>     
                                <li>
                                    <a href="{{ route('product.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-wallet"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Product</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>     
                                <li>
                                    <a href="{{ route('seller.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-pie-chart"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Seller</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>     
                                <li>
                                    <a href="{{ route('user.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">User</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>     
                            </ul>   
                        </div>
                    </nav>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/jquery-ui/jquery-ui.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/popper.js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/bootstrap/js/bootstrap.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('backend/assets/pages/widget/excanvas.js') }} "></script>
    <!-- waves js -->
    <script src="{{ asset('backend/assets/pages/waves/js/waves.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/jquery-slimscroll/jquery.slimscroll.js') }} "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/modernizr/modernizr.js') }} "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jquery.mCustomScrollbar.concat.min.js') }} "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/chart.js/Chart.js') }}"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="{{ asset('backend/assets/pages/widget/amchart/gauge.js') }}"></script>
    <script src="{{ asset('backend/assets/pages/widget/amchart/serial.js') }}"></script>
    <script src="{{ asset('backend/assets/pages/widget/amchart/light.js') }}"></script>
    <script src="{{ asset('backend/assets/pages/widget/amchart/pie.min.js') }}"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js')}}"></script>
    <!-- menu js -->
    <script src="{{ asset('backend/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vertical-layout.min.js') }} "></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('backend/assets/pages/dashboard/custom-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/script.js') }} "></script>
</body>

</html>
