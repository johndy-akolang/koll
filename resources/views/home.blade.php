@extends('app')

@section('title')
    KOLL.com.ph | New and Free Classified Ads and Buy and Sell Website Philippines
@stop

@section('content')

<div class="main clearfix">
    <div class="wrap">

        <div class="section group clearfix">

            <!-- item display list left -->
            <div class="cont span_2_of_3">

                <div class="top-box img-box-4 text-center">

                   <!-- show user item post all -->
					@foreach ($items as $item)

						<div class="col-md-4 col-sm-6 mb-15">
							<div class="img-box-4-item">

								<!-- item image display -->
								<div class="image-style-one">
									<a href="{{ url('/item/'.$item->slug) }}">
										<img class="img-reponsive" src="{{ asset($item->images) }}" alt="{{ $item->title }}" />
									</a>
								</div>

								<!-- details item container -->
								<div class="img-box-4-content">

                                    <!-- display category -->
									<!-- <small>{{ $item->category }}</small> -->

                                    <!-- display title -->
									<h4 class="item-title" style="height: 29px;">
										<a href="{{ url('/item/'.$item->slug) }}" class="title-cut">{{ $item->title }}</a>
									</h4>

                                    <!-- display price -->
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">Php {{ $item->price }}</div>
									</div>

                                    <!-- display date posted item -->
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 info-dta">Posted on : {{ $item->created_at }}</div>
									</div>

                                    <!-- display location located -->
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 info-dta">
                                            <a class="c-307 mb-10">Location: {{ $item->city }}</a>
                                        </div>
                                    </div>
									<div class="clearfix"></div>
								</div>

							</div>
						</div>
                    @endforeach

                    <!-- render for pagination -->
                    <div class="clear"></div>
                    {!! $items->render() !!}
                </div>

            </div>

            <!-- advertisement right -->
            <div class="rsidebar span_1_of_left">

                <!-- nivo slider -->
                <!-- <div class="top-border"></div> -->
                <div class="border">
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">

                            <!-- advertise miguelitos franshise -->
                            <a href="http://www.miguelitoscorp.com">
                                <img src="{{ asset('/images/koll-com-ph-advertise-miguelitos-franchise-front.png') }}" alt="Miguelitos Franchise">
                            </a>

                            <!-- advertise altavista -->
                            <a href="http://www.miguelitos-hotels.com/main/altavista-de-boracay.php">
                                <img src="{{ asset('/images/koll-room-for-rent-casa-de-miguelitos-altavista.png') }}" alt="Casa de Miguelitos">
                            </a>

                            <!-- advertise sunflower -->
                            <a href="http://sunflower.ph/joblist.php">
                                <img src="{{ asset('/images/koll-com-ph-advertise-sunflower-front.png') }}" alt="Sunflower Management Agency">
                            </a>

                            <!-- advertise salon and spa -->
                            <a href="http://micahelasalonandspa.com/promos.php">
                                <img src="{{ asset('/images/koll-micah-ela-salon-and-spa.png') }}" alt="Micah Ela Salon and Spa">
                            </a>

                            <!-- advertise micafe -->
                            <a href="http://www.micafe.ph/">
                                <img src="{{ asset('/images/koll-micafe-advertise.png') }}" alt="Micafe">
                            </a>

                        </div>
                    </div>
                    <a href=""><p class="ads-here-front">advertise here <i class="fa fa-angle-double-right"></i></p></a>
                </div>

                <!-- newsletter container -->
                <!-- <div class="top-border"></div> -->
                <div class="sidebar-bottom">

                    <!-- <h2 class="m_1">
                        Newsletters <br>
                        Sign up
                    </h2>
                    <div class="subscribe">

                        {{-- newsletter form --}}
                        {!! Form::open() !!}

                            {!! Form::text('emailnewsletter', '',
                                array('class' => 'textbox form-control',)) !!}

                            {{-- submit newsletter button --}}
                            {!! Form::submit('Subscribe',
                                        array('id' => 'newsletter-subscribe', 'class' => 'btn')) !!}

                        {!! Form::close() !!}

                    </div> -->

                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- right home -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-5118993513757687"
                         data-ad-slot="1886817855"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>

            </div>

        </div>
    </div>
</div>




@endsection
