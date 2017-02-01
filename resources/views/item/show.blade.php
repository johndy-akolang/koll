{{--
  array:17 [▼
    "id" => 4
    "guest_id" => 1
    "title" => "Fourth Advertisement"
    "price" => 10
    "condition" => "Brand New"
    "category" => "Buy and Sell"
    "description" => "Fourth Advertisement"
    "images" => "images/uploads/Drp7TK_materialdesign_principles_motion.png"
    "province" => "Batangas"
    "city" => "Baybay"
    "mobile" => 2147483647
    "slug" => "fourth-advertisement"
    "active" => 1
    "created_at" => "2016-02-16 16:42:51"
    "updated_at" => "2016-02-16 16:42:51"
    "user" => array:8 [▼
      "id" => 1
      "first_name" => "Christopher Rodney"
      "last_name" => "Santos"
      "mobile" => "09231690627"
      "email" => "christopher.rodney.santos@gmail.com"
      "role" => "guest"
      "created_at" => "2016-02-16 09:45:40"
      "updated_at" => "2016-02-16 09:45:40"
    ]
    "comments" => []
  ]
  --}}
@extends('app')

@section('title')
    {{ $item['slug'] }} | Koll.com.ph New and Free Classified Ads and Buy and Sell Website Philippines
@stop

@section('header_assets')
<meta name="description" content="{{ $item['title'] }}">

{{-- Opengraph metas --}}
<meta property="og:title" content="{{ $item['title'] }}" />
<meta property="og:description" content="{{ $item['description'] }}" />
<meta property="og:image" content="{{ $item['images'], 450, 298 }}" />
<meta property="og:type" content="product" />
{{-- / Opengraph metas --}}
@endsection

@section('content')

<div class="view">
    <div class="main">
        <div class="wrap">

            <!--  link direction top  -->
            <!-- <ul class="breadcrumb breadcrumb__t"></ul> -->

            <div class="cont span_2_of_3 mt-20">

                @if($item)
                    <!-- thumb images left -->
                    <div class="grid images_3_of_2">
                        <ul>
                            <li>
                                <a href="#">
                                    <img class="etalage_thumb_image img-responsive" alt="{{ $item['title'] }}" src="{{ asset($item['images']) }}" />
                                </a>
                            </li>

                            <!-- small thumbnails -->
                            <!-- <li>
                                <img class="etalage_thumb_image" src="{{ asset('/images/s-img1.jpg') }}" class="img-responsive" />
                                <img class="etalage_source_image" src="{{ asset('/images/s2.jpg') }}" class="img-responsive" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="{{ asset('/images/s-img2.jpg') }}" class="img-responsive" />
                                <img class="etalage_source_image" src="{{ asset('/images/s3.jpg') }}" class="img-responsive" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="{{ asset('/images/s-img3.jpg') }}" class="img-responsive" />
                                <img class="etalage_source_image" src="{{ asset('/images/s4.jpg') }}" class="img-responsive" />
                            </li> -->
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <!-- price and title item right -->
                    <div class="desc1 span_3_of_2">

                        <!-- item title post -->
                        <h3 class="m_3">{{ $item['title'] }}</h3>
                        <!-- <h3 class="m_3">Lorem ipsum dolor sit amet</h3> -->

                        <!-- item price -->
                        <p class="m_5">Php {{ $item['price'] }}</p>
                        <!-- <p class="m_5">Php 888</p> -->

                        <!-- count of viewing -->
                        <!-- <span class="views-item"><i class="fa fa-eye"></i>97 views</span> -->

                        <!-- social media share -->
                        <div class="brand-bg">

                            <!-- facebook share -->
                            <a class="facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebook-share-dialog','width=626,height=436');return false;">
                                <i class="fa fa-facebook circle-3"></i>
                                <span class="c-307">Share on Facebook</span>
                            </a>

                            <!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-564e8dba65341b7f" async="async"></script>
                            <div class="addthis_sharing_toolbox"></div> -->
                            <!-- twitter share -->
                            <!-- <a class="twitter" href="#">
                                <i class="fa fa-twitter circle-3"></i>
                            </a> -->

                            <!-- google+ share -->
                            <!-- <a class="google-plus" href="#">
                                <i class="fa fa-google-plus circle-3"></i>
                            </a> -->

                        </div>

                    </div>
                    <div class="clear"></div>

                    <!-- description item -->
                    <div class="toogle">
                        <h3 class="m_3">Description</h3>
                        <p class="m_text">
                            {{ $item['description'] }}
                        </p>
                        <!-- <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p> -->
                    </div>

                @else
                    Page does not exist
                @endif

                <!-- comments box -->
                @if($item)

                    <div class="toogle">

                        <div class="mb-25">
                            <h2>Leave a comment</h2>
                            @if(Auth::guest())
                                <p>Sign in to comment</p>
                            @else

                                <!-- form comment -->
                                <div class="commenter-container panel-body">
                                    <form method="post" action="/comments/add">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="on_post" value="{{ $item['id'] }}">
                                        <input type="hidden" name="slug" value="{{ $item['slug'] }}">
                                        <div class="form-group">
                                            <textarea required="required" placeholder="Enter comment here" name="body" class="form-control"></textarea>
                                        </div>
                                        <input type="submit" name='post_comment' class="btn btn-success" value = "Post"/>
                                    </form>
                                </div>

                            @endif

                        </div>

                        <!-- display comment here -->
                        <div class="" style="">

                            @if($item['comments'])
                                <div class="comments">
                                    <div class="panel panel-default comment border-clr-none">

                                        <!-- show comment display -->
                                        @foreach($item['comments'] as $comment)
                                            <div class="panel-heading comment-header border-clr-none">

                                                <!-- button to see list comment -->
                                                <h4 class="comment-user">
                                                    <span class="comment-username">{{ $comment['user']['first_name'] }}</span>
                                                    <small class="comment-date">{{ $comment['created_at'] }}</small>
                                                </h4>

                                                {{ $comment['body'] }}

                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>

                @endif

            </div>

            <!-- right side for seller information , featured ads and sponsored links -->
            <div class="span_1_of_3 floatRight wdth20per mt-20">

                <!-- owner of item seller info -->
                <div class="rsingle">
                    <h5 class="m_1">Seller Information</h5>

                    <!-- seller complete name -->
                    <!-- href="{{ url('/account/user/'.$item['guest_id']) }}" -->
                    <strong><a>{{ $item['user']['first_name'] }} {{ $item['user']['last_name'] }}</a></strong>

                    <!-- details information seller -->
                    <div class="details-seller floatLeft">
                        <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-mobile"></i>Mobile:</span><span class="deta-right txt-ind-10">{{ $item['user']['mobile'] }}</span></label>
                        <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-mobile"></i>Business No.:</span><span class="deta-right txt-ind-10">{{ $item['mobile'] }}</span></label>
                        <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-calendar-o"></i>Date Posted:</span><span class="deta-right txt-ind-10">{{ $item['created_at'] }}</span></label>
                        <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-info-circle"></i>Condition:</span><span class="deta-right txt-ind-10">{{ $item['condition'] }}</span></label>
                        <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-location-arrow"></i>City:</span><span class="deta-right txt-ind-10">{{ $item['city'] }}</span></label>

                        <!-- send inquiry to owner private -->
                        <a href="#" class="snd-msg-ownr btn input-green mt-20" data-toggle="modal" data-target="#sndmsgownr">Send Message</a>

                        <!-- modal form -->
                        <div class="modal fade" id="sndmsgownr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                               <span aria-hidden="true">&times;</span>
                                               <span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">
                                            Send message to {{ $item['user']['first_name'] }} {{ $item['user']['last_name'] }}
                                        </h4>
                                    </div>

                                    <!-- Modal Body -->
                                    <div class="modal-body">

                                        <!-- form for private message -->
                                        <!-- action="sendmail" -->
                                        <form method="post" action="sendmail">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="slug" value="{{ $item['slug'] }}">

                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" required="required" id="name" name="name" placeholder="Enter Name"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" required="required" id="email" name="email" placeholder="Enter email"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Message</label>
                                                <textarea class="form-control" id="message" name="message" cols="50" rows="10" required="required">

                                                </textarea>
                                            </div>

                                            <!-- Modal Footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="input-green btn btn-default">Submit</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <div class="clear"></div>
                </div>

                <!-- featured loop -->
                <!-- featured ads -->
                <div class="rsingle mt-rsingle-25">
                    <h5 class="m_1">Featured Ads</h5>
                    <ul class="list-unstyled floatLeft">
                        @foreach (array_chunk($featured->all(), 4) as $featuredSection)
                            @foreach ($featuredSection as $featuredItem)
                            <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                                <!-- <div class="featured-item">
                                    <a href="#">
                                        <img class="img-reponsive img-thumbnail pad-none" alt="" src="{{ asset($featuredItem->images) }}">
                                    </a>
                                </div> -->
                                <a href="{{ url('/item/'.$featuredItem->slug) }}">
                                    <h4>
                                        {!! $featuredItem->title !!}
                                    </h4>
                                    <p class="description-cut">
                                        {!! $featuredItem->description !!}
                                    </p>
                                </a>
                                <div class="clearfix"></div>
                            </li>
                            @endforeach
                        @endforeach
                    </ul>
                    <div class="clear"></div>
                </div>


                <!-- sponsored ads links -->
                <!-- <div class="rsingle mt-rsingle-25 ">
                    <h5 class="m_1">Sponsored Links</h5>

                  <div class="clear"></div>
                </div> -->

                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>


@endsection
