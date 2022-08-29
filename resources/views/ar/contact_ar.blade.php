<!DOCTYPE html>
<html lang="ar" dir="rtl" class=" no-touch">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> مُنفرد | اتصل بناء</title>
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
<link href="{{asset('front/css/rtl-style.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('front/css/mnfrid-ar.css')}}" rel="stylesheet" type="text/css">
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


<style>

</style>


	</head>
	<body class="loader">
		<!-- loading start -->
		<div class="loading">
		    <img class="logo-loading" src="images/logo/munfird.png"s alt="logo">
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
				<a href="index.html" class="logo pointer-large animsition-link">
					<div class="logo-img-box" style="
    width: 100px;
    height: 90px;
">
				        <img class="logo-white" src="images/logo/munfird.png" alt="logo" style="
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



		<!-- nav-container start -->
		<nav class="nav-container dark-bg-4">
			<!-- nav-logo start -->
			<div class="nav-logo">
				<img src="images/logo/munfird.png" alt="logo" style="
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



					<div class="nav-bg" style="background-image: url(images/backgrounds/back.jpg);"></div>
				</li><!-- nav-box end -->
				<!-- nav-box start -->
				<li class="nav-box nav-bg-change">
					<a href="{{route('ar.about_ar')}}" class="animsition-link pointer-large nav-link">
						<span class="nav-btn" data-text="من نحن">من نحن</span>
					</a>
					<div class="nav-bg" style="background-image: url(assets/images/backgrounds/about-page.jpg);"></div>
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
			<!-- page-head start -->
			<section id="up" class="page-head flex-min-height-box dark-bg-4">
				<!-- page-head-bg -->
				<div class="page-head-bg overlay-loading2" style="background-image: url(images/backgrounds/conn.jpg);"></div>

				<!-- flex-min-height-inner start -->
	  			<div class="flex-min-height-inner">
		  			<!-- flex-container start -->
		  			<div class="container top-bottom-padding-120 flex-container response-999">
			  			<!-- column start -->
			  			<div class="six-columns six-offset">
				  			<div class="content-left-margin-40">
				  				<h1 class="large-title-bold" style="
    text-align: center;
">
									<span class="load-title-fill tr-delay03" data-text="يسعدنا">يسعدنا
</span><br>
									<span class="load-title-fill tr-delay04" data-text="تواصلك معنا">تواصلك معنا </span><br>

								</h1>

				  			</div>
			  			</div><!-- column end -->
		  			</div><!-- flex-container end -->
	  			</div><!-- flex-min-height-inner end -->

	  			<!-- scroll-btn start -->
				<a href="#down" class="scroll-btn pointer-large">
					<div class="scroll-arrow-box">
						<span class="scroll-arrow"></span>
					</div>
					<div class="scroll-btn-flip-box">
						<span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
					</div>
				 </a><!-- scroll-btn end -->
			</section><!-- page-head end -->

			<!-- flex-min-height-box start -->
			<section id="down" class="dark-bg-4 flex-min-height-box">
				<!-- flex-min-height-inner start -->
				<div class="flex-min-height-inner">
					<!-- container start -->
					<div class="container top-padding-120 bottom-padding-60">
						<div data-animation-container>
							<h1 class="large-title text-center">
								<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="تواصل معنا">تواصل معنا</span>
							</h1>
							<!--<p data-animation-child class="p-style-small text-color-5 fade-anim-box tr-delay03" data-animation="fade-anim" >We are close, very close
just one click away & you Shall hear from us:</p>-->
						</div>

						<!-- flex-container start -->
						<div class="flex-container top-padding-90 contact-box"style="text-align: center;">
							<!-- column start -->
							<div class="four-columns bottom-padding-60">
								<div data-animation-container class="content-right-margin-20">
									<p data-animation-child class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">البريد الالكتروني</p>
									<p class="title-style text-color-4">

									</p>
									<h6 data-animation-child class="flip-btn-box fade-anim-box tr-delay04" data-animation="fade-anim">
										<a href="" class="flip-btn pointer-large" data-text=""><span class="__cf_email__" data-cfemail=""> info@mnfrdsa.com</span></a>
									</h6>

								</div>
							</div><!-- column end -->
							<!-- column start -->
							<div class="four-columns bottom-padding-60">
								<div data-animation-container class="content-left-right-margin-10">
									<p data-animation-child class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">يمكنك زيارة مقر مُنفرد</p>
									<h6 class="title-style text-color-4">
										<span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay02" data-animation="overlay-anim2">الرياض شارع</span><br>
									</h6>
									<div data-animation-child class="flip-btn-box fade-anim-box tr-delay04" data-animation="fade-anim">
										<a href="" class="flip-btn pointer-large" data-text="open in google maps">open in google maps</a>
									</div>
								</div>
							</div><!-- column end -->
							<!-- column start -->
							<div class="four-columns bottom-padding-60">
								<div data-animation-container class="content-left-margin-20">
									<p data-animation-child class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">يمكنك الاتصال بناء من خلال</p>
									<p class="title-style text-color-4">
										<span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay01" data-animation="overlay-anim2">يسرنا </span><br>
										<span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay02" data-animation="overlay-anim2">اتصالك بناء</span><br>
									</p>
									<h6 data-animation-child class="flip-btn-box fade-anim-box tr-delay04" data-animation="fade-anim">
										<a href="Tel:920010703" class="flip-btn pointer-large" data-text="9200 10703">+966</a>
									</h6>
								</div>
							</div><!-- column end -->
						</div><!-- flex-container end -->
					</div><!-- container end -->
				</div><!-- flex-min-height-inner end -->
			</section><!-- flex-min-height-box end -->

			<!-- contact-form-box start -->
			<section class="contact-form-box flex-min-height-box" >
				<div class="bg-overlay" style="background: none;"></div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d927764.3195727798!2d47.381714261106346!3d24.72415514947982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2z2KfZhNix2YrYp9i2INin2YTYs9i52YjYr9mK2Kk!5e0!3m2!1sar!2s!4v1658442316451!5m2!1sar!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</section><!-- contact-form-box end -->
		</main><!-- animsition-overlay end -->
<!-- footer start -->
		<footer class="footer dark-bg-4" >
			<!-- flex-container start -->
			<div class="flex-container container top-bottom-padding-90"style="
    text-align: right;
">
				<!-- column start -->
				<div class="two-columns bottom-padding-60">
					<div class="content-right-margin-10 footer-center-mobile">
						<img class="footer-logo" src="images/logo/munfird.png" alt="logo"style="
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
							<li><i class="far fa-envelope"></i><a href="" class="xsmall-title-oswald"><span class="__cf_email__" data-cfemail=""> info@mnfrdsa.com</span></a></li>
							<li><i class="fas fa-mobile-alt"></i><a href="" class="xsmall-title-oswald"> 966</a></li>
							<li><i class="fas fa-map-marker-alt"></i><a href="" class="xsmall-title-oswald text-height-17"> العنوان <span> الرياض </span></a></li>
						</ul>
					</div>
				</div><!-- column end -->
								<a href="whatsapp:" class="float" target="_blank">
<i class="fab fa-whatsapp	 my-float"></i>
</a>
				<!-- column start -->
				<div class="three-columns bottom-padding-60">
					<div class="content-left-margin-10">
						<ul class="footer-social">
							<li><i class="fab fa-twitter" style="color: white;"></i>&nbsp;&nbsp;&nbsp;
								<div class="flip-btn-box">
									<a href="https://twitter.com" class="flip-btn pointer-small" data-text="تويتر">تويتر</a>
								</div>
							</li>
							<li><i class="fab fa-instagram" style="color: white;"></i>&nbsp;&nbsp;&nbsp;
								<div class="flip-btn-box">
									<a href="https://www.instagram.com" class="flip-btn pointer-small" data-text="انستغرام">انستغرام</a>
								</div>
							</li>

							<li><i class="fab fa-linkedin" style="color: white;"></i>&nbsp;&nbsp;&nbsp;
								<div class="flip-btn-box">
								<a href="https://www.linkedin.com" class="flip-btn pointer-small" data-text="لنكد إن">لنكد إن</a>
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
