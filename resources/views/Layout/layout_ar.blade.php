<!DOCTYPE html>
<html lang="ar" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> مُنفرد</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Mnfrid Marketing Solutions is a creative agency that provides your business and brands with the latest marketing trends and enhances your user experience." />
	<meta name="keywords" content="Snapchat ads,Marketing agency,digital marketing,Public relations,Mnfrid,brand identity,Infographic design,Facebook Ads,Social media management,Instagram Ads">
		<!-- fonts -->
		<!-- fonts -->
        <link href='https://fonts.googleapis.com/css?family=Tajawal' rel='stylesheet'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<!-- styles -->
<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('front/css/plugins.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('front/css/fontawesome.min.css')}}" rel="stylesheet" type="text/css" >
<link rel="stylesheet" type="text/css" href="{{asset('front/css/demo.css')}}" />

<link rel="stylesheet" href="{{asset('front/css/client.css')}}">
<link href="{{asset('front/css/rtl-style.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('front/css/mnfrid-ar.css')}}" rel="stylesheet" type="text/css">
<!-- favicon -->
@if ($setting->Logo != '')
<link rel="icon" type="image/x-icon" href="{{ asset($setting->Logo) }}">

@endif
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<!-- scripts -->
<script type="text/javascript" src="{{asset('front/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.lazy.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.lazy.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/slick.min.js')}}"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.customer-logos').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    centerMode: true,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    arrows: false,
                    dots: false,
                    rtl: true,
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



		<!-- Global site tag (gtag.js) - Google Analytics -->







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
				<a href="{{route('ar.index_ar')}}" class="logo pointer-large animsition-link">
					<div class="logo-img-box" style="
    width: 100px;
    height: 90px;
">
				        <img class="logo-white" src="{{ asset($setting->Logo) }}" alt="logo" style="
    height: inherit;
    width: auto;
">

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
                    <a href="{{route('ar.index_ar')}}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn active " data-text="الرئيسية">الرئيسية</span>
					</a>



					<div class="nav-bg" style="background-image: url({{asset('/front/images/backgrounds/about-page.jpg')}});"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="{{route('ar.about_ar')}}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="من نحن">من نحن</span>
					</a>
					<div class="nav-bg" style="background-image: url({{asset('/front/images/backgrounds/about-page.jpg')}})"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="{{route('ar.services_ar')}}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn " data-text="خدماتنا">خدماتنا</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/services-page.jpg);"></div>
				</li><!-- nav-box end -->


				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="{{route('ar.contact_ar')}}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="تواصل معنا">تواصل معنا</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/contact-page.jpg);"></div>
				</li><!-- nav-box end -->
				<li class="nav-box nav-bg-change">
					<a href="{{route('home.index')}}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="En | AR" style="font-family: 'Oswald', sans-serif">ِEn | AR</span>
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
				      	<div class="slide-bg overlay-loading2 overlay-dark-bg-1"  style="background-image: url({{asset('/front/images/backgrounds/back.jpg')}});"></div>
				      	<!-- home-slider-content start -->
					  	<div class="home-slider-content flex-min-height-inner dark-bg-4">
						  	<!-- flex-container start -->
					      	<div class="container top-bottom-padding-120 flex-container response-999">
						      	<!-- column start -->
						      	<div class="six-columns six-offset"style="direction:rtl; padding-right:42px;">

							      	<div class="content-left-margin-40">
									  <h1  class="slider-overlay2 medium-title red-color"  style="color: #2f4b68;text-align: right;">هدفنا </h1>
									  <p style="color: white;   font-size: x-large;"> تقديم حلول مثالية في الدعاية والإعلان بنتائج تفوق توقعات العميل.
</p>


									  	<div class="slider-fade slider-tr-delay07 top-margin-30">

												<a href="about.html" class="btn btn-info" role="button">للمزيد</a>
									  	</div>
							      	</div>
						      	</div><!-- column end -->
					      	</div><!-- flex-container end -->
				      	</div><!-- home-slider-content end -->
				    </div><!-- swiper-slide end -->
				    <!-- swiper-slide start -->
				    <div class="swiper-slide flex-min-height-box home-slide">
					    <!-- slide-bg -->
				      	<div class="slide-bg"  style="background-image: url({{asset('/front/images/backgrounds/back2.jpg')}});"></div>
				      	<!-- home-slider-content start -->
					  	<div class="home-slider-content flex-min-height-inner dark-bg-2">
						  	<!-- flex-container start -->
					      	<div class="container top-bottom-padding-120 flex-container response-999">
						      	<!-- column start -->
						      	<div class="six-columns six-offset"style="direction:rtl; padding-right:42px;">
							      	<div class="content-left-margin-40">
								      	<h1 class="slider-overlay2 medium-title red-color" style="text-align: right;">في مُنفرد</h1>
								      							      <p style="color: #DEB3AD;font-size: x-large;text-align: right;">  هناك أساسيات تقود طموحنا المستمر نحو التميز. نعمل في إطار القيم التي نؤمن بها لتحقيق رؤيتنا ورسالتنا.</p>

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
				      	<div class="slide-bg"  style="background-image: url({{asset('/front/images/backgrounds/about-page.jpg')}});"></div>
				      	<!-- home-slider-content start -->
					  	<div class="home-slider-content flex-min-height-inner red-bg">
						  	<!-- flex-container start -->
					      	<div class="container top-bottom-padding-120 flex-container response-999"style="direction:ltr;">
						      	<!-- column start -->
						      	<div class="six-columns " style="direction:rtl; padding-right:42px;">
							        <h1  class="slider-overlay2 medium-title red-color" >في مُنفرد</h1><p style="color: #dfb3ad;   font-size: x-large;"> نقدم أفضل الخدمات والحلول التسويقية!</p>
								  <span class="btn btn-primary btn-sm slider-title-fill slider-tr-delay01">تحسين محركات البحث</span>  <span class="btn btn-primary  btn-sm">تطوير منتج.</span>
								  <span class="btn btn-primary  btn-sm slider-title-fill slider-tr-delay01">صناعة الاسم التجاري</span>
								  <br>
								  	<div class="arrow-btn-box slider-fade slider-tr-delay06 top-margin-30">
										<a href="services.html"  class="btn btn-danger" role="button">اقراء المزيد</a>
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

            @yield('body_ar')

        </main><!-- animsition-overlay end -->

        <footer class="footer bak-footer" >
                    <!-- flex-container start -->
                    <div class="flex-container container top-bottom-padding-90"style="
            text-align: right;
        ">
                        <!-- column start -->
                        <div class="two-columns bottom-padding-60">
                            <div class="content-right-margin-10 footer-center-mobile">
                                <img class="footer-logo" src="{{asset($setting->Logo)}}" alt="logo"style="
            max-width: 30%;
        ">
                            </div>
                        </div><!-- column end -->
                        <!-- column start -->
                        <div class="three-columns bottom-padding-60">
                            <div class="content-left-right-margin-10">
                                <ul class="footer-menu text-color-4">
                                    <li><a class="pointer-large animsition-link small-title-oswald hover-color active" href="{{route('ar.index_ar')}}">الرئيسية</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color" href="{{route('ar.about_ar')}}">من نحن</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color" href="{{route('ar.services_ar')}}">خدماتنا</a></li>
							<li><a class="pointer-large animsition-link small-title-oswald hover-color" href="{{route('ar.contact_ar')}}">تواصل معنا</a></li>
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
                            <a href="whatsapp://" class="float" target="_blank">
        <i class="fab fa-whatsapp	 my-float"></i>
        </a>
                        <div class="three-columns bottom-padding-60">
                            <div class="content-left-margin-10">
                                <ul class="footer-social">
                                    <li>
                                        <div class="flip-btn-box">
                                            <i class="	fab fa-twitter"style="color: white;"></i>
                                            @if ($setting->twitt != '')

                                            <a href="{{ $setting->twitt }}" class="flip-btn pointer-small"style="color: white" > تويتر</a>
                                            @endif                                        </div>
                                    </li>
                                    <li>
                                        <div class="flip-btn-box">
                                            <i class="fab fa-instagram" style="color: white;"></i>
                                            @if ($setting->insta != '')
                                            <a href="{{ $setting->insta }}" class="flip-btn pointer-small" style="color: white">انستغرام</a>
                                            @endif                                        </div>
                                    </li>

                                    <li>
                                        <div class="flip-btn-box">
                                            <i class="fab fa-linkedin" style="color: white;"></i>
                                            @if ($setting->linked != '')
                                            <a href="{{ $setting->linked }}" class="flip-btn pointer-small"style="color: white"> لينكدان</a>
                                            @endif                                        </div>
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
