<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mnfrid Marketing Solutions</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Mnfrid Marketing Solutions is a creative agency that provides your business and brands with the latest marketing trends and enhances your user experience." />
	<meta name="keywords" content="Snapchat ads,Marketing agency,digital marketing,Public relations,Mnfrid,brand identity,Infographic design,Facebook Ads,Social media management,Instagram Ads">
		<!-- fonts -->
<link href='https://fonts.googleapis.com/css?family=Tajawal' rel='stylesheet'>
						<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

		<!-- styles -->
		<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('front/css/plugins.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('front/css/fontawesome.min.css')}}" rel="stylesheet" type="text/css" >
		<link rel="stylesheet" type="text/css" href="{{asset('front/css/demo.css')}}" />

		<link rel="stylesheet" href="{{asset('front/css/client.css')}}">
        <link href="{{asset('front/css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('front/css/mnfrid.css')}}" rel="stylesheet" type="text/css">
        <!-- favicon -->
        @if ($setting->Logo != '')
        <link rel="icon" type="image/x-icon" href="{{ asset($setting->Logo) }}">

        @endif
  				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

		<!-- scripts -->
		<script src="{{asset('front/js/plugins.js')}}"></script>
		<script src="{{asset('front/js/main.js')}}"></script>
		<script type="text/javascript" src="{{asset('front/js/jquery.lazy.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('front/js/jquery.lazy.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('front/js/slick.min.js')}}"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->



    <script type="text/javascript">
    	$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 4,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1500,
				arrows: false,
				dots: false,
				pauseOnHover: false,
				responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 3
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 1
					}
				}]
			});
		});
    </script>

<style>

</style>


	</head>

	<body class="loader">


		<!-- loading start -->
		<div class="loading">
            @if ($setting->Logo != '')
		    <img class="logo-loading" src="{{ asset($setting->Logo) }}" alt="logo">
            @endif
	    </div><!-- loading end -->

		<!-- pointer start -->
		<div class="pointer" id="pointer">
			<i class="fas fa-long-arrow-alt-right"></i>
			<i class="fas fa-search"></i>
			<i class="fas fa-link"></i>
		</div><!-- pointer end -->

		<!-- to-top-btn start -->
		<a class="to-top-btn pointer-small" href="#up">
			  <span class="to-top-arrow"></span>
		</a><!-- to-top-btn end -->

	    <!-- header start -->
	    <header class="fixed-header">
		    <!-- header-flex-box start -->
			<div class="header-flex-box">
			    <!-- logo start -->
				<a href="{{route('home.index')}}" class="logo pointer-large animsition-link">
					<div class="logo-img-box" style="
    width: 100px;
    height: 90px;
">
				        <img class="logo-white" src="{{ asset($setting->Logo) }}" alt="logo" style="height: inherit;width: auto;">

			        </div>
		        </a><!-- logo end -->

				<!-- menu-open start -->
				<div class="menu-open pointer-large">
					<span class="hamburger"></span>
				</div><!-- menu-open end -->
		    </div><!-- header-flex-box end -->
		</header><!-- header end -->

		<!-- nav-container start -->
		<nav class="nav-container dark-bg-1">
			<!-- nav-logo start -->
			<div class="nav-logo">
				<img src="{{asset('front/images/logo/munfird.png')}}" alt="logo" style="
    max-width: 50%;
">
			</div><!-- nav-logo end -->

			<!-- menu-close -->
			<div class="menu-close pointer-large"></div>

			<!-- dropdown-close-box start -->
			<div class="dropdown-close-box">
				<div class="dropdown-close pointer-large">
					<span></span>
				</div>
			</div><!-- dropdown-close-box end -->

			<!-- nav-menu start -->
			<ul class="nav-menu dark-bg-1">
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change active dropdown-open">
                    <a href="{{route('home.index')}}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn active " data-text="Home">Home</span>
					</a>



					<div class="nav-bg" style="background-image: url('\front\images/backgrounds/back.jpg');"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="{{route('home.about')}}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="About">About</span>
					</a>
					<div class="nav-bg" style="background-image: url({{asset('/front/images/backgrounds/about-page.jpg')}});"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->

				<li class="nav-box nav-bg-change">
					<a href="{{route('home.services')}}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn " data-text="Services">Services</span>
					</a>
					<div class="nav-bg" style="background-image: url({{asset('/front/images/backgrounds/about-page.jpg')}})"></div>
				</li><!-- nav-box end -->


				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="{{route('home.contact')}}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="Contact">Contact</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/contact-page.jpg);"></div>
				</li><!-- nav-box end -->
				<li class="nav-box nav-bg-change">
					<a href="{{route('ar.index_ar')}}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="AR | EN" style="font-family: 'Oswald', sans-serif">AR | EN</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/about-page.jpg);"></div>
				</li>
			</ul><!-- nav-menu end -->
		</nav><!-- nav-container end -->

		<!-- animsition-overlay start -->
		<main class="animsition-overlay" data-animsition-overlay="true">
			<!-- home-slider start -->
			<section class="home-slider" id="up">
				<!-- swiper-wrapper start -->
			  	<div class="swiper-wrapper">
				  	<!-- swiper-slide start -->
				  	<div class="swiper-slide flex-min-height-box home-slide">
					  	<!-- slide-bg -->
				      	<div class="slide-bg overlay-loading2 overlay-dark-bg-1" tyle="background-image: url({{asset('/front/images/backgrounds/back.jpg')}});"></div>
				      	<!-- home-slider-content start -->
					  	<div class="home-slider-content flex-min-height-inner dark-bg-4">
						  	<!-- flex-container start -->
					      	<div class="container top-bottom-padding-120 flex-container response-999">
						      	<!-- column start -->
						      	<div class="six-columns six-offset">
							      	<div class="content-left-margin-40">
									  <h1 class="slider-overlay2 medium-title red-color" style="color: #dfb3ad;">Our Goles </h1><p class="p-slid" style="color: white;   font-size: x-large;"> We provide ideal advertising solutions with results that exceed client expectations.</p>


									  	<div class="slider-fade slider-tr-delay07 top-margin-30">

												<a href="about.html" class="btn btn-info" role="button">Read More</a>
									  	</div>
							      	</div>
						      	</div><!-- column end -->
					      	</div><!-- flex-container end -->
				      	</div><!-- home-slider-content end -->
				    </div><!-- swiper-slide end -->
				    <!-- swiper-slide start -->
				    <div class="swiper-slide flex-min-height-box home-slide">
					    <!-- slide-bg -->
				      	<div class="slide-bg" tyle="background-image: url({{asset('/front/images/backgrounds/back2.jpg')}});"></div>
				      	<!-- home-slider-content start -->
					  	<div class="home-slider-content flex-min-height-inner dark-bg-2">
						  	<!-- flex-container start -->
					      	<div class="container top-bottom-padding-120 flex-container response-999">
						      	<!-- column start -->
						      	<div class="six-columns six-offset">
							      	<div class="content-left-margin-40">
								      	<h1 class="slider-overlay2 medium-title red-color">In Mnfrid</h1>
								      							      <h5 class="p-slid"style="color: #DEB3AD;  ">  there are fundamentals that lead our constant ambition towards excellence. We work within the framework of values we believe in to achieve our vision and mission.</h5>

									  	<!--<div class="slider-fade slider-tr-delay04 top-margin-30">
										  	<div class="border-btn-box pointer-large">
												<div class="border-btn-inner">
										      		<a href="about.html" class="border-btn" data-text="Read more">Read more</a>
										    	</div>
											</div>
									  	</div>-->
							      	</div>
						      	</div><!-- column end -->
					      	</div><!-- flex-container end -->
				      	</div><!-- home-slider-content end -->
				    </div><!-- swiper-slide end -->
				    <!-- swiper-slide start -->
				    <div class="swiper-slide flex-min-height-box home-slide red-slide">
					    <!-- slide-bg -->
				      	<div class="slide-bg" tyle="background-image: url({{asset('/front/images/backgrounds/back3.jpg')}});"></div>
				      	<!-- home-slider-content start -->
					  	<div class="home-slider-content flex-min-height-inner red-bg">
						  	<!-- flex-container start -->
					      	<div class="container top-bottom-padding-120 flex-container response-999">
						      	<!-- column start -->
						      	<div class="six-columns">
							        <h1 class="slider-overlay2 medium-title red-color">In Mnfrid,</h1><h5 style="color: #dfb3ad;   "> We’r Provided Best Marketing Services & Solutions!</h5>
								  <span class="btn btn-primary btn-sm">Search Engine Optimization</span>  <span class="btn btn-primary  btn-sm">product development</span>
								  <span class="btn btn-primary  btn-sm">Trade name industry</span>
								  <br>
								  	<div class="arrow-btn-box slider-fade slider-tr-delay06 top-margin-30">
										<a href="{{route('home.services')}}"  class="btn btn-danger" role="button">Read more</a>
									</div>
						      	</div><!-- column end -->
					      	</div><!-- flex-container end -->
				      	</div><!-- home-slider-content end -->
				    </div><!-- swiper-slide end -->
			  	</div><!-- swiper-wrapper end -->

			  	<!-- swiper-button-next start -->
			  	<div class="swiper-button-next">
				  	<div class="slider-arrow-next-box">
					  	<span class="slider-arrow-next"></span>
				  	</div>
			  	</div><!-- swiper-button-next end -->
			  	<!-- swiper-button-prev start -->
			  	<div class="swiper-button-prev">
				  	<div class="slider-arrow-prev-box">
					  	<span class="slider-arrow-prev"></span>
				  	</div>
			  	</div><!-- swiper-button-prev end -->

			  	<!-- swiper-pagination -->
			  	<div class="swiper-pagination"></div>

			  	<!-- scroll-btn start -->
				<a href="#down" class="scroll-btn pointer-large">
					<div class="scroll-arrow-box">
						<span class="scroll-arrow"></span>
					</div>
					<div class="scroll-btn-flip-box">
						<span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
					</div>
				 </a><!-- scroll-btn end -->
			</section><!-- home-slider end -->





            @yield('body')

		</main><!-- animsition-overlay end -->

        <footer class="footer bak-footer">
            <!-- flex-container start -->
            <div class="flex-container container top-bottom-padding-90">
                <!-- column start -->
                <div class="two-columns bottom-padding-60">
                    <div class="content-right-margin-10 footer-center-mobile">
                        <img class="footer-logo" src="{{ asset($setting->Logo) }}" alt="logo"style="max-width: 30%;">
                    </div>
                </div><!-- column end -->
                <!-- column start -->
                <div class="three-columns bottom-padding-60">
                    <div class="content-left-right-margin-10">
                        <ul class="footer-menu text-color-4">
                            <li><a class="pointer-large animsition-link small-title-oswald hover-color active" href="{{route('home.index')}}">Home</a></li>
                            <li><a class="pointer-large animsition-link small-title-oswald hover-color" href="{{route('home.about')}}">About</a></li>
                            <li><a class="pointer-large animsition-link small-title-oswald hover-color" href="{{route('home.services')}}">Services</a></li>
                            <li><a class="pointer-large animsition-link small-title-oswald hover-color" href="{{route('home.contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div><!-- column end -->
                <!-- column start -->

                <div class="four-columns bottom-padding-60">
                    <div class="content-left-right-margin-10 footer-center-mobile">
                        <ul class="footer-information text-color-4">

                            @if ($setting->email != '')
                            <li><i class="far fa-envelope"></i><a href="" class="xsmall-title-oswald">{{  $setting->email  }}</a></li>
                            @endif
                            @if ($setting->phone != '')
                            <li><i class="fas fa-mobile-alt"></i><a href="" class="xsmall-title-oswald">{{  $setting->phone  }}</a></li>
                            @endif
                            @if ($setting->Address != '')
                            <li><i class="fas fa-map-marker-alt"></i><a href="" class="xsmall-title-oswald text-height-17">{{  $setting->Address }}</a></li>
                            @endif
                        </ul>
                    </div>
                </div><!-- column end -->
                <!-- column start -->
                <div class="three-columns bottom-padding-60">
                    <div class="content-left-margin-10">
                        <ul class="footer-social">
                            <li>
                                <div class="flip-btn-box">
                                    <i class="fab fa-twitter" style="color: white;"></i>
                                    @if ($setting->twitt != '')
                                    <a href="{{ $setting->twitt }}" class="flip-btn pointer-small" style="color: white"> Twitter</a>
                                    @endif
                                </div>
                            </li>
                            <li>
                                <div class="flip-btn-box">
                                    <i class="fab fa-instagram" style="color: white;"></i>
                                    @if ($setting->insta != '')
                                    <a href="{{ $setting->insta }}" class="flip-btn pointer-small"style="color: white" >Instagram</a>
                                    @endif
                                </div>
                            </li>

                            <li>
                                <div class="flip-btn-box">
                                    <i class="fab fa-linkedin" style="color: white;"></i>
                                    @if ($setting->linked != '')
                                <a href="{{ $setting->linked }}" class="flip-btn pointer-small"style="color: white" > LinkedIn</a>
                                @endif
                            </div>
                            </li>

                        </ul>
                    </div>
                </div><!-- column end -->
                <!-- column start -->
                <div class="twelve-columns">
                    <p class="p-letter-style text-color-4 footer-copyright">&copy; 2022 Mnfrid. All Rights Reserved</p>
                </div><!-- column end -->
            </div><!-- flex-container end -->
        </footer><!-- footer end -->





<!-- End of LiveChat code -->

    </body>
</html>
