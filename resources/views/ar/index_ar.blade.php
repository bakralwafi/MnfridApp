@extends('layout.layout_ar')
@section('body_ar')

			<!-- flex-min-height-box start -->
			<section id="down" class="dark-bg-1 flex-min-height-box">
				<!-- flex-min-height-inner start -->
				<div class="flex-min-height-inner" style="
    background: #ffffff;
">
					<!-- container start -->
					<div class="container small top-bottom-padding-120">
						<!-- flex-container start -->
						<div data-animation-container class="flex-container">
							<!-- column start -->
							<div class="twelve-columns text-center">

									<div data-animation-container class="container small bottom-padding-60 text-center font-tajawal">
                                        @if ($indexpage->titelar != '')
                                        <h2 data-animation-child class="large-title text-height-10 text-color-1 overlay-anim-box2" data-animation="overlay-anim2">{{$indexpage->titelar}}</h2><br>

            @endif
				</div><!-- container end -->
							</div><!-- column end -->
							<!-- column start -->
							<div class="twelve-columns">
								<div class="content-right-margin-20">
									<p data-animation-child class="p-style-medium text-color-5 fade-anim-box tr-delay02 font-tajawal" data-animation="fade-anim" Style="color: #1d2a3a;text-align: justify; line-height: 40px;">
                                        {{$indexpage->aboutsectionar}}
 </p>
								</div>
							</div><!-- column end -->
							<!-- column start
							<div class="six-columns">
								<div class="content-left-margin-20">
									<p data-animation-child class="p-style-medium text-color-5 fade-anim-box tr-delay03" data-animation="fade-anim">We have been able to reach a high position among the companies of the Kingdom and have been able to establish a base of relations with major companies. Ways is a marketing company providing services and marketing solutions in all fields.</p>
								</div>
							</div> column end -->
							<!-- column start -->
							<div class="twelve-columns text-center">
                                <br>
                                <br>
								<p data-animation-child class=" text-color-4 text-height-13 fade-anim-box tr-delay04 font-tajawal" data-animation="fade-anim" style="font-size: 40px;color: #1d2a3a;">{{$indexpage->messagear}}</p>
							</div><!-- column end -->
						</div><!-- flex-container end -->
					</div><!-- container end -->
				</div><!-- flex-min-height-inner end -->
			</section><!-- flex-min-height-box end -->

			<!-- section start -->
			<section class="light-bg-1 bottom-padding-30 top-padding-120" data-midnight="black">
				<!-- container start -->
				<div data-animation-container class="container small bottom-padding-60 text-center">
					<h2 data-animation-child class="large-title text-height-10 text-color-1 overlay-anim-box2 font-tajawal"style="
    font-family: 'Tajawal Regular';
" data-animation="overlay-anim2">{{$indexpage->T_portfolioar}}</h2><br>

				</div><!-- container end -->
                @foreach ($portfolio as $prot )
			<div class="bottom-padding-90">
					<!-- portfolio-content start -->
					<div class="portfolio-content flex-min-height-box">
						<!-- portfolio-content-inner start -->
						<div class="portfolio-content-inner flex-min-height-inner">
							<!-- flex-container start -->
							<div class="flex-container container small">
								<!-- column start -->
								<div data-animation-container class="six-columns">
									<div class="content-right-margin-40" style="  text-align: right;">


										<h3 class="title-style text-color-1">
										    <span data-animation-child="" class="red-color overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2"style="font-family: 'Tajawal Regular';"> {{ $prot->type_servicesar }}</span>
											<span data-animation-child="" class="overlay-anim-box2 overlay-dark-bg-2 tr-delay02" data-animation="overlay-anim2" style="font-family: 'Tajawal Regular';"> {{ $prot->titelar }}</span><br>

										</h3>

										<p data-animation-child="" class="p-style-small text-color-2 fade-anim-box tr-delay04" style="font-family: 'Tajawal Regular';" data-animation="fade-anim">{{ $prot->descraptionar }}</p>

										<div data-animation-child class=" arrow-btn-box top-margin-30 fade-anim-box tr-delay05 " data-animation="fade-anim">
											<a href="{{ route('home.portfolio',['var'=>$prot->type_services]) }}" class=" arrow-btn pointer-large animsition-link"style="background:#1b2550; font-family: 'Tajawal Regular';">اضغط هنا للمزيد</a>
										</div>

									</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="six-columns top-padding-60">
								<img  src="{{asset($prot->image)}}">
									<a href="{{ route('home.portfolio',['var'=>$prot->type_services]) }}" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
										<div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2 lazyload" data-animation="overlay-anim2" ></div>
									</a>
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- portfolio-content-inner end -->
					</div><!-- portfolio-content end -->
				</div><!-- bottom-padding-90 end -->

                @endforeach













			</section><!-- section end -->

			<!-- section start -->
			<section class="silver-bg">
				<!-- container start -->
				<div class="container small top-bottom-padding-120"style="text-align: center;">
					<!-- medium-title start -->
						<div data-animation-container class="container small bottom-padding-60 text-center">
					<h2 data-animation-child class="large-title text-height-10 text-color-1 overlay-anim-box2" data-animation="overlay-anim2"style="font-family: 'Tajawal Regular';">{{$indexpage->T_workedar}}</h2><br>

				</div><!-- container end -->

        <div class="wrapper">
					<section class=" se customer-logos slider">
                        @foreach ($workwith as $work )


                        <div class="slide"><img  src="{{asset($work->icon)}}"></div>
                               @endforeach
               </section>
				</div>

				</div><!-- container end -->
			</section><!-- section end -->



			<!-- latest-news start -->
			<section class="latest-news top-padding-120 bottom-padding-30 light-bg-1" data-midnight="black">
				<!-- container start -->
				<div class="container">
					<!-- text-center start -->
						<div data-animation-container="" class="text-center">
						<h2 data-animation-child="" class="large-title text-height-10 text-color-1 overlay-anim-box2" data-animation="overlay-anim2"style="font-family: 'Tajawal Regular';">{{$indexpage->T_servicear}}</h2><br>
					</div><!-- text-center end -->
<div class="services" id="services">
    <div class="row">
        @foreach ($service as $serv)

         <div class="col-md-4">
          <div class="flip-box">
              <div class="flip-box-inner">
                  <div class="flip-box-front">

                               <img class="services-img" src="{{asset($serv->icon)}}" >


                                      <h6>{{$serv->namear}}</h6>

                  </div>
                  <div class="flip-box-back">

                            <img class="services-imgb" src="{{asset($serv->icon)}}" >


                              @if ($serv->descraptionar != '')
                              <p>{{$serv->descraptionar}}</p>
                              @endif
                  </div>
              </div>
          </div>
         </div>


         @endforeach
      </div>


</div>

				</div><!-- container end -->
			</section><!-- latest-news end -->

@endsection
