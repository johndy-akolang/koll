@extends('app')


@section('content')

@extends('app')


@section('content')

<div class="view-message">
    <div class="main">

        <div class="wrap">

            <div class="content container">

                {{-- title inbox --}}
                <h2 class="page-title">Private Messages<span>(Messages regarding to your ads)</span></h2>

                {{-- body inbox --}}
                <div class="row">

                    {{-- left side list inbox --}}
                    <div class="col-md-3 col-lg-2">

                        {{-- compose new message --}}
                        {{--<a href="#" id="compose-btn" class="btn btn-danger btn-block">Compose</a>--}}

                        <ul id="folders-list" class="nav nav-pills nav-stacked nav-email-folders mt-15">
                            <li class="active">
                                <a href="/message/inbox">Inbox</a>
                            </li>
                            <li class="">
                                <a href="/message/sent">Sent</a>
                            </li>
                        </ul>

                    </div>

                    {{-- right side view message --}}
                    <div class="col-md-9 col-lg-10">

                        {{-- pagination inbox --}}
                        <div class="clearfix mb-xs">

                            {{-- back arrow btn --}}
                            <a id="back-btn" class="btn btn-transparent btn-sm width-50 floatLeft hide" href="#">
                                <i class="fa fa-angle-left fa-lg"></i>
                            </a>

                            {{-- pagination list --}}
                            <div id="folders-stats" class="floatRight">
                                <p class="widget-email-count">Showing 1 -10 of 96 messages</p>
                                <ul class="pagination pagination-sm widget-email-pagination">
                                    <li class="prev disabled">
                                        <a href="#"><i class="fa fa-chevron-left"></i></a>
                                    </li>
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li class="next">
                                        <a href="#"><i class="fa fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        {{-- message inbox container --}}
                        <section class="widget widget-email">

                            <header id="widget-email-header" class="mb-sm">
                                <h4>Title classified ads</h4>
                            </header>

                            <div id="mailbox-content" class="widget-table-overflow">
                                <div id="email-view" class="email-view">

                                    {{-- email header --}}
                                    <div class="email-details clearfix">
                                        <div class="email-details-content">
                                            <span class="thumb thumb-sm floatLeft">
                                                <img src="/images/13.jpg" class="img-circle" title="PM">
                                            </span>
                                            <div class="floatLeft">
                                                <strong class="inq">donnieboy</strong>
                                            </div>
                                            <div class="email-actions floatRight">
                                                <div class="btn-group">
                                                    <button id="email-opened-reply" class="btn btn-sm btn-transparent">
                                                        <i class="fa fa-reply mr-xs"></i>
                                                        Reply
                                                    </button>
                                                </div>
                                            </div>
                                            <time class="email-date floatRight">Jul 31 (720 days ago)</time>
                                        </div>
                                    </div>

                                    {{-- email body --}}
                                    <div class="email-body">
                                        <p>Lose john poor same it case do year we. Full how way even the sigh. Extremely nor furniture fat questions now provision incommode preserved. Our side fail find like now. Discovered travelling for insensible partiality unpleasing impossible she. Sudden up my excuse to suffer ladies though or. Bachelor possible marianne directly confined relation as on he.</p>
                                    </div>

                                    <div id="reply-area" class="commenter-container panel-body" style="display: none;">

                                        {!! Form::open() !!}

                                            <div class="form-group comment">

                                                {!! Form::textarea('notes', null, ['class' => 'field form-control']) !!}

                                                <button class="btn mt-15 input-blue" type="submit">Reply</button>

                                            </div>

                                        {!! Form::close() !!}

                                    </div>

                                </div>
                            </div>

                        </section>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>



@endsection











































@endsection