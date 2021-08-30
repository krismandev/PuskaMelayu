<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dashboard/plugins/images/favicon.png')}}">
    <title>@yield('title')</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="{{asset('dashboard/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <link href="{{asset('dashboard/plugins/components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!-- ===== Animation CSS ===== -->
    <link href="{{asset('dashboard/css/animate.css')}}" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
    <link href="{{asset('dashboard/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('header')
</head>

<body class="mini-sidebar">
    @include('sweetalert::alert')
    <!-- ===== Main-Wrapper ===== -->
    <div id="wrapper">
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <!-- ===== Top-Navigation ===== -->
        @include('layouts.dashboard.navbar')
        <!-- ===== Top-Navigation-End ===== -->
        <!-- ===== Left-Sidebar ===== -->
        @include('layouts.dashboard.sidebar')
        <!-- ===== Left-Sidebar-End ===== -->
        <!-- ===== Page-Content ===== -->
        <div class="page-wrapper">
            <!-- ===== Page-Container ===== -->
            <div class="container-fluid">
                <!-- ===== Right-Sidebar ===== -->
                @if ($errors->any())
                <div class="row">
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                        </ul>
                    </div>
                </div>
                @endif
                @yield('content')
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="icon-close right-side-toggler"></i></span> </div>
                        <div class="r-panel-body">
                            <ul class="hidden-xs">
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-danger">
                                        <input id="headcheck" type="checkbox" class="fxhdr">
                                        <label for="headcheck"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="sidecheck" type="checkbox" class="fxsdr">
                                        <label for="sidecheck"> Fix Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme working">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="yellow" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="black" class="black-theme">6</a></li>
                                <li class="db"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="yellow-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="black-dark" class="black-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('dashboard/plugins/images/users/1.jpg')}}" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('dashboard/plugins/images/users/2.jpg')}}" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('dashboard/plugins/images/users/3.jpg')}}" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('dashboard/plugins/images/users/4.jpg')}}" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('dashboard/plugins/images/users/5.jpg')}}" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('dashboard/plugins/images/users/6.jpg')}}" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ===== Right-Sidebar-End ===== -->
            </div>
            <!-- ===== Page-Container-End ===== -->
            <footer class="footer t-a-c">
                © 2017 Cubic Admin
            </footer>
        </div>
        <!-- ===== Page-Content-End ===== -->
    </div>
    <!-- ===== Main-Wrapper-End ===== -->
    <!-- ==============================
        Required JS Files
    =============================== -->
    <!-- ===== jQuery ===== -->
    <script src="{{asset('dashboard/plugins/components/jquery/dist/jquery.min.js')}}"></script>
    <!-- ===== Bootstrap JavaScript ===== -->
    <script src="{{asset('dashboard/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- ===== Slimscroll JavaScript ===== -->
    <script src="{{asset('dashboard/js/jquery.slimscroll.js')}}"></script>
    <!-- ===== Wave Effects JavaScript ===== -->
    <script src="{{asset('dashboard/js/waves.js')}}"></script>
    <!-- ===== Menu Plugin JavaScript ===== -->
    <script src="{{asset('dashboard/js/sidebarmenu.js')}}"></script>
    <!-- ===== Custom JavaScript ===== -->
    <script src="{{asset('dashboard/js/custom.js')}}"></script>
    <!-- ===== Plugin JS ===== -->
    <script src="{{asset('dashboard/plugins/components/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/components/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/components/sparkline/jquery.charts-sparkline.js')}}"></script>
    <script src="{{asset('dashboard/plugins/components/knob/jquery.knob.js')}}"></script>
    <script src="{{asset('dashboard/plugins/components/easypiechart/dist/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('dashboard/js/db1.js')}}"></script>
    <!-- ===== Style Switcher JS ===== -->
    <script src="{{asset('dashboard/plugins/components/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    {{-- <script src="{{asset('ckeditor/ckeditor.js')}}"></script> --}}
    @yield('linkfooter')
</body>

</html>
