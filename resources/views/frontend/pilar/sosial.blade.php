@php
use App\Mitra;

$mitras = Mitra::inRandomOrder()->get();

@endphp

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
		<title>P</title>
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

                .section-pilar{
                    background-image: linear-gradient(#314755,#26a0da);
                    height: 400px;
                    padding: 80px;
                }

                .pilar-img{
                    max-height: 250px;
                    margin-left: 100px;
                }

                @media screen and (max-width:480px){
                    .section-pilar{
                        padding: 30px;
                        height: 530px;
                    }

                    .pilar-img{
                        margin-left: 70px;
                    }
                    .logo{
                        margin-top: 15px;
                    }

                }

            </style>


            <section class="section-pilar">
                <div class="row">

                        <div class="col-lg-4 col-12">
                            <img src="{{asset('frontend/images/sosial.jpg')}}" alt="" class="pilar-img">
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="row">
                                <h2 style="color: white;">Goals Fokus</h2>
                            </div>
                            <div class="row">

                                <h5 style="color: white;">
                                    5 Goals, 47 Target, 77 Indikator
                                </h5>
                            </div>
                            <div class="row">
                                <span style="color: white;">Pembangunan Sosial SDGs adalah tercapainya pemenuhan hak dasar manusia yang berkualitas secara adil dan setara untuk meningkatkan kesejahteraan bagi seluruh masyarakat</span>
                            </div>

                        </div>
                </div>
            </section>


            <section>
                <div class="container">

                    <div class="row row-logo" style="margin-top: 20px;">
                        <div class="col-lg-2 col-12  logo">
                            <a href="{{route('showTujuan',1)}}">
                                <img src="{{asset('images/logo-sdgs-01.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-2 col-12 logo">
                            <a href="{{route('showTujuan',2)}}">
                                <img src="{{asset('images/logo-sdgs-02.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-2 col-12 logo">
                            <a href="{{route('showTujuan',3)}}">
                                <img src="{{asset('images/logo-sdgs-03.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-2 col-12 logo">
                            <a href="{{route('showTujuan',4)}}">
                                <img src="{{asset('images/logo-sdgs-04.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-2 col-12 logo">
                            <a href="{{route('showTujuan',5)}}">
                                <img src="{{asset('images/logo-sdgs-05.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
        </div> <!-- /.container -->
            </section>


			<div class="partner-section bg-color">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-12">
							<h6>OUR <br>PARTNERS</h6>
						</div>
						<div class="col-md-9 col-sm-8 col-12">
							<div class="partner-slider">
                                @if ($mitras->count() != null)
                                @foreach ($mitras as $mitra)
                                    <div class="item"><img src="{{url('mitra/'.$mitra->gambar)}}" alt=""></div>
                                @endforeach
                                @endif

								{{-- <div class="item"><img src="{{asset('frontend/images/logo/p-2.png')}}" alt=""></div>
								<div class="item"><img src="{{asset('frontend/images/logo/p-3.png')}}" alt=""></div>
								<div class="item"><img src="{{asset('frontend/images/logo/p-4.png')}}" alt=""></div>
								<div class="item"><img src="{{asset('frontend/images/logo/p-5.png')}}" alt=""></div> --}}
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

