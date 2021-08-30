<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>@yield('title')</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('dashboard_annex/images/favicon.ico')}}">

        <link href="{{asset('dashboard_annex/plugins/morris/morris.css')}}" rel="stylesheet">

        <link href="{{asset('dashboard_annex/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('dashboard_annex/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('dashboard_annex/css/style.css')}}" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts_annex.dashboard.sidebar')
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    @include('layouts_annex.dashboard.top-bar')
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            @yield('content')


                        </div>


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2018 Annex by Mannatthemes.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{asset('dashboard_annex/js/jquery.min.js')}}"></script>
        <script src="{{asset('dashboard_annex/js/popper.min.js')}}"></script>
        <script src="{{asset('dashboard_annex/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('dashboard_annex/js/modernizr.min.js')}}"></script>
        <script src="{{asset('dashboard_annex/js/detect.js')}}"></script>
        <script src="{{asset('dashboard_annex/js/fastclick.js')}}"></script>
        <script src="{{asset('dashboard_annex/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('dashboard_annex/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('dashboard_annex/js/waves.js')}}"></script>
        <script src="{{asset('dashboard_annex/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('dashboard_annex/js/jquery.scrollTo.min.js')}}"></script>

        <script src="{{asset('dashboard_annex/plugins/skycons/skycons.min.js')}}"></script>
        <script src="{{asset('dashboard_annex/plugins/raphael/raphael-min.js')}}"></script>
        <script src="{{asset('dashboard_annex/plugins/morris/morris.min.js')}}"></script>

        <script src="{{asset('dashboard_annex/pages/dashborad.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('dashboard_annex/js/app.js')}}"></script>
        <script>
             /* BEGIN SVG WEATHER ICON */
             if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#fff"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
            };

        // scroll

        $(document).ready(function() {

        $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});
        $("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});

        });
        </script>
        @yield('js')
    </body>
</html>
