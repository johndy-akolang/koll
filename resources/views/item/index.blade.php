@extends('app')

@section('title')
    Manage item list | Koll.com.ph New and Free Classified Ads and Buy and Sell Website Philippines
@stop

@section('content')

<div class="manageitem">
    <div class="main">

        <div class="wrap mb-30">

            <!-- title manage ads -->
            <h3 class="manage-a">My Account</h3>
            <span class="sub-tit floatLeft width100">You can manage your Ads here</span>

            <!-- left side manage list item -->
            <div class="cont span_2_of_3">
                <div class="manage-item-list">
                    <div class="img-box-4 text-center clearfix">

	                      <!-- manage view list item -->
                        @foreach ($items as $item)
                            @if(!Auth::guest() && ($item->guest_id == Auth::user()->id || Auth::user()->is_seller()))
                    						<div class="col-md-4 col-sm-6 mb-15">
                                    <div class="img-box-4-item">

                                        <!-- image display -->
                                        <div class="image-style-one">
                                            <a href="{{ route('view-item', ['slug' => $item->slug]) }}">
                                                <img class="img-reponsive" src="{{ asset($item->images) }}" alt="">
                                            </a>
                                        </div>

                                        <!-- mange seller ads contente -->
                                        <div class="img-box-4-content">

                                            <!-- title item -->
                                            <h4 class="item-title" style="height: 29px;">
                                                <a href="{{ route('view-item', ['slug' => $item->slug]) }}" class="title-cut">{{ $item->title }}</a>
                                            </h4>

                                            <!-- item price -->
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">Php {{ $item->price }}</div>
                                            </div>

                                            <!-- item city or located -->
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 info-dta">
                                                    <a class="c-307 mb-10" href="#">{{ $item->city }}</a>
                                                </div>
                                            </div>

                                            <!-- display date posted item -->
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 info-dta">Posted on : {{ $item->created_at }}</div>
                                            </div>

                                            <!-- manage button item for update, repost or mark as sold -->
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 info-dta pad-top-bottom-10">
                                                    <a href="{{ route('user-items-edit', ['slug' => $item->slug]) }}" class="c-307 mb-10 cursor">Update</a>
                                                    <!-- <a class="c-307 mb-10 ml-10" href="#">Mark sold</a>
                                                    <a class="c-307 mb-10 ml-10 cursor">Re-post</a> -->
                                                </div>
                                            </div>

                                            <!-- boost item button for sponsored priorities -->
                                            <div class="row">
                                                <button class="btn input-green c-fff" type="submit" data-toggle="modal" data-target="#boostads">Boost Ads</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <div class="clear"></div>

                        <!-- render item pagination -->
                        {!! $items->render() !!}

						            <!-- end  -->

                    </div>
                </div>
            </div>

            <!-- right side featured ads -->
            <!-- featured ads -->
            <!-- <div class="span_1_of_3 floatRight wdth20per">
                <div class="rsingle mt-rsingle-25 ">
                    <h5 class="m_1">Featured Ads</h5>

                    <ul class="list-unstyled floatLeft">
                        <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                            <a href="#">
                                <img class="img-reponsive img-thumbnail" alt="black Ferrari" src="http://whiz.dbcinfotech.net/uploads/thumbs/ferrari.jpg">
                            </a>
                            <h4>
                                <a hef="#">Black Ferrari</a>
                            </h4>
                            <div class="price">
                                <strong>Price : 80,000.00</strong>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                            <a href="#">
                                <img class="img-reponsive img-thumbnail" alt="Home Theatre" src="http://whiz.dbcinfotech.net/uploads/thumbs/led_tv.jpg">
                            </a>
                            <h4>
                                <a hef="#">Home Theatre</a>
                            </h4>
                            <div class="price">
                                <strong>Price : 3,000.00</strong>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                            <a href="#">
                                <img class="img-responsive img-thumbnail" alt="Puppy" src="http://whiz.dbcinfotech.net/uploads/thumbs/dog.jpg">
                            </a>
                            <h4>
                                <a hef="#">Puppy</a>
                            </h4>
                            <div class="price">
                                <strong>Price : 200.00</strong>
                            </div>
                            <div class="clearfix"></div>
                        </li>

                    </ul>

                    <div class="clear"></div>
                </div>
            </div>  -->

        </div>
    </div>
</div>

@endsection
