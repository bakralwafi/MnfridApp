@extends('layout.layout')
        @section('body')
			<!-- latest-news start -->
			<section class="latest-news top-padding-120 bottom-padding-30 light-bg-1" data-midnight="black" >
				<!-- container start -->
				<div class="container">
					<!-- text-center start -->
						<div data-animation-container="" class="text-center">
						<h2 data-animation-child="" class="large-title text-height-10 text-color-1 overlay-anim-box2" data-animation="overlay-anim2">{{$indexpage->T_service}}</h2><br>

					</div><!-- text-center end -->
                    <div class="services" id="services">


                        <div class="row">
                            @foreach ($service as $serv)

                             <div class="col-md-4">
                              <div class="flip-box">
                                  <div class="flip-box-inner">
                                      <div class="flip-box-front">

                                                   <img class="services-img" src="{{asset($serv->icon)}}" >


                                                          <h6>{{$serv->name}}</h6>

                                      </div>
                                      <div class="flip-box-back">

                                                <img class="services-imgb" src="{{asset($serv->icon)}}" >


                                                  @if ($serv->descraption != '')
                                                  <p>{{$serv->descraption}}</p>
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
