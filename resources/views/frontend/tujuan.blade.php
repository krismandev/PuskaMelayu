

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#061948">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#061948">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
		<title>{{$tujuan->nama}}</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{asset('frontend/images/fav-icon/icon.png')}}">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="main-page-wrapper">


			@include('layouts.frontend.header')




            <style>
                .banner-inner-page{
                    background-attachment: fixed;
                    background-size: cover;
                }
            </style>
            @switch($tujuan->id)
                @case(1)
                    <style>
                        .single-banner{
                            background-color: #eb1c2d;
                        }
                    </style>
                @break
                @case(2)
                    <style>
                        .single-banner{
                            background-color: #d3a02a;
                        }
                    </style>
                @break
                @case(3)
                    <style>
                        .single-banner{
                            background-color: #279b48;
                        }
                    </style>
                @break
                @case(4)
                    <style>
                        .single-banner{
                            background-color: #c31f33;
                        }
                    </style>
                @break
                @case(5)
                    <style>
                        .single-banner{
                            background-color: #ef3f2b;
                        }
                    </style>
                @break
                @case(6)
                    <style>
                        .single-banner{
                            background-color: #04aed9;
                        }
                    </style>
                @break
                @case(7)
                    <style>
                        .single-banner{
                            background-color: #fdb713;
                        }
                    </style>
                @break
                @case(8)
                    <style>
                        .single-banner{
                            background-color: #8f1838;
                        }
                    </style>
                @break
                @case(9)
                    <style>
                        .single-banner{
                            background-color: #f36d25;
                        }
                    </style>
                @break
                @case(10)
                    <style>
                        .single-banner{
                            background-color: #e01a83;
                        }
                    </style>
                @break
                @case(11)
                    <style>
                        .single-banner{
                            background-color: #f99d26;
                        }
                    </style>
                @break
                @case(12)
                    <style>
                        .single-banner{
                            background-color: #cf8e2a;
                        }
                    </style>
                @break
                @case(13)
                    <style>
                        .single-banner{
                            background-color: #48783e;
                        }
                    </style>
                @break
                @case(14)
                    <style>
                        .single-banner{
                            background-color: #037dbc;
                        }
                    </style>
                @break
                @case(15)
                    <style>
                        .single-banner{
                            background-color: #3db049;
                        }
                    </style>
                @break
                @case(16)
                    <style>
                        .single-banner{
                            background-color: #04558c;
                        }
                    </style>
                @break
                @case(17)
                    <style>
                        .single-banner{
                            background-color: #183668;
                        }
                    </style>
                @break

                @default
                <style>
                    .single-banner{
                            background-color: #ffffff;
                    }
                </style>

            @endswitch
            {{-- <div class="banner-inner-page section-spacing" style="height: 500px;">
                    <div class="col-lg-12">
                        <div class="col-md-7">
                            <h3>{{$tujuan->id}}. {{$tujuan->nama}}</h3>
                        </div>
                        <div class="col-md-5">
                            <img src="{{url('images/'.$tujuan->getImage())}}" alt="" style="width: 100px;">
                        </div>
                    </div>

            </div> --}}

            <div class="single-banner" style=" height:50px;">

            </div>



            <div class="about-compnay section-spacing single-banner" style="height: 450px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-12" style="margin-top: 100px;">
                            <div class="text">
                                <div class="theme-title-one">
                                    <h2 style="color: white;">{{$tujuan->id}}.{{$tujuan->nama}}</h2>
                                </div> <!-- /.theme-title-one -->
                            </div> <!-- /.text -->
                        </div> <!-- /.col- -->
                        <div class="col-lg-5 col-12 float-right">
                            @switch($tujuan->id)
                                @case(1)
                                    <img src="{{asset('images/goal-1-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                @case(2)
                                    <img src="{{asset('images/goal-2-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                    @case(3)
                                    <img src="{{asset('images/goal-3-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                    @case(4)
                                    <img src="{{asset('images/goal-4-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                    @case(5)
                                    <img src="{{asset('images/goal-5-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                    @case(6)
                                    <img src="{{asset('images/goal-6-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                    @case(7)
                                    <img src="{{asset('images/goal-7-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                    @case(8)
                                    <img src="{{asset('images/goal-8-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                    @case(9)
                                    <img src="{{asset('images/goal-9-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                    @case(10)
                                    <img src="{{asset('images/goal-10-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                    @case(11)
                                    <img src="{{asset('images/goal-11-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                    @case(12)
                                    <img src="{{asset('images/goal-12-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                    @case(13)
                                    <img src="{{asset('images/goal-13-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                    @case(14)
                                    <img src="{{asset('images/goal-14-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                    @case(15)
                                    <img src="{{asset('images/goal-15-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                    @case(16)
                                    <img src="{{asset('images/goal-16-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                    @case(17)
                                    <img src="{{asset('images/goal-17-upload.png')}}" alt="" height="300px; width:100%;">
                                    @break
                                @default
                                <img src="{{asset('images/goal-17-upload.png')}}" alt="" height="300px; width:100%;">

                            @endswitch
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.about-compnay -->

            <div class="about-compnay section-spacing">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="text">
                                <div class="theme-title-one">
                                    {{-- <h2>Apa itu SDGs?</h2> --}}
                                    <p>{!!$tujuan->deskripsi!!}</p>
                                </div> <!-- /.theme-title-one -->
                            </div> <!-- /.text -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.about-compnay -->

            <div class="about-compnay section-spacing">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="text">
                                <div class="theme-title-one" style="text-align: left;">
                                    <h2>Target</h2>
                                    <p>{!!$tujuan->target!!}</p>
                                </div> <!-- /.theme-title-one -->
                            </div> <!-- /.text -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.about-compnay -->


			<div class="partner-section bg-color">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-12">
							<h6>OUR <br>PARTNERS</h6>
						</div>
						<div class="col-md-9 col-sm-8 col-12">
							<div class="partner-slider">
								<div class="item"><img src="{{asset('frontend/images/logo/p-1.png')}}" alt=""></div>
								<div class="item"><img src="{{asset('frontend/images/logo/p-2.png')}}" alt=""></div>
								<div class="item"><img src="{{asset('frontend/images/logo/p-3.png')}}" alt=""></div>
								<div class="item"><img src="{{asset('frontend/images/logo/p-4.png')}}" alt=""></div>
								<div class="item"><img src="{{asset('frontend/images/logo/p-5.png')}}" alt=""></div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.partner-section -->


			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="theme-footer-one">
				<div class="top-footer">
					<div class="container">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-sm-6 about-widget">
								<h6 class="title">Hubungi kami</h6>
								<p><i class="fa fa-map-marker"></i> Jl. Lintas Jambi-Muara Bulian, Mendalo, Kecamatan Jambi Luar Kota, Kabupaten Muaro Jambi, 36361</p>
								<div class="queries"><i class="fa fa-envelope-o"></i> Email : <a href="#">sdgscenter@uinjambi.ac.id</a></div>
							</div> <!-- /.about-widget -->
							{{-- <div class="col-xl-4 col-lg-3 col-sm-6 footer-recent-post">
								<h6 class="title">RECENT POSTS</h6>
								<ul>
									<li class="clearfix">
										<img src="{{asset('frontend/images/blog/1.jpg')}}" alt="" class="float-left">
										<div class="post float-left">
											<a href="blog-details.html">Till wanted by theam govern they survive as soldiers.</a>
											<div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> Feb 06, 2018</div>
										</div>
									</li>
									<li class="clearfix">
										<img src="{{asset('frontend/images/blog/2.jpg')}}" alt="" class="float-left">
										<div class="post float-left">
											<a href="blog-details.html">World dont move to beat of just one drum.</a>
											<div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> Mar 20, 2018</div>
										</div>
									</li>
								</ul>
							</div>  --}}
							{{-- <div class="col-xl-2 col-lg-3 col-sm-6 footer-list">
								<h6 class="title">SOLUTIONS</h6>
								<ul>
									<li><a href="#">Travel and Aviation</a></li>
									<li><a href="#">Business Services</a></li>
									<li><a href="#">Consumer Products</a></li>
									<li><a href="#">Financial Services</a></li>
									<li><a href="#">Software Research</a></li>
									<li><a href="#">Quality Resourcing</a></li>
								</ul>
							</div> --}}
							{{-- <div class="col-xl-3 col-lg-2 col-sm-6 footer-newsletter">
								<h6 class="title">NEWSLETTER</h6>
								<form action="#">
									<input type="text" placeholder="Name *">
									<input type="email" placeholder="Email *">
									<button class="theme-button-one">SUBSCRIBE</button>
								</form>
							</div> --}}
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-footer -->
				<div class="bottom-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-12"><p>&copy; Copyrights 2018. All Rights Reserved.</p></div>
							<div class="col-md-6 col-12">
								<ul>
									<li><a href="about.html">About</a></li>
									<li><a href="service.html">Solutions</a></li>
									<li><a href="#">FAQ’s</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> <!-- /.bottom-footer -->
			</footer> <!-- /.theme-footer -->




	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>



		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="{{asset('frontend/vendor/jquery.2.2.3.min.js')}}"></script>
		<!-- Popper js -->
		<script src="{{asset('frontend/vendor/popper.js/popper.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/Camera-master/scripts/jquery.mobile.customized.min.js')}}"></script>
	    <script src="{{asset('frontend/vendor/Camera-master/scripts/jquery.easing.1.3.js')}}"></script>
	    <script src="{{asset('frontend/vendor/Camera-master/scripts/camera.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/menu/src/js/jquery.slimmenu.js')}}"></script>
		<script src="{{asset('frontend/vendor/WOW-master/dist/wow.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('frontend/vendor/jquery.appear.js')}}"></script>
		<script src="{{asset('frontend/vendor/jquery.countTo.js')}}"></script>
		<script src="{{asset('frontend/vendor/fancybox/dist/jquery.fancybox.min.js')}}"></script>
		<script src="{{asset('frontend/js/theme.js')}}"></script>
		</div>
	</body>
</html>

